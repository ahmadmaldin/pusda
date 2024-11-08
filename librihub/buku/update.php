<?php
// memanggil file koneksi.php untuk melakukan koneksi database
require_once 'config/database.php';

// membuat variabel untuk menampung data dari form
$id_buku        = $_POST['id_buku'];
$judul       = $_POST['judul'];
$penerbit    = $_POST['penerbit'];
$edisi     = $_POST['edisi'];
$deskripsi   = $_POST['deskripsi'];
$isbn       = $_POST['isbn'];
$subjek       = $_POST['subjek'];
$bahasa       = $_POST['bahasa'];
$foto       = $_FILES['foto']['name'];

//cek dulu jika merubah foto buku jalankan coding ini
if ($foto != "") {
    $ekstensi_diperbolehkan = array('png', 'jpg', 'jpeg', 'pdf'); //ekstensi file foto yang bisa diupload 
    $x = explode('.', $foto); //memisahkan judul file dengan ekstensi yang diupload
    $ekstensi = strtolower(end($x));
    $file_tmp = $_FILES['foto']['tmp_name'];
    $angka_acak     = rand(1, 999);
    $judul_foto_baru = $angka_acak . '-' . $foto; //menggabungkan angka acak dengan judul file sebenarnya

    if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
        move_uploaded_file($file_tmp, 'buku/gambar/' . $judul_foto_baru); //memindah file foto ke folder foto

        // jalankan query UPDATE berdasarkan id_buku yang bukunya kita edit
        $query  = "UPDATE buku SET id_buku = '$id_buku', judul = '$judul', penerbit = '$penerbit', edisi = '$edisi', deskripsi = '$deskripsi', isbn = '$isbn', subjek = '$subjek', bahasa = '$bahasa',  foto = '$judul_foto_baru'";
        $query .= "WHERE id_buku = '$id_buku'";
        $result = mysqli_query($db, $query);
        // periska query apakah ada error
        if (!$result) {
            die("Query gagal dijalankan: " . mysqli_errno($db) .
                " - " . mysqli_error($db));
        } else {
            echo "<script>window.location='?page=buku-tampil&alert=3';</script>";
        }
    } else {
        //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
        echo "<script>window.location='?page=buku-tampil&alert=5';</script>";
    }
} else {
    // jalankan query UPDATE berdasarkan id_buku yang bukunya kita edit
    $query  = "UPDATE buku SET id_buku = '$id_buku', judul = '$judul', penerbit = '$penerbit', edisi = '$edisi', deskripsi = '$deskripsi', isbn = '$isbn', subjek = '$subjek', bahasa = '$bahasa'";
    $query .= "WHERE id_buku = '$id_buku'";
    $result = mysqli_query($db, $query);
    // periska query apakah ada error
    if (!$result) {
        die("Query gagal dijalankan: " . mysqli_errno($db) .
            " - " . mysqli_error($db));
    } else {
        echo "<script>window.location='?page=buku-tampil&alert=3';</script>";
    }
}
