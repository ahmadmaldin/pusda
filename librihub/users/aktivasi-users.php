<?php
if (isset($_GET['id'])) {
    $nis   = $_GET['id'];
    $query = mysqli_query($db, "SELECT * FROM users WHERE nis='$nis'") or die('Query Error : ' . mysqli_error($db));
    while ($data  = mysqli_fetch_assoc($query)) {
        $nis      = $data['nis'];
        $nama     = $data['nama'];
        $tanggal_buat  = $data['tanggal_buat'];
        $alamat   = $data['alamat'];
        $telp     = $data['telp'];
        $instansi    = $data['instansi'];
        $stat    = $data['stat'];
        $foto     = $data['foto'];
    }
}
?>

<div class="row">
    <div class="col-md-12">
        <br>
        <form class="form-horizontal" method="POST" action="?page=aktivasi" enctype="multipart/form-data">

            <div class="form-group">
                <label class="col-sm-2 control-label">nis</label>
                <div class="col-sm-2">
                    <input type="text" class="form-control" name="nis" value="<?php echo $nis; ?>">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Nama</label>
                <div class="col-sm-2">
                    <input type="text" class="form-control" name="nama" value="<?php echo $nama; ?>">
                </div>
            </div>


            <div class="form-group">
                <label class="col-sm-2 control-label">Status</label>
                <div class="col-sm-2">
                    <select class="form-control" name="stat" placeholder="Pilih status">
                        <option value="<?php echo $stat; ?>"><?php echo $stat; ?></option>
                        <option value="Aktif">Aktif</option>
                        <option value="Belum Aktif">Belum Aktif</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <input type="submit" class="btn btn-info btn-submit" name="update" value="Update">
                </div>
            </div>
        </form>
        <a href="?page=pegawai-tampil" class="btn btn-default btn-reset">Kembali</a>

        <hr>
    </div>
</div>


</div> <!-- /.col -->
</div> <!-- /.row -->