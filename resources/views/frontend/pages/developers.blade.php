@php
    $meta = [
        'seo' => [
            'title' => 'Developer Profiles',
        ],
    ];
@endphp
@extends('frontend.layouts.layout', $meta)

@section('contents')
    <section class="bg_banner_area_right">
        <div class="container">
            <div class="text-center mb-4">
                <h2 class="text-center fw-bold mb-5 animate-text">Meet Our Developers</h2>
            </div>
            <div class="row g-4">
                @foreach ($developer as $dev)
                    <div class="col-md-6 col-lg-4">
                        <div class="dev-card animate__animated animate__zoomIn">
                            <div class="dev-image-container">
                                <img src="{{ asset($dev->image) }}" alt="{{ $dev->name }}" class="dev-image">
                                <div class="sun-glare"></div>
                            </div>
                            <div class="dev-info">
                                <h4 class="dev-name">{{ $dev->name }}</h4>
                                <p class="dev-role">{{ $dev->designation }}</p>
                                {{-- <p class="dev-desc">{!! $dev->description !!}</p> --}}
                                <div class="social-links">
                                    <a href="{{ $dev->github }}" target="_blank"><i class="fab fa-github"></i></a>
                                    <a href="{{ $dev->linkedin }}" target="_blank"><i class="fab fa-linkedin"></i></a>
                                    <a href="{{ $dev->facebook }}" target="_blank"><i class="fab fa-facebook"></i></a>
                                </div>
                                <a href="{{ route('developer', $dev->slug) }}" class="btn btn-primary mt-3">View Profile</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


    <style>
        /* Developer Card Styling */
        .dev-card {
            /* background: linear-gradient(118deg, #0a1139 0%, #6218d9eb 100%); */
            border: 1px solid #ffffff23;
            border-radius: 15px;
            overflow: hidden;
            text-align: center;
            color: white;
            padding: 20px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            position: relative;
            /* animation: borderRotate 5s linear infinite; */
        }

        /* Infinite Rotating Gradient Borders */
        @keyframes borderRotate {
            0% {
                border-image-source: linear-gradient(45deg, #ff416c, #ff4b2b);
            }

            25% {
                border-image-source: linear-gradient(45deg, #36d1dc, #5b86e5);
            }

            50% {
                border-image-source: linear-gradient(45deg, #ff9a9e, #fad0c4);
            }

            75% {
                border-image-source: linear-gradient(45deg, #1e3c72, #2a5298);
            }

            100% {
                border-image-source: linear-gradient(45deg, #ff416c, #ff4b2b);
            }
        }

        .dev-image-container {
            width: 120px;
            height: 120px;
            margin: 0 auto 15px;
            overflow: hidden;
            border-radius: 50%;

            border: 4px solid rgba(255, 255, 255, 0.2);
            transition: border 0.3s ease;

            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);

        }

        /* Sun Reflection Effect */
        .sun-glare {
            position: absolute;
            top: 0;
            left: -100%;
            width: 120%;
            height: 100%;
            background: linear-gradient(90deg, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0.3) 50%, rgba(255, 255, 255, 0) 100%);
            animation: glareMove 3s infinite ease-in-out;
        }

        @keyframes glareMove {
            0% {
                left: -100%;
            }

            100% {
                left: 100%;
            }
        }

        /* Floating Effect on Hover */
        .dev-card:hover {
            /* transform: translateY(-5px); */
            border: unset;
            /* box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3); */
            box-shadow: 0 4px 10px rgb(233 19 19);
            transition: all 0.3s ease;
        }

        .dev-card:hover .dev-image-container {
            border: 4px solid rgba(255, 255, 255, 0.5);
        }

        .dev-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .dev-name {
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .dev-role {
            font-size: 1rem;
            color: #f1c40f;
            font-weight: 600;
        }

        .dev-desc {
            font-size: 0.9rem;
            color: #dcdcdc;
            margin-bottom: 10px;
        }

        .social-links a {
            color: white;
            margin: 0 8px;
            font-size: 1.5rem;
            transition: transform 0.3s ease, color 0.3s ease;
        }

        .social-links a:hover {
            transform: scale(1.2);
            color: #f39c12;
        }

        .btn-primary {
            background: #f39c12;
            border: none;
            padding: 10px 20px;
            font-size: 1rem;
            border-radius: 8px;
            transition: background 0.3s ease;
        }

        .btn-primary:hover {
            background: #e67e22;
        }
    </style>
@endsection

@push('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
@endpush
