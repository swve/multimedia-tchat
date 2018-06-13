-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2018 at 11:01 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tchat`
--

-- --------------------------------------------------------

--
-- Table structure for table `tchatv2`
--

CREATE TABLE `tchatv2` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(55) NOT NULL,
  `message` text NOT NULL,
  `perso` varchar(55) NOT NULL,
  `bubble` varchar(55) NOT NULL,
  `power` varchar(55) NOT NULL,
  `likes` varchar(55) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tchatv2`
--

INSERT INTO `tchatv2` (`id`, `pseudo`, `message`, `perso`, `bubble`, `power`, `likes`, `date`) VALUES
(117, 'Bruce Wayne', 'Bienvenue Ã  tous je suis Batman ! :star:', 'batman', 'green', '', '5', '2018-05-30 18:42:39'),
(118, 'Spongebob', 'Salut batman tu veut un petit crabe croustillant ? :funny:', 'bob', 'white', '', '18', '2018-05-30 18:44:22'),
(120, 'Conan', 'Moi aussi j\'en veut un stp pour m\'aider Ã  trouver l\'organisation des hommes en noir !!!! ', 'conan', 'pink', 'slow', '6', '2018-05-30 18:47:46'),
(121, 'Erlich', 'Salut Ã  tous moi je suis dÃ©v je dÃ©veloppe des robots ;) :robot:', 'erlich', 'white', '', '7', '2018-05-30 18:51:31'),
(122, 'ElProf', 'Attention la police entre dans le batimenntttt !!!  #CasaDePapel', 'prof', 'white', 'opacity', '0', '2018-05-30 18:52:38'),
(123, 'Le professeur', 'Salut tout le monde ! :funny:', 'prof', 'green', '', '6', '2018-06-05 09:48:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tchatv2`
--
ALTER TABLE `tchatv2`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tchatv2`
--
ALTER TABLE `tchatv2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
