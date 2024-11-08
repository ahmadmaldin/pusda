<?php
// memanggil file koneksi.php untuk melakukan koneksi database
require_once 'config/database.php';

// membuat variabel untuk menampung data dari form
$id_anggota   = $_POST['id_anggota'];
$nis_nik      = $_POST['nis_nik'];
$username     = $_POST['username'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$alamat       = $_POST['alamat'];
$notelp       = $_POST['notelp'];
$foto         = $_FILES['foto']['name'];

//cek dulu jika merubah foto anggota jalankan coding ini
if ($foto != "") {
	$ekstensi_diperbolehkan = array('png', 'jpg', 'jpeg', 'pdf'); //ekstensi file foto yang bisa diupload 
	$x = explode('.', $foto); //memisahkan nama file dengan ekstensi yang diupload
	$ekstensi = strtolower(end($x));
	$file_tmp = $_FILES['foto']['tmp_name'];
	$angka_acak     = rand(1, 999);
	$nama_foto_baru = $angka_acak . '-' . $foto; //menggabungkan angka acak dengan nama file sebenarnya

	if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
		move_uploaded_file($file_tmp, 'anggota/gambar/' . $nama_foto_baru); //memindah file foto ke folder foto

		// jalankan query UPDATE berdasarkan NIS yang anggotanya kita edit
		$query  = "UPDATE anggota SET id_anggota = '$id_anggota', nis_nik = '$nis_nik', username = '$username', jenis_kelamin = '$jenis_kelamin', tanggal_lahir = '$tanggal_lahir', alamat = '$alamat', notelp = '$notelp',  foto = '$nama_foto_baru'";
		$query .= "WHERE id_anggota = '$id_anggota'";
		$result = mysqli_query($db, $query);
		// periska query apakah ada error
		if (!$result) {
			die("Query gagal dijalankan: " . mysqli_errno($db) .
				" - " . mysqli_error($db));
		} else {
			echo "<script>window.location='?page=anggota-tampil&alert=3';</script>";
		}
	} else {
		//jika file ekstensi tidak jpg dan png maka alert ini yang tampil
		echo "<script>window.location='?page=anggota-tampil&alert=5';</script>";
	}
} else {
	// jalankan query UPDATE berdasarkan NIS yang anggotanya kita edit
	$query  = "UPDATE anggota SET id_anggota = '$id_anggota', nis_nik = '$nis_nik', username = '$username', jenis_kelamin = '$jenis_kelamin', tanggal_lahir = '$tanggal_lahir', alamat = '$alamat', notelp = '$notelp'";
	$query .= "WHERE id_anggota = '$id_anggota'";
	$result = mysqli_query($db, $query);
	// periska query apakah ada error
	if (!$result) {
		die("Query gagal dijalankan: " . mysqli_errno($db) .
			" - " . mysqli_error($db));
	} else {
		echo "<script>window.location='?page=anggota-tampil&alert=3';</script>";
	}
}
