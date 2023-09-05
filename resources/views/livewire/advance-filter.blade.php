<div class="row">
    <div class="col-xl-3 theiaStickySidebar">
        <div class="left-sidebar-widget property-sidebar">
            <form wire:submit.prevent="filterProperties">

                <div class="collapse-card">
                    <h4 class="card-title">
                        <a class="collapsed" data-bs-toggle="collapse" href="#advance-search" aria-expanded="false">Advanced
                            Search</a>
                    </h4>
                    <div id="advance-search" class="card-collapse collapse show">
                        <ul class="show-list">
                            <li class="review-form form-wrap">
                                <input type="text" wire:model="keyword" class="form-control"
                                    placeholder="Type Keywords" value="{{ $keyword }}">
                                <span class="form-icon">
                                    <i class="bx bx-search-alt"></i>
                                </span>
                            </li>
                            <li class="review-form">
                                <label for="select-district">Select district:</label>
                                <select class="select-dropdown" wire:model.live="getDistrict">
                                    @if ($district)
                                        <option selected>{{ $district }}</option>
                                    @else
                                        <option selected>Select a district</option>
                                    @endif
                                    @foreach ($districts as $district)
                                        <option value="{{ $district->name }}">{{ $district->name }}</option>
                                    @endforeach
                                </select>
                            </li>
                            <li class="review-form">
                                <label for="select-district">Select city:</label>
                                <select class="select-dropdown" wire:model="getCity">
                                    @if ($getCity)
                                        <option selected>{{ $getCity }}</option>
                                    @else
                                        <option selected>Select a city</option>
                                    @endif
                                    @foreach ($cities as $city_item)
                                        <option value="{{ $city_item->name }}">{{ $city_item->name }}</option>
                                    @endforeach
                                </select>
                            </li>
                            <li class="review-form">
                                <div class="input-row">
                                    <input type="text" wire:model="minPrice" class="form-control"
                                        placeholder="Min price">
                                    <input type="text" wire:model="maxPrice" class="form-control"
                                        placeholder="Max price">
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>


                <div class="collapse-card">
                    <h4 class="card-title">
                        <a class="collapsed" data-bs-toggle="collapse" href="#categiries"
                            aria-expanded="false">Categories</a>
                    </h4>
                    <div id="categiries" class="card-collapse collapse show">
                        <ul class="checkbox-list term-list">
                            <li>
                                <label class="custom_check">
                                    <input type="checkbox" name="username">
                                    <span class="checkmark"></span> Apartments (45)
                                </label>
                            </li>
                            <li>
                                <label class="custom_check">
                                    <input type="checkbox" name="username">
                                    <span class="checkmark"></span> Condos (32)
                                </label>
                            </li>
                            <li>
                                <label class="custom_check">
                                    <input type="checkbox" name="username">
                                    <span class="checkmark"></span> Houses (24)
                                </label>
                            </li>
                            <li>
                                <label class="custom_check">
                                    <input type="checkbox" name="username">
                                    <span class="checkmark"></span> Industrial (41)
                                </label>
                            </li>
                            <li>
                                <label class="custom_check">
                                    <input type="checkbox" name="username">
                                    <span class="checkmark"></span> Land (15)
                                </label>
                            </li>
                            <li>
                                <label class="custom_check">
                                    <input type="checkbox" name="username">
                                    <span class="checkmark"></span> Offices (11)
                                </label>
                            </li>
                        </ul>
                    </div>
                </div>


                <div class="collapse-card">
                    <h4 class="card-title">
                        <a class="collapsed" data-bs-toggle="collapse" href="#amenities"
                            aria-expanded="false">Amenities</a>
                    </h4>
                    <div id="amenities" class="card-collapse collapse show">
                        <ul class="checkbox-list amene-list">
                            <li>
                                <label class="custom_check">
                                    <input type="checkbox" name="username">
                                    <span class="checkmark"></span> Back Yard (35)
                                </label>
                            </li>
                            <li>
                                <label class="custom_check">
                                    <input type="checkbox" name="username">
                                    <span class="checkmark"></span> Central Air (32)
                                </label>
                            </li>
                            <li>
                                <label class="custom_check">
                                    <input type="checkbox" name="username">
                                    <span class="checkmark"></span> Chair Accessible (24)
                                </label>
                            </li>
                            <li>
                                <label class="custom_check">
                                    <input type="checkbox" name="username">
                                    <span class="checkmark"></span> Elevator (41)
                                </label>
                            </li>
                            <li>
                                <label class="custom_check">
                                    <input type="checkbox" name="username">
                                    <span class="checkmark"></span> Fireplace (15)
                                </label>
                            </li>
                            <li>
                                <label class="custom_check">
                                    <input type="checkbox" name="username">
                                    <span class="checkmark"></span> Front Yard (11)
                                </label>
                            </li>
                        </ul>
                    </div>
                </div>


                <div class="collapse-card">
                    <h4 class="card-title">
                        <a class="collapsed" data-bs-toggle="collapse" href="#pricing"
                            aria-expanded="false">Pricing</a>
                    </h4>
                    <div id="pricing" class="card-collapse collapse show">
                        <ul class="price-filter">
                            <li class="d-flex justify-content-between">
                                <div class="caption">
                                    <h5>Price Range : </h5>
                                    <span id="slider-range-value1"> </span> to
                                    <span id="slider-range-value2"> </span>
                                </div>
                            </li>
                            <li class="price-filter-inner">
                                <div id="slider-range" class="range-bottom"></div>
                            </li>
                        </ul>
                    </div>
                </div>


                <div class="apply-btn">
                    <button type="submit" class="btn btn-primary">Apply Filter</button>
                    <a href="javascript:void(0);" class="reset-btn">Reset Selection</a>
                </div>
            </form>
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
                                                <a href="#"
                                                    tabindex="-1">{{ $property->{$current_locale . '_title'} }}</a>
                                            </h3>
                                            <div class="product-amount">
                                                <h5>{{ $currencyFormat = $currencyType[$property->currency] . ' ' ?? '' }}<span>{{ $property->price }}</span>/
                                                    <span class="small-price-type">
                                                        {{ $formattedPriceType = $priceTypeOptions[$property->price_type] ?? '' }}</span>
                                                </h5>
                                            </div>
                                        </div>
                                        <p><i
                                                class="feather-map-pin"></i>{{ $property->{$current_locale . '_address'} }}
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


            {{-- Pagination --}}
            {{ $properties->links() }}

        </div>
    </div>

</div>
