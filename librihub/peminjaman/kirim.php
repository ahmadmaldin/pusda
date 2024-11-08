<div class="row">
    <div class="col-md-12">
        <div class="page-header">
            <center>

                <b>Kirim Detail Data Peminjaman Buku</b>

                <hr>
            </center>
        </div> <!-- /.page-header -->
        <?php
        if (isset($_GET['id'])) {
            $id_peminjaman   = $_GET['id'];
            $query = mysqli_query($db, "SELECT peminjaman.*, anggota.*, buku.* FROM peminjaman JOIN anggota ON anggota.id_anggota = peminjaman.id_anggota JOIN buku ON buku.id_buku = peminjaman.id_buku WHERE id_peminjaman='$id_peminjaman'") or die('Query Error : ' . mysqli_error($db));
            while ($data  = mysqli_fetch_assoc($query)) {
                $id_anggota     = $data['id_anggota'];
                $id_buku        = $data['id_buku'];
                $tglpinjam      = $data['tglpinjam'];
                $tglkembali     = $data['tglkembali'];
                $status         = $data['status'];
                $username       = $data['username'];
                $judul          = $data['judul'];
                $notelp          = $data['notelp'];
            }
        }
        ?>


        <div class="form-group">
            <center>
                <a href="?page=peminjaman-tampil" class="btn btn-warning">Kembali</a> &nbsp;

                <a href="https://api.whatsapp.com/send?phone=6289508722030&text=<?php echo "*DETAIL DATA PEMINJAMAN BUKU*" .  "%0AId Peminjaman : " . $id_peminjaman . "%0AId Anggota : " . $id_anggota . " - " . $username .  "%0AId Buku : " . $id_buku . " - " . $judul . "%0ATgl Pinjam : " . $tglpinjam . "%0ATgl Kembali : " . $tglkembali . "%0AStatus : " . $status; ?>" class="btn btn-info" target="_blank"><i class="glyphicon glyphicon-share"></i> Admin </a> &nbsp;

                <a href="https://api.whatsapp.com/send?phone=<?php echo $notelp; ?>&text=<?php echo "*DETAIL DATA PEMINJAMAN BUKU*" .  "%0AId Peminjaman : " . $id_peminjaman . "%0AId Anggota : " . $id_anggota . " - " . $username .  "%0AId Buku : " . $id_buku . " - " . $judul . "%0ATgl Pinjam : " . $tglpinjam . "%0ATgl Kembali : " . $tglkembali . "%0AStatus : " . $status;  ?>" class="btn btn-info" target="_blank"><i class="glyphicon glyphicon-share"></i> <?php echo $username; ?> </a>

            </center>
        </div>
    </div>
    </form>


</div> <!-- /.panel-body -->
</div> <!-- /.panel -->
</div> <!-- /.col -->
</div> <!-- /.row -->