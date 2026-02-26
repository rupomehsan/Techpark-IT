@php
    $meta = [
        'seo' => [
            'title' => 'blog',
            'image' => asset('seo.jpg'),
        ],
    ];
@endphp
@extends('frontend.layouts.layout', $meta)
@section('contents')
    <!-- blog area start -->
    <div class="science_and_technology bg_banner_area_right">
        <div class="container">

            <!-- science_and_technology_content start -->
            <div class="science_and_technology_content">
                <div class="science_and_technology_text_area">
                    <div class="title">
                        <p class="text">{{ $latestBlogs->category[0]->title }}</p>
                    </div>
                    <div class="content_text">
                        <h2 class="text">{{ $latestBlogs->title }}</h2>
                    </div>
                    <div class="sub_content_text_and_button">
                        <div class="sub_content_text">
                            {{-- <p class="text">{{ $latestBlogs->short_description }}</p> --}}
                        </div>
                        <a class="button_all" href="{{ route('blog_details', $latestBlogs->slug) }}">
                            আরো পড়ুন
                        </a>
                    </div>
                </div>
                <div class="science_and_technology_img_area">
                    {{-- <img class="blog_img" src="{{ asset('frontend') }}/assets/images/blog_page_image/blog.png"
                        alt="tech park it"> --}}
                    <img class="blog_img" src="{{ asset($latestBlogs->image) }}" alt="{{ $latestBlogs->title }}"
                        loading="lazy">

                    <img class="color_image_left" src="{{ asset('frontend') }}/assets/images/blog_page_image/color1.png"
                        alt="tech park it"
                        style="filter: hue-rotate(309deg) saturate(100%) brightness(100%) sepia(0%) hue-rotate(142deg);">

                    <img class="color_image_right" src="{{ asset('frontend') }}/assets/images/blog_page_image/color2.png"
                        style="filter: hue-rotate(309deg) saturate(100%) brightness(100%) sepia(0%) hue-rotate(142deg);"
                        alt="tech park it">
                </div>
            </div>
            <!-- science_and_technology_content end -->

            @php
                $activeCategory = request('category');
            @endphp

            <!-- blog nav bar area start -->
            <div class="blog_nav">
                <ul>
                    <li>
                        <a href="{{ route('blog') }}" class="{{ !$activeCategory ? 'active' : '' }}">All</a>
                    </li>
                    @foreach ($blog_categories as $category)
                        <li>
                            <a href="{{ url('/blog') }}?category={{ $category->id }}"
                                class="{{ $activeCategory == $category->id ? 'active' : '' }}">
                                {{ $category->title }}
                            </a>
                        </li>
                    @endforeach
                    </li>
                </ul>
            </div>
            <!-- blog nav bar area end -->

            <!-- blog list area start -->
            <div class="blog_list">

                <!-- blog start -->
                @if (isset($blogs) && $blogs->count())
                    @foreach ($blogs as $blog)
                        <div class="blog">
                            <div class="blog_image_and_image_button_area">
                                <a href="{{ route('blog_details', $blog->slug) }}">
                                    <div class="blog_image">
                                        <img src="/{{ $blog->image }}" alt="tech_park_it" loading="lazy">
                                    </div>
                                </a>
                            </div>

                            <div class="blog_text_content">
                                <div class="day_and_time">
                                    <span class="day_text">{{ $blog->created_at->diffForHumans() }} | </span>

                                    <span class="min_text">{{ rand(6, 15) }} min. to read </span>
                                </div>
                                <div class="text_title">
                                    <a href="{{ route('blog_details', $blog->slug) }}">
                                        <h2 class="title">{{ $blog->title }}</h2>
                                    </a>
                                </div>
                            </div>

                        </div>
                    @endforeach
                @else
                    <div class="blog">
                        <div class="blog_text_content">
                            <div class="text_title">
                                <h2 class="title">No blog found..</h2>
                            </div>
                        </div>
                    </div>
                @endif
                <!-- blog end -->

            </div>
            <!-- blog list area end -->

            <!-- next_page_button_area start -->
            <div class="next_page_button_area">
                {{ $blogs->links() }}
                {{-- <ul>
                    <li>
                        <a href="#" class="title"> <span class="left_angle"><i class="fa-solid fa-angle-left"></i></span>
                            পূর্বের পেজ</a>
                    </li>
                    <li>
                        <a class="count_number" href="#">১</a>
                    </li>
                    <li>
                        <a class="count_number" href="#">২</a>
                    </li>
                    <li>
                        <a href="#" class="title">পরবর্তী পেজ <span class="right_angle"> <i
                                    class="fa-solid fa-angle-right"></i></span></a>
                    </li>
                </ul> --}}
            </div>
            <!-- next_page_button_area end -->

            <!-- subscribe_area_start -->
            <section class="subscribe_area">
                <div class="subscribe_area_title">
                    <h2 class="title">ব্লগ আপডেট পেতে সাবস্ক্রাইব করুন</h2>
                </div>
                <div class="subscribe_area_sub_title">
                    <p class="sub_title">আপনার নতুন ব্লগ সম্পর্কে নিয়মিত আপডেট পেতে আমাদের নিউজলেটারে সাবস্ক্রাইব করুন</p>
                </div>
                <!-- subscribe_form_area start -->
                <form id="contact_form" onsubmit="registerBlogEmail(event)">
                    <div class="subscribe_form_area">
                        <input type="text" name="email" placeholder="mail@yourmail.com">
                        <button type="submit" class="subscribe_button">Subscribe Us</button>
                    </div>
                </form>
                <!-- subscribe_form_area end -->

            </section>
            <!-- subscribe_area_end -->

        </div>
    </div>
    <!-- blog area end -->
@endsection
