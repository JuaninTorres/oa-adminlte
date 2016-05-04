@extends('app')

@section('content')
    <p class="login-box-msg">{{ trans('login.reset_password') }}</p>
    @include('partials.errors')
    {!! Form::open(['route' => 'Password::reset_password_path', 'method' => 'post']) !!}
    {!! Form::hidden('token', $token) !!}
    <div class="form-group has-feedback">
        {!! Form::email('email', old('email'), ['class' => 'form-control', 'placeholder' => trans('login.email_address')]) !!}
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
    </div>
    <div class="form-group has-feedback">
        {!! Form::password('password', ['class' => 'form-control', 'placeholder' => ucfirst(trans('login.password'))]) !!}
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
    </div><div class="form-group has-feedback">
        {!! Form::password('password_confirmation', ['class' => 'form-control', 'placeholder' => ucfirst(trans('login.confirm_password'))]) !!}
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
    </div>
    <div class="row">
        <div class="col-xs-12">
            {!! Form::submit( trans('login.reset_password'), ['class'=> 'btn btn-danger btn-block btn-flat']) !!}
        </div><!-- /.col -->
    </div>
    {!! Form::close() !!}
@endsection