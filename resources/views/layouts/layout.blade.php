<!DOCTYPE html>
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
	<meta charset="utf-8"/>
	<title>DYNA</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport"/>
	<meta content="" name="description"/>
	<meta content="" name="author"/>
	<!-- BEGIN GLOBAL MANDATORY STYLES -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet">
	<link href="{{ asset('css/magnific-popup.css') }}" rel="stylesheet">
	<link href="{{ asset('plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
	<link href="{{ asset('plugins/simple-line-icons/simple-line-icons.min.css') }}" rel="stylesheet">
	<!-- <link href="{{ asset('plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css') }}" rel="stylesheet">
	<link href="{{ asset('plugins/datatables/plugins/select2/select2.css') }}" rel="stylesheet"> -->
	<link href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('plugins/uniform/css/uniform.default.css') }}" rel="stylesheet">
	<link href="{{ asset('plugins/bootstrap-switch/css/bootstrap-switch.min.css') }}" rel="stylesheet">
	<!-- END GLOBAL MANDATORY STYLES -->
	<!-- BEGIN PAGE LEVEL PLUGIN STYLES -->
	<link href="{{ asset('plugins/bootstrap-daterangepicker/daterangepicker-bs3.css') }}" rel="stylesheet">
	<link href="{{ asset('plugins/fullcalendar/fullcalendar.min.css') }}" rel="stylesheet">
	<!-- <link href="{{ asset('plugins/jqvmap/jqvmap/jqvmap.css') }}" rel="stylesheet"> -->
	<!-- END PAGE LEVEL PLUGIN STYLES -->
	<!-- BEGIN PAGE STYLES -->
	<link href="{{ asset('css/tasks.css') }}" rel="stylesheet">
	<!-- END PAGE STYLES -->
	<!-- BEGIN THEME STYLES -->
	<link href="{{ asset('plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css') }}" rel="stylesheet">
	<link href="{{ asset('css/components.css') }}" id="style_components" rel="stylesheet">
	<link href="{{ asset('css/plugins.css') }}" rel="stylesheet">
	<link href="{{ asset('css/layout.css') }}" rel="stylesheet">
	<link href="{{ asset('css/themes/darkblue.css') }}" rel="stylesheet" id="style_color"/>
	<link href="{{ asset('css/custom.css') }}" rel="stylesheet">
	<!-- END THEME STYLES -->
	<link rel="shortcut icon" href="favicon.ico"/>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="page-header-fixed page-quick-sidebar-over-content page-sidebar-closed-hide-logo page-container-bg-solid">
<!-- BEGIN HEADER -->
	<div class="page-header navbar navbar-fixed-top">
		<!-- BEGIN HEADER INNER -->
		<div class="page-header-inner">
			<!-- BEGIN LOGO -->
			<div class="page-logo">
				<a href="{{ url('/home') }}">
				<img src="{{ asset('img/logo_layout.png') }}" alt="logo" class="logo-default"/>
				</a>
				<div class="menu-toggler sidebar-toggler hide">
				</div>
			</div>
			<!-- END LOGO -->
			<!-- BEGIN RESPONSIVE MENU TOGGLER -->
			<a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
			</a>
			<!-- END RESPONSIVE MENU TOGGLER -->
			<!-- BEGIN TOP NAVIGATION MENU -->
			<div class="top-menu">
				<ul class="nav navbar-nav pull-right">
					<!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
					<li class="dropdown dropdown-extended dropdown-notification" id="header_notification_bar">
						<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
							Enter Booking Manually
						</a>
					</li>
					<!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
					<li class="dropdown dropdown-extended dropdown-inbox" id="header_inbox_bar">
						<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
							Add Owner
						</a>
					</li>
					<!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
					<li class="dropdown dropdown-extended dropdown-tasks" id="header_task_bar">
						<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
							Add Properties
						</a>
					</li>

					<li class="dropdown dropdown-extended dropdown-tasks" id="header_task_bar">
						<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
							New Channels
						</a>
					</li>

					<li class="dropdown dropdown-extended dropdown-tasks" id="header_task_bar">
						<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
							Update Password
						</a>
					</li>

					<li class="dropdown dropdown-extended dropdown-tasks" id="header_task_bar">
						<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
							Lost
						</a>
					</li>

					<li class="dropdown dropdown-extended dropdown-tasks" id="header_task_bar">
						<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
							Languages
						</a>
					</li>

					<li class="dropdown dropdown-extended dropdown-tasks" id="header_task_bar">
						<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
							Help
						</a>
					</li>
					<!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
					<li class="dropdown dropdown-user">
						<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
						<img alt="" class="img-circle" src="{{ asset('img/avatar3_small.jpg') }}"/>
						<span class="username username-hide-on-mobile">
						Nick </span>
						<i class="fa fa-angle-down"></i>
						</a>
						<ul class="dropdown-menu dropdown-menu-default">
							<li>
								<a href="extra_profile.html">
								<i class="icon-user"></i> My Profile </a>
							</li>
							<li>
								<a href="inbox.html">
								<i class="icon-envelope-open"></i> My Inbox <span class="badge badge-danger">
								3 </span>
								</a>
							</li>
							<li class="divider">
							</li>
							<li>
								<a href="{{ url('/logout') }}">
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
	<div class="clearfix">
	</div>
	<!-- BEGIN CONTAINER -->
	<div class="page-container">
		@yield('content')
		<!-- BEGIN QUICK SIDEBAR -->
		<a href="javascript:;" class="page-quick-sidebar-toggler"><i class="icon-close"></i></a>
		<!-- END QUICK SIDEBAR -->
	</div>
	<!-- END CONTAINER -->
	<!-- BEGIN FOOTER -->
	<div class="page-footer">
		<div class="page-footer-inner">
			 2014 &copy; Metronic by keenthemes. <a href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes" title="Purchase Metronic just for 27$ and get lifetime updates for free" target="_blank">Purchase Metronic!</a>
		</div>
		<div class="scroll-to-top">
			<i class="icon-arrow-up"></i>
		</div>
	</div>
	<!-- END FOOTER -->
	<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
	<!-- BEGIN CORE PLUGINS -->
	<!--[if lt IE 9]>
	<script src="../../assets/global/plugins/respond.min.js"></script>
	<script src="../../assets/global/plugins/excanvas.min.js"></script> 
	<![endif]-->
	<script src="{{ asset('plugins/jquery.min.js') }}" type="text/javascript"></script>
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
	<script src="{{ asset('plugins/jquery-migrate.min.js') }}" type="text/javascript"></script>
	<!-- IMPORTANT! Load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
	<script src="{{ asset('plugins/jquery-ui/jquery-ui.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('plugins/jquery.blockui.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('plugins/jquery.cokie.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('plugins/uniform/jquery.uniform.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}" type="text/javascript"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<!-- END CORE PLUGINS -->
	<!-- BEGIN PAGE LEVEL PLUGINS -->
	<script src="{{ asset('plugins/flot/jquery.flot.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('plugins/flot/jquery.flot.resize.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('plugins/flot/jquery.flot.categories.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('plugins/jquery.pulsate.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('plugins/bootstrap-daterangepicker/moment.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('js/ui-datepaginator.js') }}"></script>
	<script src="{{ asset('plugins/bootstrap-datepaginator/bootstrap-datepaginator.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('plugins/bootstrap-daterangepicker/daterangepicker.js') }}" type="text/javascript"></script>
	<!-- IMPORTANT! fullcalendar depends on jquery-ui.min.js for drag & drop support -->
	<script src="{{ asset('plugins/fullcalendar/fullcalendar.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('plugins/jquery-easypiechart/jquery.easypiechart.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('plugins/jquery.sparkline.min.js') }}" type="text/javascript"></script>
	<!-- START DATATABLE -->
	<!-- <script src="{{ asset('plugins/datatables/media/js/jquery.dataTables.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js') }}" type="text/javascript"></script>
	<script src="{{ asset('js/select2.min.js') }}" type="text/javascript"></script> -->
	<!-- EDIT DATATABLE -->
	<!-- END PAGE LEVEL PLUGINS -->
	<!-- BEGIN PAGE LEVEL SCRIPTS -->
	<script src="{{ asset('js/metronic.js') }}" type="text/javascript"></script>
	<script src="{{ asset('js/layout.js') }}" type="text/javascript"></script>
	<script src="{{ asset('js/quick-sidebar.js') }}" type="text/javascript"></script>
	<script src="{{ asset('js/demo.js') }}" type="text/javascript"></script>
	<script src="{{ asset('js/index.js') }}" type="text/javascript"></script>
	<script src="{{ asset('js/tasks.js') }}" type="text/javascript"></script>
	<!-- <script src="{{ asset('js/table-editable.js') }}" type="text/javascript"></script> -->
	<!-- END PAGE LEVEL SCRIPTS -->
	<script>
	jQuery(document).ready(function() {   
	   Metronic.init(); // init metronic core componets
	   Layout.init(); // init layout
	   QuickSidebar.init(); // init quick sidebar
	Demo.init(); // init demo features
	   Index.init();   
	   Index.initDashboardDaterange();
	   // Index.initJQVMAP(); // init index page's custom scripts
	   Index.initCalendar(); // init index page's custom scripts
	   Index.initCharts(); // init index page's custom scripts
	   Index.initChat();
	   Index.initMiniCharts();
	   Tasks.initDashboardWidget();
	   UIDatepaginator.init();
	   // TableEditable.init();
	});
	</script>
	<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>