-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2020 at 09:14 PM
-- Server version: 10.4.8-MariaDB-log
-- PHP Version: 7.2.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rekwebss2020_143040225`
--

-- --------------------------------------------------------

--
-- Table structure for table `makanan`
--

CREATE TABLE `makanan` (
  `ID` int(10) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Jenis` varchar(50) NOT NULL,
  `Rating` varchar(50) NOT NULL,
  `Deskripsi` varchar(50) NOT NULL,
  `Gambar` varchar(50) NOT NULL,
  `Ulasan` varchar(50) NOT NULL,
  `Rekomendasi` varchar(50) NOT NULL,
  `Promo` float NOT NULL DEFAULT 0,
  `Harga` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `makanan`
--

INSERT INTO `makanan` (`ID`, `Nama`, `Jenis`, `Rating`, `Deskripsi`, `Gambar`, `Ulasan`, `Rekomendasi`, `Promo`, `Harga`) VALUES
(1, 'Cireng', 'Makanan Ringan', '10/10', 'Makanan Ringan dengan berbagai varian bumbu', 'nasimawut.jpg', 'cirengnya empuk dan bumbunya terasa', 'Ya', 0, 10000),
(2, 'Baso', 'Makanan Berat', '8/10', 'Makanan berat dengna berbagai varian mie dan sayur', 'baso.jpg', 'porsinya banyak akan tetapi tidak terlalu gurih', 'Tidak', 0.2, 20000),
(3, 'Risoles', 'Makanan Ringan', '7/10', 'Makanan ringan berisi sayuran dan juga daging ayam', 'risoles.jpg', 'isi sayuran dan daging ayamnya banyak', 'Tidak', 0, 10000),
(4, 'Donut', 'Makanan Ringan', '8/10', 'Makanan ringan berjenis kue dengan rasa manis', 'donut.jpg', 'donut nya empuk', 'Tidak', 0, 10000),
(5, 'Nasi Goreng', 'Makanan berat', '9/10', 'Makanan berat berjenis nasi dan juga varian toping', 'nasigoreng.jpg', 'porsinya banyak rasanya enak', 'Ya', 0.1, 25000),
(6, 'Nasi Mawut', 'Makanan berat', '9/10', 'Makanan berat kombinasi antara nasi dan mie goreng', 'nasimawut.jpg', 'nasinya enak akan tetapi mie nya kurang banyak', 'Ya', 0.1, 30000),
(7, 'Tahu Pedas', 'Makanan ringan', '8/10', 'Makanan ringan dari bahan baku tahu dengan bumbu p', 'tahupedas.jpg', 'terlalu pedas', 'Tidak', 0, 15000),
(8, 'Kentang Goreng', 'Makanan ringan', '9/10', 'Makanan ringan dengan bahan baku kentang dan bumbu', 'kentanggoreng.jpg', 'gurih mantap', 'Ya', 0, 15000),
(9, 'Sosis Goreng', 'Makanan ringan', '9/10', 'Makanan ringan berbahan sosis', 'sosisgoreng.jpg', 'sosisnya empuk bukan sosis abal abal', 'Ya', 0, 15000),
(10, 'Nasi Ayam', 'Makanan berat', '10/10', 'Makanan berat berbahan nasi dan ayam goreng', 'nasiayam.jpg', 'ayamnya banyak sekali mantap oke punya', 'Ya', 0.1, 30000),
(11, 'Nasi', 'Berat', '8/10', 'Nasi', 'nasigoreng.jpg', 'Enak', 'Ya', 0, 20000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `makanan`
--
ALTER TABLE `makanan`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `makanan`
--
ALTER TABLE `makanan`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
