<footer class="footer">

    <div class="footer-top">
        <div class="footer-border-img">
            <img src="{{ asset('assets/img/bg/line-bg.png') }}" alt="image">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="footer-widget footer-about">
                        <div class="footer-app-content">
                            <div class="footer-content-heading">
                                <h4>Rush 2 Homes</h4>
                                <p>Rush2Homes is a premier real estate company, established as a subsidiary and
                                    exclusive sales and marketing partner of the leading property development
                                    company in Sri Lanka, Rush Lanka Group.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-5 col-sm-4">
                    <div class="footer-widget-list">
                        <div class="footer-content-heading">
                            <h4>Property Types</h4>
                        </div>
                        <ul>
                            <li><a
                                    href="{{ route('sales.property.listing', ['propertyType' => 'For Sales', 'propertyCategory' => 'Apartment']) }}">Apartments</a>
                            </li>
                            <li><a
                                    href="{{ route('sales.property.listing', ['propertyType' => 'For Sales', 'propertyCategory' => 'House']) }}">Home</a>
                            </li>
                            <li><a
                                    href="{{ route('sales.property.listing', ['propertyType' => 'For Sales', 'propertyCategory' => 'Land']) }}">Land</a>
                            </li>
                            <li><a
                                    href="{{ route('sales.property.listing', ['propertyType' => 'For Sales', 'propertyCategory' => 'Commercial Buildings']) }}">Commercial
                                    Buildings</a>
                            </li>
                            <li><a
                                    href="{{ route('sales.property.listing', ['propertyType' => 'For Sales', 'propertyCategory' => 'Bungalows']) }}">Bungalows</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-5 col-sm-4">
                    <div class="footer-widget-list">
                        <div class="footer-content-heading">
                            <h4>Quick Links</h4>
                        </div>
                        <ul>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Terms & Conditions</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Sign-in</a></li>
                            <li><a href="#">Login</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-5 col-sm-4">
                    <div class="social-links">

                        <ul>
                            <li><a href="https://web.facebook.com/RushLankaGroup/" target="_black"><i
                                        class="fa-brands fa-facebook-f hi-icon"></i></a></li>
                            <li><a href="https://www.instagram.com/rushlankagroup" target="_black"><i
                                        class="fa-brands fa-instagram hi-icon"></i></a>
                            </li>
                            <li><a href="https://lk.linkedin.com/company/rush-lanka-group" target="_black"><i
                                        class="fa-brands fa-linkedin hi-icon"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="footer-bottom">
        <div class="container">
            <div class="footer-bottom-content">
                <div class="copyright">
                    <p>Copyright 2023 - All right reserved 3DH Design</p>
                </div>
            </div>
        </div>
    </div>

</footer>
