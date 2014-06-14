-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2014 at 10:05 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `agus`
--

-- --------------------------------------------------------

--
-- Table structure for table `perkara`
--

CREATE TABLE IF NOT EXISTS `perkara` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nomorperkara` varchar(45) DEFAULT NULL,
  `tgldaftar` date DEFAULT NULL,
  `jenisperkara` varchar(45) DEFAULT NULL,
  `prodeo` varchar(1) DEFAULT NULL,
  `tglpmh` date DEFAULT NULL,
  `tglphs` date DEFAULT NULL,
  `namapenggugat` varchar(45) DEFAULT NULL,
  `alamatpenggugat` text,
  `namatergugat` varchar(45) DEFAULT NULL,
  `alamattergugat` text,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nomorperkara` (`nomorperkara`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `perkara`
--

INSERT INTO `perkara` (`id`, `nomorperkara`, `tgldaftar`, `jenisperkara`, `prodeo`, `tglpmh`, `tglphs`, `namapenggugat`, `alamatpenggugat`, `namatergugat`, `alamattergugat`) VALUES
(1, '145/Pdt.G/2014/PA.Plh', '2014-03-03', 'Cerai Talak', 'T', '2014-03-04', '2014-03-05', 'Dony', 'Tanah Laut', 'Rini', 'Tanah Laut'),
(2, '146/Pdt.G/2014/PA.Plh', '2014-03-03', 'Cerai Talak', 'T', '2014-03-05', '2014-03-06', 'Abu', 'Tanah Kusir', 'Ita', 'Mampang'),
(3, '148/Pdt.G/2014/PA.Plh', '2014-04-04', 'Cerai Gugat', 'Y', '2014-05-04', '2014-05-05', 'Abdel', 'Tebet', 'Sani', 'Pasar Minggu'),
(4, '149/Pdt.G/2014/PA.Plh', '2014-04-04', 'Cerai Talak', 'Y', '2014-05-04', '2014-05-07', 'Temon', 'Kampung Melayu', 'Rita', 'Klender'),
(5, '150/Pdt.G/2014/PA.Plh', '2014-04-04', 'Cerai Gugat', 'T', '2014-05-04', '2014-05-05', 'Doyok', 'Manggarai', 'Tari', 'Matraman'),
(6, '151/Pdt.G/2014/PA.Plh', '2014-04-04', 'Cerai Talak', 'T', '2014-05-04', '2014-05-06', 'Kadir', 'Cibubur', 'Jenny', 'Jatinegara'),
(7, '152/Pdt.G/2014/PA.Plh', '2014-04-04', 'Cerai Gugat', 'T', '2014-05-04', '2014-05-05', 'Abu', 'Cilangkap', 'Rany', 'Kalibata'),
(8, '153/Pdt.G/2014/PA.Plh', '2014-04-04', 'Cerai Talak', 'Y', '2014-05-04', '2014-05-10', 'Budi', 'Cililitan', 'Sari', 'Pejaten'),
(9, '154/Pdt.G/2014/PA.Plh', '2014-04-04', 'Cerai Gugat', 'Y', '2014-05-04', '2014-05-05', 'Rudi', 'Rambutan', 'Santi', 'Lenteng Agung'),
(10, '155/Pdt.G/2014/PA.Plh', '2014-04-04', 'Cerai Talak', 'Y', '2014-05-04', '2014-05-12', 'Johan', 'Cisalak', 'Sinta', 'Depok');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
