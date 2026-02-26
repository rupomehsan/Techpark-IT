@php
    $meta = [
        // "meta" => [],
        'seo' => [
            'title' => 'Tech Park IT',
            'image' => asset('seo.jpg'),
        ],
    ];
@endphp

@extends('frontend.layouts.layout', $meta)

@section('contents')
    <!-- banner_part start -->
    @include('frontend.pages.homepage_sections.banner_section')
    <!-- banner_part end -->



    <!-- banner_part start -->
    @include('frontend.pages.homepage_sections.atAGlance')
    <!-- banner_part end -->



    <!-- course_item start -->
    @include('frontend.pages.homepage_sections.course_category_section', [
        'categories' => $course_categories,
    ])
    <!-- course_item end -->

    <!-- our_course area start -->
    {{-- @include('frontend.pages.homepage_sections.course_section') --}}

    <!-- our_course area end -->

    <!-- our_course_specialty area start -->
    <section class="our_course_specialty bg_banner_area_left position-relative">
        <div class="why-choose-one__shape-3 float-bob-y" style=" top: 10%;mix-blend-mode: lighten;
            left: 5%;">
            <img src="https://unicktheme.com/2025/techguru-html/main-html/assets/images/shapes/portfolio-two-shape-1.png"
                alt="">
        </div>
        <div class="container">
            <div class="our_course_specialty_area_content">

                <!--our_course_specialty_area_title start -->
                <div class="our_course_specialty_area_title">
                    <h2 class="area_title animate-text">
                        Our Supports
                    </h2>
                    <div class="student_success_history_area_sub_title">
                        <span class="sub_title">
                            We are committed to delivering reliable and professional support to ensure your software systems
                            remain efficient, secure, and up-to-date. <br>Our key support services include:
                        </span>
                    </div>
                </div>
                <!-- our_course_specialty_area_title end -->

                <!-- course_card_area start -->
                @include('frontend.pages.homepage_sections.course_speciality', [
                    'course_speciality' => $course_speciality,
                ])
                <!-- course_card_area end -->
                <div class="course_card_area my-5">
                    <div class="c_card card_1">
                        <div class="card_img_area">
                            <div class="card_img">
                                <img src="http://127.0.0.1:8000/frontend/assets/images/home_page_image/our_course_specialty/support.png"
                                    alt="card tech park it
                        ">
                            </div>
                        </div>
                        <div class="card_text">
                            <p>Anydesk Support</p>
                        </div>
                    </div>
                    <div class="c_card card_1">
                        <div class="card_img_area">
                            <div class="card_img">
                                <img src="http://127.0.0.1:8000/frontend/assets/images/home_page_image/our_course_specialty/live.png"
                                    alt="card tech park it
                        ">
                            </div>
                        </div>
                        <div class="card_text">
                            <p>Security Monitoring</p>
                        </div>
                    </div>
                    <div class="c_card card_1">
                        <div class="card_img_area">
                            <div class="card_img">
                                <img src="http://127.0.0.1:8000/frontend/assets/images/home_page_image/our_course_specialty/quiz.png"
                                    alt="card tech park it
                        ">
                            </div>
                        </div>
                        <div class="card_text">
                            <p>Data Backup & Recovery</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- earning_area start -->
    {{-- @include('frontend.pages.homepage_sections.course_outcome_steps', [
        'course_learning_steps' => $course_learning_steps,
    ]) --}}
    <!-- earning_area end -->

    <!-- Student success history arer start -->
    @include('frontend.pages.homepage_sections.success_story', [
        'success_stories' => $success_stories,
    ])
    <!-- Student success history arer end -->

    <!-- profational_trainer area start-->
    @include('frontend.pages.homepage_sections.it_trainers_section')

    <!-- free_seminar_area_start -->
    {{-- @include('frontend.pages.homepage_sections.free_seminars') --}}
    <!-- free_seminar_area_end -->

    <!-- job_career_area start-->
    {{-- @include('frontend.pages.homepage_sections.career_section') --}}
    <!-- job_career area end-->

    <!-- my_it_service_area start -->
    @include('frontend.pages.homepage_sections.it_services', [
        'it_services' => $it_services,
    ])
    <!-- my_it_service_area end-->

    <!-- working_company_name area start -->
    @include('frontend.pages.homepage_sections.working_partner')
    <!-- working_company_name area end -->

    <script>
        var seminar_modal = new bootstrap.Modal(document.getElementById('seminar_modal'));

        function showSeminarModel(seminar) {
            window.seminar_id = seminar.id;
            document.getElementById('seminar_form').reset();
            seminar_modal.toggle();
            // console.log(seminar);
        }
    </script>
@endsection

@push('styles')
    <style>
        /*--------------------------------------------------------------
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                # About Two
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                --------------------------------------------------------------*/
        .about-two {
            position: relative;
            display: block;
            padding: 70px 0 70px;
            background-color: #0b192c1a;
            z-index: 1;
            border-radius: 10px;
            box-shadow: 0 0 30px #ffffff54;
        }

        .about-two__shape-2 {
            position: absolute;
            left: 24.95%;
            right: 24.95%;
            top: 0%;
            bottom: -11.72%;
            opacity: .30;
            filter: blur(120px);
            background: radial-gradient(50% 50% at 50% 50%, #6669D8 0%, rgba(7, 12, 20, 0) 100%);
            z-index: -1;
        }


        .about-two__shape-3 {
            position: absolute;
            top: 0px;
            right: 0;
            z-index: -1;
        }

        .about-two__shape-3 img {
            width: auto;
        }

        .about-two__left {
            position: relative;
            display: block;
            margin-right: 40px;
            margin-top: 0px;
        }

        .about-two__img-box {
            position: relative;
            display: block;
        }

        .about-two__img {
            position: relative;
            display: block;
        }

        .about-two__img img {
            width: 100%;
            border-radius: 48px;
            box-shadow: 0 1px 42px rgb(255 255 255 / 25%), inset 0 4px 16px rgb(141 141 141 / 66%);
        }

        .about-two__img-2 {
            position: absolute;
            bottom: -129px;
            right: -102px;
            max-width: 336px;
            width: 100%;
            z-index: 1;
        }

        .about-two__img-2::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            border: 4px solid #08111F;
            border-radius: 48px;
        }

        .about-two__img-2 img {
            width: 100%;
            border-radius: 48px;
        }

        .about-two__shape-1 {
            position: absolute;
            top: -28px;
            right: -28px;
            width: 410px;
            height: 566px;
            border: 3px solid transparent;
            background: linear-gradient(-135deg, #FA5674 0%, #6065D4 52%, rgba(96, 101, 212, 0) 81%) border-box;
            -webkit-mask: linear-gradient(#fff 0 0) padding-box,
                linear-gradient(#fff 0 0);
            -webkit-mask-composite: xor;
            mask-composite: exclude;
            border-radius: 65px;
            z-index: -1;
        }

        .about-two__client-box {
            position: relative;
            display: block;
            max-width: 226px;
            width: 100%;
            margin-left: 28px;
            text-align: center;
            padding: 18px 10px 16px;
            margin-top: 16px;
            background-color: var(--techguru-black);
            border-radius: 24px;
            z-index: 1;
        }

        .about-two__client-box::before {
            content: "";
            position: absolute;
            top: 0px;
            left: 0px;
            right: 0px;
            bottom: 0px;
            border-radius: 24px;
            border: 1px solid transparent;
            background: linear-gradient(90deg, #3D72FC, #5CB0E9) border-box;
            -webkit-mask: linear-gradient(#fff 0 0) padding-box,
                linear-gradient(#fff 0 0);
            -webkit-mask-composite: xor;
            mask-composite: exclude;
            z-index: -1;
        }

        .move_left_to_right-anim {
            animation: move_left_right 2s infinite;
        }

        @keyframes move_left_right {
            0% {
                transform: translateX(0);
            }

            50% {
                transform: translateX(25px);
            }

            100% {
                transform: translateX(0);
            }
        }

        .about-two__client-img-list {
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .about-two__client-img-list li {
            position: relative;
            display: block;
        }

        .about-two__client-img-list li+li {
            margin-left: -18px;
        }

        .about-two__client-img {
            position: relative;
            display: block;
            max-width: 40px;
            width: 100%;
        }

        .about-two__client-img img {
            width: 100%;
            border: 2px solid #08111F;
            border-radius: 50%;
        }

        .about-two__client-img-list li a {
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            border: 2px solid #08111F;
            font-size: 16px;
            color: #08111F;
            border-radius: 50%;
            background-color: var(--techguru-base);
        }

        .about-two__client-text {
            color: var(--techguru-white);
            margin-top: 12px;
        }

        .about-two__client-text span {
            color: var(--techguru-white);
            font-family: var(--techguru-font) !important;
        }

        .about-two__right {
            position: relative;
            display: block;
        }

        .about-two__right .section-title {
            margin-bottom: 24px;
        }

        .about-two__right .section-title__title {
            margin-right: -100px;
        }

        .about-two__points-box {
            position: relative;
            display: flex;
            align-items: flex-start;
            gap: 50px;
            border-top: 1px dashed rgba(var(--techguru-white-rgb), .20);
            border-bottom: 1px dashed rgba(var(--techguru-white-rgb), .20);
            padding-top: 23px;
            margin-top: 26px;
            padding-bottom: 23px;
            margin-bottom: 38px;
        }

        .about-two__points-list {
            position: relative;
            display: block;
        }

        .about-two__points-list li {
            position: relative;
            display: flex;
            align-items: flex-start;
            gap: 15px;
        }

        .about-two__points-list li+li {
            margin-top: 20px;
        }

        .about-two__points-list li .icon {
            position: relative;
            display: inline-block;
            top: 1px;
        }

        .about-two__points-list li .icon span {
            position: relative;
            display: inline-block;
            font-size: 16px;
            color: var(--techguru-white);
        }

        .about-two__experience-contact-and-btn {
            position: relative;
            display: flex;
            align-items: center;
            gap: 35px;
        }

        .about-two__experience-box {
            position: relative;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .about-two__experience-box::before {
            content: "";
            position: absolute;
            top: 50%;
            right: -20px;
            width: 1px;
            height: 30px;
            background-color: var(--techguru-white);
            transform: translateY(-50%);
        }

        .about-two__experience-count-box {
            position: relative;
            display: flex;
            align-items: center;
        }

        .about-two__experience-count-box h3 {
            font-size: 48px;
            font-weight: 700;
            line-height: 48px !important;
            font-family: var(--techguru-font) !important;
            color: var(--techguru-base);
        }

        .about-two__experience-count-box span {
            font-size: 48px;
            font-weight: 700;
            line-height: 48px !important;
            font-family: var(--techguru-font) !important;
            color: var(--techguru-base);
        }

        .about-two__experience-text {
            font-size: 12px;
            font-weight: 500;
            line-height: 18px;
            color: var(--techguru-white);
        }

        .about-two__call-box {
            position: relative;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .about-two__call-box::before {
            content: "";
            position: absolute;
            top: 50%;
            right: -20px;
            width: 1px;
            height: 30px;
            background-color: var(--techguru-white);
            transform: translateY(-50%);
        }

        .about-two__call-icon {
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 46px;
            height: 46px;
            border-radius: 50%;
            overflow: hidden;
            z-index: 1;
        }

        .about-two__call-icon:before {
            content: "";
            position: absolute;
            top: 0px;
            left: 0px;
            right: 0px;
            bottom: 0px;
            border-radius: 50%;
            border: 1px solid transparent;
            background: linear-gradient(90deg, #3D72FC, #5CB0E9) border-box;
            -webkit-mask: linear-gradient(#fff 0 0) padding-box,
                linear-gradient(#fff 0 0);
            -webkit-mask-composite: xor;
            mask-composite: exclude;
            z-index: -1;
        }

        .about-two__call-icon::after {
            content: "";
            position: absolute;
            width: 25px;
            height: 25px;
            right: 0px;
            bottom: 0px;
            background: linear-gradient(270deg, #FA5674 0%, #6065D4 100%);
            filter: blur(16.5px);
            z-index: -1;
        }

        .about-two__call-content {
            position: relative;
            display: block;
            flex: 1;
            top: -3px;
        }

        .about-two__call-content span {
            position: relative;
            display: inline-block;
            font-size: 14px;
            font-weight: 500;
            background: linear-gradient(270deg, #5CB0E9 0%, #3D72FC 100%);
            -webkit-text-fill-color: transparent;
            background-clip: text;
            text-transform: capitalize;
        }

        .about-two__call-content p {
            font-size: 20px;
            font-weight: 700;
            line-height: 21px;
        }

        .about-two__call-content p a {
            color: var(--techguru-white);
        }

        .about-two__call-content p a:hover {
            color: var(--techguru-base);
        }

        .about-two__btn-box {
            position: relative;
            display: block;
        }

        .about-two__btn-box .thm-btn {
            border-radius: 26px;
        }

        /*--------------------------------------------------------------
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                # About Three
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                --------------------------------------------------------------*/
        .about-three {
            position: relative;
            display: block;
            background-color: var(--techguru-black);
            overflow: hidden;
            padding: 140px 0 122px;
            z-index: 1;
        }

        .about-three__left {
            position: relative;
            display: block;
            margin-right: 60px;
        }

        .about-three__img-box {
            position: relative;
            display: block;
        }

        .about-three__img {
            position: relative;
            display: block;
        }

        .about-three__img img {
            width: 100%;
        }

        .about-three__right {
            position: relative;
            display: block;
        }

        .about-three__right .section-title {
            margin-bottom: 23px;
        }

        .about-three__progress-box {
            position: relative;
            display: block;
            margin-top: 25px;
        }

        .about-three__progress-box .progress-box {
            position: relative;
            display: block;
        }

        .about-three__progress-box .progress-box+.progress-box {
            margin-top: 23px;
        }

        .about-three__progress-box .progress-box .bar-title {
            position: relative;
            font-size: 20px;
            font-weight: 500;
            line-height: 30px;
            text-transform: capitalize;
            margin-bottom: 13px;
            color: var(--techguru-white);
        }

        .about-three__progress-box .progress-box .bar {
            position: relative;
            width: 100%;
            height: 7px;
            background-color: rgba(var(--techguru-white-rgb), .10);
            border-radius: 4px;
        }

        .about-three__progress-box .progress-box .bar-inner {
            position: relative;
            display: block;
            width: 0px;
            height: 7px;
            background: var(--techguru-base);
            border-radius: 4px;
            -webkit-transition: all 1500ms ease;
            transition: all 1500ms ease;
        }

        .about-three__progress-box .progress-box .count-box {
            position: absolute;
            right: 0px;
            margin-right: -35px;
            bottom: 18px;
            width: 40px;
            height: 22px;
            background: var(--techguru-base);
            color: var(--techguru-black);
            line-height: 22px;
            font-size: 14px;
            font-weight: 500;
            border-radius: 5px;
            text-align: center;
            letter-spacing: 0;
            opacity: 0;
            font-family: var(--techguru-font);
            -webkit-transition: all 500ms ease;
            transition: all 500ms ease;
        }

        .about-three__progress-box .progress-box .counted .count-box {
            opacity: 1;
        }

        .about-three__progress-box .progress-box .count-box:after {
            content: "";
            position: absolute;
            left: 0;
            top: 100%;
            margin-top: -5px;
            border: 5px solid transparent;
            border-top: 5px solid var(--techguru-base);
            border-left: 5px solid var(--techguru-base);
        }

        .about-three__points {
            position: relative;
            display: block;
            margin-top: 33px;
            margin-bottom: 31px;
        }

        .about-three__points li {
            position: relative;
            display: flex;
            align-items: flex-start;
            gap: 20px;
        }

        .about-three__points li+li {
            margin-top: 24px;
        }

        .about-three__points li .icon {
            position: relative;
            display: inline-block;
            top: 6px;
        }

        .about-three__points li .icon span {
            position: relative;
            display: inline-block;
            font-size: 20px;
            color: var(--techguru-white);
        }

        .about-three__points li .content {
            position: relative;
            display: block;
            flex: 1;
        }

        .about-three__points li .content h3 {
            font-size: 20px;
            font-weight: 500;
            line-height: 30px;
            color: var(--techguru-white);
        }

        .about-three__btn-and-call-box {
            position: relative;
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .about-three__btn-box {
            position: relative;
            display: block;
        }

        .about-three__call-box {
            position: relative;
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .about-three__call-box .icon {
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 46px;
            height: 46px;
            z-index: 1;
        }

        .about-three__call-box .icon::before {
            content: "";
            position: absolute;
            top: 0px;
            left: 0px;
            right: 0px;
            bottom: 0px;
            border-radius: 8px;
            border: 1px solid transparent;
            background: linear-gradient(90deg, #3D72FC, #5CB0E9) border-box;
            -webkit-mask: linear-gradient(#fff 0 0) padding-box,
                linear-gradient(#fff 0 0);
            -webkit-mask-composite: xor;
            mask-composite: exclude;
            -webkit-transition: all 500ms ease;
            -moz-transition: all 500ms ease;
            -ms-transition: all 500ms ease;
            -o-transition: all 500ms ease;
            transition: all 500ms ease;
            visibility: visible;
            opacity: 1;
            z-index: -1;
        }

        .about-three__call-box .icon span {
            position: relative;
            display: inline-block;
            font-size: 20px;
            color: var(--techguru-white);
            transition: all 500ms linear;
            transition-delay: 0.1s;
            transform: scale(1);
        }

        .about-three__call-box:hover .icon span {
            transform: scale(0.9);
        }

        .about-three__call-box .content {
            position: relative;
            display: block;
            flex: 1;
        }

        .about-three__call-box .content span {
            font-size: 14px;
            font-weight: 700;
            line-height: 24px;
        }

        .about-three__call-box .content p {
            font-size: 24px;
            font-weight: 700;
            line-height: 34px;
            margin-top: 2px;
        }

        .about-three__call-box .content p a {
            color: var(--techguru-white);
        }

        .about-three__call-box .content p a:hover {
            color: var(--techguru-base);
        }
    </style>
    <style>
        .why-choose-one__shape-3 {
            position: absolute;
            top: 0px;
            left: 35px;
            opacity: .10;
            z-index: 1;

        }

        .float-bob-y {
            -webkit-animation-name: float-bob-y;
            animation-name: float-bob-y;
            -webkit-animation-duration: 2s;
            animation-duration: 2s;
            -webkit-animation-iteration-count: infinite;
            animation-iteration-count: infinite;
            -webkit-animation-timing-function: linear;
            animation-timing-function: linear;
        }

        @keyframes float-bob-y {
            0% {
                transform: translateY(-20px);
            }

            50% {
                transform: translateY(-10px);
            }

            100% {
                transform: translateY(-20px);
            }
        }
    </style>
@endpush
