<?php
include 'config/database.php';

$id_anggota      = $_POST['id_anggota'];
$nis_nik  	     = $_POST['nis_nik'];
$username        = $_POST['username'];
$jenis_kelamin   = $_POST['jenis_kelamin'];
$tanggal_lahir   = $_POST['tanggal_lahir'];
$alamat  		 = $_POST['alamat'];
$notelp  		 = $_POST['notelp'];

$rand = rand();
$ekstensi =  array('png', 'jpg', 'jpeg', 'gif');
$filename = $_FILES['foto']['name'];
$ukuran = $_FILES['foto']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);

if (!in_array($ext, $ekstensi)) {
	header("location:?page=anggota-tampil&alert=1");
} else {
	if ($ukuran < 1044070) {
		$xx = $rand . '_' . $filename;
		move_uploaded_file($_FILES['foto']['tmp_name'], 'anggota/gambar/' . $rand . '_' . $filename);
		mysqli_query($db, "INSERT INTO anggota VALUES('$id_anggota','$nis_nik','$username','$jenis_kelamin','$tanggal_lahir','$alamat','$notelp','$xx')");
		header("location:?page=anggota-tampil");
	} else {
		header("location:?page=anggota-tampil&alert=1");
	}
}
