<header class="header header-fix">

    <style>
        .main-nav-list-item:before {
            content: "";
            position: absolute;
            bottom: -2px;
            height: 2px;
            width: 100%;
            background: #267cbe;
            border-radius: 50px;
            transform: scaleX(0);
            transition: transform 0.2s linear;
        }

        .main-nav-list-item:hover:before {
            transform: scaleX(1)
        }
    </style>

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
        <livewire:main-header />
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
