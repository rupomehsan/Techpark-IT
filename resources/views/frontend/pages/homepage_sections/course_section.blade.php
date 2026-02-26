<section class="our_course_area">
    <div class="container">
        <div class="our_course_area_content" id="our_course_types">

            <!-- our_course_area_title start -->
            <div class="our_course_area_title">
                <h2 class="area_title">
                    আমাদের কোর্সসমূহ
                </h2>
            </div>
            <!-- our_course_area_title end -->

            <!-- our_course_all_card start -->
            <div class="our_course_all_card">
                @foreach ($courses as $course)
                    <div class="c_card graphic_designer">
                        <!-- card_img start -->
                        <a href="{{ route('course_details', $course->slug) }}" class="card_img_area">
                            <div class="card_img">
                                <img src="{{ $course->image }}" alt="graphic_designer, tech park it" />
                            </div>
                        </a>
                        <!-- card_img end -->

                        <!-- card_title_area start -->
                        <div class="card_title_area">
                            <!-- card_title start -->
                            <a href="{{ route('course_details', $course->slug) }}" class="card_title">
                                <p class="title_text">{{ $course->title }}</p>
                            </a>
                            <!-- card_title end -->

                            <div>
                                @if ($course->is_free == 0)
                                    <!-- day_and_boking_area start -->
                                    <div class="day_and_boking_area">
                                        <div class="day_area">
                                            <span class="day_icon">
                                                <img src="{{ asset('frontend') }}/assets/images/home_page_image/our_course_area/clock.png"
                                                    alt="clock, tech park it" />
                                            </span>
                                            @php
                                                $admissionEndDate = isset($course->course_batch[0]->admission_end_date)
                                                    ? \Carbon\Carbon::parse(
                                                        $course->course_batch[0]->admission_end_date,
                                                    )
                                                    : null;
                                            @endphp
                                            <span class="day_tex">
                                                {{ $admissionEndDate && $admissionEndDate->isFuture() ? $admissionEndDate->diffForHumans() : '0' }}
                                                দিন
                                                বাকী
                                            </span>

                                        </div>
                                        <div class="boking_area">
                                            <span class="boking_text">
                                                {{ $course->course_batch[0]->booked_percent ?? 0 }}%
                                            </span>
                                            <span class="boking_text">
                                                বুকড
                                            </span>
                                        </div>
                                    </div>
                                    <!-- day_and_boking_area end -->
                                @endif

                                <!-- amount_and_button_area start -->
                                <div class="amount_and_button_area">
                                    <!-- all_amount area start -->
                                    <div class="all_amount">
                                        @if ($course->is_free == 0)
                                            <div class="previous_amount_area">
                                                <p class="previous_amount">
                                                    <span class="taka"> ৳ </span>
                                                    <span class="taka">
                                                        {{ $course->course_batch[0]->course_price ?? 0 }}</span>
                                                </p>
                                            </div>
                                            <div class="current_amount_area">
                                                <p class="current_amount">
                                                    <span class="taka"> ৳ </span>
                                                    <span class="taka">
                                                        {{ $course->course_batch[0]->after_discount_price ?? 0 }}</span>
                                                </p>
                                            </div>
                                        @else
                                            <div class="current_amount_area">
                                                <p class="current_amount">
                                                    <span class="taka"> </span>
                                                    <span class="taka">
                                                        Free
                                                    </span>
                                                </p>
                                            </div>
                                        @endif
                                    </div>
                                    <!-- all_amount area end -->

                                    <!-- button_area start -->
                                    <a href="{{ route('course_details', $course->slug) }}" class="button_all">
                                        <span class="btn-text">কোর্সটি দেখি</span>
                                        <span class="btn_icon">
                                            <i class="fa-solid fa-arrow-right"></i>
                                        </span>
                                    </a>
                                    <!-- button_area end-->
                                </div>
                                <!-- amount_and_button_area end -->
                            </div>
                        </div>
                        <!-- card_title_area end -->
                    </div>
                @endforeach
            </div>

        </div>
        <!-- our_course_all_card end -->
        <script>
            // setTimeout(() => {
            // initiate_our_course_types();
            // }, 1000);
        </script>
    </div>
</section>
