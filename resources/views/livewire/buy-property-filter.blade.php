<form action="{{ route('sales.property.listing') }}">
    <div class="banner-property-info">
        <div class="banner-property-grid">
            <input type="text" class="form-control" placeholder="Enter Keyword" wire:model="keyword">
        </div>
        <div class="banner-property-grid">
            <select class="select-dropdown" wire:model="propertyCategory">
                <option selected>Select Property Category</option>
                @foreach ($propertyCategory as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="banner-property-grid">
            <select wire:model.live="getDistrict" class="select-dropdown">
                <option selected>Select District</option>
                @foreach ($districts as $district)
                    <option value="{{ $district->id }}">{{ $district->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="banner-property-grid">
            <select wire:model="city" class="select-dropdown">
                <option>Select City</option>
                @foreach ($cities as $city_item)
                    <option value="{{ $city_item->id }}">{{ $city_item->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="banner-property-grid">
            <input type="text" wire:model="minPrice" class="form-control" placeholder="Min Price">
        </div>
        <div class="banner-property-grid">
            <input type="text" wire:model="maxPrice" class="form-control" placeholder="Max Price">
        </div>
        <div class="banner-property-grid" wire:model="search">
            <button type="submit" class="btn-primary"><span><i class="feather-search"></i></span></button>
        </div>
    </div>
</form>
