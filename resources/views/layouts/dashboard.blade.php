@extends('layouts.app')

@section('app')
    <x-sidebar/>
    @yield('content')
    <script src="{{ asset('flowbite/flowbite.min.js') }}"></script>
@endsection

