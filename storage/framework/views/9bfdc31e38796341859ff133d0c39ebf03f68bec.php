<?php $__env->startSection('content'); ?>
<style >
.login .content .forget-form, .login .content .register-form {
    display: inline;
}
</style>
<!-- BEGIN FORGOT PASSWORD FORM -->
<div>
<?php if(session('status')): ?>
    <div class="alert alert-success">
        <?php echo e(session('status')); ?>

    </div>
<?php endif; ?>
<form class="forget-form" action="<?php echo e(route('password.request')); ?>" method="POST">
    <?php echo e(csrf_field()); ?>

    <h3>Reset Password ?</h3>
    <p> Enter your details below to reset your password. </p>

    <input type="text" name="token" value="<?php echo e($token); ?>">


 <!-- EMAIL -->
    <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
        <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
        <label class="control-label visible-ie8 visible-ie9">Email</label>
        <div class="input-icon">
            <i class="fa fa-envelope"></i>
            <input class="form-control placeholder-no-fix" type="email" placeholder="Email" name="email" value="<?php echo e(isset($email) ? $email : old('email')); ?>" required autofocus /> 
            <?php if($errors->has('email')): ?>
                <span class="help-block">
                    <strong><?php echo e($errors->first('email')); ?></strong>
                </span>
            <?php endif; ?>
        </div>
    </div>

<!-- PASS -->
    <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
        <label class="control-label visible-ie8 visible-ie9">Password</label>
        <div class="input-icon">
            <i class="fa fa-lock"></i>
            <input class="form-control placeholder-no-fix" type="password" id="register_password" placeholder="Password" name="password" required /> 
            <?php if($errors->has('password')): ?>
                <span class="help-block">
                    <strong><?php echo e($errors->first('password')); ?></strong>
                </span>
            <?php endif; ?>
        </div>
    </div>

<!-- CONF PASS -->
    <div class="form-group<?php echo e($errors->has('password_confirmation') ? ' has-error' : ''); ?>">
        <label class="control-label visible-ie8 visible-ie9">Re-type Your Password</label>
        <div class="controls">
            <div class="input-icon">
                <i class="fa fa-check"></i>
                <input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Re-type Your Password" name="password_confirmation" required /> 
            <?php if($errors->has('password_confirmation')): ?>
                <span class="help-block">
                    <strong><?php echo e($errors->first('password_confirmation')); ?></strong>
                </span>
            <?php endif; ?>
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
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('auth.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>