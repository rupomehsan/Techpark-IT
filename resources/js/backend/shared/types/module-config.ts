/**
 * Universal Module Configuration Type
 * Used to define any CRUD management module
 */

export interface FormField {
  name: string;
  label: string;
  type: string;
  value?: any;
  data_list?: any[];
  [key: string]: any;
}

export interface ModuleConfig {
  // Identifiers
  prefix: string;                    // e.g., "Blog"
  module_name: string;               // e.g., "blog"
  store_prefix: string;              // e.g., "blog" (pinia store name)
  route_prefix: string;              // e.g., "Blog"
  route_path: string;                // e.g., "blog"

  // API Configuration
  api_host: string;
  api_version: string;
  api_end_point: string;             // e.g., "blogs", "blog-categories"

  // Permissions
  permission: string[];              // e.g., ["admin", "super_admin"]

  // Fields Configuration
  select_fields: string[];           // Fields to select from API
  sort_by_cols: string[];            // Columns available for sorting
  table_header_data: string[];       // Columns to display in table header
  table_row_data: string[];          // Columns to display in table rows

  // Labels
  layout_title: string;              // e.g., "Blog Management"
  page_title: string;                // e.g., "Blog Management"
  all_page_title?: string;
  create_page_title?: string;
  edit_page_title?: string;
  details_page_title?: string;

  // Form Fields
  form_fields: FormField[];

  // Optional advanced fields
  [key: string]: any;
}

export interface ModuleRegistry {
  [moduleKey: string]: ModuleConfig;
}
