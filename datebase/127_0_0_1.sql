-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2022 at 11:55 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `turbo_trackkerz`
--
CREATE DATABASE IF NOT EXISTS `turbo_trackkerz` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `turbo_trackkerz`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `name`, `email`, `password`) VALUES
(1, 'parvez', 'parvejjindani005@gmail.com', 'memon4245a'),
(2, 'meet', 'wifihacker96@gmail.com', 'meetjadav1996');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `b_id` int(5) NOT NULL,
  `u_id` int(5) NOT NULL,
  `p_id` int(5) NOT NULL,
  `s_id` int(5) NOT NULL,
  `book_date` date NOT NULL,
  `advance_amount` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`b_id`, `u_id`, `p_id`, `s_id`, `book_date`, `advance_amount`) VALUES
(5, 65, 5, 5, '2022-07-19', 5),
(6, 1, 1, 1, '2022-08-13', 2500),
(7, 1, 1, 1, '2022-08-13', 2500);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `c_id` int(5) NOT NULL,
  `c_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`c_id`, `c_name`) VALUES
(1, 'Hiking'),
(2, 'Trekking'),
(3, 'Camping'),
(4, 'Bicycle-Adventure'),
(5, 'Bike-Adventure');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `g_id` int(5) NOT NULL,
  `title` varchar(50) NOT NULL,
  `file` varchar(50) NOT NULL,
  `c_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `p_id` int(5) NOT NULL,
  `title` varchar(50) NOT NULL,
  `c_id` int(5) NOT NULL,
  `price` int(50) NOT NULL,
  `detail` mediumtext NOT NULL,
  `photo` varchar(50) NOT NULL,
  `pdf` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`p_id`, `title`, `c_id`, `price`, `detail`, `photo`, `pdf`) VALUES
(1, 'Saputara', 1, 4999, 'Days:-3Days-2Nights Age Group:-12 to 40 Years \" includes travel , ex-ahmedabad ,group accomodation , food-veg & jain , entry fees , guide \"', 'package/saputara.jpg', ''),
(2, 'poloforest', 1, 5999, '2Days-3Nights \r\nAge Group:-12-40\r\n\"includes travel , Ex-Ahmedabad ,\r\nGroup Accomodation ,Food , Entry Fees ,Guide,\r\nFood-Veg & Jain \"', 'polo-forest.jpg', ''),
(3, 'Dzukou Valley', 1, 13999, '7Days-6Nights , 22km  , Age Group:- 15-35, \"Includes Travel,Ex- Ahmedabad , Group Accomodation , Food , Entry Fees ,Guide Food-Veg&Jain\"', 'dzukou-valley.jpg', ''),
(4, 'Double Decker Rout Bridge', 1, 5999, '2Days-1Nights, Age Group:- 15-35, \"Includes Travel,Ex- Ahmedabad , Group Accomodation , Food , Entry Fees ,Guide Food-Veg&Jain\"		', 'double decker root bridge.jpg', ''),
(5, 'sethan valley', 1, 9999, '6Days-5Nights, Age Group:- 15-35, \"Includes Travel,Ex- Ahmedabad , Group Accomodation , Food , Entry Fees ,Guide Food-Veg&Jain\"', 'sethan-snowfall.jpg', ''),
(6, 'Manali', 2, 17499, '8Days-9Nights, Age Group:- 15-35, \"Includes Travel,Ex- Ahmedabad , Group Accomodation , Food , Entry Fees ,Guide Food-Veg&Jain\"', 'manali.jpg', ''),
(7, 'Mount Abu', 2, 5499, '5Days-4Nights Age Group:-15-35 \"includes travel , Ex-Ahmedabad , Group Accomodation ,Food , Entry Fees ,Guide, Food-Veg & Jain \"	', 'mount abu.jpg', ''),
(8, 'munnar', 2, 6999, '4Days-3Nights Age Group:-18-45 \"includes travel , Ex-Ahmedabad , Group Accomodation ,Food , Entry Fees ,Guide, Food-Veg & Jain \"', 'munnar.jpg', ''),
(9, 'wei sawdong falls', 2, 10999, '8days-9Nights, Age Group:- 15-35, \"Includes Travel,Ex- Ahmedabad , Group Accomodation , Food , Entry Fees ,Guide Food-Veg&Jain\"		', 'wei-sawdong-falls.jpg', ''),
(10, 'rishikesh', 2, 11999, '5days 6Nights , Age Group:- 15-35, \"Includes Travel,Ex- Ahmedabad , Group Accomodation , Food , Entry Fees ,Guide Food-Veg&Jain\"		', 'rishikesh.jpg', ''),
(11, 'orsang camp', 3, 1999, '2Days-1Night Age Group:-10-40 \"includes travel , Ex-Ahmedabad , Group Accomodation ,Food , Entry Fees ,Guide, Food-Veg & Jain \"', 'orsang-camp.jpg', ''),
(12, 'Mahabaleshwar Camp', 3, 13599, '5Days-6Nights Age Group:-12-40 \"includes travel , Ex-Ahmedabad , Group Accomodation ,Food , Entry Fees ,Guide, Food-Veg & Jain \"', 'mahabaleshwar.jpg', ''),
(13, 'pavna lake camping', 3, 6999, '3days-4Nights Age Group:-15-35 , 970km \"includes travel , Ex-Ahmedabad , Group Accomodation ,Food , Permit ,Guide, Food-Veg & Jain ,Bike ,Fuel,Tent\"		', 'pawana lake.jpg', ''),
(14, 'sam sand dunes camping', 3, 15499, '4Days5nights Age Group:-20-30 , 970km \"includes travel , Ex-Ahmedabad , Group Accomodation ,Food , Permit ,Guide, Food-Veg & Jain ,Bike ,Fuel,Tent\"', 'sam-sand-dunes-desert.jpg', ''),
(15, 'mussoorie ', 3, 19990, '8days-7Nights Age Group:-20-30 , 970km \"includes travel , Ex-Ahmedabad , Group Accomodation ,Food , Permit ,Guide, Food-Veg & Jain ,Bike ,Fuel,Tent\"', 'Massourie.jpg', ''),
(16, 'River Front Trails', 4, 1299, 'Half Day Age Group:-12-40 \"includes travel , Bicycle , Ex-Ahmedabad ,Break Fast , Entry Fees ,Guide, Food-Veg & Jain \"		', 'riverfront.jpg', ''),
(17, 'Pavagadh Trails', 4, 3999, 'Half Day , 9-10 km , \"Includes Travel , Ex - Ahmedabad , Bicycle , Food , Accomodation , Entry Fees ,Guide (On Weekends Only)	', 'pavagadh.jpg', ''),
(18, 'Sikkim Trails', 4, 61599, '9-Days ,  \"Includes Travel , Ex - Ahmedabad , Bicycle , Food veg & jain , group Accomodation , guide, Entry Fees ,Guide ', 'sikkim.jpg', ''),
(19, 'Nandi Hills Trails', 4, 2999, '1Day Age Group:-10-40 ,\"includes travel , Ex-Ahmedabad , Group Accomodation ,Food , Permit ,Guide, Food-Veg & Jain ,Bicycle\"', 'nandihills.jpg', ''),
(20, 'Sattal Trails', 4, 7499, '3Days-2Nights Age Group:-15-38 ,\"includes travel , Ex-Ahmedabad , Group Accomodation ,Food ,Guide, Food-Veg & Jain ,Bicycle\"', 'sattal.jpg', ''),
(21, 'Delhi-Ladakh Bike Trip', 5, 50000, '15Days-14Nights Age Group:-20-30 , 970km \"includes travel , Ex-Ahmedabad , Group Accomodation ,Food , Permit ,Guide, Food-Veg & Jain ,Bike ,Fuel,Tent\"', 'delhi-ladakh.jpg', ''),
(22, 'Ahmedabad-Mount Abu Bike Trip', 5, 28999, '5Days-4Nights Age Group:-20-30 ,\"includes travel , Ex-Ahmedabad , Group Accomodation ,Food , Entry Fees ,Guide, Food-Veg & Jain ,Bike ,Fuel\"', 'mountabu.jpg', ''),
(23, 'Shrinagar-Ladakh Bike Trip', 5, 25999, '6Days-5Nights Age Group:-20-30 ,\"includes travel , Ex-Ahmedabad , Group Accomodation ,Food , Entry Fees ,Guide, Food-Veg & Jain ,Bike ,Fuel\"', 'shrinagar-ladakh.jpg', ''),
(24, 'Leh-Khardungla Bike Trip', 5, 19999, '5Days-4Nights Age Group:-20-30 ,\"includes travel , Ex-Ahmedabad , Group Accomodation ,Food , Permit ,Guide, Food-Veg & Jain ,Bike ,Fuel,Tent\"', 'leh-khardungla.jpg', ''),
(25, 'Shimla Mountain Bike Trip', 5, 21999, '3Days-2Nights Age Group:-20-30 ,\"includes travel , Ex-Ahmedabad , Group Accomodation ,Food , Permit ,Guide, Food-Veg & Jain ,Bike ,Fuel,Tent\"', 'shimla.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `s_id` int(5) NOT NULL,
  `p_id` int(5) NOT NULL,
  `date` date NOT NULL,
  `price` int(10) NOT NULL,
  `capacity` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`s_id`, `p_id`, `date`, `price`, `capacity`) VALUES
(1, 1, '2022-08-15', 5000, 50),
(2, 2, '2022-10-15', 17500, 50),
(3, 2, '2022-01-17', 5500, 50),
(4, 3, '2022-09-12', 1500, 50),
(5, 3, '2022-10-18', 13500, 50),
(6, 4, '2022-11-11', 1200, 20),
(7, 4, '2022-08-31', 4000, 20),
(8, 5, '2022-01-14', 50000, 15);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `u_id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` mediumtext NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `contact` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `name`, `address`, `email`, `password`, `city`, `contact`) VALUES
(1, 'Hetal Gadhvi', '51,Mill Road Old Haveli ,\r\nNear School No 15,\r\nSurendranagar', 'gadhvihetal231@gmail.com', 'hetal@1234', 'Surendranagar', 915778899);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`g_id`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `b_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `c_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `g_id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `p_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `s_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `u_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
