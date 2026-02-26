  <!-- job_career_area start-->
  <section class="job_career_area">
    <div class="container">
        <div class="job_career_area_content">
            <div class="row">
                <!-- left_area start -->
                <div class="col-xs-12 col-md-6">
                    <div class="left_area">
                        <!--job_career_area title start -->
                        <div class="job_career_area_title">
                            <h2 class="area_title">
                                আপনার জব ক্যারিয়ার নিয়ে চিন্তিত?
                            </h2>
                        </div>
                        <!-- job_career_area title end -->
                        <!-- job_career_image start -->
                        <div class="job_career_image">
                            <img src="{{ asset('frontend') }}/assets/images/home_page_image/job_career_area/img.png"
                                alt="job_career tech park it">
                        </div>
                        <!-- job_career_image end -->
                    </div>
                </div>
                <!-- left_area end -->

                <!-- right_area start -->
                <div class="col-xs-12 col-md-6">
                    <div class="right_area">
                        <!-- form_area start -->
                        <div class="form_area">
                            <!-- form_area_sub_title start -->
                            <div class="form_area_sub_title">
                                <p class="sub_title">
                                    আমাদের সাথে এপয়েন্টমেন্ট বুক করুন, আমরা আপনাকে ক্যারিয়ার সংক্রান্ত পরামর্শ দিব
                                </p>
                            </div>
                            <!-- form_area_sub_title end -->

                            <!-- form stat -->
                            <form id="contact_form" onsubmit="registerContact(event)">
                                <input type="text" name="full_name" placeholder="আপনার নাম *">
                                <input type="email" name="email" placeholder="আপনার ইমেইল *">
                                <input type="tel" name="phone" placeholder="আপনার ফোন নাম্বার *">
                                <input type="text" name="subject" placeholder="আপনার সাবজেক্ট উল্লেখ করুন *">
                                <textarea name="message" cols="30" rows="10" placeholder="বিস্তারিত লিখুন *"></textarea>
                                <button class="button_all">
                                    <i class="fa-solid fa-arrow-up-right-from-square"></i>
                                    <span> সাবমিট করুন</span>
                                </button>
                            </form>
                            <!-- form end -->
                        </div>
                        <!-- form_area end -->
                    </div>
                </div>
                <!-- right_area  -->

            </div>
        </div>
    </div>
</section>
<!-- job_career area end-->
