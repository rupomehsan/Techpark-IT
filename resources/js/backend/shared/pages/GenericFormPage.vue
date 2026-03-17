<template>
  <div>
    <div class="row">
      <div class="col-md-8 offset-md-2">
        <div class="card">
          <div class="card-header">
            <h5 class="text-capitalize">
              {{ isEditMode
                ? moduleConfig.edit_page_title || `Edit ${moduleConfig.prefix}`
                : moduleConfig.create_page_title || `Create ${moduleConfig.prefix}`
              }}
            </h5>
          </div>

          <div class="card-body">
            <form @submit.prevent="handleSubmit">
              <div
                v-for="field in moduleConfig.form_fields"
                :key="field.name"
                class="mb-3"
              >
                <!-- Text Input -->
                <div v-if="['text', 'email', 'number', 'date', 'datetime-local'].includes(field.type)">
                  <label :for="field.name" class="form-label text-capitalize">
                    {{ field.label }}
                  </label>
                  <input
                    :id="field.name"
                    v-model="formData[field.name]"
                    :type="field.type"
                    class="form-control"
                    :required="field.required"
                  />
                </div>

                <!-- Textarea -->
                <div v-else-if="field.type === 'textarea'">
                  <label :for="field.name" class="form-label text-capitalize">
                    {{ field.label }}
                  </label>
                  <textarea
                    :id="field.name"
                    v-model="formData[field.name]"
                    class="form-control"
                    rows="4"
                    :required="field.required"
                  ></textarea>
                </div>

                <!-- Select Dropdown -->
                <div v-else-if="field.type === 'select'">
                  <label :for="field.name" class="form-label text-capitalize">
                    {{ field.label }}
                  </label>
                  <select
                    :id="field.name"
                    v-model="formData[field.name]"
                    class="form-control"
                    :required="field.required"
                  >
                    <option value="">-- Select --</option>
                    <option
                      v-for="option in field.data_list || []"
                      :key="option.value"
                      :value="option.value"
                    >
                      {{ option.label }}
                    </option>
                  </select>
                </div>

                <!-- File Input -->
                <div v-else-if="field.type === 'file'">
                  <label :for="field.name" class="form-label text-capitalize">
                    {{ field.label }}
                  </label>
                  <input
                    :id="field.name"
                    type="file"
                    class="form-control"
                    @change="handleFileInput"
                    :required="field.required && !isEditMode"
                  />
                  <small class="text-muted">{{ field.hint }}</small>
                </div>

                <!-- Checkbox -->
                <div v-else-if="field.type === 'checkbox'">
                  <div class="form-check">
                    <input
                      :id="field.name"
                      v-model="formData[field.name]"
                      type="checkbox"
                      class="form-check-input"
                    />
                    <label :for="field.name" class="form-check-label">
                      {{ field.label }}
                    </label>
                  </div>
                </div>
              </div>

              <!-- Submit Buttons -->
              <div class="d-flex gap-2 justify-content-end">
                <button
                  type="button"
                  class="btn btn-secondary"
                  @click="goBack"
                >
                  Cancel
                </button>
                <button
                  type="submit"
                  class="btn btn-primary"
                  :disabled="isLoading"
                >
                  <span
                    v-if="isLoading"
                    class="spinner-border spinner-border-sm me-2"
                    role="status"
                    aria-hidden="true"
                  ></span>
                  {{ isEditMode ? "Update" : "Create" }}
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup lang="ts">
import { ref, computed, reactive, onMounted } from "vue";
import { useRouter, useRoute } from "vue-router";
import { ModuleConfig } from "@shared/types/module-config";

interface Props {
  moduleConfig: ModuleConfig;
  store: any;
}

const props = defineProps<Props>();
const router = useRouter();
const route = useRoute();

const formData = reactive({} as any);
const isEditMode = computed(() => !!route.params.id);
const isLoading = computed(() => props.store.is_loading);

const handleSubmit = async () => {
  const formDataObj = new FormData();

  // Get file input if exists
  const fileInputs = document.querySelectorAll('input[type="file"]');
  fileInputs.forEach((input: any) => {
    if (input.files && input.files.length > 0) {
      formDataObj.append(input.name, input.files[0]);
    }
  });

  // Add other form data
  Object.keys(formData).forEach((key) => {
    if (formData[key] !== null && formData[key] !== undefined) {
      formDataObj.append(key, formData[key]);
    }
  });

  try {
    if (isEditMode.value) {
      await props.store.update(route.params.id as any, formDataObj);
    } else {
      await props.store.create(formDataObj);
    }

    router.push({
      name: `${props.moduleConfig.route_prefix}All`,
      params: { module: props.moduleConfig.route_path },
    });
  } catch (error) {
    console.error("Form submission error:", error);
  }
};

const handleFileInput = (e: Event) => {
  const target = e.target as HTMLInputElement;
  if (target.files && target.files.length > 0) {
    const input = target as any;
    formData[input.name] = target.files[0];
  }
};

const goBack = () => {
  router.push({
    name: `${props.moduleConfig.route_prefix}All`,
    params: { module: props.moduleConfig.route_path },
  });
};

const loadItemData = async () => {
  if (isEditMode.value) {
    await props.store.details(route.params.id as any);
    Object.assign(formData, props.store.item);
  } else {
    // Initialize form with default values
    props.moduleConfig.form_fields.forEach((field) => {
      formData[field.name] = field.value || "";
    });
  }
};

onMounted(() => {
  loadItemData();
});
</script>

<style scoped>
.form-control,
.form-select {
  border-radius: 0.25rem;
}

.text-capitalize {
  text-transform: capitalize;
}
</style>
