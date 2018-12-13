<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Perfect Catering | Form Pendaftaran Anggota</title>
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
<h1>Form Pendaftaran Anggota</h1>
<div class="form-w3ls">
	<div class="form-head-w3l">
		
	</div>
    <ul class="tab-group cl-effect-4">
    	<?= validation_errors('<p style="color: red">', '</p>'); ?>
    	<li class="tab active"><a href="#signup-agile">Form Pendaftaran </a></li>
    </ul>
    
		<div id="signup-agile">   
			<form action="<?php echo base_url('Register/register/'); ?>" method="post">
				
				<p class="header">User Name</p>
				<input type="text" name="username" placeholder="Username" required="required" value="<?=$username; ?>">
				
				<p class="header">Nama</p>
				<input type="text" name="nama" placeholder="Nama Lengkap"  required="required" value="<?=$nama; ?>">

				<p class="header">Alamat</p>
				<input type="text" name="alamat" placeholder="Alamat"  required="required" value="<?=$alamat; ?>">

				<p class="header">Jenis Kelamin</p>
				<input type="radio" name="jen_kel" value="L" required="required" <?php if ($jen_kel == 'L') { echo 'checked'; } ?>/>
				<label >Laki-laki</label>
				<input type="radio" name="jen_kel" value="P" required="required" <?php if ($jen_kel == 'P') { echo 'checked'; } ?>/>
				<label >Perempuan</label>
				
				<br><br><p class="header">No. Telpon</p>
				<input type="text" name="no_telp" placeholder="No. Telpon"  required="required" value="<?=$no_telp; ?>">

				<p class="header">Email</p>
				<input type="email" name="email" placeholder="Email"  required="required" value="<?=$email; ?>">

				
				<p class="header">Password</p>
				<input type="password" name="pass" placeholder="Password"  required="required" value="<?=$pass; ?>">
				
				
				<input type="submit" name="submit" class="register" value="Submit">
				<input type="submit" onclick="window.history.go(-1)" class="register" value="Kembali">
			</form>
		</div> 
    </div><!-- tab-content -->
</div> <!-- /form -->	  
<p class="copyright">Design by <a href="https://w3layouts.com/" target="_blank">w3layouts</a></p>
<!-- js files -->
<script src='<?php echo base_url(); ?>asset/js/jquery1.min.js'></script>
<script src="<?php echo base_url(); ?>asset/js/index1.js"></script>
<!-- /js files -->
</body>
</html>
