-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 29, 2022 at 06:49 AM
-- Server version: 5.7.33
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id_book` int(11) NOT NULL,
  `author` varchar(50) NOT NULL,
  `year` year(4) NOT NULL,
  `title` varchar(225) NOT NULL,
  `city` varchar(50) NOT NULL,
  `publiser` varchar(50) NOT NULL,
  `cover` varchar(50) NOT NULL,
  `sinopsis` varchar(50) NOT NULL,
  `stock` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `id` int(11) NOT NULL,
  `nama_kelas` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`id`, `nama_kelas`) VALUES
(1, '10 MM');

-- --------------------------------------------------------

--
-- Table structure for table `loan`
--

CREATE TABLE `loan` (
  `id_loan` int(11) NOT NULL,
  `id_student` int(11) NOT NULL,
  `id_officer` int(11) NOT NULL,
  `date_loan` date NOT NULL,
  `date_retrun` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `loan_detail`
--

CREATE TABLE `loan_detail` (
  `id_detail_loan` int(11) NOT NULL,
  `id_book` int(11) NOT NULL,
  `id_loan` int(11) NOT NULL,
  `kuantitas` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `officer`
--

CREATE TABLE `officer` (
  `nip` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `gander` enum('L','P') DEFAULT NULL,
  `addres` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `retrun`
--

CREATE TABLE `retrun` (
  `id_retrun` int(11) NOT NULL,
  `id_loan` int(11) DEFAULT NULL,
  `date_loan` int(11) DEFAULT NULL,
  `fine` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `retrun_detail`
--

CREATE TABLE `retrun_detail` (
  `id_retrunDetail` int(11) NOT NULL,
  `id_retrun` int(11) NOT NULL,
  `vailable` int(11) NOT NULL,
  `hilang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `nis` int(2) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `id_kelas` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`nis`, `nama`, `jenis_kelamin`, `alamat`, `id_kelas`) VALUES
(1997877, 'Rifqi', 'L', 'Malang', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id_book`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loan`
--
ALTER TABLE `loan`
  ADD PRIMARY KEY (`id_loan`),
  ADD UNIQUE KEY `id_student` (`id_student`,`id_officer`),
  ADD KEY `id_officer` (`id_officer`);

--
-- Indexes for table `loan_detail`
--
ALTER TABLE `loan_detail`
  ADD PRIMARY KEY (`id_detail_loan`),
  ADD UNIQUE KEY `id_book` (`id_book`,`id_loan`),
  ADD KEY `id_loan` (`id_loan`);

--
-- Indexes for table `officer`
--
ALTER TABLE `officer`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `retrun`
--
ALTER TABLE `retrun`
  ADD PRIMARY KEY (`id_retrun`),
  ADD UNIQUE KEY `id_loan` (`id_loan`);

--
-- Indexes for table `retrun_detail`
--
ALTER TABLE `retrun_detail`
  ADD PRIMARY KEY (`id_retrunDetail`),
  ADD UNIQUE KEY `id_retrun` (`id_retrun`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`nis`),
  ADD UNIQUE KEY `id_kelas` (`id_kelas`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id_book` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `loan`
--
ALTER TABLE `loan`
  MODIFY `id_loan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `loan_detail`
--
ALTER TABLE `loan_detail`
  MODIFY `id_detail_loan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `officer`
--
ALTER TABLE `officer`
  MODIFY `nip` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `retrun`
--
ALTER TABLE `retrun`
  MODIFY `id_retrun` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `retrun_detail`
--
ALTER TABLE `retrun_detail`
  MODIFY `id_retrunDetail` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `loan`
--
ALTER TABLE `loan`
  ADD CONSTRAINT `loan_ibfk_1` FOREIGN KEY (`id_student`) REFERENCES `student` (`nis`),
  ADD CONSTRAINT `loan_ibfk_2` FOREIGN KEY (`id_officer`) REFERENCES `officer` (`nip`);

--
-- Constraints for table `loan_detail`
--
ALTER TABLE `loan_detail`
  ADD CONSTRAINT `loan_detail_ibfk_1` FOREIGN KEY (`id_book`) REFERENCES `book` (`id_book`),
  ADD CONSTRAINT `loan_detail_ibfk_2` FOREIGN KEY (`id_loan`) REFERENCES `loan` (`id_loan`);

--
-- Constraints for table `retrun`
--
ALTER TABLE `retrun`
  ADD CONSTRAINT `retrun_ibfk_1` FOREIGN KEY (`id_loan`) REFERENCES `loan` (`id_loan`);

--
-- Constraints for table `retrun_detail`
--
ALTER TABLE `retrun_detail`
  ADD CONSTRAINT `retrun_detail_ibfk_1` FOREIGN KEY (`id_retrun`) REFERENCES `retrun` (`id_retrun`);

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`id_kelas`) REFERENCES `class` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
