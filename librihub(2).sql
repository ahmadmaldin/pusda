-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Nov 2024 pada 10.50
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `librihub`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota`
--

CREATE TABLE `anggota` (
  `id_anggota` int(10) NOT NULL,
  `nis_nik` int(30) NOT NULL,
  `username` varchar(50) NOT NULL,
  `jenis_kelamin` enum('Perempuan','Laki-Laki') NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `notelp` bigint(15) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `anggota`
--

INSERT INTO `anggota` (`id_anggota`, `nis_nik`, `username`, `jenis_kelamin`, `tanggal_lahir`, `alamat`, `notelp`, `foto`) VALUES
(202401002, 120220802, 'Raissa Meilani ', 'Perempuan', '2007-05-04', 'Dsn.Ciranjang 02/05 Desa.Sukamukti Kec.Tanjungmedar Kab.Sumedang', 83116968209, '117-c.png'),
(202401003, 20220797, 'aris', 'Laki-Laki', '2024-11-29', 'Dsn. Gunung Datar, 04/05, Desa.Guntur Mekar, Kec.Tanjungkerta', 85321596531, '334101297_a.png'),
(202401004, 250012, 'andi ', 'Laki-Laki', '2024-11-15', 'tanjungsari', 81901353858, '560266283_u.png'),
(202401005, 678932, 'chelsy', 'Perempuan', '2024-11-30', 'dsn cipicung,desa cibungurkecamatan  rancakalong kab.sumedang', 8218583923, '1699302984_usecasepusda.jpg'),
(202401006, 60627007, 'nursiti barokah', 'Perempuan', '2024-11-23', 'tanjungsari', 85321596531, '1916234216_classdiagramPerpusda [MConverter.eu].jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `id_buku` int(10) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `penulis` varchar(30) NOT NULL,
  `penerbit` varchar(30) NOT NULL,
  `edisi` varchar(30) NOT NULL,
  `deskripsi` longtext NOT NULL,
  `isbn` bigint(20) NOT NULL,
  `subjek` varchar(30) NOT NULL,
  `bahasa` varchar(30) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id_buku`, `judul`, `penulis`, `penerbit`, `edisi`, `deskripsi`, `isbn`, `subjek`, `bahasa`, `foto`) VALUES
(1, 'Home Sweet Loan', 'Almira Bastari', 'Gramedia Pustaka Utama', '1', 'Novel Home Sweet Loan ditulis oleh Almira Bastari, seorang penulis muda yang namanya sudah populer di Indonesia. Novel Home Sweet Loan baru saja diterbitkan oleh Gramedia Pustaka Utama pada tahun 2022.', 9786020658049, 'fiksi', 'indonesia', '385-download.jpg'),
(123456791, 'Tentang Kamu', 'Tere Liye', 'PENERBIT SABAK GRIP', '1', 'Bukan persoalan cinta, novel Tentang Kamu lebih tepatnya digolongkan sebagai novel misteri ataupun seperti detektif. Akan tetapi, selayaknya berbagai karya tulis novel Tere Liye lainnya, novel ini erat dengan berbagai nilai, seperti makna sebuah perjuangan, persahabatan, dan kekeluargaan.', 9786239554569, 'fiksi', 'indonesia', '1.jpg'),
(123456795, 'Nikola Maldini', 'Kale', 'Cloud Books', '1', 'Nikola Pramudya Sadeli, si ribut sekaligus juga si pekerja keras yang selalu dihantui oleh mimpi-mimpi buruk akibat kelalaiannya di masa lalu. Pikirannya selalu riuh dengan berbagai hal karena dia adalah tipikal manusia yang sulit untuk dipahami.', 9786235266367, 'fiksi', 'indonesia', '1284484533_ky3hz5zabnq6qvpgyr3vth.jpg'),
(123456796, 'Lofarsa', 'Rofenna', 'Cloud Books', '1', 'Minta dijodohkan sebenarnya tidak pernah masuk ke dalam rencana kehidupan masa depan Najmi Desra. Namun sang Papi malah mengamini permintaan isengnya tersebut. Dan akhirnya, gadis berusia 23 tahun ini harus berakhir memilih 1 di antara 3 kandidat lelaki pilihan yang memenuhi kriteria.', 9786235266312, 'fiksi', 'indonesia', '557-d7d099c3-f188-4f31-a6df-334e3834bf2b.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id_peminjaman` int(10) NOT NULL,
  `id_anggota` varchar(30) NOT NULL,
  `id_buku` varchar(30) NOT NULL,
  `tglpinjam` date NOT NULL,
  `tglkembali` date NOT NULL,
  `status` enum('Dipinjam','Dikembalikan') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `peminjaman`
--

INSERT INTO `peminjaman` (`id_peminjaman`, `id_anggota`, `id_buku`, `tglpinjam`, `tglkembali`, `status`) VALUES
(4, '202401003', '123456796', '2024-11-06', '2024-11-14', 'Dipinjam'),
(5, '202401006', '1', '2024-11-06', '2024-11-13', 'Dipinjam');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengembalian`
--

CREATE TABLE `pengembalian` (
  `id_pengembalian` int(11) NOT NULL,
  `id_peminjaman` int(11) NOT NULL,
  `tglkembali` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pengembalian`
--

INSERT INTO `pengembalian` (`id_pengembalian`, `id_peminjaman`, `tglkembali`) VALUES
(1, 1, '2024-11-09'),
(2, 4, '2024-11-13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `perpanjangan`
--

CREATE TABLE `perpanjangan` (
  `id_perpanjangan` int(11) NOT NULL,
  `id_peminjaman` int(11) NOT NULL,
  `tglperpanjangan` date NOT NULL,
  `jmlperpanjangan` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `perpanjangan`
--

INSERT INTO `perpanjangan` (`id_perpanjangan`, `id_peminjaman`, `tglperpanjangan`, `jmlperpanjangan`) VALUES
(1, 1, '2024-11-16', 1),
(2, 2, '2024-11-14', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(15) NOT NULL,
  `level` enum('Admin') NOT NULL,
  `nis` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `level`, `nis`) VALUES
(1, 'LibriHub', 'perpustakaan', 'Admin', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indeks untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id_peminjaman`);

--
-- Indeks untuk tabel `pengembalian`
--
ALTER TABLE `pengembalian`
  ADD PRIMARY KEY (`id_pengembalian`);

--
-- Indeks untuk tabel `perpanjangan`
--
ALTER TABLE `perpanjangan`
  ADD PRIMARY KEY (`id_perpanjangan`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id_anggota` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=202401007;

--
-- AUTO_INCREMENT untuk tabel `buku`
--
ALTER TABLE `buku`
  MODIFY `id_buku` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123456797;

--
-- AUTO_INCREMENT untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id_peminjaman` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `pengembalian`
--
ALTER TABLE `pengembalian`
  MODIFY `id_pengembalian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `perpanjangan`
--
ALTER TABLE `perpanjangan`
  MODIFY `id_perpanjangan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
