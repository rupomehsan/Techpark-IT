    <footer class="position-relative">
      <div class="footer_shape">
        <img loading="lazy" src="{{ asset('frontend/asset/img/footer-bg.html')}}" class="w-100" alt="" />
      </div>
      <div class="footer_wrapper">
        <div class="container-md">
          <div class="row g-4 py-5 position-relative">
            <!-- Company Info Column -->
            <div class="col-lg-3 col-md-6">
              <div class="mb-4">
                <a href="index.html">
                  <img
                    src="{{ asset('frontend/asset/img/logo_big.png') }}"
                    alt="techparkit Logo White"
                    style="max-width: 200px"
                  />
                </a>
              </div>
              <p class="footer-text mb-4">
                 IT Solutions is a leading provider of innovative
                technology services, dedicated to delivering exceptional value
                to our clients.
              </p>
              <h5 class="text-white mb-3 fs-6">Follow us on</h5>
              <ul class="d-flex list-unstyled gap-2 flex-wrap">
                <li>
                  <a
                    class="align-items-center d-flex justify-content-center text-decoration-none text-white social_icon"
                    href="https://www.facebook.com/TechParkITorg/"
                    rel="nofollow"
                    title="Facebook"
                    target="_blank"
                  >
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="20"
                      height="20"
                      viewBox="0 0 24 24"
                      fill="currentColor"
                    >
                      <path
                        d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"
                      />
                    </svg>
                  </a>
                </li>

                <li>
                  <a
                    class="align-items-center d-flex justify-content-center text-decoration-none text-white social_icon"
                    href="https://www.linkedin.com/company/techparkit/posts/?feedView=all"
                    rel="nofollow"
                    title="LinkedIn"
                    target="_blank"
                  >
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="20"
                      height="20"
                      viewBox="0 0 24 24"
                      fill="currentColor"
                    >
                      <path
                        d="M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38 1.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 4.5h-5v16h5v-16zm7.982 0h-4.968v16h4.969v-8.399c0-4.67 6.029-5.052 6.029 0v8.399h4.988v-10.131c0-7.88-8.922-7.593-11.018-3.714v-2.155z"
                      />
                    </svg>
                  </a>
                </li>
                <li>
                  <a
                    class="align-items-center d-flex justify-content-center text-decoration-none text-white social_icon"
                    href="https://twitter.com/TechParkITOrg"
                    rel="nofollow"
                    title="Twitter"
                    target="_blank"
                  >
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="20"
                      height="20"
                      viewBox="0 0 24 24"
                      fill="currentColor"
                    >
                      <path
                        d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"
                      />
                    </svg>
                  </a>
                </li>
                <li>
                  <a
                    class="align-items-center d-flex justify-content-center text-decoration-none text-white social_icon"
                    href="https://www.youtube.com/@TechParkITOrg/videos"
                    rel="nofollow"
                    title="YouTube"
                    target="_blank"
                  >
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="20"
                      height="20"
                      viewBox="0 0 24 24"
                      fill="currentColor"
                    >
                      <path
                        d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"
                      />
                    </svg>
                  </a>
                </li>
              </ul>
            </div>

            <!-- Useful Links Column -->
            <div class="col-lg-3 col-md-6">
              <h5 class="footer-title text-white mb-4">Useful Links</h5>
              <ul class="nav flex-column gap-2">
                <li class="nav-item">
                  <a
                    href="{{route('aboutUs')}}"
                    class="text-decoration-none footer-text lh-30"
                    target="_blank"
                  >
                    <span class="arrow me-2">→</span>About Us
                  </a>
                </li>
                <li class="nav-item">
                  <a
                    href="{{ route('projects') }}"
                    class="text-decoration-none footer-text lh-30"
                    target="_blank"
                  >
                    <span class="arrow me-2">→</span>Our Portfolio
                  </a>
                </li>
                  <li class="nav-item">
                  <a
                    href="#"
                    class="text-decoration-none footer-text lh-30"
                   
                  >
                    <span class="arrow me-2">→</span>Our Blogs
                  </a>
                </li>
                <li class="nav-item">
                  <a
                    href="#"
                    class="text-decoration-none footer-text lh-30"
                    target="_blank"
                  >
                    <span class="arrow me-2">→</span>Career - We Are Hiring
                  </a>
                </li>
                <li class="nav-item">
                  <a
                    href="{{ route('termsAndCondition') }}"
                    class="text-decoration-none footer-text lh-30"
                    target="_blank"
                  >
                    <span class="arrow me-2">→</span>Terms & Conditions
                  </a>
                </li>
                <li class="nav-item">
                  <a
                    href="{{ route('privacyPolicy') }}"
                    class="text-decoration-none footer-text lh-30"
                    target="_blank"
                  >
                    <span class="arrow me-2">→</span>Privacy Policy
                  </a>
                </li>
                
              </ul>
            </div>

            <!-- Services Column -->
            <div class="col-lg-3 col-md-6">
              <h5 class="footer-title text-white mb-4">Services</h5>
              <ul class="nav flex-column gap-2">
                <li class="nav-item">
                  <a
                    href="#service"
                    class="text-decoration-none footer-text lh-30"
                   
                  >
                    <span class="arrow me-2">→</span>Web Design
                  </a>
                </li>
                 <li class="nav-item">
                  <a
                    href="#service"
                    class="text-decoration-none footer-text lh-30"
                  
                  >
                    <span class="arrow me-2">→</span>Web Development
                  </a>
                </li>
                <li class="nav-item">
                  <a
                    href="#service"
                    class="text-decoration-none footer-text lh-30"
                  
                  >
                    <span class="arrow me-2">→</span>Graphics Design
                  </a>
                </li>
                 <li class="nav-item">
                  <a
                    href="#service"
                    class="text-decoration-none footer-text lh-30"
                  
                  >
                    <span class="arrow me-2">→</span>UI/UX Design
                  </a>
                </li>
               
                <li class="nav-item">
                  <a
                    href="#service"
                    class="text-decoration-none footer-text lh-30"
                  
                  >
                    <span class="arrow me-2">→</span>App Development
                  </a>
                </li>
               
                <li class="nav-item">
                  <a
                    href="#service"
                    class="text-decoration-none footer-text lh-30"
                  
                  >
                    <span class="arrow me-2">→</span>Digital Marketing
                  </a>
                </li>
              </ul>
            </div>

            <!-- Support Column -->
            {{-- <div class="col-lg-2 col-md-6">
              <h5 class="footer-title text-white mb-4">Support</h5>
              <ul class="nav flex-column gap-2">
                <li class="nav-item">
                  <a
                    href="{{route('contact')}}"
                    class="text-decoration-none footer-text lh-30"
                  >
                    <span class="arrow me-2">→</span>Contact Us
                  </a>
                </li>
                <li class="nav-item">
                  <a
                    href="support.html"
                    class="text-decoration-none footer-text lh-30"
                  >
                    <span class="arrow me-2">→</span>Item Support
                  </a>
                </li>
                <li class="nav-item">
                  <a
                    href="copyright.html"
                    class="text-decoration-none footer-text lh-30"
                    target="_blank"
                  >
                    <span class="arrow me-2">→</span>Copyright
                  </a>
                </li>
                <li class="nav-item">
                  <a
                    href="affiliate-disclosure.html"
                    class="text-decoration-none footer-text lh-30"
                    target="_blank"
                  >
                    <span class="arrow me-2">→</span>Affiliate Disclosure
                  </a>
                </li>
              </ul>
            </div> --}}

            <!-- Contact Info Column -->
            <div class="col-lg-3 col-md-6">
              <h5 class="footer-title text-white mb-4">Contact</h5>
              <div class="mb-3">
                <h6 class="text-white mb-2 fs-6">Address</h6>
                <p class="footer-text mb-0">
                  House 31, Lane 01, Block B, Section 06, Mirpur, Dhaka,
                  Bangladesh (Beside Proshika Mor).
                </p>
              </div>
              <div class="mb-3">
                <h6 class="text-white mb-2 fs-6">Email</h6>
                <p class="footer-text mb-0">
                  <a
                    href="mailto:techparkitsolutions@gmail.com"
                    class="text-decoration-none text-white"
                  >
                    techparkitsolutions@gmail.com
                  </a>
                </p>
              </div>
              <div>
                <h6 class="text-white mb-2 fs-6">Phone</h6>
                <p class="footer-text mb-2">
                  <a
                    href="tel:+8801683392241"
                    class="text-decoration-none text-white"
                    >+8801683392241</a
                  ><br />
                  <a
                    href="tel:+8801719229595"
                    class="text-decoration-none text-white"
                    >+8801719229595</a
                  >
                </p>
              </div>
            </div>
          </div>

          <!-- Footer Bottom -->
          <div
            class="row border-top justify-content-center border-secondary py-4"
          >
            <div class="col-md-6 text-md-start mb-3 mb-md-0">
              <p class="footer-text mb-0 text-center">
               
              
                ⓒ Copyright   <script>
                  document.write(new Date().getFullYear());
                </script> Techpark IT All rights reserved
              </p>
            </div>
          </div>
        </div>
      </div>
    </footer>
