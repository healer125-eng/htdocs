@extends('layouts.layout')

@section('content')

<!-- Begin Sidebar -->
<div class="page-sidebar-wrapper">
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
        <ul class="page-sidebar-menu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
            <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
            <li class="sidebar-toggler-wrapper">
                <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                <div class="sidebar-toggler">
                </div>
                <!-- END SIDEBAR TOGGLER BUTTON -->
            </li>
            <li class="start active open">
                <a href="{{ url('/home') }}">
                <i class="icon-home"></i>
                <span class="title">Cockpit</span>
                <span class="selected"></span>
                </a>
            </li>
            <li>
                <a href="{{ url('/messages') }}">
                <i class="icon-basket"></i>
                <span class="title">Messages</span>
                </a>
            </li>
            <li>
                <a href="{{ url('/bookings') }}">
                <i class="icon-rocket"></i>
                <span class="title">Bookings</span>
                </a>
            </li>
            <li>
                <a href="{{ url('/prices') }}">
                <i class="icon-diamond"></i>
                <span class="title">Prices</span>
                </a>
            </li>
            <li>
                <a href="{{ url('/contacts') }}">
                <i class="icon-puzzle"></i>
                <span class="title">Contacts</span>
                </a>
            </li>
            <li>
                <a href="{{ url('/settings') }}">
                <i class="icon-settings"></i>
                <span class="title">Settings</span>
                </a>
            </li>
            <li>
                <a href="{{ url('/services') }}">
                <i class="icon-briefcase"></i>
                <span class="title">Services</span>
                </a>
            </li>
            <li>
                <a href="{{ url('/reservations') }}">
                <i class="icon-wallet"></i>
                <span class="title">Reservations</span>
                </a>
            </li>
            <li>
                <a href="{{ url('/statistics') }}">
                <i class="icon-bar-chart"></i>
                <span class="title">Statistics</span>
                </a>
            </li>
            <li>
                <a href="{{ url('/invoices') }}">
                <i class="icon-docs"></i>
                <span class="title">Invoices</span>
                </a>
            </li>
            <li>
                <a href="{{ url('/chat') }}">
                <i class="icon-present"></i>
                <span class="title">Chat</span>
                </a>
            </li>
        </ul>
        <!-- END SIDEBAR MENU -->
    </div>
</div>
<!-- End Sidebar -->

<div class="page-content-wrapper">
    <div class="page-content">
        <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
        <div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                        <h4 class="modal-title">Modal title</h4>
                    </div>
                    <div class="modal-body">
                         Widget settings form goes here
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn blue">Save changes</button>
                        <button type="button" class="btn default" data-dismiss="modal">Close</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
        <!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
        <!-- BEGIN PAGE HEADER-->
        <div class="page-bar">
            <ul class="page-breadcrumb">
                <li>
                    <i class="fa fa-home"></i>
                    <a href="index.html">Home</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <a href="#">Cockpit</a>
                </li>
            </ul>
            <div class="page-toolbar">
                <div id="dashboard-report-range" class="pull-right tooltips btn btn-sm btn-default" data-container="body" data-placement="bottom" data-original-title="Change dashboard date range">
                    <i class="icon-calendar"></i>&nbsp; <span class="thin uppercase visible-lg-inline-block"></span>&nbsp; <i class="fa fa-angle-down"></i>
                </div>
            </div>
        </div>
        <!-- END PAGE HEADER-->
        <div class="clearfix">
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="portlet light">
                    <h3>Calendar</h3>
                    <div id="datepaginator_sample_2"></div>
                </div>
            </div>
        </div>
        <div class="clearfix">
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="portlet light ">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="icon-cursor font-purple-intense hide"></i>
                            <span class="caption-subject font-purple-intense bold uppercase">General Stats</span>
                        </div>
                        <div class="actions">
                            <a href="javascript:;" class="btn btn-sm btn-circle btn-default easy-pie-chart-reload">
                            <i class="fa fa-repeat"></i> Reload </a>
                        </div>
                    </div>
                    <div class="portlet-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="easy-pie-chart">
                                    <div class="number transactions" data-percent="55">
                                        <span>
                                        +55 </span>
                                        %
                                    </div>
                                    <a class="title" href="javascript:;">
                                    Transactions <i class="icon-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="margin-bottom-10 visible-sm">
                            </div>
                            <div class="col-md-4">
                                <div class="easy-pie-chart">
                                    <div class="number visits" data-percent="85">
                                        <span>
                                        +85 </span>
                                        %
                                    </div>
                                    <a class="title" href="javascript:;">
                                    New Visits <i class="icon-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="margin-bottom-10 visible-sm">
                            </div>
                            <div class="col-md-4">
                                <div class="easy-pie-chart">
                                    <div class="number bounce" data-percent="46">
                                        <span>
                                        -46 </span>
                                        %
                                    </div>
                                    <a class="title" href="javascript:;">
                                    Bounce <i class="icon-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="portlet light ">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="icon-equalizer font-purple-plum hide"></i>
                            <span class="caption-subject font-red-sunglo bold uppercase">Server Stats</span>
                            <span class="caption-helper">monthly stats...</span>
                        </div>
                        <div class="tools">
                            <a href="" class="collapse">
                            </a>
                            <a href="#portlet-config" data-toggle="modal" class="config">
                            </a>
                            <a href="" class="reload">
                            </a>
                            <a href="" class="remove">
                            </a>
                        </div>
                    </div>
                    <div class="portlet-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="sparkline-chart">
                                    <div class="number" id="sparkline_bar"></div>
                                    <a class="title" href="javascript:;">
                                    Network <i class="icon-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="margin-bottom-10 visible-sm">
                            </div>
                            <div class="col-md-4">
                                <div class="sparkline-chart">
                                    <div class="number" id="sparkline_bar2"></div>
                                    <a class="title" href="javascript:;">
                                    CPU Load <i class="icon-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="margin-bottom-10 visible-sm">
                            </div>
                            <div class="col-md-4">
                                <div class="sparkline-chart">
                                    <div class="number" id="sparkline_line"></div>
                                    <a class="title" href="javascript:;">
                                    Load Rate <i class="icon-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix">
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <!-- BEGIN PORTLET-->
                <div class="portlet light">
                    <div class="portlet-title tabbable-line">
                        <div class="caption">
                            <i class="icon-globe font-green-sharp"></i>
                            <span class="caption-subject font-green-sharp bold uppercase">Feeds</span>
                        </div>
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a href="#tab_1_1" data-toggle="tab">
                                System </a>
                            </li>
                            <li>
                                <a href="#tab_1_2" data-toggle="tab">
                                Activities </a>
                            </li>
                            <li>
                                <a href="#tab_1_3" data-toggle="tab">
                                Recent Users </a>
                            </li>
                        </ul>
                    </div>
                    <div class="portlet-body">
                        <!--BEGIN TABS-->
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab_1_1">
                                <div class="scroller" style="height: 339px;" data-always-visible="1" data-rail-visible="0">
                                    <ul class="feeds">
                                        <li>
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-sm label-success">
                                                            <i class="fa fa-bell-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc">
                                                             You have 4 pending tasks. <span class="label label-sm label-info">
                                                            Take action <i class="fa fa-share"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <div class="date">
                                                     Just now
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-sm label-success">
                                                            <i class="fa fa-bell-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc">
                                                             New version v1.4 just lunched!
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <div class="date">
                                                     20 mins
                                                </div>
                                            </div>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-sm label-danger">
                                                            <i class="fa fa-bolt"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc">
                                                             Database server #12 overloaded. Please fix the issue.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <div class="date">
                                                     24 mins
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-sm label-info">
                                                            <i class="fa fa-bullhorn"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc">
                                                             New order received. Please take care of it.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <div class="date">
                                                     30 mins
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-sm label-success">
                                                            <i class="fa fa-bullhorn"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc">
                                                             New order received. Please take care of it.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <div class="date">
                                                     40 mins
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-sm label-warning">
                                                            <i class="fa fa-plus"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc">
                                                             New user registered.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <div class="date">
                                                     1.5 hours
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-sm label-success">
                                                            <i class="fa fa-bell-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc">
                                                             Web server hardware needs to be upgraded. <span class="label label-sm label-default ">
                                                            Overdue </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <div class="date">
                                                     2 hours
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-sm label-default">
                                                            <i class="fa fa-bullhorn"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc">
                                                             New order received. Please take care of it.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <div class="date">
                                                     3 hours
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-sm label-warning">
                                                            <i class="fa fa-bullhorn"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc">
                                                             New order received. Please take care of it.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <div class="date">
                                                     5 hours
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-sm label-info">
                                                            <i class="fa fa-bullhorn"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc">
                                                             New order received. Please take care of it.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <div class="date">
                                                     18 hours
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-sm label-default">
                                                            <i class="fa fa-bullhorn"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc">
                                                             New order received. Please take care of it.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <div class="date">
                                                     21 hours
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-sm label-info">
                                                            <i class="fa fa-bullhorn"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc">
                                                             New order received. Please take care of it.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <div class="date">
                                                     22 hours
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-sm label-default">
                                                            <i class="fa fa-bullhorn"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc">
                                                             New order received. Please take care of it.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <div class="date">
                                                     21 hours
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-sm label-info">
                                                            <i class="fa fa-bullhorn"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc">
                                                             New order received. Please take care of it.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <div class="date">
                                                     22 hours
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-sm label-default">
                                                            <i class="fa fa-bullhorn"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc">
                                                             New order received. Please take care of it.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <div class="date">
                                                     21 hours
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-sm label-info">
                                                            <i class="fa fa-bullhorn"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc">
                                                             New order received. Please take care of it.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <div class="date">
                                                     22 hours
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-sm label-default">
                                                            <i class="fa fa-bullhorn"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc">
                                                             New order received. Please take care of it.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <div class="date">
                                                     21 hours
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-sm label-info">
                                                            <i class="fa fa-bullhorn"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc">
                                                             New order received. Please take care of it.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <div class="date">
                                                     22 hours
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab_1_2">
                                <div class="scroller" style="height: 290px;" data-always-visible="1" data-rail-visible1="1">
                                    <ul class="feeds">
                                        <li>
                                            <a href="javascript:;">
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-sm label-success">
                                                            <i class="fa fa-bell-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc">
                                                             New user registered
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <div class="date">
                                                     Just now
                                                </div>
                                            </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-sm label-success">
                                                            <i class="fa fa-bell-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc">
                                                             New order received
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <div class="date">
                                                     10 mins
                                                </div>
                                            </div>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-sm label-danger">
                                                            <i class="fa fa-bolt"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc">
                                                             Order #24DOP4 has been rejected. <span class="label label-sm label-danger ">
                                                            Take action <i class="fa fa-share"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <div class="date">
                                                     24 mins
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-sm label-success">
                                                            <i class="fa fa-bell-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc">
                                                             New user registered
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <div class="date">
                                                     Just now
                                                </div>
                                            </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-sm label-success">
                                                            <i class="fa fa-bell-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc">
                                                             New user registered
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <div class="date">
                                                     Just now
                                                </div>
                                            </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-sm label-success">
                                                            <i class="fa fa-bell-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc">
                                                             New user registered
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <div class="date">
                                                     Just now
                                                </div>
                                            </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-sm label-success">
                                                            <i class="fa fa-bell-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc">
                                                             New user registered
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <div class="date">
                                                     Just now
                                                </div>
                                            </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-sm label-success">
                                                            <i class="fa fa-bell-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc">
                                                             New user registered
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <div class="date">
                                                     Just now
                                                </div>
                                            </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-sm label-success">
                                                            <i class="fa fa-bell-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc">
                                                             New user registered
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <div class="date">
                                                     Just now
                                                </div>
                                            </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-sm label-success">
                                                            <i class="fa fa-bell-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc">
                                                             New user registered
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <div class="date">
                                                     Just now
                                                </div>
                                            </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab_1_3">
                                <div class="scroller" style="height: 290px;" data-always-visible="1" data-rail-visible1="1">
                                    <div class="row">
                                        <div class="col-md-6 user-info">
                                            <img alt="" src="../../assets/admin/layout/img/avatar.png" class="img-responsive"/>
                                            <div class="details">
                                                <div>
                                                    <a href="javascript:;">
                                                    Robert Nilson </a>
                                                    <span class="label label-sm label-success label-mini">
                                                    Approved </span>
                                                </div>
                                                <div>
                                                     29 Jan 2013 10:45AM
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 user-info">
                                            <img alt="" src="../../assets/admin/layout/img/avatar.png" class="img-responsive"/>
                                            <div class="details">
                                                <div>
                                                    <a href="javascript:;">
                                                    Lisa Miller </a>
                                                    <span class="label label-sm label-info">
                                                    Pending </span>
                                                </div>
                                                <div>
                                                     19 Jan 2013 10:45AM
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 user-info">
                                            <img alt="" src="../../assets/admin/layout/img/avatar.png" class="img-responsive"/>
                                            <div class="details">
                                                <div>
                                                    <a href="javascript:;">
                                                    Eric Kim </a>
                                                    <span class="label label-sm label-info">
                                                    Pending </span>
                                                </div>
                                                <div>
                                                     19 Jan 2013 12:45PM
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 user-info">
                                            <img alt="" src="../../assets/admin/layout/img/avatar.png" class="img-responsive"/>
                                            <div class="details">
                                                <div>
                                                    <a href="javascript:;">
                                                    Lisa Miller </a>
                                                    <span class="label label-sm label-danger">
                                                    In progress </span>
                                                </div>
                                                <div>
                                                     19 Jan 2013 11:55PM
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 user-info">
                                            <img alt="" src="../../assets/admin/layout/img/avatar.png" class="img-responsive"/>
                                            <div class="details">
                                                <div>
                                                    <a href="javascript:;">
                                                    Eric Kim </a>
                                                    <span class="label label-sm label-info">
                                                    Pending </span>
                                                </div>
                                                <div>
                                                     19 Jan 2013 12:45PM
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 user-info">
                                            <img alt="" src="../../assets/admin/layout/img/avatar.png" class="img-responsive"/>
                                            <div class="details">
                                                <div>
                                                    <a href="javascript:;">
                                                    Lisa Miller </a>
                                                    <span class="label label-sm label-danger">
                                                    In progress </span>
                                                </div>
                                                <div>
                                                     19 Jan 2013 11:55PM
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 user-info">
                                            <img alt="" src="../../assets/admin/layout/img/avatar.png" class="img-responsive"/>
                                            <div class="details">
                                                <div>
                                                    <a href="javascript:;">
                                                    Eric Kim </a>
                                                    <span class="label label-sm label-info">
                                                    Pending </span>
                                                </div>
                                                <div>
                                                     19 Jan 2013 12:45PM
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 user-info">
                                            <img alt="" src="../../assets/admin/layout/img/avatar.png" class="img-responsive"/>
                                            <div class="details">
                                                <div>
                                                    <a href="javascript:;">
                                                    Lisa Miller </a>
                                                    <span class="label label-sm label-danger">
                                                    In progress </span>
                                                </div>
                                                <div>
                                                     19 Jan 2013 11:55PM
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 user-info">
                                            <img alt="" src="../../assets/admin/layout/img/avatar.png" class="img-responsive"/>
                                            <div class="details">
                                                <div>
                                                    <a href="javascript:;">
                                                    Eric Kim </a>
                                                    <span class="label label-sm label-info">
                                                    Pending </span>
                                                </div>
                                                <div>
                                                     19 Jan 2013 12:45PM
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 user-info">
                                            <img alt="" src="../../assets/admin/layout/img/avatar.png" class="img-responsive"/>
                                            <div class="details">
                                                <div>
                                                    <a href="javascript:;">
                                                    Lisa Miller </a>
                                                    <span class="label label-sm label-danger">
                                                    In progress </span>
                                                </div>
                                                <div>
                                                     19 Jan 2013 11:55PM
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 user-info">
                                            <img alt="" src="../../assets/admin/layout/img/avatar.png" class="img-responsive"/>
                                            <div class="details">
                                                <div>
                                                    <a href="javascript:;">
                                                    Eric Kim </a>
                                                    <span class="label label-sm label-info">
                                                    Pending </span>
                                                </div>
                                                <div>
                                                     19 Jan 2013 12:45PM
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 user-info">
                                            <img alt="" src="../../assets/admin/layout/img/avatar.png" class="img-responsive"/>
                                            <div class="details">
                                                <div>
                                                    <a href="javascript:;">
                                                    Lisa Miller </a>
                                                    <span class="label label-sm label-danger">
                                                    In progress </span>
                                                </div>
                                                <div>
                                                     19 Jan 2013 11:55PM
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--END TABS-->
                    </div>
                </div>
                <!-- END PORTLET-->
            </div>
        </div>
        <div class="clearfix">
        </div>
    </div>
</div>
@endsection
