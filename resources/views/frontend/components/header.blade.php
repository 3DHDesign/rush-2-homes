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
            <a href="index.html" class="navbar-brand logo">
                <img src="assets/img/logo.png" class="img-fluid" style="height: 5vh;" alt="Logo">
            </a>
        </div>
        <div class="main-menu-wrapper">
            <div class="menu-header">
                <a href="index.html" class="menu-logo">
                    <img src="assets/img/logo.png" style="height: 5vh;" class="img-fluid" alt="Logo">
                </a>
                <a id="menu_close" class="menu-close" href="javascript:void(0);">
                    <i class="fas fa-times"></i>
                </a>
            </div>
            <ul class="main-nav">
                <li class="active">
                    <a href="index.html">Home</a>
                </li>
                <li class="">
                    <a href="index.html">{{ __('homepage.header.sell') }}</a>
                </li>
                <li class="">
                    <a href="index.html">Buy</a>
                </li>
                <li class="">
                    <a href="index.html">Sell</a>
                </li>

                <li><a href="#">Contact Us</a></li>
                <li class="searchbar">
                    <a href="javascript:void(0);">
                        <img src="assets/img/icons/search-icon.svg" alt="img">
                    </a>
                </li>
                <li class="login-link"><a href="#">Sign Up</a></li>
                <li class="login-link"><a href="#">Sign In</a></li>
            </ul>
        </div>
        <ul class="nav header-navbar-rht">
            <li class="login-link"><a
                    href="{{ route(\Illuminate\Support\Facades\Route::currentRouteName(), ['locale' => 'en']) }}">English</a>
            </li>|&nbsp;
            <li class="login-link"><a
                    href="{{ route(\Illuminate\Support\Facades\Route::currentRouteName(), ['locale' => 'si']) }}">Sinhala</a>
            </li>|&nbsp;
            <li class="login-link"><a
                    href="{{ route(\Illuminate\Support\Facades\Route::currentRouteName(), ['locale' => 'ta']) }}">Tamil</a>
            </li>
            <li class="new-property-btn">
                <a href="#">
                    <i class="bx bxs-plus-circle"></i> Add New Property
                </a>
            </li>

            <!-- <li>
                <a href="#" class="btn btn-primary"><i class="feather-user-plus"></i>Sign Up</a>
            </li>
            <li>
                <a href="#" class="btn sign-btn"><i class="feather-unlock"></i>Sign In</a>
            </li> -->
        </ul>
    </nav>
</header>
