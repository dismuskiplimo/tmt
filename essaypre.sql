-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2015 at 05:39 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `essaypre`
--

-- --------------------------------------------------------

--
-- Table structure for table `client_info`
--

CREATE TABLE IF NOT EXISTS `client_info` (
`Client_id` int(12) NOT NULL,
  `Fname` varchar(50) NOT NULL,
  `Lname` varchar(50) NOT NULL,
  `Email` varchar(150) NOT NULL,
  `Mobile` int(20) NOT NULL,
  `Country` varchar(50) NOT NULL,
  `Time_zone` varchar(20) NOT NULL,
  `order_id` int(11) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client_info`
--

INSERT INTO `client_info` (`Client_id`, `Fname`, `Lname`, `Email`, `Mobile`, `Country`, `Time_zone`, `order_id`, `date_added`) VALUES
(1, 'Guild', 'City', 'alukenneth@yahoo.co.uk', 777777, '3', '-4', 0, '2015-11-28 13:15:29'),
(2, 'Guild', 'City', 'alukenneth@yahoo.co.uk', 777777, '3', '-4', 0, '2015-11-28 13:15:29'),
(3, 'Bill', 'Cosby', 'edwrd23297@gmail.com', 4543034, '3', '1', 0, '2015-11-28 13:15:29'),
(4, 'edward', 'vbnuykulk', 'edwrdo23297@gmail.com', 777777, '3', '3', 0, '2015-11-28 13:15:29'),
(5, 'edward', 'vbnuykulk', 'edwrdo23297@gmail.com', 777777, '3', '3', 0, '2015-11-28 13:15:29'),
(6, 'edward', 'vbnuykulk', 'edwrdo23297@gmail.com', 777777, '3', '3', 0, '2015-11-28 13:15:29'),
(7, 'edward', 'vbnuykulk', 'edwrdo23297@gmail.com', 777777, '3', '3', 0, '2015-11-28 13:15:29'),
(8, 'edward', 'vbnuykulk', 'edwrdo23297@gmail.com', 777777, '3', '3', 0, '2015-11-28 13:15:29'),
(9, 'edward', 'vbnuykulk', 'edwrdo23297@gmail.com', 777777, '3', '3', 0, '2015-11-28 13:15:29'),
(10, 'edward', 'vbnuykulk', 'edwrdo23297@gmail.com', 777777, '3', '3', 0, '2015-11-28 13:15:29'),
(11, 'edward', 'vbnuykulk', 'edwrdo23297@gmail.com', 777777, '3', '3', 0, '2015-11-28 13:15:29'),
(12, 'edward', 'vbnuykulk', 'edwrdo23297@gmail.com', 777777, '3', '3', 0, '2015-11-28 13:15:29'),
(13, 'edward', 'vbnuykulk', 'edwrdo23297@gmail.com', 777777, '3', '3', 0, '2015-11-28 13:15:29'),
(14, 'edward', 'vbnuykulk', 'edwrdo23297@gmail.com', 777777, '3', '3', 0, '2015-11-28 13:15:29'),
(15, 'edward', 'vbnuykulk', 'edwrdo23297@gmail.com', 777777, '3', '3', 0, '2015-11-28 13:15:29'),
(16, 'edward', 'vbnuykulk', 'edwrdo23297@gmail.com', 777777, '3', '3', 0, '2015-11-28 13:15:29'),
(17, 'edward', 'vbnuykulk', 'edwrdo23297@gmail.com', 777777, '3', '3', 0, '2015-11-28 13:17:51'),
(18, 'edward', 'vbnuykulk', 'edwrdo23297@gmail.com', 777777, '3', '3', 0, '2015-11-28 13:19:52'),
(19, 'edward', 'vbnuykulk', 'edwrdo23297@gmail.com', 777777, '3', '3', 0, '2015-11-28 13:21:29'),
(20, 'edward', 'vbnuykulk', 'edwrdo23297@gmail.com', 777777, '3', '3', 0, '2015-11-28 13:22:54'),
(21, 'edward', 'vbnuykulk', 'edwrdo23297@gmail.com', 777777, '3', '3', 0, '2015-11-28 13:23:55'),
(22, 'edward', 'vbnuykulk', 'edwrdo23297@gmail.com', 777777, '3', '3', 0, '2015-11-28 13:27:53'),
(23, 'edward', 'vbnuykulk', 'edwrdo23297@gmail.com', 777777, '3', '3', 0, '2015-11-28 13:28:55'),
(24, 'edward', 'vbnuykulk', 'edwrdo23297@gmail.com', 4543034, '215', '3', 0, '2015-11-28 13:29:58'),
(25, 'edward', 'vbnuykulk', 'edwrdo23297@gmail.com', 4543034, '215', '3', 0, '2015-11-28 13:31:23'),
(26, 'edward', 'vbnuykulk', 'edwrdo23297@gmail.com', 4543034, '215', '3', 0, '2015-11-28 13:31:53'),
(27, 'edward', 'vbnuykulk', 'edwrdo23297@gmail.com', 4543034, '215', '3', 0, '2015-11-28 13:32:49'),
(28, 'edward', 'vbnuykulk', 'edwrdo23297@gmail.com', 4543034, '215', '3', 0, '2015-11-28 13:33:18'),
(29, 'edward', 'vbnuykulk', 'edwrdo23297@gmail.com', 4543034, '215', '3', 0, '2015-11-28 13:36:17'),
(30, 'edward', 'vbnuykulk', 'edwrdo23297@gmail.com', 4543034, '215', '3', 0, '2015-11-28 13:37:34'),
(31, 'edward', 'vbnuykulk', 'edwrdo23297@gmail.com', 4543034, '215', '3', 0, '2015-11-28 13:37:39'),
(32, 'edward', 'vbnuykulk', 'edwrdo23297@gmail.com', 4543034, '215', '3', 0, '2015-11-28 13:38:23'),
(33, 'edward', 'vbnuykulk', 'edwrdo23297@gmail.com', 4543034, '215', '3', 0, '2015-11-28 13:38:41'),
(34, 'edward', 'City', 'edwrdo23297@gmail.com', 488583, '3', '0', 0, '2015-11-28 14:27:18'),
(35, 'edward', 'City', 'edwrdo23297@gmail.com', 488583, '3', '0', 0, '2015-11-28 14:47:38'),
(36, 'edward', 'City', 'edwrdo23297@gmail.com', 488583, '3', 'GMT -12 Hours', 0, '2015-11-28 15:27:14'),
(37, 'edward', 'City', 'edwrdo23297@gmail.com', 488583, '3', 'GMT -12 Hours', 0, '2015-11-28 15:28:13'),
(38, 'edward', 'City', 'edwrdo23297@gmail.com', 488583, '3', 'GMT -12 Hours', 0, '2015-11-28 15:29:02'),
(39, 'edward', 'City', 'edwrdo23297@gmail.com', 488583, 'Afghanistan', 'GMT -12 Hours', 0, '2015-11-28 15:29:16'),
(40, 'edward', 'City', 'edwrdo23297@gmail.com', 488583, 'Afghanistan', 'GMT -12 Hours', 0, '2015-11-28 15:29:42'),
(41, 'edward', 'City', 'edwrdo23297@gmail.com', 488583, 'Afghanistan', 'GMT -12 Hours', 0, '2015-11-28 15:32:09'),
(42, 'edward', 'City', 'edwrdo23297@gmail.com', 488583, 'Afghanistan', 'GMT -12 Hours', 0, '2015-11-28 15:32:37');

-- --------------------------------------------------------

--
-- Table structure for table `email`
--

CREATE TABLE IF NOT EXISTS `email` (
`ID` int(12) NOT NULL,
  `Email` varchar(150) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `email`
--

INSERT INTO `email` (`ID`, `Email`, `date_added`) VALUES
(1, 'eddu@gmail.com', '2015-11-27 15:03:28'),
(2, 'dis@gmail.com', '2015-11-27 15:03:28'),
(3, 'example@gmail.com', '2015-11-27 15:03:47'),
(4, 'example1@gmail.com', '2015-11-27 15:07:33'),
(5, 'example11@gmail.com', '2015-11-27 15:08:27'),
(6, 'sdfssdf@gmail.com', '2015-11-27 15:41:18'),
(7, 'alukenneth@yahoo.co.uk', '2015-11-27 15:51:34'),
(8, 'edwrd23297@gmail.com', '2015-11-27 16:33:48'),
(9, 'edwrdo23297@gmail.com', '2015-11-28 11:43:13');

-- --------------------------------------------------------

--
-- Table structure for table `essay_order`
--

CREATE TABLE IF NOT EXISTS `essay_order` (
`Essay_id` int(12) NOT NULL,
  `Subject` varchar(150) NOT NULL,
  `Title` varchar(400) NOT NULL,
  `Type` varchar(100) NOT NULL,
  `Pages` int(50) NOT NULL,
  `Style` varchar(150) NOT NULL,
  `Language` varchar(100) NOT NULL,
  `Deadline` varchar(15) NOT NULL,
  `Sources` int(10) NOT NULL,
  `Instructions` text NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Price` int(10) NOT NULL,
  `level` varchar(100) NOT NULL,
  `client_id` int(11) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `paid` enum('YES','NO') NOT NULL DEFAULT 'NO'
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `essay_order`
--

INSERT INTO `essay_order` (`Essay_id`, `Subject`, `Title`, `Type`, `Pages`, `Style`, `Language`, `Deadline`, `Sources`, `Instructions`, `Email`, `Price`, `level`, `client_id`, `date_added`, `paid`) VALUES
(1, '1010', 'My Book', '1.5', 1, 'APA', 'English (U.K.)', '4', 6, 'Very Fast', 'alukenneth@yahoo.co.uk', 0, '1.5', 0, '2015-11-28 12:45:38', 'NO'),
(2, '1010', 'My Book', '1.5', 1, 'APA', 'English (U.K.)', '4', 6, 'Very Fast', 'alukenneth@yahoo.co.uk', 0, '1.5', 0, '2015-11-28 12:45:38', 'NO'),
(3, '1020', 'My assignment', '0.9', 8, 'APA', 'English (U.K.)', '5', 7, 'faster faster', 'edwrd23297@gmail.com', 0, '2.0', 0, '2015-11-28 12:45:38', 'NO'),
(4, '1020', 'hlj;kufguhij', '1.8', 4, 'MLA', 'English (U.K.)', '4', 15, 'rwsetdrtfgijok[pkigyufjbknm', 'edwrdo23297@gmail.com', 0, '2.0', 0, '2015-11-28 12:45:38', 'NO'),
(5, '1020', 'hlj;kufguhij', '1.8', 4, 'MLA', 'English (U.K.)', '4', 15, 'rwsetdrtfgijok[pkigyufjbknm', 'edwrdo23297@gmail.com', 0, '2.0', 0, '2015-11-28 12:45:38', 'NO'),
(6, '1020', 'hlj;kufguhij', '1.8', 4, 'MLA', 'English (U.K.)', '4', 15, 'rwsetdrtfgijok[pkigyufjbknm', 'edwrdo23297@gmail.com', 0, '2.0', 0, '2015-11-28 12:45:38', 'NO'),
(7, '1020', 'hlj;kufguhij', '1.8', 4, 'MLA', 'English (U.K.)', '4', 15, 'rwsetdrtfgijok[pkigyufjbknm', 'edwrdo23297@gmail.com', 0, '2.0', 0, '2015-11-28 12:45:38', 'NO'),
(8, '1020', 'hlj;kufguhij', '1.8', 4, 'MLA', 'English (U.K.)', '4', 15, 'rwsetdrtfgijok[pkigyufjbknm', 'edwrdo23297@gmail.com', 0, '2.0', 0, '2015-11-28 12:45:38', 'NO'),
(9, '1020', 'hlj;kufguhij', '0.6', 15, 'MLA', 'English (U.K.)', '4', 15, 'rwsetdrtfgijok[pkigyufjbknm', 'edwrdo23297@gmail.com', 324, '2.0', 0, '2015-11-28 12:52:16', 'NO'),
(10, '1020', 'hlj;kufguhij', '0.6', 15, 'MLA', 'English (U.K.)', '4', 15, 'rwsetdrtfgijok[pkigyufjbknm', 'edwrdo23297@gmail.com', 324, '2.0', 0, '2015-11-28 12:52:46', 'NO'),
(11, '1020', 'hlj;kufguhij', '0.6', 15, 'MLA', 'English (U.K.)', '4', 15, 'rwsetdrtfgijok[pkigyufjbknm', 'edwrdo23297@gmail.com', 36, '2.0', 0, '2015-11-28 12:54:58', 'NO'),
(12, '1020', 'hlj;kufguhij', '0.6', 15, 'MLA', 'English (U.K.)', '4', 15, 'rwsetdrtfgijok[pkigyufjbknm', 'edwrdo23297@gmail.com', 36, '2.0', 0, '2015-11-28 12:55:22', 'NO'),
(13, '1020', 'hlj;kufguhij', '0.6', 15, 'MLA', 'English (U.K.)', '4', 15, 'rwsetdrtfgijok[pkigyufjbknm', 'edwrdo23297@gmail.com', 36, '2.0', 0, '2015-11-28 12:55:55', 'NO'),
(14, '1020', 'hlj;kufguhij', '0.6', 15, 'MLA', 'English (U.K.)', '4', 15, 'rwsetdrtfgijok[pkigyufjbknm', 'edwrdo23297@gmail.com', 36, '2.0', 0, '2015-11-28 12:56:36', 'NO'),
(15, '1020', 'hlj;kufguhij', '0.6', 15, 'MLA', 'English (U.K.)', '4', 15, 'rwsetdrtfgijok[pkigyufjbknm', 'edwrdo23297@gmail.com', 36, '2.0', 0, '2015-11-28 12:57:03', 'NO'),
(16, '1020', 'hlj;kufguhij', '0.6', 15, 'MLA', 'English (U.K.)', '4', 15, 'rwsetdrtfgijok[pkigyufjbknm', 'edwrdo23297@gmail.com', 36, '2.0', 0, '2015-11-28 12:59:52', 'NO'),
(17, '1020', 'faff', '1.5', 4, 'Harvard', 'English (U.S.)', '4.5', 2, 'sdfdsfd', 'edwrdo23297@gmail.com', 486, '1.5', 0, '2015-11-28 13:31:53', 'NO'),
(18, '1020', 'faff', '1.5', 4, 'Harvard', 'English (U.S.)', '4.5', 2, 'sdfdsfd', 'edwrdo23297@gmail.com', 36, '1.5', 33, '2015-11-28 13:38:41', 'NO'),
(19, '1040', 'phar100', '1', 1, 'Harvard', 'English (U.K.)', '5', 12, 'd;lkdlkdkfk#sfkfkf\r\ndflkroekkf\r\nxckvkvk\r\nxdwerpworwerps\r\nsdflkj;sdflkjs;we\r\nsdfdsfsdfsdfsdfsdfsdfsdfsdfsffs\r\n', 'edwrdo23297@gmail.com', 36, '1.5', 34, '2015-11-28 14:27:18', 'NO'),
(20, '1040', 'phar100', '1', 1, 'Harvard', 'English (U.K.)', '5', 12, 'd;lkdlkdkfk#sfkfkf\r\ndflkroekkf\r\nxckvkvk\r\nxdwerpworwerps\r\nsdflkj;sdflkjs;we\r\nsdfdsfsdfsdfsdfsdfsdfsdfsdfsffs FKFKFFK KKKDDK KKOEOEO OFOLELO OFOEFLFOEO FLFOROEP PFORIFI IOWRP PRPOWIR PORIWO OROROW PRPPW PPRPTORO\r\n', 'edwrdo23297@gmail.com', 36, '1.5', 35, '2015-11-28 14:47:38', 'NO'),
(21, 'Visual Arts and Film Studies', 'phar100', 'Essay (any type)', 1, 'Harvard', 'English (U.K.)', '3hrs', 12, 'd;lkdlkdkfk#sfkfkf\r\ndflkroekkf\r\nxckvkvk\r\nxdwerpworwerps\r\nsdflkj;sdflkjs;we\r\nsdfdsfsdfsdfsdfsdfsdfsdfsdfsffs FKFKFFK KKKDDK KKOEOEO OFOLELO OFOEFLFOEO FLFOROEP PFORIFI IOWRP PRPOWIR PORIWO OROROW PRPPW PPRPTORO\r\n', 'edwrdo23297@gmail.com', 36, '1.5', 36, '2015-11-28 15:27:14', 'NO'),
(22, 'Visual Arts and Film Studies', 'phar100', 'Essay (any type)', 1, 'Harvard', 'English (U.K.)', '3hrs', 12, 'd;lkdlkdkfk#sfkfkf\r\ndflkroekkf\r\nxckvkvk\r\nxdwerpworwerps\r\nsdflkj;sdflkjs;we\r\nsdfdsfsdfsdfsdfsdfsdfsdfsdfsffs FKFKFFK KKKDDK KKOEOEO OFOLELO OFOEFLFOEO FLFOROEP PFORIFI IOWRP PRPOWIR PORIWO OROROW PRPPW PPRPTORO\r\n', 'edwrdo23297@gmail.com', 36, '1.5', 37, '2015-11-28 15:28:13', 'NO'),
(23, 'Visual Arts and Film Studies', 'phar100', 'Essay (any type)', 1, 'Harvard', 'English (U.K.)', '3hrs', 12, 'd;lkdlkdkfk#sfkfkf\r\ndflkroekkf\r\nxckvkvk\r\nxdwerpworwerps\r\nsdflkj;sdflkjs;we\r\nsdfdsfsdfsdfsdfsdfsdfsdfsdfsffs FKFKFFK KKKDDK KKOEOEO OFOLELO OFOEFLFOEO FLFOROEP PFORIFI IOWRP PRPOWIR PORIWO OROROW PRPPW PPRPTORO\r\n', 'edwrdo23297@gmail.com', 24, '1.0', 38, '2015-11-28 15:29:02', 'NO'),
(24, 'Visual Arts and Film Studies', 'phar100', 'Essay (any type)', 1, 'Harvard', 'English (U.K.)', '3hrs', 12, 'd;lkdlkdkfk#sfkfkf\r\ndflkroekkf\r\nxckvkvk\r\nxdwerpworwerps\r\nsdflkj;sdflkjs;we\r\nsdfdsfsdfsdfsdfsdfsdfsdfsdfsffs FKFKFFK KKKDDK KKOEOEO OFOLELO OFOEFLFOEO FLFOROEP PFORIFI IOWRP PRPOWIR PORIWO OROROW PRPPW PPRPTORO\r\n', 'edwrdo23297@gmail.com', 24, '1.0', 39, '2015-11-28 15:29:16', 'NO'),
(25, 'Visual Arts and Film Studies', 'phar100', 'Essay (any type)', 1, 'Harvard', 'English (U.K.)', '3hrs', 12, 'd;lkdlkdkfk#sfkfkf\r\ndflkroekkf\r\nxckvkvk\r\nxdwerpworwerps\r\nsdflkj;sdflkjs;we\r\nsdfdsfsdfsdfsdfsdfsdfsdfsdfsffs FKFKFFK KKKDDK KKOEOEO OFOLELO OFOEFLFOEO FLFOROEP PFORIFI IOWRP PRPOWIR PORIWO OROROW PRPPW PPRPTORO\r\n', 'edwrdo23297@gmail.com', 24, '1.0', 40, '2015-11-28 15:29:42', 'NO'),
(26, 'Visual Arts and Film Studies', 'phar100', 'Essay (any type)', 1, 'Harvard', 'English (U.K.)', '3hrs', 12, 'd;lkdlkdkfk#sfkfkf\r\ndflkroekkf\r\nxckvkvk\r\nxdwerpworwerps\r\nsdflkj;sdflkjs;we\r\nsdfdsfsdfsdfsdfsdfsdfsdfsdfsffs FKFKFFK KKKDDK KKOEOEO OFOLELO OFOEFLFOEO FLFOROEP PFORIFI IOWRP PRPOWIR PORIWO OROROW PRPPW PPRPTORO\r\n', 'edwrdo23297@gmail.com', 24, 'GCSE, GNVQ, A-level, A2', 41, '2015-11-28 15:32:09', 'NO'),
(27, 'Visual Arts and Film Studies', 'phar100', 'Essay (any type)', 1, 'Harvard', 'English (U.K.)', '3hrs', 12, 'd;lkdlkdkfk#sfkfkf\r\ndflkroekkf\r\nxckvkvk\r\nxdwerpworwerps\r\nsdflkj;sdflkjs;we\r\nsdfdsfsdfsdfsdfsdfsdfsdfsdfsffs FKFKFFK KKKDDK KKOEOEO OFOLELO OFOEFLFOEO FLFOROEP PFORIFI IOWRP PRPOWIR PORIWO OROROW PRPPW PPRPTORO\r\n', 'edwrdo23297@gmail.com', 24, 'GCSE, GNVQ, A-level, A2', 42, '2015-11-28 15:32:38', 'NO');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client_info`
--
ALTER TABLE `client_info`
 ADD PRIMARY KEY (`Client_id`);

--
-- Indexes for table `email`
--
ALTER TABLE `email`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `essay_order`
--
ALTER TABLE `essay_order`
 ADD PRIMARY KEY (`Essay_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `client_info`
--
ALTER TABLE `client_info`
MODIFY `Client_id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `email`
--
ALTER TABLE `email`
MODIFY `ID` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `essay_order`
--
ALTER TABLE `essay_order`
MODIFY `Essay_id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
