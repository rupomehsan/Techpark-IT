//app layout
import Layout from "../Layouts/Layout.vue";
//Dashboard
import Dashboard from "../Management/Dashboard/Dashboard.vue";
//SettingsRoutes
import SettingsRoutes from "../Management/Settings/setup/routes.js";
//UserRoutes
import UserRoutes from "../Management/UserManagement/User/setup/routes.js";
//routes

import BlogTagRoutes from "../../GlobalManagement/BlogManagement/BlogTag/setup/routes.js";
import BlogWriterRoutes from "../../GlobalManagement/BlogManagement/BlogWriter/setup/routes.js";
import BlogRoutes from "../../GlobalManagement/BlogManagement/Blog/setup/routes.js";
import BlogCategoryRoutes from "../../GlobalManagement/BlogManagement/BlogCategory/setup/routes.js";

const routes = {
  path: "",
  component: Layout,
  children: [
    {
      path: "dashboard",
      component: Dashboard,
      name: "adminDashboard",
    },
    //management routes

    BlogTagRoutes,
    BlogWriterRoutes,
    BlogRoutes,
    BlogCategoryRoutes,

    //user routes
    UserRoutes,
    //settings
    SettingsRoutes,
  ],
};

export default routes;
