<div class="py_100 my_it_service_area bg_banner_area_right">
    <div class="container-md">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8 col-md-10">
                <div class="text-center mb_40">
                    <h2 class="fs-1 fw-bold text-white mb-4 animate-text">Our Solutions
                    </h2>
                    <p class="sub_text">We provide a time-worthy business solution to every type of business. Find out
                        your one and level up your success stairs.</p>
                </div>
            </div>
        </div>
        <div class="row my_it_service_area_content mt-3">
            <ul class="justify-content-center mb-5 nav nav-pills product_pills" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link px-4 py-2 rounded-0 fs-17 transition active mx-2" id="exclusive-tab"
                        data-bs-toggle="pill" data-bs-target="#exclusive" type="button" role="tab"
                        aria-controls="exclusive" aria-selected="true">Exclusive</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link px-4 py-2 rounded-0 fs-17 transition mx-2" id="ecommerce-tab"
                        data-bs-toggle="pill" data-bs-target="#ecommerce" type="button" role="tab"
                        aria-controls="ecommerce" aria-selected="false">E-Commerce</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link px-4 py-2 rounded-0 fs-17 transition mx-2" id="pos-inventory-tab"
                        data-bs-toggle="pill" data-bs-target="#pos-inventory" type="button" role="tab"
                        aria-controls="pos-inventory" aria-selected="false">Pos & Inventory</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link px-4 py-2 rounded-0 fs-17 transition mx-2" id="school_management-tab"
                        data-bs-toggle="pill" data-bs-target="#school_management" type="button" role="tab"
                        aria-controls="school_management" aria-selected="false">School Management</button>
                </li>
            </ul>

            <div class="tab-content" id="pills-tabContent">

                <div class="tab-pane fade active show" id="exclusive" role="tabpanel" aria-labelledby="exclusive-tab">
                    <div class="service_area">
                        <div class="service_area">
                            @php
                                $exclusive_services = $it_services->where('category', 'exclusive');
                            @endphp

                            @if ($exclusive_services->isEmpty())
                                <div class="text-center">
                                    <p class="text-white">No Exclusive services available at the moment.</p>
                                </div>
                            @endif

                            @foreach ($exclusive_services as $service)
                                @include('frontend.pages.services.product')
                            @endforeach
                        </div>
                    </div>
                </div>


                <div class="tab-pane fade" id="ecommerce" role="tabpanel" aria-labelledby="ecommerce-tab">
                    <div class="service_area">
                        <div class="service_area">
                            @php
                                $exclusive_services = $it_services->where('category', 'ecommerce');
                            @endphp

                            @if ($exclusive_services->isEmpty())
                                <div class="text-center">
                                    <p class="text-white">No E-commerce services available at the moment.</p>
                                </div>
                            @endif

                            @foreach ($exclusive_services as $service)
                                @include('frontend.pages.services.product')
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="pos-inventory" role="tabpanel" aria-labelledby="pos-inventory-tab">
                    <div class="service_area">
                        <div class="service_area">
                            @php
                                $exclusive_services = $it_services->where('category', 'pos_inventory');
                            @endphp

                            @if ($exclusive_services->isEmpty())
                                <div class="text-center">
                                    <p class="text-white">No Pos Inventory services available at the moment.</p>
                                </div>
                            @endif

                            @foreach ($exclusive_services as $service)
                                @include('frontend.pages.services.product')
                            @endforeach
                        </div>
                    </div>
                </div>


                <div class="tab-pane fade" id="school_management" role="tabpanel"
                    aria-labelledby="school_management-tab">
                    <div class="service_area">
                        <div class="service_area">
                            @php
                                $exclusive_services = $it_services->where('category', 'school_management');
                            @endphp

                            @if ($exclusive_services->isEmpty())
                                <div class="text-center">
                                    <p class="text-white">No School Management services available at the moment.</p>
                                </div>
                            @endif

                            @foreach ($exclusive_services as $service)
                                @include('frontend.pages.services.product')
                            @endforeach
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </div>
</div>
