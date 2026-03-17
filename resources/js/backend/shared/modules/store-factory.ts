import { defineStore } from "pinia";
import { anyObject } from "@/common_types/object";
import { ModuleConfig } from "../types/module-config";
import fetchDataAndUpdateCache from "../helpers/http";

/**
 * Default initial state for any CRUD module store
 */
const createInitialState = (config: ModuleConfig) => ({
  // Loading states
  is_loading: false,
  loading_text: "loading..",

  // Data storage
  all: {} as anyObject,
  item: {} as anyObject,
  url: "",

  // Filtering and sorting
  select_fields: config.select_fields,
  sort_by_cols: config.sort_by_cols,
  sort_by_col: "id",
  sort_type: "DESC",
  start_date: "",
  end_date: "",

  // Filter criteria
  filter_criteria: {} as anyObject,
  all_data_count: 0,
  active_data_count: 0,
  inactive_data_count: 0,
  trased_data_count: 0,

  // Pagination
  page: 1,
  paginate: 10,
  search_key: "",

  // UI states
  cached: true,
  only_latest_data: true,
  show_details_canvas: false,
  show_filter_canvas: false,
  show_update_status_canvas: false,
  selected: [] as any[],

  // Temporary storage
  filter_start_date: "",
  filter_end_date: "",
});

/**
 * Generic async action builder
 */
const createAsyncAction = (
  actionName: string,
  actionFn: (state: any, config: ModuleConfig) => Promise<any>
) => {
  return async function (this: any) {
    return actionFn(this, this.$moduleConfig);
  };
};

/**
 * Create a generic action for fetching all data
 */
const createGetAllAction = (config: ModuleConfig) => {
  return async function (this: any) {
    this.is_loading = true;
    this.loading_text = "loading...";

    try {
      const { api_host, api_version, api_end_point } = config;
      const params = {
        page: this.page,
        paginate: this.paginate,
        sort_by_col: this.sort_by_col,
        sort_type: this.sort_type,
        search: this.search_key,
        select_fields: this.select_fields,
        filter_criteria: this.filter_criteria,
      };

      const response = await fetchDataAndUpdateCache(
        `${api_host}/api/${api_version}/${api_end_point}`,
        params
      );

      this.all = response.data;
      this.all_data_count = response.meta?.total || 0;
      this.active_data_count = response.meta?.active_count || 0;
      this.inactive_data_count = response.meta?.inactive_count || 0;

      return response;
    } catch (error) {
      console.error(`Error fetching ${config.module_name}:`, error);
      throw error;
    } finally {
      this.is_loading = false;
    }
  };
};

/**
 * Create a generic action for creating data
 */
const createCreateAction = (config: ModuleConfig) => {
  return async function (this: any, formData: FormData) {
    this.is_loading = true;
    this.loading_text = "Creating...";

    try {
      const { api_host, api_version, api_end_point } = config;
      const response = await fetch(
        `${api_host}/api/${api_version}/${api_end_point}`,
        {
          method: "POST",
          body: formData,
        }
      );

      if (response.ok) {
        await this.get_all();
        return await response.json();
      } else {
        throw new Error(`Failed to create ${config.module_name}`);
      }
    } catch (error) {
      console.error(`Error creating ${config.module_name}:`, error);
      throw error;
    } finally {
      this.is_loading = false;
    }
  };
};

/**
 * Create a generic store factory
 */
export const createModuleStore = (config: ModuleConfig) => {
  return defineStore(config.store_prefix, {
    state: () => createInitialState(config),

    getters: {
      /**
       * Check if there's any data
       */
      hasData: (state) => {
        return state.all?.data && state.all.data.length > 0;
      },

      /**
       * Get paginated data
       */
      paginatedData: (state) => {
        return state.all?.data || [];
      },

      /**
       * Get current item
       */
      currentItem: (state) => {
        return state.item;
      },

      /**
       * Check loading state
       */
      isLoading: (state) => {
        return state.is_loading;
      },
    },

    actions: {
      // Fetch all data
      async get_all() {
        return await createGetAllAction(config).call(this);
      },

      // Create new item
      async create(formData: FormData) {
        return await createCreateAction(config).call(this, formData);
      },

      // Update item
      async update(id: number, formData: FormData) {
        this.is_loading = true;
        try {
          const { api_host, api_version, api_end_point } = config;
          const response = await fetch(
            `${api_host}/api/${api_version}/${api_end_point}/${id}`,
            {
              method: "POST",
              body: formData,
            }
          );

          if (response.ok) {
            await this.get_all();
            return await response.json();
          }
        } finally {
          this.is_loading = false;
        }
      },

      // Get item details
      async details(id: number) {
        this.is_loading = true;
        try {
          const { api_host, api_version, api_end_point } = config;
          const response = await fetch(
            `${api_host}/api/${api_version}/${api_end_point}/${id}`
          );
          this.item = await response.json();
          return this.item;
        } finally {
          this.is_loading = false;
        }
      },

      // Update status
      async update_status(id: number, status: string) {
        try {
          const { api_host, api_version, api_end_point } = config;
          const response = await fetch(
            `${api_host}/api/${api_version}/${api_end_point}/${id}/status`,
            {
              method: "PATCH",
              headers: { "Content-Type": "application/json" },
              body: JSON.stringify({ status }),
            }
          );
          if (response.ok) {
            await this.get_all();
          }
        } catch (error) {
          console.error(`Error updating status:`, error);
        }
      },

      // Soft delete
      async soft_delete(id: number) {
        try {
          const { api_host, api_version, api_end_point } = config;
          await fetch(
            `${api_host}/api/${api_version}/${api_end_point}/${id}`,
            { method: "DELETE" }
          );
          await this.get_all();
        } catch (error) {
          console.error(`Error deleting:`, error);
        }
      },

      // Restore item
      async restore(id: number) {
        try {
          const { api_host, api_version, api_end_point } = config;
          await fetch(
            `${api_host}/api/${api_version}/${api_end_point}/${id}/restore`,
            { method: "PATCH" }
          );
          await this.get_all();
        } catch (error) {
          console.error(`Error restoring:`, error);
        }
      },

      // Permanent delete
      async destroy(id: number) {
        try {
          const { api_host, api_version, api_end_point } = config;
          await fetch(
            `${api_host}/api/${api_version}/${api_end_point}/${id}/destroy`,
            { method: "DELETE" }
          );
          await this.get_all();
        } catch (error) {
          console.error(`Error destroying:`, error);
        }
      },

      // Bulk action
      async bulk_action(ids: number[], action: string) {
        try {
          const { api_host, api_version, api_end_point } = config;
          const response = await fetch(
            `${api_host}/api/${api_version}/${api_end_point}/bulk`,
            {
              method: "POST",
              headers: { "Content-Type": "application/json" },
              body: JSON.stringify({ ids, action }),
            }
          );
          if (response.ok) {
            await this.get_all();
          }
        } catch (error) {
          console.error(`Error bulk action:`, error);
        }
      },

      // Filter actions
      set_filter_criteria(criteria: anyObject) {
        this.filter_criteria = criteria;
        this.page = 1;
      },

      reset_filter_criteria() {
        this.filter_criteria = {};
        this.page = 1;
      },

      set_search_key(key: string) {
        this.search_key = key;
        this.page = 1;
      },

      // Pagination actions
      set_page(page: number) {
        this.page = page;
      },

      set_paginate(paginate: number) {
        this.paginate = paginate;
      },

      // UI state actions
      set_show_details_canvas(show: boolean = true) {
        this.show_details_canvas = show;
      },

      set_show_filter_canvas(show: boolean = true) {
        this.show_filter_canvas = show;
      },

      set_item(item: anyObject) {
        this.item = item;
      },

      clear_selected() {
        this.selected = [];
      },

      toggle_item_selection(id: number) {
        const index = this.selected.indexOf(id);
        if (index > -1) {
          this.selected.splice(index, 1);
        } else {
          this.selected.push(id);
        }
      },

      set_only_latest_data(only: boolean) {
        this.only_latest_data = only;
      },

      set_sort(col: string, type: string = "DESC") {
        this.sort_by_col = col;
        this.sort_type = type;
        this.page = 1;
      },

      set_status(status: string) {
        this.status = status;
        this.page = 1;
      },
    },
  });
};

export default createModuleStore;
