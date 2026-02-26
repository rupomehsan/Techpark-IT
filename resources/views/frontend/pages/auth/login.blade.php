@php
    $meta = [
        // "meta" => [],
        'seo' => [
            'title' => 'login',
            'image' => asset('seo.jpg'),
        ],
    ];
@endphp
@extends('frontend.layouts.layout', $meta)
@section('contents')
    <style>
        .divider:after,
        .divider:before {
            content: "";
            flex: 1;
            height: 1px;
            background: #eee;
        }
    </style>
    <section class="py-5 bg_banner_area_right">
        <div class="container h-custom">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-9 col-lg-6 col-xl-5">
                    {{-- <img src="{{ asset('frontend/assets/images/login.jpg') }}" class="img-fluid" alt="Sample image">
                    --}}
                    {{-- <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
                        class="img-fluid" alt="Sample image"> --}}
                  @include('frontend.pages.auth.svg')
                </div>
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                    <form method="POST" action="{{ route('login_sumbit') }}">
                        @csrf

                        <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                            <p class="lead fw-normal mb-0 me-3 animate-text fw-bold">LOG IN</p>
                        </div>

                        <div class="divider d-flex align-items-center my-4">
                            {{-- <p class="text-center fw-bold mx-3 mb-0">Or</p> --}}
                        </div>

                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="form3Example3">Email Or Mobile Number</label>
                            <input type="text" name="email" value="{{ old('email') }}" id="form3Example3"
                                class="form-control " placeholder="Enter your mobile number or email address" />
                            @error('email')
                                {{-- <div class="d-none">
                                    <audio id="alertSound" src="alert_sound.mp3" preload="auto"></audio>
                                    <button onclick="playSound()">Play Sound</button>
                                    <script>
                                        var sound = document.getElementById("alertSound");
                                        sound.play();
                                    </script>
                                </div> --}}

                                <div class="text-danger pt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-3">
                            <label class="form-label" for="form3Example4">Password</label>
                            <input type="password" name="password" id="form3Example4" class="form-control "
                                placeholder="Enter password" />
                            @error('password')
                                <div class="text-danger pt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="d-flex justify-content-between align-items-center">
                            <!-- Checkbox -->
                            <div class="form-check mb-0">
                                <input class="form-check-input me-2" type="checkbox" value="" id="remember_me" />
                                <label class="form-check-label" for="remember_me">
                                    Remember me
                                </label>
                            </div>
                            <a href="#!" class="text-body">Forgot password?</a>
                        </div>

                        <div class="text-center text-lg-start mt-4 pt-2">
                            <button type="submit" class="btn rounded-pill btn-primary px-4">
                                Submit
                            </button>
                            <p class="small fw-bold mt-2 pt-1 mb-0">
                                Don't have an account?
                                <a href="/register" class="link-danger">Register</a>
                            </p>
                        </div>

                    </form>
                </div>
            </div>
        </div>

    </section>
@endsection
