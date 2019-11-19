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
            <li class="start active open">
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
        <div class="container">
            <div class="col-md-8 col-sm-8">
                <div class="table-scrollable">
                    <table class="table table-borderless">
                        <tr>
                            <td>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add_property">Add Properties</button>
                            </td>
                            <td>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add_channel">Add Channels</button>
                            </td>
                        </tr>
                        <tr>
                            <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Add new Owner</button></td>
                            <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">View List Owner</button></td>
                            <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">View/Add staff</button></td>
                        </tr>
                        <tr>
                            <td>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Communication Set Messages&<br>Templates</button>
                            </td>
                            <td>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Add/Edit Template</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Website Builder</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Invoice Settings</button>
                            </td>
                            <td>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Admin Invoice Settings</button>
                            </td>
                            <td>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">View/Edit Invoice Settings</button>
                            </td>
                        </tr>
                        <tr>
                            <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Change Password</button></td>
                            <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">About us</button></td>
                            <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Update Password</button></td>
                        </tr>
                    </table>
                </div>
            </div>
            @include('setting_modals.add_property')
            @include('setting_modals.add_channel')
        </div>
    </div>
</div>
@endsection