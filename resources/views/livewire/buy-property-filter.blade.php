<form wire:submit.prevent="searchFilter">
    <div class="banner-property-input-grid-info">
        <div class="property-input-grid">
            <input type="text" class="form-control"
                placeholder="{{ __('homepage.homepage_filter.buy_filter.enter_keyword') }}" wire:model="keyword">
        </div>
        <div class="property-input-grid">
            <select class="select-dropdown" wire:model="propertyCategorySet">
                <option selected>{{ __('homepage.homepage_filter.buy_filter.select_property_category') }}</option>
                @foreach ($propertyCategory as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="property-input-grid">
            <select wire:model.live="getDistrict" class="select-dropdown">
                <option selected>{{ __('homepage.homepage_filter.buy_filter.select_district') }}</option>
                @foreach ($districts as $district)
                    <option value="{{ $district->id }}">{{ $district->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="property-input-grid">
            <select wire:model="city" class="select-dropdown">
                <option>{{ __('homepage.homepage_filter.buy_filter.select_city') }}</option>
                @foreach ($cities as $city_item)
                    <option value="{{ $city_item->id }}">{{ $city_item->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="property-input-grid">
            <input type="text" wire:model="minPrice" class="form-control"
                placeholder="{{ __('homepage.homepage_filter.buy_filter.min_price') }}">
        </div>
        <div class="property-input-grid">
            <input type="text" wire:model="maxPrice" class="form-control"
                placeholder="{{ __('homepage.homepage_filter.buy_filter.max_price') }}">
        </div>
        <div class="property-input-grid" wire:model="search">
            <button type="submit" class="btn-primary"><span><i class="feather-search"></i></span></button>
        </div>
    </div>
</form>
