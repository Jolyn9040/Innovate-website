-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2019 at 02:01 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `itbase`
--

-- --------------------------------------------------------

--
-- Table structure for table `tablecourse`
--

CREATE TABLE `tablecourse` (
  `courseid` int(20) NOT NULL,
  `coursename` varchar(255) NOT NULL,
  `price` decimal(12,2) NOT NULL,
  `description` varchar(255) NOT NULL,
  `courseduration` int(20) NOT NULL,
  `availableseats` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tablecourse`
--

INSERT INTO `tablecourse` (`courseid`, `coursename`, `price`, `description`, `courseduration`, `availableseats`) VALUES
(1, 'Adobe Photoshop', '499.99', 'Adobe Photoshop is an extremely powerful application that\'s used by many professional photographers and designers. You can use Photoshop for almost any kind of image editing, such as touching up photos, creating high-quality graphics, and much, much more.', 3, 10),
(2, 'Creating website with html.', '399.99', 'HTML5 is a markup language used for structure and presenting content on the World Wide Web. It is the fifth and current major version of the HTML standard.', 2, 2),
(3, 'Adobe InDesign', '299.99', 'Adobe InDesign is a desktop publishing software application produced by Adobe System. It can create used to create work such as poster, flyers, brochures, magazine, newspaper, presentation, books and eBook.', 3, 3),
(4, 'Swift Programming', '699.99', 'Swift is a powerful and intuitive programming language for macOS, IOS, watchOS and tvOS. Writing Swift code is interactive and fun, the syntax is concise yet expressive, and Swift includes modern features developers love.', 4, 3);

-- --------------------------------------------------------

--
-- Table structure for table `tableit`
--

CREATE TABLE `tableit` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `courseappliedfor` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contactnumber` int(11) NOT NULL,
  `registrationdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tableit`
--

INSERT INTO `tableit` (`id`, `name`, `courseappliedfor`, `email`, `contactnumber`, `registrationdate`) VALUES
(1, 'Jolyn', 'Swift Programming', 'jolyn@gmail.com', 87654321, '2019-02-04 08:00:00'),
(2, 'Fitri', 'Adobe Photoshop', 'fitri@hotmail.com', 12345678, '2019-02-12 08:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tablelogin`
--

CREATE TABLE `tablelogin` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tablelogin`
--

INSERT INTO `tablelogin` (`username`, `password`) VALUES
('admin', 'b93b562cd25ec6b643c966035bf2294e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tablecourse`
--
ALTER TABLE `tablecourse`
  ADD PRIMARY KEY (`courseid`);

--
-- Indexes for table `tableit`
--
ALTER TABLE `tableit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tablelogin`
--
ALTER TABLE `tablelogin`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tablecourse`
--
ALTER TABLE `tablecourse`
  MODIFY `courseid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tableit`
--
ALTER TABLE `tableit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
