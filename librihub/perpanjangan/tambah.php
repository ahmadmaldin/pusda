  <div class="row">
    <div class="col-md-12">
      <div class="page-header">
        <h4>
          <i class="glyphicon glyphicon-edit"></i>
          Entri Perpanjangan Buku
        </h4>
      </div> <!-- /.page-header -->

      <div class="panel panel-default">
        <div class="panel-body">
          <form class="form-horizontal" action="?page=perpanjangan-simpan" method="post" enctype="multipart/form-data">

            <div class="form-group">
              <label class="col-sm-2 control-label">Id Perpanjangan</label>
              <div class="col-sm-3">
                <input type="text" class="form-control" name="id_perpanjangan" autocomplete="off" required>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Id Peminjaman</label>
              <div class="col-sm-3">
                <input type="text" class="form-control" name="id_peminjaman" autocomplete="off" required>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Tanggal Perpanjangan</label>
              <div class="col-sm-3">
                <input type="date" class="form-control" name="tglperpanjangan" autocomplete="off" required>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Jml Perpanjangan</label>
              <div class="col-sm-3">
                <input type="number" class="form-control" name="jmlperpanjangan" autocomplete="off" required>
              </div>
            </div>

            <hr />
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <input type="submit" class="btn btn-info btn-submit" name="simpan" value="Simpan">
                <a href="?page=perpanjangan-tampil" class="btn btn-default btn-reset">Batal</a>
              </div>
            </div>
          </form>
        </div> <!-- /.panel-body -->
      </div> <!-- /.panel -->
    </div> <!-- /.col -->
  </div> <!-- /.row -->