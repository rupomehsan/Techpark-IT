@php
    $meta = [
        'seo' => [
            'title' => 'Developer Profile | ' . $developer->name,
            'image' => $developer->image,
        ],
    ];
@endphp
@extends('frontend.layouts.layout', $meta)
@section('contents')
    <div class="container-fluid px-0 ">
        <!-- Hero Section with Gradient Overlay -->
        <div class="hero-section position-relative text-white bg_banner_area_left"
            {{-- style="background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);" --}}
            >
            <div class="container py-5">
                <div class="row align-items-center">
                    <div class="col-md-4 text-center mb-4 mb-md-0">
                        <div class="profile-image-container position-relative">
                            <img src="{{ asset($developer->image) }}" alt="{{ $developer->name }}"
                                class="img-fluid rounded-circle shadow-lg"
                                style="width: 350px; height: 350px; object-fit: cover; border: 5px solid rgba(255,255,255,0.2);">
                        </div>
                    </div>
                    <div class="col-md-8">
                        <h1 class="display-4 fw-bold mb-3 animate__animated animate__fadeInUp">{{ $developer->name }}</h1>
                        <h3 class="mb-4 text-warning animate__animated animate__fadeInUp animate__delay-1s"
                            style="font-weight: 600">
                            {{ $developer->designation }}
                        </h3>
                        <p class="lead mb-4 animate__animated animate__fadeInUp animate__delay-2s">
                            {!! $developer->description !!}
                        </p>
                        <div class="social-links mb-4">
                            <a href="{{ $developer->github }}" target="_black" class="text-white me-3"><i
                                    class="fab fa-github fa-2x"></i></a>
                            <a href="{{ $developer->linkedin }}" target="_black" class="text-white me-3"><i
                                    class="fab fa-linkedin fa-2x"></i></a>
                            <a href="{{ $developer->facebook }}" target="_black" class="text-white me-3"><i
                                    class="fab fa-facebook fa-2x"></i></a>
                            <a href="{{ $developer->email }}" target="_black" class="text-white me-3"><i
                                    class="fas fa-envelope fa-2x"></i></a>
                            <a href="tel:{{ $developer->phone }}" target="_black" class="text-white me-3"><i
                                    class="fas fa-phone fa-2x"></i></a>
                        </div>
                        <div class="cta-buttons animate__animated animate__fadeInUp animate__delay-3s">
                            <a href="#contact" target="_blank" class="btn btn-warning btn-lg me-3 shadow">Hire Me</a>
                            <a href="{{ $developer->website }}" target="_blank"
                                class="btn btn-outline-light btn-lg shadow-sm">View Portfolio</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Creative Project Showcase -->
        <section class="project-showcase bg-light py-5 bg_banner_area_right">
            <div class="container">
                <div class="text-center mb-4">
                    <h2 class="text-center fw-bold animate-text">Projects</h2>
                </div>
                <p class="text-center mb-5 text-white lead">
                    A showcase of my most impactful and innovative projects, demonstrating my skills and expertise in
                    various technologies.
                </p>
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
