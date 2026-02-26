<div class="course_card_area">
    @foreach ($course_speciality as $course_item)
        <div class="c_card card_1">
            <div class="card_img_area">
                <div class="card_img">
                    <img src="{{ asset($course_item->image) }}" alt="card tech park it
                        ">
                </div>
            </div>
            <div class="card_text">
                <p>{{ $course_item->title }}</p>
            </div>
        </div>
    @endforeach
</div>
