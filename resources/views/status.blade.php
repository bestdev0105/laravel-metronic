@extends('layouts.app')

@section('child_css')
<link href="{{ asset('css/status.css')}}" rel="stylesheet" type="text/css" />
    
@endsection

@section('content')
<div class="m-grid status_top">
    <div class="m-grid-row">
        <div class="m-grid-col-lg-10 m-grid-col-md-10 m-grid-col-sm-8 m-grid-col-xs-12 m-grid-col m-grid-col-bottom status_top_bar">
            <span class="status_top_span">UAUC Statistic</span>
        </div>

        <div class="m-grid-col-lg-2 m-grid-col-md-2 m-grid-col-sm-4 m-grid-col-xs-12 m-grid-col m-grid-col-bottom status_top_bar">
            <select class="bs-select form-control status_top_select">
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
            <div class="portlet-body">
                <div id="highstock_1" style="height:400px;"></div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
        <div class="portlet light portlet-fit bordered">
            <div class="portlet-title">
                <div class="caption">
                    <span class="caption-subject font-green bold italic">Current Open UAUC</span>
                </div>
            </div>
            <div class="portlet-body">
                <div id="highchart_1" style="height:300px;"></div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
        <div class="portlet light portlet-fit bordered">
            <div class="portlet-title">
                <div class="caption">
                    <span class="caption-subject font-green bold italic">Current Open UAUC</span>
                </div>
            </div>
            <div class="portlet-body">
                <div id="highchart_2" style="height:300px;"></div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('child_js')
<script src="{{ asset('metro/assets/global/plugins/highstock/js/highstock.js')}}" type="text/javascript"></script>
<script src="{{ asset('js/status.js')}}" type="text/javascript"></script>
@endsection