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
        <form class="form-horizontal" method="POST" action="?page=users-update" enctype="multipart/form-data">

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
                <label class="col-sm-2 control-label">Tanggal Buat</label>
                <div class="col-sm-2">
                    <input type="date" class="form-control" name="tanggal_buat" autocomplete="off" value="<?php echo $tanggal_buat; ?>">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Alamat</label>
                <div class="col-sm-2">
                    <input type="text" class="form-control" name="alamat" value="<?php echo $alamat; ?>">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Instansi</label>
                <div class="col-sm-2">
                    <select class="form-control" name="instansi" placeholder="Pilih instansi">
                        <option value="<?php echo $instansi; ?>"><?php echo $instansi; ?></option>
                        <option value="Diskominfosanditik">Diskominfosanditik</option>
                        <option value="BPKAD">BPKAD</option>
                        <option value="Dinas Arsip">Dinas Arsip</option>
                        <option value="Kementerian Agama">Kementerian Agama</option>
                        <option value="Disparbudpora">Disparbudpora</option>
                        <option value="Disdukcapil">Disdukcapil</option>
                        <option value="Dinas Pendidikan">Dinas Pendidikan</option>
                        <option value="Diskoperindag">Diskoperindag</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Status</label>
                <div class="col-sm-2">
                    <select class="form-control" name="stat" placeholder="Pilih status">
                        <option value="<?php echo $stat; ?>"><?php echo $stat; ?></option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">No Telp</label>
                <div class="col-sm-2">
                    <input type="text" class="form-control" name="telp" autocomplete="off" value="<?php echo $telp; ?>">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Foto</label>
                <div class="col-sm-2">
                    <div class="text-center">
                        <?php echo "<img src='users/gambar/$foto' width='auto' height='200' class='img-rounded' alt='$foto'>"; ?>
                    </div>
                    <br>
                    <input type="file" class="form-control" name="foto" value="<?php echo $foto; ?>">
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