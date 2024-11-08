<?php
if (empty($_GET["page"])) {
    include "dashboard/dashboard-admin.php"; // Tampilan default jika tidak ada permintaan halaman tertentu pada index., maka pada index akan ditampilkan halaman dashboard-admin.php yang ada pada folder dashboard.
    // User
} elseif ($_GET['page'] == 'dashboard') {
    include "dashboard/dashboard-admin.php";
} elseif ($_GET['page'] == 'user-tampil') {
    include "user/tampil-data.php";
} elseif ($_GET['page'] == 'user-tambah') {
    include "user/form-tambah.php";
} elseif ($_GET['page'] == 'user- proses-simpan') {
    include "user/proses-simpan.php";
} elseif ($_GET['page'] == 'user-edit') {
    include "user/form-ubah.php";
} elseif ($_GET['page'] == 'user-proses-ubah') {
    include "user/proses-ubah.php";
} elseif ($_GET['page'] == 'user-detail') {
    include "user/detail.php";
} elseif ($_GET['page'] == 'user-hapus') {
    include "user/proses-hapus.php";

    // anggota
} elseif ($_GET['page'] == 'anggota-tampil') {
    include "anggota/tampil-data.php";
} elseif ($_GET['page'] == 'anggota-tambah') {
    include "anggota/tambah.php";
} elseif ($_GET['page'] == 'anggota-simpan') {
    include "anggota/proses-simpan.php";
} elseif ($_GET['page'] == 'anggota-edit') {
    include "anggota/form-ubah.php";
} elseif ($_GET['page'] == 'anggota-ubah') {
    include "anggota/proses-ubah.php";
} elseif ($_GET['page'] == 'anggota-detail') {
    include "anggota/detail.php";
} elseif ($_GET['page'] == 'anggota-print') {
    include "anggota/print.php";
} elseif ($_GET['page'] == 'anggota-kirim') {
    include "anggota/kirim.php";
} elseif ($_GET['page'] == 'anggota-hapus') {
    include "anggota/proses-hapus.php";


    // Buku
} elseif ($_GET['page'] == 'buku-tampil') {
    include "buku/tampil.php";
} elseif ($_GET['page'] == 'buku-tambah') {
    include "buku/tambah.php";
} elseif ($_GET['page'] == 'buku-simpan') {
    include "buku/simpan.php";
} elseif ($_GET['page'] == 'buku-update') {
    include "buku/update.php";
} elseif ($_GET['page'] == 'buku-detail') {
    include "buku/detail.php";
} elseif ($_GET['page'] == 'buku-edit') {
    include "buku/edit.php";
} elseif ($_GET['page'] == 'buku-ubah') {
    include "buku/ubah.php";
} elseif ($_GET['page'] == 'buku-hapus') {
    include "buku/hapus.php";
} elseif ($_GET['page'] == 'buku-print-detail') {
    include "buku/print-detail.php";
    // Peminjaman
} elseif ($_GET['page'] == 'peminjaman-tampil') {
    include "peminjaman/tampil.php";
} elseif ($_GET['page'] == 'peminjaman-kirim') {
    include "peminjaman/kirim.php";
} elseif ($_GET['page'] == 'peminjaman-tambah') {
    include "peminjaman/tambah.php";
} elseif ($_GET['page'] == 'peminjaman-simpan') {
    include "peminjaman/simpan.php";
} elseif ($_GET['page'] == 'peminjaman-detail') {
    include "peminjaman/detail.php";
} elseif ($_GET['page'] == 'peminjaman-edit') {
    include "peminjaman/detail.php";
} elseif ($_GET['page'] == 'peminjaman-ubah') {
    include "peminjaman/ubah.php";
} elseif ($_GET['page'] == 'peminjaman-hapus') {
    include "peminjaman/hapus.php";
} elseif ($_GET['page'] == 'peminjaman-print-detail') {
    include "peminjaman/print-detail.php";

    // Pengembalian
} elseif ($_GET['page'] == 'pengembalian-tampil') {
    include "pengembalian/tampil.php";
} elseif ($_GET['page'] == 'peminjaman-kirim') {
    include "peminjaman/kirim.php";
} elseif ($_GET['page'] == 'pengembalian-tambah') {
    include "pengembalian/tambah.php";
} elseif ($_GET['page'] == 'pengembalian-simpan') {
    include "pengembalian/simpan.php";
} elseif ($_GET['page'] == 'pengembalian-detail') {
    include "pengembalian/detail.php";
} elseif ($_GET['page'] == 'pengembalian-edit') {
    include "pengembalian/detail.php";
} elseif ($_GET['page'] == 'pengembalian-ubah') {
    include "pengembalian/ubah.php";
} elseif ($_GET['page'] == 'pengembalian-hapus') {
    include "pengembalian/hapus.php";
} elseif ($_GET['page'] == 'pengembalian-print-detail') {
    include "pengembalian/print-detail.php";
    // Perpanjangan
} elseif ($_GET['page'] == 'perpanjangan-tampil') {
    include "perpanjangan/tampil.php";
} elseif ($_GET['page'] == 'perpanjangan-tambah') {
    include "perpanjangan/tambah.php";
} elseif ($_GET['page'] == 'perpanjangan-kirim') {
    include "perpanjangan/kirim.php";
} elseif ($_GET['page'] == 'perpanjangan-simpan') {
    include "perpanjangan/simpan.php";
} elseif ($_GET['page'] == 'perpanjangan-detail') {
    include "perpanjangan/detail.php";
} elseif ($_GET['page'] == 'perpanjangan-edit') {
    include "perpanjangan/detail.php";
} elseif ($_GET['page'] == 'perpanjangan-ubah') {
    include "perpanjangan/ubah.php";
} elseif ($_GET['page'] == 'perpanjangan-hapus') {
    include "perpanjangan/hapus.php";
} elseif ($_GET['page'] == 'perpanjangan-print-detail') {
    include "perpanjangan/print-detail.php";
}
