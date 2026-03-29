<?php

/*
|--------------------------------------------------------------------------
| Auth Management Module
|--------------------------------------------------------------------------
*/

include_once base_path("Modules/Management/Auth/Routes/Route.php");
/*
|--------------------------------------------------------------------------
| Dashboard data
|--------------------------------------------------------------------------
*/
include_once base_path("Modules/Management/Dashboard/Routes/Route.php");
/*
|--------------------------------------------------------------------------
| Setting Management Module
|--------------------------------------------------------------------------
*/

include_once base_path("Modules/Management/SettingManagement/WebsiteSettings/Routes/Route.php");

/*
|--------------------------------------------------------------------------
| User Management Module
|--------------------------------------------------------------------------
*/

include_once base_path("Modules/Management/UserManagement/User/Routes/Route.php");
include_once base_path("Modules/Management/UserManagement/Role/Routes/Route.php");
/*
|--------------------------------------------------------------------------
| Others Management Module
|--------------------------------------------------------------------------
*/
include_once base_path("Modules/Management/FreeQuote/Routes/Route.php");
