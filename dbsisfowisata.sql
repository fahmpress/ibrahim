-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 19, 2014 at 06:38 AM
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

-- --------------------------------------------------------

--
-- Table structure for table `tbkontrak`
--

CREATE TABLE IF NOT EXISTS `tbkontrak` (
  `idkontrak` varchar(10) NOT NULL,
  `nama_kontrak` varchar(20) NOT NULL,
  `harga` int(20) NOT NULL,
  `tayang` varchar(20) NOT NULL,
  `galery` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
  `profile` text NOT NULL,
  `status` varchar(20) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `idkontrak` varchar(5) NOT NULL,
  `rating` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10022 ;

--
-- Dumping data for table `tbuser`
--

INSERT INTO `tbuser` (`iduser`, `username`, `password`, `nama_user`, `umur`, `jk`, `alamat`, `email`, `nope`, `foto`, `level`) VALUES
(10001, 'admin', '12345', 'Ibrahim', '', '', '', '', '', '646615hd_wallpaper_6552.jpg', '1'),
(10002, 'auditor', 'auditor', 'Kepala Dinas Pariwisata', '', '', '', '', '', '', '2'),
(10003, 'user', 'user', 'Guest', '', '', '', '', '', '', '3'),
(10021, 'steward', '12345', 'Cristen Steward', '24', 'Perempuan', 'Paris - UK', 'csteward@gmail.com', '0857-1-1-1', '534124hd_wallpaper_6552.jpg', '3'),
(10020, 'ibrahim', 'ibrahim', 'Ibrahmi Saja', '23', 'Laki-laki', 'cimangkok', 'ibrahmi@gmail.com', '0857-0-0-0', '593614aim.jpg', '3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbkategori`
--
ALTER TABLE `tbkategori`
 ADD PRIMARY KEY (`idkategori`);

--
-- Indexes for table `tbkontrak`
--
ALTER TABLE `tbkontrak`
 ADD PRIMARY KEY (`idkontrak`);

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
MODIFY `idpengajuan` int(30) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbuser`
--
ALTER TABLE `tbuser`
MODIFY `iduser` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10022;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
