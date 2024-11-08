  <div class="row">
    <div class="col-md-12">
      <div class="page-header">
        <h4>
          <i class="glyphicon glyphicon-edit"></i>
          Entri Pengembalian Buku
        </h4>
      </div> <!-- /.page-header -->

      <div class="panel panel-default">
        <div class="panel-body">
          <form class="form-horizontal" action="?page=pengembalian-simpan" method="post" enctype="multipart/form-data">


            <div class="form-group">
              <label class="col-sm-2 control-label">Id Pengembalian</label>
              <div class="col-sm-3">
                <input type="text" class="form-control" name="id_pengembalian" autocomplete="off" required>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Id Peminjaman</label>
              <div class="col-sm-3">
                <select class="form-control" name="id_peminjaman" placeholder="Pilih" required>
                  <option value=""> Pilih Data Peminjaman </option>

                  <?php
                  $query = "SELECT peminjaman.*, anggota.username  FROM peminjaman JOIN anggota ON anggota.id_anggota = peminjaman.id_anggota";
                  $result = mysqli_query($db, $query);
                  foreach ($result as $data) { ?>

                    <option value=" <?php echo $data["id_peminjaman"]; ?> "> <?php echo $data["id_peminjaman"] . " - " . $data["username"]; ?> </option>
                  <?php } ?>
                </select>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Tanggal Pengembalian</label>
              <div class="col-sm-3">
                <input type="date" class="form-control" name="tglkembali" autocomplete="off" required>
              </div>
            </div>

            <hr />
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <input type="submit" class="btn btn-info btn-submit" name="simpan" value="Simpan">
                <a href="?page=pengembalian-tampil" class="btn btn-default btn-reset">Batal</a>
              </div>
            </div>
          </form>
        </div> <!-- /.panel-body -->
      </div> <!-- /.panel -->
    </div> <!-- /.col -->
  </div> <!-- /.row -->