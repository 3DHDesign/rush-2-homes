@extends('components.layouts.master')

@section('content')
    <style>
        .submit-row {
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: flex-start;
        }

        .lds-ring {
            display: inline-block;
            position: relative;
            width: 30px;
            height: 42px;
            margin-right: 7px;
        }

        .lds-ring div {
            box-sizing: border-box;
            display: block;
            position: absolute;
            width: 35px;
            height: 35px;
            margin: 8px;
            border: 3px solid #267cbe !important;
            border-radius: 50%;
            animation: lds-ring 1.2s cubic-bezier(0.5, 0, 0.5, 1) infinite;
            border-color: #267cbe transparent transparent transparent !important;
        }

        .lds-ring div:nth-child(1) {
            animation-delay: -0.45s;
        }

        .lds-ring div:nth-child(2) {
            animation-delay: -0.3s;
        }

        .lds-ring div:nth-child(3) {
            animation-delay: -0.15s;
        }

        @keyframes lds-ring {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        .btn-size {
            padding: 6px 10px !important;
            height: 45px !important;
        }
    </style>
    <div class="breadcrumb" style="background-image: url({{ asset('assets/img/bg/contact-bg.jpg') }});">
        <div class="container">
            <div class="bread-crumb-head">
                <div class="breadcrumb-title">
                    <h2>{{ __('contact.contact_us') }}</h2>
                </div>
                <div class="breadcrumb-list">
                    <ul>
                        <li><a href="{{ route('home') }}">{{ __('homepage.header.home') }}</a></li>
                        <li>{{ __('contact.contact_us') }}</li>
                    </ul>
                </div>
            </div>
            <div class="breadcrumb-border-img">
                <img src="{{ asset('assets/img/bg/line-bg.png') }}" alt="Line Image">
            </div>
        </div>
    </div>

    <section class="section contact-info-sec">
        <div class="container">
            <div class="row">
                <livewire:contact-form />
                <div class="col-lg-6">
                    <h3>{{ __('contact.contact_details') }}</h3>
                    <div class="row">
                        @if ($details->contact_number_lk || $details->contact_number_uae)
                            <div class="col-lg-12 d-flex">
                                <div class="flex-fill">
                                    <div class="contact-info-details d-flex align-items-center">
                                        <span><img src="{{ asset('assets/img/icons/phone.svg') }}" alt="Image"></span>
                                        <div>
                                            <h4>{{ __('contact.call_us_at') }}</h4>
                                            <a href="tel:{{ $details->contact_number_lk }}">{{ $details->contact_number_lk }}
                                                - Sri Lanka</a><br>
                                            @if ($details->contact_number_uae)
                                                <a href="tel:{{ $details->contact_number_uae }}">{{ $details->contact_number_uae }}
                                                    - UAE</a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                        @if ($details->email_lk || $details->email_uae)
                            <div class="col-lg-12 d-flex">
                                <div class="flex-fill">
                                    <div class="contact-info-details d-flex align-items-center">
                                        <span><img src="{{ asset('assets/img/icons/mail.svg') }}" alt="Image"></span>
                                        <div>
                                            <h4>{{ __('contact.email_us') }}</h4>
                                            <a href="mailto:{{ $details->email_lk }}">{{ $details->email_lk }}</a><br>
                                            @if ($details->email_uae)
                                                <a href="mailto:{{ $details->email_uae }}">{{ $details->email_uae }}</a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                        @if ($details->address_lk)
                            <div class="col-lg-12 d-flex">
                                <div class="flex-fill">
                                    <div class="contact-info-details d-flex align-items-center">
                                        <span><img src="{{ asset('assets/img/icons/map-pin.svg') }}" alt="Image"></span>
                                        <div>
                                            <h4>{{ __('contact.location_sri_lanka') }}</h4>
                                            <p>{{ $details->address_lk }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                        @if ($details->address_uae)
                            <div class="col-lg-12 d-flex">
                                <div class="flex-fill">
                                    <div class="contact-info-details d-flex align-items-center">
                                        <span><img src="{{ asset('assets/img/icons/map-pin.svg') }}" alt="Image"></span>
                                        <div>
                                            <h4>{{ __('contact.location_uae') }}</h4>
                                            <p>{{ $details->address_uae }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                    <div class="map-location">
                        <h3>{{ __('contact.find_us_on') }}</h3>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.0447497119526!2d79.85292567499616!3d6.885243393113735!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25bc307c71359%3A0x179067ab9ae5e470!2s31%20Melbourne%20Ave%2C%20Colombo!5e0!3m2!1sen!2slk!4v1694581574031!5m2!1sen!2slk"
                            height="359"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
