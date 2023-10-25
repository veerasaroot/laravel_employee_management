@extends('layouts.app')

@section('app')
    @include('partials.header')
    @yield('content')
    @include('partials.footer')
@endsection
