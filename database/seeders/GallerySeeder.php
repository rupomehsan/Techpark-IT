<?php

namespace Database\Seeders;

use App\Models\GalleryImage;
use Illuminate\Database\Seeder;
use App\Models\GalleryImageCategory;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        GalleryImageCategory::truncate();
        GalleryImageCategory::create(
            [
                'title' => 'Tour',
                'serial' => 1,
                'slug' => 'tour'
            ]
        );

        GalleryImageCategory::create(
            [
                'title' => 'Annual Picnic',
                'serial' => 2,
                'slug' => 'picnic'
            ]
        );

        GalleryImageCategory::create(
            [
                'title' => 'Hangouts',
                'serial' => 3,
                'slug' => 'hangouts'
            ]
        );

        GalleryImageCategory::create(
            [
                'title' => 'Workshop',
                'serial' => 4,
                'slug' => 'workshop'
            ]
        );

        GalleryImage::truncate();

        //Tour
        GalleryImage::create(
            [
                'title' => '',
                'gallery_category_id' => 1,
                'image' => 'frontend/assets/images/gallery_image/tour/1.jpg',
                'serial' => 1,
                'slug' => 'image-1'
            ]
        );
        GalleryImage::create(
            [
                'title' => '',
                'gallery_category_id' => 1,
                'image' => 'frontend/assets/images/gallery_image/tour/2.jpg',
                'serial' => 2,
                'slug' => 'image-2'
            ]
        );
        GalleryImage::create(
            [
                'title' => '',
                'gallery_category_id' => 1,
                'image' => 'frontend/assets/images/gallery_image/tour/3.jpg',
                'serial' => 3,
                'slug' => 'image-3'
            ]
        );
        GalleryImage::create(
            [
                'title' => '',
                'gallery_category_id' => 1,
                'image' => 'frontend/assets/images/gallery_image/tour/4.jpg',
                'serial' => 4,
                'slug' => 'image-4'
            ]
        );
        GalleryImage::create(
            [
                'title' => '',
                'gallery_category_id' => 1,
                'image' => 'frontend/assets/images/gallery_image/tour/5.jpg',
                'serial' => 5,
                'slug' => 'image-5'
            ]
        );
        GalleryImage::create(
            [
                'title' => '',
                'gallery_category_id' => 1,
                'image' => 'frontend/assets/images/gallery_image/tour/6.jpg',
                'serial' => 6,
                'slug' => 'image-6'
            ]
        );
        GalleryImage::create(
            [
                'title' => '',
                'gallery_category_id' => 1,
                'image' => 'frontend/assets/images/gallery_image/tour/7.jpg',
                'serial' => 7,
                'slug' => 'image-7'
            ]
        );
        GalleryImage::create(
            [
                'title' => '',
                'gallery_category_id' => 1,
                'image' => 'frontend/assets/images/gallery_image/tour/8.jpg',
                'serial' => 7,
                'slug' => 'image-8'
            ]
        );

        //Anual Picnic
        GalleryImage::create(
            [
                'title' => '',
                'gallery_category_id' => 2,
                'image' => 'frontend/assets/images/gallery_image/anual_picnic/1.jpeg',
                'serial' => 1,
                'slug' => 'image-15'
            ]
        );
        GalleryImage::create(
            [
                'title' => '',
                'gallery_category_id' => 2,
                'image' => 'frontend/assets/images/gallery_image/anual_picnic/2.jpeg',
                'serial' => 2,
                'slug' => 'image-16'
            ]
        );
        GalleryImage::create(
            [
                'title' => '',
                'gallery_category_id' => 2,
                'image' => 'frontend/assets/images/gallery_image/anual_picnic/3.jpg',
                'serial' => 3,
                'slug' => 'image-17'
            ]
        );
        GalleryImage::create(
            [
                'title' => '',
                'gallery_category_id' => 2,
                'image' => 'frontend/assets/images/gallery_image/anual_picnic/4.jpg',
                'serial' => 4,
                'slug' => 'image-18'
            ]
        );
        GalleryImage::create(
            [
                'title' => '',
                'gallery_category_id' => 2,
                'image' => 'frontend/assets/images/gallery_image/anual_picnic/5.jpg',
                'serial' => 5,
                'slug' => 'image-19'
            ]
        );
        GalleryImage::create(
            [
                'title' => '',
                'gallery_category_id' => 2,
                'image' => 'frontend/assets/images/gallery_image/anual_picnic/6.jpg',
                'serial' => 6,
                'slug' => 'image-20'
            ]
        );
        GalleryImage::create(
            [
                'title' => '',
                'gallery_category_id' => 2,
                'image' => 'frontend/assets/images/gallery_image/anual_picnic/7.jpg',
                'serial' => 7,
                'slug' => 'image-21'
            ]
        );
        GalleryImage::create(
            [
                'title' => '',
                'gallery_category_id' => 2,
                'image' => 'frontend/assets/images/gallery_image/anual_picnic/8.jpg',
                'serial' => 8,
                'slug' => 'image-22'
            ]
        );

        //Hangouts
        GalleryImage::create(
            [
                'title' => 'Infront of the office',
                'gallery_category_id' => 3,
                'image' => 'frontend/assets/images/about_page_image/team_images/1.jpeg',
                'serial' => 1,
                'slug' => 'team_picture_1'
            ]
        );
        GalleryImage::create(
            [
                'title' => 'Relaxing at the Botanical Garden',
                'gallery_category_id' => 3,
                'image' => 'frontend/assets/images/about_page_image/team_images/2.jpeg',
                'serial' => 2,
                'slug' => 'team_picture_2'
            ]
        );
        GalleryImage::create(
            [
                'title' => 'Enjoying the view',
                'gallery_category_id' => 3,
                'image' => 'frontend/assets/images/about_page_image/team_images/3.jpeg',
                'serial' => 3,
                'slug' => 'team_picture_3'
            ]
        );
        GalleryImage::create(
            [
                'title' => 'Discussing ideas',
                'gallery_category_id' => 3,
                'image' => 'frontend/assets/images/about_page_image/team_images/4.jpeg',
                'serial' => 4,
                'slug' => 'team_picture_4'
            ]
        );
        GalleryImage::create(
            [
                'title' => 'Team bonding',
                'gallery_category_id' => 3,
                'image' => 'frontend/assets/images/about_page_image/team_images/5.jpeg',
                'serial' => 5,
                'slug' => 'team_picture_4'
            ]
        );
        GalleryImage::create(
            [
                'title' => 'Team outing',
                'gallery_category_id' => 3,
                'image' => 'frontend/assets/images/about_page_image/team_images/6.jpeg',
                'serial' => 6,
                'slug' => 'team_picture_6'
            ]
        );
        GalleryImage::create(
            [
                'title' => 'Positive vibes',
                'gallery_category_id' => 3,
                'image' => 'frontend/assets/images/about_page_image/team_images/7.jpeg',
                'serial' => 7,
                'slug' => 'team_picture_7'
            ]
        );
        GalleryImage::create(
            [
                'title' => 'Posing for the camera',
                'gallery_category_id' => 3,
                'image' => 'frontend/assets/images/about_page_image/team_images/8.jpeg',
                'serial' => 8,
                'slug' => 'team_picture_8'
            ]
        );
        GalleryImage::create(
            [
                'title' => 'With our beloved MD',
                'gallery_category_id' => 3,
                'image' => 'frontend/assets/images/about_page_image/team_images/9.jpeg',
                'serial' => 9,
                'slug' => 'team_picture_9'
            ]
        );

        // workshop
        GalleryImage::create(
            [
                'title' => '',
                'gallery_category_id' => 4,
                'image' => 'frontend/assets/images/gallery_image/workshop/ori1.jpeg',
                'serial' => 1,
                'slug' => 'workshop-session-1'
            ]
        );
        GalleryImage::create(
            [
                'title' => '',
                'gallery_category_id' => 4,
                'image' => 'frontend/assets/images/gallery_image/workshop/ori2.jpeg',
                'serial' => 2,
                'slug' => 'workshop-session-2'
            ]
        );
        GalleryImage::create(
            [
                'title' => '',
                'gallery_category_id' => 4,
                'image' => 'frontend/assets/images/gallery_image/workshop/ori3.jpeg',
                'serial' => 3,
                'slug' => 'workshop-session-3'
            ]
        );
        GalleryImage::create(
            [
                'title' => '',
                'gallery_category_id' => 4,
                'image' => 'frontend/assets/images/gallery_image/workshop/ori4.jpeg',
                'serial' => 4,
                'slug' => 'workshop-session-4'
            ]
        );
        GalleryImage::create(
            [
                'title' => '',
                'gallery_category_id' => 4,
                'image' => 'frontend/assets/images/gallery_image/workshop/ori5.jpeg',
                'serial' => 5,
                'slug' => 'workshop-session-5'
            ]
        );
        GalleryImage::create(
            [
                'title' => '',
                'gallery_category_id' => 4,
                'image' => 'frontend/assets/images/gallery_image/workshop/ori6.jpeg',
                'serial' => 6,
                'slug' => 'workshop-session-6'
            ]
        );
    }
}
