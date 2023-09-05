<div class="row">
    <div class="col-xl-3 theiaStickySidebar">
        <div class="left-sidebar-widget property-sidebar">

            <div class="collapse-card">
                <h4 class="card-title">
                    <a class="collapsed" data-bs-toggle="collapse" href="#advance-search" aria-expanded="false">Advanced
                        Search</a>
                </h4>
                <div id="advance-search" class="card-collapse collapse show">
                    <ul class="show-list">
                        <li class="review-form form-wrap">
                            <input type="text" wire:model.live="keyword" class="form-control"
                                placeholder="Type Keywords" value="{{ $keyword }}">
                            <span class="form-icon">
                                <i class="bx bx-search-alt"></i>
                            </span>
                        </li>
                        <li class="review-form">
                            <select class="select-dropdown" wire:model.live="getDistrict">
                                <option selected>{{ $district }}</option>
                                @foreach ($districts as $district)
                                    <option value="{{ $district->id }}">{{ $district->name }}</option>
                                @endforeach
                            </select>
                        </li>
                        <li class="review-form">
                            <select class="select-dropdown" wire:model="city">
                                <option selected>{{ $city }}</option>
                                @foreach ($cities as $city_item)
                                    <option value="{{ $city_item->id }}">{{ $city_item->name }}</option>
                                @endforeach
                            </select>
                        </li>
                        <li class="review-form">
                            <div class="input-row">
                                <input type="text" wire:model.live="minPrice" class="form-control"
                                    placeholder="Min price">
                                <input type="text" wire:model.live="maxPrice" class="form-control"
                                    placeholder="Max price">
                            </div>
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
                    <a class="collapsed" data-bs-toggle="collapse" href="#amenities" aria-expanded="false">Amenities</a>
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
                    <a class="collapsed" data-bs-toggle="collapse" href="#pricing" aria-expanded="false">Pricing</a>
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


            <div class="apply-btn">
                <button type="submit" class="btn btn-primary">Apply Filter</button>
                <a href="javascript:void(0);" class="reset-btn">Reset Selection</a>
            </div>

        </div>
    </div>
    <div class="col-xl-9">
        <div class="row justify-content-center buy-list">

            {{-- Property listing cards --}}
            @foreach ($properties as $item)
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
            @endforeach


            {{-- Pagination --}}
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
                        <a class="page-link" href="#">Next <i class="fa-solid fa-arrow-right"></i></a>
                    </li>
                </ul>
            </div>

        </div>
    </div>

</div>
