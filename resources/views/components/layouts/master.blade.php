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
    {!! RecaptchaV3::initJs() !!}
    @livewireStyles

    @stack('style')
</head>

<body>

    <div class="main-wrapper">

        @include('frontend.components.header')

        @yield('content')


        @include('frontend.components.footer')



    </div>

    <div class="progress-wrap active-progress">
        <svg class="progress-circle svg-content" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"></path>
        </svg>
    </div>
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

    <script>
        window.addEventListener('toastr:info', event => {
            toastr.info(event.detail.message);
        })
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        window.addEventListener('Swal:modal', event => {
            console.log(event.params)
            Swal.fire({
                icon: event.detail.icon,
                title: event.detail.title,
                text: event.detail.text,
            })
        })
    </script>
    @livewireScripts
</body>

</html>
