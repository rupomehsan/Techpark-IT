<?php

namespace Database\Seeders\Course;

use App\Models\Course\CourseInstructors;
use Illuminate\Database\Seeder;

class CourseInstructorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @return void
     *
     */
    public function run()
    {
        CourseInstructors::truncate();
        CourseInstructors::create([
            'user_id' => 1,
            'course_id' => 1,
            'full_name' => 'মুহাম্মদ সিফাতুল্লাহ',
            'designation' => 'ওয়েব ডিজাইন ও ডেভোলাপার',
            'cover_photo' => 'frontend/assets/images/about_page_image/trainers_images/shefat_masum.png',
            'details' => 'দীর্ঘ ৭ বছরেরও বেশি সময় ধরে ওয়েব ডিজাইন ও ডেভোলাপম্যান্ট ট্রেইনার হিসেবে কর্মরত আছেন। এছাড়াও তিনি গত ৫ বছর ধরে Fiverr, Upwork ও Freelancer.com এ সফলতার সাথে ফ্রিলান্সিং করে আসছেন, ও ৩০০+ প্রজেক্ট সম্পন্ন করিয়েছেন

            তিনি ২০০০+ স্টুডেন্টকে ট্রেনিং করিয়েছেন, যারা বর্তমানে বাংলাদেশের বিভিন্ন স্বনামধন্য প্রতিষ্ঠানে কর্মরত আছেন।',
            'facebook' => 'https://www.facebook.com/masum.shefat.5',
            'github' => 'https://github.com/Md-shefat-masum',
            'linkedin' => 'https://bd.linkedin.com/in/masum-shefat-b61580173',
            'website' => 'https://shefat.info/',
        ]);

        CourseInstructors::create([
            'user_id' => 2,
            'course_id' => 1,
            'full_name' => 'মুহাম্মদ রুপম এহসান',
            'designation' => 'ওয়েব ডিজাইন ও ডেভোলাপার',
            'cover_photo' => 'frontend/assets/images/about_page_image/trainers_images/rupom_ehsan.jpg',
            'details' => '৩ বছরেরও বেশি সময় ধরে ওয়েব ডিজাইন ও ডেভোলাপম্যান্ট ট্রেইনার হিসেবে কর্মরত আছেন। এছাড়াও তিনি গত ২ বছর ধরে Fiverr, Upwork ও Freelancer.com এ সফলতার সাথে ফ্রিলান্সিং করে আসছেন, ও ১০০+ প্রজেক্ট সম্পন্ন করিয়েছেন
                             তিনি ১০০০+ স্টুডেন্টকে ট্রেনিং করিয়েছেন, যারা বর্তমানে বাংলাদেশের বিভিন্ন স্বনামধন্য প্রতিষ্ঠানে কর্মরত আছেন।',
            'facebook' => 'https://www.facebook.com/rupom.ehsan.5',
            'github' => 'https://github.com/rupomehsan',
            'linkedin' => 'https://bd.linkedin.com/in/md-rupom-ehsan-54515a1b2',
            'website' => 'https://softdevehsan.com/',
        ]);

        CourseInstructors::create([
            'user_id' => 3,
            'course_id' => 1,
            'full_name' => 'এস এম মাহফুজুর রহমান',
            'designation' => 'ওয়েব ডিজাইন ও ডেভোলাপার',
            'cover_photo' => 'frontend/assets/images/about_page_image/trainers_images/mahfujur_rahman.png',
            'details' => '৩ বছরেরও বেশি সময় ধরে ওয়েব ডিজাইন ও ডেভোলাপম্যান্ট ট্রেইনার হিসেবে কর্মরত আছেন। এছাড়াও তিনি গত ২ বছর ধরে Fiverr, Upwork ও Freelancer.com এ সফলতার সাথে ফ্রিলান্সিং করে আসছেন, ও ১০০+ প্রজেক্ট সম্পন্ন করিয়েছেন
                             তিনি ৫০০+ স্টুডেন্টকে ট্রেনিং করিয়েছেন, যারা বর্তমানে বাংলাদেশের বিভিন্ন স্বনামধন্য প্রতিষ্ঠানে কর্মরত আছেন।',
            'facebook' => 'https://www.facebook.com/akash.ajmain',
            'github' => 'https://github.com/MahfujuRahman',
            'linkedin' => 'https://bd.linkedin.com/in/s-m-mahfujur-rahman',
            'website' => 'https://mahfujurahman.github.io/portfolio/',
        ]);
    }
}
