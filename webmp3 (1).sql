-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2019 at 07:35 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webmp3`
--

-- --------------------------------------------------------

--
-- Table structure for table `musik`
--

CREATE TABLE `musik` (
  `id_musik` int(11) NOT NULL,
  `judul` varchar(30) NOT NULL,
  `penyayi` varchar(30) NOT NULL,
  `audio` varchar(40) NOT NULL,
  `gambar` varchar(40) NOT NULL,
  `album` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `musik`
--

INSERT INTO `musik` (`id_musik`, `judul`, `penyayi`, `audio`, `gambar`, `album`) VALUES
(1, 'cinta luar biasa', 'andmesh kamaleang', 'clb', 'andmesh', 'single album'),
(2, 'senorita', 'shawn mendez & camilla cabelo', 'senorita', 'senorita', 'take it easy'),
(3, 'mundur alon alon', 'ilux official', 'ilux', 'mundur', 'megono'),
(4, 'girl like you', 'maroon 5', 'maron', 'maron', 'sugar'),
(5, 'faded', 'alan walker', 'fade', 'faded', 'faded'),
(6, 'on my way', 'alan walker', 'onmyway', 'myway', 'faded'),
(7, 'a whole new world', 'zayn malik', 'aladin', 'aladin', 'soundtrack alladin'),
(8, 'goyang ngopi', 'reyna morena', 'goyang ngopi', 'goyang', 'dangdut undercover'),
(9, 'iam saying (official)', 'lee hong ki', 'lee', 'lee', 'korewa nandeska'),
(10, 'one last breath', 'creed', 'onelas', 'one', 'death note'),
(11, 'jangkrik ngakak', 'jangkrik', 'tikus', 'jangkrik', 'jangkrik boss'),
(12, 'best friends forever', 'trilibby', 'friend', 'friend', 'official music'),
(13, 'attention', 'charlie puth', 'attention', 'attention', 'official music'),
(14, 'side to side', 'ariana grande', 'ariana', 'ariana', 'dangerous'),
(15, 'bad blod', 'taylor swift', 'taylor', 'taylor', 'VEVO'),
(16, 'dear god', 'avenged7X', 'avenged', 'avenged', 'death'),
(17, 'hero', 'mariah carey', 'friend', 'carey', 'VEVO'),
(18, 'dark horse', 'katty perry', 'ariana', 'katty', 'VEVO'),
(19, 'darkside', 'alan walker', 'onmyway', 'darkside', 'off'),
(20, 'perfect', 'ed sheeran', 'friend', 'perfect', 'perfext'),
(21, 'shape of you', 'ed sheeran', 'onelas', 'shape', 'divide'),
(22, 'so am i', 'ava', 'ariana', 'ava', 'VEVO'),
(23, 'closer', 'chainsmokers', 'senorita', 'closer', 'zombie'),
(24, 'let me down', 'chainsmokers', 'lee', 'dont', 'zombie'),
(25, 'one time', 'justin bieber', 'senorita', 'justin', 'vevo'),
(26, 'harusnya aku', 'armada', 'clb', 'armada', 'cinta'),
(27, 'so far away', 'avenged7X', 'avenged', 'so', 'VEVO');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `email`) VALUES
(17, 'firman', '74bfebec67d1a87b161e5cbcf6f72a4a', 'firman@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `musik`
--
ALTER TABLE `musik`
  ADD PRIMARY KEY (`id_musik`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `musik`
--
ALTER TABLE `musik`
  MODIFY `id_musik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
