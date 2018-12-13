<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Perfect Catering | Form Login Anggota</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="stylish Sign in and Sign up Form A Flat Responsive widget, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--online_fonts-->
	<link href="//fonts.googleapis.com/css?family=Sansita:400,400i,700,700i,800,800i,900,900i&amp;subset=latin-ext" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
<!--//online_fonts-->
	<link href="<?php echo base_url(); ?>asset/css/style1.css" rel='stylesheet' type='text/css' media="all" /><!--stylesheet-->
</head>
<body>
	<h1>Form Login Anggota</h1>
	<div class="form-w3ls">
	<div class="form-head-w3l">
	</div>
    <ul class="tab-group cl-effect-4">
        <li class="tab active"><a href="#signin-agile">Log In Anggota</a></li>
    </ul>
    <div class="tab-content">
        <div id="signin-agile">   
			<form action="<?php echo base_url('userlogin/user_verify')?>" method="post">
				
				<p class="header">UserName</p>
				<input type="text" name="username" placeholder="UserName" required="required">
				
				<p class="header">Password</p>
				<input type="password" name="pass" placeholder="Password"  required="required">
				
				
				
				<input type="submit" class="sign-in" value="Log In">
				<br>
				<br>
				<center><a href="<?php echo base_url(); ?>">Kembali</a></center>
				
			</form>
		</div>
	</div>
</div>
<p class="copyright">Design by <a href="https://w3layouts.com/" target="_blank">w3layouts</a></p>

<!-- js files -->
<script src='<?php echo base_url(); ?>asset/js/jquery1.min.js'></script>
<script src="<?php echo base_url(); ?>asset/js/index1.js"></script>
<!-- /js files -->
</body>
</html>
