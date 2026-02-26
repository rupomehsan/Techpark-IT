<?php

namespace Database\Seeders\itService;

use App\Models\ItServices;
use Illuminate\Database\Seeder;

class ItServicesSeeder extends Seeder
{
    public function run()
    {
        ItServices::truncate();

        ItServices::create([
            'title' => 'লার্নিং ম্যানেজমেন্ট',
            'short_description' => 'লার্নিং ম্যানেজমেন্ট ডেভোলাপমেন্ট এবং আপনার সিঙ্গেল পেজ React ওয়েবসাইট (SPA) তৈরি করুন',
            'description' => '
            <div class="wordpress_services">
    <div class="wordpress_services_title">
        আমরা যেই লার্নিং ম্যানেজমেন্ট সার্ভিসগুলো দিয়ে থাকি
    </div>
    <ul>
        <li>
            <i class="fa-regular fa-circle-check"></i>কোর্স তৈরির সাপোর্ট
        </li>
        <li>
            <i class="fa-regular fa-circle-check"></i>স্টুডেন্ট ম্যানেজমেন্ট
        </li>
        <li>
            <i class="fa-regular fa-circle-check"></i>লাইভ ক্লাস ইন্টিগ্রেশন
        </li>
        <li>
            <i class="fa-regular fa-circle-check"></i>অনলাইন পরীক্ষা পরিচালনা
        </li>
        <li>
            <i class="fa-regular fa-circle-check"></i>রিপোর্ট এবং সার্টিফিকেট জেনারেশন
        </li>
        <li>
            <i class="fa-regular fa-circle-check"></i>লার্নিং পাথ কাস্টমাইজেশন
        </li>
    </ul>
</div>
            ',
            'image' => 'frontend/assets/images/home_page_image/ti_service/lms.png',
            'background_color' => '#fef2f2',
            'slug' => 'learning-management'
        ]);

        ItServices::create([
            'title' => 'স্কুল ম্যানেজমেন্ট',
            'short_description' => 'Laravel স্কুল ম্যানেজমেন্ট সাইট ডেভোলাপমেন্ট সার্ভিস প্রদান করি',
            'description' => '
            <div class="wordpress_services">
    <div class="wordpress_services_title">
        আমরা যেই স্কুল ম্যানেজমেন্ট সার্ভিসগুলো দিয়ে থাকি
    </div>
    <ul>
        <li>
            <i class="fa-regular fa-circle-check"></i>স্টুডেন্ট ডেটাবেস ম্যানেজমেন্ট
        </li>
        <li>
            <i class="fa-regular fa-circle-check"></i>শ্রেণি এবং সেকশন ম্যানেজমেন্ট
        </li>
        <li>
            <i class="fa-regular fa-circle-check"></i>শিক্ষক ম্যানেজমেন্ট সিস্টেম
        </li>
        <li>
            <i class="fa-regular fa-circle-check"></i>অ্যাটেনডেন্স ট্র্যাকিং
        </li>
        <li>
            <i class="fa-regular fa-circle-check"></i>ফি কালেকশন এবং বিলিং সিস্টেম
        </li>
        <li>
            <i class="fa-regular fa-circle-check"></i>পরীক্ষার রেজাল্ট ম্যানেজমেন্ট
        </li>
        <li>
            <i class="fa-regular fa-circle-check"></i>স্কুল ক্যালেন্ডার এবং ইভেন্টস
        </li>
    </ul>
</div>
            ',
            'image' => 'frontend/assets/images/home_page_image/ti_service/school_management copy.png',
            'background_color' => '#fef2f2',
            'slug' => 'school-management'
        ]);

        ItServices::create([
            'title' => 'ই-কমার্স',
            'short_description' => 'Laravel ই-কমার্স সাইট ডেভোলাপমেন্ট সার্ভিস প্রদান করি',
            'description' => '
            <div class="wordpress_services">
    <div class="wordpress_services_title">
        আমরা যেই ই-কমার্স সার্ভিসগুলো দিয়ে থাকি
    </div>
    <ul>
        <li>
            <i class="fa-regular fa-circle-check"></i>ই-কমার্স ওয়েবসাইট ডিজাইন ও ডেভেলপমেন্ট
        </li>
        <li>
            <i class="fa-regular fa-circle-check"></i>পেমেন্ট গেটওয়ে ইন্টিগ্রেশন
        </li>
        <li>
            <i class="fa-regular fa-circle-check"></i>প্রোডাক্ট ম্যানেজমেন্ট সিস্টেম
        </li>
        <li>
            <i class="fa-regular fa-circle-check"></i>অর্ডার ম্যানেজমেন্ট সিস্টেম
        </li>
        <li>
            <i class="fa-regular fa-circle-check"></i>রেসপনসিভ মোবাইল-ফ্রেন্ডলি ডিজাইন
        </li>
        <li>
            <i class="fa-regular fa-circle-check"></i>ইমেইল ও এসএমএস নোটিফিকেশন সিস্টেম
        </li>
        <li>
            <i class="fa-regular fa-circle-check"></i>এসইও অপটিমাইজেশন
        </li>
    </ul>
</div>
            ',
            'image' => 'frontend/assets/images/home_page_image/ti_service/ecom.png',
            'background_color' => '#fef2f2',
            'slug' => 'e-commerce'
        ]);

        ItServices::create([
            'title' => 'ইনভেন্টরি ম্যানেজমেন্ট',
            'short_description' => 'Laravel+VueJS এর মাধ্যমে আপনার ইনভেন্টরি ম্যানেজমেন্ট তৈরি করুন আমাদের থেকে আপনি VueJS এর মাধ্যমে SPA Application বানাতে পারবেন',
            'description' => '
            <div class="wordpress_services">
    <div class="wordpress_services_title">
        আমরা যেই ইনভেন্টরি ম্যানেজমেন্ট সার্ভিসগুলো দিয়ে থাকি
    </div>
    <ul>
        <li>
            <i class="fa-regular fa-circle-check"></i>পণ্য স্টক ম্যানেজমেন্ট
        </li>
        <li>
            <i class="fa-regular fa-circle-check"></i>রিয়েল-টাইম ইনভেন্টরি ট্র্যাকিং
        </li>
        <li>
            <i class="fa-regular fa-circle-check"></i>বারকোড এবং কিউআর কোড সিস্টেম
        </li>
        <li>
            <i class="fa-regular fa-circle-check"></i>ভেন্ডর এবং সাপ্লায়ার ম্যানেজমেন্ট
        </li>
        <li>
            <i class="fa-regular fa-circle-check"></i>স্টক রিপোর্ট এবং অ্যানালিটিক্স
        </li>
        <li>
            <i class="fa-regular fa-circle-check"></i>পণ্যের কস্ট এবং প্রফিট ক্যালকুলেশন
        </li>
        <li>
            <i class="fa-regular fa-circle-check"></i>নতুন প্রোডাক্ট এন্ট্রি এবং ক্যাটাগরি ম্যানেজমেন্ট
        </li>
    </ul>
</div>
            ',
            'image' => 'frontend/assets/images/home_page_image/ti_service/pos.png',
            'background_color' => '#ecf8f3',
            'slug' => 'inventory-management'
        ]);

        ItServices::create([
            'title' => 'পোর্টফলিও ম্যানেজমেন্ট',
            'short_description' => 'Laravel পোর্টফলিও ম্যানেজমেন্ট সাইট ডেভোলাপমেন্ট সার্ভিস প্রদান করি',
            'description' => '
            <div class="wordpress_services">
    <div class="wordpress_services_title">
        আমরা যেই পোর্টফলিও ম্যানেজমেন্ট সার্ভিসগুলো দিয়ে থাকি
    </div>
    <ul>
        <li>
            <i class="fa-regular fa-circle-check"></i>প্রজেক্ট এবং ইনভেস্টমেন্ট ট্র্যাকিং
        </li>
        <li>
            <i class="fa-regular fa-circle-check"></i>রিস্ক অ্যানালাইসিস এবং মিটিগেশন
        </li>
        <li>
            <i class="fa-regular fa-circle-check"></i>পোর্টফলিও অপ্টিমাইজেশন
        </li>
        <li>
            <i class="fa-regular fa-circle-check"></i>রিপোর্টিং এবং অ্যানালিটিক্স
        </li>
        <li>
            <i class="fa-regular fa-circle-check"></i>রিটার্ন অন ইনভেস্টমেন্ট (ROI) মাপা
        </li>
        <li>
            <i class="fa-regular fa-circle-check"></i>রেগুলার পোর্টফলিও রিভিউ এবং আপডেট
        </li>
        <li>
            <i class="fa-regular fa-circle-check"></i>ইনভেস্টমেন্ট ডাইভার্সিফিকেশন স্ট্রাটেজি
        </li>
    </ul>
</div>
            ',
            'image' => 'frontend/assets/images/home_page_image/ti_service/portfolio.png',
            'background_color' => '#fef2f2',
            'slug' => 'portfolio-management'
        ]);
        ItServices::create([
            'title' => 'ব্লগ ম্যানেজমেন্ট',
            'short_description' => 'Laravel ব্লগ ম্যানেজমেন্ট সাইট ডেভোলাপমেন্ট সার্ভিস প্রদান করি',
            'description' => '
            <div class="wordpress_services">
    <div class="wordpress_services_title">
        আমরা যেই ব্লগ ম্যানেজমেন্ট সার্ভিসগুলো দিয়ে থাকি
    </div>
    <ul>
        <li>
            <i class="fa-regular fa-circle-check"></i>ব্লগ সেটআপ এবং কাস্টমাইজেশন
        </li>
        <li>
            <i class="fa-regular fa-circle-check"></i>কন্টেন্ট স্ট্রাটেজি এবং প্ল্যানিং
        </li>
        <li>
            <i class="fa-regular fa-circle-check"></i>এসইও ফ্রেন্ডলি ব্লগ পোস্ট
        </li>
        <li>
            <i class="fa-regular fa-circle-check"></i>ইমেজ এবং মিডিয়া অপটিমাইজেশন
        </li>
        <li>
            <i class="fa-regular fa-circle-check"></i>ব্লগ অ্যানালিটিক্স এবং ট্রাফিক রিপোর্টিং
        </li>
        <li>
            <i class="fa-regular fa-circle-check"></i>রেগুলার ব্লগ আপডেট এবং মেইন্টেনেন্স
        </li>
        <li>
            <i class="fa-regular fa-circle-check"></i>সোশ্যাল শেয়ারিং ইন্টিগ্রেশন
        </li>
    </ul>
</div>
            ',
            'image' => 'frontend/assets/images/home_page_image/ti_service/blog.png',
            'background_color' => '#fef2f2',
            'slug' => 'blog-management'
        ]);

        ItServices::create([
            'title' => 'রিয়েলস্টেট ম্যানেজমেন্ট',
            'short_description' => 'Laravel রিয়েলস্টেট ম্যানেজমেন্ট সাইট ডেভোলাপমেন্ট সার্ভিস প্রদান করি',
            'description' => '
            <div class="wordpress_services">
    <div class="wordpress_services_title">
        আমরা যেই রিয়েলস্টেট ম্যানেজমেন্ট সার্ভিসগুলো দিয়ে থাকি
    </div>
    <ul>
        <li>
            <i class="fa-regular fa-circle-check"></i>সম্পত্তির তালিকা এবং ডাটাবেস তৈরি
        </li>
        <li>
            <i class="fa-regular fa-circle-check"></i>সম্পত্তির ক্রয় এবং বিক্রয় ব্যবস্থাপনা
        </li>
        <li>
            <i class="fa-regular fa-circle-check"></i>টেন্যান্ট ব্যবস্থাপনা
        </li>
        <li>
            <i class="fa-regular fa-circle-check"></i>সম্পত্তির রক্ষণাবেক্ষণ এবং মেরামত সেবা
        </li>
        <li>
            <i class="fa-regular fa-circle-check"></i>ভাড়া সংগ্রহ এবং আর্থিক ব্যবস্থাপনা
        </li>
        <li>
            <i class="fa-regular fa-circle-check"></i>মার্কেটিং এবং বিজ্ঞাপন পরিষেবা
        </li>
        <li>
            <i class="fa-regular fa-circle-check"></i>সম্পত্তি পরিদর্শন এবং আইনগত পরামর্শ
        </li>
    </ul>
</div>
            ',
            'image' => 'frontend/assets/images/home_page_image/ti_service/real_state.png',
            'background_color' => '#fef2f2',
            'slug' => 'real-estate-management'
        ]);

        ItServices::create([
            'title' => 'ল্যান্ডিং ম্যানেজমেন্ট',
            'short_description' => 'Laravel ল্যান্ডিং ম্যানেজমেন্ট সাইট ডেভোলাপমেন্ট সার্ভিস প্রদান করি',
            'description' => '
            <div class="landing_management_services">
    <div class="landing_management_services_title">
        আমরা যেই ল্যান্ডিং ম্যানেজমেন্ট সার্ভিসগুলো দিয়ে থাকি
    </div>
    <ul>
        <li>
            <i class="fa-regular fa-circle-check"></i>জমির মালিকানা যাচাই ও যাচাই-বাছাই
        </li>
        <li>
            <i class="fa-regular fa-circle-check"></i>জমির নথি সংরক্ষণ ও ডিজিটাল ডাটাবেস তৈরি
        </li>
        <li>
            <i class="fa-regular fa-circle-check"></i>জমি ক্রয় এবং বিক্রয় ব্যবস্থাপনা
        </li>
        <li>
            <i class="fa-regular fa-circle-check"></i>জমির কর হিসাব এবং পরিশোধ ব্যবস্থা
        </li>
        <li>
            <i class="fa-regular fa-circle-check"></i>জমি উন্নয়ন পরিকল্পনা ও বাস্তবায়ন
        </li>
        <li>
            <i class="fa-regular fa-circle-check"></i>আইনগত পরামর্শ এবং জমি সংক্রান্ত সমস্যা সমাধান
        </li>
        <li>
            <i class="fa-regular fa-circle-check"></i>জমি সংক্রান্ত তথ্যের জন্য নির্ভরযোগ্য পরামর্শ সেবা
        </li>
    </ul>
</div>
            ',
            'image' => 'frontend/assets/images/home_page_image/ti_service/landing.png',
            'background_color' => '#fef2f2',
            'slug' => 'landing-management'
        ]);
    }
}
