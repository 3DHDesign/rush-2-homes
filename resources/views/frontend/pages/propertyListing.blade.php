@extends('components.layouts.master')
@section('content')
    <style>
        .select-dropdown {
            background: #f6f6f9;
            border: 1px solid #f4f4f4;
            font-size: 16px;
            border-radius: 10px;
            min-height: 60px;
            width: 100%;
            padding: 17px;
        }
    </style>
    <div class="breadcrumb">
        <div class="container">
            <div class="bread-crumb-head">
                <div class="breadcrumb-title">
                    <h2>Buy Property List with Sidebar</h2>
                </div>
                <div class="breadcrumb-list">
                    <ul>
                        <li><a href="index.html">Home </a></li>
                        <li>Buy Property List with Sidebar</li>
                    </ul>
                </div>
            </div>
            <div class="breadcrumb-border-img">
                <img src="{{ asset('assets/img/bg/line-bg.png') }}" class="img-fluid" alt>
            </div>
        </div>
    </div>


    <div class="property-sidebar">
        <section class="feature-property-sec for-rent content">
            <div class="container">

                <div class="showing-result-head">
                    <div class="row align-items-center">
                        <div class="col-lg-3">
                            <div class="result-show">
                                <h5>Showing result <span>06</span> of <span>125</span></h5>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="sort-result">
                                <div class="sort-by grid-head">
                                    <div>
                                        <p>Sort By</p>
                                    </div>
                                    <div class="review-form">
                                        <select class="select">
                                            <option value="0">Default</option>
                                            <option value="1">A-Z</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="price-range grid-head">
                                    <div>
                                        <p>Price Range</p>
                                    </div>
                                    <div class="review-form">
                                        <select class="select">
                                            <option>Low to High</option>
                                            <option>High to Low</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="grid-list-view">
                                    <ul>
                                        <li><a href="buy-property-grid-sidebar.html"><i class="bx bx-grid"></i></a>
                                        </li>
                                        <li><a href="#" class="active"><i class="bx bx-list-ul"></i></a></li>
                                        <li><a href="buy-list-map.html"><i class="bx bxs-map"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">

                    <div class="col-xl-3 theiaStickySidebar">
                        <div class="left-sidebar-widget property-sidebar">

                            <div class="collapse-card">
                                <h4 class="card-title">
                                    <a class="collapsed" data-bs-toggle="collapse" href="#advance-search"
                                        aria-expanded="false">Advanced Search</a>
                                </h4>
                                <div id="advance-search" class="card-collapse collapse show">
                                    <ul class="show-list">
                                        <li class="review-form form-wrap">
                                            <input type="text" class="form-control" placeholder="Type Keywords">
                                            <span class="form-icon">
                                                <i class="bx bx-search-alt"></i>
                                            </span>
                                        </li>
                                        <li class="review-form">
                                            <select class="select">
                                                <option>Select Location</option>
                                                <option>Chicago</option>
                                                <option>Newyork</option>
                                            </select>
                                        </li>
                                        <li class="review-form">
                                            <select class="select-dropdown">
                                                <option>No of Bedrooms</option>
                                                <option>4</option>
                                                <option>2</option>
                                            </select>
                                        </li>
                                        <li class="review-form">
                                            <select class="select">
                                                <option>No of Bathrooms</option>
                                                <option>3</option>
                                                <option>2</option>
                                            </select>
                                        </li>
                                        <li class="review-form">
                                            <input type="text" class="form-control" placeholder="Min Sqft">
                                        </li>
                                    </ul>
                                </div>
                            </div>


                            <div class="collapse-card">
                                <h4 class="card-title">
                                    <a class="collapsed" data-bs-toggle="collapse" href="#categiries"
                                        aria-expanded="false">Categories</a>
                                </h4>
                                <div id="categiries" class="card-collapse collapse show">
                                    <ul class="checkbox-list term-list">
                                        <li>
                                            <label class="custom_check">
                                                <input type="checkbox" name="username">
                                                <span class="checkmark"></span> Apartments (45)
                                            </label>
                                        </li>
                                        <li>
                                            <label class="custom_check">
                                                <input type="checkbox" name="username">
                                                <span class="checkmark"></span> Condos (32)
                                            </label>
                                        </li>
                                        <li>
                                            <label class="custom_check">
                                                <input type="checkbox" name="username">
                                                <span class="checkmark"></span> Houses (24)
                                            </label>
                                        </li>
                                        <li>
                                            <label class="custom_check">
                                                <input type="checkbox" name="username">
                                                <span class="checkmark"></span> Industrial (41)
                                            </label>
                                        </li>
                                        <li>
                                            <label class="custom_check">
                                                <input type="checkbox" name="username">
                                                <span class="checkmark"></span> Land (15)
                                            </label>
                                        </li>
                                        <li>
                                            <label class="custom_check">
                                                <input type="checkbox" name="username">
                                                <span class="checkmark"></span> Offices (11)
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>


                            <div class="collapse-card">
                                <h4 class="card-title">
                                    <a class="collapsed" data-bs-toggle="collapse" href="#amenities"
                                        aria-expanded="false">Amenities</a>
                                </h4>
                                <div id="amenities" class="card-collapse collapse show">
                                    <ul class="checkbox-list amene-list">
                                        <li>
                                            <label class="custom_check">
                                                <input type="checkbox" name="username">
                                                <span class="checkmark"></span> Back Yard (35)
                                            </label>
                                        </li>
                                        <li>
                                            <label class="custom_check">
                                                <input type="checkbox" name="username">
                                                <span class="checkmark"></span> Central Air (32)
                                            </label>
                                        </li>
                                        <li>
                                            <label class="custom_check">
                                                <input type="checkbox" name="username">
                                                <span class="checkmark"></span> Chair Accessible (24)
                                            </label>
                                        </li>
                                        <li>
                                            <label class="custom_check">
                                                <input type="checkbox" name="username">
                                                <span class="checkmark"></span> Elevator (41)
                                            </label>
                                        </li>
                                        <li>
                                            <label class="custom_check">
                                                <input type="checkbox" name="username">
                                                <span class="checkmark"></span> Fireplace (15)
                                            </label>
                                        </li>
                                        <li>
                                            <label class="custom_check">
                                                <input type="checkbox" name="username">
                                                <span class="checkmark"></span> Front Yard (11)
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>


                            <div class="collapse-card">
                                <h4 class="card-title">
                                    <a class="collapsed" data-bs-toggle="collapse" href="#pricing"
                                        aria-expanded="false">Pricing</a>
                                </h4>
                                <div id="pricing" class="card-collapse collapse show">
                                    <ul class="price-filter">
                                        <li class="d-flex justify-content-between">
                                            <div class="caption">
                                                <h5>Price Range : </h5>
                                                <span id="slider-range-value1"> </span> to
                                                <span id="slider-range-value2"> </span>
                                            </div>
                                        </li>
                                        <li class="price-filter-inner">
                                            <div id="slider-range" class="range-bottom"></div>
                                        </li>
                                    </ul>
                                </div>
                            </div>


                            <div class="collapse-card">
                                <h4 class="card-title">
                                    <a class="collapsed" data-bs-toggle="collapse" href="#review"
                                        aria-expanded="false">Reviews</a>
                                </h4>
                                <div id="review" class="card-collapse collapse show">
                                    <ul class="price-filter">
                                        <li>
                                            <label class="custom_check">
                                                <input type="checkbox" name="username">
                                                <span class="checkmark"></span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="custom_check">
                                                <input type="checkbox" name="username">
                                                <span class="checkmark"></span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="custom_check">
                                                <input type="checkbox" name="username">
                                                <span class="checkmark"></span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="custom_check">
                                                <input type="checkbox" name="username">
                                                <span class="checkmark"></span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="custom_check">
                                                <input type="checkbox" name="username">
                                                <span class="checkmark"></span>
                                                <i class="fa fa-star"></i>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>


                            <div class="apply-btn">
                                <button type="submit" class="btn btn-primary">Apply Filter</button>
                                <a href="javascript:void(0);" class="reset-btn">Reset Selection</a>
                            </div>

                        </div>
                    </div>

                    <div class="col-xl-9">
                        <div class="row justify-content-center buy-list">

                            <div class="col-lg-12">
                                <div class="product-custom">
                                    <div class="profile-widget rent-list-view">
                                        <div class="doc-img">
                                            <a href="buy-details.html" class="property-img">
                                                <img class="img-fluid" alt="Product image"
                                                    src="assets/img/rent/rent-list-01.jpg">
                                            </a>
                                            <div class="featured">
                                                <span>Featured</span>
                                            </div>
                                            <div class="new-featured">
                                                <span>New</span>
                                            </div>
                                            <div class="user-avatar">
                                                <img src="{{ asset('assets/img/profiles/avatar-02.jpg') }}" alt>
                                            </div>
                                        </div>
                                        <div class="pro-content">
                                            <div class="list-head">
                                                <div class="rating">
                                                    <i class="fa fa-star checked"></i>
                                                    <i class="fa fa-star checked"></i>
                                                    <i class="fa fa-star checked"></i>
                                                    <i class="fa fa-star checked"></i>
                                                    <i class="fa fa-star checked"></i>
                                                    <span class="me-1">5.0</span> (20 Reviews)
                                                    <div class="product-name-price">
                                                        <h3 class="title">
                                                            <a href="buy-details.html" tabindex="-1">Place perfect
                                                                for nature</a>
                                                        </h3>
                                                        <div class="product-amount">
                                                            <h5><span>$41,400 </span></h5>
                                                        </div>
                                                    </div>
                                                    <p><i class="feather-map-pin"></i> 318-330 S Oakley Blvd,
                                                        Chicago, IL 60612, USA</p>
                                                </div>
                                            </div>
                                            <ul class="d-flex details">
                                                <li>
                                                    <img src="assets/img/icons/bed-icon.svg" alt="bed-icon">
                                                    3 Beds
                                                </li>
                                                <li>
                                                    <img src="assets/img/icons/bath-icon.svg" alt="bath-icon">
                                                    1 Bath
                                                </li>
                                                <li>
                                                    <img src="assets/img/icons/building-icon.svg" alt="building-icon">
                                                    15000 Sqft
                                                </li>
                                            </ul>
                                            <ul class="property-category d-flex justify-content-between">
                                                <li>
                                                    <span class="list">Listed on : </span>
                                                    <span class="date">17 Jan 2023</span>
                                                </li>
                                                <li>
                                                    <span class="category list">Category : </span>
                                                    <span class="category-value date">Condos</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-lg-12">
                                <div class="product-custom">
                                    <div class="profile-widget rent-list-view">
                                        <div class="doc-img">
                                            <a href="buy-details.html" class="property-img">
                                                <img class="img-fluid" alt="Product image"
                                                    src="assets/img/rent/rent-list-02.jpg">
                                            </a>
                                            <div class="featured">
                                                <span>Featured</span>
                                            </div>
                                            <a href="javascript:void(0)">
                                                <div class="favourite">
                                                    <span><i class="fa-regular fa-heart"></i></span>
                                                </div>
                                            </a>
                                            <div class="user-avatar">
                                                <img src="assets/img/profiles/avatar-01.jpg" alt>
                                            </div>
                                        </div>
                                        <div class="pro-content">
                                            <div class="list-head">
                                                <div class="rating">
                                                    <i class="fa fa-star checked"></i>
                                                    <i class="fa fa-star checked"></i>
                                                    <i class="fa fa-star checked"></i>
                                                    <i class="fa fa-star checked"></i>
                                                    <i class="fa fa-star"></i>
                                                    <span class="me-1">4.0</span> (12 Reviews)
                                                    <div class="product-name-price">
                                                        <h3 class="title">
                                                            <a href="buy-details.html" tabindex="-1">Modern
                                                                Apartment</a>
                                                        </h3>
                                                        <div class="product-amount">
                                                            <h5><span>$1,400 </span></h5>
                                                        </div>
                                                    </div>
                                                    <p><i class="feather-map-pin"></i> 318-330 S Oakley Blvd,
                                                        Chicago, IL 60612, USA</p>
                                                </div>
                                            </div>
                                            <ul class="d-flex details">
                                                <li>
                                                    <img src="assets/img/icons/bed-icon.svg" alt="bed-icon">
                                                    3 Beds
                                                </li>
                                                <li>
                                                    <img src="assets/img/icons/bath-icon.svg" alt="bath-icon">
                                                    4 Baths
                                                </li>
                                                <li>
                                                    <img src="assets/img/icons/building-icon.svg" alt="building-icon">
                                                    5000 Sqft
                                                </li>
                                            </ul>
                                            <ul class="property-category d-flex justify-content-between">
                                                <li>
                                                    <span class="list">Listed on : </span>
                                                    <span class="date">17 Jan 2023</span>
                                                </li>
                                                <li>
                                                    <span class="category list">Category : </span>
                                                    <span class="category-value date">Condos</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-lg-12">
                                <div class="product-custom">
                                    <div class="profile-widget rent-list-view">
                                        <div class="doc-img">
                                            <a href="buy-details.html" class="property-img">
                                                <img class="img-fluid" alt="Product image"
                                                    src="assets/img/rent/rent-list-03.jpg">
                                            </a>
                                            <div class="featured">
                                                <span>Featured</span>
                                            </div>
                                            <a href="javascript:void(0)">
                                                <div class="favourite">
                                                    <span><i class="fa-regular fa-heart"></i></span>
                                                </div>
                                            </a>
                                            <div class="user-avatar">
                                                <img src="assets/img/profiles/avatar-03.jpg" alt>
                                            </div>
                                        </div>
                                        <div class="pro-content">
                                            <div class="list-head">
                                                <div class="rating">
                                                    <i class="fa fa-star checked"></i>
                                                    <i class="fa fa-star checked"></i>
                                                    <i class="fa fa-star checked"></i>
                                                    <i class="fa fa-star checked"></i>
                                                    <i class="fa fa-star checked"></i>
                                                    <span class="me-1">5.0</span> (3 Reviews)
                                                    <div class="product-name-price">
                                                        <h3 class="title">
                                                            <a href="buy-details.html" tabindex="-1">Two storey
                                                                modern flat</a>
                                                        </h3>
                                                        <div class="product-amount">
                                                            <h5><span>$21,400 </span></h5>
                                                        </div>
                                                    </div>
                                                    <p><i class="feather-map-pin"></i> 470 Park Ave S, New York, NY
                                                        10016</p>
                                                </div>
                                            </div>
                                            <ul class="d-flex details">
                                                <li>
                                                    <img src="assets/img/icons/bed-icon.svg" alt="bed-icon">
                                                    2 Beds
                                                </li>
                                                <li>
                                                    <img src="assets/img/icons/bath-icon.svg" alt="bath-icon">
                                                    2 Baths
                                                </li>
                                                <li>
                                                    <img src="assets/img/icons/building-icon.svg" alt="building-icon">
                                                    15000 Sqft
                                                </li>
                                            </ul>
                                            <ul class="property-category d-flex justify-content-between">
                                                <li>
                                                    <span class="list">Listed on : </span>
                                                    <span class="date">13 Jan 2023</span>
                                                </li>
                                                <li>
                                                    <span class="category list">Category : </span>
                                                    <span class="category-value date">Flat</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-lg-12">
                                <div class="product-custom">
                                    <div class="profile-widget rent-list-view">
                                        <div class="doc-img">
                                            <a href="buy-details.html" class="property-img">
                                                <img class="img-fluid" alt="Product image"
                                                    src="assets/img/rent/rent-list-03.jpg">
                                            </a>
                                            <div class="featured">
                                                <span>Featured</span>
                                            </div>
                                            <a href="javascript:void(0)">
                                                <div class="favourite">
                                                    <span><i class="fa-regular fa-heart"></i></span>
                                                </div>
                                            </a>
                                            <div class="user-avatar">
                                                <img src="assets/img/profiles/avatar-04.jpg" alt>
                                            </div>
                                        </div>
                                        <div class="pro-content">
                                            <div class="list-head">
                                                <div class="rating">
                                                    <i class="fa fa-star checked"></i>
                                                    <i class="fa fa-star checked"></i>
                                                    <i class="fa fa-star checked"></i>
                                                    <i class="fa fa-star "></i>
                                                    <i class="fa fa-star "></i>
                                                    <span class="me-1">3.0</span> (3 Reviews)
                                                    <div class="product-name-price">
                                                        <h3 class="title">
                                                            <a href="buy-details.html" tabindex="-1">Beautiful Condo
                                                                Room</a>
                                                        </h3>
                                                        <div class="product-amount">
                                                            <h5><span>$12,400 </span></h5>
                                                        </div>
                                                    </div>
                                                    <p><i class="feather-map-pin"></i> 470 Park Ave S, New York, NY
                                                        10016</p>
                                                </div>
                                            </div>
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
                                            <ul class="property-category d-flex justify-content-between">
                                                <li>
                                                    <span class="list">Listed on : </span>
                                                    <span class="date">17 Jan 2023</span>
                                                </li>
                                                <li>
                                                    <span class="category list">Category : </span>
                                                    <span class="category-value date"> Home</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-lg-12">
                                <div class="product-custom">
                                    <div class="profile-widget rent-list-view">
                                        <div class="doc-img">
                                            <a href="buy-details.html" class="property-img">
                                                <img class="img-fluid" alt="Product image"
                                                    src="assets/img/rent/rent-list-04.jpg">
                                            </a>
                                            <div class="featured">
                                                <span>Featured</span>
                                            </div>
                                            <a href="javascript:void(0)">
                                                <div class="favourite">
                                                    <span><i class="fa-regular fa-heart"></i></span>
                                                </div>
                                            </a>
                                            <div class="user-avatar">
                                                <img src="assets/img/profiles/avatar-05.jpg" alt>
                                            </div>
                                        </div>
                                        <div class="pro-content">
                                            <div class="list-head">
                                                <div class="rating">
                                                    <i class="fa fa-star checked"></i>
                                                    <i class="fa fa-star checked"></i>
                                                    <i class="fa fa-star checked"></i>
                                                    <i class="fa fa-star checked"></i>
                                                    <i class="fa fa-star checked"></i>
                                                    <span class="me-1">5.0</span> (30 Reviews)
                                                    <div class="product-name-price">
                                                        <h3 class="title">
                                                            <a href="buy-details.html" tabindex="-1">Minimalist and
                                                                bright flat</a>
                                                        </h3>
                                                        <div class="product-amount">
                                                            <h5><span>$48,400 </span></h5>
                                                        </div>
                                                    </div>
                                                    <p><i class="feather-map-pin"></i>518-520 8th Ave, New York, NY
                                                        10018, USA</p>
                                                </div>
                                            </div>
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
                                            <ul class="property-category d-flex justify-content-between">
                                                <li>
                                                    <span class="list">Listed on : </span>
                                                    <span class="date">27 Jan 2023</span>
                                                </li>
                                                <li>
                                                    <span class="category list">Category : </span>
                                                    <span class="category-value date"> Home</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-lg-12">
                                <div class="product-custom">
                                    <div class="profile-widget rent-list-view">
                                        <div class="doc-img">
                                            <a href="buy-details.html" class="property-img">
                                                <img class="img-fluid" alt="Product image"
                                                    src="assets/img/rent/rent-list-05.jpg">
                                            </a>
                                            <div class="featured">
                                                <span>Featured</span>
                                            </div>
                                            <a href="javascript:void(0)">
                                                <div class="favourite">
                                                    <span><i class="fa-regular fa-heart"></i></span>
                                                </div>
                                            </a>
                                            <div class="user-avatar">
                                                <img src="assets/img/profiles/avatar-06.jpg" alt>
                                            </div>
                                        </div>
                                        <div class="pro-content">
                                            <div class="list-head">
                                                <div class="rating">
                                                    <i class="fa fa-star checked"></i>
                                                    <i class="fa fa-star checked"></i>
                                                    <i class="fa fa-star checked"></i>
                                                    <i class="fa fa-star "></i>
                                                    <i class="fa fa-star "></i>
                                                    <span class="me-1">3.0</span> (30 Reviews)
                                                    <div class="product-name-price">
                                                        <h3 class="title">
                                                            <a href="buy-details.html" tabindex="-1">Modern
                                                                apartment</a>
                                                        </h3>
                                                        <div class="product-amount">
                                                            <h5><span>$48,400 </span></h5>
                                                        </div>
                                                    </div>
                                                    <p><i class="feather-map-pin"></i>122-140 N Morgan St, Chicago,
                                                        IL 60607, USA</p>
                                                </div>
                                            </div>
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
                                            <ul class="property-category d-flex justify-content-between">
                                                <li>
                                                    <span class="list">Listed on : </span>
                                                    <span class="date">27 Jan 2023</span>
                                                </li>
                                                <li>
                                                    <span class="category list">Category : </span>
                                                    <span class="category-value date"> Apartments</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="grid-pagination">
                                <ul class="pagination justify-content-center">
                                    <li class="page-item prev">
                                        <a class="page-link" href="#"><i class="fa-solid fa-arrow-left"></i>
                                            Prev</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">1</a>
                                    </li>
                                    <li class="page-item active">
                                        <a class="page-link" href="#">2</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">3</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">4</a>
                                    </li>
                                    <li class="page-item next">
                                        <a class="page-link" href="#">Next <i
                                                class="fa-solid fa-arrow-right"></i></a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
