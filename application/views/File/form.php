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

            <form action = "<?php echo base_url('index.php/File/insert');?>/" method="post" enctype="multipart/form-data">

              <div class="box-body">
                
                <div class="form-group">
                  <label for="inputNama" class="col-sm-3 control-label">Nama File</label>

                  <div class="col-sm-7">
                    <input type="input" class="form-control" name="nama" placeholder="Nama File" id="exampleInputFile" required/>
                  </div>
                </div>
            </div>

              <div class="box-body">
                
                <div class="form-group">
                  <label for="inputNama" class="col-sm-3 control-label">File</label>
                    <input type="file" class="form-control" name="data"  required/>
                    <input type="hidden" class="form-control" name="id_katagori" value="<?php echo $id_katagori; ?>">

                  <div class="col-sm-7">
                  </div>
                </div>
            </div>
              <!-- /.box-body -->
              <div class="box-footer">
                 <a href="<?php echo base_url('index.php/Bagian') ?>">
                    <button type="button" class="btn "><i class="fa fa-reply"> Back</i></button>
                </a>
                <button type="submit" class="btn btn-info pull-right">Daftar</button>
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


