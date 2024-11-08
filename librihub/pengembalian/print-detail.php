<div class="row">
  <div class="col-md-12">
    <div class="page-header">
      <h4>
        <i class="glyphicon glyphicon-edit"></i>
        Detail Data Perpanjangan Buku
      </h4>
    </div> <!-- /.page-header -->
    <?php
    if (isset($_GET['id'])) {
      $id_peminjaman   = $_GET['id'];
      $query = mysqli_query($db, "SELECT * FROM perpanjangan WHERE id_peminjaman='$id_peminjaman'") or die('Query Error : ' . mysqli_error($db));
      while ($data  = mysqli_fetch_assoc($query)) {
        $id_perpanjangan           = $data['id_perpanjangan'];
        $id_peminjaman     = $data['id_peminjaman'];
        $tglperpanjangn     = $data['tglperpanjangan'];
        $jmlperpanjangan        = $data['jmlperpanjangan'];
      }
    }
    ?>

    <ul class="list-group">
      <li class="list-group-item active"><b>DETAIL DATA PERPANJANGAN BUKU</b></li>
      <li class="list-group-item">Id_Perpanjangan : <b><?php echo $id_perpanjangan; ?></b></li>
      <li class="list-group-item">Id_Anggota : <b><?php echo $id_peminjaman; ?></b></li>
      <li class="list-group-item">Tgl Perpanjangan : <b><?php echo $tglperpanjangan; ?></b></li>
      <li class="list-group-item">Jml Perpanjangan : <b><?php echo $jmlperpanjangan; ?></b></li>
    </ul>

    <?php
    $kembali = "";
    if ($_SESSION['level'] == "Admin") {
      $kembali = "perpanjangan-tampil";
    }
    ?>

    <div class="form-group">
      <a href="?page=<?php echo $kembali ?>" class="btn btn-default btn-reset">Kembali</a>
    </div>
  </div>
  </form>
</div> <!-- /.panel-body -->
</div> <!-- /.panel -->
</div> <!-- /.col -->
</div> <!-- /.row -->

<script>
  window.print();
</script>