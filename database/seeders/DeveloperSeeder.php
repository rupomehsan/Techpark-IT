<?php

namespace Database\Seeders;

use App\Models\Developer;
use Illuminate\Database\Seeder;

class DeveloperSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Developer::truncate();
        Developer::create([
            "name" => "Shefat Masum",
            "designation" => "Sr. Software Engineer & System Analyst",
            "description" => "Innovative software engineer with 7+ years of experience in developing full-stack web applications. Passionate about leveraging cutting-edge technology to solve complex problems and deliver exceptional digital solutions.",
            "image" => "frontend/assets/images/developers/shefat.jpg",
            'email' => 'mshefat924@gmail.com',
            'phone' => '+8801646376015',
            'facebook' => 'https://www.facebook.com/masum.shefat.5',
            'github' => 'https://github.com/Md-shefat-masum',
            'linkedin' => 'https://bd.linkedin.com/in/masum-shefat-b61580173',
            'website' => 'https://shefat.info/',
            'slug' => 'shefat-masum',
            'status' => 'active'
        ]);

        Developer::create([
            "name" => "Rupom Ehsan",
            "designation" => "Software Engineer & Project Manager",
            "description" => "Dedicated software engineer with 3+ years of experience in developing full-stack web applications. Skilled in creating innovative solutions that integrate modern technology with user-friendly design.",
            "image" => "frontend/assets/images/developers/ehsan.jpg",
            'email' => 'rupomehsan34@gmail.com',
            'phone' => '+8801931374336',
            'facebook' => 'https://www.facebook.com/rupom.ehsan.5',
            'github' => 'https://github.com/rupomehsan',
            'linkedin' => 'https://bd.linkedin.com/in/md-rupom-ehsan-54515a1b2',
            'website' => 'https://ehsan.techparkit.org/',
            'slug' => 'rupom-ehsan',
            'status' => 'active'
        ]);

        Developer::create([
            "name" => "S. M. Mahfujur Rahman",
            "designation" => "Software Engineer",
            "description" => "Transforming complex challenges into elegant digital solutions. With 2+ years of experience, I craft innovative web applications that blend cutting-edge technology with intuitive design.",
            "image" => "frontend/assets/images/developers/ajmain.jpg",
            'email' => 'mahfujurahman2020@gmail.com',
            'phone' => '+8801954335310',
            'facebook' => 'https://www.facebook.com/akash.ajmain',
            'github' => 'https://github.com/MahfujuRahman',
            'linkedin' => 'https://bd.linkedin.com/in/s-m-mahfujur-rahman',
            'website' => 'https://mahfujurahman.github.io/portfolio/',
            'slug' => 's-m-mahfujur-rahman',
            'status' => 'active'
        ]);

        Developer::create([
            "name" => "Md Yamin Hossain",
            "designation" => "Software Engineer",
            "description" => "Passionate software engineer with 2+ years of experience in developing full-stack web applications. Adept at creating unique solutions that blend modern technology with user-centric design.",
            "image" => "frontend/assets/images/developers/yamin.jpg",
            'email' => 'yaminh911@gmail.com',
            'phone' => '+8801778696639',
            'facebook' => 'https://www.facebook.com/yamin.hossain.127735',
            'github' => 'https://github.com/yaminhossen',
            'linkedin' => 'https://bd.linkedin.com/in/yamin-hossain',
            'website' => 'yamin-hossain',
            'slug' => 'yamin-hossain',
            'status' => 'active'
        ]);

        Developer::create([
            "name" => "Md Shah Jalal",
            "designation" => "Software Engineer",
            "description" => "Experienced software engineer with a unique approach to developing full-stack web applications. Combining modern technology with creative problem-solving to deliver exceptional digital experiences.",
            "image" => "frontend/assets/images/developers/shahjalal.jpg",
            'email' => 'shah.jalal.ju.bd@gmail.com',
            'phone' => '+8801303856860',
            'facebook' => 'https://www.facebook.com/shahjalal.programmer',
            'github' => 'https://github.com/ProgrammerShahJalal',
            'linkedin' => 'https://bd.linkedin.com/in/ProgrammerShahJalal',
            'website' => 'https://shah-jalal.netlify.app',
            'slug' => 'shah-jalal',
            'status' => 'active'
        ]);

        Developer::create([
            "name" => "Muhammad Tasnimul Hasan",
            "designation" => "Software Engineer",
            "description" => "Unique software engineer with 2+ years of experience in developing full-stack web applications. Skilled in creating innovative solutions that integrate modern technology with user-friendly design.",
            "image" => "frontend/assets/images/developers/jawad.jpg",
            'email' => 'tasnimulh453@gmail.com',
            'phone' => '+8801554562071',
            'facebook' => 'https://www.facebook.com/share/1Bt6aXECAP/',
            'github' => 'https://github.com/tasnim-jawad',
            'linkedin' => 'https://bd.linkedin.com/in/muhammad-tasnimul-hasan-a691ab228',
            'website' => 'muhammad-tasnimul-hasan',
            'slug' => 'muhammad-tasnimul-hasan',
            'status' => 'active'
        ]);

        Developer::create([
            "name" => "Golam Sarower",
            "designation" => "Software Engineer (Full Stack Developer)",
            "description" => "Unique software engineer with 2+ years of experience in developing full-stack web applications. Skilled in creating innovative solutions that integrate modern technology with user-friendly design.",
            "image" => "frontend/assets/images/developers/bullet.jpg",
            'email' => 'glmsorowar@gmail.com',
            'phone' => '+8801791841963',
            'facebook' => 'https://www.facebook.com/golam.sarower.56027',
            'github' => 'https://github.com/gsBullet',
            'linkedin' => 'https://bd.linkedin.com/in/golam-sarower-311332220',
            'website' => 'https://golam-sarowar-portfolio.netlify.app/',
            'slug' => 'golam-sarower',
            'status' => 'inactive'
        ]);

        Developer::create([
            "name" => "Shihad Shikder",
            "designation" => "Software Engineer (Full Stack Developer)",
            "description" => "Unique software engineer with 2+ years of experience in developing full-stack web applications. Skilled in creating innovative solutions that integrate modern technology with user-friendly design.",
            "image" => "https://cdn.pixabay.com/photo/2020/07/01/12/58/icon-5359553_640.png",
            'email' => 'shihab.wxy@gmail.com',
            'phone' => '+8801554562071',
            'facebook' => 'https://www.facebook.com/profile.php?id=100075039163381',
            'github' => 'https://github.com/creativesh17',
            'linkedin' => '#',
            'website' => 'shihab-shikder',
            'slug' => 'shihab-shikder',
            'status'=> 'inactive'
        ]);

        Developer::create([
            "name" => "Anamul Hasan Momin",
            "designation" => "Intern (Web Developer)",
            "description" => "Aspiring web developer with a passion for learning and building innovative web applications. Eager to contribute and grow in a dynamic development environment.",
             "image" => "frontend/assets/images/developers/mumin.png",
            'email' => 'mdmuminjap@gmail.com',
            'phone' => '+8801872817011',
            'facebook' => 'https://www.facebook.com/md.mumin.5203',
            'github' => 'https://github.com/mdmumin',
            'linkedin' => 'https://www.linkedin.com/in/md-momin-54b39522b/',
            'website' => 'anamul-hasan-momin',
            'slug' => 'anamul-hasan-momin',
            'status'=> 'active'
        ]);

        Developer::create([
            "name" => "Md Nazmul Haque",
            "designation" => "Intern (Web Developer)",
            "description" => "Learning software engineer specializing in full-stack web development. Passionate about acquiring new skills and contributing to dynamic, scalable applications.",
            "image" => "frontend/assets/images/developers/nazmul.jpeg",
            'email' => 'nazmulbu52@gmail.com',
            'phone' => '+880179390428',
            'facebook' => 'https://www.facebook.com/nazmul.nahid998',
            'github' => 'https://github.com/nazmulnazmul',
            'linkedin' => 'https://www.linkedin.com/in/mdnazmul1998/',
            'website' => 'nazmul-haque',
            'slug' => 'nazmul-haque',
            'status'=> 'active'
        ]);
        Developer::create([
            "name" => "Mehedi Hasan Abir",
            "designation" => "Intern (Web Developer)",
            "description" => "Aspiring web developer with hands-on experience in HTML, CSS, JavaScript (basic), and PHP (basic). Currently focusing on mastering Laravel to build dynamic and scalable web applications. Passionate about clean code, continuous learning, and crafting impactful digital experiences.",
            "image" => "frontend/assets/images/developers/abir.jpeg",
            'email' => 'abirwww770@gmail.com',
            'phone' => '+8801572388229',
            'facebook' => 'https://www.facebook.com/abirwww',
            'github' => 'https://github.com/abirwww',
            'linkedin' => 'https://www.linkedin.com/in/abirwww/',
            'website' => 'https://app.netlify.com/teams/abirwww/projects',
            'slug' => 'mehedi-hasan-abir',
            'status'=> 'active'
        ]);
    }
}
