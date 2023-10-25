@extends('layouts.app')

@section('app')
    <x-sidebar/>
    @include('partials._dashboard.navbar')
    @yield('content')
    <script src="{{ asset('flowbite/flowbite.min.js') }}"></script>
@endsection

