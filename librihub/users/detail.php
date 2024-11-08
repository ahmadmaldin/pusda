<div class="row">
    <div class="col-md-12">
        <br>
        <?php
        if (isset($_GET['id'])) {
            $nis   = $_GET['id'];
            $query = mysqli_query($db, "SELECT * FROM users WHERE nis='$nis'") or die('Query Error : ' . mysqli_error($db));
            while ($data  = mysqli_fetch_assoc($query)) {
                $nis        = $data['nis'];
                $nama       = $data['nama'];
                $tanggal_buat    = $data['tanggal_buat'];
                $alamat     = $data['alamat'];
                $instansi     = $data['instansi'];
                $telp       = $data['telp'];
                $stat      = $data['stat'];
                $foto       = $data['foto'];
            }
        }
        ?>

        <ul class="list-group">
            <li class="list-group-item active"><b>DETAIL DATA USERS</b></li>
            <li class="list-group-item">nis : <b><?php echo $nis; ?></b></li>
            <li class="list-group-item">Nama : <b><?php echo $nama; ?></b></li>
            <li class="list-group-item">Tanggal Buat : <b><?php echo $tanggal_buat; ?></b></li>
            <li class="list-group-item">Alamat : <b><?php echo $alamat; ?></b></li>
            <li class="list-group-item">Instansi : <b><?php echo $instansi; ?></b></li>
            <li class="list-group-item">No. Telp : <b><?php echo $telp; ?></b></li>
            <li class="list-group-item">Status : <b><?php echo $stat; ?></b></li>
            <li class="list-group-item">
                <div class="text-center">
                    <?php echo "<img src='users/gambar/$foto' width='auto' height='200' class='img-rounded' alt='Cinque Terre'>"; ?>
              </div>
            </li>
        </ul>

        <div class="form-group">
            <a href="?page=users-tampil" class="btn btn-default btn-reset">Kembali</a>
        </div>
    </div>
    </form>
</div> <!-- /.panel-body -->
</div> <!-- /.panel -->
</div> <!-- /.col -->
</div> <!-- /.row -->