@if(session()->has('show_register_modal'))
    @include('auth.register-form')
    @php session()->remove('show_register_modal');@endphp
@endif
