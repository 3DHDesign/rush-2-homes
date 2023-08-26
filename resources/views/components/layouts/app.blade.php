<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />

    <meta name="application-name" content="{{ config('app.name') }}" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>{{ config('app.name') }}</title>

    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>

    @filamentStyles
    @vite('resources/css/app.css')
</head>

<body class="antialiased">
    {{ $slot }}

    @filamentScripts
    @vite('resources/js/app.js')
</body>
<script>
    import Echo from 'laravel-echo'

    window.Echo = new Echo({
        broadcaster: 'pusher',
        key: '8875bc413b06bc629d3a',
        cluster: 'ap2',
        forceTLS: true
    });

    var channel = Echo.channel('my-channel');
    channel.listen('.my-event', function(data) {
        alert(JSON.stringify(data));
    });
</script>

</html>
