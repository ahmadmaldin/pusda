<?php
// Panggil koneksi database
require_once "config/database.php";

if (isset($_GET['id'])) {

    $nis = $_GET['id'];

    // perintah query untuk menghapus data pada tabel
    $query = mysqli_query($db, "DELETE FROM users WHERE nis='$nis'");

    // cek hasil query
    if ($query) {
        // jika berhasil tampilkan pesan berhasil delete data
        header('location:?page=users-tampil&alert=4');
    } else {
        // jika gagal tampilkan pesan kesalahan
        header('location:?page=users-tampil&alert=1');
    }
}
