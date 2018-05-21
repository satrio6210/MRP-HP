-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2018 at 06:03 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kppl`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username_admin` varchar(256) NOT NULL,
  `password_admin` varchar(256) NOT NULL,
  `type` enum('futsal','basket') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username_admin`, `password_admin`, `type`) VALUES
('admin169', 'coba', 'futsal');

-- --------------------------------------------------------

--
-- Table structure for table `bahan`
--

CREATE TABLE `bahan` (
  `id_bahan` varchar(200) NOT NULL,
  `nama_bahan` varchar(200) NOT NULL,
  `tanggal_update` date NOT NULL,
  `supplier` varchar(200) NOT NULL,
  `lokasi_bahan` varchar(200) NOT NULL,
  `Stock` varchar(500) NOT NULL,
  `gambar_bahan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bahan`
--

INSERT INTO `bahan` (`id_bahan`, `nama_bahan`, `tanggal_update`, `supplier`, `lokasi_bahan`, `Stock`, `gambar_bahan`) VALUES
('101', 'wasd', '2018-05-21', 'wasd', 'wasd', '1000000', 'http://localhost/MRP-HP/./assets/lapangan/image/holy-union-font-4-big4.png');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `no` varchar(256) NOT NULL,
  `type` enum('futsal','basket') NOT NULL,
  `nama` varchar(50) NOT NULL,
  `admin` varchar(500) NOT NULL,
  `kategori` varchar(20) NOT NULL,
  `nomer_identitas` varchar(20) NOT NULL,
  `nama_lapangan` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `lama_sewa` int(20) NOT NULL,
  `nota_pembayaran` varchar(256) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`no`, `type`, `nama`, `admin`, `kategori`, `nomer_identitas`, `nama_lapangan`, `tanggal`, `jam`, `lama_sewa`, `nota_pembayaran`, `status`) VALUES
('1506941920', 'futsal', 'Nur laili', 'admin169', 'Pelajar', '5215100000', 'Lapangan C', '2017-10-02', '01:00:00', 1, '', 1),
('1508373366', 'basket', 'Putra', 'adminmayasi', 'Pelajar', '05241150000020', 'Lapangan Bayasi ', '2017-10-19', '09:00:00', 1, '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `kain`
--

CREATE TABLE `kain` (
  `id` varchar(500) NOT NULL,
  `kategori` varchar(500) NOT NULL,
  `warna` varchar(500) NOT NULL,
  `kode_warna` varchar(500) NOT NULL,
  `motif` varchar(500) NOT NULL,
  `qty` varchar(500) NOT NULL,
  `tanggal_pesan` date NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kain`
--

INSERT INTO `kain` (`id`, `kategori`, `warna`, `kode_warna`, `motif`, `qty`, `tanggal_pesan`, `status`) VALUES
('101', 'Batik', 'Coklat Emas', '#FFD700', 'Batik', '100', '2018-05-04', 1),
('100000001', 'wasd', 'wasd', 'wasd', 'wasd', '', '2018-05-03', 0);

-- --------------------------------------------------------

--
-- Table structure for table `kompetisi`
--

CREATE TABLE `kompetisi` (
  `id_kompetisi` varchar(200) NOT NULL,
  `nama_kompetisi` varchar(200) NOT NULL,
  `tanggal_kompetisi` date NOT NULL,
  `penyelenggara` varchar(200) NOT NULL,
  `lokasi_kompetisi` varchar(200) NOT NULL,
  `gambar_kompetisi` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kompetisi`
--

INSERT INTO `kompetisi` (`id_kompetisi`, `nama_kompetisi`, `tanggal_kompetisi`, `penyelenggara`, `lokasi_kompetisi`, `gambar_kompetisi`) VALUES
('40001', 'Futsal 169 AYECOYYY', '2018-02-14', 'Futsal 169', 'Jl.bulak sari No.6 SURABAYA BARAT', 'http://localhost/GIT/SpotyFast/./assets/lapangan/image/home-bg.jpg'),
('542654', 'tfxhg', '2018-05-03', 'tfhgfh', 'gfhf', 'http://localhost/SportyFast/./assets/lapangan/image/holy-union-font-4-big1.png');

-- --------------------------------------------------------

--
-- Table structure for table `lapangan`
--

CREATE TABLE `lapangan` (
  `id_lapangan` int(11) NOT NULL,
  `type` enum('futsal','basket') NOT NULL,
  `pemilik` varchar(500) NOT NULL,
  `nama_lapangan` varchar(500) NOT NULL,
  `detail_lapangan` varchar(500) NOT NULL,
  `tarif_student` varchar(500) NOT NULL,
  `tarif_umum` varchar(500) NOT NULL,
  `gambar_lapangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lapangan`
--

INSERT INTO `lapangan` (`id_lapangan`, `type`, `pemilik`, `nama_lapangan`, `detail_lapangan`, `tarif_student`, `tarif_umum`, `gambar_lapangan`) VALUES
(1001, 'futsal', 'admin169', 'Lapangan A', 'Lapangan Futsal 169 A', '70000', '120000', 'http://localhost/GIT/SpotyFast/./assets/lapangan/image/lap14.jpg'),
(1002, 'futsal', 'admin169', 'Lapangan B', 'Lapangan Futsal 169 B', '70000', '120000', 'http://localhost/GIT/SpotyFast/./assets/lapangan/image/lapfutB.jpg'),
(1004, 'futsal', 'nurlailiis', 'Lapangan A', 'Lapangan Futsal 169 B', 'Rp. 70.000,00/jam untuk Pelajar', 'Rp. 120.000,00/jam untuk Umum', 'http://localhost/GIT/SpotyFast/./assets/lapangan/image/lap13.jpg'),
(2001, 'basket', 'adminmayasi', 'Lapangan Bayasi', 'Mayasi Basketball', '200000', '300000', 'http://localhost/GIT/SpotyFast/./assets/lapangan/image/lapAbas.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `no` varchar(256) NOT NULL,
  `type` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `admin` varchar(500) NOT NULL,
  `kategori` varchar(20) NOT NULL,
  `nomer_identitas` varchar(500) NOT NULL,
  `nama_pesanan` varchar(20) NOT NULL,
  `jenis_pesanan` varchar(20) NOT NULL,
  `detail_pesanan` varchar(500) NOT NULL,
  `tanggal_pesanan` date NOT NULL,
  `nota_pembayaran` varchar(256) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`no`, `type`, `nama`, `admin`, `kategori`, `nomer_identitas`, `nama_pesanan`, `jenis_pesanan`, `detail_pesanan`, `tanggal_pesanan`, `nota_pembayaran`, `status`) VALUES
('324235', 'drgdgr', 'rdrgdrg', 'admin169', 'drgdrgd', 'rgdg', 'drgdg', 'fdbd', 'dsfgdr', '2018-05-21', '', 0),
('1234', 'wadssfd', 'coba', 'admin169', 'adf', '12232354', 'sfdg', 'drhgdthfd', 'sfsefsg', '2018-05-21', '', 0),
('1233453', 'dsfg', 'coba', 'admin169', 'fdgdr', '32443', 'fdg', 'rdgdfg', 'drhbfgchnft', '2018-05-21', '', 1),
('1', 'batik', 'coba', 'admin169', 'baju', '123', 'saya', 'exclusive', 'yang bagus ya pak', '2018-05-21', 'http://localhost/MRP-HP/./assets/nota/holy-union-font-4-big2.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` varchar(20) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `password_user` varchar(130) NOT NULL,
  `no_telp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `password_user`, `no_telp`) VALUES
('100000000000001', 'user', 'user', '1'),
('coba', 'coba', 'coba', '1234'),
('cobain', 'cobain', 'cobain', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `waktu`
--

CREATE TABLE `waktu` (
  `no` int(11) NOT NULL,
  `jam` varchar(500) NOT NULL,
  `nama_lapangan` varchar(500) NOT NULL,
  `pemilik` varchar(500) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username_admin`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `kompetisi`
--
ALTER TABLE `kompetisi`
  ADD PRIMARY KEY (`id_kompetisi`);

--
-- Indexes for table `lapangan`
--
ALTER TABLE `lapangan`
  ADD PRIMARY KEY (`id_lapangan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `waktu`
--
ALTER TABLE `waktu`
  ADD PRIMARY KEY (`no`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
