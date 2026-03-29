<?php
namespace Modules\Management\FreeQuote\Database\Seeders;

use Illuminate\Database\Seeder as SeederClass;
use Faker\Factory as Faker;

class Seeder extends SeederClass
{
    /**
     * Run the database seeds.
     php artisan db:seed --class="Modules\Management\FreeQuote\Database\Seeders\Seeder"
     */
    static $model = \Modules\Management\FreeQuote\Database\Models\Model::class;

    public function run(): void
    {
        $faker = Faker::create();
        self::$model::truncate();

        for ($i = 1; $i <= 100; $i++) {
            self::$model::create([                'full_name' => $faker->sentence,
                'email' => $faker->sentence,
                'phone' => $faker->sentence,
                'company_name' => $faker->sentence,
                'service_required' => $faker->sentence,
                'budget_range' => $faker->sentence,
                'project_description' => $faker->paragraph,
            ]);
        }
    }
}