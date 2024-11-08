<div class="row">
    <div class="col-md-12">
        <div class="page-header">
            <center>
                <h4>
                    <b>Kirim Detail Data Pegawai</b>
                </h4>
            </center>
        </div> <!-- /.page-header -->
        <?php
        if (isset($_GET['id'])) {
            $nis   = $_GET['id'];
            $query = mysqli_query($db, "SELECT * FROM pegawai WHERE nis='$nis'") or die('Query Error : ' . mysqli_error($db));
            while ($data  = mysqli_fetch_assoc($query)) {
                $nis            = $data['nis'];
                $nama           = $data['nama'];
                $jabatan        = $data['jabatan'];
                $bidang         = $data['bidang'];
                $telp           = $data['telp'];
                $email          = $data['email'];
                $foto            = $data['foto'];
            }
        }
        ?>


        <div class="form-group">
            <center>

                <a href="https://api.whatsapp.com/send?phone=6289508722030&text=<?php echo "*DETAIL DATA PEGAWAI*" .  "%0ANIS : " . $nis . "%0ANama Pegawai : " . $nama . "%0AJabatan : " . $jabatan . "%0ABidang : " . $bidang . "%0ANo. Telp : " . $telp . "%0AEmail : " . $email . "%0AFoto : " . $foto; ?>" class=" btn btn-default" target="_blank"><i class="glyphicon glyphicon-share"></i> Admin </a>

                <a href="https://api.whatsapp.com/send?phone=<?php echo $telp; ?>&text=<?php echo "*DETAIL DATA PEGAWAI*" .  "%0ANIS : " . $nis . "%0ANama Pegawai : " . $nama . "%0AJabatan : " . $jabatan . "%0ABidang : " . $bidang . "%0ANo. Telp : " . $telp . "%0AEmail : " . $email . "%0AFoto : " . $foto; ?>" class=" btn btn-default" target="_blank"><i class="glyphicon glyphicon-share"></i> <?php echo $nama; ?> </a>

            </center>
        </div>

        <div class="form-group">
            <center>
                <a href="?page=pegawai-tampil" class="btn btn-default">Kembali</a>
            </center>
        </div>


    </div>
    </form>


</div> <!-- /.panel-body -->
</div> <!-- /.panel -->
</div> <!-- /.col -->
</div> <!-- /.row -->