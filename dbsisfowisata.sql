-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 20, 2014 at 08:35 PM
-- Server version: 5.5.39
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbsisfowisata`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbbayar`
--

CREATE TABLE IF NOT EXISTS `tbbayar` (
  `idbayar` varchar(50) NOT NULL,
  `idpengajuan` int(30) NOT NULL,
  `tgl_pembayaran` varchar(20) NOT NULL,
  `rek_user` varchar(50) NOT NULL,
  `konfirm_admin` varchar(20) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbbayar`
--

INSERT INTO `tbbayar` (`idbayar`, `idpengajuan`, `tgl_pembayaran`, `rek_user`, `konfirm_admin`) VALUES
('5495c53da570b', 10000023, '11-12-2014', 'Bank BRI No. Rek 100010101 a/n Aim Ibrahim', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `tbfasilitas`
--

CREATE TABLE IF NOT EXISTS `tbfasilitas` (
  `idpengajuan` int(30) NOT NULL,
  `fasilitas` varchar(100) NOT NULL,
  `ket_fasilitas` text NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbkategori`
--

CREATE TABLE IF NOT EXISTS `tbkategori` (
  `idkategori` varchar(5) NOT NULL,
  `nama_kategori` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbkategori`
--

INSERT INTO `tbkategori` (`idkategori`, `nama_kategori`) VALUES
('K001', 'Budaya'),
('K002', 'Maritim atau Bahari'),
('K003', 'Cagar Alam'),
('K004', 'Kuliner'),
('K005', 'Pertanian atau Agrowisata');

-- --------------------------------------------------------

--
-- Table structure for table `tbpaket`
--

CREATE TABLE IF NOT EXISTS `tbpaket` (
  `idpaket` varchar(10) NOT NULL,
  `nama_paket` varchar(20) NOT NULL,
  `harga` int(20) NOT NULL,
  `tayang` varchar(20) NOT NULL,
  `galery` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbpaket`
--

INSERT INTO `tbpaket` (`idpaket`, `nama_paket`, `harga`, `tayang`, `galery`) VALUES
('P001', 'Beginner', 150000, '1', 2),
('P002', 'Reguler', 600000, '6', 3),
('P003', 'Gold', 950000, '12', 6),
('P004', 'Premium', 2500000, '36', 6);

-- --------------------------------------------------------

--
-- Table structure for table `tbpengajuan`
--

CREATE TABLE IF NOT EXISTS `tbpengajuan` (
`idpengajuan` int(30) NOT NULL,
  `iduser` int(10) NOT NULL,
  `nama_wisata` varchar(100) NOT NULL,
  `idkategori` varchar(10) NOT NULL,
  `alamat_wisata` text NOT NULL,
  `foto` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'Pending',
  `keterangan` varchar(100) NOT NULL,
  `idpaket` varchar(5) NOT NULL,
  `waktu_pengajuan` varchar(20) NOT NULL DEFAULT '-',
  `waktu_penerimaan` varchar(20) NOT NULL DEFAULT '-',
  `rating` int(10) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10000040 ;

--
-- Dumping data for table `tbpengajuan`
--

INSERT INTO `tbpengajuan` (`idpengajuan`, `iduser`, `nama_wisata`, `idkategori`, `alamat_wisata`, `foto`, `deskripsi`, `status`, `keterangan`, `idpaket`, `waktu_pengajuan`, `waktu_penerimaan`, `rating`) VALUES
(10000023, 10020, 'Curug Bibijilan', 'K002', 'Nyalindung Kabupaten Sukabumi', '613674Curug-Cicurug-Tempat-Wisata-di-Sukabumi.jpg', 'Indah bangedd lho!!!', 'Pending', '', 'P002', '2014-12-20 | 07:37:1', '-', 0),
(10000033, 10027, 'Curug Cikondang', 'K001', 'Sukabumi Selatan teuing mana', '426309aItp15XTT5.jpg', 'Curug Cikondang ini sangat indah, apalagi kalo datang sama pacar', 'Pending', '', 'P002', '2014-12-20 | 12:46:0', '-', 0),
(10000036, 10020, 'Riam Jeram', 'K002', 'Warung Kiara', '737917img_20111215091149_4ee9576585800.jpg', 'Anda Suka Olah Raga Adrenalin?', 'Pending', '', 'P002', '2014-12-20 | 08:26:1', '-', 0),
(10000037, 10020, 'Goa Angker', 'Pilih kate', '', '482844adventure_buniayu.jpg', '', 'Pending', '', 'Pilih', '2014-12-20 | 08:26:5', '-', 0),
(10000038, 10020, 'Pelabuhan Ratu', 'Pilih kate', '', '45041922399cf8623aecb969d50ec32f760865_pelabuhan-ratu.jpg', '', 'Pending', '', 'Pilih', '2014-12-20 | 08:27:1', '-', 0),
(10000039, 10020, 'Cibangban', 'Pilih kate', '', '736788Kota pelabuhan ratu.JPG', '', 'Pending', '', 'Pilih', '2014-12-20 | 08:27:5', '-', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbuser`
--

CREATE TABLE IF NOT EXISTS `tbuser` (
`iduser` int(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `umur` varchar(5) NOT NULL,
  `jk` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `nope` varchar(16) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `level` varchar(10) NOT NULL DEFAULT '3'
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10030 ;

--
-- Dumping data for table `tbuser`
--

INSERT INTO `tbuser` (`iduser`, `username`, `password`, `nama_user`, `umur`, `jk`, `alamat`, `email`, `nope`, `foto`, `level`) VALUES
(10001, 'admin', '12345', 'Ibrahim', '', '', '', '', '', '646615hd_wallpaper_6552.jpg', '1'),
(10002, 'auditor', 'auditor', 'Kepala Dinas Pariwisata', '', '', '', '', '', '', '2'),
(10003, 'user', 'user', 'Guest', '', '', '', '', '', '', '3'),
(10027, 'abah', '12345', 'Abah Fikri', '23', 'Laki-laki', 'Sukabumi', 'abah@yahoo.com', '089', '353014Screenshot from 2014-12-16 01:23:35.png', '3'),
(10026, 'test', '', '', '', '', '', '', '', '', '3'),
(10021, 'steward', '12345', 'Cristen Steward', '24', 'Perempuan', 'Paris - UK', 'csteward@gmail.com', '0857-1-1-1', '534124hd_wallpaper_6552.jpg', '3'),
(10020, 'ibrahim', 'ibrahim', 'Aim Ibrahim', '23', 'Laki-laki', 'cimangkok', 'ibrahmi@gmail.com', '0857-0-0-0', '593614aim.jpg', '3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbbayar`
--
ALTER TABLE `tbbayar`
 ADD PRIMARY KEY (`idbayar`);

--
-- Indexes for table `tbkategori`
--
ALTER TABLE `tbkategori`
 ADD PRIMARY KEY (`idkategori`);

--
-- Indexes for table `tbpaket`
--
ALTER TABLE `tbpaket`
 ADD PRIMARY KEY (`idpaket`);

--
-- Indexes for table `tbpengajuan`
--
ALTER TABLE `tbpengajuan`
 ADD PRIMARY KEY (`idpengajuan`);

--
-- Indexes for table `tbuser`
--
ALTER TABLE `tbuser`
 ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbpengajuan`
--
ALTER TABLE `tbpengajuan`
MODIFY `idpengajuan` int(30) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10000040;
--
-- AUTO_INCREMENT for table `tbuser`
--
ALTER TABLE `tbuser`
MODIFY `iduser` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10030;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
