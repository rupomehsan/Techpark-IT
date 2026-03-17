# Frontend Management Architecture Optimization Guide

## Overview

This guide explains how to use the new optimized architecture for CRUD management modules, which eliminates duplication and provides reusable components, composables, and a dynamic store factory.

## Architecture Components

### 1. **Module Registry** (`shared/modules/registry.ts`)

Centralizes all module configurations in one place. Instead of having setup files scattered across modules, they're registered globally.

```typescript
import { moduleRegistry, getModuleConfig } from "@shared/modules/registry";

// Get any module configuration
const blogConfig = getModuleConfig("blog");
const categoryConfig = getModuleConfig("blog_category");
```

### 2. **Store Factory** (`shared/modules/store-factory.ts`)

Dynamically generates Pinia stores based on module configuration instead of writing repetitive store code.

**Before (Duplication):**
```
Blog/store/index.ts (~500+ lines)
BlogCategory/store/index.ts (~500+ lines)
BlogWriter/store/index.ts (~500+ lines)
```

**After (Single Factory):**
```typescript
// In Blog setup's store initialization
import { createModuleStore } from "@shared/modules/store-factory";
import blogSetup from "./index";

export const useBlogStore = createModuleStore(blogSetup);
```

### 3. **Composables** (`shared/composables/`)

#### `useModuleManager`

Universal composable that handles all common CRUD operations:

```typescript
import { useModuleManager } from "@shared/composables/useModuleManager";
import { useBlogStore } from "@modules/Blog/store";
import blogSetup from "@modules/Blog/setup";

const {
  all,              // All items
  item,             // Current item
  isLoading,        // Loading state
  initializeModule, // Fetch data
  set_search_key,   // Search
  goToCreate,       // Navigate to create
  goToEdit,         // Navigate to edit
  goToDetails,      // Navigate to details
  deleteItem,       // Delete with confirmation
  toggleStatus,     // Toggle active/inactive
  exportToCSV,      // Export to CSV
  // Plus all store actions
} = useModuleManager(blogSetup, useBlogStore());
```

### 4. **Generic Pages** (`shared/pages/`)

#### `GenericAllPage.vue`

Works with any module configuration to display data in a table:

```vue
<template>
  <GenericAllPage 
    :moduleConfig="blogConfig"
    :store="useBlogStore()"
  />
</template>
```

Features:
- Search functionality
- Filtering
- Sorting
- Pagination
- Bulk selection
- Add/Edit/Delete/View actions

#### `GenericFormPage.vue`

Works with any module configuration to create/edit items:

```vue
<template>
  <GenericFormPage 
    :moduleConfig="blogConfig"
    :store="useBlogStore()"
  />
</template>
```

Features:
- Dynamic form fields from config
- File upload support
- Validation
- Edit mode detection
- Auto-populate on edit

## Migration Guide

### Step 1: Create Module Setup Configuration

Update your `setup/index.ts` to use the `ModuleConfig` type:

```typescript
// Modules/Blog/setup/index.ts

import app_config from "@config/app_config";
import { ModuleConfig } from "@shared/types/module-config";
import form_fields from "./form_fields";

const setup: ModuleConfig = {
  // Identifiers
  prefix: "Blog",
  module_name: "blog",
  store_prefix: "blog",
  route_prefix: "Blog",
  route_path: "blog",

  // API
  api_host: app_config.api_host,
  api_version: app_config.api_version,
  api_end_point: "blogs",

  // Permissions
  permission: ["admin", "super_admin"],

  // Fields
  select_fields: ["id", "title", "description", "status", "created_at"],
  sort_by_cols: ["id", "title", "status", "created_at"],
  table_header_data: ["id", "title", "status", "created_at"],
  table_row_data: ["id", "title", "status", "created_at"],

  // Labels
  layout_title: "Blog Management",
  page_title: "Blog Management",
  all_page_title: "All Blogs",
  create_page_title: "Create Blog",
  edit_page_title: "Edit Blog",
  details_page_title: "Blog Details",

  // Form fields
  form_fields,
};

export default setup;
```

### Step 2: Simplify Store

Replace your entire `Store/index.ts` with the factory:

```typescript
// Modules/Blog/store/index.ts

import { createModuleStore } from "@shared/modules/store-factory";
import setup from "../setup";

export const useBlogStore = createModuleStore(setup);
```

That's it! Delete all the individual action files, initial state, etc.

### Step 3: Update Routes

Use generic pages in your routes:

```typescript
// Modules/Blog/setup/routes.ts

import { GenericAllPage, GenericFormPage } from "@shared/pages";
import { useBlogStore } from "../store";
import setup from "./index";

const blogStore = useBlogStore();

export const blogRoutes = [
  {
    path: "/blog",
    name: "BlogAll",
    component: GenericAllPage,
    props: {
      moduleConfig: setup,
      store: blogStore,
    },
  },
  {
    path: "/blog/create",
    name: "BlogCreate",
    component: GenericFormPage,
    props: {
      moduleConfig: setup,
      store: blogStore,
    },
  },
  {
    path: "/blog/:id/edit",
    name: "BlogEdit",
    component: GenericFormPage,
    props: {
      moduleConfig: setup,
      store: blogStore,
    },
  },
];
```

### Step 4: Register Module in Global Registry

Add your module to `shared/modules/registry.ts`:

```typescript
import blogSetup from "@modules/Blog/setup";

export const moduleRegistry: ModuleRegistry = {
  blog: blogSetup,
  // Add others...
};
```

## File Structure After Migration

### Before (Duplicated):

```
Blog/
├── pages/
│   ├── All.vue          (~150 lines)
│   ├── Form.vue         (~200 lines)
│   ├── Details.vue      (~100 lines)
│   └── Layout.vue       (~50 lines)
├── components/ (custom)
├── store/
│   ├── index.ts         (~100 lines)
│   ├── initial_state.ts (~50 lines)
│   ├── async_actions/   (~300 lines)
│   └── actions/         (~150 lines)
├── helpers/             (~200 lines)
└── setup/
    ├── index.ts         (~100 lines)
    ├── form_fields.js   (~100 lines)
    └── routes.js        (~50 lines)

BlogCategory/  (same structure - DUPLICATED)
BlogWriter/    (same structure - DUPLICATED)
```

### After (Optimized):

```
Blog/
├── pages/ (custom only)
├── components/ (custom only)
├── setup/
│   ├── index.ts (just config)
│   ├── form_fields.js
│   └── routes.js
└── store/
    └── index.ts (just one line using factory!)

shared/
├── modules/
│   ├── registry.ts      (centralized)
│   └── store-factory.ts (reusable logic)
├── pages/
│   ├── GenericAllPage.vue       (reusable)
│   ├── GenericFormPage.vue      (reusable)
│   └── GenericDetailsPage.vue   (reusable)
└── composables/
    └── useModuleManager.ts      (reusable)

BlogCategory/ (same minimal structure)
BlogWriter/   (same minimal structure)
```

## Code Reduction

### Example: Store Size

**Before:**
- Blog/store: ~600 lines
- BlogCategory/store: ~600 lines
- BlogWriter/store: ~600 lines
- **Total: ~1,800 lines**

**After:**
- Blog/store/index.ts: ~2 lines (factory call)
- BlogCategory/store/index.ts: ~2 lines
- BlogWriter/store/index.ts: ~2 lines
- shared/modules/store-factory.ts: ~300 lines
- **Total: ~306 lines (83% reduction)**

### Example: Page Components

**Before:**
- Blog/pages: ~500 lines
- BlogCategory/pages: ~500 lines
- BlogWriter/pages: ~500 lines
- **Total: ~1,500 lines**

**After:**
- Blog/pages: ~100 lines (custom only)
- BlogCategory/pages: ~100 lines (custom only)
- BlogWriter/pages: ~100 lines (custom only)
- shared/pages/GenericAllPage.vue: ~180 lines
- shared/pages/GenericFormPage.vue: ~200 lines
- **Total: ~580 lines (61% reduction)**

## Adding Custom Behavior

### Custom Actions in Store

If you need module-specific actions:

```typescript
// Blog/store/custom-actions.ts

export const customBlogAction = async (id: number) => {
  // Custom logic
};

// In routes or components:
import { useBlogStore } from "@modules/Blog/store";
import { customBlogAction } from "@modules/Blog/store/custom-actions";

const blogStore = useBlogStore();
await customBlogAction(id);
```

### Custom Components

For module-specific UI:

```typescript
// Blog/components/CustomBlogCard.vue
// Still location-specific, but pages use shared ones

export default {
  // Your custom component
};
```

## Best Practices

1. **Keep form_fields.js up-to-date** - This is your configuration
2. **Put ALL configuration in setup/index.ts** - Makes it composable
3. **Use shared pages first** - Only create custom pages if absolutely necessary
4. **Store module config as a constant** - Don't recreate it
5. **Use the registry** - Access modules globally when needed

## Troubleshooting

### Store not finding data

```typescript
// Make sure store is properly created:
export const useBlogStore = createModuleStore(setup);

// And setup has correct API endpoint:
api_end_point: "blogs", // Not "/blogs" or "api/blogs"
```

### Form not submitting

Check that:
1. Form fields are defined in `setup/form_fields.js`
2. Field names match your API
3. ModuleConfig `form_fields` is properly imported

### Routes not working

Verify:
1. Module is registered in `shared/modules/registry.ts`
2. route_prefix and route_path are consistent
3. Component props are passed correctly

## Next Steps

1. Migrate Blog module (simplest)
2. Migrate BlogCategory module
3. Migrate BlogWriter module
4. Update other management modules (UserManagement, etc.)
5. Create custom components only when needed
6. Monitor code duplication metrics

## Future Optimizations

- Generic Details page component
- Table customization hooks
- Form validation schema integration
- Advanced filtering UI
- Batch operations
- Import/Export functionality enhancement
