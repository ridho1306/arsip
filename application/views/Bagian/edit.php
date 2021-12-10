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
                  <form  action = "<?php echo base_url('index.php/Bagian/edit/'.$pengguna->id_bagian);?>/" method="post">
              <div class="box-body">
                
                <div class="form-group">
                  <label for="inputNama" class="col-sm-3 control-label">Bagian</label>

                  <div class="col-sm-7">
                    <input type="input" class="form-control" name="bagian" placeholder="Bagian" value="<?php echo $pengguna->bagian; ?>">
                  </div>
                </div>
              </div>


              <div class="box-body">
                
                <div class="form-group">
                  <label for="inputNama" class="col-sm-3 control-label">Status</label>

                  <div class="col-sm-7">
                    <select class="form-control" name="status">
                      <?php if ($pengguna->status == 1) { ?>

                      <option selected="selected" value="1">Pegawai</option>
                      <option value="0">Pengawas</option>
                      <?php
                      } else {?>

                      <option  value="1">Pegawai</option>
                      <option selected="selected" value="0">Pengawas</option>
                      <?php } ?>
                    </select>
                  </div>
                </div>
            </div>
                
              <!-- /.box-body -->
              <div class="box-footer">
                 <a href="<?php echo base_url('index.php/Bagian') ?>">
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


