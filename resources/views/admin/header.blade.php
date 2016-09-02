<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8" />
    <title>Tiba | Admin Dashboard </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="{{asset('assets/plugins/bootstrap/css/bootstrap-rtl.min.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{asset('assets/plugins/bootstrap/css/bootstrap-responsive-rtl.min.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{asset('assets/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{asset('assets/css/style-metro-rtl.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{asset('assets/css/style-rtl.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{asset('assets/css/style-responsive-rtl.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{asset('assets/css/themes/default-rtl.css')}}" rel="stylesheet" type="text/css" id="style_color"/>
<link href="{{asset('assets/plugins/uniform/css/uniform.default.css')}}" rel="stylesheet" type="text/css"/>
<!-- END GLOBAL MANDATORY STYLES -->
<link rel="stylesheet" type="text/css" href="{{asset('assets/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5-rtl.css')}}" />


<!-- BEGIN PAGE LEVEL PLUGIN STYLES -->
<link rel="stylesheet" type="text/css" href="{{asset('assets/plugins/bootstrap-colorpicker/css/colorpicker.css')}}" />
<link rel="stylesheet" type="text/css" href="{{asset('assets/plugins/bootstrap-fileupload/bootstrap-fileupload.css')}}" />

<!-- <link href="{{asset('assets/plugins/gritter/css/jquery.gritter.css')}}" rel="stylesheet" type="text/css"/> -->
<link href="{{asset('assets/plugins/bootstrap-daterangepicker/daterangepicker-rtl.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/plugins/fullcalendar/fullcalendar/fullcalendar.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{asset('assets/plugins/jqvmap/jqvmap/jqvmap.css')}}" rel="stylesheet" type="text/css" media="screen"/>
<link href="{{asset('assets/plugins/jquery-easy-pie-chart/jquery.easy-pie-chart.css')}}" rel="stylesheet" type="text/css" media="screen"/>
<!-- END PAGE LEVEL PLUGIN STYLES -->
<!-- BEGIN PAGE LEVEL STYLES -->
<link href="{{asset('assets/css/pages/tasks-rtl.css')}}" rel="stylesheet" type="text/css" media="screen"/>
<!-- END PAGE LEVEL STYLES -->
    <link rel="shortcut icon" href="favicon.ico" />
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="page-header-fixed">
    <!-- BEGIN HEADER -->
    <div class="header navbar navbar-inverse navbar-fixed-top">
        <!-- BEGIN TOP NAVIGATION BAR -->
        <div class="navbar-inner">
            <div class="container-fluid">
                <!-- BEGIN LOGO -->
                <a class="brand" href="{{URL('/admin')}}">
                    <img src="{{asset('assets/img/logo.png')}}" alt="logo" width="54px" height="54px" style="margin-left:20px;" />
                </a>
                <!-- END LOGO -->
                <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                <a href="javascript:;" class="btn-navbar collapsed" data-toggle="collapse" data-target=".nav-collapse">
                    <img src="assets/img/menu-toggler.png" alt="" />
                </a>
                <!-- END RESPONSIVE MENU TOGGLER -->
                <!-- BEGIN TOP NAVIGATION MENU -->
                <ul class="nav pull-left">



                    <!-- BEGIN USER LOGIN DROPDOWN -->
                    <li class="dropdown user">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                            <!-- <img alt="" src="assets/img/avatar1_small.jpg" /> -->
                            <i class="icon-user"></i>
                            <span class="username">{{\Auth::user()->name}}</span>
                            <i class="icon-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="javascript:;" id="trigger_fullscreen"><i class="icon-move"></i> شاشة كامله</a></li>
                            <li><a href="{{route('logout')}}"><i class="icon-key"></i> تسجيل الخروج </a></li>
                        </ul>
                    </li>
                    <!-- END USER LOGIN DROPDOWN -->
                    <!-- END USER LOGIN DROPDOWN -->
                </ul>
                <!-- END TOP NAVIGATION MENU -->
            </div>
        </div>
        <!-- END TOP NAVIGATION BAR -->
    </div>
    <!-- END HEADER -->
