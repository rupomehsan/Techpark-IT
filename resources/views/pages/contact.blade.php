@extends('layouts.app')

@section('title', 'Contact Us | Bdtask')

@section('meta_description', 'Do you need any information? Our support team is eagerly waiting to solve your problem anytime. Feel free to contact us and let us know your requirements.')

@push('meta_tags')
<link rel="canonical" href="{{route('contact')}}" />
<meta name="google-site-verification" content="acwUugMnJnDo2MlMGz5wzzT2gWOTR4P68xbiEd5VzfI"/>
<meta name="yandex-verification" content="598e72dfa3eeba81"/>
<meta name="msvalidate.01" content="93D27DC816FE2DFFE3C578BB39C17386"/>

<meta property="og:title" content="Contact Us | Bdtask"/>
<meta property="og:description" content="Do you need any information? Our support team is eagerly waiting to solve your problem anytime. Feel free to contact us and let us know your requirements."/>
<meta property="og:url" content="contact.html"/>
<meta property="og:site_name" content="index.html"/>
<meta property="og:image" content="asset/img/bdtask-software-development-company.jpg"/>
<meta property="og:image:width" content="760"/>
<meta property="og:image:height" content="420"/>
@endpush

@section('content')
		<!-- Banner Start-->
		<div class="main-container py_100">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-8 text-center">
						<h1 class="page-title fw-bold">Hello. <span class="fw-light">How can we help you?</span></h1>
					</div>
				</div>
				<div class="contact-address">
					<div class="row g-3">
						<div class="col-xl-3 col-sm-6">
							<div class="bg_grad h-100 px-4 py-5">
								<h5> Bangladesh Office.</h5>
								B-25, Mannan Plaza, <br>4th Floor, Khilkhet <br>
								Dhaka-1229, Bangladesh
								<br>
								+88-01817584639 <br> +88-01857675727
								<a href="cdn-cgi/l/email-protection.html#3c5e494f5552594f4f7c5e58485d4f57125f5351"><span class="__cf_email__" data-cfemail="86e4f3f5efe8e3f5f5c6e4e2f2e7f5eda8e5e9eb">[email&#160;protected]</span></a>

							</div>
						</div>
						<div class="col-xl-3 col-sm-6">
							<div class="bg_grad2 h-100 px-4 py-5">
								<h5>UAE Office</h5>
								Silver Tower - 20th floor Marasi Dr - Business Bay - Dubai - United Arab Emirates.
								<!--29/22 Tunbridge St<br>-->
								<!--Mascot NSW 2020<br>-->
								<br>
								+971 4 529 8413 <br>
								<a href="cdn-cgi/l/email-protection.html#d0b3bfa2a0bfa2b1a4b590b2b4a4b1a3bbfeb3bfbd"><span class="__cf_email__" data-cfemail="8deee2fffde2ffecf9e8cdefe9f9ecfee6a3eee2e0">[email&#160;protected]</span></a>
							</div>
						</div>
						<div class="col-xl-3 col-sm-6">
							<div class="bg_grad h-100 px-4 py-5">
								<h5>USA Office</h5>
								1939 Ellis Ave, Bronx, NY 10472, United States
								<br><br>
								Phone: +1 929-431-4241<br>
								<a href="cdn-cgi/l/email-protection.html#15767a67657a677461705577716174667e3b767a78"><span class="__cf_email__" data-cfemail="4d2e223f3d223f2c39280d2f29392c3e26632e2220">[email&#160;protected]</span></a>
							</div>
						</div>
						<div class="col-xl-3 col-sm-6">
							<div class="bg_grad2 h-100 px-4 py-5">
								<h5>Careers.</h5>
								Recruiting<br>
								<br>
								Send your resume here: <br>
								<a href="cdn-cgi/l/email-protection.html#e684829287958da6818b878f8ac885898b"><span class="__cf_email__" data-cfemail="bed6ccfedcdacadfcdd590ddd1d3">[email&#160;protected]</span></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
	
	<section class="service-contact py_100 bg_grad">
        <div class="container">
            <div class="row">
                <!--Form Column-->
                <div class="form-column col-lg-6 col-xs-12">
					<div class="column-inner">
						<!--Contact Form-->
						<div class="contact-form">
							<form method="post" action="#" id="contact-form" novalidate="novalidate">
								<div class="form-group">
									<input class="form-control pd3" name="name" id="senderName" placeholder="Full Name" required="" type="text">
								</div>
								<div class="form-group">
									<input class="form-control pd3" name="email" id="senderMail" placeholder="Email Address*" required="" type="email">
								</div>
								<div class="form-group">
									<input class="form-control pd3" name="subject" id="form_subject" placeholder="Subject*" type="text">
								</div>
								<div class="form-group">
									<textarea name="message" class="form-control pd3" id="form_message" placeholder="Your Message*" rows="4"></textarea>
								</div>
								<div class="form-group">
									<button type="button" class="btn btn-success px-4 py-3" id="frmbutton">Send Message</button>
								</div>
							</form>
						</div>
					</div>
				</div>
                <!--Info Column-->
                <div class="col-lg-6 col-xs-12">
                    <div class="ps-0 ps-lg-5">
                        <div class="sec-title">
                            <h2 class="fw-bold fs-40">Don’t Hesitate to <br> contact with us for any <br> kind of information</h2>
                        </div>
                        <div class="text">Call us for query</div>
                        <h3>+880-181-758-4639</h3>
                        <!--Social Icon Four-->
                        <ul class="d-flex list-unstyled mt-4">
							<li><a class="align-items-center d-flex justify-content-center me-2 text-decoration-none text-white social_icon" href="https://www.facebook.com/bdtaskteam/" rel="nofollow" title="Facebook" target="_blank"><i class="ti-facebook"></i></a></li>
							<li><a class="align-items-center d-flex justify-content-center me-2 text-decoration-none text-white social_icon" href="https://www.pinterest.com/bdtask/" rel="nofollow" title="Pinterest" target="_blank"><i class="ti-pinterest"></i></a></li>
							<li><a class="align-items-center d-flex justify-content-center me-2 text-decoration-none text-white social_icon" href="https://www.linkedin.com/company/bdtask/" rel="nofollow" title="Linkedin" target="_blank"><i class="ti-linkedin"></i></a></li>
							<li><a class="align-items-center d-flex justify-content-center me-2 text-decoration-none text-white social_icon" href="https://twitter.com/bdtask" title="Twitter" rel="nofollow" target="_blank"><i class="ti-twitter"></i></a></li>
						</ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

	<!-- Map Start-->
	<div class="py_100">
		<div class="container-md">
			<div class="row g-4">
			    <div class="col-12">
			        <p class="text-center fw-bold fs-3">Bangladesh Office</p>
					<iframe class="rounded-5" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3649.696066934295!2d90.41879721450367!3d23.829404491671625!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8a4136c4b61%3A0x19549f5462616f04!2sBdtask%20Limited%20-%20Best%20Software%20Company%20in%20Bangladesh!5e0!3m2!1sen!2sbd!4v1648449461297!5m2!1sen!2sbd" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				</div>
				<div class="col-lg-6">
				    <p class="text-center fw-bold fs-3">UAE Office</p>
				    <iframe class="rounded-5" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3610.546332658791!2d55.26173537595974!3d25.184791932201957!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f6973c9d206a1%3A0x900d7d42a233fc08!2sBdtask%20IT%20Solutions!5e0!3m2!1sen!2sbd!4v1727246757656!5m2!1sen!2sbd" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				</div>
				<div class="col-lg-6">
				    <p class="text-center fw-bold fs-3">USA Office</p>
				    <iframe class="rounded-5" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3019.565090019764!2d-73.862640317866!3d40.83159712872177!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2f4c156d54319%3A0xe46b8eebbd444e20!2sBdtask%2C%20Inc.!5e0!3m2!1sen!2sbd!4v1727246686904!5m2!1sen!2sbd" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				</div>
			</div>

			<div class="row">
				<div class="col-xl-10 offset-xl-1">
					<div class="align-items-center bg-dark d-xl-flex justify-content-between py-5 rounded-5 join_box mt-5">
						<div class="d-block">
							<h3 class="fs-3 fw-bold mb-2 text-white">Be with Us to Wheel Up Your Revenue</h3>
							<p class="text-white mb-0">We are always ready to serve you. Please share your ideas and values with us.</p>
						</div>
						<div class="d-block mt-4 mt-xl-0">
							<a href="custom-order.html" class="btn btn-success px-5 py-3" target="_blank">Custom Order</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
    
	
    
    

@endsection


