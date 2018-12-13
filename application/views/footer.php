<!-- footer -->
	<div class="footer">
		<div class="container">
			<h2><a href="<?php echo base_url(); ?>">Perfect Catering</a></h2>
			<h3>(+62)81282230626</h3>
			
			<div class="agileits_w3three_nav">
				<div class="agileits_w3three_nav_left">
					<ul>
						<li><a href="<?php echo base_url(); ?>">Home</a></li>
						<li><a href="<?= base_url(); ?>ListPaket">Paket</a></li>
						<li><a href="<?= base_url(); ?>Listgedung"">Gedung</a></li>
						<li><a href="<?= base_url(); ?>Listrias">Riasan</a></li>
						<li><a href="<?= base_url(); ?>Home/about">Tentang Kami</a></li>
						<li><a href="<?= base_url(); ?>Home/help">Bantuan</a></li>
						<li><a href="<?= base_url(); ?>Home/kontak">Kontak</a></li>
						
						
						<?php if ($this->session->userdata('username')) { ?>
							<li><a href="<?= base_url(); ?>User"">Pesan</a></li>
							<li><a href="">Buku Tamu</a></li>
							<?php } else { ?>
						<li><a href="<?= base_url(); ?>Register">Daftar</a></li>
						<br><br>
						<li><a href="<?= base_url(); ?>userlogin">Login</a></li>
						<?php } ?>
					</ul>
				</div>
				<div class="agileits_w3three_nav_right">
					<ul class="agileits_social_list">
						<li><a href="https://www.instagram.com/perfect_catering_jakarta/" class="w3_agile_instagram" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
			<p>© 2018 Perfect Catering. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
		</div>
	</div>
<!-- //footer -->
