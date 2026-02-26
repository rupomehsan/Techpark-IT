@php
    $meta = [
        'seo' => [
            'title' => 'Developer Profile | John Doe',
            'image' => 'https://placehold.co/1200x628?text=Developer+Portfolio',
        ],
    ];
@endphp
@extends('frontend.layouts.layout', $meta)
@section('contents')
    <div class="container-fluid px-0">
        <!-- Hero Section with Gradient Overlay -->
        <div class="hero-section position-relative text-white"
            style="background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);">
            <div class="container py-5">
                <div class="row align-items-center">
                    <div class="col-md-4 text-center mb-4 mb-md-0">
                        <div class="profile-image-container position-relative">
                            <img src="https://png.pngtree.com/png-clipart/20230927/original/pngtree-man-avatar-image-for-profile-png-image_13001882.png"
                                alt="John Doe" class="img-fluid rounded-circle shadow-lg"
                                style="max-width: 350px; border: 5px solid rgba(255,255,255,0.2);">
                            {{-- <img src="https://placehold.co/400x400?text=John+Doe" alt="John Doe"
                                class="img-fluid rounded-circle shadow-lg"
                                style="max-width: 350px; border: 5px solid rgba(255,255,255,0.2);"> --}}
                        </div>
                    </div>
                    <div class="col-md-8">
                        <h1 class="display-4 fw-bold mb-3 animate__animated animate__fadeInUp">John Doe</h1>
                        <h3 class="mb-4 text-warning animate__animated animate__fadeInUp animate__delay-1s">
                            Senior Full Stack Developer
                        </h3>
                        <p class="lead mb-4 animate__animated animate__fadeInUp animate__delay-2s">
                            Transforming complex challenges into elegant digital solutions. With 7+ years of experience,
                            I craft innovative web applications that blend cutting-edge technology with intuitive design.
                        </p>
                        <div class="social-links mb-4">
                            <a href="#" class="text-white me-3"><i class="fab fa-github fa-2x"></i></a>
                            <a href="#" class="text-white me-3"><i class="fab fa-linkedin fa-2x"></i></a>
                            <a href="#" class="text-white"><i class="fab fa-twitter fa-2x"></i></a>
                        </div>
                        <div class="cta-buttons animate__animated animate__fadeInUp animate__delay-3s">
                            <a href="#contact" class="btn btn-warning btn-lg me-3 shadow">Hire Me</a>
                            <a href="#projects" class="btn btn-outline-light btn-lg shadow-sm">View Portfolio</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Skills Section with Modern Design -->
        <section class="skills-section bg-light py-5">
            <div class="container">
                <h2 class="text-center mb-5 fw-bold">Technical Arsenal</h2>
                <div class="row g-4">
                    @php
                        $skills = [
                            ['name' => 'HTML5', 'color' => 'danger'],
                            ['name' => 'CSS3', 'color' => 'info'],
                            ['name' => 'JavaScript', 'color' => 'warning'],
                            ['name' => 'React', 'color' => 'primary'],
                            ['name' => 'PHP', 'color' => 'secondary'],
                            ['name' => 'Laravel', 'color' => 'danger'],
                            ['name' => 'MySQL', 'color' => 'success'],
                            ['name' => 'AWS', 'color' => 'dark'],
                        ];
                    @endphp
                    @foreach ($skills as $skill)
                        <div class="col-6 col-md-3">
                            <div class="card skill-card border-0 text-center p-4 shadow-sm hover-lift">
                                <div class="skill-icon mb-3">
                                    <span class="badge bg-{{ $skill['color'] }} p-3" style="font-size: 2rem;">
                                        {{ $skill['name'] }}
                                    </span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- Experience Timeline with Modern Timeline -->
        <section class="experience-section py-5">
            <div class="container">
                <h2 class="text-center mb-5 fw-bold">Professional Journey</h2>
                <div class="timeline position-relative">
                    @php
                        $experiences = [
                            [
                                'title' => 'Senior Developer',
                                'company' => 'Tech Innovations Inc.',
                                'period' => '2020 - Present',
                                'description' =>
                                    'Architecting scalable solutions across e-commerce, healthcare, and fintech domains.',
                            ],
                            [
                                'title' => 'Web Developer',
                                'company' => 'Digital Solutions Lab',
                                'period' => '2017 - 2020',
                                'description' =>
                                    'Developed custom platforms with a 40% improvement in user engagement metrics.',
                            ],
                            [
                                'title' => 'Junior Developer',
                                'company' => 'StartUp Accelerator',
                                'period' => '2015 - 2017',
                                'description' =>
                                    'Collaborated on diverse projects, mastering full-stack development principles.',
                            ],
                        ];
                    @endphp
                    @foreach ($experiences as $experience)
                        <div class="timeline-item position-relative mb-4 ps-4 border-start border-3 border-primary">
                            <div class="timeline-content">
                                <h4 class="mb-1 fw-bold">{{ $experience['title'] }}</h4>
                                <h5 class="text-muted mb-2">{{ $experience['company'] }}</h5>
                                <span class="badge bg-secondary mb-2">{{ $experience['period'] }}</span>
                                <p>{{ $experience['description'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- Code Philosophy Section -->
        <section class="code-philosophy bg-dark text-white py-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <h2 class="mb-4 fw-bold">My Coding Philosophy</h2>
                        <div class="philosophy-points">
                            @php
                                $philosophies = [
                                    'Clean Code is Poetry' => 'Writing elegant, readable code that tells a story.',
                                    'Solve Problems, Not Just Symptoms' =>
                                        'Dive deep into root causes, not surface-level fixes.',
                                    'Continuous Learning' => 'Technology evolves. I evolve with it.',
                                ];
                            @endphp
                            @foreach ($philosophies as $title => $description)
                                <div class="philosophy-item mb-3">
                                    <h4 class="text-warning">{{ $title }}</h4>
                                    <p class="text-muted">{{ $description }}</p>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="code-mockup bg-secondary p-4 rounded">
                            <pre class="text-white"><code>
// Elegant Problem Solving
function solveWithPrecision(challenge) {
    return challenge
        .map(breakDown)
        .filter(isSignificant)
        .reduce(synthesize, Solution);
}

// Innovation is our compass
const innovate = (current, future) =>
    current.potential < future.impact
        ? future
        : current;
                            </code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Certification & Achievement Showcase -->
        <section class="achievements-section py-5 bg-light">
            <div class="container">
                <h2 class="text-center mb-5 fw-bold">Certifications & Achievements</h2>
                <div class="row g-4">
                    @php
                        $achievements = [
                            ['title' => 'AWS Certified Developer', 'issuer' => 'Amazon Web Services', 'year' => 2022],
                            ['title' => 'Full Stack JavaScript', 'issuer' => 'MongoDB University', 'year' => 2021],
                            ['title' => 'Machine Learning Specialist', 'issuer' => 'Google Cloud', 'year' => 2020],
                        ];
                    @endphp
                    @foreach ($achievements as $achievement)
                        <div class="col-md-4">
                            <div class="card achievement-card border-0 shadow-sm text-center p-4 hover-lift">
                                <div class="achievement-icon mb-3">
                                    <span class="badge bg-primary p-3" style="font-size: 1.2rem;">
                                        {{ $achievement['year'] }}
                                    </span>
                                </div>
                                <h4>{{ $achievement['title'] }}</h4>
                                <p class="text-muted">{{ $achievement['issuer'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- Interactive GitHub Contribution Graph -->
        <section class="github-section py-5">
            <div class="container">
                <h2 class="text-center mb-5 fw-bold">Open Source Contributions</h2>
                <div class="row">
                    <div class="col-12 text-center">
                        <!-- Placeholder for GitHub Graph -->
                        <div class="github-graph bg-light p-4 rounded">
                            <img src="https://placehold.co/1000x300?text=GitHub+Contribution+Graph"
                                alt="GitHub Contributions" class="img-fluid">
                        </div>
                        <div class="mt-4">
                            <a href="#" class="btn btn-outline-primary">
                                View GitHub Profile
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Tech Stack Depth Visualization -->
        <section class="tech-depth bg-dark text-white py-5">
            <div class="container">
                <h2 class="text-center mb-5 fw-bold text-white">Technology Depth</h2>
                <div class="row g-4">
                    @php
                        $techDepths = [
                            ['name' => 'Backend', 'skills' => ['PHP', 'NodeJS', 'Python'], 'level' => 90],
                            ['name' => 'Frontend', 'skills' => ['React', 'Vue', 'Angular'], 'level' => 85],
                            ['name' => 'DevOps', 'skills' => ['Docker', 'Kubernetes', 'AWS'], 'level' => 75],
                        ];
                    @endphp
                    @foreach ($techDepths as $tech)
                        <div class="col-md-4">
                            <div class="card bg-secondary text-white p-4">
                                <h4>{{ $tech['name'] }}</h4>
                                <div class="progress mb-3" style="height: 20px;">
                                    <div class="progress-bar bg-warning" role="progressbar"
                                        style="width: {{ $tech['level'] }}%" aria-valuenow="{{ $tech['level'] }}"
                                        aria-valuemin="0" aria-valuemax="100">
                                        {{ $tech['level'] }}%
                                    </div>
                                </div>
                                <p>{{ implode(' • ', $tech['skills']) }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- Previous Contact Section Remains the Same -->
    </div>

    <!-- Creative Project Showcase -->
    <section class="project-showcase bg-light py-5">
        <div class="container">
            <h2 class="text-center mb-5 fw-bold">Digital Narratives</h2>
            @php
                $projects = [
                    [
                        'title' => 'Healthcare Platform',
                        'description' =>
                            'Innovative telemedicine solution connecting patients and healthcare providers.',
                        'technologies' => ['React', 'Node.js', 'GraphQL'],
                        'image' => 'https://placehold.co/600x400?text=Healthcare+Platform',
                    ],
                    [
                        'title' => 'E-Learning Ecosystem',
                        'description' => 'Adaptive learning platform with AI-driven personalized learning paths.',
                        'technologies' => ['Vue.js', 'Django', 'Machine Learning'],
                        'image' => 'https://placehold.co/600x400?text=E-Learning+Platform',
                    ],
                    [
                        'title' => 'Fintech Dashboard',
                        'description' => 'Real-time financial analytics and investment tracking application.',
                        'technologies' => ['Next.js', 'AWS', 'Microservices'],
                        'image' => 'https://placehold.co/600x400?text=Fintech+Dashboard',
                    ],
                ];
            @endphp
            <div class="row g-4">
                @foreach ($projects as $project)
                    <div class="col-md-4">
                        <div class="card project-card border-0 shadow-lg overflow-hidden">
                            <img src="{{ $project['image'] }}" alt="{{ $project['title'] }}"
                                class="card-img-top project-image">
                            <div class="card-body">
                                <h4 class="card-title mb-3">{{ $project['title'] }}</h4>
                                <p class="card-text mb-3">{{ $project['description'] }}</p>
                                <div class="technologies mb-3">
                                    @foreach ($project['technologies'] as $tech)
                                        <span class="badge bg-primary me-2">{{ $tech }}</span>
                                    @endforeach
                                </div>
                                <a href="#" class="btn btn-outline-primary">View Project</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Process & Workflow -->
    <section class="workflow-section bg-dark text-white py-5">
        <div class="container">
            <h2 class="text-center mb-5 fw-bold">My Development Workflow</h2>
            @php
                $workflow = [
                    [
                        'icon' => 'lightbulb',
                        'title' => 'Conceptualize',
                        'description' => 'Transform ideas into actionable strategies',
                    ],
                    ['icon' => 'code', 'title' => 'Develop', 'description' => 'Craft elegant, scalable solutions'],
                    [
                        'icon' => 'rocket',
                        'title' => 'Deploy',
                        'description' => 'Seamless integration and continuous delivery',
                    ],
                    [
                        'icon' => 'chart-line',
                        'title' => 'Optimize',
                        'description' => 'Continuous improvement and performance monitoring',
                    ],
                ];
            @endphp
            <div class="row g-4">
                @foreach ($workflow as $step)
                    <div class="col-md-3">
                        <div class="workflow-item text-center p-4 bg-secondary rounded">
                            <div class="workflow-icon mb-3">
                                <i class="fas fa-{{ $step['icon'] }} fa-3x text-warning"></i>
                            </div>
                            <h4 class="mb-3">{{ $step['title'] }}</h4>
                            <p class="text-muted">{{ $step['description'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Contact Section with Modern Form -->
    <section id="contact" class="contact-section bg-light py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <h2 class="text-center mb-5 fw-bold">Let's Connect</h2>
                    <div class="card border-0 shadow-lg">
                        <div class="card-body p-5">
                            <form>
                                <div class="row g-4">
                                    <div class="col-md-6">
                                        <input type="text" class="form-control form-control-lg"
                                            placeholder="Your Name" required>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="email" class="form-control form-control-lg"
                                            placeholder="Your Email" required>
                                    </div>
                                    <div class="col-12">
                                        <textarea class="form-control form-control-lg" rows="4" placeholder="Your Message" required></textarea>
                                    </div>
                                    <div class="col-12 text-center">
                                        <button type="submit" class="btn btn-primary btn-lg px-5">Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>
@endsection

@push('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        .hover-lift {
            transition: transform 0.3s ease;
        }

        .hover-lift:hover {
            transform: translateY(-10px);
        }

        .timeline-item::before {
            content: '';
            position: absolute;
            left: -3px;
            width: 20px;
            height: 20px;
            background: #007bff;
            border-radius: 50%;
        }

        /* Previous styles + new styles */
        pre {
            background-color: #2c3e50;
            color: #ecf0f1;
            border-radius: 8px;
            padding: 20px;
            font-size: 0.9rem;
        }

        .code-mockup {
            max-height: 300px;
            overflow-y: auto;
        }

        /* Parallax and 3D Effects */
        .hero-parallax {
            perspective: 1px;
            overflow: hidden;
        }

        .parallax-bg {
            transform: translateZ(-1px) scale(2);
            background-size: cover;
            background-position: center;
        }

        .profile-image-3d {
            transition: transform 0.5s;
        }

        .profile-image-3d:hover {
            transform: rotate3d(1, 1, 1, 15deg);
        }

        /* Project Card Hover */
        .project-card {
            transition: all 0.3s ease;
        }

        .project-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.175) !important;
        }

        /* Typing Effect */
        .typing-effect {
            overflow: hidden;
            white-space: nowrap;
            animation: typing 2s steps(20, end);
        }

        .card img {
            object-fit: cover;
            height: 250px;
        }

        .carousel-item blockquote {
            font-size: 1.25rem;
            font-style: italic;
            text-align: center;
            color: #555;
        }

        .carousel-item blockquote footer {
            margin-top: 10px;
            font-size: 0.9rem;
            font-style: normal;
            color: #888;
        }

        .card:hover {
            transform: scale(1.05);
            transition: all 0.3s ease-in-out;
        }

        .skill-card:hover {
            background-color: #f0f8ff;
        }

        .project-card img:hover {
            filter: brightness(90%);
            transition: filter 0.3s ease;
        }

        .cert-card {
            border-left: 5px solid #0d6efd;
            padding-left: 15px;
        }

        @keyframes typing {
            from {
                width: 0
            }

            to {
                width: 100%
            }
        }

        /* Additional Responsive Tweaks */
        @media (max-width: 768px) {
            .hero-parallax {
                height: auto !important;
                padding: 100px 0;
            }
        }
    </style>
@endpush
