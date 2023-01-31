-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 06, 2022 at 04:56 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `techin`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--
CREATE Database `techin`;
CREATE TABLE `admin` (
  `userID` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`userID`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(13, 'asdad', 'asdadasd'),
(14, 'kjhhh', 'ipmij'),
(16, 'asdadad', 'asdasda');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `Id` int(20) NOT NULL,
  `designID` int(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `freeTemplate`
--

CREATE TABLE `freeTemplate` (
  `designID` int(11) NOT NULL,
  `type` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `image` text NOT NULL,
  `description` text NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `freeTemplate`
--

INSERT INTO `freeTemplate` (`designID`, `type`, `price`, `image`, `description`, `text`) VALUES
(1, 'free', 0, 'images/item2.jpeg', 'Template for Business', 'A business website generally serves as a space to provide general information about your company or a direct platform for e-commerce. Whether you create a simple website that tells a little about your company or a more complex e-commerce site.'),
(2, 'free', 0, 'images/item3.jpeg', 'Template for Designers', 'This website enables the creation of a distinctive and expert online share Web designers plan, create and code internet sites and web pages, many of which combine text with sounds, pictures, graphics and video clips nd many other skills.'),
(3, 'free', 0, 'images/item1.jpeg', 'Template for create Portfolio', 'Invite people to explore your portfolio with this bright design that showcases work with a multi-column content section and integrated blog posts.'),
(4, 'free', 0, 'images/item4.jpeg', 'Template for create Website', 'This Template gives a platform or program that allows you to quickly and easily put together a website. This help you get your piece of internet real estate set up so you can start establishing your online presence, a unique .com');

-- --------------------------------------------------------

--
-- Table structure for table `orderTable`
--

CREATE TABLE `orderTable` (
  `Id` int(11) NOT NULL,
  `designId` int(11) NOT NULL,
  `type` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orderTable`
--

INSERT INTO `orderTable` (`Id`, `designId`, `type`, `price`, `image`, `email`) VALUES
(1, 1, 'paid', 15, 'images/1-1.jpeg', 'ahmedanwer0094@gmail.com'),
(2, 5, 'paid', 5, 'images/5-1.jpeg', 'ahmedanwer0094@gmail.com'),
(3, 6, 'paid', 30, 'images/6-1.jpeg', 'ahmedanwer0094@gmail.com'),
(4, 7, 'paid', 10, 'images/7-1.jpeg', 'ahmedanwer0094@gmail.com'),
(5, 8, 'paid', 25, 'images/8-1.jpeg', 'ahmedanwer0094@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `paidTemplate`
--

CREATE TABLE `paidTemplate` (
  `designID` int(11) NOT NULL,
  `type` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `image` text NOT NULL,
  `image2` varchar(100) NOT NULL,
  `image3` varchar(100) NOT NULL,
  `des` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `paidTemplate`
--

INSERT INTO `paidTemplate` (`designID`, `type`, `title`, `price`, `image`, `image2`, `image3`, `des`) VALUES
(1, 'paid', 'Car Parts Store Theme', 15, 'images/1-1.jpeg', 'images/1-2.jpeg', 'images/1-3.jpeg', 'This website enables the creation of a distinctive and expert online store to sell automobiles, car dealers, car rentals, car workshops, and other automotive products.'),
(2, 'paid', 'Handcrafts Store Theme', 10, 'images/2-1.jpeg', 'images/2-2.jpeg', 'images/2-3.jpeg', 'This website enables the creation of a distinctive and expert online store to sell handcrafts, creative items and other ornament products.'),
(3, 'paid', 'Homemade Items Store Theme', 20, 'images/3-1.jpeg', 'images/3-2.jpeg', 'images/3-3.jpeg', 'This website enables the creation of a distinctive and expert online store to sell homemade crafts, jewellery, beauty products and other fashion products too.'),
(4, 'paid', 'Food Store Theme', 15, 'images/4-1.jpeg', 'images/4-2.jpeg', 'images/4-3.jpeg', 'This website enables the creation of a distinctive and expert online store to promote designed food, travel ,lifestyle and many more of a person.'),
(5, 'paid', 'Art Gallery Store Theme', 5, 'images/5-1.jpeg', 'images/5-2.jpeg', 'images/5-3.jpeg', 'This website enables the creation of a distinctive and expert online store to display and promote arts, crafts, ornaments, and other art products that done by a person or a community.'),
(6, 'paid', 'Furniture Store Theme', 30, 'images/6-1.jpeg', 'images/6-2.jpeg', 'images/6-3.jpeg', 'This website enables the creation of a distinctive and expert online store to sell chairs, beds, cupboards, sofas and many other home and office furnitures.'),
(7, 'paid', 'Software Display Theme', 10, 'images/7-1.jpeg', 'images/7-2.jpeg', 'images/7-3.jpeg', 'This websites include learning aids to augment and enhance classroom instruction, such as games, videos, and topic-related materials. In this day and age, these websites assist in making learning enjoyable and appealing for the learner.'),
(8, 'paid', 'Portfolio Theme', 25, 'images/8-1.jpeg', 'images/8-2.jpeg', 'images/8-3.jpeg', 'This website enables the creation of a distinctive portfolio to display, share a persons ideas, creations, performs, achievements, studies and  many other activities and accomplishments .');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userID` int(11) NOT NULL,
  `email` text NOT NULL,
  `name` text NOT NULL,
  `password` text NOT NULL,
  `phone` int(10) NOT NULL,
  `pricing` text NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userID`, `email`, `name`, `password`, `phone`, `pricing`, `image`) VALUES
(1, 'ahmedanwer0094@gmail.com', 'Ahmed Anwer', 'ASDasd123', 1230981230, 'Free', 'images/bug.jpeg'),
(2, 'ashfak123@gmail.com', 'Anwer Ahmed', 'ASDasd123', 768242884, 'Free', ''),
(6, 'ahmedanwer0094354354@gmail.com', 'Ahmed Anwer', 'ghj', 766242884, 'student', ''),
(7, 'afraanwer037@gmail.com', 'Ahmed Anwer', 'ASDasd123', 1234567890, 'free', ''),
(9, 'ahmedanwer037@gmail.com', 'Ahmed', 'ASDasd123', 768242882, 'Free', 'images/a.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `freeTemplate`
--
ALTER TABLE `freeTemplate`
  ADD PRIMARY KEY (`designID`);

--
-- Indexes for table `orderTable`
--
ALTER TABLE `orderTable`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `paidTemplate`
--
ALTER TABLE `paidTemplate`
  ADD PRIMARY KEY (`designID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `Id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `freeTemplate`
--
ALTER TABLE `freeTemplate`
  MODIFY `designID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `orderTable`
--
ALTER TABLE `orderTable`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `paidTemplate`
--
ALTER TABLE `paidTemplate`
  MODIFY `designID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
