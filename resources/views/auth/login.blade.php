@extends('auth.layouts.app')

@section('content')
<!-- BEGIN LOGIN FORM -->
    <form class="login-form" action="{{ route('login') }}" method="POST">
        {{ csrf_field() }}
        <h3 class="form-title">Login to your account</h3>

        <div class="alert alert-danger display-hide">
            <button class="close" data-close="alert"></button>
            <span> Enter any username and password. </span>
        </div>
        <!-- BEGIN USERNAME / EMAIL FIELD -->
        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
            <label class="control-label visible-ie8 visible-ie9">Username / Email</label>
            <div class="input-icon">
                <i class="fa fa-user"></i>
                <input class="form-control placeholder-no-fix" type="email" autocomplete="on" placeholder="email" name="email" value="{{ old('email') }}" /> 
                @if ($errors->has('email'))
                <span class="alert alert-danger display-hide">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif

            </div>
        </div>
        <!-- END USERNAME / EMAIL FIELD -->
        <!-- BEGIN PASSWORD -->
        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <label class="control-label visible-ie8 visible-ie9">Password</label>
            <div class="input-icon">
                <i class="fa fa-lock"></i>
                <input class="form-control placeholder-no-fix" id="password" type="password" autocomplete="off" placeholder="Password" name="password" required />
                @if ($errors->has('password'))
                <span class="alert alert-danger display-hide">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif
            </div>
        </div>
        <!-- END PASSWORD -->

        <!--  BEGIN REMEMBER ME & SUBMIT BUTTON -->
        <div class="form-actions">
            <label class="rememberme mt-checkbox mt-checkbox-outline">
                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}" /> Remember me
                <span></span>
            </label>
            <button type="submit" class="btn green pull-right"> Login </button>
        </div>
        <!--  END REMEMBER ME & SUBMIT BUTTON -->
        <div class="forget-password">
            <h4>Forgot your password ?</h4>
            <p> no worries, click
                <a href="{{ route('password.request') }}" id="forget-password"> here </a> to reset your password. </p>
        </div>
        <div class="create-account">
            <p> Don't have an account yet ?&nbsp;
                <a href="{{ route('register') }}" id="register-btn"> Create an account </a>
            </p>
        </div>
    </form>
<!-- END LOGIN FORM -->
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