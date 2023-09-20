@extends('components.layouts.master')
@section('content')
    <div class="breadcrumb">
        <div class="container">
            <div class="bread-crumb-head">
                <div class="breadcrumb-title">
                    <h2>{{ $property->title }}</h2>
                </div>
                <div class="breadcrumb-list">
                    <ul>
                        <li><a href="{{ route('home') }}">Home </a></li>
                        <li><a href="javascript:void(0)">Properties</a></li>
                        <li>{{ $property->slug }}</li>
                    </ul>
                </div>
            </div>
            <div class="breadcrumb-border-img">
                <img src="assets/img/bg/line-bg.png" alt="Line Image">
            </div>
        </div>
    </div>


    <section class="buy-detailview" style="transform: none;">
        <div class="container" style="transform: none;">
            <div class="row" style="transform: none;">




                <div class="col-lg-8">
                    <div class="buy-details-col">
                        <div class="rental-card">
                            <div class="slider rental-slider">
                                @foreach ($property->gallery as $image)
                                    <div class="product-img">
                                        <img src="{{ asset('storage/' . $image) }}" alt="{{ $property->title }}">
                                    </div>
                                @endforeach

                            </div>
                            <div class="slider slider-nav-thumbnails">
                                @foreach ($property->gallery as $image)
                                    <div><img src="{{ asset('storage/' . $image) }}" alt="{{ $property->title }}">
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </div>


                    <div class="collapse-card">
                        <h4 class="card-title">
                            <a class="collapsed" data-bs-toggle="collapse" href="#overview"
                                aria-expanded="false">Overview</a>
                        </h4>
                        <div id="overview" class="card-collapse collapse show">
                            <ul class="property-overview  collapse-view">
                                <li>
                                    <img src="{{ asset('assets/img/icons/bed-icon.svg') }}" alt="Image">
                                    <p>{{ isset($property->bedrooms) ? $property->bedrooms . ' Beds' : '- Beds' }}
                                    </p>
                                </li>
                                <li>
                                    <img src="{{ asset('assets/img/icons/bath-icon.svg') }}" alt="Image">
                                    <p>{{ isset($property->bathrooms) ? $property->bathrooms . ' Baths' : '- Baths' }}</p>
                                </li>
                                <li>
                                    <img src="{{ asset('assets/img/icons/building-icon.svg') }}" alt="Image">
                                    <p>{{ $property->land_size }} {{ $property->size_type }}</p>
                                </li>
                                <li>
                                    <img src="{{ asset('assets/img/icons/garage-icon.svg') }}" alt="Image">
                                    <p>{{ isset($property->garages) ? $property->garages . ' Garages' : '- Garages' }}</p>
                                </li>
                                <li>
                                    <img src="{{ asset('assets/img/icons/calender-icon.svg') }}" alt="Image">
                                    <p>Listed at: {{ \Carbon\Carbon::parse($property->updated_at)->format('Y') }}</p>
                                </li>
                            </ul>
                        </div>
                    </div>


                    <div class="collapse-card">
                        <h4 class="card-title">
                            <a class="collapsed" data-bs-toggle="collapse" href="#about"
                                aria-expanded="false">Description</a>
                        </h4>
                        <div id="about" class="card-collapse collapse show">
                            <div class="about-agent collapse-view">
                                {!! $property->description !!}
                            </div>
                        </div>
                    </div>


                    <div class="collapse-card">
                        <h4 class="card-title">
                            <a class="collapsed" data-bs-toggle="collapse" href="#address" aria-expanded="false">Property
                                Address</a>
                        </h4>
                        <div id="address" class="card-collapse collapse show">
                            <ul class="property-address  collapse-view">
                                @if ($property->address)
                                    <li>Address : <span> {{ $property->address ?? ' N/A' }}</span></li>
                                @endif
                                @if ($property->city_id)
                                    <li>City : <span>
                                            @if ($local === 'en')
                                                {{ $property->city->name_en ?? ' N/A ?>' }}
                                            @elseif($local === 'si')
                                                {{ $property->city->name_si ?? ' N/A' }}
                                            @elseif($local === 'ta')
                                                {{ $property->city->name_ta ?? ' N/A' }}
                                            @endif
                                        </span></li>
                                @endif
                                @if ($property->district_id)
                                    <li>District : <span>
                                            @if ($local === 'en')
                                                {{ $property->district->name_en ?? ' N/A' }}
                                            @elseif($local === 'si')
                                                {{ $property->district->name_si ?? ' N/A' }}
                                            @elseif($local === 'ta')
                                                {{ $property->district->name_ta ?? ' N/A' }}
                                            @endif
                                        </span></li>
                                @endif
                                <li>Country : <span>Sri Lanka</span></li>
                                @if ($property->zip_code)
                                    <li>Zip code: <span> {{ $property->zip_code ?? ' N/A' }}</span></li>
                                @endif
                            </ul>
                        </div>
                    </div>


                    <div class="collapse-card">
                        <h4 class="card-title">
                            <a class="collapsed" data-bs-toggle="collapse" href="#details" aria-expanded="false">Property
                                Details</a>
                        </h4>
                        <div id="details" class="card-collapse collapse show  collapse-view">
                            @php
                                $currencyType = [
                                    'lkr' => 'Rs',
                                    'usd' => 'USD',
                                    'uae' => 'UAE',
                                ];
                            @endphp
                            <div class="row">
                                <div class="col-md-4">
                                    <ul class="property-details">
                                        <li>Property Id : <span> {{ 'RH' . $property->property_code }}</span></li>
                                        <li>Price : <span>
                                                {{ $currencyFormat = $currencyType[$property->currency] . ' ' ?? '' }}
                                                {{ number_format($property->price, 0, ',', ' ') }} </span></li>
                                        <li>Land Size : <span>{{ $property->land_size }}
                                                {{ $property->size_type }}</span></li>
                                    </ul>
                                </div>
                                <div class="col-md-4">
                                    <ul class="property-details">
                                        <li>Bedrooms : <span>
                                                {{ $property->bedrooms ?? ' N/A' }}</span>
                                        </li>
                                        <li>Bathrooms : <span>{{ $property->bathrooms ?? ' N/A' }}</span></li>
                                        <li>Garages : <span>{{ $property->garages ?? ' N/A' }}</span></li>
                                    </ul>
                                </div>
                                <div class="col-md-4">
                                    <ul class="property-details">
                                        <li>Listed at :
                                            <span>{{ \Carbon\Carbon::parse($property->updated_at)->format('d/m/Y') }}</span>
                                        </li>
                                        <li>Floors No : <span>{{ $property->floors ?? ' N/A' }}</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="collapse-card">
                        <h4 class="card-title">
                            <a class="collapsed" data-bs-toggle="collapse" href="#amenities"
                                aria-expanded="false">Amenities</a>
                        </h4>
                        <div id="amenities" class="card-collapse collapse show  collapse-view">
                            @foreach ($list_aminities->chunk(4) as $chunk)
                                <div class="row">
                                    @foreach ($chunk as $amenity)
                                        <div class="col-md-3">
                                            <ul class="amenities-list">
                                                <li>
                                                    <img src="{{ asset('storage/' . $amenity->icon) }}" alt="Image">
                                                    {{ $amenity->name }}
                                                </li>
                                            </ul>
                                        </div>
                                    @endforeach
                                </div>
                            @endforeach
                        </div>
                    </div>


                    {{-- <div class="collapse-card">
                        <h4 class="card-title">
                            <a class="collapsed" data-bs-toggle="collapse" href="#Documents"
                                aria-expanded="false">Documents</a>
                        </h4>
                        <div id="Documents" class="card-collapse collapse show ">
                            <div class="row">
                                <div class="col-md-12">
                                    <ul class="amenities-list document collapse-view">
                                        <li><img src="{{ asset('assets/img/icons/pdf-icon.svg') }}" alt="Image">Ferris
                                            Park.jpg
                                        </li>
                                        <li><img src="{{ asset('assets/img/icons/pdf-icon.svg') }}"
                                                alt="Image">Energetic-Certificate-PDF6</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div> --}}

                </div>

                <div class="col-lg-4 theiaStickySidebar"
                    style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">

                    <div class="theiaStickySidebar"
                        style="padding-top: 0px; padding-bottom: 1px; position: static; transform: none;">
                        <div class="right-sidebar">
                            <div class="sidebar-card">
                                <div class="sidebar-card-title">
                                    <h5>Share Property</h5>
                                </div>
                                <div class="social-links">
                                    <ul class="sidebar-social-links">
                                        <li><a href="javascript:void(0);" class="fb-icon"><i
                                                    class="fa-brands fa-facebook-f hi-icon"></i></a></li>
                                        <li><a href="javascript:void(0);" class="ins-icon"><i
                                                    class="fa-brands fa-instagram hi-icon"></i></a></li>
                                        <li><a href="javascript:void(0);"><i class="fa-brands fa-behance hi-icon"></i></a>
                                        </li>
                                        <li><a href="javascript:void(0);" class="twitter-icon"><i
                                                    class="fa-brands fa-twitter hi-icon"></i></a></li>
                                        <li><a href="javascript:void(0);" class="ins-icon"><i
                                                    class="fa-brands fa-pinterest-p hi-icon"></i></a></li>
                                        <li><a href="javascript:void(0);"><i
                                                    class="fa-brands fa-linkedin hi-icon"></i></a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="sidebar-card">
                                <div class="user-active">
                                    <div class="user-img">
                                        <a href="javascript:void(0);"><img class="avatar"
                                                src="{{ asset('storage/' . $property->agent->avatar) }}"
                                                alt="Image"></a>
                                        <span class="avatar-online"></span>
                                    </div>
                                    <div class="user-name">
                                        <h4><a href="javascript:void(0);">{{ $property->agent->name }}</a></h4>
                                        <p> Rush 2 homes agent</p>
                                    </div>
                                </div>
                                <div class="review-form">
                                    <input type="text" class="form-control" placeholder="Your Name">
                                </div>
                                <div class="review-form">
                                    <input type="email" class="form-control" placeholder="Your Email">
                                </div>
                                <div class="review-form">
                                    <input type="text" class="form-control" placeholder="Your Phone Number">
                                </div>
                                <div class="review-form">
                                    <textarea rows="5" placeholder="Yes, I'm Interested"></textarea>
                                </div>
                                <div class="review-form submit-btn">
                                    <button type="submit" class="btn-primary">Send Email</button>
                                </div>
                                <ul class="connect-us">
                                    <li><a href="tel:{{ $property->agent->number }}"><i class="feather-phone"></i>Call
                                            Us</a></li>
                                    <li><a href="https://wa.me/{{ $property->agent->number }}?text=I'm%20interest%20about%20the%20{{ $property->propertyCategory->en_name }}%20listing%20property%20code%20is%20RH{{ $property->property_code }}"
                                            target="_blank"><i class="fa-brands fa-whatsapp"></i>Whatsapp</a>
                                    </li>
                                </ul>
                            </div>


                            <div class="sidebar-card">
                                <div class="sidebar-card-title">
                                    <h5>Agent Details</h5>
                                </div>
                                <div class="user-active bg-white p-0">
                                    <div class="user-img">
                                        <a href="javascript:void(0);"><img class="avatar"
                                                src="{{ asset('storage/' . $property->agent->avatar) }}"
                                                alt="Image"></a>
                                    </div>
                                    <div class="user-name">
                                        <h4><a>{{ $property->agent->name }}</a></h4>
                                        <p>Rush 2 Homes property agent</p>
                                    </div>
                                </div>
                                <ul class="list-details">
                                    <li>No of Listings <span>05</span></li>
                                    <li>Email address<span>{{ $property->agent->email }}</span></li>
                                    <li>Memeber
                                        on<span>{{ \Carbon\Carbon::parse($property->agent->created_at)->format('d-m-Y') }}</span>
                                    </li>
                                    <li>Verification<span>Verified</span></li>
                                </ul>
                            </div>


                        </div>
                        <div class="resize-sensor"
                            style="position: absolute; inset: 0px; overflow: hidden; z-index: -1; visibility: hidden;">
                            <div class="resize-sensor-expand"
                                style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;">
                                <div
                                    style="position: absolute; left: 0px; top: 0px; transition: all 0s ease 0s; width: 330px; height: 5010px;">
                                </div>
                            </div>
                            <div class="resize-sensor-shrink"
                                style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;">
                                <div
                                    style="position: absolute; left: 0; top: 0; transition: 0s; width: 200%; height: 200%">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <livewire:similarListings :propertyType="$property->property_type_id" :propertyCategory="$property->propertyCategory->id" :city_id="$property->city_id" :district_id="$property->district_id">

        </div>
    </section>
@endsection
