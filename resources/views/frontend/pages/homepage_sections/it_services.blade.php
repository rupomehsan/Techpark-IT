<!-- my_it_service_area start -->

<section class="my_it_service_area bg_banner_area_right position-relative" {{-- style="background-image: url({{ asset('frontend') }}/assets/images/home_page_image/ti_service/bg_img.png);" --}}>
    <div class="why-choose-one__shape-3 float-bob-y" style=" top: 0px;mix-blend-mode: lighten;
            left: 0%;">
        <img src="https://unicktheme.com/2025/techguru-html/main-html/assets/images/shapes/portfolio-two-shape-1.png"
            alt="">
    </div>
    <div class="container">
        <div class="my_it_service_area_content">

            <!--my_it_service_area_title start -->
            <div class="our_course_specialty_area_title text-center mb-5">
                <h2 class="area_title animate-text">
                    Our Products
                </h2>
                <div class="student_success_history_area_sub_title">
                    <span class="sub_title">
                        We are committed to delivering reliable and professional support to ensure your software systems
                        remain efficient, secure, and up-to-date. <br>Our key support services include:
                    </span>
                </div>
            </div>
            <!-- my_it_service_area end -->

            <div class="row my_it_service_area_content mt-3">
                <ul class="justify-content-center mb-5 nav nav-pills product_pills" role="tablist">
                    <li class="nav-item " role="presentation">
                        <button class="nav-link animated-box in px-4 py-2 rounded-0 fs-17 transition active mx-2"
                            id="exclusive-tab" data-bs-toggle="pill" data-bs-target="#exclusive" type="button"
                            role="tab" aria-controls="exclusive" aria-selected="true">Featured</button>
                    </li>
                    <li class="nav-item " role="presentation">
                        <button class="nav-link animated-box in px-4 py-2 rounded-0 fs-17 transition mx-2"
                            id="ecommerce-tab" data-bs-toggle="pill" data-bs-target="#ecommerce" type="button"
                            role="tab" aria-controls="ecommerce" aria-selected="false"
                            tabindex="-1">E-Commerce</button>
                    </li>
                    <li class="nav-item " role="presentation">
                        <button class="nav-link animated-box in px-4 py-2 rounded-0 fs-17 transition mx-2"
                            id="pos-inventory-tab" data-bs-toggle="pill" data-bs-target="#pos-inventory" type="button"
                            role="tab" aria-controls="pos-inventory" aria-selected="false" tabindex="-1">Pos &amp;
                            Inventory</button>
                    </li>
                    <li class="nav-item " role="presentation">
                        <button class="nav-link animated-box in px-4 py-2 rounded-0 fs-17 transition mx-2"
                            id="school_management-tab" data-bs-toggle="pill" data-bs-target="#school_management"
                            type="button" role="tab" aria-controls="school_management" aria-selected="false"
                            tabindex="-1">School
                            Management</button>
                    </li>
                </ul>

                <div class="tab-content" id="pills-tabContent">

                    <div class="tab-pane fade active show" id="exclusive" role="tabpanel"
                        aria-labelledby="exclusive-tab">
                        <div class="service_area">
                            <div class="service_area">

                                <div class="service_area">
                                    <div class="service_area">
                                        @foreach ($it_services as $service)
                                            <div class="service wordpress">
                                                <div class="service_logo">
                                                    <a href="{{ route('project_details', $service->slug) }}">
                                                        <img src="{{ asset($service->image) }}"
                                                            alt="{{ $service->title }}">
                                                    </a>
                                                </div>
                                                <div class="service_title_and_description">
                                                    <div class="title">
                                                        <p class="title_text">
                                                            <a href="{{ route('project_details', $service->slug) }}">
                                                                {{ $service->title }}
                                                            </a>
                                                        </p>
                                                    </div>
                                                    <div class="description">
                                                        <p class="description_text">
                                                            @if (url()->current() === route('it_solution_services') || url()->current() === route('website'))
                                                                {{ $service->tag_name }}
                                                            @else
                                                                {{ $service->short_description }}
                                                            @endif
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>


                    <div class="tab-pane fade" id="ecommerce" role="tabpanel" aria-labelledby="ecommerce-tab">
                        <div class="service_area">
                            <div class="service_area">

                                @foreach ($it_services as $service)
                                    <div class="service wordpress">
                                        <div class="service_logo">
                                            <a href="{{ route('project_details', $service->slug) }}">
                                                <img src="{{ asset($service->image) }}" alt="{{ $service->title }}">
                                            </a>
                                        </div>
                                        <div class="service_title_and_description">
                                            <div class="title">
                                                <p class="title_text">
                                                    <a href="{{ route('project_details', $service->slug) }}">
                                                        {{ $service->title }}
                                                    </a>
                                                </p>
                                            </div>
                                            <div class="description">
                                                <p class="description_text">
                                                    @if (url()->current() === route('it_solution_services') || url()->current() === route('website'))
                                                        {{ $service->tag_name }}
                                                    @else
                                                        {{ $service->short_description }}
                                                    @endif
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="pos-inventory" role="tabpanel" aria-labelledby="pos-inventory-tab">
                        <div class="service_area">
                            <div class="service_area">
                                @foreach ($it_services as $service)
                                    <div class="service wordpress">
                                        <div class="service_logo">
                                            <a href="{{ route('project_details', $service->slug) }}">
                                                <img src="{{ asset($service->image) }}" alt="{{ $service->title }}">
                                            </a>
                                        </div>
                                        <div class="service_title_and_description">
                                            <div class="title">
                                                <p class="title_text">
                                                    <a href="{{ route('project_details', $service->slug) }}">
                                                        {{ $service->title }}
                                                    </a>
                                                </p>
                                            </div>
                                            <div class="description">
                                                <p class="description_text">
                                                    @if (url()->current() === route('it_solution_services') || url()->current() === route('website'))
                                                        {{ $service->tag_name }}
                                                    @else
                                                        {{ $service->short_description }}
                                                    @endif
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="school_management" role="tabpanel"
                        aria-labelledby="school_management-tab">
                        <div class="service_area">
                            <div class="service_area">
                                @foreach ($it_services as $service)
                                    <div class="service wordpress">
                                        <div class="service_logo">
                                            <a href="{{ route('project_details', $service->slug) }}">
                                                <img src="{{ asset($service->image) }}" alt="{{ $service->title }}">
                                            </a>
                                        </div>
                                        <div class="service_title_and_description">
                                            <div class="title">
                                                <p class="title_text">
                                                    <a href="{{ route('project_details', $service->slug) }}">
                                                        {{ $service->title }}
                                                    </a>
                                                </p>
                                            </div>
                                            <div class="description">
                                                <p class="description_text">
                                                    @if (url()->current() === route('it_solution_services') || url()->current() === route('website'))
                                                        {{ $service->tag_name }}
                                                    @else
                                                        {{ $service->short_description }}
                                                    @endif
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </div>






                </div>
            </div>

            <!-- service_area start -->

            <!-- service_area end-->
        </div>

        @if (!request()->is('it-solution-services'))
            <div class="success_history_button_area text-center mt-5">
                <a href="{{ route('it_solution_services') }}" class="button_all">
                    <span class="btn_text">Show More</span>
                    <span class="btn_icon">
                        <i class="fas fa-arrow-right"></i></span>
                </a>
            </div>
        @endif

    </div>
</section>
<!-- my_it_service_area end-->
@push('styles')
    <style>
        .nav-pills .nav-link.active,
        .nav-pills .show>.nav-link {
            color: unset;
            background-color: #a52a2a6e;
        }
    </style>
@endpush
