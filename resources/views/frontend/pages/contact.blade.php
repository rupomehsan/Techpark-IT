@php
    $meta = [
        'seo' => [
            'title' => 'contact',
            'image' => asset('seo.jpg'),
        ],
    ];
@endphp
@extends('frontend.layouts.layout', $meta)
@php
    $service = $GLOBALS['app_settings'];

    $address = $service->where('setting_title', 'address_english')->first()->value;
    $email = $service->where('setting_title', 'emails')->first()->value;
    $phone = $service->where('setting_title', 'phone_numbers')->first()->value;
    $whatsapp = $service->where('setting_title', 'whatsapp')->first()->value;
    $telegram = $service->where('setting_title', 'telegram')->first()->value;

    $facebook = $service->where('setting_title', 'facebook')->first()->value;
    $youtube = $service->where('setting_title', 'youtube')->first()->value;
    $instagram = $service->where('setting_title', 'instagram')->first()->value;
    $linkedin = $service->where('setting_title', 'linkedin')->first()->value;
    $twitter = $service->where('setting_title', 'twitter')->first()->value;

    $map = $service->where('setting_title', 'map_link')->first()->value;
@endphp
@section('contents')
    <!-- contact area start -->
    <section class="contact_area bg_banner_area_right">
        <div class="container">
            <div class="contact_area_content">

                <!-- title start -->
                <div class="title">
                    <!--contact_area title start -->
                    <div class="contact_area_title">
                        <h2 class="area_title animate-text">
                            Contact Us
                        </h2>
                    </div>
                    <!-- contact_area title end -->

                    <!-- contact_area sub_title start -->
                    <div class="contact_area_sub_title">
                        <span class="sub_title">
                            For any inquiries, feel free to visit our office directly. You can also call us to get
                            information about any course. Additionally, you can reach out via the mentioned email or
                            Facebook Messenger.
                        </span>
                    </div>
                    <!-- contact_area sub_title end -->
                </div>
                <!-- title end -->

                <!-- phone_number_and_form_area start -->
                <div class="phone_number_and_form_area">
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <div class="left_area">
                                <!-- contact_title start -->
                                <div class="contact_title">
                                    <h2 class="title_text">Contact Us</h2>
                                </div>
                                <!-- contact_title end -->

                                <!-- contact_number_and_email_area start -->
                                <ul class="contact_number_and_email_area">
                                    <li>
                                        <a href="#" class="contact">
                                            <div class="logo phone">
                                                <i class="fa-solid fa-phone"></i>
                                            </div>
                                            <div class="number">
                                                <p class="text"> {{ $phone }} </p>
                                            </div>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#" class="contact">
                                            <div class="logo whatsapp">
                                                <i class="fa-brands fa-square-whatsapp"></i>
                                            </div>
                                            <div class="number">
                                                <p class="text"> {{ $whatsapp }}</p>
                                            </div>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#" class="contact">
                                            <div class="logo telegram">
                                                <i class="fa-brands fa-telegram"></i>
                                            </div>
                                            <div class="number">
                                                <p class="text"> {{ $telegram }}</p>
                                            </div>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#" class="contact">
                                            <div class="logo email">
                                                <i class="fa-regular fa-envelope"></i>
                                            </div>
                                            <div class="number email_address">
                                                <p class="text"> {{ $email }} </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="contact">
                                            <div class="logo email">
                                                <i class="fa-solid fa-location-dot"></i>
                                            </div>
                                            <div class="number email_address">
                                                <p class="text"> {{ $address }} </p>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                                <!-- contact_number_and_email_area end -->

                                <!-- social_media_area start -->
                                <div class="social_media_area">
                                    <div class="social_media_title">
                                        <h2 class="text">Our Social Media Link</h2>
                                    </div>

                                    <div class="social_media">
                                        <ul>
                                            <li>
                                                <a href="{{ $facebook }}" target="_blank" class="facebook">
                                                    <i class="fa-brands fa-square-facebook"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ $instagram }}" target="_blank" class="instagram">
                                                    <i class="fa-brands fa-square-instagram"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ $youtube }}" target="_blank" class="youtube">
                                                    <i class="fa-brands fa-youtube"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ $linkedin }}" target="_blank" class="linkedin-in">
                                                    <i class="fa-brands fa-linkedin-in"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ $twitter }}" target="_blank" class="twitter">
                                                    <i class="fa-brands fa-twitter"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- social_media_area end -->
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <div class="right_area">
                                <!-- contact_form_title start -->
                                <div class="contact_form_title">
                                    <h2 class="title_text">Inbox Us</h2>
                                </div>
                                <!-- contact_form_title end -->

                                <!-- form_area start -->
                                <form id="contact_form" onsubmit="registerContact(event)">
                                    <input class="form_item" type="text" name="full_name" placeholder="Your Name*">
                                    <input class="form_item" type="email" name="email" placeholder="Your Email*">
                                    <input class="form_item" type="tel" name="phone"
                                        placeholder="Your Phone Number *">
                                    <input class="form_item" type="text" name="subject"
                                        placeholder="Mention Your Subject *">
                                    <textarea class="form_item" name="message" cols="30" rows="10" placeholder="Write Us *"></textarea>
                                    <button class="button_all">
                                        <i class="fa-solid fa-arrow-up-right-from-square"></i>
                                        <span> Submit</span>
                                    </button>
                                </form>
                                <!-- form_area end -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- phone_number_and_form_area end -->

                <!-- map start -->
                {!! $map ??
                    '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6273.359495691301!2d90.35832709340083!3d23.810338175583812!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c1670cdb1779%3A0x645bbf4f0aeb1d56!2sTech%20Park%20IT!5e0!3m2!1sen!2sbd!4v1689726025832!5m2!1sen!2sbd"
                                                                                                                                                                                                                                                                                        width="100%" height="500" style="border: 1px solid #D2D2D2; border-radius: 4px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                                                                                                                                                                                                                                                                                        </iframe>' !!}
                <!-- map end -->

                <!-- general question area start-->
                <section class="general_question_area">
                    <!-- Title Start -->
                    <div class="question_title">
                        <div class="general_question_title">
                            <h2 class="text">General Questions</h2>
                        </div>
                        <div class="general_question_sub_title">
                            <p class="sub_text">If you have any questions, you can search for them here</p>
                        </div>
                    </div>
                    <!-- Title End -->

                    <!-- FAQ Items -->
                    <div class="faq_container">
                        @foreach ($faqs as $faq)
                            <div class="question_and_ans_area">
                                <div class="question_area">
                                    <div class="question">
                                        <p class="q_text">{{ $faq->title }}</p>
                                    </div>
                                    <div class="question_icon">
                                        <i class="fa-solid fa-angle-down"></i>
                                    </div>
                                </div>
                                <div class="ans_area">
                                    <p class="a_text">{!! $faq->description !!}</p>
                                </div>
                            </div>
                        @endforeach


                    </div>
                </section>

                <!-- general question area end-->


            </div>
        </div>
    </section>
    <!-- contact area end -->
@endsection

<script>
    [
        ...document.querySelectorAll(".general_question_acordion_icon"),
    ].forEach((element) => {
        element.onclick = function(e) {
            e.currentTarget.parentNode.parentNode.classList.toggle(
                "active"
            );
            // console.log(e.currentTarget.parentNode.classList);
        };
    });

    document.addEventListener("click", (e) => {
        const question = e.target.closest(".question_area");
        if (!question) return; // If clicked outside, do nothing

        question.classList.toggle("active");
        question.nextElementSibling.classList.toggle("show");

        // Toggle icon rotation
        question.querySelector(".fa-angle-down").classList.toggle("rotate");
    });
</script>

<style>
    .ans_area {
        display: none;
        padding: 10px;
        background: #f8f9fa;
        border-radius: 5px;
    }

    .ans_area.show {
        display: block;
    }

    .question_icon i {
        transition: transform 0.3s ease;
    }

    .rotate {
        transform: rotate(180deg);
    }
</style>
