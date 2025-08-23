import app_config from "@config/app_config";
import setup_type from "./setup_type";

const prefix: string = "Vocabulary";

const setup: setup_type = {
  prefix,
  permission: ["admin", "super_admin"],

  api_host: app_config.api_host,
  api_version: app_config.api_version,
  api_end_point: "vocabularies",

  module_name: "vocabulary",
  store_prefix: "vocabulary",
  route_prefix: "Vocabulary",
  route_path: "vocabulary",

  select_fields: [
    "id",
    "word",
    "pronunciation",
   
    "meaning",
    "label",
    "part_of_speech",
    "example_sentence",
    "synonyms",
    "antonyms",
    "keyword",
    "status",
    "slug",
    "created_at",
    "deleted_at",
  ],

  sort_by_cols: [
    "id",
    "word",
    "pronunciation",
   
    "label",
    "meaning",
    "part_of_speech",
    "example_sentence",
    "synonyms",
    "antonyms",
    "keyword",
    "status",
    "created_at",
  ],
  table_header_data: [
    "id",
    "word",
    "pronunciation",
   
    "meaning",
    "label",
    "part_of_speech",
  
    "status",
    "created_at",
  ],
  table_row_data: [
    "id",
    "word",
    "pronunciation",
   
    "meaning",
    "label",
    "part_of_speech",
  
    "status",
    "created_at",
  ],
  quick_view_data: [
    "id",
    "word",
   
    "label",
    "meaning",
    "part_of_speech",
    "example_sentence",
    "synonyms",
    "antonyms",
    "keyword",
    "status",
    "created_at",
    "pronunciation"
  ],

  layout_title: prefix + " Management",
  page_title: `${prefix} Management`,

  all_page_title: "All " + prefix,
  details_page_title: "Details " + prefix,
  create_page_title: "Create " + prefix,
  edit_page_title: "Edit " + prefix,
};

export default setup;
