<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItServiceProductPriceSeeder extends Seeder
{
    public function run(): void
    {

        DB::table('it_service_product_price')->truncate();

        DB::table('it_service_product_price')->insert([
            [
                'it_service_id' => 3,
                'title' => 'Starter',
                'price' => 1000.00,
                'billing_cycle' => null,
                'description' => 'Starter plan with essential features.',
                'features' => json_encode([
                    'Attractive UI design',
                    'Order management',
                    'Admin panel',
                    'Single Page Application (SPA)',
                    'Responsive design',
                    'User-friendly interface',
                    'Seo friendly',
                    'Fast loading speed',
                ]),
                'button_text' => 'Get Starter Plan',
                'button_url' => '#',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'it_service_id' => 3,
                'title' => 'Basic',
                'price' => 10000.00,
                'billing_cycle' => null,
                'description' => 'Basic plan including starter features and more.',
                'features' => json_encode([
                    'Starter plan all features',
                    'Product management',
                    'Customer management',
                    'Order tracking',
                    'Report generation',
                    'Discount management',
                    'Email notifications',
                    'User management'
                ]),
                'button_text' => 'Get Basic Plan',
                'button_url' => '#',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'it_service_id' => 3,
                'title' => 'Medium',
                'price' => 20000.00,
                'billing_cycle' => null,
                'description' => 'Medium plan with business-level tools.',
                'features' => json_encode([
                    'Basic plan all features',
                    'Inventory management',
                    'Payment gateway integration SSL',
                    'Customer support system',
                    'Analytics and sales reporting',
                    'Customer Relationship Management (CRM)',
                ]),
                'button_text' => 'Get Medium Plan',
                'button_url' => '#',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'it_service_id' => 3,
                'title' => 'Advanced',
                'price' => 50000.00,
                'billing_cycle' => null,
                'description' => 'Advanced plan with full enterprise features.',
                'features' => json_encode([
                    'Medium plan all features',
                    'Accounts management',
                    'Website configuration',
                    'Backup and recovery',
                    'Custom CSS and JS',
                    'Social chat scripts',
                    'Social login using Google',
                    'Content Management System',
                    'Role permission management',
                    'Demo product',
                ]),
                'button_text' => 'Get Advanced Plan',
                'button_url' => '#',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'it_service_id' => 3,
                'title' => 'Custom',
                'price' => null, // Negotiable
                'billing_cycle' => null,
                'description' => 'Custom plan tailored to your needs. It can be for this service or any other service. Feel free to reach us.',
                'features' => json_encode([
                    'Custom development',
                    'Custom features',
                    'Custom design',
                    'Custom integration',
                    'Custom support',
                ]),
                'button_text' => 'Contact for Custom Plan',
                'button_url' => '#',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
