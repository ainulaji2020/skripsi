-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2022 at 02:37 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `showroom`
--

-- --------------------------------------------------------

--
-- Table structure for table `kontak_kami`
--

CREATE TABLE `kontak_kami` (
  `id_kontak` int(5) NOT NULL,
  `nama_kontak` varchar(20) NOT NULL,
  `email_kontak` varchar(20) NOT NULL,
  `alamat_kontak` text NOT NULL,
  `is_delete` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kontak_kami`
--

INSERT INTO `kontak_kami` (`id_kontak`, `nama_kontak`, `email_kontak`, `alamat_kontak`, `is_delete`) VALUES
(1, 'ainul', '1234', 'tes', 0),
(2, 'opang', '0', 'shorom bagus', 1),
(3, 'opang', '0', 'shorom bagus', 1),
(4, 'opang', '0', 'shorom bagus', 0),
(5, 'Aisah', 'Aisah@gmail', 'Mobil Nya kurang enak di bagian masukin gigi', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(5) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `nama` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `email`, `password`, `nama`) VALUES
(1, 'admin@gmail.com', '7488e331b8b64e5794da3fa4eb10ad5d', 'Admin Rental');

-- --------------------------------------------------------

--
-- Table structure for table `tb_customer`
--

CREATE TABLE `tb_customer` (
  `id_customer` int(5) NOT NULL,
  `no_ktp` varchar(150) NOT NULL,
  `nama_customer` varchar(200) NOT NULL,
  `no_telephone` varchar(13) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `pekerjaan` varchar(15) NOT NULL,
  `status` varchar(10) NOT NULL,
  `foto_ktp` varchar(200) NOT NULL,
  `foto_kk` varchar(200) NOT NULL,
  `alamat_tempat_tinggal` text NOT NULL,
  `is_delete` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_customer`
--

INSERT INTO `tb_customer` (`id_customer`, `no_ktp`, `nama_customer`, `no_telephone`, `tgl_lahir`, `pekerjaan`, `status`, `foto_ktp`, `foto_kk`, `alamat_tempat_tinggal`, `is_delete`) VALUES
(27, '123', 'Aji', '081212950669', '2022-01-16', 'buruh', 'belum', 'bayi.jpg', 'background-admin.jpg', 'jl-kokol', 0),
(28, '021878866544', 'yuuuuusuuuuf', '021865434578', '2022-01-29', 'pengacara', 'belooom', 'digital2.jpg', 'keluarga.jpg', 'elom punyaaa', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_foto_mobil`
--

CREATE TABLE `tb_foto_mobil` (
  `id_foto_mobil` int(15) NOT NULL,
  `id_mobil` int(15) NOT NULL,
  `image` varchar(50) NOT NULL,
  `detail_foto_mobil` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_foto_mobil`
--

INSERT INTO `tb_foto_mobil` (`id_foto_mobil`, `id_mobil`, `image`, `detail_foto_mobil`) VALUES
(1, 5, 'avanza.jpg', 1),
(3, 9, 'civic.jpg', 1),
(4, 1, 'alphardutama.jpg', 1),
(5, 6, 'crv.jpg', 1),
(6, 5, 'avanza_1.jpg', 0),
(7, 5, 'avanza_2.jpg', 0),
(8, 8, 'agya.jpg', 1),
(9, 7, 'civic.jpg', 1),
(14, 16, 'gambar_1642342527__Crossover.png', 1),
(18, 12, 'gambar_1642342967__bayi.jpg', 1),
(21, 16, 'gambar_1642343271__avanza.jpg', 1),
(22, 27, 'gambar_1642343328__mobil-crv-header.jpg', 1),
(23, 28, 'gambar_1642344388__mobil-crv-header.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_gambar`
--

CREATE TABLE `tb_gambar` (
  `id_gambar` int(5) NOT NULL,
  `gambar` text NOT NULL,
  `is_delete` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_gambar`
--

INSERT INTO `tb_gambar` (`id_gambar`, `gambar`, `is_delete`) VALUES
(1, 'gambar7.jpg', 1),
(2, '', 1),
(3, '', 1),
(4, 'gambar_1640498893__updtLm-logo.jpg', 0),
(5, '', 1),
(6, 'gambar_1640496913__digital2.jpg', 1),
(7, 'gambar_1640496932__digital2.jpg', 1),
(8, 'gambar_1640498881__updtkamera.jpg', 0),
(9, 'gambar_1640498902__mic.jpg', 0),
(10, 'gambar_1640788558__2.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_harga`
--

CREATE TABLE `tb_harga` (
  `id_harga` int(15) NOT NULL,
  `harga` int(10) NOT NULL,
  `durasi` varchar(8) NOT NULL,
  `is_delete` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_harga`
--

INSERT INTO `tb_harga` (`id_harga`, `harga`, `durasi`, `is_delete`) VALUES
(1, 300000, '3', 1),
(2, 200, '2', 0),
(3, 250, '1,5', 1),
(4, 300000, '3', 0),
(5, 250, '1,5', 1),
(6, 150, '1,5', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_jenis`
--

CREATE TABLE `tb_jenis` (
  `id_jenis` int(10) NOT NULL,
  `nama_jenis` varchar(10) NOT NULL,
  `is_delete` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_jenis`
--

INSERT INTO `tb_jenis` (`id_jenis`, `nama_jenis`, `is_delete`) VALUES
(1, 'carry-1.jp', 0),
(2, 'jazz', 0),
(3, 'avanza', 0),
(4, 'jazz', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_merk`
--

CREATE TABLE `tb_merk` (
  `id_merek` int(5) NOT NULL,
  `merek` text NOT NULL,
  `is_delete` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_merk`
--

INSERT INTO `tb_merk` (`id_merek`, `merek`, `is_delete`) VALUES
(3, 'Toyota', 0),
(4, 'honda', 0),
(5, 'toyota', 0),
(6, 'Daihatshu', 1),
(7, 'Suzuki', 1),
(8, 'porche', 0),
(9, 'porche2', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_mobil`
--

CREATE TABLE `tb_mobil` (
  `id_mobil` int(15) NOT NULL,
  `id_harga` int(10) NOT NULL,
  `id_merek` int(5) NOT NULL,
  `kursi` int(10) NOT NULL,
  `kode_mobil` int(10) NOT NULL,
  `nama_mobil` varchar(15) NOT NULL,
  `no_mesin` varchar(15) NOT NULL,
  `jenis_mobil` varchar(15) NOT NULL,
  `description` text NOT NULL,
  `is_delete` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_mobil`
--

INSERT INTO `tb_mobil` (`id_mobil`, `id_harga`, `id_merek`, `kursi`, `kode_mobil`, `nama_mobil`, `no_mesin`, `jenis_mobil`, `description`, `is_delete`) VALUES
(1, 1, 3, 6, 220, 'Alpart', '123451', 'sedan', 'Toyota Alphard tersedia dalam pilihan mesin Bensin di Indonesia MPV baru dari Toyota hadir dalam 6 varian. Bicara soal spesifikasi mesin Toyota Alphard, ini ditenagai dua pilihan mesin Bensin berkapasitas 3456 cc. Alphard tersedia dengan transmisi CVT and Otomatis tergantung variannya. Alphard adalah MPV 7 seater dengan panjang 4945 mm, lebar 1850 mm, wheelbase 3000 mm. serta ground clearance 160 mm.', 0),
(5, 1, 4, 4, 4, 'avanza', '12345678', 'pribadi', 'Toyota Avanza adalah mobil yang diproduksi di Indonesia oleh pabrikan Daihatsu, yang dipasarkan dalam dua merek dan nama yaitu Toyota Avanza dan Daihatsu Xenia. Generasi pertama mobil ini diluncurkan saat berlangsungnya kegiatan Gaikindo Auto Expo 2003 dan terjual sebesar 100.000 unit pada tahun tersebut. Nama \"Avanza\" berasal dari bahasa Italia avanzato, yang berarti peningkatan.\r\n\r\nKetika Avanza diluncurkan di Indonesia, tersedia dalam dua model: 1.3 E dan 1.3 G, dengan transmisi manual saja. Avanza kemudian menjadi salah satu mobil terlaris di Indonesia.', 0),
(6, 4, 4, 4, 9090, 'crv', 'B 1892 NYE', 'pribadi', 'Hrv adalah jenis mobil bagus', 1),
(7, 2, 4, 8, 2, 'Civic', 'B 1892 NYF', 'pribadi', 'mobil new', 1),
(8, 2, 4, 2, 9999, 'agya', 'B 1891 NYE', 'losbak', 'Mobil New ', 1),
(9, 2, 4, 4, 1010, 'Civic', '8989 nui', 'pribadi', 'mobil new', 1),
(10, 6, 3, 2, 190, 'Carry', 'B 1788 er', 'losbak', 'Losback new', 1),
(11, 6, 4, 4, 123, 'Yaris', 'B 1900 YU', 'pribadi', 'Mobil Jazz New', 0),
(12, 6, 3, 2, 1234, 'crosover', '8989 nuip', 'pribadi', 'mobil new', 1),
(13, 6, 3, 2, 1234, 'crosover', '8989 nuip', 'pribadi', 'mobil new', 1),
(14, 6, 3, 2, 1234, 'crosover', '8989 nuip', 'pribadi', 'mobil new', 1),
(15, 6, 3, 2, 1234, 'crosover', '8989 nuip', 'pribadi', 'mobil new', 1),
(16, 6, 3, 2, 1234, 'crosover', '8989 nuip', 'pribadi', 'mobil new', 1),
(27, 6, 4, 4, 998, 'crv', '8999 nui', 'pribadi', 'mobil new', 1),
(28, 2, 4, 4, 10101, 'crv', 'B 1892 Npp', 'pribadi', 'mobil new', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_rental`
--

CREATE TABLE `tb_rental` (
  `id_rental` int(15) NOT NULL,
  `no_telp` text NOT NULL,
  `nama` varchar(25) NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_rental`
--

INSERT INTO `tb_rental` (`id_rental`, `no_telp`, `nama`, `alamat`, `email`) VALUES
(1, '08128415436<br/>08128415436', '', 'Jl. Raya Pasar Jengkol - Viktor - Jurusan Angkot Parung - BSD', 'LaksanaMandiriMotor@');

-- --------------------------------------------------------

--
-- Table structure for table `tb_sewa`
--

CREATE TABLE `tb_sewa` (
  `id_sewa` int(15) NOT NULL,
  `id_harga` int(15) NOT NULL,
  `id_mobil` int(15) NOT NULL,
  `id_customer` varchar(25) NOT NULL,
  `no_sewa` int(10) NOT NULL,
  `tgl_sewa` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `biaya_sewa` int(15) NOT NULL,
  `denda_sewa` int(15) NOT NULL,
  `status_sewa` varchar(15) NOT NULL,
  `is_delete` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_sewa`
--

INSERT INTO `tb_sewa` (`id_sewa`, `id_harga`, `id_mobil`, `id_customer`, `no_sewa`, `tgl_sewa`, `tgl_kembali`, `biaya_sewa`, `denda_sewa`, `status_sewa`, `is_delete`) VALUES
(1, 1, 0, '', 12345, '2021-07-07', '2021-12-14', 1000000, 200, 'kuliah', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kontak_kami`
--
ALTER TABLE `kontak_kami`
  ADD PRIMARY KEY (`id_kontak`);

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tb_customer`
--
ALTER TABLE `tb_customer`
  ADD PRIMARY KEY (`id_customer`),
  ADD UNIQUE KEY `no_ktp` (`no_ktp`);

--
-- Indexes for table `tb_foto_mobil`
--
ALTER TABLE `tb_foto_mobil`
  ADD PRIMARY KEY (`id_foto_mobil`),
  ADD KEY `id_mobil` (`id_mobil`);

--
-- Indexes for table `tb_gambar`
--
ALTER TABLE `tb_gambar`
  ADD PRIMARY KEY (`id_gambar`);

--
-- Indexes for table `tb_harga`
--
ALTER TABLE `tb_harga`
  ADD PRIMARY KEY (`id_harga`);

--
-- Indexes for table `tb_jenis`
--
ALTER TABLE `tb_jenis`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indexes for table `tb_merk`
--
ALTER TABLE `tb_merk`
  ADD PRIMARY KEY (`id_merek`);

--
-- Indexes for table `tb_mobil`
--
ALTER TABLE `tb_mobil`
  ADD PRIMARY KEY (`id_mobil`),
  ADD KEY `id_merek` (`id_merek`);

--
-- Indexes for table `tb_rental`
--
ALTER TABLE `tb_rental`
  ADD PRIMARY KEY (`id_rental`);

--
-- Indexes for table `tb_sewa`
--
ALTER TABLE `tb_sewa`
  ADD PRIMARY KEY (`id_sewa`),
  ADD KEY `id_mobil` (`id_mobil`),
  ADD KEY `id_customer` (`id_customer`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kontak_kami`
--
ALTER TABLE `kontak_kami`
  MODIFY `id_kontak` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_customer`
--
ALTER TABLE `tb_customer`
  MODIFY `id_customer` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `tb_foto_mobil`
--
ALTER TABLE `tb_foto_mobil`
  MODIFY `id_foto_mobil` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tb_gambar`
--
ALTER TABLE `tb_gambar`
  MODIFY `id_gambar` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_harga`
--
ALTER TABLE `tb_harga`
  MODIFY `id_harga` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_jenis`
--
ALTER TABLE `tb_jenis`
  MODIFY `id_jenis` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_merk`
--
ALTER TABLE `tb_merk`
  MODIFY `id_merek` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_mobil`
--
ALTER TABLE `tb_mobil`
  MODIFY `id_mobil` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `tb_rental`
--
ALTER TABLE `tb_rental`
  MODIFY `id_rental` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_sewa`
--
ALTER TABLE `tb_sewa`
  MODIFY `id_sewa` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_foto_mobil`
--
ALTER TABLE `tb_foto_mobil`
  ADD CONSTRAINT `tb_foto_mobil_ibfk_1` FOREIGN KEY (`id_mobil`) REFERENCES `tb_mobil` (`id_mobil`);

--
-- Constraints for table `tb_mobil`
--
ALTER TABLE `tb_mobil`
  ADD CONSTRAINT `tb_mobil_ibfk_1` FOREIGN KEY (`id_merek`) REFERENCES `tb_merk` (`id_merek`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
