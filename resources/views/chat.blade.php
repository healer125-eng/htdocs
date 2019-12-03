@extends('layouts.layout')

@section('content')
<link href="{{ asset('css/chat.css') }}" rel="stylesheet">
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
            <li class="start active open">
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
                    <a href="#">Chat</a>
                </li>
            </ul>
            <div class="page-toolbar">
                <div id="dashboard-report-range" class="pull-right tooltips btn btn-sm btn-default" data-container="body" data-placement="bottom" data-original-title="Change dashboard date range">
                    <i class="icon-calendar"></i>&nbsp; <span class="thin uppercase visible-lg-inline-block"></span>&nbsp; <i class="fa fa-angle-down"></i>
                </div>
            </div>
        </div>

        <div class="messaging">
        	<div class="inbox_msg">
		        <div class="inbox_people">
		          <div class="headind_srch">
		            <div class="recent_heading">
		              <h4>Recent</h4>
		            </div>
		            <div class="srch_bar">
		              <div class="stylish-input-group">
		                <input type="text" class="search-bar"  placeholder="Search" >
		                <span class="input-group-addon">
		                <button type="button"> <i class="fa fa-search" aria-hidden="true"></i> </button>
		                </span> </div>
		            </div>
		          </div>
		          <div class="inbox_chat">
		            <div class="chat_list active_chat">
		              <div class="chat_people">
		                <div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
		                <div class="chat_ib">
		                  <h5>Sunil Rajput <span class="chat_date">Dec 25</span></h5>
		                  <p>Test, which is a new approach to have all solutions 
		                    astrology under one roof.</p>
		                </div>
		              </div>
		            </div>
		            <div class="chat_list">
		              <div class="chat_people">
		                <div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
		                <div class="chat_ib">
		                  <h5>Sunil Rajput <span class="chat_date">Dec 25</span></h5>
		                  <p>Test, which is a new approach to have all solutions 
		                    astrology under one roof.</p>
		                </div>
		              </div>
		            </div>
		            <div class="chat_list">
		              <div class="chat_people">
		                <div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
		                <div class="chat_ib">
		                  <h5>Sunil Rajput <span class="chat_date">Dec 25</span></h5>
		                  <p>Test, which is a new approach to have all solutions 
		                    astrology under one roof.</p>
		                </div>
		              </div>
		            </div>
		            <div class="chat_list">
		              <div class="chat_people">
		                <div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
		                <div class="chat_ib">
		                  <h5>Sunil Rajput <span class="chat_date">Dec 25</span></h5>
		                  <p>Test, which is a new approach to have all solutions 
		                    astrology under one roof.</p>
		                </div>
		              </div>
		            </div>
		            <div class="chat_list">
		              <div class="chat_people">
		                <div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
		                <div class="chat_ib">
		                  <h5>Sunil Rajput <span class="chat_date">Dec 25</span></h5>
		                  <p>Test, which is a new approach to have all solutions 
		                    astrology under one roof.</p>
		                </div>
		              </div>
		            </div>
		            <div class="chat_list">
		              <div class="chat_people">
		                <div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
		                <div class="chat_ib">
		                  <h5>Sunil Rajput <span class="chat_date">Dec 25</span></h5>
		                  <p>Test, which is a new approach to have all solutions 
		                    astrology under one roof.</p>
		                </div>
		              </div>
		            </div>
		            <div class="chat_list">
		              <div class="chat_people">
		                <div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
		                <div class="chat_ib">
		                  <h5>Sunil Rajput <span class="chat_date">Dec 25</span></h5>
		                  <p>Test, which is a new approach to have all solutions 
		                    astrology under one roof.</p>
		                </div>
		              </div>
		            </div>
		          </div>
		        </div>
		        <div class="mesgs">
		          <div class="msg_history">
		            <div class="incoming_msg">
		              <div class="incoming_msg_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
		              <div class="received_msg">
		                <div class="received_withd_msg">
		                  <p>Test which is a new approach to have all
		                    solutions</p>
		                  <span class="time_date"> 11:01 AM    |    June 9</span></div>
		              </div>
		            </div>
		            <div class="outgoing_msg">
		              <div class="sent_msg">
		                <p>Test which is a new approach to have all
		                  solutions</p>
		                <span class="time_date"> 11:01 AM    |    June 9</span> </div>
		            </div>
		            <div class="incoming_msg">
		              <div class="incoming_msg_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
		              <div class="received_msg">
		                <div class="received_withd_msg">
		                  <p>Test, which is a new approach to have</p>
		                  <span class="time_date"> 11:01 AM    |    Yesterday</span></div>
		              </div>
		            </div>
		            <div class="outgoing_msg">
		              <div class="sent_msg">
		                <p>Apollo University, Delhi, India Test</p>
		                <span class="time_date"> 11:01 AM    |    Today</span> </div>
		            </div>
		            <div class="incoming_msg">
		              <div class="incoming_msg_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
		              <div class="received_msg">
		                <div class="received_withd_msg">
		                  <p>We work directly with our designers and suppliers,
		                    and sell direct to you, which means quality, exclusive
		                    products, at a price anyone can afford.</p>
		                  <span class="time_date"> 11:01 AM    |    Today</span></div>
		              </div>
		            </div>
		          </div>
		          <div class="type_msg">
		            <div class="input_msg_write">
		              <input type="text" class="write_msg" placeholder="Type a message" />
		              <button class="msg_send_btn" type="button"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
		            </div>
		          </div>
		        </div>
		    </div>
		    <p class="text-center top_spac"> Design by <a target="_blank" href="#">Sunil Rajput</a></p>
        </div>
    </div>
</div>

@endsection