<?php
include 'config/database.php';

$ids = $_SESSION['id'];
$levels = $_SESSION['level'];
$jumlah_record1 = mysqli_query($db, "SELECT * FROM user where id = $ids") or die('Ada kesalahan pada query jumlah_record: ' . mysqli_error($db));
$data = mysqli_fetch_assoc($jumlah_record1);
$namas = $data['username'];

// jumlah data
$jum_user = mysqli_num_rows(mysqli_query($db, "SELECT * FROM user"));
$jum_anggota = mysqli_num_rows(mysqli_query($db, "SELECT * FROM anggota"));
$jum_buku = mysqli_num_rows(mysqli_query($db, "SELECT * FROM buku"));
$jum_peminjaman = mysqli_num_rows(mysqli_query($db, "SELECT * FROM peminjaman"));
$jum_pengembalian = mysqli_num_rows(mysqli_query($db, "SELECT * FROM pengembalian"));
$jum_perpanjangan = mysqli_num_rows(mysqli_query($db, "SELECT * FROM perpanjangan"));

// Ucapan
$waktu = gmdate("H:i", time() + 7 * 3600);
$t = explode(":", $waktu);
$jam = $t[0];
$menit = $t[1];

if ($jam >= 00 and $jam < 10) {
    if ($menit > 00 and $menit < 60) {
        $ucapan = "Selamat Pagi";
    }
} else if ($jam >= 10 and $jam < 15) {
    if ($menit > 00 and $menit < 60) {
        $ucapan = "Selamat Siang";
    }
} else if ($jam >= 15 and $jam < 18) {
    if ($menit > 00 and $menit < 60) {
        $ucapan = "Selamat Sore";
    }
} else if ($jam >= 18 and $jam <= 24) {
    if ($menit > 00 and $menit < 60) {
        $ucapan = "Selamat Malam";
    }
} else {
    $ucapan = "Error";
}
