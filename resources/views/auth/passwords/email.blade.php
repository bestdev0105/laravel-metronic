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
<form class="forget-form" action="{{ route('password.email') }}" method="POST">
    {{ csrf_field() }}
    <h3>Forget Password ?</h3>
    <p> Enter your e-mail address below to reset your password. </p>
    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
        <div class="input-icon">
            <i class="fa fa-envelope"></i>
            <input class="form-control placeholder-no-fix" type="email" autocomplete="off" placeholder="Email" name="email" value="{{ old('email') }}" required /> 
         @if ($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
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
    "../metro/assets/pages/media/bg/6.jpg",
    "../metro/assets/pages/media/bg/2.jpg",
    "../metro/assets/pages/media/bg/3.jpg",
    "../metro/assets/pages/media/bg/4.jpg",
    "../metro/assets/pages/media/bg/5.jpg"
    ], {
      fade: 1000,
      duration: 8000
    }
);
</script>
@endsection