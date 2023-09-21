@extends('components.layouts.master')
@push('style')
    <style>
        .aboutus-section {
            margin-top: 10vh;
            margin-bottom: 10vh;
        }

        p .about-para {
            text-align: justify;
        }
    </style>
@endpush
@section('content')
    <div class="breadcrumb">
        <div class="container">
            <div class="bread-crumb-head">
                <div class="breadcrumb-title">
                    <h2>{{ __('aboutus.about_us') }}</h2>
                </div>
                <div class="breadcrumb-list">
                    <ul>
                        <li><a href="{{ route('home') }}">{{ __('homepage.header.home') }}</a></li>
                        <li>{{ __('aboutus.about_us') }}</li>
                    </ul>
                </div>
            </div>
            <div class="breadcrumb-border-img">
                <img src="{{ asset('assets/img/bg/line-bg.png') }}" alt="Line Image">
            </div>
        </div>
    </div>

    <section class="aboutus-section">
        <div class="container">
            <div class="about-content">
                <h6>{{ __('aboutus.about_us') }}</h6>
                <h1>{{ __('aboutus.our_story') }}</h1>
                <p style="margin-top: 30px;" class="about-para">{{ __('aboutus.premier_real_estate') }}</p>

                <p class="about-para">{{ __('aboutus.dedicated_to_providing') }}</p>
                <p class="about-para">{{ __('aboutus.strong_presence_in_sri_lanka') }}</p>
                <p class="about-para">{{ __('aboutus.highest_standards_of_professionalism') }}</p>
                <p class="about-para">{{ __('aboutus.trusted_partner_in_real_estate') }}</p>
            </div>
        </div>
    </section>

    <section class="about-counter-sec" style="margin-bottom: 20vh;">
        <div class="container">

            <div class="about-listing-img">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-12 col-sm-12">
                        <div class="about-listing">
                            <img src="{{ asset('assets/img/about-us/about-us-01.jpg') }}" alt="aboutus-01">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12 col-sm-12">
                        <div class="about-listing">
                            <img src="{{ asset('assets/img/about-us/about-us-02.jpg') }}" alt="aboutus-02">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12 col-sm-12">
                        <div class="about-listing">
                            <img src="{{ asset('assets/img/about-us/about-us-03.jpg') }}" alt="aboutus-03">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
