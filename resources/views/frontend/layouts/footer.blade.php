    <!-- footer area start -->
    <footer class="footer_area_start bg_banner_area_right overflow-hidden">
        <div class="container">
            <div class="footer_area_content">
                <div class="row">

                    <!-- footer_logo_and_contact_area start -->
                    <div class="col-xs-12 col-xl-3">
                        <div class="footer_colum footer_logo_and_contact_area">
                            <!-- footer_logo area start -->
                            <div class="footer_logo_area">
                                <a href="#">
                                    <img src="/{{ setting('footer_logo') }}" alt="logo tech_park_it">
                                </a>
                            </div>
                            <!-- footer_logo area end -->

                            <!-- footer_contact_area start -->
                            <div class="footer_contact_area">

                                <!-- contact_title start -->
                                <div class="contact_title">
                                    <p class="title_text">Contact Info</p>
                                </div>
                                <!-- contact_title end -->

                                <!-- contact_number_and_email_area start -->
                                <ul class="contact_number_and_email_area">
                                    <li>
                                        <div href="#" class="contact align-items-start">
                                            <div class="logo phone">
                                                <i class="fa-solid fa-phone"></i>
                                            </div>
                                            <div class="number">
                                                @foreach (setting('phone_numbers', true) as $item)
                                                    <a href="tel:{{ $item->value }}" class="text">
                                                        {{ $item->value }} </a> <br>
                                                @endforeach
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <a href="#" class="contact align-items-start">
                                            <div class="logo whatsapp">
                                                <i class="fa-brands fa-square-whatsapp"></i>
                                            </div>
                                            <div class="number">
                                                <p class="text">{{ setting('whatsapp') }}</p>
                                            </div>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#" class="contact align-items-start">
                                            <div class="logo telegram">
                                                <i class="fa-brands fa-telegram"></i>
                                            </div>
                                            <div class="number">
                                                <p class="text">{{ setting('telegram') }}</p>
                                            </div>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#" class="contact align-items-start">
                                            <div class="logo email">
                                                <i class="fa-regular fa-envelope"></i>
                                            </div>
                                            <div class="number email_address">
                                                <p class="text">{{ setting('emails') }}</p>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                                <!-- contact_number_and_email_area end -->

                                <!-- social_media_area start -->
                                <div class="social_media_area">
                                    <div class="social_media_title">
                                        <p class="text">Our Social Media Links</p>
                                    </div>

                                    <div class="social_media">
                                        <ul>
                                            <li>
                                                <a href="{{ setting('facebook') }}" class="facebook">
                                                    <i class="fa-brands fa-square-facebook"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ setting('instagram') }}" class="instagram">
                                                    <i class="fa-brands fa-square-instagram"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ setting('youtube') }}" class="youtube">
                                                    <i class="fa-brands fa-youtube"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ setting('linkedin') }}" class="linkedin-in">
                                                    <i class="fa-brands fa-linkedin-in"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ setting('twitter') }}" class="twitter">
                                                    <i class="fa-brands fa-twitter"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- social_media_area end -->

                            </div>
                            <!-- footer_contact_area end -->
                        </div>
                    </div>
                    <!-- footer_logo_and_contact_area end -->

                    <!-- footer_blog_area start -->
                    <div class="col-xs-12 col-md-8 col-xl-6">
                        <div class="footer_colum footer_blog_area">

                            <!-- blog_title_and-item_area start -->
                            <div class="blog_title_and-item_area">
                                <div class="row">
                                    <div class="col-xs-12 col-md-6">

                                        <!-- quick_link_title start -->
                                        <div class="quick_and_importent_link_title">
                                            <div class="logo">
                                                <i class="fa-solid fa-link"></i>
                                            </div>
                                            <p class="title_text">Quick Link</p>
                                        </div>
                                        <!-- quick_link_title end -->

                                        <!-- blog_item start -->
                                        <ul class="blog_item">
                                            <li>
                                                <a href="/about">
                                                    <span class="text">About Us</span>
                                                    <div class="icon">
                                                        <i class="fa-solid fa-arrow-right"></i>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/blog">
                                                    <span class="text">Blog</span>
                                                    <div class="icon">
                                                        <i class="fa-solid fa-arrow-right"></i>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/it-solution-services">
                                                    <span class="text">Services</span>
                                                    <div class="icon">
                                                        <i class="fa-solid fa-arrow-right"></i>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/developers">
                                                    <span class="text">Developers
                                                    </span>
                                                    <div class="icon">
                                                        <i class="fa-solid fa-arrow-right"></i>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/contact">
                                                    <span class="text">Contact
                                                    </span>
                                                    <div class="icon">
                                                        <i class="fa-solid fa-arrow-right"></i>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="text"> Career</span>
                                                    <div class="icon">
                                                        <i class="fa-solid fa-arrow-right"></i>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="text">Affiliation</span>
                                                    <div class="icon">
                                                        <i class="fa-solid fa-arrow-right"></i>
                                                    </div>
                                                </a>
                                            </li>
                                            {{-- <li>
                                                <a href="#">
                                                    <span class="text"> শিক্ষক হিসেবে জয়েন করুন</span>
                                                    <div class="icon">
                                                        <i class="fa-solid fa-arrow-right"></i>
                                                    </div>
                                                </a>
                                            </li> --}}
                                        </ul>
                                        <!-- blog_item running -->
                                    </div>

                                    <div class="col-xs-12 col-md-6">

                                        <!-- importent_link_title start -->
                                        <div class="quick_and_importent_link_title">
                                            <div class="logo">
                                                <i class="fa-solid fa-link"></i>
                                            </div>
                                            <p class="title_text">Know Your Rights</p>
                                        </div>
                                        <!-- importent_link_title end -->

                                        <!-- blog_item running -->
                                        <ul class="blog_item">

                                            <li>
                                                <a href="#">
                                                    <span class="text"> Terms and Condition</span>
                                                    <div class="icon">
                                                        <i class="fa-solid fa-arrow-right"></i>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="text">Refund Policy</span>
                                                    <div class="icon">
                                                        <i class="fa-solid fa-arrow-right"></i>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="text"> Cookie Policy</span>
                                                    <div class="icon">
                                                        <i class="fa-solid fa-arrow-right"></i>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="text"> Privacy Policy</span>
                                                    <div class="icon">
                                                        <i class="fa-solid fa-arrow-right"></i>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="text">Terms of Use </span>
                                                    <div class="icon">
                                                        <i class="fa-solid fa-arrow-right"></i>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="text">Copyright</span>
                                                    <div class="icon">
                                                        <i class="fa-solid fa-arrow-right"></i>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                        <!-- blog_item end -->
                                    </div>
                                </div>
                            </div>
                            <!-- blog_item_area end -->
                        </div>
                    </div>
                    <!-- footer_blog_area end -->


                    <!-- footer_address_area start -->
                    <div class="col-xs-12 col-md-4 col-xl-3">
                        <div class="footer_colum footer_address_area">

                            <!-- address_title_area start -->
                            <div class="address_title_area">
                                <div class="logo">
                                    <i class="fa-solid fa-location-dot"></i>
                                </div>
                                <div class="title">
                                    <p class="text">Address</p>
                                </div>
                            </div>
                            <!-- address_title_area end -->

                            <!-- address start -->
                            <div class="address">
                                <p class="text">{{ setting('address_bangla') }}</p>
                            </div>
                            <!-- address end -->

                            <!-- map_area start -->
                            <div class="map_area">
                                <div class="map_title">
                                    <p class="text">Check Map</p>
                                </div>

                                <div class="full_map">
                                    {!! setting('map_link') !!}
                                    {{-- <iframe
                                        src="{{setting(key:'map_link')}}"
                                        width="100%" height="" style="border:0;" allowfullscreen=""
                                        loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> --}}
                                </div>
                            </div>
                            <!-- map_area end -->

                        </div>
                    </div>
                    <!-- footer_address_area end -->
                </div>
            </div>
        </div>

        <!-- footer_copyright_area start -->
        <div class="footer_copyright_area">
            <p class="text">{{ setting('copy_right') }}</p>
        </div>
        <!-- footer_copyright_area end -->
    </footer>
    <!-- footer area end -->
