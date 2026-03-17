<template>
  <GenericAllPage :moduleConfig="setup" :store="testStore" />
</template>

<script setup lang="ts">
/**
 * Test All Page
 * Wrapper around GenericAllPage for Test Management
 * 
 * This is optional - you can use GenericAllPage directly in routes
 * But this pattern makes it easier to add custom logic later
 */

import { GenericAllPage } from "@shared/pages";
import { useTestStore } from "../store";
import setup from "../setup";

const testStore = useTestStore();
</script>
