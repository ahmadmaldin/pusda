<?php
if (isset($_GET['id'])) {
    $id   = $_GET['id'];
    $query = mysqli_query($db, "SELECT * FROM buku WHERE id_buku='$id'") or die('Query Error : ' . mysqli_error($db));
    while ($data  = mysqli_fetch_assoc($query)) {
        $id_buku      = $data['id_buku'];
        $judul      = $data['judul'];
        $penulis     = $data['penulis'];
        $penerbit  = $data['penerbit'];
        $edisi   = $data['edisi'];
        $deskripsi     = $data['deskripsi'];
        $isbn    = $data['isbn'];
        $subjek    = $data['subjek'];
        $bahasa    = $data['bahasa'];
        $foto     = $data['foto'];
    }
}
?>

<div class="row">
    <div class="col-md-12">
        <br>
        <form class="form-horizontal" method="POST" action="?page=buku-update" enctype="multipart/form-data">

            <div class="form-group">
                <label class="col-sm-2 control-label">Id Buku</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" name="id_buku" autocomplete="off" value="<?php echo $id_buku; ?>" readonly required>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Judul</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" name="judul" autocomplete="off" value="<?php echo $judul; ?>" required>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Penulis</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" name="penulis" autocomplete="off" value="<?php echo $penulis; ?>" required>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Penerbit</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" name="penerbit" autocomplete="off" value="<?php echo $penerbit; ?>" required>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Edisi</label>
                <div class="col-sm-3">
                    <input type="number" class="form-control" name="edisi" autocomplete="off" value="<?php echo $edisi; ?>" required>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Deskripsi</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" name="deskripsi" autocomplete="off" value="<?php echo $deskripsi; ?>" required>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">ISBN</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" name="isbn" autocomplete="off" value="<?php echo $isbn; ?>" required>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Subjek</label>
                <div class="col-sm-3">
                    <select class="form-control" name="subjek" placeholder="Pilih subjek" value="<?php echo $subjek; ?>" required>
                        <option value="<?php echo $subjek; ?>"><?php echo $subjek; ?></option>
                        <option value="fiksi">fiksi</option>
                        <option value="non fiksi">non fiksi</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Bahasa</label>
                <div class="col-sm-3">
                    <select class="form-control" name="bahasa" placeholder="Pilih Bahasa" value="<?php echo $bahasa; ?>" required>
                        <option value="<?php echo $bahasa; ?>"><?php echo $bahasa; ?></option>
                        <option value="indonesia">Indonesia</option>
                        <option value="non indonesia">Inggris</option>
                        <option value="non indonesia">Spanyol</option>
                        <option value="non indonesia">Prancis</option>
                        <option value="non indonesia">Jerman</option>
                        <option value="non indonesia">Jepang</option>
                        <option value="non indonesia">Mandarin</option>
                        <option value="non indonesia">Korea</option>
                        <option value="non indonesia">Italia</option>
                        <option value="non indonesia">Rusia</option>
                        <option value="non indonesia">Arab</option>
                        <option value="non indonesia">Belanda</option>
                        <option value="non indonesia">Portugis</option>
                        <option value="non indonesia">Hindi</option>
                        <option value="non indonesia">Thai</option>
                        <option value="non indonesia">Turki</option>
                        <option value="non indonesia">Swedia</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Foto</label>
                <div class="col-sm-2">
                    <div class="text-center">
                        <?php echo "<img src='buku/gambar/$foto' width='auto' height='200' class='img-rounded' alt='$foto'>"; ?>
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
        <a href="?page=buku-tampil" class="btn btn-default btn-reset">Kembali</a>

        <hr>
    </div>
</div>


</div> <!-- /.col -->
</div> <!-- /.row -->