<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Direction Classes</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800" rel="stylesheet">
    <link href="{{url('/')}}/public/lms/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{url('/')}}/public/lms/assets/css/style.css" rel="stylesheet">
	<link href="{{url('/')}}/public/lms/assets/css/vendors.css" rel="stylesheet">
	<link href="{{url('/')}}/public/lms/assets/css/icon_fonts/{{url('/')}}/public/lms/assets/css/all_icons.min.css" rel="stylesheet">
    <link href="{{url('/')}}/public/lms/assets/css/custom.css" rel="stylesheet">
</head>

<body id="login_bg">	
	<div id="login">
		<aside>
			<figure>
				<a href="index.html"><img src="img/logo.png" width="149" height="42" data-retina="true" alt=""></a>
			</figure>
			  <form action="" method="post" action="{{route('LMS/Login')}}">
			  	{{csrf_field()}}
					<br><br><br><br>
				<div class="divider"><span>Login As A Student</span></div>
				<div class="form-group">
					<span class="input">
					<input class="input_field" type="email" required autocomplete="off" name="email">
						<label class="input_label">
						<span class="input__label-content">Your email</span>
					</label>
					</span>

					<span class="input">
					<input class="input_field" type="password" required autocomplete="new-password" name="password">
						<label class="input_label">
						<span class="input__label-content">Your password</span>
					</label>
					</span>
					<small><a href="#0">Forgot password?</a></small>
				</div>
				<a href="#0" class="btn_1 rounded full-width add_top_60">Login to Udema</a>
				<div class="text-center add_top_10">New to Direction Classes? <strong><a href="{{route('LMS/Register')}}">Sign up!</a></strong></div>
			</form>
			<div class="copy">© 2020 Direction Classes</div>
		</aside>
	</div>
    <script src="{{url('/')}}/public/lms/assets/js/jquery-2.2.4.min.js"></script>
    <script src="{{url('/')}}/public/lms/assets/js/common_scripts.js"></script>
    <script src="{{url('/')}}/public/lms/assets/js/main.js"></script>
	<script src="{{url('/')}}/public/lms/assets/js/validate.js"></script>	
</body>
</html>