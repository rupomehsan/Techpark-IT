<template>
  <GenericFormPage :moduleConfig="setup" :store="testStore" />
</template>

<script setup lang="ts">
/**
 * Test Form Page
 * Wrapper around GenericFormPage for Test Management Create/Edit
 * 
 * Handles both create and edit modes automatically
 * Form fields are defined in setup/form_fields.js
 */

import { GenericFormPage } from "@shared/pages";
import { useTestStore } from "../store";
import setup from "../setup";

const testStore = useTestStore();
</script>
