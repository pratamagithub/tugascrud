-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2019 at 02:00 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gocamp`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` varchar(6) NOT NULL,
  `nama_admin` varchar(30) NOT NULL,
  `email_admin` varchar(20) NOT NULL,
  `username_admin` varchar(15) NOT NULL,
  `password_admin` varchar(20) NOT NULL,
  `nohp_admin` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `nama_admin`, `email_admin`, `username_admin`, `password_admin`, `nohp_admin`) VALUES
('ADM001', 'MUHAMMAD REZA AKBAR ', 'reza123@gmail.com', 'reza001', 'bismillah', '081330213257'),
('ADM002', 'MUHAMMAD RIZA RUZDIANA', 'rizaaa123', 'rizagood', 'rizaganteng', '081234789257');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_barang`
--

CREATE TABLE `tbl_barang` (
  `id_barang` varchar(6) NOT NULL,
  `id_kategoriBarang` varchar(6) NOT NULL,
  `nama_barang` varchar(20) NOT NULL,
  `merek_barang` varchar(15) NOT NULL,
  `harga_barang` int(11) NOT NULL,
  `stok_barang` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_barang`
--

INSERT INTO `tbl_barang` (`id_barang`, `id_kategoriBarang`, `nama_barang`, `merek_barang`, `harga_barang`, `stok_barang`) VALUES
('BRG001', 'KTB001', 'TAS RANSEL 60-80 ltr', 'REI', 12500, 10),
('BRG002', 'KTB002', 'TENDA DOME kap. 2-3 ', 'REI', 17500, 4),
('BRG003', 'KTB003', 'TENDA DOME kap. 5-6 ', 'REI', 40000, 3),
('BRG004', 'KTB004', 'SLEEPING BAG', 'EIGER', 7500, 5),
('BRG005', 'KTB005', 'KOMPOR GAS', 'RINAI', 7500, 3),
('BRG006', 'KTB006', 'MATRAS', 'CONSINA', 2500, 5),
('BRG007', 'KTB007', 'SENTER (CHARGER)', 'SWAT', 7500, 5),
('BRG008', 'KTB008', 'SARUNG TANGAN', 'CONSINA', 5000, 7),
('BRG009', 'KTB009', 'HEAD LAMP (TANPA BAT', 'ENERGIZER', 5000, 3),
('BRG010', 'KTB010', 'GENSET', 'FIRMAN', 200000, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_denda`
--

CREATE TABLE `tbl_denda` (
  `id_peminjaman` varchar(6) NOT NULL,
  `id_pengembalian` varchar(6) NOT NULL,
  `status_denda` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_detailpeminjaman`
--

CREATE TABLE `tbl_detailpeminjaman` (
  `id_peminjaman` varchar(6) NOT NULL,
  `id_barang` varchar(6) NOT NULL,
  `jumlah_detailBarang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kategoribarang`
--

CREATE TABLE `tbl_kategoribarang` (
  `id_kategoriBarang` varchar(6) NOT NULL,
  `nama_kategoriBarang` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_peminjaman`
--

CREATE TABLE `tbl_peminjaman` (
  `id_peminjaman` int(11) NOT NULL,
  `id_user` varchar(6) NOT NULL,
  `id_barang` varchar(6) NOT NULL,
  `tgl_booking` date NOT NULL,
  `durasi_peminjaman` int(11) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `status_peminjaman` varchar(10) NOT NULL,
  `metode_pembayaran` varchar(6) NOT NULL,
  `total_harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengembalian`
--

CREATE TABLE `tbl_pengembalian` (
  `id_pengembalian` varchar(6) NOT NULL,
  `id_peminjaman` varchar(6) NOT NULL,
  `tgl_pengembalian` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` varchar(6) NOT NULL,
  `nama_user` varchar(20) NOT NULL,
  `username_user` varchar(15) NOT NULL,
  `password_user` varchar(20) NOT NULL,
  `alamat_user` varchar(25) NOT NULL,
  `email_user` varchar(20) NOT NULL,
  `nohp_user` varchar(13) NOT NULL,
  `status_user` varchar(10) NOT NULL,
  `foto_user` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nama_user`, `username_user`, `password_user`, `alamat_user`, `email_user`, `nohp_user`, `status_user`, `foto_user`) VALUES
('USR001', 'GABRIELA CAROLINE', 'gabriel', 'gabyyy123', 'NGANJUK', 'gabrielacaroline688@', '081259144711', 'MAHASISWA', ''),
('USR002', 'ABDUL KHOLIQ', 'kholiq1122', 'kholiq12345', 'JEMBER', 'abdulkholiq12@gmail.', '081330963257', 'MAHASISWA', ''),
('USR003', 'ROZA NURIL', 'rozagans', 'rozaganteng12', 'JEMBER', 'cacaroza12@gmail.com', '085689012378', 'MAHASISWA', ''),
('USR004', 'ALDI RYAN HILMAWAN', 'aldi123', 'aldi000', 'AMBULU', 'aldiryanhah09@gmail.', '089912378912', 'MAHASISWA', ''),
('USR006', 'ADITYA PRATAMA', 'adit12', 'pratama123', 'PROBOLINGGO', 'aditpra12@gmail.com', '085234890760', 'MAHASISWA', ''),
('USR007', 'AWALUDIN NUR MUHAMMA', 'udinyangpertama', 'udinpertama', 'PROBOLINGGO', 'udin123@gmail.com', '089711678009', 'MAHASISWA', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tbl_barang`
--
ALTER TABLE `tbl_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `tbl_kategoribarang`
--
ALTER TABLE `tbl_kategoribarang`
  ADD PRIMARY KEY (`id_kategoriBarang`);

--
-- Indexes for table `tbl_peminjaman`
--
ALTER TABLE `tbl_peminjaman`
  ADD PRIMARY KEY (`id_peminjaman`);

--
-- Indexes for table `tbl_pengembalian`
--
ALTER TABLE `tbl_pengembalian`
  ADD PRIMARY KEY (`id_pengembalian`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
