<?php
// Panggil koneksi database
require_once "config/database.php";

if (isset($_POST['simpan'])) {
	$id_perpanjangan       = mysqli_real_escape_string($db, trim($_POST['id_perpanjangan']));
	$id_peminjaman  	   = mysqli_real_escape_string($db, trim($_POST['id_peminjaman']));
	$tglperpanjangan  		   = $_POST['tglperpanjangan'];
	$jmlperpanjangan  		   = $_POST['jmlperpanjangan'];

	// perintah query untuk menyimpan data ke tabel perpanjangan
	$query = mysqli_query($db, "INSERT INTO perpanjangan (id_perpanjangan, id_peminjaman, tglperpanjangan, jmlperpanjangan) VALUES('$id_perpanjangan', '$id_peminjaman', '$tglperpanjangan', '$jmlperpanjangan')");

	// cek hasil query
	if ($query) {
		// jika berhasil tampilkan pesan berhasil insert data
		header('location:?page=perpanjangan-tampil&alert=2');
	} else {
		// jika gagal tampilkan pesan kesalahan
		header('location:?page=perpanjangan-tampil&alert=1');
	}
}
