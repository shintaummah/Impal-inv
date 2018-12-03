-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2018 at 05:49 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `invkampus`
--

-- --------------------------------------------------------

--
-- Table structure for table `inventaris`
--

CREATE TABLE `inventaris` (
  `idinventaris` varchar(10) NOT NULL,
  `nama_inv` varchar(20) NOT NULL,
  `kondisi` varchar(20) NOT NULL,
  `idpegawai` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inventaris`
--

INSERT INTO `inventaris` (`idinventaris`, `nama_inv`, `kondisi`, `idpegawai`) VALUES
('B2', 'kursi', 'Buruk', '21');

-- --------------------------------------------------------

--
-- Table structure for table `tb_asset`
--

CREATE TABLE `tb_asset` (
  `idasset` varchar(10) NOT NULL,
  `nama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang`
--

CREATE TABLE `tb_barang` (
  `idbarang` varchar(10) NOT NULL,
  `jumlah` varchar(10) NOT NULL,
  `idinventaris` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_barang`
--

INSERT INTO `tb_barang` (`idbarang`, `jumlah`, `idinventaris`) VALUES
('B01', '120', 'B2');

-- --------------------------------------------------------

--
-- Table structure for table `tb_logistik`
--

CREATE TABLE `tb_logistik` (
  `id_logistik` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_logistik`
--

INSERT INTO `tb_logistik` (`id_logistik`, `nama`, `username`, `password`) VALUES
(1, 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tb_milik`
--

CREATE TABLE `tb_milik` (
  `idinventaris` varchar(10) NOT NULL,
  `idasset` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pegawai`
--

CREATE TABLE `tb_pegawai` (
  `idpegawai` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `status` enum('CS','LOGISTIK') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pegawai`
--

INSERT INTO `tb_pegawai` (`idpegawai`, `nama`, `alamat`, `username`, `password`, `status`) VALUES
('11', 'Sunarto', 'Kalianyar', 'sunarto', 'sunarto', 'CS'),
('21', 'Tini', 'Kalilawas', 'tini', 'tini', 'LOGISTIK');

-- --------------------------------------------------------

--
-- Table structure for table `tb_peminjam`
--

CREATE TABLE `tb_peminjam` (
  `nim` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_peminjam`
--

INSERT INTO `tb_peminjam` (`nim`, `nama`, `username`, `password`) VALUES
('1', 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pinjaman`
--

CREATE TABLE `tb_pinjaman` (
  `idpinjaman` varchar(10) NOT NULL,
  `nim` varchar(10) NOT NULL,
  `idinventaris` varchar(10) NOT NULL,
  `tglpinjam` date NOT NULL,
  `tglkembali` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_tanah`
--

CREATE TABLE `tb_tanah` (
  `idtanah` varchar(10) NOT NULL,
  `luas` varchar(10) NOT NULL,
  `idinventaris` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `inventaris`
--
ALTER TABLE `inventaris`
  ADD PRIMARY KEY (`idinventaris`),
  ADD KEY `fk1_inventaris` (`idpegawai`);

--
-- Indexes for table `tb_asset`
--
ALTER TABLE `tb_asset`
  ADD PRIMARY KEY (`idasset`);

--
-- Indexes for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`idbarang`),
  ADD KEY `fk1_barang` (`idinventaris`);

--
-- Indexes for table `tb_logistik`
--
ALTER TABLE `tb_logistik`
  ADD PRIMARY KEY (`id_logistik`);

--
-- Indexes for table `tb_milik`
--
ALTER TABLE `tb_milik`
  ADD KEY `fk1_milik` (`idinventaris`),
  ADD KEY `fk2_milik` (`idasset`);

--
-- Indexes for table `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
  ADD PRIMARY KEY (`idpegawai`);

--
-- Indexes for table `tb_peminjam`
--
ALTER TABLE `tb_peminjam`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `tb_pinjaman`
--
ALTER TABLE `tb_pinjaman`
  ADD PRIMARY KEY (`idpinjaman`),
  ADD KEY `fk1_pinjaman` (`nim`),
  ADD KEY `fk2_pinjaman` (`idinventaris`);

--
-- Indexes for table `tb_tanah`
--
ALTER TABLE `tb_tanah`
  ADD PRIMARY KEY (`idtanah`),
  ADD KEY `fk1_tanah` (`idinventaris`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_logistik`
--
ALTER TABLE `tb_logistik`
  MODIFY `id_logistik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `inventaris`
--
ALTER TABLE `inventaris`
  ADD CONSTRAINT `inventaris_ibfk_1` FOREIGN KEY (`idpegawai`) REFERENCES `tb_pegawai` (`idpegawai`);

--
-- Constraints for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD CONSTRAINT `tb_barang_ibfk_1` FOREIGN KEY (`idinventaris`) REFERENCES `inventaris` (`idinventaris`);

--
-- Constraints for table `tb_milik`
--
ALTER TABLE `tb_milik`
  ADD CONSTRAINT `tb_milik_ibfk_1` FOREIGN KEY (`idinventaris`) REFERENCES `inventaris` (`idinventaris`),
  ADD CONSTRAINT `tb_milik_ibfk_2` FOREIGN KEY (`idasset`) REFERENCES `tb_asset` (`idasset`);

--
-- Constraints for table `tb_pinjaman`
--
ALTER TABLE `tb_pinjaman`
  ADD CONSTRAINT `tb_pinjaman_ibfk_1` FOREIGN KEY (`idinventaris`) REFERENCES `inventaris` (`idinventaris`),
  ADD CONSTRAINT `tb_pinjaman_ibfk_2` FOREIGN KEY (`nim`) REFERENCES `tb_peminjam` (`nim`);

--
-- Constraints for table `tb_tanah`
--
ALTER TABLE `tb_tanah`
  ADD CONSTRAINT `tb_tanah_ibfk_1` FOREIGN KEY (`idinventaris`) REFERENCES `inventaris` (`idinventaris`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
