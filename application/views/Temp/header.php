<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>CV Jaya Konstruksi</title>
    <meta name="description" content="Free Bootstrap 4 Admin Theme | Pike Admin">
    <meta name="author" content="Pike Web Development - https://www.pikephp.com">
 
    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo base_url('assets');?>/temp/assets/images/favicon.ico">

    <!-- Bootstrap CSS -->
    <link href="<?php echo base_url('assets');?>/temp/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    
    <!-- Font Awesome CSS -->
    <link href="<?php echo base_url('assets');?>/temp/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    
    <!-- Custom CSS -->
    <link href="<?php echo base_url('assets');?>/temp/assets/css/style.css" rel="stylesheet" type="text/css" />
    <script src="<?php echo base_url('assets');?>/temp/assets/js/modernizr.min.js"></script>
    <script src="<?php echo base_url('assets');?>/temp/assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url('assets');?>/temp/assets/js/moment.min.js"></script>
    
    <!-- BEGIN CSS for this page -->
    <link href="<?php echo base_url('assets');?>/temp/assets/plugins/datetimepicker/css/daterangepicker.css" rel="stylesheet" /> 
    
    <!-- BEGIN CSS for this page -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css"/>
    <!-- END CSS for this page -->

    <!-- BEGIN CSS for datatables -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css"/>    
    <style> 
    td.details-control {
    background: url('a<?php echo base_url('assets');?>/temp/ssets/plugins/datatables/img/details_open.png') no-repeat center center;
    cursor: pointer;
    }
    tr.shown td.details-control {
    background: url('<?php echo base_url('assets');?>/temp/assets/plugins/datatables/img/details_close.png') no-repeat center center;
    }
    </style>        
        <!-- END CSS for datatables -->
    
</head>
 
<body class="adminbody ">

<div id="main">

  <!-- top bar navigation -->
  <div class="headerbar ">

    <!-- LOGO -->
        <div class="headerbar-left ">
      <a href="#" class="logo"> <span> SI Pengarsipan</span></a> 
        </div>

        <nav class="navbar-custom  bg-dark text-white">
            <?php if ($this->session->userdata('unit_pegawai') == "Rekanan") { ?>
                    <ul class="list-inline float-right mb-0">
                        <li class="list-inline-item dropdown notif">
                            <span class="text-black "><b>
                                <?php echo $this->session->userdata('nama'); ?>
                                </b>
                            </span>
                        </li>
                               
                        <li class="list-inline-item dropdown notif">
                            <a class="nav-link dropdown-toggle nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <img src="<?php echo base_url('assets');?>/temp/assets/images/avatars/admin.png" alt="Profile image" class="avatar-rounded">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h5 class="text-overflow"><small>Hello, <?php echo $this->session->userdata('unit_pegawai'); ?></small> </h5>
                                </div>

                                <!-- item-->
                                <a href="<?php echo site_url('Profil/rekanan');?>" class="dropdown-item notify-item">
                                    <i class="fa fa-user"></i> <span>Profile</span>
                                </a>

                                <!-- item-->
                                <a href="<?php echo site_url('Login/logout');?>" class="dropdown-item notify-item">
                                    <i class="fa fa-power-off"></i> <span>Logout</span>
                                </a>
                            </div>
                        </li>

                    </ul>

            <?php } else {?>

                    <ul class="list-inline float-right mb-0">
                        <li class="list-inline-item dropdown notif">
                            <span class="text-black "><b>
                                <?php echo $this->session->userdata('unit_pegawai'); ?>
                                </b>
                            </span>
                        </li>
                               
                        <li class="list-inline-item dropdown notif">
                            <a class="nav-link dropdown-toggle nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <img src="<?php echo base_url('assets');?>/temp/assets/images/avatars/admin.png" alt="Profile image" class="avatar-rounded">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h5 class="text-overflow"><small>Hello, <?php echo $this->session->userdata('nama'); ?></small> </h5>
                                </div>

                                <!-- item-->
                                <a href="<?php echo site_url('Profil');?>" class="dropdown-item notify-item">
                                    <i class="fa fa-user"></i> <span>Profile</span>
                                </a>

                                <!-- item-->
                                <a href="<?php echo site_url('Login/logout');?>" class="dropdown-item notify-item">
                                    <i class="fa fa-power-off"></i> <span>Logout</span>
                                </a>
                            </div>
                        </li>

                    </ul>
            <?php }?>

                    <ul class="list-inline menu-left mb-0">
                        <li class="float-left">
                            <button class="button-menu-mobile open-left">
                <i class="fa fa-fw fa-bars"></i>
                            </button>
                        </li>                        
                    </ul>

        </nav>

  </div>
  <!-- End Navigation -->
  