<?php
// Panggil koneksi database
require_once "config/database.php";

if (isset($_POST['simpan'])) {
	if (isset($_POST['id'])) {
		$id        = mysqli_real_escape_string($db, trim($_POST['id']));
		$username  = mysqli_real_escape_string($db, trim($_POST['username']));
		$password  = mysqli_real_escape_string($db, trim($_POST['password']));
		$level     = $_POST['level'];
		$nis       = mysqli_real_escape_string($db, trim($_POST['nis']));

		// perintah query untuk mengubah data pada tabel is_siswa
		$query = mysqli_query($db, "UPDATE user SET username 		= '$username',
														password 	= '$password',
														level 		= '$level',
														nis 		= '$nis'
												  WHERE id 			= '$id'");
		// cek query
		if ($query) {
			// jika berhasil tampilkan pesan berhasil update data
			header('location: index.php?alert=3');
		} else {
			// jika gagal tampilkan pesan kesalahan
			header('location: index.php?alert=1');
		}
	}
}
