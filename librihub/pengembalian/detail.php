<div class="row">
    <div class="col-md-12">
        <div class="page-header">
            <h4>
                <i class="glyphicon glyphicon-edit"></i>
                Detail Data Pengembalian Buku
            </h4>
        </div> <!-- /.page-header -->
        <?php
        if (isset($_GET['id'])) {
            $id   = $_GET['id'];
            $query = mysqli_query($db, "SELECT * FROM pengembalian WHERE id_pengembalian='$id_pengembalian'") or die('Query Error : ' . mysqli_error($db));
            while ($data  = mysqli_fetch_assoc($query)) {
                $id_pengembalian          = $data['id_pengembalian'];
                $id_peminjaman     = $data['id_peminjaman'];
                $tglkembali     = $data['tglkembali'];
            }
        }
        ?>

        <ul class="list-group">
            <li class="list-group-item active"><b>DETAIL DATA PENGEMBALIAN BUKU</b></li>
            <li class="list-group-item">Id Pengembalian: <b><?php echo $id_pengembalian; ?></b></li>
            <li class="list-group-item">Id Peminjaman : <b><?php echo $id_peminjaman; ?></b></li>
            <li class="list-group-item">Tanggal Kembali : <b><?php echo $tglkembali; ?></b></li>

        </ul>

        <?php
        $kembali = "";
        if ($_SESSION['level'] == "Admin") {
            $kembali = "pengembalian-tampil";
        }
        ?>

        <div class="form-group">
            <a href="?page=<?php echo $kembali ?>" class="btn btn-default btn-reset">Kembali</a>
        </div>
    </div>
    </form>
</div> <!-- /.panel-body -->
</div> <!-- /.panel -->
</div> <!-- /.col -->
</div> <!-- /.row -->