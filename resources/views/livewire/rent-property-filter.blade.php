<form action="#">
    <div class="banner-property-info">
        <div class="banner-property-grid">
            <input type="text" class="form-control"
                placeholder="{{ __('homepage.homepage_filter.rent_filter.enter_keyword') }}" wire:model="keyword">
        </div>
        <div class="banner-property-grid">
            <select class="select-dropdown" wire:model="propertyCategory">
                <option selected>{{ __('homepage.homepage_filter.rent_filter.select_property_category') }}</option>
                @foreach ($propertyCategory as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="banner-property-grid">
            <select wire:model.live="getDistrict" class="select-dropdown">
                <option selected>{{ __('homepage.homepage_filter.rent_filter.select_district') }}</option>
                @foreach ($districts as $district)
                    <option value="{{ $district->id }}">{{ $district->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="banner-property-grid">
            <select wire:model="city" class="select-dropdown">
                <option>{{ __('homepage.homepage_filter.rent_filter.select_city') }}</option>
                @foreach ($cities as $city_item)
                    <option value="{{ $city_item->id }}">{{ $city_item->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="banner-property-grid">
            <input type="text" wire:model="minPrice" class="form-control"
                placeholder="{{ __('homepage.homepage_filter.rent_filter.min_price') }}">
        </div>
        <div class="banner-property-grid">
            <input type="text" wire:model="maxPrice" class="form-control"
                placeholder="{{ __('homepage.homepage_filter.rent_filter.max_price') }}">
        </div>
        <div class="banner-property-grid" wire:model="search">
            <a href="#" class="btn-primary"><span><i class="feather-search"></i></span></a>
        </div>
    </div>
</form>
