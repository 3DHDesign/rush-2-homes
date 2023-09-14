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
                    <label for="select-district">Select Category:</label>
                    <select class="select-dropdown" wire:model.live="getCategory">
                        <option value="">Select Category</option>
                        @foreach ($categoties as $category)
                            <option value="{{ $category->id }}" @if ($categoryName == $category->name) selected @endif>
                                {{ $category->name }}</option>
                        @endforeach
                    </select>
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
                        <input type="text" class="form-control" wire:model="getMinPrice" placeholder="Min price">
                        <input type="text" class="form-control" wire:model="getMaxPrice" placeholder="Max price">
                    </div>
                </li>
                <li class="review-form">
                    <button type="submit" class="btn btn-primary" wire:click.prevent="submitForm">Apply Filter</button>
                </li>
                <div class="apply-btn">
                    <a type="submit" wire:click.prevent="resetForm" class="reset-btn">Reset Selection</a>
                </div>
            </ul>
        </div>
        <div class="sidebar-img-slider owl-carousel owl-loaded owl-drag" style="margin-top: 5vh;">



            <div class="owl-stage-outer">
                <div class="owl-stage"
                    style="transform: translate3d(-880px, 0px, 0px); transition: all 0s ease 0s; width: 3080px;">
                    <div class="owl-item cloned" style="width: 416px; margin-right: 24px;">
                        <div class="slide-img-card">
                            <div class="slide-img">
                                <img src="{{ asset('assets/images/ads/ad1.jpg') }}" alt="rush2homes ad 1">
                            </div>
                        </div>
                    </div>
                    <div class="owl-item cloned" style="width: 416px; margin-right: 24px;">
                        <div class="slide-img-card">
                            <div class="slide-img">
                                <img src="{{ asset('assets/images/ads/ad2.jpg') }}" alt="rush2homes ad 2">
                            </div>
                        </div>
                    </div>
                    <div class="owl-item cloned" style="width: 416px; margin-right: 24px;">
                        <div class="slide-img-card">
                            <div class="slide-img">
                                <img src="{{ asset('assets/images/ads/ad3.jpg') }}" alt="rush2homes ad 3">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><i
                        class="fa-solid fa-arrow-left"></i></button><button type="button" role="presentation"
                    class="owl-next"><i class="fa-solid fa-arrow-right"></i></button></div>
            <div class="owl-dots disabled"></div>
        </div>
    </div>


</div>
