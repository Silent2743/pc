<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Perfect Catering | Paket </title>
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
<!-- Data Tables -->
    <link href="<?php echo base_url(); ?>admin_assets/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>admin_assets/css/responsive.bootstrap.min.css" rel="stylesheet">
</head>
<body>
  
 
  <?php $this->load->view('home'); ?>
  <div class="container body">
 
             <div class="katering">
<div class="row">
              <div class="col-md-5 col-sm-5 col-xs-5">
                <div class="x_panel">
                  <div class="x_title"><br>
                    <br>
                   
                    <a class="btn btn-primary btn-lg" data-toggle="collapse" data-target="#headingTwo" aria-expanded="false" aria-controls="headingTwo"> Paket Katering</a>
                   <br>
                   <br>
                  </div>

                  <div class="x_content">
                    <div id="accordion">
      
        
      <div class="card">
        <div class="card-header" id="headingTwo">
          
            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              Paket Katering 1
            </button>
             <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              Paket Katering 2
            </button>
            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
              Paket Katering 3
            </button>
            
            </button>
          
        </div>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
          <div class="card-body">
            <h3>Buffet Utama</h3>
                        <p style="color: red">
                        <?php foreach ($query16->result() as $item): ?>
                         Harga :<?= 'Rp. '.number_format($item->hrg,0,',','.'); ?> /Porsi</p>
                         <?php endforeach;?>
                        <br>
                          <ul>
                          <?php foreach ($query->result() as $item): ?>
                          <li><?= $item->isi_menu; ?></li>
                          </ul>
                           <?php endforeach;?>
                           <br>
                           <br>
                          
                           <h3>Buah Potong</h3>
                           <ul>
                            <?php foreach ($query2->result() as $item2): ?>
                          <li><?= $item2->isi_menu; ?></li>
                          </ul>
                           <?php endforeach;?>
                           <br>
                           <br>

                           <h3>Aneka Snack</h3>
                           <ul>
                            <?php foreach ($query3->result() as $item3): ?>
                          <li><?= $item3->isi_menu; ?></li>
                          </ul>
                           <?php endforeach;?>
                           <br>
                           <br>
                           <h3>Aneka Pudding</h3>
                           <ul>
                            <?php foreach ($query4->result() as $item4): ?>
                          <li><?= $item4->isi_menu; ?></li>
                          </ul>
                           <?php endforeach;?>
                           <br>
                           <br>
                           <h3>Aneka Minuman</h3>
                           <ul>
                            <?php foreach ($query5->result() as $item5): ?>
                          <li><?= $item5->isi_menu; ?></li>
                          </ul>
                           <?php endforeach;?>
                           <br>
                           <br>

          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header" id="headingThree">
          
        </div>
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
          <div class="card-body">
            <br>
                        <h3>Buffet Utama</h3>
                        <p style="color: red"> 
                        <?php foreach ($query17->result() as $item): ?>
                         Harga :<?= 'Rp. '.number_format($item->hrg,0,',','.'); ?> /Porsi</p>
                         <?php endforeach;?>
                        <br>
                          <ul>
                          <?php foreach ($query6->result() as $item): ?>
                          <li><?= $item->isi_menu; ?></li>
                          </ul>
                           <?php endforeach;?>
                           <br>
                           <br>
                          
                           <h3>Buah Potong</h3>
                           <ul>
                            <?php foreach ($query7->result() as $item2): ?>
                          <li><?= $item2->isi_menu; ?></li>
                          </ul>
                           <?php endforeach;?>
                           <br>
                           <br>

                           <h3>Aneka Snack</h3>
                           <ul>
                            <?php foreach ($query8->result() as $item3): ?>
                          <li><?= $item3->isi_menu; ?></li>
                          </ul>
                           <?php endforeach;?>
                           <br>
                           <br>
                           <h3>Aneka Pudding</h3>
                           <ul>
                            <?php foreach ($query9->result() as $item4): ?>
                          <li><?= $item4->isi_menu; ?></li>
                          </ul>
                           <?php endforeach;?>
                           <br>
                           <br>
                           <h3>Aneka Minuman</h3>
                           <ul>
                            <?php foreach ($query10->result() as $item5): ?>
                          <li><?= $item5->isi_menu; ?></li>
                          </ul>
                           <?php endforeach;?>
                           <br>
                           <br>
          </div>
        </div>
        <div class="card">
        <div class="card-header" id="headingFour">
          
        </div>
        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
          <div class="card-body">
             <br>
                        <h3>Buffet Utama</h3>
                        <p style="color: red">
                         <?php foreach ($query18->result() as $item): ?>
                         Harga :<?= 'Rp. '.number_format($item->hrg,0,',','.'); ?> /Porsi</p>
                         <?php endforeach;?></p>
                        <br>
                          <ul>
                          <?php foreach ($query11->result() as $item): ?>
                          <li><?= $item->isi_menu; ?></li>
                          </ul>
                           <?php endforeach;?>
                           <br>
                           <br>
                          
                           <h3>Buah Potong</h3>
                           <ul>
                            <?php foreach ($query12->result() as $item2): ?>
                          <li><?= $item2->isi_menu; ?></li>
                          </ul>
                           <?php endforeach;?>
                           <br>
                           <br>

                           <h3>Aneka Snack</h3>
                           <ul>
                            <?php foreach ($query13->result() as $item3): ?>
                          <li><?= $item3->isi_menu; ?></li>
                          </ul>
                           <?php endforeach;?>
                           <br>
                           <br>
                           <h3>Aneka Pudding</h3>
                           <ul>
                            <?php foreach ($query14->result() as $item4): ?>
                          <li><?= $item4->isi_menu; ?></li>
                          </ul>
                           <?php endforeach;?>
                           <br>
                           <br>
                           <h3>Aneka Minuman</h3>
                           <ul>
                            <?php foreach ($query15->result() as $item5): ?>
                          <li><?= $item5->isi_menu; ?></li>
                          </ul>
                           <?php endforeach;?>
                           <br>
                           <br>
          </div>
        </div>
      </div>
      <br><br>



  </div>
</div>
</div>

</div>
</div>

</div>
</div>
<div class="wedding">
<div class="row">
              <div class="col-md-5 col-sm-5 col-xs-5">
                <div class="x_panel">
                  <div class="x_title"><br>
                    <br>
                   
                    <a class="btn btn-primary btn-lg" data-toggle="collapse" data-target="#heading" aria-expanded="false" aria-controls="heading"> Paket Wedding</a>
                   <br>
                   <br>
                  </div>

                  <div class="x_content">
                    <div id="accordion">
      
        
      <div class="card">
        <div class="card-header" id="headingTwo">
          
            
            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
              Paket Standart 1
            </button>
             <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
              Paket Eksklusif 1
            </button>
            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
              Paket Standart 2
            </button>
            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
              Paket Eksklusif 2
            </button>
            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
              Paket Standart 3
            </button>
            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
              Paket Eksklusif 3
            </button>
            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
              Paket Standart 4
            </button>
            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTweleve" aria-expanded="false" aria-controls="collapseTweleve">
              Paket Eksklusif 4
            </button>
          
        </div>
        <div class="card">
        <div class="card-header" id="headingFive">
          
        </div>
        <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
          <div class="card-body">
             <br>
                        <h2>Fasilitas Terdiri Dari </h2>
                        <p style="color: red">
                         <?php foreach ($query19->result() as $item): ?>
                         Harga :<?= 'Rp. '.number_format($item->hrg,0,',','.'); ?> 
                         <?php endforeach;?> (Untuk 500 Porsi)</p>
                        <br>
                          <ol>
                            <li><b>Sewa Gedung Standart </b></li>
                            <br>
                              <li><b>Catering</b></li>
                              <ul>
                                <li>Buffet Utama Sebanyak 500 Porsi  <a href="http://bit.ly/paket1wed" target="_blank">Paket Menu 1</a></li>
                                <li>Buffet Keluarga Sebanyak 50 Porsi  <a href="http://bit.ly/paket1wed" target="_blank">Paket Menu 1</a></li>
                                <li>Menu Makanan Gubug, Terdiri dari :</li>
                             
                                    <ul>
                                      <li style="color: red">Aneka Es Sebanyak 200 Porsi</li>
                                      <li  style="color: red">Soto Betawi Sebanyak 200 Porsi </li>
                                      <li  style="color: red">Siomay Sebanyak 200 Porsi</li>
                                    </ul>
                              </ul>
                              <br>
                              <li><b>Dekorasi Katering </b></li>
                              <ul>
                                <li>Dekorasi Meja Buffet Utama</li>
                                <li>Dekorasi Meja Buffet Keluarga</li>
                                <li>Dekorasi Meja Dessert </li>
                                <li> <i>Ice Carving</i></li>
                              </ul>
                              <br>
                              <li><b>Dekorasi Pelaminan</b></li>
                              <ul>
                                <li>Pelaminan Sesuai Adat</li>
                                <li>Panggung Pelaminan</li>
                                <li>Bunga Pelaminan (Jawa / Sunda)</li>
                                <li>Taman Pelaminan</li>
                                <li>Pergola Kotak (1 Pasang)</li>
                                <li><i>Standing Flower</i> Ranting (3 Pasang)</li>
                                <li>Karpet Jalan</li>
                                <li>Umbul-Umbul</li>
                              </ul>
                              <br>
                              <li><b>Tata Rias (Berlaku 1x Acara Gedung)</b></li>
                              <ul>
                                <li><i>Make Up</i>Pengantin Saat Akad Nikah Gedung <b>(Pakaian Milik Pribadi)</b></li>
                                <li><i>Make Up</i> Dan Busana Pengantin Pada Saat Resepsi (1 Pasang)</li>
                                <li><i>Make Up</i>, Sanggul Dan Kain untuk Ibu Pengantin (2 Orang)</li>
                                <li>Beskap Lengkap/ Baju Demang Untuk Bapak Pengantin (2 Orang) </li>
                                <li><i>Make Up</i> Dan Busana Untuk Penerima Tamu (4 Orang)</li>
                                <li><i>Make Up</i> Dan Busana Untuk Pagar Ayu + Pagar Bagus (6 Pasang)</li>
                              </ul>
                              <br>
                              <li><b>Dokumentasi</b></li>
                              <ul>
                                <li>1 Album Foto Liputan Kolase (10 Sheet)</li>
                                <li><i>Video Shooting</i> Langsung (Berbentuk DVD)</li>
                                <li>Bonus: Foto Kanvas + Bingkai Ukuran 40 x 50 Inchi</li>
                              </ul>
                              <br>
                              <li><b>MC Pada Saat Resepsi</b></li><br>
                              <li><b>Cucuk Lampah/ Lengser/ Tarian Selamat Datang</b></li><br>
                              <li><b>Kelengkapan Lainnya</b></li>
                              <ul>
                                <li>Buku Tamu + Spidol (4 Buah)</li>
                                <li>Tempat Uang + Tempat <i>Souvenir</i> (Dipinjamkan 2 Buah)</li>
                              </ul>
                          </ol>
          </div>
        </div>
      </div>

      <div class="card">
        <div class="card-header" id="headingSix">
          
        </div>
        <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
          <div class="card-body">
             <br>
                        <h2>Fasilitas Terdiri Dari </h2>
                        <p style="color: red">  <?php foreach ($query23->result() as $item): ?>
                         Harga :<?= 'Rp. '.number_format($item->hrg,0,',','.'); ?> 
                         <?php endforeach;?> (Untuk 500 Porsi)</p>
                        <br>
                          <ol>
                            <li><b>Sewa Gedung Standart </b></li>
                            <br>
                              <li><b>Catering</b></li>
                              <ul>
                                <li>Buffet Utama Sebanyak 500 Porsi  <a href="http://bit.ly/paket2wed" target="_blank">Paket Menu 2</a></li>
                                <li>Buffet Keluarga Sebanyak 50 Porsi <a href="http://bit.ly/paket2wed" target="_blank">Paket Menu 2</a></li>
                                <li>Menu Makanan Gubug, Terdiri dari :</li>
                             
                                    <ul>
                                      <li style="color: red">Ice Cream Aneka Rasa Sebanyak 200 Porsi</li>
                                      <li  style="color: red">Soto Kudus Sebanyak 200 Porsi </li>
                                      <li  style="color: red">Dimsum Sebanyak 200 Porsi</li>
                                      <li  style="color: red">Sate Ayam + Lontong Sebanyak 200 Porsi</li>
                                    </ul>
                              </ul>
                              <br>
                              <li><b>Dekorasi Katering </b></li>
                              <ul>
                                <li>Dekorasi Meja Buffet Utama</li>
                                <li>Dekorasi Meja Buffet Keluarga</li>
                                <li>Dekorasi Meja Dessert </li>
                                <li> <i>Ice Carving</i></li>
                              </ul>
                              <br>
                              <li><b>Dekorasi Pelaminan</b></li>
                              <ul>
                                <li>Pelaminan Sesuai Adat</li>
                                <li>Panggung Pelaminan</li>
                                <li>Bunga Pelaminan (Jawa / Sunda)</li>
                                <li>Taman Pelaminan</li>
                                <li>Pergola Kotak (1 Pasang)</li>
                                <li><i>Standing Flower</i> Ranting (3 Pasang)</li>
                                <li>Karpet Jalan</li>
                                <li>Umbul-Umbul</li>
                              </ul>
                              <br>
                              <li><b>Tata Rias (Berlaku 1x Acara Gedung)</b></li>
                              <ul>
                                <li><i>Make Up</i>Pengantin Saat Akad Nikah Gedung <b>(Pakaian Milik Pribadi)</b></li>
                                <li><i>Make Up</i> Dan Busana Pengantin Pada Saat Resepsi (1 Pasang)</li>
                                <li><i>Make Up</i>, Sanggul Dan Kain untuk Ibu Pengantin (2 Orang)</li>
                                <li>Beskap Lengkap/ Baju Demang Untuk Bapak Pengantin (2 Orang) </li>
                                <li><i>Make Up</i> Dan Busana Untuk Penerima Tamu (4 Orang)</li>
                                <li><i>Make Up</i> Dan Busana Untuk Pagar Ayu + Pagar Bagus (6 Pasang)</li>
                              </ul>
                              <br>
                              <li><b>Dokumentasi</b></li>
                              <ul>
                                <li>1 Album Foto Liputan Kolase (10 Sheet)</li>
                                <li><i>Video Shooting</i> Langsung (Berbentuk DVD)</li>
                                <li>Bonus: Foto Kanvas + Bingkai Ukuran 40 x 50 Inchi</li>
                              </ul>
                              <br>
                              <li><b>MC Pada Saat Resepsi</b></li><br>
                              <li><b>Cucuk Lampah/ Lengser/ Tarian Selamat Datang</b></li><br>
                              <li><b>Kelengkapan Lainnya</b></li>
                              <ul>
                                <li>Buku Tamu + Spidol (4 Buah)</li>
                                <li>Tempat Uang + Tempat <i>Souvenir</i> (Dipinjamkan 2 Buah)</li>
                                <li>50 Porsi Snack Rehat + Kopi, Teh , Creamer (Setelah Akad Nikah)</li>
                              </ul>
                          </ol>
          </div>
        </div>
      </div>

      <div class="card">
        <div class="card-header" id="headingSeven">
          
        </div>
        <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordion">
          <div class="card-body">
             <br>
                        <h2>Fasilitas Terdiri Dari </h2>
                        <p style="color: red"> 
                           <?php foreach ($query20->result() as $item): ?>
                         Harga :<?= 'Rp. '.number_format($item->hrg,0,',','.'); ?> 
                         <?php endforeach;?> (Untuk 600 Porsi)</p>
                        <br>
                          <ol>
                            <li><b>Sewa Gedung Standart </b></li>
                            <br>
                              <li><b>Catering</b></li>
                              <ul>
                                <li>Buffet Utama Sebanyak 600 Porsi <a href="http://bit.ly/paket1wed" target="_blank">Paket Menu 1</a></li>
                                <li>Buffet Keluarga Sebanyak 50 Porsi  <a href="http://bit.ly/paket1wed" target="_blank">Paket Menu 1</a></li>
                                <li>Menu Makanan Gubug, Terdiri dari :</li>
                             
                                    <ul>
                                      <li style="color: red">Aneka Es Sebanyak 200 Porsi</li>
                                      <li  style="color: red">Soto Betawi Sebanyak 200 Porsi </li>
                                      <li  style="color: red">Siomay Sebanyak 200 Porsi</li>
                                      <li  style="color: red">Bakwan Malang Sebanyak 200 Porsi</li>
                                      <li  style="color: red">Zupa Soup Sebanyak 150 Porsi</li>
                                    </ul>
                              </ul>
                              <br>
                              <li><b>Dekorasi Katering </b></li>
                              <ul>
                                <li>Dekorasi Meja Buffet Utama</li>
                                <li>Dekorasi Meja Buffet Keluarga</li>
                                <li>Dekorasi Meja Dessert </li>
                                <li> <i>Ice Carving</i></li>
                              </ul>
                              <br>
                              <li><b>Dekorasi Pelaminan</b></li>
                              <ul>
                                <li>Pelaminan Sesuai Adat</li>
                                <li>Panggung Pelaminan</li>
                                <li>Bunga Pelaminan (Jawa / Sunda)</li>
                                <li>Taman Pelaminan</li>
                                <li>Pergola Kotak (1 Pasang)</li>
                                <li><i>Standing Flower</i> Ranting (3 Pasang)</li>
                                <li>Karpet Jalan</li>
                                <li>Umbul-Umbul</li>
                              </ul>
                              <br>
                              <li><b>Tata Rias (Berlaku 1x Acara Gedung)</b></li>
                              <ul>
                                <li><i>Make Up</i>Pengantin Saat Akad Nikah Gedung <b>(Pakaian Milik Pribadi)</b></li>
                                <li><i>Make Up</i> Dan Busana Pengantin Pada Saat Resepsi (1 Pasang)</li>
                                <li><i>Make Up</i>, Sanggul Dan Kain untuk Ibu Pengantin (2 Orang)</li>
                                <li>Beskap Lengkap/ Baju Demang Untuk Bapak Pengantin (2 Orang) </li>
                                <li><i>Make Up</i> Dan Busana Untuk Penerima Tamu (4 Orang)</li>
                                <li><i>Make Up</i> Dan Busana Untuk Pagar Ayu + Pagar Bagus (6 Pasang)</li>
                              </ul>
                              <br>
                              <li><b>Dokumentasi</b></li>
                              <ul>
                                <li>1 Album Foto Liputan Kolase (10 Sheet)</li>
                                <li><i>Video Shooting</i> Langsung (Berbentuk DVD)</li>
                                <li>Bonus: Foto Kanvas + Bingkai Ukuran 40 x 50 Inchi</li>
                              </ul>
                              <br>
                              <li><b>MC Pada Saat Resepsi</b></li><br>
                              <li><b>Cucuk Lampah/ Lengser/ Tarian Selamat Datang</b></li><br>
                              <li><b>Kelengkapan Lainnya</b></li>
                              <ul>
                                <li>Buku Tamu + Spidol (4 Buah)</li>
                                <li>Tempat Uang + Tempat <i>Souvenir</i> (Dipinjamkan 2 Buah)</li>
                              </ul>
                          </ol>
          </div>
        </div>
      </div>

      <div class="card">
        <div class="card-header" id="headingEight">
          
        </div>
        <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordion">
          <div class="card-body">
             <br>
                        <h2>Fasilitas Terdiri Dari </h2>
                        <p style="color: red"> 
                           <?php foreach ($query24->result() as $item): ?>
                         Harga :<?= 'Rp. '.number_format($item->hrg,0,',','.'); ?> 
                         <?php endforeach;?> (Untuk 600 Porsi)</p>
                        <br>
                          <ol>
                            <li><b>Sewa Gedung Standart </b></li>
                            <br>
                              <li><b>Catering</b></li>
                              <ul>
                                <li>Buffet Utama Sebanyak 500 Porsi <a href="http://bit.ly/paket2wed" target="_blank">Paket Menu 2</a></li>
                                <li>Buffet Keluarga Sebanyak 50 Porsi <a href="http://bit.ly/paket2wed" target="_blank">Paket Menu 2</a></li>
                                <li>Menu Makanan Gubug, Terdiri dari :</li>
                             
                                    <ul>
                                      <li style="color: red">Ice cream Aneka Rasa Sebanyak 200 Porsi</li>
                                      <li  style="color: red">Pempek Sebanyak 200 Porsi </li>
                                      <li  style="color: red">Siomay Sebanyak 200 Porsi</li>
                                      <li  style="color: red">Kambing Guling Sebanyak 1 Ekor</li>
                                      <li  style="color: red">Sate Ayam + Lontong Sebanyak 200 Porsi</li>
                                      <li  style="color: red">Bakwan Malang Sebanyak 200 Porsi</li>
                                      <li  style="color: red">Chocolate Fountain Sebanyak 150 Porsi</li>
                                      
                                    </ul>
                              </ul>
                              <br>
                              <li><b>Dekorasi Katering </b></li>
                              <ul>
                                <li>Dekorasi Meja Buffet Utama</li>
                                <li>Dekorasi Meja Buffet Keluarga</li>
                                <li>Dekorasi Meja Dessert </li>
                                <li> <i>Ice Carving</i></li>
                              </ul>
                              <br>
                              <li><b>Dekorasi Pelaminan</b></li>
                              <ul>
                                <li>Pelaminan Sesuai Adat</li>
                                <li>Panggung Pelaminan</li>
                                <li>Bunga Pelaminan (Jawa / Sunda)</li>
                                <li>Taman Pelaminan</li>
                                <li>Pergola Kotak (1 Pasang)</li>
                                <li><i>Standing Flower</i> Ranting (3 Pasang)</li>
                                <li>Karpet Jalan</li>
                                <li>Umbul-Umbul</li>
                              </ul>
                              <br>
                              <li><b>Tata Rias (Berlaku 1x Acara Gedung)</b></li>
                              <ul>
                                <li><i>Make Up</i>Pengantin Saat Akad Nikah Gedung <b>(Pakaian Milik Pribadi)</b></li>
                                <li><i>Make Up</i> Dan Busana Pengantin Pada Saat Resepsi (1 Pasang)</li>
                                <li><i>Make Up</i>, Sanggul Dan Kain untuk Ibu Pengantin (2 Orang)</li>
                                <li>Beskap Lengkap/ Baju Demang Untuk Bapak Pengantin (2 Orang) </li>
                                <li><i>Make Up</i> Dan Busana Untuk Penerima Tamu (4 Orang)</li>
                                <li><i>Make Up</i> Dan Busana Untuk Pagar Ayu + Pagar Bagus (6 Pasang)</li>
                              </ul>
                              <br>
                              <li><b>Dokumentasi</b></li>
                              <ul>
                                <li>1 Album Foto Liputan Kolase (10 Sheet)</li>
                                <li><i>Video Shooting</i> Langsung (Berbentuk DVD)</li>
                                <li>Bonus: Foto Kanvas + Bingkai Ukuran 40 x 50 Inchi</li>
                              </ul>
                              <br>
                              <li><b>MC Pada Saat Resepsi</b></li><br>
                              <li><b>Cucuk Lampah/ Lengser/ Tarian Selamat Datang</b></li><br>
                              <li><b>Kelengkapan Lainnya</b></li>
                              <ul>
                                <li>Buku Tamu + Spidol (4 Buah)</li>
                                <li>Tempat Uang + Tempat <i>Souvenir</i> (Dipinjamkan 2 Buah)</li>
                                 <li>50 Porsi Nasi Soto Ayam + Juice (Setelah Akad Nikah)</li>
                              </ul>
                          </ol>
          </div>
        </div>
      </div>

      <div class="card">
        <div class="card-header" id="headingNine">
          
        </div>
        <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordion">
          <div class="card-body">
             <br>
                        <h2>Fasilitas Terdiri Dari </h2>
                        <p style="color: red"> 
                           <?php foreach ($query21->result() as $item): ?>
                         Harga :<?= 'Rp. '.number_format($item->hrg,0,',','.'); ?> 
                         <?php endforeach;?> (Untuk 800 Porsi)</p>
                        <br>
                          <ol>
                            <li><b>Sewa Gedung Standart </b></li>
                            <br>
                              <li><b>Catering</b></li>
                              <ul>
                                <li>Buffet Utama Sebanyak 700 Porsi  <a href="http://bit.ly/paket1wed" target="_blank">Paket Menu 1</a></li>
                                <li>Buffet Keluarga Sebanyak 50 Porsi  <a href="http://bit.ly/paket1wed" target="_blank">Paket Menu 1</a></li>
                                <li>Menu Makanan Gubug, Terdiri dari :</li>
                             
                                    <ul>
                                      <li style="color: red">Aneka Es Sebanyak 200 Porsi</li>
                                      <li  style="color: red">Pempek Sebanyak 200 Porsi </li>
                                      <li  style="color: red">Siomay Sebanyak 200 Porsi</li>
                                      <li  style="color: red">Zupa Soup Sebanyak 200 Porsi</li>
                                      <li  style="color: red">Sate Ten + Lontong Sebanyak 200 Porsi</li>
                                      <li  style="color: red">Soto Kudus Sebanyak 200 Porsi</li>
                                    </ul>
                              </ul>
                              <br>
                              <li><b>Dekorasi Katering </b></li>
                              <ul>
                                <li>Dekorasi Meja Buffet Utama</li>
                                <li>Dekorasi Meja Buffet Keluarga</li>
                                <li>Dekorasi Meja Dessert </li>
                                <li> <i>Ice Carving</i></li>
                              </ul>
                              <br>
                              <li><b>Dekorasi Pelaminan</b></li>
                              <ul>
                                <li>Pelaminan Sesuai Adat</li>
                                <li>Panggung Pelaminan</li>
                                <li>Bunga Pelaminan (Jawa / Sunda)</li>
                                <li>Taman Pelaminan</li>
                                <li>Pergola Kotak (1 Pasang)</li>
                                <li><i>Standing Flower</i> Ranting (3 Pasang)</li>
                                <li>Karpet Jalan</li>
                                <li>Umbul-Umbul</li>
                              </ul>
                              <br>
                              <li><b>Tata Rias (Berlaku 1x Acara Gedung)</b></li>
                              <ul>
                                <li><i>Make Up</i>Pengantin Saat Akad Nikah Gedung <b>(Pakaian Milik Pribadi)</b></li>
                                <li><i>Make Up</i> Dan Busana Pengantin Pada Saat Resepsi (1 Pasang)</li>
                                <li><i>Make Up</i>, Sanggul Dan Kain untuk Ibu Pengantin (2 Orang)</li>
                                <li>Beskap Lengkap/ Baju Demang Untuk Bapak Pengantin (2 Orang) </li>
                                <li><i>Make Up</i> Dan Busana Untuk Penerima Tamu (4 Orang)</li>
                                <li><i>Make Up</i> Dan Busana Untuk Pagar Ayu + Pagar Bagus (6 Pasang)</li>
                              </ul>
                              <br>
                              <li><b>Dokumentasi</b></li>
                              <ul>
                                <li>1 Album Foto Liputan Kolase (15 Sheet)</li>
                                <li>1 Album Pengantin Prawedding</li>
                                <li><i>Video Shooting</i> Langsung (Berbentuk DVD)</li>
                                <li>Bonus: Foto Prewedding Indoor di Pose Studio/ Tarzan Studio </li>
                                <li>Bonus: Foto Kanvas + Bingkai Ukuran 40 x 50 Inchi</li>
                              </ul>
                              <br>
                              <li><b>MC Pada Saat Resepsi</b></li><br>
                              <li><b>Cucuk Lampah/ Lengser/ Tarian Selamat Datang</b></li><br>
                              <li><b>Kelengkapan Lainnya</b></li>
                              <ul>
                                <li>Buku Tamu + Spidol (4 Buah)</li>
                                <li>Tempat Uang + Tempat <i>Souvenir</i> (Dipinjamkan 2 Buah)</li>
                               
                              </ul>
                          </ol>
          </div>
        </div>
      </div>

      <div class="card">
        <div class="card-header" id="headingTen">
          
        </div>
        <div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-parent="#accordion">
          <div class="card-body">
             <br>
                        <h2>Fasilitas Terdiri Dari </h2>
                        <p style="color: red"> 
                           <?php foreach ($query25->result() as $item): ?>
                         Harga :<?= 'Rp. '.number_format($item->hrg,0,',','.'); ?> 
                         <?php endforeach;?> (Untuk 800 Porsi)</p>
                        <br>
                          <ol>
                            <li><b>Sewa Gedung Standart </b></li>
                            <br>
                              <li><b>Catering</b></li>
                              <ul>
                                <li>Buffet Utama Sebanyak 600 Porsi <a href="http://bit.ly/paket2wed" target="_blank">Paket Menu 2</a></li>
                                <li>Buffet Keluarga Sebanyak 50 Porsi <a href="http://bit.ly/paket2wed" target="_blank">Paket Menu 2</a></li>
                                <li>Menu Makanan Gubug, Terdiri dari :</li>
                             
                                    <ul>
                                      <li style="color: red">Ice cream Aneka Rasa Sebanyak 200 Porsi</li>
                                      <li  style="color: red">Tom Yam Soup Sebanyak 200 Porsi </li>
                                      <li  style="color: red">Siomay Sebanyak 200 Porsi</li>
                                      <li  style="color: red">Kambing Guling Sebanyak 1 Ekor</li>
                                      <li  style="color: red">Sate Ayam + Lontong Sebanyak 200 Porsi</li>
                                      <li  style="color: red">Soto Betawi Sebanyak 200 Porsi</li>
                                      <li  style="color: red">Roti Cane + Kare Ayam Sebanyak 200 Porsi</li>
                                      <li  style="color: red">Nasi Gudeg Sebanyak 200 Porsi</li>
                                       <li  style="color: red">Chocholate Fountain Sebanyak 200 Porsi</li>
                                    </ul>
                              </ul>
                              <br>
                              <li><b>Dekorasi Katering </b></li>
                              <ul>
                                <li>Dekorasi Meja Buffet Utama</li>
                                <li>Dekorasi Meja Buffet Keluarga</li>
                                <li>Dekorasi Meja Dessert </li>
                                <li> <i>Ice Carving</i></li>
                              </ul>
                              <br>
                              <li><b>Dekorasi Pelaminan</b></li>
                              <ul>
                                <li>Pelaminan Sesuai Adat</li>
                                <li>Panggung Pelaminan</li>
                                <li>Bunga Pelaminan (Jawa / Sunda)</li>
                                <li>Taman Pelaminan</li>
                                <li>Pergola Kotak (1 Pasang)</li>
                                <li><i>Standing Flower</i> Ranting (3 Pasang)</li>
                                <li>Karpet Jalan</li>
                                <li>Umbul-Umbul</li>
                              </ul>
                              <br>
                              <li><b>Tata Rias (Berlaku 1x Acara Gedung)</b></li>
                              <ul>
                                <li><i>Make Up</i>Pengantin Saat Akad Nikah Gedung <b>(Pakaian Milik Pribadi)</b></li>
                                <li><i>Make Up</i> Dan Busana Pengantin Pada Saat Resepsi (1 Pasang)</li>
                                <li><i>Make Up</i>, Sanggul Dan Kain untuk Ibu Pengantin (2 Orang)</li>
                                <li>Beskap Lengkap/ Baju Demang Untuk Bapak Pengantin (2 Orang) </li>
                                <li><i>Make Up</i> Dan Busana Untuk Penerima Tamu (4 Orang)</li>
                                <li><i>Make Up</i> Dan Busana Untuk Pagar Ayu + Pagar Bagus (6 Pasang)</li>
                              </ul>
                              <br>
                              <li><b>Dokumentasi</b></li>
                              <ul>
                                <li>1 Album Foto Liputan Kolase (15 Sheet)</li>
                                <li>1 Album Pengantin Prawedding</li>
                                <li><i>Video Shooting</i> Langsung (Berbentuk DVD)</li>
                                <li>Bonus: Foto Prewedding Indoor di Pose Studio/ Tarzan Studio </li>
                                <li>Bonus: Foto Kanvas + Bingkai Ukuran 40 x 50 Inchi</li>
                              </ul>
                              <br>
                              <li><b>MC Pada Saat Resepsi</b></li><br>
                              <li><b>Cucuk Lampah/ Lengser/ Tarian Selamat Datang</b></li><br>
                              <li><b>Kelengkapan Lainnya</b></li>
                              <ul>
                                <li>Buku Tamu + Spidol (4 Buah)</li>
                                <li>Tempat Uang + Tempat <i>Souvenir</i> (Dipinjamkan 2 Buah)</li>
                                <li>100 Porsi Nasi Soto Ayam + Juice (Setelah Akad Nikah)</li>
                              </ul>
                          </ol>
          </div>
        </div>
      </div>

      <div class="card">
        <div class="card-header" id="headingEleven">
          
        </div>
        <div id="collapseEleven" class="collapse" aria-labelledby="headingEleven" data-parent="#accordion">
          <div class="card-body">
             <br>
                        <h2>Fasilitas Terdiri Dari </h2>
                        <p style="color: red"> 
                           <?php foreach ($query22->result() as $item): ?>
                         Harga :<?= 'Rp. '.number_format($item->hrg,0,',','.'); ?> 
                         <?php endforeach;?> (Untuk 1000 Porsi)</p>
                        <br>
                          <ol>
                            <li><b>Sewa Gedung Standart </b></li>
                            <br>
                              <li><b>Catering</b></li>
                              <ul>
                                <li>Buffet Utama Sebanyak 900 Porsi  <a href="http://bit.ly/paket1wed" target="_blank">Paket Menu 1</a></li>
                                <li>Buffet Keluarga Sebanyak 100 Porsi  <a href="http://bit.ly/paket1wed" target="_blank">Paket Menu 1</a></li>
                                <li>Menu Makanan Gubug, Terdiri dari :</li>
                             
                                    <ul>
                                      <li style="color: red">Es Doger Sebanyak 200 Cups</li>
                                      <li  style="color: red">Es Podeng Sebanyak 200 Cups </li>
                                      <li  style="color: red">Bakwan Malang Sebanyak 200 Porsi</li>
                                      <li  style="color: red">Siomay Sebanyak 200 Porsi</li>
                                      <li  style="color: red">Kambing Guling Sebanyak 1 Ekor</li>
                                      <li  style="color: red">Sate Ayam + Lontong Sebanyak 200 Porsi</li>
                                      <li  style="color: red">Soto Kudus Sebanyak 200 Porsi</li>
                                      <li  style="color: red">Lontong Cap Gomeh Sebanyak 200 Porsi</li>
                                    </ul>
                              </ul>
                              <br>
                              <li><b>Dekorasi Katering </b></li>
                              <ul>
                                <li>Dekorasi Meja Buffet Utama</li>
                                <li>Dekorasi Meja Buffet Keluarga</li>
                                <li>Dekorasi Meja Dessert </li>
                                <li> <i>Ice Carving</i></li>
                              </ul>
                              <br>
                              <li><b>Dekorasi Pelaminan</b></li>
                              <ul>
                                <li>Pelaminan Sesuai Adat</li>
                                <li>Panggung Pelaminan</li>
                                <li>Bunga Pelaminan (Jawa / Sunda)</li>
                                <li>Taman Pelaminan</li>
                                <li>Pergola Kotak (1 Pasang)</li>
                                <li><i>Standing Flower</i> Ranting (3 Pasang)</li>
                                <li>Karpet Jalan</li>
                                <li>Umbul-Umbul</li>
                              </ul>
                              <br>
                              <li><b>Tata Rias (Berlaku 1x Acara Gedung)</b></li>
                              <ul>
                                <li><i>Make Up</i>Pengantin Saat Akad Nikah Gedung <b>(Pakaian Milik Pribadi)</b></li>
                                <li><i>Make Up</i> Dan Busana Pengantin Pada Saat Resepsi (1 Pasang)</li>
                                <li><i>Make Up</i>, Sanggul Dan Kain untuk Ibu Pengantin (2 Orang)</li>
                                <li>Beskap Lengkap/ Baju Demang Untuk Bapak Pengantin (2 Orang) </li>
                                <li><i>Make Up</i> Dan Busana Untuk Penerima Tamu (4 Orang)</li>
                                <li><i>Make Up</i> Dan Busana Untuk Pagar Ayu + Pagar Bagus (6 Pasang)</li>
                              </ul>
                              <br>
                              <li><b>Dokumentasi</b></li>
                              <ul>
                                <li>1 Album Foto Liputan Kolase (15 Sheet)</li>
                                <li>1 Album Pengantin Prawedding</li>
                                <li><i>Video Shooting</i> Langsung (Berbentuk DVD)</li>
                                <li>Bonus: Foto Prewedding Indoor di Pose Studio/ Tarzan Studio </li>
                                <li>Bonus: Foto Kanvas + Bingkai Ukuran 40 x 50 Inchi</li>
                              </ul>
                              <br>
                              <li><b>MC Pada Saat Resepsi</b></li><br>
                              <li><b>Cucuk Lampah/ Lengser/ Tarian Selamat Datang</b></li><br>
                              <li><b>Kelengkapan Lainnya</b></li>
                              <ul>
                                <li>Buku Tamu + Spidol (4 Buah)</li>
                                <li>Tempat Uang + Tempat <i>Souvenir</i> (Dipinjamkan 2 Buah)</li>
                               
                              </ul>
                          </ol>
          </div>
        </div>
      </div>

      <div class="card">
        <div class="card-header" id="headingTweleve">
          
        </div>
        <div id="collapseTweleve" class="collapse" aria-labelledby="headingTweleve" data-parent="#accordion">
          <div class="card-body">
             <br>
                        <h2>Fasilitas Terdiri Dari </h2>
                        <p style="color: red"> 
                           <?php foreach ($query26->result() as $item): ?>
                         Harga :<?= 'Rp. '.number_format($item->hrg,0,',','.'); ?> 
                         <?php endforeach;?> (Untuk 1000 Porsi)</p>
                          <ol>
                            <li><b>Sewa Gedung Standart </b></li>
                            <br>
                              <li><b>Catering</b></li>
                              <ul>
                                <li>Buffet Utama Sebanyak 800 Porsi <a href="http://bit.ly/paket2wed" target="_blank">Paket Menu 2</a></li>
                                <li>Buffet Keluarga Sebanyak 100 Porsi <a href="http://bit.ly/paket2wed" target="_blank">Paket Menu 2</a></li>
                                <li>Menu Makanan Gubug, Terdiri dari :</li>
                             
                                    <ul>
                                      <li style="color: red">Ice cream Aneka Rasa Sebanyak 200 Cups</li>
                                      <li  style="color: red">Kebab Sebanyak 200 Porsi </li>
                                      <li  style="color: red">Tom Yam Soup Sebanyak 200 Porsi</li>
                                      <li  style="color: red">Pempek Sebanyak 200 Porsi </li>
                                      <li  style="color: red">Siomay Sebanyak 200 Porsi </li>
                                      <li  style="color: red">Kambing Guling Sebanyak 2 Ekor</li>
                                      <li  style="color: red">Sate Ayam + Lontong Sebanyak 200 Porsi</li>
                                      <li  style="color: red">Soto Betawi Sebanyak 200 Porsi</li>
                                      <li  style="color: red">Bakwan Malang Sebanyak 200 Porsi</li>
                                      <li  style="color: red">Bebek Panggang Sebanyak 100 Porsi </li>
                                      <li  style="color: red">Chocolate Fountain Sebanyak 200 Porsi </li>
                                    </ul>
                              </ul>
                              <br>
                              <li><b>Dekorasi Katering </b></li>
                              <ul>
                                <li>Dekorasi Meja Buffet Utama</li>
                                <li>Dekorasi Meja Buffet Keluarga</li>
                                <li>Dekorasi Meja Dessert </li>
                                <li> <i>Ice Carving</i></li>
                              </ul>
                              <br>
                              <li><b>Dekorasi Pelaminan</b></li>
                              <ul>
                                <li>Pelaminan Sesuai Adat</li>
                                <li>Panggung Pelaminan</li>
                                <li>Bunga Pelaminan (Jawa / Sunda)</li>
                                <li>Taman Pelaminan</li>
                                <li>Pergola Kotak (1 Pasang)</li>
                                <li><i>Standing Flower</i> Ranting (3 Pasang)</li>
                                <li>Karpet Jalan</li>
                                <li>Umbul-Umbul</li>
                              </ul>
                              <br>
                              <li><b>Tata Rias (Berlaku 1x Acara Gedung)</b></li>
                              <ul>
                                <li><i>Make Up</i>Pengantin Saat Akad Nikah Gedung <b>(Pakaian Milik Pribadi)</b></li>
                                <li><i>Make Up</i> Dan Busana Pengantin Pada Saat Resepsi (1 Pasang)</li>
                                <li><i>Make Up</i>, Sanggul Dan Kain untuk Ibu Pengantin (2 Orang)</li>
                                <li>Beskap Lengkap/ Baju Demang Untuk Bapak Pengantin (2 Orang) </li>
                                <li><i>Make Up</i> Dan Busana Untuk Penerima Tamu (4 Orang)</li>
                                <li><i>Make Up</i> Dan Busana Untuk Pagar Ayu + Pagar Bagus (6 Pasang)</li>
                              </ul>
                              <br>
                              <li><b>Dokumentasi</b></li>
                              <ul>
                                <li>1 Album Foto Liputan Kolase (15 Sheet)</li>
                                <li>1 Album Pengantin Prawedding</li>
                                <li><i>Video Shooting</i> Langsung (Berbentuk DVD)</li>
                                <li>Bonus: Foto Prewedding Indoor di Pose Studio/ Tarzan Studio </li>
                                <li>Bonus: Foto Kanvas + Bingkai Ukuran 40 x 50 Inchi</li>
                              </ul>
                              <br>
                              <li><b>MC Pada Saat Resepsi</b></li><br>
                              <li><b>Cucuk Lampah/ Lengser/ Tarian Selamat Datang</b></li><br>
                              <li><b>Kelengkapan Lainnya</b></li>
                              <ul>
                                <li>Buku Tamu + Spidol (4 Buah)</li>
                                <li>Tempat Uang + Tempat <i>Souvenir</i> (Dipinjamkan 2 Buah)</li>
                                <li>100 Porsi Nasi Soto Ayam + Juice (Setelah Akad Nikah)</li>
                                <li>Honeymoon di Bali 3 Hari 2 Malam Atau 1 Pasang Cincin Nikah</li>
                               
                              </ul>
                          </ol>
          </div>
        </div>
        <br>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>
</div>
</div>
                    
</div>

</div>
</div>

</div>
</div>
</div>


                 
<!-- footer -->
<?php $this->load->view('footer'); ?>
<!-- jQuery -->
    <script src="<?php echo base_url(); ?>admin_assets/js/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url(); ?>admin_assets/js/bootstrap.min.js"></script>
    <!-- Data Tables -->
    <script src="<?php echo base_url(); ?>admin_assets/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url(); ?>admin_assets/js/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>admin_assets/js/dataTables.responsive.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url(); ?>admin_assets/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?php echo base_url(); ?>admin_assets/nprogress/nprogress.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url(); ?>admin_assets/js/custom.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        $('#datatables').DataTable()
      }
        );
    </script>
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