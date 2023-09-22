<div class="main-menu-wrapper">
    <div class="menu-header">
        <a href="#" class="menu-logo">
            <img src="{{ asset('assets/img/logo.png') }}" style="height: 5vh;" class="img-fluid" alt="Logo">
        </a>
        <a id="menu_close" class="menu-close" href="javascript:void(0);">
            <i class="fas fa-times"></i>
        </a>
    </div>
    <ul class="main-nav">
        <li class="{{ Route::is('home') ? 'active' : '' }}">
            <a href="{{ route('home') }}">{{ __('homepage.header.home') }}</a>
        </li>
        <li class="has-submenu {{ Route::is('sales.property.listing') ? 'active' : '' }}">
            <a href="{{ route('sales.property.listing') }}">{{ __('homepage.header.sell') }} <i
                    class="fas fa-chevron-down"></i></a>
            <ul class="submenu">
                @foreach ($categories as $category)
                    <li><a
                            href="{{ route('sales.property.listing', ['propertyType' => 'For Sales', 'propertyCategory' => $category->en_name]) }}">{{ $category->name }}</a>
                    </li>
                @endforeach
            </ul>
        </li>

        <li
            class="has-submenu {{ Route::is('rent.property.listing', ['propertyType' => 'For Rental']) ? 'active' : '' }}">
            <a href="{{ route('rent.property.listing', ['propertyType' => 'For Rental']) }}">{{ __('homepage.header.rent') }}<i
                    class="fas fa-chevron-down"></i></a>
            <ul class="submenu">
                @foreach ($categories as $category)
                    <li><a
                            href="{{ route('rent.property.listing', ['propertyType' => 'For Sales', 'propertyCategory' => $category->en_name]) }}">{{ $category->name }}</a>
                    </li>
                @endforeach
            </ul>
        </li>
        <li>
            <a
                href="{{ route('sales.property.listing', ['propertyType' => 'For Sales', 'propertyCategory' => 'Land']) }}">{{ __('homepage.header.land') }}</a>
        </li>
        <li class="{{ Route::is('about') ? 'active' : '' }}">
            <a href="{{ route('about') }}">{{ __('homepage.header.about') }}</a>
        </li>

        <li class="{{ Route::is('contact') ? 'active' : '' }}"><a
                href="{{ route('contact') }}">{{ __('homepage.header.contact_us') }}</a></li>
    </ul>
</div>
