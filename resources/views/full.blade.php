<!DOCTYPE html>
<html>
@include('layout.headerpage')
<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        <img class="img-responsive logo-main" src="{{ asset('images/logo_oa.png') }}" alt="Logo Dimensión Laboral">
    </div>
    {{-- /.login-logo --}}
    <div class="login-box-body">
        {{--<p class="login-box-msg">Sign in to start your session</p>--}}
        @yield('content')
    </div>
    {{-- /.login-box-body --}}
</div>
{{-- /.login-box --}}
@include('layout.footerpage')
</body>
</html>
