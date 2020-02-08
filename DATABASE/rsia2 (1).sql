-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2019 at 06:42 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rsia2`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `kode_akun` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` enum('Admin','Petugas') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`kode_akun`, `username`, `password`, `level`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Admin'),
(4, 'madi', 'c4ca4238a0b923820dcc509a6f75849b', 'Petugas'),
(5, 'erny', '0a4825d28b94cf6a108af94a0da71adf', 'Petugas'),
(6, 'isabella', '4181cb6c6456c16239f2ae8496d7ce0a', 'Petugas'),
(7, 'sayasaja', '9a7ca21f8056b1885fe8dcb6c0327be9', 'Petugas');

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `nik_dokter` varchar(20) NOT NULL,
  `kode_poli` int(11) NOT NULL,
  `nama_dokter` varchar(20) NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`nik_dokter`, `kode_poli`, `nama_dokter`, `jenis_kelamin`, `alamat`) VALUES
('1233211234567876', 2, 'Dewi', 'Perempuan', 'Damit'),
('6767654356890987', 3, 'Iskandar', 'Laki-laki', 'Batu Licin'),
('87878', 4, 'Dr. Ganda', 'Laki-laki', 'banjarmasin');

-- --------------------------------------------------------

--
-- Table structure for table `kamar`
--

CREATE TABLE `kamar` (
  `no_kamar` varchar(10) NOT NULL,
  `nama` varchar(20) DEFAULT NULL,
  `jenis_kamar` varchar(20) DEFAULT NULL,
  `lantai` char(2) DEFAULT NULL,
  `status` enum('Tersedia','Penuh') NOT NULL,
  `kapasitas` int(11) NOT NULL,
  `biaya` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kamar`
--

INSERT INTO `kamar` (`no_kamar`, `nama`, `jenis_kamar`, `lantai`, `status`, `kapasitas`, `biaya`) VALUES
('1232', 'Kamar Anggrek', 'Kelas 1 ', '3', 'Tersedia', 1, 200000),
('KB00', 'Kamar Bersalin', 'Kelas 1', '4', 'Tersedia', 5, 100000),
('KB001', 'Kamar Bayi', 'Kamar Bayi', '2', 'Tersedia', 5, 300000),
('KM-09', 'Kamar Mawar', 'Kelas 1 Bangsal', '1', 'Tersedia', 4, 500000),
('KM01', 'Kamar VIP', 'Kelas 1', '2', 'Tersedia', 3, 1000000);

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `no_rm` varchar(10) NOT NULL,
  `nama_pasien` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`no_rm`, `nama_pasien`, `jenis_kelamin`, `alamat`) VALUES
('1122', 'mayasari', 'Perempuan', 'pulausari'),
('1199', 'melda ', 'Perempuan', 'pulausari'),
('12-0', 'Rana 2', 'Laki-laki', 'alamat'),
('12-1-2', 'Suhar ok', 'Perempuan', 'alamat'),
('12-12-1', 'abdullah', 'Laki-laki', 'pelaihari'),
('12-12-3', 'Resa', 'Laki-laki', 'alamat'),
('12-56-55', 'Reza', 'Laki-laki', 'Jorong'),
('121212', 'erniwidiya02', 'Perempuan', 'jorong'),
('1289dd', 'erniwidiya 02', 'Perempuan', 'jorong'),
('13-09', 'mayang', 'Laki-laki', 'hhfgjhm'),
('23-28', 'abdul', 'Perempuan', 'alamat'),
('34-89', 'badang', 'Laki-laki', 'jorong'),
('46-90', 'erni saja', 'Perempuan', 'banjarmasin'),
('54-00', 'Rana', 'Laki-laki', 'alamat'),
('54-67-55', 'Leni', 'Perempuan', 'Bati-bati'),
('55-67', 'zainudin', 'Laki-laki', 'jorong'),
('56-89', 'abdul muin', 'Laki-laki', 'pabahanan'),
('67-09', 'sinta', 'Perempuan', 'jorong'),
('67-10', 'sinta', 'Perempuan', 'jorong'),
('67-88-9', 'Kandar', 'Laki-laki', 'Ambawang'),
('89-09-99', 'Leni Ok', 'Laki-laki', 'bati bati');

-- --------------------------------------------------------

--
-- Table structure for table `perawat`
--

CREATE TABLE `perawat` (
  `nik_perawat` varchar(20) NOT NULL,
  `nama_perawat` varchar(100) NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `jabatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `perawat`
--

INSERT INTO `perawat` (`nik_perawat`, `nama_perawat`, `jenis_kelamin`, `alamat`, `jabatan`) VALUES
('1234567890123167', 'Herry', 'Laki-laki', 'Pelaihari', 'Perawat Tetape'),
('6767675363627272', 'Syaifull', 'Laki-laki', 'Sungai Danau', 'Perawat Tetap');

-- --------------------------------------------------------

--
-- Table structure for table `pesan_kamar`
--

CREATE TABLE `pesan_kamar` (
  `kode_pesan` int(11) NOT NULL,
  `no_kamar` varchar(10) NOT NULL,
  `no_rm` varchar(10) NOT NULL,
  `tgl_pesan` date NOT NULL,
  `tgl_keluar` date DEFAULT NULL,
  `total_hari` int(3) DEFAULT NULL,
  `total_biaya` varchar(25) DEFAULT NULL,
  `status` enum('Dipesan','Dibatalkan','Sudah Keluar') NOT NULL,
  `notif` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesan_kamar`
--

INSERT INTO `pesan_kamar` (`kode_pesan`, `no_kamar`, `no_rm`, `tgl_pesan`, `tgl_keluar`, `total_hari`, `total_biaya`, `status`, `notif`) VALUES
(1, '1232', '1199', '2019-12-23', '2019-12-26', 3, 'Rp. 600.000', 'Sudah Keluar', '0'),
(2, 'KB001', '1122', '2019-12-23', '2019-12-26', 3, 'Rp. 300.000', 'Sudah Keluar', '0'),
(3, '1232', '1122', '2019-12-23', '2020-01-08', 16, 'Rp. 3.200.000', 'Sudah Keluar', '0'),
(4, 'KB00', '1199', '2019-12-24', '2019-12-26', 2, 'Rp. 200.000', 'Sudah Keluar', '0'),
(5, 'KB00', '1199', '2019-12-24', '2019-12-28', 4, 'Rp. 400.000', 'Sudah Keluar', '0'),
(6, '1232', '1199', '2019-12-27', '2019-12-31', 4, 'Rp. 800.000', 'Sudah Keluar', '0'),
(7, 'KB00', '1199', '2019-12-27', '2019-12-28', 1, 'Rp. 100.000', 'Sudah Keluar', '0'),
(8, '1232', '1122', '2019-12-16', '2019-12-27', 11, 'Rp. 2.200.000', 'Sudah Keluar', '0'),
(9, '1232', '1122', '2019-12-27', '2020-01-01', 5, 'Rp. 1.000.000', 'Sudah Keluar', '0'),
(10, 'KM01', '12-1-2', '2019-12-27', '2020-01-04', 8, 'Rp. 8.000.000', 'Sudah Keluar', '0'),
(11, 'KB00', '1122', '2019-12-27', '2020-01-01', 5, 'Rp. 500.000', 'Sudah Keluar', '0');

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `nik_petugas` varchar(20) NOT NULL,
  `nama_petugas` varchar(100) NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `kode_akun` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`nik_petugas`, `nama_petugas`, `jenis_kelamin`, `jabatan`, `kode_akun`) VALUES
('123687878376542', 'Erny', 'Perempuan', 'Admin Obat', 5),
('1245787656789876', 'Isabella', 'Perempuan', 'Admin Obat', 6),
('5767778', 'sayasaja', 'Laki-laki', 'staff', 7);

-- --------------------------------------------------------

--
-- Table structure for table `poli`
--

CREATE TABLE `poli` (
  `kode_poli` int(11) NOT NULL,
  `nama_poli` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `poli`
--

INSERT INTO `poli` (`kode_poli`, `nama_poli`) VALUES
(1, 'Poli Mata'),
(2, 'Poli Telinga'),
(3, 'Poli Hidung'),
(4, 'Poli Kulit');

-- --------------------------------------------------------

--
-- Table structure for table `registrasi`
--

CREATE TABLE `registrasi` (
  `kode_registrasi` int(11) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `no_rm` varchar(10) DEFAULT NULL,
  `tanggal_registrasi` date NOT NULL,
  `nama_pasien` varchar(100) NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `status` enum('Daftar','Pasien','Batal') NOT NULL,
  `notif` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registrasi`
--

INSERT INTO `registrasi` (`kode_registrasi`, `nik`, `no_rm`, `tanggal_registrasi`, `nama_pasien`, `jenis_kelamin`, `alamat`, `status`, `notif`) VALUES
(1, '', '12-56-55', '2019-07-03', 'Reza', 'Laki-laki', 'Damit', 'Pasien', '0'),
(3, '', '54-67-55', '2019-07-03', 'Leni', 'Perempuan', 'Bati-bati', 'Pasien', '0'),
(9, '', '12-1-2', '2019-07-16', 'Suhar ok', 'Perempuan', 'Ambawang', 'Pasien', '0'),
(11, '', '54-00', '2019-07-16', 'Rana', 'Laki-laki', 'Tanah Bumbu', 'Pasien', '0'),
(12, '', '12-0', '2019-07-16', 'Rana 2', 'Laki-laki', 'Tanah Bumbu', 'Pasien', '0'),
(13, '', '23-28', '2019-07-16', 'abdul', 'Perempuan', 'pabahanan', 'Pasien', '0'),
(14, '765432', '67-88-9', '2019-07-22', 'Kandar', 'Laki-laki', 'ambawang', 'Pasien', '0'),
(15, '12', '12-12-3', '2019-07-22', 'Resa', 'Laki-laki', 'pabahanan', 'Pasien', '0'),
(16, '1234321', '89-09-99', '2019-07-22', 'Leni Ok', 'Laki-laki', 'bati bati', 'Pasien', '0'),
(17, '5738362827', NULL, '2019-07-22', 'abdul', 'Laki-laki', 'pabahanan', 'Daftar', '0'),
(18, '7623823', '34-89', '2019-07-22', 'badang', 'Laki-laki', 'jorong', 'Pasien', '0'),
(19, '364710293', '12-12-1', '2019-07-23', 'abdullah', 'Laki-laki', 'pelaihari', 'Pasien', '0'),
(20, '23232323', '1289dd', '2019-07-23', 'erniwidiya 02', 'Perempuan', 'jorong', 'Pasien', '0'),
(21, '1009203894', '46-90', '2019-07-23', 'erni saja', 'Perempuan', 'banjarmasin', 'Pasien', '0'),
(22, '7879809', '13-09', '2019-07-23', 'mayang', 'Laki-laki', 'hhfgjhm', 'Pasien', '0'),
(23, '7783894894', '56-89', '2019-07-23', 'abdul muin', 'Laki-laki', 'pabahanan', 'Pasien', '0'),
(24, '73874', '55-67', '2019-07-23', 'zainudin', 'Laki-laki', 'jorong', 'Pasien', '0'),
(25, '343456', NULL, '2019-07-24', 'sari', 'Laki-laki', 'pbahanan', 'Daftar', '0'),
(26, '343232', NULL, '2019-07-24', 'ahmad', 'Perempuan', 'krang jawa', 'Daftar', '0'),
(27, '1234', '1199', '2019-11-01', 'melda ', 'Perempuan', 'pulausari', 'Pasien', '0'),
(28, '1234', '1122', '2019-11-01', 'mayasari', 'Perempuan', 'pulausari', 'Pasien', '0');

-- --------------------------------------------------------

--
-- Table structure for table `rekam_medis`
--

CREATE TABLE `rekam_medis` (
  `kode_rm` int(11) NOT NULL,
  `nik_petugas` varchar(20) DEFAULT NULL,
  `nik_dokter` varchar(20) NOT NULL,
  `nik_perawat` varchar(20) NOT NULL,
  `kode_poli` int(11) NOT NULL,
  `no_rm` varchar(10) NOT NULL,
  `tanggal_meminjam` date NOT NULL,
  `tanggal_mengembalikan` date DEFAULT NULL,
  `status` enum('Sedang Dipinjam','Sudah Dikembalikan') NOT NULL,
  `jaminan` varchar(100) DEFAULT NULL,
  `jenis_perawatan` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rekam_medis`
--

INSERT INTO `rekam_medis` (`kode_rm`, `nik_petugas`, `nik_dokter`, `nik_perawat`, `kode_poli`, `no_rm`, `tanggal_meminjam`, `tanggal_mengembalikan`, `status`, `jaminan`, `jenis_perawatan`) VALUES
(1, '5767778', '1233211234567876', '6767675363627272', 2, '12-56-55', '2019-07-22', '2019-07-23', 'Sudah Dikembalikan', 'Asuransi', ''),
(2, NULL, '1233211234567876', '6767675363627272', 2, '23-28', '2019-07-23', '2019-07-23', 'Sudah Dikembalikan', 'Umum', ''),
(3, NULL, '87878', '6767675363627272', 4, '12-12-1', '2019-07-23', '2019-07-23', 'Sudah Dikembalikan', 'Asuransi', ''),
(4, NULL, '6767654356890987', '6767675363627272', 3, '12-12-1', '2019-07-23', '2019-07-23', 'Sudah Dikembalikan', 'Umum', ''),
(5, NULL, '87878', '6767675363627272', 4, '12-1-2', '2019-07-23', '2019-07-23', 'Sudah Dikembalikan', 'Asuransi', ''),
(6, NULL, '1233211234567876', '6767675363627272', 2, '12-0', '2019-07-23', '2019-07-23', 'Sudah Dikembalikan', 'Umum', ''),
(7, '5767778', '87878', '6767675363627272', 4, '12-12-1', '2019-07-23', '2019-07-23', 'Sudah Dikembalikan', 'BPJS', ''),
(8, '5767778', '6767654356890987', '6767675363627272', 3, '46-90', '2019-07-23', '2019-07-23', 'Sudah Dikembalikan', 'Asuransi', ''),
(9, NULL, '1233211234567876', '6767675363627272', 2, '56-89', '2019-07-23', '2019-07-23', 'Sudah Dikembalikan', 'Umum', ''),
(10, NULL, '87878', '6767675363627272', 4, '55-67', '2019-07-23', '2019-07-23', 'Sudah Dikembalikan', 'Umum', ''),
(11, NULL, '1233211234567876', '6767675363627272', 2, '1199', '2019-12-14', '2019-12-14', 'Sudah Dikembalikan', 'Umum', ''),
(12, NULL, '1233211234567876', '6767675363627272', 2, '1199', '2019-12-14', '2019-12-14', 'Sudah Dikembalikan', 'Umum', ''),
(13, NULL, '1233211234567876', '6767675363627272', 2, '1199', '2019-12-17', '2019-12-20', 'Sudah Dikembalikan', 'Umum', 'Rawat Jalan'),
(14, NULL, '1233211234567876', '1234567890123167', 2, '1122', '2019-12-19', '2019-12-20', 'Sudah Dikembalikan', 'Umum', 'Rawat Inap'),
(15, NULL, '6767654356890987', '6767675363627272', 3, '1199', '2019-12-20', '2019-12-20', 'Sudah Dikembalikan', 'Umum', 'Rawat Jalan'),
(16, NULL, '1233211234567876', '6767675363627272', 2, '1199', '2019-12-20', '2019-12-23', 'Sudah Dikembalikan', 'Asuransi', 'Rawat Inap');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`kode_akun`);

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`nik_dokter`),
  ADD KEY `kd_poli` (`kode_poli`);

--
-- Indexes for table `kamar`
--
ALTER TABLE `kamar`
  ADD PRIMARY KEY (`no_kamar`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`no_rm`);

--
-- Indexes for table `perawat`
--
ALTER TABLE `perawat`
  ADD PRIMARY KEY (`nik_perawat`);

--
-- Indexes for table `pesan_kamar`
--
ALTER TABLE `pesan_kamar`
  ADD PRIMARY KEY (`kode_pesan`),
  ADD KEY `no_rm` (`no_rm`),
  ADD KEY `no_kamar` (`no_kamar`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`nik_petugas`),
  ADD KEY `kode_akun` (`kode_akun`);

--
-- Indexes for table `poli`
--
ALTER TABLE `poli`
  ADD PRIMARY KEY (`kode_poli`);

--
-- Indexes for table `registrasi`
--
ALTER TABLE `registrasi`
  ADD PRIMARY KEY (`kode_registrasi`),
  ADD KEY `no_rm` (`no_rm`);

--
-- Indexes for table `rekam_medis`
--
ALTER TABLE `rekam_medis`
  ADD PRIMARY KEY (`kode_rm`),
  ADD KEY `kode_petugas` (`nik_petugas`),
  ADD KEY `kode_poli` (`kode_poli`),
  ADD KEY `kode_dokter` (`nik_dokter`),
  ADD KEY `nik` (`nik_perawat`),
  ADD KEY `no_rm` (`no_rm`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `kode_akun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pesan_kamar`
--
ALTER TABLE `pesan_kamar`
  MODIFY `kode_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `poli`
--
ALTER TABLE `poli`
  MODIFY `kode_poli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `registrasi`
--
ALTER TABLE `registrasi`
  MODIFY `kode_registrasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `rekam_medis`
--
ALTER TABLE `rekam_medis`
  MODIFY `kode_rm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pesan_kamar`
--
ALTER TABLE `pesan_kamar`
  ADD CONSTRAINT `pesan_kamar_ibfk_1` FOREIGN KEY (`no_kamar`) REFERENCES `kamar` (`no_kamar`),
  ADD CONSTRAINT `pesan_kamar_ibfk_2` FOREIGN KEY (`no_rm`) REFERENCES `pasien` (`no_rm`);

--
-- Constraints for table `petugas`
--
ALTER TABLE `petugas`
  ADD CONSTRAINT `petugas_ibfk_1` FOREIGN KEY (`kode_akun`) REFERENCES `akun` (`kode_akun`) ON DELETE CASCADE;

--
-- Constraints for table `registrasi`
--
ALTER TABLE `registrasi`
  ADD CONSTRAINT `registrasi_ibfk_1` FOREIGN KEY (`no_rm`) REFERENCES `pasien` (`no_rm`);

--
-- Constraints for table `rekam_medis`
--
ALTER TABLE `rekam_medis`
  ADD CONSTRAINT `rekam_medis_ibfk_1` FOREIGN KEY (`nik_petugas`) REFERENCES `petugas` (`nik_petugas`),
  ADD CONSTRAINT `rekam_medis_ibfk_2` FOREIGN KEY (`nik_dokter`) REFERENCES `dokter` (`nik_dokter`),
  ADD CONSTRAINT `rekam_medis_ibfk_3` FOREIGN KEY (`nik_perawat`) REFERENCES `perawat` (`nik_perawat`),
  ADD CONSTRAINT `rekam_medis_ibfk_4` FOREIGN KEY (`kode_poli`) REFERENCES `poli` (`kode_poli`) ON DELETE NO ACTION,
  ADD CONSTRAINT `rekam_medis_ibfk_5` FOREIGN KEY (`no_rm`) REFERENCES `pasien` (`no_rm`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
