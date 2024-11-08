  <div class="row">
    <div class="col-md-12">
      <div class="page-header">
        <h4>
          <i class="glyphicon glyphicon-edit"></i>
          Entri Peminjaman Buku
        </h4>
      </div> <!-- /.page-header -->

      <div class="panel panel-default">
        <div class="panel-body">
          <form class="form-horizontal" action="?page=peminjaman-simpan" method="post" enctype="multipart/form-data">

            <div class="form-group">
              <label class="col-sm-2 control-label">Nama Anggota</label>
              <div class="col-sm-3">
                <select class="form-control" name="id_anggota" placeholder="Pilih" required>
                  <option value=""> Pilih Nama Anggota </option>

                  <?php
                  $query = "SELECT * FROM anggota";
                  $result = mysqli_query($db, $query);
                  foreach ($result as $data) { ?>

                    <option value=" <?php echo $data["id_anggota"]; ?> "> <?php echo $data["id_anggota"] . " - " . $data["username"]; ?> </option>
                  <?php } ?>
                </select>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Judul Buku</label>
              <div class="col-sm-3">
                <select class="form-control" name="id_buku" placeholder="Pilih" required>
                  <option value=""> Pilih Judul Buku </option>
                  <?php
                  $query = "SELECT * FROM buku";
                  $result = mysqli_query($db, $query);
                  foreach ($result as $data) { ?>
                    <option value=" <?php echo $data["id_buku"]; ?> "> <?php echo $data["id_buku"] . " - " . $data["judul"]; ?> </option>
                  <?php } ?>
                </select>
              </div>
            </div>


            <div class="form-group">
              <label class="col-sm-2 control-label">Tanggal Peminjaman</label>
              <div class="col-sm-3">
                <input type="date" class="form-control" name="tglpinjam" autocomplete="off" required>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Tanggal Pengembalian</label>
              <div class="col-sm-3">
                <input type="date" class="form-control" name="tglkembali" autocomplete="off" required>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Status</label>
              <div class="col-sm-3">
                <select class="form-control" name="status" placeholder="Pilih Status" required>
                  <option value="Dipinjam">Dipinjam</option>
                  <option value="Dikembalikan">Dikembalikan</option>

                </select>
              </div>
            </div>


            <hr />
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <input type="submit" class="btn btn-info btn-submit" name="simpan" value="Simpan">
                <a href="?page=peminjaman-tampil" class="btn btn-default btn-reset">Batal</a>
              </div>
            </div>
          </form>
        </div> <!-- /.panel-body -->
      </div> <!-- /.panel -->
    </div> <!-- /.col -->
  </div> <!-- /.row -->