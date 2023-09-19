<header class="header header-fix">

    <nav class="navbar navbar-expand-lg header-nav">
        <div class="navbar-header">
            <a id="mobile_btn" href="javascript:void(0);">
                <span class="bar-icon">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
            </a>
            <a href="{{ route('home') }}" class="navbar-brand logo">
                <img src="{{ asset('assets/img/logo.png') }}" class="img-fluid" style="height: 5vh;" alt="Logo">
            </a>
        </div>
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
                <li class="{{ Route::is('sales.property.listing') ? 'active' : '' }}">
                    <a href="{{ route('sales.property.listing') }}">{{ __('homepage.header.sell') }}</a>
                </li>
                <li class="{{ Route::is('rent.property.listing', ['propertyType' => 'For Rental']) ? 'active' : '' }}">
                    <a
                        href="{{ route('rent.property.listing', ['propertyType' => 'For Rental']) }}">{{ __('homepage.header.rent') }}</a>
                </li>
                <li class="">
                    <a
                        href="{{ route('sales.property.listing', ['propertyType' => 'For Sales', 'propertyCategory' => 'Land']) }}">{{ __('homepage.header.land') }}</a>
                </li>
                <li class="{{ Route::is('about') ? 'active' : '' }}">
                    <a href="{{ route('about') }}">{{ __('homepage.header.about') }}</a>
                </li>

                <li class="{{ Route::is('contact') ? 'active' : '' }}"><a
                        href="{{ route('contact') }}">{{ __('homepage.header.contact_us') }}</a></li>
                <li class="searchbar">
                    <a href="javascript:void(0);">
                        <img src="{{ asset('assets/img/icons/search-icon.svg') }}" alt="img">
                    </a>
                </li>

            </ul>
        </div>
        <ul class="nav header-navbar-rht">

            <li class="login-link"><a href="{{ route('lang', ['locale' => 'en']) }}">English</a>
            </li>|&nbsp;
            <li class="login-link"><a href="{{ route('lang', ['locale' => 'si']) }}">Sinhala</a>
            </li>|&nbsp;
            <li class="login-link"><a href="{{ route('lang', ['locale' => 'ta']) }}">Tamil</a>
            </li>

            <livewire:login-buttons />
        </ul>
    </nav>
</header>
