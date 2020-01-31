
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

<body id="register_bg">
	
	<nav id="menu" class="fake_menu"></nav>
	<div id="login">
		<aside>
			<figure>
				<a href="index.html"><img src="https://www.directionclasses.com/public/assets/images/logo.png" width="100px" height="42" data-retina="true" alt=""></a>
			</figure>
			<form autocomplete="off" method="post" action="{{route('LMS/Register')}}">
				{{csrf_field()}}
				<div class="form-group">
					<span class="input">
					<input class="input_field" type="text" name="Name" required>
						<label class="input_label">
						<span class="input__label-content">Full Name</span>
					</label>
					</span>

					<span class="input">
					<input class="input_field" type="email" required name="Email">
						<label class="input_label">
						<span class="input__label-content">Email</span>
					</label>
					</span>

					<span class="input">
					<input class="input_field" type="number" required name="Mobile">
						<label class="input_label">
						<span class="input__label-content">Mobile</span>
					</label>
					</span>

					<span class="input">
					<input class="input_field" type="password" id="password1" name="Password">
						<label class="input_label">
						<span class="input__label-content">Your password</span>
					</label>
					</span>

					<span class="input">
					<input class="input_field" type="text" id="password2" name="Board">
						<label class="input_label">
						<span class="input__label-content">Board</span>
					</label>
					</span>

					<span class="input">
					<input class="input_field" type="text" id="password2" name="Class">
						<label class="input_label">
						<span class="input__label-content">Class</span>
					</label>
					</span>
					
					<div id="pass-info" class="clearfix"></div>
				</div>
				<button type="submit" class="btn_1 rounded full-width add_top_30">Register to Direction Classes</button>
				<div class="text-center add_top_10">Already have an acccount? <strong><a href="login.html">Sign In</a></strong></div>
			</form>
			<div class="copy">© 2020 Direction Classes</div>
		</aside>
	</div>
	<!-- /login -->
	
    <script src="{{url('/')}}/public/lms/assets/js/jquery-2.2.4.min.js"></script>
    <script src="{{url('/')}}/public/lms/assets/js/common_scripts.js"></script>
    <script src="{{url('/')}}/public/lms/assets/js/main.js"></script>
	<script src="{{url('/')}}/public/lms/assets/js/validate.js"></script>
	<script src="{{url('/')}}/public/lms/assets/js/pw_strenght.js"></script>
</body>
</html>