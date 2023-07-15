-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2023 at 10:08 PM
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
-- Database: `food_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Pass` int(11) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Phone` varchar(200) NOT NULL,
  `Address` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `Email`, `Pass`, `Name`, `Phone`, `Address`) VALUES
(3, 'haldiram@gmail.com', 6890, 'Haldiram', '9425242524', '77, Kandivali East, Mumbai'),
(4, 'bikanervala@gmail.com', 10425, 'Bikanervala', '9787878787', '82, Karol Bagh, New Delhi'),
(5, 'sagar_ratna@gmail.com', 38106, 'Sagar Ratna', '9121212121', '34, Subhash Marg, Ashok Nagar, Jaipur'),
(6, 'pind_balluchi@gmail.com', 81231, 'Pind Balluchi', '8424242424', '17/20,Batala Road, Amritsar'),
(7, 'curry_leaf@gmail.com', 91427, 'Curry Leaf', '9051051051', 'Tashkent Marg, Civil Lines, Prayagraj');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `id` int(11) NOT NULL,
  `bookdetail` varchar(200) NOT NULL,
  `bookquantity` varchar(200) NOT NULL,
  `bookaudor` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`id`, `bookdetail`, `bookquantity`, `bookaudor`) VALUES
(9, 'Poha', '1kg', 'Haldiram'),
(10, 'Sambhar', '4Ltr', 'Curry Leaf'),
(11, 'Dahi', '3 Ltr', 'Curry Leaf'),
(19, 'Biryani', '1kg', 'Haldiram'),
(21, 'Paratha', '7kg', 'Bikanervala'),
(22, 'Soup', '7 Ltr', 'Sagar Ratna'),
(23, 'Rice', '10 Kg', 'Pind Balluchi'),
(24, 'Idli', '4 Kg', 'Sagar Ratna'),
(25, 'Shahi Paneer', '6 Kg', 'Pind Balluchi'),
(26, 'Dal', '8 Ltr', 'Curry Leaf');

-- --------------------------------------------------------

--
-- Table structure for table `issuebook`
--

CREATE TABLE `issuebook` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `foodname` varchar(200) NOT NULL,
  `issuedate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `issuebook`
--

INSERT INTO `issuebook` (`id`, `userid`, `foodname`, `issuedate`) VALUES
(23, 6, 'Poha', '2023-07-15'),
(26, 11, 'Dahi', '2023-07-15'),
(27, 10, 'Rice', '2023-07-15'),
(29, 8, 'Soup', '2023-07-15'),
(30, 7, 'Sambhar', '2023-07-15'),
(31, 7, 'Soup', '2023-07-15'),
(32, 7, 'Dahi', '2023-07-15'),
(33, 9, 'Shahi Paneer', '2023-07-15'),
(34, 11, 'Paratha', '2023-07-15'),
(35, 10, 'Dal', '2023-07-15'),
(36, 7, 'Poha', '2023-07-15'),
(37, 7, 'Poha', '2023-07-15'),
(38, 7, 'Dahi', '2023-07-15'),
(39, 7, 'Poha', '2023-07-15'),
(40, 7, 'Sambhar', '2023-07-15'),
(41, 7, 'Soup', '2023-07-15');

-- --------------------------------------------------------

--
-- Table structure for table `requestbook`
--

CREATE TABLE `requestbook` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `foodname` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `requestbook`
--

INSERT INTO `requestbook` (`id`, `userid`, `username`, `foodname`) VALUES
(29, 7, 'Prayas', 'Sambhar'),
(30, 7, 'Prayas', 'Dahi'),
(31, 7, 'Prayas', 'Paratha'),
(32, 7, 'Prayas', 'Biryani');

-- --------------------------------------------------------

--
-- Table structure for table `userdata`
--

CREATE TABLE `userdata` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `pass` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `type` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userdata`
--

INSERT INTO `userdata` (`id`, `email`, `pass`, `name`, `type`) VALUES
(6, 'feed_india@gmail.com', '80241', 'Feed India', 'Charity'),
(7, 'prayas@gmail.com', '74742', 'Prayas', 'Charity'),
(8, 'goonj@gmail.com', '14235', 'Goonj', 'Charity'),
(9, 'umeed@gmail.com', '60381', 'Umeed Foundation', 'Charity'),
(10, 'smile@gmail.com', '37126', 'Smile Foundation', 'Charity'),
(11, 'welfare@gmail.com', '39692', 'Children Welfare', 'Charity');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `issuebook`
--
ALTER TABLE `issuebook`
  ADD PRIMARY KEY (`id`),
  ADD KEY `test` (`userid`);

--
-- Indexes for table `requestbook`
--
ALTER TABLE `requestbook`
  ADD PRIMARY KEY (`id`),
  ADD KEY `test2` (`userid`);

--
-- Indexes for table `userdata`
--
ALTER TABLE `userdata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `issuebook`
--
ALTER TABLE `issuebook`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `requestbook`
--
ALTER TABLE `requestbook`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `userdata`
--
ALTER TABLE `userdata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `issuebook`
--
ALTER TABLE `issuebook`
  ADD CONSTRAINT `test` FOREIGN KEY (`userid`) REFERENCES `userdata` (`id`);

--
-- Constraints for table `requestbook`
--
ALTER TABLE `requestbook`
  ADD CONSTRAINT `test2` FOREIGN KEY (`userid`) REFERENCES `userdata` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
