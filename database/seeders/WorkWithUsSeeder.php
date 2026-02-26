<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WorkWithUsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('work_with_us')->truncate();

        DB::table('work_with_us')->insert([
            'title' => 'company 1',
            'image' => 'frontend/assets/images/home_page_image/work_company_name/alhelalmotor.png',
        ]);
        DB::table('work_with_us')->insert([
            'title' => 'company 2',
            'image' => 'frontend/assets/images/home_page_image/work_company_name/bme.png',
        ]);
        DB::table('work_with_us')->insert([
            'title' => 'company 3',
            'image' => 'frontend/assets/images/home_page_image/work_company_name/cdc_concreate.png',
        ]);
        DB::table('work_with_us')->insert([
            'title' => 'company 4',
            'image' => 'frontend/assets/images/home_page_image/work_company_name/cdc_furniture.png',
        ]);
        DB::table('work_with_us')->insert([
            'title' => 'company 5',
            'image' => 'frontend/assets/images/home_page_image/work_company_name/ctg.png',
        ]);
        DB::table('work_with_us')->insert([
            'title' => 'company 5',
            'image' => 'frontend/assets/images/home_page_image/work_company_name/etek.png',
        ]);
        DB::table('work_with_us')->insert([
            'title' => 'company 5',
            'image' => 'frontend/assets/images/home_page_image/work_company_name/fabarif.png',
        ]);
        DB::table('work_with_us')->insert([
            'title' => 'company 5',
            'image' => 'frontend/assets/images/home_page_image/work_company_name/hlmotors.png',
        ]);
        DB::table('work_with_us')->insert([
            'title' => 'company 5',
            'image' => 'frontend/assets/images/home_page_image/work_company_name/meritcare.png',
        ]);
        DB::table('work_with_us')->insert([
            'title' => 'company 5',
            'image' => 'frontend/assets/images/home_page_image/work_company_name/roseroyal.png',
        ]);
        DB::table('work_with_us')->insert([
            'title' => 'company 5',
            'image' => 'frontend/assets/images/home_page_image/work_company_name/starlit.png',
        ]);
        DB::table('work_with_us')->insert([
            'title' => 'company 5',
            'image' => 'frontend/assets/images/home_page_image/work_company_name/superb.png',
        ]);
    }
}
