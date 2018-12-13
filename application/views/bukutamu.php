<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Perfect Catering | Gedung </title>
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
  
  
         
            <div class="page-title">
<div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title"><br>
                    <br>
                
                   <br>
                   <br>
                  </div>
                  <div class="x_content">
                    <form class="form-horizontal form-label-left" method="POST">

                     
                      <h3 align="center">Buku Tamu</h3>
                      <p style="color: red" align="center">Silahkan Tuliskan Pendapat Anda Kepada Kami.</p>


                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" ">Nama<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input class="form-control col-md-7 col-xs-12"  placeholder="Nama" required="required" name="nama" value="<?= $nama; ?>" >
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" ">Email<span required="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" required="required" class="form-control col-md-7 col-xs-12"  placeholder="Email" name="email" value="<?= $email; ?>">
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Pesan & Kesan<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input  class="form-control col-md-7 col-xs-12"  placeholder="Pesan dan Kesan" required="required" name="pesan" value="<?= $pesan; ?>">
                        </div>
                      </div>

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <button type="reset" class="btn btn-danger">Batal</button>
                          <button type="submit" class="btn btn-success" name="submit2" value="Submit2">Simpan</button>
                          <button type="button" onclick="window.history.go(-2)" class="btn btn-primary" >Kembali</button>
                        </div>
                      </div>
                    </form>
      <br>
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