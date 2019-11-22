-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2019 at 09:50 AM
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
  `nama_barang` varchar(35) NOT NULL,
  `harga_barang` int(11) NOT NULL,
  `stok_barang` int(2) NOT NULL,
  `deskripsi_barang` varchar(1500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_barang`
--

INSERT INTO `tbl_barang` (`id_barang`, `id_kategoriBarang`, `nama_barang`, `harga_barang`, `stok_barang`, `deskripsi_barang`) VALUES
('BRG001', 'KTB001', 'TAS RANSEL 60-80 ltr', 18000, 10, 'TAS RANSEL 60-80 LITER\r\nBagi yang suka berpetualang, mendaki gunung, atau backpacker, tas gunung sangat cocok untuk anda gunakan. Ukurannya yang besar, banyak sekat dan kait dapat membawa semua keperluan dalam 1 tas saja.\r\n\r\n======================================================\r\nSpesifikasi : \r\n- Memiliki ukuran 60-80 ltr\r\n- Water resist (air tidak langsung menembus, bagian seleting tertutup bahan)\r\n- Scratch Resist (tahan gores, tahan lama)\r\n- Tersedia pengikat dada dan perut untuk kemudahan saat membawa beban yang berat.\r\n- Tempat penyimpanan dapat dikencang dengan tali sesuai kapasitas untuk menanhan guncangan.\r\n======================================================\r\n\r\nSelamat Berpetualang! #outdoor #gunung #alatcamping #tasransel #camping #olahraga #sport'),
('BRG002', 'KTB002', 'TENDA DOME kap. 2-3 org', 25000, 4, 'TENDA DOME KAPASITAS 2-3 ORANG \r\nTenda camping atau tenda luar ruangan yang terbuat dari  bahan berkualitas tinggi. Lapisan tahan air sehingga dapat melindungi dari hujan. \r\nTenda dapat dipakai saat Camping di gunung atau berlibur  di pantai, dapat digunakan untuk berteduh di pantai atau berteduh saat hujan di gunung.\r\n\r\n====================================================== \r\nSpesifikasi :  \r\n- Memiliki kapasitas hingga 2-3 orang \r\n- Lapisan tahan air sehingga dapat melindungi dari  hujan\r\n- Terbuat dari bahan yang ramah lingkungan dan aman\r\n- Mudah didirikan dan tidak mudah rusak.\r\n======================================================\r\n\r\nSelamat Berpetualang! #outdoor #gunung #alatcamping \r\n#tenda #camping #olahraga #sport'),
('BRG003', 'KTB002', 'TENDA DOME kap. 5-6 org', 65000, 3, 'TENDA DOME KAPASITAS 5-6 ORANG\r\nTenda camping atau tenda luar ruangan yang terbuat dari \r\nbahan berkualitas tinggi. Lapisan tahan air sehingga dapat\r\nmelindungi dari hujan.\r\nTenda dapat dipakai saat Camping di gunung atau berlibur \r\ndi pantai, dapat digunakan untuk berteduh di pantai atau\r\nberteduh saat hujan di gunung.\r\n\r\n======================================================\r\nSpesifikasi : \r\n- Memiliki kapasitas hingga 5-6 orang\r\n- Lapisan tahan air sehingga dapat melindungi dari \r\nhujan\r\n- Terbuat dari bahan yang ramah lingkungan dan aman\r\n- Mudah didirikan dan tidak mudah rusak.\r\n======================================================\r\n\r\nSelamat Berpetualang! #outdoor #gunung #alatcamping \r\n#tenda #camping #olahraga #sport'),
('BRG004', 'KTB004', 'SLEEPING BAG', 10000, 5, 'SLEEPING BAG\r\nSeeping bag yang dirancang untuk memastikan bahwa setelah hari yang melelahkan trekking, hiking, perjalanan atau eksplorasi lainnya Anda bisa mendapatkan tidur malam yang baik dan santai.\r\n\r\n======================================================\r\nSpesifikasi : \r\n- Hangat, ramah kulit, dan praktis.\r\n- Dapat berupa selimut, penyimpanan dapat digunakan sebagai bantal.\r\n- Terbuat dari bahan berkualitas tinggi.\r\n======================================================\r\n\r\nSelamat Berpetualang! #outdoor #gunung #alatcamping #bantal #sleepingbag #camping #olahraga #sport'),
('BRG005', 'KTB005', 'KOMPOR GAS LAPANG', 10000, 3, 'KOMPOR GAS LAPANG \r\nKompor Camping Portable Kotak yang mudah digunakan, cocok untuk dibawa camping / hiking.\r\nBahan bakar menggunakan gas tabung. Bentuknya yang mini \r\nmudah dibawa kemana-mana, mudah dinyalakan dan aman \r\n\r\n======================================================\r\nSpesifikasi : \r\n- Material : copper stainless stel \r\n- Tipe bahan bakar : butane/ propane\r\n======================================================\r\n\r\nSelamat Berpetualang! #masak #outdoor #gunung #alatcamping \r\n#kompor '),
('BRG006', 'KTB006', 'MATRAS', 3500, 5, 'MATRAS\r\nSangat cocok digunakan untuk camping. Berfungsi sebagai alas tenda, alas untuk beristirahat dan alas untuk tempat sholat.\r\n\r\n\r\n======================================================\r\nSpesifikasi :\r\n- Lembut nyaman untuk bersantai.\r\n- Didesain mudah dibawa.\r\n- Tahan air, anti debu, bisa dicuci\r\n======================================================\r\n\r\nSelamat Berpetualang! #outdoor #gunung #alatcamping #matras #camping #olahraga #sport'),
('BRG007', 'KTB007', 'SENTER SWAT (CHARGER)', 10000, 5, 'SENTER SWAT (CHARGER)\r\nSangat cocok untuk rumah tangga, kegiatan luar ruangan, hiking, memancing malam, berkemah, dll.\r\n\r\n======================================================\r\nSpesifikasi :\r\n- Dilengkapi dengan port charger USB.\r\n======================================================\r\n\r\nSelamat Berpetualang! #outdoor #gunung #alatcamping #senter #lighting #camping #olahraga #sport'),
('BRG008', 'KTB008', 'SARUNG TANGAN', 7000, 7, 'SARUNG TANGAN\r\nSarung tangan sangat cocok untuk kegiatan di luar ruangan, yang \r\n memberikan kenyamanan dan kehangatan dalam perlindungan tangan Anda. Cocok untuk bermain ski, seluncur salju, bersepeda, hiking, sepeda motor, \r\nolahraga outdoor, dll.\r\n\r\n======================================================\r\nSpesifikasi :\r\n- Tahan angin aktivitas.\r\n- Bentuk ergonomis & melar menyesuaikan bentuk tangan pengguna.\r\n- Sarung tangan jari yang fleksibel.\r\n======================================================\r\n\r\nSelamat Berpetualang! #outdoor #gunung #alatcamping #sarungtangan #camping #olahraga #sport'),
('BRG009', 'KTB007', 'HEAD LAMP (TANPA BATERAI)', 7000, 3, 'HEADLAMP (TANPA BATERAI)\r\nHeadlamp adalah perlengkapan wajib bagi para petualang luar ruang. Headlamp (lampu kepala) ini memiliki 4 fungsi pencahayaan, yakni High-Low-Flash-Off. \r\nSangat cocok digunakan untuk kegiatan outdoor seperti camping, hiking, trekking, dan susur gua.\r\n\r\n======================================================\r\nSpesifikasi :\r\n- Dilengkapi dengan port charger USB.\r\n- Lama waktu pakai maksimal 4 jam.\r\n- Bola lampu LED.\r\n======================================================\r\n\r\nSelamat Berpetualang! #outdoor #gunung #alatcamping #senter #headlamp #lighting #camping #olahraga #sport'),
('BRG010', 'KTB010', 'GENSET', 300000, 2, 'GENSET\r\nGenset Gasoline/Bensin yang tangguh dan hemat bahan bakar, r, tangguh, ekonomis dan teruji kualitasnya.\r\n\r\n======================================================\r\nSpesifikasi :\r\n- Dilengkapi dengan port charger USB.\r\n- Lama waktu pakai maksimal 4 jam.\r\n- Bola lampu LED.\r\n======================================================\r\n\r\nSelamat Berpetualang! #outdoor #gunung #alatcamping #genset #lighting #camping #olahraga #sport'),
('BRG011', 'KTB002', 'TENDA DOME kap. 3-4 org', 35000, 5, 'TENDA DOME KAPASITAS 3-4 ORANG\r\nTenda camping atau tenda luar ruangan yang terbuat dari \r\nbahan berkualitas tinggi. Lapisan tahan air sehingga dapat\r\nmelindungi dari hujan.\r\nTenda dapat dipakai saat Camping di gunung atau berlibur \r\ndi pantai, dapat digunakan untuk berteduh di pantai atau\r\nberteduh saat hujan di gunung.\r\n\r\n======================================================\r\nSpesifikasi : \r\n- Memiliki kapasitas hingga 3-4 orang\r\n- Lapisan tahan air sehingga dapat melindungi dari \r\nhujan\r\n- Terbuat dari bahan yang ramah lingkungan dan aman\r\n- Mudah didirikan dan tidak mudah rusak.\r\n======================================================\r\n\r\nSelamat Berpetualang! #outdoor #gunung #alatcamping \r\n#tenda #camping #olahraga #sport'),
('BRG012', 'KTB002', 'TENDA DOME kap. 4-5 org', 40000, 5, 'TENDA DOME KAPASITAS 4-5 ORANG\r\nTenda camping atau tenda luar ruangan yang terbuat dari \r\nbahan berkualitas tinggi. Lapisan tahan air sehingga dapat\r\nmelindungi dari hujan.\r\nTenda dapat dipakai saat Camping di gunung atau berlibur \r\ndi pantai, dapat digunakan untuk berteduh di pantai atau\r\nberteduh saat hujan di gunung.\r\n\r\n======================================================\r\nSpesifikasi : \r\n- Memiliki kapasitas hingga 4-5 orang\r\n- Lapisan tahan air sehingga dapat melindungi dari \r\nhujan\r\n- Terbuat dari bahan yang ramah lingkungan dan aman\r\n- Mudah didirikan dan tidak mudah rusak.\r\n======================================================\r\n\r\nSelamat Berpetualang! #outdoor #gunung #alatcamping \r\n#tenda #camping #olahraga #sport'),
('BRG013', 'KTB002', 'TENDA PRAMUKA / PRISMA', 45000, 5, 'TENDA PRISMA / PRAMUKA\r\nTenda camping atau tenda luar ruangan yang terbuat dari bahan berkualitas tinggi. Lapisan tahan air sehingga dapat melindungi dari hujan. Tenda dapat dipakai saat Camping di gunung atau berlibur di pantai, dapat digunakan untuk berteduh di pantai atau berteduh saat hujan di gunung.\r\n\r\n======================================================\r\nSpesifikasi : \r\n- Lapisan tahan air sehingga dapat melindungi dari \r\nhujan\r\n- Terbuat dari bahan yang ramah lingkungan dan aman\r\n- Mudah didirikan dan tidak mudah rusak.\r\n======================================================\r\n\r\nSelamat Berpetualang! #outdoor #gunung #alatcamping #kompor #camping #olahraga #sport'),
('BRG014', 'KTB001', 'TAS RANSEL 100 ltr', 23000, 5, 'TAS RANSEL 100 LITER\r\nBagi yang suka berpetualang, mendaki gunung, atau backpacker, tas gunung sangat cocok untuk anda gunakan. Ukurannya yang besar, banyak sekat dan kait dapat membawa semua keperluan dalam 1 tas saja.\r\n\r\n======================================================\r\nSpesifikasi : \r\n- Memiliki ukuran 100 ltr\r\n- Water resist (air tidak langsung menembus, bagian \r\nseleting tertutup bahan)\r\n- Scratch Resist (tahan gores, tahan lama)\r\n- Tersedia pengikat dada dan perut untuk kemudahan \r\nsaat membawa beban yang berat.\r\n- Tempat penyimpanan dapat dikencang dengan tali sesuai kapasitas untuk menanhan guncangan.\r\n======================================================\r\n\r\nSelamat Berpetualang! #outdoor #gunung #alatcamping #tasransel #camping #olahraga #sport'),
('BRG015', 'KTB011', 'FLY SHEET uk. 3m X 4m', 18000, 5, 'FLY SHEET\r\nTenda Darurat Waterproof. \r\nTerbuat dari bahan anti air yang fungsinya digunakan sebagai pelindung tenda dari hujan maupun cuaca. Selain itu Flysheet juga berfungsi sebagai pengganti tenda, dalam keadaan darurat fungsi dari flysheet ini mampu memberi perlindungan untuk bermalam atau saat kondisi hujan.\r\n\r\n======================================================\r\nSpesifikasi :\r\n- Ukuran 3m x 4m.\r\n- Bahan waterproof (tahan air).\r\n- Tidak mudah robek.\r\n======================================================\r\n\r\nSelamat Berpetualang! #outdoor #gunung #alatcamping #flysheet #camping #olahraga #sport'),
('BRG016', 'KTB005', 'NESTING / COOKING SET', 10000, 5, 'NESTING / COOKING SET\r\nCooking Set / Nesting Untuk Camping\r\n\r\n======================================================\r\nSpesifikasi :\r\n- Berbahan dasar teflon sehingga anti lengket.\r\n- Sangat cocok untuk dibawa camping / hiking.\r\n======================================================\r\n\r\nSelamat Berpetualang! #outdoor #gunung #alatcamping #nesting #cookingset #camping #olahraga #sport'),
('BRG017', 'KTB003', 'GAITER', 7000, 5, 'GAITER\r\nUntuk melindungi sepatu bot dan celana panjang Anda dari hujan, air dan lumpur, ini adalah pilihan terbaik Anda. Cocok untuk bermain ski, hiking, memancing, berburu, dan kegiatan luar ruangan lainnya.\r\n\r\n\r\n======================================================\r\nSpesifikasi :\r\n- Sangat mudah dibersihkan dan dibawa.\r\n- Nyaman digunakan.\r\n- Membuat kaki Anda hangat\r\n- Tahan cuaca yang luar biasa.\r\n======================================================\r\n\r\nSelamat Berpetualang! #outdoor #gunung #alatcamping #gaiter #camping #olahraga #sport'),
('BRG018', 'KTB012', 'DAYPACK 40 ltr', 13000, 6, 'DAYPACK 40 LITER\r\nCocok digunakan untuk sekolah, travelling. Terbuat dari bahan polyester berkualitas. Dilengkapi dengan rain cover bag yang digunakan sebagai mantel untuk melindungi tas anda ketika hujan.\r\n\r\n======================================================\r\nSpesifikasi :\r\n- Ukuran 40 ltr\r\n- 2 saku samping.\r\n======================================================\r\n\r\nSelamat Berpetualang! #outdoor #gunung #alatcamping #tas #daypack #camping #olahraga #sport'),
('BRG019', 'KTB013', 'ACTION CAMERA', 45000, 4, 'ACTION CAMERA\r\nOriginal Action Camera, Waterproof Sport DV, Sport Camcorder Video Time-lapse Otomatis, Sudut Lebar.\r\n\r\n======================================================\r\nSpesifikasi :\r\n- Frekuensi: 1.0GHz\r\n- Ukuran: 2,0 \"\r\n- Resolusi: 320x240\r\n- Sensor: CMOS\r\n- Pixel: 8.0MP\r\n- Jenis Fokus: Tetap\r\n- Sudut: 140 derajat\r\n- Kuantitas Lensa: 1\r\n- WiFi: 2.4G 802.11 / b / g / n\r\n- Remote control RF: Opsional\r\n- Kapasitas Baterai: Li-ion 3.7V 900mAh\r\n- Daya tahan baterai: 1,5 jam\r\n- Input: 100 ~ 240VAC\r\n- Output: 5.0V / 1.0A\r\n- Waktu Pengisian Daya: 1,5 jam\r\n======================================================\r\n\r\nSelamat Berpetualang! #outdoor #gunung #alatcamping #camera #foto #camping #olahraga #sport'),
('BRG020', 'KTB001', 'COVER BAG uk. 60 -80 ltr', 3500, 6, 'COVER BAG\r\nCover bag Anti Air merupakan cover tas yang membuat tas Anda lebih terjaga saat hujan. Cover bag ini dibuat dari material yang berkualitas tinggi dan tahan lama dalam penggunaannya. Selain itu, cover bag ini juga cocok digunakan untuk menyimpan tas Anda saat tidak digunakan.\r\n\r\n======================================================\r\nSpesifikasi :\r\n- Ukuran 60-80 liter\r\n- Anti Air\r\n- Material yang berkualitas\r\n- Tahan lama\r\n======================================================\r\n\r\nSelamat Berpetualang! #outdoor #gunung #alatcamping #tas #coverbag #camping #olahraga #sport'),
('BRG021', 'KTB005', 'TABUNG GAS + isi (200gr)', 6000, 5, 'TABUNG GAS \r\nTabung gas portable ini merupakan sistem pembuangan gas dari catridge. Saat terjadi tekanan gas yang tinggi, gas akan keluar secara otomatis sedikit demi sedikit melalui lubang lubang kecil yang ada di bagian atas kaleng gas dan tidak menimbulkan ledakan yang dapat mengancam jiwa dan harta benda anda.\r\n======================================================\r\nSpesifikasi :\r\n- Kemasan kaleng\r\n- Type Gas Butane\r\n- Isi 200gr\r\n======================================================\r\n\r\nSelamat Berpetualang! #outdoor #gunung #alatcamping #gas #kompor #masak #camping #olahraga #sport');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_detailpeminjaman`
--

CREATE TABLE `tbl_detailpeminjaman` (
  `id_peminjaman` varchar(6) NOT NULL,
  `id_barang` varchar(6) NOT NULL,
  `jumlah_detailBarang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_detailpeminjaman`
--

INSERT INTO `tbl_detailpeminjaman` (`id_peminjaman`, `id_barang`, `jumlah_detailBarang`) VALUES
('PMJ001', 'BRG005', 1),
('PMJ002', 'BRG006', 1),
('PMJ003', 'BRG010', 1),
('PMJ004', 'BRG002', 1),
('PMJ005', 'BRG001', 1),
('PMJ006', 'BRG005', 1),
('PMJ007', 'BRG006', 1),
('PMJ008', 'BRG004', 1),
('PMJ009', 'BRG009', 1),
('PMJ010', 'BRG010', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kategoribarang`
--

CREATE TABLE `tbl_kategoribarang` (
  `id_kategoriBarang` varchar(6) NOT NULL,
  `nama_kategoriBarang` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kategoribarang`
--

INSERT INTO `tbl_kategoribarang` (`id_kategoriBarang`, `nama_kategoriBarang`) VALUES
('KTB001', 'TAS RANSEL'),
('KTB002', 'TENDA'),
('KTB003', 'GAITER'),
('KTB004', 'SLEEPING BAG'),
('KTB005', 'KOMPOR GAS'),
('KTB006', 'MATRAS'),
('KTB007', 'SENTER'),
('KTB008', 'SARUNG TANGAN'),
('KTB010', 'GENSET'),
('KTB011', 'FLY SHEET'),
('KTB012', 'DAYPACK'),
('KTB013', 'KAMERA');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_peminjaman`
--

CREATE TABLE `tbl_peminjaman` (
  `id_peminjaman` varchar(6) NOT NULL,
  `id_user` varchar(6) NOT NULL,
  `tgl_booking` date NOT NULL,
  `durasi_peminjaman` int(11) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `status_peminjaman` varchar(10) NOT NULL,
  `metode_pembayaran` varchar(6) NOT NULL,
  `total_harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_peminjaman`
--

INSERT INTO `tbl_peminjaman` (`id_peminjaman`, `id_user`, `tgl_booking`, `durasi_peminjaman`, `tgl_pinjam`, `status_peminjaman`, `metode_pembayaran`, `total_harga`) VALUES
('PMJ001', 'USR001', '2019-10-31', 2, '2019-11-03', 'DIPINJAM', 'TRANSF', 15000),
('PMJ002', 'USR002', '2019-11-01', 4, '2019-11-05', 'DIPINJAM', 'TRANSF', 10000),
('PMJ003', 'USR003', '2019-10-28', 1, '2019-10-31', 'DIPINJAM', 'COD', 200000),
('PMJ004', 'USR004', '2019-10-29', 3, '2019-11-01', 'DIPINJAM', 'COD', 52500),
('PMJ005', 'USR005', '2019-10-24', 4, '2019-10-29', 'TERPINJAM', 'COD', 50000),
('PMJ006', 'USR006', '2019-10-28', 3, '2019-10-30', 'TERPINJAM', 'TRANSF', 22500),
('PMJ007', 'USR007', '2019-10-23', 4, '2019-10-29', 'TERPINJAM', 'COD', 10000),
('PMJ008', 'USR008', '2019-10-30', 5, '2019-11-05', 'DIPINJAM', 'COD', 37500),
('PMJ009', 'USR009', '2019-10-23', 3, '2019-10-30', 'DIPINJAM', 'COD', 15000),
('PMJ010', 'USR010', '2019-10-27', 1, '2019-10-30', 'TERPINJAM', 'TRANSF', 200000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengembalian`
--

CREATE TABLE `tbl_pengembalian` (
  `id_pengembalian` varchar(6) NOT NULL,
  `id_peminjaman` varchar(6) NOT NULL,
  `tgl_pengembalian` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pengembalian`
--

INSERT INTO `tbl_pengembalian` (`id_pengembalian`, `id_peminjaman`, `tgl_pengembalian`) VALUES
('PGB001', 'PMJ001', '2019-11-05'),
('PGB002', 'PMJ002', '2019-11-09'),
('PGB003', 'PMJ003', '2019-11-01'),
('PGB004', 'PMJ004', '2019-11-04'),
('PGB005', 'PMJ005', '2019-11-02'),
('PGB006', 'PMJ006', '2019-11-02'),
('PGB007', 'PMJ007', '2019-11-02'),
('PGB008', 'PMJ008', '2019-11-10'),
('PGB009', 'PMJ009', '2019-11-02'),
('PGB010', 'PMJ010', '2019-10-31');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` varchar(6) NOT NULL,
  `nama_user` varchar(25) NOT NULL,
  `username_user` varchar(15) NOT NULL,
  `password_user` varchar(20) NOT NULL,
  `alamat_user` varchar(25) NOT NULL,
  `email_user` varchar(40) NOT NULL,
  `nohp_user` varchar(13) NOT NULL,
  `status_user` varchar(10) NOT NULL,
  `foto_user` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nama_user`, `username_user`, `password_user`, `alamat_user`, `email_user`, `nohp_user`, `status_user`, `foto_user`) VALUES
('USR001', 'GABRIELA CAROLINE', 'gabriel', 'gabyyy123', 'NGANJUK', 'gabrielacaroline688@gmail.com', '081259144711', 'MAHASISWA', ''),
('USR002', 'ABDUL KHOLIQ', 'kholiq1122', 'kholiq12345', 'JEMBER', 'abdulkholiq12@gmail.', '081330963257', 'MAHASISWA', ''),
('USR003', 'ROZA NURIL', 'rozagans', 'rozaganteng12', 'JEMBER', 'cacaroza12@gmail.com', '085689012378', 'MAHASISWA', ''),
('USR004', 'ALDI RYAN HILMAWAN', 'aldi123', 'aldi000', 'AMBULU', 'aldiryanhah09@gmail.', '089912378912', 'MAHASISWA', ''),
('USR005', 'FRENGKIELISTANTO', 'frengs12', 'frengsky', 'LUMAJANG', 'frengki12@gmail.com', '089556890085', 'MAHASISWA', ''),
('USR006', 'ADITYA PRATAMA', 'adit12', 'pratama123', 'PROBOLINGGO', 'aditpra12@gmail.com', '085234890760', 'MAHASISWA', ''),
('USR007', 'AWALUDIN NUR MUHAMMA', 'udinyangpertama', 'udinpertama', 'PROBOLINGGO', 'udin123@gmail.com', '089711678009', 'MAHASISWA', ''),
('USR008', 'NEVARIDA SINDI', 'nev12', 'nevarud12', 'TUBAN', 'nevarida12@gmail.com', '081445879000', 'MAHASISWA', ''),
('USR009', 'AYU KUSUMA NINGRUM', 'ayukus12', 'kusuma12', 'NGANJUK', 'ayukusuma12@gmail.co', '087658900789', 'MAHASISWA', ''),
('USR010', 'RONALD RICHARD', 'ronald12', 'ronaldganteng', 'MAKASSAR', 'ronald12@gmail.com', '081335789000', 'MAHASISWA', '');

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
  ADD PRIMARY KEY (`id_barang`),
  ADD KEY `id_kategoriBarang` (`id_kategoriBarang`);

--
-- Indexes for table `tbl_detailpeminjaman`
--
ALTER TABLE `tbl_detailpeminjaman`
  ADD KEY `id_barang` (`id_barang`),
  ADD KEY `id_barang_2` (`id_barang`),
  ADD KEY `id_barang_3` (`id_barang`),
  ADD KEY `id_peminjaman` (`id_peminjaman`) USING BTREE;

--
-- Indexes for table `tbl_kategoribarang`
--
ALTER TABLE `tbl_kategoribarang`
  ADD PRIMARY KEY (`id_kategoriBarang`);

--
-- Indexes for table `tbl_peminjaman`
--
ALTER TABLE `tbl_peminjaman`
  ADD PRIMARY KEY (`id_peminjaman`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `tbl_pengembalian`
--
ALTER TABLE `tbl_pengembalian`
  ADD PRIMARY KEY (`id_pengembalian`),
  ADD KEY `id_peminjaman` (`id_peminjaman`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_barang`
--
ALTER TABLE `tbl_barang`
  ADD CONSTRAINT `tbl_barang_ibfk_1` FOREIGN KEY (`id_kategoriBarang`) REFERENCES `tbl_kategoribarang` (`id_kategoriBarang`);

--
-- Constraints for table `tbl_detailpeminjaman`
--
ALTER TABLE `tbl_detailpeminjaman`
  ADD CONSTRAINT `tbl_detailpeminjaman_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `tbl_barang` (`id_barang`),
  ADD CONSTRAINT `tbl_detailpeminjaman_ibfk_2` FOREIGN KEY (`id_peminjaman`) REFERENCES `tbl_peminjaman` (`id_peminjaman`);

--
-- Constraints for table `tbl_peminjaman`
--
ALTER TABLE `tbl_peminjaman`
  ADD CONSTRAINT `tbl_peminjaman_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tbl_user` (`id_user`);

--
-- Constraints for table `tbl_pengembalian`
--
ALTER TABLE `tbl_pengembalian`
  ADD CONSTRAINT `tbl_pengembalian_ibfk_1` FOREIGN KEY (`id_peminjaman`) REFERENCES `tbl_peminjaman` (`id_peminjaman`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
