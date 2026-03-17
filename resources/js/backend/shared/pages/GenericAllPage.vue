<template>
  <div>
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header">
            <div class="row align-items-center">
              <!-- Title Section -->
              <div class="col-12 col-md-3 mb-2 mb-md-0">
                <h5 class="text-capitalize mb-0">
                  {{ moduleConfig.all_page_title || moduleConfig.page_title }}
                </h5>
              </div>

              <!-- Search Input -->
              <div class="col-12 col-md-6 mb-2 mb-md-0">
                <input
                  class="form-control"
                  @keyup="set_search_key"
                  placeholder="Search"
                />
              </div>

              <!-- Action Buttons -->
              <div class="col-12 col-md-3 text-md-right text-sm-left">
                <button
                  class="btn btn-outline-success btn-sm me-2"
                  @click="set_show_filter_canvas"
                >
                  <i class="fa fa-gear mx-2"></i>Filter
                </button>
                <button
                  class="btn btn-primary btn-sm"
                  @click="goToCreate"
                >
                  <i class="fa fa-plus mx-2"></i>Create
                </button>
              </div>
            </div>
          </div>

          <div class="card-body">
            <div
              v-if="isLoading"
              class="text-center py-5"
            >
              <div class="spinner-border" role="status">
                <span class="visually-hidden">Loading...</span>
              </div>
            </div>

            <div
              v-else
              class="table-responsive table_responsive card_body_fixed_height"
            >
              <table
                v-if="all?.data?.length"
                class="table table-hover text-center table-bordered"
              >
                <thead>
                  <tr>
                    <th>
                      <input
                        type="checkbox"
                        @change="toggleSelectAll"
                      />
                    </th>
                    <th
                      v-for="header in moduleConfig.table_header_data"
                      :key="header"
                      class="text-capitalize"
                    >
                      {{ header }}
                    </th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <tr
                    v-for="row in all.data"
                    :key="row.id"
                  >
                    <td>
                      <input
                        type="checkbox"
                        :checked="selected.includes(row.id)"
                        @change="toggle_item_selection(row.id)"
                      />
                    </td>
                    <td
                      v-for="header in moduleConfig.table_header_data"
                      :key="header"
                    >
                      <span v-if="header === 'status'" class="badge"
                        :class="row[header] === 'active' ? 'bg-success' : 'bg-danger'"
                      >
                        {{ row[header] }}
                      </span>
                      <span v-else>{{ row[header] }}</span>
                    </td>
                    <td>
                      <button
                        class="btn btn-sm btn-info me-1"
                        @click="goToDetails(row.id)"
                        title="View Details"
                      >
                        <i class="fa fa-eye"></i>
                      </button>
                      <button
                        class="btn btn-sm btn-warning me-1"
                        @click="goToEdit(row.id)"
                        title="Edit"
                      >
                        <i class="fa fa-edit"></i>
                      </button>
                      <button
                        class="btn btn-sm btn-danger"
                        @click="deleteItem(row.id)"
                        title="Delete"
                      >
                        <i class="fa fa-trash"></i>
                      </button>
                    </td>
                  </tr>
                </tbody>
              </table>

              <div v-else class="alert alert-info text-center">
                No data available
              </div>
            </div>
          </div>

          <!-- Pagination -->
          <div v-if="all?.data?.length" class="card-footer">
            <nav
              aria-label="Page navigation"
              class="d-flex gap-2 align-items-center"
            >
              <ul class="pagination my-0">
                <li
                  :class="['page-item', { disabled: page === 1 }]"
                >
                  <button
                    class="page-link"
                    @click="set_page(page - 1)"
                    :disabled="page === 1"
                  >
                    Previous
                  </button>
                </li>

                <li
                  v-for="p in totalPages"
                  :key="p"
                  :class="['page-item', { active: page === p }]"
                >
                  <button
                    class="page-link"
                    @click="set_page(p)"
                  >
                    {{ p }}
                  </button>
                </li>

                <li
                  :class="['page-item', { disabled: page >= totalPages }]"
                >
                  <button
                    class="page-link"
                    @click="set_page(page + 1)"
                    :disabled="page >= totalPages"
                  >
                    Next
                  </button>
                </li>
              </ul>

              <div class="ms-auto">
                <span class="text-muted">
                  Total: {{ all_data_count }} items | Page {{ page }} of
                  {{ totalPages }}
                </span>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup lang="ts">
import { computed, onMounted } from "vue";
import { useModuleManager } from "@shared/composables/useModuleManager";
import { ModuleConfig } from "@shared/types/module-config";

interface Props {
  moduleConfig: ModuleConfig;
  store: any;
}

const props = defineProps<Props>();

const {
  all,
  isLoading,
  set_search_key,
  set_show_filter_canvas,
  goToCreate,
  goToDetails,
  goToEdit,
  deleteItem,
  initializeModule,
  page,
  paginate,
  all_data_count,
  set_page,
  selected,
  toggle_item_selection,
} = useModuleManager(props.moduleConfig, props.store);

const totalPages = computed(() =>
  Math.ceil(all_data_count / paginate)
);

const toggleSelectAll = (event: Event) => {
  const target = event.target as HTMLInputElement;
  if (target.checked) {
    all.value?.data?.forEach((row: any) => {
      if (!selected.includes(row.id)) {
        selected.push(row.id);
      }
    });
  } else {
    selected.length = 0;
  }
};

onMounted(() => {
  initializeModule();
});
</script>

<style scoped>
.card_body_fixed_height {
  max-height: 500px;
  overflow-y: auto;
}

.table-hover tbody tr:hover {
  background-color: #f5f5f5;
}

.btn-group-sm .btn {
  padding: 0.25rem 0.5rem;
}
</style>
