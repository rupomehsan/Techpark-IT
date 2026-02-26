<section class="student_success_history_area bg_banner_area_right position-relative">
    <div class="why-choose-one__shape-3 float-bob-y" style=" top: 0px;mix-blend-mode: lighten;
            left: 60%;">
        <img src="https://unicktheme.com/2025/techguru-html/main-html/assets/images/shapes/portfolio-two-shape-1.png"
            alt="">
    </div>
    <div class="container">
        <div class="student_success_history_content">

            <!--student_success_history_area_title start -->
            <div class="student_success_history_area_title">
                <h2 class="area_title animate-text">
                    Our Success Stories
                </h2>
            </div>
            <!-- student_success_history_area_title end -->

            <!-- student_success_history_area_sub_title start -->
            <div class="student_success_history_area_sub_title">
                <span class="sub_title">
                    Our students successfully complete courses and excel in freelancing and jobs. Hear their success
                    stories directly from them.
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
            <!-- student_success_video_area end -->

            <!-- student_success_history_area_button start-->
            <div class="success_history_button_area">
                <a href="{{ route('success_story') }}" class="button_all">
                    <span class="btn_text">আরও দেখুন</span>
                    <span class="btn_icon"><i class="fas fa-arrow-right"></i></span>
                </a>
            </div>

            <div id="story_modal" class="modal fade modal-xl" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        {{-- <div class="modal-header">
                            <h5 class="modal-title">
                                GeeksforGeeks
                            </h5>
                        </div> --}}
                        <div class="modal-body">
                        </div>
                    </div>
                </div>
            </div>
            <!-- student_success_history_area_button end-->

        </div>
    </div>
</section>
