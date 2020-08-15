-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2020 at 05:33 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clgmg`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblstudent`
--

CREATE TABLE `tblstudent` (
  `id` int(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `rollno` int(100) NOT NULL,
  `sem` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblstudent`
--

INSERT INTO `tblstudent` (`id`, `email`, `password`, `name`, `fname`, `branch`, `rollno`, `sem`, `gender`, `dob`) VALUES
(1, 'vinod@gmail.com', '1234', 'VINOD VERMA', 'RAMKISHAN VERMA', 'EC', 100, 'FIRST', 'MALE', '26/11/1998'),
(2, 'reena@gmail.com', '4534', 'REENA GUPTA', 'RAM GUPTA', 'CS', 102, 'SECOND', 'FEMALE', '23/07/1996'),
(3, 'ashi@gmail.com', 'ashu', 'ASHI SHARMA', 'RAMESH KUMAR SHARMA', 'EEE', 104, 'FOURTH', 'FEMALE', '12/05/1995'),
(4, 'gaurav@gmail.com', 'gourav', 'GOURAV MISHRA', 'SANTOSH MISHRA', 'MECHENICAL', 105, 'FIFTH', 'MALE', '25/04/1996'),
(5, 'vagish@gmail.com', 'vagish', 'VAGISH SHARMA', 'PAWAN KUMAR SHARMA', 'CIVIL', 106, 'SIXTH', 'MALE', '16/05/1995'),
(6, 'teena@gmail.com', 'teena', 'TEENA RATHORE', 'PRAKESH RATHORE', 'ROBOTICS', 101, 'SECOND', 'FEMALE', '03/06/1997'),
(7, 'shiv@gmail.com', 'shiv123', 'SHIV KUMAR PANDEY', 'VINOD KUMAR PANDEY', 'MBA', 107, 'SECOND', 'MALE', '12/12/1995'),
(8, 'shubham@gmail.com', 'shubh1234980', 'SHUBHAM MEENA', 'MANOJ MEENA', 'BBA', 108, 'FOURTH', 'MALE', '08/04/1995');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblstudent`
--
ALTER TABLE `tblstudent`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2020 at 07:44 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clgmg`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `id` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `email`, `password`) VALUES
('1', 'admin', '1234567890');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
