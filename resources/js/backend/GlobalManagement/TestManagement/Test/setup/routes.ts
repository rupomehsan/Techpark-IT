/**
 * Test Management Routes
 * 
 * OPTIMIZED: Uses GenericAllPage and GenericFormPage
 * This demonstrates how to use the shared architecture
 * 
 * Before: Custom pages for list/create/edit/details (~500 lines)
 * After: Generic pages that work with any module!
 */

import { GenericAllPage, GenericFormPage } from "@shared/pages";
import { useTestStore } from "../store";
import setup from "./index";

const testStore = useTestStore();

export const testRoutes = [
  {
    path: "/test",
    name: "TestAll",
    component: GenericAllPage,
    props: {
      moduleConfig: setup,
      store: testStore,
    },
  },
  {
    path: "/test/create",
    name: "TestCreate",
    component: GenericFormPage,
    props: {
      moduleConfig: setup,
      store: testStore,
    },
  },
  {
    path: "/test/:id/edit",
    name: "TestEdit",
    component: GenericFormPage,
    props: {
      moduleConfig: setup,
      store: testStore,
    },
  },
  {
    path: "/test/:id/details",
    name: "TestDetails",
    component: GenericAllPage, // Can be replaced with GenericDetailsPage in future
    props: {
      moduleConfig: setup,
      store: testStore,
    },
  },
];

export default testRoutes;
