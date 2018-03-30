-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2018 at 05:46 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 5.6.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `products`
--

-- --------------------------------------------------------

--
-- Table structure for table `laptop`
--

CREATE TABLE `laptop` (
  `laptopID` int(15) NOT NULL,
  `image` varchar(1000) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` varchar(1500) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `brand` varchar(255) DEFAULT NULL,
  `OS` varchar(255) DEFAULT NULL,
  `Color` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laptop`
--

INSERT INTO `laptop` (`laptopID`, `image`, `name`, `description`, `price`, `brand`, `OS`, `Color`) VALUES
(1, 'images/laptop1.png', 'APPLE MacBook Air 13', '13.3 \"HD Intel Core i5-5350U (1.8 GHz) 8 GB 128 GB SSD Intel HD Graphics 6000<br>\r\n					Resolution: 1440 x 900<br> \r\n					Optical drive: No <br>\r\n					Operating system: macOS 10.12 Sierra<br>\r\n					Battery life: 12 o\'clock <br>\r\n					Form factor: Fixed screen<br>\r\n					&#10026;&#10026;&#10026;&#10026;<br>', 949, 'apple', 'mac', 'white'),
(2, 'images/laptop2.png', 'ACER Aspire 1 A114-31-C471', '14 inch WXGA Intel Celeron N3350 4 GB 64 GB eMMC Intel HD Graphics 500<br>\r\n					Resolution: 1366 x 768<br>\r\n					Optical drive: No <br>\r\n					Battery life: 9 o\'clock<br>\r\n					Form factor: Fixed screen <br>\r\n					Display diagonal: 14 inches<br>\r\n					&#10026;&#10026;&#10026;<br>', 249, 'acer', 'windows', 'black'),
(3, 'images/laptop3.png', 'ACER Chromebook 15 CB3-532-C8E0', '15.6 inch Full HD Intel Celeron N3160 4 GB 32 GB eMMC Intel HD Graphics 400<br>\r\n					Resolution: 1920 x 1080<br>\r\n					Optical drive: No <br>\r\n					Operating system: Google Chrome OS<br>\r\n					Battery life: 12 o\'clock<br>\r\n					Form factor: Fixed screen<br>\r\n					&#10026;&#10026;&#10026;&#10026;&#10026;<br>', 279, 'acer', 'chrome', 'black'),
(4, 'images/laptop4.png', 'ACER Spin SP513-51-34EU', '13.3 \"FHD Touch Intel Core i3-7100U 8 GB 256 GB SSD Intel HD Graphics 620<br>\r\n					Display diagonal: 13.3 inches<br>\r\n					Resolution: 1920 x 1080 <br>\r\n					Touchscreen: Yes<br>\r\n					Image resolution: Full HD <br>\r\n					Display diagonal (cm): 33.8 cm<br>\r\n				    &#10026;&#10026;&#10026;<br>', 699, 'acer', 'windows', 'black'),
(5, 'images/laptop5.png', 'APPLE MacBook Pro 13', '13.3 \"Retina Intel Core i5-7360U (2.3 GHz) 8 GB 128 GB SSD Intel Iris Plus Graphics 640<br>\r\n					Resolution: 2560 x 1600<br>\r\n					Optical drive: No <br>\r\n					Operating system: OS X 10.12 Sierra<br>\r\n					Battery life: 10 hours <br>\r\n					Form factor: Fixed screen<br\r\n					>&#10026;&#10026;&#10026;&#10026;&#10026;<br>', 1348, 'apple', 'mac', 'silver'),
(6, 'images/laptop6.png', 'ACER Aspire 5 A515-51G-58C6', '15.6 inch Full HD Intel Core i5-7200U 8 GB 256 GB SSD + 1 TB HDD NVIDIA GeForce 940 MX<br>\r\n					Resolution: 1920 x 1080<br>\r\n					Optical drive: No <br>\r\n					Operating system: Windows 10 Home<br>\r\n					Battery life: 7 hours <br>\r\n					Form factor: Fixed screen<br>\r\n					&#10026;&#10026;<br>', 799, 'acer', 'windows', 'black'),
(7, 'images/laptop7.png', 'ACER Aspire 3 A315-51-35WL', '15.6 inch Full HD Intel Core i3-7100U 4 GB 128 GB SSD Intel HD Graphics 620<br>\r\n					Resolution: 1920 x 1080<br>\r\n					Optical drive: No <br>\r\n					Operating system: Windows 10 Home<br>\r\n					Form factor: Fixed screen <br>\r\n					Display diagonal: 15.6 inches<br>\r\n					&#10026;&#10026;&#10026;<br>', 469, 'acer', 'windows', 'black'),
(8, 'images/laptop8.png', 'ACER Aspire 3 (A315-51-59AP)', '15.6 inch Full HD Intel Core i5-7200U 8 GB 256 GB SSD Intel HD Graphics 620<br>\r\n					Resolution: 1920 x 1080<br>\r\n					Optical drive: No <br>\r\n					Operating system: Windows 10 Home<br>\r\n					Battery life: 6.5 hours <br>\r\n					Form factor: Fixed screen<br>\r\n					&#10026;<br>', 649, 'acer', 'windows', 'black'),
(9, 'images/laptop9.png', 'ASUS VivoBook X441UA-WX367T', '14 inch HD Ready Intel Core i3-6006U 4 GB 1 TB HDD Intel HD Graphics 520<br>\r\n					Resolution: 1366 x 768<br>\r\n					Optical drive: DVD burner <br>\r\n					Operating system: Windows 10<br>\r\n					Form factor: Fixed screen <br>\r\n					Display diagonal: 14 inches<br>\r\n					&#10026;&#10026;&#10026;&#10026;&#10026;<br>', 449, 'asus', 'windows', 'white'),
(10, 'images/laptop10.png', 'ACER Chromebook 11 CB5-132T-C14K', '11.6 inch HD Touch Intel Celeron N3060 4 GB 32 GB eMMC Intel HD Graphics 400<br>\r\n					Resolution: 1366 x 768<br>\r\n					Optical drive: No <br>\r\n					Operating system: Google Chrome OS<br>\r\n					Battery life: 9 o\'clock <br>\r\n					Form factor: Foldable screen<br>\r\n					&#10026;&#10026;&#10026;<br>', 299, 'acer', 'chrome', 'silver'),
(11, 'images/laptop11.png', 'ACER One 10 S1003-11QZ', '10.1 inch HD Touch Intel Atom x5-Z8350 2 GB 32 GB eMMC Intel HD Graphics<br>\r\n					Display diagonal: 10.1 inch<br>\r\n					Resolution: 1280 x 800 <br>\r\n					LED backlight: Yes<br>\r\n					Touchscreen: Yes <br>\r\n					Image resolution: HD ready<br>\r\n					&#10026;&#10026;&#10026;&#10026;&#10026;<br>', 229, 'acer', 'windows', 'black'),
(12, 'images/laptop12.png', 'APPLE MacBook Pro 15 (2016) with Touch Bar ', '15.4 inch Retina Intel Core i7-6929HQ (2.9 GHz) 16 GB 1 TB SSD AMD Radeon Pro 455<br>\r\n					Resolution: 2880 x 1800<br>\r\n					Optical drive: No <br>\r\n					Operating system: Mac OS<br>\r\n					Battery life: 10 hours <br>\r\n					Form factor: Fixed screen<br>&#10026;&#10026;&#10026;&#10026;', 2899, 'apple', 'mac', 'silver'),
(13, 'images/laptop13.png', 'ASUS VivoBook E X207NA-FD073T', '11.6 inch HD Intel Celeron N3350 2 GB 32 GB eMMC Intel HD Graphics 500<br>\r\n					Resolution: 1366 x 768<br> \r\n					Optical drive: No<br>\r\n					Operating system: Windows 10 S<br>\r\n					Form factor: Fixed screen <br>\r\n					Display diagonal: 29.4 cm<br>\r\n					&#10026;&#10026;&#10026;&#10026;<br>', 199, 'asus', 'windows', 'white');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `laptop`
--
ALTER TABLE `laptop`
  ADD PRIMARY KEY (`laptopID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `laptop`
--
ALTER TABLE `laptop`
  MODIFY `laptopID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
