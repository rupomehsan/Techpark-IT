<?php

use Illuminate\Support\Str;

if (!function_exists('StoreIndex')) {
    function StoreIndex($moduleName)
    {
        $formated_module = explode('/', $moduleName);

        if ($formated_module && count($formated_module) > 1) {
            $moduleName = end($formated_module);
        }

        $moduleTitle = ucfirst(Str::replace(['_', '-'], ' ', $moduleName));
        $storeName = Str::snake($moduleName);

        $content = <<<"EOD"
        /**
         * {$moduleTitle} Store - Factory Pattern Implementation
         *
         * This file demonstrates the power of the factory pattern:
         * - Replaces 500+ lines of duplicated code with just 3 lines
         * - All CRUD operations (create, read, update, delete, restore, etc.)
         * - Automatic state management with Pinia
         * - Fully type-safe with TypeScript
         *
         * The createCrudStore factory provides:
         * - Pagination, search, filtering
         * - Bulk actions
         * - Import/Export functionality
         * - Status management (active/inactive/trashed)
         * - Canvas/modal controls
         */
        import { createCrudStore } from "@/shared/store/createStore";
        import setup from "../setup";

        // Create the {$moduleTitle} store with all CRUD functionality
        export const {$storeName}_store = createCrudStore(setup);

        // Backwards compatibility with mapActions pattern
        export const store = {$storeName}_store;

        // Default export for composition API usage
        export default {$storeName}_store;

        EOD;

        return $content;
    }
}
