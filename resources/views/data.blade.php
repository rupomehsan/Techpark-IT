     @php
            // Dynamic Slider Data Array
            $sliderData = [
                [
                    'id' => 1,
                    'background_image' => 'frontend/assets/images/banner/ecommerce.png',
                    'subtitle' => 'Advanced E-Commerce Solutions',
                    'title' => '<span>TechPark IT</span><br> E-Commerce <br><span>Platform</span>',
                    'description' =>
                        'Transform your business with our cutting-edge <br> E-Commerce solution - Complete inventory, payment <br> gateway & analytics in one platform',
                    'btn_primary_text' => 'Get Started',
                    'btn_primary_link' => '#contact',
                    'btn_secondary_text' => 'Learn More',
                    'btn_secondary_link' => '#services',
                ],
                [
                    'id' => 2,
                    'background_image' => 'frontend/assets/images/banner/sms.png',
                    'subtitle' => 'Comprehensive School Management System',
                    'title' => '<span>TechPark IT</span><br> School Management<br> <span>System</span>',
                    'description' =>
                        'Streamline your educational institution with our <br> all-in-one SMS - Student records, attendance, grades,<br> fees management & parent communication',
                    'btn_primary_text' => 'Get Started',
                    'btn_primary_link' => '#contact',
                    'btn_secondary_text' => 'Learn More',
                    'btn_secondary_link' => '#services',
                ],
                [
                    'id' => 3,
                    'background_image' => 'frontend/assets/images/banner/team.jpeg',
                    'subtitle' => 'IT Solutions Designed for Your Success',
                    'title' =>
                        'Techpark IT <span>Strategies</span> <br> <span>to Drive Your Business</span> <br> Forward',
                    'description' =>
                        'From strategic IT consulting to seamless <br> implementation, we deliver best solutions <br> that drive efficiency',
                    'btn_primary_text' => 'Get Started',
                    'btn_primary_link' => '#contact',
                    'btn_secondary_text' => 'Read More',
                    'btn_secondary_link' => '#about',
                ],
            ];

            // ================= ABOUT US DATA =================
            $aboutData = [
                'tagline' => 'About Us - TechPark IT',
                'title' => 'Unlock Your Business Potential with Technology',
                'description' => 'Transform your business with our innovative IT solutions, strategic consulting, and cutting-edge technology to navigate today\'s digital landscape.',
                'features' => [
                    ['icon' => 'fas fa-check-circle', 'text' => 'Customized Solutions for<br> Every Business'],
                    ['icon' => 'fas fa-check-circle', 'text' => 'Enhanced Security and Data<br> Protection'],
                    ['icon' => 'fas fa-check-circle', 'text' => 'Scalable Infrastructure for<br> Growth'],
                    ['icon' => 'fas fa-check-circle', 'text' => 'Continuous system<br> monitoring and expert<br> support'],
                ],
                'experience_years' => 25,
                'total_clients' => '120K',
                'phone' => '+880172 97 22 221',
            ];

            // ================= SERVICES DATA =================
            $servicesData = [
                'services' => [
                    [
                        'title' => 'Software Development<br> Solutions',
                        'link' => '#services',
                        'features' => [
                            ['UI/UX Design', 'Mobile Application'],
                            ['Web Development', 'API Integration'],
                            ['Quality Assurance', 'Maintenance'],
                        ],
                        'image' => 'frontend/assets/images/services-2-1.jpg',
                    ],
                    [
                        'title' => 'Cybersecurity Risk<br> Management',
                        'link' => '#services',
                        'features' => [
                            ['Security Audit', 'Threat Detection'],
                            ['Data Encryption', 'Compliance'],
                            ['Network Security', '24/7 Monitoring'],
                        ],
                        'image' => 'frontend/assets/images/services-2-2.jpg',
                    ],
                    [
                        'title' => 'Cloud Solutions<br> Provider',
                        'link' => '#services',
                        'features' => [
                            ['Cloud Migration', 'Infrastructure'],
                            ['Scalability', 'Cost Optimization'],
                            ['Backup Solutions', 'Support'],
                        ],
                        'image' => 'frontend/assets/images/services-2-3.jpg',
                    ],
                    [
                        'title' => 'Data Analytics<br> Consulting',
                        'link' => '#services',
                        'features' => [
                            ['Data Insights', 'Predictive Analytics'],
                            ['Big Data', 'Business Intelligence'],
                            ['Visualization', 'Strategy'],
                        ],
                        'image' => 'frontend/assets/images/services-2-4.jpg',
                    ],
                ],
            ];

            // ================= WHY CHOOSE US DATA =================
            $whyChooseData = [
                'progress_items' => [
                    ['title' => 'Campaign Launches', 'percentage' => 86],
                    ['title' => 'Innovation Design', 'percentage' => 76],
                ],
            ];

            // ================= PORTFOLIO DATA =================
            $portfolioData = [
                'projects' => [
                    [
                        'title' => 'Innovative Solutions,<br> Powerful Results',
                        'description' => 'Explore How We\'ve Empowered Businesses with Innovative Tech Solutions',
                        'image' => 'frontend/assets/images/project/portfolio-2-1.jpg',
                        'link' => '#portfolio',
                    ],
                    [
                        'title' => 'Transforming Ideas Into<br> Digital Excellence',
                        'description' => 'Discover Our Journey in Crafting Digital Masterpieces',
                        'image' => 'frontend/assets/images/project/portfolio-2-2.jpg',
                        'link' => '#portfolio',
                    ],
                    [
                        'title' => 'Building Tomorrow\'s<br> Tech Solutions Today',
                        'description' => 'See How We Turn Vision Into Reality',
                        'image' => 'frontend/assets/images/project/portfolio-2-3.jpg',
                        'link' => '#portfolio',
                    ],
                ],
            ];

            // ================= BLOG DATA =================
            $blogData = [
                'posts' => [
                    [
                        'title' => 'The Future is Now: A 2026 Guide to Digital Transformation',
                        'excerpt' => 'Winning the Digital Race: The 2026 Transformation Roadmap',
                        'author' => 'Jordan Walk',
                        'author_image' => 'frontend/assets/images/blog-two-user-1.jpg',
                        'date' => 'February 25, 2026',
                        'comments' => 80,
                        'tags' => ['Digital', 'Technology'],
                        'image' => 'frontend/assets/images/blog-2-1.jpg',
                        'link' => '#blog',
                    ],
                    [
                        'title' => 'AI Revolution: Transforming Business Operations',
                        'excerpt' => 'How AI is Reshaping Enterprise Solutions',
                        'author' => 'Sarah Mitchell',
                        'author_image' => 'frontend/assets/images/blog-two-user-2.jpg',
                        'date' => 'February 20, 2026',
                        'comments' => 65,
                        'tags' => ['AI', 'Innovation'],
                        'image' => 'frontend/assets/images/blog-2-2.jpg',
                        'link' => '#blog',
                    ],
                    [
                        'title' => 'Cybersecurity Best Practices for Enterprises',
                        'excerpt' => 'Essential Security Measures Every Business Should Implement',
                        'author' => 'Michael Chen',
                        'author_image' => 'frontend/assets/images/blog-two-user-3.jpg',
                        'date' => 'February 15, 2026',
                        'comments' => 92,
                        'tags' => ['Security', 'Enterprise'],
                        'image' => 'frontend/assets/images/blog-2-3.jpg',
                        'link' => '#blog',
                    ],
                ],
            ];

            // ================= TESTIMONIALS DATA =================
            $testimonialsData = [
                'testimonials' => [
                    [
                        'name' => 'Thomas Alison',
                        'position' => 'UI/UX Designer',
                        'rating' => 5,
                        'content' => 'Absolutely fantastic experience! The team exceeded our expectations and delivered a solution that perfectly met our needs.',
                        'image' => 'frontend/assets/images/testimonial-2-1.jpg',
                    ],
                    [
                        'name' => 'Sarah Johnson',
                        'position' => 'CEO, Tech Innovations',
                        'rating' => 5,
                        'content' => 'Working with TechPark IT has been a game-changer for our business. Their expertise helped us streamline operations.',
                        'image' => 'frontend/assets/images/testimonial-2-2.jpg',
                    ],
                    [
                        'name' => 'Michael Rodriguez',
                        'position' => 'CTO, Digital Solutions Inc',
                        'rating' => 5,
                        'content' => 'Professional, reliable, and innovative! TechPark IT delivered our eCommerce platform ahead of schedule.',
                        'image' => 'frontend/assets/images/testimonial-2-3.jpg',
                    ],
                    [
                        'name' => 'Emily Chen',
                        'position' => 'Director, Education Hub',
                        'rating' => 5,
                        'content' => 'The School Management System they developed for us is outstanding! It has revolutionized how we manage our institution.',
                        'image' => 'frontend/assets/images/testimonial-2-4.jpg',
                    ],
                    [
                        'name' => 'David Williams',
                        'position' => 'Founder, StartupX',
                        'rating' => 5,
                        'content' => 'From concept to deployment, TechPark IT guided us every step. Their custom software solution perfectly fits our needs.',
                        'image' => 'frontend/assets/images/testimonial-2-5.jpg',
                    ],
                ],
            ];
        @endphp
