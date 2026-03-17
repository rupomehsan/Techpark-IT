import app_config from "@config/app_config";
import { ModuleConfig } from "@shared/types/module-config";
import form_fields from "./form_fields";

/**
 * Test Management Module Configuration
 * Demonstrates the optimized shared architecture
 */

const setup: ModuleConfig = {
  // Identifiers
  prefix: "Test",
  module_name: "test",
  store_prefix: "test",
  route_prefix: "Test",
  route_path: "test",

  // API Configuration
  api_host: app_config.api_host,
  api_version: app_config.api_version,
  api_end_point: "tests", // Matches backend endpoint

  // Permissions
  permission: ["admin", "super_admin"],

  // Fields Configuration
  select_fields: [
    "id",
    "slug",
    "status",
    "created_at",
    "updated_at",
    "deleted_at",
  ],

  sort_by_cols: [
    "id",
    "slug",
    "status",
    "created_at",
  ],

  table_header_data: [
    "id",
    "slug",
    "status",
    "created_at",
  ],

  table_row_data: [
    "id",
    "slug",
    "status",
    "created_at",
  ],

  // Labels
  layout_title: "Test Management",
  page_title: "Test Management",
  all_page_title: "All Tests",
  create_page_title: "Create Test",
  edit_page_title: "Edit Test",
  details_page_title: "Test Details",

  // Form Fields
  form_fields,
};

export default setup;
