-- phpMyAdmin SQL Dump
-- version 2.11.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 11, 2015 at 03:46 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

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
  `konfirm_admin` varchar(20) NOT NULL default 'Pending',
  PRIMARY KEY  (`idbayar`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbbayar`
--

INSERT INTO `tbbayar` (`idbayar`, `idpengajuan`, `tgl_pembayaran`, `rek_user`, `konfirm_admin`) VALUES
('54971d55205e7', 10000023, '11-12-2014', 'Bank BRI No. Rek 100010101 a/n Aim Ibrahim', 'Lunas'),
('549ffb18e3d7c', 10000036, '2014-12-24', 'Bank BJB No. Rek. 123456789 a/n Aim Sajah', 'Lunas'),
('54afc7f76775c', 10000037, '12/12/2014', 'asd', 'Lunas');

-- --------------------------------------------------------

--
-- Table structure for table `tbfasilitas`
--

CREATE TABLE IF NOT EXISTS `tbfasilitas` (
  `idfasilitas` int(20) NOT NULL auto_increment,
  `idpengajuan` int(30) NOT NULL,
  `fasilitas` varchar(100) NOT NULL,
  `ket_fasilitas` text NOT NULL,
  `foto` varchar(100) NOT NULL,
  PRIMARY KEY  (`idfasilitas`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=62 ;

--
-- Dumping data for table `tbfasilitas`
--

INSERT INTO `tbfasilitas` (`idfasilitas`, `idpengajuan`, `fasilitas`, `ket_fasilitas`, `foto`) VALUES
(54, 10000023, 'a', 'a', '210449'),
(56, 10000023, 'c', 'c', '22888'),
(57, 10000023, 'd', 'd', '902801'),
(58, 10000023, 'e', 'e', '14434'),
(59, 10000023, 'f', 'f', '184509'),
(60, 10000023, 'g', 'g', '769500'),
(61, 10000036, 'admin', 'a', '642944');

-- --------------------------------------------------------

--
-- Table structure for table `tbkategori`
--

CREATE TABLE IF NOT EXISTS `tbkategori` (
  `idkategori` varchar(5) NOT NULL,
  `nama_kategori` varchar(100) NOT NULL,
  PRIMARY KEY  (`idkategori`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbkategori`
--

INSERT INTO `tbkategori` (`idkategori`, `nama_kategori`) VALUES
('K002', 'Maritim atau Bahari'),
('K003', 'Cagar Alam'),
('K004', 'Kuliner'),
('K005', 'Pertanian dan Agrowisata'),
('K001', 'Budaya');

-- --------------------------------------------------------

--
-- Table structure for table `tbpaket`
--

CREATE TABLE IF NOT EXISTS `tbpaket` (
  `idpaket` varchar(10) NOT NULL,
  `nama_paket` varchar(20) NOT NULL,
  `harga` int(20) NOT NULL,
  `tayang` varchar(20) NOT NULL,
  `galery` int(5) NOT NULL,
  PRIMARY KEY  (`idpaket`)
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
  `idpengajuan` int(30) NOT NULL auto_increment,
  `iduser` int(10) NOT NULL,
  `nama_wisata` varchar(100) NOT NULL,
  `idkategori` varchar(10) NOT NULL,
  `alamat_wisata` text NOT NULL,
  `foto` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `status` varchar(20) NOT NULL default 'Pending',
  `keterangan` varchar(100) NOT NULL,
  `idpaket` varchar(5) NOT NULL,
  `waktu_pengajuan` varchar(20) NOT NULL default '-',
  `waktu_penerimaan` varchar(20) NOT NULL default '-',
  `rating` int(10) NOT NULL,
  PRIMARY KEY  (`idpengajuan`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10000041 ;

--
-- Dumping data for table `tbpengajuan`
--

INSERT INTO `tbpengajuan` (`idpengajuan`, `iduser`, `nama_wisata`, `idkategori`, `alamat_wisata`, `foto`, `deskripsi`, `status`, `keterangan`, `idpaket`, `waktu_pengajuan`, `waktu_penerimaan`, `rating`) VALUES
(10000023, 10020, 'Curug Bibijilan', 'K002', 'Nyalindung Kabupaten Sukabumi', '613674Curug-Cicurug-Tempat-Wisata-di-Sukabumi.jpg', 'Air Terjun Bibijilan berada di kawasan wisata Buni Ayu dan memiliki ketinggian sekitar 100 m dengan airnya yang dingin dan sejuk berwarna hijau tosca meluncur dari bebatuan kapur.  Air terjun ini bertingkat-tingkat dan setiap tingkatannya dapat didaki hingga puncaknya. ', 'Aktif', '', 'P002', '2014-12-20 | 07:37:1', '2014-12-27 | 12:01:2', 0),
(10000033, 10027, 'Curug Cikondang', 'K001', 'Sukabumi Selatan teuing mana', '426309aItp15XTT5.jpg', 'Curug Cikondang ini sangat indah, apalagi kalo datang sama pacar', 'Pending', 'acc pengajuan ini', 'P002', '2014-12-20 | 12:46:0', '-', 0),
(10000036, 10020, 'Riam Jeram', 'K002', 'Warung Kiara', '737917img_20111215091149_4ee9576585800.jpg', 'Anda Suka Olah Raga Adrenalin?', 'Aktif', '', 'P002', '2014-12-20 | 08:26:1', '2015-01-10 | 03:32:4', 0),
(10000037, 10020, 'Goa Angker', 'K003', 'Tempat Angker', '482844adventure_buniayu.jpg', 'Wisata bagi yang suka horror :D', 'Aktif', '', 'P002', '2014-12-20 | 08:26:5', '2015-01-10 | 03:32:5', 0),
(10000038, 10020, 'Pelabuhan Ratu', 'K004', '', '45041922399cf8623aecb969d50ec32f760865_pelabuhan-ratu.jpg', '', 'Approve', 'Validate', 'P002', '2014-12-20 | 08:27:1', '-', 0),
(10000039, 10020, 'Cibangban', 'K002', '', '736788Kota pelabuhan ratu.JPG', '', 'Pending', '', 'P003', '2014-12-20 | 08:27:5', '-', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbuser`
--

CREATE TABLE IF NOT EXISTS `tbuser` (
  `iduser` int(10) NOT NULL auto_increment,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `umur` varchar(20) NOT NULL,
  `jk` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `nope` varchar(16) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `level` varchar(10) NOT NULL default '3',
  PRIMARY KEY  (`iduser`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10031 ;

--
-- Dumping data for table `tbuser`
--

INSERT INTO `tbuser` (`iduser`, `username`, `password`, `nama_user`, `umur`, `jk`, `alamat`, `email`, `nope`, `foto`, `level`) VALUES
(10001, 'admin', 'admin', 'Admin', '', '', '', '', '', '646615hd_wallpaper_6552.jpg', '1'),
(10002, 'auditor', 'auditor', 'Dinas', '45', 'Laki-laki', 'Sukabumi', 'test@email.com', '4', '130859Pusing Pengen Nikah.jpg', '2'),
(10003, 'user', 'user', 'test', '', '', '', '', '', '', '3'),
(10027, 'abah', '12345', 'Abah Fikri', '23', 'Laki-laki', 'Sukabumi', 'abah@yahoo.com', '089', '353014Screenshot from 2014-12-16 01:23:35.png', '3'),
(10021, 'steward', '12345', 'Cristen Steward', '24', 'Perempuan', 'Paris - UK', 'csteward@gmail.com', '0857-1-1-1', '534124hd_wallpaper_6552.jpg', '3'),
(10020, 'ibrahim', 'ibrahim', 'Aim Ibrahim', '23', 'Laki-laki', 'cimangkok deukeut cianyur', 'ibrakadabra@gmail.com', '0857', '593614aim.jpg', '3');
