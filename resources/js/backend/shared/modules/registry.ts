import { ModuleRegistry } from "../types/module-config";
import blogSetup from "@modules/Blog/setup";
import blogCategorySetup from "@modules/BlogCategory/setup";
import blogWriterSetup from "@modules/BlogWriter/setup";
import testSetup from "@modules/TestManagement/Test/setup";

/**
 * Global Module Registry
 * All CRUD modules are registered here for centralized access
 * This allows generic components to work with any module
 */
export const moduleRegistry: ModuleRegistry = {
  blog: blogSetup,
  blog_category: blogCategorySetup,
  blog_writer: blogWriterSetup,
  test: testSetup,
  // Add new modules here as they're created
  // user_management: userManagementSetup,
  // role_management: roleManagementSetup,
};

/**
 * Get module configuration by key or store prefix
 */
export const getModuleConfig = (key: string) => {
  return moduleRegistry[key] || null;
};

/**
 * Get module configuration by route prefix
 */
export const getModuleConfigByRoute = (routePrefix: string) => {
  return Object.values(moduleRegistry).find(
    (config) => config.route_prefix === routePrefix
  ) || null;
};

/**
 * Get all registered modules
 */
export const getAllModules = () => {
  return Object.keys(moduleRegistry);
};

export default moduleRegistry;
