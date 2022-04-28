-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2021 at 09:24 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webseminarski`
--

-- --------------------------------------------------------

--
-- Table structure for table `film`
--

CREATE TABLE `film` (
  `id_filma` int(11) DEFAULT NULL,
  `nazivFilma` varchar(20) NOT NULL,
  `godina` varchar(4) NOT NULL,
  `zanr` varchar(20) NOT NULL,
  `grad` varchar(20) NOT NULL,
  `bioskop` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `film`
--

INSERT INTO `film` (`id_filma`, `nazivFilma`, `godina`, `zanr`, `grad`, `bioskop`) VALUES
(1, 'No time to Die', '2021', 'Akcija', 'Banja Luka', 'Palas'),
(2, 'Toma', '2021', 'Biografija', 'Prijedor', 'Kino Kozara'),
(3, 'Free Guy', '2021', 'Komedija', 'Prijedor', 'Kino Kozara'),
(4, 'Moj jutarnji smeh', '2019', 'Drama', 'Banja Luka', 'Palas'),
(5, 'Cry Macho', '2021', 'Western', 'Banja Luka', 'Palas'),
(6, 'Venom', '2018', 'Akcija', 'Banja Luka', 'Palas'),
(7, 'Dune', '2021', 'Akcija', 'Banja Luka', 'Cinestar'),
(8, 'Licorice Pizza', '2021', 'Komedija', 'Prijedor', 'Kino Kozara');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
