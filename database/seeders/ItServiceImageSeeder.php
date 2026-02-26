<?php

namespace Database\Seeders;

use App\Models\ItServiceImages;
use Illuminate\Database\Seeder;

class ItServiceImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ItServiceImages::truncate();

        for ($i = 0; $i < 9; $i++) {
            for ($j = 1; $j < 9; $j++) {
                ItServiceImages::create([
                    'it_service_id' => $j,
                    'image' => 'https://placehold.co/1100x400?text=' . $i,
                    'title' => 'IT Service ' . $j,
                    'creator' => 1,
                    'slug' => 'it-service-' . $j,
                    'status' => 'active',
                ]);
            }
        }
    }
}
