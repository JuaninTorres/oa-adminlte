<div class="form-group has-feedback">
    {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => ucfirst(trans('login.email'))]) !!}
    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
</div>
<div class="form-group has-feedback">
    {!! Form::password('password', ['class' => 'form-control', 'placeholder' => ucfirst(trans('login.password'))]) !!}
    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
</div>
<div class="row">
    <div class="col-xs-8">
        <label>
            {!! Form::checkbox('remember') !!} {{ trans('login.rememberme') }}
        </label>
    </div><!-- /.col -->
    <div class="col-xs-4">
        {!! Form::submit( trans('login.login'), ['class'=> 'btn btn-info btn-block']) !!}
    </div><!-- /.col -->
</div>