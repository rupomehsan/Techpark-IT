<?php

namespace Database\Seeders;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;


use Illuminate\Database\Seeder;

/**
 * User seeder management.
 */

use Modules\Management\UserManagement\Role\Seeders\Seeder as RoleSeeder;
use Modules\Management\UserManagement\User\Seeders\Seeder as UserSeeder;
use Modules\Management\SettingManagement\WebsiteSettings\Seeders\Seeder as WebsiteSettingsSeeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            /**
             * User seeder management.
             */
            RoleSeeder::class,
            UserSeeder::class,
            WebsiteSettingsSeeder::class,
            /**
             * Suppliyer seeder management.
             */
   

        ]);
    }
}
