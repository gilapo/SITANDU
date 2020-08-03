-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2020 at 01:59 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sitandu`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_detail_kesehatan`
--

CREATE TABLE `t_detail_kesehatan` (
  `id` int(11) NOT NULL,
  `bb` float NOT NULL,
  `tb` int(11) NOT NULL,
  `imt` decimal(11,0) NOT NULL,
  `ape` enum('P','L') NOT NULL,
  `sistole` int(10) NOT NULL,
  `diastole` int(10) NOT NULL,
  `gds` int(10) NOT NULL,
  `kolestrol` int(10) NOT NULL,
  `hasil` float NOT NULL,
  `benjolan_pada_payudara` tinyint(1) NOT NULL,
  `iva` tinyint(1) NOT NULL,
  `kadar_alkohol` tinyint(1) NOT NULL,
  `tes_amfetamin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_detail_kesehatan`
--

INSERT INTO `t_detail_kesehatan` (`id`, `bb`, `tb`, `imt`, `ape`, `sistole`, `diastole`, `gds`, `kolestrol`, `hasil`, `benjolan_pada_payudara`, `iva`, `kadar_alkohol`, `tes_amfetamin`) VALUES
(5, 170, 70, '24', 'L', 135, 85, 150, 210, 8, 1, 0, 1, 0),
(6, 60, 159, '24', 'L', 140, 83, 106, 151, 0, 0, 0, 1, 0),
(7, 67, 161, '26', 'P', 108, 74, 0, 252, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `t_faktor_resiko`
--

CREATE TABLE `t_faktor_resiko` (
  `id_faktor_resiko` int(11) NOT NULL,
  `merokok` tinyint(1) NOT NULL,
  `makan_sayur_buah_<5_porsi` tinyint(1) NOT NULL,
  `kurang_aktivitas_fisik` tinyint(1) NOT NULL,
  `alkohol` tinyint(1) NOT NULL,
  `sulit_tidur_napsu_makan` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_faktor_resiko`
--

INSERT INTO `t_faktor_resiko` (`id_faktor_resiko`, `merokok`, `makan_sayur_buah_<5_porsi`, `kurang_aktivitas_fisik`, `alkohol`, `sulit_tidur_napsu_makan`) VALUES
(5, 1, 0, 1, 0, 1),
(6, 0, 0, 1, 0, 0),
(7, 0, 0, 0, 0, 0),
(8, 1, 0, 1, 0, 0),
(9, 0, 0, 0, 0, 0),
(10, 0, 0, 0, 0, 0),
(11, 0, 0, 0, 0, 0),
(12, 1, 1, 0, 0, 0),
(13, 0, 0, 0, 0, 0),
(14, 1, 1, 0, 0, 0),
(15, 0, 1, 0, 0, 0),
(16, 0, 1, 0, 0, 0),
(17, 1, 0, 1, 0, 1),
(18, 0, 1, 0, 0, 0),
(19, 0, 1, 0, 0, 0),
(21, 0, 0, 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `t_konseling`
--

CREATE TABLE `t_konseling` (
  `id_kesimpulan` int(11) NOT NULL,
  `masalah_yang_ditemukan` varchar(100) NOT NULL,
  `saran` varchar(100) NOT NULL,
  `rujukan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_konseling`
--

INSERT INTO `t_konseling` (`id_kesimpulan`, `masalah_yang_ditemukan`, `saran`, `rujukan`) VALUES
(5, 'Pre Hipertensi', 'kurangi merokok, perbanyak buah dan sayur', 'tidak'),
(6, '-', '-', '-'),
(8, 'preobese, hiperkolesterol', 'diet rendah lemak, aktivitas fisik', 'tidak'),
(9, 'kolesterol , sering mengantuk', 'banyak sayur dan buah, rutin olahraga', 'tidak'),
(10, 'hipertensi', 'diet rendah GGL', 'tidak');

-- --------------------------------------------------------

--
-- Table structure for table `t_pasien`
--

CREATE TABLE `t_pasien` (
  `nama` varchar(256) NOT NULL,
  `identitas` int(11) NOT NULL,
  `usia` int(11) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `jeniskelamin` tinyint(1) NOT NULL,
  `id` int(11) NOT NULL,
  `status_meja_2` tinyint(1) NOT NULL,
  `status_meja_3` tinyint(1) NOT NULL,
  `status_meja_4` tinyint(1) NOT NULL,
  `status_meja_5` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_pasien`
--

INSERT INTO `t_pasien` (`nama`, `identitas`, `usia`, `jabatan`, `jeniskelamin`, `id`, `status_meja_2`, `status_meja_3`, `status_meja_4`, `status_meja_5`) VALUES
('mimin', 123456789, 32, 'UMY', 1, 5, 0, 0, 0, 0),
('ngadikin', 100046, 53, 'UMY', 1, 6, 0, 0, 0, 0),
('Arlina', 173069, 51, 'MMR', 2, 7, 0, 0, 0, 0),
('bambang rahmanto', 100235, 54, 'rektorat', 1, 8, 0, 0, 0, 0),
('murfiandi', 1000103, 49, 'FKIK', 1, 9, 0, 0, 0, 0),
('Meilydia Nur Hidayati', 401311, 23, 'rektorat', 2, 10, 0, 0, 0, 0),
('supardwiyana', 100247, 55, 'satpam', 1, 11, 0, 0, 0, 0),
('Naula Rahma', 401397, 23, 'rektorat', 2, 12, 0, 0, 0, 0),
('wanto saputro', 100236, 52, 'FPB', 1, 13, 0, 0, 0, 0),
('Dafnan Arif Febrianto', 100278, 47, 'FEB', 1, 14, 0, 0, 0, 0),
('Nurhidayat', 100133, 48, 'FT', 1, 15, 0, 0, 0, 0),
('budi raharjo', 100272, 48, 'FT', 1, 16, 0, 0, 0, 0),
('Agus sutopo', 100342, 48, 'Fisipol', 1, 17, 0, 0, 0, 0),
('Bella Noermalitasari', 401276, 56, 'FEB', 2, 18, 0, 0, 0, 0),
('Delina Auza Utami', 0, 39, 'BBTKLPP Jogja', 2, 19, 0, 0, 0, 0),
('Wury Prastuti', 1000007, 49, 'Fisipol', 2, 21, 0, 0, 0, 0),
('Zen', 170001823, 21, 'FT', 1, 24, 0, 0, 0, 0),
('Budi', 100000000, 30, 'Dosen', 1, 25, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `t_tidak_menular_diri`
--

CREATE TABLE `t_tidak_menular_diri` (
  `id_penyakit_diri_sendiri` int(11) NOT NULL,
  `DM` tinyint(1) NOT NULL,
  `HT` tinyint(1) NOT NULL,
  `jantung` tinyint(1) NOT NULL,
  `stroke` tinyint(1) NOT NULL,
  `asma` tinyint(1) NOT NULL,
  `kanker` tinyint(1) NOT NULL,
  `kolesterol` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_tidak_menular_diri`
--

INSERT INTO `t_tidak_menular_diri` (`id_penyakit_diri_sendiri`, `DM`, `HT`, `jantung`, `stroke`, `asma`, `kanker`, `kolesterol`) VALUES
(5, 0, 1, 0, 1, 0, 1, 0),
(6, 0, 0, 0, 0, 0, 0, 0),
(7, 0, 0, 0, 0, 0, 0, 0),
(8, 0, 0, 0, 0, 0, 0, 1),
(9, 0, 0, 0, 0, 0, 0, 0),
(10, 0, 0, 0, 0, 0, 0, 0),
(11, 0, 0, 0, 0, 0, 0, 0),
(12, 0, 0, 0, 0, 0, 0, 0),
(13, 1, 0, 0, 0, 0, 0, 0),
(14, 0, 0, 0, 0, 0, 1, 0),
(15, 0, 0, 0, 0, 0, 0, 0),
(16, 0, 0, 0, 0, 1, 0, 0),
(17, 0, 0, 0, 0, 0, 0, 0),
(18, 0, 0, 0, 0, 0, 0, 0),
(19, 0, 0, 0, 0, 0, 0, 0),
(21, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `t_tidak_menular_keluarga`
--

CREATE TABLE `t_tidak_menular_keluarga` (
  `id_penyakit_keluarga` int(10) NOT NULL,
  `DM` tinyint(1) DEFAULT NULL,
  `HT` tinyint(1) DEFAULT NULL,
  `jantung` tinyint(1) DEFAULT NULL,
  `stroke` tinyint(1) DEFAULT NULL,
  `asma` tinyint(1) DEFAULT NULL,
  `kanker` tinyint(1) DEFAULT NULL,
  `kolestrol` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_tidak_menular_keluarga`
--

INSERT INTO `t_tidak_menular_keluarga` (`id_penyakit_keluarga`, `DM`, `HT`, `jantung`, `stroke`, `asma`, `kanker`, `kolestrol`) VALUES
(5, 1, 0, 1, 0, 1, 0, 1),
(6, 1, 0, 0, 0, 0, 0, 0),
(7, 0, 1, 1, 1, 0, 1, 1),
(8, 0, 0, 0, 0, 0, 0, 0),
(9, 0, 0, 0, 0, 0, 0, 0),
(10, 0, 0, 0, 0, 1, 0, 1),
(11, 0, 0, 1, 0, 0, 0, 0),
(12, 0, 0, 0, 0, 0, 0, 0),
(13, 1, 0, 0, 0, 0, 0, 1),
(14, 0, 1, 1, 0, 0, 1, 0),
(15, 0, 0, 1, 0, 0, 0, 0),
(16, 0, 0, 0, 0, 0, 0, 0),
(17, 0, 0, 0, 0, 0, 0, 0),
(18, 0, 0, 0, 0, 0, 0, 0),
(19, 1, 1, 0, 0, 0, 0, 1),
(21, 1, 1, 1, 1, 0, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `t_user`
--

CREATE TABLE `t_user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_user`
--

INSERT INTO `t_user` (`id_user`, `nama_user`, `username`, `password`) VALUES
(1, 'Zulfikar Ulya Zen', 'ulyazen', '12345678\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_detail_kesehatan`
--
ALTER TABLE `t_detail_kesehatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_faktor_resiko`
--
ALTER TABLE `t_faktor_resiko`
  ADD PRIMARY KEY (`id_faktor_resiko`);

--
-- Indexes for table `t_konseling`
--
ALTER TABLE `t_konseling`
  ADD PRIMARY KEY (`id_kesimpulan`);

--
-- Indexes for table `t_pasien`
--
ALTER TABLE `t_pasien`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nik` (`identitas`);

--
-- Indexes for table `t_tidak_menular_diri`
--
ALTER TABLE `t_tidak_menular_diri`
  ADD PRIMARY KEY (`id_penyakit_diri_sendiri`);

--
-- Indexes for table `t_tidak_menular_keluarga`
--
ALTER TABLE `t_tidak_menular_keluarga`
  ADD PRIMARY KEY (`id_penyakit_keluarga`);

--
-- Indexes for table `t_user`
--
ALTER TABLE `t_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_detail_kesehatan`
--
ALTER TABLE `t_detail_kesehatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `t_faktor_resiko`
--
ALTER TABLE `t_faktor_resiko`
  MODIFY `id_faktor_resiko` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `t_konseling`
--
ALTER TABLE `t_konseling`
  MODIFY `id_kesimpulan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `t_pasien`
--
ALTER TABLE `t_pasien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `t_tidak_menular_diri`
--
ALTER TABLE `t_tidak_menular_diri`
  MODIFY `id_penyakit_diri_sendiri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `t_tidak_menular_keluarga`
--
ALTER TABLE `t_tidak_menular_keluarga`
  MODIFY `id_penyakit_keluarga` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `t_user`
--
ALTER TABLE `t_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `t_detail_kesehatan`
--
ALTER TABLE `t_detail_kesehatan`
  ADD CONSTRAINT `t_detail_kesehatan_ibfk_1` FOREIGN KEY (`id`) REFERENCES `t_pasien` (`id`);

--
-- Constraints for table `t_faktor_resiko`
--
ALTER TABLE `t_faktor_resiko`
  ADD CONSTRAINT `t_faktor_resiko_ibfk_1` FOREIGN KEY (`id_faktor_resiko`) REFERENCES `t_pasien` (`id`);

--
-- Constraints for table `t_konseling`
--
ALTER TABLE `t_konseling`
  ADD CONSTRAINT `t_konseling_ibfk_1` FOREIGN KEY (`id_kesimpulan`) REFERENCES `t_pasien` (`id`);

--
-- Constraints for table `t_tidak_menular_diri`
--
ALTER TABLE `t_tidak_menular_diri`
  ADD CONSTRAINT `t_tidak_menular_diri_ibfk_1` FOREIGN KEY (`id_penyakit_diri_sendiri`) REFERENCES `t_pasien` (`id`);

--
-- Constraints for table `t_tidak_menular_keluarga`
--
ALTER TABLE `t_tidak_menular_keluarga`
  ADD CONSTRAINT `t_tidak_menular_keluarga_ibfk_1` FOREIGN KEY (`id_penyakit_keluarga`) REFERENCES `t_pasien` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
