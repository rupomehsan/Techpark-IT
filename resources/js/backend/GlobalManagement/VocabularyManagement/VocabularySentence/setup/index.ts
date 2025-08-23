
import app_config from "@config/app_config";
import setup_type from "./setup_type";

const prefix: string = "VocabularySentence";

const setup: setup_type = {
    prefix,
    permission: ["admin", "super_admin"],

    api_host: app_config.api_host,
    api_version: app_config.api_version,
    api_end_point: "vocabulary-sentences",

    module_name: "vocabulary-sentence",
    store_prefix: "vocabulary_sentence",
    route_prefix: "VocabularySentence",
    route_path: "vocabulary-sentence",

    select_fields: [
        "id",
        "word",
            "language",
            "label",
            "meaning",
        "status",
        "slug",
        "created_at",
        'deleted_at'
    ],

    sort_by_cols: [
        "id",
        "word",
            "language",
            "label",
            "meaning",
        "status",
        "created_at",
    ],
    table_header_data: [
        "id",
        "word",
            "language",
            "label",
            "meaning",
        "status",
        "created_at",
    ],
    table_row_data: [
        "id",
        "word",
            "language",
            "label",
            "meaning",
        "status",
        "created_at",
    ],
    quick_view_data: [
        "id",
        "word",
            "language",
            "label",
            "meaning",
        "status",
        "created_at",
    ],

    layout_title: prefix + " Management",
    page_title: `${prefix} Management`,

    all_page_title: "All " + prefix,
    details_page_title: "Details " + prefix,
    create_page_title: "Create " + prefix,
    edit_page_title: "Edit " + prefix,
};

export default setup;
