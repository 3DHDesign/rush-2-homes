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
                    <h2>About Us</h2>
                </div>
                <div class="breadcrumb-list">
                    <ul>
                        <li><a href="index.html">Home </a></li>
                        <li>About Us</li>
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
                <h6>About Rush 2 Homes</h6>
                <h1>Our Story</h1>
                <p style="margin-top: 30px;" class="about-para">Rush2Homes is a premier real estate company, established as
                    a subsidiary and
                    exclusive sales and
                    marketing partner of the leading property development company in Sri Lanka, Rush Lanka Group. Our
                    deep-rooted expertise in the industry and strategic partnership with Rush Lanka Group, enable us to
                    offer unparalleled real estate solutions to our clients in Sri Lanka, Dubai, and beyond.</p>

                <p class="about-para">Since our inception, Rush2Homes has been dedicated to providing top-quality services
                    to
                    our clients, consistently exceeding their expectations. We take pride in having helped a plethora of
                    clients find their dream homes, investment properties, or development projects. Our clients trust us to
                    provide them with personalized services, expert market knowledge, and an extensive portfolio of
                    properties to choose from.</p>
                <p class="about-para">
                    Having established a strong presence in the Sri Lankan market, Rush2Homes has expanded its operations to
                    Dubai, one of the most dynamic real estate markets in the world. We understand the endless possibilities
                    that the Dubai market offers, and we are committed to helping our clients take advantage of the best
                    opportunities available.
                </p>
                <p class="about-para">
                    At Rush2Homes, we strive to maintain the highest standards of professionalism and integrity, ensuring
                    that our clients receive honest and transparent advice throughout their real estate journey. Our team of
                    experts is dedicated to delivering exceptional service, making sure that our clients receive the support
                    and guidance they need to achieve their real estate goals.
                </p>
                <p class="about-para">
                    We are excited to continue expanding into new markets, leveraging our experience, expertise, and
                    partnerships to help more clients find their perfect property, investment opportunity, or development
                    project. Whether you are a local or international buyer, investor, developer, or tenant, Rush2Homes is
                    your trusted partner in real estate.
                </p>
            </div>

        </div>
    </section>

    <section class="about-counter-sec">
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


            <div class="counter-sec" style="background-color: transparent">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
                        <div class="counter-box flex-fill">
                            <div class="counter-icon">
                                <img src="{{ asset('assets/img/icons/counter-icon-1.svg') }}" alt="icon">
                            </div>
                            <div class="counter-value">
                                <h3 class="dash-count" style="color: #0e0e46;"><span class="counter-up">50</span>K</h3>
                                <h5 style="color: #0e0e46;">Listings Added </h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
                        <div class="counter-box flex-fill">
                            <div class="counter-icon">
                                <img src="{{ asset('assets/img/icons/counter-icon-2.svg') }}" alt="icon">
                            </div>
                            <div class="counter-value">
                                <h3 class="dash-count" style="color: #0e0e46;"><span class="counter-up">3000</span>+</h3>
                                <h5 style="color: #0e0e46;">Agents Listed</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
                        <div class="counter-box active flex-fill">
                            <div class="counter-icon">
                                <img src="{{ asset('assets/img/icons/counter-icon-3.svg') }}" alt="icon">
                            </div>
                            <div class="counter-value">
                                <h3 class="dash-count" style="color: #0e0e46;"><span class="counter-up">2000</span>+</h3>
                                <h5 style="color: #0e0e46;">Sales Completed </h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
                        <div class="counter-box flex-fill">
                            <div class="counter-icon">
                                <img src="{{ asset('assets/img/icons/counter-icon-4.svg') }}" alt="icon">
                            </div>
                            <div class="counter-value">
                                <h3 class="dash-count" style="color: #0e0e46;"><span class="counter-up">5000</span>+</h3>
                                <h5 style="color: #0e0e46;">Users</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
