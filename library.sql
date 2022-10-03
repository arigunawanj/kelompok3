-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2022 at 04:07 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

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

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id_book`, `author`, `year`, `title`, `city`, `publiser`, `cover`, `sinopsis`, `stock`) VALUES
(1, 'Jhon', 2011, 'Coding is Funs', 'Malang', 'Gramedia', 'cover1.png', 'lorem lorem lorem', 49),
(2, 'Merry', 2011, 'Life like larry', 'Malang', 'Gramedia', 'cover1.png', 'lorem lorem lorem', 1);

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `id_kelas` int(11) NOT NULL,
  `nama_kelas` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`id_kelas`, `nama_kelas`) VALUES
(2, '10 MM');

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

--
-- Dumping data for table `loan`
--

INSERT INTO `loan` (`id_loan`, `id_student`, `id_officer`, `date_loan`, `date_retrun`) VALUES
(498, 11, 55, '2022-10-03', '2022-10-04'),
(755, 12, 55, '2022-10-03', '2022-10-04'),
(792, 11, 55, '2022-10-03', '2022-10-04'),
(823, 11, 55, '2022-09-29', '2022-10-04'),
(903, 12, 55, '2022-10-03', '2022-10-04'),
(992, 11, 55, '2022-09-25', '2022-10-02');

-- --------------------------------------------------------

--
-- Table structure for table `loan_detail`
--

CREATE TABLE `loan_detail` (
  `id_detail_loan` int(11) NOT NULL,
  `id_book` int(11) NOT NULL,
  `id_loan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loan_detail`
--

INSERT INTO `loan_detail` (`id_detail_loan`, `id_book`, `id_loan`) VALUES
(74, 1, 823);

-- --------------------------------------------------------

--
-- Table structure for table `officer`
--

CREATE TABLE `officer` (
  `nip` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `gander` enum('L','P') DEFAULT NULL,
  `addres` varchar(11) DEFAULT NULL,
  `password` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `officer`
--

INSERT INTO `officer` (`nip`, `name`, `gander`, `addres`, `password`) VALUES
(55, 'Jhon', 'L', 'Malang', '123');

-- --------------------------------------------------------

--
-- Table structure for table `retrun`
--

CREATE TABLE `retrun` (
  `id_retrun` int(11) NOT NULL,
  `id_loan` int(11) NOT NULL,
  `date_loan` date DEFAULT NULL,
  `fine` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `retrun`
--

INSERT INTO `retrun` (`id_retrun`, `id_loan`, `date_loan`, `fine`) VALUES
(28, 755, '2022-10-03', 0),
(29, 755, '2022-10-03', 0),
(30, 792, '2022-10-03', 0),
(31, 498, '2022-10-03', 0),
(32, 992, '2022-10-03', 1000),
(33, 992, '2022-10-03', 1000),
(34, 992, '2022-10-03', 1000),
(35, 992, '2022-10-03', 1000),
(36, 992, '2022-10-03', 1000),
(37, 992, '2022-10-03', 1000),
(38, 992, '2022-10-03', 1000),
(39, 992, '2022-10-03', 1000),
(40, 903, '2022-10-03', 0);

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
  `id_kelas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`nis`, `nama`, `jenis_kelamin`, `alamat`, `id_kelas`) VALUES
(11, 'Patrick', 'L', 'Malang', 2),
(12, 'Rifqi', 'L', 'Malang', 2);

-- --------------------------------------------------------

--
-- Table structure for table `temporari`
--

CREATE TABLE `temporari` (
  `id_tmp` int(11) NOT NULL,
  `id_book` int(11) NOT NULL,
  `cover` varchar(50) NOT NULL,
  `author` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `publiser` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `loan`
--
ALTER TABLE `loan`
  ADD PRIMARY KEY (`id_loan`);

--
-- Indexes for table `loan_detail`
--
ALTER TABLE `loan_detail`
  ADD PRIMARY KEY (`id_detail_loan`),
  ADD KEY `id_book` (`id_book`,`id_loan`);

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
  ADD KEY `id_loan` (`id_loan`);

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
  ADD KEY `id_kelas` (`id_kelas`);

--
-- Indexes for table `temporari`
--
ALTER TABLE `temporari`
  ADD PRIMARY KEY (`id_tmp`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id_book` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `loan`
--
ALTER TABLE `loan`
  MODIFY `id_loan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=993;

--
-- AUTO_INCREMENT for table `loan_detail`
--
ALTER TABLE `loan_detail`
  MODIFY `id_detail_loan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `officer`
--
ALTER TABLE `officer`
  MODIFY `nip` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `retrun`
--
ALTER TABLE `retrun`
  MODIFY `id_retrun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `retrun_detail`
--
ALTER TABLE `retrun_detail`
  MODIFY `id_retrunDetail` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `temporari`
--
ALTER TABLE `temporari`
  MODIFY `id_tmp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `retrun_detail`
--
ALTER TABLE `retrun_detail`
  ADD CONSTRAINT `retrun_detail_ibfk_1` FOREIGN KEY (`id_retrun`) REFERENCES `retrun` (`id_retrun`);

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`id_kelas`) REFERENCES `class` (`id_kelas`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
