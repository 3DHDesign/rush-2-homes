<div>
    <div class="collapse-card">
        <h4 class="card-title">
            <a class="collapsed" data-bs-toggle="collapse" href="#advance-search" aria-expanded="false">Advanced
                Search</a>
        </h4>
        <div id="advance-search" class="card-collapse collapse show">
            <ul class="show-list">
                <li class="review-form form-wrap">
                    <input type="text" class="form-control" wire:model="keyword" wire:keyup.enter="submitForm"
                        placeholder="Type Keywords" value="">
                    <span class="form-icon">
                        <i class="bx bx-search-alt"></i>
                    </span>
                </li>
                <li class="review-form">
                    <label for="select-district">Select district:</label>
                    <select class="select-dropdown" wire:model.live="getDistrict">
                        <option value="">Select District</option>
                        @foreach ($districts as $district)
                            <option value="{{ $district->id }}" @if ($districName == $district->name) selected @endif>
                                {{ $district->name }}</option>
                        @endforeach
                    </select>
                </li>
                <li class="review-form">
                    <label for="select-district">Select city:</label>
                    <select class="select-dropdown" wire:model.live="getCity">
                        <option value="">Select City</option>
                        @foreach ($cities as $city)
                            <option value="{{ $city->id }}" @if ($cityName == $city->en_name) selected @endif>
                                @if (app()->getLocale() == 'en' && !empty($city->name_en))
                                    {{ $city->name_en }}
                                @elseif(app()->getLocale() == 'si' && !empty($city->name_si))
                                    {{ $city->name_si }}
                                @elseif(app()->getLocale() == 'ta' && !empty($city->name_ta))
                                    {{ $city->name_ta }}
                                @endif
                            </option>
                        @endforeach
                    </select>
                </li>
                <li class="review-form">
                    <div class="input-row">
                        <input type="text" class="form-control" placeholder="Min price">
                        <input type="text" class="form-control" placeholder="Max price">
                    </div>
                </li>
            </ul>
            <button type="submit" class="btn btn-primary" wire:click.prevent="submitForm">Apply Filter</button>
        </div>
    </div>


    <div class="collapse-card">
        <h4 class="card-title">
            <a class="collapsed" data-bs-toggle="collapse" href="#categiries" aria-expanded="false">Categories</a>
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
            <a class="collapsed" data-bs-toggle="collapse" href="#amenities" aria-expanded="false">Amenities</a>
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
            <a class="collapsed" data-bs-toggle="collapse" href="#pricing" aria-expanded="false">Pricing</a>
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
        <button type="submit" class="btn btn-primary" wire:click.prevent="submitForm">Apply Filter</button>
        <a href="javascript:void(0);" class="reset-btn">Reset Selection</a>
    </div>

</div>
