-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2020 at 01:11 PM
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
  `id_detail_kesehatan` int(11) NOT NULL,
  `bb` float NOT NULL,
  `tb` float NOT NULL,
  `imt` float NOT NULL,
  `lp` int(11) NOT NULL,
  `ape` varchar(128) NOT NULL,
  `sistole` int(10) NOT NULL,
  `diastole` int(10) NOT NULL,
  `gds` int(10) NOT NULL,
  `kolesterol` int(10) NOT NULL,
  `asam_urat` float NOT NULL,
  `ekspirasi` int(11) NOT NULL,
  `benjolan_pada_payudara` tinyint(1) NOT NULL,
  `iva` tinyint(1) NOT NULL,
  `kadar_alkohol` tinyint(1) NOT NULL,
  `tes_amfetamin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_detail_kesehatan`
--

INSERT INTO `t_detail_kesehatan` (`id_detail_kesehatan`, `bb`, `tb`, `imt`, `lp`, `ape`, `sistole`, `diastole`, `gds`, `kolesterol`, `asam_urat`, `ekspirasi`, `benjolan_pada_payudara`, `iva`, `kadar_alkohol`, `tes_amfetamin`) VALUES
(5, 170, 70, 24, 0, 'laki-laki', 135, 85, 150, 210, 8, 0, 1, 0, 1, 0),
(6, 60, 159, 24, 0, 'laki-laki', 140, 83, 106, 151, 0, 0, 0, 0, 1, 0),
(7, 67, 161, 26, 0, 'perempuan', 108, 74, 0, 252, 0, 0, 0, 0, 0, 0),
(27, 55, 1.5, 24.4444, 54, 'laki-laki', 45, 23, 32, 22, 5, 600, 1, 0, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `t_faktor_resiko`
--

CREATE TABLE `t_faktor_resiko` (
  `id_faktor_resiko` int(11) NOT NULL,
  `merokok` tinyint(1) NOT NULL,
  `sayur_buah` tinyint(1) NOT NULL,
  `kurang_aktivitas_fisik` tinyint(1) NOT NULL,
  `alkohol` tinyint(1) NOT NULL,
  `sulit_tidur_napsu_makan` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_faktor_resiko`
--

INSERT INTO `t_faktor_resiko` (`id_faktor_resiko`, `merokok`, `sayur_buah`, `kurang_aktivitas_fisik`, `alkohol`, `sulit_tidur_napsu_makan`) VALUES
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
(21, 0, 0, 1, 0, 0),
(27, 1, 0, 1, 0, 1);

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
(10, 'hipertensi', 'diet rendah GGL', 'tidak'),
(27, 'tidak', 'tidak', 'tidak');

-- --------------------------------------------------------

--
-- Table structure for table `t_level`
--

CREATE TABLE `t_level` (
  `id_level` int(11) NOT NULL,
  `nama_level` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_level`
--

INSERT INTO `t_level` (`id_level`, `nama_level`) VALUES
(1, 'Super Admin'),
(2, 'Admin\r\n');

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
  `tanggal_input` date DEFAULT NULL,
  `id` int(11) NOT NULL,
  `status_meja_2` tinyint(1) NOT NULL,
  `status_meja_3` tinyint(1) NOT NULL,
  `status_meja_4` tinyint(1) NOT NULL,
  `status_meja_5` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_pasien`
--

INSERT INTO `t_pasien` (`nama`, `identitas`, `usia`, `jabatan`, `jeniskelamin`, `tanggal_input`, `id`, `status_meja_2`, `status_meja_3`, `status_meja_4`, `status_meja_5`) VALUES
('mimin', 123456789, 32, 'UMY', 1, NULL, 5, 1, 1, 1, 1),
('ngadikin', 100046, 53, 'UMY', 1, NULL, 6, 1, 1, 1, 1),
('Arlina', 173069, 51, 'MMR', 0, NULL, 7, 1, 1, 1, 1),
('bambang rahmanto', 100235, 54, 'rektorat', 1, NULL, 8, 1, 0, 0, 1),
('murfiandi', 1000103, 49, 'FKIK', 1, NULL, 9, 1, 0, 0, 1),
('Meilydia Nur Hidayati', 401311, 23, 'rektorat', 0, NULL, 10, 1, 0, 0, 1),
('supardwiyana', 100247, 55, 'satpam', 1, NULL, 11, 1, 0, 0, 0),
('Naula Rahma', 401397, 23, 'rektorat', 0, NULL, 12, 1, 0, 0, 0),
('wanto saputro', 100236, 52, 'FPB', 1, NULL, 13, 1, 0, 0, 0),
('Dafnan Arif Febrianto', 100278, 47, 'FEB', 1, NULL, 14, 1, 0, 0, 0),
('Nurhidayat', 100133, 48, 'FT', 1, NULL, 15, 1, 0, 0, 0),
('budi raharjo', 100272, 48, 'FT', 1, NULL, 16, 1, 0, 0, 0),
('Agus sutopo', 100342, 48, 'Fisipol', 1, NULL, 17, 1, 0, 0, 0),
('Bella Noermalitasari', 401276, 56, 'FEB', 0, NULL, 18, 1, 0, 0, 0),
('Delina Auza Utami', 0, 39, 'BBTKLPP Jogja', 0, NULL, 19, 1, 0, 0, 0),
('Wury Prastuti', 1000007, 49, 'Fisipol', 0, NULL, 21, 1, 0, 0, 0),
('Andi Maryanto', 1700018001, 21, 'mahasiswa', 1, NULL, 27, 1, 1, 1, 1),
('mimin', 123456789, 32, 'UMY', 1, '2020-08-22', 29, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `t_tidak_menular_diri`
--

CREATE TABLE `t_tidak_menular_diri` (
  `id_penyakit_diri_sendiri` int(11) NOT NULL,
  `DM_2` tinyint(1) NOT NULL,
  `HT_2` tinyint(1) NOT NULL,
  `jantung_2` tinyint(1) NOT NULL,
  `stroke_2` tinyint(1) NOT NULL,
  `asma_2` tinyint(1) NOT NULL,
  `kanker_2` tinyint(1) NOT NULL,
  `kolesterol_2` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_tidak_menular_diri`
--

INSERT INTO `t_tidak_menular_diri` (`id_penyakit_diri_sendiri`, `DM_2`, `HT_2`, `jantung_2`, `stroke_2`, `asma_2`, `kanker_2`, `kolesterol_2`) VALUES
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
(21, 0, 0, 0, 0, 0, 0, 0),
(27, 1, 0, 1, 0, 1, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `t_tidak_menular_keluarga`
--

CREATE TABLE `t_tidak_menular_keluarga` (
  `id_penyakit_keluarga` int(10) NOT NULL,
  `DM_1` tinyint(1) DEFAULT NULL,
  `HT_1` tinyint(1) DEFAULT NULL,
  `jantung_1` tinyint(1) DEFAULT NULL,
  `stroke_1` tinyint(1) DEFAULT NULL,
  `asma_1` tinyint(1) DEFAULT NULL,
  `kanker_1` tinyint(1) DEFAULT NULL,
  `kolesterol_1` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_tidak_menular_keluarga`
--

INSERT INTO `t_tidak_menular_keluarga` (`id_penyakit_keluarga`, `DM_1`, `HT_1`, `jantung_1`, `stroke_1`, `asma_1`, `kanker_1`, `kolesterol_1`) VALUES
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
(21, 1, 1, 1, 1, 0, 1, 0),
(27, 1, 0, 1, 0, 1, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `t_user`
--

CREATE TABLE `t_user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `instansi` varchar(128) NOT NULL,
  `no_identitas` varchar(128) NOT NULL,
  `id_level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_user`
--

INSERT INTO `t_user` (`id_user`, `nama_user`, `username`, `password`, `instansi`, `no_identitas`, `id_level`) VALUES
(2, 'Zulfikar Ulya Zen', 'ulyazen', '12345678', 'UAD', '1700018230', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_detail_kesehatan`
--
ALTER TABLE `t_detail_kesehatan`
  ADD PRIMARY KEY (`id_detail_kesehatan`);

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
-- Indexes for table `t_level`
--
ALTER TABLE `t_level`
  ADD PRIMARY KEY (`id_level`);

--
-- Indexes for table `t_pasien`
--
ALTER TABLE `t_pasien`
  ADD PRIMARY KEY (`id`);

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
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_level` (`id_level`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_detail_kesehatan`
--
ALTER TABLE `t_detail_kesehatan`
  MODIFY `id_detail_kesehatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `t_faktor_resiko`
--
ALTER TABLE `t_faktor_resiko`
  MODIFY `id_faktor_resiko` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `t_konseling`
--
ALTER TABLE `t_konseling`
  MODIFY `id_kesimpulan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `t_level`
--
ALTER TABLE `t_level`
  MODIFY `id_level` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `t_pasien`
--
ALTER TABLE `t_pasien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `t_tidak_menular_diri`
--
ALTER TABLE `t_tidak_menular_diri`
  MODIFY `id_penyakit_diri_sendiri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `t_tidak_menular_keluarga`
--
ALTER TABLE `t_tidak_menular_keluarga`
  MODIFY `id_penyakit_keluarga` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `t_user`
--
ALTER TABLE `t_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `t_detail_kesehatan`
--
ALTER TABLE `t_detail_kesehatan`
  ADD CONSTRAINT `t_detail_kesehatan_ibfk_1` FOREIGN KEY (`id_detail_kesehatan`) REFERENCES `t_pasien` (`id`);

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

--
-- Constraints for table `t_user`
--
ALTER TABLE `t_user`
  ADD CONSTRAINT `t_user_ibfk_1` FOREIGN KEY (`id_level`) REFERENCES `t_level` (`id_level`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
