@php
    $meta = [
        'seo' => [
            'title' => 'gallery',
            'image' => asset('seo.jpg'),
        ],
    ];
@endphp
@extends('frontend.layouts.layout', $meta)
@section('contents')
    <section class="bg_banner_area_left">
        <div class="container py-5">
        <div class="text-center mb-4">
            <h2 class="fw-bold text-dark animate-text">Our Gallery</h2>
        </div>
        @php
            if (request()->is('gallery')) {
                $categories_titles = $categories;
            }
        @endphp

        <!-- Filter Buttons -->
        <div class="d-flex justify-content-center mb-5 portfolio-filter">
            <a href="{{ route('gallery') }}"
                class="btn btn-outline-secondary mx-2 {{ request()->routeIs('gallery') ? 'is-checked' : '' }}">
                All
            </a>
            @foreach ($categories_titles as $category)
                <a href="{{ route('gallery.slug', $category->slug) }}"
                    class="btn btn-outline-secondary mx-2 {{ request()->is('gallery/' . $category->slug) ? 'is-checked' : '' }}">
                    {{ $category->title }}
                </a>
            @endforeach
        </div>
        <!-- Portfolio Grid -->
        <!-- Portfolio Grid -->
        <div class="row g-4 portfolio-items-list">
            @foreach ($paginatedImages as $image)
                <div class="col-md-4 col-sm-6 portfolio-item digital-art">
                    <div class="position-relative">
                        <a href="{{ asset($image->image) }}" data-lightbox="portfolio" data-title="{{ $image->title }}">
                            <img class="img-fluid rounded img-400" src="{{ asset($image->image) }}" loading="lazy"
                                alt="{{ $image->title }}">
                            <div class="overlay"></div>
                        </a>
                        <div class="project-data">
                            {{-- <h5 class="mt-3">{{ $image->category->title }}</h5> --}}
                            <p>{{ $image->title }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Pagination -->
        <div class="d-flex md:justify-content-end justify-content-center mt-4">
            {{ $paginatedImages->withQueryString()->links() }}
        </div>
    </div>
    </section>

    {{-- <script>
        document.addEventListener('DOMContentLoaded', function() {
            const buttons = document.querySelectorAll('.portfolio-filter button');

            // Function to set the active button
            const setActiveButton = (activeButton) => {
                buttons.forEach(button => button.classList.remove('is-checked')); // Remove active state
                activeButton.classList.add('is-checked'); // Add active state to the clicked button
            };

            // Add click event listeners to all buttons
            buttons.forEach(button => {
                button.addEventListener('click', function() {
                    setActiveButton(this);
                });
            });

            // Optionally, trigger a click on the first button to set it active by default
            const defaultButton = document.querySelector('.portfolio-filter .is-checked') || buttons[0];
            if (defaultButton) defaultButton.click();
        });
    </script> --}}



    <script>
        // lightbox.option({
        //     'resizeDuration': 200, // Animation duration in ms
        //     'wrapAround': true, // Allows cycling through images
        //     'alwaysShowNavOnTouchDevices': true // Keeps navigation visible on mobile
        // });
    </script>
@endsection
