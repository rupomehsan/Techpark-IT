<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- @include('frontend.layouts.includes.pwa') --}}
    @if (!isset($seo))
        @include('frontend.layouts.includes.meta', [
            'seo' => (object) [
                'title' => 'Techpark IT',
            ],
        ])
    @else
        @include('frontend.layouts.includes.meta', ['seo' => (object) $seo])
    @endif
    {{-- <link rel="shortcut icon" type="image/x-icon" href="{{ $meta->fabicon ?? asset(setting('fabicon')) }}"> --}}
    <link rel="shortcut icon" type="image/x-icon"
        href="{{ isset($seo->fabicon) ? $seo->fabicon : asset(setting('fabicon')) }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/css/lightbox.min.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/plugins/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/icon/fontawesome-free-6.2.0-web/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/styles/style.css?v=1.5">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/styles/custom.css?v=1.5">
    @stack('styles')

    {{-- js plugins --}}

    {{-- <script src="{{ asset('js/plugins/turbolinks.min.js') }}"></script> --}}

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    {{-- js plugins --}}
    <script src="{{ asset('js/plugins/localforage.min.js') }}"></script>
    <script src="{{ asset('js/plugins/sweetalert.js') }}"></script>
    <script src="{{ asset('js/plugins/axios.js') }}"></script>
    <script src="{{ asset('js/plugins/vue.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body id="top">

    @if (session()->has('success'))
        <script>
            window.toaster("{{ session()->get('success') }}");
        </script>
    @endif
    @if (session()->has('warning'))
        <script>
            window.toaster("{{ session()->get('warning') }}", 'warning');
        </script>
    @endif

    @include('frontend.layouts.navbar')

    <main>
        @yield('contents')
    </main>

    @include('frontend.layouts.footer')
    @include('frontend.layouts.easyUseButtons')


    @stack('scripts')

    {{-- frontend vue scripts --}}
    {{-- <script src="{{ asset('js/frontend_vue.js') }}"></script> --}}

    {{-- turbo link setup --}}
    <script src="{{ asset('js/frontend.js') }}" defer></script>

    {{-- pwa setup --}}
    {{-- <script src="{{ asset('main.js') }}" defer></script> --}}

    <script src="{{ asset('frontend/assets/js/custom.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/js/lightbox.min.js"></script>

</body>

</html>
