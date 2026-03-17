import { ref, computed } from "vue";
import { useRoute, useRouter } from "vue-router";
import { ModuleConfig } from "../types/module-config";

/**
 * Universal composable for any CRUD module
 * Handles all common operations like fetching, filtering, pagination
 */
export const useModuleManager = (moduleConfig: ModuleConfig, store: any) => {
  const route = useRoute();
  const router = useRouter();
  const all = computed(() => store.all);
  const item = computed(() => store.item);
  const isLoading = computed(() => store.is_loading);
  const search_key = ref("");

  /**
   * Initialize module - fetch data on mount
   */
  const initializeModule = async () => {
    await store.get_all();
  };

  /**
   * Search handler
   */
  const set_search_key = (event: Event) => {
    const target = event.target as HTMLInputElement;
    search_key.value = target.value;
    store.set_search_key(target.value);
  };

  /**
   * Go to create page
   */
  const goToCreate = () => {
    router.push({
      name: `${moduleConfig.route_prefix}Create`,
      params: { module: moduleConfig.route_path },
    });
  };

  /**
   * Go to edit page
   */
  const goToEdit = (id: number) => {
    router.push({
      name: `${moduleConfig.route_prefix}Edit`,
      params: { module: moduleConfig.route_path, id },
    });
  };

  /**
   * Go to details page
   */
  const goToDetails = (id: number) => {
    router.push({
      name: `${moduleConfig.route_prefix}Details`,
      params: { module: moduleConfig.route_path, id },
    });
  };

  /**
   * Delete item
   */
  const deleteItem = async (id: number) => {
    if (confirm("Are you sure you want to delete this item?")) {
      try {
        await store.soft_delete(id);
      } catch (error) {
        console.error("Error deleting item:", error);
      }
    }
  };

  /**
   * Toggle status
   */
  const toggleStatus = async (id: number, currentStatus: string) => {
    const newStatus = currentStatus === "active" ? "inactive" : "active";
    try {
      await store.update_status(id, newStatus);
    } catch (error) {
      console.error("Error updating status:", error);
    }
  };

  /**
   * Export to CSV
   */
  const exportToCSV = () => {
    if (!store.all?.data?.length) {
      alert("No data to export");
      return;
    }

    const data = store.all.data;
    const headers = moduleConfig.table_header_data;
    const csv = [
      headers.join(","),
      ...data.map((row: any) =>
        headers.map((header) => row[header] || "").join(",")
      ),
    ].join("\n");

    const blob = new Blob([csv], { type: "text/csv" });
    const url = window.URL.createObjectURL(blob);
    const a = document.createElement("a");
    a.href = url;
    a.download = `${moduleConfig.module_name}-export.csv`;
    a.click();
  };

  return {
    // Data
    all,
    item,
    isLoading,

    // Methods
    initializeModule,
    set_search_key,
    goToCreate,
    goToEdit,
    goToDetails,
    deleteItem,
    toggleStatus,
    exportToCSV,

    // Store actions
    ...store,
  };
};

export default useModuleManager;
