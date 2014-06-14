-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2014 at 10:06 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ma`
--

-- --------------------------------------------------------

--
-- Table structure for table `hakim`
--

CREATE TABLE IF NOT EXISTS `hakim` (
  `kodeperkara` char(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `majelis` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hakim`
--

INSERT INTO `hakim` (`kodeperkara`, `nama`, `majelis`) VALUES
('0001', 'Hakim A', 1),
('0001', 'Hakim B', 2),
('0002', 'Hakim C', 1);

-- --------------------------------------------------------

--
-- Table structure for table `panitera`
--

CREATE TABLE IF NOT EXISTS `panitera` (
  `kodeperkara` char(10) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `panitera`
--

INSERT INTO `panitera` (`kodeperkara`, `nama`) VALUES
('0001', 'Panitera A'),
('0001', 'Panitera B'),
('0002', 'Panitera C');

-- --------------------------------------------------------

--
-- Table structure for table `perkara`
--

CREATE TABLE IF NOT EXISTS `perkara` (
  `kodeperkara` char(10) NOT NULL,
  `penggugat` char(30) DEFAULT NULL,
  `tergugat` char(30) DEFAULT NULL,
  `amarputusan` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`kodeperkara`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `perkara`
--

INSERT INTO `perkara` (`kodeperkara`, `penggugat`, `tergugat`, `amarputusan`) VALUES
('0001', 'abdel', 'temon', 'di tolak'),
('0002', 'kadir', 'doyok', 'banding');

-- --------------------------------------------------------

--
-- Table structure for table `saksi`
--

CREATE TABLE IF NOT EXISTS `saksi` (
  `kodeperkara` char(10) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `saksi`
--

INSERT INTO `saksi` (`kodeperkara`, `nama`) VALUES
('0001', 'Saksi A'),
('0001', 'Saksi B'),
('0002', 'Saksi C');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
