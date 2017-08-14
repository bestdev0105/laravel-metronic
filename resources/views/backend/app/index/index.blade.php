@extends('backend.layout.master')

@section('content')
<div class="page-content">
    <!-- BEGIN PAGE HEADER-->
    <!-- BEGIN PAGE BAR -->
    <div class="page-bar">
        <ul class="page-breadcrumb">
            <li>
                <a href="index.html">Home</a>
                <i class="fa fa-circle"></i>
            </li>
            <li>
                <a href="#">Blank Page</a>
                <i class="fa fa-circle"></i>
            </li>
            <li>
                <span>Page Layouts</span>
            </li>
        </ul>
    </div>
    <!-- END PAGE BAR -->
    <!-- BEGIN PAGE TITLE-->
    <h1 class="page-title"> Blank Page Layout
        <small>blank page layout</small>
    </h1>
    <!-- END PAGE TITLE-->
    <!-- END PAGE HEADER-->
    <div class="note note-info">
        <p> A black page template with a minimal dependency assets to use as a base for any custom page you create </p>
    </div>
</div>
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