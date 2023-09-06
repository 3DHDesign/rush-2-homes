<div class="row">
    <div class="col-lg-12">
        <div class="banner-search" data-aos="fade-down">
            <div class="banner-tab">
                <ul class="nav nav-tabs" id="bannerTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="buy-property" data-bs-toggle="tab" href="#buy_property"
                            role="tab" aria-controls="buy_property" aria-selected="true">
                            <img src="assets/img/icons/buy-icon.svg" alt="icon"> Buy a Property
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="rent-property" data-bs-toggle="tab" href="#rent_property" role="tab"
                            aria-controls="rent_property" aria-selected="false">
                            <img src="assets/img/icons/rent-icon.svg" alt="icon"> Rent a Property
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="sell-property" data-bs-toggle="tab" href="#sell_property" role="tab"
                            aria-controls="sell_property" aria-selected="false">
                            <img src="assets/img/icons/rent-icon.svg" alt="icon"> Sell a Property
                        </a>
                    </li>
                </ul>
            </div>
            <div class="tab-content" id="bannerTabContent">
                <div class="tab-pane fade show active" id="buy_property" role="tabpanel" aria-labelledby="buy-property">
                    <div class="banner-tab-property">
                        <livewire:buyPropertyFilter />
                    </div>
                </div>
                <div class="tab-pane fade" id="rent_property" role="tabpanel" aria-labelledby="rent-property">
                    <div class="banner-tab-property">
                        <livewire:rentPropertyFilter />
                    </div>
                </div>
                <div class="tab-pane fade" id="sell_property" role="tabpanel" aria-labelledby="sell-property">
                    <div class="banner-tab-property">
                        <livewire:sellPropertyFilter />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
