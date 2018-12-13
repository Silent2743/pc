<div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="<?php echo base_url(); ?>admin" class="site_title"><i class="fa fa-user"></i> <span>Perfect Catering</span></a>
            </div>

            <div class="clearfix"></div>
            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <ul class="nav side-menu">
                  <li><a href="<?php echo base_url(); ?>admin"><i class="fa fa-home"></i> Home </a>
                  </li>
                  <li><a><i class="fa fa-edit"></i> List Jasa<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a  href="<?php echo base_url(); ?>Menu">Halaman Menu & Paket</a></li>
                      <li><a  href="<?php echo base_url(); ?>Gedung">Halaman Gedung</a></li>
                      <li><a  href="<?php echo base_url(); ?>Rias">Halaman Rias</a></li>
                    </ul>
                  </li>
                  <li><a href="<?php echo base_url(); ?>Angg"><i class="fa fa-user"></i> List Anggota </a>
                    
                  </li>
                  <li><a href="<?php echo base_url(); ?>Laporana"><i class="fa fa-table"></i> Laporan </a>
                    
                  </li>
                  
                  </li>
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->

            
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-user"></i>     <?php echo ucwords($this->session->userdata("username") );?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="<?php echo base_url(); ?>EPA"> Edit Profil</a></li>
                    
                    <li><a href="<?php echo base_url(); ?>logout"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>