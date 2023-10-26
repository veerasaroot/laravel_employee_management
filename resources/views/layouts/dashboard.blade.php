@extends('layouts.app')

@section('app')
    <x-sidebar/>
    <main class="ease-soft-in-out xl:ml-68.5 relative h-full max-h-screen rounded-xl transition-all duration-200">
        @include('partials._dashboard.navbar')
        <div class="w-full px-6 py-6 mx-auto">
            @yield('content')
        </div>
    </main>

    <script src="{{ asset('flowbite/flowbite.min.js') }}"></script>
@endsection

