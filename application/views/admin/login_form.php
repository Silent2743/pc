<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML> 
<html lang="zxx">

<head>
	<title>Admin Login Form </title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Matrimony Login Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements"
	/>
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- Meta tag Keywords -->
	<!-- css files -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>admin_assets/css/style.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>admin_assets/css/fontawesome-all.css">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //css files -->
	<!-- web-fonts -->
	<link href="//fonts.googleapis.com/css?family=Tangerine:400,700" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=cyrillic,latin-ext"
	    rel="stylesheet">
	<!-- //web-fonts -->
</head>

<body>
	<!-- title -->
	<h1>Admin Login Form</h1>
	
	<!-- //title -->

	<!-- content -->
	<div class="sub-main-w3">
		<form method="post" action="<?php echo base_url('Login/user_verify')?>">
			<h2>login
				
			</h2>
			<div class="form-style-agile">
				<label>
					Username
					
				</label>
				<input placeholder="Username" name="username" type="text" required="required">
			</div>
			<div class="form-style-agile">
				<label>
					Password
					
				</label>
				<input placeholder="Password" name="password" type="password" required="required">
			</div>
			<!-- checkbox -->
			
			<!-- //checkbox -->
			
                  <button type="submit" name="submit" value="Submit">Log In</button>
                  <button type="reset" class="btn btn-default">Cancel</button>
              	</form>
	</div>
	<!-- //content -->

	<!-- copyright -->
	<div class="footer">
		<p>&copy; 2018 Matrimony Login Form. All rights reserved | Design by
			<a href="http://w3layouts.com">W3layouts</a>
		</p>
	</div>
	<!-- //copyright -->

</body>

</html>