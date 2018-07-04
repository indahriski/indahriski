-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 20, 2017 at 01:52 
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `apotek`
--

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE IF NOT EXISTS `karyawan` (
  `id_karyawan` varchar(5) NOT NULL,
  `nama_karyawan` varchar(30) NOT NULL,
  `alamat_karyawan` varchar(50) NOT NULL,
  `jkel_karyawan` varchar(50) NOT NULL,
  `tlp_karyawan` varchar(15) NOT NULL,
  PRIMARY KEY (`id_karyawan`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id_karyawan`, `nama_karyawan`, `alamat_karyawan`, `jkel_karyawan`, `tlp_karyawan`) VALUES
('K002', 'Juwita Mayasari', 'Dampit', 'perempuan', '085674563212'),
('K001', 'Indah Riski', 'Kepanjen', 'perempuan', '087567465712'),
('K003', 'Irfan Nakhrul', 'Kepanjen', 'lakilaki', '084536274563'),
('K004', 'Siti Shofiah Hamimi', 'Dampit', 'perempuan', '085647653456'),
('K005', 'M.Chusnul Yaqin', 'Tangerang', 'lakilaki', '086456354253');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `username` varchar(10) NOT NULL,
  `password` varchar(32) NOT NULL,
  `hak_akses` enum('admin','user') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`, `hak_akses`) VALUES
('admin', 'admin', 'admin'),
('user', 'user', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE IF NOT EXISTS `obat` (
  `id_obat` varchar(5) NOT NULL,
  `nama_obat` varchar(30) NOT NULL,
  `jenis_obat` varchar(20) NOT NULL,
  `tgl_kadaluarsa` date NOT NULL,
  `stok_obat` varchar(20) NOT NULL,
  `harga_obat` int(11) NOT NULL,
  PRIMARY KEY (`id_obat`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`id_obat`, `nama_obat`, `jenis_obat`, `tgl_kadaluarsa`, `stok_obat`, `harga_obat`) VALUES
('B001', 'Bodrexin', 'Kapsul', '2018-03-24', '10', 5000),
('B002', 'Komix', 'Sirup', '2017-12-29', '5', 2000),
('B003', 'Ultraflu', 'Kapsul', '2018-02-15', '15', 5000),
('B004', 'Antangin', 'Sirup', '2018-01-13', '20', 2000),
('B005', 'Paracetamol', 'Kapsul', '2017-12-18', '10', 5000);

-- --------------------------------------------------------

--
-- Table structure for table `pembeli`
--

CREATE TABLE IF NOT EXISTS `pembeli` (
  `no_pembeli` varchar(5) NOT NULL,
  `nama_pembeli` varchar(30) NOT NULL,
  `alamat_pembeli` varchar(50) NOT NULL,
  `umur_pembeli` varchar(15) NOT NULL,
  `tlp_pembeli` varchar(15) NOT NULL,
  PRIMARY KEY (`no_pembeli`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembeli`
--

INSERT INTO `pembeli` (`no_pembeli`, `nama_pembeli`, `alamat_pembeli`, `umur_pembeli`, `tlp_pembeli`) VALUES
('P001', 'Heliani Dessy', 'Sukun', '20', '086476453623'),
('P002', 'Aprilia Sukmawati', 'Moeharto', '20', '085674563212'),
('P003', 'Andy Prasetyo', 'Malang', '40', '082175647354'),
('P004', 'Eky Susanto', 'Kedung Pedaringan', '25', '083526574834'),
('P005', 'Maria Theresa', 'Kalimantan', '21', '085643756432');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE IF NOT EXISTS `transaksi` (
  `id_transaksi` varchar(5) NOT NULL,
  `tgl_transaksi` date NOT NULL,
  `nama_obat` varchar(20) NOT NULL,
  `harga_satuan` int(11) NOT NULL,
  `jumlah_beli` varchar(5) NOT NULL,
  `total_harga` int(11) NOT NULL,
  `id_karyawan` varchar(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `tgl_transaksi`, `nama_obat`, `harga_satuan`, `jumlah_beli`, `total_harga`, `id_karyawan`) VALUES
('T002', '2017-12-20', 'Paracetamol', 1, '5000', 5000, 'K003'),
('T001', '2017-12-20', 'Bodrexin', 2, '5000', 10000, 'K001'),
('T003', '2017-12-20', 'Komix', 3, '2000', 6000, 'K002');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
