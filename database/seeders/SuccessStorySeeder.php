<?php

namespace Database\Seeders;

use App\Models\SuccessStory;
use Illuminate\Database\Seeder;

class SuccessStorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SuccessStory::truncate();
        SuccessStory::create([
            'title' => 'story 1',
            'thumbnail_image' => 'frontend/assets/images/success_story_image/success_1.jpg',
            'video_link' => 'https://www.youtube.com/embed/Mgs5S-keg8k?si=Vqw125ckecTShhMW'
        ]);

        SuccessStory::create([
            'title' => 'story 2',
            'thumbnail_image' => 'frontend/assets/images/success_story_image/success_2.jpg',
            'video_link' => 'https://www.youtube.com/embed/d7s2pNEzUhc?si=e-8MjADor4sWVsjA'

        ]);
        SuccessStory::create([
            'title' => 'story 3',
            'thumbnail_image' => 'frontend/assets/images/success_story_image/success_3.jpg',
            'video_link' => 'https://www.youtube.com/embed/mmXakm_koNk?si=ygfff2jQCRzW2nN0'
        ]);

        SuccessStory::create([
            'title' => 'story 4',
            'thumbnail_image' => 'frontend/assets/images/success_story_image/success_4.jpg',
            'video_link' => 'https://www.youtube.com/embed/IxIkSdlPBts?si=xvskKdVyYGKiP3gb'
        ]);
        SuccessStory::create([
            'title' => 'story 5',
            'thumbnail_image' => 'frontend/assets/images/success_story_image/success_5.jpg',
            'video_link' => 'https://www.youtube.com/embed/NnTkajdlRLY?si=jQxi3ljzXcoGChY_'
        ]);
        SuccessStory::create([
            'title' => 'story 6',
            'thumbnail_image' => 'frontend/assets/images/success_story_image/success_6.jpg',
            'video_link' => 'https://www.youtube.com/embed/HDVNSqtFrZ8?si=jyciyZkag42_Rpsi'
        ]);
    }
}