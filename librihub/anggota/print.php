<div class="row">
    <div class="col-md-12">
        <div class="page-header">
            <h4>
                <i class="glyphicon glyphicon-edit"></i>
                Detail Data Anggota
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

        <ul class="list-group">
            <li class="list-group-item active"><b>DETAIL DATA ANGGOTA</b></li>
            <li class="list-group-item">Id_Anggota : <b><?php echo $id_anggota; ?></b></li>
            <li class="list-group-item">NIS / NIK : <b><?php echo $nis_nik; ?></b></li>
            <li class="list-group-item">Username : <b><?php echo $username; ?></b></li>
            <li class="list-group-item">Jenis Kelamin : <b><?php echo $jenis_kelamin; ?></b></li>
            <li class="list-group-item">Tanggal Lahir : <b><?php echo $tanggal_lahir; ?></b></li>
            <li class="list-group-item">Alamat : <b><?php echo $alamat; ?></b></li>
            <li class="list-group-item">No. Telp : <b><?php echo $notelp; ?></b></li>
            <li class="list-group-item">Foto : <b><?php echo $foto; ?></b></li>

            <li class="list-group-item">
                <div class="text-center">
                    <?php echo "<img src='anggota/gambar/$foto' width='100' height='auto'>"; ?>
                </div>
            </li>

        </ul>

        <?php
        $kembali = "";
        if ($_SESSION['level'] == "Admin") {
            $kembali = "anggota-tampil-data";
        }
        ?>

        <div class="form-group">
            <a href="?page=anggota-tampil" <?php echo $kembali ?> class="btn btn-default btn-reset">Kembali</a>
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