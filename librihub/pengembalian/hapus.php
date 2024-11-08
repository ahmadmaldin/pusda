<?php
// Panggil koneksi database
require_once "config/database.php";

if (isset($_GET['id'])) {

	$id = $_GET['id'];

	// perintah query untuk menghapus data pada tabel
	$query = mysqli_query($db, "DELETE FROM pengembalian WHERE id_pengembalian='$id_pengembalian'");

	// cek hasil query
	if ($query) {
		// jika berhasil tampilkan pesan berhasil delete data
		header('location:?page=pengembalian-tampil&alert=4');
	} else {
		// jika gagal tampilkan pesan kesalahan
		header('location:?page=pengembalian-tampil&alert=1');
	}
}
