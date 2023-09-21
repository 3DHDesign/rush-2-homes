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

    <section class="banner-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="banner-content" data-aos="fade-down">
                        <h1>{{ __('homepage.slider.main_title') }}<span>{{ __('homepage.slider.main_title_second') }}</span>
                        </h1>
                    </div>
                </div>
            </div>
            <livewire:mainFilter />
        </div>
    </section>
