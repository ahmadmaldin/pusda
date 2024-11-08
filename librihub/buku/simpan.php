<?php
include 'config/database.php';

$judul        = $_POST['judul'];
$penulis       = $_POST['penulis'];
$penerbit    = $_POST['penerbit'];
$edisi     = $_POST['edisi'];
$deskripsi       = $_POST['deskripsi'];
$isbn      = $_POST['isbn'];
$subjek      = $_POST['subjek'];
$bahasa      = $_POST['bahasa'];

$rand = rand();
$ekstensi =  array('png', 'jpg', 'jpeg', 'gif');
$filename = $_FILES['foto']['name'];
$ukuran = $_FILES['foto']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);

if (!in_array($ext, $ekstensi)) {
    header("location:?page=buku-tampil&alert=1");
} else {
    if ($ukuran < 1044070) {
        $xx = $rand . '_' . $filename;
        move_uploaded_file($_FILES['foto']['tmp_name'], 'buku/gambar/' . $rand . '_' . $filename);
        mysqli_query($db, "INSERT INTO buku VALUES('$id_buku','$judul','$penulis','$penerbit','$edisi','$deskripsi','$isbn','$subjek','$bahasa','$xx')");
        header("location:?page=buku-tampil&alert=2");
    } else {
        header("location:?page=buku-tampil&alert=1");
    }
}
