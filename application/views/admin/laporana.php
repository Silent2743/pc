<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Halaman Laporan</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url(); ?>admin_assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Data Tables -->
    <link href="<?php echo base_url(); ?>admin_assets/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>admin_assets/css/responsive.bootstrap.min.css" rel="stylesheet">
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
        <?php $this->load->view('admin/nav'); ?>
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
                   <h2>Daftar Pesanan</h2>

                   <div style="float: right">
                     
                   </div>
                    <ul class="nav navbar-right panel_toolbox">
                     
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      
                      
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
      <table class = "table table-striped table-bordered dt-responsive nowrap" id="datatables">
        <thead>
          <tr>
            <th>#</th>
            <th>Username</th>
            <th>Jasa</th>
            <th>Paket</th>
            <th>Tgl Pesan</th>
             <th>Status Pesan</th>
              <th>Status Bayar</th> 
               <th>Gedung</th>
            <th>Rias</th>
            <th>Opsi</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $j =1;
          foreach ($data->result() as $items):
          ?>
          <tr>
            <td><?= $j++ ?></td>
            <td><?= $items->username; ?></td>
            <td><?= $items->kd_jasa; ?></td>
            <td><?= $items->kd_paket; ?></td>
            <td><?= $items->tgl_pesan; ?></td>
            <td><?= $items->status_pesan; ?></td>
            <td><?= $items->status_bayar; ?></td>
            <td><?= $items->kd_gd; ?></td>
            <td><?= $items->kd_rs; ?></td>
            <td>
              <a href=" <?= base_url('Laporana/update_lap/'.$items->username); ?>" class="btn btn-warning">Edit <i class ="fa fa-edit"></i></a>
              <a href=" <?= base_url('Laporana/delete/'.$items->username); ?>" class="btn btn-danger">Delete <i class ="fa fa-edit"></i></a>
            </td>
          </tr>
        <?php endforeach;?>
        </tbody>
      </table>
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
    

</body>
</html>