  <div class="row">
    <div class="col-md-12">
      <div class="page-header">
        <h4>
          <i class="glyphicon glyphicon-edit"></i>
          Input Data Anggota
        </h4>
      </div> <!-- /.page-header -->

      <div class="panel panel-default">
        <div class="panel-body">
          <form class="form-horizontal" action="?page=anggota-simpan" method="post" enctype="multipart/form-data">

            <div class="form-group">
              <label class="col-sm-2 control-label">Id Anggota</label>
              <div class="col-sm-3">
                <input type="text" class="form-control" name="id_anggota" autocomplete="off" required>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">NIS / NIK</label>
              <div class="col-sm-3">
                <input type="text" class="form-control" name="nis_nik" autocomplete="off" required>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Username</label>
              <div class="col-sm-3">
                <input type="TEXT" class="form-control" name="username" autocomplete="off" required>
              </div>
            </div>


            <div class="form-group">
              <label class="col-sm-2 control-label">Jenis Kelamin</label>
              <div class="col-sm-3">
                <select class="form-control" name="jenis_kelamin" placeholder="Pilih Level" required>
                  <option value="Laki-laki">laki-laki</option>
                  <option value="Perempuan">Perempuan</option>
                </select>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Tanggal Lahir</label>
              <div class="col-sm-3">
                <input type="date" class="form-control" name="tanggal_lahir" autocomplete="off" required>
              </div>
            </div>


            <div class="form-group">
              <label class="col-sm-2 control-label">Alamat</label>
              <div class="col-sm-2">
                <input type="text" class="form-control" name="alamat" required>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">No.Telp</label>
              <div class="col-sm-2">
                <input type="text" class="form-control" name="notelp" required>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Foto</label>
              <div class="col-sm-3">
                <input type="file" class="form-control" name="foto" autocomplete="off" required>
              </div>
            </div>

            <hr />
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <input type="submit" class="btn btn-info btn-submit" name="simpan" value="Simpan">
                <a href="?page=anggota-tampil" class="btn btn-default btn-reset">Batal</a>
              </div>
            </div>
          </form>
        </div> <!-- /.panel-body -->
      </div> <!-- /.panel -->
    </div> <!-- /.col -->
  </div> <!-- /.row -->