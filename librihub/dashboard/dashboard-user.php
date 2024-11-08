<br>
<center>
    <?php

    $ids = $_SESSION['id'];
    $jumlah_record = mysqli_query($db, "SELECT * FROM users where id = $ids") or die('Ada kesalahan pada query jumlah_record: ' . mysqli_error($db));
    $jumlah  = mysqli_num_rows($jumlah_record);

    if ($jumlah == 0) {
        include "users/tambah.php";
    } else {

        $ids = $_SESSION['id'];
        $jumlah_record1 = mysqli_query($db, "SELECT * FROM users where id = $ids") or die('Ada kesalahan pada query jumlah_record: ' . mysqli_error($db));
        $data = mysqli_fetch_assoc($jumlah_record1);
        $nis = $data['nis'];
        $id = $data['id'];
        $nama = $data['nama'];
        $tanggal_lahir = $data['tanggal_lahir'];
        $alamat = $data['alamat'];
        $instansi = $data['instansi'];
        $telp = $data['telp'];
        $stat = $data['stat'];
        $jumlah1  = mysqli_num_rows($jumlah_record1);

        if ($stat == "Aktif") {
            echo "<p>User <b>$data[nama]</b> sudah terdaftar";
            echo "<p><a data-toggle='tooltip' data-placement='top' title='Edit' style='margin-right:5px' class='btn btn-primary btn-sm' href='?page=users-edit&id=$data[nis]'> <i class='glyphicon glyphicon-edit'></i>&nbsp Edit Data Diri</a>";
        } else {
            echo "Data Users sudah terdaftar, Namun belum aktif, 
        <p><b>Silahkan konfirmasi kepada admin untuk diaktifkan </b> <hr>";
            include "./users/linkwa.php";
        }
    }
    ?>
    <br>

</center>
<br>