@extends('auth.layouts.app')

@section('content')
<style >
.login .content .forget-form, .login .content .register-form {
    display: inline;
}
</style>

<!-- BEGIN REGISTRATION FORM -->
<form class="register-form" action="{{ route('register') }}" method="POST">
    {{ csrf_field() }}
    <h3>Sign Up</h3>
    <p> Enter your personal details below: </p>

<!-- NAME -->
    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
        <label class="control-label visible-ie8 visible-ie9">Full Name</label>
        <div class="input-icon">
            <i class="fa fa-font"></i>
            <input class="form-control placeholder-no-fix" type="text" placeholder="Full Name" name="name" value="{{ old('name') }}" required autofocus /> 
            @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
        </div>
    </div>

<!-- USERNAME -->
    <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
        <label class="control-label visible-ie8 visible-ie9">Username</label>
        <div class="input-icon">
            <i class="fa fa-user"></i>
            <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Username" name="username" required autofocus /> 
         @if ($errors->has('username'))
            <span class="help-block">
                <strong>{{ $errors->first('username') }}</strong>
            </span>
        @endif
        </div>
    </div>

<!-- EMAIL -->
    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
        <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
        <label class="control-label visible-ie8 visible-ie9">Email</label>
        <div class="input-icon">
            <i class="fa fa-envelope"></i>
            <input class="form-control placeholder-no-fix" type="email" placeholder="Email" name="email" value="{{ old('email') }}" /> 
        </div>
    </div>

<!-- PASS -->
    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
        <label class="control-label visible-ie8 visible-ie9">Password</label>
        <div class="input-icon">
            <i class="fa fa-lock"></i>
            <input class="form-control placeholder-no-fix" type="password" autocomplete="on" id="register_password" placeholder="Password" name="password" required /> 
        @if ($errors->has('password'))
            <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif
        </div>
    </div>

<!-- CONF PASS -->
    <div class="form-group">
        <label class="control-label visible-ie8 visible-ie9">Re-type Your Password</label>
        <div class="controls">
            <div class="input-icon">
                <i class="fa fa-check"></i>
                <input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Re-type Your Password" name="password_confirmation" required /> </div>
        </div>
    </div>
    
    <div class="form-actions">
        <button id="register-back-btn" type="button" class="btn red btn-outline"> Back </button>
        <button type="submit" id="register-submit-btn" class="btn green pull-right"> Sign Up </button>
    </div>
</form>
<!-- END REGISTRATION FORM -->



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
@endsection