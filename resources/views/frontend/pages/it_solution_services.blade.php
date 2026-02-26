@php
    $meta = [
        'seo' => [
            'title' => 'IT Services',
            'image' => asset('seo.jpg'),
        ],
    ];
@endphp
@extends('frontend.layouts.layout', $meta)
@section('contents')

    @include('frontend.pages.services.main')

    {{-- @include('frontend.pages.homepage_sections.it_services', [
        'it_services' => $it_services,
    ]) --}}
    <!-- working_company_name area start -->
        @include('frontend.pages.homepage_sections.working_partner')
    <!-- working_company_name area end -->
    <!-- hire section start -->
        @include('frontend.pages.homepage_sections.hire_us_button')
        <!-- /hire section end -->
@endsection
