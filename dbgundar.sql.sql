-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2017 at 03:33 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ug`
--

-- --------------------------------------------------------

--
-- Table structure for table `gundar`
--

CREATE TABLE `gundar` (
  `id` int(11) NOT NULL,
  `nm_kampus` varchar(30) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `website` varchar(30) NOT NULL,
  `kota` varchar(30) NOT NULL,
  `provinsi` varchar(30) NOT NULL,
  `latitude` varchar(50) NOT NULL,
  `longitude` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gundar`
--

INSERT INTO `gundar` (`id`, `nm_kampus`, `no_hp`, `alamat`, `website`, `kota`, `provinsi`, `latitude`, `longitude`) VALUES
(1, 'Kampus A Kenari', '+62 817-8881-112', 'Jalan Kenari 3 Nomor. 33,Kelurahan Kenari, Kelurahan Senen\r\n', 'www.maps.google.com', 'Jakarta Pusat', 'Jakarta,Indonesia', '-6.1940462', '106.8443125'),
(2, 'Kampus B Salemba', '+62 217-8881-112', 'Jalan Salemba Bluntas Nomor. 2,Kelurahan Paseban, Kelurahan Senen\r\n', 'www.maps.google.com', 'Jakarta Pusat', 'Jakarta,Indonesia', '-6.1954221', '106.8475625'),
(3, 'Kampus C Salemba', '+62 213-906-518', 'Jalan Salemba Raya Nomor. 53,Kelurahan Paseban, Kelurahan Senen\r\n', 'www.maps.google.com', 'Jakarta Pusat', 'Jakarta,Indonesia', '-6.2740176', '106.7777019'),
(4, 'Kampus D Depok', '+62 217-8881-112', 'Jalan Margonda Raya Nomor. 100,Kelurahan Pondok Cina, Kecamatan Beji\r\n', 'www.maps.google.com', 'Depok', 'Jawa Barat', '-6.3603549', '106.8296217'),
(5, 'kampus E Depok', '+62 - 21 - 78881112', 'Jalan Akses Kelapa 2,Kelurahan Tugu,Kecamatan Cimanggis\r\n', 'www.maps.google.com', 'Depok ', 'Jawa Barat', '-6.3603121', '106.8296217'),
(6, 'Kampus G Depok', '+62 21 78881112', 'Jalan Akses Kelapa 2,Kelurahan Tugu, Kecamatan Cimanggis\r\n', 'www.maps.google.com', 'Depok', 'Jawa Barat', '-6.354329', '106.8413639'),
(7, 'Kampus H Depok', '+62 - 21 - 78881112', 'Jalan Akses Kelapa 2,Kelurahan Tugu, Kecamatan Cimanggis\r\n', 'www.maps.google.com', 'Depok', 'Jawa Barat', '-6.3543076', '106.8347978'),
(8, 'Kampus J1 Kalimalang', '+62 21 88860118', 'Jalan Kiai Haji Noer Ali (Ex. Mall Duta Plaza,Kelurahan Kayuringin Jaya,Kecamatan Bekasi Selatan\r\n\r\n', 'www.maps.google.com', 'Bekasi', 'Jawa Barat', '-6.248526', '106.970686'),
(9, 'Kampus F3 Depok', '', 'JL. Kol (Pol) Pranoto, Tugu, Cimanggis, Tugu, Depok, Kota Depok, Jawa Barat 16451, Indonesia', 'www.maps.google.com', 'Depok', 'Jawa Barat', '-6.3521821', '106.8483371'),
(10, 'Kampus f4 Depok', '', 'Jl. Bogor Raya No.21, Cisalak Ps.Cimanggis, 16452', 'www.maps.google.com', 'Depok', 'Jawa Barat', '-6.3738088', '106.8619795'),
(11, 'Kampus F5 Depok', '', 'Gang Asem, Pondok Cina, Beji, Pd. Cina,16424', 'www.maps.google.com', 'Depok', 'Jawa Barat', '-6.3692642', '106.8348289,'),
(12, 'Kampus L2 Cengkareng', ' +62 21 29428935', ' Komplek Mutiara Taman Palem Blok C7 No. 20, Jl. Raya Outer Ringroad, RT.7/RW.14, Cengkareng Tim.,Cengkareng,11730', 'www.maps.google.com', 'Jakarta Barat', 'Jakarta,Indonesia', '-6.1938656', '106.7764601');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gundar`
--
ALTER TABLE `gundar`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gundar`
--
ALTER TABLE `gundar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
