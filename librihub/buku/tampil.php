<?php
if (isset($_POST['cari'])) {
    $cari = $_POST['cari'];
} else {
    $cari = "";
}
?>

<div class="row">
    <div class="col-md-12">
        <div class="page-header">
            <div class="panel-heading">
                <h3 class="panel-title">Data Buku <a class='btn btn-info' href='?page=buku-tambah'> <i class='fa fa-plus'></i> Tambah </a>
                </h3>

            </div>

            <div class="pull-right btn-tambah">
                <div class="form-group">
                    <div class="input-group">

                        <form class="form-inline" method="POST" action="?page=buku-tampil">
                            <input type="text" name="cari" class="form-control" placeholder="cari ..." required="required" value="<?php echo $cari; ?>">
                        </form>

                    </div>
                </div>
            </div>


            <?php
            if (empty($_GET['alert'])) {
                echo "";
            } elseif ($_GET['alert'] == 1) {
                echo "<div class='alert alert-danger alert-dismissible' role='alert'>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
              <span aria-hidden='true'>&times;</span>
            </button>
            <strong><i class='fa fa-alert'></i> Gagal!</strong> Terjadi kesalahan.
          </div>";
            } elseif ($_GET['alert'] == 2) {
                echo "<div class='alert alert-success alert-dismissible' role='alert'>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
              <span aria-hidden='true'>&times;</span>
            </button>
            <strong><i class='fa fa-ok-circle'></i> Sukses!</strong> Data buku berhasil disimpan.
          </div>";
            } elseif ($_GET['alert'] == 3) {
                echo "<div class='alert alert-success alert-dismissible' role='alert'>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
              <span aria-hidden='true'>&times;</span>
            </button>
            <strong><i class='fa fa-ok-circle'></i> Sukses!</strong> Data buku berhasil diubah.
          </div>";
            } elseif ($_GET['alert'] == 4) {
                echo "<div class='alert alert-success alert-dismissible' role='alert'>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
              <span aria-hidden='true'>&times;</span>
            </button>
            <strong><i class='fa fa-ok-circle'></i> Sukses!</strong> Data buku berhasil dihapus.
          </div>";
            } elseif ($_GET['alert'] == 5) {
                echo "<div class='alert alert-danger alert-dismissible' role='alert'>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
              <span aria-hidden='true'>&times;</span>
            </button>
            <strong><i class='fa fa-ok-circle'></i> Hampura mang euy!</strong> Kedahna tipe file na jpg, jpeg, png atanapi pdf.
          </div>";
            }
            ?>

            <div class="panel panel-default">
                <div class="panel-heading">

                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Id Buku</th>
                                    <th>Judul</th>
                                    <th>Penulis</th>
                                    <th>Penerbit</th>
                                    <th class='center'>Aksi</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                /* Pagination */
                                $batas = 10;

                                if (isset($cari)) {
                                    $jumlah_record = mysqli_query($db, "SELECT * FROM buku WHERE id_buku LIKE '%$cari%' OR judul LIKE '%$cari%'") or die('Ada kesalahan pada query jumlah_record: ' . mysqli_error($db));
                                } else {
                                    $jumlah_record = mysqli_query($db, "SELECT * FROM buku") or die('Ada kesalahan pada query jumlah_record: ' . mysqli_error($db));
                                }

                                $jumlah  = mysqli_num_rows($jumlah_record);
                                $halaman = ceil($jumlah / $batas);
                                $page    = (isset($_GET['hal'])) ? (int)$_GET['hal'] : 1;
                                $mulai   = ($page - 1) * $batas;
                                /*-------------------------------------------------------------------*/
                                $no = 1;
                                if (isset($cari)) {
                                    $query = mysqli_query($db, "SELECT * FROM buku WHERE id_buku LIKE '%$cari%' OR judul LIKE '%$cari%' ORDER BY id_buku LIMIT $mulai, $batas")
                                        or die('Ada kesalahan pada query buku: ' . mysqli_error($db));
                                } else {
                                    $query = mysqli_query($db, "SELECT * FROM buku ORDER BY id_buku LIMIT $mulai, $batas") or die('Ada kesalahan pada query buku: ' . mysqli_error($db));
                                }

                                while ($data = mysqli_fetch_assoc($query)) {

                                    echo "  <tr>
                      <td width='20'>$no</td>
                      <td width='50'>$data[id_buku]</td>
                      <td width='130'>$data[judul]</td>
                      <td width='130'>$data[penulis]</td>
                      <td width='130'>$data[penerbit]</td>
                      <td width='150' class='center'>
                        <div class=''>

                        <a data-toggle='tooltip' data-placement='top' title='Detail' style='margin-right:5px' class='btn btn-success btn-sm' href='?page=buku-detail&id=$data[id_buku]'> <i class='fa fa-info'></i> </a> 

                        <a data-toggle='tooltip' data-placement='top' title='Edit' style='margin-right:5px' class='btn btn-primary btn-sm' href='?page=buku-edit&id=$data[id_buku]'> <i class='fa fa-edit'></i></a>
                    
                                                ";

                                ?>
                                    <a data-toggle="tooltip" data-placement="top" title="Hapus" class="btn btn-danger btn-sm" href="?page=buku-hapus&id=<?php echo $data['id_buku']; ?>" onclick="return confirm('Anda yakin ingin menghapusnya <?php echo $data['judul']; ?>?');"> <i class="fa fa-trash"></i></a>
                                <?php
                                    echo "
                        </div>
                      </td>
                    </tr>";
                                    $no++;
                                }
                                ?>
                            </tbody>
                        </table>
                        <?php
                        if (empty($_GET['hal'])) {
                            $halaman_aktif = '1';
                        } else {
                            $halaman_aktif = $_GET['hal'];
                        }
                        ?>

                        <a>
                            Halaman <?php echo $halaman_aktif; ?> dari <?php echo $halaman; ?> |
                            Total <?php echo $jumlah; ?> data
                        </a>

                        <nav>
                            <ul class="pagination pull-right">
                                <!-- Button untuk halaman sebelumnya -->
                                <?php
                                if ($halaman_aktif <= '1') { ?>
                                    <li class="disabled">
                                        <a href="" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                        </a>
                                    </li>
                                <?php
                                } else { ?>
                                    <li>
                                        <a href="?page=buku-tampil&hal=<?php echo $page - 1 ?>" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                        </a>
                                    </li>
                                <?php
                                }
                                ?>

                                <!-- Link halaman 1 2 3 ... -->
                                <?php
                                for ($x = 1; $x <= $halaman; $x++) { ?>
                                    <li class="">
                                        <a href="?page=buku-tampil&hal=<?php echo $x ?>"><?php echo $x ?></a>
                                    </li>
                                <?php
                                }
                                ?>

                                <!-- Button untuk halaman selanjutnya -->
                                <?php
                                if ($halaman_aktif >= $halaman) { ?>
                                    <li class="disabled">
                                        <a href="" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                        </a>
                                    </li>
                                <?php
                                } else { ?>
                                    <li>
                                        <a href="?page=buku-tampil&hal=<?php echo $page + 1 ?>" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                        </a>
                                    </li>
                                <?php
                                }
                                ?>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div> <!-- /.panel -->
        </div> <!-- /.col -->
    </div> <!-- /.row -->