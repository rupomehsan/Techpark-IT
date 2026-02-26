<!-- header_area start -->
<header class="header_area">
    <div class="container">
        <div class="header_area_content">
            <!-- logo_area start -->
            <div class="logo_area">
                <a href="/">
                    <img src="{{ asset(setting('header_logo')) }}" alt="tech park it">
                </a>
            </div>
            <!-- logo_area end -->

            {{-- @guest
            @if (Route::has('login'))
            <div class="extra_login_area">
                <a href="/login">Login</a>
            </div>
            @endif
            @else
            <div class="extra_login_area">
                <a href="{{ route('myCourse') }}">
                    <i class="fa-regular fa-circle-user fa-lg"></i>
                    {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}
                </a>
            </div>
            @endguest --}}

            <!-- xs login_area end -->

            <!-- menu_ber area start -->
            <button onclick="active_menu_ber.classList.toggle('activee_class')" class="menu_ber">
                <i class="fa-solid fa-bars"></i>
            </button>
            <!-- menu_ber area end -->

            <!-- nav_and_login_area start -->
            <div id="active_menu_ber" class="nav_and_login_area">

                <div class="full_nav_are">

                    <!-- nav_area start -->
                    <nav class="nav-area">
                        <ul>
                            <div class="nav-area_all" onclick="active_menu_ber.classList.toggle('activee_class')"
                                class="menu_ber">
                            </div>
                            <li>
                                <a class="{{ request()->is('/') ? 'active' : '' }}" href="/">Home</a>
                            </li>
                            <li>
                                <a class="{{ request()->is('about') ? 'active' : '' }}" href="/about">About Us</a>
                            </li>
                            {{-- <li>
                                <a href="/courses">কোর্সসমূহ</a>
                            </li> --}}


                            <li>
                                <a class="{{ request()->is('gallery') ? 'active' : '' }}" href="/gallery">Gallery</a>
                            </li>
                            <li>
                                <a class="{{ request()->is('blog') ? 'active' : '' }}" href="/blog">Blog</a>
                            </li>

                            <li>
                                <a class="{{ request()->is('it-solution-services') ? 'active' : '' }}" href="/it-solution-services">Services</a>
                            </li>

                            {{-- <li class="more_link">
                                <a href="#">More <i class="fa-solid fa-angle-down"></i></a>
                                <ul class="more_link_details">
                                    <li>
                                        <a href="/gallery">Gallery</a>
                                    </li>
                                    <li>
                                        <a href="/blog">Blog</a>
                                    </li>
                                    <!-- <li>
                                            <a href="#">এফিলিয়েশন</a>
                                        </li> -->
                                    <li>
                                        <a href="/it-solution-services">Services</a>
                                    </li>
                                </ul>
                            </li> --}}

                            <li>
                                <a class="{{ request()->is('developers') ? 'active' : '' }}" href="/developers">Developers</a>
                            </li>
                            <li>
                                <a class="{{ request()->is('contact') ? 'active' : '' }}" href="/contact">Contact</a>
                            </li>
                            @auth
                                <li>
                                    <a href="javascript:void(0)"
                                        onclick="event.preventDefault();document.getElementById('logout-form').submit();">লগআউট</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            @endauth
                        </ul>
                    </nav>
                    <!-- nav_area end -->

                    <!-- login_area start -->

                    {{-- @guest
                    @if (Route::has('login'))
                    <div class="login_area">
                        <a class="login-btn" href="/login">Login</a>
                    </div>
                    @endif
                    @else
                    <div class="login_area">
                        <div class="dropdown dropdown_menu">
                            <button onclick="dropdown_list()" class="dropbtn top_nav_profile_btn">
                                <i class="fa-regular fa-circle-user fa-lg me-1"></i>
                                {{ Auth::user()->first_name }}
                                {{ Auth::user()->last_name }}
                            </button>
                            <div id="myDropdown" class="dropdown-content">
                                <a class="dropdown-single-item" href="{{ route('myCourse') }}">আমার কোর্সসমূহ</a>
                                <a class="dropdown-single-item" href="javascript:void(0)"
                                    onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </div>
                    </div>
                    @endguest --}}
                    <script>
                        /* When the user clicks on the button,
                                                                                                                                                                                                                        toggle between hiding and showing the dropdown content */
                        function dropdown_list() {
                            document.getElementById("myDropdown").classList.toggle("show");
                        }

                        // Close the dropdown if the user clicks outside of it
                        window.onclick = function (event) {
                            if (!event.target.matches('.dropbtn')) {
                                var dropdowns = document.getElementsByClassName("dropdown-content");
                                var i;
                                for (i = 0; i < dropdowns.length; i++) {
                                    var openDropdown = dropdowns[i];
                                    if (openDropdown.classList.contains('show')) {
                                        openDropdown.classList.remove('show');
                                    }
                                }
                            }
                        }
                    </script>
                    <!-- login_area end -->

                </div>
            </div>
            <!-- nav_and_login_area end -->
        </div>
    </div>
</header>
<!-- header_area end -->
