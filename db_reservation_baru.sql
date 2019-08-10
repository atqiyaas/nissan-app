-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2019 at 04:38 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_reservation`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_access_menu`
--

CREATE TABLE `tbl_access_menu` (
  `access_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_booking`
--

CREATE TABLE `tbl_booking` (
  `id_booking` int(11) NOT NULL,
  `jadwal` int(11) NOT NULL,
  `create_at` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_kendaraan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_brand`
--

CREATE TABLE `tbl_brand` (
  `id_brand` int(11) NOT NULL,
  `nama_brand` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_brand`
--

INSERT INTO `tbl_brand` (`id_brand`, `nama_brand`) VALUES
(1, 'Nissan'),
(2, 'Datsun');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_brand_type`
--

CREATE TABLE `tbl_brand_type` (
  `id_brand_type` int(11) NOT NULL,
  `nama_brand_type` varchar(125) NOT NULL,
  `id_brand` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_brand_type`
--

INSERT INTO `tbl_brand_type` (`id_brand_type`, `nama_brand_type`, `id_brand`) VALUES
(1, 'Datsun GO', 2),
(3, 'Grand Livina', 1),
(4, 'Teraa', 1),
(5, 'Datsn Go+ Limited Edition', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_menu`
--

CREATE TABLE `tbl_menu` (
  `menu_id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_menu`
--

INSERT INTO `tbl_menu` (`menu_id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_role`
--

CREATE TABLE `tbl_role` (
  `role_id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_role`
--

INSERT INTO `tbl_role` (`role_id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Member');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sparepart`
--

CREATE TABLE `tbl_sparepart` (
  `id_sparepart` int(11) NOT NULL,
  `nama_sparepart` varchar(125) NOT NULL,
  `qty` int(11) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_submenu`
--

CREATE TABLE `tbl_submenu` (
  `submenu_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_actived` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `phone` varchar(128) NOT NULL,
  `address` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL,
  `update_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `name`, `email`, `image`, `password`, `phone`, `address`, `role_id`, `is_active`, `date_created`, `update_at`) VALUES
(6, 'Fuad Rivai', 'fuad@gmail.com', 'default.jpg', '$2y$10$JX.7YcbBtA/MbiwB7V8Dou54rPSQr/529dFjhY3mtqCbjj/dXpQ.K', '', '', 1, 1, 1563003553, 1563003553),
(7, 'Angga Finanda', 'angga@gmail.com', 'default.jpg', '$2y$10$3TfOwNInvmaYY0smDemh6.I/5qTAWIvHioWnHlQBxOBDjYBl1BI82', '', '', 2, 1, 1563035074, 1563035074),
(8, 'ulfi', 'ulfi@gmail.com', 'default.jpg', '$2y$10$qapj8xQEO62GeARcRb.G.uFe0YABvCorfF9iQIdRrENJwvv1oUeuu', '', '', 2, 1, 1563308006, 1563308006),
(9, 'andrea kinsky', 'andrea@gmail.com', 'default.jpg', '$2y$10$TvZLRDs5LwsgbPdVloO8ZON9aUVIBXoGTSuDdmeGYUUX2nZynn3em', '', '', 2, 1, 1563450848, 1563450848);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_vehicle`
--

CREATE TABLE `tbl_vehicle` (
  `id_kendaraan` int(11) NOT NULL,
  `no_polisi` varchar(125) NOT NULL,
  `jenis_kendaraan` varchar(125) NOT NULL,
  `km` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_access_menu`
--
ALTER TABLE `tbl_access_menu`
  ADD PRIMARY KEY (`access_id`);

--
-- Indexes for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  ADD PRIMARY KEY (`id_booking`);

--
-- Indexes for table `tbl_brand`
--
ALTER TABLE `tbl_brand`
  ADD PRIMARY KEY (`id_brand`);

--
-- Indexes for table `tbl_brand_type`
--
ALTER TABLE `tbl_brand_type`
  ADD PRIMARY KEY (`id_brand_type`);

--
-- Indexes for table `tbl_menu`
--
ALTER TABLE `tbl_menu`
  ADD PRIMARY KEY (`menu_id`);

--
-- Indexes for table `tbl_role`
--
ALTER TABLE `tbl_role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `tbl_sparepart`
--
ALTER TABLE `tbl_sparepart`
  ADD PRIMARY KEY (`id_sparepart`);

--
-- Indexes for table `tbl_submenu`
--
ALTER TABLE `tbl_submenu`
  ADD PRIMARY KEY (`submenu_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `tbl_vehicle`
--
ALTER TABLE `tbl_vehicle`
  ADD PRIMARY KEY (`id_kendaraan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_access_menu`
--
ALTER TABLE `tbl_access_menu`
  MODIFY `access_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  MODIFY `id_booking` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_brand`
--
ALTER TABLE `tbl_brand`
  MODIFY `id_brand` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_brand_type`
--
ALTER TABLE `tbl_brand_type`
  MODIFY `id_brand_type` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_menu`
--
ALTER TABLE `tbl_menu`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_role`
--
ALTER TABLE `tbl_role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_sparepart`
--
ALTER TABLE `tbl_sparepart`
  MODIFY `id_sparepart` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_submenu`
--
ALTER TABLE `tbl_submenu`
  MODIFY `submenu_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_vehicle`
--
ALTER TABLE `tbl_vehicle`
  MODIFY `id_kendaraan` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
