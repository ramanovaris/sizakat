-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.6.20 - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL Version:             10.3.0.5771
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for db_zakat
CREATE DATABASE IF NOT EXISTS `db_zakat` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `db_zakat`;

-- Dumping structure for table db_zakat.akun
CREATE TABLE IF NOT EXISTS `akun` (
  `kode_akun` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` enum('Admin','Petugas') NOT NULL,
  PRIMARY KEY (`kode_akun`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- Dumping data for table db_zakat.akun: ~3 rows (approximately)
DELETE FROM `akun`;
/*!40000 ALTER TABLE `akun` DISABLE KEYS */;
INSERT INTO `akun` (`kode_akun`, `username`, `password`, `level`) VALUES
	(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Admin'),
	(4, 'petugas', 'afb91ef692fd08c445e8cb1bab2ccf9c', 'Petugas'),
	(9, 'new', '22af645d1859cb5ca6da0c484f1f37ea', 'Petugas');
/*!40000 ALTER TABLE `akun` ENABLE KEYS */;

-- Dumping structure for table db_zakat.jenis_zakat
CREATE TABLE IF NOT EXISTS `jenis_zakat` (
  `id_jenis_zakat` int(11) NOT NULL AUTO_INCREMENT,
  `nama_zakat` varchar(255) NOT NULL,
  PRIMARY KEY (`id_jenis_zakat`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Dumping data for table db_zakat.jenis_zakat: ~5 rows (approximately)
DELETE FROM `jenis_zakat`;
/*!40000 ALTER TABLE `jenis_zakat` DISABLE KEYS */;
INSERT INTO `jenis_zakat` (`id_jenis_zakat`, `nama_zakat`) VALUES
	(1, 'Zakat Profesi UPZ'),
	(2, 'Zakat Profesi Perorangan'),
	(3, 'Zakat Maal Perorangan'),
	(4, 'Zakat Maal Badan/Lembaga'),
	(5, 'Zakat Fitrah (Amil Lembaga/Langgar)');
/*!40000 ALTER TABLE `jenis_zakat` ENABLE KEYS */;

-- Dumping structure for table db_zakat.pemberi_zakat
CREATE TABLE IF NOT EXISTS `pemberi_zakat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uraian` varchar(255) NOT NULL,
  `jumlah` varchar(255) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `jenis_zakat` int(11) NOT NULL,
  `kode_akun` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_penerima_zakat_jenis_zakat` (`jenis_zakat`),
  KEY `FK_penerima_zakat_user` (`kode_akun`),
  CONSTRAINT `FK_penerima_zakat_jenis_zakat` FOREIGN KEY (`jenis_zakat`) REFERENCES `jenis_zakat` (`id_jenis_zakat`),
  CONSTRAINT `FK_penerima_zakat_user` FOREIGN KEY (`kode_akun`) REFERENCES `akun` (`kode_akun`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

-- Dumping data for table db_zakat.pemberi_zakat: ~5 rows (approximately)
DELETE FROM `pemberi_zakat`;
/*!40000 ALTER TABLE `pemberi_zakat` DISABLE KEYS */;
INSERT INTO `pemberi_zakat` (`id`, `uraian`, `jumlah`, `tanggal`, `jenis_zakat`, `kode_akun`) VALUES
	(13, 'Coba', '50000000', '2020-02-08 19:57:12', 1, 1),
	(27, 'org prof', '344', '2020-02-09 16:48:32', 2, 1),
	(28, 'mal org', '7000', '2020-02-09 16:48:51', 3, 1),
	(31, 'tambahe lagi', '1000', '2020-02-09 20:18:19', 4, 4);
/*!40000 ALTER TABLE `pemberi_zakat` ENABLE KEYS */;

-- Dumping structure for table db_zakat.penyaluran_zakat
CREATE TABLE IF NOT EXISTS `penyaluran_zakat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nbkk` varchar(255) NOT NULL,
  `nik` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `kecamatan` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `golongan` varchar(255) NOT NULL,
  `jumlah_dana` varchar(255) NOT NULL,
  `jenis_program` varchar(255) NOT NULL,
  `kode_akun` int(11) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `FK_penyaluran_zakat_user` (`kode_akun`),
  CONSTRAINT `FK_penyaluran_zakat_user` FOREIGN KEY (`kode_akun`) REFERENCES `akun` (`kode_akun`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table db_zakat.penyaluran_zakat: ~2 rows (approximately)
DELETE FROM `penyaluran_zakat`;
/*!40000 ALTER TABLE `penyaluran_zakat` DISABLE KEYS */;
INSERT INTO `penyaluran_zakat` (`id`, `nbkk`, `nik`, `nama`, `alamat`, `kecamatan`, `no_hp`, `keterangan`, `golongan`, `jumlah_dana`, `jenis_program`, `kode_akun`, `tanggal`) VALUES
	(3, '12/12/12/12/23', '6500000334343434', 'Rama Nov', 'ambungan', 'pelaihari', '0812121212', 'Sakit Hati Jua', 'Kayaaaa', '2900000', 'Bantuan Sosial', 1, '2020-02-09 12:35:09');
/*!40000 ALTER TABLE `penyaluran_zakat` ENABLE KEYS */;

-- Dumping structure for table db_zakat.petugas
CREATE TABLE IF NOT EXISTS `petugas` (
  `id_petugas` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') DEFAULT NULL,
  `jabatan` varchar(255) DEFAULT NULL,
  `id_akun` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_petugas`),
  KEY `Index 2` (`id_akun`),
  CONSTRAINT `FK_petugas_akun` FOREIGN KEY (`id_akun`) REFERENCES `akun` (`kode_akun`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Dumping data for table db_zakat.petugas: ~2 rows (approximately)
DELETE FROM `petugas`;
/*!40000 ALTER TABLE `petugas` DISABLE KEYS */;
INSERT INTO `petugas` (`id_petugas`, `nama`, `jenis_kelamin`, `jabatan`, `id_akun`) VALUES
	(2, 'Ningsih', 'Perempuan', 'panitia', 4),
	(7, 'new', 'Laki-laki', 'new', 9);
/*!40000 ALTER TABLE `petugas` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
