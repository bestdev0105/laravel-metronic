@extends('layouts.app')

@section('child_css')
<link href="{{ asset('metro/assets/global/plugins/bootstrap-select/css/bootstrap-select.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ asset('css/dashboard.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
<div class="row">
    <div class="col-lg-3 col-md-3 col-xs-6 col-sm-12">
        <select class="bs-select form-control dash_top_select">
            <option>Peninsula Malaysia Asset (PMA)</option>
            <option>Peninsula Malaysia Asset (PMA)1</option>
            <option>Peninsula Malaysia Asset (PMA)2</option>
        </select>
    </div>
    <div class="col-lg-7 col-md-7 col-xs-6 col-sm-12">
        
    </div>
    <div class="col-lg-2 col-md-2 col-xs-6 col-sm-12">
        <select class="bs-select form-control dash_top_select">
            <option>Yesterday</option>
            <option>15 days ago</option>
            <option>one month ago</option>
        </select>
    </div>
</div>
<div class="clearfix"></div>
@endsection

@section('child_js')
@endsection
