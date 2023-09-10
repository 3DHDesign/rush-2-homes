@extends('components.layouts.master')
@section('content')
    @include('frontend.components.slider')
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
                                        <a href="#" class="property-img">
                                            <img class="img-fluid" alt="Property Image"
                                                src="{{ asset('storage/' . $property->gallery[0]) }}">
                                        </a>
                                        @php
                                            $priceTypeOptions = [
                                                'totalPrice' => 'total price',
                                                'perPerch' => 'per perch',
                                                'perAcre' => 'per acre',
                                                'perMonth' => 'per month',
                                                'perAnnum' => 'per annum',
                                            ];
                                            $formattedPrice = $property->price;
                                            
                                            if ($formattedPrice < 1000000) {
                                                // Anything less than a million
                                                $price = number_format($formattedPrice);
                                            } elseif ($formattedPrice < 1000000000) {
                                                // Anything less than a billion
                                                $price = number_format($formattedPrice / 1000000, 2) . 'M';
                                            } else {
                                                // At least a billion
                                                $price = number_format($formattedPrice / 1000000000, 2) . 'B';
                                            }
                                            
                                        @endphp
                                        <div class="product-amount">
                                            <h5><span>{{ $price }}</span> /
                                                {{ $formattedPriceType = $priceTypeOptions[$property->price_type] ?? '' }}
                                            </h5>
                                        </div>
                                        @foreach ($property->label as $labelId)
                                            @php
                                                $label = \App\Models\Label::select('id', $local . '_name as name')->find($labelId);
                                            @endphp

                                            @if ($label->id == 2)
                                                <div class="featured">
                                                    <span
                                                        style="background-color: {{ $label->color }};">{{ $label->name }}</span>
                                                </div>
                                            @endif
                                            @if ($label->id == 1)
                                                <div class="new-featured">
                                                    <span
                                                        style="background-color: {{ $label->color }};">{{ $label->name }}</span>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                    <div class="pro-content">
                                        <h3 class="title">
                                            <a href="#"
                                                title="{{ $property->title }}">{{ Str::limit($property->title, 60, '...') }}</a>
                                        </h3>
                                        <p><i class="feather-map-pin"></i> {{ $property->address }}
                                        </p>
                                        @if ($property->bedrooms || $property->bathrooms || $property->land_size)
                                            <ul class="d-flex details">
                                                @if ($property->bedrooms)
                                                    <li>
                                                        <img src="assets/img/icons/bed-icon.svg" alt="bed-icon">
                                                        {{ $property->bedrooms }} Beds
                                                    </li>
                                                @endif
                                                @if ($property->bathrooms)
                                                    <li>
                                                        <img src="assets/img/icons/bath-icon.svg" alt="bath-icon">
                                                        {{ $property->bathrooms }} Baths
                                                    </li>
                                                @endif
                                                @if ($property->land_size)
                                                    <li>
                                                        <img src="assets/img/icons/building-icon.svg" alt="building-icon">
                                                        {{ $property->land_size . ' ' . $property->size_type }}
                                                    </li>
                                                @endif
                                            </ul>
                                        @endif
                                        <ul class="property-category d-flex justify-content-between">
                                            <li>
                                                <span class="list">Listed on : </span>
                                                <span
                                                    class="date">{{ \Carbon\Carbon::parse($property->updated_at)->format('d/m/Y') }}</span>
                                            </li>
                                            <li>
                                                <span class="category list">Category : </span>
                                                <span
                                                    class="category-value date">{{ $property->propertyCategory->en_name }}</span>
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
