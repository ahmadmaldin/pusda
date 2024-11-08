  <div class="row">
    <div class="col-md-12">
      <div class="page-header">
        <h4>
          <i class="glyphicon glyphicon-edit"></i>
          Edit Data Anggota
        </h4>
      </div> <!-- /.page-header -->

      <?php
      if (isset($_GET['id'])) {
        $id_anggota   = $_GET['id'];
        $query = mysqli_query($db, "SELECT * FROM anggota WHERE id_anggota='$id_anggota'") or die('Query Error : ' . mysqli_error($db));
        while ($data  = mysqli_fetch_assoc($query)) {
          $id_anggota           = $data['id_anggota'];
          $nis_nik         = $data['nis_nik'];
          $username     = $data['username'];
          $jenis_kelamin        = $data['jenis_kelamin'];
          $tanggal_lahir          = $data['tanggal_lahir'];
          $alamat          = $data['alamat'];
          $notelp          = $data['notelp'];
          $foto          = $data['foto'];
        }
      }
      ?>

      <div class="panel panel-default">
        <div class="panel-body">
          <form class="form-horizontal" action="?page=anggota-ubah" method="post" enctype="multipart/form-data">

            <div class="form-group">
              <label class="col-sm-2 control-label">Id Anggota</label>
              <div class="col-sm-3">
                <input type="TEXT" class="form-control" name="id_anggota" autocomplete="off" value="<?php echo $id_anggota; ?>" required>
              </div>
            </div>


            <div class="form-group">
              <label class="col-sm-2 control-label">NIS / NIK</label>
              <div class="col-sm-3">
                <input type="text" class="form-control" name="nis_nik" autocomplete="off" value="<?php echo $nis_nik; ?>">
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Username</label>
              <div class="col-sm-3">
                <input type="TEXT" class="form-control" name="username" autocomplete="off" value="<?php echo $username; ?>" required>
              </div>
            </div>


            <div class="form-group">
              <label class="col-sm-2 control-label">Jenis Kelamin</label>
              <div class="col-sm-3">
                <select class="form-control" name="jenis_kelamin" placeholder="Pilih Level" required>
                  <option value="<?php echo $jenis_kelamin; ?>"><?php echo $jenis_kelamin; ?></option>
                  <option value="Laki-laki">laki-laki</option>
                  <option value="Perempuan">Perempuan</option>
                </select>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Tanggal Lahir</label>
              <div class="col-sm-3">
                <input type="date" class="form-control" name="tanggal_lahir" autocomplete="off" value="<?php echo $tanggal_lahir; ?>" required>
              </div>
            </div>


            <div class="form-group">
              <label class="col-sm-2 control-label">Alamat</label>
              <div class="col-sm-3">
                <input type="text" class="form-control" name="alamat" value="<?php echo $alamat; ?>" required>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">No.Telp</label>
              <div class="col-sm-3">
                <input type="text" class="form-control" name="notelp" value="<?php echo $notelp; ?>" required>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Foto</label>
              <div class="col-sm-2">
                <div class="text-center">
                  <?php echo "<img src='anggota/gambar/$foto' width='auto' height='200' class='img-rounded' alt='$foto'>"; ?>
                </div>
                <br>
                <input type="file" class="form-control" name="foto" value="<?php echo $foto; ?>">
              </div>
            </div>

            <hr />
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <input type="submit" class="btn btn-info btn-submit" name="update" value="Update">
              </div>
            </div>
          </form>
        </div> <!-- /.panel-body -->
      </div> <!-- /.panel -->
    </div> <!-- /.col -->
  </div> <!-- /.row -->