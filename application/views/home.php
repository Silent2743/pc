<!-- banner -->
	<div class="banner">
		<div class="container">
			<!-- header -->
			<div class="w3_agile_menu">
				<div class="agileits_w3layouts_nav">
					<div id="toggle_m_nav">
						<div id="m_nav_menu" class="m_nav">
							<div class="m_nav_ham w3_agileits_ham" id="m_ham_1"></div>
							<div class="m_nav_ham" id="m_ham_2"></div>
							<div class="m_nav_ham" id="m_ham_3"></div>
						</div>
					</div>
					<div id="m_nav_container" class="m_nav wthree_bg">
						<nav class="menu menu--sebastian">
							<ul id="m_nav_list" class="m_nav menu__list">
								<li class="m_nav_item active" id="m_nav_item_1"> <a href="<?= base_url();?>"" class="link link--kumya"><i class="fa fa-home" aria-hidden="true"></i><span data-letters="Home">Home</span></a></li>

								<li class="m_nav_item" id="moble_nav_item_2"> <a href="<?= base_url(); ?>ListPaket" class="link link--kumya"><i class="fa fa-list "aria-hidden="true"></i><span data-letters="Paket">Paket</span></a></li>

								<li class="m_nav_item" id="moble_nav_item_6"> <a href="<?= base_url(); ?>Listgedung"" class="link link--kumya"><i class="fa fa-building" aria-hidden="true"></i><span data-letters="Gedung">Gedung</span></a></li>

								<li class="m_nav_item" id="moble_nav_item_6"> <a href="<?= base_url(); ?>Listrias" class="link link--kumya"><i class="fa fa-star" aria-hidden="true"></i><span data-letters="Riasan">Riasan</span></a></li>

								<li class="m_nav_item" id="moble_nav_item_3"> <a href="<?= base_url(); ?>Home/about" class="link link--kumya"><i class="fa fa-info-circle" aria-hidden="true"></i><span data-letters="Tentang Kami">Tentang Kami</span></a></li>

								<li class="m_nav_item" id="moble_nav_item_4"> <a href="<?= base_url(); ?>Home/help" class="link link--kumya"><i class="fa fa-question" aria-hidden="true"></i><span data-letters="Bantuan">Bantuan</span></a></li>

								<li class="m_nav_item" id="moble_nav_item_6"> <a href="<?= base_url(); ?>Home/kontak" class="link link--kumya"><i class="fa fa-phone" aria-hidden="true"></i><span data-letters="Kontak">Kontak</span></a></li>

								

								<?php if ($this->session->userdata('username')) { ?>

									<li class="m_nav_item" id="moble_nav_item_6"> <a href="<?= base_url(); ?>User" class="link link--kumya"><i class="fa fa-edit" aria-hidden="true"></i><span data-letters="Pesan">Pesan</span></a></li>
									<li class="m_nav_item" id="moble_nav_item_6"> <a href="<?= base_url();?>BukuTamu" class="link link--kumya"><i class="fa fa-book" aria-hidden="true"></i><span data-letters="Buku Tamu">Buku Tamu</span></a></li>

									<?php } else { ?>

								<li class="m_nav_item" id="moble_nav_item_6"> <a href="<?= base_url(); ?>Register" class="link link--kumya"><i class="fa fa-edit" aria-hidden="true"></i><span data-letters="Daftar">Daftar</span></a></li>

								<li class="m_nav_item" id="moble_nav_item_6"> <a href="<?= base_url(); ?>userlogin" class="link link--kumya"><i class="fa fa-sign-in" aria-hidden="true"></i><span data-letters="Login">Login</span></a></li>

								<?php } ?>
								
							</ul>
						</nav>
					</div>
				</div>
			</div>
			<div class="header">
				<div class="agileits_w3layouts_logo">
					<h1><a href="<?= base_url(); ?>"">Perfect Catering</a></h1>
				</div>
				<div class="agileinfo_social_icons">
					<ul class="agileits_social_list">
						<li><a href="https://www.instagram.com/perfect_catering_jakarta/" class="w3_agile_instagram" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
						
					</ul>
				</div>
				<div class="clearfix"> </div>
				<?php $this->load->view('banner'); ?>

			</div>	
			</div>
		</div>

<!-- //banner -->
