@php
    $meta = [
        // "meta" => [],
        'seo' => [
            'title' => 'about',
            'image' => asset('seo.jpg'),
        ],
    ];
@endphp
@extends('frontend.layouts.layout', $meta)
@section('contents')
    <!-- aboutus -->
    @include('frontend.pages.about_section.about_us')
    <!-- /aboutus -->

    <!-- motivation -->
    {{-- @include('frontend.pages.about_section.motivation') --}}
    <!-- /motivation -->

    <!-- mission -->
    @include('frontend.pages.about_section.mission')
    <!-- /mission -->

    <!-- vision -->
    @include('frontend.pages.about_section.vision')
    <!-- /vision -->

    <!-- /Our Service -->
    {{-- @include('frontend.pages.homepage_sections.course_category_section', [
        'categories' => $course_categories,
    ]) --}}
    <!-- /our service -->

    <!-- team area start -->
    @include('frontend.pages.about_section.team_section')
    <!-- /team area end -->



    <!-- trainers area starts -->
    {{-- <section class="trainers_area ">
        <div class="container">
            <div class="trainers_description">
                <div class="trainers_title">
                    <h2 class="trainers_title_bangla">আমাদের প্রফেশনাল ট্রেইনারস</h2>
                </div>

                <div class="trainers_details">
                    @foreach ($course_instructore as $teacher)
                        <div class="trainer_details">
                            <div class="trainer_images">
                                <div class="image">
                                    <img src="{{ asset($teacher->cover_photo) }}" alt="">
                                </div>
                                <div class="trainer_info">
                                    <div class="trainer_name">{{ $teacher->full_name }}</div>
                                    <p>{{ $teacher->designation }}</p>
                                    <div class="trainer_link">
                                        <a href="{{ $teacher->facebook }}" target="_blank"><i
                                                class="fa-brands fa-square-facebook"></i></a>
                                        <a href="{{ $teacher->github }}" target="_blank"><i
                                                class="fa-brands fa-linkedin"></i></a>
                                        <a href="{{ $teacher->linkedin }}" target="_blank"><i
                                                class="fa-brands fa-square-github"></i></a>
                                        <a href="{{ $teacher->website }}" target="_blank"><i
                                                class="fa-solid fa-globe"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="trainer_descrip">
                                <p style="text-align: justify;">
                                    {!! $teacher->details !!}
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section> --}}
    <!-- /trainers area ends -->


    <!-- hire section start -->
    @include('frontend.pages.homepage_sections.hire_us_button')
    <!-- /hire section end -->
@endsection
