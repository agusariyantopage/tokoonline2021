-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2021 at 05:26 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbtoko`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(10) NOT NULL,
  `id_kategori` int(10) NOT NULL,
  `nama_barang` varchar(150) NOT NULL,
  `stok` int(10) NOT NULL,
  `harga_modal` int(17) NOT NULL,
  `harga_jual` int(17) NOT NULL,
  `keterangan` text NOT NULL,
  `gambar` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `id_kategori`, `nama_barang`, `stok`, `harga_modal`, `harga_jual`, `keterangan`, `gambar`) VALUES
(1, 1, 'Piatos 15 Gram', 100, 4000, 5000, 'Makanan Enak', 'piatos.jpg'),
(2, 2, 'Pocari Sweat', 50, 3000, 4000, '-', 'pocari.jpg'),
(3, 4, 'Baygon', 10, 29000, 32000, 'Baygon Semprot', 'baygon.jpg'),
(4, 10, 'Sepeda Wimcycle', 10, 1500000, 1750000, '-', 'wimcyacle.jpg'),
(5, 13, 'Raket Yonex', 5, 175000, 200000, '-', 'yonex.jpg'),
(6, 13, 'Sepatu', 10, 45000, 50000, '-', 'sepatu.jpg'),
(7, 1, 'Fiesta Chicken Nugget', 100, 10000, 20000, '-', 'fiesta.jpg'),
(8, 4, 'Sapu', 10, 7000, 10000, 'Merk OK', 'sapu.jpg'),
(10, 17, 'BBCA', 2000, 32000, 32100, 'Pembelian Minimal 1 Lot (100)', 'bca.png');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(10) NOT NULL,
  `kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `kategori`) VALUES
(1, 'Makanan'),
(2, 'Minuman'),
(3, 'Tanaman'),
(4, 'Alat Rumah Tangga'),
(5, 'Hewan Peliharaan'),
(6, 'Charmender'),
(7, 'Digimon'),
(8, 'Miaow'),
(9, 'Pikachu'),
(10, 'Hobi'),
(11, 'Camilan'),
(12, 'Elektronik'),
(13, 'Alat Olahraga'),
(14, 'Kendaraan'),
(15, 'Sea Food'),
(17, 'Saham');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(10) NOT NULL,
  `no_identitas` varchar(20) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `alamat` text NOT NULL,
  `no_telepon` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `no_identitas`, `nama`, `alamat`, `no_telepon`, `email`, `username`, `password`) VALUES
(1, '5171XXXXXX', 'Iqbal Febrian', '-', '08989898', '-', 'iqbal', 'iqbal'),
(2, '5171XXXXXX', 'Deny Pramana', '-', '-', 'denygaminggg@gmail.com', '1234', '1234'),
(3, '5171XXXXXX', 'Edmund ', '-', '08989898', '-', 'edmun', 'edmun'),
(4, '517100034', 'Salsabila Aja', 'Dalung', '08908999879', 'salsabilaajah@gmail.com', 'salsa', 'salsa'),
(5, '5171XXXXXX', 'Irfan Bahdim', '-', '-', 'irfanbahdim@gmail.com', 'irfanbahdim', 'irfanbahdim');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id_pesanan` int(10) NOT NULL,
  `no_tracking` varchar(50) NOT NULL,
  `id_pelanggan` int(10) NOT NULL,
  `nama_penerima` varchar(150) NOT NULL,
  `alamat_penerima` text NOT NULL,
  `tanggal_pemesanan` date NOT NULL,
  `status` varchar(150) NOT NULL,
  `id_provinsi` int(10) NOT NULL,
  `total` int(17) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pesanan_detail`
--

CREATE TABLE `pesanan_detail` (
  `id_pesanan_detail` int(10) NOT NULL,
  `id_pesanan` int(10) NOT NULL,
  `id_barang` int(10) NOT NULL,
  `jumlah` int(17) NOT NULL,
  `harga` int(17) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `provinsi`
--

CREATE TABLE `provinsi` (
  `id_provinsi` int(10) NOT NULL,
  `provinsi` varchar(150) NOT NULL,
  `biaya` int(17) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id_pesanan`);

--
-- Indexes for table `pesanan_detail`
--
ALTER TABLE `pesanan_detail`
  ADD PRIMARY KEY (`id_pesanan_detail`);

--
-- Indexes for table `provinsi`
--
ALTER TABLE `provinsi`
  ADD PRIMARY KEY (`id_provinsi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id_pesanan` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pesanan_detail`
--
ALTER TABLE `pesanan_detail`
  MODIFY `id_pesanan_detail` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `provinsi`
--
ALTER TABLE `provinsi`
  MODIFY `id_provinsi` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
