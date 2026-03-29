<!doctype html>
<html lang="en">
  <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>@yield('title', 'IT Solutions | Best Software Development Company')</title>
    <meta name="description" content="@yield('meta_description', 'IT Solutions, Inc. is the best software development company that provides all types of business solutions globally with modern technology and next-level professionals.')" />

    <!-- DNS Prefetch for Performance -->
    <link rel="dns-prefetch" href="https://code.jquery.com" />
    <link rel="dns-prefetch" href="https://cdn.jsdelivr.net" />
    <link rel="dns-prefetch" href="https://cdnjs.cloudflare.com" />
    <link rel="preconnect" href="https://code.jquery.com" crossorigin />
    <link rel="preconnect" href="https://cdn.jsdelivr.net" crossorigin />
    <link rel="preconnect" href="https://cdnjs.cloudflare.com" crossorigin />

    <link rel="shortcut icon" href="{{ asset('frontend/asset/img/favicon.png') }}" />
    <link rel="icon" type="image/png" href="{{ asset('frontend/asset/img/favicon.png') }}" />
    <link rel="canonical" href="{{ url()->current() }}" />
    
    @stack('meta_tags')

    @include('layouts.partials.styles')

    @stack('head_scripts')
  </head>

  <body>
    @include('layouts.partials.social_links')

    <main>
      @include('layouts.partials.header')

      @yield('content')
    </main>

    @include('layouts.partials.footer')

    @include('layouts.partials.modals')
    
    @include('layouts.partials.scripts')

    @stack('footer_scripts')
  </body>
</html>
