<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.css') }}">

    {{-- Soft UI --}}

    <!-- Nucleo Icons -->
    <link href="{{ asset('css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/nucleo-svg.css') }}" rel="stylesheet" />

    <!-- Popper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.5/umd/popper.min.js"></script>
    <!-- AlpineJS -->
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/3.10.3/cdn.min.js"></script>

    <!-- Main Styling -->
    <link href="{{ asset('css/styles.css?v=1.0.3') }}" rel="stylesheet" />

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

<!-- plugin for charts  -->
<script src="{{ asset('js/plugins/chartjs.min.js') }}" async></script>
<!-- plugin for scrollbar  -->
<script src="{{ asset('js/plugins/perfect-scrollbar.min.js') }}" async></script>
<!-- github button -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<!-- main script file  -->
<script src="{{ asset('js/soft-ui-dashboard-tailwind.js?v=1.0.3') }}" async></script>
@stack('script')
</body>
</html>
