<!DOCTYPE html>
<html lang="en">

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

    <link rel="stylesheet" href="{{ asset('assets/plugins/select2/css/select2.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>

    <div class="page-loader">
        <div class="page-loader-inner">
            <img src="assets/img/logo-loader.png" alt="Loader">
            <label><i class="fa-solid fa-circle"></i></label>
            <label><i class="fa-solid fa-circle"></i></label>
            <label><i class="fa-solid fa-circle"></i></label>
        </div>
    </div>


    <div class="main-wrapper">

        @include('frontend.components.header')

        @include('frontend.components.slider')


        <section class="feature-property-sec">
            <div class="container">
                <div class="section-heading text-center">
                    <h2>Featured Properties for Sales</h2>
                    <div class="sec-line">
                        <span class="sec-line1"></span>
                        <span class="sec-line2"></span>
                    </div>
                    <p>Hand-Picked selection of quality places</p>
                </div>
                <div class="feature-property-sec for-rent for-rent p-0 bg-transparent">
                    <div class="row">

                        <div class="col-lg-4 col-md-6">
                            <div class="product-custom">
                                <div class="profile-widget">
                                    <div class="doc-img">
                                        <a href="rent-details.html" class="property-img">
                                            <img class="img-fluid" alt="Property Image"
                                                src="assets/img/product/product-6.jpg">
                                        </a>
                                        <div class="product-amount">
                                            <h5><span>$2,200 </span> / Night</h5>
                                        </div>
                                        <div class="featured">
                                            <span>Featured</span>
                                        </div>
                                        <div class="new-featured">
                                            <span>New</span>
                                        </div>
                                    </div>
                                    <div class="pro-content">
                                        <div class="rating">
                                            <span class="rating-count">
                                                <i class="fa-solid fa-star checked"></i>
                                                <i class="fa-solid fa-star checked"></i>
                                                <i class="fa-solid fa-star checked"></i>
                                                <i class="fa-solid fa-star checked"></i>
                                                <i class="fa-solid fa-star checked"></i>
                                            </span>
                                            <span class="rating-review">Excellent</span>
                                        </div>
                                        <h3 class="title">
                                            <a href="rent-details.html">Beautiful Condo Room</a>
                                        </h3>
                                        <p><i class="feather-map-pin"></i> 318-S Oakley Blvd, Chicago, IL 60612, USA
                                        </p>
                                        <ul class="d-flex details">
                                            <li>
                                                <img src="assets/img/icons/bed-icon.svg" alt="bed-icon">
                                                4 Beds
                                            </li>
                                            <li>
                                                <img src="assets/img/icons/bath-icon.svg" alt="bath-icon">
                                                4 Baths
                                            </li>
                                            <li>
                                                <img src="assets/img/icons/building-icon.svg" alt="building-icon">
                                                35000 Sqft
                                            </li>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-lg-4 col-md-6">
                            <div class="product-custom">
                                <div class="profile-widget">
                                    <div class="doc-img">
                                        <a href="rent-details.html" class="property-img">
                                            <img class="img-fluid" alt="Property Image"
                                                src="assets/img/product/product-7.jpg">
                                        </a>
                                        <div class="product-amount">
                                            <h5><span>$1,400 </span> / Night</h5>
                                        </div>
                                        <div class="featured">
                                            <span>Featured</span>
                                        </div>
                                    </div>
                                    <div class="pro-content">
                                        <div class="rating">
                                            <span class="rating-count">
                                                <i class="fa-solid fa-star checked"></i>
                                                <i class="fa-solid fa-star checked"></i>
                                                <i class="fa-solid fa-star checked"></i>
                                                <i class="fa-solid fa-star checked"></i>
                                                <i class="fa-solid fa-star checked"></i>
                                            </span>
                                            <span class="rating-review">Excellent</span>
                                        </div>
                                        <h3 class="title">
                                            <a href="rent-details.html">Grand Mahaka</a>
                                        </h3>
                                        <p><i class="feather-map-pin"></i> 470 Park Ave S, New York, NY 10016</p>
                                        <ul class="d-flex details">
                                            <li>
                                                <img src="assets/img/icons/bed-icon.svg" alt="bed-icon">
                                                2 Beds
                                            </li>
                                            <li>
                                                <img src="assets/img/icons/bath-icon.svg" alt="bath-icon">
                                                1 Baths
                                            </li>
                                            <li>
                                                <img src="assets/img/icons/building-icon.svg" alt="building-icon">
                                                5000 Sqft
                                            </li>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-lg-4 col-md-6">
                            <div class="product-custom">
                                <div class="profile-widget">
                                    <div class="doc-img">
                                        <a href="rent-details.html" class="property-img">
                                            <img class="img-fluid" alt="Property Image"
                                                src="assets/img/product/product-8.jpg">
                                        </a>
                                        <div class="product-amount">
                                            <h5><span>$1,500 </span> / Night</h5>
                                        </div>
                                        <div class="featured">
                                            <span>Featured</span>
                                        </div>

                                    </div>
                                    <div class="pro-content">
                                        <div class="rating">
                                            <span class="rating-count">
                                                <i class="fa-solid fa-star checked"></i>
                                                <i class="fa-solid fa-star checked"></i>
                                                <i class="fa-solid fa-star checked"></i>
                                                <i class="fa-solid fa-star checked"></i>
                                                <i class="fa-solid fa-star checked"></i>
                                            </span>
                                            <span class="rating-review">Excellent</span>
                                        </div>
                                        <h3 class="title">
                                            <a href="rent-details.html">Royal Apartment</a>
                                        </h3>
                                        <p><i class="feather-map-pin"></i> 82-25 Parsons Blvd, Jamaica, NY 11432, USA
                                        </p>
                                        <ul class="d-flex details">
                                            <li>
                                                <img src="assets/img/icons/bed-icon.svg" alt="bed-icon">
                                                3 Beds
                                            </li>
                                            <li>
                                                <img src="assets/img/icons/bath-icon.svg" alt="bath-icon">
                                                3 Baths
                                            </li>
                                            <li>
                                                <img src="assets/img/icons/building-icon.svg" alt="building-icon">
                                                12000 Sqft
                                            </li>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-lg-4 col-md-6">
                            <div class="product-custom">
                                <div class="profile-widget">
                                    <div class="doc-img">
                                        <a href="rent-details.html" class="property-img">
                                            <img class="img-fluid" alt="Property Image"
                                                src="assets/img/product/product-9.jpg">
                                        </a>
                                        <div class="product-amount">
                                            <h5><span>$3,500 </span> / Night</h5>
                                        </div>
                                        <div class="featured">
                                            <span>Featured</span>
                                        </div>

                                    </div>
                                    <div class="pro-content">
                                        <div class="rating">
                                            <span class="rating-count">
                                                <i class="fa-solid fa-star checked"></i>
                                                <i class="fa-solid fa-star checked"></i>
                                                <i class="fa-solid fa-star checked"></i>
                                                <i class="fa-solid fa-star checked"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </span>
                                            <span class="rating-review">Excellent</span>
                                        </div>
                                        <h3 class="title">
                                            <a href="rent-details.html" tabindex="-1">Lunaria Residence</a>
                                        </h3>
                                        <p><i class="feather-map-pin"></i> 518-520 8th Ave, New York, NY 10018, USA</p>
                                        <ul class="d-flex details">
                                            <li>
                                                <img src="assets/img/icons/bed-icon.svg" alt="bed-icon">
                                                4 Beds
                                            </li>
                                            <li>
                                                <img src="assets/img/icons/bath-icon.svg" alt="bath-icon">
                                                2 Baths
                                            </li>
                                            <li>
                                                <img src="assets/img/icons/building-icon.svg" alt="building-icon">
                                                31000 Sqft
                                            </li>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-lg-4 col-md-6">
                            <div class="product-custom">
                                <div class="profile-widget">
                                    <div class="doc-img">
                                        <a href="rent-details.html" class="property-img">
                                            <img class="img-fluid" alt="Property Image"
                                                src="assets/img/product/product-10.jpg">
                                        </a>
                                        <div class="product-amount">
                                            <h5><span>$4,500 </span> / Night</h5>
                                        </div>
                                        <div class="featured">
                                            <span>Featured</span>
                                        </div>
                                    </div>
                                    <div class="pro-content">
                                        <div class="rating">
                                            <span class="rating-count">
                                                <i class="fa-solid fa-star checked"></i>
                                                <i class="fa-solid fa-star checked"></i>
                                                <i class="fa-solid fa-star checked"></i>
                                                <i class="fa-solid fa-star checked"></i>
                                                <i class="fa-solid fa-star checked"></i>
                                            </span>
                                            <span class="rating-review">Excellent</span>
                                        </div>
                                        <h3 class="title">
                                            <a href="rent-details.html">Grand Villa house</a>
                                        </h3>
                                        <p><i class="feather-map-pin"></i> 470 Park Ave S, New York, NY 10016</p>
                                        <ul class="d-flex details">
                                            <li>
                                                <img src="assets/img/icons/bed-icon.svg" alt="bed-icon">
                                                4 Beds
                                            </li>
                                            <li>
                                                <img src="assets/img/icons/bath-icon.svg" alt="bath-icon">
                                                2 Baths
                                            </li>
                                            <li>
                                                <img src="assets/img/icons/building-icon.svg" alt="building-icon">
                                                11000 Sqft
                                            </li>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-lg-4 col-md-6">
                            <div class="product-custom">
                                <div class="profile-widget">
                                    <div class="doc-img">
                                        <a href="rent-details.html" class="property-img">
                                            <img class="img-fluid" alt="Property Image"
                                                src="assets/img/product/product-11.jpg">
                                        </a>
                                        <div class="product-amount">
                                            <h5><span>$2,400 </span> / Night</h5>
                                        </div>
                                        <div class="featured">
                                            <span>Featured</span>
                                        </div>

                                    </div>
                                    <div class="pro-content">
                                        <div class="rating">
                                            <span class="rating-count">
                                                <i class="fa-solid fa-star checked"></i>
                                                <i class="fa-solid fa-star checked"></i>
                                                <i class="fa-solid fa-star checked"></i>
                                                <i class="fa-solid fa-star checked"></i>
                                                <i class="fa-solid fa-star checked"></i>
                                            </span>
                                            <span class="rating-review">Excellent</span>
                                        </div>
                                        <h3 class="title">
                                            <a href="rent-details.html">Stephen Alexander Homes</a>
                                        </h3>
                                        <p><i class="feather-map-pin"></i> 122 N Morgan St, Chicago, IL 60607, USA</p>
                                        <ul class="d-flex details">
                                            <li>
                                                <img src="assets/img/icons/bed-icon.svg" alt="bed-icon">
                                                1 Beds
                                            </li>
                                            <li>
                                                <img src="assets/img/icons/bath-icon.svg" alt="bath-icon">
                                                1 Baths
                                            </li>
                                            <li>
                                                <img src="assets/img/icons/building-icon.svg" alt="building-icon">
                                                7000 Sqft
                                            </li>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="product-custom">
                                <div class="profile-widget">
                                    <div class="doc-img">
                                        <a href="rent-details.html" class="property-img">
                                            <img class="img-fluid" alt="Property Image"
                                                src="assets/img/product/product-10.jpg">
                                        </a>
                                        <div class="product-amount">
                                            <h5><span>$4,500 </span> / Night</h5>
                                        </div>
                                        <div class="featured">
                                            <span>Featured</span>
                                        </div>
                                    </div>
                                    <div class="pro-content">
                                        <div class="rating">
                                            <span class="rating-count">
                                                <i class="fa-solid fa-star checked"></i>
                                                <i class="fa-solid fa-star checked"></i>
                                                <i class="fa-solid fa-star checked"></i>
                                                <i class="fa-solid fa-star checked"></i>
                                                <i class="fa-solid fa-star checked"></i>
                                            </span>
                                            <span class="rating-review">Excellent</span>
                                        </div>
                                        <h3 class="title">
                                            <a href="rent-details.html">Grand Villa house</a>
                                        </h3>
                                        <p><i class="feather-map-pin"></i> 470 Park Ave S, New York, NY 10016</p>
                                        <ul class="d-flex details">
                                            <li>
                                                <img src="assets/img/icons/bed-icon.svg" alt="bed-icon">
                                                4 Beds
                                            </li>
                                            <li>
                                                <img src="assets/img/icons/bath-icon.svg" alt="bath-icon">
                                                2 Baths
                                            </li>
                                            <li>
                                                <img src="assets/img/icons/building-icon.svg" alt="building-icon">
                                                11000 Sqft
                                            </li>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="product-custom">
                                <div class="profile-widget">
                                    <div class="doc-img">
                                        <a href="rent-details.html" class="property-img">
                                            <img class="img-fluid" alt="Property Image"
                                                src="assets/img/product/product-7.jpg">
                                        </a>
                                        <div class="product-amount">
                                            <h5><span>$1,400 </span> / Night</h5>
                                        </div>
                                        <div class="featured">
                                            <span>Featured</span>
                                        </div>
                                    </div>
                                    <div class="pro-content">
                                        <div class="rating">
                                            <span class="rating-count">
                                                <i class="fa-solid fa-star checked"></i>
                                                <i class="fa-solid fa-star checked"></i>
                                                <i class="fa-solid fa-star checked"></i>
                                                <i class="fa-solid fa-star checked"></i>
                                                <i class="fa-solid fa-star checked"></i>
                                            </span>
                                            <span class="rating-review">Excellent</span>
                                        </div>
                                        <h3 class="title">
                                            <a href="rent-details.html">Grand Mahaka</a>
                                        </h3>
                                        <p><i class="feather-map-pin"></i> 470 Park Ave S, New York, NY 10016</p>
                                        <ul class="d-flex details">
                                            <li>
                                                <img src="assets/img/icons/bed-icon.svg" alt="bed-icon">
                                                2 Beds
                                            </li>
                                            <li>
                                                <img src="assets/img/icons/bath-icon.svg" alt="bath-icon">
                                                1 Baths
                                            </li>
                                            <li>
                                                <img src="assets/img/icons/building-icon.svg" alt="building-icon">
                                                5000 Sqft
                                            </li>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="product-custom">
                                <div class="profile-widget">
                                    <div class="doc-img">
                                        <a href="rent-details.html" class="property-img">
                                            <img class="img-fluid" alt="Property Image"
                                                src="assets/img/product/product-9.jpg">
                                        </a>
                                        <div class="product-amount">
                                            <h5><span>$3,500 </span> / Night</h5>
                                        </div>
                                        <div class="featured">
                                            <span>Featured</span>
                                        </div>

                                    </div>
                                    <div class="pro-content">
                                        <div class="rating">
                                            <span class="rating-count">
                                                <i class="fa-solid fa-star checked"></i>
                                                <i class="fa-solid fa-star checked"></i>
                                                <i class="fa-solid fa-star checked"></i>
                                                <i class="fa-solid fa-star checked"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </span>
                                            <span class="rating-review">Excellent</span>
                                        </div>
                                        <h3 class="title">
                                            <a href="#" tabindex="-1">Lunaria Residence</a>
                                        </h3>
                                        <p><i class="feather-map-pin"></i> 518-520 8th Ave, New York, NY 10018, USA</p>
                                        <ul class="d-flex details">
                                            <li>
                                                <img src="assets/img/icons/bed-icon.svg" alt="bed-icon">
                                                4 Beds
                                            </li>
                                            <li>
                                                <img src="{{ asset('assets/img/icons/bath-icon.svg') }}"
                                                    alt="bath-icon">
                                                2 Baths
                                            </li>
                                            <li>
                                                <img src="{{ asset('assets/img/icons/building-icon.svg') }}"
                                                    alt="building-icon">
                                                31000 Sqft
                                            </li>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="bg-imgs">
                <img src="{{ asset('assets/img/bg/price-bg.png') }}" class="bg-01" alt="icon">
                <img src="{{ asset('assets/img/icons/blue-circle.svg') }}" class="bg-02" alt="icon">
                <img src="{{ asset('assets/img/icons/red-circle.svg') }}" class="bg-03" alt="icon">
            </div>
        </section>
        <div class="aos aos-init aos-animate"></div>





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
</body>
<script src="{{ asset('assets/js/jquery-3.6.4.min.js') }}"></script>

<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>

<script src="{{ asset('assets/js/feather.min.js') }}"></script>

<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>

<script src="{{ asset('assets/js/aos.js') }}"></script>

<script src="{{ asset('assets/plugins/select2/js/select2.min.js') }}"></script>

<script src="{{ asset('assets/js/waypoints.js') }}"></script>
<script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>

<script src="{{ asset('assets/js/script.js') }}"></script>
</body>

</html>
