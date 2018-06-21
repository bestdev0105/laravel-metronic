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
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>{{ config('app.name', 'Laravel') }}</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="{{ asset('metro/assets/global/plugins/font-awesome/css/fontawesome-all.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('metro/assets/global/plugins/simple-line-icons/simple-line-icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('metro/assets/global/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('metro/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="{{ asset('metro/assets/global/css/components-rounded.min.css')}}" rel="stylesheet" id="style_components" type="text/css" />
        <link href="{{ asset('metro/assets/global/css/plugins.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="{{ asset('metro/assets/layouts/layout/css/layout.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('metro/assets/layouts/layout/css/themes/darkblue.min.css')}}" rel="stylesheet" type="text/css" id="style_color" />
        <link href="{{ asset('metro/assets/layouts/layout/css/custom.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- END THEME LAYOUT STYLES -->
        <!-- BEGIN COMMON CUSTOM LAYOUT STYLES -->
        <link href="{{ asset('css/common_custom.css')}}" rel="stylesheet" type="text/css" />
        <!-- END COMMON CUSTOM LAYOUT STYLES -->
        @yield('child_css')
        <link rel="shortcut icon" href="favicon.ico" /> </head>
    <!-- END HEAD -->

    <body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white">
        <div class="page-wrapper">
            <!-- BEGIN HEADER -->
            <div class="page-header navbar navbar-fixed-top">
                <!-- BEGIN HEADER INNER -->
                <div class="page-header-inner ">
                    <!-- BEGIN LOGO -->
                    <div class="page-logo">
                        <div class="menu-toggler sidebar-toggler">
                            <span></span>
                        </div>
                    </div>
                    <!-- END LOGO -->
                    <a href="/home" style="margin-left:10px">
                        <img src="{{ asset('media/petronas_logo_48.png')}}" height="50px" alt="logo" class="logo-default" /> </a>
                    <span class="site-title-span">UAUC Insights Dashboard</span>
                    <!-- BEGIN TOP NAVIGATION MENU -->
                    <div class="top-menu">
                        <ul class="nav navbar-nav pull-right">
                            <!-- BEGIN USER LOGIN DROPDOWN -->
                            <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                            <li class="dropdown dropdown-user">
                                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                    <img alt="" class="img-circle" src="{{ asset('metro/assets/layouts/layout/img/avatar3_small.jpg')}}" />
                                    <span class="username username-hide-on-mobile"> Nick </span>
                                    <i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-default">
                                    <li>
                                        <a href="page_user_profile_1.html">
                                            <i class="icon-user"></i> My Profile </a>
                                    </li>
                                    <li>
                                        <a href="page_user_login_1.html">
                                            <i class="icon-key"></i> Log Out </a>
                                    </li>
                                </ul>
                            </li>
                            <!-- END USER LOGIN DROPDOWN -->
                        </ul>
                    </div>
                    <!-- END TOP NAVIGATION MENU -->
                </div>
                <!-- END HEADER INNER -->
            </div>
            <!-- END HEADER -->
            <!-- BEGIN HEADER & CONTENT DIVIDER -->
            <div class="clearfix"> </div>
            <!-- END HEADER & CONTENT DIVIDER -->
            <!-- BEGIN CONTAINER -->
            <div class="page-container">
                <!-- BEGIN SIDEBAR -->
                <div class="page-sidebar-wrapper">
                    <!-- BEGIN SIDEBAR -->
                    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                    <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                    <div class="page-sidebar navbar-collapse collapse">
                        <!-- BEGIN SIDEBAR MENU -->
                        <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
                        <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
                        <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
                        <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                        <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
                        <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                        <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
                            <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
                            <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                            <li class="sidebar-toggler-wrapper hide">
                                <div class="sidebar-toggler">
                                    <span></span>
                                </div>
                            </li>
                            <!-- END SIDEBAR TOGGLER BUTTON -->
                            <!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
                            <li class="nav-item @if($selectmenu == 'home') active @endif">
                                <a href="@if($selectmenu == 'home') javascript:; @else /home @endif" class="nav-link nav-toggle">
                                    <i class="fas fa-home"></i>
                                    <span class="title">Dashboard</span>
                                    @if($selectmenu == 'home') 
                                    <span class="selected"></span>
                                    @endif
                                </a>
                            </li>
                            <li class="nav-item @if($selectmenu == 'status') active @endif ">
                                <a href="@if($selectmenu == 'status') javascript:; @else /status @endif" class="nav-link nav-toggle">
                                    <i class="fas fa-chart-bar"></i>
                                    <span class="title">UAUC Status</span>
                                    @if($selectmenu == 'status') 
                                    <span class="selected"></span>
                                    @endif
                                </a>
                            </li>
                            <li class="nav-item @if($selectmenu == 'probable_incidents') active @endif ">
                                <a href="@if($selectmenu == 'probable_incidents') javascript:; @else /probable_incidents @endif" class="nav-link nav-toggle">
                                    <i class="fas fa-exclamation-triangle"></i>
                                    <span class="title">Probable Incidents</span>
                                    @if($selectmenu == 'probable_incidents') 
                                    <span class="selected"></span>
                                    @endif
                                </a>
                            </li>
                            <li class="nav-item @if($selectmenu == 'underlying_risk') active @endif ">
                                <a href="@if($selectmenu == 'underlying_risk') javascript:; @else /underlying_risk @endif" class="nav-link nav-toggle">
                                    <i class="fas fa-search"></i>
                                    <span class="title">Underlying Risk</span>
                                    @if($selectmenu == 'underlying_risk') 
                                    <span class="selected"></span>
                                    @endif
                                </a>
                            </li>
                            <li class="nav-item @if($selectmenu == 'anomaly') active @endif ">
                                <a href="@if($selectmenu == 'anomaly') javascript:; @else /anomaly @endif" class="nav-link nav-toggle">
                                    <i class="fas fa-chart-line"></i>
                                    <span class="title">Anomaly</span>
                                    @if($selectmenu == 'anomaly') 
                                    <span class="selected"></span>
                                    @endif
                                </a>
                            </li>
                            <li class="nav-item @if($selectmenu == 'duplication_reports') active @endif ">
                                <a href="@if($selectmenu == 'duplication_reports') javascript:; @else /duplication_reports @endif" class="nav-link nav-toggle">
                                    <i class="fas fa-copy"></i>
                                    <span class="title">Duplication Reports</span>
                                    @if($selectmenu == 'duplication_reports') 
                                    <span class="selected"></span>
                                    @endif
                                </a>
                            </li>
                            <li class="nav-item @if($selectmenu == 'potential_violation') active @endif ">
                                <a href="@if($selectmenu == 'potential_violation') javascript:; @else /potential_violation @endif" class="nav-link nav-toggle">
                                    <i class="fas fa-th-list"></i>
                                    <span class="title">Potential Violation</span>
                                    @if($selectmenu == 'potential_violation') 
                                    <span class="selected"></span>
                                    @endif
                                </a>
                            </li>
                            <li class="nav-item @if($selectmenu == 'observation') active @endif ">
                                <a href="@if($selectmenu == 'observation') javascript:; @else /observation @endif" class="nav-link nav-toggle">
                                    <i class="fas fa-th-large"></i>
                                    <span class="title">Observation</span>
                                    @if($selectmenu == 'observation') 
                                    <span class="selected"></span>
                                    @endif
                                </a>
                            </li>
                        </ul>
                        <!-- END SIDEBAR MENU -->
                    </div>
                    <!-- END SIDEBAR -->
                </div>
                <!-- END SIDEBAR -->
                <!-- BEGIN CONTENT -->
                <div class="page-content-wrapper">
                    <!-- BEGIN CONTENT BODY -->
                    <div class="page-content">
                        @yield('content')
                    </div>
                    <!-- END CONTENT BODY -->
                </div>
                <!-- END CONTENT -->
            </div>
            <!-- END CONTAINER -->
        </div>

        <!--[if lt IE 9]>
        <script src="{{ asset('metro/assets/global/plugins/respond.min.js')}}"></script>
        <script src="{{ asset('metro/assets/global/plugins/excanvas.min.js')}}"></script> 
        <script src="{{ asset('metro/assets/global/plugins/ie8.fix.min.js')}}"></script> 
        <![endif]-->
        <!-- BEGIN CORE PLUGINS -->
        <script src="{{ asset('metro/assets/global/plugins/jquery.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('metro/assets/global/plugins/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('metro/assets/global/plugins/js.cookie.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('metro/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('metro/assets/global/plugins/jquery.blockui.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('metro/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js')}}" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="{{ asset('metro/assets/global/scripts/app.min.js')}}" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE CUSTOM SCRIPTS -->
        @yield('child_js')
        <!-- END PAGE CUSTOM SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="{{ asset('metro/assets/layouts/layout/scripts/layout.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('metro/assets/layouts/layout/scripts/demo.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('metro/assets/layouts/global/scripts/quick-sidebar.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('metro/assets/layouts/global/scripts/quick-nav.min.js')}}" type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
    </body>

</html>