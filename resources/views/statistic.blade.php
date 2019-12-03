@extends('layouts.layout')

@section('content')

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
            <li>
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
            <li class="start active open">
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

<div class="page-content-wrapper">
    <div class="page-content">
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

        <div class="page-bar">
            <ul class="page-breadcrumb">
                <li>
                    <i class="fa fa-home"></i>
                    <a href="index.html">Home</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <a href="#">Statistic</a>
                </li>
            </ul>
            <div class="page-toolbar">
                <div id="dashboard-report-range" class="pull-right tooltips btn btn-sm btn-default" data-container="body" data-placement="bottom" data-original-title="Change dashboard date range">
                    <i class="icon-calendar"></i>&nbsp; <span class="thin uppercase visible-lg-inline-block"></span>&nbsp; <i class="fa fa-angle-down"></i>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="portlet light">
                    <div class="portlet-title">
                        <div class="caption">select owner</div>
                        <select>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="portlet light">
                    <div class="portlet-title">
                        <div class="caption">period</div>
                        <select>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                        </select>
                        <select>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                        </select>
                        <div class="caption">property</div>
                        <select>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="col-md-3 col-sm-3">
                    <div class="portlet light">
                        <div class="portlet-title">
                            <div class="caption">Bookings</div>
                        </div>
                        <div class="portlet-body">
                            <div class="dashboard-stat blue-madison">
                                <h2>bookings</h2>
                            </div>
                            <div class="dashboard-stat red-intense">
                                <h2>cancellation</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3">
                    <div class="portlet light">
                        <div class="portlet-title">
                            <div class="caption">Occupancy</div>
                        </div>
                        <div class="portlet-body">
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
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="portlet light">
                        <div class="portlet-title">
                            <div class="caption">Occupancy & Revenues</div>
                        </div>
                        <div class="portlet-body">
                            <div id="site_activities_content" class="display-none">
                                <div id="site_activities" style="height: 228px;">
                                </div>
                            </div>
                            <div style="margin: 20px 0 10px 30px">
                                <div class="row">
                                    <div class="col-md-3 col-sm-3 col-xs-6 text-stat">
                                        <span class="label label-sm label-success">
                                        Revenue: </span>
                                        <h3>$13,234</h3>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-6 text-stat">
                                        <span class="label label-sm label-info">
                                        Tax: </span>
                                        <h3>$134,900</h3>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-6 text-stat">
                                        <span class="label label-sm label-danger">
                                        Shipment: </span>
                                        <h3>$1,134</h3>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-6 text-stat">
                                        <span class="label label-sm label-warning">
                                        Orders: </span>
                                        <h3>235090</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="col-md-3 col-sm-3">
                    <div class="portlet light">
                        <div class="portlet-title">
                            <div class="caption">Revenues/Portal</div>
                        </div>
                        <div class="portlet-body">
                            <div class="dashboard-stat blue-madison">
                                <h2>bookings</h2>
                            </div>
                            <div class="dashboard-stat red-intense">
                                <h2>cancellation</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3">
                    <div class="portlet light">
                        <div class="portlet-title">
                            <div class="caption">Nights/Portal</div>
                        </div>
                        <div class="portlet-body">
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
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="portlet light">
                        <div class="portlet-title">
                            <div class="caption">Portal details</div>
                        </div>
                        <div class="portlet-body">
                            <div id="site_activities_content" class="display-none">
                                <div id="site_activities" style="height: 228px;">
                                </div>
                            </div>
                            <div style="margin: 20px 0 10px 30px">
                                <div class="row">
                                    <div class="col-md-3 col-sm-3 col-xs-6 text-stat">
                                        <span class="label label-sm label-success">
                                        Revenue: </span>
                                        <h3>$13,234</h3>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-6 text-stat">
                                        <span class="label label-sm label-info">
                                        Tax: </span>
                                        <h3>$134,900</h3>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-6 text-stat">
                                        <span class="label label-sm label-danger">
                                        Shipment: </span>
                                        <h3>$1,134</h3>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-6 text-stat">
                                        <span class="label label-sm label-warning">
                                        Orders: </span>
                                        <h3>235090</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
                        </div>
                        <!--END TABS-->
                    </div>
                </div>
                <!-- END PORTLET-->
            </div>
        </div>

    </div>
</div>

@endsection