@extends('layouts.app')

@section('title', 'Our Services: Best Offshore Software, Application, Digital & IT Solutions')

@section('meta_description', 'Best it service providers for enterprises, mid-level companies, and startups: Custom software development, Website Development, cybersecurity and more.')

@push('meta_tags')
<link rel="canonical" href="{{route('service')}}" />
<meta name="google-site-verification" content="acwUugMnJnDo2MlMGz5wzzT2gWOTR4P68xbiEd5VzfI"/>
<meta name="yandex-verification" content="598e72dfa3eeba81"/>
<meta name="msvalidate.01" content="93D27DC816FE2DFFE3C578BB39C17386"/>

<meta property="og:title" content="Our Services: Best Offshore Software, Application, Digital & IT Solutions"/>
<meta property="og:description" content="Best it service providers for enterprises, mid-level companies, and startups: Custom software development, Website Development, cybersecurity and more."/>
<meta property="og:url" content="service.html"/>
<meta property="og:site_name" content="index.html"/>
<meta property="og:image" content=""/>
<meta property="og:image:width" content="760"/>
<meta property="og:image:height" content="420"/>
@endpush

@section('content')

<style>
  /* Modern service card icon */
  .service-icon{width:86px;height:86px;border-radius:50%;display:inline-flex;align-items:center;justify-content:center;background:linear-gradient(135deg,#fff 0%,#f3f4f6 100%);box-shadow:0 6px 18px rgba(16,24,40,0.06);}
  .service-icon svg{width:46px;height:46px;fill: none;stroke:#c0262e;stroke-width:1.6;}
  .service-card .card-body{min-height:150px}
  .service-card .card-title{color:#0f172a}
  .service-card:hover{transform:translateY(-6px);transition:transform .24s ease}
  .service-contact .contact-form .form-control{border-radius:8px}
</style>
		<!-- Banner Start-->
		<div class="main-container py_100 bg_service position-relative">
			<div class="container">
				<div class="justify-content-center position-relative row text-white" style="z-index: 1;">
					<div class="col-md-9 text-center">
                      <h1 class="fw-bold mb-2 page-title text-center">Our Services</h1>
                      <h2 class="fs-3 fw-bold mb-4 text-center">Best Offshore Software, Application, Digital & IT Solutions</h2>
                      <p class="fs-17">At techparkit, we prioritize innovation, reliability, and client satisfaction. Let's accelerate together to your goal with our best software & IT service today.</p>
                    </div>
				</div>
			</div>
		</div>

	</div>
	
	<!-- Platform Start-->
	<div class="py_100">
		<div class="container-md">
			<div class="row justify-content-center">
    			<div class="col-lg-8">
                <div class="text-center mb-5">
                  <h2 class="fs-45 fw-bold mb-4 wow fadeInUp">Transform Your Vision Into Reality <span class="text-techparkit animate-text">Design Any Customized</span> Software</h2>
                  <p class="wow fadeInUp sub_text mx-5" data-wow-delay="0.2s">techparkit, Inc. focuses on the exact requirements of the clients. We design and develop the best and most advanced software for all types of businesses.</p>
                </div>
          </div>
			</div>
			<div class="row g-3 mb-5">
          <div class="col-12">
            <h2 class="fw-bold text-style">Software Solution</h2>
          </div>
          <div class="col-xl-4 col-md-6">
            <a href="custom-order.html" target="_blank" class="border-0 card px-5 py-5 wow fadeIn bg_grad bgChangeOnHover h-100 product_link text-center service-card" data-wow-delay="0.4s">
              <div class="d-block mb-4 position-relative">
                <div class="service-icon" aria-hidden="true">
                  <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path d="M3 7h18M3 12h18M3 17h18" stroke-linecap="round" stroke-linejoin="round"/>
                  </svg>
                </div>
              </div>
              <div class="card-body p-0 position-relative">
                <h5 class="card-title mb-3 fw_600">Offshore Software Development</h5>
                <p class="card-text">We provide end-to-end offshore software development: design, build, QA, and maintenance to scale your product affordably.</p>
              </div>
            </a>
          </div>
          <div class="col-xl-4 col-md-6">
            <a href="custom-software-development-service.html" target="_blank" class="border-0 card px-5 py-5 wow fadeIn bg_grad bgChangeOnHover h-100 product_link text-center service-card" data-wow-delay="0.4s">
              <div class="d-block mb-4 position-relative">
                <div class="service-icon" aria-hidden="true">
                  <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path d="M4 7h16v10H4zM8 12h8" stroke-linecap="round" stroke-linejoin="round"/>
                  </svg>
                </div>
              </div>
              <div class="card-body p-0 position-relative">
                <h5 class="card-title mb-3 fw_600">Custom Software Development</h5>
                <p class="card-text">We build tailored software to automate operations, integrate workflows, and improve business outcomes with scalable architectures.</p>
              </div>
            </a>
          </div>
          <div class="col-xl-4 col-md-6">
            <a href="website-development-service.html" target="_blank" class="border-0 card px-5 py-5 wow fadeIn bg_grad2 bgChangeOnHover h-100 product_link text-center service-card" data-wow-delay="0.6s">
              <div class="d-block mb-4 position-relative">
                <div class="service-icon" aria-hidden="true">
                  <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path d="M3 5h18v14H3zM7 9h10" stroke-linecap="round" stroke-linejoin="round"/>
                  </svg>
                </div>
              </div>
              <div class="card-body p-0 position-relative">
                <h5 class="card-title mb-3 fw_600">Website Development</h5>
                <p class="card-text">We design performant, SEO-friendly websites that represent your brand and convert visitors into customers.</p>
              </div>
            </a>
          </div>
          <div class="col-xl-4 col-md-6">
            <a href="#" class="border-0 card px-5 py-5 wow fadeIn bg_grad bgChangeOnHover h-100 product_link text-center service-card" data-wow-delay="0.8s">
              <div class="d-block mb-4 position-relative">
                <div class="service-icon" aria-hidden="true">
                  <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <rect x="6" y="3" width="12" height="18" rx="2" ry="2"/>
                    <path d="M9 7h6M9 12h6" stroke-linecap="round" stroke-linejoin="round"/>
                  </svg>
                </div>
              </div>
              <div class="card-body p-0 position-relative">
                <h5 class="card-title mb-3 fw_600">Mobile App Development</h5>
                <p class="card-text">Native and cross-platform mobile apps with modern UX, offline support, and app-store deployment support.</p>
              </div>
            </a>
          </div>
          <div class="col-xl-4 col-md-6">
            <a href="#" class="border-0 card px-5 py-5 wow fadeIn bg_grad2 bgChangeOnHover h-100 product_link text-center service-card" data-wow-delay="1s">
              <div class="d-block mb-4 position-relative">
                <div class="service-icon" aria-hidden="true">
                  <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path d="M3 6h18M7 6v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V6" stroke-linecap="round" stroke-linejoin="round"/>
                  </svg>
                </div>
              </div>
              <div class="card-body p-0 position-relative">
                <h5 class="card-title mb-3 fw_600">E-Commerce</h5>
                <p class="card-text">End-to-end eCommerce platforms with fast storefronts, secure checkout, and integrated inventory & fulfillment workflows.</p>
              </div>
            </a>
          </div>
          <div class="col-xl-4 col-md-6">
            <a href="cyber-security-service.html" target="_blank" class="border-0 card px-5 py-5 wow fadeIn bg_grad bgChangeOnHover h-100 product_link text-center" data-wow-delay="1.2s">
              <div class="d-block mb-4 position-relative">
                <img src="asset/img/service/Software-Solution/cyber-security.html" class="" alt="Cyber Security"/>
              </div>
              <div class="card-body p-0 position-relative">
                <h5 class="card-title mb-3 fw_600">Cyber Security</h5>
                <p class="card-text">Secure your website with our techparkit cyber security service. You can trust us to give expert guidance and deliver guaranteed results.</p>
              </div>
            </a>
          </div>
          <div class="col-xl-4 col-md-6">
            <a href="construction-cost-estimating-software.html" target="_blank" class="border-0 card px-5 py-5 wow fadeIn bg_grad2 bgChangeOnHover h-100 product_link text-center" data-wow-delay="1s">
              <div class="d-block mb-4 position-relative">
                <img src="asset/img/service/Software-Solution/nirmako.png" class="" alt="Construction Cost Estimating Software"/>
              </div>
              <div class="card-body p-0 position-relative">
                <h5 class="card-title mb-3 fw_600">Construction Cost Estimating Software</h5>
                <p class="card-text">Assign projects to different persons, calculate ongoing project costs, and save cost overflow.</p>
              </div>
            </a>
          </div>
          <div class="col-xl-4 col-md-6">
            <a href="#" class="border-0 card px-5 py-5 wow fadeIn bg_grad bgChangeOnHover h-100 product_link text-center" data-wow-delay="1s">
              <div class="d-block mb-4 position-relative">
                <img src="asset/img/service/Software-Solution/it-support.html" class="" alt="IT Support"/>
              </div>
              <div class="card-body p-0 position-relative">
                <h5 class="card-title mb-3 fw_600">IT Support</h5>
                <p class="card-text">Get the right talent for the right place. We offer the best solutions and highly skilled personnel to strengthen your team.</p>
              </div>
            </a>
          </div>
           <div class="col-xl-4 col-md-6">
            <div class="border-0 card px-5 py-5 wow fadeIn bg_grad2 h-100 product_link d-flex align-items-center justify-content-center" data-wow-delay="1.2s">
              <a href="custom-order.html" target="_blank" class="btn btn-success px-4 py-3">Get a Quote</a>
            </div>
          </div>
        </div>

        <div class="row g-3">
          <div class="col-12">
            <h2 class="fw-bold text-style">Digital Solution</h2>
          </div>
          <div class="col-xl-4 col-md-6">
            <a href="digital-marketing-agency-in-dubai.html" target="_blank" class="border-0 card px-5 py-5 wow fadeIn bg_grad bgChangeOnHover h-100 product_link text-center service-card" data-wow-delay="0.4s">
              <div class="d-block mb-4 position-relative">
                <div class="service-icon" aria-hidden="true">
                  <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M3 12h18M12 3v18" stroke-linecap="round" stroke-linejoin="round"/></svg>
                </div>
              </div>
              <div class="card-body p-0 position-relative">
                <h5 class="card-title mb-3 fw_600">Digital Marketing Service</h5>
                <p class="card-text">Maximize visibility and growth with targeted campaigns, analytics, and conversion-focused strategies.</p>
              </div>
            </a>
          </div>
          <div class="col-xl-4 col-md-6">
            <a href="video-production-service.html" target="_blank" class="border-0 card px-5 py-5 wow fadeIn bg_grad bgChangeOnHover h-100 product_link text-center service-card" data-wow-delay="0.4s">
              <div class="d-block mb-4 position-relative">
                <div class="service-icon" aria-hidden="true">
                  <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M4 7h16v10H4zM10 11l6 2-6 2z" stroke-linecap="round" stroke-linejoin="round"/></svg>
                </div>
              </div>
              <div class="card-body p-0 position-relative">
                <h5 class="card-title mb-3 fw_600">Video Production Service</h5>
                <p class="card-text">High-quality video content to tell your brand story and increase engagement across platforms.</p>
              </div>
            </a>
          </div>
          <div class="col-xl-4 col-md-6">
            <a href="clipping-path-service-provider.html" target="_blank" class="border-0 card px-5 py-5 wow fadeIn bg_grad2 bgChangeOnHover h-100 product_link text-center" data-wow-delay="0.6s">
              <div class="d-block mb-4 position-relative">
                <div class="service-icon" aria-hidden="true">
                  <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M4 4h16v16H4zM8 8h8" stroke-linecap="round" stroke-linejoin="round"/></svg>
                </div>
              </div>
              <div class="card-body p-0 position-relative">
                <h5 class="card-title mb-3 fw_600">Clipping Path service</h5>
                <p class="card-text">Leave your project to a reliable multiple-clipping service provider like us. We guarantee to provide the best, most efficient, and fastest service.</p>
              </div>
            </a>
          </div>
          <div class="col-xl-4 col-md-6">
            <a href="graphic-design-services.html" target="_blank" class="border-0 card px-5 py-5 wow fadeIn bg_grad bgChangeOnHover h-100 product_link text-center" data-wow-delay="0.8s">
              <div class="d-block mb-4 position-relative">
                <div class="service-icon" aria-hidden="true">
                  <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><circle cx="12" cy="8" r="3"/><path d="M5 20c.5-3 6-6 7-6s6.5 3 7 6" stroke-linecap="round" stroke-linejoin="round"/></svg>
                </div>
              </div>
              <div class="card-body p-0 position-relative">
                <h5 class="card-title mb-3 fw_600">Graphics Design</h5>
                <p class="card-text">Get the perfect design and ensure your branding hits the spot with our graphics design service. Remember!! The right colour combination, shapes and words will define your business.</p>
              </div>
            </a>
          </div>
          <div class="col-xl-4 col-md-6">
            <a href="#" class="border-0 card px-5 py-5 wow fadeIn bg_grad2 bgChangeOnHover h-100 product_link text-center" data-wow-delay="1.2s">
              <div class="d-block mb-4 position-relative">
                <img src="asset/img/service/Digital-Solution/blogging-platform.webp" class="" alt="Blogging Platform"/>
              </div>
              <div class="card-body p-0 position-relative">
                <h5 class="card-title mb-3 fw_600">Blogging Platform</h5>
                <p class="card-text">We can develop an SEO-friendly content management system to publish blogs, articles, online news, and so on.</p>
              </div>
            </a>
          </div>
          <div class="col-xl-4 col-md-6">
            <div class="border-0 card px-5 py-5 wow fadeIn bg_grad h-100 product_link d-flex align-items-center justify-content-center" data-wow-delay="1.2s">
              <a href="custom-order.html" target="_blank" class="btn btn-success px-4 py-3">Get a Quote</a>
            </div>
          </div>
        </div>
		</div>
	</div>
	
	<!-- Service Start-->
	<div class="service bg_grad py_100 position-relative">
		<div class="container-md">
			<div class="row justify-content-center">
				<div class="col-xl-6 col-lg-8 col-md-10">
					<div class="text-center mb-5">
						<h2 class="fs-1 fw-bold wow fadeInUp mb-4">Industry <span class="animate-text">We Serve</span></h2>
						<p class="wow fadeInUp" data-wow-delay="0.2s">Bridge Your Business with the Virtual World</p>
					</div>
				</div>
			</div>
			<div class="row g-3">
				<div class="col-xl-2 col-md-4 col-sm-6">
					<div class="bg-white d-block py-4 text-center wow fadeIn product_link bgChangeOnHover">
            <div class="service-icon mx-auto" aria-hidden="true"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><circle cx="12" cy="12" r="8"/></svg></div>
              <div class="mt-3 fs-17 position-relative">FinTech</div>
					</div>
				</div>
				<div class="col-xl-2 col-md-4 col-sm-6">
					<div class="bg-white d-block py-4 text-center wow fadeIn product_link bgChangeOnHover" data-wow-delay="0.3s">
                        <div class="service-icon mx-auto" aria-hidden="true"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12 7v10M7 12h10" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
						<div class="mt-3 fs-17 position-relative">Healthcare</div>
					</div>
				</div>
				<div class="col-xl-2 col-md-4 col-sm-6">
					<div class="bg-white d-block py-4 text-center wow fadeIn product_link bgChangeOnHover" data-wow-delay="0.4s">
                        <div class="service-icon mx-auto" aria-hidden="true"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M3 6h18M7 6v12" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
						<div class="mt-3 fs-17 position-relative">E-Commerce</div>
					</div>
				</div>
				<div class="col-xl-2 col-md-4 col-sm-6">
					<div class="bg-white d-block py-4 text-center wow fadeIn product_link bgChangeOnHover" data-wow-delay="0.5s">
                        <div class="service-icon mx-auto" aria-hidden="true"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M3 12h18M6 8v8" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
						<div class="mt-3 fs-17 position-relative">Automotive</div>
					</div>
				</div>
				<div class="col-xl-2 col-md-4 col-sm-6">
					<div class="bg-white d-block py-4 text-center wow fadeIn product_link bgChangeOnHover" data-wow-delay="0.6s">
                        <div class="service-icon mx-auto" aria-hidden="true"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12 3l9 4-9 4-9-4 9-4zM3 11v6a2 2 0 0 0 2 2h14" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
						<div class="mt-3 fs-17 position-relative">Education</div>
					</div>
				</div>
				<div class="col-xl-2 col-md-4 col-sm-6">
					<div class="bg-white d-block py-4 text-center wow fadeIn product_link bgChangeOnHover" data-wow-delay="0.7s">
                        <div class="service-icon mx-auto" aria-hidden="true"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M3 11l9-7 9 7v8a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1v-8z" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
						<div class="mt-3 fs-17 position-relative">Real-Estate</div>
					</div>
				</div>
				<div class="col-xl-2 col-md-4 col-sm-6">
					<div class="bg-white d-block py-4 text-center wow fadeIn product_link bgChangeOnHover" data-wow-delay="0.8s">
                        <div class="service-icon mx-auto" aria-hidden="true"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12 2l3 7h6l-5 4 2 7-6-4-6 4 2-7-5-4h6z" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
						<div class="mt-3 fs-17 position-relative">Hospitality</div>
					</div>
				</div>
				<div class="col-xl-2 col-md-4 col-sm-6">
					<div class="bg-white d-block py-4 text-center wow fadeIn product_link bgChangeOnHover" data-wow-delay="0.9s">
                        <div class="service-icon mx-auto" aria-hidden="true"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><rect x="4" y="4" width="16" height="16" rx="2"/></svg></div>
						<div class="mt-3 fs-17 position-relative">RMG</div>
					</div>
				</div>
				<div class="col-xl-2 col-md-4 col-sm-6">
					<div class="bg-white d-block py-4 text-center wow fadeIn product_link bgChangeOnHover" data-wow-delay="1s">
                        <div class="service-icon mx-auto" aria-hidden="true"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12 7v10M7 12h10" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
						<div class="mt-3 fs-17 position-relative">Pharmacy</div>
					</div>
				</div>
				<div class="col-xl-2 col-md-4 col-sm-6">
					<div class="bg-white d-block py-4 text-center wow fadeIn product_link bgChangeOnHover" data-wow-delay="1.1s">
                        <div class="service-icon mx-auto" aria-hidden="true"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M2 12h20M12 2v20" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
						<div class="mt-3 fs-17 position-relative">Aviation</div>
					</div>
				</div>
				<div class="col-xl-2 col-md-4 col-sm-6">
					<div class="bg-white d-block py-4 text-center wow fadeIn product_link bgChangeOnHover" data-wow-delay="1.2s">
                        <div class="service-icon mx-auto" aria-hidden="true"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M3 3h18v6H3zM3 15h18v6H3z" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
						<div class="mt-3 fs-17 position-relative">UI/Ux</div>
					</div>
				</div>
				<div class="col-xl-2 col-md-4 col-sm-6">
					<div class="bg-white d-block py-4 text-center wow fadeIn product_link bgChangeOnHover" data-wow-delay="1.3s">
                        <div class="service-icon mx-auto" aria-hidden="true"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><circle cx="6" cy="12" r="1.5"/><circle cx="12" cy="12" r="1.5"/><circle cx="18" cy="12" r="1.5"/></svg></div>
						<div class="mt-3 fs-17 position-relative">Many More</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<!-- faq  -->
    <section class="py_100">
      <div class="container-md">
        <h2 class="fs-1 text-center fw-bold mb-4 wow fadeInUp">FAQ</h2>
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="accordion accordion-flush service-faq" id="accordionFlushExample">
              <div class="accordion-item mb-3">
                <h2 class="accordion-header" id="flush-headingOne">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">How does software customization impact the quality of IT services?</button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body ps-5"><p>Customised software solutions can significantly improve the effectiveness and efficiency of your business and ensure maximum ROI.</p></div>
                </div>
              </div>
              <div class="accordion-item mb-3">
                <h2 class="accordion-header" id="flush-headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">Why Is Digital Marketing Service Important?</button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                    <p>Digital marketing is important because it allows businesses to reach and engage with their target audience effectively online. With the increasing use of the internet and social media, digital marketing provides opportunities to</p>
                    <ul>
                      <li>Build brand awareness</li>
                      <li>Drive traffic</li>
                      <li>Generate leads</li>
                      <li>Ultimately increase sales and revenue.</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="accordion-item mb-3">
                <h2 class="accordion-header" id="flush-headingThree">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">Which Company Is Best For IT Support?</button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                    <p>Determining the "best" IT support company depends on various factors such as your specific requirements, budget, location, and the scope of services required.</p>
                    <p>However, techparkit is the best IT service company in the world. They offer many IT services including</p>
                    <ul>
                      <li>Custom Software Development</li>
                      <li>Website Development</li>
                      <li>Mobile App Development</li>
                      <li>E-Commerce</li>
                      <li>Cyber Security</li>
                      <li>Digital Marketing Service</li>
                      <li>Video Production Service</li>
                      <li>Graphics Design</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="accordion-item mb-3">
                <h2 class="accordion-header" id="flush-headingFour">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">What Is techparkit Every Project's Average Cost?</button>
                </h2>
                <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                    <p>It's best to contact techparkit directly for a personalized quote based on your specific project needs.</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item mb-3">
                <h2 class="accordion-header" id="flush-headingFive">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">What are the key factors to consider when selecting the best IT service provider?</button>
                </h2>
                <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                    <p>Factors such as expertise, reputation, customer support, scalability, and pricing are crucial when choosing the best IT service provider.</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item mb-3">
                <h2 class="accordion-header" id="flush-headingSix">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">Can You Support Fully Remote Team?</button>
                </h2>
                <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                    <p>Yes. We support and use remote tools to accommodate our clients wherever they are.</p>
                    <button type="button" class="btn btn-success px-4 py-3">Learn more</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
	
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
                        <h3>+88-01817-584639</h3>
                        <!--Social Icon Four-->
                        <ul class="d-flex list-unstyled mt-4">
							<li><a class="align-items-center d-flex justify-content-center me-2 text-decoration-none text-white social_icon" href="https://www.facebook.com/techparkitteam/" title="Facebook" target="_blank"><i class="ti-facebook"></i></a></li>
							<li><a class="align-items-center d-flex justify-content-center me-2 text-decoration-none text-white social_icon" href="https://www.pinterest.com/techparkit/" title="Pinterest" target="_blank"><i class="ti-pinterest"></i></a></li>
							<li><a class="align-items-center d-flex justify-content-center me-2 text-decoration-none text-white social_icon" href="https://www.linkedin.com/company/techparkit/" title="Linkedin" target="_blank"><i class="ti-linkedin"></i></a></li>
							<li><a class="align-items-center d-flex justify-content-center me-2 text-decoration-none text-white social_icon" href="https://twitter.com/techparkit" title="Twitter" target="_blank"><i class="ti-twitter"></i></a></li>
						</ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

	<!-- Client Logo Start-->
	<div class="py_100">
		<div class="container-md">
			<div class="row mb_100 justify-content-center">
				<div class="col-xl-6 col-lg-8 col-md-10">
					<div class="text-center mb-4">
						<h4 class="fs-17">techparkit, Inc.</h4>
						<h2 class="fs-1 fw-bold mb-3">Our <span class="text-techparkit animate-text">Global Clients</span></h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<img src="asset/img/map-techparkit-2.html" class="img-fluid" alt="techparkit Map">
				</div>
			</div>

			<div class="align-items-center justify-content-center row text-center clients_logo">
				<div class="align-items-center col-xl-2 col-sm-4 col-6 d-flex logo_box justify-content-center">
					<div class="d-block">
						<img src="asset/img/client-logo/web-logo-ILO.html" class="client_logo transition" alt="Web Logo ILO">
					</div>
				</div>
				<div class="align-items-center col-xl-2 col-sm-4 col-6 d-flex logo_box justify-content-center">
					<div class="d-block">
						<img src="asset/img/client-logo/ict.html" class="client_logo transition" alt="ICT">
					</div>
				</div>
				<div class="align-items-center col-xl-2 col-sm-4 col-6 d-flex logo_box justify-content-center">
					<div class="d-block">
						<img src="asset/img/client-logo/hameemgroup-logo.html" class="client_logo transition" alt="hameemgroup">
					</div>
				</div>
				<div class="align-items-center col-xl-2 col-sm-4 col-6 d-flex logo_box justify-content-center">
					<div class="d-block">
						<img src="asset/img/client-logo/APSCL-2.html" class="client_logo transition" alt="APSCL">
					</div>
				</div>
				<div class="align-items-center col-xl-2 col-sm-4 col-6 d-flex logo_box justify-content-center">
					<div class="d-block">
						<img src="asset/img/client-logo/ahossain.html" class="client_logo transition" alt="ahossain">
					</div>
				</div>
				<div class="align-items-center col-xl-2 col-sm-4 col-6 d-flex logo_box justify-content-center">
					<div class="d-block">
						<img src="asset/img/client-logo/wasa.html" class="client_logo transition" alt="Dhaka Wasa">
					</div>
				</div>
				<div class="align-items-center col-xl-2 col-sm-4 col-6 d-flex logo_box justify-content-center">
					<div class="d-block">
						<img src="asset/img/client-logo/siglo-xxi.png" class="client_logo transition" alt="Siglo XXI">
					</div>
				</div>
				<div class="align-items-center col-xl-2 col-sm-4 col-6 d-flex logo_box justify-content-center">
					<div class="d-block">
						<img src="asset/img/client-logo/citzim-2.html" class="client_logo transition" alt="citzim">
					</div>
				</div>
				<div class="align-items-center col-xl-2 col-sm-4 col-6 d-flex logo_box justify-content-center">
					<div class="d-block">
						<img src="asset/img/client-logo/milk-vita2.html" class="client_logo transition" alt="Milk Vita">
					</div>
				</div>
				<div class="align-items-center col-xl-2 col-sm-4 col-6 d-flex logo_box justify-content-center">
					<div class="d-block">
						<img src="asset/img/client-logo/sa-agro.html" class="client_logo transition" alt="sa agro">
					</div>
				</div>
				<div class="align-items-center col-xl-2 col-sm-4 col-6 d-flex logo_box justify-content-center">
					<div class="d-block">
						<img src="asset/img/client-logo/gdm.html" class="client_logo transition" alt="GDM">
					</div>
				</div>
				<div class="align-items-center col-xl-2 col-sm-4 col-6 d-flex logo_box justify-content-center">
					<div class="d-block">
						<a href="client-list.html" class="btn btn-dark px-5 py-3">More</a>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-xl-10 offset-xl-1">
					<div class="align-items-center bg-dark d-xl-flex justify-content-between py-5 rounded-5 join_box mt-5">
						<div class="d-block mw_560">
							<h3 class="fs-3 fw-bold mb-2 text-white">Be with Us to Wheel Up Your Revenue</h3>
							<p class="text-white mb-0">We are always ready to serve you. Please share your ideas and values with us.</p>
						</div>
						<div class="d-block mt-4 mt-xl-0">
							<a href="{{route('contact')}}" class="btn btn-success px-5 py-3">Contact Us</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
    
	
    
    

@endsection


