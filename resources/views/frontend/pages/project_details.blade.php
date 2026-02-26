@php
    $meta = [
        // "meta" => [],
        'seo' => [
            'title' => ($service->seo_title ?? $service->title) . ' in Bangladesh',
            'description' => $service->seo_description,
            'keywords' => $service->seo_keywords,
            'image' => asset($service->image),
        ],
    ];
@endphp
@extends('frontend.layouts.layout', $meta)
@section('contents')
    <!-- Include Owl Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">


    <!-- development start -->
    <div class="wordpress_site_development product_details bg_banner_area_right">
        <div class="container-fluid">

            <!-- Main Image Slider -->
            <div class="wordpress_logo text-center">
                <div class="owl-carousel main-carousel main_image">
                    <!-- Main Image from $service->image -->
                    <div class="item">
                        <a href="javascript:void(0);" class="lightbox-trigger">
                            <img src="{{ asset($service->image) }}" alt="{{ $service->title }}" class="img-fluid">
                        </a>
                    </div>

                    <!-- Additional Images from $it_service_images -->
                    @foreach ($it_service_images as $image)
                        <div class="item">
                            <a href="javascript:void(0);" class="lightbox-trigger">
                                <img src="{{ asset($image->image) }}" alt="Service Image" class="img-fluid">
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Thumbnails (Static) -->
            <div class="mt-3 text-center">
                <div class="thumbnail-container">
                    <!-- Main Image Thumbnail -->
                    <img src="{{ asset($service->image) }}" alt="Thumbnail" class="img-thumbnail thumbnail-img"
                        onclick="changeMainImage(0)">

                    <!-- Additional Thumbnails -->
                    @foreach ($it_service_images as $index => $image)
                        <img src="{{ asset($image->image) }}" alt="Thumbnail" class="img-thumbnail thumbnail-img"
                            onclick="changeMainImage({{ $index + 1 }})">
                    @endforeach
                </div>
            </div>

            <!-- Lightbox Modal -->
            <div class="modal fade" id="lightboxModal" tabindex="-1" aria-labelledby="lightboxLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-body">
                            <img id="lightboxImage" src="{{ asset($service->image) }}" class="img-fluid w-100">
                        </div>
                    </div>
                </div>
            </div>


            <div class="text-center mt-4">
                <h1 class="wordpress_site_title text-center py-4 animate-text">
                    {{ $service->title }}
                </h1>
            </div>
            {{-- <div class="text-center" style="font-size: 16px">
                <a href="#service_access_links" class="btn btn-primary">
                    Preview Website
                </a>
            </div> --}}

            <div class="wordpress_site_price_and_logo">
                <div class="wordpress_logo_services_and_package">
                    <div class="wordpress_services project_description">
                        @include('frontend.pages.price_card')
                    </div>
                    {{-- <div class="wordpress_services project_description">
                        {!! $service->description !!}
                    </div> --}}

                    {{-- <div id="service_access_links" class="mt-5 pt-5 project_description">
                        {!! $service->access_links !!}
                    </div> --}}
                </div>

                <div class="wordpress_site_consting_and_info">
                    <div class="col-12">
                        <div class="wordpress_site_costing service_side_menus border-0 mb-3">
                            <div class="card project-info-card mx-3 p-3 rounded-3 gap-2">
                                <h2 class="wordpress_about_pricing_title">
                                    Project Info
                                </h2>

                                <p>
                                    <strong>Last Update:</strong>
                                    {{ Carbon\Carbon::now()->subDays(25)->format('d M Y') }}
                                </p>
                                <p>
                                    <strong>Published:</strong>
                                    {{ Carbon\Carbon::now()->subYears(2)->format('d M Y') }}
                                </p>
                                <div id="more-info" class="more-info">
                                    <p class="mb-2"><strong>High Resolution:</strong> Yes</p>
                                    <p class="mb-2"><strong>Compatible Browsers:</strong> Firefox, Safari, Opera, Chrome,
                                        Edge</p>
                                    <p class="mb-2"><strong>Files Included:</strong> JavaScript JS, HTML, CSS, PHP</p>
                                    <p class="mb-2"><strong>Software Framework:</strong> Laravel</p>
                                    <p class="mb-2"><strong>Software Version:</strong> PHP 8.x</p>
                                    <p class="mb-2">
                                        <strong> Tags:</strong>
                                        agency, business website, cms, consultation,
                                        corporate, creative,
                                        health, lawyer, medical, modern, multipurpose website, personal, photography,
                                        portfolio,
                                        sports
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="wordpress_site_costing site_costing_info mx-3">
                            <div class="wordpress_site_info hover-white-card p-4 rounded-4 shadow-sm">
                                <h2 class="wordpress_about_pricing_title fw-semibold mb-3">
                                    প্রাইসিং সম্পর্কে বিস্তারিত জানতে আমাদের সাথে যোগাযোগ করুন
                                </h2>
                                @php
                                    $phone = $GLOBALS['app_settings']->where('setting_title', 'phone_numbers')->first()
                                        ->value;
                                    $whatsapp = $GLOBALS['app_settings']->where('setting_title', 'whatsapp')->first()
                                        ->value;
                                    $telegram = $GLOBALS['app_settings']->where('setting_title', 'telegram')->first()
                                        ->value;
                                    $emails = $GLOBALS['app_settings']->where('setting_title', 'emails')->first()->value;
                                @endphp

                                <div class="phone_number">
                                    <a target="_blank" href="tel:{{ $phone ?? '01719-229595' }}">
                                        <i class="fa-solid fa-phone"></i> <span>{{ $phone ?? '01719-229595' }}</span>
                                    </a>
                                </div>
                                <div class="whatsup">
                                    <a target="_blank" href="https://wa.me/{{ $whatsapp ?? '01719-229595' }}">
                                        <i class="fa-brands fa-square-whatsapp"></i>
                                        <span>{{ $whatsapp ?? '01719-229595' }}</span>
                                    </a>
                                </div>
                                <div class="telegram">
                                    <a target="_blank" href="https://t.me/{{ $telegram ?? '01719-229595' }}">
                                        <i class="fa-brands fa-telegram"></i>
                                        <span>{{ $telegram ?? '01719-229595' }}</span>
                                    </a>
                                </div>
                                <div class="email">
                                    <a target="_blank" href="mailto:{{ $emails ?? 'techparkitofficial@gmail.com' }}">
                                        <i class="fa-regular fa-envelope"></i>
                                        <span>{{ $emails ?? 'techparkitofficial@gmail.com' }}</span>
                                    </a>
                                </div>
                                <div class="costing_special_note">
                                    বি. দ্রঃ প্রজেক্টের ধরন অনুযায়ী প্রাইসিং কম বেশি হয়ে থাকে
                                </div>
                                <div class="text-center my-3" style="font-size: 16px">
                                    <a href="#service_access_links" class="btn btn-primary">
                                        Preview Website
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- /wordpress development end -->

    <!-- our client project starts -->
    <div class="our_complete_client_projects bg_banner_area_left">
        <div class="container">
            <div class="client_project_title animate-text">
                আমাদের করা কিছু ক্লায়েন্ট প্রজেক্ট
            </div>
            <div class="our_client_projects">
                @foreach ($it_services as $service)
                    <div class="our_client_project">
                        <a href="{{ route('project_details', $service->slug) }}" class="client_project_img">
                            <img src="{{ asset($service->image) }}" alt=""
                                style="height: 150px; width: 365px; object-fit: cover;" class="img-fluid" />
                        </a>
                        <div class="client_project_name">{{ $service->title }}</div>
                    </div>
                @endforeach
            </div>
            <div class="text-center mt-4">
                <a href="{{ route('it_solution_services') }}" class="btn btn-primary">View More</a>
            </div>
        </div>
    </div>
    <!-- /our client project end -->

    <!-- hire section start -->
    @include('frontend.pages.homepage_sections.hire_us_button')
    <!-- /hire section end -->

    <!-- Include jQuery & Owl Carousel JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <!-- Initialize Owl Carousel -->
    <script>
        $(document).ready(function () {
            var mainCarousel = $(".main-carousel");

            mainCarousel.owlCarousel({
                items: 1,
                loop: true,
                nav: false,
                dots: false,
                autoplay: true,
                autoplayHoverPause: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: false,
                        dots: false,
                    },
                    768: {
                        items: 1,
                        nav: false,
                        dots: false,
                    },
                    992: {
                        items: 1,
                        nav: false,
                        dots: false,
                    }
                }
            });

            // Function to change main image when clicking thumbnails
            window.changeMainImage = function (index) {
                mainCarousel.trigger("to.owl.carousel", [index, 300, true]);

                // Update lightbox with the current image
                updateLightboxImage(index);
            };

            // Update lightbox image when clicking on the main image
            $(".lightbox-trigger").click(function () {
                var currentImage = $(".main-carousel .owl-item.active img").attr("src");
                $("#lightboxImage").attr("src", currentImage);
                $("#lightboxModal").modal("show");
            });

            // Sync lightbox with carousel changes
            mainCarousel.on('changed.owl.carousel', function (event) {
                var currentIndex = event.item.index;
                updateLightboxImage(currentIndex);
            });

            // Function to update lightbox with the correct image
            function updateLightboxImage(index) {
                var currentImage = $(".main-carousel .owl-item").eq(index).find("img").attr("src");
                $("#lightboxImage").attr("src", currentImage);
            }
        });
    </script>

    <!-- CSS to Keep Thumbnails Static and Fix Shadow Issue -->
    <style>
        .thumbnail-container {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-top: 10px;
            flex-wrap: wrap;
            justify-content: center;
        }

        .thumbnail-img {
            width: 100px;
            height: 100px;
            object-fit: cover;
            cursor: pointer;
            border: 2px solid transparent;
            transition: border-color 0.3s ease;
        }

        .thumbnail-img:hover {
            border-color: #007bff;
        }

        .custom-shadow {
            /* box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); */
            /* Adjust the shadow to your liking */
            transition: box-shadow 0.3s ease;
        }

        .custom-shadow:hover {
            /* box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3); */
        }

        .main-carousel .owl-item img {
            /* box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); */
        }

        .owl-carousel .owl-item img {
            transition: all 0.3s ease;
        }

        .modal-dialog {
            max-width: 90%;
            margin: 0 auto;
        }

        .modal-body img {
            width: 100%;
            height: auto;
        }
    </style>
@endsection
