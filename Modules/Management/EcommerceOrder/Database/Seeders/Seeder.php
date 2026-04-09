<?php
namespace Modules\Management\EcommerceOrder\Database\Seeders;

use Illuminate\Database\Seeder as SeederClass;
use Faker\Factory as Faker;

class Seeder extends SeederClass
{
    /**
     * Run the database seeds.
     php artisan db:seed --class="Modules\Management\EcommerceOrder\Database\Seeders\Seeder"
     */
    static $model = \Modules\Management\EcommerceOrder\Database\Models\Model::class;

    public function run(): void
    {
        $faker = Faker::create();
        self::$model::truncate();

        for ($i = 1; $i <= 100; $i++) {
            self::$model::create([                'full_name' => $faker->text(150),
                'email' => $faker->text(150),
                'phone' => $faker->text(50),
                'company_name' => $faker->text(150),
                'service' => $faker->text(150),
                'pricing_plan' => $faker->sentence,
                'description' => $faker->paragraph,
            ]);
        }
    }
}