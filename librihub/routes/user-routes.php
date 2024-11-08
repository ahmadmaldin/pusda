<?php
if (empty($_GET["page"])) {
    include "dashboard/dashboard-user.php";
} elseif ($_GET['page'] == 'user-tampil') {
    include "user/tampil-data.php";
} elseif ($_GET['page'] == 'tambah') {
    include "user/form-tambah.php";
} elseif ($_GET['page'] == 'proses-simpan') {
    include "user/proses-simpan.php";
} elseif ($_GET['page'] == 'ubah') {
    include "user/form-ubah.php";
} elseif ($_GET['page'] == 'proses-ubah') {
    include "user/proses-ubah.php";
} elseif ($_GET['page'] == 'detail') {
    include "user/detail.php";
    // users
} elseif ($_GET['page'] == 'users-tampil') {
    include "users/tampil.php";
} elseif ($_GET['page'] == 'users-tambah') {
    include "users/tambah.php";
} elseif ($_GET['page'] == 'users-simpan') {
    include "users/simpan.php";
} elseif ($_GET['page'] == 'users-detail') {
    include "users/detail.php";
} elseif ($_GET['page'] == 'users-edit') {
    include "users/edit.php";
} elseif ($_GET['page'] == 'users-update') {
    include "users/update.php";
} elseif ($_GET['page'] == 'users-hapus') {
    include "users/hapus.php";
} elseif ($_GET['page'] == 'users-print-detail') {
    include "users/print-detail.php";
} elseif ($_GET['page'] == 'users-kirim') {
    include "users/kirim.php";
    // seminar
} elseif ($_GET['page'] == 'seminar') {
    include "seminar/seminar.php";
} elseif ($_GET['page'] == 'seminar-tampil') {
    include "seminar/tampil.php";
} elseif ($_GET['page'] == 'seminar-tambah') {
    include "seminar/tambah.php";
} elseif ($_GET['page'] == 'seminar-simpan') {
    include "seminar/simpan.php";
} elseif ($_GET['page'] == 'seminar-detail') {
    include "seminar/detail.php";
} elseif ($_GET['page'] == 'seminar-edit') {
    include "seminar/edit.php";
} elseif ($_GET['page'] == 'seminar-update') {
    include "seminar/update.php";
} elseif ($_GET['page'] == 'seminar-hapus') {
    include "seminar/hapus.php";
} elseif ($_GET['page'] == 'seminar-print-detail') {
    include "seminar/print-detail.php";
} elseif ($_GET['page'] == 'seminar-kirim') {
    include "seminar/kirim.php";
}
