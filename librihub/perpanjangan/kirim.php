<div class="row">
    <div class="col-md-12">
        <div class="page-header">
            <center>
                <h4>
                    <b>Kirim Data perpanjangan Buku</b>
                </h4>
            </center>
        </div> <!-- /.page-header -->
        <?php
        if (isset($_GET['id'])) {
            $id_perpanjangan   = $_GET['id'];
            $query = mysqli_query($db, "SELECT * FROM perpanjangan WHERE id_perpanjangan='$id_perpanjangan'") or die('Query Error : ' . mysqli_error($db));
            while ($data  = mysqli_fetch_assoc($query)) {
                $id_perpanjangan           = $data['id_perpanjangan'];
                $id_peminjaman        = $data['id_peminjaman'];
                $tglperpanjangan         = $data['tglperpanjangan'];
                $jmlperpanjangan           = $data['jmlperpanjangan'];
            }
        }
        ?>


        <div class="form-group">
            <center>

                <a href="https://api.whatsapp.com/send?phone=6289508722030&text=<?php echo "* DATA PERPANJANGAN BUKU*" .  "%0AId Perpanjangan : " . $id_perpanjangan . "%0AId Peminjaman : " . $id_peminjaman  . "%0ATgl Perpanjangan : " . $tglperpanjangan . "%0AJlm Perpanjangan : " . $jmlperpanjangan; ?>" class=" btn btn-default" target="_blank"><i class="glyphicon glyphicon-share"></i> Admin </a>

                <a href="https://api.whatsapp.com/send?phone=<?php echo $telp; ?>&text=<?php echo "* DATA PERPANJANGAN BUKU*" .  "%0AId Perpanjangan : " . $id_perpanjangan . "%0AId Peminjaman  : " . $id_peminjaman . "%0Tgl Perpanjangan : " . $tglperpanjangan . "%0AJml Perpanjangan : " . $jmlperpanjangan; ?>" class=" btn btn-default" target="_blank"><i class="glyphicon glyphicon-share"></i> <?php echo $id_perpanjangan; ?> </a>

            </center>
        </div>

        <div class="form-group">
            <center>
                <a href="?page=perpanjangan-tampil" class="btn btn-default">Kembali</a>
            </center>
        </div>


    </div>
    </form>


</div> <!-- /.panel-body -->
</div> <!-- /.panel -->
</div> <!-- /.col -->
</div> <!-- /.row -->