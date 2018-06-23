@extends('layouts.app')

@section('child_css')
<link href="{{ asset('css/violation.css')}}" rel="stylesheet" type="text/css" />
    
@endsection

@section('content')
<div class="m-grid violation_top">
    <div class="m-grid-row">
        <div class="m-grid-col-lg-8 m-grid-col-md-8 m-grid-col-sm-6 m-grid-col-xs-12 m-grid-col m-grid-col-bottom violation_top_bar">
            <span class="violation_top_span">Potential Violation Of Zeto Rules</span>
        </div>

        <div class="m-grid-col-lg-2 m-grid-col-md-2 m-grid-col-sm-3 m-grid-col-xs-12 m-grid-col m-grid-col-bottom violation_top_bar">
            <select class="bs-select form-control violation_top_select">
                <option>All Fields</option>
                <option>Ketchup</option>
                <option>Relish</option>
            </select>
        </div>

        <div class="m-grid-col-lg-2 m-grid-col-md-2 m-grid-col-sm-3 m-grid-col-xs-12 m-grid-col m-grid-col-bottom violation_top_bar">
            <select class="bs-select form-control violation_top_select">
                <option>Yesterday</option>
                <option>15 days</option>
                <option>1 month</option>
            </select>
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
                            <a href="javascript:;"><i class="fa fa-chevron-circle-right violation_portlet_2_fav"></i></a>
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
    <div class="col-md-12 violation_portlet_3">
        <div class="portlet light portlet-fit bordered">
            <div class="portlet-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-5 col-md-offset-1">Zeto Rules</div>
                        <div class="col-md-5">Breakdown</div>
                        <div class="col-md-1">Count of Violated UAUC</div>
                    </div>
                    <a href="/potential_violation2" class="col-md-12 violation_portlet_3_a">
                        <div class="col-md-1">
                            <img src="{{ asset('media/i1.png')}}" height="50px" alt="logo" /> 
                        </div>
                        <div class="col-md-5">
                            <span class="violation_portlet_3_1">Use the correct PPE when handling hazard Chemicals</span>
                        </div>
                        <div class="col-md-5">
                            <span name="poll_bar"></span>
                            <span name="poll_val" class="violation_portlet_3_span_1_val">16%</span>
                        </div>
                        <div class="col-md-1"><span class="violation_portlet_3_span_2_val">53</span></div>
                    </a>
                    <a href="/potential_violation2" class="col-md-12 violation_portlet_3_a">
                        <div class="col-md-1">
                            <img src="{{ asset('media/i2.png')}}" height="50px" alt="logo" /> 
                        </div>
                        <div class="col-md-5">
                            <span class="violation_portlet_3_1">Do not position yourself under a suspende load</span>
                        </div>
                        <div class="col-md-5">
                            <span name="poll_bar"></span>
                            <span name="poll_val" class="violation_portlet_3_span_1_val">13%</span>
                        </div>
                        <div class="col-md-1"><span class="violation_portlet_3_span_2_val">41</span></div>
                    </a>
                    <a href="/potential_violation2" class="col-md-12 violation_portlet_3_a">
                        <div class="col-md-1">
                            <img src="{{ asset('media/i3.png')}}" height="50px" alt="logo" /> 
                        </div>
                        <div class="col-md-5">
                            <span class="violation_portlet_3_1">Do not smoke outside designated areas or bring potential ignition sources into process areas without authorization</span>
                        </div>
                        <div class="col-md-5">
                            <span name="poll_bar"></span>
                            <span name="poll_val" class="violation_portlet_3_span_1_val">11%</span>
                        </div>
                        <div class="col-md-1"><span class="violation_portlet_3_span_2_val">35</span></div>
                    </a>
                    <a href="/potential_violation2" class="col-md-12 violation_portlet_3_a">
                        <div class="col-md-1">
                            <img src="{{ asset('media/i4.png')}}" height="50px" alt="logo" /> 
                        </div>
                        <div class="col-md-5">
                            <span class="violation_portlet_3_1">Work with a valid work permit (PTW) required by the job</span>
                        </div>
                        <div class="col-md-5">
                            <span name="poll_bar"></span>
                            <span name="poll_val" class="violation_portlet_3_span_1_val">10%</span>
                        </div>
                        <div class="col-md-1"><span class="violation_portlet_3_span_2_val">34</span></div>
                    </a>
                    <a href="/potential_violation2" class="col-md-12 violation_portlet_3_a">
                        <div class="col-md-1">
                            <img src="{{ asset('media/i5.png')}}" height="50px" alt="logo" /> 
                        </div>
                        <div class="col-md-5">
                            <span class="violation_portlet_3_1">Verify energy isolation before</span>
                        </div>
                        <div class="col-md-5">
                            <span name="poll_bar"></span>
                            <span name="poll_val" class="violation_portlet_3_span_1_val">10%</span>
                        </div>
                        <div class="col-md-1"><span class="violation_portlet_3_span_2_val">33</span></div>
                    </a>
                    <a href="/potential_violation2" class="col-md-12 violation_portlet_3_a">
                        <div class="col-md-1">
                            <img src="{{ asset('media/i6.png')}}" height="50px" alt="logo" /> 
                        </div>
                        <div class="col-md-5">
                            <span class="violation_portlet_3_1">Obtain authorization before overriding or disabling safety critical equipment</span>
                        </div>
                        <div class="col-md-5">
                            <span name="poll_bar"></span>
                            <span name="poll_val" class="violation_portlet_3_span_1_val">10%</span>
                        </div>
                        <div class="col-md-1"><span class="violation_portlet_3_span_2_val">32</span></div>
                    </a>
                    <a href="/potential_violation2" class="col-md-12 violation_portlet_3_a">
                        <div class="col-md-1">
                            <img src="{{ asset('media/i7.png')}}" height="50px" alt="logo" /> 
                        </div>
                        <div class="col-md-5">
                            <span class="violation_portlet_3_1">Obtain authorization before entering a confined space</span>
                        </div>
                        <div class="col-md-5">
                            <span name="poll_bar"></span>
                            <span name="poll_val" class="violation_portlet_3_span_1_val">9%</span>
                        </div>
                        <div class="col-md-1"><span class="violation_portlet_3_span_2_val">31</span></div>
                    </a>
                    <a href="/potential_violation2" class="col-md-12 violation_portlet_3_a">
                        <div class="col-md-1">
                            <img src="{{ asset('media/i8.png')}}" height="50px" alt="logo" /> 
                        </div>
                        <div class="col-md-5">
                            <span class="violation_portlet_3_1">Protect yourself against a fall when working at height</span>
                        </div>
                        <div class="col-md-5">
                            <span name="poll_bar"></span>
                            <span name="poll_val" class="violation_portlet_3_span_1_val">9%</span>
                        </div>
                        <div class="col-md-1"><span class="violation_portlet_3_span_2_val">30</span></div>
                    </a>
                    <a href="/potential_violation2" class="col-md-12 violation_portlet_3_a">
                        <div class="col-md-1">
                            <img src="{{ asset('media/i9.png')}}" height="50px" alt="logo" /> 
                        </div>
                        <div class="col-md-5">
                            <span class="violation_portlet_3_1">Obtain authorization before excavation or entering a trench</span>
                        </div>
                        <div class="col-md-5">
                            <span name="poll_bar"></span>
                            <span name="poll_val" class="violation_portlet_3_span_1_val">8%</span>
                        </div>
                        <div class="col-md-1"><span class="violation_portlet_3_span_2_val">25</span></div>
                    </a>
                    <a href="/potential_violation2" class="col-md-12 violation_portlet_3_a">
                        <div class="col-md-1">
                            <img src="{{ asset('media/i10.png')}}" height="50px" alt="logo" /> 
                        </div>
                        <div class="col-md-5">
                            <span class="violation_portlet_3_1">Do not use your mobile phone/walkie-talkie while driving, follow the speed limit and use your seat belt</span>
                        </div>
                        <div class="col-md-5">
                            <span name="poll_bar"></span>
                            <span name="poll_val" class="violation_portlet_3_span_1_val">4%</span>
                        </div>
                        <div class="col-md-1"><span class="violation_portlet_3_span_2_val">13</span></div>
                    </a>
                    <div class="col-md-12 violation_portlet_3_a">
                        <div class="col-md-2 col-md-offset-10 violation_portlet_3_total_div text-center">
                            <span class="violation_portlet_3_total">Total</span>
                            <span class="violation_portlet_3_total_num font-purple">327</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('child_js')
<script src="{{ asset('metro/assets/global/plugins/highstock/js/highstock.js')}}" type="text/javascript"></script>
<script src="{{ asset('js/violation.js')}}" type="text/javascript"></script> 
    
@endsection