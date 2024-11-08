<?php
// user
if (empty($_GET["page"])) {
    include "dashboard/dashboard-pegawai.php";
} elseif ($_GET['page'] == 'ubah') {
    include "user/form-ubah.php";
} elseif ($_GET['page'] == 'proses-ubah') {
    include "user/proses-ubah.php";
    // Pegawai
} elseif ($_GET['page'] == 'pegawai-tampil') {
    include "pegawai/tampil.php";
} elseif ($_GET['page'] == 'pegawai-detail') {
    include "pegawai/detail.php";
} elseif ($_GET['page'] == 'pegawai-edit') {
    include "pegawai/edit.php";
} elseif ($_GET['page'] == 'pegawai-update') {
    include "pegawai/update.php";
} elseif ($_GET['page'] == 'pegawai-print-detail') {
    include "pegawai/print-detail.php";
} elseif ($_GET['page'] == 'pegawai-kirim') {
    include "pegawai/kirim.php";
    // users
} elseif ($_GET['page'] == 'users-tampil') {
    include "users/tampil.php";
} elseif ($_GET['page'] == 'users-detail') {
    include "users/detail.php";
} elseif ($_GET['page'] == 'users-edit') {
    include "users/edit.php";
} elseif ($_GET['page'] == 'users-print-detail') {
    include "users/print-detail.php";
    // seminar
} elseif ($_GET['page'] == 'seminar-tampil') {
    include "seminar/tampil.php";
} elseif ($_GET['page'] == 'tampil-nilai') {
    include "seminar/tampil-nilai.php";
} elseif ($_GET['page'] == 'seminar-detail') {
    include "seminar/detail.php";
} elseif ($_GET['page'] == 'seminar-print-detail') {
    include "seminar/print-detail.php";
} elseif ($_GET['page'] == 'nilai-seminar') {
    include "seminar/nilai-seminar.php";
} elseif ($_GET['page'] == 'nilai-sem') {
    include "seminar/nilai.php";
}
