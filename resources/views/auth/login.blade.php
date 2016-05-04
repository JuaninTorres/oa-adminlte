@extends('full')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="alert alert-info">
                Para ingresar, hágalo con el usuario y contraseña que se le entergó.
            </div>
            @include('partials.errors')
            {!! Form::open(['route' => 'login_path', 'method' => 'POST']) !!}
                @include('auth.partials.form')
            {!! Form::close() !!}
{{--            {!! link_to_route('Password::reset_password_email_path', '¿Tienes problemas para ingresar?') !!}<br>--}}
            <hr>
            <a class="btn btn-block btn-social btn-google" href="{{ route('Google::auth_path') }}">
                <i class="fa fa-google-plus"></i> Ingresar con su cuenta de correos
            </a>
        </div>
    </div>
@endsection