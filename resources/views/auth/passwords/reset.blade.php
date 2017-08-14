@extends('auth.layouts.app')

@section('content')
<style >
.login .content .forget-form, .login .content .register-form {
    display: inline;
}
</style>
<!-- BEGIN FORGOT PASSWORD FORM -->
<div>
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
<form class="forget-form" action="{{ route('password.request') }}" method="POST">
    {{ csrf_field() }}
    <h3>Reset Password ?</h3>
    <p> Enter your details below to reset your password. </p>

    <input type="hidden" name="token" value="{{ $token }}">


 <!-- EMAIL -->
    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
        <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
        <label class="control-label visible-ie8 visible-ie9">Email</label>
        <div class="input-icon">
            <i class="fa fa-envelope"></i>
            <input class="form-control placeholder-no-fix" type="email" placeholder="Email" name="email" value="{{ $email or old('email') }}" required autofocus /> 
            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>
    </div>

<!-- PASS -->
    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
        <label class="control-label visible-ie8 visible-ie9">Password</label>
        <div class="input-icon">
            <i class="fa fa-lock"></i>
            <input class="form-control placeholder-no-fix" type="password" id="register_password" placeholder="Password" name="password" required /> 
            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </div>
    </div>

<!-- CONF PASS -->
    <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
        <label class="control-label visible-ie8 visible-ie9">Re-type Your Password</label>
        <div class="controls">
            <div class="input-icon">
                <i class="fa fa-check"></i>
                <input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Re-type Your Password" name="password_confirmation" required /> 
            @if ($errors->has('password_confirmation'))
                <span class="help-block">
                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                </span>
            @endif
            </div>
        </div>
    </div>

    <div class="form-actions">
        <button type="button" id="back-btn" class="btn red btn-outline">Back </button>
        <button type="submit" class="btn green pull-right"> Submit </button>
    </div>
</form>
</div>
<!-- END FORGOT PASSWORD FORM -->
@endsection
@section('script')
<script>
$(document).ready(function()
{
    $('#clickmewow').click(function()
    {
        $('#radio1003').attr('checked', 'checked');
    });
})
</script>
<script>
$.backstretch([
    "../../metro/assets/pages/media/bg/6.jpg",
    "../../metro/assets/pages/media/bg/2.jpg",
    "../../metro/assets/pages/media/bg/3.jpg",
    "../../metro/assets/pages/media/bg/4.jpg",
    "../../metro/assets/pages/media/bg/5.jpg"
    ], {
      fade: 1000,
      duration: 8000
    }
);
</script>
@endsection