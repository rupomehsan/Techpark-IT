@extends('layouts.app')

@section('title', 'techparkit | Best Software Development Company')

@section('meta_description', 'techparkit, Inc. is the best software development company that provides all types of business solutions globally with modern technology and next-level professionals.')

@push('meta_tags')
  <link rel="canonical" href="index.html" />
  <meta name="google-site-verification" content="acwUugMnJnDo2MlMGz5wzzT2gWOTR4P68xbiEd5VzfI" />
  <meta name="yandex-verification" content="598e72dfa3eeba81" />
  <meta name="msvalidate.01" content="93D27DC816FE2DFFE3C578BB39C17386" />
  <meta name="yandex-verification" content="ccfc62f7aafcb633" />
  <meta name="p:domain_verify" content="ca21c926ce0b41c3a0276e35b512c7ce" />

  <meta property="og:title" content="techparkit | Best Software Development Company" />
  <meta property="og:description" content="techparkit, Inc. is the best software development company that provides all types of business solutions globally with modern technology and next-level professionals." />
  <meta property="og:url" content="index.html" />
  <meta property="og:site_name" content="index.html" />
  <meta property="og:image" content="asset/img/techparkit-software-development-company.jpg" />
  <meta property="og:image:width" content="760" />
  <meta property="og:image:height" content="420" />
@endpush

@section('content')
  <div class="banner_wrapper position-relative">
    <div class="header_area bg-white end-0 navbar_fixed position-fixed start-0 top-0">
      <div class="container-lg">
        <!-- Start Navigation -->
      </div>
    </div>

    <div class="bg-white bottom-0 flex-shrink-0 px-4 position-fixed top-0 sideNav">
      <div class="d-flex justify-content-end w-100">
        <button class="btn close_icon fs-5 mb-3 px-0">✕</button>
      </div>
      <ul class="list-unstyled ps-0 mobileNav">
        <li>
          <button class="btn btn-toggle align-items-center" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="true">
            All products <i class="ti-angle-up transition"></i>
          </button>
          <div class="collapse show" id="home-collapse">
            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small ms-3">
              <li>
                <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#mbusiness-collapse" aria-expanded="true">
                  Business Solution <i class="ti-angle-up transition"></i>
                </button>
                <div class="collapse" id="mbusiness-collapse">
                  <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 ms-3">
                    <li><a href="https://www.bdtask.com/sales-erp-software.php" target="_blank">ERP</a></li>
                    <li><a href="https://www.bdtask.com/hrms-software.php" target="_blank">HR Manager</a></li>
                    <li><a href="https://multistorelease.bdtask.com/multistore_demo/login" target="_blank">M-Store</a></li>
                    <li><a href="https://www.bdtask.com/inventory-management-system.php" target="_blank">Wholesale</a></li>
                    <li><a href="https://www.bdtask.com/business-live-chat-software.php" target="_blank">Chatbot</a></li>
                  </ul>
                </div>
              </li>
              <li>
                <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#mecommerce-collapse" aria-expanded="true">
                  Ecommerce <i class="ti-angle-up transition"></i>
                </button>
                <div class="collapse" id="mecommerce-collapse">
                  <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 ms-3">
                    <li><a href="https://www.bdtask.com/multi-store-ecommerce-shopping-cart-software/" target="_blank">Isshue</a></li>
                    <li><a href="https://www.bdtask.com/multivendor-marketplace-platform.php" target="_blank">Storefex</a></li>
                  </ul>
                </div>
              </li>
              <li>
                <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#mhotel-collapse" aria-expanded="true">
                  Hotel &amp; Restaurant <i class="ti-angle-up transition"></i>
                </button>
                <div class="collapse" id="mhotel-collapse">
                  <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 ms-3">
                    <li><a href="https://www.bdtask.com/restaurant-management-system.php" target="_blank">Bhojon</a></li>
                    <li><a href="https://www.bdtask.com/cloud-kitchen.php" target="_blank">Cloud Kitchen</a></li>
                    <li><a href="https://www.bdtask.com/hotel-management-system.php" target="_blank">Xain Hotel</a></li>
                  </ul>
                </div>
              </li>
              <li>
                <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#monline-reservation-collapse" aria-expanded="true">
                  Online Reservation <i class="ti-angle-up transition"></i>
                </button>
                <div class="collapse" id="monline-reservation-collapse">
                  <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 ms-3">
                    <li><a href="https://www.bdtask.com/vehicle-management-system.php" target="_blank">VMS</a></li>
                    <li><a href="https://www.bdtask.com/garage-management-software.php" target="_blank">GMS</a></li>
                    <li><a href="https://www.bdtask.com/flight-booking-software.php" target="_blank">Flight Booking</a></li>
                    <li><a href="https://www.bdtask.com/bus-reservation-system.php" target="_blank">Bus365 Apps</a></li>
                  </ul>
                </div>
              </li>
              <li>
                <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#meducation-collapse" aria-expanded="true">
                  Education <i class="ti-angle-up transition"></i>
                </button>
                <div class="collapse" id="meducation-collapse">
                  <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 ms-3">
                    <li><a href="https://www.bdtask.com/learning-management-system.php" target="_blank">Edutask</a></li>
                    <li><a href="https://quiz.bdtask.com/demo/home" target="_blank">Quizguru</a></li>
                  </ul>
                </div>
              </li>
              <li>
                <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#mhealth-collapse" aria-expanded="true">
                  Health <i class="ti-angle-up transition"></i>
                </button>
                <div class="collapse" id="mhealth-collapse">
                  <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 ms-3">
                    <li><a href="https://www.bdtask.com/hospital-management-software.php" target="_blank">Hospital Automanager</a></li>
                    <li><a href="https://www.bdtask.com/hospital-management-system.php" target="_blank">Hospital</a></li>
                    <li><a href="https://multihospitalnew.bdtask.com/" target="_blank">Multi Hospital</a></li>
                    <li><a href="https://www.bdtask.com/pharmacy-management-system.php" target="_blank">Pharmacare</a></li>
                    <li><a href="https://doctorssnew.bdtask.com/login" target="_blank">Doctorss</a></li>
                    <li><a href="https://gprescription.bdtask.com/" target="_blank">G-Prescription</a></li>
                    <li><a href="" target="_blank">Clinic365</a></li>
                  </ul>
                </div>
              </li>
              <li>
                <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#news-collapse" aria-expanded="true">
                  News Portal <i class="ti-angle-up transition"></i>
                </button>
                <div class="collapse" id="news-collapse">
                  <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 ms-3">
                    <li><a href="https://www.bdtask.com/newspaper-script/index.php" target="_blank">News365</a></li>
                    <li><a href="" target="_blank">Osru</a></li>
                  </ul>
                </div>
              </li>
              <li>
                <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#mtheme-collapse" aria-expanded="true">
                  Theme <i class="ti-angle-up transition"></i>
                </button>
                <div class="collapse" id="mtheme-collapse">
                  <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 ms-3">
                    <li><a href="https://www.bdtask.com/travel-wordpress-theme/index.php" target="_blank">Travelz</a></li>
                    <li><a href="https://www.bdtask.com/newspaper-theme/index.php" target="_blank">News365</a></li>
                    <li><a href="https://wordpressall.thememinister.com/wptheme/resuma_demo/ResumePreview/preview.html" target="_blank">Resuma</a></li>
                  </ul>
                </div>
              </li>
              <li>
                <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#custom-collapse" aria-expanded="true">
                  Custom Service <i class="ti-angle-up transition"></i>
                </button>
                <div class="collapse" id="custom-collapse">
                  <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 ms-3">
                    <li><a href="https://www.bdtask.com/banking-solutions.php" target="_blank">Banking</a></li>
                    <li><a href="https://www.bdtask.com/curtain-management-software.php" target="_blank">Curtain</a></li>
                    <li><a href="https://www.bdtask.com/agro-erp-software.php" target="_blank">Agro ERP</a></li>
                    <li><a href="https://www.bdtask.com/jewelry-store-management-software.php" target="_blank">Jewelry</a></li>
                    <li><a href="https://www.bdtask.com/field-force-management-software.php" target="_blank">Field Force</a></li>
                  </ul>
                </div>
              </li>
            </ul>
          </div>
        </li>
        <li>
          <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
            Mobile Apps <i class="ti-angle-up transition"></i>
          </button>
          <div class="collapse" id="dashboard-collapse">
            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small ms-3">
              <li><a target="_blank" href="https://www.bdtask.com/isshue-ecommerce-android-app.php">Ecommerce Android Apps</a></li>
              <li><a target="_blank" href="https://www.bdtask.com/restaurant-management-apps.php">Bhojon Android Apps</a></li>
              <li><a target="_blank" href="https://www.bdtask.com/newspaper-app.php">Newspaper Apps</a></li>
              <li><a target="_blank" href="https://www.bdtask.com/sales-erp-app.php">Mpos - Sales ERP Apps</a></li>
            </ul>
          </div>
        </li>
        <li><a href="https://www.bdtask.com/service.php" target="_blank">Services</a></li>
        <li><a href="https://www.bdtask.com/blog/" target="_blank">Blog</a></li>
        <li><a href="https://www.bdtask.com/blog/" target="_blank">Contact Us</a></li>
      </ul>
    </div>

    <div class="main-container py_100 bg_grad2">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8 text-center">
            <h1 class="page-title fw-bold text-center text-capitalize">Terms &amp; Conditions</h1>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="service py_100 position-relative">
    <div class="container-md">
      <div class="row justify-content-center">
        <div class="col-lg-10">
          <div class="d-block mb-5">
            <h4 class="mb-4">OUR COMMITMENT</h4>
            <p>Bdtask, Inc. establishes itself as a recognized software development company worldwide. We provide various readymade software solutions and customized services. Our readymade software assists entrepreneurs to start their businesses with dynamic and automatic coverage. Our software and services will be suitable for small, medium, and large size businesses. We are committed to provide the best service to our clients as well as ensure to build customized solutions according to our customer’s demands.</p>
          </div>

          <div class="d-block mb-5">
            <h4 class="mb-4">Agreement to Use Our Product &amp; Services</h4>
            <p>Bdtask, Inc. has some specific terms and conditions to access our website and use our products and services. You have to read and agree with all of the terms and conditions before accessing our website. We provide these terms and conditions that will govern your use of our website.</p>
            <p>PLEASE READ OUR TERMS AND CONDITIONS THOROUGHLY BEFORE PURCHASING OUR PRODUCTS AND ACCESSING OUR SERVICES.</p>
          </div>

          <div class="d-block mb-5">
            <h4 class="mb-4">Our Intellectual Property Rights</h4>
            <p>Bdtask, Inc. reserves all rights to all products and services which you will get on this website. You have no right to use our products and services for your personal and non-commercial use. We do not modify, distribute, copy, reproduce, transmit, display, perform, publish, license, transfer, or resell any products or services. Bdtask, Inc. is strictly prohibited to copy our script and code for any reselling purposes.</p>
          </div>

          <div class="d-block mb-5">
            <h4 class="mb-4">Products</h4>
            <p>This website contains our intellectual properties such as various software products and customized services which you can not copy any script and code, modify, reproduce, publish, license, or resell. We do not allow the users to download or install any software that includes a license agreement and you have to agree with all of these terms of use.</p>
            <p>You have to legally purchase our products from the Envato Marketplace as well as you can contact us through this website if you have any customized product requirements. If you do not agree with such license agreements, you can not download or install our products without purchasing from codecanyon.net.</p>
          </div>

          <div class="d-block mb-5">
            <h4 class="mb-4">Blogs</h4>
            <p>This website has a blog section that contains various articles and useful content. Bdtask, Inc informs and clarifies that not only Bdtask’s employees can contribute to this website but also anyone may contribute articles and opinions on this website. You have no right to copy our content and you can not post any inappropriate, defamatory, infringing, politically slanted, indecent, obscene, racist, terrorist, or unlawful topic, name, material, or information.</p>
            <p>We do not allow to upload of any files which contain viruses, trojan horses, worms, time bombs, cancelbots, corrupted files, or any other similar software or programs. As well as, it is strictly prohibited to advertise or offer or promote our goods for buying and selling purposes. We strongly discourage the use of others’ intellectual properties like images, photographs, software, and other materials which reserve all copyright and infringement rights.</p>
          </div>

          <div class="d-block mb-5">
            <h4 class="mb-4">Content, Copyrights &amp; Trademarks</h4>
            <p>We reserve all rights to all texts, materials, data files, graphics, images, user interfaces, visual interfaces, descriptions of our services and products, photographs, trademarks, logos, scripts, codes, and so on. This website is owned, controlled, and licensed by Bdtask, Inc, and all copyright and trademark are protected by applicable intellectual property and other laws.</p>
            <p>You acknowledge that you are solely responsible to reuse any content of our website and we strongly discourage you to modify, rent, lease, loan, sell, distribute, transmit, broadcast, and copy our any contents, products, or services, in whole, or in any part. If you want to contribute to our site, you need to read or review all of our terms of use so that you can understand what you can and can not.</p>
            <p>It is strictly prohibited to copy, modify, republish, post, upload, publicly display, encode, translate, transmit, distribute, and publish to another server, computer, website, and another medium for any commercial purposes without Bdtask’s written consent.</p>
            <p>All of our property is protected through our company’s trademark. We reserve all our properties like logo, appearance, layout, color scheme, and design by our company’s trademark. Bdtask, Inc. does not provide any right or license to use the foregoing. You can give us any suggestions, or other feedback without any payment, or condition.</p>
          </div>

          <div class="d-block mb-5">
            <h4 class="mb-4">Payment &amp; Fees</h4>
            <p>Bdtask, Inc. allows the customers to complete their payment through any valid payment method. We accept Credit or Debit cards (Visa, Mastercard, Discover, American Express), Bank cheques, personal cheques, money orders to receive our payment. When any clients agree with all of these agreements, the clients have to pay 60% of the total project payment to confirm your agreement, for any customization If we do not receive the client’s payment within 10 working days, we will send a follow-up email to the clients.</p>
            <p>We will terminate the contract if the clients do not pay the advance within 28 days. In this regard, if the clients want to resume their contract, the clients need to pay an additional 20% of the total project cost.</p>
          </div>

          <div class="d-block mb-5">
            <h4 class="mb-4">Cancellation Fee &amp; Refund Policy</h4>
            <p>Bdtask, Inc. reserves all rights where the refund policy will be applicable or not. We do not allow any refund when the client deposits or project payments after 30 days if we send the design or development source code, or the clients load it into their server. If you notice any error, or if you face any difficulties which will not be solved from our end, then we will allow you to refund your payment. Otherwise, if you change or modify any section or a single line of our code, or change anything in our script, we do not allow any refund.</p>
            <p>Remember, we will provide a contract letter and an agreement for all customization orders, the clients need to agree with this agreement and sign the contract and must have to maintain all terms and conditions which will be mentioned in this agreement. According to your agreement, Bdtask, Inc reserves all rights to decide, you will get a refund or not. If you breach our terms of use, we reserve the right to cancel your account and you are not eligible to get a refund.</p>
          </div>

          <div class="d-block mb-5">
            <h4 class="mb-4">Privacy Policy</h4>
            <p>We have certain privacy policies. To access our products, and services, you have to maintain all of the rules and regulations which will ensure our privacy and protection.</p>
            <p>Bdtask, Inc. reserves all rights to change and modify any privacy policy at any time. We protect your personal data, your name, address, and contact details through our <a href="yourprivacy.php">Privacy Policy</a>.</p>
          </div>

          <div class="d-block mb-5">
            <h4 class="mb-4">Disclaimers &amp; Warranties</h4>
            <p>BDTASK, INC. DOES NOT PROVIDE ANY WARRANTY OR GUARANTEE OF ALL PRODUCTS OR SERVICES WHICH WILL AVAILABLE ON THIS WEBSITE. WE TOTALLY DISCLAIM THAT THESE PRODUCTS WILL NOT MEET YOUR REQUIREMENTS. WE ALSO DISCLAIM THAT OUR PRODUCT IS FREE FROM ERRORS, BUGS, APPROPRIATE, SAFE, AS WELL AS, WE DISCLAIM THAT WE DO NOT ENSURE UNINTERRUPTED SERVICES.</p>
            <p>THIS WEBSITE MIGHT BE INCLUDED ANY TECHNICAL MISTAKES, TYPOGRAPHICAL ERRORS, INACCURATE INFORMATION. WE DISCLAIM TO PROVIDE ANY WARRANTY, OUR PRODUCT AND SERVICES MIGHT BE OUTDATED, AND WE CAN CHANGE UPDATE ANY PRODUCT OR SERVICES AT ANY TIME.</p>
          </div>

          <div class="d-block mb-5">
            <h4 class="mb-4">Limitations &amp; Liabilities</h4>
            <p>IN NO EVENT SHALL BDTASK, INC. WILL BE LIABLE TO ANY ENTITY FOR ANY DIRECT, INDIRECT, SPECIAL, CONSEQUENTIAL, OR OTHER DAMAGES. WE ARE NOT LIABLE FOR ANY LOST PROFITS, BUSINESS INTERRUPTION, LOSS OF INFORMATION OR PROGRAMS, OR OTHER DATA ON YOUR INFORMATION HANDLING SYSTEM.</p>
            <p>OUR LIMITATION AND LIABILITY IS THAT YOU MAY FACE ANY DAMAGE, INABILITY TO USE ANY PRODUCTS AND SERVICES, CONTENTS, MATERIALS, LINKS OF THIS WEBSITE.</p>
          </div>

          <div class="d-block mb-5">
            <h4 class="mb-4">Contact Us</h4>
            <p>Before accessing any products and services, you have to read and agree with our terms and conditions. If you want to know more details of our terms of use, you can contact us at info@bdtask.com.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection