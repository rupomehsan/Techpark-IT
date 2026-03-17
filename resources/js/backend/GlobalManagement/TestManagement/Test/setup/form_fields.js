/**
 * Test Management Form Fields
 * Defines all fields for creating and editing tests
 */

export default [
  {
    name: "slug",
    label: "Test Slug",
    type: "text",
    value: "",
    required: true,
    hint: "Unique identifier for the test (auto-generated if left blank)",
  },
  {
    name: "status",
    label: "Status",
    type: "select",
    value: "active",
    required: true,
    data_list: [
      { label: "Active", value: "active" },
      { label: "Inactive", value: "inactive" },
    ],
  },
];
