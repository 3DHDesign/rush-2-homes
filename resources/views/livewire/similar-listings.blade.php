<div class="similar-list">
    <div class="section-heading">
        <h2>Similar Listings</h2>
        <div class="sec-line">
            <span class="sec-line1"></span>
            <span class="sec-line2"></span>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="blog-slider owl-carousel">

                @foreach ($similar_properties as $similar_property)
                    @php
                        $priceTypeOptions = [
                            'totalPrice' => 'total price',
                            'perPerch' => 'per perch',
                            'perAcre' => 'per acre',
                            'perMonth' => 'per month',
                            'perAnnum' => 'per annum',
                        ];
                        $formattedPrice = $similar_property->price;
                        
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
                    <div class="product-custom">
                        <div class="profile-widget">
                            <div class="doc-img">
                                <a href="#" class="property-img">
                                    <img class="img-fluid" alt="{{ $similar_property->title }}"
                                        src="{{ asset('storage/' . $similar_property->gallery[0]) }}">
                                </a>
                                <div class="product-amount">
                                    <span>{{ $price . ' ' . ($formattedPriceType = $priceTypeOptions[$similar_property->price_type] ?? '') }}</span>
                                </div>
                                @foreach ($similar_property->label as $labelId)
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
                                <div class="user-avatar">
                                    <img src="{{ asset('storage/' . $similar_property->agent->avatar) }}"
                                        alt="User">
                                </div>
                            </div>
                            <div class="pro-content">
                                <h3 class="title">
                                    <a href="#">{{ $similar_property->title }}</a>
                                </h3>
                                <p><i class="feather-map-pin"></i> {{ $similar_property->address }}
                                </p>
                                @if ($similar_property->bedrooms || $similar_property->bathrooms || $similar_property->land_size)
                                    <ul class="d-flex details">
                                        @if ($similar_property->bedrooms)
                                            <li>
                                                <img src="{{ asset('assets/img/icons/bed-icon.svg') }}" alt="bed-icon">
                                                {{ $similar_property->bedrooms }} Beds
                                            </li>
                                        @endif
                                        @if ($similar_property->bathrooms)
                                            <li>
                                                <img src="{{ asset('assets/img/icons/bath-icon.svg') }}"
                                                    alt="bath-icon">
                                                {{ $similar_property->bathrooms }} Bath
                                            </li>
                                        @endif
                                        @if ($similar_property->land_size)
                                            <li>
                                                <img src="{{ asset('assets/img/icons/building-icon.svg') }}"
                                                    alt="building-icon">
                                                {{ $similar_property->land_size }} {{ $similar_property->size_type }}
                                            </li>
                                        @endif
                                    </ul>
                                @endif
                                <ul class="property-category d-flex justify-content-between">
                                    <li>
                                        <span class="list">Listed on : </span>
                                        <span class="date">16 Jan 2023</span>
                                    </li>
                                    <li>
                                        <span class="category list">Category : </span>
                                        <span
                                            class="category-value date">{{ $similar_property->propertyCategory->en_name }}</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
</div>
