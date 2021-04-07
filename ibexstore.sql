-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2021 at 06:53 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ibexstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategori_baju`
--

CREATE TABLE `kategori_baju` (
  `id_kategori` int(5) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori_baju`
--

INSERT INTO `kategori_baju` (`id_kategori`, `nama`, `gambar`) VALUES
(1, 'Rain Coat', ''),
(2, 'Jaket', ''),
(3, 'Parka', ''),
(4, 'Trench Coat', '');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_jk`
--

CREATE TABLE `kategori_jk` (
  `id_kategori` int(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori_jk`
--

INSERT INTO `kategori_jk` (`id_kategori`, `nama`, `gambar`) VALUES
(1, 'Pria', ''),
(2, 'Wanita', '');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kategori_jk` int(5) NOT NULL,
  `kategori_baju` int(5) NOT NULL,
  `harga` varchar(20) NOT NULL,
  `ukuran` varchar(5) NOT NULL,
  `keterangan` text NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama`, `kategori_jk`, `kategori_baju`, `harga`, `ukuran`, `keterangan`, `gambar`) VALUES
(1, 'Erigo Coach Jacket Fujinkai Navy', 1, 2, '450000', 'M', 'Coach Jacket Erigo saat ini merupakan salah satu lini pakaian terbaik dan berkualitas tinggi di antara Local Brand Indonesia. Jaket berkerah dengan kancing jepret, saku fungsional, dan karet pada ujung lengan. Coach Jacket Erigo memiliki printed design yang unik pada bagian lengan dan punggung, dengan warna memukau siap menjadikanmu penuh semangat!', ''),
(2, 'AME Raincoat - Lite Series - Mustard', 2, 1, '385000', 'L', 'Lite Series Mustard adalah bagian dari Capsule Collection 20 yang ditujukan untuk menjadi koleksi baru label musim panas AME Raincoat. Koleksi Kapsul ini dibuat sebagai hasil eksplorasi kami dalam mendesain produk. Capsule Collection juga dibuat satu kali saja, jadi kami berharap dapat membuat sesuatu yang berbeda di koleksi berikutnya.', ''),
(3, 'MANGO - TRENCH COAT ZORA', 2, 4, '559000', 'XS', 'Parit model double breasted - Kain katun, desain midi, desain kancing ganda, simpul di bahu, kerah, lengan panjang, saku samping, sabuk yang bisa dilepas, ikat pinggang, simpul di pinggang, kancing ganda, lapisan dalam', ''),
(4, 'MANTEL PRIA DENGAN WOL', 1, 4, '1999900', 'XS', 'MANTEL TERBUAT DARI KAIN HASIL CAMPURAN WOL. KERAH LAPEL DAN LENGAN PANJANG DENGAN BANTALAN BAHU. KANTONG DENGAN LAPEL DAN MODEL PASPOAL DOBEL DI DEPAN. BAGIAN BAWAH DENGAN BELAHAN DI BELAKANG. PENUTUP DEPAN MENYILANG DENGAN KANCING.', ''),
(5, 'MANGO Man Raincoat Hooded Jacket', 1, 1, '1599000', 'M', '- Solid toned raincoat \r\n- Lined\r\n- Hooded neckline\r\n- Regular fit\r\n- Zip with press stud fastening\r\n- 2 pockets\r\n- Polyblend', ''),
(6, 'Hamlin Hardwin Jaket Wanita Quotes Jacket Casual', 2, 2, '1417000', 'M', '- Item Type : Jacket\r\n- Gender : Woman\r\n- Material :  Parasut\r\n- Occassion : Casual\r\n- Neck Style : Hooded\r\n- Front Zipper Opening\r\n- Long Sleeve\r\n- Quotes Motive\r\n- Pockets\r\n- All Size Fit To L\r\n- Lingkar Dada : 96 cm\r\n- Panjang Baju : 77 cm\r\n- Panjang Tangan :54 cm', ''),
(7, 'MKY Clothing Hoody Parka Jacket with Gold Button i', 2, 3, '429000', 'S', 'Hoody Parka Jacket with Gold Button by MKY Clothing\r\n\r\n- jaket parka\r\n- hoody\r\n- sleting dan kancing\r\n- saku\r\n- tali serut pada pinggang\r\n- regular fit', ''),
(8, 'Superdry Squadron Parka', 1, 3, '2919000', 'L', '- Solid tone hooded parka jacket\r\n- Hooded neckline\r\n- Regular fit\r\n- Front button closure\r\n- Mutliple pockets\r\n- Cotton blend\r\n- Model wears an M and is 180cm tall', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategori_baju`
--
ALTER TABLE `kategori_baju`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `kategori_jk`
--
ALTER TABLE `kategori_jk`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`),
  ADD KEY `FK_Produk_KategoriBaju` (`kategori_baju`),
  ADD KEY `FK_Produk_KategoriJK` (`kategori_jk`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategori_baju`
--
ALTER TABLE `kategori_baju`
  MODIFY `id_kategori` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kategori_jk`
--
ALTER TABLE `kategori_jk`
  MODIFY `id_kategori` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `FK_Produk_KategoriBaju` FOREIGN KEY (`kategori_baju`) REFERENCES `kategori_baju` (`id_kategori`),
  ADD CONSTRAINT `FK_Produk_KategoriJK` FOREIGN KEY (`kategori_jk`) REFERENCES `kategori_jk` (`id_kategori`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
