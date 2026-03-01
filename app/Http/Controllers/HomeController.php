<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // ==================== SLIDER SECTION ====================
        $sliderData = [
            [
                'id' => 1,
                'background_image' => 'frontend/assets/images/banner/ecommerce.png',
                'subtitle' => 'Advanced E-Commerce Solutions',
                'title' => '<span>TechPark IT</span><br> E-Commerce <br><span>Platform</span>',
                'description' => 'Transform your business with our cutting-edge <br> E-Commerce solution - Complete inventory, payment <br> gateway & analytics in one platform',
                'btn_primary_text' => 'Get Started',
                'btn_primary_link' => '#contact',
                'btn_secondary_text' => 'Learn More',
                'btn_secondary_link' => '#services'
            ],
            [
                'id' => 2,
                'background_image' => 'frontend/assets/images/banner/sms.png',
                'subtitle' => 'Comprehensive School Management System',
                'title' => '<span>TechPark IT</span><br> School Management<br> <span>System</span>',
                'description' => 'Streamline your educational institution with our <br> all-in-one SMS - Student records, attendance, grades,<br> fees management & parent communication',
                'btn_primary_text' => 'Get Started',
                'btn_primary_link' => '#contact',
                'btn_secondary_text' => 'Learn More',
                'btn_secondary_link' => '#services'
            ],
            [
                'id' => 3,
                'background_image' => 'frontend/assets/images/banner/team.jpeg',
                'subtitle' => 'IT Solutions Designed for Your Success',
                'title' => 'Techpark IT <span>Strategies</span> <br> <span>to Drive Your Business</span> <br> Forward',
                'description' => 'From strategic IT consulting to seamless <br> implementation, we deliver best solutions <br> that drive efficiency',
                'btn_primary_text' => 'Get Started',
                'btn_primary_link' => '#contact',
                'btn_secondary_text' => 'Read More',
                'btn_secondary_link' => '#about'
            ]
        ];

        // ==================== ABOUT US SECTION ====================
        $aboutData = [
            'tagline' => 'About  TechPark IT',
            'title' => 'Unlock Your Business Potential with Technology',
            'description' => 'Transform your business with our innovative IT solutions, tailored to address your unique challenges and drive growth in today\'s digital landscape.',
            'features' => [
                ['icon' => 'fas fa-check-circle', 'text' => 'Customized Solutions for Every Business'],
                ['icon' => 'fas fa-check-circle', 'text' => 'Enhanced Security and Data Protection'],
                ['icon' => 'fas fa-check-circle', 'text' => 'Scalable Infrastructure for Growth'],
                ['icon' => 'fas fa-check-circle', 'text' => 'Continuous system monitoring and expert support']
            ],
            'experience_years' => 5,
            'phone' => '+8801719229595',
            'phone_raw' => '+8801719229596',
            'image' => 'frontend/assets/images/about-two-img-1.jpg',
            'image_2' => 'frontend/assets/images/about-two-img-2.jpg',
            'satisfied_clients' => 50
        ];

        // ==================== COUNTER SECTION ====================
        $counterData = [
            [
                'id' => 1,
                'icon' => 'flaticon-success',
                'count' => 60,
                'suffix' => '+',
                'title' => 'Successfully<br> Complete Projects'
            ],
            [
                'id' => 2,
                'icon' => 'flaticon-consulting',
                'count' => 95,
                'suffix' => '%',
                'title' => 'Satisfaction Rate<br> Our Clients'
            ],
            [
                'id' => 3,
                'icon' => 'flaticon-user-experience',
                'count' => 03,
                'suffix' => '+',
                'title' => 'Satisfied Clients<br> Countrywide'
            ],
            [
                'id' => 4,
                'icon' => 'flaticon-medal',
                'count' => 5,
                'suffix' => '+',
                'title' => 'Products<br> Launched Successfully'
            ]
        ];

        // ==================== SERVICES SECTION ====================
        $servicesData = [
            [
                'id' => 1,
                'count' => '01',
                'title' => 'Web Design',
                'link' => '#services',
                'features' => [
                    ['Responsive Design', 'Modern Layouts'],
                    ['Landing Pages', 'E-Commerce Design'],
                    ['Custom Templates', 'Brand Identity']
                ],
                'image' => 'frontend/assets/images/services-2-1.jpg'
            ],
            [
                'id' => 2,
                'count' => '02',
                'title' => 'Web Development',
                'link' => '#services',
                'features' => [
                    ['Full Stack Development', 'CMS Integration'],
                    ['Database Design', 'API Development'],
                    ['Performance Optimization', 'Security Implementation']
                ],
                'image' => 'frontend/assets/images/services-2-2.jpg'
            ],
            [
                'id' => 3,
                'count' => '03',
                'title' => 'Graphics Design',
                'link' => '#services',
                'features' => [
                    ['Logo Design', 'Brand Identity'],
                    ['Social Media Graphics', 'Marketing Materials'],
                    ['Illustrations', 'Print Design']
                ],
                'image' => 'frontend/assets/images/services-2-3.jpg'
            ],
            [
                'id' => 4,
                'count' => '04',
                'title' => 'UI/UX Design',
                'link' => '#services',
                'features' => [
                    ['User Research', 'Wireframing'],
                    ['Prototyping', 'Usability Testing'],
                    ['Interface Design', 'User Flow Mapping']
                ],
                'image' => 'frontend/assets/images/services-2-4.jpg'
            ],
            [
                'id' => 5,
                'count' => '05',
                'title' => 'Web View',
                'link' => '#services',
                'features' => [
                    ['Cross-Platform Views', 'Hybrid Apps'],
                    ['PWA Development', 'WebView Optimization'],
                    ['Native Integration', 'Performance Tuning']
                ],
                'image' => 'frontend/assets/images/services-2-1.jpg'
            ],
            [
                'id' => 6,
                'count' => '06',
                'title' => 'Mobile Application',
                'link' => '#services',
                'features' => [
                    ['iOS Development', 'Android Development'],
                    ['Cross-Platform Apps', 'App Store Deployment'],
                    ['Push Notifications', 'Offline Functionality']
                ],
                'image' => 'frontend/assets/images/services-2-2.jpg'
            ]
        ];

        // ==================== WHY CHOOSE US SECTION ====================
        $whyChooseData = [
            'tagline' => 'Why Choose Us',
            'title' => 'Transform Your Business with Cutting-Edge Technology Solutions',
            'description' => 'We deliver innovative software solutions that drive digital transformation, enhance operational efficiency, and accelerate business growth through advanced technology and expert consultation.',
            'image' => 'frontend/assets/images/why-choose-one-img-1.png',
            'progress_bars' => [
                ['title' => 'Project Success Rate', 'percentage' => 95],
                ['title' => 'Client Satisfaction', 'percentage' => 98],
                ['title' => 'Team Expertise', 'percentage' => 98],
                ['title' => 'On-Time Delivery', 'percentage' => 98]
            ],
            'client_info' => [
                'name' => 'Md. Ehsan Habib',
                'position' => 'Founder & CEO, TechPark IT',
                'image' => 'frontend/assets/images/why-choose-one-client-img.jpg'
            ],
            'btn_text' => 'About Us',
            'btn_link' => '#about'
        ];

        // ==================== PROCESS SECTION ====================
        $processData = [
            [
                'id' => 1,
                'title' => 'Client Requirements',
                'description' => 'We start by gathering comprehensive client requirements, understanding business objectives, target audience, and project goals to create a solid foundation.'
            ],
            [
                'id' => 2,
                'title' => 'Requirement Analysis',
                'description' => 'Our team analyzes requirements in-depth, identifying technical specifications, features, and creating detailed documentation for seamless execution.'
            ],
            [
                'id' => 3,
                'title' => 'UI/UX Design',
                'description' => 'We craft intuitive user interfaces and exceptional user experiences, creating wireframes, prototypes, and modern designs that engage users.'
            ],
            [
                'id' => 4,
                'title' => 'Web Development',
                'description' => 'Our developers bring designs to life with clean, efficient code, implementing features and functionality using cutting-edge technologies.'
            ],
            [
                'id' => 5,
                'title' => 'Debugging & Testing',
                'description' => 'Rigorous quality assurance and testing ensure bug-free performance. We conduct comprehensive tests to guarantee optimal functionality.'
            ],
            [
                'id' => 6,
                'title' => 'Deployment & Launch',
                'description' => 'After final approval, we deploy your project to production, ensuring smooth launch with continuous monitoring and post-launch support.'
            ]
        ];

        // ==================== PORTFOLIO SECTION ====================
        $portfolioData = [
            [
                'id' => 1,
                'title' => 'Innovative Digital Solutions for a Smarter Future',
                'description' => 'Pioneering next-gen IT solutions that enhance efficiency and innovation.',
                'image' => 'frontend/assets/images/blog-2-3.jpg',
                'tags' => ['Web Development', 'Branding'],
                'year' => '2025',
                'link' => '#portfolio'
            ],
            [
                'id' => 2,
                'title' => 'Transforming Businesses Through Technology',
                'description' => 'Empowering enterprises with scalable, cutting-edge digital platforms.',
                'image' => 'frontend/assets/images/blog-2-3.jpg',
                'tags' => ['Mobile App', 'Cloud Solutions'],
                'year' => '2025',
                'link' => '#portfolio'
            ],
            [
                'id' => 3,
                'title' => 'Custom E-Commerce Platform Development',
                'description' => 'Building robust online stores with seamless shopping experiences.',
                'image' => 'frontend/assets/images/blog-2-3.jpg',
                'tags' => ['E-Commerce', 'Full Stack'],
                'year' => '2024',
                'link' => '#portfolio'
            ],
            [
                'id' => 4,
                'title' => 'Enterprise Resource Planning System',
                'description' => 'Integrated ERP solutions for streamlined business operations.',
                'image' => 'frontend/assets/images/blog-2-3.jpg',
                'tags' => ['Enterprise Software', 'Database'],
                'year' => '2024',
                'link' => '#portfolio'
            ],
            [
                'id' => 5,
                'title' => 'School Management System Excellence',
                'description' => 'Comprehensive educational management platform for modern institutions.',
                'image' => 'frontend/assets/images/blog-2-3.jpg',
                'tags' => ['Education Tech', 'SaaS'],
                'year' => '2024',
                'link' => '#portfolio'
            ],
            [
                'id' => 6,
                'title' => 'Future-Ready IT Solutions for Every Industry',
                'description' => 'Adaptive and robust IT services built to thrive in a dynamic landscape.',
                'image' => 'frontend/assets/images/blog-2-3.jpg',
                'tags' => ['UI/UX Design', 'Product Design'],
                'year' => '2025',
                'link' => '#portfolio'
            ]
        ];

        // ==================== BLOG SECTION ====================
        $blogData = [
            [
                'id' => 1,
                'title' => 'The Future is Now: A 2026 Guide to Digital Transformation',
                'excerpt' => 'Winning the Digital Race: The 2026 Transformation Roadmap',
                'author' => 'Jordan Walk',
                'author_image' => 'frontend/assets/images/blog-two-user-1.jpg',
                'date' => 'February 25, 2026',
                'comments' => 80,
                'tags' => ['Digital', 'Technology'],
                'image' => 'frontend/assets/images/blog-2-1.jpg',
                'link' => '#blog'
            ],
            [
                'id' => 2,
                'title' => '5 Key Trends Shaping the Future of Technology',
                'excerpt' => 'Discover the emerging trends that will define tech innovation',
                'author' => 'John Smith',
                'author_image' => 'frontend/assets/images/blog-two-user-2.jpg',
                'date' => 'February 20, 2026',
                'comments' => 12,
                'tags' => ['Digital', 'Technology'],
                'image' => 'frontend/assets/images/blog-2-2.jpg',
                'link' => '#blog'
            ],
            [
                'id' => 3,
                'title' => 'How to Maximize Efficiency with Smart Business',
                'excerpt' => 'Transform your operations with intelligent automation',
                'author' => 'Alisa Olivia',
                'author_image' => 'frontend/assets/images/blog-two-user-3.jpg',
                'date' => 'February 13, 2026',
                'comments' => 12,
                'tags' => ['Digital', 'Technology'],
                'image' => 'frontend/assets/images/blog-2-3.jpg',
                'link' => '#blog'
            ]  ,
            [
                'id' => 4,
                'title' => 'The Power of Data-Driven Decision Making',
                'excerpt' => 'Unlock insights and drive growth with data analytics',
                'author' => 'Michael Johnson',
                'author_image' => 'frontend/assets/images/blog-two-user-4.jpg',
                'date' => 'February 10, 2026',
                'comments' => 12,
                'tags' => ['Digital', 'Technology'],
                'image' => 'frontend/assets/images/blog-2-4.jpg',
                'link' => '#blog'
            ]
        ];

        // ==================== EVENTS SECTION ====================
        $eventsData = [
            [
                'id' => 1,
                'title' => 'Tech Innovation Summit 2026',
                'date' => '15',
                'month' => 'Mar',
                'time' => '09:00 AM - 05:00 PM',
                'location' => 'Dhaka, Bangladesh'
            ],
            [
                'id' => 2,
                'title' => 'Digital Transformation Workshop',
                'date' => '22',
                'month' => 'Mar',
                'time' => '10:00 AM - 03:00 PM',
                'location' => 'Dhaka, Bangladesh'
            ],
            [
                'id' => 3,
                'title' => 'Cloud Computing Conference',
                'date' => '05',
                'month' => 'Apr',
                'time' => '09:30 AM - 04:30 PM',
                'location' => 'Dhaka, Bangladesh'
            ]
        ];

        // ==================== TESTIMONIALS SECTION ====================
        $testimonialsData = [
            [
                'id' => 1,
                'name' => 'Thomas Alison eh',
                'position' => 'UI/UX Designer',
                'rating' => 5,
                'content' => 'Absolutely fantastic experience! The team exceeded our expectations and delivered a solution that perfectly met our needs.',
                'image' => 'frontend/assets/images/testimonial-2-1.jpg'
            ],
            [
                'id' => 2,
                'name' => 'Sarah Williams',
                'position' => 'Marketing Manager',
                'rating' => 5,
                'content' => 'Working with TechPark IT has been a game-changer for our business. Their expertise helped us streamline operations.',
                'image' => 'frontend/assets/images/testimonial-2-2.jpg'
            ],
            [
                'id' => 3,
                'name' => 'James Anderson',
                'position' => 'Product Designer',
                'rating' => 5,
                'content' => 'Professional, reliable, and innovative! TechPark IT delivered our e-commerce platform ahead of schedule.',
                'image' => 'frontend/assets/images/testimonial-2-3.jpg'
            ],
            [
                'id' => 4,
                'name' => 'Emily Rodriguez',
                'position' => 'Business Owner',
                'rating' => 5,
                'content' => 'The School Management System they developed for us is outstanding! It has revolutionized our institution.',
                'image' => 'frontend/assets/images/testimonial-2-4.jpg'
            ],
            [
                'id' => 5,
                'name' => 'David Chen',
                'position' => 'CTO, StartupX',
                'rating' => 5,
                'content' => 'From concept to deployment, TechPark IT guided us every step. Their solution perfectly fits our needs.',
                'image' => 'frontend/assets/images/testimonial-2-5.jpg'
            ],
            [
                'id' => 6,
                'name' => 'Michael Johnson',
                'position' => 'Operations Director',
                'rating' => 5,
                'content' => 'Outstanding service and support! The team is incredibly responsive and knowledgeable.',
                'image' => 'frontend/assets/images/testimonial-2-1.jpg'
            ],
            [
                'id' => 7,
                'name' => 'Lisa Parker',
                'position' => 'Tech Lead',
                'rating' => 5,
                'content' => 'Highly recommended! They transformed our outdated systems into modern, efficient solutions.',
                'image' => 'frontend/assets/images/testimonial-2-2.jpg'
            ]
        ];

        // ==================== TEAM SECTION ====================
        $teamData = [
            'tagline' => 'Our Team',
            'title' => 'Meet Our Expert <span>Team Members</span>',
            'description' => 'Our dedicated team of professionals brings years of experience and expertise to deliver exceptional solutions',
            'members' => [
                [
                    'id' => 1,
                    'name' => 'James Carter eh',
                    'position' => 'CEO & Founder',
                    'image' => 'frontend/assets/images/team/team-1-1.jpg',
                    'facebook' => '#',
                    'dribble' => '#',
                    'linkedin' => '#',
                    'link' => '#team-details'
                ],
                [
                    'id' => 2,
                    'name' => 'Sophia Reynolds',
                    'position' => 'Chief Technology Officer',
                    'image' => 'frontend/assets/images/team/team-1-2.jpg',
                    'facebook' => '#',
                    'dribble' => '#',
                    'linkedin' => '#',
                    'link' => '#team-details'
                ],
                [
                    'id' => 3,
                    'name' => 'Michael Hayes',
                    'position' => 'Lead Software Engineer',
                    'image' => 'frontend/assets/images/team/team-1-3.jpg',
                    'facebook' => '#',
                    'dribble' => '#',
                    'linkedin' => '#',
                    'link' => '#team-details'
                ],
                [
                    'id' => 4,
                    'name' => 'Emma Brooks',
                    'position' => 'UI/UX Designer',
                    'image' => 'frontend/assets/images/team/team-1-4.jpg',
                    'facebook' => '#',
                    'dribble' => '#',
                    'linkedin' => '#',
                    'link' => '#team-details'
                ],
                [
                    'id' => 5,
                    'name' => 'Sarah Johnson',
                    'position' => 'Marketing Manager',
                    'image' => 'frontend/assets/images/team/team-1-5.jpg',
                    'facebook' => '#',
                    'dribble' => '#',
                    'linkedin' => '#',
                    'link' => '#team-details'
                ],
                [
                    'id' => 6,
                    'name' => 'David Matthews',
                    'position' => 'Product Designer',
                    'image' => 'frontend/assets/images/team/team-1-6.jpg',
                    'facebook' => '#',
                    'dribble' => '#',
                    'linkedin' => '#',
                    'link' => '#team-details'
                ],
                [
                    'id' => 7,
                    'name' => 'Olivia Grace',
                    'position' => 'Sales Director',
                    'image' => 'frontend/assets/images/team/team-1-7.jpg',
                    'facebook' => '#',
                    'dribble' => '#',
                    'linkedin' => '#',
                    'link' => '#team-details'
                ],
                [
                    'id' => 8,
                    'name' => 'Mitchell Marsh',
                    'position' => 'Operations Lead',
                    'image' => 'frontend/assets/images/team/team-1-8.jpg',
                    'facebook' => '#',
                    'dribble' => '#',
                    'linkedin' => '#',
                    'link' => '#team-details'
                ]
            ]
        ];

        // ==================== CONTACT SECTION ====================
        $contactData = [
            'tagline' => 'Contact Us',
            'title' => 'Let\'s Work Together',
            'description' => 'We\'re here to listen! Whether you have questions, need support, or just want to say hello, feel free to reach out.',
            'phone' => '+880 1683 39 22 41',
            'phone_raw' => '+8801683392241',
            'email' => 'techparkitsolutions@gmail.com',
            'address' => 'Mirpur-06, Dhaka, Bangladesh'
        ];

        return view('welcome', compact(
            'sliderData',
            'aboutData',
            'counterData',
            'servicesData',
            'whyChooseData',
            'processData',
            'portfolioData',
            'teamData',
            'blogData',
            'eventsData',
            'testimonialsData',
            'contactData'
        ));
    }
}
