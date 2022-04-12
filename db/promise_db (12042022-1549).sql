-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2022 at 10:49 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `promise_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `assesmentcriteria`
--

CREATE TABLE `assesmentcriteria` (
  `ASSESMENTID` decimal(10,0) NOT NULL,
  `CRITERIADIMENSION` varchar(0) DEFAULT NULL,
  `CRITERIADETAIL` varchar(0) DEFAULT NULL,
  `CRITERIAPOINT` varchar(0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `assesmentscore`
--

CREATE TABLE `assesmentscore` (
  `ASSESMENTID` decimal(10,0) DEFAULT NULL,
  `STUDENTEXAMID` decimal(10,0) DEFAULT NULL,
  `SCORE` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `auth_activation_attempts`
--

CREATE TABLE `auth_activation_attempts` (
  `id` int(10) UNSIGNED NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups`
--

CREATE TABLE `auth_groups` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_permissions`
--

CREATE TABLE `auth_groups_permissions` (
  `group_id` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(10) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_users`
--

CREATE TABLE `auth_groups_users` (
  `group_id` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` int(10) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_logins`
--

CREATE TABLE `auth_logins` (
  `id` int(10) UNSIGNED NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_logins`
--

INSERT INTO `auth_logins` (`id`, `ip_address`, `email`, `user_id`, `date`, `success`) VALUES
(1, '::1', 'feedeewepe', 2, '2021-08-10 08:17:50', 0),
(2, '::1', 'feedeewepe@gmail.com', 2, '2021-08-10 08:59:06', 1),
(3, '::1', 'feedeewepe@gmail.com', 2, '2021-08-10 09:12:36', 1),
(4, '::1', 'feedeewepe@gmail.com', 2, '2021-08-14 21:15:54', 1),
(5, '::1', 'feedeewepe@gmail.com', 2, '2021-08-15 04:15:36', 1),
(6, '::1', 'feedeewepe@gmail.com', 2, '2021-08-15 04:56:47', 1),
(7, '::1', 'user@gmail.com', 1, '2021-08-15 08:59:19', 1),
(8, '::1', 'feedeewepe@gmail.com', 2, '2021-08-15 08:59:58', 1),
(9, '::1', 'feedeewepe@gmail.com', 2, '2021-08-15 19:15:50', 1),
(10, '::1', 'feedeewepe@gmail.com', 2, '2021-08-16 02:36:10', 1),
(11, '::1', 'feedeewepe@gmail.com', 2, '2021-08-16 03:28:12', 1),
(12, '::1', 'feedeewepe@gmail.com', 2, '2021-08-17 03:06:40', 1),
(13, '::1', 'feedeewepe@gmail.com', 2, '2021-08-17 08:36:53', 1),
(14, '::1', 'feedeewepe@gmail.com', 2, '2021-08-17 18:31:18', 1),
(15, '::1', 'feedeewepe@yahoo.com', 11, '2021-08-17 19:16:00', 1),
(16, '::1', 'feedeewepe@gmail.com', 2, '2021-08-17 19:17:19', 1),
(17, '::1', 'feedeewepe@gmail.com', 2, '2021-08-18 01:31:32', 1),
(18, '::1', 'feedeewepe@gmail.com', 2, '2021-08-18 04:14:21', 1),
(19, '::1', 'feedeewepe@gmail.com', 2, '2021-08-18 18:58:16', 1),
(20, '::1', 'fwp', NULL, '2021-08-18 19:24:55', 0),
(21, '::1', 'fwp', NULL, '2021-08-18 19:25:03', 0),
(22, '::1', 'fwp', NULL, '2021-08-18 19:25:14', 0),
(23, '::1', 'feedeewepe@gmail.com', 2, '2021-08-18 19:25:22', 1),
(24, '::1', 'fidiwputro@ittelkom-sby.ac.id', 9, '2021-08-18 19:25:58', 1),
(25, '::1', 'feedeewepe@gmail.com', 2, '2021-08-18 21:34:47', 1),
(26, '::1', 'fidiwputro@ittelkom-sby.ac.id', 9, '2021-08-18 21:57:57', 1),
(27, '::1', 'feedeewepe@gmail.com', 2, '2021-08-19 01:42:58', 1),
(28, '::1', 'fidiwputro@ittelkom-sby.ac.id', 9, '2021-08-19 02:11:26', 1),
(29, '::1', 'feedeewepe@gmail.com', 2, '2021-08-19 04:46:24', 1),
(30, '::1', 'fidiwputro@ittelkom-sby.ac.id', 9, '2021-08-19 04:47:40', 1),
(31, '::1', 'feedeewepe@gmail.com', 2, '2021-08-19 04:56:33', 1),
(32, '::1', 'fidiwputro@ittelkom-sby.ac.id', 9, '2021-08-19 04:56:57', 1),
(33, '::1', 'fidiwputro@ittelkom-sby.ac.id', 9, '2021-08-19 09:00:28', 1),
(34, '::1', 'feedeewepe@gmail.com', 2, '2021-08-19 09:04:10', 1),
(35, '::1', 'user@gmail.com', 1, '2021-08-19 09:08:35', 1),
(36, '::1', 'feedeewepe@gmail.com', 2, '2021-08-19 10:51:21', 1),
(37, '::1', 'feedeewepe@gmail.com', 2, '2021-08-19 17:54:40', 1),
(38, '::1', 'lap', 14, '2021-08-19 18:09:39', 0),
(39, '::1', 'user@gmail.com', 1, '2021-08-19 18:10:19', 1),
(40, '::1', 'feedeewepe@gmail.com', 2, '2021-08-19 18:11:06', 1),
(41, '::1', 'user@gmail.com', 1, '2021-08-19 18:12:26', 1),
(42, '::1', 'user@gmail.com', 1, '2021-08-20 02:41:52', 1),
(43, '::1', 'user@gmail.com', 1, '2021-08-20 07:34:38', 1),
(44, '::1', 'fidiwputro@ittelkom-sby.ac.id', 9, '2021-08-21 07:46:05', 1),
(45, '::1', 'user@gmail.com', 1, '2021-08-21 07:46:27', 1),
(46, '::1', 'user@gmail.com', 1, '2021-08-21 19:18:20', 1),
(47, '::1', 'user@gmail.com', 1, '2021-08-22 06:48:09', 1),
(48, '::1', 'user@gmail.com', 1, '2021-08-23 01:12:33', 1),
(49, '::1', 'feedeewepe@gmail.com', 2, '2021-08-31 00:58:49', 1),
(50, '::1', 'mhs', NULL, '2021-08-31 21:19:35', 0),
(51, '::1', 'mhs', NULL, '2021-08-31 21:19:48', 0),
(52, '::1', 'mhs', NULL, '2021-08-31 21:19:58', 0),
(53, '::1', 'user@gmail.com', 1, '2021-08-31 21:20:20', 1),
(54, '::1', 'admin', NULL, '2021-10-11 04:05:42', 0),
(55, '::1', 'admin', NULL, '2021-10-11 04:05:51', 0),
(56, '::1', 'admin', NULL, '2021-10-11 04:06:03', 0),
(57, '::1', 'user', NULL, '2021-10-11 04:08:50', 0),
(58, '::1', 'user', NULL, '2021-10-11 04:08:58', 0),
(59, '::1', 'user', NULL, '2021-10-11 04:09:19', 0),
(60, '::1', 'user', NULL, '2021-10-11 04:09:29', 0),
(61, '::1', 'user', NULL, '2021-10-11 04:09:55', 0),
(62, '::1', 'feedeewepe@gmail.com', 2, '2021-10-11 04:10:15', 1),
(63, '::1', 'fwp', NULL, '2021-10-11 04:12:43', 0),
(64, '::1', 'fwp', NULL, '2021-10-11 04:12:50', 0),
(65, '::1', 'fwp', NULL, '2021-10-11 04:12:55', 0),
(66, '::1', 'fwp', NULL, '2021-10-11 04:13:23', 0),
(67, '::1', 'fwp', NULL, '2021-10-11 04:13:27', 0),
(68, '::1', 'fwp', NULL, '2021-10-11 04:13:34', 0),
(69, '::1', 'fwp', NULL, '2021-10-11 04:13:40', 0),
(70, '::1', 'user', NULL, '2021-10-11 04:19:58', 0),
(71, '::1', 'user', NULL, '2021-10-11 04:20:06', 0),
(72, '::1', 'user', NULL, '2021-10-11 04:20:19', 0),
(73, '::1', 'user', NULL, '2021-10-11 04:20:28', 0),
(74, '::1', 'fwp', NULL, '2021-10-11 04:20:40', 0),
(75, '::1', 'fwp', NULL, '2021-10-11 04:24:13', 0),
(76, '::1', 'fwp', NULL, '2021-10-11 04:24:22', 0),
(77, '::1', 'fwp', NULL, '2021-10-11 04:24:28', 0),
(78, '::1', 'fwp', NULL, '2021-10-11 04:36:57', 0),
(79, '::1', 'fwp', NULL, '2021-10-11 04:37:04', 0),
(80, '::1', 'fwp', NULL, '2021-10-11 04:37:15', 0),
(81, '::1', 'user', NULL, '2021-10-15 07:14:14', 0),
(82, '::1', 'admin', NULL, '2021-10-15 07:14:23', 0),
(83, '::1', 'mhs', NULL, '2021-10-15 07:14:39', 0),
(84, '::1', 'user', NULL, '2021-10-15 07:15:14', 0),
(85, '::1', 'feedeewepe@gmail.com', 2, '2021-10-15 07:15:25', 1),
(86, '::1', 'user@gmail.com', 1, '2021-10-15 07:31:52', 1),
(87, '::1', 'feedeewepe@gmail.com', 2, '2021-10-15 08:39:32', 1),
(88, '::1', 'feedeewepe@gmail.com', 2, '2021-10-15 11:49:37', 1),
(89, '::1', 'feedeewepe@gmail.com', 2, '2021-10-17 22:50:18', 1),
(90, '::1', 'feedeewepe@gmail.com', 2, '2021-10-18 02:22:20', 1),
(91, '::1', 'feedeewepe@gmail.com', 2, '2021-10-18 06:56:50', 1),
(92, '::1', 'feedeewepe@gmail.com', 2, '2021-10-18 08:14:29', 1),
(93, '::1', 'feedeewepe@gmail.com', 2, '2021-10-18 09:57:47', 1),
(94, '::1', 'feedeewepe@gmail.com', 2, '2021-10-18 18:45:54', 1),
(95, '::1', 'fidiwputro@ittelkom-sby.ac.id', 9, '2021-10-19 09:42:59', 1),
(96, '::1', 'feedeewepe@gmail.com', 2, '2021-10-19 09:46:42', 1),
(97, '::1', 'user@gmail.com', 1, '2021-10-19 10:16:13', 1),
(98, '::1', 'mhs', NULL, '2021-10-19 20:02:19', 0),
(99, '::1', 'feedeewepe@gmail.com', 2, '2021-10-19 20:02:32', 1),
(100, '::1', 'user@gmail.com', 1, '2021-10-19 20:03:25', 1),
(101, '::1', 'feedeewepe@gmail.com', 2, '2021-10-19 21:23:09', 1),
(102, '::1', 'user@gmail.com', 1, '2021-10-19 21:24:15', 1),
(103, '::1', 'user@gmail.com', 1, '2021-10-20 05:43:37', 1),
(104, '::1', 'user@gmail.com', 1, '2021-10-20 09:44:58', 1),
(105, '::1', 'user@gmail.com', 1, '2021-10-20 20:45:13', 1),
(106, '::1', 'user@gmail.com', 1, '2021-10-21 09:48:38', 1),
(107, '::1', 'user@gmail.com', 1, '2021-10-21 19:46:04', 1),
(108, '::1', 'user@gmail.com', 1, '2021-10-22 05:12:35', 1),
(109, '::1', 'user@gmail.com', 1, '2021-10-22 10:19:38', 1),
(110, '::1', 'user@gmail.com', 1, '2021-10-24 23:12:35', 1),
(111, '::1', 'user@gmail.com', 1, '2021-10-25 17:03:21', 1),
(112, '::1', 'user@gmail.com', 1, '2021-10-25 19:37:21', 1),
(113, '::1', 'user@gmail.com', 1, '2021-10-26 04:38:44', 1),
(114, '::1', 'user@gmail.com', 1, '2021-10-26 07:52:40', 1),
(115, '::1', 'user@gmail.com', 1, '2021-10-27 01:52:41', 1),
(116, '::1', 'user@gmail.com', 1, '2021-10-27 04:08:06', 1),
(117, '::1', 'user@gmail.com', 1, '2021-10-27 07:14:33', 1),
(118, '::1', 'user@gmail.com', 1, '2021-10-27 20:20:17', 1),
(119, '::1', 'user@gmail.com', 1, '2021-10-28 20:25:46', 1),
(120, '::1', 'user@gmail.com', 1, '2021-10-28 23:11:54', 1),
(121, '::1', 'user@gmail.com', 1, '2021-10-29 02:10:04', 1),
(122, '::1', 'user@gmail.com', 1, '2021-10-29 04:41:15', 1),
(123, '::1', 'user@gmail.com', 1, '2021-10-29 09:44:23', 1),
(124, '::1', 'user@gmail.com', 1, '2021-10-31 22:34:38', 1),
(125, '::1', 'user@gmail.com', 1, '2021-11-01 03:20:40', 1),
(126, '::1', 'user@gmail.com', 1, '2021-11-02 20:41:23', 1),
(127, '::1', 'user@gmail.com', 1, '2021-11-03 00:20:26', 1),
(128, '::1', 'user@gmail.com', 1, '2021-11-07 22:08:01', 1),
(129, '::1', 'user@gmail.com', 1, '2021-11-08 02:38:04', 1),
(130, '::1', 'user@gmail.com', 1, '2021-11-15 03:59:07', 1),
(131, '::1', 'user', NULL, '2022-03-14 02:27:24', 0),
(132, '::1', 'user@gmail.com', 1, '2022-03-14 02:27:32', 1),
(133, '::1', 'feedeewepe@gmail.com', 2, '2022-03-14 20:36:34', 1),
(134, '::1', 'user', NULL, '2022-03-14 20:37:19', 0),
(135, '::1', 'user@gmail.com', 1, '2022-03-14 20:37:27', 1),
(136, '::1', 'user@gmail.com', 1, '2022-03-14 21:17:01', 1),
(137, '::1', 'user@gmail.com', 1, '2022-03-14 21:35:28', 1),
(138, '::1', 'user@gmail.com', 1, '2022-03-14 22:28:47', 1),
(139, '::1', 'user@gmail.com', 1, '2022-03-14 22:40:31', 1),
(140, '::1', 'user@gmail.com', 1, '2022-03-14 23:21:03', 1),
(141, '127.0.0.1', 'user@gmail.com', 1, '2022-03-15 04:47:37', 1),
(142, '::1', 'user@gmail.com', 1, '2022-03-15 21:40:50', 1),
(143, '::1', 'user@gmail.com', 1, '2022-03-15 21:54:58', 1),
(144, '::1', 'user@gmail.com', 1, '2022-03-16 20:29:56', 1),
(145, '::1', 'bpa', NULL, '2022-03-16 20:47:10', 0),
(146, '::1', 'bpa', NULL, '2022-03-16 20:47:19', 0),
(147, '::1', 'bpa', NULL, '2022-03-16 20:47:25', 0),
(148, '::1', 'feedeewepe@gmail.com', 2, '2022-03-16 20:50:46', 1),
(149, '::1', 'user@gmail.com', 1, '2022-03-16 23:30:26', 1),
(150, '::1', 'feedeewepe@gmail.com', 2, '2022-03-17 00:23:23', 1),
(151, '::1', 'user@gmail.com', 1, '2022-03-17 00:30:52', 1),
(152, '::1', 'user@gmail.com', 1, '2022-03-18 02:26:39', 1),
(153, '::1', 'fidiwputro@ittelkom-sby.ac.id', 9, '2022-03-18 02:32:15', 1),
(154, '::1', 'feedeewepe@gmail.com', 2, '2022-03-18 02:47:48', 1),
(155, '::1', 'user@gmail.com', 1, '2022-03-18 03:38:11', 1),
(156, '::1', 'user@gmail.com', 1, '2022-03-18 04:51:37', 1),
(157, '::1', 'user@gmail.com', 1, '2022-03-18 07:49:11', 1),
(158, '::1', 'user@gmail.com', 1, '2022-03-18 20:28:39', 1),
(159, '::1', 'user@gmail.com', 1, '2022-03-19 00:06:09', 1),
(160, '::1', 'user@gmail.com', 1, '2022-03-19 09:09:16', 1),
(161, '::1', 'user@gmail.com', 1, '2022-03-21 03:46:06', 1),
(162, '::1', 'user@gmail.com', 1, '2022-03-21 20:14:10', 1),
(163, '::1', 'user@gmail.com', 1, '2022-03-22 01:32:18', 1),
(164, '::1', 'user@gmail.com', 1, '2022-03-22 02:10:00', 1),
(165, '::1', 'user@gmail.com', 1, '2022-03-22 03:21:30', 1),
(166, '::1', 'user@gmail.com', 1, '2022-03-22 03:41:53', 1),
(167, '::1', 'feedeewepe@gmail.com', 2, '2022-03-22 03:48:07', 1),
(168, '::1', 'feedeewepe@gmail.com', 2, '2022-03-22 04:00:19', 1),
(169, '::1', 'user@gmail.com', 1, '2022-03-22 04:18:55', 1),
(170, '::1', 'user@gmail.com', 1, '2022-04-01 03:03:00', 1),
(171, '::1', 'user@gmail.com', 1, '2022-04-01 05:14:55', 1),
(172, '::1', 'fidi', NULL, '2022-04-01 06:52:27', 0),
(173, '::1', 'fidi', 16, '2022-04-01 06:52:34', 0),
(174, '::1', 'fidiwputro@gmail.com', 16, '2022-04-01 06:53:08', 1),
(175, '::1', 'user@gmail.com', 1, '2022-04-01 07:16:52', 1),
(176, '::1', 'user@gmail.com', 1, '2022-04-01 08:37:19', 1),
(177, '::1', 'user@gmail.com', 1, '2022-04-01 10:03:35', 1),
(178, '::1', 'fidiwputro@gmail.com', 16, '2022-04-01 10:22:01', 1),
(179, '::1', 'fidiwputro@gmail.com', 16, '2022-04-01 11:10:53', 1),
(180, '::1', 'fidiwputro@gmail.com', 16, '2022-04-01 11:12:24', 1),
(181, '::1', 'user@gmail.com', 1, '2022-04-01 11:40:21', 1),
(182, '::1', 'fidiwputro@gmail.com', 16, '2022-04-01 17:42:08', 1),
(183, '::1', 'user@gmail.com', 1, '2022-04-01 19:25:34', 1),
(184, '::1', 'qwe', 18, '2022-04-02 02:24:36', 0),
(185, '::1', 'zxc', 19, '2022-04-02 02:27:11', 0),
(186, '::1', 'feedeewepe@gmail.com', 2, '2022-04-02 02:28:07', 1),
(187, '::1', 'user@gmail.com', 1, '2022-04-02 08:32:46', 1),
(188, '::1', 'feedeewepe@gmail.com', 2, '2022-04-02 08:52:31', 1),
(189, '::1', 'feedeewepe@gmail.com', 2, '2022-04-02 21:29:00', 1),
(190, '::1', 'feedeewepe@gmail.com', 2, '2022-04-03 00:17:56', 1),
(191, '::1', 'feedeewepe@gmail.com', 2, '2022-04-03 04:54:59', 1),
(192, '::1', 'feedeewepe@gmail.com', 2, '2022-04-04 05:18:50', 1),
(193, '::1', 'user@gmail.com', 1, '2022-04-04 20:13:11', 1),
(194, '::1', 'feedeewepe@gmail.com', 2, '2022-04-04 20:44:03', 1),
(195, '::1', 'user@gmail.com', 1, '2022-04-05 00:07:13', 1),
(196, '::1', 'feedeewepe@gmail.com', 2, '2022-04-05 01:04:55', 1),
(197, '::1', 'user@gmail.com', 1, '2022-04-05 08:04:27', 1),
(198, '::1', 'feedeewepe@gmail.com', 2, '2022-04-06 23:39:31', 1),
(199, '::1', 'zxc', NULL, '2022-04-06 23:41:02', 0),
(200, '::1', 'zxc', NULL, '2022-04-06 23:41:09', 0),
(201, '::1', 'zxc', NULL, '2022-04-06 23:44:17', 0),
(202, '::1', 'zxc', NULL, '2022-04-06 23:44:23', 0),
(203, '::1', 'feedeewepe@gmail.com', 2, '2022-04-06 23:44:44', 1),
(204, '::1', 'zxc@gmail.com', 19, '2022-04-06 23:45:16', 1),
(205, '::1', 'user@gmail.com', 1, '2022-04-07 21:14:09', 1),
(206, '::1', 'feedeewepe@gmail.com', 2, '2022-04-07 21:42:00', 1),
(207, '::1', 'feedeewepe@gmail.com', 2, '2022-04-08 08:52:06', 1),
(208, '::1', 'user', NULL, '2022-04-08 09:13:20', 0),
(209, '::1', 'user', NULL, '2022-04-08 09:13:28', 0),
(210, '::1', 'user', NULL, '2022-04-08 09:13:40', 0),
(211, '::1', 'feedeewepe@gmail.com', 2, '2022-04-08 09:14:18', 1),
(212, '::1', 'user', NULL, '2022-04-08 09:15:34', 0),
(213, '::1', 'user', NULL, '2022-04-08 09:15:41', 0),
(214, '::1', 'feedeewepe@gmail.com', 2, '2022-04-08 09:15:51', 1),
(215, '::1', 'user@gmail.com', 1, '2022-04-08 09:16:31', 1),
(216, '::1', 'feedeewepe@gmail.com', 2, '2022-04-08 09:17:12', 1),
(217, '::1', 'user@gmail.com', 1, '2022-04-08 09:21:18', 1),
(218, '::1', 'feedeewepe@gmail.com', 2, '2022-04-08 10:19:26', 1),
(219, '::1', 'user', 1, '2022-04-08 10:19:45', 0),
(220, '::1', 'user', NULL, '2022-04-08 10:19:51', 0),
(221, '::1', 'user', 1, '2022-04-08 10:20:00', 0),
(222, '::1', 'feedeewepe@gmail.com', 2, '2022-04-08 10:20:08', 1),
(223, '::1', 'user', 1, '2022-04-08 10:20:54', 0),
(224, '::1', 'feedeewepe@gmail.com', 2, '2022-04-08 10:21:25', 1),
(225, '::1', 'user@gmail.com', 1, '2022-04-08 10:21:50', 1),
(226, '::1', 'user@gmail.com', 1, '2022-04-08 10:28:40', 1),
(227, '::1', 'user@gmail.com', 1, '2022-04-08 10:29:16', 1),
(228, '::1', 'user@gmail.com', 1, '2022-04-11 02:27:01', 1),
(229, '::1', 'user@gmail.com', 1, '2022-04-11 02:36:26', 1),
(230, '::1', 'feedeewepe@gmail.com', 2, '2022-04-11 02:37:00', 1),
(231, '::1', 'fidiwputro@gmail.com', 16, '2022-04-11 02:37:49', 1),
(232, '::1', 'user@gmail.com', 1, '2022-04-11 19:49:46', 1),
(233, '::1', 'user@gmail.com', 1, '2022-04-12 00:39:20', 1);

-- --------------------------------------------------------

--
-- Table structure for table `auth_permissions`
--

CREATE TABLE `auth_permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_reset_attempts`
--

CREATE TABLE `auth_reset_attempts` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_tokens`
--

CREATE TABLE `auth_tokens` (
  `id` int(10) UNSIGNED NOT NULL,
  `selector` varchar(255) NOT NULL,
  `hashedValidator` varchar(255) NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `expires` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_users_permissions`
--

CREATE TABLE `auth_users_permissions` (
  `user_id` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(10) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `COMPANYID` decimal(10,0) NOT NULL,
  `COMPANYNAME` varchar(100) DEFAULT NULL,
  `ADDRESS` varchar(200) DEFAULT NULL,
  `CITY` varchar(50) DEFAULT NULL,
  `PROVINCE` varchar(50) DEFAULT NULL,
  `PHONE` varchar(45) DEFAULT NULL,
  `EMAIL` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`COMPANYID`, `COMPANYNAME`, `ADDRESS`, `CITY`, `PROVINCE`, `PHONE`, `EMAIL`) VALUES
('1', 'A SURYA SEJAHTERA ALAMI, CV', 'Jl. Industri No.56 Rt.02/01', 'Malang', 'Jawa Timur', '111111', 'aaa@bbb.ccc'),
('2', 'A. SHULMAN PLASTICS, PT', 'Jl. Surabaya-malang Desa Ngerong', 'Pasuruan', 'Jawa Timur', '0343 - 854240', 'bbb@ccc.ddd'),
('3', 'ABA COLECTION', 'Jl. Kh Abdul Fatah Gang. I Rt4/3', 'Tulungagung', 'Jawa Timur', '0355 - 770723', 'ccc@ddd.eee'),
('4', 'ABACUS CASH SOLUTION, PT', 'Dusun Binangun', 'Sidoarjo', 'Jawa Timur', '22222', 'ddd@eee.fff');

-- --------------------------------------------------------

--
-- Table structure for table `counseling`
--

CREATE TABLE `counseling` (
  `COUNSELINGID` decimal(10,0) NOT NULL,
  `GROUPID` decimal(10,0) DEFAULT NULL,
  `COUNSELINGDATE` date DEFAULT NULL,
  `COUNSELINGRESULT` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `document`
--

CREATE TABLE `document` (
  `DOCUMENTID` decimal(10,0) NOT NULL,
  `GROUPID` decimal(10,0) DEFAULT NULL,
  `DOCUMENT` varchar(30) DEFAULT NULL,
  `DOCUMENTURL` varchar(255) DEFAULT NULL,
  `INPUTDATE` date DEFAULT NULL,
  `INPUTBY` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `examschedule`
--

CREATE TABLE `examschedule` (
  `STUDYPROGRAMID` char(2) DEFAULT NULL,
  `SCHEDULEID` decimal(10,0) NOT NULL,
  `DAY` varchar(10) DEFAULT NULL,
  `DATE` date DEFAULT NULL,
  `STARTTIME` varchar(10) DEFAULT NULL,
  `ENDTIME` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `faculties`
--

CREATE TABLE `faculties` (
  `FACULTYID` decimal(10,0) NOT NULL,
  `FACULTYNAME` varchar(50) DEFAULT NULL,
  `ACRONIM` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculties`
--

INSERT INTO `faculties` (`FACULTYID`, `FACULTYNAME`, `ACRONIM`) VALUES
('1', 'Fakultas Teknik Elektro dan Industri Cerdas', 'FTEIC'),
('2', 'Fakultas Teknologi Informasi dan Bisnis', 'FTIB');

-- --------------------------------------------------------

--
-- Table structure for table `groupaccess`
--

CREATE TABLE `groupaccess` (
  `GROUPACCESSID` int(11) NOT NULL,
  `URLCONTROLLER` varchar(255) DEFAULT NULL,
  `USERGROUPID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `groupstatus`
--

CREATE TABLE `groupstatus` (
  `GROUPSTATUSID` int(11) NOT NULL,
  `STATUSID` decimal(10,0) DEFAULT NULL,
  `GROUPID` decimal(10,0) DEFAULT NULL,
  `INPUTDATE` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `groupstatus`
--

INSERT INTO `groupstatus` (`GROUPSTATUSID`, `STATUSID`, `GROUPID`, `INPUTDATE`) VALUES
(1, '1', '2', '2022-04-05');

-- --------------------------------------------------------

--
-- Table structure for table `internshipactivity`
--

CREATE TABLE `internshipactivity` (
  `idinternshipactivity` int(11) NOT NULL,
  `STUDENTID` varchar(12) NOT NULL,
  `activity` varchar(255) DEFAULT NULL,
  `activityunit` varchar(255) DEFAULT NULL,
  `activitydate` date DEFAULT NULL,
  `activitystatus` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `internshipgroup`
--

CREATE TABLE `internshipgroup` (
  `GROUPID` decimal(10,0) NOT NULL,
  `LECTURERCODE` char(3) DEFAULT NULL,
  `COMPANYID` decimal(10,0) DEFAULT NULL,
  `TYPEID` decimal(10,0) DEFAULT NULL,
  `SCHOOLYEAR` char(4) DEFAULT NULL,
  `SEMESTER` decimal(10,0) DEFAULT NULL,
  `STARTDATE` date DEFAULT NULL,
  `ENDDATE` date DEFAULT NULL,
  `ADVISORNAME` varchar(100) DEFAULT NULL,
  `ADVISORUNIT` varchar(100) DEFAULT NULL,
  `ADVISORPOSITION` varchar(100) DEFAULT NULL,
  `ADVISORPHONE` varchar(100) DEFAULT NULL,
  `ADVISOREMAIL` varchar(100) DEFAULT NULL,
  `LEADER_NIM` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `internshipgroup`
--

INSERT INTO `internshipgroup` (`GROUPID`, `LECTURERCODE`, `COMPANYID`, `TYPEID`, `SCHOOLYEAR`, `SEMESTER`, `STARTDATE`, `ENDDATE`, `ADVISORNAME`, `ADVISORUNIT`, `ADVISORPOSITION`, `ADVISORPHONE`, `ADVISOREMAIL`, `LEADER_NIM`) VALUES
('1', NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('2', NULL, '4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `internshipstatus`
--

CREATE TABLE `internshipstatus` (
  `STATUSID` decimal(10,0) NOT NULL,
  `INTERNSHIPSTATUS` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `internshipstatus`
--

INSERT INTO `internshipstatus` (`STATUSID`, `INTERNSHIPSTATUS`) VALUES
('1', 'Pendaftaran KP'),
('2', 'Pilih Pembimbing Akademik KP'),
('3', 'Proposal KP'),
('4', 'Surat Permohonan KP'),
('5', 'Surat Balasan KP'),
('6', 'Pakta Integritas KP'),
('7', 'Pelaksanaan KP'),
('8', 'Laporan KP'),
('9', 'Ujian Presentasi KP'),
('10', 'Revisi Laporan KP'),
('11', 'Pengumpulan Dokumen KP');

-- --------------------------------------------------------

--
-- Table structure for table `intershiptype`
--

CREATE TABLE `intershiptype` (
  `TYPEID` decimal(10,0) NOT NULL,
  `TYPENAME` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `lecturer`
--

CREATE TABLE `lecturer` (
  `LECTURERCODE` char(3) NOT NULL,
  `EMPLOYEEID` varchar(20) DEFAULT NULL,
  `LECTURERNAME` varchar(100) DEFAULT NULL,
  `FRONTITLE` varchar(20) DEFAULT NULL,
  `BACKTITLE` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lecturer`
--

INSERT INTO `lecturer` (`LECTURERCODE`, `EMPLOYEEID`, `LECTURERNAME`, `FRONTITLE`, `BACKTITLE`) VALUES
('AFA', '19900002-1', 'ANFAZUL FARIDATUL AZIZAH', '', 'S.Kom., M.Kom'),
('AFD', '20940045-3', 'AHMAD FAISAL DAHLAN', '', ''),
('AGS', '19750005-4', 'AGUS SULISTYA', '', 'Ph.D.'),
('AIE', '20950045-3', 'ALMIRA IVAH EDINA', '', ''),
('ALF', '18930084-3', 'ARDIANSYAH AL FAROUQ', '', 'S.T., M.T.'),
('AMI', '19920005-1', 'KHODIJAH AMIROH', '', 'S.ST., M.T.'),
('ANA', '20940044-3', 'AMALIA NUR ALIFAH', '', ''),
('ARD', '18920109-3', 'ARDIAN YUSUF WICAKSONO', '', 'S.Kom., M.Kom.'),
('ARF', '19700004-3', 'TRI ARIEF SARDJONO', '', ''),
('ARN', '19910003-1', 'ARLIYANTI NURDIN', '', 'S.T., M.T.'),
('ASA', '19900001-1', 'ABDUH SAYID ALBANA', '', 'S.T., M.T., M.Sc., Ph.D.'),
('AWS', '20950043-3', 'AHMAD WALI SATRIA BAHARI JOHAN', '', ''),
('AYU', '20880013-3', 'AYU ENDAH WAHYUNI', '', ''),
('BAS', '18920108-3', 'BERNADUS ANGGO SENO AJI', '', 'S.Kom., M.Kom.'),
('BIA', '20930043-1', 'BENAZIR IMAM ARIF MUTTAQIN', '', 'S.T., M.T.'),
('BLM', '18870138-1', 'BILLY MONTOLALU', '', 'S. Kom, M.Kom'),
('BLW', '20690002-1', 'BAMBANG LELONO WIDJIANTORO', '', ''),
('BPP', '20960031-3', 'BAGAS PUTRA PRADANA', '', ''),
('DEW', '20940001-1', 'DEWI RAHMAWATI', '-', 'S.Kom., M.Kom., MOS'),
('DMI', '19900005-1', 'DOMINGGO BAYU BASKARA', '', 'S.T., M.MT.'),
('DMS', '19930001-1', 'DIMAS ADIPUTRA', '', 'S.T., M.Phil., Ph.D.'),
('DNR', '20930071-3', 'DESITA NUR RACHMANIAR', '', ''),
('EDS', '19870005-1', 'DWI EDI SETYAWAN', '', 'S.T., M.T.'),
('FRH', '17870131-1', 'FARAH ZAKIYAH RAHMANTI', '', 'S.ST., M.T.'),
('FSA', '20910026-3', 'FANNUSH SHOFI AKBAR', '', ''),
('FWP', '19870004-1', 'FIDI WINCOKO PUTRO', '', 'S.ST, M.Kom'),
('GRA', '20950048-3', 'GRANITA HAJAR', '', ''),
('HAM', '19900004-1', 'HAMZAH ULINUHA MUSTAKIM', '', 'S.T.,M.T.'),
('HEL', '19790001-1', 'HELMY WIDYANTARA', '', 'S. Kom., M. Eng'),
('HMM', '20950047-3', 'MOH. HAMIM ZAJULI AL FAROBY', '', ''),
('HNF', '20950046-3', 'HELISYAH NUR FADHILAH', '', ''),
('HWM', '20920039-1', 'HAWWIN MARDHIANA', '', 'S.Kom., M.Kom.'),
('IFA', '19920003-1', 'ANIFATUL FARICHA', '', 'S.T., M.Sc.'),
('ISA', '19920002-1', 'ISA HAFIDZ', '', 'S.T., M.T.'),
('KHL', '19920004-1', 'LORA KHAULA AMIFIA', '', 'S.Pd., M.Eng.'),
('KMD', '20950044-3', 'KHARISMA MONIKA DIAN PERTIWI', '', ''),
('MAI', '17910092-3', 'MOHAMAD YANI', '', 'S.ST., M.Phil.'),
('MDF', '20940043-3', 'MUHAMMAD DZULFIKAR FAUZI', '', ''),
('MSK', '19810001-1', 'MOHAMMAD SHOLIK', '', 'S.Kom., M.Kom.'),
('MWD', '20930070-3', 'MAWANDA ALMUHAYAR', '', ''),
('NAS', '20900016-3', 'MUHAMAD NASRULLAH', '', ''),
('NIS', '20930072-3', 'NISA ISROFI', '', ''),
('NNR', '20950049-3', 'NICKO NUR RAKHMADDIAN', '', ''),
('NPI', '19900003-1', 'NOERMA PUDJI ISTYANTO', '', 'S.Kom, M.Kom'),
('NRR', '17780080-3', 'NILLA RACHMANINGRUM', '', 'S.T., M.T.'),
('OKT', '19900006-1', 'OKTAVIA AYU PERMATA', '', 'S.T., M.T.'),
('ONI', '20900019-3', 'CHAIRONI LATIF', '', ''),
('PNG', '18830079-1', 'PANGESTU WIDODO', '', 'S.T., M.T.'),
('PTD', '19940002-1', 'PHILIP TOBIANTO DAELY', '', 'S.T., M.Eng.'),
('RAS', '20940041-3', 'RIZA AKHSANI SETYO PRAYOGA', '', ''),
('RAZ', '18930085-1', 'RIZQA AMELIA ZUNAIDI', '', 'S.T., M.T.'),
('RDP', '18920106-1', 'RAHADITYA DIMAS PRIHADIANTO', '', 'S.T., M.T.'),
('RFA', '20940040-3', 'RASYIDI FAIZ AKBAR', '', ''),
('RFM', '20970031-3', 'RIZKY FENALDO MAULANA', '', ''),
('RIN', '19890003-3', 'ROKHMATUL INSANI', '', 'S.T., M.T.'),
('RMU', '20910025-3', 'RISDILAH MIMMA UNTSA', '', ''),
('RSY', '19880005-1', 'MOCH. ISKANDAR RIANSYAH', '', 'S.T., M.T.'),
('SIN', '18880134-3', 'SINTA DEWI', '', ''),
('SSJ', '20730006-3', 'SUSIJANTO TRI RASMANA', 'Dr', 'S.Kom., M.T.'),
('SWP', '20930069-3', 'SEKAR WIDYASARI PUTRI', '', ''),
('TAP', '20940042-3', 'TIAR ANINDYA PUTRI', '', ''),
('TRI', '18620029-3', 'TRI AGUS DJOKO KUNTJORO', 'Ir.', 'M.T.'),
('TTK', '20860014-1', 'TITUS KRISTANTO', '', 'A.Md, S.Kom., M.Kom.'),
('UBM', '19880003-1', 'UBAIDILLAH UMAR', '', 'S.ST., MT.'),
('UCN', '19940001-1', 'MUHSIN', '', 'S.T., M.T.'),
('ULF', '19900008-1', 'ULLY ASFARI', '', 'S.Kom., M.Kom.'),
('WAP', '19870002-1', 'WAHYU ANDY PRASTYABUDI', '', 'S.Kom., M.Sc.'),
('WLD', '19890002-1', 'WALID MAULANA HADIANSYAH', '', 'S.T., M.T.'),
('YPS', '20860017-1', 'YUPIT SUDIANTO', '', 'S.Kom., M.Kom.');

-- --------------------------------------------------------

--
-- Table structure for table `logbookinternship`
--

CREATE TABLE `logbookinternship` (
  `LOGBOOKID` decimal(10,0) NOT NULL,
  `GROUPID` decimal(10,0) DEFAULT NULL,
  `ACTIVITAS` text DEFAULT NULL,
  `INPUTDATE` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` text NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1610773486, 1);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `roleid` int(11) NOT NULL,
  `rolename` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`roleid`, `rolename`) VALUES
(1, 'Administrator'),
(2, 'Fakultas'),
(3, 'Bagian Pelayanan Akademik'),
(4, 'Pembimbing Akademik'),
(5, 'Pembimbing Lapangan'),
(6, 'Penguji'),
(7, 'Mahasiswa');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `STUDENTID` varchar(12) NOT NULL,
  `STUDYPROGRAMID` char(2) DEFAULT NULL,
  `GROUPID` decimal(10,0) DEFAULT NULL,
  `FULLNAME` varchar(100) DEFAULT NULL,
  `CLASS` varchar(50) DEFAULT NULL,
  `LECTURERCODE` char(3) DEFAULT NULL,
  `STUDENSCHOOLYEAR` char(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`STUDENTID`, `STUDYPROGRAMID`, `GROUPID`, `FULLNAME`, `CLASS`, `LECTURERCODE`, `STUDENSCHOOLYEAR`) VALUES
('1101180002', '4', '0', 'RIZKI DWI SAPUTRA', 'TE-01-01', 'WLD', '1819'),
('1101180003', '4', '0', 'MAULANA ACHMAD ROZAQ', 'TE-01-01', 'WLD', '1819'),
('1101180004', '4', '0', 'RIZKY MAULANA SYAFI ZAMHARI', 'TE-01-01', 'WLD', '1819'),
('1101180005', '4', '0', 'AULIA PUTRI PRAMITA', 'TE-01-01', 'UCN', '1819'),
('1101180006', '4', '0', 'RISKI DWI NUR CAHYANTI', 'TE-01-01', 'UCN', '1819'),
('1101180007', '4', '0', 'JONATHAN SALIM NADEAK', 'TE-01-01', 'UCN', '1819'),
('1101180008', '4', '0', 'BRYAN BIHZA MARSONO', 'TE-01-01', 'UCN', '1819'),
('1101180009', '4', '0', 'INDRA BASTIAN P.SIMBOLON', 'TE-01-01', 'UCN', '1819'),
('1101180010', '4', '0', 'DWIKY FAIZAL AKBAR', 'TE-01-01', 'NRR', '1819'),
('1101180011', '4', '0', 'RM. BAGASTYO ANGGORO INDRASTOTO', 'TE-01-01', 'NRR', '1819'),
('1101180012', '4', '0', 'ANDHIKA DANISWARA', 'TE-01-01', 'WLD', '1819'),
('1101180013', '4', '0', 'GHEIVARD A.  SAMANA', 'TE-01-01', 'NRR', '1819'),
('1101180016', '4', '0', 'INDAH RAHMAWATI UTAMI', 'TE-01-01', 'HAM', '1819'),
('1101180017', '4', '0', 'IKA SULISTYA RINI', 'TE-01-01', 'NRR', '1819'),
('1101180020', '4', '0', 'FACHRUL REZA MAULANA', 'TE-01-01', 'HAM', '1819'),
('1101180022', '4', '0', 'MUHAMMAD AGUNG NURHAIDARNA', 'TE-01-01', 'HAM', '1819'),
('1101180027', '4', '0', 'HIDAYATUL KHOIRIYAH', 'TE-01-01', 'HAM', '1819'),
('1101180028', '4', '0', 'PRASASTI DESTA SRIHADI', 'TE-01-01', 'HAM', '1819'),
('1101181001', '4', '0', 'ALFINDA LAHIYA', 'TE-01-01', 'WLD', '1819'),
('1101181018', '4', '0', 'AULIA SAHARANI', 'TE-01-01', 'HAM', '1819'),
('1101181026', '4', '0', 'NOVENDA RAHMAH TRIPUTRA', 'TE-01-01', 'HAM', '1819'),
('1101185014', '4', '0', 'RAFI ASHRAF ANJAYA', 'TE-01-02', 'NRR', '1819'),
('1101185015', '4', '0', 'MOCH RAGIL PUTRA MURDIKA', 'TE-01-01', 'HAM', '1819'),
('1101185019', '4', '0', 'AHMAD ALDI', 'TE-01-02', 'HAM', '1819'),
('1101185021', '4', '0', 'RASYID SABIRIN', 'TE-01-02', 'HAM', '1819'),
('1101185023', '4', '0', 'ERLIN YULI ANGGRAINI', 'TE-01-02', 'HAM', '1819'),
('1101185024', '4', '0', 'RAFFI MAHARDIKA BUDI PRASETYO', 'TE-01-02', 'HAM', '1819'),
('1101185025', '4', '0', 'MUHAMMAD HABIBIE IRFANSYAH', 'TE-01-02', 'HAM', '1819'),
('1101190001', '4', '0', 'RIAN GUNAWAN', 'TE-02-01', 'HAM', '1920'),
('1101190004', '4', '0', 'ERWIN BARI PRASETYANTO', 'TE-02-02', 'NRR', '1920'),
('1101190005', '4', '0', 'SEKAROLA DHONA RIASMARA', 'TE-02-03', 'UCN', '1920'),
('1101190006', '4', '0', 'MUH.FADLY HASANUDDIN', 'TE-02-02', 'NRR', '1920'),
('1101190007', '4', '0', 'BERCHMANS RICHARD GERE KOPA', 'TE-02-03', 'UCN', '1920'),
('1101190008', '4', '0', 'MUH.AKHYAR RASYIDY', 'TE-02-02', 'NRR', '1920'),
('1101190009', '4', '0', 'EKA TEDDY BUDHANA GOTAMA', 'TE-02-03', 'UCN', '1920'),
('1101190010', '4', '0', 'AHMAD ALI YAHYA', 'TE-02-02', 'NRR', '1920'),
('1101190011', '4', '0', 'NABILAH AZRINA', 'TE-02-01', 'HAM', '1920'),
('1101190012', '4', '0', 'AMALIA NUR AZIZAH', 'TE-02-02', 'NRR', '1920'),
('1101190013', '4', '0', 'NABILATUZ ZUHRIYAH', 'TE-02-01', 'HAM', '1920'),
('1101190014', '4', '0', 'MUHAMMAD ULHAQ', 'TE-02-02', 'NRR', '1920'),
('1101190015', '4', '0', 'RICKY YOHANES SIJABAT', 'TE-02-01', 'HAM', '1920'),
('1101190016', '4', '0', 'LEONARDO KRISNA GITA DHARMAWAN', 'TE-02-02', 'NRR', '1920'),
('1101190017', '4', '0', 'TASYA SALSABILLA', 'TE-02-03', 'UCN', '1920'),
('1101190020', '4', '0', 'FERNANDO SANDY GOSAL', 'TE-02-02', 'NRR', '1920'),
('1101190021', '4', '0', 'ANNISA RAMADHANI', 'TE-02-01', 'HAM', '1920'),
('1101190022', '4', '0', 'MOH MUIZUL FAJAR ROHMAN', 'TE-02-02', 'WLD', '1920'),
('1101190023', '4', '0', 'ELDADO KHRISNA PUTRA', 'TE-02-01', 'HAM', '1920'),
('1101190024', '4', '0', 'VIDI ESA RENAISANS GINTINGS', 'TE-02-02', 'WLD', '1920'),
('1101190025', '4', '0', 'ALFIAN RIFALDO LATAENA', 'TE-02-01', 'HAM', '1920'),
('1101190026', '4', '0', 'MISBACHUL MUNIR', 'TE-02-02', 'WLD', '1920'),
('1101190028', '4', '0', 'NABILAH ZUMURRUDAH ARIF', 'TE-02-01', 'HAM', '1920'),
('1101190029', '4', '0', 'MOHAMMAD FERRY FARDIANSYAH', 'TE-02-02', 'WLD', '1920'),
('1101190031', '4', '0', 'RADHIATUL MARDIAH', 'TE-02-01', 'HAM', '1920'),
('1101190032', '4', '0', 'MUHAMMAD HANIF', 'TE-02-02', 'WLD', '1920'),
('1101190033', '4', '0', 'AZRIEL ABRILLIAN RAFFLYSYAH', 'TE-02-01', 'HAM', '1920'),
('1101190035', '4', '0', 'M ZULHAM HARIS ANNAFI\'', 'TE-02-02', 'WLD', '1920'),
('1101190037', '4', '0', 'MUCHAMMAD DIMAS NOVIANTO', 'TE-02-01', 'HAM', '1920'),
('1101190038', '4', '0', 'MUHAMMAD SUNAN AKBAR OHORELLA', 'TE-02-02', 'WLD', '1920'),
('1101190039', '4', '0', 'MUHAMMAD ZULHIDAYATMAN', 'TE-02-01', 'HAM', '1920'),
('1101190040', '4', '0', 'NI KETUT MELZIA ANGGI MARIA', 'TE-02-01', 'HAM', '1920'),
('1101190041', '4', '0', 'NABILA DWI PITALOKA', 'TE-02-01', 'HAM', '1920'),
('1101190042', '4', '0', 'AFANDI RIZAL KURNIAWAN', 'TE-02-03', 'UCN', '1920'),
('1101190044', '4', '0', 'MUHAMMAD ARYA DUTA ATHALA AKBAR', 'TE-02-01', 'HAM', '1920'),
('1101190046', '4', '0', 'RIVAN ANDRI HARIYANTO', 'TE-02-03', 'UCN', '1920'),
('1101190047', '4', '0', 'FARIS JA\'FAR SHIDIQ', 'TE-02-01', 'HAM', '1920'),
('1101190048', '4', '0', 'MUCHAMMAD NUR SALIM AJI', 'TE-02-03', 'UCN', '1920'),
('1101190049', '4', '0', 'MIAKA AWANG SETIAWAN', 'TE-02-01', 'HAM', '1920'),
('1101190050', '4', '0', 'BOBI SEMBIRING', 'TE-02-03', 'UCN', '1920'),
('1101190051', '4', '0', 'SALSHABILAH PELUW', 'TE-02-03', 'UCN', '1920'),
('1101190052', '4', '0', 'ANDRY LEONARDO WIJAYA', 'TE-02-03', 'UCN', '1920'),
('1101190053', '4', '0', 'ARDIANSYAH', 'TE-02-03', 'TRI', '1920'),
('1101190054', '4', '0', 'BRAMANTYA ALDI P', 'TE-02-03', 'TRI', '1920'),
('1101190055', '4', '0', 'TAMARA RAAFINA HADIANTI', 'TE-02-01', 'HAM', '1920'),
('1101190056', '4', '0', 'BINTANG SATRYA DEWANUSA', 'TE-02-03', 'TRI', '1920'),
('1101190057', '4', '0', 'REZA ELOK RAMADHANIA', 'TE-02-01', 'HAM', '1920'),
('1101190058', '4', '0', 'DAVA ABIMANYU PRATAMA PUTRA', 'TE-02-03', 'TRI', '1920'),
('1101190059', '4', '0', 'AHMAD NAUFAL FAJRIL ALAM', 'TE-02-03', 'TRI', '1920'),
('1101190061', '4', '0', 'MOHAMAD DIDIT SANTOSO', 'TE-02-03', 'TRI', '1920'),
('1101190062', '4', '0', 'MAURYAN FIRMANSYAH IMANULLAH', 'TE-02-01', 'NRR', '1920'),
('1101190064', '4', '0', 'ALDILA PUTRIASYAHFRIDA', 'TE-02-03', 'TRI', '1920'),
('1101190065', '4', '0', 'YAHYA ALI MUKTI', 'TE-02-03', 'TRI', '1920'),
('1101190066', '4', '0', 'MUKHAMMAD RAFLI ADITIA', 'TE-02-02', 'WLD', '1920'),
('1101190067', '4', '0', 'ARI CANDRA ARKANANTA', 'TE-02-03', 'TRI', '1920'),
('1101192018', '4', '0', 'MUHAMMAD ZULSRIL MUZAKKI', 'TE-02-02', 'WLD', '1920'),
('1101192027', '4', '0', 'MAULANA ALFAFA', 'TE-02-03', 'TRI', '1920'),
('1101192034', '4', '0', 'TALITHA WENING JOYO', 'TE-02-02', 'WLD', '1920'),
('1101192043', '4', '0', 'ARDHYA RAMADANI', 'TE-02-03', 'TRI', '1920'),
('1101192060', '4', '0', 'MUHAMMAD LATIF HAFAN', 'TE-02-02', 'WLD', '1920'),
('1101192063', '4', '0', 'FERYO WINARTO', 'TE-02-03', 'TRI', '1920'),
('1101195068', '4', '0', 'NOVY NUGROHO', 'TE-02-P', 'HAM', '1920'),
('1101195069', '4', '0', 'MONICA DERA ALFATTANANI', 'TE-02-P', 'HAM', '1920'),
('1101195070', '4', '0', 'REVINDA SARI', 'TE-02-02', 'HAM', '1920'),
('1101195071', '4', '0', 'PRADIFTA EKA ARIYANTO', 'TE-02-P', 'HAM', '1920'),
('1101199002', '4', '0', 'JANNATI SEFHIANILA YUSUF', 'TE-02-02', 'WLD', '1920'),
('1101199003', '4', '0', 'GITA RAMDHAN HARIS', 'TE-02-01', 'NRR', '1920'),
('1101199019', '4', '0', 'MUHAMMAD AGUNG AYATULLAH', 'TE-02-02', 'UCN', '1920'),
('1101199030', '4', '0', 'ZAYYAN ABDUL KADIR SALLUM', 'TE-02-01', 'NRR', '1920'),
('1101199036', '4', '0', 'SYAMMAS MUHYIDDIN', 'TE-02-02', 'UCN', '1920'),
('1101199045', '4', '0', 'KLEMENS FREYNA ROE', 'TE-02-01', 'NRR', '1920'),
('1101200001', '4', '0', 'THERESA MARGARETHA JULIA ARIANI', 'TE-03-01', 'WLD', '2021'),
('1101200002', '4', '0', 'HASRU NURRISQO', 'TE-03-01', 'UCN', '2021'),
('1101200003', '4', '0', 'WAHYU FATUR ALFANSYAH', 'TE-03-02', 'WLD', '2021'),
('1101200004', '4', '0', 'NU\'MAN AHLUR RA\'YI QAIZ', 'TE-03-01', 'HAM', '2021'),
('1101200006', '4', '0', 'GALUH WIDYA CAHYANINGTYAS', 'TE-03-02', 'RMU', '2021'),
('1101200007', '4', '0', 'MHD LATIEF PRATAMA', 'TE-03-01', 'UCN', '2021'),
('1101200008', '4', '0', 'ALIEFIA FARAH SARI', 'TE-03-01', 'HAM', '2021'),
('1101200010', '4', '0', 'RIZAL REYNALDI', 'TE-03-01', 'NRR', '2021'),
('1101200012', '4', '0', 'ARDA SYAFIAN PUTRA', 'TE-03-01', 'HAM', '2021'),
('1101200013', '4', '0', 'ADISTA FARA PUTRI FAJAR', 'TE-03-02', 'TRI', '2021'),
('1101200014', '4', '0', 'RACHMAD ZIDANE HIDAYATULLAH WONGGO', 'TE-03-02', 'RMU', '2021'),
('1101200015', '4', '0', 'AURORA SARASWATI RAHMADIANI', 'TE-03-01', 'HAM', '2021'),
('1101200017', '4', '0', 'KHOLIFAH ANDILIYANI MARIYAMA', 'TE-03-01', 'UCN', '2021'),
('1101200018', '4', '0', 'BAGAS RASUL NUSANTARA', 'TE-03-01', 'HAM', '2021'),
('1101200019', '4', '0', 'GUSTI AYU MADE KAYIKA', 'TE-03-02', 'RMU', '2021'),
('1101200020', '4', '0', 'OPAL OKA GUMILANG', 'TE-03-02', 'RMU', '2021'),
('1101200021', '4', '0', 'TASYA AMALIA', 'TE-03-01', 'WLD', '2021'),
('1101200022', '4', '0', 'MICHAEL SANTANA', 'TE-03-01', 'UCN', '2021'),
('1101200024', '4', '0', 'JOSUA MATHEUS BATLAYERI', 'TE-03-01', 'UCN', '2021'),
('1101200025', '4', '0', 'RAISSA RAHMA SUSIANTO', 'TE-03-02', 'WLD', '2021'),
('1101200026', '4', '0', 'ANAK AGUNG NGURAH KIYANA ADHISA OKA PERTAMA', 'TE-03-02', 'TRI', '2021'),
('1101200027', '4', '0', 'MUH AKBAR ABADI', 'TE-03-01', 'UCN', '2021'),
('1101200028', '4', '0', 'PARAMITHA EVA AYU SOPHIE WIDYASARI', 'TE-03-01', 'HAM', '2021'),
('1101200030', '4', '0', 'FARIA UTAMI', 'TE-03-02', 'RMU', '2021'),
('1101200031', '4', '0', 'ALFIQRIL KHAIKAL', 'TE-03-01', 'NRR', '2021'),
('1101200033', '4', '0', 'M. DICKY AFRIADY', 'TE-03-02', 'RMU', '2021'),
('1101200034', '4', '0', 'RIDHO PRASETYO WICAKSONO', 'TE-03-01', 'NRR', '2021'),
('1101200035', '4', '0', 'VICKY HERDIAN MAULANA WIBISONO', 'TE-03-02', 'WLD', '2021'),
('1101200036', '4', '0', 'MUHAMMAD NAUFAN ARDHI WASKITO', 'TE-03-01', 'UCN', '2021'),
('1101200037', '4', '0', 'ACHMAD BAYU SETIAWAN', 'TE-03-02', 'TRI', '2021'),
('1101200038', '4', '0', 'EVAN IRSYAD SHARIM', 'TE-03-01', 'UCN', '2021'),
('1101200039', '4', '0', 'MUHAMMAD FAUZI ALFIKRI HUSAINI', 'TE-03-02', 'RMU', '2021'),
('1101200040', '4', '0', 'ALDIMAS ANDRIANSYAH', 'TE-03-01', 'NRR', '2021'),
('1101200041', '4', '0', 'DARA MELLINA IRIANTININGRUM PUTRI', 'TE-03-02', 'RMU', '2021'),
('1101200042', '4', '0', 'ASTUTI BR SITUMORANG', 'TE-03-01', 'HAM', '2021'),
('1101200043', '4', '0', 'RAYHAN NAUFALDI', 'TE-03-02', 'WLD', '2021'),
('1101200045', '4', '0', 'IMAMA ROHMATIN NUR FAJARI', 'TE-03-02', 'HAM', '2021'),
('1101200046', '4', '0', 'EHSAR SYARIFAH ALIYAH AMOES CHITRA', 'TE-03-01', 'HAM', '2021'),
('1101200047', '4', '0', 'MOHAMMAD ILHAM REZA PRATAMA', 'TE-03-02', 'RMU', '2021'),
('1101200048', '4', '0', 'HANUNG GHINANGGA PRIHAJI PUTRI', 'TE-03-02', 'NRR', '2021'),
('1101200049', '4', '0', 'NATASSYA MEKARILLA SYACRENI WINOTO', 'TE-03-01', 'HAM', '2021'),
('1101200050', '4', '0', 'ALFIAN SURYA MAHENDRA', 'TE-03-01', 'NRR', '2021'),
('1101200051', '4', '0', 'SITI MADIATUZ ZURROH', 'TE-03-02', 'WLD', '2021'),
('1101200053', '4', '0', 'MUHAMMAD SYAFIQ SURUR', 'TE-03-01', 'UCN', '2021'),
('1101200054', '4', '0', 'DIAN ASRININDA TUMENGGUNG', 'TE-03-01', 'HAM', '2021'),
('1101200056', '4', '0', 'SAWUNG GILANG PRATAMA PUTRA', 'TE-03-01', 'NRR', '2021'),
('1101200058', '4', '0', 'MUKHLISAH NUR FADHILAH. S', 'TE-03-02', 'RMU', '2021'),
('1101200059', '4', '0', 'TIARA YASMINE AMELIA ZABRINA', 'TE-03-01', 'WLD', '2021'),
('1101200060', '4', '0', 'JESSICA THEODORA', 'TE-03-02', 'NRR', '2021'),
('1101200061', '4', '0', 'MIGEL GUTERES WARIROAN', 'TE-03-01', 'UCN', '2021'),
('1101202005', '4', '0', 'ANANDA ILHAM UTOMO', 'TE-03-02', 'TRI', '2021'),
('1101202009', '4', '0', 'MUHZHACKYDAFFA', 'TE-03-02', 'RMU', '2021'),
('1101202011', '4', '0', 'RIDHO ADRINATA BARUS', 'TE-03-02', 'WLD', '2021'),
('1101202016', '4', '0', 'LUTHFIAH ARBIAH NASIR', 'TE-03-02', 'NRR', '2021'),
('1101202029', '4', '0', 'ARYA DEVANO TRISTAN', 'TE-03-02', 'TRI', '2021'),
('1101202044', '4', '0', 'RIZAL THORIQ WIDIANSYAH', 'TE-03-01', 'NRR', '2021'),
('1101202052', '4', '0', 'MARCELINUS WISNU RICKY NUGROHO', 'TE-03-02', 'RMU', '2021'),
('1101203032', '4', '0', 'DINDA APRILIA KASDA', 'TE-03-01', 'HAM', '2021'),
('1101205023', '4', '0', 'MOCHAMMAD FERI', 'TE-03-P', 'WLD', '2021'),
('1101205055', '4', '0', 'ADITYA FAIZAL AKBAR', 'TE-03-P', 'HAM', '2021'),
('1101205057', '4', '0', 'FAJAR BAGUS ARIFIANTO', 'TE-03-P', 'WLD', '2021'),
('1101208062', '4', '0', 'ARYA SATRYA WICAKSANA', 'TE-03-02', 'HAM', '2021'),
('1101208063', '4', '0', 'FAIZ ALFI FATAHILLAH', 'TE-03-01', 'RMU', '2021'),
('1102180001', '1', '0', 'MUHAMMAD SYAIFUL ISLAM', 'CE-01-01', 'BLM', '1819'),
('1102180002', '1', '0', 'MUHAMMAD YANUAR MUHAIMIN', 'CE-01-01', 'BLM', '1819'),
('1102180003', '1', '0', 'RIZAL FATHURRAHMAN', 'CE-01-01', 'BLM', '1819'),
('1102180004', '1', '0', 'ALFRIDO RAMADHANA KASENDA PUTRA', 'CE-01-01', 'BLM', '1819'),
('1102180006', '1', '0', 'MUHAMMAD HUZAIMI MAULANA', 'CE-01-01', 'BLM', '1819'),
('1102180007', '1', '0', 'DANU DININGRAT', 'CE-01-01', 'BLM', '1819'),
('1102180008', '1', '0', 'LAZUARDI KIVLAN EGA AL KAUSAR', 'CE-01-01', 'BLM', '1819'),
('1102180009', '1', '0', 'ALVIN TAMADO CAHAYA', 'CE-01-01', 'BLM', '1819'),
('1102180010', '1', '0', 'PRADITA KIRANA ARJUNADI', 'CE-01-01', 'BLM', '1819'),
('1102181005', '1', '0', 'DITO HEWI JULIANTO', 'CE-01-01', 'BLM', '1819'),
('1102183011', '1', '0', 'GALIH HASTO NUGROHO', 'CE-01-01', 'BLM', '1819'),
('1102183012', '1', '0', 'DANANG TAUFIK KURNIANTO', 'CE-01-01', 'BLM', '1819'),
('1102190001', '1', '0', 'DINDA KARISMA ULFA', 'CE-02-02', 'BLM', '1920'),
('1102190002', '1', '0', 'ARDI DWI SAPUTRA', 'CE-02-01', 'BLM', '1920'),
('1102190003', '1', '0', 'SUGIK NUR HANTORO', 'CE-02-02', 'BLM', '1920'),
('1102190005', '1', '0', 'GILANG ADITYA MAHESAPUTRA', 'CE-02-01', 'BLM', '1920'),
('1102190006', '1', '0', 'LA SAFRIL', 'CE-02-02', 'BLM', '1920'),
('1102190007', '1', '0', 'IRVANZA DINO RENATA', 'CE-02-01', 'ALF', '1920'),
('1102190008', '1', '0', 'KHAFIF RAFIQ', 'CE-02-02', 'ALF', '1920'),
('1102190009', '1', '0', 'DIMAS MAHENDRA BUDI SANTOSO', 'CE-02-01', 'ALF', '1920'),
('1102190011', '1', '0', 'SILVI PRASTIWI RENANDA PUTRI', 'CE-02-02', 'ALF', '1920'),
('1102190013', '1', '0', 'WAHYUDHA ARDIYANTO', 'CE-02-01', 'ALF', '1920'),
('1102190014', '1', '0', 'ARFAN ADIPUTRA WUEKERO', 'CE-02-02', 'ALF', '1920'),
('1102190015', '1', '0', 'ADINDA PANCA MOCHAMAD', 'CE-02-01', 'ALF', '1920'),
('1102190018', '1', '0', 'FAYOLA LIYANI', 'CE-02-02', 'ALF', '1920'),
('1102190019', '1', '0', 'IRGI ZANUAR ARDHANA SANTOSO', 'CE-02-01', 'ALF', '1920'),
('1102190020', '1', '0', 'MARCO DARMAWAN', 'CE-02-02', 'ALF', '1920'),
('1102190022', '1', '0', 'AHMAD HABIBI', 'CE-02-01', 'ALF', '1920'),
('1102190023', '1', '0', 'MOHAMMAD NUR EFFENDY', 'CE-02-02', 'ALF', '1920'),
('1102190025', '1', '0', 'ALOYSIUS ADRIAN ABEDNEGO', 'CE-02-01', 'ALF', '1920'),
('1102190026', '1', '0', 'FIANDA BRILIYANDI', 'CE-02-02', 'ALF', '1920'),
('1102190027', '1', '0', 'AQILA RANA NAUFAL', 'CE-02-01', 'ALF', '1920'),
('1102190028', '1', '0', 'AMALIA AGUSDINA SAFITRI', 'CE-02-02', 'EDS', '1920'),
('1102190030', '1', '0', 'ILHAM FAUZAN NAHAR', 'CE-02-01', 'EDS', '1920'),
('1102190031', '1', '0', 'WAFA MURTADHO KHOLID', 'CE-02-02', 'EDS', '1920'),
('1102190032', '1', '0', 'ELANG DUTA ASMARA', 'CE-02-01', 'EDS', '1920'),
('1102190033', '1', '0', 'BERRYL CHOLIF ARROHMAN NURRIDUWAN', 'CE-02-02', 'EDS', '1920'),
('1102190035', '1', '0', 'DIKO ALAN FIRMANSYAH', 'CE-02-01', 'EDS', '1920'),
('1102190036', '1', '0', 'MOCH.DHAFA FIKRI FAKHRUDDIN', 'CE-02-02', 'EDS', '1920'),
('1102190037', '1', '0', 'RIZKI YANUBA ARIFAN', 'CE-02-01', 'EDS', '1920'),
('1102190038', '1', '0', 'ARI CANDRA RAHMANAGA', 'CE-02-02', 'EDS', '1920'),
('1102190039', '1', '0', 'MOHAMAD TAUFIQUL IRHANDY', 'CE-02-01', 'EDS', '1920'),
('1102190040', '1', '0', 'ANDRE ADI NUGROHO', 'CE-02-02', 'EDS', '1920'),
('1102190041', '1', '0', 'FAHMI SHELBY AVIANTARA', 'CE-02-01', 'EDS', '1920'),
('1102192010', '1', '0', 'M. FADHIL KUMAWA PUTRA', 'CE-02-02', 'EDS', '1920'),
('1102192012', '1', '0', 'M RACHMADANI', 'CE-02-01', 'EDS', '1920'),
('1102192016', '1', '0', 'DAVID SETIAWAN BUDI', 'CE-02-02', 'EDS', '1920'),
('1102192017', '1', '0', 'RISKI ALI RIDHO', 'CE-02-01', 'UBM', '1920'),
('1102192021', '1', '0', 'MUHAMMAD AMIRULLAH BAGASKARA', 'CE-02-02', 'UBM', '1920'),
('1102192024', '1', '0', 'DICKY WAHYU PURNOMO ADI', 'CE-02-01', 'UBM', '1920'),
('1102192029', '1', '0', 'TRISNA BAYU PERMADI', 'CE-02-02', 'UBM', '1920'),
('1102192034', '1', '0', 'MUHAMMAD LUTHFI RAHMAN', 'CE-02-01', 'UBM', '1920'),
('1102199004', '1', '0', 'M.FAHRICO.PUTRA', 'CE-02-02', 'UBM', '1920'),
('1102200001', '1', '0', 'FADETA ILHAN GANDHI', 'CE-03-01', 'BLM', '2021'),
('1102200002', '1', '0', 'CHRISTIAN OBED WIDODO', 'CE-03-02', 'BLM', '2021'),
('1102200003', '1', '0', 'I PUTU WESKA SURIADITA', 'CE-03-01', 'BLM', '2021'),
('1102200004', '1', '0', 'ALDI RAMADHANI', 'CE-03-02', 'BLM', '2021'),
('1102200006', '1', '0', 'ADHITYA HENDRI PRATAMA', 'CE-03-02', 'EDS', '2021'),
('1102200007', '1', '0', 'RAHMAT ARIEF W', 'CE-03-01', 'ALF', '2021'),
('1102200008', '1', '0', 'RAFANUEL YUDAHYANA', 'CE-03-02', 'EDS', '2021'),
('1102200009', '1', '0', 'RISYAD MAULANA', 'CE-03-01', 'EDS', '2021'),
('1102200011', '1', '0', 'M. AKBAR QODRI AZIZI', 'CE-03-01', 'EDS', '2021'),
('1102200013', '1', '0', 'AZWAR SYIFA MUFIQI', 'CE-03-01', 'BLM', '2021'),
('1102200014', '1', '0', 'ABEL AFRIANDIKA SURYA PUTRA KARSENO', 'CE-03-02', 'EDS', '2021'),
('1102200015', '1', '0', 'MUHAMMAD IQBAL FARISSI AL GHIFARI', 'CE-03-01', 'UBM', '2021'),
('1102200018', '1', '0', 'DHERY AKBAR RAMADHAN', 'CE-03-02', 'ALF', '2021'),
('1102200019', '1', '0', 'ARIF SURYADANA SAPUTRA', 'CE-03-01', 'ALF', '2021'),
('1102200020', '1', '0', 'RIZKY DWI BUDI ANUGRAH WIBOWO', 'CE-03-02', 'EDS', '2021'),
('1102200023', '1', '0', 'MERTHISIA ROSZI', 'CE-03-01', 'BLM', '2021'),
('1102200024', '1', '0', 'MARSADA FALAHUDDIN ARRAZI', 'CE-03-01', 'BLM', '2021'),
('1102200025', '1', '0', 'ALLAAM ROSYAD AKBAR', 'CE-03-02', 'EDS', '2021'),
('1102200026', '1', '0', 'CHRISTOLINI ANGELO SATULO ZANDROTO', 'CE-03-01', 'EDS', '2021'),
('1102200027', '1', '0', 'HERA AISYAH RACHMAWATI', 'CE-03-02', 'BLM', '2021'),
('1102200028', '1', '0', 'DESFIANTO', 'CE-03-02', 'UBM', '2021'),
('1102200029', '1', '0', 'AHMAD ASIF ILTIZAM', 'CE-03-01', 'UBM', '2021'),
('1102200030', '1', '0', 'SANDI ADI PRATAMA', 'CE-03-02', 'ALF', '2021'),
('1102200031', '1', '0', 'GALANG RAMBU RAMADHAN', 'CE-03-01', 'ALF', '2021'),
('1102200032', '1', '0', 'SHENNY VERRIAN AKBAR', 'CE-03-02', 'BLM', '2021'),
('1102200033', '1', '0', 'RAMADHAN NOVIANDI PUTRA', 'CE-03-01', 'EDS', '2021'),
('1102200034', '1', '0', 'MUHAMMAD RAZANAFI SINGGIH', 'CE-03-02', 'ALF', '2021'),
('1102200035', '1', '0', 'GIBERT BREAN FAHILAH JEFRIANTO', 'CE-03-01', 'UBM', '2021'),
('1102200036', '1', '0', 'MUHAMMAD MAHRIZAL SYAHPUTRA', 'CE-03-02', 'ALF', '2021'),
('1102200037', '1', '0', 'DAFFA FAKHUDDIN ARROZY', 'CE-03-01', 'UBM', '2021'),
('1102200038', '1', '0', 'HAMZAH FANSURI', 'CE-03-02', 'ALF', '2021'),
('1102200039', '1', '0', 'DANANG EKA R', 'CE-03-01', 'UBM', '2021'),
('1102200040', '1', '0', 'SEKTIYAN ANANDITO SISWOYO', 'CE-03-02', 'UBM', '2021'),
('1102200041', '1', '0', 'HANDI ACHMAD ROUF', 'CE-03-01', 'UBM', '2021'),
('1102200042', '1', '0', 'ALIFFIANTO NUR HUDA', 'CE-03-02', 'UBM', '2021'),
('1102200043', '1', '0', 'MOCHAMMAD RIZKY ERJUNANTO', 'CE-03-01', 'UBM', '2021'),
('1102200046', '1', '0', 'ILHAM WILDAN PERMANA', 'CE-03-01', 'UBM', '2021'),
('1102200047', '1', '0', 'MARCELINO CHRISTIAN PERMANA PUTRA', 'CE-03-02', 'ALF', '2021'),
('1102200049', '1', '0', 'M. ARDIANSYAH AL FAIZ', 'CE-03-02', 'UBM', '2021'),
('1102200050', '1', '0', 'MUHAMMAD RIZQI', 'CE-03-01', 'UBM', '2021'),
('1102200052', '1', '0', 'ANNISA RIZKYTA N J', 'CE-03-02', 'BLM', '2021'),
('1102200056', '1', '0', 'ALVARO ARIEL ILANUNU', 'CE-03-02', 'BLM', '2021'),
('1102200057', '1', '0', 'EKA ANDRI SULISTIANTO', 'CE-03-01', 'BLM', '2021'),
('1102200059', '1', '0', 'ARCICO WELDY SOFTYANSYAH', 'CE-03-01', 'EDS', '2021'),
('1102200060', '1', '0', 'DAVA MAULANA ATHTHARIQ', 'CE-03-02', 'ALF', '2021'),
('1102200061', '1', '0', 'DANANG DWI RAMADHAN', 'CE-03-01', 'ALF', '2021'),
('1102200062', '1', '0', 'BOBBY ALFIAN MALIK', 'CE-03-02', 'EDS', '2021'),
('1102200063', '1', '0', 'ABDULLAH ADIL AWWALI', 'CE-03-01', 'UBM', '2021'),
('1102200066', '1', '0', 'HARI SETIAWAN MULYA', 'CE-03-02', 'UBM', '2021'),
('1102200067', '1', '0', 'AKHMAD IKHSANUL KAMAL', 'CE-03-01', 'BLM', '2021'),
('1102202005', '1', '0', 'MOH IQBAL AQIEL AZIZI', 'CE-03-01', 'EDS', '2021'),
('1102202012', '1', '0', 'PRIANA HANIF NADIANSYAH', 'CE-03-02', 'EDS', '2021'),
('1102202016', '1', '0', 'HARITS IHYA\'UDDIEN NUR TAMIMI', 'CE-03-02', 'BLM', '2021'),
('1102202017', '1', '0', 'JUAN ENRICO CHANDRA LO', 'CE-03-01', 'UBM', '2021'),
('1102202021', '1', '0', 'ARI MUSAWA', 'CE-03-01', 'UBM', '2021'),
('1102202022', '1', '0', 'YUDHISTIRA BATHARA NAUFAL LUHUNG', 'CE-03-02', 'UBM', '2021'),
('1102202044', '1', '0', 'GARNIS KHUMAIZATUZ ZAHRO', 'CE-03-01', 'UBM', '2021'),
('1102202045', '1', '0', 'MUHAMMAD SIROJUL MUNIR', 'CE-03-02', 'UBM', '2021'),
('1102202048', '1', '0', 'RAKAWIRA KUSUMA WIHARDI', 'CE-03-01', 'UBM', '2021'),
('1102202051', '1', '0', 'MUHAMMAD REZA ILHAMSYAH', 'CE-03-02', 'UBM', '2021'),
('1102202053', '1', '0', 'ARDYANSYAH PRATAMA HARDIKA', 'CE-03-01', 'ALF', '2021'),
('1102202054', '1', '0', 'SULTAN SURYA LAKSONO', 'CE-03-02', 'ALF', '2021'),
('1102202055', '1', '0', 'RIFQI ADITIYA', 'CE-03-01', 'UBM', '2021'),
('1102202058', '1', '0', 'TEGAR ARLANSAH PUTRA', 'CE-03-02', 'ALF', '2021'),
('1102202064', '1', '0', 'ALIF ANDIKA AMIN', 'CE-03-02', 'EDS', '2021'),
('1102202065', '1', '0', 'ANGGER FAJAR WIRAYUDHA', 'CE-03-01', 'BLM', '2021'),
('1102203010', '1', '0', 'ROYZALDO ASER ELEGIUS LOGO', 'CE-03-02', 'ALF', '2021'),
('1103180001', '2', '0', 'PUTU DUTA HASTA PUTRA', 'EE-01-01', 'KHL', '1819'),
('1103180002', '2', '0', 'ABDULLOH HAMID NUSHFI', 'EE-01-01', 'KHL', '1819'),
('1103180004', '2', '0', 'MOCHAMAD FAUZAN RASYID', 'EE-01-01', 'KHL', '1819'),
('1103180005', '2', '0', 'DIMAS BAGAS WICAKSONO', 'EE-01-01', 'KHL', '1819'),
('1103180007', '2', '0', 'FATHUR ALFARIZ', 'EE-01-01', 'KHL', '1819'),
('1103180008', '2', '0', 'AQSHA AL MADANI KURNIAWAN', 'EE-01-01', 'KHL', '1819'),
('1103180010', '2', '0', 'MOCH. BAGUS INDRASTATA PURAHITA', 'EE-01-01', 'KHL', '1819'),
('1103180011', '2', '0', 'ANDRE WAHYU HARTANTO', 'EE-01-01', 'KHL', '1819'),
('1103181003', '2', '0', 'GETSEMANI ADI BAGUS MARANATA HARTONO', 'EE-01-01', 'KHL', '1819'),
('1103181009', '2', '0', 'HENKO KHOLIMA', 'EE-01-01', 'KHL', '1819'),
('1103189006', '2', '0', 'NOVA HERLINA MILA SOETARNO', 'EE-01-01', 'KHL', '1819'),
('1103190001', '2', '0', 'LEGOWO BUDI PRASODJO', 'EE-02-01', 'RSY', '1920'),
('1103190002', '2', '0', 'YOSEFAN ALFEUS BAYUAJI', 'EE-02-01', 'RSY', '1920'),
('1103190005', '2', '0', 'IRMA AYU DZIATUN NISA\'', 'EE-02-01', 'RSY', '1920'),
('1103190006', '2', '0', 'SAYYIDAH NAPIISAH', 'EE-02-01', 'RSY', '1920'),
('1103190009', '2', '0', 'VERINA ELISTA MALIK', 'EE-02-01', 'RSY', '1920'),
('1103190010', '2', '0', 'FIRMAN ADI RIFANSYAH', 'EE-02-01', 'RSY', '1920'),
('1103190011', '2', '0', 'RISKA AMALIA PUTRI', 'EE-02-01', 'RSY', '1920'),
('1103190012', '2', '0', 'IRFANSAH WARDHANA', 'EE-02-01', 'RSY', '1920'),
('1103190013', '2', '0', 'ANDI NUR HALISYAH', 'EE-02-01', 'RSY', '1920'),
('1103190014', '2', '0', 'MOCH FIKRY FATHUL YAQIN', 'EE-02-01', 'RSY', '1920'),
('1103190015', '2', '0', 'MUHAMMAD FARIZ RAHMADANY', 'EE-02-01', 'RSY', '1920'),
('1103190017', '2', '0', 'RIYO OKTAVIAN PRADANA', 'EE-02-01', 'RSY', '1920'),
('1103190018', '2', '0', 'ISFANDO PAHELWAN SUBAGIO', 'EE-02-01', 'RSY', '1920'),
('1103190020', '2', '0', 'BAGAS WAHYU PRAKOSO', 'EE-02-01', 'IFA', '1920'),
('1103190021', '2', '0', 'ROBIN ADDWIYANSYAH ALVARO SAMRAT', 'EE-02-01', 'IFA', '1920'),
('1103190022', '2', '0', 'MUH.FACHMI FAHREZI', 'EE-02-01', 'IFA', '1920'),
('1103190025', '2', '0', 'MOCHAMMAD ROJIB', 'EE-02-01', 'IFA', '1920'),
('1103190026', '2', '0', 'DIMAS ALIF SULISTIAWAN', 'EE-02-01', 'IFA', '1920'),
('1103190027', '2', '0', 'RENZA MANSIA MATAHURILA', 'EE-02-01', 'IFA', '1920'),
('1103192019', '2', '0', 'MAULANA ZIDAN', 'EE-02-01', 'IFA', '1920'),
('1103192023', '2', '0', 'NADIA DINDA PRATAMA PUTRI', 'EE-02-01', 'IFA', '1920'),
('1103192024', '2', '0', 'ALDO JUAN WIDODO', 'EE-02-01', 'IFA', '1920'),
('1103199003', '2', '0', 'ADELLIA PUSPITA RATRI', 'EE-02-01', 'IFA', '1920'),
('1103199004', '2', '0', 'SHERLI KUMALA DEWI', 'EE-02-01', 'IFA', '1920'),
('1103199007', '2', '0', 'MUHAMMAD ULINNUHA \'ALIYA', 'EE-02-01', 'IFA', '1920'),
('1103199008', '2', '0', 'ENGGAL WAHYU ARDANY', 'EE-02-01', 'IFA', '1920'),
('1103199016', '2', '0', 'REZA HUMAIDI', 'EE-02-01', 'IFA', '1920'),
('1103200001', '2', '0', 'SYAKIRA ANDRIYANI', 'EE-03-01', 'DMS', '2021'),
('1103200002', '2', '0', 'MUHAMMAD SEVALDY MANAN UTAMA', 'EE-03-01', 'DMS', '2021'),
('1103200003', '2', '0', 'BAYU TEGUH SANTOSO', 'EE-03-01', 'DMS', '2021'),
('1103200004', '2', '0', 'MOCH SYAMFALLAH ANWAR', 'EE-03-01', 'SSJ', '2021'),
('1103200005', '2', '0', 'BIMA NUR RAHMAN', 'EE-03-01', 'SSJ', '2021'),
('1103200006', '2', '0', 'ADAM HAIDAR AL AZIS', 'EE-03-01', 'SSJ', '2021'),
('1103200007', '2', '0', 'RIZKI ATA GUMELAR', 'EE-03-01', 'SSJ', '2021'),
('1103200010', '2', '0', 'MUHAMMAD FAJRI ROSYIQ', 'EE-03-01', 'DMS', '2021'),
('1103200011', '2', '0', 'GEMA NANGGALA SAKTI', 'EE-03-01', 'SSJ', '2021'),
('1103200012', '2', '0', 'TIUR IMANUELA AYU LARASATI WIBOWO', 'EE-03-01', 'SSJ', '2021'),
('1103200013', '2', '0', 'NURINA DEVI APRILIASTUTI', 'EE-03-01', 'SSJ', '2021'),
('1103200014', '2', '0', 'RIFANSYAH FITRAH HAICHAL SUKINO', 'EE-03-01', 'SSJ', '2021'),
('1103200015', '2', '0', 'MOCHAMMAD REZA SURYANINGRAT', 'EE-03-01', 'SSJ', '2021'),
('1103200016', '2', '0', 'ADINI PUTRI RAHAYU', 'EE-03-01', 'SSJ', '2021'),
('1103200018', '2', '0', 'ARDIKA BAGUS SAPUTRA', 'EE-03-01', 'SSJ', '2021'),
('1103200019', '2', '0', 'MUHAMMAD NASRULLOH MUBARAK', 'EE-03-01', 'SSJ', '2021'),
('1103200020', '2', '0', 'MOCHAMMAD RAFLY PUTRA DAFFALDI', 'EE-03-01', 'SSJ', '2021'),
('1103200021', '2', '0', 'CHRISTIAN JOSE ANTO KURNIAWAN', 'EE-03-01', 'SSJ', '2021'),
('1103200022', '2', '0', 'MUH. SYAHWAL M', 'EE-03-01', 'DMS', '2021'),
('1103200023', '2', '0', 'ANANDA ADITYA PRATAMA', 'EE-03-01', 'SSJ', '2021'),
('1103200024', '2', '0', 'VITA AYU NATHALIA', 'EE-03-01', 'DMS', '2021'),
('1103200025', '2', '0', 'MOHAMMAD HAZEL DIMAS PRAYOGI', 'EE-03-01', 'DMS', '2021'),
('1103200026', '2', '0', 'DWI SUCI WULANDARI', 'EE-03-01', 'SSJ', '2021'),
('1103200027', '2', '0', 'MUHAMMAD ZAHRO CHOIRI AJI PAMUNGKAS', 'EE-03-01', 'DMS', '2021'),
('1103200028', '2', '0', 'ANAK AGUNG KUSUMA JAYA NINGRAT', 'EE-03-01', 'SSJ', '2021'),
('1103200029', '2', '0', 'AKBAR RAYA FIRDAUS', 'EE-03-01', 'SSJ', '2021'),
('1103200030', '2', '0', 'WILDAN SYAFRIE', 'EE-03-01', 'SSJ', '2021'),
('1103200032', '2', '0', 'GILBERT WEDNESTWO SAMUEL', 'EE-03-01', 'SSJ', '2021'),
('1103200033', '2', '0', 'JESICA FEBRIANI NURA', 'EE-03-01', 'SSJ', '2021'),
('1103200034', '2', '0', 'MUHAMMAD ADIB PUTRA HIDRI SAHMAN', 'EE-03-01', 'SSJ', '2021'),
('1103200035', '2', '0', 'AULIA MAHARANI PONDAAG', 'EE-03-01', 'SSJ', '2021'),
('1103200037', '2', '0', 'CEHSICA DEVRI ALPRIYANTIWI', 'EE-03-01', 'DMS', '2021'),
('1103200038', '2', '0', 'ACHMAD ICKSANU TAQWIN', 'EE-03-01', 'DMS', '2021'),
('1103200039', '2', '0', 'MUHAMMAD FAUZI ZULFAQAR', 'EE-03-01', 'DMS', '2021'),
('1103200040', '2', '0', 'FIRMANSYAH DWINATA', 'EE-03-01', 'DMS', '2021'),
('1103200041', '2', '0', 'HAMMAM AL HAQQANI', 'EE-03-01', 'DMS', '2021'),
('1103200044', '2', '0', 'MARIA BENEDICTA PUTRI ATTALIA', 'EE-03-01', 'DMS', '2021'),
('1103200045', '2', '0', 'IFFAH QURROTA A\'YUN', 'EE-03-01', 'DMS', '2021'),
('1103200046', '2', '0', 'CUT SILVIA INZARIANI', 'EE-03-01', 'DMS', '2021'),
('1103200047', '2', '0', 'MUHAMMAD PANDU DWI SUSILO', 'EE-03-01', 'DMS', '2021'),
('1103200048', '2', '0', 'KHUNAEFI FAJAR YONAS', 'EE-03-01', 'DMS', '2021'),
('1103202008', '2', '0', 'REYFALDI PERWIRO', 'EE-03-01', 'DMS', '2021'),
('1103202009', '2', '0', 'MOCH. FACHRI ARDI NUGRAHA', 'EE-03-01', 'DMS', '2021'),
('1103202017', '2', '0', 'WAHYU BHASKARA JATI', 'EE-03-01', 'DMS', '2021'),
('1103202031', '2', '0', 'DANU ARDIANSYAH', 'EE-03-01', 'DMS', '2021'),
('1103202036', '2', '0', 'ALDHITIANSYAH PUTRA', 'EE-03-01', 'SSJ', '2021'),
('1103202042', '2', '0', 'MOHAMMAD MUIS ALIMUDIN', 'EE-03-01', 'DMS', '2021'),
('1103202043', '2', '0', 'RAMSA WIKA ALFATI', 'EE-03-01', 'DMS', '2021'),
('1103202050', '2', '0', 'YUDHA  HENDRI  ANSYA', 'EE-03-01', 'RSY', '2021'),
('1103208049', '2', '0', 'MUHAMMAD DWI HARIYANTO', 'EE-03-01', 'RSY', '2021'),
('1201180001', '3', '0', 'AHMAD HILAL HAMDI', 'SE-01-01', 'MSK', '1819'),
('1201180002', '3', '0', 'ANA AZHAR BANAN', 'SE-01-01', 'MSK', '1819'),
('1201180003', '3', '0', 'HADRATUS AHMAD DAVA', 'SE-01-01', 'MSK', '1819'),
('1201180004', '3', '0', 'LALU MUH. HASAN MAHSYAT H', 'SE-01-01', 'MSK', '1819'),
('1201180006', '3', '0', 'BAGUS KURNIAWAN', 'SE-01-01', 'MSK', '1819'),
('1201180007', '3', '0', 'AGUNG PRIMADANA SAPUTRA', 'SE-01-01', 'MSK', '1819'),
('1201180008', '3', '0', 'TIMOTIUS HADI PRATAMA', 'SE-01-01', 'MSK', '1819'),
('1201180010', '3', '0', 'DEAFITRIA PUTRI SUSANTO', 'SE-01-01', 'MSK', '1819'),
('1201181005', '3', '0', 'DHIMAS BINTANG BAGASKARA', 'SE-01-01', 'MSK', '1819'),
('1201183009', '3', '0', 'ANGGER WICAKSONO', 'SE-01-01', 'MSK', '1819'),
('1201190002', '3', '0', 'MOCH YUSUF FAISAL AKBAR ANWARI', 'SE-02-01', 'DEW', '1920'),
('1201190003', '3', '1', 'RAIHAN NUR KHOTAMI', 'SE-02-02', 'ARD', '1920'),
('1201190004', '3', '1', 'ZULKARNAIN', 'SE-02-01', 'FWP', '1920'),
('1201190005', '3', '0', 'KUNCORO MANIK DHARMA PUTRA', 'SE-02-02', 'DEW', '1920'),
('1201190007', '3', '0', 'BRIAN FREEGA SETYA PRATAMA', 'SE-02-01', 'PNG', '1920'),
('1201190008', '3', '0', 'FATAHILLAH AHMAD', 'SE-02-02', 'FWP', '1920'),
('1201190010', '3', '0', 'WILLIAM KURNIAWAN', 'SE-02-01', 'MSK', '1920'),
('1201190012', '3', '0', 'PRADIFTA EKA ARIYANTO', 'SE-02-02', 'PNG', '1920'),
('1201190013', '3', '0', 'AMANDA AMALIA', 'SE-02-01', 'TTK', '1920'),
('1201190014', '3', '0', 'THOMAS ADI KUSUMA', 'SE-02-02', 'MSK', '1920'),
('1201190015', '3', '0', 'FAHMI PRADANA SATRIO WIBOWO', 'SE-02-01', 'ARD', '1920'),
('1201190016', '3', '0', 'MUHAMMAD RIZKY IQBAL SYAIFULLAH', 'SE-02-02', 'TTK', '1920'),
('1201190017', '3', '0', 'AQIL MUSTAQIM', 'SE-02-01', 'DEW', '1920'),
('1201190018', '3', '0', 'ALFIAN NAUFAL RIZKY ULFADI', 'SE-02-02', 'ARD', '1920'),
('1201190019', '3', '0', 'EDO HANDOKO', 'SE-02-01', 'FWP', '1920'),
('1201190021', '3', '0', 'ANGGARA WIDAN SATRIAWAN', 'SE-02-02', 'DEW', '1920'),
('1201190022', '3', '0', 'RISVAN SURYANSYAH', 'SE-02-01', 'PNG', '1920'),
('1201190023', '3', '0', 'REZA ARINDRA FADILLAH', 'SE-02-02', 'FWP', '1920'),
('1201190024', '3', '0', 'I KOMANG ARISUDANA', 'SE-02-01', 'MSK', '1920'),
('1201190025', '3', '0', 'ANWAR IBRAHIM', 'SE-02-02', 'PNG', '1920'),
('1201190027', '3', '0', 'MUHAMMAD ERSAN ALDO ALVINETINO', 'SE-02-01', 'TTK', '1920'),
('1201190029', '3', '0', 'ANDHIKA MUHAMMAD IKLAS', 'SE-02-02', 'MSK', '1920'),
('1201190031', '3', '0', 'ACHMAD XANDER LAZARUS ENDY JUNIOR', 'SE-02-01', 'ARD', '1920'),
('1201190032', '3', '0', 'ALAN HERDIAWAN RAHARJO', 'SE-02-02', 'TTK', '1920'),
('1201190034', '3', '0', 'FIQRI BAIHAQI HERMAWANTO', 'SE-02-01', 'DEW', '1920'),
('1201190035', '3', '0', 'RIZAL IRFANSYAH PUTRA', 'SE-02-02', 'ARD', '1920'),
('1201190037', '3', '0', 'ZWINGLI CHARLIE GOODWIN HINA LEDE', 'SE-02-01', 'FWP', '1920'),
('1201190038', '3', '0', 'FEBRI PURNAMA PUTRI', 'SE-02-02', 'DEW', '1920'),
('1201190039', '3', '0', 'DANINSYAH BAGAS ABIYANSA', 'SE-02-01', 'PNG', '1920'),
('1201190040', '3', '0', 'FRENDA MAULANA', 'SE-02-02', 'FWP', '1920'),
('1201190041', '3', '0', 'HARYA ABIMANYU ATHALLA AKBAR', 'SE-02-01', 'MSK', '1920'),
('1201190042', '3', '0', 'IQBAL CHAKIKI', 'SE-02-02', 'PNG', '1920'),
('1201190043', '3', '2', 'MUHAMMAD NAFI UDIN', 'SE-02-01', 'TTK', '1920'),
('1201190044', '3', '0', 'SALVA WANDA PUTRI HAMIDAH', 'SE-02-02', 'MSK', '1920'),
('1201190045', '3', '0', 'ILHAM YORI PRADANA', 'SE-02-01', 'ARD', '1920'),
('1201190047', '3', '0', 'ARDIANSYAH BISMA RIZQULLAH', 'SE-02-01', 'FWP', '1920'),
('1201192009', '3', '0', 'MUHAMMAD ATH THARIQ LUQMANA', 'SE-02-02', 'TTK', '1920'),
('1201192011', '3', '0', 'AHMAD YURIDAN ZINDANI', 'SE-02-01', 'DEW', '1920'),
('1201192020', '3', '0', 'AHMAD FADLI ARIE HENDRA', 'SE-02-02', 'ARD', '1920'),
('1201192026', '3', '0', 'FAJAR INDRAWAN', 'SE-02-01', 'FWP', '1920'),
('1201192028', '3', '0', 'FARHAN YUKO PRATAMA', 'SE-02-02', 'DEW', '1920'),
('1201192030', '3', '0', 'SYAHFRIL NIZAMMUDIN', 'SE-02-01', 'PNG', '1920'),
('1201192033', '3', '0', 'LEONARD JULIAN AUGUSTA MANOPPO', 'SE-02-02', 'FWP', '1920'),
('1201192036', '3', '2', 'DIANA PUSPITA', 'SE-02-01', 'MSK', '1920'),
('1201192046', '3', '0', 'AKBAR TRI ATFA PRABOWO', 'SE-02-02', 'PNG', '1920'),
('1201199001', '3', '0', 'RAFI DZULQARNAIN', 'SE-02-01', 'TTK', '1920'),
('1201199006', '3', '0', 'AULIYA RAHMAN PAKARTI', 'SE-02-02', 'MSK', '1920'),
('1201200001', '3', '0', 'GALANG WAHYU PRATAMA', 'SE-03-01', 'ARD', '2021'),
('1201200004', '3', '0', 'YASFA AINUN ABDULLAH', 'SE-03-01', 'DEW', '2021'),
('1201200006', '3', '0', 'MUKHSIN ARIF NUR FAREL', 'SE-03-01', 'FWP', '2021'),
('1201200007', '3', '0', 'M ALFARODISU', 'SE-03-01', 'MSK', '2021'),
('1201200008', '3', '0', 'VALERIO SEPTANZIILAL DA CONCEICAO', 'SE-03-01', 'PNG', '2021'),
('1201200009', '3', '0', 'JIHADI WAFA AL-FARISI', 'SE-03-01', 'TTK', '2021'),
('1201200013', '3', '0', 'DIMAS ASHFI RAYHAN', 'SE-03-01', 'AGS', '2021'),
('1201200014', '3', '0', 'KAZUKI ITO', 'SE-03-01', 'ARD', '2021'),
('1201200015', '3', '0', 'FADEL MUHAMMAD', 'SE-03-01', 'DEW', '2021'),
('1201200016', '3', '0', 'M. SYARIF HIDAYATULLAH', 'SE-03-01', 'FWP', '2021'),
('1201200018', '3', '0', 'DHIA PUTERA AKMAL', 'SE-03-01', 'MSK', '2021'),
('1201200020', '3', '0', 'M. NATHAN SYACH WIDIYANTO', 'SE-03-01', 'PNG', '2021'),
('1201200021', '3', '0', 'MUH ARIF RAHMAN', 'SE-03-01', 'TTK', '2021'),
('1201200022', '3', '0', 'WIDAAD ALBAR MAULA', 'SE-03-01', 'AGS', '2021'),
('1201200023', '3', '0', 'LORENZO LARIDHO SEMBIRING', 'SE-03-01', 'ARD', '2021'),
('1201200024', '3', '0', 'GILANG NICO RAHARJO', 'SE-03-01', 'DEW', '2021'),
('1201200026', '3', '0', 'GANDANG DAIMASTEN', 'SE-03-01', 'FWP', '2021'),
('1201200027', '3', '0', 'RIZKY AGUNG PRAYOGI', 'SE-03-01', 'MSK', '2021'),
('1201200028', '3', '0', 'FARREL AHMAD DARMAWAN', 'SE-03-01', 'PNG', '2021'),
('1201200031', '3', '0', 'RICO NASHRULLOH AKBAR', 'SE-03-01', 'TTK', '2021'),
('1201200032', '3', '0', 'M BAHAUDDIN ALI RAUSYANFIKR', 'SE-03-01', 'AGS', '2021'),
('1201200033', '3', '0', 'MUHAMMAD RIFQI SHABRI', 'SE-03-01', 'ARD', '2021'),
('1201200035', '3', '0', 'JEFRI ACHMAD MAULANA', 'SE-03-01', 'DEW', '2021'),
('1201200037', '3', '0', 'MOH RIZALDI FARHAN', 'SE-03-01', 'FWP', '2021'),
('1201200038', '3', '0', 'DONI FRIANDY', 'SE-03-01', 'MSK', '2021'),
('1201200039', '3', '0', 'NAUFAL NABBIH AL SHIDDIQ', 'SE-03-01', 'PNG', '2021'),
('1201200041', '3', '0', 'AHMAD WAHYU SUHARDI', 'SE-03-01', 'TTK', '2021'),
('1201200042', '3', '0', 'HAERUL TAKA', 'SE-03-01', 'AGS', '2021'),
('1201200043', '3', '0', 'VINCENSIUS IVANCA CHRISTIAN', 'SE-03-01', 'ARD', '2021'),
('1201200044', '3', '0', 'MUHAMAD ARJUN PRASETYO', 'SE-03-01', 'DEW', '2021'),
('1201200047', '3', '0', 'RICKY EDO PERSADA', 'SE-03-01', 'FWP', '2021'),
('1201200048', '3', '0', 'MUHAMMAD RAFLY AYYUB ELFAHMI', 'SE-03-01', 'MSK', '2021'),
('1201200049', '3', '0', 'I.G. WIRA WARDANA DIVA', 'SE-03-01', 'PNG', '2021'),
('1201200050', '3', '0', 'LINTANG SATRIA PINANDHITA', 'SE-03-01', 'TTK', '2021'),
('1201200066', '3', '0', 'MUHAMMAD ZA\'IM WIBOWO RAMADHANI', 'SE-03-02', 'FWP', '2021'),
('1201200067', '3', '0', 'KHUNAEFI FAJAR YONAS', 'SE-03-01', 'FWP', '2021'),
('1201202002', '3', '0', 'DAVID WIN SYARIF HIDAYAT', 'SE-03-01', 'AGS', '2021'),
('1201202003', '3', '0', 'MUHAMMAD NAJAH YUGA DESYALWA', 'SE-03-01', 'ARD', '2021'),
('1201202005', '3', '0', 'NUSA ADRIAN ARIFIN', 'SE-03-01', 'DEW', '2021'),
('1201202010', '3', '0', 'ILHAM MUDIN', 'SE-03-01', 'FWP', '2021'),
('1201202011', '3', '0', 'RAMANDIKA KUSUMA WIHARDI', 'SE-03-01', 'MSK', '2021'),
('1201202012', '3', '0', 'FIRLANA SADDAM PRAMADHAN', 'SE-03-01', 'PNG', '2021'),
('1201202017', '3', '0', 'MUHAMMAD ILHAM ARIF SAID', 'SE-03-01', 'TTK', '2021'),
('1201202019', '3', '0', 'MUHAMMAD RAFLI RAMADHAN', 'SE-03-01', 'AGS', '2021'),
('1201202025', '3', '0', 'MUHAMMAD RIFKI AL-MALACHY', 'SE-03-01', 'ARD', '2021'),
('1201202029', '3', '0', 'MUH. HAIKAL HANIS', 'SE-03-01', 'DEW', '2021'),
('1201202030', '3', '0', 'BAGAS MAHARDIKA', 'SE-03-01', 'FWP', '2021'),
('1201202034', '3', '0', 'IQBAL MAULANA AKHMAD', 'SE-03-01', 'MSK', '2021'),
('1201202036', '3', '0', 'JULFANI AKBAR', 'SE-03-01', 'PNG', '2021'),
('1201202040', '3', '0', 'NURSYAHJAYA RAMADANIPUTRA', 'SE-03-01', 'TTK', '2021'),
('1201202045', '3', '0', 'IRENIA INGGRID RIWU', 'SE-03-01', 'AGS', '2021'),
('1201202046', '3', '0', 'AHMAD NAUFAL HASIBUAN', 'SE-03-01', 'ARD', '2021'),
('1202180001', '7', '0', 'ABDURRAHMAN AFAFA AFWA FARISADILAH', 'IT-01-01', 'HEL', '1819'),
('1202180002', '7', '0', 'KARTIKA SEPTI PUSPA SARI', 'IT-01-01', 'HEL', '1819'),
('1202180003', '7', '0', 'MUHAMAD RIZAL DWI ADHIPRAMANA', 'IT-01-01', 'HEL', '1819'),
('1202180004', '7', '0', 'ILHAM MUKTI PRADANA', 'IT-01-01', 'HEL', '1819'),
('1202180006', '7', '0', 'SUKMA DEWI ANGGRAINI', 'IT-01-01', 'HEL', '1819'),
('1202180007', '7', '0', 'LEONY PUTRI SABRINA', 'IT-01-01', 'HEL', '1819'),
('1202180008', '7', '0', 'DIMAS BAGUS SAPUTRO', 'IT-01-01', 'HEL', '1819'),
('1202180009', '7', '0', 'AULDY ANSYA RULLAH', 'IT-01-01', 'HEL', '1819'),
('1202180010', '7', '0', 'DAVA FIRMANSYAH', 'IT-01-01', 'HEL', '1819'),
('1202180011', '7', '0', 'ANAS ITTAQULLAH', 'IT-01-01', 'HEL', '1819'),
('1202180012', '7', '0', 'BAYU KRISNA MUKTI', 'IT-01-01', 'BAS', '1819'),
('1202180013', '7', '0', 'ADJI PRATAMA SETYA PUTRA', 'IT-01-01', 'BAS', '1819'),
('1202180014', '7', '0', 'ALDHAN MAULUDDHY', 'IT-01-01', 'BAS', '1819'),
('1202180016', '7', '0', 'BIMA WICAKSONO', 'IT-01-01', 'BAS', '1819'),
('1202180017', '7', '0', 'IVANA SEPTIANI CAHYANINGRUM', 'IT-01-01', 'BAS', '1819'),
('1202180018', '7', '0', 'RIFKI FAIZ KHAIRULLAH', 'IT-01-01', 'BAS', '1819'),
('1202180019', '7', '0', 'ELFINTA SALSABILAN', 'IT-01-01', 'BAS', '1819'),
('1202180020', '7', '0', 'AHMAD SAEPURRAHMAN', 'IT-01-01', 'BAS', '1819'),
('1202180022', '7', '0', 'MUHAMMAD AUFA RIJAL', 'IT-01-01', 'BAS', '1819'),
('1202181015', '7', '0', 'HAFIZH PANDU RAMADHAN', 'IT-01-01', 'BAS', '1819'),
('1202181021', '7', '0', 'AYU AINUN A\'ZIZIYYAH', 'IT-01-01', 'BAS', '1819'),
('1202183023', '7', '0', 'FAJAR WIRAWAN', 'IT-01-01', 'HEL', '1819'),
('1202183024', '7', '0', 'BAGAS WAHYU SYAIFULLOH', 'IT-01-01', 'HEL', '1819'),
('1202183025', '7', '0', 'ICHIYAK ULUMUDIN', 'IT-01-01', 'HEL', '1819'),
('1202183026', '7', '0', 'YUDHA SANDHYANTORO', 'IT-01-01', 'HEL', '1819'),
('1202183027', '7', '0', 'SUTRIYONO KRISPATIH', 'IT-01-01', 'HEL', '1819'),
('1202190002', '7', '0', 'NUR WULAN MAUDINI', 'IT-02-01', 'OKT', '1920'),
('1202190004', '7', '0', 'AXEL GAVAN', 'IT-02-02', 'ARN', '1920'),
('1202190007', '7', '0', 'RISKA APRILIA', 'IT-02-01', 'OKT', '1920'),
('1202190009', '7', '0', 'RASYID SABILLILLAH', 'IT-02-02', 'ARN', '1920'),
('1202190010', '7', '0', 'ADITYA YUDHISTIRA', 'IT-02-01', 'OKT', '1920'),
('1202190011', '7', '0', 'GILANG MAULANA', 'IT-02-02', 'ARN', '1920'),
('1202190012', '7', '0', 'RIFQI NAUFAL AMANULLAH', 'IT-02-01', 'OKT', '1920'),
('1202190013', '7', '0', 'NABILA NUR AMALIA', 'IT-02-02', 'ARN', '1920'),
('1202190014', '7', '0', 'MUHAMMAD ZIDAN FIRMANSYAH', 'IT-02-01', 'OKT', '1920'),
('1202190015', '7', '0', 'EVYRA RIZKI SAFITRI', 'IT-02-02', 'ARN', '1920'),
('1202190016', '7', '0', 'RAHMADINA OKTAVIANA', 'IT-02-01', 'OKT', '1920'),
('1202190017', '7', '0', 'MUHAMMAD DZIKRI', 'IT-02-02', 'ARN', '1920'),
('1202190018', '7', '0', 'GALIH DIMAS PRASTOWO', 'IT-02-01', 'OKT', '1920'),
('1202190019', '7', '0', 'MUHAMMAD AKBAR RAMADHAN', 'IT-02-02', 'ARN', '1920'),
('1202190020', '7', '0', 'NADILA CHUSNUL KHOTIMAH', 'IT-02-01', 'OKT', '1920'),
('1202190021', '7', '0', 'ALIFIA KHAIRUNNISA', 'IT-02-02', 'ARN', '1920'),
('1202190022', '7', '0', 'IGNATIA INDRESWARI NUGROHO', 'IT-02-01', 'OKT', '1920'),
('1202190023', '7', '0', 'MUHAMAD IQBAL MAULANA', 'IT-02-02', 'ARN', '1920'),
('1202190024', '7', '0', 'KHAIRATUNNISA AZHAR', 'IT-02-01', 'OKT', '1920'),
('1202190025', '7', '0', 'MUHAMMAD QOIDUL GHURIL MUHAJALIN', 'IT-02-02', 'ARN', '1920'),
('1202190026', '7', '0', 'DENY SATRIA ARDI', 'IT-02-01', 'OKT', '1920'),
('1202190027', '7', '0', 'SYAHRUL SUHURA', 'IT-02-02', 'ARN', '1920'),
('1202190028', '7', '0', 'KEVIN SURYA DIANSYAH', 'IT-02-01', 'OKT', '1920'),
('1202190030', '7', '0', 'WIRANTI MAHARANI', 'IT-02-02', 'ARN', '1920'),
('1202190031', '7', '0', 'AGI LOBITA JAPTARA MARTADINATA', 'IT-02-01', 'FRH', '1920'),
('1202190032', '7', '0', 'TRIA MONICA YULITA PUTRI', 'IT-02-02', 'AMI', '1920'),
('1202190035', '7', '0', 'ALVYANO RIZQILLA RIANANTA', 'IT-02-01', 'FRH', '1920'),
('1202190036', '7', '0', 'NAUFAL MARSA R. P. R.', 'IT-02-02', 'AMI', '1920'),
('1202190037', '7', '0', 'BRYAN PRATAMA PUTRA', 'IT-02-01', 'OKT', '1920'),
('1202190038', '7', '0', 'ANNISA AULIA ARAFAH', 'IT-02-02', 'AMI', '1920'),
('1202190039', '7', '0', 'RACHMAD SAFLYI', 'IT-02-01', 'BAS', '1920'),
('1202190040', '7', '0', 'MOCHAMMAD RAFI ADITYAWARMAN', 'IT-02-02', 'AMI', '1920'),
('1202190041', '7', '0', 'CHINTYA TRIBHUANA UTAMI', 'IT-02-01', 'OKT', '1920'),
('1202190043', '7', '0', 'M. ABDUR ROHMAN WACHID', 'IT-02-02', 'AMI', '1920'),
('1202190044', '7', '0', 'FAIRUZRIZQI NUGRAHARSANTO', 'IT-02-01', 'BAS', '1920'),
('1202190045', '7', '0', 'FITRIA RAHMA WULANDARI', 'IT-02-02', 'AMI', '1920'),
('1202190046', '7', '0', 'ANDI TADANG PALIE', 'IT-02-01', 'OKT', '1920'),
('1202190050', '7', '0', 'DINDA TRESNA TEJA NIRWANA', 'IT-02-02', 'AMI', '1920'),
('1202190051', '7', '0', 'PAVITA SHERINTAMA GIANTORO', 'IT-02-01', 'BAS', '1920'),
('1202190052', '7', '0', 'GEDE REYKI ASTIKA', 'IT-02-02', 'AMI', '1920'),
('1202190053', '7', '0', 'DEWA NUSANTARA MURDOKO PUTRA', 'IT-02-01', 'FRH', '1920'),
('1202190054', '7', '0', 'ALFIAN RAHMAN HANIF AS ARI', 'IT-02-02', 'AMI', '1920'),
('1202190056', '7', '0', 'RICKY DARMAWAN', 'IT-02-01', 'FRH', '1920'),
('1202190057', '7', '0', 'NOVANDY PRAKOSO', 'IT-02-02', 'AMI', '1920'),
('1202190058', '7', '0', 'ANASTASYA RAHMA JUNIARTI', 'IT-02-01', 'BAS', '1920'),
('1202190059', '7', '0', 'ANNISA AININ FADLILAH', 'IT-02-02', 'AMI', '1920'),
('1202190060', '7', '0', 'ABDILLAH AINUR RIDLA', 'IT-02-01', 'OKT', '1920'),
('1202190061', '7', '0', 'M. PRADATA YUDA PERKASA', 'IT-02-02', 'AMI', '1920'),
('1202190063', '7', '0', 'MUHAMMAD RAFI IRZAM', 'IT-02-01', 'FRH', '1920'),
('1202192029', '7', '0', 'RANI KUSUMAWATI', 'IT-02-01', 'FRH', '1920'),
('1202192033', '7', '0', 'DAFA SEPTIANDRI DWINANDA PRABOWO', 'IT-02-02', 'BAS', '1920'),
('1202192034', '7', '0', 'FIANDIO ADHI PRADHANA', 'IT-02-01', 'FRH', '1920'),
('1202192047', '7', '0', 'ANDREAS JUAND PRATAMA', 'IT-02-02', 'BAS', '1920'),
('1202192048', '7', '0', 'REKSA ALDIAN RAHMANDY PUTRA', 'IT-02-01', 'FRH', '1920'),
('1202192049', '7', '0', 'CATHARINA PRISCA TITI LARASATI', 'IT-02-02', 'BAS', '1920'),
('1202192055', '7', '0', 'MUHAMMAD AAFI PRASETIYAWAN', 'IT-02-01', 'FRH', '1920'),
('1202192062', '7', '0', 'CHARISMA ILHAM SAPUTRA', 'IT-02-02', 'BAS', '1920'),
('1202192064', '7', '0', 'WAHID YASIN', 'IT-02-02', 'BAS', '1920'),
('1202192065', '7', '0', 'BUDHI PRIAMBODO', 'IT-02-01', 'BAS', '1920'),
('1202199001', '7', '0', 'ABDUL MUHAIMIN NURDIN', 'IT-02-01', 'FRH', '1920'),
('1202199003', '7', '0', 'LALU GEDE ADDO MUHARAM', 'IT-02-02', 'BAS', '1920'),
('1202199005', '7', '0', 'DIFA TAUFIQURRAHMAN', 'IT-02-01', 'FRH', '1920'),
('1202199006', '7', '0', 'GRAHITO ARDANI BIMANTA', 'IT-02-02', 'BAS', '1920'),
('1202199008', '7', '0', 'BAGUS SETIAWAN', 'IT-02-01', 'FRH', '1920'),
('1202199042', '7', '0', 'M. ARSYI AZHARIANSYAH ANANDA H', 'IT-02-02', 'BAS', '1920'),
('1202200001', '7', '0', 'RIDHO ROSADI ASRI', 'IT-03-01', 'ARN', '2021'),
('1202200002', '7', '0', 'REY DYLANZA', 'IT-03-02', 'FRH', '2021'),
('1202200003', '7', '0', 'BERLIANA AMELIA ARIYANTI ZAIN', 'IT-03-01', 'ARN', '2021'),
('1202200004', '7', '0', 'APRILLINO GHOZY REDIANTAMA', 'IT-03-03', 'BAS', '2021'),
('1202200005', '7', '0', 'ALFITO DE VAGA MAYAVANNY', 'IT-03-01', 'ARN', '2021'),
('1202200006', '7', '0', 'NABILA ALIFIA RIZKY ARJANI', 'IT-03-02', 'FRH', '2021'),
('1202200007', '7', '0', 'RAHMAT', 'IT-03-02', 'FRH', '2021'),
('1202200008', '7', '0', 'LUCYANA RAHMAWATI RAMADHAN', 'IT-03-03', 'BAS', '2021'),
('1202200009', '7', '0', 'ADIPUTRA RENALDI IGNASIUS TAMBUN', 'IT-03-03', 'AMI', '2021'),
('1202200010', '7', '0', 'ISTI PRASTIA', 'IT-03-01', 'ARN', '2021'),
('1202200011', '7', '0', 'RIZAL ABUZAR GHIFFARI', 'IT-03-01', 'ARN', '2021'),
('1202200013', '7', '0', 'MUSDIYAN YUSUF SYAIFULLOH', 'IT-03-03', 'AMI', '2021'),
('1202200014', '7', '0', 'YUVENS ANGGITO', 'IT-03-01', 'ARN', '2021'),
('1202200015', '7', '0', 'NADIRA LUNA R', 'IT-03-02', 'FRH', '2021'),
('1202200018', '7', '0', 'IVAL YUDHA PRAWIRA', 'IT-03-01', 'ARN', '2021'),
('1202200019', '7', '0', 'ANDIKA PUTRA PRASETYA', 'IT-03-02', 'FRH', '2021'),
('1202200020', '7', '0', 'NAUFAL RIZKI HARIYONO', 'IT-03-03', 'BAS', '2021'),
('1202200021', '7', '0', 'MOCHAMAD FAJAR NOFRIYANDRI', 'IT-03-01', 'ARN', '2021'),
('1202200022', '7', '0', 'SALMAN', 'IT-03-02', 'FRH', '2021'),
('1202200023', '7', '0', 'DIMAS CAHYO UTOMO', 'IT-03-03', 'BAS', '2021'),
('1202200025', '7', '0', 'MUHAMMAD FIRMANSYAH', 'IT-03-02', 'FRH', '2021'),
('1202200027', '7', '0', 'MUHAMMAD KHOIRUL BUSTOMMY', 'IT-03-01', 'ARN', '2021'),
('1202200028', '7', '0', 'MADE WIDIAMBARA ARISUDANA', 'IT-03-02', 'FRH', '2021'),
('1202200029', '7', '0', 'QOWIY MUHAMMAD ROFI ZUHDI', 'IT-03-03', 'BAS', '2021'),
('1202200030', '7', '0', 'RIDWAN THORIQ BRAHMASTYO ADI', 'IT-03-01', 'ARN', '2021'),
('1202200031', '7', '0', 'MUHAMMAD AINUL FIKRI', 'IT-03-02', 'FRH', '2021'),
('1202200032', '7', '0', 'AMIRAH DIANDRA', 'IT-03-03', 'BAS', '2021'),
('1202200033', '7', '0', 'MOCHAMAD NUR FIRMANSYACH', 'IT-03-03', 'AMI', '2021'),
('1202200035', '7', '0', 'AISYAH DAMAYANTI', 'IT-03-01', 'HEL', '2021'),
('1202200036', '7', '0', 'STEVEN IMMANUEL PRATAMA BANUREA', 'IT-03-02', 'OKT', '2021'),
('1202200037', '7', '0', 'MUHAMMAD FADILAH', 'IT-03-03', 'AMI', '2021'),
('1202200039', '7', '0', 'FADHIL RAIHAN KASTELLA', 'IT-03-02', 'FRH', '2021'),
('1202200040', '7', '0', 'SAIFUL MILADI', 'IT-03-03', 'AMI', '2021'),
('1202200042', '7', '0', 'DIFA SAGITA NURHUDA PRIATAMA', 'IT-03-01', 'HEL', '2021'),
('1202200043', '7', '0', 'RYAN DWIKI ADINATA', 'IT-03-02', 'OKT', '2021'),
('1202200045', '7', '0', 'EDWIN WAHYU RAMADAN', 'IT-03-01', 'HEL', '2021'),
('1202200046', '7', '0', 'ANGELINA ANDINI', 'IT-03-03', 'BAS', '2021'),
('1202200048', '7', '0', 'MUHAMMAD SHAFA ABI HAMZAH', 'IT-03-03', 'AMI', '2021'),
('1202200049', '7', '0', 'MUHAMMAD MUGI FAKIP ANUGRAH', 'IT-03-01', 'HEL', '2021'),
('1202200050', '7', '0', 'ILHAM RISWANDA RIF\'AT', 'IT-03-02', 'OKT', '2021'),
('1202200051', '7', '0', 'ANDI MUHAMMAD SULTHAN WAHID A.S', 'IT-03-03', 'AMI', '2021'),
('1202200052', '7', '0', 'FAHMI AMMRY HELMI IRFANSYAH', 'IT-03-01', 'HEL', '2021'),
('1202200053', '7', '0', 'SABILLAH SAKTI', 'IT-03-02', 'OKT', '2021'),
('1202200054', '7', '0', 'RIZKY PUTRA SASKARA', 'IT-03-03', 'BAS', '2021'),
('1202200057', '7', '0', 'MUHAMMAD FAKHRUL ISLAM AL GHOFIRI', 'IT-03-02', 'OKT', '2021'),
('1202200058', '7', '0', 'NUR HAFIZAH PRATIWI', 'IT-03-02', 'OKT', '2021'),
('1202200059', '7', '0', 'KHANSA YUMNA DHIYA\'ULHAQ', 'IT-03-03', 'BAS', '2021'),
('1202200062', '7', '0', 'ZENY ZANUBA ARIFAH', 'IT-03-01', 'ARN', '2021'),
('1202200063', '7', '0', 'BOMMA HANGGARA', 'IT-03-02', 'FRH', '2021'),
('1202200064', '7', '0', 'WITHAN SURYO NUGROHO', 'IT-03-03', 'AMI', '2021'),
('1202200065', '7', '0', 'RIZALDY FEBRY NUGRAHA', 'IT-03-01', 'ARN', '2021'),
('1202200067', '7', '0', 'ARYA WARDHANA SETIAWAN', 'IT-03-03', 'AMI', '2021'),
('1202200068', '7', '0', 'NAUFAL AMMAR BADRI', 'IT-03-01', 'ARN', '2021'),
('1202200069', '7', '0', 'KANIA DESNIYANTI', 'IT-03-02', 'FRH', '2021'),
('1202200070', '7', '0', 'ALIF NURUL HIDAYAH', 'IT-03-03', 'AMI', '2021'),
('1202200071', '7', '0', 'NOVAN SETYAWAN', 'IT-03-02', 'FRH', '2021'),
('1202200072', '7', '0', 'CHELSEA CELLIA YUDHIESTIRA', 'IT-03-01', 'ARN', '2021'),
('1202200073', '7', '0', 'KARINA HAPSARI KAHAR', 'IT-03-02', 'FRH', '2021'),
('1202200074', '7', '0', 'REYNALDO GERARD TUERAH', 'IT-03-03', 'AMI', '2021'),
('1202200075', '7', '0', 'ANDRO WIDI HATMOKO', 'IT-03-01', 'ARN', '2021'),
('1202200076', '7', '0', 'FERDHYAN WAHYU LISTYANTO', 'IT-03-02', 'FRH', '2021'),
('1202200077', '7', '0', 'ABDUL HAFID', 'IT-03-03', 'AMI', '2021'),
('1202200078', '7', '0', 'MUHAMMAD SUFI NUR ALIF', 'IT-03-01', 'ARN', '2021'),
('1202200079', '7', '0', 'RADEN DIMAS RONGGO SYAHPUTRO', 'IT-03-02', 'FRH', '2021'),
('1202200080', '7', '0', 'ADITYA DHARMA NUGRAHA', 'IT-03-03', 'AMI', '2021'),
('1202200081', '7', '0', 'MAHENDRA RANGGA ABIMANYU', 'IT-03-01', 'ARN', '2021'),
('1202200084', '7', '0', 'MUHAMMAD DAFFA ADIN NUGROHO', 'IT-03-03', 'AMI', '2021'),
('1202200087', '7', '0', 'FARIAN HALIM WICAKSONO', 'IT-03-03', 'AMI', '2021'),
('1202200088', '7', '0', 'MUHAMMAD BINTANG RAMADHAN', 'IT-03-01', 'ARN', '2021'),
('1202200089', '7', '0', 'ABRAHAM SAMUEL RENGGA', 'IT-03-02', 'FRH', '2021'),
('1202200090', '7', '0', 'JAZILAH ALFAISALIAH MAKSUDI', 'IT-03-01', 'ARN', '2021'),
('1202200091', '7', '0', 'DIMAS ADI PRASETYO', 'IT-03-03', 'AMI', '2021'),
('1202200092', '7', '0', 'MUHAMMAD FAISAL HIBATULLAH', 'IT-03-01', 'ARN', '2021'),
('1202200093', '7', '0', 'DEVYSIKAELO IRA RANTELILI', 'IT-03-02', 'FRH', '2021'),
('1202200094', '7', '0', 'REYHAN NATHANIEL ADHIWIJAYA', 'IT-03-02', 'FRH', '2021'),
('1202200095', '7', '0', 'M RIZKY JOAN HARISTYANDHIKA', 'IT-03-03', 'AMI', '2021'),
('1202200096', '7', '0', 'NURVI BRIGITYANA', 'IT-03-03', 'AMI', '2021'),
('1202200098', '7', '0', 'MUHAMMAD VICO ALFARIDZI', 'IT-03-01', 'ARN', '2021'),
('1202200099', '7', '0', 'FAJAR TRI KURNIAWAN', 'IT-03-02', 'FRH', '2021'),
('1202200102', '7', '0', 'ALFITRA RADYA AKBAR', 'IT-03-02', 'FRH', '2021'),
('1202200105', '7', '0', 'JONATA PANTRIAS PRADINKA', 'IT-03-01', 'ARN', '2021'),
('1202200106', '7', '0', 'SATRIO CAHYO AGUNG WIBOWO', 'IT-03-02', 'FRH', '2021'),
('1202202012', '7', '0', 'MARZUQ MUADZ DIAZ LUTHFI', 'IT-03-02', 'OKT', '2021'),
('1202202016', '7', '0', 'BOBY SEPTIANANDA RAJA MUNTHE', 'IT-03-02', 'OKT', '2021'),
('1202202017', '7', '0', 'KEN EL RIDHO FAJDUANI', 'IT-03-03', 'AMI', '2021'),
('1202202024', '7', '0', 'NATHANAEL FERDIAN PUTRA', 'IT-03-01', 'HEL', '2021');
INSERT INTO `student` (`STUDENTID`, `STUDYPROGRAMID`, `GROUPID`, `FULLNAME`, `CLASS`, `LECTURERCODE`, `STUDENSCHOOLYEAR`) VALUES
('1202202026', '7', '0', 'ADITYA RAMADHAN SURYA SAPUTRA', 'IT-03-03', 'AMI', '2021'),
('1202202034', '7', '0', 'DIFA ANANTA ARIFTYANDARU', 'IT-03-01', 'HEL', '2021'),
('1202202038', '7', '0', 'ANDIKO RAMADHAN CIKA', 'IT-03-01', 'HEL', '2021'),
('1202202041', '7', '0', 'PUTRI SINTA WULANDARI', 'IT-03-02', 'OKT', '2021'),
('1202202044', '7', '0', 'MUHAMMAD ARKAN FAUZAN WICAKSONO', 'IT-03-03', 'AMI', '2021'),
('1202202047', '7', '0', 'HABIB NURMEYDI PUTRA', 'IT-03-02', 'OKT', '2021'),
('1202202055', '7', '0', 'DENSA TANZILDA WIDYAWANTARA DZAHY', 'IT-03-01', 'HEL', '2021'),
('1202202056', '7', '0', 'MUHAMMAD MA\'SUM JUNIYANTO', 'IT-03-01', 'HEL', '2021'),
('1202202060', '7', '0', 'REZA ANANTA PUTRA', 'IT-03-03', 'BAS', '2021'),
('1202202061', '7', '0', 'RULLY ROSADI', 'IT-03-01', 'HEL', '2021'),
('1202202066', '7', '0', 'DAVID ALBUSTOMMY', 'IT-03-02', 'FRH', '2021'),
('1202202082', '7', '0', 'THOMAS ANDRE PRATAMA', 'IT-03-02', 'FRH', '2021'),
('1202202083', '7', '0', 'CLARENZA DIXIE ROSE', 'IT-03-03', 'AMI', '2021'),
('1202202085', '7', '0', 'ILYAS KURNIAWAN YUSRI', 'IT-03-01', 'ARN', '2021'),
('1202202086', '7', '0', 'RAYNOR CAVAN SUHARTO', 'IT-03-02', 'FRH', '2021'),
('1202202097', '7', '0', 'NATASYA SHABRINA', 'IT-03-01', 'ARN', '2021'),
('1202202100', '7', '0', 'DHARMA TAQWA THUROBBY', 'IT-03-03', 'AMI', '2021'),
('1202202101', '7', '0', 'MUHAMMAD HAIKAL RIZKYANDARU', 'IT-03-01', 'ARN', '2021'),
('1202202104', '7', '0', 'ILHAM AKBAR MAULANA', 'IT-03-03', 'AMI', '2021'),
('1202208103', '7', '0', 'SRI ASTUTI', 'IT-03-02', 'FRH', '2021'),
('1202208107', '7', '0', 'GEA SRIKANDI PUSPARANI', 'IT-03-03', 'AMI', '2021'),
('1203180001', '6', '0', 'SEPHIA ARDA LATIFAH', 'IE-01-01', 'RDP', '1819'),
('1203180002', '6', '0', 'MUHAMMAD NARENDRODUTO ROKHYADI', 'IE-01-01', 'RDP', '1819'),
('1203180003', '6', '0', 'RIZKY SETYAWAN WAHYUAJI', 'IE-01-01', 'RDP', '1819'),
('1203180004', '6', '0', 'NISRINA SALSABILAH', 'IE-01-01', 'RDP', '1819'),
('1203180005', '6', '0', 'RIAN MAULANA', 'IE-01-01', 'RDP', '1819'),
('1203180006', '6', '0', 'KAEL IBRA AGASTYA M WARDHANA', 'IE-01-01', 'RDP', '1819'),
('1203180009', '6', '0', 'FRESTIA RIZKY AMALIA', 'IE-01-01', 'RDP', '1819'),
('1203180010', '6', '0', 'MUHAMMAD FACHRENDY NOVAL ATTALLA', 'IE-01-01', 'RDP', '1819'),
('1203180011', '6', '0', 'YAYANG JOHANSYAH YUDIANTO', 'IE-01-01', 'RDP', '1819'),
('1203180012', '6', '0', 'MUHAMMAD RIFQI ALKARAMI', 'IE-01-01', 'RDP', '1819'),
('1203180015', '6', '0', 'FAUZAN REZA DUTA SYAHFITRAH', 'IE-01-01', 'WAP', '1819'),
('1203180016', '6', '0', 'FEBRYLA AUSITA PERMATA ABNI', 'IE-01-01', 'WAP', '1819'),
('1203180019', '6', '0', 'GERRY AFIF DARISMON', 'IE-01-01', 'WAP', '1819'),
('1203180020', '6', '0', 'ARSALAN RAFI MUZAKKI', 'IE-01-01', 'WAP', '1819'),
('1203181007', '6', '0', 'IRFAN SATRIA HAFIDS', 'IE-01-01', 'RDP', '1819'),
('1203181008', '6', '0', 'ANDHICO WIRYATAMA', 'IE-01-01', 'RDP', '1819'),
('1203181014', '6', '0', 'PATCHY WATTILETE', 'IE-01-01', 'WAP', '1819'),
('1203181017', '6', '0', 'MOCH.AVIF OKBAH', 'IE-01-01', 'WAP', '1819'),
('1203181018', '6', '0', 'SULAIMAN AZHARI', 'IE-01-01', 'WAP', '1819'),
('1203189021', '6', '0', 'SHANGGABUANA ADHITYA SHAMARADEWA', 'IE-01-01', 'WAP', '1819'),
('1203190001', '6', '0', 'RIZKASATRIAROSSADY', 'IE-02-01', 'RAZ', '1920'),
('1203190003', '6', '0', 'DINA ASMAUL KHUSNAH', 'IE-02-02', 'RDP', '1920'),
('1203190004', '6', '0', 'BOGI ANUGRA BANI PUTRA', 'IE-02-01', 'RAZ', '1920'),
('1203190005', '6', '0', 'AJI TRI ATMOJO', 'IE-02-02', 'DMI', '1920'),
('1203190006', '6', '0', 'NABILLA ADINNA CAHYANI', 'IE-02-01', 'RAZ', '1920'),
('1203190007', '6', '0', 'MUHAMMAD MIFTAHUL ABIDIN', 'IE-02-02', 'DMI', '1920'),
('1203190009', '6', '0', 'HAIFA PUJI RAHAYU NINGSIH', 'IE-02-01', 'RAZ', '1920'),
('1203190010', '6', '0', 'SHERLY CITRA LUMWARTINI', 'IE-02-02', 'DMI', '1920'),
('1203190012', '6', '0', 'FIDELIA ADINDA SYAFANI', 'IE-02-01', 'RAZ', '1920'),
('1203190014', '6', '0', 'FARHAN HADI PRATAMA', 'IE-02-02', 'WAP', '1920'),
('1203190015', '6', '0', 'KURNIAWAN ADI CANDRA', 'IE-02-01', 'RAZ', '1920'),
('1203190016', '6', '0', 'MUHAMMAD IRZAN', 'IE-02-02', 'WAP', '1920'),
('1203190017', '6', '0', 'CLARA DILLA AULIA PUTRI', 'IE-02-01', 'RAZ', '1920'),
('1203190018', '6', '0', 'ANNISA RAHMA AYUNING TYAS', 'IE-02-02', 'RDP', '1920'),
('1203190019', '6', '0', 'DANINDRA SATRIA PAMUNGKAS', 'IE-02-01', 'RAZ', '1920'),
('1203190020', '6', '0', 'MUHAMMAD HAFIDH SYAUQIL HILMI', 'IE-02-02', 'WAP', '1920'),
('1203190021', '6', '0', 'HESTI DITA PRAMESTI', 'IE-02-01', 'RAZ', '1920'),
('1203190022', '6', '0', 'ERNI DAMAYANTI', 'IE-02-02', 'RDP', '1920'),
('1203190023', '6', '0', 'ANNISA PUTRI PRATAMA', 'IE-02-01', 'RAZ', '1920'),
('1203190024', '6', '0', 'INGE ARNETA PUTRI', 'IE-02-02', 'RDP', '1920'),
('1203190026', '6', '0', 'YOVANI ARFIANSAH KEKARANTI', 'IE-02-01', 'RAZ', '1920'),
('1203190027', '6', '0', 'AMALIA IZZAH FIL MADINAH', 'IE-02-02', 'RDP', '1920'),
('1203190028', '6', '0', 'YULIA ROSA PURBA', 'IE-02-01', 'RAZ', '1920'),
('1203190029', '6', '0', 'NABILA KARINA DEWI', 'IE-02-02', 'DMI', '1920'),
('1203190030', '6', '0', 'HENDRAWAN WIDIANTO', 'IE-02-01', 'RAZ', '1920'),
('1203190031', '6', '0', 'ARDA ERICO YUDA', 'IE-02-02', 'WAP', '1920'),
('1203190034', '6', '0', 'AISHA ISNENI INDRASWARI', 'IE-02-01', 'DMI', '1920'),
('1203190035', '6', '0', 'ZARA HAWININGRUM', 'IE-02-02', 'DMI', '1920'),
('1203190036', '6', '0', 'ADEK DHEA RESMI PURBANTARI', 'IE-02-01', 'RAZ', '1920'),
('1203190037', '6', '0', 'THANIA HELMALIA AGUSTA', 'IE-02-02', 'DMI', '1920'),
('1203190039', '6', '0', 'RAFIDSYAH ALDIN FAHARGA', 'IE-02-01', 'RAZ', '1920'),
('1203190040', '6', '0', 'GRACE MAHARANI PUTRI', 'IE-02-02', 'RDP', '1920'),
('1203190041', '6', '0', 'MOHAMMAD ABYAN SEIFA ARDHANA', 'IE-02-01', 'RAZ', '1920'),
('1203190042', '6', '0', 'ELSA DIAZ YAMILA', 'IE-02-02', 'RDP', '1920'),
('1203190043', '6', '0', 'AYU PREMA LAKSMI', 'IE-02-01', 'RAZ', '1920'),
('1203190044', '6', '0', 'MUCHAMMAD IMRON ROSYADI', 'IE-02-02', 'RDP', '1920'),
('1203190045', '6', '0', 'NI WAYAN DITA PRAMESTI', 'IE-02-01', 'RAZ', '1920'),
('1203190046', '6', '0', 'NURUL HIKMAH WIDYANSYAH', 'IE-02-02', 'DMI', '1920'),
('1203190047', '6', '0', 'AKHDAN MUHAMMAD SHULHA', 'IE-02-01', 'RAZ', '1920'),
('1203190048', '6', '0', 'MOCHAMMAD ZULFIKAR ALFANY', 'IE-02-02', 'DMI', '1920'),
('1203190049', '6', '0', 'ADELIA PRADYA PARAMITHA', 'IE-02-01', 'RAZ', '1920'),
('1203190050', '6', '0', 'ACHMAD OCTA FIRMANSYAH EFFENDY', 'IE-02-02', 'WAP', '1920'),
('1203190051', '6', '0', 'ARYA KUSUMA APRIANSYAH', 'IE-02-01', 'RAZ', '1920'),
('1203190053', '6', '0', 'YUDITH IQBAL DIKA PERMANA', 'IE-02-01', 'RDP', '1920'),
('1203192013', '6', '0', 'MOHAMAD SEPTYAN ASROFIL', 'IE-02-02', 'DMI', '1920'),
('1203192025', '6', '0', 'VANDO NURIK MAGANDHA', 'IE-02-01', 'RAZ', '1920'),
('1203192032', '6', '0', 'ACHMAT', 'IE-02-02', 'RDP', '1920'),
('1203192033', '6', '0', 'VIDO MAHARDIKA AJI', 'IE-02-01', 'RAZ', '1920'),
('1203192038', '6', '0', 'DIVA AULIYA NAJA', 'IE-02-02', 'DMI', '1920'),
('1203192052', '6', '0', 'ARDANU ADANG SAPUTRA', 'IE-02-01', 'DMI', '1920'),
('1203192054', '6', '0', 'SEPTHALIA NURIZZATI', 'IE-02-01', 'RDP', '1920'),
('1203192055', '6', '0', 'PUTRA PERKASA PURNOMO', 'IE-02-02', 'RDP', '1920'),
('1203199002', '6', '0', 'FATWA PUJANGGA AROEBOESMAN', 'IE-02-02', 'WAP', '1920'),
('1203199008', '6', '0', 'AURELLIA NADYA PURNAMA', 'IE-02-01', 'RAZ', '1920'),
('1203199011', '6', '0', 'MUHAMMAD FAIQ FARHAN RAJWA', 'IE-02-02', 'RDP', '1920'),
('1203200001', '6', '0', 'MOH.FAHRI', 'IE-03-01', 'BIA', '2021'),
('1203200002', '6', '0', 'ADRIANUS SATRIA PINANDITA', 'IE-03-02', 'AYU', '2021'),
('1203200003', '6', '0', 'NUR AFIFAH AHMARININGTYAS', 'IE-03-01', 'BIA', '2021'),
('1203200004', '6', '0', 'AMARRANGGA KUMARA PRADA', 'IE-03-03', 'ASA', '2021'),
('1203200005', '6', '0', 'HELMI ADITYA REZA GUNAWAN', 'IE-03-01', 'BIA', '2021'),
('1203200006', '6', '0', 'AURELIA RIZKA PUTRI', 'IE-03-02', 'AYU', '2021'),
('1203200007', '6', '0', 'ANITA NURBAYAN', 'IE-03-03', 'ASA', '2021'),
('1203200008', '6', '0', 'MUHAMMAD BAYU PRASETYO', 'IE-03-02', 'AYU', '2021'),
('1203200010', '6', '0', 'TERRESA INDRAJANI KUSUMA', 'IE-03-01', 'BIA', '2021'),
('1203200011', '6', '0', 'HAFID IRVAN PRIMATORYZI', 'IE-03-01', 'BIA', '2021'),
('1203200012', '6', '0', 'DIVAZANNA ILLARITZQI', 'IE-03-02', 'AYU', '2021'),
('1203200013', '6', '0', 'FARDANILA ALFIYYATUR RAHMAWATI', 'IE-03-03', 'ASA', '2021'),
('1203200014', '6', '0', 'TINEKE SANDRA WISESHA', 'IE-03-01', 'BIA', '2021'),
('1203200015', '6', '0', 'ASRI KARTIKA DEWI', 'IE-03-02', 'AYU', '2021'),
('1203200016', '6', '0', 'RAHMAD ADAM FAUZIAN', 'IE-03-02', 'AYU', '2021'),
('1203200017', '6', '0', 'AKHMAR ASYRI AMIRUL ISNAINI', 'IE-03-03', 'ASA', '2021'),
('1203200018', '6', '0', 'SEFIRA RACHMA JULIA', 'IE-03-03', 'ASA', '2021'),
('1203200020', '6', '0', 'WARUZIQTA DATU KAIDA', 'IE-03-01', 'BIA', '2021'),
('1203200021', '6', '0', 'IVAN CAESAR RAMADHAN', 'IE-03-02', 'AYU', '2021'),
('1203200022', '6', '0', 'FASYA MAZAYA SHIDQI MUHAMMAD', 'IE-03-02', 'AYU', '2021'),
('1203200023', '6', '0', 'LISA EKA PRAMUDITA', 'IE-03-03', 'ASA', '2021'),
('1203200024', '6', '0', 'FIERINO NUGROHO', 'IE-03-03', 'ASA', '2021'),
('1203200025', '6', '0', 'NUR RIZKI MADANI', 'IE-03-01', 'BIA', '2021'),
('1203200026', '6', '0', 'SAID AZIZ LUTHFIANSYAH BUFTHEIM', 'IE-03-02', 'AYU', '2021'),
('1203200029', '6', '0', 'DEXTARA PRESPIERO SUPRIYANTO', 'IE-03-02', 'AYU', '2021'),
('1203200030', '6', '0', 'RIZKY ANDREASS PRATAMA', 'IE-03-03', 'ASA', '2021'),
('1203200031', '6', '0', 'BETSYEDA FREA ANUARITA', 'IE-03-01', 'BIA', '2021'),
('1203200033', '6', '0', 'HARI PURNOMO BIMANTORO', 'IE-03-02', 'AYU', '2021'),
('1203200034', '6', '0', 'RAYHAN FADHLUR ROHMAN', 'IE-03-03', 'ASA', '2021'),
('1203200035', '6', '0', 'ALVIEN PATRIA PUTRAHADI', 'IE-03-01', 'BIA', '2021'),
('1203200036', '6', '0', 'SASOTYA RIGAN RAFSANJANA', 'IE-03-02', 'AYU', '2021'),
('1203200037', '6', '0', 'ELSA RACHMA FARAH DIBA', 'IE-03-02', 'AYU', '2021'),
('1203200038', '6', '0', 'HABIB MIRZA ALFANSURI', 'IE-03-03', 'ASA', '2021'),
('1203200039', '6', '0', 'MUCHAMAD RIDWAN PRASETYO', 'IE-03-01', 'BIA', '2021'),
('1203200040', '6', '0', 'MUHAMMAD DHIAUL SURYO KUSUMO ARRIFQI', 'IE-03-02', 'AYU', '2021'),
('1203200041', '6', '0', 'IFTITAH KURNIA', 'IE-03-03', 'ASA', '2021'),
('1203200042', '6', '0', 'RENALDI HARUN', 'IE-03-03', 'ASA', '2021'),
('1203200043', '6', '0', 'YUNITA', 'IE-03-01', 'BIA', '2021'),
('1203200044', '6', '0', 'FIRMAN THOBIAS UKY', 'IE-03-01', 'BIA', '2021'),
('1203200045', '6', '0', 'MUHAMMAD SYAHRIL HARTADI', 'IE-03-02', 'AYU', '2021'),
('1203200046', '6', '0', 'IKA YULIANITA', 'IE-03-02', 'AYU', '2021'),
('1203200047', '6', '0', 'RAYSA CANDRA RADHYA', 'IE-03-03', 'ASA', '2021'),
('1203200048', '6', '0', 'SUHARTONO', 'IE-03-03', 'ASA', '2021'),
('1203200049', '6', '0', 'YESIKA PURBA', 'IE-03-01', 'BIA', '2021'),
('1203200050', '6', '0', 'RADITYA HENRY MAULANA', 'IE-03-01', 'BIA', '2021'),
('1203200051', '6', '0', 'DIMAS YOHAN ANDHI YUDHANA', 'IE-03-02', 'AYU', '2021'),
('1203200052', '6', '0', 'ZIDANE SOHIBUL SIKHI MUHAMAD', 'IE-03-03', 'ASA', '2021'),
('1203200053', '6', '0', 'FARAH ANNISA YASMINE', 'IE-03-02', 'AYU', '2021'),
('1203200054', '6', '0', 'JAUHARA IZTIHAR', 'IE-03-03', 'ASA', '2021'),
('1203200055', '6', '0', 'ROSALINA CLAUDEA', 'IE-03-01', 'BIA', '2021'),
('1203200056', '6', '0', 'CATUR PRASETIYA NUGROHO', 'IE-03-01', 'BIA', '2021'),
('1203200057', '6', '0', 'PUTRI DWI INDAH ROHMAHWATI', 'IE-03-02', 'AYU', '2021'),
('1203200058', '6', '0', 'AHMAD NUR ROSYID', 'IE-03-02', 'AYU', '2021'),
('1203200059', '6', '0', 'LOLA RIZKY YUDANTI', 'IE-03-03', 'ASA', '2021'),
('1203200060', '6', '0', 'ARLINDIA NUR ROSDIAN HANAFI', 'IE-03-01', 'BIA', '2021'),
('1203200061', '6', '0', 'TEDDY APRILLA AKBAR', 'IE-03-03', 'ASA', '2021'),
('1203200062', '6', '0', 'INDRA DWI RIANTORO', 'IE-03-01', 'BIA', '2021'),
('1203200063', '6', '0', 'ADHITYA RINDA WAHYU PURNAMA', 'IE-03-02', 'AYU', '2021'),
('1203200064', '6', '0', 'ADITYA DIMAS PRAYOGA', 'IE-03-03', 'ASA', '2021'),
('1203200065', '6', '0', 'AMELIA SYAHADA', 'IE-03-02', 'AYU', '2021'),
('1203200066', '6', '0', 'JIHAN ROSYIDAH', 'IE-03-03', 'ASA', '2021'),
('1203200067', '6', '0', 'MUCHAMMAD HAIDAR AFIF', 'IE-03-01', 'BIA', '2021'),
('1203200068', '6', '0', 'YAKFI ZAMZAMI ACHMAD', 'IE-03-02', 'AYU', '2021'),
('1203200070', '6', '0', 'ERA ANZHA NAELIL MUNNA', 'IE-03-02', 'AYU', '2021'),
('1203200071', '6', '0', 'MOHAMMAD ROBI MAULANA', 'IE-03-03', 'ASA', '2021'),
('1203200072', '6', '0', 'RINDI AULIA MEI NABILLAH', 'IE-03-03', 'ASA', '2021'),
('1203200073', '6', '0', 'FIRLI TAJTIBRA', 'IE-03-01', 'AYU', '2021'),
('1203200075', '6', '0', 'DONITA DESI DERIA', 'IE-03-02', 'AYU', '2021'),
('1203200076', '6', '0', 'BERLIANA SAFITRI', 'IE-03-03', 'ASA', '2021'),
('1203200077', '6', '0', 'ABIYYAS DAFFA SURYADI', 'IE-03-02', 'AYU', '2021'),
('1203200078', '6', '0', 'AFIQO AIDIL FAHREZI', 'IE-03-03', 'ASA', '2021'),
('1203200079', '6', '0', 'YANA EKA LUHUR PAMBUDI PUTERI', 'IE-03-01', 'DMI', '2021'),
('1203200080', '6', '0', 'WIDI RESKA WALDIANTO', 'IE-03-01', 'AYU', '2021'),
('1203200081', '6', '0', 'PUTRI AMELIA FEBRIANTI', 'IE-03-02', 'DMI', '2021'),
('1203200082', '6', '0', 'ANASTASIA ARLYANTI', 'IE-03-03', 'ASA', '2021'),
('1203200083', '6', '0', 'IZZUL AROBI AL ALAWI', 'IE-03-02', 'DMI', '2021'),
('1203200084', '6', '0', 'MUHAMMAD IQBAL AL RASYID', 'IE-03-03', 'ASA', '2021'),
('1203200085', '6', '0', 'MUHAMMAD HANIF RAIHAN', 'IE-03-01', 'AYU', '2021'),
('1203200086', '6', '0', 'ANISAH RACHMAWATI', 'IE-03-01', 'BIA', '2021'),
('1203200087', '6', '0', 'REINARDUS ANDONI NASERA PUTRA', 'IE-03-02', 'DMI', '2021'),
('1203200088', '6', '0', 'M.RAKYASA ABDI SUMITRA', 'IE-03-03', 'ASA', '2021'),
('1203200089', '6', '0', 'MEIDINA NABILA', 'IE-03-02', 'AYU', '2021'),
('1203200091', '6', '0', 'CANDIKA TRI HATMODJO', 'IE-03-02', 'DMI', '2021'),
('1203200092', '6', '0', 'YUVENS MARYO AJI YUNIANTO', 'IE-03-03', 'ASA', '2021'),
('1203200093', '6', '0', 'ACHMAD FARIKHIN RAMADHANI', 'IE-03-01', 'AYU', '2021'),
('1203200094', '6', '0', 'RAFI JUNIAR SAPUTRA', 'IE-03-02', 'DMI', '2021'),
('1203200095', '6', '0', 'MOH. FAUZAN ALMIDI SAPUTRA', 'IE-03-03', 'ASA', '2021'),
('1203200096', '6', '0', 'MOHAMMAD ALHISYAM ZIDANE', 'IE-03-01', 'DMI', '2021'),
('1203200097', '6', '0', 'SHABIYA ALAM HAGAN', 'IE-03-02', 'AYU', '2021'),
('1203200099', '6', '0', 'IMANIAR DILA RAMADANTI AHMAD', 'IE-03-03', 'ASA', '2021'),
('1203200100', '6', '0', 'DIMAS DANDY PRADANA SEPTIAWAN', 'IE-03-01', 'AYU', '2021'),
('1203200101', '6', '0', 'INES MULIA NURDIANA', 'IE-03-01', 'DMI', '2021'),
('1203200103', '6', '0', 'RAHMATYAH REZKITA PUTRI', 'IE-03-02', 'AYU', '2021'),
('1203200104', '6', '0', 'BASMAH', 'IE-03-03', 'ASA', '2021'),
('1203200105', '6', '0', 'MUHAMMAD ALFAIRUS HIDAYATULLAH', 'IE-03-03', 'ASA', '2021'),
('1203200106', '6', '0', 'ADAM JULIAN RISHALDY', 'IE-03-01', 'DMI', '2021'),
('1203200107', '6', '0', 'ISHAK RIZALDY EKA KURNIA', 'IE-03-02', 'AYU', '2021'),
('1203200109', '6', '0', 'MUHAMMAD NABIL PUTRA NASUTION', 'IE-03-01', 'BIA', '2021'),
('1203200111', '6', '0', 'CHRISFENAN DAREA', 'IE-03-03', 'ASA', '2021'),
('1203200112', '6', '0', 'FARREL ABEDNEGO DAREA', 'IE-03-01', 'BIA', '2021'),
('1203200113', '6', '0', 'SANDRA MAULISYAFIRA', 'IE-03-01', 'BIA', '2021'),
('1203202009', '6', '0', 'VINCENTIUS SERAFIAN ANDY PERMANA PUTRA', 'IE-03-03', 'ASA', '2021'),
('1203202019', '6', '0', 'RIFQI ABIYYA FAHMI', 'IE-03-01', 'DMI', '2021'),
('1203202027', '6', '0', 'MUHAMAD REYHAN DIPASATYA ARIANANDA', 'IE-03-03', 'ASA', '2021'),
('1203202028', '6', '0', 'BREVY ADITYA PUTRA ILVIANSYA', 'IE-03-01', 'BIA', '2021'),
('1203202032', '6', '0', 'ZEINALABIDIN', 'IE-03-01', 'DMI', '2021'),
('1203202069', '6', '0', 'YUANITA LUCKY FEARNANDA', 'IE-03-01', 'BIA', '2021'),
('1203202074', '6', '0', 'RIFKA DAHAYU AZ-ZAHRA NAYAK', 'IE-03-01', 'BIA', '2021'),
('1203202090', '6', '0', 'DEVANDRO ALIFIANO', 'IE-03-01', 'DMI', '2021'),
('1203202098', '6', '0', 'MUHAMMAD ADE SAPUTRA', 'IE-03-03', 'ASA', '2021'),
('1203202102', '6', '0', 'MUHAMMAD DJOVAISH DERRY CHANDRA', 'IE-03-02', 'AYU', '2021'),
('1203202108', '6', '0', 'KRESNA DEVA MAULANA IZZA', 'IE-03-03', 'ASA', '2021'),
('1203202110', '6', '0', 'REINARD DUSTIN OKTAVIO', 'IE-03-02', 'AYU', '2021'),
('1204180002', '5', '0', 'RAHMAT ANDIKA LAKSANA', 'IS-01-01', 'NPI', '1819'),
('1204180003', '5', '0', 'MUHAMMAD LUQMAN NAUFAL', 'IS-01-01', 'HWM', '1819'),
('1204180005', '5', '0', 'HARIS ABDUL HAKIM', 'IS-01-01', 'HWM', '1819'),
('1204180006', '5', '0', 'SALINDRI RETNO MALINI KUSUMA SUPARDI', 'IS-01-01', 'HWM', '1819'),
('1204180007', '5', '0', 'GAGAS PUTRA DAWANGGA', 'IS-01-01', 'HWM', '1819'),
('1204180009', '5', '0', 'NABILLAH MONICA HIDAYAT', 'IS-01-01', 'YPS', '1819'),
('1204180010', '5', '0', 'KAFIN TAUFIQUR RAHMAN', 'IS-01-01', 'NPI', '1819'),
('1204180012', '5', '0', 'INTAN ROCHMATUL MAULIDYA', 'IS-01-01', 'NPI', '1819'),
('1204180013', '5', '0', 'TANANG SATRIYO ADI', 'IS-01-01', 'HWM', '1819'),
('1204180015', '5', '0', 'RICKY YUDHATAMA', 'IS-01-01', 'NPI', '1819'),
('1204180016', '5', '0', 'ABU BAKAR MUHAMMAD AMRULLOH', 'IS-01-01', 'HWM', '1819'),
('1204180017', '5', '0', 'THANIA ANINDILLAH PUTRI', 'IS-01-01', 'HWM', '1819'),
('1204180018', '5', '0', 'DAVA KRISNA PRANATA', 'IS-01-01', 'NAS', '1819'),
('1204180019', '5', '0', 'MOCHAMAD BAYU AJI WIDODO', 'IS-01-01', 'NPI', '1819'),
('1204180020', '5', '0', 'MUHAMMAD DENNY FALAHUDDIN', 'IS-01-01', 'NPI', '1819'),
('1204180022', '5', '0', 'MUH. MILIARDI ADNAN BATUBARA', 'IS-01-01', 'NPI', '1819'),
('1204180024', '5', '0', 'YUNIAR REVI AYUNING LESTARI', 'IS-01-01', 'HWM', '1819'),
('1204180026', '5', '0', 'GERALDO BRATA HIROSHI PURBA', 'IS-01-01', 'NPI', '1819'),
('1204180027', '5', '0', 'SALSABILA QATRUNNADA', 'IS-01-01', 'NPI', '1819'),
('1204180029', '5', '0', 'SEM WANADRI', 'IS-01-01', 'NPI', '1819'),
('1204180031', '5', '0', 'ANZIS ROHMAN WAHID', 'IS-01-01', 'HWM', '1819'),
('1204181004', '5', '0', 'WAN AZIZAH SRI NURAINI', 'IS-01-01', 'HWM', '1819'),
('1204181008', '5', '0', 'TANFIRUL ROIBAFI MUHAMMAD', 'IS-01-01', 'HWM', '1819'),
('1204181011', '5', '0', 'MOCH. YUSUF FATHUSSALAM', 'IS-01-01', 'NPI', '1819'),
('1204181014', '5', '0', 'AMALINA TRI SETYA BERLIANA', 'IS-01-01', 'HWM', '1819'),
('1204181021', '5', '0', 'WIDYA BAGAS RICHA ANGGRAENI', 'IS-01-01', 'HWM', '1819'),
('1204181023', '5', '0', 'IRENE DYAH AYUWATI', 'IS-01-01', 'NPI', '1819'),
('1204181028', '5', '0', 'SYAHRIZAL AKBAR MAULANA', 'IS-01-01', 'RIN', '1819'),
('1204183030', '5', '0', 'SANGAJI WICAKSONO', 'IS-01-01', 'ULF', '1819'),
('1204189025', '5', '0', 'PRAMUDITHA RAVENDY NOHOS', 'IS-01-01', 'NPI', '1819'),
('1204190002', '5', '0', 'DURROTUL FAIQOH', 'IS-02-01', 'HWM', '1920'),
('1204190003', '5', '0', 'FIRDAUS ILHAM DHARMAWAN', 'IS-02-02', 'YPS', '1920'),
('1204190004', '5', '0', 'DAYANARA GADING PUSPITA', 'IS-02-03', 'NPI', '1920'),
('1204190005', '5', '0', 'AQBIL FARISNAUFAN', 'IS-02-01', 'HWM', '1920'),
('1204190006', '5', '0', 'I G AG KOM AGNAM MELYANTARA', 'IS-02-02', 'YPS', '1920'),
('1204190010', '5', '0', 'MASHEDI', 'IS-02-03', 'NPI', '1920'),
('1204190011', '5', '0', 'SITI AMINAH', 'IS-02-01', 'HWM', '1920'),
('1204190012', '5', '0', 'RIO ARMANDO', 'IS-02-02', 'YPS', '1920'),
('1204190014', '5', '0', 'IQBAL YUDHA SAKTI', 'IS-02-03', 'NPI', '1920'),
('1204190015', '5', '0', 'MEITA BETANIA', 'IS-02-01', 'HWM', '1920'),
('1204190016', '5', '0', 'MUHAMMAD NAUFAL AZIZI', 'IS-02-02', 'YPS', '1920'),
('1204190017', '5', '0', 'WAHYU ALDI ACHMAD SYAMAIDZAR', 'IS-02-03', 'NPI', '1920'),
('1204190018', '5', '0', 'BONNIE FERDINAND AKBAR', 'IS-02-01', 'HWM', '1920'),
('1204190019', '5', '0', 'KHAIRIMA DWI HANIFA', 'IS-02-02', 'HWM', '1920'),
('1204190021', '5', '0', 'IQBAL TAWWAQAL', 'IS-02-03', 'NPI', '1920'),
('1204190022', '5', '0', 'YUDHA ADITYA PRATAMA', 'IS-02-01', 'HWM', '1920'),
('1204190023', '5', '0', 'RIJAL ZUHDI MUWAFFAQ', 'IS-02-02', 'YPS', '1920'),
('1204190024', '5', '0', 'VIRGIAN LISTIANTO', 'IS-02-03', 'NPI', '1920'),
('1204190025', '5', '0', 'WIDAYATULLAH RA\'YAN GUNUNG JATI', 'IS-02-01', 'HWM', '1920'),
('1204190026', '5', '0', 'ANDI MATALARIC', 'IS-02-02', 'YPS', '1920'),
('1204190028', '5', '0', 'MUHAMAD ARSYAD', 'IS-02-03', 'NPI', '1920'),
('1204190029', '5', '0', 'MOCHAMAD DANI RAFSANJANI', 'IS-02-01', 'HWM', '1920'),
('1204190031', '5', '0', 'ARIS SYAHRIZAL', 'IS-02-02', 'YPS', '1920'),
('1204190032', '5', '0', 'KARINA PUTRI PERMATASARI', 'IS-02-03', 'NPI', '1920'),
('1204190033', '5', '0', 'MOCHAMAD EVAN WIRATAMA', 'IS-02-01', 'HWM', '1920'),
('1204190034', '5', '0', 'ANDHIKA JULIAWAN', 'IS-02-02', 'RIN', '1920'),
('1204190036', '5', '0', 'MUSTAFA FARHAN SASONGKO', 'IS-02-03', 'NPI', '1920'),
('1204190037', '5', '0', 'M IQBAL HAFIDZ', 'IS-02-01', 'HWM', '1920'),
('1204190038', '5', '0', 'ERWIN PUJIANTO', 'IS-02-02', 'HWM', '1920'),
('1204190040', '5', '0', 'BANGKIT JAYA MILLENIONDI', 'IS-02-03', 'NPI', '1920'),
('1204190042', '5', '0', 'SATRIO SAKTI SARWO TRENGGINAS', 'IS-02-01', 'HWM', '1920'),
('1204190044', '5', '0', 'MUHAMMAD ARSYI ATHALA AFFANDY', 'IS-02-02', 'HWM', '1920'),
('1204190046', '5', '0', 'IAN MAHENDRA PUTRA', 'IS-02-03', 'ULF', '1920'),
('1204190048', '5', '0', 'ACH TRI HAMSYAH', 'IS-02-01', 'HWM', '1920'),
('1204190049', '5', '0', 'PUTRA ANUGRAH PURWANTO', 'IS-02-02', 'NPI', '1920'),
('1204190050', '5', '0', 'DESY FITRI AULIA LATUCONSINA', 'IS-02-03', 'ULF', '1920'),
('1204190051', '5', '0', 'AYU PUSPITA SARI', 'IS-02-01', 'HWM', '1920'),
('1204190052', '5', '0', 'BRIAN YUKO PUTRA', 'IS-02-02', 'NPI', '1920'),
('1204190054', '5', '0', 'MOCHAMMAD IHZA RIZKY KARIM', 'IS-02-03', 'ULF', '1920'),
('1204190055', '5', '0', 'RAFLI NUR FAUZI PRATAMA', 'IS-02-01', 'HWM', '1920'),
('1204190056', '5', '0', 'DANDY PRATAMA ARISANDY', 'IS-02-02', 'ULF', '1920'),
('1204190057', '5', '0', 'DHARMANSYAH ADE PRATAMA', 'IS-02-03', 'ULF', '1920'),
('1204190058', '5', '0', 'MUHAMMAD DAFFA ADIYATMA YUSUF', 'IS-02-01', 'YPS', '1920'),
('1204190059', '5', '0', 'ACHMAD DAFA FIRDAUS', 'IS-02-02', 'NAS', '1920'),
('1204190060', '5', '0', 'RAYHAN ZAHWAN SALEH', 'IS-02-03', 'ULF', '1920'),
('1204190063', '5', '0', 'YAQUTA DWIKE AMALIYA', 'IS-02-01', 'YPS', '1920'),
('1204190064', '5', '0', 'MUHAMMAD SYAUQI HABIBIE ALY MUSA', 'IS-02-02', 'ULF', '1920'),
('1204190066', '5', '0', 'ALFIN VIDYANTO', 'IS-02-03', 'ULF', '1920'),
('1204190067', '5', '0', 'GERIA YUKA RIZQIQA MAGA CHAMPION', 'IS-02-01', 'YPS', '1920'),
('1204190068', '5', '0', 'TYRELA DISYA ARIVANI', 'IS-02-02', 'RIN', '1920'),
('1204190069', '5', '0', 'NADIAH RATNADUHITA', 'IS-02-03', 'ULF', '1920'),
('1204190070', '5', '0', 'INSANI SABILILLAH', 'IS-02-01', 'YPS', '1920'),
('1204190072', '5', '0', 'MUCHAMMAD KHARIS ALFARIST', 'IS-02-02', 'NPI', '1920'),
('1204190073', '5', '0', 'RHEVINDRA PERMATA ANGGRIAWAN', 'IS-02-03', 'ULF', '1920'),
('1204190074', '5', '0', 'AFAJRUL RAFFI ZAHRANDIKA', 'IS-02-02', 'ULF', '1920'),
('1204192013', '5', '0', 'EDRIAND IMENS RAYGRANDI', 'IS-02-01', 'YPS', '1920'),
('1204192020', '5', '0', 'RIZMA ELFARIANI', 'IS-02-02', 'NPI', '1920'),
('1204192027', '5', '0', 'HELMI IZZA KUSTANTA', 'IS-02-03', 'ULF', '1920'),
('1204192030', '5', '0', 'THORIQ DHIYA IKBAR', 'IS-02-01', 'YPS', '1920'),
('1204192035', '5', '0', 'HANIYAH AL KALIMAH', 'IS-02-02', 'NPI', '1920'),
('1204192041', '5', '0', 'AHMAD BAYU HUDA', 'IS-02-03', 'ULF', '1920'),
('1204192047', '5', '0', 'SYAHRIAL ILHAM PAHLEVY', 'IS-02-01', 'YPS', '1920'),
('1204192053', '5', '0', 'ALLICIA PUTRI SYAHRANI', 'IS-02-02', 'NPI', '1920'),
('1204192062', '5', '0', 'DINDA RAHMAWATI', 'IS-02-03', 'ULF', '1920'),
('1204192065', '5', '0', 'MUHAMMAD FARREL EVAN RAMADHANI', 'IS-02-01', 'YPS', '1920'),
('1204192071', '5', '0', 'ABD. RAHMAN MADANI', 'IS-02-02', 'NPI', '1920'),
('1204192075', '5', '0', 'GILANG AHMAD RAMADHANI AKBAR', 'IS-02-01', 'ULF', '1920'),
('1204199001', '5', '0', 'FAZA MUSYAFFA', 'IS-02-03', 'ULF', '1920'),
('1204199007', '5', '0', 'FAIRUZ KHAIRAFAZA HARYADI', 'IS-02-01', 'YPS', '1920'),
('1204199008', '5', '0', 'ADINE KHAERUNNISA LAKSANA', 'IS-02-02', 'NPI', '1920'),
('1204199009', '5', '0', 'CAHYA RAMADHANIYANTO', 'IS-02-03', 'ULF', '1920'),
('1204199039', '5', '0', 'ALFONSUS NATHANAEL DAMAR PRISTIANTIO', 'IS-02-01', 'YPS', '1920'),
('1204199043', '5', '0', 'PRATAMA RAMADHANI WIJAYA', 'IS-02-02', 'NPI', '1920'),
('1204199045', '5', '0', 'ADELA DEWI FORTUNA PUTRY', 'IS-02-03', 'ULF', '1920'),
('1204199061', '5', '0', 'TASYA ANDINI TESALONIKA', 'IS-02-01', 'YPS', '1920'),
('1204200001', '5', '0', 'NABIEL PRAMUDYA MAHENDRA', 'IS-03-01', 'NPI', '2021'),
('1204200002', '5', '0', 'RHEYNANSYA TABRIZ TAJJ HAURAVIN AL KANZA', 'IS-03-01', 'NPI', '2021'),
('1204200003', '5', '0', 'ADAM FAKHRI HISYAM', 'IS-03-02', 'ULF', '2021'),
('1204200004', '5', '0', 'YUNI QORIAH VERDIANA', 'IS-03-02', 'NPI', '2021'),
('1204200005', '5', '0', 'LIYA ATHI\'UL KHUSNA', 'IS-03-03', 'YPS', '2021'),
('1204200009', '5', '0', 'ALYA IRSYADAH FADLILA', 'IS-03-05', 'NAS', '2021'),
('1204200010', '5', '0', 'SAFIRA YANUAR ANGGITA PUSPITASARI', 'IS-03-01', 'NPI', '2021'),
('1204200011', '5', '0', 'RAIHAN FEBRIANTO GRAHADI', 'IS-03-05', 'NAS', '2021'),
('1204200012', '5', '0', 'REZJA ZALVA FADILA', 'IS-03-01', 'NPI', '2021'),
('1204200013', '5', '0', 'HIKAL ANUGERAH ILAHI', 'IS-03-02', 'YPS', '2021'),
('1204200014', '5', '0', 'RAMA PRIHANDANA PANGESTU', 'IS-03-03', 'YPS', '2021'),
('1204200015', '5', '0', 'ARCADIUS OBAJA NAARIE', 'IS-03-04', 'RIN', '2021'),
('1204200016', '5', '0', 'ADITIYA TARUNA SEPTIAN WIBOWO', 'IS-03-05', 'NAS', '2021'),
('1204200017', '5', '0', 'FERY RAMADHANI FIRDAUS', 'IS-03-01', 'HWM', '2021'),
('1204200018', '5', '0', 'RAMADHANI HENDRA CAHYA', 'IS-03-02', 'YPS', '2021'),
('1204200019', '5', '0', 'RIZQIKA IBNU KHATTAB', 'IS-03-03', 'ULF', '2021'),
('1204200020', '5', '0', 'BINTANG RASSYA NUGRAHA', 'IS-03-04', 'RIN', '2021'),
('1204200022', '5', '0', 'HELMY SANDRA YUSA', 'IS-03-05', 'NAS', '2021'),
('1204200023', '5', '0', 'ANDRIANO SION SAMUEL HUKY', 'IS-03-01', 'HWM', '2021'),
('1204200024', '5', '0', 'GHALY PRAMUDYA ADHI MUKTI', 'IS-03-02', 'HWM', '2021'),
('1204200026', '5', '0', 'DEWI AHMALIA ZULFIYANI', 'IS-03-03', 'YPS', '2021'),
('1204200027', '5', '0', 'BAGUS FEBRYANTO', 'IS-03-04', 'RIN', '2021'),
('1204200028', '5', '0', 'ARVYNANDA PAMUNGKAS', 'IS-03-05', 'NAS', '2021'),
('1204200029', '5', '0', 'FAREL DIMAS ATMADIANSYAH', 'IS-03-01', 'NPI', '2021'),
('1204200030', '5', '0', 'ARIE PRASETYO', 'IS-03-02', 'NAS', '2021'),
('1204200031', '5', '0', 'M. MUSTANG HARIMURTI', 'IS-03-03', 'ULF', '2021'),
('1204200032', '5', '0', 'AIS AYUNI NUR ROFI\'AH', 'IS-03-04', 'RIN', '2021'),
('1204200033', '5', '0', 'WIDYA NURMALA', 'IS-03-05', 'NAS', '2021'),
('1204200034', '5', '0', 'CAMELLYA KANZHA AMADEA ZETA', 'IS-03-01', 'HWM', '2021'),
('1204200035', '5', '0', 'BAYU KEVIN FARINDRA', 'IS-03-04', 'RIN', '2021'),
('1204200037', '5', '0', 'FADHIL JULYARDIANSYAH', 'IS-03-05', 'NAS', '2021'),
('1204200038', '5', '0', 'FANNIJARA ENGGAR LARASATI', 'IS-03-03', 'ULF', '2021'),
('1204200039', '5', '0', 'ARYDA FATIHAH PUTRI DINARTO', 'IS-03-04', 'RIN', '2021'),
('1204200040', '5', '0', 'RIFQA SAFARIA ARYA PUTRI', 'IS-03-05', 'NAS', '2021'),
('1204200041', '5', '0', 'AGHA RIZKY FATCHUR RAHMAN', 'IS-03-01', 'NPI', '2021'),
('1204200042', '5', '0', 'M. AMAR MA\'RUF', 'IS-03-02', 'YPS', '2021'),
('1204200043', '5', '0', 'WAHYU AJI RAHMADHAN', 'IS-03-03', 'ULF', '2021'),
('1204200044', '5', '0', 'WANDA NADHIFA AINAYA', 'IS-03-01', 'NPI', '2021'),
('1204200046', '5', '0', 'CHRISDION ANDREW RAMAPUTRA', 'IS-03-04', 'RIN', '2021'),
('1204200047', '5', '0', 'NABILA EDSA SAFITRI', 'IS-03-03', 'ULF', '2021'),
('1204200048', '5', '0', 'DIPA PRAMUDYA ANANTO', 'IS-03-05', 'NAS', '2021'),
('1204200051', '5', '0', 'ACHMAD FAJAR ROYYAN WACHID', 'IS-03-02', 'RIN', '2021'),
('1204200052', '5', '0', 'AMIRUL ALAMSYAH IRIANTO', 'IS-03-03', 'ULF', '2021'),
('1204200053', '5', '0', 'ADYAN IZZA MUHAMMAD ARKANANTA', 'IS-03-04', 'RIN', '2021'),
('1204200054', '5', '0', 'YULIA WAHYU NINGSIH', 'IS-03-05', 'NAS', '2021'),
('1204200055', '5', '0', 'FIRDAUS DAWAM LAKSANA', 'IS-03-05', 'NAS', '2021'),
('1204200056', '5', '0', 'ADHIAKSA BIMA RAMADHANI', 'IS-03-01', 'HWM', '2021'),
('1204200057', '5', '0', 'R.A. NATASYA ERSA PUTRI SALSABILA', 'IS-03-01', 'NPI', '2021'),
('1204200058', '5', '0', 'RIFKY CAHYA PUTRA', 'IS-03-02', 'ULF', '2021'),
('1204200059', '5', '0', 'VANISA DAMAYANTI YUNINGSIH', 'IS-03-02', 'YPS', '2021'),
('1204200060', '5', '0', 'YUYUN AYUNDA KURNIAWATI', 'IS-03-03', 'ULF', '2021'),
('1204200061', '5', '0', 'NAUFAL RAKHMAD DENISYA PUTRA', 'IS-03-03', 'ULF', '2021'),
('1204200062', '5', '0', 'KIO PUTRI ISMAYANTI', 'IS-03-04', 'RIN', '2021'),
('1204200063', '5', '0', 'BAGUS CAHYO SULISTIYO', 'IS-03-04', 'RIN', '2021'),
('1204200064', '5', '0', 'RAFI ANDI HIDAYAH', 'IS-03-05', 'NAS', '2021'),
('1204200065', '5', '0', 'DIMAS ARDIANSYAH', 'IS-03-01', 'NPI', '2021'),
('1204200066', '5', '0', 'RIMBI TITI PINASTI', 'IS-03-05', 'NAS', '2021'),
('1204200067', '5', '0', 'ASTARI SHOFAATUL AZHAR', 'IS-03-01', 'NPI', '2021'),
('1204200068', '5', '0', 'NAURA AULIYA ANANTA', 'IS-03-02', 'NAS', '2021'),
('1204200069', '5', '0', 'ADAM YOGA YUDHISTIRA SBH', 'IS-03-02', 'YPS', '2021'),
('1204200071', '5', '0', 'FRISCA HUSNIAH RAMADHANI', 'IS-03-03', 'ULF', '2021'),
('1204200072', '5', '0', 'DANIEL CHRISTIAN WINOTO', 'IS-03-04', 'RIN', '2021'),
('1204200073', '5', '0', 'NATHANIA FADLILAH', 'IS-03-04', 'RIN', '2021'),
('1204200074', '5', '0', 'ZAINIA ZAHROTUL WARDA', 'IS-03-05', 'NAS', '2021'),
('1204200075', '5', '0', 'HALINGGA MEGA PARAMADINA', 'IS-03-01', 'NPI', '2021'),
('1204200076', '5', '0', 'WULAN PERMATA SANDHI', 'IS-03-02', 'YPS', '2021'),
('1204200077', '5', '0', 'CHAFIDZ IZZUDDIN ROBBANI', 'IS-03-05', 'NAS', '2021'),
('1204200078', '5', '0', 'KEVIN IRVAN HAKIM', 'IS-03-01', 'NPI', '2021'),
('1204200079', '5', '0', 'PRADITA CAKRA BAYU AJI', 'IS-03-02', 'HWM', '2021'),
('1204200080', '5', '0', 'ESA KHARISMA PUTRA', 'IS-03-03', 'ULF', '2021'),
('1204200081', '5', '0', 'RAFAEL FILLAH FIRMANSYAH', 'IS-03-04', 'RIN', '2021'),
('1204200082', '5', '0', 'NOVAN ARDANI AGUSTIAN', 'IS-03-05', 'NAS', '2021'),
('1204200083', '5', '0', 'YUDHA ARDI FIRMANSAH', 'IS-03-01', 'NPI', '2021'),
('1204200084', '5', '0', 'MOHAMMAD ADITYA EKO SAPUTRA', 'IS-03-02', 'NAS', '2021'),
('1204200085', '5', '0', 'IKA PUTRI CANDELARIA', 'IS-03-03', 'ULF', '2021'),
('1204200086', '5', '0', 'LUKMAN SATRIYO BAGUS WICAKSONO', 'IS-03-03', 'ULF', '2021'),
('1204200087', '5', '0', 'EDGAR HIMAWAN ADIPRATAMA', 'IS-03-04', 'RIN', '2021'),
('1204200088', '5', '0', 'HAYU FAIZ NAUFAL ASYROF', 'IS-03-05', 'NAS', '2021'),
('1204200089', '5', '0', 'MEGANTARA SYAFA DAMARYUSTISIA', 'IS-03-01', 'NPI', '2021'),
('1204200090', '5', '0', 'ICHWANNUR SOFYAN KARIM', 'IS-03-02', 'RIN', '2021'),
('1204200091', '5', '0', 'SALMA ANGGRAENI', 'IS-03-04', 'RIN', '2021'),
('1204200092', '5', '0', 'RIZKI FADILLAH', 'IS-03-03', 'YPS', '2021'),
('1204200093', '5', '0', 'HABIB AULAWI BATARA HARAHAP', 'IS-03-04', 'RIN', '2021'),
('1204200095', '5', '0', 'SIWI WIRATNA PAMUNGKAS', 'IS-03-01', 'HWM', '2021'),
('1204200096', '5', '0', 'AHMAD MUKHLIS NAJAHUL HAQQ', 'IS-03-05', 'NAS', '2021'),
('1204200097', '5', '0', 'KABUL', 'IS-03-01', 'HWM', '2021'),
('1204200099', '5', '0', 'RACHELIA ALI', 'IS-03-02', 'ULF', '2021'),
('1204200100', '5', '0', 'ARINI PRAMESTA SETYANINGTITAH', 'IS-03-03', 'YPS', '2021'),
('1204200101', '5', '0', 'NABIL MAULANA RAMADHAN', 'IS-03-03', 'YPS', '2021'),
('1204200102', '5', '0', 'MAULANA RACHMAN FAKHRUDDIN', 'IS-03-04', 'RIN', '2021'),
('1204200103', '5', '0', 'LEVINA DINDA PURNAMA', 'IS-03-04', 'RIN', '2021'),
('1204200104', '5', '0', 'MUHAMMAD FACHRUDIN', 'IS-03-05', 'NAS', '2021'),
('1204200105', '5', '0', 'MOCH. AMIN TIAN', 'IS-03-01', 'NPI', '2021'),
('1204200106', '5', '0', 'RANI ANGELINA', 'IS-03-05', 'NAS', '2021'),
('1204200108', '5', '0', 'RIZKI AFIFATUS SA\'DIYAH', 'IS-03-02', 'NAS', '2021'),
('1204200109', '5', '0', 'RAMADITYA BHASKARA MAWANTA', 'IS-03-02', 'YPS', '2021'),
('1204200110', '5', '0', 'FIRYAL DALILAH IHSANI', 'IS-03-03', 'ULF', '2021'),
('1204200111', '5', '0', 'MUTIARA ZALISTY AZZAHRA', 'IS-03-04', 'RIN', '2021'),
('1204200112', '5', '0', 'RAMADHANI AIMMATUR RASYID', 'IS-03-03', 'ULF', '2021'),
('1204200113', '5', '0', 'BIRGITA YOLANDA FRISCIELA ARDHYA HERMAWAN', 'IS-03-05', 'NAS', '2021'),
('1204200114', '5', '0', 'HUGO RAYHAN F', 'IS-03-04', 'RIN', '2021'),
('1204200115', '5', '0', 'ACHMAD ALVI RIZQI MUTAMAM', 'IS-03-05', 'NAS', '2021'),
('1204200116', '5', '0', 'AHMAD ZHARFAN IHTIFAZHUDDIN', 'IS-03-01', 'HWM', '2021'),
('1204200117', '5', '0', 'IQBAL ABD. MUHBIR HADI ANAM', 'IS-03-02', 'YPS', '2021'),
('1204200118', '5', '0', 'FEBY METYA ANDARWATI RACHMAN', 'IS-03-01', 'HWM', '2021'),
('1204200119', '5', '0', 'GOLDY PRABA CHANDRA SUBAGYO', 'IS-03-03', 'ULF', '2021'),
('1204200120', '5', '0', 'NABILA INDRI RISSANTI', 'IS-03-02', 'YPS', '2021'),
('1204200121', '5', '0', 'ANGGA SAPUTRA ARIYASASMITA', 'IS-03-04', 'RIN', '2021'),
('1204200122', '5', '0', 'MAZIYATUL ILMA SALSABILA', 'IS-03-03', 'ULF', '2021'),
('1204200123', '5', '0', 'AHMAD HASAN MUTAWAKKIL ALALLAH', 'IS-03-05', 'NAS', '2021'),
('1204200124', '5', '0', 'AHMAD IHSAN FUADY', 'IS-03-01', 'HWM', '2021'),
('1204200125', '5', '0', 'ALFINNA DAMAYANTI NUGROHO', 'IS-03-04', 'RIN', '2021'),
('1204200126', '5', '0', 'DICKY DAMAI DARMAWAN', 'IS-03-02', 'YPS', '2021'),
('1204200127', '5', '0', 'HISYAM MAHENDRA PUTERA', 'IS-03-03', 'ULF', '2021'),
('1204200128', '5', '0', 'MUHAMAD MI\'ROJUL DHANNY PUTERA', 'IS-03-04', 'NAS', '2021'),
('1204200129', '5', '0', 'MUHAMMAD RYAN VIVALDI', 'IS-03-05', 'NAS', '2021'),
('1204200132', '5', '0', 'NAUFAL YAFI\' WALIYYUDDIN', 'IS-03-03', 'ULF', '2021'),
('1204200133', '5', '0', 'DIMAS ADITYA WAHONO', 'IS-03-04', 'RIN', '2021'),
('1204200134', '5', '0', 'ACHMAD FARCHAN', 'IS-03-05', 'NAS', '2021'),
('1204200135', '5', '0', 'CANTIKA ANISYA VIRASARI', 'IS-03-05', 'NAS', '2021'),
('1204200136', '5', '0', 'MUHAMMAD REZA RAMADHANA PUTRA', 'IS-03-01', 'HWM', '2021'),
('1204200137', '5', '0', 'HAFIZH MAULANA DZAHWAN', 'IS-03-02', 'YPS', '2021'),
('1204200139', '5', '0', 'ZIDANE AZRULLUDDIN FACHIR', 'IS-03-03', 'ULF', '2021'),
('1204200141', '5', '0', 'WINDA RATU SEPTIANI', 'IS-03-02', 'YPS', '2021'),
('1204200142', '5', '0', 'M RIVALDO DAVA ABIMANYU', 'IS-03-05', 'NAS', '2021'),
('1204200143', '5', '0', 'DERY SYAMS AHNAF', 'IS-03-01', 'NPI', '2021'),
('1204200144', '5', '0', 'IRSYAD RAMADHANI SOETEDJO', 'IS-03-02', 'YPS', '2021'),
('1204200145', '5', '0', 'ATHA ADIYATMA', 'IS-03-03', 'YPS', '2021'),
('1204200146', '5', '0', 'ERIKA NAURA UZLAMI', 'IS-03-03', 'ULF', '2021'),
('1204200147', '5', '0', 'MUHAMMAD LALANG JATI SETIAWAN', 'IS-03-04', 'RIN', '2021'),
('1204200148', '5', '0', 'AISYAH PINKY MARSHANDA', 'IS-03-04', 'RIN', '2021'),
('1204200150', '5', '0', 'IHDAFAUZIYAH', 'IS-03-05', 'NAS', '2021'),
('1204200152', '5', '0', 'MUHAMMAD RENDI WARDHANA', 'IS-03-02', 'YPS', '2021'),
('1204200153', '5', '0', 'AHMAD NUR HENDRYAN', 'IS-03-03', 'ULF', '2021'),
('1204200154', '5', '0', 'MARSHA ADINDA RACHMANIA', 'IS-03-01', 'NPI', '2021'),
('1204200155', '5', '0', 'SALSABILA RIZKA PRATAMA', 'IS-03-02', 'YPS', '2021'),
('1204200156', '5', '0', 'SAFIRA INDALA SULFA', 'IS-03-03', 'ULF', '2021'),
('1204200157', '5', '0', 'ALFINA AYU PUSPITASARI', 'IS-03-04', 'RIN', '2021'),
('1204200158', '5', '0', 'ASSAYYIDAH AZKA LAILA ALI SULAIMAN', 'IS-03-05', 'NAS', '2021'),
('1204200159', '5', '0', 'RIZKI EKA PUTRA', 'IS-03-04', 'RIN', '2021'),
('1204200160', '5', '0', 'PRASASTIO GIRI WICAKSONO', 'IS-03-05', 'NAS', '2021'),
('1204200161', '5', '0', 'SINTA REGITA PUTRI', 'IS-03-01', 'HWM', '2021'),
('1204200162', '5', '0', 'ALICIA NATALYN MANURUNG', 'IS-03-02', 'YPS', '2021'),
('1204200163', '5', '0', 'DEBY FEBBY FEBIOLA', 'IS-03-03', 'ULF', '2021'),
('1204200164', '5', '0', 'RISMAWATI KHOFIFAH', 'IS-03-04', 'RIN', '2021'),
('1204200165', '5', '0', 'MUHAMMAD FARDANDY MARTINO', 'IS-03-01', 'HWM', '2021'),
('1204200166', '5', '0', 'M DAWUD EMERULLOH', 'IS-03-02', 'YPS', '2021'),
('1204200167', '5', '0', 'M KHIKAM ALIFUDDIN', 'IS-03-03', 'ULF', '2021'),
('1204200168', '5', '0', 'NUR FAJRI FADHIL HUMAM', 'IS-03-04', 'RIN', '2021'),
('1204200170', '5', '0', 'AHMAD ZHILAL FANANI', 'IS-03-01', 'HWM', '2021'),
('1204200171', '5', '0', 'GILBERT PIERRO XARISTHEO', 'IS-03-02', 'YPS', '2021'),
('1204200172', '5', '0', 'NAUVALDY VIRGIAWAN SETYOADI', 'IS-03-03', 'ULF', '2021'),
('1204200174', '5', '0', 'AHMAD NURDIYANSYAH LUTHFI SALAM', 'IS-03-04', 'RIN', '2021'),
('1204200175', '5', '0', 'DOVITO ALHAFISH  WIDIYANTO', 'IS-03-05', 'NAS', '2021'),
('1204200176', '5', '0', 'PRUDENSIUS PASKALIS KOPONG MASAN', 'IS-03-01', 'HWM', '2021'),
('1204200177', '5', '0', 'PUTRI PRAMESTI REGITA CAHYANI', 'IS-03-01', 'NPI', '2021'),
('1204200178', '5', '0', 'NURUL HIDAYAH', 'IS-03-02', 'YPS', '2021'),
('1204200179', '5', '0', 'IVENA DORDIA OLGA WAROMI', 'IS-03-03', 'ULF', '2021'),
('1204200180', '5', '0', 'ASHFA ASHFIYAK', 'IS-03-02', 'NAS', '2021'),
('1204200181', '5', '0', 'SAMAWATI NUR ROHILAH', 'IS-03-04', 'RIN', '2021'),
('1204200182', '5', '0', 'RETNO PUTRI KURNIASARI', 'IS-03-05', 'NAS', '2021'),
('1204200183', '5', '0', 'ANDY FERDIANSYAH', 'IS-03-03', 'ULF', '2021'),
('1204200184', '5', '0', 'SAMUEL SAPUTRA SIBARANI', 'IS-03-04', 'RIN', '2021'),
('1204200185', '5', '0', 'ELISA PUTRI AMANDA', 'IS-03-01', 'NPI', '2021'),
('1204200186', '5', '0', 'R. MAHENDRA AGUNG PRATAMA DITO', 'IS-03-05', 'NAS', '2021'),
('1204200187', '5', '0', 'AULIA WAHYUNINGTIYAS', 'IS-03-02', 'YPS', '2021'),
('1204200188', '5', '0', 'NUR IKA AINI OKTAVIA', 'IS-03-03', 'RIN', '2021'),
('1204200189', '5', '0', 'DINA AVIFA AULIA', 'IS-03-04', 'RIN', '2021'),
('1204200190', '5', '0', 'MUKHAMMAD RIZKY ROKHMATTULLOH', 'IS-03-01', 'HWM', '2021'),
('1204200191', '5', '0', 'MUHAMMAD FAIZ AL AKBAR', 'IS-03-02', 'RIN', '2021'),
('1204200192', '5', '0', 'GESIT FIQRIANSYAH', 'IS-03-03', 'YPS', '2021'),
('1204200193', '5', '0', 'MONICA MICHELLE OKTAVIANI', 'IS-03-05', 'NAS', '2021'),
('1204200194', '5', '0', 'ANGGRAINI PUTRI UTOMA', 'IS-03-01', 'NPI', '2021'),
('1204200195', '5', '0', 'MOH. JOE PRIZZY', 'IS-03-04', 'RIN', '2021'),
('1204200197', '5', '0', 'CANTIKA TIARA ANANDA', 'IS-03-02', 'YPS', '2021'),
('1204200198', '5', '0', 'IRFAN HIDAYAT', 'IS-03-01', 'ULF', '2021'),
('1204200199', '5', '0', 'MUHAMMAD RIDWAN', 'IS-03-02', 'YPS', '2021'),
('1204200200', '5', '0', 'RADIX ALPRINO FIKRIE', 'IS-03-03', 'RIN', '2021'),
('1204200201', '5', '0', 'MOHAMMAD DIFTA AMRULLAH', 'IS-03-04', 'RIN', '2021'),
('1204200202', '5', '0', 'DITO PUTRA', 'IS-03-05', 'NAS', '2021'),
('1204200203', '5', '0', 'FEBIANNE DIVA PRINITA', 'IS-03-03', 'ULF', '2021'),
('1204200204', '5', '0', 'FITRAH ARJUNA BRILIANUR RAHMAN', 'IS-03-01', 'NAS', '2021'),
('1204200205', '5', '0', 'SUKMA BAHANA', 'IS-03-04', 'RIN', '2021'),
('1204200206', '5', '0', 'MUHAMMAD NABIEL SETIAWAN', 'IS-03-02', 'YPS', '2021'),
('1204200207', '5', '0', 'MUCHAMAD BAGASTRIO KURNIAWAN', 'IS-03-03', 'ULF', '2021'),
('1204200208', '5', '0', 'JASIEL JEHUDA SISWANTO', 'IS-03-04', 'RIN', '2021'),
('1204200209', '5', '0', 'MIKEL EGA WIJAYA', 'IS-03-05', 'NAS', '2021'),
('1204200210', '5', '0', 'AHMAD DIFA SALSABILA', 'IS-03-01', 'HWM', '2021'),
('1204200211', '5', '0', 'MOCHAMMAD NAUVAL ALFARISI', 'IS-03-02', 'YPS', '2021'),
('1204200212', '5', '0', 'RISKI AMINUDDIN', 'IS-03-03', 'ULF', '2021'),
('1204200213', '5', '0', 'DIMAS RAFLY ABIMANYU', 'IS-03-04', 'RIN', '2021'),
('1204200215', '5', '0', 'ANINDIA HALIZA ARDYANTI', 'IS-03-05', 'NAS', '2021'),
('1204200216', '5', '0', 'LUTHFIAH SYAHFITRI', 'IS-03-01', 'HWM', '2021'),
('1204200219', '5', '0', 'SHERLY AGUSTIN', 'IS-03-03', 'NAS', '2021'),
('1204200220', '5', '0', 'CAHYO SAPUTRA', 'IS-03-02', 'YPS', '2021'),
('1204200221', '5', '0', 'FIRDAUS RIZKI AKBAR', 'IS-03-03', 'NAS', '2021'),
('1204200222', '5', '0', 'DYAH RAHMAWATI HASAN', 'IS-03-04', 'ULF', '2021'),
('1204200223', '5', '0', 'ALKAHFI SYAHRIR IRMUDA', 'IS-03-04', 'NAS', '2021'),
('1204200224', '5', '0', 'NADYA CATHERINE AGNES WAMAFMA', 'IS-03-05', 'ULF', '2021'),
('1204200225', '5', '0', 'VANIA MARTHA AURELLIA LUBIS', 'IS-03-01', 'RIN', '2021'),
('1204200226', '5', '0', 'RIZKY ARYA ANDITA', 'IS-03-05', 'RIN', '2021'),
('1204200227', '5', '0', 'DINDA FERNANDA HARSONO PUTRI', 'IS-03-02', 'RIN', '2021'),
('1204200228', '5', '0', 'PUTRI ANJELINA PRAYOGA NAPITUPULU', 'IS-03-03', 'ULF', '2021'),
('1204200229', '5', '0', 'ARDAFA NABIL MAKHARIM', 'IS-03-01', 'RIN', '2021'),
('1204200230', '5', '0', 'ADITYA IQBAL DARMAWAN', 'IS-03-02', 'YPS', '2021'),
('1204200231', '5', '0', 'MEIYATI ELIS MAURY', 'IS-03-04', 'ULF', '2021'),
('1204200232', '5', '0', 'BEIVENLY ANDREA JAYADIVA SAMPELAN', 'IS-03-05', 'ULF', '2021'),
('1204202006', '5', '0', 'ARYASITA CAHYANING HERVINTA', 'IS-03-04', 'RIN', '2021'),
('1204202007', '5', '0', 'AHMAD ROBBI RODHIYAN RIFANTO', 'IS-03-03', 'YPS', '2021'),
('1204202008', '5', '0', 'REINARD DUSTIN OKTAVIO', 'IS-03-04', 'RIN', '2021'),
('1204202021', '5', '0', 'MADE RAHAYU PUTRI SARON', 'IS-03-02', 'YPS', '2021'),
('1204202025', '5', '0', 'MUHAMAD BRILLIANT FIKRI NANDA HARTADI', 'IS-03-03', 'YPS', '2021'),
('1204202036', '5', '0', 'LAILY NISWATIN RACHMAWATI', 'IS-03-02', 'HWM', '2021'),
('1204202045', '5', '0', 'ADELIA DESI AGNESITA', 'IS-03-02', 'NAS', '2021'),
('1204202049', '5', '0', 'NABIL ATTAR FIRDAUS', 'IS-03-01', 'NPI', '2021'),
('1204202050', '5', '0', 'NABILA SYIFA RACHMADINI', 'IS-03-04', 'RIN', '2021'),
('1204202070', '5', '0', 'JOHAN CALVIN TEURUPUN', 'IS-03-03', 'ULF', '2021'),
('1204202094', '5', '0', 'NATASYA AMELIA SUKMAWATI', 'IS-03-05', 'NAS', '2021'),
('1204202098', '5', '0', 'AHDA IBNU AFADA', 'IS-03-02', 'RIN', '2021'),
('1204202107', '5', '0', 'ANNISAA PUTRI PRAMESWARI POERWANTO', 'IS-03-01', 'HWM', '2021'),
('1204202130', '5', '0', 'RIFANDA ATALAH URFI', 'IS-03-01', 'HWM', '2021'),
('1204202131', '5', '0', 'KEVIN ADRIANUS JOHANNES', 'IS-03-02', 'ULF', '2021'),
('1204202138', '5', '0', 'RIFDAH ALIFIA', 'IS-03-01', 'HWM', '2021'),
('1204202140', '5', '0', 'JODY KURNIAWAN SAGITA', 'IS-03-04', 'RIN', '2021'),
('1204202149', '5', '0', 'IFANSYAH ARRAHIM', 'IS-03-05', 'NAS', '2021'),
('1204202151', '5', '0', 'MUHAMMAD IQBAL HAFISH SETIAWAN', 'IS-03-01', 'HWM', '2021'),
('1204202169', '5', '0', 'M IQBAL WISNU ADIANTO', 'IS-03-05', 'NAS', '2021'),
('1204202173', '5', '0', 'RAHAYU NUR ROCHMAH', 'IS-03-05', 'NAS', '2021'),
('1204202196', '5', '0', 'STEVEN HEPHZIBAH OLIN', 'IS-03-05', 'NAS', '2021'),
('1204202214', '5', '0', 'ANGGA TRIA SAPUTRA', 'IS-03-05', 'NAS', '2021'),
('1204202217', '5', '0', 'ISMAIL FAUZAN', 'IS-03-01', 'HWM', '2021'),
('1204202218', '5', '0', 'SALSABILA ANANDA AYU PUTRI .S', 'IS-03-02', 'NPI', '2021'),
('910120001', '3', '0', 'ANISA MUTIARA QOLBI W', 'SE-03-PS', 'DEW', '2021'),
('910120002', '3', '0', 'WAODE SRI WULANDARI', 'SE-03-PS', 'DEW', '2021'),
('910120009', '3', '0', 'DEDE RIAN', 'SE-03-PS', 'DEW', '2021'),
('910120020', '3', '0', 'IQBAL DERMAWAN', 'SE-03-PS', 'AGS', '2021'),
('910120021', '3', '0', 'SAYYID NUR RAMADHAN HABIBI', 'SE-03-PS', 'AGS', '2021'),
('910120022', '3', '0', 'FRISKA PUTRI VIRGINNIA', 'SE-03-PS', 'AGS', '2021'),
('910120023', '3', '0', 'KURNIA SALSABELA', 'SE-03-PS', 'AGS', '2021'),
('910120024', '3', '0', 'TIKA IHSANI', 'SE-03-PS', 'AGS', '2021'),
('910120025', '3', '0', 'MUHAMMAD RIZAL', 'SE-03-PS', 'DEW', '2021'),
('910120026', '3', '0', 'MUCHAMMAD ARIEF WICAKSONO', 'SE-03-PS', 'DEW', '2021'),
('910120027', '3', '0', 'FARIDZ KURNIA CHANDRA', 'SE-03-PS', 'DEW', '2021'),
('910120032', '3', '0', 'MERLYN ZODYA SARTIKA', 'SE-03-PS', 'AGS', '2021'),
('910120039', '3', '0', 'GERRY JEVEN TIMOTI', 'SE-03-PS', 'DEW', '2021'),
('910120045', '3', '0', 'ROBY JULIAN', 'SE-03-PS', 'DEW', '2021'),
('910120065', '3', '0', 'FAHRI DWI JUNIARSAH', 'SE-03-PS', 'DEW', '2021'),
('910220010', '7', '0', 'ILHAM MAULANA', 'IT-03-PS', 'FRH', '2021'),
('910220011', '7', '0', 'FARHAN FEBRIAWAN', 'IT-03-PS', 'FRH', '2021'),
('910220012', '7', '0', 'PATHAN FIRMANSYAH', 'IT-03-PS', 'FRH', '2021'),
('910220013', '7', '0', 'MUHAMAD RIZKI FAJAR', 'IT-03-PS', 'FRH', '2021'),
('910220014', '7', '0', 'FACHRUROZI ALWI', 'IT-03-PS', 'FRH', '2021'),
('910220028', '7', '0', 'NURUL HIDAYAH', 'IT-03-PS', 'FRH', '2021'),
('910220029', '7', '0', 'NOVA NUR SAKBANI', 'IT-03-PS', 'FRH', '2021'),
('910220030', '7', '0', 'TIKA AGUSTIYANI', 'IT-03-PS', 'FRH', '2021'),
('910220031', '7', '0', 'LIVIA DWI CAHYANI', 'IT-03-PS', 'FRH', '2021'),
('910220049', '7', '0', 'GERAL YUSMAN SILAMBI', 'IT-03-PS', 'FRH', '2021'),
('910220051', '7', '0', 'ENCEP IKHWAN KURNIAWAN', 'IT-03-PS', 'BAS', '2021'),
('910220052', '7', '0', 'ALI HUDAYA', 'IT-03-PS', 'BAS', '2021'),
('910220053', '7', '0', 'NANDA SEPTIA KUSUMA NUGRAHA', 'IT-03-PS', 'FRH', '2021'),
('910220054', '7', '0', 'ISMI HAYATI NABILA', 'IT-03-PS', 'FRH', '2021'),
('910220055', '7', '0', 'JULIANSYAH ADI PUTRA', 'IT-03-PS', 'FRH', '2021'),
('910220056', '7', '0', 'THOMAS RYANTAMA', 'IT-03-PS', 'FRH', '2021'),
('910220058', '7', '0', 'DINDA ALFIKHA FITRI', 'IT-03-PS', 'BAS', '2021'),
('910220059', '7', '0', 'FIRRIZKI', 'IT-03-PS', 'BAS', '2021'),
('910220060', '7', '0', 'OSCAR DEVINSEN', 'IT-03-PS', 'BAS', '2021'),
('910220061', '7', '0', 'DAFFA IQBQL RAHMATULLOH', 'IT-03-PS', 'BAS', '2021'),
('910220063', '7', '0', 'FORTUNE JR OMBUH', 'IT-03-PS', 'BAS', '2021'),
('910220064', '7', '0', 'JAUHARUL AKFIYA', 'IT-03-PS', 'BAS', '2021'),
('910420003', '5', '0', 'SIGIT MUSRIADIN', 'IS-03-PS', 'NPI', '2021'),
('910420004', '5', '0', 'DIKA ARTHA PUTRI', 'IS-03-PS', 'YPS', '2021'),
('910420005', '5', '0', 'EVIE TYASWATI', 'IS-03-PS', 'YPS', '2021'),
('910420006', '5', '0', 'OKTAVIA NURKHASANAH', 'IS-03-PS', 'YPS', '2021'),
('910420007', '5', '0', 'MEI SEPRI YANI', 'IS-03-PS', 'YPS', '2021'),
('910420008', '5', '0', 'ZULFA TAUFIQOH', 'IS-03-PS', 'YPS', '2021'),
('910420015', '5', '0', 'WIDYA NANDA PURWATI', 'IS-03-PS', 'YPS', '2021'),
('910420016', '5', '0', 'SITI FADILAH', 'IS-03-PS', 'YPS', '2021'),
('910420017', '5', '0', 'STEPPHANUS MANURUNG', 'IS-03-PS', 'YPS', '2021'),
('910420018', '5', '0', 'HANDHANY BRIAN P', 'IS-03-PS', 'YPS', '2021'),
('910420019', '5', '0', 'MEDINA ASMARANI', 'IS-03-PS', 'YPS', '2021'),
('910420033', '5', '0', 'THINGKILIA FINNATIA HUSIN', 'IS-03-PS', 'YPS', '2021'),
('910420034', '5', '0', 'TARISA', 'IS-03-PS', 'YPS', '2021'),
('910420035', '5', '0', 'PHILIP ALEXANDER', 'IS-03-PS', 'YPS', '2021'),
('910420036', '5', '0', 'HERRY ANWAR', 'IS-03-PS', 'YPS', '2021'),
('910420037', '5', '0', 'SONI SUCIADI', 'IS-03-PS', 'AGS', '2021'),
('910420038', '5', '0', 'TINEZIA OCTAVIA', 'IS-03-PS', 'AGS', '2021'),
('910420040', '5', '0', 'MARCHELLYA SANDRA GENIA', 'IS-03-PS', 'YPS', '2021'),
('910420041', '5', '0', 'STEVEN WIJAYA', 'IS-03-PS', 'YPS', '2021'),
('910420042', '5', '0', 'KELVIN VERDIAN', 'IS-03-PS', 'YPS', '2021'),
('910420043', '5', '0', 'DIKI CANDRA', 'IS-03-PS', 'NPI', '2021'),
('910420044', '5', '0', 'YOHANES', 'IS-03-PS', 'NPI', '2021'),
('910420046', '5', '0', 'HENDRA TOBAN', 'IS-03-PS', 'NPI', '2021'),
('910420047', '5', '0', 'HISKHIA SAMPE TANDUK', 'IS-03-PS', 'NPI', '2021'),
('910420048', '5', '0', 'EDY VON ARRIB', 'IS-03-PS', 'NPI', '2021'),
('910420050', '5', '0', 'FAUZAN ABDULAH JULIANO', 'IS-03-PS', 'NPI', '2021'),
('910420057', '5', '0', 'NABILA HENDARIS', 'IS-03-PS', 'YPS', '2021'),
('910420062', '5', '0', 'ULFA TRIANA', 'IS-03-PS', 'NPI', '2021'),
('STUDENTID', 'ST', '0', 'FULLNAME', 'CLASS', 'LEC', 'STUD');

-- --------------------------------------------------------

--
-- Table structure for table `studentexam`
--

CREATE TABLE `studentexam` (
  `STUDENTEXAMID` decimal(10,0) NOT NULL,
  `GROUPID` decimal(10,0) DEFAULT NULL,
  `SCHEDULEID` decimal(10,0) DEFAULT NULL,
  `LECTURERCODE` char(3) DEFAULT NULL,
  `TOTALSCORE` decimal(10,0) DEFAULT NULL,
  `FINALSCORE` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `studyprogram`
--

CREATE TABLE `studyprogram` (
  `STUDYPROGRAMID` char(2) NOT NULL,
  `FACULTYID` decimal(10,0) DEFAULT NULL,
  `STUDYPROGRAMNAME` varchar(100) DEFAULT NULL,
  `ACRONIM` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studyprogram`
--

INSERT INTO `studyprogram` (`STUDYPROGRAMID`, `FACULTYID`, `STUDYPROGRAMNAME`, `ACRONIM`) VALUES
('1', '1', 'TEKNIK KOMPUTER', 'CE'),
('10', '2', 'SAINS DATA', 'DS'),
('11', '1', 'TEKNIK LOGISTIK', 'LE'),
('2', '1', 'TEKNIK ELEKTRO', 'EE'),
('3', '2', 'REKAYASA PERANGKAT LUNAK', 'SE'),
('4', '1', 'TEKNIK TELEKOMUNIKASI', 'TE'),
('5', '2', 'SISTEM INFORMASI', 'IS'),
('6', '1', 'TEKNIK INDUSTRI', 'IE'),
('7', '2', 'TEKNOLOGI INFORMASI', 'IT'),
('8', '2', 'BISNIS DIGITAL', 'DB'),
('9', '2', 'INFORMATIKA', 'IF');

-- --------------------------------------------------------

--
-- Table structure for table `survey`
--

CREATE TABLE `survey` (
  `SURVEYID` bigint(11) NOT NULL,
  `CPNAME` varchar(100) DEFAULT NULL,
  `CPUNIT` varchar(50) DEFAULT NULL,
  `CPPOSITION` varchar(50) DEFAULT NULL,
  `CPPHONE` varchar(50) DEFAULT NULL,
  `CPEMAIL` varchar(50) DEFAULT NULL,
  `SURVEYRESULT` text DEFAULT NULL,
  `STATUS` varchar(20) DEFAULT NULL,
  `GROUPID` decimal(10,0) NOT NULL,
  `COMPANYID` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `usergroup`
--

CREATE TABLE `usergroup` (
  `USERGROUPID` int(11) NOT NULL,
  `users_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usergroup`
--

INSERT INTO `usergroup` (`USERGROUPID`, `users_id`, `role_id`) VALUES
(11, 18, 4),
(12, 18, 6),
(15, 2, 1),
(19, 19, 2),
(20, 19, 3),
(21, 20, 7),
(22, 21, 7),
(23, 22, 7),
(26, 25, 2),
(27, 29, 6),
(37, 1, 7),
(38, 16, 4),
(39, 16, 6);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `nim_nip` varchar(15) DEFAULT NULL,
  `password_hash` varchar(255) NOT NULL,
  `reset_hash` varchar(255) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL,
  `activate_hash` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `status_message` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `force_pass_reset` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `nim_nip`, `password_hash`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'user@gmail.com', 'user', '1201190003', '$2y$10$fJP/VHOekqKvcgF28rMS1.qV4Lu4d7j019p2ufOsQ3s36wVM4y7RS', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-01-15 23:12:25', '2022-04-08 10:28:52', NULL),
(2, 'feedeewepe@gmail.com', 'feedeewepe', NULL, '$2y$10$sUiqqGChs0D3vtY4hXcHnOcDRXWLfLAYwR/Ya16hjY3p4rK9Dipwa', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-08-09 23:08:02', '2021-08-09 23:08:02', NULL),
(9, 'fidiwputro@ittelkom-sby.ac.id', 'fwp', NULL, '$2y$10$66YaE0Pcs7CIbDJgDdb.KuytHCyGyFwMeWT.cb4vRG0Eq0MNizzIS', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-08-17 08:46:05', '2021-10-18 21:48:40', NULL),
(10, 'se@ittelkom-sby.ac.id', 'serpl', NULL, '$2y$10$9dBLLipH0MXlXgRLNgq5n.NVhAo2OhCMedPFQTaq378ngij7F.PKG', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-08-17 08:47:46', '2021-08-19 09:07:39', NULL),
(13, 'bpa@tes.aja', 'bpa', NULL, '$2y$10$atp0w5uJGtHjwSCyf2TlHuGNgov058V1tqej8xG7VCk3QS2m5p.Ta', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-08-19 09:05:00', '2022-03-17 00:24:07', NULL),
(14, 'lap@tes.aja', 'lap', NULL, '$2y$10$k9dceiYcomntBfyKZSQPzOm8aSQvTQ0/CPt8BdVsOOjwDA0z3r00W', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-08-19 09:06:05', '2022-03-17 00:24:48', NULL),
(15, 'uji@tes.aja', 'uji', NULL, '$2y$10$VzFSlfKhKdv.AHYxIRcUxuOjMvn.Sm.4Z2XIRshFM3SDitvZz3TG6', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-08-19 09:06:49', '2022-03-17 00:25:09', NULL),
(16, 'fidiwputro@gmail.com', 'fidi', '19870004', '$2y$10$xx6HS.qAKLTtKSjkXBA7Je/GGQs1GzciF7ZyQcla7sKmC0xTnvkgO', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-03-25 10:18:55', '2022-04-11 02:37:38', NULL),
(17, 'asd@gmail.com', 'asd', NULL, '$2y$10$3ED.vm4/mhUDUsuxaD5a3u07ibSO0AWsEin0z.ZluJIaUQOMHlNPO', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '2022-04-02 02:21:46', '2022-04-02 02:21:46', NULL),
(18, 'qwe@gmail.com', 'qwe', NULL, '$2y$10$HKo0qwo7MozWKFUJg5IZfOoKUWkwZyfWyiTSG9bG0L/pwetrqV5Lu', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '2022-04-02 02:24:15', '2022-04-02 02:24:15', NULL),
(19, 'zxc@gmail.com', 'zxc', NULL, '$2y$10$kZAz2PSg/unEMK0sW3AY0eDWpSfcUgsYIVa1BHmt2xJqqS21BkjG6', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-04-02 02:27:05', '2022-04-06 23:45:02', NULL),
(20, 'zul@karn.ain', 'zulkarnain', NULL, '$2y$10$WyDLUM.8DjbeqjIt7c.9gO/fxur5Ke1XD3k4Ox3mJzoF3UD6ClGnG', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '2022-04-07 21:45:17', '2022-04-07 21:45:17', NULL),
(21, 'rai@han.com', 'raihan', NULL, '$2y$10$8P6m1OdmvRPV8tJs7Rf/TeuFqo7Fi6zdx2/ORPfXG3ofVlpPMYlh.', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '2022-04-07 21:47:01', '2022-04-07 21:47:01', NULL),
(22, 'raihan@mhs.com', 'raihanmhs', '1201190003', '$2y$10$HWompM8JtjbdEvMgTjf3beFIvAp0Tv9Ho7tb92vmKQFTYbP0FBMHu', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '2022-04-07 22:03:43', '2022-04-07 22:03:43', NULL),
(23, 'aswd@aswd.com', 'aswd', '19870004', '$2y$10$qKFA0aMzgs9Sf6AYYMmvcun/EAgSx1655Gvul0XcFQXT/2b6a7ax6', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '2022-04-08 08:59:20', '2022-04-08 08:59:20', NULL),
(24, 'qwerty@ini.com', 'qwerty', '19870004', '$2y$10$LLlYr7ahxrxRVBz5GNZDDelc2Gt5OwY7QQmL1k36iCdX/Tkl9/hGq', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '2022-04-08 09:01:33', '2022-04-08 09:01:33', NULL),
(25, 'asdf@ini.com', 'asdf', '19870004', '$2y$10$PUSmVfyYZZ.YT7A1JUk7YOpolKetuPYGZfQIB3aVNHh/tAGmtnxbW', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '2022-04-08 09:03:29', '2022-04-08 09:05:01', NULL),
(26, 'zxcv@ini.com', 'zxcv', '19870004', '$2y$10$VIwUHf9TUb06yPJ7v6DAW.zEZfTA98c0AFRow.uXxHfu5BrUERAlq', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '2022-04-08 09:06:12', '2022-04-08 09:06:12', NULL),
(27, 'qaz@ini.com', 'qaz', '19870004', '$2y$10$NTrUdNL2l8SIw5n7fddG3uSXEUrdl.iWUmvZpqk7PuAPv01ul4Dri', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '2022-04-08 09:10:01', '2022-04-08 09:10:01', NULL),
(28, 'wsx@ini.com', 'wsx', '19870004', '$2y$10$nejOYVtViJgVJ2YRSSB1yekVIX..HyqgiJdC0W3lOqm32eLo00n56', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '2022-04-08 09:11:28', '2022-04-08 09:11:28', NULL),
(29, 'edc@ini.com', 'edc', '19870004', '$2y$10$i/ujds1oWvJB4ktjA.ltc.DiMO2gMfrZQDZ5GAgHnrHwgU62TuMsW', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '2022-04-08 09:12:24', '2022-04-08 09:12:24', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assesmentcriteria`
--
ALTER TABLE `assesmentcriteria`
  ADD PRIMARY KEY (`ASSESMENTID`);

--
-- Indexes for table `assesmentscore`
--
ALTER TABLE `assesmentscore`
  ADD KEY `FK_REFERENCE_17` (`ASSESMENTID`),
  ADD KEY `FK_REFERENCE_18` (`STUDENTEXAMID`);

--
-- Indexes for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups`
--
ALTER TABLE `auth_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD KEY `auth_groups_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `group_id_permission_id` (`group_id`,`permission_id`);

--
-- Indexes for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD KEY `auth_groups_users_user_id_foreign` (`user_id`),
  ADD KEY `group_id_user_id` (`group_id`,`user_id`);

--
-- Indexes for table `auth_logins`
--
ALTER TABLE `auth_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auth_tokens_user_id_foreign` (`user_id`),
  ADD KEY `selector` (`selector`);

--
-- Indexes for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD KEY `auth_users_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `user_id_permission_id` (`user_id`,`permission_id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`COMPANYID`);

--
-- Indexes for table `counseling`
--
ALTER TABLE `counseling`
  ADD PRIMARY KEY (`COUNSELINGID`),
  ADD KEY `FK_REFERENCE_9` (`GROUPID`);

--
-- Indexes for table `document`
--
ALTER TABLE `document`
  ADD PRIMARY KEY (`DOCUMENTID`),
  ADD KEY `FK_REFERENCE_19` (`GROUPID`);

--
-- Indexes for table `examschedule`
--
ALTER TABLE `examschedule`
  ADD PRIMARY KEY (`SCHEDULEID`),
  ADD KEY `FK_REFERENCE_13` (`STUDYPROGRAMID`);

--
-- Indexes for table `faculties`
--
ALTER TABLE `faculties`
  ADD PRIMARY KEY (`FACULTYID`);

--
-- Indexes for table `groupaccess`
--
ALTER TABLE `groupaccess`
  ADD PRIMARY KEY (`GROUPACCESSID`),
  ADD KEY `fk_groupaccess_usergroup1_idx` (`USERGROUPID`);

--
-- Indexes for table `groupstatus`
--
ALTER TABLE `groupstatus`
  ADD PRIMARY KEY (`GROUPSTATUSID`),
  ADD KEY `FK_GROUPSTA_REF_INTERNSTATUS` (`STATUSID`),
  ADD KEY `FK_REFERENCE_8` (`GROUPID`);

--
-- Indexes for table `internshipactivity`
--
ALTER TABLE `internshipactivity`
  ADD PRIMARY KEY (`idinternshipactivity`),
  ADD KEY `fk_internshipactivity_student1_idx` (`STUDENTID`);

--
-- Indexes for table `internshipgroup`
--
ALTER TABLE `internshipgroup`
  ADD PRIMARY KEY (`GROUPID`),
  ADD KEY `FK_REFERENCE_10` (`TYPEID`),
  ADD KEY `FK_REFERENCE_4` (`LECTURERCODE`),
  ADD KEY `FK_REFERENCE_5` (`COMPANYID`);

--
-- Indexes for table `internshipstatus`
--
ALTER TABLE `internshipstatus`
  ADD PRIMARY KEY (`STATUSID`);

--
-- Indexes for table `intershiptype`
--
ALTER TABLE `intershiptype`
  ADD PRIMARY KEY (`TYPEID`);

--
-- Indexes for table `lecturer`
--
ALTER TABLE `lecturer`
  ADD PRIMARY KEY (`LECTURERCODE`);

--
-- Indexes for table `logbookinternship`
--
ALTER TABLE `logbookinternship`
  ADD PRIMARY KEY (`LOGBOOKID`),
  ADD KEY `FK_REFERENCE_12` (`GROUPID`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`roleid`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`STUDENTID`),
  ADD KEY `FK_REFERENCE_2` (`STUDYPROGRAMID`),
  ADD KEY `FK_REFERENCE_3` (`GROUPID`);

--
-- Indexes for table `studentexam`
--
ALTER TABLE `studentexam`
  ADD PRIMARY KEY (`STUDENTEXAMID`),
  ADD KEY `FK_REFERENCE_14` (`SCHEDULEID`),
  ADD KEY `FK_REFERENCE_15` (`GROUPID`),
  ADD KEY `FK_REFERENCE_16` (`LECTURERCODE`);

--
-- Indexes for table `studyprogram`
--
ALTER TABLE `studyprogram`
  ADD PRIMARY KEY (`STUDYPROGRAMID`),
  ADD KEY `FK_REFERENCE_1` (`FACULTYID`);

--
-- Indexes for table `survey`
--
ALTER TABLE `survey`
  ADD PRIMARY KEY (`SURVEYID`),
  ADD KEY `fk_survey_internshipgroup1_idx` (`GROUPID`),
  ADD KEY `fk_survey_company1_idx` (`COMPANYID`);

--
-- Indexes for table `usergroup`
--
ALTER TABLE `usergroup`
  ADD PRIMARY KEY (`USERGROUPID`),
  ADD KEY `fk_usergroup_users1_idx` (`users_id`),
  ADD KEY `fk_usergroup_role1_idx` (`role_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_groups`
--
ALTER TABLE `auth_groups`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=234;

--
-- AUTO_INCREMENT for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `groupaccess`
--
ALTER TABLE `groupaccess`
  MODIFY `GROUPACCESSID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `groupstatus`
--
ALTER TABLE `groupstatus`
  MODIFY `GROUPSTATUSID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `internshipactivity`
--
ALTER TABLE `internshipactivity`
  MODIFY `idinternshipactivity` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `survey`
--
ALTER TABLE `survey`
  MODIFY `SURVEYID` bigint(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usergroup`
--
ALTER TABLE `usergroup`
  MODIFY `USERGROUPID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `assesmentscore`
--
ALTER TABLE `assesmentscore`
  ADD CONSTRAINT `FK_REFERENCE_17` FOREIGN KEY (`ASSESMENTID`) REFERENCES `assesmentcriteria` (`ASSESMENTID`),
  ADD CONSTRAINT `FK_REFERENCE_18` FOREIGN KEY (`STUDENTEXAMID`) REFERENCES `studentexam` (`STUDENTEXAMID`);

--
-- Constraints for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD CONSTRAINT `auth_groups_permissions_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD CONSTRAINT `auth_groups_users_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD CONSTRAINT `auth_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD CONSTRAINT `auth_users_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_users_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `counseling`
--
ALTER TABLE `counseling`
  ADD CONSTRAINT `FK_REFERENCE_9` FOREIGN KEY (`GROUPID`) REFERENCES `internshipgroup` (`GROUPID`);

--
-- Constraints for table `document`
--
ALTER TABLE `document`
  ADD CONSTRAINT `FK_REFERENCE_19` FOREIGN KEY (`GROUPID`) REFERENCES `internshipgroup` (`GROUPID`);

--
-- Constraints for table `examschedule`
--
ALTER TABLE `examschedule`
  ADD CONSTRAINT `FK_REFERENCE_13` FOREIGN KEY (`STUDYPROGRAMID`) REFERENCES `studyprogram` (`STUDYPROGRAMID`);

--
-- Constraints for table `groupaccess`
--
ALTER TABLE `groupaccess`
  ADD CONSTRAINT `fk_groupaccess_usergroup1` FOREIGN KEY (`USERGROUPID`) REFERENCES `usergroup` (`USERGROUPID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `groupstatus`
--
ALTER TABLE `groupstatus`
  ADD CONSTRAINT `FK_GROUPSTA_REF_INTERNSTATUS` FOREIGN KEY (`STATUSID`) REFERENCES `internshipstatus` (`STATUSID`),
  ADD CONSTRAINT `FK_REFERENCE_8` FOREIGN KEY (`GROUPID`) REFERENCES `internshipgroup` (`GROUPID`);

--
-- Constraints for table `internshipactivity`
--
ALTER TABLE `internshipactivity`
  ADD CONSTRAINT `fk_internshipactivity_student1` FOREIGN KEY (`STUDENTID`) REFERENCES `student` (`STUDENTID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `internshipgroup`
--
ALTER TABLE `internshipgroup`
  ADD CONSTRAINT `FK_REFERENCE_10` FOREIGN KEY (`TYPEID`) REFERENCES `intershiptype` (`TYPEID`),
  ADD CONSTRAINT `FK_REFERENCE_4` FOREIGN KEY (`LECTURERCODE`) REFERENCES `lecturer` (`LECTURERCODE`),
  ADD CONSTRAINT `FK_REFERENCE_5` FOREIGN KEY (`COMPANYID`) REFERENCES `company` (`COMPANYID`);

--
-- Constraints for table `logbookinternship`
--
ALTER TABLE `logbookinternship`
  ADD CONSTRAINT `FK_REFERENCE_12` FOREIGN KEY (`GROUPID`) REFERENCES `internshipgroup` (`GROUPID`);

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `FK_REFERENCE_2` FOREIGN KEY (`STUDYPROGRAMID`) REFERENCES `studyprogram` (`STUDYPROGRAMID`),
  ADD CONSTRAINT `FK_REFERENCE_3` FOREIGN KEY (`GROUPID`) REFERENCES `internshipgroup` (`GROUPID`);

--
-- Constraints for table `studentexam`
--
ALTER TABLE `studentexam`
  ADD CONSTRAINT `FK_REFERENCE_14` FOREIGN KEY (`SCHEDULEID`) REFERENCES `examschedule` (`SCHEDULEID`),
  ADD CONSTRAINT `FK_REFERENCE_15` FOREIGN KEY (`GROUPID`) REFERENCES `internshipgroup` (`GROUPID`),
  ADD CONSTRAINT `FK_REFERENCE_16` FOREIGN KEY (`LECTURERCODE`) REFERENCES `lecturer` (`LECTURERCODE`);

--
-- Constraints for table `studyprogram`
--
ALTER TABLE `studyprogram`
  ADD CONSTRAINT `FK_REFERENCE_1` FOREIGN KEY (`FACULTYID`) REFERENCES `faculties` (`FACULTYID`);

--
-- Constraints for table `survey`
--
ALTER TABLE `survey`
  ADD CONSTRAINT `fk_survey_company1` FOREIGN KEY (`COMPANYID`) REFERENCES `company` (`COMPANYID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_survey_internshipgroup1` FOREIGN KEY (`GROUPID`) REFERENCES `internshipgroup` (`GROUPID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `usergroup`
--
ALTER TABLE `usergroup`
  ADD CONSTRAINT `fk_usergroup_role1` FOREIGN KEY (`role_id`) REFERENCES `role` (`roleid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_usergroup_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
