<?php
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
require_once "config/database.php";

// menangkap data yang dikirim dari form login
$id = $_POST['id'];
$password = $_POST['password'];

// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($db, "select * from user where id='$id' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
if ($cek > 0) {

    $data = mysqli_fetch_assoc($login);

    // cek jika user login sebagai admin
    if ($data['level'] == "Admin") {
        // buat session login dan username
        $_SESSION['id'] = $id;
        $_SESSION['level'] = "Admin";
        // alihkan ke halaman dashboard admin
        header("location:index.php");
    } else if ($data['level'] == "Pegawai") {
        $_SESSION['id'] = $id;
        $_SESSION['level'] = "Pegawai";
        header("location:index.php");
    } else if ($data['level'] == "User") {
        $_SESSION['id'] = $id;
        $_SESSION['level'] = "User";
        header("location:index.php");
    } else {
        // tidak ada sesi
        header("location:index.php");
    }
} else {
    header("location:login.php?pesan=gagal");
}
