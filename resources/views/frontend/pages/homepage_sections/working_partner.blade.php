<!-- working_company_name area start -->
<section class="working_company_name_area bg_banner_area_left position-relative" style="overflow: hidden;">
    <div class="why-choose-one__shape-3 float-bob-y"
        style=" top: -50px; overflow: hidden;
            left: 30%; z-index: 0;">
        <img src="https://unicktheme.com/2025/techguru-html/main-html/assets/images/shapes/event-one-shape-2.png"
            alt="">
    </div>
    <div class="working_company_name_area_content">

        <!--working_company_name_area_title start -->
        <div class="working_company_name_area_title">
            <h2 class="area_title animate-text">
                Our Partners
            </h2>
        </div>
        <!-- -working_company_name_area_title end -->

        <!-- all_company_name and logo area start -->
        {{-- <div class="all_company_name">
            <ul>
                @foreach ($partners as $partner)
                    @if ($loop->index % 6 == 0 && $loop->index != 0)
                        </ul>
                        <ul class="mt-4">
                    @endif
                    <li class="company_logo">
                        <a href="#">
                            <img src="{{ asset($partner->image) }}" alt="logo">
                        </a>
                    </li>
                @endforeach
            </ul>
        </div> --}}
        <div class="all_company_name space-y-6 overflow-hidden dark:bg-black py-8">
            @php
                $chunks = $partners->chunk(6);
            @endphp

            @foreach ($chunks as $index => $chunk)
                <div class="overflow-hidden">
                    <div class="marquee-wrapper {{ $index % 2 === 1 ? 'reverse' : '' }}">
                        <ul class="marquee">
                            @foreach ($chunk as $partner)
                                <li class="company_logo">
                                    <img src="{{ asset($partner->image) }}" alt="logo" class="logo-img">
                                </li>
                            @endforeach
                            {{-- Duplicate logos for seamless scroll --}}
                            @foreach ($chunk as $partner)
                                <li class="company_logo">
                                    <img src="{{ asset($partner->image) }}" alt="logo" class="logo-img">
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endforeach
        </div>


        <!-- all_company_name and logo area end -->
    </div>
</section>
<!-- working_company_name area end -->
