@extends('components.layouts.master')
@push('style')
    <style>
        .select-dropdown {
            background: #f6f6f9;
            border: 1px solid #f4f4f4;
            font-size: 16px;
            border-radius: 10px;
            min-height: 60px;
            width: 100%;
            padding: 17px;
        }

        .input-row {
            display: flex;
            flex-direction: row;
            gap: 10px;
        }

        .small-price-type {
            font-size: 16px !important;
        }
    </style>
@endpush
@section('content')
    <div class="breadcrumb">
        <div class="container">
            <div class="bread-crumb-head">
                <div class="breadcrumb-title">
                    <h2>Buy Property List with Sidebar</h2>
                </div>
                <div class="breadcrumb-list">
                    <ul>
                        <li><a href="{{ route('home') }}">Home </a></li>
                        <li>Buy Property List with Sidebar</li>
                    </ul>
                </div>
            </div>
            <div class="breadcrumb-border-img">
                <img src="{{ asset('assets/img/bg/line-bg.png') }}" class="img-fluid" alt>
            </div>
        </div>
    </div>


    <div class="property-sidebar">
        <section class="feature-property-sec for-rent content">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 theiaStickySidebar">
                        <div class="left-sidebar-widget property-sidebar">
                            <livewire:property-advance-filter>
                        </div>
                    </div>
                    <div class="col-xl-9">
                        <div class="row justify-content-center buy-list">

                            {{-- Property listing cards --}}
                            @foreach ($properties as $property)
                                <div class="col-lg-12">
                                    <div class="product-custom">
                                        <div class="profile-widget rent-list-view">
                                            <div class="doc-img">
                                                <a href="buy-details.html" class="property-img">
                                                    <img class="img-fluid" alt="Product image"
                                                        src="{{ asset('storage/' . $property->gallery[0]) }}">
                                                </a>
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
                                            @php
                                                $currencyType = [
                                                    'lkr' => 'Rs',
                                                    'usd' => 'USD',
                                                    'uae' => 'UAE',
                                                ];
                                                
                                                $priceTypeOptions = [
                                                    'totalPrice' => 'total price',
                                                    'perPerch' => 'per perch',
                                                    'perAcre' => 'per acre',
                                                    'perMonth' => 'per month',
                                                    'perAnnum' => 'per annum',
                                                ];
                                            @endphp
                                            <div class="pro-content">
                                                <div class="list-head">
                                                    <div class="rating">
                                                        {{-- <span class="me-1">Sample text here</span> --}}
                                                        <div class="product-name-price">
                                                            <h3 class="title">
                                                                <a href="#" tabindex="-1">{{ $property->title }}</a>
                                                            </h3>
                                                            <div class="product-amount">
                                                                <h5>{{ $currencyFormat = $currencyType[$property->currency] . ' ' ?? '' }}<span>{{ $property->price }}</span>/
                                                                    <span class="small-price-type">
                                                                        {{ $formattedPriceType = $priceTypeOptions[$property->price_type] ?? '' }}</span>
                                                                </h5>
                                                            </div>
                                                        </div>
                                                        <p><i class="feather-map-pin"></i>{{ $property->address }}
                                                        </p>
                                                    </div>
                                                </div>
                                                <ul class="d-flex details">
                                                    <li>
                                                        <img src="assets/img/icons/bed-icon.svg" alt="bed-icon">
                                                        3 Beds
                                                    </li>
                                                    <li>
                                                        <img src="assets/img/icons/bath-icon.svg" alt="bath-icon">
                                                        1 Bath
                                                    </li>
                                                    <li>
                                                        <img src="assets/img/icons/building-icon.svg" alt="building-icon">
                                                        15000 Sqft
                                                    </li>
                                                </ul>
                                                <ul class="property-category d-flex justify-content-between">
                                                    <li>
                                                        <span class="list">Listed on : </span>
                                                        <span class="date">17 Jan 2023</span>
                                                    </li>
                                                    <li>
                                                        <span class="category list">Category : </span>
                                                        <span class="category-value date">Condos</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach



                        </div>
                        {{-- Pagination --}}
                        {{ $properties->links('pagination::bootstrap-5') }}
                    </div>

                </div>

            </div>
        </section>
    </div>
@endsection
