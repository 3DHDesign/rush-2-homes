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
                                    <span style="background-color: {{ $label->color }};">{{ $label->name }}</span>
                                </div>
                            @endif
                            @if ($label->id == 1)
                                <div class="new-featured">
                                    <span style="background-color: {{ $label->color }};">{{ $label->name }}</span>
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


    {{-- Pagination --}}
    {{-- {{ $properties->links() }} --}}

</div>
