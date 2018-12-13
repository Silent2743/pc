<!DOCTYPE html>
<html lang="en">
  <head>
   
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Halaman Pesan</title>
   

    <!-- Bootstrap -->
    <link href="<?php echo base_url(); ?>admin_assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url(); ?>admin_assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url(); ?>admin_assets/nprogress/nprogress.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="<?php echo base_url(); ?>admin_assets/css/custom.min.css" rel="stylesheet">
  </head>
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <?php $this->load->view('user/n_user'); ?>
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              

              <div class="title_right">
                </div>
            </div>
            <div class="clearfix"></div>

<div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                   <h2></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <?= validation_errors('<p style="color: red">', '</p>'); ?>
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <form class="form-horizontal form-label-left" method="POST" name="pesan" onsubmit="return checkForm(this);>

                     
                      <span class="section">Data Pemesanan</span>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" ">Username<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input class="form-control col-md-7 col-xs-12" readonly="readonly" required="required" name="username" value="<?php echo ucwords($this->session->userdata("username") );?>" >
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" ">Jasa<span required="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="radio" id="kd_jasa" name="kd_jasa" value="c" required="required" <?php if ($kd_jasa == 'c') { echo 'checked'; } ?>/>
                          <label >Katering</label>
                          <input type="radio" id="kd_jasa" name="kd_jasa" value="w" required="required" <?php if ($kd_jasa == 'w') { echo 'checked'; } ?>/>
                          <label >Wedding</label>
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Pilihan Paket<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" id="kd_paket" name="kd_paket">                         
                            <option value="">--Pilihan Paket--</option>
                            <optgroup label="Paket Katering" class="c">
                            <option value="pk1" class="c">Paket Menu 1</option>
                            <option value="pk2" class="c">Paket Menu 2</option>
                            <option value="pk3" class="c">Paket Menu 3</option>
                            </optgroup>
                            <optgroup label="Paket Wedding Standart" class="w">
                            <option value="ps1" class="w">Paket Standart 1</option>
                            <option value="ps2" class="w">Paket Standart 2</option>
                            <option value="ps3" class="w">Paket Standart 3</option>
                            <option value="ps4" class="w">Paket Standart 4</option>
                            </optgroup>
                            <optgroup label="Paket Wedding Ekslusif" class="w">
                            <option value="pe1" class="w">Paket Ekslusif 1</option>
                            <option value="pe2" class="w">Paket Ekslusif 2</option>
                            <option value="pe3" class="w">Paket Ekslusif 3</option>
                            <option value="pe4" class="w">Paket Ekslusif 4</option>
                          </optgroup>
                         </select>
                        </div>
                      </div>

                       <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" ">Tanggal Pesan<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input data-inputmask="'mask': '9999/99/99'" class="form-control col-md-7 col-xs-12" readonly="readonly" required="required" name="tgl_pesan" value="<?php echo date("Ymd"); ?>" >
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" ">Status Pesan<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input class="form-control col-md-7 col-xs-12" readonly="readonly" required="required" name="status_pesan" value="Sedang Diproses" >
                        </div>
                      </div>

                        <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" ">Status Bayar<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input class="form-control col-md-7 col-xs-12" readonly="readonly" required="required" name="status_bayar" value="Belum Dibayar" >
                        </div>
                      </div>

                      <div class="item form-group" >
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Pilihan Gedung<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12" >
                          <select class="form-control" id="kd_gd" name="kd_gd">
                            <option value="">-- Pilihan Gedung --</option>
                            <optgroup label="Khusus Katering" class="c">
                              <option value="b99" class="c">Pilih disini</option>
                            </optgroup>
                            <optgroup label="Jakarta Selatan" class="w">
                            <option value="JS1" class="w">Masjid Raya At-Taqwa</option>
                            <option value="JS2" class="w">Aula Buya Hamka - Masjid Agung Al Azhar</option>
                            <option value="JS3" class="w">Departemen Pekerjaan Umum</option>
                            <option value="JS4" class="w">Departemen Pertanian Ragunan</option>
                            <option value="JS5" class="w">Departemen Transmigrasi</option>
                            <option value="JS6" class="w">Gedung Dharma Wanita Persatuan Pusat</option>
                            <option value="JS7" class="w">Gedung MPR/DPR RI</option>
                            <option value="JS8" class="w">Graha Purna Wira Polri</option>
                            <option value="JS9" class="w">Kementerian Ketenagakerjaan Republik Indonesia</option>
                            <option value="JS10" class="w">Masjid Raya Al-Ittihaad</option>
                            <option value="JS11" class="w">MENARA HIJAU</option>
                            <option value="JS12" class="w">Nyi Ageng Serang</option>
                            <option value="JS13" class="w">PLN Ragunan</option>
                            <option value="JS14" class="w">Pusrehabcat Dephan</option>
                            <option value="JS15" class="w">Sasana Pakarti</option>
                            <option value="JS16" class="w">Wisma Bhayangkari</option>
                            </optgroup>
                            <optgroup label="Jakarta Timur" class="w">
                            <option value="JT1" class="w">Apartemen Pasadenia</option>
                            <option value="JT2" class="w">Aula Dharmagati Ksatria Jaya</option>
                            <option value="JT3" class="w">Aula Sudirman Makodam Jaya</option>
                            <option value="JT4" class="w">Cawang Kencana</option>
                            <option value="JT5" class="w">Gedung Ditlog Polri</option>
                            <option value="JT6" class="w">Gedung Sasana Wira Sakti</option>
                            <option value="JT7" class="w">Gedung Zeni</option>
                            <option value="JT8" class="w">Masjid Agung At Tin</option>
                            <option value="JT9" class="w">Padepokan Pencak Silat TMII</option>
                            <option value="JT10" class="w">Sasono Adiguno TMII</option>
                            <option value="JT11" class="w">Taman Anggrek Indonesia Permai</option>
                            <option value="JT12" class="w">Wisma KEMHAN</option>
                            <option value="JT13" class="w">Wisma Sejahtera</option>
                          </optgroup>
                          <optgroup label="Jakarta Utara" class="w">
                            <option value="JU1" class="w">GOR Jakarta Utara</option>
                            <option value="JU2" class="w">GOR Sunter</option>
                            <option value="JU3" class="w">Islamic Centre Jakarta</option>
                            <option value="JU4" class="w">Masjid Babussalam</option>
                          </optgroup>
                          <optgroup label="Jakarta Pusat" class="w">
                            <option value="JP1" class="w">Auditorium Adhiyana, Wisma Antara</option>
                            <option value="JP2" class="w">Balai Pertemuan Langen Palikrama</option>
                            <option value="JP3" class="w">Departemen Sosial Salemba</option>
                            <option value="JP4" class="w">Gedung Menza</option>
                            <option value="JP5" class="w">Gedung Pernikahan Graha Angkasa Pura 1</option>
                            <option value="JP6" class="w">Gedung Trisula Perwari</option>
                            <option value="JP7" class="w">Graha Jalapuspita</option>
                            <option value="JP9" class="w">LAN</option>
                            <option value="JP10" class="w">Masjid Al-Bina</option>
                            <option value="JP11" class="w">Masjid Baiturrahman Komplek MPR/DPR</option>
                            <option value="JP12" class="w">Perpustakaan Nasional</option>
                          </optgroup>
                           <optgroup label="Bekasi" class="w">
                            <option value="BS1" class="w">Bekasi Islamic Centre</option>
                            <option value="BS2" class="w">Grand Galaxy Park</option>
                            <option value="BS3" class="w">Gedung Sartika</option>
                            <option value="BS4" class="w">Taman Century</option>
                          </optgroup>
                          </select>
                        </div>
                      </div>

                      <div class="item form-group" >
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Pilihan Rias<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" id="kd_rs" name="kd_rs">
                            <option value="">-- Pilihan Rias --</option>
                            <optgroup label="Untuk Katering" class="c">
                              <option value="r99" class="c">Pilih disini</option>
                            </optgroup>
                            <optgroup label="Paket Standart" class="w">
                            <option value="RBS1" class="w">Sanggar Rias Renny</option>
                            <option value="RJT4" class="w">Rumah Butik Amora</option>
                            </optgroup>
                            <optgroup label="Paket Ekslusif" class="w">
                            <option value="RJT1" class="w">LyzaRae</option>
                            <option value="RJT2" class="w">Melati Griya Pengantin</option>
                            <option value="RJT3" class="w">Sanggar Miarosa</option>
                            <option value="RJS1" class="w">New Diamond</option>
                          </optgroup>
                          </select>
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <button type="reset" class="btn btn-danger">Batal</button>
                          <button type="submit" class="btn btn-success" name="submit2" value="Submit2">Pesan</button>
                          <button type="button" onclick="window.history.go(-2)" class="btn btn-primary" >Kembali</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
  </div>
</div>

    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>admin_assets/js/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url(); ?>admin_assets/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url(); ?>admin_assets/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?php echo base_url(); ?>admin_assets/nprogress/nprogress.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url(); ?>admin_assets/js/custom.min.js"></script>
    <!-- jquery.inputmask -->
    <script src="<?php echo base_url(); ?>admin_assets/jquery.inputmask/dist/min/jquery.inputmask.bundle.min.js"></script>

    <script type="text/javascript">
        jQuery(function($) {
        $('input:radio').change(function(){
            var val = $('input:radio:checked').val();
            $('#kd_paket').val(0)
            $('#kd_gd').val(0)
            $('#kd_rs').val(0)
            $('.c, .w').hide();
            $('.' + val).show();
        });
    });
  </script>
  <script type="text/javascript">

  function checkForm(form) // Submit button clicked
  {
    //
    // check form input values
    //

    form.submit2.disabled = true;
    form.submit2.value = " ";
    return true;
  }

  
</script>
  
 
  
</body>
</html>