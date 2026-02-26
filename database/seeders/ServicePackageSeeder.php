<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServicePackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Create Service Package Table
        DB::table('packages')->truncate();
        $service_ids = [1, 2, 3, 4, 5, 6, 7, 8];

        foreach ($service_ids as $service_id) {
            DB::table('packages')->insert([
                'service_id' => $service_id,
                'package_title' => 'Small',
                'sub_title' => '১-১০',
                'price' => '১০,০০০',
                'creator' => 1,
                'slug' => 'small',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            DB::table('packages')->insert([
                'service_id' => $service_id,
                'package_title' => 'Medium',
                'sub_title' => '১০-২০',
                'price' => '১৫,০০০',
                'creator' => 1,
                'slug' => 'medium',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            DB::table('packages')->insert([
                'service_id' => $service_id,
                'package_title' => 'Large',
                'sub_title' => '২০-৪০',
                'price' => '৩০,০০০',
                'creator' => 1,
                'slug' => 'large',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        //Create Package Keypoints
        $services = DB::table('it_services')->get();
        DB::table('package__keypoints')->truncate();
        foreach ($services as $package) {
            $first = DB::table('package__keypoints')->insertGetId([
                'service_id' => $package->id,
                'title' => 'Functional website',
                'creator' => 1,
                'slug' => 'functional_website',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            $second = DB::table('package__keypoints')->insertGetId([
                'service_id' => $package->id,
                'title' => 'Responsive design',
                'creator' => 1,
                'slug' => 'responsive_design',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            $third = DB::table('package__keypoints')->insertGetId([
                'service_id' => $package->id,
                'title' => 'E-commerce functionality',
                'creator' => 1,
                'slug' => 'e-commerce_functionality',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            $fourth = DB::table('package__keypoints')->insertGetId([
                'service_id' => $package->id,
                'title' => 'Payment processing',
                'creator' => 1,
                'slug' => 'payment_processing',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ]);


            $fifth = DB::table('package__keypoints')->insertGetId([
                'service_id' => $package->id,
                'title' => 'Revisions',
                'creator' => 1,
                'slug' => 'revisions',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            $sixth = DB::table('package__keypoints')->insertGetId([
                'service_id' => $package->id,
                'title' => 'Delivery Time',
                'creator' => 1,
                'slug' => 'delivery_time',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            $seventh = DB::table('package__keypoints')->insertGetId([
                'service_id' => $package->id,
                'title' => 'Number of pages',
                'creator' => 1,
                'slug' => 'number_of_pages',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        $keypoints = DB::table('package__keypoints')->where('service_id', 1)->get();
        DB::table('package__keypoint_values')->truncate();

        //Package Keypoint Values 1
        foreach ($keypoints as $keypoint) {
            DB::table('package__keypoint_values')->insert([
                'package_id' => 1,
                'package_keypoint_id' => $keypoint->id,
                'type' => 'select',
                'value' => null,
                'creator' => 1,
                'slug' => 'functional_website',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            DB::table('package__keypoint_values')->insert([
                'package_id' => 2,
                'package_keypoint_id' => $keypoint->id,
                'type' => 'text',
                'value' => 'unlimited',
                'creator' => 1,
                'slug' => 'e-commerce_functionality',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            DB::table('package__keypoint_values')->insert([
                'package_id' => 3,
                'package_keypoint_id' => $keypoint->id,
                'type' => 'text',
                'value' => 'unlimited',
                'creator' => 1,
                'slug' => 'e-commerce_functionality',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        //Package Keypoint Values 2
        $keypoints = DB::table('package__keypoints')->where('service_id', 2)->get();
        foreach ($keypoints as $keypoint) {
            DB::table('package__keypoint_values')->insert([
                'package_id' => 4,
                'package_keypoint_id' => $keypoint->id,
                'type' => 'select',
                'value' => null,
                'creator' => 1,
                'slug' => 'functional_website',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            DB::table('package__keypoint_values')->insert([
                'package_id' => 5,
                'package_keypoint_id' => $keypoint->id,
                'type' => 'text',
                'value' => 'unlimited',
                'creator' => 1,
                'slug' => 'e-commerce_functionality',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            DB::table('package__keypoint_values')->insert([
                'package_id' => 6,
                'package_keypoint_id' => $keypoint->id,
                'type' => 'text',
                'value' => 'unlimited',
                'creator' => 1,
                'slug' => 'e-commerce_functionality',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
        //Package Keypoint Values 3
        $keypoints = DB::table('package__keypoints')->where('service_id', 3)->get();
        foreach ($keypoints as $keypoint) {
            DB::table('package__keypoint_values')->insert([
                'package_id' => 7,
                'package_keypoint_id' => $keypoint->id,
                'type' => 'select',
                'value' => null,
                'creator' => 1,
                'slug' => 'functional_website',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            DB::table('package__keypoint_values')->insert([
                'package_id' => 8,
                'package_keypoint_id' => $keypoint->id,
                'type' => 'text',
                'value' => 'unlimited',
                'creator' => 1,
                'slug' => 'e-commerce_functionality',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            DB::table('package__keypoint_values')->insert([
                'package_id' => 9,
                'package_keypoint_id' => $keypoint->id,
                'type' => 'text',
                'value' => 'unlimited',
                'creator' => 1,
                'slug' => 'e-commerce_functionality',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
        //Package Keypoint Values 4
        $keypoints = DB::table('package__keypoints')->where('service_id', 4)->get();
        foreach ($keypoints as $keypoint) {
            DB::table('package__keypoint_values')->insert([
                'package_id' => 10,
                'package_keypoint_id' => $keypoint->id,
                'type' => 'select',
                'value' => null,
                'creator' => 1,
                'slug' => 'functional_website',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            DB::table('package__keypoint_values')->insert([
                'package_id' => 11,
                'package_keypoint_id' => $keypoint->id,
                'type' => 'text',
                'value' => 'unlimited',
                'creator' => 1,
                'slug' => 'e-commerce_functionality',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            DB::table('package__keypoint_values')->insert([
                'package_id' => 12,
                'package_keypoint_id' => $keypoint->id,
                'type' => 'text',
                'value' => 'unlimited',
                'creator' => 1,
                'slug' => 'e-commerce_functionality',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
        //Package Keypoint Values 5
        $keypoints = DB::table('package__keypoints')->where('service_id', 5)->get();
        foreach ($keypoints as $keypoint) {
            DB::table('package__keypoint_values')->insert([
                'package_id' => 13,
                'package_keypoint_id' => $keypoint->id,
                'type' => 'select',
                'value' => null,
                'creator' => 1,
                'slug' => 'functional_website',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            DB::table('package__keypoint_values')->insert([
                'package_id' => 14,
                'package_keypoint_id' => $keypoint->id,
                'type' => 'text',
                'value' => 'unlimited',
                'creator' => 1,
                'slug' => 'e-commerce_functionality',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            DB::table('package__keypoint_values')->insert([
                'package_id' => 15,
                'package_keypoint_id' => $keypoint->id,
                'type' => 'text',
                'value' => 'unlimited',
                'creator' => 1,
                'slug' => 'e-commerce_functionality',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
        //Package Keypoint Values 6
        $keypoints = DB::table('package__keypoints')->where('service_id', 6)->get();
        foreach ($keypoints as $keypoint) {
            DB::table('package__keypoint_values')->insert([
                'package_id' => 16,
                'package_keypoint_id' => $keypoint->id,
                'type' => 'select',
                'value' => null,
                'creator' => 1,
                'slug' => 'functional_website',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            DB::table('package__keypoint_values')->insert([
                'package_id' => 17,
                'package_keypoint_id' => $keypoint->id,
                'type' => 'text',
                'value' => 'unlimited',
                'creator' => 1,
                'slug' => 'e-commerce_functionality',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            DB::table('package__keypoint_values')->insert([
                'package_id' => 18,
                'package_keypoint_id' => $keypoint->id,
                'type' => 'text',
                'value' => 'unlimited',
                'creator' => 1,
                'slug' => 'e-commerce_functionality',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
        //Package Keypoint Values 7
        $keypoints = DB::table('package__keypoints')->where('service_id', 7)->get();
        foreach ($keypoints as $keypoint) {
            DB::table('package__keypoint_values')->insert([
                'package_id' => 19,
                'package_keypoint_id' => $keypoint->id,
                'type' => 'select',
                'value' => null,
                'creator' => 1,
                'slug' => 'functional_website',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            DB::table('package__keypoint_values')->insert([
                'package_id' => 20,
                'package_keypoint_id' => $keypoint->id,
                'type' => 'text',
                'value' => 'unlimited',
                'creator' => 1,
                'slug' => 'e-commerce_functionality',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            DB::table('package__keypoint_values')->insert([
                'package_id' => 21,
                'package_keypoint_id' => $keypoint->id,
                'type' => 'text',
                'value' => 'unlimited',
                'creator' => 1,
                'slug' => 'e-commerce_functionality',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
        //Package Keypoint Values 8
        $keypoints = DB::table('package__keypoints')->where('service_id', 8)->get();
        foreach ($keypoints as $keypoint) {
            DB::table('package__keypoint_values')->insert([
                'package_id' => 22,
                'package_keypoint_id' => $keypoint->id,
                'type' => 'select',
                'value' => null,
                'creator' => 1,
                'slug' => 'functional_website',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            DB::table('package__keypoint_values')->insert([
                'package_id' => 23,
                'package_keypoint_id' => $keypoint->id,
                'type' => 'text',
                'value' => 'unlimited',
                'creator' => 1,
                'slug' => 'e-commerce_functionality',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            DB::table('package__keypoint_values')->insert([
                'package_id' => 24,
                'package_keypoint_id' => $keypoint->id,
                'type' => 'text',
                'value' => 'unlimited',
                'creator' => 1,
                'slug' => 'e-commerce_functionality',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
