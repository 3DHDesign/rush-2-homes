@extends('components.layouts.master')
@section('content')
    <section class="feature-property-sec">
        <div class="container">
            <div class="section-heading text-center">
                <h2>Featured Properties for Sales</h2>
                <div class="sec-line">
                    <span class="sec-line1"></span>
                    <span class="sec-line2"></span>
                </div>
                <p>Hand-Picked selection of quality places</p>
            </div>
            <div class="feature-property-sec for-rent for-rent p-0 bg-transparent">
                <div class="row">

                    @foreach ($featureProperties as $property)
                        <div class="col-lg-4 col-md-6">
                            <div class="product-custom">
                                <div class="profile-widget">
                                    <div class="doc-img">
                                        <a href="rent-details.html" class="property-img">
                                            <img class="img-fluid" alt="Property Image"
                                                src="{{ asset('storage/' . $property->gallery[0]) }}">
                                        </a>
                                        <div class="product-amount">
                                            <h5><span>{{ $property->price }}</span> / {{ $property->price_type }}</h5>
                                        </div>
                                        @foreach ($property->label as $lable_item)
                                            <div class="featured">
                                                <span>@dump($lable_item)</span>
                                            </div>
                                        @endforeach
                                    </div>
                                    <div class="pro-content">
                                        <h3 class="title">
                                            <a href="rent-details.html">{{ $property->title }}</a>
                                        </h3>
                                        <p><i class="feather-map-pin"></i> {{ $property->address }}
                                        </p>
                                        <ul class="d-flex details">
                                            <li>
                                                <img src="assets/img/icons/bed-icon.svg" alt="bed-icon">
                                                {{ $property->bedrooms }} Beds
                                            </li>
                                            <li>
                                                <img src="assets/img/icons/bath-icon.svg" alt="bath-icon">
                                                {{ $property->bathrooms }} Baths
                                            </li>
                                            <li>
                                                <img src="assets/img/icons/building-icon.svg" alt="building-icon">
                                                {{ $property->land_size . ' ' . $property->size_type }}
                                            </li>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
        <div class="bg-imgs">
            <img src="{{ asset('assets/img/bg/price-bg.png') }}" class="bg-01" alt="icon">
            <img src="{{ asset('assets/img/icons/blue-circle.svg') }}" class="bg-02" alt="icon">
            <img src="{{ asset('assets/img/icons/red-circle.svg') }}" class="bg-03" alt="icon">
        </div>
    </section>
    <div class="aos aos-init aos-animate"></div>
@endsection
