@if(session()->has('show_login_modal'))
    @include('auth.login-form')
    @php session()->remove('show_login_modal');@endphp
@endif
