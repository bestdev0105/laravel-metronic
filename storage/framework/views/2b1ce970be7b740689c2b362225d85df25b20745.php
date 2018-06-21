<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.7
Version: 4.7.5
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="<?php echo e(app()->getLocale()); ?>">
    <!--<![endif]-->

<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8" />
    <title>Metronic Admin Theme #1 | Blank Page Layout</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="Preview page of Metronic Admin Theme #1 for blank page layout" name="description" />
    <meta content="" name="author" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(URL::asset('metro/assets/global/plugins/font-awesome/css/font-awesome.min.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(URL::asset('metro/assets/global/plugins/simple-line-icons/simple-line-icons.min.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(URL::asset('metro/assets/global/plugins/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(URL::asset('metro/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css')); ?>" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN THEME GLOBAL STYLES -->
    <link href="<?php echo e(URL::asset('metro/assets/global/css/components-rounded.min.css')); ?>" rel="stylesheet" id="style_components" type="text/css" />
    <link href="<?php echo e(URL::asset('metro/assets/global/css/plugins.min.css')); ?>" rel="stylesheet" type="text/css" />
    <!-- END THEME GLOBAL STYLES -->
    <!-- BEGIN THEME LAYOUT STYLES -->
    <link href="<?php echo e(URL::asset('metro/assets/layouts/layout/css/layout.min.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(URL::asset('metro/assets/layouts/layout/css/themes/darkblue.min.css')); ?>" rel="stylesheet" type="text/css" id="style_color" />
    <link href="<?php echo e(URL::asset('metro/assets/layouts/layout/css/custom.min.css')); ?>" rel="stylesheet" type="text/css" />
    <!-- END THEME LAYOUT STYLES -->
    <link rel="shortcut icon" href="favicon.ico" />
</head>
<!-- END HEAD -->

<body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white">
<div class="page-wrapper">
    <!-- BEGIN HEADER -->
    <?php echo $__env->make('backend.include.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <!-- END HEADER -->
    <!-- BEGIN HEADER & CONTENT DIVIDER -->
    <div class="clearfix"> </div>
    <!-- END HEADER & CONTENT DIVIDER -->
    <!-- BEGIN CONTAINER -->
    <div class="page-container">
    <!-- BEGIN SIDEBAR -->
        <?php echo $__env->make('backend.include.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div>
    <!-- END SIDEBAR -->
</div>
    <!-- END SIDEBAR -->

    <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
    <!-- BEGIN CONTENT BODY -->
       <?php echo $__env->yieldContent('content'); ?>
    <!-- END CONTENT BODY -->
    </div>
    <!-- END CONTENT -->
    </div>
    <!-- END CONTAINER -->
    <!-- BEGIN FOOTER -->
    <div class="page-footer">
        <?php echo $__env->make('backend.include.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div>
    <!-- END FOOTER -->
</div>
<!--[if lt IE 9]>
<script src="../assets/global/plugins/respond.min.js"></script>
<script src="../assets/global/plugins/excanvas.min.js"></script> 
<script src="../assets/global/plugins/ie8.fix.min.js"></script> 
<![endif]-->
<!-- BEGIN CORE PLUGINS -->
<script src="<?php echo e(URL::asset('metro/assets/global/plugins/jquery.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(URL::asset('metro/assets/global/plugins/bootstrap/js/bootstrap.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(URL::asset('metro/assets/global/plugins/js.cookie.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(URL::asset('metro/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(URL::asset('metro/assets/global/plugins/jquery.blockui.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(URL::asset('metro/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js')); ?>" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN THEME GLOBAL SCRIPTS -->
<script src="<?php echo e(URL::asset('metro/assets/global/scripts/app.min.js')); ?>" type="text/javascript"></script>
<!-- END THEME GLOBAL SCRIPTS -->
<!-- BEGIN THEME LAYOUT SCRIPTS -->
<script src="<?php echo e(URL::asset('metro/assets/layouts/layout/scripts/layout.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(URL::asset('metro/assets/layouts/layout/scripts/demo.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(URL::asset('metro/assets/layouts/global/scripts/quick-sidebar.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(URL::asset('metro/assets/layouts/global/scripts/quick-nav.min.js')); ?>" type="text/javascript"></script>
<!-- END THEME LAYOUT SCRIPTS -->
<?php echo $__env->yieldContent('script'); ?>
    </body>

</html>