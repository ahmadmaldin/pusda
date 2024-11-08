<?php
// Panggil koneksi database
require_once "config/database.php";

if (isset($_POST['simpan'])) {
	$id_pengembalian       = mysqli_real_escape_string($db, trim($_POST['id_pengembalian']));
	$id_peminjaman  	   = mysqli_real_escape_string($db, trim($_POST['id_peminjaman']));
	$tglkembali  		   = $_POST['tglkembali'];

	// perintah query untuk menyimpan data ke tabel pengembalian
	$query = mysqli_query($db, "INSERT INTO pengembalian (id_pengembalian, id_peminjaman, tglkembali) VALUES('$id_pengembalian', '$id_peminjaman', '$tglkembali')");

	// cek hasil query
	if ($query) {
		// jika berhasil tampilkan pesan berhasil insert data
		header('location:?page=pengembalian-tampil&alert=2');
	} else {
		// jika gagal tampilkan pesan kesalahan
		header('location:?page=pengembalian-tampil&alert=1');
	}
}
