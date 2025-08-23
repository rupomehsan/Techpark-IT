<?php
namespace App\Modules\Management\SentenceManagement\Sentence\Seeder;

use Illuminate\Database\Seeder as SeederClass;
use Faker\Factory as Faker;

class Seeder extends SeederClass
{
    /**
     * Run the database seeds.
     php artisan db:seed --class="App\Modules\Management\SentenceManagement\Sentence\Seeder\Seeder"
     */
    static $model = \App\Modules\Management\SentenceManagement\Sentence\Models\Model::class;

    public function run(): void
    {
        $faker = Faker::create();
        self::$model::truncate();

        for ($i = 1; $i <= 100; $i++) {
            self::$model::create([                'sentence' => $faker->paragraph,
                'language' => $faker->randomElement(array (
  0 => 'english',
  1 => 'bangla',
)),
                'label' => $faker->randomElement(array (
  0 => 'basic',
  1 => 'medium',
  2 => 'advance',
  3 => 'professional',
)),
                'meaning' => $faker->paragraph,
            ]);
        }
    }
}