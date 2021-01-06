-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 31, 2019 at 01:21 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `LMS_FURC`
--

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE `author` (
  `a_id` int(11) NOT NULL,
  `name` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`a_id`, `name`) VALUES
(10, 'munir'),
(11, 'saleem'),
(12, 'zeeshan'),
(13, 'iqbal'),
(14, 'junaid'),
(15, 'usman');

-- --------------------------------------------------------

--
-- Table structure for table `author_book`
--

CREATE TABLE `author_book` (
  `book_id` int(11) NOT NULL,
  `a_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `author_book`
--

INSERT INTO `author_book` (`book_id`, `a_id`) VALUES
(100, 12),
(100, 13),
(101, 15),
(102, 13),
(103, 11),
(104, 13),
(105, 14),
(106, 15);

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `book_id` int(11) NOT NULL,
  `name` varchar(55) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `shelf_no` varchar(55) DEFAULT NULL,
  `staff_id` int(11) DEFAULT NULL,
  `supplier_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`book_id`, `name`, `price`, `shelf_no`, `staff_id`, `supplier_id`) VALUES
(100, 'C++ programming', 4500, '12C', 10, 10),
(101, 'java how to program', 5000, '12D', 10, 10),
(102, 'game of thrones ', 5000, '12D', 13, 12),
(103, '50 Math and Science Games for Leadership', 4500, '12D', 12, 15),
(104, 'No Easy Day by Mark Owen', 4500, '20A', 13, 15),
(105, '50 Battles That Changed the World', 5000, '20A', 14, 10),
(106, 'Leadership and Motivation', 1200, '30A', 13, 13),
(107, 'Second Afghan War ', 4500, '15A', 10, 15);

-- --------------------------------------------------------

--
-- Table structure for table `book_member`
--

CREATE TABLE `book_member` (
  `book_id` int(11) NOT NULL,
  `m_id` int(11) NOT NULL,
  `issue_date` date DEFAULT NULL,
  `return_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book_member`
--

INSERT INTO `book_member` (`book_id`, `m_id`, `issue_date`, `return_date`) VALUES
(102, 14, '2019-12-10', NULL),
(107, 10, '2019-10-31', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `m_id` int(11) NOT NULL,
  `name` varchar(55) DEFAULT NULL,
  `contact_no` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`m_id`, `name`, `contact_no`) VALUES
(10, 'ali', '03405202205'),
(11, 'ahasan', '120231024'),
(12, 'raza', '0335812459'),
(13, 'ali', '03315891724'),
(14, 'amir', '031329438531'),
(15, 'junaid khan', '032134987');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staff_id` int(11) NOT NULL,
  `name` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_id`, `name`) VALUES
(10, 'umair'),
(11, 'adnan'),
(12, 'amir'),
(13, 'khan'),
(14, 'shahid'),
(15, 'hamza '),
(16, 'abdullah');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `supplier_id` int(11) NOT NULL,
  `name` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`supplier_id`, `name`) VALUES
(10, 'khan'),
(11, 'hamza'),
(12, 'tariq'),
(13, 'saleem'),
(14, 'zubair'),
(15, 'abdullah');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `author_book`
--
ALTER TABLE `author_book`
  ADD PRIMARY KEY (`book_id`,`a_id`),
  ADD KEY `a_id` (`a_id`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`book_id`),
  ADD KEY `staff_id` (`staff_id`),
  ADD KEY `supplier_id` (`supplier_id`);

--
-- Indexes for table `book_member`
--
ALTER TABLE `book_member`
  ADD PRIMARY KEY (`book_id`,`m_id`),
  ADD KEY `m_id` (`m_id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staff_id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`supplier_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `author_book`
--
ALTER TABLE `author_book`
  ADD CONSTRAINT `author_book_ibfk_1` FOREIGN KEY (`book_id`) REFERENCES `book` (`book_id`),
  ADD CONSTRAINT `author_book_ibfk_2` FOREIGN KEY (`a_id`) REFERENCES `author` (`a_id`);

--
-- Constraints for table `book`
--
ALTER TABLE `book`
  ADD CONSTRAINT `book_ibfk_1` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`staff_id`),
  ADD CONSTRAINT `book_ibfk_2` FOREIGN KEY (`supplier_id`) REFERENCES `supplier` (`supplier_id`);

--
-- Constraints for table `book_member`
--
ALTER TABLE `book_member`
  ADD CONSTRAINT `book_member_ibfk_1` FOREIGN KEY (`book_id`) REFERENCES `book` (`book_id`),
  ADD CONSTRAINT `book_member_ibfk_2` FOREIGN KEY (`m_id`) REFERENCES `member` (`m_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
