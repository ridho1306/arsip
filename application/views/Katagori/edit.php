 <!-- Content Wrapper. Contains page content -->
    <div class="content-page">

        <div class="content">
         
              
          <!-- Main row -->
      <div class="container-fluid">
        <div class="row">
          <div class="col-xl-12">
            <div class="breadcrumb-holder">
              <h1 class="main-title float-left"><?php echo $judulhalaman ?></h1>
                <ol class="breadcrumb float-right">
                  <li class="breadcrumb-item">Home</li>
                  <li class="breadcrumb-item active"><?php echo $judulhalaman ?></li>
                </ol>
              <div class="clearfix"></div>
        </div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-12">  
              <div class="card card-primary card-tabs">
                <div class="card-body">
                  <form  action = "<?php echo base_url('index.php/Katagori/edit/'.$pengguna->id_katagori);?>/" method="post">
              <div class="box-body">
                
                <div class="form-group">
                  <label for="inputNama" class="col-sm-3 control-label">Katagori</label>

                  <div class="col-sm-7">
                    <input type="input" class="form-control" name="katagori" placeholder="Katagori" value="<?php echo $pengguna->katagori; ?>">
                  </div>
                </div>
              </div>


              <div class="box-body">
                
                <div class="form-group">
                  <label for="inputNama" class="col-sm-3 control-label">Bagian</label>

                  <div class="col-sm-7">
                    <select class="form-control" name="id_bagian">
                        <?php 
                          foreach ($bagian as $golongan) {
                            if($golongan->id_bagian== $pengguna->id_bagian)
                            {
                                 echo '<option value='.$golongan->id_bagian.' selected>'.$golongan->bagian;'</option>';
                            }
                            else
                            {
                               echo '<option value='.$golongan->id_bagian.' >'.$golongan->bagian;'</option>';
                            }  
                             
                          }
                        ?>
                    </select>
                  </div>
                </div>
            </div>
                 
              <!-- /.box-body -->
              <div class="box-footer">
                 <a href="<?php echo base_url('index.php/Katagori') ?>">
                    <button type="button" class="btn "><i class="fa fa-reply"> Back</i></button>
                </a>
                <button type="submit" class="btn btn-info pull-right">Simpan</button>
              </div>
              <!-- /.box-footer -->
            </form>

                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div><!-- right col -->
          </div>

          </div><!-- /.row (main row) -->


