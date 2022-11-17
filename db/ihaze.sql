-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 10, 2022 at 11:47 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ihaze`
--

-- --------------------------------------------------------

--
-- Table structure for table `atmospheric`
--

CREATE TABLE `atmospheric` (
  `Id` int(10) NOT NULL,
  `Atmospheric_Temp(cer)` int(10) NOT NULL,
  `Atmospheric_Hum(%)` int(10) NOT NULL,
  `Serial_No_Dev` varchar(20) NOT NULL,
  `Time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `atmospheric`
--

INSERT INTO `atmospheric` (`Id`, `Atmospheric_Temp(cer)`, `Atmospheric_Hum(%)`, `Serial_No_Dev`, `Time`) VALUES
(1, 53, 53, '23', '2022-11-07 06:51:31'),
(2, 77, 89898, 'DFY', '2022-11-07 06:56:09'),
(3, 53, 53, 'DFY', '2022-11-07 07:02:41'),
(4, 77, 89898, '23', '2022-11-07 07:07:41'),
(5, 99, 77, 'hk', '2022-11-07 07:10:33'),
(6, 99, 53, '23', '2022-11-07 07:16:30');

-- --------------------------------------------------------

--
-- Table structure for table `fish_temperature`
--

CREATE TABLE `fish_temperature` (
  `Id` int(10) NOT NULL,
  `Fish_Temperature` varchar(10) NOT NULL,
  `Fish_Humidity` varchar(10) NOT NULL,
  `Serial_temp_device` varchar(20) NOT NULL,
  `Time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fish_temperature`
--

INSERT INTO `fish_temperature` (`Id`, `Fish_Temperature`, `Fish_Humidity`, `Serial_temp_device`, `Time`) VALUES
(1, '23', '42', '42', '2022-11-07 07:16:29'),
(2, '545', '5', 'jlb', '2022-11-07 10:05:49');

-- --------------------------------------------------------

--
-- Table structure for table `pond_temperature`
--

CREATE TABLE `pond_temperature` (
  `Id` int(10) NOT NULL,
  `Pond_Temperature(cer)` int(10) NOT NULL,
  `Pond_Humidity(%)` int(10) NOT NULL,
  `Serial_No_dev` varchar(20) NOT NULL,
  `Time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pond_temperature`
--

INSERT INTO `pond_temperature` (`Id`, `Pond_Temperature(cer)`, `Pond_Humidity(%)`, `Serial_No_dev`, `Time`) VALUES
(1, 23, 42, '42', '2022-11-07 06:51:30'),
(2, 78, 87, '9', '2022-11-07 06:52:06'),
(3, 78, 87, '9', '2022-11-07 06:54:49'),
(4, 78, 87, '9', '2022-11-07 06:55:01'),
(5, 78, 87, '9', '2022-11-07 06:55:32'),
(6, 78, 42, '42', '2022-11-07 07:07:41'),
(7, 78, 87, '42', '2022-11-07 07:16:30');

-- --------------------------------------------------------

--
-- Table structure for table `tds_tub`
--

CREATE TABLE `tds_tub` (
  `Id` int(10) NOT NULL,
  `tds` int(10) NOT NULL,
  `tud` int(10) NOT NULL,
  `Serial_No_tdsdev` varchar(200) NOT NULL,
  `Serial_No_tubdev` varchar(200) NOT NULL,
  `Time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `water_level`
--

CREATE TABLE `water_level` (
  `Id` int(10) NOT NULL,
  `Pond_Water_level` int(20) NOT NULL,
  `Tank_Water_level` int(20) NOT NULL,
  `serial_pond_device` varchar(200) NOT NULL,
  `serial_tank_device` varchar(200) NOT NULL,
  `Time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `water_level`
--

INSERT INTO `water_level` (`Id`, `Pond_Water_level`, `Tank_Water_level`, `serial_pond_device`, `serial_tank_device`, `Time`) VALUES
(1, 14, 7, '645', '898', '2022-11-07 06:47:07');

-- --------------------------------------------------------

--
-- Table structure for table `weight`
--

CREATE TABLE `weight` (
  `Id` int(11) NOT NULL,
  `Weight` varchar(300) NOT NULL,
  `Serial_No_Dev` varchar(200) NOT NULL,
  `Time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `weight`
--

INSERT INTO `weight` (`Id`, `Weight`, `Serial_No_Dev`, `Time`) VALUES
(1, 'uyt', 'uyt', '2022-11-02 11:27:38'),
(2, '45', '66', '2022-11-07 06:40:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `atmospheric`
--
ALTER TABLE `atmospheric`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `fish_temperature`
--
ALTER TABLE `fish_temperature`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `pond_temperature`
--
ALTER TABLE `pond_temperature`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `water_level`
--
ALTER TABLE `water_level`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `weight`
--
ALTER TABLE `weight`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `atmospheric`
--
ALTER TABLE `atmospheric`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `fish_temperature`
--
ALTER TABLE `fish_temperature`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pond_temperature`
--
ALTER TABLE `pond_temperature`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `water_level`
--
ALTER TABLE `water_level`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `weight`
--
ALTER TABLE `weight`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
