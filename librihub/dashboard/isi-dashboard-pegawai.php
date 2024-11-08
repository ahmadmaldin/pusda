<?php
include 'config/database.php';

$ids = $_SESSION['id'];
$jumlah_record1 = mysqli_query($db, "SELECT user.id, pegawai.* FROM user JOIN pegawai ON pegawai.nis = user.nis where id = $ids") or die('Ada kesalahan pada query jumlah_record: ' . mysqli_error($db));
$data = mysqli_fetch_assoc($jumlah_record1);
$niss = $data['nis'];
$namas = $data['nama'];
$jabatans = $data['jabatan'];
$bidangs = $data['bidang'];

// dashboard pegawai
$jum_users_prakerin = mysqli_num_rows(mysqli_query($db, "SELECT * FROM users where instansi = '$bidangs'"));
$jum_users_laporan = mysqli_num_rows(mysqli_query($db, "SELECT * FROM seminar where pengujilap = '$niss'"));
$jum_users_aplikasi = mysqli_num_rows(mysqli_query($db, "SELECT * FROM seminar where pengujiapl = '$niss'"));

$pegnil_prakerin = mysqli_num_rows(mysqli_query($db, "SELECT seminar.nis, users.instansi FROM seminar JOIN users ON users.nis = seminar.nis where instansi = '$bidangs' and nilaiprakerin != '0'"));
$pegnil_laporan = mysqli_num_rows(mysqli_query($db, "SELECT * FROM seminar where pengujilap = '$bidangs' and nilailaporan != '0'"));
$pegnil_aplikasi = mysqli_num_rows(mysqli_query($db, "SELECT * FROM seminar where pengujiapl = '$bidangs' and nilaiaplikasi != '0'"));


if ($bidangs == "Laporan") {
    $jum = $jum_users_laporan;
    $label = "Laporan";
    $pegnil = $pegnil_laporan;
} else if ($bidangs == "Aplikasi") {
    $jum = $jum_users_aplikasi;
    $label = "Aplikasi";
    $pegnil = $pegnil_aplikasi;
} else {
    $jum = $jum_users_prakerin;
    $label = "Prakerin";
    $pegnil = $pegnil_prakerin;
}

$alert_pengujilap = "<div class='alert alert-info alert-dismissible' role='alert'>
<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button><strong>Perhatian!</strong> anda baru menilai $pegnil_laporan dari $jum_users_laporan.</div>";

$alert_pengujilap = "<div class='alert alert-info alert-dismissible' role='alert'>
<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button><strong>Perhatian!</strong> anda baru menilai $pegnil_aplikasi dari $jum_users_aplikasi.</div>";


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
