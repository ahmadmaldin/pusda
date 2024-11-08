<div class="row">
    <div class="col-md-12">
        <div class="page-header">
            <center>
                <h4>
                    <b>Kirim Detail Data Anggota</b>
                </h4>
            </center>
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


        <div class="form-group">
            <center>

                <a href="https://api.whatsapp.com/send?phone=6289508722030&text=<?php echo "*DETAIL DATA anggota*" .  "%0Aid_anggota : " . $id_anggota . "%0NIS / NIK : " . $nis_nik . "%0Ausername anggota : " . $username . "%0Ajenis_kelamin : " . $jenis_kelamin . "%0Atanggal_lahir : " . $tanggal_lahir . "%0ANo. Telp : " . $notelp . "%0Aalamat : " . $alamat . "%0AFoto : " . $foto; ?>" class=" btn btn-default" target="_blank"><i class="glyphicon glyphicon-share"></i> Admin </a>

                <a href="https://api.whatsapp.com/send?phone=<?php echo $notelp; ?>&text=<?php echo "*DETAIL DATA anggota*" .  "%0Aid_anggota : " . $id_anggota . "%0NIS / NIK : " . $nis_nik . "%0Ausername anggota : " . $username . "%0Ajenis_kelamin : " . $jenis_kelamin . "%0Atanggal_lahir : " . $tanggal_lahir . "%0ANo. notelp : " . $notelp . "%0Aalamat : " . $alamat . "%0AFoto : " . $foto; ?>" class=" btn btn-default" target="_blank"><i class="glyphicon glyphicon-share"></i> <?php echo $username; ?> </a>

            </center>
        </div>

        <div class="form-group">
            <center>
                <a href="?page=anggota-tampil" class="btn btn-default">Kembali</a>
            </center>
        </div>


    </div>
    </form>


</div> <!-- /.panel-body -->
</div> <!-- /.panel -->
</div> <!-- /.col -->
</div> <!-- /.row -->