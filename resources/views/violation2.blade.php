@extends('layouts.app')

@section('child_css')
<link href="{{ asset('metro/assets/global/plugins/datatables/datatables.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ asset('metro/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ asset('css/violation.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
<div class="m-grid violation_top">
    <div class="m-grid-row">
        <div class="m-grid-col-lg-12 m-grid-col-md-12 m-grid-col-sm-12 m-grid-col-xs-12 m-grid-col m-grid-col-bottom violation2_top_bar">
            <span class="violation_top_span">Potential Violation Of Zeto Rules</span>
        </div>
    </div>
</div>
<div class="clearfix"></div>
<div class="row">
    <div class="col-md-12 violation_portlet_3">
        <div class="portlet light portlet-fit bordered">
            <div class="portlet-body">
                <div class="row">
                    <div class="col-md-2 violation_portlet_3_span"> 
                        <i class="fa fa-chevron-circle-left violation_portlet_3_fav"></i>
                        <span class="violation_portlet_3_1_span">ZeTo Rule</span>
                    </div>
                    <div class="col-md-6 violation_portlet_3_span"> 
                        <img src="{{ asset('media/i1.png')}}" height="40px" alt="logo" /> 
                        <span class="second_span">Use the correct PPE when handling hazardous chemicals</span>
                    </div>
                    <div class="col-md-4 violation_portlet_3_span"> 
                        <span class="first_span">Count of Potential Violated UAUC</span>
                        <span class="second_span">53</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="col-md-3 violation_portlet_1">
            <div class="portlet light portlet-fit bordered">
                <div class="portlet-body">
                    <div class="row">
                        <div class="col-md-6 text-left">
                            <span class="violation_portlet_1_1">Location</span>
                        </div>
                        <div class="col-md-6 text-right">
                            <div class="btn-group">
                                <button type="button" class="btn btn-default active">Exclude Null</button>
                                <button type="button" class="btn btn-default">All</button>
                            </div>
                        </div>
                        <div id="location-bar"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 violation_portlet_1">
            <div class="portlet light portlet-fit bordered">
                <div class="portlet-body">
                    <div class="row">
                        <div class="col-md-6 text-left">
                            <span class="violation_portlet_1_1">Activity</span>
                        </div>
                        <div class="col-md-6 text-right">
                            <div class="btn-group">
                                <button type="button" class="btn btn-default active">Exclude Null</button>
                                <button type="button" class="btn btn-default">All</button>
                            </div>
                        </div>
                        <div id="activity-bar"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 violation_portlet_1">
            <div class="portlet light portlet-fit bordered">
                <div class="portlet-body">
                    <div class="row">
                        <div class="col-md-12 text-left">
                            <span class="violation_portlet_1_1">Reported Personal</span>
                        </div>
                        <div id="report-pie"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 violation_portlet_1">
            <div class="portlet light portlet-fit bordered">
                <div class="portlet-body">
                    <div class="row">
                        <div class="col-md-12 text-left">
                            <span class="violation_portlet_1_1">Entity</span>
                        </div>
                        <div class="col-md-12 text-left">
                            <span class="violation_portlet_1_2">Not available</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="clearfix"></div>
<div class="row">
    <div class="col-md-12">
        <div class="col-md-2 violation_portlet_2">
            <div class="portlet light portlet-fit bordered">
                <div class="portlet-body">
                    <div class="row">
                        <div class="col-md-12 text-left violation_portlet_2_title">
                            <span class="violation_portlet_2_1">UAUC Status</span>
                        </div>
                        <div class="col-md-12 violation_portlet_2_2">
                            <div class="col-md-6 pl-0 text-left">
                                <span class="violation_portlet_2_2_1">Open</span>
                            </div>
                            <div class="col-md-6 text-right">
                                <span class="violation_portlet_2_2_2">24</span>
                            </div>
                        </div>
                        <div class="col-md-12 violation_portlet_2_2">
                            <div class="col-md-6 pl-0 text-left violation_portlet_2_border">
                                <span class="violation_portlet_2_2_1">Closed</span>
                            </div>
                            <div class="col-md-6 text-right violation_portlet_2_border">
                                <span class="violation_portlet_2_2_2">55</span>
                            </div>
                        </div>
                        <div class="col-md-12 violation_portlet_2_2">
                            <div class="col-md-6 pl-0 text-left violation_portlet_2_border">
                                <span class="violation_portlet_2_2_1">Total</span>
                            </div>
                            <div class="col-md-6 text-right violation_portlet_2_border">
                                <span class="violation_portlet_2_2_2">79</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 violation_portlet_2">
            <div class="portlet light portlet-fit bordered">
                <div class="portlet-body">
                    <div class="row">
                        <div class="col-md-12 text-left">
                            <span class="violation_portlet_2_1">Probable Incident</span>
                        </div>
                        <div id="probable-pie"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 violation_portlet_2">
            <div class="portlet light portlet-fit bordered">
                <div class="portlet-body">
                    <div class="row">
                        <div class="col-md-12 text-left violation_portlet_2_title">
                            <span class="violation_portlet_2_1">Observer</span>
                        </div>
                        <div class="col-md-12">
                            <div class="col-md-4 text-center">
                                <span class="violation_portlet_2_3_1">42%</span>
                            </div>
                            <div class="col-md-8">
                                <span class="violation_portlet_2_3_2">of reported UAUC are submitted by the same personnel</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 violation_portlet_2">
            <div class="portlet light portlet-fit bordered">
                <div class="portlet-body">
                    <div class="row">
                        <div class="col-md-12 text-left violation_portlet_2_title">
                            <span class="violation_portlet_2_1">Related Past violation</span>
                        </div>
                        <div class="col-md-12">
                            <div class="col-md-12 violation_portlet_2_padding_0 violation_portlet_2_4">
                                <div class="col-md-4 violation_portlet_2_padding_0">
                                    <span class="violation_portlet_2_4_2">2017/05/24</span>
                                </div>
                                <div class="col-md-4 violation_portlet_2_padding_0">
                                    <span class="violation_portlet_2_4_3">Personal Injury</span>
                                </div>
                                <div class="col-md-4 violation_portlet_2_padding_0">
                                    <span class="violation_portlet_2_4_3">Dulang B</span>
                                    <a href="javascript:;"><i class="fa fa-angle-right violation_portlet_2_fav"></i></a>
                                </div>
                            </div>
                            <div class="col-md-12 violation_portlet_2_padding_0 violation_portlet_2_4">
                                <div class="col-md-4 violation_portlet_2_padding_0">
                                    <span class="violation_portlet_2_4_2">2017/05/24</span>
                                </div>
                                <div class="col-md-4 violation_portlet_2_padding_0">
                                    <span class="violation_portlet_2_4_3">Personal Injury</span>
                                </div>
                                <div class="col-md-4 violation_portlet_2_padding_0">
                                    <span class="violation_portlet_2_4_3">Dulang A</span>
                                    <a href="javascript:;"><i class="fa fa-angle-right violation_portlet_2_fav"></i></a>
                                </div>
                            </div>
                            <div class="col-md-12 violation_portlet_2_padding_0 violation_portlet_2_4">
                                <div class="col-md-4 violation_portlet_2_padding_0">
                                    <span class="violation_portlet_2_4_2">2017/05/24</span>
                                </div>
                                <div class="col-md-4 violation_portlet_2_padding_0">
                                    <span class="violation_portlet_2_4_3">Personal Injury</span>
                                </div>
                                <div class="col-md-4 violation_portlet_2_padding_0">
                                    <span class="violation_portlet_2_4_3">Dulang C</span>
                                    <a href="javascript:;"><i class="fa fa-angle-right violation_portlet_2_fav"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="clearfix"></div>
<div class="row">
    <div class="col-md-12">
        <div class="portlet light portlet-fit bordered">
            <div class="portlet-body">
                <table class="table table-striped table-bordered table-hover" id="sample_1">
                    <thead>
                        <tr>
                            <th> Rendering engine </th>
                            <th> Browser </th>
                            <th> Platform(s) </th>
                            <th> Engine version </th>
                            <th> CSS grade </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td> Trident </td>
                            <td> Internet Explorer 4.0 </td>
                            <td> Win 95+ </td>
                            <td> 4 </td>
                            <td> X </td>
                        </tr>
                        <tr>
                            <td> Trident </td>
                            <td> Internet Explorer 5.0 </td>
                            <td> Win 95+ </td>
                            <td> 5 </td>
                            <td> C </td>
                        </tr>
                        <tr>
                            <td> Trident </td>
                            <td> Internet Explorer 5.5 </td>
                            <td> Win 95+ </td>
                            <td> 5.5 </td>
                            <td> A </td>
                        </tr>
                        <tr>
                            <td> Trident </td>
                            <td> Internet Explorer 6 </td>
                            <td> Win 98+ </td>
                            <td> 6 </td>
                            <td> A </td>
                        </tr>
                        <tr>
                            <td> Trident </td>
                            <td> Internet Explorer 7 </td>
                            <td> Win XP SP2+ </td>
                            <td> 7 </td>
                            <td> A </td>
                        </tr>
                        <tr>
                            <td> Trident </td>
                            <td> AOL browser (AOL desktop) </td>
                            <td> Win XP </td>
                            <td> 6 </td>
                            <td> A </td>
                        </tr>
                        <tr>
                            <td> Gecko </td>
                            <td> Firefox 1.0 </td>
                            <td> Win 98+ / OSX.2+ </td>
                            <td> 1.7 </td>
                            <td> A </td>
                        </tr>
                        <tr>
                            <td> Gecko </td>
                            <td> Firefox 1.5 </td>
                            <td> Win 98+ / OSX.2+ </td>
                            <td> 1.8 </td>
                            <td> A </td>
                        </tr>
                        <tr>
                            <td> Gecko </td>
                            <td> Firefox 2.0 </td>
                            <td> Win 98+ / OSX.2+ </td>
                            <td> 1.8 </td>
                            <td> A </td>
                        </tr>
                        <tr>
                            <td> Gecko </td>
                            <td> Firefox 3.0 </td>
                            <td> Win 2k+ / OSX.3+ </td>
                            <td> 1.9 </td>
                            <td> A </td>
                        </tr>
                        <tr>
                            <td> Gecko </td>
                            <td> Camino 1.0 </td>
                            <td> OSX.2+ </td>
                            <td> 1.8 </td>
                            <td> A </td>
                        </tr>
                        <tr>
                            <td> Gecko </td>
                            <td> Camino 1.5 </td>
                            <td> OSX.3+ </td>
                            <td> 1.8 </td>
                            <td> A </td>
                        </tr>
                        <tr>
                            <td> Gecko </td>
                            <td> Netscape 7.2 </td>
                            <td> Win 95+ / Mac OS 8.6-9.2 </td>
                            <td> 1.7 </td>
                            <td> A </td>
                        </tr>
                        <tr>
                            <td> Gecko </td>
                            <td> Netscape Browser 8 </td>
                            <td> Win 98SE+ </td>
                            <td> 1.7 </td>
                            <td> A </td>
                        </tr>
                        <tr>
                            <td> Gecko </td>
                            <td> Netscape Navigator 9 </td>
                            <td> Win 98+ / OSX.2+ </td>
                            <td> 1.8 </td>
                            <td> A </td>
                        </tr>
                        <tr>
                            <td> Gecko </td>
                            <td> Mozilla 1.0 </td>
                            <td> Win 95+ / OSX.1+ </td>
                            <td> 1 </td>
                            <td> A </td>
                        </tr>
                        <tr>
                            <td> Gecko </td>
                            <td> Mozilla 1.1 </td>
                            <td> Win 95+ / OSX.1+ </td>
                            <td> 1.1 </td>
                            <td> A </td>
                        </tr>
                        <tr>
                            <td> Gecko </td>
                            <td> Mozilla 1.2 </td>
                            <td> Win 95+ / OSX.1+ </td>
                            <td> 1.2 </td>
                            <td> A </td>
                        </tr>
                        <tr>
                            <td> Gecko </td>
                            <td> Mozilla 1.3 </td>
                            <td> Win 95+ / OSX.1+ </td>
                            <td> 1.3 </td>
                            <td> A </td>
                        </tr>
                        <tr>
                            <td> Gecko </td>
                            <td> Mozilla 1.4 </td>
                            <td> Win 95+ / OSX.1+ </td>
                            <td> 1.4 </td>
                            <td> A </td>
                        </tr>
                        <tr>
                            <td> Gecko </td>
                            <td> Mozilla 1.5 </td>
                            <td> Win 95+ / OSX.1+ </td>
                            <td> 1.5 </td>
                            <td> A </td>
                        </tr>
                        <tr>
                            <td> Gecko </td>
                            <td> Mozilla 1.6 </td>
                            <td> Win 95+ / OSX.1+ </td>
                            <td> 1.6 </td>
                            <td> A </td>
                        </tr>
                        <tr>
                            <td> Gecko </td>
                            <td> Mozilla 1.7 </td>
                            <td> Win 98+ / OSX.1+ </td>
                            <td> 1.7 </td>
                            <td> A </td>
                        </tr>
                        <tr>
                            <td> Gecko </td>
                            <td> Mozilla 1.8 </td>
                            <td> Win 98+ / OSX.1+ </td>
                            <td> 1.8 </td>
                            <td> A </td>
                        </tr>
                        <tr>
                            <td> Gecko </td>
                            <td> Seamonkey 1.1 </td>
                            <td> Win 98+ / OSX.2+ </td>
                            <td> 1.8 </td>
                            <td> A </td>
                        </tr>
                        <tr>
                            <td> Gecko </td>
                            <td> Epiphany 2.20 </td>
                            <td> Gnome </td>
                            <td> 1.8 </td>
                            <td> A </td>
                        </tr>
                        <tr>
                            <td> Webkit </td>
                            <td> Safari 1.2 </td>
                            <td> OSX.3 </td>
                            <td> 125.5 </td>
                            <td> A </td>
                        </tr>
                        <tr>
                            <td> Webkit </td>
                            <td> Safari 1.3 </td>
                            <td> OSX.3 </td>
                            <td> 312.8 </td>
                            <td> A </td>
                        </tr>
                        <tr>
                            <td> Webkit </td>
                            <td> Safari 2.0 </td>
                            <td> OSX.4+ </td>
                            <td> 419.3 </td>
                            <td> A </td>
                        </tr>
                        <tr>
                            <td> Webkit </td>
                            <td> Safari 3.0 </td>
                            <td> OSX.4+ </td>
                            <td> 522.1 </td>
                            <td> A </td>
                        </tr>
                        <tr>
                            <td> Webkit </td>
                            <td> OmniWeb 5.5 </td>
                            <td> OSX.4+ </td>
                            <td> 420 </td>
                            <td> A </td>
                        </tr>
                        <tr>
                            <td> Webkit </td>
                            <td> iPod Touch / iPhone </td>
                            <td> iPod </td>
                            <td> 420.1 </td>
                            <td> A </td>
                        </tr>
                        <tr>
                            <td> Webkit </td>
                            <td> S60 </td>
                            <td> S60 </td>
                            <td> 413 </td>
                            <td> A </td>
                        </tr>
                        <tr>
                            <td> Presto </td>
                            <td> Opera 7.0 </td>
                            <td> Win 95+ / OSX.1+ </td>
                            <td> - </td>
                            <td> A </td>
                        </tr>
                        <tr>
                            <td> Presto </td>
                            <td> Opera 7.5 </td>
                            <td> Win 95+ / OSX.2+ </td>
                            <td> - </td>
                            <td> A </td>
                        </tr>
                        <tr>
                            <td> Presto </td>
                            <td> Opera 8.0 </td>
                            <td> Win 95+ / OSX.2+ </td>
                            <td> - </td>
                            <td> A </td>
                        </tr>
                        <tr>
                            <td> Presto </td>
                            <td> Opera 8.5 </td>
                            <td> Win 95+ / OSX.2+ </td>
                            <td> - </td>
                            <td> A </td>
                        </tr>
                        <tr>
                            <td> Presto </td>
                            <td> Opera 9.0 </td>
                            <td> Win 95+ / OSX.3+ </td>
                            <td> - </td>
                            <td> A </td>
                        </tr>
                        <tr>
                            <td> Presto </td>
                            <td> Opera 9.2 </td>
                            <td> Win 88+ / OSX.3+ </td>
                            <td> - </td>
                            <td> A </td>
                        </tr>
                        <tr>
                            <td> Presto </td>
                            <td> Opera 9.5 </td>
                            <td> Win 88+ / OSX.3+ </td>
                            <td> - </td>
                            <td> A </td>
                        </tr>
                        <tr>
                            <td> Presto </td>
                            <td> Opera for Wii </td>
                            <td> Wii </td>
                            <td> - </td>
                            <td> A </td>
                        </tr>
                        <tr>
                            <td> Presto </td>
                            <td> Nokia N800 </td>
                            <td> N800 </td>
                            <td> - </td>
                            <td> A </td>
                        </tr>
                        <tr>
                            <td> Presto </td>
                            <td> Nintendo DS browser </td>
                            <td> Nintendo DS </td>
                            <td> 8.5 </td>
                            <td> C/A
                                <sup>1</sup>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection

@section('child_js')
<script src="{{ asset('metro/assets/global/plugins/highstock/js/highstock.js')}}" type="text/javascript"></script>
<script src="{{ asset('js/violation.js')}}" type="text/javascript"></script> 
<script src="{{ asset('metro/assets/global/scripts/datatable.js')}}" type="text/javascript"></script>
<script src="{{ asset('metro/assets/global/plugins/datatables/datatables.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('metro/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js')}}" type="text/javascript"></script>   
@endsection