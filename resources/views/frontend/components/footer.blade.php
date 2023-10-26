<footer class="footer">
    <div class="footer-top">
        <div class="footer-border-img">
            <img src="{{ asset('assets/img/bg/line-bg.png') }}" alt="{{ __('homepage.footer.about.title') }}">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="footer-widget footer-about">
                        <div class="footer-app-content">
                            <div class="footer-content-heading">
                                <h4>{{ __('homepage.footer.about.title') }}</h4>
                                <p>{{ $details->short_about }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-5 col-sm-4">
                    <div class="footer-widget-list">
                        <div class="footer-content-heading">
                            <h4>{{ __('homepage.footer.property_types.title') }}</h4>
                        </div>
                        <ul>
                            <li><a
                                    href="{{ route('sales.property.listing', ['propertyType' => 'For Sales', 'propertyCategory' => 'Apartment']) }}">{{ __('homepage.footer.property_types.apartments') }}</a>
                            </li>
                            <li><a
                                    href="{{ route('sales.property.listing', ['propertyType' => 'For Sales', 'propertyCategory' => 'House']) }}">{{ __('homepage.footer.property_types.homes') }}</a>
                            </li>
                            <li><a
                                    href="{{ route('sales.property.listing', ['propertyType' => 'For Sales', 'propertyCategory' => 'Land']) }}">{{ __('homepage.footer.property_types.land') }}</a>
                            </li>
                            <li><a
                                    href="{{ route('sales.property.listing', ['propertyType' => 'For Sales', 'propertyCategory' => 'Commercial Buildings']) }}">{{ __('homepage.footer.property_types.commercial_buildings') }}</a>
                            </li>
                            <li><a
                                    href="{{ route('sales.property.listing', ['propertyType' => 'For Sales', 'propertyCategory' => 'Bungalows']) }}">{{ __('homepage.footer.property_types.bungalows') }}</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-5 col-sm-4">
                    <div class="footer-widget-list">
                        <div class="footer-content-heading">
                            <h4>{{ __('homepage.footer.quick_links.title') }}</h4>
                        </div>
                        <ul>
                            <li><a href="{{ route('about') }}">{{ __('homepage.footer.quick_links.about') }}</a></li>
                            <li><a
                                    href="{{ route('terms') }}">{{ __('homepage.footer.quick_links.terms_conditions') }}</a>
                            </li>
                            <li><a
                                    href="{{ route('privacy') }}">{{ __('homepage.footer.quick_links.privacy_policy') }}</a>
                            </li>
                            <li><a
                                    href="{{ route('user.register') }}">{{ __('homepage.footer.quick_links.sign_in') }}</a>
                            </li>
                            <li><a href="/admin">{{ __('homepage.footer.quick_links.login') }}</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-5 col-sm-4">
                    <div class="social-links">
                        <ul>
                            <li><a href="https://web.facebook.com/profile.php?id=100063944532110" target="_black"><i
                                        class="fa-brands fa-facebook-f hi-icon"></i></a></li>
                            <li><a href="https://www.instagram.com/rush2homes/" target="_black"><i
                                        class="fa-brands fa-instagram hi-icon"></i></a>
                            </li>
                            <li><a href="https://lk.linkedin.com/company/rush-2-homes" target="_black"><i
                                        class="fa-brands fa-linkedin hi-icon"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-widget footer-about">
                        <div class="footer-app-content" style="margin-top: 20px">
                            @if ($details->address_lk)
                                <div class="footer-content-heading">
                                    <strong>Sri Lanka</strong>
                                    <p>{{ $details->address_lk }}</p>
                                </div>
                            @endif
                            {{-- @if ($details->address_uae)
                                <div class="footer-content-heading">
                                    <strong>UAE</strong>
                                    <p>{{ $details->address_uae }}</p>
                                </div>
                            @endif --}}
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="footer-bottom-content">
                <div class="copyright">
                    <p>Copyright 2023 - All rights reserved <a href="www.3dhdesign.com" target="_blank">3DH Design</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
