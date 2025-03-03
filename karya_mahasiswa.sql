-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 23, 2022 at 07:56 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `karya_mahasiswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `karya_alat`
--

CREATE TABLE `karya_alat` (
  `id_alat` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `lokasi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `karya_alat`
--

INSERT INTO `karya_alat` (`id_alat`, `nama`, `lokasi`) VALUES
(7, 'Dokumentasi Video pembuatan Robotika', 'videos/videoplayback.mp4');

-- --------------------------------------------------------

--
-- Table structure for table `karya_tulisan`
--

CREATE TABLE `karya_tulisan` (
  `id_tulisan` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `lokasi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `karya_tulisan`
--

INSERT INTO `karya_tulisan` (`id_tulisan`, `nama`, `lokasi`) VALUES
(4, 'KARYA ILMIAH PEMOGRAMAN JAVA', 'tulisan/KARYA ILMIAH PEMOGRAMAN JAVA.pdf'),
(5, 'Pengaruh Teknologi Informasi bagi Manusia', 'tulisan/karya-ilmiah-krisbiantaro-d3p31.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `permintaan`
--

CREATE TABLE `permintaan` (
  `id_permintaan` int(11) NOT NULL,
  `isi` text NOT NULL,
  `tujuan` varchar(20) NOT NULL,
  `asal` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `permintaan`
--

INSERT INTO `permintaan` (`id_permintaan`, `isi`, `tujuan`, `asal`) VALUES
(8, 'Tolong kirimkan file Rekapan Karya Ilmiah Periode 2022 terbaru', '1', 'fernyindy@gmail.com'),
(9, 'Tolong dikirimkan data terkini dari Karya Ilmiah Tulisan serta Alat yang ada pada periode pengisian 2021', 'mahasiswa', 'fernyindy@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `prodi`
--

CREATE TABLE `prodi` (
  `id_prodi` int(11) NOT NULL,
  `nama_prodi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prodi`
--

INSERT INTO `prodi` (`id_prodi`, `nama_prodi`) VALUES
(1, 'D4 TEKNIK JALAN JEMBATAN'),
(2, 'D4 KONSTRUKSI BANGUNAN GEDUNG'),
(3, 'D3 TEKNIK SIPIL'),
(4, 'D4 TEKNIK LISTRIK'),
(5, 'D4 TEKNIK INFORMATIKA'),
(6, 'D3 TEKNIK LISTRIK'),
(7, 'D3 TEKNIK KOMPUTER'),
(8, 'D3 TEKNIK MESIN'),
(9, 'D4 TEKNIK MESIN PRODUKSI DAN PERAWATAN'),
(10, 'D4 AKUNTANSI KEUANGAN'),
(11, 'D3 AKUNTANSI'),
(12, 'D4 MANAJEMEN BISNIS'),
(13, 'D3 ADMINISTRASI BISNIS'),
(14, 'D3 MANAJEMEN PEMASARAN'),
(15, 'D4 MANAJEMEN PERHOTELAN'),
(16, 'D3 PARIWISATA'),
(17, 'D3 WISATA BAWAH AIR'),
(18, 'D3 USAHA PERJALANAN WISATA'),
(19, 'D3 PERPAJAKAN');

-- --------------------------------------------------------

--
-- Table structure for table `tugas_akhir`
--

CREATE TABLE `tugas_akhir` (
  `id_tugas` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `id_prodi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tugas_akhir`
--

INSERT INTO `tugas_akhir` (`id_tugas`, `nama`, `lokasi`, `id_prodi`) VALUES
(4, 'Teknologi Informasi dan Komunikasi', 'tugas/Teknologi Informasi dan Komunikasi.pdf', 1),
(5, 'Implementasi Teknologi Informasi dalam Manajemen Repository Koleksi Karya Ilmiah di Perpustakaan Utsman Bin Affan UMI Makassar', 'tugas/Implementasi Teknologi Informasi dalam Manajemen Repository Koleksi Karya Ilmiah di Perpustakaan Utsman Bin Affan UMI Makassar.pdf', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` int(1) NOT NULL,
  `id_prodi` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `email`, `password`, `level`, `id_prodi`) VALUES
(14, 'fernyindy@gmail.com', '123', 3, 0),
(15, 'prodi_jj', '123', 2, 1),
(16, 'mahasiswa', '123', 4, 0),
(17, 'admin', '123', 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `karya_alat`
--
ALTER TABLE `karya_alat`
  ADD PRIMARY KEY (`id_alat`);

--
-- Indexes for table `karya_tulisan`
--
ALTER TABLE `karya_tulisan`
  ADD PRIMARY KEY (`id_tulisan`);

--
-- Indexes for table `permintaan`
--
ALTER TABLE `permintaan`
  ADD PRIMARY KEY (`id_permintaan`);

--
-- Indexes for table `prodi`
--
ALTER TABLE `prodi`
  ADD PRIMARY KEY (`id_prodi`);

--
-- Indexes for table `tugas_akhir`
--
ALTER TABLE `tugas_akhir`
  ADD PRIMARY KEY (`id_tugas`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `karya_alat`
--
ALTER TABLE `karya_alat`
  MODIFY `id_alat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `karya_tulisan`
--
ALTER TABLE `karya_tulisan`
  MODIFY `id_tulisan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `permintaan`
--
ALTER TABLE `permintaan`
  MODIFY `id_permintaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `prodi`
--
ALTER TABLE `prodi`
  MODIFY `id_prodi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tugas_akhir`
--
ALTER TABLE `tugas_akhir`
  MODIFY `id_tugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
