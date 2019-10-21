-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2019 at 04:00 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lte`
--

-- --------------------------------------------------------

--
-- Table structure for table `absen`
--

CREATE TABLE IF NOT EXISTS `absen` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `emp_no` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `auto_assign` int(5) DEFAULT NULL,
  `date` date NOT NULL,
  `timetable` varchar(100) NOT NULL,
  `on_duty` time NOT NULL,
  `off_duty` time NOT NULL,
  `clock_in` time DEFAULT NULL,
  `clock_out` time DEFAULT NULL,
  `late` time DEFAULT NULL,
  `late_bellow` time DEFAULT NULL,
  `late_over` time DEFAULT NULL,
  `early` int(5) DEFAULT NULL,
  `absen` int(5) DEFAULT NULL,
  `sakit` int(5) DEFAULT NULL,
  `cuti` int(5) DEFAULT NULL,
  `unpaid` int(5) DEFAULT NULL,
  `potongan` int(10) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=392 ;

--
-- Dumping data for table `absen`
--

INSERT INTO `absen` (`id`, `emp_no`, `name`, `auto_assign`, `date`, `timetable`, `on_duty`, `off_duty`, `clock_in`, `clock_out`, `late`, `late_bellow`, `late_over`, `early`, `absen`, `sakit`, `cuti`, `unpaid`, `potongan`, `keterangan`) VALUES
(1, 30027, 'Mulyadi', NULL, '2019-08-21', 'normal 4', '08:30:00', '17:30:00', '08:41:00', '17:34:00', '00:11:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 30027, 'Mulyadi', NULL, '2019-08-22', 'normal 4', '08:30:00', '17:30:00', '08:25:00', '17:38:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 30027, 'Mulyadi', NULL, '2019-08-23', 'normal 4', '08:30:00', '17:30:00', '08:27:00', '00:00:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 30027, 'Mulyadi', NULL, '2019-08-26', 'normal 4', '08:30:00', '17:30:00', '08:33:00', '00:00:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 30027, 'Mulyadi', NULL, '2019-08-27', 'normal 4', '08:30:00', '17:30:00', '08:26:00', '17:36:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 30027, 'Mulyadi', NULL, '2019-08-28', 'normal 4', '08:30:00', '17:30:00', '08:45:00', '00:00:00', '00:15:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 30027, 'Mulyadi', NULL, '2019-08-29', 'normal 4', '08:30:00', '17:30:00', '08:35:00', '00:00:00', '00:05:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 30027, 'Mulyadi', NULL, '2019-08-30', 'normal 4', '08:30:00', '17:30:00', '08:28:00', '17:34:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 30027, 'Mulyadi', NULL, '2019-09-02', 'normal 4', '08:30:00', '17:30:00', '08:40:00', '00:00:00', '00:10:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 30027, 'Mulyadi', NULL, '2019-09-03', 'normal 4', '08:30:00', '17:30:00', '08:21:00', '00:00:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 30027, 'Mulyadi', NULL, '2019-09-04', 'normal 4', '08:30:00', '17:30:00', '08:27:00', '00:00:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 30027, 'Mulyadi', NULL, '2019-09-05', 'normal 4', '08:30:00', '17:30:00', '08:55:00', '00:00:00', '00:25:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, 30027, 'Mulyadi', NULL, '2019-09-06', 'normal 4', '08:30:00', '17:30:00', '08:55:00', '17:36:00', '00:25:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, 30027, 'Mulyadi', NULL, '2019-09-09', 'normal 4', '08:30:00', '17:30:00', '00:00:00', '17:36:00', '01:00:00', NULL, '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, 30027, 'Mulyadi', NULL, '2019-09-10', 'normal 4', '08:30:00', '17:30:00', '08:23:00', '00:00:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, 30027, 'Mulyadi', NULL, '2019-09-11', 'normal 4', '08:30:00', '17:30:00', '08:32:00', '00:00:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(17, 30027, 'Mulyadi', NULL, '2019-09-12', 'normal 4', '08:30:00', '17:30:00', '08:54:00', '17:33:00', '00:24:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(18, 30027, 'Mulyadi', NULL, '2019-09-13', 'normal 4', '08:30:00', '17:30:00', '08:27:00', '00:00:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(19, 30027, 'Mulyadi', NULL, '2019-09-16', 'normal 4', '08:30:00', '17:30:00', '08:33:00', '00:00:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20, 30027, 'Mulyadi', NULL, '2019-09-17', 'normal 4', '08:30:00', '17:30:00', '08:29:00', '00:00:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(21, 30027, 'Mulyadi', NULL, '2019-09-18', 'normal 4', '08:30:00', '17:30:00', '08:40:00', '17:33:00', '00:10:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(22, 30027, 'Mulyadi', NULL, '2019-09-19', 'normal 4', '08:30:00', '17:30:00', '08:54:00', '00:00:00', '00:24:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(23, 30027, 'Mulyadi', NULL, '2019-09-20', 'normal 4', '08:30:00', '17:30:00', '08:33:00', '00:00:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(24, 30051, 'Matius Gulo', NULL, '2019-08-21', 'normal 4', '08:30:00', '17:30:00', '08:53:00', '17:41:00', '00:23:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(25, 30051, 'Matius Gulo', NULL, '2019-08-22', 'normal 4', '08:30:00', '17:30:00', '08:37:00', '17:43:00', '00:07:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(26, 30051, 'Matius Gulo', NULL, '2019-08-23', 'normal 4', '08:30:00', '17:30:00', '08:44:00', '17:38:00', '00:14:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(27, 30051, 'Matius Gulo', NULL, '2019-08-26', 'normal 4', '08:30:00', '17:30:00', '09:00:00', '17:50:00', '00:30:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(28, 30051, 'Matius Gulo', NULL, '2019-08-27', 'normal 4', '08:30:00', '17:30:00', '08:55:00', '17:57:00', '00:25:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(29, 30051, 'Matius Gulo', NULL, '2019-08-28', 'normal 4', '08:30:00', '17:30:00', '08:33:00', '17:49:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(30, 30051, 'Matius Gulo', NULL, '2019-08-29', 'normal 4', '08:30:00', '17:30:00', '08:38:00', '17:41:00', '00:08:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(31, 30051, 'Matius Gulo', NULL, '2019-08-30', 'normal 4', '08:30:00', '17:30:00', '08:44:00', '17:39:00', '00:14:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(32, 30051, 'Matius Gulo', NULL, '2019-09-02', 'normal 4', '08:30:00', '17:30:00', '08:48:00', '17:48:00', '00:18:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(33, 30051, 'Matius Gulo', NULL, '2019-09-03', 'normal 4', '08:30:00', '17:30:00', '08:56:00', '17:49:00', '00:26:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(34, 30051, 'Matius Gulo', NULL, '2019-09-04', 'normal 4', '08:30:00', '17:30:00', '08:39:00', '17:46:00', '00:09:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(35, 30051, 'Matius Gulo', NULL, '2019-09-05', 'normal 4', '08:30:00', '17:30:00', '08:52:00', '17:46:00', '00:22:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(36, 30051, 'Matius Gulo', NULL, '2019-09-06', 'normal 4', '08:30:00', '17:30:00', '08:46:00', '18:13:00', '00:16:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(37, 30051, 'Matius Gulo', NULL, '2019-09-09', 'normal 4', '08:30:00', '17:30:00', '08:54:00', '17:38:00', '00:24:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(38, 30051, 'Matius Gulo', NULL, '2019-09-10', 'normal 4', '08:30:00', '17:30:00', '08:48:00', '17:48:00', '00:18:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(39, 30051, 'Matius Gulo', NULL, '2019-09-11', 'normal 4', '08:30:00', '17:30:00', '09:00:00', '17:39:00', '00:30:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(40, 30051, 'Matius Gulo', NULL, '2019-09-12', 'normal 4', '08:30:00', '17:30:00', '09:00:00', '17:48:00', '00:30:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(41, 30051, 'Matius Gulo', NULL, '2019-09-13', 'normal 4', '08:30:00', '17:30:00', '08:49:00', '17:38:00', '00:19:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(42, 30051, 'Matius Gulo', NULL, '2019-09-16', 'normal 4', '08:30:00', '17:30:00', '08:58:00', '17:52:00', '00:28:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(43, 30051, 'Matius Gulo', NULL, '2019-09-17', 'normal 4', '08:30:00', '17:30:00', '08:57:00', '17:41:00', '00:27:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(44, 30051, 'Matius Gulo', NULL, '2019-09-18', 'normal 4', '08:30:00', '17:30:00', '09:11:00', '17:38:00', '00:41:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(45, 30051, 'Matius Gulo', NULL, '2019-09-19', 'normal 4', '08:30:00', '17:30:00', '09:21:00', '17:47:00', '00:51:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(46, 30051, 'Matius Gulo', NULL, '2019-09-20', 'normal 4', '08:30:00', '17:30:00', '08:41:00', '00:00:00', '00:11:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(47, 30055, 'Hayyu', NULL, '2019-08-21', 'normal 4', '08:30:00', '17:30:00', '08:38:00', '17:53:00', '00:08:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(48, 30055, 'Hayyu', NULL, '2019-08-22', 'normal 4', '08:30:00', '17:30:00', '08:35:00', '17:57:00', '00:05:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(49, 30055, 'Hayyu', NULL, '2019-08-23', 'normal 4', '08:30:00', '17:30:00', '08:38:00', '17:50:00', '00:08:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(50, 30055, 'Hayyu', NULL, '2019-08-26', 'normal 4', '08:30:00', '17:30:00', '08:46:00', '17:51:00', '00:16:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(51, 30055, 'Hayyu', NULL, '2019-08-27', 'normal 4', '08:30:00', '17:30:00', '08:39:00', '17:57:00', '00:09:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(52, 30055, 'Hayyu', NULL, '2019-08-28', 'normal 4', '08:30:00', '17:30:00', '08:40:00', '17:43:00', '00:10:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(53, 30055, 'Hayyu', NULL, '2019-08-29', 'normal 4', '08:30:00', '17:30:00', '08:47:00', '17:48:00', '00:17:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(54, 30055, 'Hayyu', NULL, '2019-08-30', 'normal 4', '08:30:00', '17:30:00', '08:43:00', '17:40:00', '00:13:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(55, 30055, 'Hayyu', NULL, '2019-09-02', 'normal 4', '08:30:00', '17:30:00', '08:45:00', '17:40:00', '00:15:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(56, 30055, 'Hayyu', NULL, '2019-09-03', 'normal 4', '08:30:00', '17:30:00', '08:38:00', '18:01:00', '00:08:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(57, 30055, 'Hayyu', NULL, '2019-09-04', 'normal 4', '08:30:00', '17:30:00', '08:36:00', '17:42:00', '00:06:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(58, 30055, 'Hayyu', NULL, '2019-09-05', 'normal 4', '08:30:00', '17:30:00', '08:34:00', '00:00:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(59, 30055, 'Hayyu', NULL, '2019-09-06', 'normal 4', '08:30:00', '17:30:00', '00:00:00', '17:49:00', '01:00:00', NULL, '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, 'TIDAK ada absen masuk'),
(60, 30055, 'Hayyu', NULL, '2019-09-09', 'normal 4', '08:30:00', '17:30:00', '08:38:00', '17:47:00', '00:08:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(61, 30055, 'Hayyu', NULL, '2019-09-10', 'normal 4', '08:30:00', '17:30:00', '08:37:00', '17:42:00', '00:07:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(62, 30055, 'Hayyu', NULL, '2019-09-11', 'normal 4', '08:30:00', '17:30:00', '08:48:00', '17:36:00', '00:18:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(63, 30055, 'Hayyu', NULL, '2019-09-12', 'normal 4', '08:30:00', '17:30:00', '08:42:00', '17:40:00', '00:12:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(64, 30055, 'Hayyu', NULL, '2019-09-13', 'normal 4', '08:30:00', '17:30:00', '08:39:00', '17:37:00', '00:09:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(65, 30055, 'Hayyu', NULL, '2019-09-16', 'normal 4', '08:30:00', '17:30:00', '08:34:00', '17:41:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(66, 30055, 'Hayyu', NULL, '2019-09-17', 'normal 4', '08:30:00', '17:30:00', '08:29:00', '17:39:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(67, 30055, 'Hayyu', NULL, '2019-09-18', 'normal 4', '08:30:00', '17:30:00', '08:40:00', '17:36:00', '00:10:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(68, 30055, 'Hayyu', NULL, '2019-09-19', 'normal 4', '08:30:00', '17:30:00', '08:42:00', '17:38:00', '00:12:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(69, 30055, 'Hayyu', NULL, '2019-09-20', 'normal 4', '08:30:00', '17:30:00', '08:49:00', '00:00:00', '00:19:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(70, 30060, 'Dewi Laksmita', NULL, '2019-08-21', 'normal 4', '08:30:00', '17:30:00', '08:29:00', '17:52:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(71, 30060, 'Dewi Laksmita', NULL, '2019-08-22', 'normal 4', '08:30:00', '17:30:00', '08:36:00', '17:57:00', '00:06:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(72, 30060, 'Dewi Laksmita', NULL, '2019-08-23', 'normal 4', '08:30:00', '17:30:00', '08:26:00', '17:47:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(73, 30060, 'Dewi Laksmita', NULL, '2019-08-26', 'normal 4', '08:30:00', '17:30:00', '08:43:00', '17:50:00', '00:13:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(74, 30060, 'Dewi Laksmita', NULL, '2019-08-27', 'normal 4', '08:30:00', '17:30:00', '08:30:00', '17:54:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(75, 30060, 'Dewi Laksmita', NULL, '2019-08-28', 'normal 4', '08:30:00', '17:30:00', '08:30:00', '17:43:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(76, 30060, 'Dewi Laksmita', NULL, '2019-08-29', 'normal 4', '08:30:00', '17:30:00', '08:47:00', '17:47:00', '00:17:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(77, 30060, 'Dewi Laksmita', NULL, '2019-08-30', 'normal 4', '08:30:00', '17:30:00', '08:37:00', '17:40:00', '00:07:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(78, 30060, 'Dewi Laksmita', NULL, '2019-09-02', 'normal 4', '08:30:00', '17:30:00', '08:30:00', '17:40:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(79, 30060, 'Dewi Laksmita', NULL, '2019-09-03', 'normal 4', '08:30:00', '17:30:00', '08:38:00', '18:01:00', '00:08:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(80, 30060, 'Dewi Laksmita', NULL, '2019-09-04', 'normal 4', '08:30:00', '17:30:00', '08:31:00', '17:41:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(81, 30060, 'Dewi Laksmita', NULL, '2019-09-05', 'normal 4', '08:30:00', '17:30:00', '08:35:00', '17:44:00', '00:05:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(82, 30060, 'Dewi Laksmita', NULL, '2019-09-06', 'normal 4', '08:30:00', '17:30:00', '08:42:00', '17:48:00', '00:12:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(83, 30060, 'Dewi Laksmita', NULL, '2019-09-09', 'normal 4', '08:30:00', '17:30:00', '08:33:00', '17:46:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(84, 30060, 'Dewi Laksmita', NULL, '2019-09-10', 'normal 4', '08:30:00', '17:30:00', '08:21:00', '17:42:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(85, 30060, 'Dewi Laksmita', NULL, '2019-09-11', 'normal 4', '08:30:00', '17:30:00', '08:41:00', '17:36:00', '00:11:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(86, 30060, 'Dewi Laksmita', NULL, '2019-09-12', 'normal 4', '08:30:00', '17:30:00', '08:38:00', '17:40:00', '00:08:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(87, 30060, 'Dewi Laksmita', NULL, '2019-09-13', 'normal 4', '08:30:00', '17:30:00', '08:40:00', '17:36:00', '00:10:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(88, 30060, 'Dewi Laksmita', NULL, '2019-09-16', 'normal 4', '08:30:00', '17:30:00', '08:40:00', '17:40:00', '00:10:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(89, 30060, 'Dewi Laksmita', NULL, '2019-09-17', 'normal 4', '08:30:00', '17:30:00', '08:39:00', '17:39:00', '00:09:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(90, 30060, 'Dewi Laksmita', NULL, '2019-09-18', 'normal 4', '08:30:00', '17:30:00', '08:34:00', '17:36:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(91, 30060, 'Dewi Laksmita', NULL, '2019-09-19', 'normal 4', '08:30:00', '17:30:00', '08:34:00', '17:38:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(92, 30060, 'Dewi Laksmita', NULL, '2019-09-20', 'normal 4', '08:30:00', '17:30:00', '08:40:00', '00:00:00', '00:10:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(93, 30105, 'Ahmad Ghanzanfar', NULL, '2019-08-21', 'normal 4', '08:30:00', '17:30:00', '09:01:00', '17:33:00', '00:31:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(94, 30105, 'Ahmad Ghanzanfar', NULL, '2019-08-22', 'normal 4', '08:30:00', '17:30:00', '09:37:00', '17:38:00', '01:07:00', NULL, '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, 'TELAT'),
(95, 30105, 'Ahmad Ghanzanfar', NULL, '2019-08-23', 'normal 4', '08:30:00', '17:30:00', '00:00:00', '00:00:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 'Sakit tidak ada surat'),
(96, 30105, 'Ahmad Ghanzanfar', NULL, '2019-08-26', 'normal 4', '08:30:00', '17:30:00', '08:37:00', '18:13:00', '00:07:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(97, 30105, 'Ahmad Ghanzanfar', NULL, '2019-08-27', 'normal 4', '08:30:00', '17:30:00', '08:58:00', '17:32:00', '00:28:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(98, 30105, 'Ahmad Ghanzanfar', NULL, '2019-08-28', 'normal 4', '08:30:00', '17:30:00', '08:42:00', '00:00:00', '00:12:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(99, 30105, 'Ahmad Ghanzanfar', NULL, '2019-08-29', 'normal 4', '08:30:00', '17:30:00', '09:24:00', '17:33:00', '00:54:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(100, 30105, 'Ahmad Ghanzanfar', NULL, '2019-08-30', 'normal 4', '08:30:00', '17:30:00', '00:00:00', '00:00:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 'Sakit tidak ada surat'),
(101, 30105, 'Ahmad Ghanzanfar', NULL, '2019-09-02', 'normal 4', '08:30:00', '17:30:00', '09:25:00', '17:30:00', '00:55:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(102, 30105, 'Ahmad Ghanzanfar', NULL, '2019-09-03', 'normal 4', '08:30:00', '17:30:00', '09:08:00', '17:47:00', '00:38:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(103, 30105, 'Ahmad Ghanzanfar', NULL, '2019-09-04', 'normal 4', '08:30:00', '17:30:00', '08:47:00', '17:34:00', '00:17:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(104, 30105, 'Ahmad Ghanzanfar', NULL, '2019-09-05', 'normal 4', '08:30:00', '17:30:00', '09:14:00', '00:00:00', '00:44:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(105, 30105, 'Ahmad Ghanzanfar', NULL, '2019-09-06', 'normal 4', '08:30:00', '17:30:00', '09:28:00', '17:33:00', '00:58:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(106, 30105, 'Ahmad Ghanzanfar', NULL, '2019-09-09', 'normal 4', '08:30:00', '17:30:00', '08:51:00', '00:00:00', '00:21:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(107, 30105, 'Ahmad Ghanzanfar', NULL, '2019-09-10', 'normal 4', '08:30:00', '17:30:00', '09:06:00', '00:00:00', '00:36:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(108, 30105, 'Ahmad Ghanzanfar', NULL, '2019-09-11', 'normal 4', '08:30:00', '17:30:00', '09:12:00', '18:27:00', '00:42:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(109, 30105, 'Ahmad Ghanzanfar', NULL, '2019-09-12', 'normal 4', '08:30:00', '17:30:00', '09:23:00', '17:35:00', '00:53:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(110, 30105, 'Ahmad Ghanzanfar', NULL, '2019-09-13', 'normal 4', '08:30:00', '17:30:00', '09:34:00', '17:41:00', '01:04:00', NULL, '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, 'TELAT'),
(111, 30105, 'Ahmad Ghanzanfar', NULL, '2019-09-16', 'normal 4', '08:30:00', '17:30:00', '09:15:00', '17:37:00', '00:45:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(112, 30105, 'Ahmad Ghanzanfar', NULL, '2019-09-17', 'normal 4', '08:30:00', '17:30:00', '00:00:00', '00:00:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 'Sakit tidak ada surat'),
(113, 30105, 'Ahmad Ghanzanfar', NULL, '2019-09-18', 'normal 4', '08:30:00', '17:30:00', '08:52:00', '17:33:00', '00:22:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(114, 30105, 'Ahmad Ghanzanfar', NULL, '2019-09-19', 'normal 4', '08:30:00', '17:30:00', '09:17:00', '17:36:00', '00:47:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(115, 30105, 'Ahmad Ghanzanfar', NULL, '2019-09-20', 'normal 4', '08:30:00', '17:30:00', '09:29:00', '00:00:00', '00:59:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(116, 30128, 'Agus Sumanto', NULL, '2019-08-21', 'normal 4', '08:30:00', '17:30:00', '09:06:00', '17:34:00', '00:36:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(117, 30128, 'Agus Sumanto', NULL, '2019-08-22', 'normal 4', '08:30:00', '17:30:00', '08:56:00', '17:38:00', '00:26:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(118, 30128, 'Agus Sumanto', NULL, '2019-08-23', 'normal 4', '08:30:00', '17:30:00', '00:00:00', '00:00:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 'TIDAK ADA Keterangan'),
(119, 30128, 'Agus Sumanto', NULL, '2019-08-26', 'normal 4', '08:30:00', '17:30:00', '08:43:00', '17:37:00', '00:13:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(120, 30128, 'Agus Sumanto', NULL, '2019-08-27', 'normal 4', '08:30:00', '17:30:00', '08:44:00', '17:36:00', '00:14:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(121, 30128, 'Agus Sumanto', NULL, '2019-08-28', 'normal 4', '08:30:00', '17:30:00', '08:43:00', '17:40:00', '00:13:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(122, 30128, 'Agus Sumanto', NULL, '2019-08-29', 'normal 4', '08:30:00', '17:30:00', '08:51:00', '17:37:00', '00:21:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(123, 30128, 'Agus Sumanto', NULL, '2019-08-30', 'normal 4', '08:30:00', '17:30:00', '08:53:00', '17:32:00', '00:23:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(124, 30128, 'Agus Sumanto', NULL, '2019-09-02', 'normal 4', '08:30:00', '17:30:00', '00:00:00', '00:00:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 'TIDAK ADA Keterangan'),
(125, 30128, 'Agus Sumanto', NULL, '2019-09-03', 'normal 4', '08:30:00', '17:30:00', '00:00:00', '00:00:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 'TIDAK ADA Keterangan'),
(126, 30128, 'Agus Sumanto', NULL, '2019-09-04', 'normal 4', '08:30:00', '17:30:00', '08:50:00', '17:36:00', '00:20:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(127, 30128, 'Agus Sumanto', NULL, '2019-09-05', 'normal 4', '08:30:00', '17:30:00', '08:57:00', '17:36:00', '00:27:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(128, 30128, 'Agus Sumanto', NULL, '2019-09-06', 'normal 4', '08:30:00', '17:30:00', '08:55:00', '17:36:00', '00:25:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(129, 30128, 'Agus Sumanto', NULL, '2019-09-09', 'normal 4', '08:30:00', '17:30:00', '08:50:00', '17:35:00', '00:20:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(130, 30128, 'Agus Sumanto', NULL, '2019-09-10', 'normal 4', '08:30:00', '17:30:00', '08:57:00', '17:38:00', '00:27:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(131, 30128, 'Agus Sumanto', NULL, '2019-09-11', 'normal 4', '08:30:00', '17:30:00', '08:58:00', '17:36:00', '00:28:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(132, 30128, 'Agus Sumanto', NULL, '2019-09-12', 'normal 4', '08:30:00', '17:30:00', '08:49:00', '17:34:00', '00:19:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(133, 30128, 'Agus Sumanto', NULL, '2019-09-13', 'normal 4', '08:30:00', '17:30:00', '08:54:00', '17:37:00', '00:24:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(134, 30128, 'Agus Sumanto', NULL, '2019-09-16', 'normal 4', '08:30:00', '17:30:00', '00:00:00', '00:00:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 'Izin'),
(135, 30128, 'Agus Sumanto', NULL, '2019-09-17', 'normal 4', '08:30:00', '17:30:00', '00:00:00', '00:00:00', NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, 'Sakit ada surat dokter'),
(136, 30128, 'Agus Sumanto', NULL, '2019-09-18', 'normal 4', '08:30:00', '17:30:00', '00:00:00', '00:00:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 'TIDAK ADA Keterangan'),
(137, 30128, 'Agus Sumanto', NULL, '2019-09-19', 'normal 4', '08:30:00', '17:30:00', '08:54:00', '17:50:00', '00:24:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(138, 30128, 'Agus Sumanto', NULL, '2019-09-20', 'normal 4', '08:30:00', '17:30:00', '09:02:00', '00:00:00', '00:32:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(139, 30028, 'Yudhi Heryad', NULL, '2019-08-21', 'normal 4', '08:30:00', '17:30:00', '00:00:00', '00:00:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Meeting di costumer'),
(140, 30028, 'Yudhi Heryad', NULL, '2019-08-22', 'normal 4', '08:30:00', '17:30:00', '09:51:00', '17:17:00', '01:21:00', NULL, '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(141, 30028, 'Yudhi Heryad', NULL, '2019-08-23', 'normal 4', '08:30:00', '17:30:00', '00:00:00', '00:00:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Meeting di costumer'),
(142, 30028, 'Yudhi Heryad', NULL, '2019-08-26', 'normal 4', '08:30:00', '17:30:00', '00:00:00', '00:00:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Meeting di costumer'),
(143, 30028, 'Yudhi Heryad', NULL, '2019-08-27', 'normal 4', '08:30:00', '17:30:00', '09:01:00', '17:36:00', '00:31:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(144, 30028, 'Yudhi Heryad', NULL, '2019-08-28', 'normal 4', '08:30:00', '17:30:00', '00:00:00', '00:00:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Meeting di costumer'),
(145, 30028, 'Yudhi Heryad', NULL, '2019-08-29', 'normal 4', '08:30:00', '17:30:00', '09:49:00', '17:17:00', '01:19:00', NULL, '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(146, 30028, 'Yudhi Heryad', NULL, '2019-08-30', 'normal 4', '08:30:00', '17:30:00', '00:00:00', '00:00:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Meeting di costumer'),
(147, 30028, 'Yudhi Heryad', NULL, '2019-09-02', 'normal 4', '08:30:00', '17:30:00', '09:56:00', '17:22:00', '01:26:00', NULL, '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(148, 30028, 'Yudhi Heryad', NULL, '2019-09-03', 'normal 4', '08:30:00', '17:30:00', '00:00:00', '00:00:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Kerja dari rumah'),
(149, 30028, 'Yudhi Heryad', NULL, '2019-09-04', 'normal 4', '08:30:00', '17:30:00', '00:00:00', '00:00:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Kerja dari rumah'),
(150, 30028, 'Yudhi Heryad', NULL, '2019-09-05', 'normal 4', '08:30:00', '17:30:00', '10:18:00', '17:09:00', '01:48:00', NULL, '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(151, 30028, 'Yudhi Heryad', NULL, '2019-09-06', 'normal 4', '08:30:00', '17:30:00', '00:00:00', '00:00:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Kerja dari rumah'),
(152, 30028, 'Yudhi Heryad', NULL, '2019-09-09', 'normal 4', '08:30:00', '17:30:00', '09:53:00', '17:07:00', '01:23:00', NULL, '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(153, 30028, 'Yudhi Heryad', NULL, '2019-09-10', 'normal 4', '08:30:00', '17:30:00', '00:00:00', '00:00:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Kerja dari rumah'),
(154, 30028, 'Yudhi Heryad', NULL, '2019-09-11', 'normal 4', '08:30:00', '17:30:00', '00:00:00', '00:00:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Kerja dari rumah'),
(155, 30028, 'Yudhi Heryad', NULL, '2019-09-12', 'normal 4', '08:30:00', '17:30:00', '09:48:00', '16:43:00', '01:18:00', NULL, '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(156, 30028, 'Yudhi Heryad', NULL, '2019-09-13', 'normal 4', '08:30:00', '17:30:00', '00:00:00', '00:00:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Kerja dari rumah'),
(157, 30028, 'Yudhi Heryad', NULL, '2019-09-16', 'normal 4', '08:30:00', '17:30:00', '08:43:00', '17:10:00', '00:13:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(158, 30028, 'Yudhi Heryad', NULL, '2019-09-17', 'normal 4', '08:30:00', '17:30:00', '00:00:00', '00:00:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Kerja dari rumah'),
(159, 30028, 'Yudhi Heryad', NULL, '2019-09-18', 'normal 4', '08:30:00', '17:30:00', '00:00:00', '00:00:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Kerja dari rumah'),
(160, 30028, 'Yudhi Heryad', NULL, '2019-09-19', 'normal 4', '08:30:00', '17:30:00', '09:35:00', '17:07:00', '01:05:00', NULL, '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(161, 30028, 'Yudhi Heryad', NULL, '2019-09-20', 'normal 4', '08:30:00', '17:30:00', NULL, '00:00:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Kerja dari rumah'),
(162, 30035, 'Moch Deny Susanto', NULL, '2019-08-21', 'normal 4', '08:30:00', '17:30:00', '08:42:00', '17:31:00', '00:12:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(163, 30035, 'Moch Deny Susanto', NULL, '2019-08-22', 'normal 4', '08:30:00', '17:30:00', '08:26:00', '00:00:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(164, 30035, 'Moch Deny Susanto', NULL, '2019-08-23', 'normal 4', '08:30:00', '17:30:00', '08:26:00', '00:00:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(165, 30035, 'Moch Deny Susanto', NULL, '2019-08-26', 'normal 4', '08:30:00', '17:30:00', '00:00:00', '00:00:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Langsung dari rumah ke PT. Indofarma'),
(166, 30035, 'Moch Deny Susanto', NULL, '2019-08-27', 'normal 4', '08:30:00', '17:30:00', '08:22:00', '17:38:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(167, 30035, 'Moch Deny Susanto', NULL, '2019-08-28', 'normal 4', '08:30:00', '17:30:00', '00:00:00', '00:00:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Langsung dari rumah ke PT. TACI'),
(168, 30035, 'Moch Deny Susanto', NULL, '2019-08-29', 'normal 4', '08:30:00', '17:30:00', '08:21:00', '17:31:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(169, 30035, 'Moch Deny Susanto', NULL, '2019-08-30', 'normal 4', '08:30:00', '17:30:00', '08:28:00', '17:32:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(170, 30035, 'Moch Deny Susanto', NULL, '2019-09-02', 'normal 4', '08:30:00', '17:30:00', '08:22:00', '17:30:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(171, 30035, 'Moch Deny Susanto', NULL, '2019-09-03', 'normal 4', '08:30:00', '17:30:00', '09:13:00', '17:47:00', '00:43:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(172, 30035, 'Moch Deny Susanto', NULL, '2019-09-04', 'normal 4', '08:30:00', '17:30:00', '08:23:00', '17:31:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(173, 30035, 'Moch Deny Susanto', NULL, '2019-09-05', 'normal 4', '08:30:00', '17:30:00', '00:00:00', '00:00:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ke PT.TACI '),
(174, 30035, 'Moch Deny Susanto', NULL, '2019-09-06', 'normal 4', '08:30:00', '17:30:00', '08:14:00', '17:33:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(175, 30035, 'Moch Deny Susanto', NULL, '2019-09-09', 'normal 4', '08:30:00', '17:30:00', '08:35:00', '17:50:00', '00:05:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(176, 30035, 'Moch Deny Susanto', NULL, '2019-09-10', 'normal 4', '08:30:00', '17:30:00', '08:24:00', '17:40:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(177, 30035, 'Moch Deny Susanto', NULL, '2019-09-11', 'normal 4', '08:30:00', '17:30:00', '00:00:00', '00:00:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Ke PT.Denso'),
(178, 30035, 'Moch Deny Susanto', NULL, '2019-09-12', 'normal 4', '08:30:00', '17:30:00', '08:31:00', '17:35:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(179, 30035, 'Moch Deny Susanto', NULL, '2019-09-13', 'normal 4', '08:30:00', '17:30:00', '00:00:00', '00:00:00', NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, 'Sakit tidak ada surat'),
(180, 30035, 'Moch Deny Susanto', NULL, '2019-09-16', 'normal 4', '08:30:00', '17:30:00', '08:30:00', '00:00:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(181, 30035, 'Moch Deny Susanto', NULL, '2019-09-17', 'normal 4', '08:30:00', '17:30:00', '08:31:00', '00:00:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(182, 30035, 'Moch Deny Susanto', NULL, '2019-09-18', 'normal 4', '08:30:00', '17:30:00', '08:33:00', '17:33:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(183, 30035, 'Moch Deny Susanto', NULL, '2019-09-19', 'normal 4', '08:30:00', '17:30:00', '08:31:00', '17:36:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(184, 30035, 'Moch Deny Susanto', NULL, '2019-09-20', 'normal 4', '08:30:00', '17:30:00', '08:30:00', '00:00:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(185, 30052, 'Sinta Novelia Butar Buta', NULL, '2019-08-21', 'normal 4', '08:30:00', '17:30:00', '08:30:00', '17:56:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(186, 30052, 'Sinta Novelia Butar Buta', NULL, '2019-08-22', 'normal 4', '08:30:00', '17:30:00', '08:26:00', '17:55:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(187, 30052, 'Sinta Novelia Butar Buta', NULL, '2019-08-23', 'normal 4', '08:30:00', '17:30:00', '08:33:00', '17:52:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(188, 30052, 'Sinta Novelia Butar Buta', NULL, '2019-08-26', 'normal 4', '08:30:00', '17:30:00', '08:49:00', '17:54:00', '00:19:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(189, 30052, 'Sinta Novelia Butar Buta', NULL, '2019-08-27', 'normal 4', '08:30:00', '17:30:00', '08:10:00', '17:57:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(190, 30052, 'Sinta Novelia Butar Buta', NULL, '2019-08-28', 'normal 4', '08:30:00', '17:30:00', '08:18:00', '00:00:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(191, 30052, 'Sinta Novelia Butar Buta', NULL, '2019-08-29', 'normal 4', '08:30:00', '17:30:00', '08:32:00', '17:54:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(192, 30052, 'Sinta Novelia Butar Buta', NULL, '2019-08-30', 'normal 4', '08:30:00', '17:30:00', '08:16:00', '17:43:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(193, 30052, 'Sinta Novelia Butar Buta', NULL, '2019-09-02', 'normal 4', '08:30:00', '17:30:00', '08:36:00', '17:46:00', '00:06:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(194, 30052, 'Sinta Novelia Butar Buta', NULL, '2019-09-03', 'normal 4', '08:30:00', '17:30:00', '08:39:00', '18:07:00', '00:09:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(195, 30052, 'Sinta Novelia Butar Buta', NULL, '2019-09-04', 'normal 4', '08:30:00', '17:30:00', '08:32:00', '17:49:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(196, 30052, 'Sinta Novelia Butar Buta', NULL, '2019-09-05', 'normal 4', '08:30:00', '17:30:00', '09:14:00', '17:46:00', '00:44:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(197, 30052, 'Sinta Novelia Butar Buta', NULL, '2019-09-06', 'normal 4', '08:30:00', '17:30:00', '08:42:00', '17:55:00', '00:12:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(198, 30052, 'Sinta Novelia Butar Buta', NULL, '2019-09-09', 'normal 4', '08:30:00', '17:30:00', '08:38:00', '17:49:00', '00:08:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(199, 30052, 'Sinta Novelia Butar Buta', NULL, '2019-09-10', 'normal 4', '08:30:00', '17:30:00', '08:34:00', '17:44:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(200, 30052, 'Sinta Novelia Butar Buta', NULL, '2019-09-11', 'normal 4', '08:30:00', '17:30:00', '08:33:00', '16:06:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201, 30052, 'Sinta Novelia Butar Buta', NULL, '2019-09-12', 'normal 4', '08:30:00', '17:30:00', '08:29:00', '17:41:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(202, 30052, 'Sinta Novelia Butar Buta', NULL, '2019-09-13', 'normal 4', '08:30:00', '17:30:00', '08:46:00', '17:34:00', '00:16:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(203, 30052, 'Sinta Novelia Butar Buta', NULL, '2019-09-16', 'normal 4', '08:30:00', '17:30:00', '08:34:00', '17:55:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(204, 30052, 'Sinta Novelia Butar Buta', NULL, '2019-09-17', 'normal 4', '08:30:00', '17:30:00', '08:32:00', '17:53:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(205, 30052, 'Sinta Novelia Butar Buta', NULL, '2019-09-18', 'normal 4', '08:30:00', '17:30:00', '08:45:00', '17:35:00', '00:15:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(206, 30052, 'Sinta Novelia Butar Buta', NULL, '2019-09-19', 'normal 4', '08:30:00', '17:30:00', '08:50:00', '17:38:00', '00:20:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(207, 30052, 'Sinta Novelia Butar Buta', NULL, '2019-09-20', 'normal 4', '08:30:00', '17:30:00', '00:00:00', '00:00:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Hadir'),
(208, 30025, 'Sumitra B Wasi', NULL, '2019-08-21', 'normal 2', '08:30:00', '17:30:00', '08:42:00', '00:00:00', '00:12:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(209, 30025, 'Sumitra B Wasi', NULL, '2019-08-22', 'normal 2', '08:30:00', '17:30:00', '09:08:00', '00:00:00', '00:38:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(210, 30025, 'Sumitra B Wasi', NULL, '2019-08-23', 'normal 2', '08:30:00', '17:30:00', '08:28:00', '17:33:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(211, 30025, 'Sumitra B Wasi', NULL, '2019-08-26', 'normal 2', '08:30:00', '17:30:00', '08:43:00', '17:37:00', '00:13:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(212, 30025, 'Sumitra B Wasi', NULL, '2019-08-27', 'normal 2', '08:30:00', '17:30:00', '00:00:00', '00:00:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Hadir Lupa Absen'),
(213, 30025, 'Sumitra B Wasi', NULL, '2019-08-28', 'normal 2', '08:30:00', '17:30:00', '08:44:00', '17:33:00', '00:14:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(214, 30025, 'Sumitra B Wasi', NULL, '2019-08-29', 'normal 2', '08:30:00', '17:30:00', '08:28:00', '17:33:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(215, 30025, 'Sumitra B Wasi', NULL, '2019-08-30', 'normal 2', '08:30:00', '17:30:00', '08:41:00', '17:32:00', '00:11:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(216, 30025, 'Sumitra B Wasi', NULL, '2019-09-02', 'normal 2', '08:30:00', '17:30:00', '08:35:00', '00:00:00', '00:05:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(217, 30025, 'Sumitra B Wasi', NULL, '2019-09-03', 'normal 2', '08:30:00', '17:30:00', '07:34:00', '17:39:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(218, 30025, 'Sumitra B Wasi', NULL, '2019-09-04', 'normal 2', '08:30:00', '17:30:00', '08:23:00', '17:37:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(219, 30025, 'Sumitra B Wasi', NULL, '2019-09-05', 'normal 2', '08:30:00', '17:30:00', '08:07:00', '17:32:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(220, 30025, 'Sumitra B Wasi', NULL, '2019-09-06', 'normal 2', '08:30:00', '17:30:00', '08:28:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(221, 30025, 'Sumitra B Wasi', NULL, '2019-09-09', 'normal 2', '08:30:00', '17:30:00', '08:46:00', '17:34:00', '00:16:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(222, 30025, 'Sumitra B Wasi', NULL, '2019-09-10', 'normal 2', '08:30:00', '17:30:00', '08:50:00', '17:49:00', '00:20:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(223, 30025, 'Sumitra B Wasi', NULL, '2019-09-11', 'normal 2', '08:30:00', '17:30:00', '08:39:00', '00:00:00', '00:09:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(224, 30025, 'Sumitra B Wasi', NULL, '2019-09-12', 'normal 2', '08:30:00', '17:30:00', '08:27:00', '17:39:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(225, 30025, 'Sumitra B Wasi', NULL, '2019-09-13', 'normal 2', '08:30:00', '17:30:00', '08:08:00', '17:32:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(226, 30025, 'Sumitra B Wasi', NULL, '2019-09-16', 'normal 2', '08:30:00', '17:30:00', '08:24:00', '17:32:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(227, 30025, 'Sumitra B Wasi', NULL, '2019-09-17', 'normal 2', '08:30:00', '17:30:00', '08:19:00', '17:33:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(228, 30025, 'Sumitra B Wasi', NULL, '2019-09-18', 'normal 2', '08:30:00', '17:30:00', '08:38:00', '17:33:00', '00:08:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(229, 30025, 'Sumitra B Wasi', NULL, '2019-09-19', 'normal 2', '08:30:00', '17:30:00', '08:22:00', '17:35:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(230, 30025, 'Sumitra B Wasi', NULL, '2019-09-20', 'normal 2', '08:30:00', '17:30:00', '08:28:00', '00:00:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(231, 30040, 'Muhamad Syarif Roseno', NULL, '2019-08-21', 'normal 2', '08:30:00', '17:30:00', '08:35:00', '17:34:00', '00:05:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(232, 30040, 'Muhamad Syarif Roseno', NULL, '2019-08-22', 'normal 2', '08:30:00', '17:30:00', '08:29:00', '00:00:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(233, 30040, 'Muhamad Syarif Roseno', NULL, '2019-08-23', 'normal 2', '08:30:00', '17:30:00', '08:41:00', '17:36:00', '00:11:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(234, 30040, 'Muhamad Syarif Roseno', NULL, '2019-08-26', 'normal 2', '08:30:00', '17:30:00', '00:00:00', '00:00:00', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, 'Izin urus dokumen operasi'),
(235, 30040, 'Muhamad Syarif Roseno', NULL, '2019-08-27', 'normal 2', '08:30:00', '17:30:00', '08:59:00', '00:00:00', '00:29:00', '00:00:01', NULL, NULL, NULL, NULL, 1, NULL, NULL, 'Izin Pulang setengah hari ibu meninggal dunia'),
(236, 30040, 'Muhamad Syarif Roseno', NULL, '2019-08-28', 'normal 2', '08:30:00', '17:30:00', '00:00:00', '00:00:00', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, 'Izin ibu meninggal dunia'),
(237, 30040, 'Muhamad Syarif Roseno', NULL, '2019-08-29', 'normal 2', '08:30:00', '17:30:00', '00:00:00', '00:00:00', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, 'Izin ibu meninggal dunia'),
(238, 30040, 'Muhamad Syarif Roseno', NULL, '2019-08-30', 'normal 2', '08:30:00', '17:30:00', '00:00:00', '00:00:00', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, 'Izin ibu meninggal dunia'),
(239, 30040, 'Muhamad Syarif Roseno', NULL, '2019-09-02', 'normal 2', '08:30:00', '17:30:00', '08:21:00', '17:34:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(240, 30040, 'Muhamad Syarif Roseno', NULL, '2019-09-03', 'normal 2', '08:30:00', '17:30:00', '08:22:00', '17:32:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(241, 30040, 'Muhamad Syarif Roseno', NULL, '2019-09-04', 'normal 2', '08:30:00', '17:30:00', '00:00:00', '17:35:00', '01:00:00', NULL, '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, 'TIDAK ada absen masuk'),
(242, 30040, 'Muhamad Syarif Roseno', NULL, '2019-09-05', 'normal 2', '08:30:00', '17:30:00', '08:39:00', '00:00:00', '00:09:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(243, 30040, 'Muhamad Syarif Roseno', NULL, '2019-09-06', 'normal 2', '08:30:00', '17:30:00', '08:12:00', '17:33:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(244, 30040, 'Muhamad Syarif Roseno', NULL, '2019-09-09', 'normal 2', '08:30:00', '17:30:00', '09:52:00', '17:32:00', '01:22:00', NULL, '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, 'TELAT'),
(245, 30040, 'Muhamad Syarif Roseno', NULL, '2019-09-10', 'normal 2', '08:30:00', '17:30:00', '08:19:00', '17:31:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(246, 30040, 'Muhamad Syarif Roseno', NULL, '2019-09-11', 'normal 2', '08:30:00', '17:30:00', '08:26:00', '17:32:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(247, 30040, 'Muhamad Syarif Roseno', NULL, '2019-09-12', 'normal 2', '08:30:00', '17:30:00', '08:24:00', '17:32:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(248, 30040, 'Muhamad Syarif Roseno', NULL, '2019-09-13', 'normal 2', '08:30:00', '17:30:00', '08:33:00', '17:32:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(249, 30040, 'Muhamad Syarif Roseno', NULL, '2019-09-16', 'normal 2', '08:30:00', '17:30:00', '08:20:00', '17:31:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(250, 30040, 'Muhamad Syarif Roseno', NULL, '2019-09-17', 'normal 2', '08:30:00', '17:30:00', '08:28:00', '17:33:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(251, 30040, 'Muhamad Syarif Roseno', NULL, '2019-09-18', 'normal 2', '08:30:00', '17:30:00', '08:26:00', '17:32:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(252, 30040, 'Muhamad Syarif Roseno', NULL, '2019-09-19', 'normal 2', '08:30:00', '17:30:00', '08:54:00', '17:32:00', '00:24:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(253, 30040, 'Muhamad Syarif Roseno', NULL, '2019-09-20', 'normal 2', '08:30:00', '17:30:00', '08:21:00', '00:00:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(254, 30042, 'Shandy Wibowo Budiman', NULL, '2019-08-21', 'normal 2', '08:30:00', '17:30:00', '08:28:00', '17:41:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(255, 30042, 'Shandy Wibowo Budiman', NULL, '2019-08-22', 'normal 2', '08:30:00', '17:30:00', '08:22:00', '17:35:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(256, 30042, 'Shandy Wibowo Budiman', NULL, '2019-08-23', 'normal 2', '08:30:00', '17:30:00', '08:27:00', '17:43:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(257, 30042, 'Shandy Wibowo Budiman', NULL, '2019-08-26', 'normal 2', '08:30:00', '17:30:00', '08:52:00', '00:00:00', '00:22:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(258, 30042, 'Shandy Wibowo Budiman', NULL, '2019-08-27', 'normal 2', '08:30:00', '17:30:00', '08:15:00', '17:38:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(259, 30042, 'Shandy Wibowo Budiman', NULL, '2019-08-28', 'normal 2', '08:30:00', '17:30:00', '08:11:00', '17:42:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(260, 30042, 'Shandy Wibowo Budiman', NULL, '2019-08-29', 'normal 2', '08:30:00', '17:30:00', '08:35:00', '17:46:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(261, 30042, 'Shandy Wibowo Budiman', NULL, '2019-08-30', 'normal 2', '08:30:00', '17:30:00', '08:15:00', '17:43:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(262, 30042, 'Shandy Wibowo Budiman', NULL, '2019-09-02', 'normal 2', '08:30:00', '17:30:00', '08:22:00', '17:37:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(263, 30042, 'Shandy Wibowo Budiman', NULL, '2019-09-03', 'normal 2', '08:30:00', '17:30:00', '08:19:00', '17:53:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(264, 30042, 'Shandy Wibowo Budiman', NULL, '2019-09-04', 'normal 2', '08:30:00', '17:30:00', '08:32:00', '17:43:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(265, 30042, 'Shandy Wibowo Budiman', NULL, '2019-09-05', 'normal 2', '08:30:00', '17:30:00', '08:29:00', '17:39:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(266, 30042, 'Shandy Wibowo Budiman', NULL, '2019-09-06', 'normal 2', '08:30:00', '17:30:00', '08:22:00', '00:00:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(267, 30042, 'Shandy Wibowo Budiman', NULL, '2019-09-09', 'normal 2', '08:30:00', '17:30:00', '07:22:00', '17:34:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(268, 30042, 'Shandy Wibowo Budiman', NULL, '2019-09-10', 'normal 2', '08:30:00', '17:30:00', '08:43:00', '17:57:00', '00:13:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(269, 30042, 'Shandy Wibowo Budiman', NULL, '2019-09-11', 'normal 2', '08:30:00', '17:30:00', '08:15:00', '00:00:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(270, 30042, 'Shandy Wibowo Budiman', NULL, '2019-09-12', 'normal 2', '08:30:00', '17:30:00', '08:06:00', '17:49:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(271, 30042, 'Shandy Wibowo Budiman', NULL, '2019-09-13', 'normal 2', '08:30:00', '17:30:00', '08:27:00', '17:48:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(272, 30042, 'Shandy Wibowo Budiman', NULL, '2019-09-16', 'normal 2', '08:30:00', '17:30:00', '08:18:00', '17:33:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(273, 30042, 'Shandy Wibowo Budiman', NULL, '2019-09-17', 'normal 2', '08:30:00', '17:30:00', '08:18:00', '17:35:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(274, 30042, 'Shandy Wibowo Budiman', NULL, '2019-09-18', 'normal 2', '08:30:00', '17:30:00', '08:23:00', '17:42:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(275, 30042, 'Shandy Wibowo Budiman', NULL, '2019-09-19', 'normal 2', '08:30:00', '17:30:00', '08:10:00', '17:39:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(276, 30042, 'Shandy Wibowo Budiman', NULL, '2019-09-20', 'normal 2', '08:30:00', '17:30:00', '08:34:00', '00:00:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(277, 30070, 'ahmad Wahyu', 0, '2019-08-21', 'normal 4', '08:30:00', '17:30:00', '09:01:00', '17:58:00', '00:31:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(278, 30070, 'ahmad Wahyu', 0, '2019-08-22', 'normal 4', '08:30:00', '17:30:00', '09:03:00', '00:00:00', '00:33:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `absen` (`id`, `emp_no`, `name`, `auto_assign`, `date`, `timetable`, `on_duty`, `off_duty`, `clock_in`, `clock_out`, `late`, `late_bellow`, `late_over`, `early`, `absen`, `sakit`, `cuti`, `unpaid`, `potongan`, `keterangan`) VALUES
(279, 30070, 'ahmad Wahyu', 0, '2019-08-23', 'normal 4', '08:30:00', '17:30:00', '09:00:00', '17:42:00', '00:30:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(280, 30070, 'ahmad Wahyu', 0, '2019-08-26', 'normal 4', '08:30:00', '17:30:00', '09:24:00', '00:00:00', '00:54:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(281, 30070, 'ahmad Wahyu', 0, '2019-08-27', 'normal 4', '08:30:00', '17:30:00', '09:05:00', '17:34:00', '00:35:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(282, 30070, 'ahmad Wahyu', 0, '2019-08-28', 'normal 4', '08:30:00', '17:30:00', '09:00:00', '17:47:00', '00:30:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(283, 30070, 'ahmad Wahyu', 0, '2019-08-29', 'normal 4', '08:30:00', '17:30:00', '09:01:00', '17:37:00', '00:31:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(284, 30070, 'ahmad Wahyu', 0, '2019-08-30', 'normal 4', '08:30:00', '17:30:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', NULL, NULL, NULL, NULL, NULL, 1, NULL, 'TIDAK ADA Keterangan'),
(285, 30070, 'ahmad Wahyu', 0, '2019-09-02', 'normal 4', '08:30:00', '17:30:00', '09:07:00', '00:00:00', '00:37:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(286, 30070, 'ahmad Wahyu', 0, '2019-09-03', 'normal 4', '08:30:00', '17:30:00', '09:27:00', '18:15:00', '00:57:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(287, 30070, 'ahmad Wahyu', 0, '2019-09-04', 'normal 4', '08:30:00', '17:30:00', '08:58:00', '17:37:00', '00:28:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(288, 30070, 'ahmad Wahyu', 0, '2019-09-05', 'normal 4', '08:30:00', '17:30:00', '09:00:00', '17:46:00', '00:30:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(289, 30070, 'ahmad Wahyu', 0, '2019-09-06', 'normal 4', '08:30:00', '17:30:00', '09:05:00', '00:00:00', '00:35:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(290, 30070, 'ahmad Wahyu', 0, '2019-09-09', 'normal 4', '08:30:00', '17:30:00', '08:57:00', '17:36:00', '00:27:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(291, 30070, 'ahmad Wahyu', 0, '2019-09-10', 'normal 4', '08:30:00', '17:30:00', '09:06:00', '17:37:00', '00:36:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(292, 30070, 'ahmad Wahyu', 0, '2019-09-11', 'normal 4', '08:30:00', '17:30:00', '09:05:00', '17:37:00', '00:35:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(293, 30070, 'ahmad Wahyu', 0, '2019-09-12', 'normal 4', '08:30:00', '17:30:00', '09:03:00', '17:34:00', '00:33:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(294, 30070, 'ahmad Wahyu', 0, '2019-09-13', 'normal 4', '08:30:00', '17:30:00', '09:14:00', '17:38:00', '00:44:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(295, 30070, 'ahmad Wahyu', 0, '2019-09-16', 'normal 4', '08:30:00', '17:30:00', '08:57:00', '17:42:00', '00:27:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(296, 30070, 'ahmad Wahyu', 0, '2019-09-17', 'normal 4', '08:30:00', '17:30:00', '00:00:00', '17:40:00', '01:00:00', NULL, '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, 'TIDAK ada absen masuk'),
(297, 30070, 'ahmad Wahyu', 0, '2019-09-18', 'normal 4', '08:30:00', '17:30:00', '09:00:00', '17:37:00', '00:30:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(298, 30070, 'ahmad Wahyu', 0, '2019-09-19', 'normal 4', '08:30:00', '17:30:00', '09:09:00', '17:40:00', '00:39:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(299, 30070, 'ahmad Wahyu', 0, '2019-09-20', 'normal 4', '08:30:00', '17:30:00', '09:09:00', '18:08:00', '00:39:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(300, 69, 'DIAN PANGESTU', NULL, '0000-00-00', 'NORMAL', '00:00:00', '00:00:01', '00:00:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(301, 69, 'DIAN PANGESTU', NULL, '0000-00-00', 'NORMAL', '00:00:00', '00:00:01', '00:00:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(302, 69, 'DIAN PANGESTU', NULL, '0000-00-00', 'NORMAL', '00:00:00', '00:00:01', '00:00:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(303, 69, 'DIAN PANGESTU', NULL, '0000-00-00', 'NORMAL', '00:00:00', '00:00:01', '00:00:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(304, 69, 'DIAN PANGESTU', NULL, '0000-00-00', 'NORMAL', '00:00:00', '00:00:01', '00:00:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(305, 69, 'DIAN PANGESTU', NULL, '0000-00-00', 'NORMAL', '00:00:00', '00:00:01', '00:00:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(306, 69, 'DIAN PANGESTU', NULL, '0000-00-00', 'NORMAL', '00:00:00', '00:00:01', '00:00:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(307, 69, 'DIAN PANGESTU', NULL, '0000-00-00', 'NORMAL', '00:00:00', '00:00:01', '00:00:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(308, 69, 'DIAN PANGESTU', NULL, '0000-00-00', 'NORMAL', '00:00:00', '00:00:01', '00:00:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(309, 69, 'DIAN PANGESTU', NULL, '0000-00-00', 'NORMAL', '00:00:00', '00:00:01', '00:00:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(310, 69, 'DIAN PANGESTU', NULL, '0000-00-00', 'NORMAL', '00:00:00', '00:00:01', '00:00:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(311, 69, 'DIAN PANGESTU', NULL, '0000-00-00', 'NORMAL', '00:00:00', '00:00:01', '00:00:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(312, 69, 'DIAN PANGESTU', NULL, '0000-00-00', 'NORMAL', '00:00:00', '00:00:01', '00:00:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(313, 69, 'DIAN PANGESTU', NULL, '0000-00-00', 'NORMAL', '00:00:00', '00:00:01', '00:00:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(314, 69, 'DIAN PANGESTU', NULL, '0000-00-00', 'NORMAL', '00:00:00', '00:00:01', '00:00:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(315, 69, 'DIAN PANGESTU', NULL, '0000-00-00', 'NORMAL', '00:00:00', '00:00:01', '00:00:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(316, 69, 'DIAN PANGESTU', NULL, '0000-00-00', 'NORMAL', '00:00:00', '00:00:01', '00:00:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(317, 69, 'DIAN PANGESTU', NULL, '0000-00-00', 'NORMAL', '00:00:00', '00:00:01', '00:00:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(318, 69, 'DIAN PANGESTU', NULL, '0000-00-00', 'NORMAL', '00:00:00', '00:00:01', '00:00:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(319, 69, 'DIAN PANGESTU', NULL, '0000-00-00', 'NORMAL', '00:00:00', '00:00:01', '00:00:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(320, 69, 'DIAN PANGESTU', NULL, '0000-00-00', 'NORMAL', '00:00:00', '00:00:01', '00:00:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(321, 69, 'DIAN PANGESTU', NULL, '0000-00-00', 'NORMAL', '00:00:00', '00:00:01', '00:00:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(322, 69, 'DIAN PANGESTU', NULL, '0000-00-00', 'NORMAL', '00:00:00', '00:00:01', '00:00:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(323, 70, 'PRILI', NULL, '0000-00-00', 'NORMAL', '00:00:00', '00:00:01', '00:00:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(324, 70, 'PRILI', NULL, '0000-00-00', 'NORMAL', '00:00:00', '00:00:01', '00:00:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(325, 70, 'PRILI', NULL, '0000-00-00', 'NORMAL', '00:00:00', '00:00:01', '00:00:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(326, 70, 'PRILI', NULL, '0000-00-00', 'NORMAL', '00:00:00', '00:00:01', '00:00:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(327, 70, 'PRILI', NULL, '0000-00-00', 'NORMAL', '00:00:00', '00:00:01', '00:00:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(328, 70, 'PRILI', NULL, '0000-00-00', 'NORMAL', '00:00:00', '00:00:01', '00:00:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(329, 70, 'PRILI', NULL, '0000-00-00', 'NORMAL', '00:00:00', '00:00:01', '00:00:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(330, 70, 'PRILI', NULL, '0000-00-00', 'NORMAL', '00:00:00', '00:00:01', '00:00:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(331, 70, 'PRILI', NULL, '0000-00-00', 'NORMAL', '00:00:00', '00:00:01', '00:00:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(332, 70, 'PRILI', NULL, '0000-00-00', 'NORMAL', '00:00:00', '00:00:01', '00:00:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(333, 70, 'PRILI', NULL, '0000-00-00', 'NORMAL', '00:00:00', '00:00:01', '00:00:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(334, 70, 'PRILI', NULL, '0000-00-00', 'NORMAL', '00:00:00', '00:00:01', '00:00:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(335, 70, 'PRILI', NULL, '0000-00-00', 'NORMAL', '00:00:00', '00:00:01', '00:00:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(336, 70, 'PRILI', NULL, '0000-00-00', 'NORMAL', '00:00:00', '00:00:01', '00:00:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(337, 70, 'PRILI', NULL, '0000-00-00', 'NORMAL', '00:00:00', '00:00:01', '00:00:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(338, 70, 'PRILI', NULL, '0000-00-00', 'NORMAL', '00:00:00', '00:00:01', '00:00:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(339, 70, 'PRILI', NULL, '0000-00-00', 'NORMAL', '00:00:00', '00:00:01', '00:00:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(340, 70, 'PRILI', NULL, '0000-00-00', 'NORMAL', '00:00:00', '00:00:01', '00:00:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(341, 70, 'PRILI', NULL, '0000-00-00', 'NORMAL', '00:00:00', '00:00:01', '00:00:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(342, 70, 'PRILI', NULL, '0000-00-00', 'NORMAL', '00:00:00', '00:00:01', '00:00:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(343, 70, 'PRILI', NULL, '0000-00-00', 'NORMAL', '00:00:00', '00:00:01', '00:00:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(344, 70, 'PRILI', NULL, '0000-00-00', 'NORMAL', '00:00:00', '00:00:01', '00:00:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(345, 70, 'PRILI', NULL, '0000-00-00', 'NORMAL', '00:00:00', '00:00:01', '00:00:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(346, 71, 'HASAN', NULL, '0000-00-00', 'NORMAL', '00:00:00', '00:00:01', '00:00:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(347, 71, 'HASAN', NULL, '0000-00-00', 'NORMAL', '00:00:00', '00:00:01', '00:00:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(348, 71, 'HASAN', NULL, '0000-00-00', 'NORMAL', '00:00:00', '00:00:01', '00:00:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(349, 71, 'HASAN', NULL, '0000-00-00', 'NORMAL', '00:00:00', '00:00:01', '00:00:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(350, 71, 'HASAN', NULL, '0000-00-00', 'NORMAL', '00:00:00', '00:00:01', '00:00:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(351, 71, 'HASAN', NULL, '0000-00-00', 'NORMAL', '00:00:00', '00:00:01', '00:00:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(352, 71, 'HASAN', NULL, '0000-00-00', 'NORMAL', '00:00:00', '00:00:01', '00:00:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(353, 71, 'HASAN', NULL, '0000-00-00', 'NORMAL', '00:00:00', '00:00:01', '00:00:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(354, 71, 'HASAN', NULL, '0000-00-00', 'NORMAL', '00:00:00', '00:00:01', '00:00:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(355, 71, 'HASAN', NULL, '0000-00-00', 'NORMAL', '00:00:00', '00:00:01', '00:00:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(356, 71, 'HASAN', NULL, '0000-00-00', 'NORMAL', '00:00:00', '00:00:01', '00:00:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(357, 71, 'HASAN', NULL, '0000-00-00', 'NORMAL', '00:00:00', '00:00:01', '00:00:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(358, 71, 'HASAN', NULL, '0000-00-00', 'NORMAL', '00:00:00', '00:00:01', '00:00:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(359, 71, 'HASAN', NULL, '0000-00-00', 'NORMAL', '00:00:00', '00:00:01', '00:00:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(360, 71, 'HASAN', NULL, '0000-00-00', 'NORMAL', '00:00:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, 'Ijin Sakit'),
(361, 71, 'HASAN', NULL, '0000-00-00', 'NORMAL', '00:00:00', '00:00:01', '00:00:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(362, 71, 'HASAN', NULL, '0000-00-00', 'NORMAL', '00:00:00', '00:00:01', '00:00:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Dinas Luar kota (Jombang)'),
(363, 71, 'HASAN', NULL, '0000-00-00', 'NORMAL', '00:00:00', '00:00:01', '00:00:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(364, 71, 'HASAN', NULL, '0000-00-00', 'NORMAL', '00:00:00', '00:00:01', '00:00:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(365, 71, 'HASAN', NULL, '0000-00-00', 'NORMAL', '00:00:00', '00:00:01', '00:00:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(366, 71, 'HASAN', NULL, '0000-00-00', 'NORMAL', '00:00:00', '00:00:01', '00:00:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(367, 71, 'HASAN', NULL, '0000-00-00', 'NORMAL', '00:00:00', '00:00:01', '00:00:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(368, 71, 'HASAN', NULL, '0000-00-00', 'NORMAL', '00:00:00', '00:00:01', '00:00:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(369, 75, 'FAVIAN EZZAR', NULL, '0000-00-00', 'NORMAL', '00:00:00', '00:00:01', '00:00:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(370, 75, 'FAVIAN EZZAR', NULL, '0000-00-00', 'NORMAL', '00:00:00', '00:00:01', '00:00:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(371, 75, 'FAVIAN EZZAR', NULL, '0000-00-00', 'NORMAL', '00:00:00', '00:00:01', '00:00:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(372, 75, 'FAVIAN EZZAR', NULL, '0000-00-00', 'NORMAL', '00:00:00', '00:00:01', '00:00:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(373, 75, 'FAVIAN EZZAR', NULL, '0000-00-00', 'NORMAL', '00:00:00', '00:00:01', '00:00:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(374, 75, 'FAVIAN EZZAR', NULL, '0000-00-00', 'NORMAL', '00:00:00', '00:00:01', '00:00:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(375, 75, 'FAVIAN EZZAR', NULL, '0000-00-00', 'NORMAL', '00:00:00', '00:00:01', NULL, '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Visit Customer'),
(376, 75, 'FAVIAN EZZAR', NULL, '0000-00-00', 'NORMAL', '00:00:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, 'Ijin Sakit'),
(377, 75, 'FAVIAN EZZAR', NULL, '0000-00-00', 'NORMAL', '00:00:00', '00:00:01', '00:00:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(378, 75, 'FAVIAN EZZAR', NULL, '0000-00-00', 'NORMAL', '00:00:00', '00:00:01', '00:00:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(379, 75, 'FAVIAN EZZAR', NULL, '0000-00-00', 'NORMAL', '00:00:00', '00:00:01', '00:00:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(380, 75, 'FAVIAN EZZAR', NULL, '0000-00-00', 'NORMAL', '00:00:00', '00:00:01', '00:00:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(381, 75, 'FAVIAN EZZAR', NULL, '0000-00-00', 'NORMAL', '00:00:00', '00:00:01', '00:00:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(382, 75, 'FAVIAN EZZAR', NULL, '0000-00-00', 'NORMAL', '00:00:00', '00:00:01', '00:00:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(383, 75, 'FAVIAN EZZAR', NULL, '0000-00-00', 'NORMAL', '00:00:00', '00:00:01', '00:00:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(384, 75, 'FAVIAN EZZAR', NULL, '0000-00-00', 'NORMAL', '00:00:00', '00:00:01', '00:00:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(385, 75, 'FAVIAN EZZAR', NULL, '0000-00-00', 'NORMAL', '00:00:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Dinas Luar kota (Jombang)'),
(386, 75, 'FAVIAN EZZAR', NULL, '0000-00-00', 'NORMAL', '00:00:00', '00:00:01', '00:00:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(387, 75, 'FAVIAN EZZAR', NULL, '0000-00-00', 'NORMAL', '00:00:00', '00:00:01', '00:00:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(388, 75, 'FAVIAN EZZAR', NULL, '0000-00-00', 'NORMAL', '00:00:00', '00:00:01', '00:00:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(389, 75, 'FAVIAN EZZAR', NULL, '0000-00-00', 'NORMAL', '00:00:00', '00:00:01', '00:00:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(390, 75, 'FAVIAN EZZAR', NULL, '0000-00-00', 'NORMAL', '00:00:00', '00:00:01', '00:00:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(391, 75, 'FAVIAN EZZAR', NULL, '0000-00-00', 'NORMAL', '00:00:00', '00:00:01', '00:00:00', '00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bpjs`
--

CREATE TABLE IF NOT EXISTS `bpjs` (
  `id_bpjs` int(8) NOT NULL AUTO_INCREMENT,
  `jenis` varchar(100) NOT NULL,
  `nama` text NOT NULL,
  `persentase` decimal(4,2) NOT NULL,
  `perusahaan` decimal(4,2) DEFAULT NULL,
  `pegawai` decimal(4,2) DEFAULT NULL,
  PRIMARY KEY (`id_bpjs`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `bpjs`
--

INSERT INTO `bpjs` (`id_bpjs`, `jenis`, `nama`, `persentase`, `perusahaan`, `pegawai`) VALUES
(1, 'BPJS Ketenagakerjaan', 'Jaminan Hari Tua', '0.57', '0.37', '0.20'),
(2, 'BPJS Kentenagakerjaan', 'Jaminan Kecelakaan Kerja', '0.24', '0.24', '0.00'),
(3, 'BPJS Ketenagakerjaan', 'Jaminan Kematian', '0.30', '0.30', '0.00');

-- --------------------------------------------------------

--
-- Table structure for table `cabang`
--

CREATE TABLE IF NOT EXISTS `cabang` (
  `id_cabang` varchar(20) NOT NULL,
  `nama_cabang` varchar(255) NOT NULL,
  `alamat_cabang` varchar(255) NOT NULL,
  `kota` varchar(255) NOT NULL,
  PRIMARY KEY (`id_cabang`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cabang`
--

INSERT INTO `cabang` (`id_cabang`, `nama_cabang`, `alamat_cabang`, `kota`) VALUES
('1231', 'IMV cabang bandung 001', 'Jl Lembang no 01', 'Bandung'),
('1234', 'IMV cabang jakarta 001', 'Cakung No 168', 'Jakarta'),
('1235', 'IMV Cabang Jakarta 002', 'Bandengan Selatan', 'Jakarta'),
('1236', 'IMV Cakung Barat', 'Cakung Barat Inspeksi PAM', 'Jakarta'),
('1237', 'IMV cabang Makasar 001', 'Jl Hatta no 5', 'Makasar'),
('1238', 'IMV Cabang surabaya 002', 'Jl Jend Ahmad Yani 023', 'Surabaya');

-- --------------------------------------------------------

--
-- Table structure for table `departemen`
--

CREATE TABLE IF NOT EXISTS `departemen` (
  `id_departemen` int(8) NOT NULL,
  `nama_departemen` varchar(255) NOT NULL,
  PRIMARY KEY (`id_departemen`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `departemen`
--

INSERT INTO `departemen` (`id_departemen`, `nama_departemen`) VALUES
(110, 'Teknologi'),
(111, 'Accounting'),
(112, 'Business Development'),
(113, 'Human Resource'),
(114, 'Import'),
(115, 'Mainteneace  '),
(116, 'Marketing '),
(117, 'Purchasing'),
(118, 'Research'),
(119, 'Supply Chain Management');

-- --------------------------------------------------------

--
-- Table structure for table `divisi`
--

CREATE TABLE IF NOT EXISTS `divisi` (
  `id_divisi` int(8) NOT NULL,
  `nama_divisi` varchar(100) NOT NULL,
  PRIMARY KEY (`id_divisi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `divisi`
--

INSERT INTO `divisi` (`id_divisi`, `nama_divisi`) VALUES
(121, 'Electrical Resource '),
(122, 'Export'),
(123, 'HRD'),
(124, 'Logistik'),
(125, 'Pemasaran'),
(126, 'Penjualan'),
(127, 'Produksi'),
(128, 'Teknologi');

-- --------------------------------------------------------

--
-- Table structure for table `employee_if_upload`
--

CREATE TABLE IF NOT EXISTS `employee_if_upload` (
  `emplid` varchar(10) NOT NULL,
  `emplname` varchar(50) NOT NULL,
  `emplstatus` varchar(50) NOT NULL,
  `joindate` date NOT NULL,
  `duedate` date DEFAULT NULL,
  `permdate` date DEFAULT NULL,
  `resigndate` date DEFAULT NULL,
  `status` enum('inactive','active') NOT NULL,
  `branch` int(5) DEFAULT NULL,
  `division` varchar(50) DEFAULT NULL,
  `dept` varchar(50) DEFAULT NULL,
  `sect` varchar(50) DEFAULT NULL,
  `position` varchar(50) DEFAULT NULL,
  `jobgrade` varchar(50) DEFAULT NULL,
  `workperiod` varchar(50) DEFAULT NULL,
  `gender` enum('M','F') DEFAULT NULL,
  `famst` enum('TK','K3') DEFAULT NULL,
  `education` enum('SD','SLTP','SLTA','D3','S1','S2','S3') DEFAULT NULL,
  `faculty` varchar(50) DEFAULT NULL,
  `religion` enum('Islam','Kristen','Katolik','Hindu','Budha','Konghucu') NOT NULL,
  `birthplace` varchar(50) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `age` varchar(50) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `zip` int(11) DEFAULT NULL,
  `idcard` int(11) DEFAULT NULL,
  `telkomselphone` int(11) DEFAULT NULL,
  `phone_1` int(15) DEFAULT NULL,
  `phone_2` int(15) DEFAULT NULL,
  `phone_3` int(15) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `npwp` int(20) DEFAULT NULL,
  `npwp_status` int(20) DEFAULT NULL,
  `npwp_address` varchar(100) DEFAULT NULL,
  `npwp_city` varchar(50) DEFAULT NULL,
  `npwpzip` int(10) DEFAULT NULL,
  `bank1` varchar(30) DEFAULT NULL,
  `branch1` varchar(100) DEFAULT NULL,
  `city1` varchar(50) DEFAULT NULL,
  `account1` int(15) DEFAULT NULL,
  `accountname1` varchar(50) DEFAULT NULL,
  `bank2` varchar(50) DEFAULT NULL,
  `branch2` varchar(50) DEFAULT NULL,
  `city2` varchar(50) DEFAULT NULL,
  `account2` int(15) DEFAULT NULL,
  `account_name2` varchar(100) DEFAULT NULL,
  `spouse` varchar(100) DEFAULT NULL,
  `birth_date_spouse` date DEFAULT NULL,
  `child1` varchar(100) DEFAULT NULL,
  `birth_date_child_1` date DEFAULT NULL,
  `education_child` enum('SD','SLTP','SLTA','D3','S1','S2') DEFAULT NULL,
  `child2` varchar(100) DEFAULT NULL,
  `birth_date_child2` date DEFAULT NULL,
  `educationchild2` enum('SD','SLTA','D1','D3','S1','S2','S3') DEFAULT NULL,
  `child3` varchar(100) DEFAULT NULL,
  `birth_date_child3` date DEFAULT NULL,
  `educationchild3` enum('SD','SLTA','D1','D3','S1','S2','S3') DEFAULT NULL,
  `job_category` varchar(50) DEFAULT NULL,
  `notes` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`emplid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_if_upload`
--

INSERT INTO `employee_if_upload` (`emplid`, `emplname`, `emplstatus`, `joindate`, `duedate`, `permdate`, `resigndate`, `status`, `branch`, `division`, `dept`, `sect`, `position`, `jobgrade`, `workperiod`, `gender`, `famst`, `education`, `faculty`, `religion`, `birthplace`, `birthdate`, `age`, `address`, `city`, `zip`, `idcard`, `telkomselphone`, `phone_1`, `phone_2`, `phone_3`, `email`, `npwp`, `npwp_status`, `npwp_address`, `npwp_city`, `npwpzip`, `bank1`, `branch1`, `city1`, `account1`, `accountname1`, `bank2`, `branch2`, `city2`, `account2`, `account_name2`, `spouse`, `birth_date_spouse`, `child1`, `birth_date_child_1`, `education_child`, `child2`, `birth_date_child2`, `educationchild2`, `child3`, `birth_date_child3`, `educationchild3`, `job_category`, `notes`) VALUES
('A015', 'Budi', 'Permanent', '0000-00-00', NULL, '0000-00-00', NULL, 'active', 1, 'SCM', 'SCM 1', NULL, 'Purchasing Staff', NULL, '19 years 6 month', 'F', 'K3', 'D3', 'Ekonomi Akuntasi', 'Islam', NULL, '0000-00-00', NULL, 'Jl. Swadaya 6 N0. 81  Kp. Rawageni Rt 05/08, Ratuja', 'Depok', 0, 2147483647, NULL, 2147483647, 2147483647, 817136119, 'ambarwati@terra.co.id', 58224, 0, 'Jl. Salak II No. 83 Perumnas Depok RT. 005 RW. 009 Abadijaya Sukmajaya', 'Depok', NULL, 'BNI', ' Kelapa Gading', ' Jakarta', 611214986, 'Ambarwati  ', 'Permata', ' Pangeran Jayakarta', ' Jakarta Pusat', 2147483647, 'Ambarwati  ', 'Indra Bakti', '0000-00-00', 'Rasikhah Maharani Liliana Bakti', '0000-00-00', NULL, 'Athirah Salsabila Nurul Bakti', '0000-00-00', NULL, 'Annisa Arthamevia Rivaliana Bakti', '0000-00-00', NULL, 'Admin', NULL),
('A375', 'Amin', 'Outsource Vitara', '0000-00-00', NULL, NULL, '0000-00-00', 'inactive', 2, NULL, NULL, NULL, 'HQ-Warehouse Operator', NULL, '2 years 8 month', 'M', 'TK', '', 'Others', 'Islam', NULL, '0000-00-00', NULL, 'Jl. Marunda Baru RT 008 /003 ', 'Jakarta Utara', 14150, 2147483647, NULL, 0, 2147483647, 0, NULL, 0, 0, ' ', ' ', NULL, ' ', NULL, NULL, NULL, 'Abdul Kohar  ', NULL, NULL, NULL, NULL, 'Abdul Kohar  ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `gajibpjs`
--

CREATE TABLE IF NOT EXISTS `gajibpjs` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `emp_no` int(8) NOT NULL,
  `gaji_bpjs` int(8) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `gajibpjs`
--

INSERT INTO `gajibpjs` (`id`, `emp_no`, `gaji_bpjs`) VALUES
(1, 30128, 4000000),
(3, 30051, 4500000),
(4, 30070, 4500000),
(5, 30042, 5000000),
(7, 30035, 4000000);

-- --------------------------------------------------------

--
-- Table structure for table `gapok`
--

CREATE TABLE IF NOT EXISTS `gapok` (
  `id_gapok` int(7) NOT NULL AUTO_INCREMENT,
  `emp_no` int(7) NOT NULL,
  `id_departemen` int(8) NOT NULL,
  `id_divisi` int(8) NOT NULL,
  `id_cabang` int(8) NOT NULL,
  `id_jabatan` int(7) NOT NULL,
  `gapok` int(9) NOT NULL,
  `uang_makan` int(9) NOT NULL,
  `gaji_harian` int(9) NOT NULL,
  PRIMARY KEY (`id_gapok`),
  KEY `id_karyawan` (`emp_no`),
  KEY `id_jabatan` (`id_jabatan`),
  KEY `id_jabatan_2` (`id_jabatan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `gapok`
--

INSERT INTO `gapok` (`id_gapok`, `emp_no`, `id_departemen`, `id_divisi`, `id_cabang`, `id_jabatan`, `gapok`, `uang_makan`, `gaji_harian`) VALUES
(5, 30128, 112, 128, 1236, 9, 450000, 50000, 200000);

-- --------------------------------------------------------

--
-- Table structure for table `identitas_karyawan`
--

CREATE TABLE IF NOT EXISTS `identitas_karyawan` (
  `emp_no` varchar(20) NOT NULL,
  `nama_karyawan` varchar(100) NOT NULL,
  `ktp` int(20) NOT NULL,
  `gender` enum('L','P') NOT NULL,
  PRIMARY KEY (`emp_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `identitas_karyawan`
--

INSERT INTO `identitas_karyawan` (`emp_no`, `nama_karyawan`, `ktp`, `gender`) VALUES
('30035', 'Moch Deny Susanto', 2147483647, 'L'),
('30040', 'Muhamad Syarif Roseno', 1252123134, 'L'),
('30042', 'Shandy Wibowo Budiman', 2147483647, 'L'),
('30051', 'Matius Galo', 2147483647, 'L'),
('30052', 'Sinta Novelia Butar Buta', 231413213, 'P'),
('30055', 'Hayyu', 2147483647, 'P'),
('30060', 'Dewi Laksmita', 2147483647, 'P'),
('30070', 'Ahmad Wahyu', 341432424, 'L'),
('30105', 'Ahmad Ghanzanfar', 1231321321, 'L'),
('30128', 'Agus Sumanto', 2147483647, 'L');

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE IF NOT EXISTS `jabatan` (
  `id_jabatan` int(8) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  PRIMARY KEY (`id_jabatan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`id_jabatan`, `jabatan`) VALUES
(1, 'Komisaris'),
(2, 'Direksi'),
(3, 'Manajer Operasional'),
(4, 'Manajer Pemasaran'),
(5, 'Manager Keuangan'),
(6, 'Asisten Manager'),
(7, 'Supervisor'),
(8, 'Asisten supervisor'),
(9, 'Staff Kontrak'),
(10, 'Purchasing');

-- --------------------------------------------------------

--
-- Table structure for table `keluarga_karyawan`
--

CREATE TABLE IF NOT EXISTS `keluarga_karyawan` (
  `id_keluarga` int(11) NOT NULL AUTO_INCREMENT,
  `emp_no` varchar(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `status` enum('Ayah','Ibu','Suami','Istri','Anak') NOT NULL,
  `gender` enum('L','P') NOT NULL,
  `pendidikan` enum('SD','SLTP','SLTA','D1','D3','S1','S2','S3') NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `kontak` int(20) NOT NULL,
  `pekerjaan` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_keluarga`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `keluarga_karyawan`
--

INSERT INTO `keluarga_karyawan` (`id_keluarga`, `emp_no`, `nama`, `status`, `gender`, `pendidikan`, `alamat`, `kontak`, `pekerjaan`) VALUES
(1, '30128', 'Sung Lian Bun', 'Ayah', 'L', 'SLTA', 'Duta Harapan', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `kontak_karyawan`
--

CREATE TABLE IF NOT EXISTS `kontak_karyawan` (
  `id_kontak` int(10) NOT NULL AUTO_INCREMENT,
  `emp_no` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_telp` varchar(20) DEFAULT NULL,
  `mobile` varchar(20) NOT NULL,
  `alamat_tinggal` text,
  `alamat_ktp` text NOT NULL,
  `kota` varchar(50) NOT NULL,
  `provinsi` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_kontak`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `kontak_karyawan`
--

INSERT INTO `kontak_karyawan` (`id_kontak`, `emp_no`, `email`, `no_telp`, `mobile`, `alamat_tinggal`, `alamat_ktp`, `kota`, `provinsi`) VALUES
(5, '30051', 'matius@mail.com', '0214312154', '0871346321', 'Otista Jakarta Timur', 'Otista Jakarta Timur', 'Jakarta', 'DKI'),
(6, '30128', 'myblog.sum.agus@gmail.com', '02188970818', '081316448339', 'Duta Harapan Jalan Graha 10 E7 No 47 ', 'Duta Harapan Jalan Graha 10 E7 No 47 ', 'Bekasi', 'Jawa Barat ');

-- --------------------------------------------------------

--
-- Table structure for table `lembur`
--

CREATE TABLE IF NOT EXISTS `lembur` (
  `id_lembur` int(11) NOT NULL AUTO_INCREMENT,
  `emp_no` int(8) NOT NULL,
  `tanggal` date NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `uang_lembur` int(10) NOT NULL,
  PRIMARY KEY (`id_lembur`),
  KEY `id_karyawan` (`emp_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `lembur`
--

INSERT INTO `lembur` (`id_lembur`, `emp_no`, `tanggal`, `keterangan`, `uang_lembur`) VALUES
(7, 30051, '2019-10-03', 'Input data', 50000),
(8, 30055, '2019-10-02', 'debugging', 50000),
(9, 30035, '2019-10-06', 'Input data', 50000),
(10, 30070, '2019-10-01', 'debugging', 50000),
(12, 30051, '2019-12-05', 'Masuk saat libur', 100000),
(13, 30051, '2019-10-09', 'Testing', 50000),
(14, 30051, '2019-10-08', 'Input data', 50000);

-- --------------------------------------------------------

--
-- Table structure for table `pajak_karyawan`
--

CREATE TABLE IF NOT EXISTS `pajak_karyawan` (
  `id_pajak` int(11) NOT NULL AUTO_INCREMENT,
  `emp_no` int(8) NOT NULL,
  `npwp` varchar(20) NOT NULL,
  `ptkp` enum('TK/0','TK/1','TK/2','TK/3','K/0','K/1','K/2','K/3') NOT NULL,
  PRIMARY KEY (`id_pajak`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `pajak_karyawan`
--

INSERT INTO `pajak_karyawan` (`id_pajak`, `emp_no`, `npwp`, `ptkp`) VALUES
(1, 30035, '12341234123', 'TK/0'),
(2, 30128, '111111111111', 'TK/0'),
(3, 30051, '12341234123', 'TK/0'),
(4, 30055, '9891939492', 'K/0'),
(5, 30070, '11232132141', 'K/1');

-- --------------------------------------------------------

--
-- Table structure for table `pendidikan_karyawan`
--

CREATE TABLE IF NOT EXISTS `pendidikan_karyawan` (
  `id_pendidikan` int(10) NOT NULL AUTO_INCREMENT,
  `emp_no` int(8) DEFAULT NULL,
  `jenjang` enum('SD','SLTP','SLTA','D1','D3','S1','S2','S3') DEFAULT NULL,
  `thn_masuk` date DEFAULT NULL,
  `thn_lulus` date DEFAULT NULL,
  `institusi` varchar(50) DEFAULT NULL,
  `jurusan` varchar(50) DEFAULT NULL,
  `fakultas` varchar(50) DEFAULT NULL,
  `nilai` int(5) DEFAULT NULL,
  PRIMARY KEY (`id_pendidikan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `pendidikan_karyawan`
--

INSERT INTO `pendidikan_karyawan` (`id_pendidikan`, `emp_no`, `jenjang`, `thn_masuk`, `thn_lulus`, `institusi`, `jurusan`, `fakultas`, `nilai`) VALUES
(23, 30128, 'S2', '2011-01-09', '2019-05-10', 'Universitas Darma Persada', 'Sistem Informasi', 'kedokteran umum', 3),
(24, 30128, 'SD', '1994-01-08', '2000-06-05', 'SDN Teluk Pucung Asri ', '', '', 37);

-- --------------------------------------------------------

--
-- Table structure for table `pengalaman_karyawan`
--

CREATE TABLE IF NOT EXISTS `pengalaman_karyawan` (
  `id_pengalaman` int(10) NOT NULL AUTO_INCREMENT,
  `emp_no` int(8) DEFAULT NULL,
  `posisi` varchar(20) DEFAULT NULL,
  `gaji` int(11) NOT NULL,
  `perusahaan` varchar(50) NOT NULL,
  `thn_masuk` date NOT NULL,
  `thn_keluar` date NOT NULL,
  `alasan` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_pengalaman`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `pengalaman_karyawan`
--

INSERT INTO `pengalaman_karyawan` (`id_pengalaman`, `emp_no`, `posisi`, `gaji`, `perusahaan`, `thn_masuk`, `thn_keluar`, `alasan`) VALUES
(9, 30128, 'Guru ', 3000000, 'Yayasan Sinar Darma ', '2015-08-02', '2017-05-05', 'Mencari pengalaman yang lebih baik '),
(10, 30128, 'Web Admin & Develope', 4000000, 'PT Informasi Publik (Sumber.com)', '2017-05-03', '2017-11-01', 'Mencari pengalaman yang lebih baik ');

-- --------------------------------------------------------

--
-- Table structure for table `personal_karyawan`
--

CREATE TABLE IF NOT EXISTS `personal_karyawan` (
  `id_personal` int(5) NOT NULL AUTO_INCREMENT,
  `emp_no` int(9) NOT NULL,
  `tempat_lahir` varchar(50) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `agama` enum('Islam','Kristen','Katolik','Hindu','Budha') NOT NULL,
  `marital_status` enum('Single','Married') DEFAULT NULL,
  `profile` varchar(50) NOT NULL,
  PRIMARY KEY (`id_personal`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `personal_karyawan`
--

INSERT INTO `personal_karyawan` (`id_personal`, `emp_no`, `tempat_lahir`, `tanggal_lahir`, `agama`, `marital_status`, `profile`) VALUES
(31, 30128, 'Jakarta', '2019-05-10', 'Kristen', 'Single', 'http://[::1]/gbu/upload/gambar/gwwwww1.jpg'),
(32, 30035, 'Bandung', '1980-12-18', 'Islam', 'Married', 'http://[::1]/gbu/upload/gambar/Untitled.png');

-- --------------------------------------------------------

--
-- Table structure for table `ptkp`
--

CREATE TABLE IF NOT EXISTS `ptkp` (
  `id_ptkp` int(11) NOT NULL,
  `ptkp` enum('TK/0','TK/1','TK/2','TK/3','K/0','K/1','K/2','K/3') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tunjangan_karyawan`
--

CREATE TABLE IF NOT EXISTS `tunjangan_karyawan` (
  `id_tunjangan` int(10) NOT NULL AUTO_INCREMENT,
  `emp_no` int(8) NOT NULL,
  `jenis_tunjangan` varchar(255) NOT NULL,
  `jumlah` int(11) NOT NULL,
  PRIMARY KEY (`id_tunjangan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tunjangan_karyawan`
--

INSERT INTO `tunjangan_karyawan` (`id_tunjangan`, `emp_no`, `jenis_tunjangan`, `jumlah`) VALUES
(1, 30051, 'Kesehatan', 200000),
(3, 30051, 'Transport', 200000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `level` enum('1','2','3','4') NOT NULL,
  `status` enum('Y','N') NOT NULL DEFAULT 'N',
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama`, `email`, `level`, `status`) VALUES
(1, '@superadmin', 'superadmin', 'superadmin', 'superadmin@gmail.com', '1', 'Y'),
(2, '@hrmanager', 'hrmanager', 'hrmanager', 'hrmanager@mail.com', '2', 'Y'),
(3, '@staff', 'staff', 'staff', 'staff@gmail.com', '3', 'Y'),
(7, '@agus', 'agus', 'agus', 'agus@mail.com', '1', 'Y'),
(9210, '@newUser', 'newUser', 'newUser', 'newuser@mail.com', '2', 'N');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
