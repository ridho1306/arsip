    <div class="content-page">
  
    <!-- Start content -->
        <div class="content">
            
      <div class="container-fluid">
          
            <div class="row">
                  <div class="col-xl-12">
                      <div class="breadcrumb-holder">
                          <h1 class="main-title float-left">Dashboard</h1>
                          <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item">Home</li>
                            <li class="breadcrumb-item active">Dashboard</li>
                          </ol>
                          <div class="clearfix"></div>
                      </div>
                  </div>
            </div>
            <!-- end row -->
                   <?php if($this->session->userdata('unit_pegawai') == "Admin" ){?>
              <div class="row">
                  <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                      <div class="card-box noradius noborder bg-default">
                          <i class="fa fa-user-o float-right text-white"></i>
                          <h6 class="text-white text-uppercase m-b-20">Katagori</h6>
                          <h1 class="m-b-20 text-white counter"><?php echo $Katagori; ?></h1>
                          <span class="text-white">-</span>
                      </div>
                  </div>

                  <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                      <div class="card-box noradius noborder bg-warning">
                          <i class="fa fa-bar-chart float-right text-white"></i>
                          <h6 class="text-white text-uppercase m-b-20">Bagian</h6>
                          <h1 class="m-b-20 text-white counter"><?php echo $Bagian; ?></h1>
                          <span class="text-white">.</span>
                      </div>
                  </div>

                  <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                      <div class="card-box noradius noborder bg-info">
                          <i class="fa fa-file-text-o float-right text-white"></i>
                          <h6 class="text-white text-uppercase m-b-20">File</h6>
                          <h1 class="m-b-20 text-white counter"><?php echo $file; ?></h1>
                          <span class="text-white">.</span>
                      </div>
                  </div>

                  <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                      <div class="card-box noradius noborder bg-danger">
                          <i class="fa fa-users float-right text-white"></i>
                          <h6 class="text-white text-uppercase m-b-20">Pegawai</h6>
                          <h1 class="m-b-20 text-white counter"><?php echo $pegawai; ?></h1>
                          <span class="text-white">.</span>
                      </div>
                  </div>
              </div>
              <!-- end row -->
              <?php } ?>
              
              <div class="row">

                  <div class="col-md-12">            
                    <div class="card mb-3">
                      <div class="card-header">
                        <h3><i class="fa fa-money"></i> Total File</h3>
                      </div>
                        
                      <div class="card-body">
                        
                        <table id="example1" class="table table-bordered table-responsive-xl table-hover display">
                          <thead>
                          <tr>
                            <th> No</th>
                            <th>Katagorit</th>
                            <th>Jumlah File</th>
                          </tr>
                        </thead>              
                        <tbody class="">
                          <?php $i=0; if($pengguna != 0)
                          {                  
                            foreach ($pengguna as $out) {
                            echo 
                              "<tr>".
                               "<td>".($i+1)."</td>".
                                "<td>".$out->katagori."</td>".
                                "<td>".$out->jumlah."</td>";       
                                                      
                              echo "</tr>";
                               $i++;
                            }
                           }
                         
                          ?>
                        </tbody>
                        </table>
                        
                      </div>                            
                    </div><!-- end card-->          
                  </div>

                  
              </div>      



            </div>
      <!-- END container-fluid -->

    </div>
    <!-- END content -->

    </div>
  <!-- END content-page -->