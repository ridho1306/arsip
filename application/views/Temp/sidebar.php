
 
  <!-- Left Sidebar -->
  <div class="left main-sidebar">
      <div class="user-panel">
</div>
    <div class="sidebar-inner leftscroll">

      <div id="sidebar-menu">
        <br>
        <center> Logo
 <!--  <img  alt="Logo" class="card-img-top col-lg-9 " src="<?php echo base_url('assets');?>/temp/assets/images/logo.jpeg" /> --> </center>
  <br>
        
      <ul>
                    <li class="submenu">
                        <a class="bg-info text-dark" href=""><center><span> Menu Utama </span></center> </a>
                            </li>

                <?php if($judulhalaman == "Dashboard"):?>
                    <li class="submenu">
                        <a class="active" href="<?php echo base_url('index.php/Dashboard') ?>"><i class="fa fa-fw fa-home"></i><span> Dashboard </span> </a>
                            </li>
                <?php else:?>
                    <li class="submenu">
                        <a href="<?php echo base_url('index.php/Dashboard') ?>"><i class="fa fa-fw fa-home"></i><span> Dashboard </span> </a>
                            </li>
                <?php endif; ?>

            <?php if($this->session->userdata('unit_pegawai') == "Admin" ):?>
                <?php if($judulhalaman == "Pegawai"):?>
                    <li class="submenu">
                        <a class="active" href="<?php echo base_url('index.php/Pegawai') ?>"><i class="fa fa-fw fa-users"></i><span> Pegawai </span> </a>
                    </li>
                <?php else:?>
                    <li class="submenu">
                        <a href="<?php echo base_url('index.php/Pegawai') ?>"><i class="fa fa-fw fa-users"></i><span> Pegawai </span> </a>
                    </li>
                <?php endif;
                endif;?> 

            <?php if($this->session->userdata('unit_pegawai') == "Admin" ):?>
                <?php if($judulhalaman == "Katagori"):?>
                    <li class="submenu">
                        <a class="active" href="<?php echo base_url('index.php/Katagori') ?>"><i class="fa fa-fw fa-book"></i><span> Katagori </span> </a>
                    </li>
                <?php else:?>
                    <li class="submenu">
                        <a href="<?php echo base_url('index.php/Katagori') ?>"><i class="fa fa-fw fa-book"></i><span> Katagori </span> </a>
                    </li>
                <?php endif;
                endif;?> 

            <?php if($this->session->userdata('unit_pegawai') == "Admin" ):?>
                <?php if($judulhalaman == "Bagian"):?>
                    <li class="submenu">
                        <a class="active" href="<?php echo base_url('index.php/Bagian') ?>"><i class="fa fa-fw fa-address-card"></i><span> Bagian </span> </a>
                    </li>
                <?php else:?>
                    <li class="submenu">
                        <a href="<?php echo base_url('index.php/Bagian') ?>"><i class="fa fa-fw fa-address-card"></i><span> Bagian </span> </a>
                    </li>
                <?php endif;
                endif;?> 

            <?php foreach ($menu as $key ) {
             if($this->session->userdata('unit_pegawai') == "$key->bagian" || $this->session->userdata('status') == 0 ):?>
                <?php if($judulhalaman == $key->katagori):?>
                    <li class="submenu">
                        <a class="active" href="<?php echo base_url('index.php/File/daftar/'.$key->id_bagian) ?>"><i class="fa fa-fw fa-file"></i><span> <?php echo $key->katagori; ?> </span> </a>
                    </li>
                <?php else:?>
                    <li class="submenu">
                        <a href="<?php echo base_url('index.php/File/daftar/'.$key->id_bagian) ?>"><i class="fa fa-fw fa-file"></i><span> <?php echo $key->katagori; ?> </span> </a>
                    </li>
                <?php endif;
                endif; 
            }?> 

            </ul>

            <div class="clearfix"></div>

      </div>
        
      <div class="clearfix"></div>

    </div>

  </div>
  <!-- End Sidebar -->