<section class="course_item bg_banner_area_right position-relative">
    <div class="why-choose-one__shape-3 float-bob-y"
        style=" top: 100px;mix-blend-mode: lighten;
            left: 30%;z-index: 0; ">
        <img src="https://unicktheme.com/2025/techguru-html/main-html/assets/images/shapes/portfolio-two-shape-1.png"
            alt="">
    </div>
    <div class="container">
        <div class="training_details">
            <div class="training_title">
                <h2 class="training_title_bangla animate-text">Our Services</h2>
                <p>
                    We provide services for web design, development, and maintenance. Join us to enhance your skills in
                    <br> the IT sector.
                </p>
            </div>
        </div>
        <div class="course_item_content">
            @foreach ($categories as $key => $cat)
                <div class="course item_{{ $key + 1 }}">
                    <a href="#">
                        <div class="course_icon blip-image">
                            <img class="" src="{{ asset($cat->image) }}" alt="">
                        </div>
                        <div class="course_text_area">
                            <span class="course_text">{{ $cat->title }}</span>
                        </div>
                    </a>
                </div>
            @endforeach

        </div>
        <div class="course_item_content my-5">
            <div class="course item_1">
                <a href="#">
                    <div class="course_icon blip-image">
                        <img src="http://127.0.0.1:8000/frontend/assets/images/course_icon/web.svg" alt="">
                    </div>
                    <div class="course_text_area">
                        <span class="course_text">web development </span>
                    </div>
                </a>
            </div>
            <div class="course item_2">
                <a href="#">
                    <div class="course_icon blip-image">
                        <img src="http://127.0.0.1:8000/frontend/assets/images/course_icon/graphics.svg" alt="">
                    </div>
                    <div class="course_text_area">
                        <span class="course_text"> ui/ux design</span>
                    </div>
                </a>
            </div>
            <div class="course item_3">
                <a href="#">
                    <div class="course_icon blip-image">
                        <img src="http://127.0.0.1:8000/frontend/assets/images/course_icon/digital_marketing.svg"
                            alt="">
                    </div>
                    <div class="course_text_area">
                        <span class="course_text">web view app</span>
                    </div>
                </a>
            </div>

        </div>

    </div>
</section>
