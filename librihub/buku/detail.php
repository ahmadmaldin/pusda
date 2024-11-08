<div class="row">
    <div class="col-md-12">
        <br>
        <?php
        if (isset($_GET['id'])) {
            $id_buku   = $_GET['id'];
            $query = mysqli_query($db, "SELECT * FROM buku WHERE id_buku='$id_buku'") or die('Query Error : ' . mysqli_error($db));
            while ($data   = mysqli_fetch_assoc($query)) {
                $id_buku     = $data['id_buku'];
                $judul     = $data['judul'];
                $penulis   = $data['penulis'];
                $penerbit  = $data['penerbit'];
                $edisi     = $data['edisi'];
                $deskripsi = $data['deskripsi'];
                $isbn      = $data['isbn'];
                $subjek    = $data['subjek'];
                $bahasa    = $data['bahasa'];
                $foto      = $data['foto'];
            }
        }
        ?>

        <ul class="list-group">
            <li class="list-group-item active"><b>DETAIL DATA BUKU</b></li>
            <li class="list-group-item">Id Buku : <b><?php echo $id_buku; ?></b></li>
            <li class="list-group-item">Judul : <b><?php echo $judul; ?></b></li>
            <li class="list-group-item">Penulis : <b><?php echo $penulis; ?></b></li>
            <li class="list-group-item">Penerbit : <b><?php echo $penerbit; ?></b></li>
            <li class="list-group-item">Edisi : <b><?php echo $edisi; ?></b></li>
            <li class="list-group-item">Deskripsi: <b><?php echo $deskripsi; ?></b></li>
            <li class="list-group-item">ISBN : <b><?php echo $isbn; ?></b></li>
            <li class="list-group-item">Subjek : <b><?php echo $subjek; ?></b></li>
            <li class="list-group-item">Bahasa : <b><?php echo $bahasa; ?></b></li>
            <li class="list-group-item">
                <div class="text-center">
                    <?php echo "<img src='buku/gambar/$foto' width='auto' height='50' class='img-rounded' >"; ?>
                </div>
            </li>
        </ul>

        <div class="form-group">
            <a href="?page=buku-tampil" class="btn btn-default btn-reset">Kembali</a>
        </div>
    </div>
    </form>
</div> <!-- /.panel-body -->
</div> <!-- /.panel -->
</div> <!-- /.col -->
</div> <!-- /.row -->