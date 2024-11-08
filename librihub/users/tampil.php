<?php
if ($_SESSION['level'] == "Admin") {
} else if ($_SESSION['level'] == "User") {
    $ids = $_SESSION['id'];
    $jumlah_record1 = mysqli_query($db, "SELECT * FROM users where id = $ids") or die('Ada kesalahan pada query jumlah_record: ' . mysqli_error($db));
    $data = mysqli_fetch_assoc($jumlah_record1);
    $stat = $data['stat'];
    $jumlah1  = mysqli_num_rows($jumlah_record1);
} else {
}

if ($_SESSION['level'] == "Admin") {
    $isicari = "";
} else if ($_SESSION['level'] == "User") {
    $isicari = "$data[instansi]";
} else if ($_SESSION['level'] == "Pegawai") {
    $isicari = "";
}

if (isset($_POST['cari'])) {
    $cari = $_POST['cari'];
} else {
    $cari = "$isicari";
}
?>

<br>
<div class="row">
    <div class="col-md-12">
        <div class="panel-body">
            <div class="pull-right btn-tambah">
                <form class="form-inline" method="POST" action="?page=users-tampil">
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="glyphicon glyphicon-search"></i>
                            </div>
                            <input type="text" class="form-control" name="cari" placeholder="Cari ..." autocomplete="off" value="<?php echo $cari; ?>">
                        </div>
                    </div>
                </form>
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
            <strong><i class='glyphicon glyphicon-alert'></i> Gagal!</strong> Terjadi kesalahan.
          </div>";
        } elseif ($_GET['alert'] == 2) {
            echo "<div class='alert alert-success alert-dismissible' role='alert'>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
              <span aria-hidden='true'>&times;</span>
            </button>
            <strong><i class='glyphicon glyphicon-ok-circle'></i> Sukses!</strong> Data users berhasil disimpan.
          </div>";
        } elseif ($_GET['alert'] == 3) {
            echo "<div class='alert alert-success alert-dismissible' role='alert'>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
              <span aria-hidden='true'>&times;</span>
            </button>
            <strong><i class='glyphicon glyphicon-ok-circle'></i> Sukses!</strong> Data users berhasil diubah.
          </div>";
        } elseif ($_GET['alert'] == 4) {
            echo "<div class='alert alert-success alert-dismissible' role='alert'>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
              <span aria-hidden='true'>&times;</span>
            </button>
            <strong><i class='glyphicon glyphicon-ok-circle'></i> Sukses!</strong> Data users berhasil dihapus.
          </div>";
        } elseif ($_GET['alert'] == 5) {
            echo "<div class='alert alert-danger alert-dismissible' role='alert'>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
              <span aria-hidden='true'>&times;</span>
            </button>
            <strong><i class='glyphicon glyphicon-ok-circle'></i> Hampura mang euy!</strong> Kedahna tipe file na jpg, jpeg, png atanapi pdf.
          </div>";
        }
        ?>

        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Data users</h3>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>nis</th>
                                <th>Nama</th>
                                <th>Instansi</th>
                                <th>Status</th>
                                <th class='center'>Aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            /* Pagination */
                            $batas = 10;

                            if (isset($cari)) {
                                $jumlah_record = mysqli_query($db, "SELECT * FROM users WHERE instansi LIKE '%$cari%' OR nama LIKE '%$cari%'") or die('Ada kesalahan pada query jumlah_record: ' . mysqli_error($db));
                            } else {
                                $jumlah_record = mysqli_query($db, "SELECT * FROM users") or die('Ada kesalahan pada query jumlah_record: ' . mysqli_error($db));
                            }

                            $jumlah  = mysqli_num_rows($jumlah_record);
                            $halaman = ceil($jumlah / $batas);
                            $page    = (isset($_GET['hal'])) ? (int)$_GET['hal'] : 1;
                            $mulai   = ($page - 1) * $batas;
                            /*-------------------------------------------------------------------*/
                            $no = 1;
                            if (isset($cari)) {
                                $query = mysqli_query($db, "SELECT * FROM users WHERE instansi LIKE '%$cari%' OR nama LIKE '%$cari%' ORDER BY nis LIMIT $mulai, $batas")
                                    or die('Ada kesalahan pada query users: ' . mysqli_error($db));
                            } else {
                                $query = mysqli_query($db, "SELECT * FROM users ORDER BY nis LIMIT $mulai, $batas") or die('Ada kesalahan pada query users: ' . mysqli_error($db));
                            }

                            while ($data = mysqli_fetch_assoc($query)) {

                                echo "  <tr>
                      <td width='20'>$no</td>
                      <td width='100'>$data[nis]</td>
                      <td width='150'>$data[nama]</td>
                      <td width='150'>$data[instansi]</td>
                      <td width='150'>$data[stat]</td>
                      <td width='150' class='center'>
                        <div class=''>
                        <a data-toggle='tooltip' data-placement='top' title='Detail' style='margin-right:5px' class='btn btn-success btn-sm' href='?page=users-detail&id=$data[nis]'> <i class='glyphicon glyphicon-eye-open'></i></a>
                        <a data-toggle='tooltip' data-placement='top' title='Detail' style='margin-right:5px' class='btn btn-warning btn-sm' href='?page=users-print-detail&id=$data[nis]' target='_blank'> <i class='glyphicon glyphicon-print'></i></a>";;
                            ?>
                                <?php
                                if ($_SESSION['level'] == "Admin") {
                                    echo "<a data-toggle='tooltip' data-placement='top' title='Hapus' class='btn btn-danger btn-sm' href='?page=users-hapus&id=$data[nis]' onclick='return confirm('Anda yakin ingin menghapus $data[nama]');'> <i class='glyphicon glyphicon-trash'></i></a>&nbsp";

                                    echo " <a data-toggle='tooltip' data-placement='top' title='Aktivasi' style='margin-right:5px' class='btn btn-primary btn-sm' href='?page=aktivasi-users&id=$data[nis]'> <i class='glyphicon glyphicon-ok'></i></a>";
                                } else if ($_SESSION['level'] == "User") {
                                }
                                ?>
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
                                    <a href="?page=users-tampil&hal=<?php echo $page - 1 ?>" aria-label="Previous">
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
                                    <a href="?page=users-tampil&hal=<?php echo $x ?>"><?php echo $x ?></a>
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
                                    <a href="?page=users-tampil&hal=<?php echo $page + 1 ?>" aria-label="Next">
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