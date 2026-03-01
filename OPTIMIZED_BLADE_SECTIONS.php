<!-- 
==============================================================================
OPTIMIZED BLADE SECTIONS - READY TO USE
==============================================================================
Copy and paste these sections into welcome.blade.php at the appropriate locations
==============================================================================
-->

<!-- ========================================================================== 
SECTION 1: COUNTER SECTION (Replace lines ~1027-1157)
========================================================================== -->
        <!-- Counter Two Start -->
        <section class="counter-two">
            <div class="counter-two__bg-shape"
                style="background-image: url({{ asset('frontend/assets/images/shapes/counter-two-bg-shape.png') }});">
            </div>
            <div class="container">
                <div class="row">
                    @foreach($counterData as $counter)
                    <!--Counter Two Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="counter-two__single">
                            <div class="counter-two__icon-inner">
                                <div class="counter-two__icon">
                                    <span class="{{ $counter['icon'] }}"></span>
                                </div>
                            </div>
                            <div class="counter-two__content">
                                <div class="counter-two__count-box">
                                    <h3 class="odometer odometer-auto-theme" data-count="{{ $counter['count'] }}">0</h3>
                                    <span>{{ $counter['suffix'] }}</span>
                                </div>
                                <p class="counter-two__text">{!! $counter['title'] !!}</p>
                            </div>
                        </div>
                    </div>
                    <!--Counter Two Single End-->
                    @endforeach
                </div>
            </div>
        </section>
        <!-- Counter Two End -->


<!-- ========================================================================== 
SECTION 2: SERVICES SECTION (Replace lines ~1540-1650)
========================================================================== -->
                <div class="services-two__bottom">
                    <div class="services-two__services-list">
                        @foreach($servicesData as $service)
                        <div class="services-two__services-list-single">
                            <div class="services-two__count-and-title">
                                <div class="services-two__count"></div>
                                <h3 class="services-two__title"><a href="{{ $service['link'] }}">{!! $service['title'] !!}</a></h3>
                            </div>
                            <div class="services-two__service-list-box">
                                <ul class="services-two__services-list-inner list-unstyled">
                                    @foreach($service['features'] as $featurePair)
                                    <li>
                                        <p><span class="fas fa-plus"></span>{{ $featurePair[0] }}</p>
                                        <p><span class="fas fa-plus"></span>{{ $featurePair[1] }}</p>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="services-two__hover-img">
                                <img src="{{ asset($service['image']) }}" alt="Image">
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>


<!-- ========================================================================== 
SECTION 3: PROCESS SECTION (Replace lines ~2175-2220)
========================================================================== -->
                <ul class="row list-unstyled">
                    @foreach($processData as $index => $process)
                    <!--Process Two Single Start-->
                    <li class="col-xl-4 col-lg-4">
                        <div class="process-two__single">
                            @if($index == 1)
                            <div class="process-two__shape-1 float-bob-x">
                                <img src="{{ asset('frontend/assets/images/process-two-shape-1.png') }}" alt="">
                            </div>
                            <div class="process-two__shape-2 float-bob-x">
                                <img src="{{ asset('frontend/assets/images/process-two-shape-2.png') }}" alt="">
                            </div>
                            @endif
                            <div class="process-two__count"></div>
                            <h3 class="process-two__title">{{ $process['title'] }}</h3>
                            <p class="process-two__text">{{ $process['description'] }}</p>
                        </div>
                    </li>
                    <!--Process Two Single End-->
                    @endforeach
                </ul>


<!-- ========================================================================== 
SECTION 4: EVENTS SECTION (Replace lines ~4005-4190)
========================================================================== -->
                        <div class="col-xl-7">
                            <div class="event-one__right">
                                @foreach($eventsData as $index => $event)
                                <!-- Event One Single Start -->
                                <div class="event-one__single wow fadeInLeft" data-wow-delay="{{ (($index + 1) * 100) }}ms">
                                    <div class="event-one__title-and-countdown-box">
                                        <div class="event-one__title">
                                            <h5><a href="#contact">{{ $event['title'] }}</a></h5>
                                            <p>{{ $event['time'] }}</p>
                                        </div>
                                    </div>
                                    <div class="event-one__meta-and-btn-box">
                                        <ul class="event-one__meta list-unstyled">
                                            <li>
                                                <a href="#"><span class="fas fa-map-marker-alt"></span>{{ $event['location'] }}</a>
                                            </li>
                                            <li>
                                                <a href="#"><span class="fas fa-calendar-alt"></span>{{ $event['month'] }} {{ $event['date'] }}, 2026</a>
                                            </li>
                                        </ul>
                                        <div class="event-one__btn-box">
                                            <a href="#contact" class="event-one__btn">Book Seat<span class="fas fa-arrow-right"></span></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Event One Single End -->
                                @endforeach
                            </div>
                        </div>


<!-- ========================================================================== 
SECTION 5: CONTACT SECTION (Replace lines ~4845-4875)
========================================================================== -->
                            <ul class="contact-two__contact-list list-unstyled">
                                <li>
                                    <div class="icon">
                                        <span class="fas fa-envelope"></span>
                                    </div>
                                    <div class="content">
                                        <span>Email Us</span>
                                        <p><a href="mailto:{{ $contactData['email'] }}">{{ $contactData['email'] }}</a></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="fas fa-phone-alt"></span>
                                    </div>
                                    <div class="content">
                                        <span>Contact US</span>
                                        <p><a href="tel:{{ $contactData['phone_raw'] }}">{{ $contactData['phone'] }}</a></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="fas fa-map-marker-alt"></span>
                                    </div>
                                    <div class="content">
                                        <span>Our Address</span>
                                        <p>{{ $contactData['address'] }}</p>
                                    </div>
                                </li>
                            </ul>


<!-- ========================================================================== 
SECTION 6: ABOUT SECTION - FEATURES (Replace lines ~945-975)
========================================================================== -->
                            <div class="about-two__points-box">
                                <ul class="about-two__points-list list-unstyled">
                                    @foreach($aboutData['features'] as $index => $feature)
                                        @if($index < 2)
                                    <li>
                                        <div class="icon">
                                            <i class="{{ $feature['icon'] }}"></i>
                                        </div>
                                        <p>{!! $feature['text'] !!}</p>
                                    </li>
                                        @endif
                                    @endforeach
                                </ul>
                                <ul class="about-two__points-list list-unstyled">
                                    @foreach($aboutData['features'] as $index => $feature)
                                        @if($index >= 2)
                                    <li>
                                        <div class="icon">
                                            <i class="{{ $feature['icon'] }}"></i>
                                        </div>
                                        <p>{!! $feature['text'] !!}</p>
                                    </li>
                                        @endif
                                    @endforeach
                                </ul>
                            </div>


<!-- ========================================================================== 
SECTION 7: WHY CHOOSE US - PROGRESS BARS (Replace lines ~1867-1889)
========================================================================== -->
                            <ul class="why-choose-one__progress-list list-unstyled">
                                @foreach($whyChooseData['progress_bars'] as $progress)
                                <li>
                                    <h4 class="why-choose-one__progress-title">{{ $progress['title'] }}</h4>
                                    <div class="bar">
                                        <div class="bar-inner count-bar" data-percent="{{ $progress['percentage'] }}%" style="width: {{ $progress['percentage'] }}%;">
                                            <div class="count-text">{{ $progress['percentage'] }}%</div>
                                        </div>
                                    </div>
                                </li>
                                @endforeach
                            </ul>


<!-- ========================================================================== 
SECTION 8: BLOG RIGHT SIDEBAR - LOOPS (Replace lines ~3236-3360)
========================================================================== -->
                        <div class="col-xl-6">
                            <div class="blog-two__right">
                                @foreach($blogData as $index => $blog)
                                    @if($index > 0 && $index <= 3)
                                <!-- Blog Two Single Two Start -->
                                <div class="blog-two__single-two wow fadeIn{{ $index % 2 == 1 ? 'Left' : 'Right' }}" data-wow-delay="{{ ($index * 100) }}ms">
                                    <div class="blog-two__img-two">
                                        <img src="{{ asset($blog['image']) }}" alt="">
                                    </div>
                                    <div class="blog-two__content-two">
                                        <h4 class="blog-two__title-two"><a href="{{ $blog['link'] }}">{{ $blog['title'] }}</a></h4>
                                        <p class="blog-two__text-three">{{ $blog['excerpt'] }}</p>
                                        <ul class="blog-two__meta-two list-unstyled">
                                            <li>
                                                <a href="#"><span class="far fa-user-circle"></span>{{ $blog['author'] }}</a>
                                            </li>
                                            <li>
                                                <a href="#"><span class="far fa-comments"></span>{{ $blog['comments'] }} Comments</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Blog Two Single Two End -->
                                    @endif
                                @endforeach
                            </div>
                        </div>


<!-- ========================================================================== 
USAGE INSTRUCTIONS
========================================================================== -->
<!--
1. Keep your original file backed up at: resources/views/welcome.blade.php.original
2. Open welcome.blade.php in your editor
3. Find each section by line number or search for the section comment
4. Replace the entire section with the optimized version above
5. Save the file
6. Clear caches:
   php artisan cache:clear
   php artisan view:clear
7. Test your homepage

BENEFITS:
- All content now comes from HomeController
- Easy to modify content without touching HTML
- Consistent structure across sections
- Better maintainability
- Can easily add/remove items by updating controller arrays

NEXT STEPS:
- Consider moving data to database tables
- Create an admin panel to manage content
- Implement caching for better performance
-->
