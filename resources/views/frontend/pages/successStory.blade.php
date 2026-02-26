@php
    $meta = [
        'seo' => [
            'title' => 'courses',
            'image' => asset('seo.jpg'),
        ],
    ];
@endphp
@extends('frontend.layouts.layout', $meta)
@section('contents')
    <section class="student_success_history_area">
        <div class="container">
            <div class="student_success_history_content">

                <!--student_success_history_area_title start -->
                <div class="student_success_history_area_title">
                    <h2 class="area_title">
                        আমাদের আর্কাইভ
                    </h2>
                </div>
                <!-- student_success_history_area_title end -->

                <!-- student_success_history_area_sub_title start -->
                <div class="student_success_history_area_sub_title">
                    <span class="sub_title">
                        আমাদের শিক্ষার্থীরা সফলতার সাথে কোর্স শেষ করে সফলতার সাথে ফ্রিলান্সিং ও জব করছে। আমাদের
                        শিক্ষার্থীদের মুখ থেকেই শুনুন তাদের সফলতার গল্প।
                    </span>
                </div>
                <!-- student_success_history_area_sub_title end -->

                <!-- student_success_video_area start -->
                <div class="student_success_video_area">
                    @foreach ($success_stories as $story)
                        <button class="success_video_area" onclick="showVideo(`{{ $story->video_link }}`)">
                            <div class="success_video_cover_photo">
                                <img class="img-fluid" src="{{ asset($story->thumbnail_image) }}"
                                    alt="video_img tech park it">
                            </div>
                            <div class="video_button_icon">
                                <!-- <i class="fa-solid fa-circle-play"></i> -->
                                <i class="fa-solid fa-play"></i>
                            </div>
                        </button>
                    @endforeach
                </div>


            </div>
        </div>
    </section>
@endsection
