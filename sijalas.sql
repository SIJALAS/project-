-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 18, 2016 at 03:18 
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sijalas`
--

-- --------------------------------------------------------

--
-- Table structure for table `hari`
--

CREATE TABLE `hari` (
  `id_hari` int(1) NOT NULL,
  `nama_hari` varchar(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hari`
--

INSERT INTO `hari` (`id_hari`, `nama_hari`) VALUES
(1, 'Senin'),
(2, 'Selasa'),
(3, 'Rabu'),
(4, 'Kamis'),
(5, 'Jum''at');

-- --------------------------------------------------------

--
-- Table structure for table `keberlangsungan`
--

CREATE TABLE `keberlangsungan` (
  `id_ket` int(1) NOT NULL,
  `nama_ket` varchar(9) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `keberlangsungan`
--

INSERT INTO `keberlangsungan` (`id_ket`, `nama_ket`) VALUES
(1, 'Ada'),
(2, 'Tidak Ada');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(1) NOT NULL,
  `nama_kelas` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nama_kelas`) VALUES
(1, 'A'),
(2, 'B'),
(3, 'C'),
(4, 'D');

-- --------------------------------------------------------

--
-- Table structure for table `matakuliah`
--

CREATE TABLE `matakuliah` (
  `id_matkul` int(2) NOT NULL,
  `nama_matkul` varchar(46) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `matakuliah`
--

INSERT INTO `matakuliah` (`id_matkul`, `nama_matkul`) VALUES
(1, 'Bahasa Pemrograman'),
(2, 'Manajemen dan Organisasi'),
(3, 'Matematika Diskrit'),
(4, 'Sistem dan Teknologi Informasi'),
(5, 'Algoritma dan Struktur Data '),
(6, 'Arsitektur SI/TI Perusahaan '),
(7, 'Kepemimpinan dan Ketrampilan Interpersonal '),
(8, 'Pengantar Sistem Operasi '),
(9, 'Dasar?Dasar Pengembangan Perangkat Lunak '),
(10, 'Desain dan Manajemen Jaringan Komputer '),
(11, 'Desain dan Manajemen Proses Bisnis'),
(12, 'Pemrograman Berorientasi Objek '),
(13, 'Pengantar Basis Data '),
(14, 'Statistika '),
(15, 'Analisis dan Desain Perangkat Lunak '),
(16, 'Desain Basis Data '),
(17, 'Interaksi Manusia dan Komputer'),
(18, 'Keamanan Aset Informasi '),
(19, 'Pemrograman Berbasis Web '),
(20, 'Konstruksi dan Pengujian Perangkat Lunak '),
(21, 'Manajemen Layanan TI '),
(22, 'Manajemen Proyek TI '),
(23, 'Perencanaan Sumber Daya Perusahaan '),
(24, 'Riset Operasi '),
(25, 'Simulasi Sistem '),
(26, 'Manajemen dan Administrasi Basis Data '),
(27, 'Manajemen Pengadaan dan Investas IT '),
(28, 'Manajemen Rantai Pasok dan Hubungan Pelanggan '),
(29, 'Manajemen Resiko TI '),
(30, 'Sistem Cerdas '),
(31, 'Tata Kelola TI '),
(32, 'Tata Tulis Ilmiah '),
(33, 'Etika Profesi SI '),
(34, 'Forensika Digital '),
(35, 'Kecerdasan Bisnis'),
(36, 'Kerja Praktek '),
(37, 'Pemrograman Perangkat Bergerak '),
(38, 'Pengukuran Kinerja dan Evaluasi TI '),
(39, 'Perencanaan Strategis SI/TI '),
(40, 'Sistem Pendukung Keputusan '),
(41, 'Technopreneurship'),
(42, 'Audit SI '),
(43, 'e?Business '),
(44, 'Integrasi Aplikasi Korporasi '),
(45, 'Komputasi Berpusat pada Manusia '),
(46, 'Manajemen Kualitas SI/TI '),
(47, 'Pemrograman Integratif '),
(48, 'Penggalian Data dan Analitika Bisnis '),
(49, 'Perencanaan Keberlangsungan Bisnis '),
(50, 'Riset Operasi Lanjut '),
(51, 'Teknik Peramalan '),
(52, 'Teknologi Open?Source dan Terbaru'),
(53, 'Tugas Akhir');

-- --------------------------------------------------------

--
-- Table structure for table `nama_dosen`
--

CREATE TABLE `nama_dosen` (
  `id_dosen` int(2) NOT NULL,
  `nama_dosen` varchar(37) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nama_dosen`
--

INSERT INTO `nama_dosen` (`id_dosen`, `nama_dosen`) VALUES
(1, 'Prof. Ir. Arif Djunaidy, M.Sc, Ph.D'),
(2, 'Ir. Khakim Ghozali, M.MT'),
(3, 'Dr. Ir. Aris Tjahyanto, M.Kom'),
(4, 'Ir. Achmad Holil Noor Ali, M.Kom'),
(5, 'Edwin Riksakomara, S.Kom, M.T'),
(6, 'Bambang Setiawan, S.Kom, M.T'),
(7, 'Apol Pribadi S., S.T, M.T'),
(8, 'Erma Suryani, ST, MT, Ph.D'),
(9, 'Mudjahidin, S.T, M.T'),
(10, 'Sholiq,S.T, M.Kom, M.SA'),
(11, 'Dr. Eng. Febriliyan S. S.Kom, M.Kom'),
(12, 'Bekti Cahyo Hidayanto, S.Si, M.Kom'),
(13, 'Tony Dwi Susanto, S.T, M.T., Ph.D'),
(14, 'Wiwik Anggraeni, S.Si, M.Kom'),
(15, 'Mahendrawathi ER., ST, M.Sc., Ph.D'),
(16, 'Faizal Johan Atletiko, S.Kom, M.T'),
(17, 'Danu Pranantha, S.T, M.Sc'),
(18, 'Renny Pradina, S.T, M.T'),
(19, 'Rully Agus Hendrawan, S.Kom, M.Eng'),
(20, 'Nur Aini R., S.Kom, M.Sc.Eng'),
(21, 'Ahmad Mukhlason, S.Kom, M.Sc'),
(22, 'Feby Artwodini, S.Kom, M.T'),
(23, 'Arif Wibisono, S.Kom, M.Sc'),
(24, 'Nisfu Asrul Sani, S.Kom, M.Sc'),
(25, 'Radityo Prasetianto.W, S.Kom, M.Kom'),
(26, 'Hatma Suryotrisongko, S.Kom., M.Eng'),
(27, 'Hanim Maria Astuti, S.Kom, M.Sc'),
(28, 'Eko Wahyu Tyas D, S.Kom., MBA'),
(29, 'Irmasari Hafidz, S.Kom, M.Sc'),
(30, 'Amalia Utamima, S.Kom., MBA'),
(31, 'Amna Shifia Nisafani, S.Kom., M.Sc'),
(32, 'Raras Tyasnurita, S.Kom., MBA'),
(33, 'Anisah Herdiyanti, S.Kom., MSc'),
(34, 'Faizal Mahananto, S.Kom., M.Eng, Ph.D'),
(35, 'Andre Parvian Aristio, S.Kom., M.Sc'),
(36, 'Retno Aulia Vinarti, S.Kom, M.Kom');

-- --------------------------------------------------------

--
-- Table structure for table `panel_tampil`
--

CREATE TABLE `panel_tampil` (
  `id_panel` int(3) NOT NULL,
  `id_hari` int(3) NOT NULL,
  `id_sesi` int(3) NOT NULL,
  `id_ruang` int(3) NOT NULL,
  `id_matakuliah` int(3) NOT NULL,
  `kelas_matkul` varchar(3) NOT NULL,
  `id_dosen` int(2) NOT NULL,
  `keterangan` varchar(500) NOT NULL,
  `id_keberlangsungan` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ruangan`
--

CREATE TABLE `ruangan` (
  `id_ruang` int(11) NOT NULL,
  `nama_ruang` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ruangan`
--

INSERT INTO `ruangan` (`id_ruang`, `nama_ruang`) VALUES
(1, 'TC 101'),
(2, 'TC 102'),
(3, 'TC 103'),
(4, 'TC 104'),
(5, 'TC 105'),
(6, 'TC 106'),
(7, 'TC 107'),
(8, 'TC 108'),
(9, 'AULA JURUSAN SISTEM INFORMASI'),
(10, 'STUDIO PEMROGRAMAN SISTEM INFORMASI LT. 1'),
(11, 'STUDIO PEMROGRAMAN SISTEM INFORMASI LT. 2');

-- --------------------------------------------------------

--
-- Table structure for table `sesi`
--

CREATE TABLE `sesi` (
  `id_sesi` int(3) NOT NULL,
  `nama_sesi` varchar(10) NOT NULL,
  `jam` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sesi`
--

INSERT INTO `sesi` (`id_sesi`, `nama_sesi`, `jam`) VALUES
(1, '1', '08.00 s/d 10.00'),
(2, '2', '10.30 s/d 13.00'),
(3, '3', '13.00 s/d 16.00'),
(4, '4', '16.00 s/d 18.00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hari`
--
ALTER TABLE `hari`
  ADD PRIMARY KEY (`id_hari`);

--
-- Indexes for table `keberlangsungan`
--
ALTER TABLE `keberlangsungan`
  ADD PRIMARY KEY (`id_ket`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `matakuliah`
--
ALTER TABLE `matakuliah`
  ADD PRIMARY KEY (`id_matkul`);

--
-- Indexes for table `nama_dosen`
--
ALTER TABLE `nama_dosen`
  ADD PRIMARY KEY (`id_dosen`);

--
-- Indexes for table `panel_tampil`
--
ALTER TABLE `panel_tampil`
  ADD PRIMARY KEY (`id_panel`);

--
-- Indexes for table `ruangan`
--
ALTER TABLE `ruangan`
  ADD PRIMARY KEY (`id_ruang`);

--
-- Indexes for table `sesi`
--
ALTER TABLE `sesi`
  ADD PRIMARY KEY (`id_sesi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `panel_tampil`
--
ALTER TABLE `panel_tampil`
  MODIFY `id_panel` int(3) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sesi`
--
ALTER TABLE `sesi`
  MODIFY `id_sesi` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
