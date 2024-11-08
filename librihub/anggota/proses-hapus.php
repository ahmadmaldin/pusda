<?php
// Panggil koneksi database
require_once "config/database.php";

if (isset($_GET['id'])) {

	$id_anggota = $_GET['id'];

	// perintah query untuk menghapus data pada tabel
	$query = mysqli_query($db, "DELETE FROM anggota WHERE id_anggota='$id_anggota'");

	// cek hasil query
	if ($query) {
		// jika berhasil tampilkan pesan berhasil delete data
		header('location:?page=anggota-tampil&alert=4');
	} else {
		// jika gagal tampilkan pesan kesalahan
		header('location:?page=anggota-tampil&alert=1');
	}
}
