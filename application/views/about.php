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
<!-- about -->
	<div class="welcome">
		<div class="container">
			<h3 class="w3layouts_head">Kenapa Memilih<span> Kami</span></h3>
				<p class="w3_para">Kami Menyediakan Pelayanan Terbaik Sejak Tahun 1976. Sudah Lebih Dari 150 Pelanggan Yang Puas Akan Pelayanan Kami.</p>
			<div class="w3ls_news_grids"> 
				<div class="col-md-6 w3_agile_about_grid_left">
					<h3>Sejarah Singkat</h3>
					<p align="justify">CV ini didirikan oleh Ibu Sri Wahyuni sejak tahun
1976 dan kantornya terletak di Jl. H. Murtado VIII no B 59, Salemba Bluntas, Jakarta
Pusat. Pada awalnya usaha ini masih berupa PD atau Perusahaan Dagang dan baru pada
tahun 2000 berubah menjadi CV. Sekarang CV Perfect Catering dikelola oleh generasi
ketiga keluarga Sri Wahyuni.</p>
				</div>
				<div class="col-md-6 w3_agile_about_grid_right">
				<img src="<?php echo base_url(); ?>asset/images/eyang1.jpg" class="img-responsive" alt="" >
				<p align="center">Pendiri Perfect Catering, Ibu Sri Wahyuni</p>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //about -->




<!-- team -->
	<div class="welcome">
		<div class="container">
			<h3 class="w3layouts_head"><span>Tim</span> Kerja Kami</h3>
				<p class="w3_para">Tim Kami Merupakan Tim yang selalu mengutamakan kepuasan Pelanggan. Khususnya pada acara-acara besar.</p>
			<div class="w3ls_news_grids w3_agileits_team_grids"> 
				<div class="col-md-4 w3_agileits_team_grid"> 
					<div class="w3layouts_news_grid">
						<img src="<?php echo base_url(); ?>asset/images/dea.jpg" alt=" " class="img-responsive" />
						<div class="w3layouts_news_grid_pos">
							<div class="wthree_text agileinfo_about_text">
								<ul class="agileits_social_list">
									<li><a href="https://www.instagram.com/perfect_catering_jakarta/" class="w3_agile_instagram" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
									
								</ul>
							</div>
						</div>
					</div>
					<h4>Amanda Deanti</h4>
					<p>Manager</p>
				</div>
				<div class="col-md-4 w3_agileits_team_grid"> 
					<div class="w3layouts_news_grid">
						<img src="<?php echo base_url(); ?>asset/images/mar.jpg" alt=" " class="img-responsive" />
						<div class="w3layouts_news_grid_pos">
							<div class="wthree_text agileinfo_about_text">
								<ul class="agileits_social_list">
									<li><a href="https://www.instagram.com/perfect_catering_jakarta/" class="w3_agile_instagram" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
					<h4>Fita (Marketing Manager), Yuni dan Lenny</h4>
					<p>Team Marketing</p>
				</div>
				<div class="col-md-4 w3_agileits_team_grid"> 
					<div class="w3layouts_news_grid">
						<img src="<?php echo base_url(); ?>asset/images/adm.jpg" alt=" " class="img-responsive" />
						<div class="w3layouts_news_grid_pos">
							<div class="wthree_text agileinfo_about_text">
								<ul class="agileits_social_list">
									<li><a href="https://www.instagram.com/arifr2743/" class="w3_agile_instagram" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
									
								</ul>
							</div>
						</div>
					</div>
					<h4>Arif Rahman</h4>
					<p>Pengelola Website</p>
				</div>
				
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //team -->
<!-- footer -->
	<?php $this->load->view('footer'); ?>
<!-- //footer -->

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