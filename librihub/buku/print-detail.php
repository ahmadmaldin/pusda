<div class="row">
    <div class="col-md-12">
        <br>
        <?php
        if (isset($_GET['id'])) {
            $nis   = $_GET['id'];
            $query = mysqli_query($db, "SELECT * FROM pegawai WHERE nis='$nis'") or die('Query Error : ' . mysqli_error($db));
            while ($data  = mysqli_fetch_assoc($query)) {
                $nis        = $data['nis'];
                $nama       = $data['nama'];
                $jabatan    = $data['jabatan'];
                $bidang     = $data['bidang'];
                $telp       = $data['telp'];
                $email      = $data['email'];
                $foto       = $data['foto'];
            }
        }
        ?>

        <ul class="list-group">
            <li class="list-group-item active"><b>
                    <center>DETAIL DATA PEGAWAI</center>
                </b></li>
            <li class="list-group-item">NIS : <b><?php echo $nis; ?></b></li>
            <li class="list-group-item">Nama : <b><?php echo $nama; ?></b></li>
            <li class="list-group-item">Jabatan : <b><?php echo $jabatan; ?></b></li>
            <li class="list-group-item">Bidang : <b><?php echo $bidang; ?></b></li>
            <li class="list-group-item">No. Telp : <b><?php echo $telp; ?></b></li>
            <li class="list-group-item">email : <b><?php echo $email; ?></b></li>
            <li class="list-group-item">
                <div class="text-center">
                    <?php echo "<img src='pegawai/gambar/$foto' width='auto' height='200' class='img-rounded' alt='Cinque Terre'>"; ?>
                </div>
            </li>
        </ul>
    </div>
    </form>
</div> <!-- /.panel-body -->
</div> <!-- /.panel -->
</div> <!-- /.col -->
</div> <!-- /.row -->

<script>
    window.print();
</script>