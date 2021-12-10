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
                  

            <form  action = "<?php echo base_url('index.php/Pegawai/edit/'.$pengguna->id_pegawai);?>/" method="post">
              <div class="box-body">
                
                <div class="form-group">
                  <label for="inputNama" class="col-sm-3 control-label">Nama Pegawai</label>

                  <div class="col-sm-7">
                    <input type="input" class="form-control" name="nama" placeholder="Nama Pegawai" value="<?php echo $pengguna->nama_pegawai; ?>">
                  </div>
                </div>
                
                <div class="form-group">
                  <label for="identitas" class="col-sm-3 control-label">No Induk Pegawai</label>
                  <div class="col-sm-7">
                    <input type="input" class="form-control" name="nip" placeholder="NIP" value="<?php echo $pengguna->nip; ?>">
                  </div>
                </div>

                <div class="form-group">
                  <label for="JK" class="col-sm-3 control-label">Jabatan</label>
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

              <div class="form-group">
                  <label for="JK" class="col-sm-3 control-label">Jenis Kelamin</label>
                  <div class="col-sm-7">
                    <select class="form-control" name="jenis_kelamin">
                        <?php 
                            if($pengguna->jenis_kelamin =="Wanita")
                            {
                                 echo '<option name="jenis_kelamin" value="Laki-Laki">Laki-Laki</option>';
                                 echo '<option name="jenis_kelamin" value="Wanita" selected>Wanita</option>';
                            }
                            else
                            {
                               echo '<option name="jenis_kelamin" value="Laki-Laki" selected>Laki-Laki</option>';
                               echo '<option name="jenis_kelamin" value="Wanita">Wanita</option>';
                            }  
                             
                        ?>
                     </select>
                  </div>
              </div>

                <div class="form-group"> 
                  <label for="Tempat" class="col-sm-3 control-label fa fa-calendar"> Tanggal Lahir</label>
                      <div class="date col-sm-7">
                      <input type="text" class="form-control pull-right" id="jadwalPemakaian0" name="tgl_lahir" value="<?php echo $pengguna->tgl_lahir; ?>">
                    </div>
                </div>
                
                 
                <div class="form-group">
                  <label for="Alamat" class="col-sm-3 control-label">Alamat</label>
                  <div class="col-sm-7">
                    <textarea class="form-control" rows="3" name="alamat"><?php echo $pengguna->alamat; ?></textarea>
                  </div>
                </div>

                <div class="form-group">
                  <label for="HP" class="col-sm-3 control-label">No HP</label>
                  <div class="col-sm-7">
                    <input type="input" class="form-control" name="no_hp" placeholder="No HP" value="<?php echo $pengguna->no_telp; ?>">
                  </div>
                       
              </div>

               <div class="form-group">
                  <label for="identitas" class="col-sm-3 control-label">Password</label>
                  <div class="col-sm-7">
                    <input type="password" class="form-control" name="password" placeholder="isi Password jika ingin diubah">
                  </div>
                </div>

              <!-- /.box-body -->
              <div class="box-footer">
                 <a href="<?php echo base_url('index.php/Pegawai') ?>">
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


