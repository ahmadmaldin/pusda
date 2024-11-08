<?php
include 'config/database.php';

$nis        = $_POST['nis'];
$id         = $_POST['id'];
$nama       = $_POST['nama'];
$tanggal_buat    = $_POST['tanggal_buat'];
$alamat     = $_POST['alamat'];
$instansi   = $_POST['instansi'];
$telp       = $_POST['telp'];
$stat     = $_POST['stat'];

$rand = rand();
$ekstensi =  array('png', 'jpg', 'jpeg', 'gif');
$filename = $_FILES['foto']['name'];
$ukuran = $_FILES['foto']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);

if (!in_array($ext, $ekstensi)) {
    header("location:?page=users-tampil&alert=1");
} else {
    if ($ukuran < 1044070) {
        $xx = $rand . '_' . $filename;
        move_uploaded_file($_FILES['foto']['tmp_name'], 'users/gambar/' . $rand . '_' . $filename);
        mysqli_query($db, "INSERT INTO users VALUES('$nis','$id','$nama','$tanggal_buat','$alamat','$instansi','$telp','$stat','$xx')");
        header("location:index.php");
    } else {
        header("location:?page=users-tampil&alert=1");
    }
}
