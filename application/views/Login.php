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


<body class="hold-transition ">
<div class="login-box">
  <!-- /.login-logo -->
   <!-- Content Wrapper. Contains page content -->
    <div class="content-page">

        <div class="content">
         
              
          <!-- Main row -->
      <div class="container-fluid">
        
        <div class="container pull-right">
          <div class="row">
            <div class="col-8">  
              <div class="card card-primary card-tabs">
                <div class="card-body">
                
 <form action="<?Php echo base_url('index.php/login');?>/autentication" method="post">
        
  <div class="login-logo text-center mb-5">
                          <?php if($this->session->flashdata('login')): ?>
                            <div class="alert alert-danger alert-dismissable">
                              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                              <h4>  <i class="icon fa fa-check"></i> login!</h4>
                              <?php echo $this->session->flashdata('login');?>
                            </div>
                          <?php endif; ?>
      <!--   <center>
  <img  alt="Logo" class="card-img-top col-lg-9 " src="<?php echo base_url('assets');?>/temp/assets/images/logo.png" /> </center> -->
    <a href="<?php echo site_url('login') ?>"><h1><b>Sistem Informasi Pengarsipan </b> </h1></a> 
  </div>
   <div class="input-group mb-3">
          <input type="text" class="form-control" name="nip" placeholder="NIP / Username" required autofocus>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fa fa-fw fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" placeholder="Password" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fa fa-fw fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <select class="form-control" name="bagian">
                        <?php 
                          foreach ($pengguna as $golongan) 
                          {
                               echo '<option value='.$golongan->id_bagian.' >'.$golongan->bagian;'</option>';
                          }
                        ?>
          </select>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fa fa-fw fa-users"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-5">
          </div>
          <!-- /.col -->
          <div class="col-2">
            <button type="submit" class="btn btn-danger btn-block text-center">LogIn</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div><!-- right col -->
          </div>

          </div><!-- /.row (main row) -->



</div>
<!-- /.login-box -->



<script src="<?php echo base_url('assets');?>/temp/assets/js/modernizr.min.js"></script>
<script src="<?php echo base_url('assets');?>/temp/assets/js/jquery.min.js"></script>
<script src="<?php echo base_url('assets');?>/temp/assets/js/moment.min.js"></script>
    
<script src="<?php echo base_url('assets');?>/temp/assets/js/popper.min.js"></script>
<script src="<?php echo base_url('assets');?>/temp/assets/js/bootstrap.min.js"></script>

<script src="<?php echo base_url('assets');?>/temp/assets/js/detect.js"></script>
<script src="<?php echo base_url('assets');?>/temp/assets/js/fastclick.js"></script>
<script src="<?php echo base_url('assets');?>/temp/assets/js/jquery.blockUI.js"></script>
<script src="<?php echo base_url('assets');?>/temp/assets/js/jquery.nicescroll.js"></script>

<!-- App js -->
<script src="<?php echo base_url('assets');?>/temp/assets/js/pikeadmin.js"></script>
<!-- BEGIN Java Script for this page -->
<script src="<?php echo base_url('assets');?>/temp/assets/plugins/datetimepicker/js/moment.min.js"></script>
<script src="<?php echo base_url('assets');?>/temp/assets/plugins/datetimepicker/js/daterangepicker.js"></script>

<!-- BEGIN Java Script for this page -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>

  <!-- Counter-Up-->
  <script src="<?php echo base_url('assets');?>/temp/assets/plugins/waypoints/lib/jquery.waypoints.min.js"></script>
  <script src="<?php echo base_url('assets');?>/temp/assets/plugins/counterup/jquery.counterup.min.js"></script>      
  <!-- data table -->
  <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>

  <script>
  // START CODE FOR BASIC DATA TABLE 
  $(document).ready(function() {
    $('#example1').DataTable();
  } );
  // END CODE FOR BASIC DATA TABLE 
</script>
  <script>
    $(document).ready(function() {
      // data-tables
      $('#example1').DataTable();
          
      // counter-up
      $('.counter').counterUp({
        delay: 10,
        time: 600
      });
    } );    
  </script>
  
  <script>
  var ctx1 = document.getElementById("lineChart").getContext('2d');
  var lineChart = new Chart(ctx1, {
    type: 'bar',
    data: {
      labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
      datasets: [{
          label: 'Dataset 1',
          backgroundColor: '#3EB9DC',
          data: [10, 14, 6, 7, 13, 9, 13, 16, 11, 8, 12, 9] 
        }, {
          label: 'Dataset 2',
          backgroundColor: '#EBEFF3',
          data: [12, 14, 6, 7, 13, 6, 13, 16, 10, 8, 11, 12]
        }]
        
    },
    options: {
            tooltips: {
              mode: 'index',
              intersect: false
            },
            responsive: true,
            scales: {
              xAxes: [{
                stacked: true,
              }],
              yAxes: [{
                stacked: true
              }]
            }
          }
  });


  var ctx2 = document.getElementById("pieChart").getContext('2d');
  var pieChart = new Chart(ctx2, {
    type: 'pie',
    data: {
        datasets: [{
          data: [12, 19, 3, 5, 2, 3],
          backgroundColor: [
            'rgba(255,99,132,1)',
            'rgba(54, 162, 235, 1)',
            'rgba(255, 206, 86, 1)',
            'rgba(75, 192, 192, 1)',
            'rgba(153, 102, 255, 1)',
            'rgba(255, 159, 64, 1)'
          ],
          label: 'Dataset 1'
        }],
        labels: [
          "Red",
          "Orange",
          "Yellow",
          "Green",
          "Blue"
        ]
      },
      options: {
        responsive: true
      }
   
  });


  var ctx3 = document.getElementById("doughnutChart").getContext('2d');
  var doughnutChart = new Chart(ctx3, {
    type: 'doughnut',
    data: {
        datasets: [{
          data: [12, 19, 3, 5, 2, 3],
          backgroundColor: [
            'rgba(255,99,132,1)',
            'rgba(54, 162, 235, 1)',
            'rgba(255, 206, 86, 1)',
            'rgba(75, 192, 192, 1)',
            'rgba(153, 102, 255, 1)',
            'rgba(255, 159, 64, 1)'
          ],
          label: 'Dataset 1'
        }],
        labels: [
          "Red",
          "Orange",
          "Yellow",
          "Green",
          "Blue"
        ]
      },
      options: {
        responsive: true
      }
   
  });
  </script>
<!-- END Java Script for this page -->

</body>
</html>