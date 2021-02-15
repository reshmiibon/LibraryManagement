-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2021 at 07:19 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `books_tbl`
--

CREATE TABLE `books_tbl` (
  `book_id` int(11) NOT NULL,
  `book_name` varchar(30) NOT NULL,
  `book_img` varchar(50) NOT NULL,
  `author` varchar(30) NOT NULL,
  `publisher` varchar(30) NOT NULL,
  `edition` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books_tbl`
--

INSERT INTO `books_tbl` (`book_id`, `book_name`, `book_img`, `author`, `publisher`, `edition`, `qty`) VALUES
(1, 'Java in 25 Hours', '1_java1.jpg', 'Reshmii', 'Tat McGraw Hill', 3, 12),
(2, 'Java Expert', '2_java2.jpg', 'Muthu', 'Tat McGraw Hill', 2, 10),
(3, 'Java Bible', '3_java3.jpg', 'Ajith', 'Brino Pubs', 3, 13),
(4, 'Java for Beginer', '4_java4.jpg', 'Bala', 'Eagle Pubs', 2, 10),
(5, 'Java Advanced', '5_java5.jpg', 'Sangavi', 'Brino Pubs', 1, 14),
(6, 'PHP in 1 day', '6_php2.jpg', 'Ajith', 'Tat McGraw Hill', 2, 7),
(7, 'PHP in 24 days', '7_php1.jpg', 'Muthu', 'Eagle Pubs', 1, 5),
(8, 'PHP Mastering', '8_php3.jpg', 'Bala', 'Brino Pubs', 3, 8),
(9, 'Learn PHP', '9_php4.jpg', 'Reshmii', 'Eagle Pubs', 1, 12),
(10, 'Python Programming', '10_python1.jpg', 'Bala', 'Tat McGraw Hill', 1, 12),
(11, 'Python Game Programming', '11_python3.jpg', 'Ajith', 'Tat McGraw Hill', 3, 10),
(12, 'Python Coding', '12_python2.jpg', 'Sangavi', 'Tat McGraw Hill', 2, 5);

-- --------------------------------------------------------

--
-- Table structure for table `borrow_tbl`
--

CREATE TABLE `borrow_tbl` (
  `br_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `stud_id` int(11) NOT NULL,
  `brw_date` date NOT NULL,
  `ret_date` date NOT NULL,
  `status` varchar(15) NOT NULL DEFAULT 'Borrowed'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `borrow_tbl`
--

INSERT INTO `borrow_tbl` (`br_id`, `book_id`, `stud_id`, `brw_date`, `ret_date`, `status`) VALUES
(1, 6, 102, '2021-02-10', '2021-02-20', 'Borrowed'),
(2, 2, 102, '2021-02-12', '2021-02-22', 'Returned'),
(3, 12, 106, '2021-02-06', '2021-02-16', 'Borrowed'),
(4, 8, 104, '2021-02-09', '2021-02-19', 'Borrowed'),
(5, 9, 103, '2021-02-10', '2021-02-20', 'Returned');

-- --------------------------------------------------------

--
-- Table structure for table `return_tbl`
--

CREATE TABLE `return_tbl` (
  `ret_id` int(11) NOT NULL,
  `br_id` int(11) NOT NULL,
  `ret_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `return_tbl`
--

INSERT INTO `return_tbl` (`ret_id`, `br_id`, `ret_date`) VALUES
(1, 2, '2021-02-09 20:11:09'),
(2, 2, '2021-02-10 21:38:36'),
(3, 5, '2021-02-10 22:34:25');

-- --------------------------------------------------------

--
-- Table structure for table `stud_tbl`
--

CREATE TABLE `stud_tbl` (
  `stud_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `dept` varchar(20) NOT NULL,
  `phone` varchar(16) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stud_tbl`
--

INSERT INTO `stud_tbl` (`stud_id`, `name`, `dept`, `phone`, `email`, `username`, `password`) VALUES
(101, 'Ajith', 'Maths', '9898796986', 'ajith@gmail.com', 'ajith', 'ajith'),
(102, 'Muthu', 'CSE', '80778768898', 'muthu@gmail.com', 'muthu', 'muthu'),
(103, 'Bala', 'CSE', '9698987999', 'bala@gmail.com', 'bala', 'bala'),
(104, 'Reshmii', 'ECE', '98743746788', 'reshmii@gmail.com', 'reshmii', 'reshmii'),
(106, 'Kamali', 'CSE', '98458774778', 'kamali@gmail.com', 'kamali', 'kamali');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books_tbl`
--
ALTER TABLE `books_tbl`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `borrow_tbl`
--
ALTER TABLE `borrow_tbl`
  ADD PRIMARY KEY (`br_id`);

--
-- Indexes for table `return_tbl`
--
ALTER TABLE `return_tbl`
  ADD PRIMARY KEY (`ret_id`);

--
-- Indexes for table `stud_tbl`
--
ALTER TABLE `stud_tbl`
  ADD PRIMARY KEY (`stud_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books_tbl`
--
ALTER TABLE `books_tbl`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `borrow_tbl`
--
ALTER TABLE `borrow_tbl`
  MODIFY `br_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `return_tbl`
--
ALTER TABLE `return_tbl`
  MODIFY `ret_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
