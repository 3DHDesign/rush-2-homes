<div>
    <li class="review-form">
        <label for="select-district" wire:model.live="districtInput">Select district:</label>
        <select class="select-dropdown">
            @foreach ($districts as $district)
                <option value="{{ $district->id }}">{{ $district->name }}</option>
            @endforeach
        </select>
    </li>
    <li class="review-form">
        <label for="select-district">Select city:</label>
        <select class="select-dropdown">
            <option value="">Select City</option>
            @foreach ($cities as $city)
                <option value="{{ $city->id }}">{{ $city->name }}</option>
            @endforeach
        </select>
    </li>
</div>
