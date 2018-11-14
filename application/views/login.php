<?php
$site       = $this->config_model->get_config('site');
$site_value = $site['value'];
$site_value = json_decode($site_value,1);

?>
<!DOCTYPE html>
<html>
<head>
<title>Angkringan Login</title>
<!--Custom Theme files-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Register Login Widget template Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login Signup Responsive web template, SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="<?php echo base_url('include/login/css/style.css') ?>" rel="stylesheet" type="text/css" media="all" />
<!--web-fonts-->
<link href='//fonts.googleapis.com/css?family=Jura:400,300,500,600' rel='stylesheet' type='text/css'>
<!--//web-fonts-->
</head>
<body>
	<center>
	<h1>Angkringan Login</h1>
	<div class="main">
		<div class="w3">
			<div class="signin-form profile">
				<h3>Login</h3>
				
				<div class="login-form">
				<form class="login100-form validate-form" action="<?php echo base_url('Login/Auth') ?>" method="post">
					
					<div  data-validate = "Enter username">
						<input  type="text" name="username" placeholder="Username" value="<?php echo @$_COOKIE['username']; ?>" autofocus>
						<span  data-placeholder="&#xf207;"></span>
					</div><br>

					<div  data-validate="Enter password">
						<input  type="password" name="password" placeholder="Password" value="<?php echo @$_COOKIE['password']; ?>">
						<span data-placeholder="&#xf191;"></span>
					</div><br>

					<div class="contact100-form-checkbox">
						<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember_me">
						<label class="label-checkbox100" for="ckb1">
							Remember me
						</label>
					</div>

					<div class="tp">
							<input type="submit" value="LOGIN NOW">
						</div>
				</form>
				</div>
			</div>
			<div class="copyright">
					<p> &copy; 2016 Register Login Widget . All rights reserved | Design by <a href="http://w3layouts.com/" target="_blank" >W3layouts</a></p>
				</div>	
		</div>
	</div>
</center>
</body>
</html>