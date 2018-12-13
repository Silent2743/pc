<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Perfect Catering | Home </title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Events Planning Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<link href="<?php echo base_url(); ?>asset/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo base_url(); ?>asset/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/flexslider.css" type="text/css" media="screen" property="" />
<!-- js -->
<script type="text/javascript" src="<?php echo base_url(); ?>asset/js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<!-- font-awesome-icons -->
<link href="<?php echo base_url(); ?>asset/css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome-icons -->
<link href="//fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
</head>
<body>
	<?php $this->load->view('home'); ?>
<!-- //banner -->
<!-- contact -->
<div class="contact">
	<div class="container">
	<h3 class="w3layouts_head">Kontak <span> Kami</span></h3>
			<p class="w3_para">Jika Anda Memiliki Pertanyaan Seputar Jasa Yang Kami Tawarkan, Anda Bisa Menghubungi Nomor Yang Tertera Pada Halaman Web Kami, Anda Juga Dapat Melihat Lokasi Kantor Kami Pada Peta Google Maps Dibawah.</p>
		<div class="contact-main w3agile">
			
			 <div class="col-md-12 map">
			 	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.511411132354!2d106.85182331415464!3d-6.196051995514422!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f467bb7357bd%3A0x97835447e876a4c2!2sPerfect+Catering!5e0!3m2!1sen!2sid!4v1539777161086" ></iframe>
			 </div>
		   <div class="clearfix"> </div>
		</div>
	</div>
</div>

<!--find-->
<div class="ag-ft agileinfo">
	<div class="container">
		<div class="footre-main">
			  <h3 class="w3layouts_head">Temukan Kami</h3>
			<p class="w3_para">Berikut Adalah Alamat Lengkap Kantor Kami, Nomor Telepon Yang Bisa Dihubungi, Dan Alamat Email Kerja Kantor Kami.</p>
			   <div class="ag-ft-bottom">
			   	 <div class="col-md-4 ftr-grid">
			   	 	<span class="ftr-address-icons"><i class="fa fa-phone" aria-hidden="true"></i></span>
			   	 	 <div class="ftr-text">
				   		<h4>Phone</h4>
				   		<p>(+62) 81282230626</p>
			   	     </div>
			   	     <div class="clearfix"> </div>
			   	 </div>
			   	 <div class="col-md-4 ftr-grid">
			   	 	<span class="ftr-address-icons"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
			   	 	<div class="ftr-text">
			   		  <h4>Alamat Kantor</h4>
			   		  <p>JL. H. Murthado VIII, No. B59, Salemba Bluntas, RT.14/RW.5, </p>
                       <p>Paseban, Senen, Central Jakarta City, Jakarta</p>
			   		</div>
			   		 <div class="clearfix"> </div>
			   	 </div>
			   	 <div class="col-md-4 ftr-grid">
			   	 	<span class="ftr-address-icons"><i class="fa fa-envelope" aria-hidden="true"></i></span>
			   	 	<div class="ftr-text">
			   		  <h4>Email</h4>
			   		  <p><a href="mailto:perfectcatering.jakarta@gmail.com" target="_blank"> perfectcatering.jakarta@gmail.com</a></p>
			   		  <p><a href="mailto:arifrhmn2743@gmail.com" target="_blank"> arifrhmn2743@gmail.com</a></p>
			   		</div>
			   		 <div class="clearfix"> </div>
			   	 </div>
			   	 <div class="clearfix"> </div>
		     </div>			
		</div>
	</div>
</div>
<!-- //find -->

<!-- footer -->
<?php $this->load->view('footer'); ?>

<!-- start-smoth-scrolling -->
<script type="text/javascript" src="<?php echo base_url(); ?>asset/js/move-top.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>asset/js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<!-- menu -->
	<script type="text/javascript" src="<?php echo base_url(); ?>asset/js/main.js"></script>
<!-- //menu -->
<!-- for bootstrap working -->
	<script src="<?php echo base_url(); ?>asset/js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
</body>
</html>