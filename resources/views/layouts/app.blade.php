<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.css') }}">
    @vite('resources/css/app.css')
    @stack('style')

    <style>
        @font-face {
            font-family: PSL-Similanya;
            src: {{ asset('fonts/PSL-Similanya.ttf') }};
        }

        html {
            font-family: PSL-Similanya;
        }
    </style>

    <title>@yield('title')</title>
</head>
<body>
@include('sweetalert::alert')

@yield('app')

@stack('script')
</body>
</html>
