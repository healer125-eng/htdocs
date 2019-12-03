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
            <li class="start active open">
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
                    <a href="#">Booking</a>
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
                        <label class="control-lable col-md-1" style="width: 4%"><h4>Search</h4></label>
                        <div class="col-md-1">
                            <input type="text" class="form-control" name="search" id="search">
                        </div>
                        <label class="control-lable col-md-1" style="width: 4%"><h4>From</h4></label>
                        <div class="col-md-1">
                            <select class="form-control">
                                <option>USA</option>
                                <option>Germany</option>
                                <option>Spain</option>
                                <option>Italy</option>
                                <option>France</option>
                            </select>
                        </div>
                        <label class="control-lable col-md-1" style="width: 4%"><h4>To</h4></label>
                        <div class="col-md-1">
                            <select class="form-control">
                                <option>USA</option>
                                <option>Germany</option>
                                <option>Spain</option>
                                <option>Italy</option>
                                <option>France</option>
                            </select>
                        </div>
                        <div class="col-md-1">
                            <button type="button" class="btn btn-primary">Search</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                <div class="portlet box grey-cascade">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="fa fa-globe"></i>Managed Table
                        </div>
                    </div>
                    <div class="portlet-body">
                        <table class="table table-striped table-bordered table-hover" id="sample_1">
                            <thead>
                                <tr>
                                    <th>
                                         Username
                                    </th>
                                    <th>
                                         Email
                                    </th>
                                    <th>
                                         Points
                                    </th>
                                    <th>
                                         Joined
                                    </th>
                                    <th>
                                         Status
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="odd gradeX">
                                    <td>
                                         shuxer
                                    </td>
                                    <td>
                                        <a href="mailto:shuxer@gmail.com">
                                        shuxer@gmail.com </a>
                                    </td>
                                    <td>
                                         120
                                    </td>
                                    <td class="center">
                                         12 Jan 2012
                                    </td>
                                    <td>
                                        <span class="label label-sm label-success">
                                        Approved </span>
                                    </td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td>
                                         looper
                                    </td>
                                    <td>
                                        <a href="mailto:looper90@gmail.com">
                                        looper90@gmail.com </a>
                                    </td>
                                    <td>
                                         120
                                    </td>
                                    <td class="center">
                                         12.12.2011
                                    </td>
                                    <td>
                                        <span class="label label-sm label-warning">
                                        Suspended </span>
                                    </td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td>
                                         vopl
                                    </td>
                                    <td>
                                        <a href="mailto:userwow@gmail.com">
                                        good@gmail.com </a>
                                    </td>
                                    <td>
                                         20
                                    </td>
                                    <td class="center">
                                         19.11.2010
                                    </td>
                                    <td>
                                        <span class="label label-sm label-success">
                                        Approved </span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- END EXAMPLE TABLE PORTLET-->
            </div>
        </div>

    </div>
</div>

@endsection