<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
    <title>Rush 2 Homes</title>

    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/all.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/feather.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/plugins/boxicons/css/boxicons.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/plugins/fancybox/jquery.fancybox.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/plugins/select2/css/select2.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    @livewireStyles
    @stack('style')
</head>

<body>

    {{-- <div class="page-loader">
        <div class="page-loader-inner">
            <img src="assets/img/logo-loader.png" alt="Loader">
            <label><i class="fa-solid fa-circle"></i></label>
            <label><i class="fa-solid fa-circle"></i></label>
            <label><i class="fa-solid fa-circle"></i></label>
        </div>
    </div> --}}


    <div class="main-wrapper">

        @include('frontend.components.header')

        @yield('content')


        @include('frontend.components.footer')

        <div class="search-popup js-search-popup ">
            <a href="javascript:void(0);" class="close-button" id="search-close" aria-label="Close search">
                <i class="fa fa-close"></i>
            </a>
            <div class="popup-inner">
                <div class="inner-container">
                    <form class="search-form" id="search-form" action="#">
                        <h3>What Are You Looking for?</h3>
                        <div class="search-form-box flex">
                            <input type="text" class="search-input" placeholder="Type a  Keyword...."
                                id="search-input" aria-label="Type to search" role="searchbox" autocomplete="off">
                            <button type="submit" class="search-icon"><i class="bx bx-search"></i></button>
                        </div>
                        <h5>Popular Properties</h5>
                        <ul>
                            <li><a href="#">Beautiful Condo Room</a></li>
                            <li><a href="#">Royal Apartment</a></li>
                            <li><a href="#">Grand Villa House</a></li>
                            <li><a href="#">Grand Mahaka</a></li>
                            <li><a href="#">Lunaria Residence</a></li>
                            <li><a href="#">Stephen Alexander Homes</a></li>
                        </ul>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <div class="progress-wrap active-progress">
        <svg class="progress-circle svg-content" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"></path>
        </svg>
    </div>
    @livewireScripts
</body>
<script src="{{ asset('assets/js/jquery-3.6.4.min.js') }}"></script>

<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>

<script src="{{ asset('assets/js/feather.min.js') }}"></script>

<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>

<script src="{{ asset('assets/js/aos.js') }}"></script>

<script src="{{ asset('assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js') }}"></script>

<script src="{{ asset('assets/plugins/theia-sticky-sidebar/ResizeSensor.js') }}"></script>

<script src="{{ asset('assets/plugins/select2/js/select2.min.js') }}"></script>

<script src="{{ asset('assets/js/waypoints.js') }}"></script>
<script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('assets/plugins/fancybox/jquery.fancybox.min.js') }}"></script>
<script src="{{ asset('assets/plugins/slick/slick.js') }}"></script>

<script src="{{ asset('assets/js/script.js') }}"></script>
@stack('script')
</body>

</html>
