-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2020 at 03:18 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `note`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_note`
--

CREATE TABLE `data_note` (
  `Num` int(11) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `Note` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_note`
--

INSERT INTO `data_note` (`Num`, `Title`, `Note`) VALUES
(1, 'COVID-19 (Coronavirus)', 'COVID-19 spreads from person to person mainly through the respiratory route after an infected person coughs, sneezes, sings, talks or breathes. A new infection occurs when virus-containing particles exhaled by an infected person, either respiratory droplets or aerosols, get into the mouth, nose, or eyes of other people who are in close contact with the infected person.[31][32]  The closer people interact, and the longer they interact, the more likely they are to transmit COVID-19. Closer distances can involve larger droplets (which fall to the ground) and aerosols, whereas longer distances only involve aerosols. The larger droplets may also evaporate into the aerosols (known as droplet nuclei). The relative importance of the larger droplets and the aerosols is not clear as of November 2020. Airborne transmission is able to particularly occur indoors, in high risk locations, such as in restaurants, choirs, gyms, nightclubs, offices, and religious venues, often when they are crowded or less ventilated. It also occurs in healthcare settings, often when aerosol-generating medical procedures are performed on COVID-19 patients.'),
(2, 'Assignment CAT201', 'Finish note web development'),
(3, 'Thing to download', 'Java jdk, phpstrom, ubuntu, mysql.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_note`
--
ALTER TABLE `data_note`
  ADD PRIMARY KEY (`Num`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
