-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2024 at 11:41 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adr`
--

-- --------------------------------------------------------

--
-- Table structure for table `main`
--

CREATE TABLE `main` (
  `id` int(11) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `date_de_naissance` text NOT NULL,
  `lieu_de_naissance` text NOT NULL,
  `matricule` text NOT NULL,
  `filiere` varchar(100) NOT NULL,
  `date_de_soutenance` text NOT NULL,
  `moyenne` float NOT NULL,
  `date_du_jour` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `main`
--

INSERT INTO `main` (`id`, `prenom`, `nom`, `date_de_naissance`, `lieu_de_naissance`, `matricule`, `filiere`, `date_de_soutenance`, `moyenne`, `date_du_jour`) VALUES
(2, 'Nansy', 'Vital', '2024-02-17', 'Kelo', 'CBS/2002/CFDB', 'GRH', '2024-02-16', 14.12, '2024-02-21'),
(3, 'Nansy', 'Vital', '2024-02-17', 'Kelo', 'CBS/2002/CFDB', 'GRH', '2024-02-16', 14.12, '2024-02-21'),
(4, 'Nansy', 'Vital', '2024-02-17', 'Kelo', 'CBS/2002/CFDB', 'GRH', '2024-02-16', 14.12, '2024-02-21'),
(5, 'Nansy', 'Vital', '2024-02-17', 'Kelo', 'CBS/2002/CFDB', 'GRH', '2024-02-16', 14.12, '2024-02-21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `main`
--
ALTER TABLE `main`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `main`
--
ALTER TABLE `main`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
