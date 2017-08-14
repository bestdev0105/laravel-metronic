<?php $__env->startSection('content'); ?>
<!-- BEGIN LOGIN FORM -->
    <form class="login-form" action="<?php echo e(route('login')); ?>" method="POST">
        <?php echo e(csrf_field()); ?>

        <h3 class="form-title">Login to your account</h3>

        <div class="alert alert-danger display-hide">
            <button class="close" data-close="alert"></button>
            <span> Enter any username and password. </span>
        </div>
        <!-- BEGIN USERNAME / EMAIL FIELD -->
        <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
            <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
            <label class="control-label visible-ie8 visible-ie9">Username / Email</label>
            <div class="input-icon">
                <i class="fa fa-user"></i>
                <input class="form-control placeholder-no-fix" type="email" autocomplete="on" placeholder="email" name="email" value="<?php echo e(old('email')); ?>" /> 
                <?php if($errors->has('email')): ?>
                <span class="alert alert-danger display-hide">
                    <strong><?php echo e($errors->first('email')); ?></strong>
                </span>
                <?php endif; ?>

            </div>
        </div>
        <!-- END USERNAME / EMAIL FIELD -->
        <!-- BEGIN PASSWORD -->
        <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
            <label class="control-label visible-ie8 visible-ie9">Password</label>
            <div class="input-icon">
                <i class="fa fa-lock"></i>
                <input class="form-control placeholder-no-fix" id="password" type="password" autocomplete="off" placeholder="Password" name="password" required />
                <?php if($errors->has('password')): ?>
                <span class="alert alert-danger display-hide">
                    <strong><?php echo e($errors->first('password')); ?></strong>
                </span>
                <?php endif; ?>
            </div>
        </div>
        <!-- END PASSWORD -->

        <!--  BEGIN REMEMBER ME & SUBMIT BUTTON -->
        <div class="form-actions">
            <label class="rememberme mt-checkbox mt-checkbox-outline">
                <input type="checkbox" name="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>" /> Remember me
                <span></span>
            </label>
            <button type="submit" class="btn green pull-right"> Login </button>
        </div>
        <!--  END REMEMBER ME & SUBMIT BUTTON -->
        <div class="forget-password">
            <h4>Forgot your password ?</h4>
            <p> no worries, click
                <a href="<?php echo e(route('password.request')); ?>" id="forget-password"> here </a> to reset your password. </p>
        </div>
        <div class="create-account">
            <p> Don't have an account yet ?&nbsp;
                <a href="<?php echo e(route('register')); ?>" id="register-btn"> Create an account </a>
            </p>
        </div>
    </form>
<!-- END LOGIN FORM -->
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('auth.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>