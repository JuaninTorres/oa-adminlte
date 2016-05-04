@extends('app')

@section('content')
    <p class="login-box-msg">Ingresa tu email para enviarte un link de restauración de contraseña</p>
    @include('partials.errors')
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    {!! Form::open(['route' => 'Password::reset_password_email_path', 'method' => 'post']) !!}
    <div class="form-group has-feedback">
        {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => trans('login.email_address')]) !!}
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
    </div>
    <div class="row">
        <div class="col-xs-12">
            {!! Form::submit( trans('login.send_pass_reset_link'), ['class'=> 'btn btn-danger btn-block btn-flat']) !!}
        </div><!-- /.col -->
    </div>
    {!! Form::close() !!}
@endsection