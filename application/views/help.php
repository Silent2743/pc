<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Perfect Catering | Help </title>
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
			<h3 class="w3layouts_head"><span>Bantuan</span></h3>
				<p class="w3_para">Berikut Peraturan Yang Kami Berikan Kepada Semua Anggota Yang Ingin Memesan.</p>
			<div class="w3ls_news_grids"> 
				<div class="col-md-9 w3_agile_about_grid_left">
					<h3>Khusus Pesanan Katering</h3>
					<br>
					<ol>
					<li>Pesanan 400 Porsi</li>
					<p>Bonus</p>
					<ul><li>1 Pasang Ice Carving</li>
					<li>Ice Tray</li>
					<li>40 Porsi Buffet Keluarga</li></ul>
					<br>
					<li>Pesanan 500 Porsi</li>
					<p>Bonus</p>
					<ul><li>1 Pasang Ice Carving</li>
					<li>Ice Tray</li>
					<li>50 Porsi Buffet Keluarga</li>
					<li>1 Gallon Es Puter</li></ul>
					<br>
					<li>Pesanan 600 Porsi</li>
					<p>Bonus</p>
					<ul><li>1 Pasang Ice Carving</li>
					<li>Ice Tray</li>
					<li>75 Porsi Buffet Keluarga</li>
					<li>1 Gallon Es Puter</li>
					<li>150 Porsi Siomay</li>
					</ul>
					<br>
					<li>Pesanan 800-1000 Porsi</li>
					<p>Bonus</p>
					<ul><li>1 Pasang Ice Carving</li>
					<li>Ice Tray</li>
					<li>100 Porsi Buffet Keluarga</li>
					<li>2 Gallon Es Puter</li>
					<li>200 Porsi Siomay</li>
					<li>150 Porsi Cream Soup</li>
					</ul>
					<br>
					<br>
					<h3>Ketentuan Lain-Lain</h3>
					<ul>
						<li>Harga Paket Pernikahan dapat Berubah Sewaktu- Waktu Tanpa Pemberitahuan Terlebih Dahulu.</li>
						<li>Harga Paket Merupakan 1x Acara, Bila Lain Waktu Dan Lain Hari Ada Penambahan Harga(Dokumentasi + Tata Rias).</li>
						<li>Harga Belum Termasuk PB1 Dan Atau PPN 10% Dari Nilai Pesanan Catering Yang Dipungut Oleh Gedung (Bila Ada).</li>
						<li>Harga Sudah Termasuk Charges, Peralatan Dan Pelayanan. </li>
						<li style="color: red">Setiap Pesanan Disertai Uang Muka Sebesar 20%.</li>
						<li style="color: red"> Bila Ada Pembatalan, Maka Uang Muka Tidak Dikembalikan.</li>
						<li style="color: red">Pelunasan Dilakukan 2 Minggu Sebelum Acara.</li>
						<li>Untuk Acara Di Rumah Minimum Pesanan 200 Porsi. Dibawah Ketentuan Tersebut Dikenakan Biaya Tambahan 10%.</li>
						<li>Pembayaran Dilakukan Via Transfer ke Bank BCA/ Mandiri Atas Nama Jahya Bone / Amanda Deyanti. Bila Pembayaran Cash Melalui Marketing Harus Di Lakukan Di Kantor Perfect Catering.</li>
					</ul>
				</div>
				
			</div>
		</div>
	</div>
<!-- //about -->




<!-- team -->
	
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