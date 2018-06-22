<?php $__env->startSection('child_css'); ?>
<link href="<?php echo e(asset('css/observation.css')); ?>" rel="stylesheet" type="text/css" />
    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="m-grid observation_top">
    <div class="m-grid-row">
        <div class="m-grid-col-lg-10 m-grid-col-md-10 m-grid-col-sm-8 m-grid-col-xs-12 m-grid-col m-grid-col-bottom observation_top_bar">
            <span class="observation_top_span">Effectiveness of UAUC Reporting</span>
        </div>

        <div class="m-grid-col-lg-2 m-grid-col-md-2 m-grid-col-sm-4 m-grid-col-xs-12 m-grid-col m-grid-col-bottom observation_top_bar">
            <select class="bs-select form-control observation_top_select">
                <option>All Fields</option>
                <option>Ketchup</option>
                <option>Relish</option>
            </select>
        </div>
    </div>
</div>
<div class="clearfix"></div>
<div class="row">
    <div class="col-md-12">
        <div class="portlet light portlet-fit bordered">
            <div class="portlet-title">
                <div class="col-md-10 caption">
                    <span class="caption-subject bold observation_chart_caption">UAUC Observation vs Incident Quadrant Plot</span>
                </div>
                <div class="col-md-2 observation_portlet_head">
                    <select class="bs-select form-control observation_portlet_select">
                        <option>All Fields</option>
                        <option>Ketchup</option>
                        <option>Relish</option>
                    </select>
                </div>
            </div>
            <div class="portlet-body">
                <div id="highchart_1" style="height:500px;"></div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('child_js'); ?>
<script src="<?php echo e(asset('metro/assets/global/plugins/highstock/js/highstock.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('js/observation.js')); ?>" type="text/javascript"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>