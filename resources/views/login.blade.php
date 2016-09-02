<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
	<meta charset="utf-8" />
	<title>Tiba | Login Page</title>
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
	<link rel="stylesheet" type="text/css" href="{{asset('assets/plugins/select2/select2_metro_rtl.css')}}" />
	<!-- END GLOBAL MANDATORY STYLES -->
	<!-- BEGIN PAGE LEVEL STYLES -->
	<link href="{{asset('assets/css/pages/login-rtl.css')}}" rel="stylesheet" type="text/css"/>
	<!-- END PAGE LEVEL STYLES -->
	<link rel="shortcut icon" href="favicon.ico" />
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="login">
	<!-- BEGIN LOGO -->
	<div class="logo">
		<img src="{{asset('assets/img/logo-big.png')}}" alt="" />
	</div>
	<!-- END LOGO -->
	<!-- BEGIN LOGIN -->
	<div class="content">
		<!-- BEGIN LOGIN FORM -->
      {!! Form::open(['route'=>'do_login','class'=>'form-vertical login-form']) !!}

			<h3 class="form-title">تسجيل الدخول</h3>
			<div class="alert alert-error hide">
				<button class="close" data-dismiss="alert"></button>
				<span>من فضلك تأكد من بياناتك</span>
			</div>
			<div class="control-group">
				<!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
				<label class="control-label visible-ie8 visible-ie9">البريد الالكترونى</label>
				<div class="controls">
					<div class="input-icon left">
						<i class="icon-user"></i>
						<input class="m-wrap placeholder-no-fix" type="text" autocomplete="off" placeholder="البريد الالكترونى" name="email"/>
					</div>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label visible-ie8 visible-ie9">كلمة المرور</label>
				<div class="controls">
					<div class="input-icon left">
						<i class="icon-lock"></i>
						<input class="m-wrap placeholder-no-fix" type="password" autocomplete="off" placeholder="كلمة المرور" name="password"/>
					</div>
				</div>
			</div>
			<div class="form-actions">
				<label class="checkbox">
				<input type="checkbox" name="remember" value="1"/> تذكرنى
				</label>
				<button type="submit" class="btn green pull-left">
	        تسجيل الدخول <i class="m-icon-swapright m-icon-white"></i>
				</button>
			</div>
		{!! Form::close() !!}
		<!-- END LOGIN FORM -->


	</div>
	<!-- END LOGIN -->
	<!-- BEGIN COPYRIGHT -->
	<div class="copyright">
		2016 &copy; Tiba. Admin Dashboard.
	</div>
	<!-- END COPYRIGHT -->
	<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
	<!-- BEGIN CORE PLUGINS -->   <script src="{{asset('assets/plugins/jquery-1.10.1.min.js')}}" type="text/javascript"></script>
	<script src="{{asset('assets/plugins/jquery-migrate-1.2.1.min.js')}}" type="text/javascript"></script>
	<!-- IMPORTANT! Load jquery-ui-1.10.1.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
	<script src="{{asset('assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js')}}" type="text/javascript"></script>
	<script src="{{asset('assets/plugins/bootstrap/js/bootstrap-rtl.min.js')}}" type="text/javascript"></script>
	<script src="{{asset('assets/plugins/bootstrap-hover-dropdown/twitter-bootstrap-hover-dropdown.min.js')}}" type="text/javascript" ></script>
	<!--[if lt IE 9]>
	<script src="assets/plugins/excanvas.min.js"></script>
	<script src="assets/plugins/respond.min.js"></script>
	<![endif]-->
	<script src="{{asset('assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}" type="text/javascript"></script>
	<script src="{{asset('assets/plugins/jquery.blockui.min.js')}}" type="text/javascript"></script>
	<script src="{{asset('assets/plugins/jquery.cookie.min.js')}}" type="text/javascript"></script>
	<script src="{{asset('assets/plugins/uniform/jquery.uniform.min.js')}}" type="text/javascript" ></script>
	<!-- END CORE PLUGINS -->
	<!-- BEGIN PAGE LEVEL PLUGINS -->
	<script src="{{asset('assets/plugins/jquery-validation/dist/jquery.validate.min.js')}}" type="text/javascript"></script>
	<script type="text/javascript" src="{{asset('assets/plugins/select2/select2.min.js')}}"></script>
	<!-- END PAGE LEVEL PLUGINS -->
	<!-- BEGIN PAGE LEVEL SCRIPTS -->
	<script src="{{asset('assets/scripts/app.js')}}" type="text/javascript"></script>
	<script src="{{asset('assets/scripts/login.js')}}" type="text/javascript"></script>
	<!-- END PAGE LEVEL SCRIPTS -->
	<script>
		jQuery(document).ready(function() {
		  App.init();
		  Login.init();
		});
	</script>
	<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>
