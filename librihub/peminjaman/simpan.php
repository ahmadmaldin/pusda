<?php
// Panggil koneksi database
require_once "config/database.php";

if (isset($_POST['simpan'])) {
	$id_anggota      = mysqli_real_escape_string($db, trim($_POST['id_anggota']));
	$id_buku  	   = mysqli_real_escape_string($db, trim($_POST['id_buku']));
	$tglpinjam         = $_POST['tglpinjam'];
	$tglkembali  		   = $_POST['tglkembali'];
	$status  		   = $_POST['status'];

	// perintah query untuk menyimpan data ke tabel is_siswa
	$query = mysqli_query($db, "INSERT INTO peminjaman (id_anggota, id_buku, tglpinjam, tglkembali, status) VALUES('$id_anggota', '$id_buku', '$tglpinjam', '$tglkembali', '$status')");

	// cek hasil query
	if ($query) {
		// jika berhasil tampilkan pesan berhasil insert data
		header('location:?page=peminjaman-tampil&alert=2');
	} else {
		// jika gagal tampilkan pesan kesalahan
		header('location:?page=peminjaman-tampil&alert=1');
	}
}
