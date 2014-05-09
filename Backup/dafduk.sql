-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 15, 2012 at 10:28 AM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dafduk`
--

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE IF NOT EXISTS `galeri` (
  `IdGaleri` int(11) NOT NULL AUTO_INCREMENT,
  `Tanggal` datetime NOT NULL,
  `Judul` varchar(50) NOT NULL,
  `Narasi` text NOT NULL,
  `Penulis` varchar(50) NOT NULL,
  PRIMARY KEY (`IdGaleri`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`IdGaleri`, `Tanggal`, `Judul`, `Narasi`, `Penulis`) VALUES
(4, '2012-04-14 04:11:49', 'aa', 'a', 'arsenlexdorf');

-- --------------------------------------------------------

--
-- Table structure for table `guestbook`
--

CREATE TABLE IF NOT EXISTS `guestbook` (
  `IdGuest` int(11) NOT NULL AUTO_INCREMENT,
  `Nama` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Pertanyaan` text NOT NULL,
  `Tanggal` datetime NOT NULL,
  `Jawaban` text NOT NULL,
  PRIMARY KEY (`IdGuest`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `guestbook`
--

INSERT INTO `guestbook` (`IdGuest`, `Nama`, `Email`, `Pertanyaan`, `Tanggal`, `Jawaban`) VALUES
(1, 'Deden', 'arsenlexdorf@yahoo.com', 'dedededede', '2012-04-10 10:37:36', 'msjsbgjsjsb'),
(3, 'a', 'arsen@yahoo.com', 'a', '2012-04-10 11:37:38', 'aaa');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE IF NOT EXISTS `image` (
  `IdGaleri` varchar(10) NOT NULL,
  `Image` text NOT NULL,
  `Keterangan` varchar(160) NOT NULL,
  `Tanggal` datetime NOT NULL,
  `IdImage` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`IdImage`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`IdGaleri`, `Image`, `Keterangan`, `Tanggal`, `IdImage`) VALUES
('4', 'linkin_park013.jpg', 'cccgg', '2012-04-14 05:31:01', 2);

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE IF NOT EXISTS `level` (
  `IdLevel` int(11) NOT NULL AUTO_INCREMENT,
  `Level` varchar(30) NOT NULL,
  `Keterangan` varchar(50) NOT NULL,
  PRIMARY KEY (`IdLevel`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`IdLevel`, `Level`, `Keterangan`) VALUES
(1, 'Super Admin', 'All Access & CRUD'),
(2, 'Admin', 'Access Semi Back End & CRUD'),
(3, 'User', 'Access Front End & CRUD');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `Username` varchar(25) NOT NULL,
  `Password` varchar(40) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Level` varchar(2) NOT NULL,
  `LogError` int(11) NOT NULL,
  `Keterangan` varchar(10) NOT NULL,
  PRIMARY KEY (`Username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`Username`, `Password`, `Email`, `Level`, `LogError`, `Keterangan`) VALUES
('arsenlexdorf', '421aa90e079fa326b6494f812ad13e79', 'dedenhendra29@yahoo.com', '1', 0, 'aktif'),
('a', '0cc175b9c0f1b6a831c399e269772661', 'a', '2', 2, 'Non Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `IdMenu` int(11) NOT NULL AUTO_INCREMENT,
  `Menu` varchar(30) NOT NULL,
  `Image` text NOT NULL,
  `Keterangan` varchar(20) NOT NULL,
  `Isian` text NOT NULL,
  `Tanggal` datetime NOT NULL,
  `File` text NOT NULL,
  PRIMARY KEY (`IdMenu`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`IdMenu`, `Menu`, `Image`, `Keterangan`, `Isian`, `Tanggal`, `File`) VALUES
(3, 'Try', '413791_1902332735666_1762160161_970296_2075877921_o.jpg', 'goverment', 'tes', '2012-04-15 10:13:35', 'Silabus-GM-115-Fisika-Dasar-1.docx');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `IdMessage` int(11) NOT NULL AUTO_INCREMENT,
  `Code` varchar(4) NOT NULL,
  `Message` varchar(100) NOT NULL,
  `Pesan` varchar(100) NOT NULL,
  PRIMARY KEY (`IdMessage`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`IdMessage`, `Code`, `Message`, `Pesan`) VALUES
(1, 'is', 'Added data is success', 'Tambah data berhasil'),
(2, 'if', 'Added is failed', 'Tambah data gagal'),
(3, 'ed', 'Data should be complete ', 'Isi data dengan lengkap'),
(4, 'ds', 'Delete is Success', 'Hapus data berhasil'),
(5, 'df', 'Delete is failed', 'Hapus data gagal'),
(6, 'es', 'Update is success', 'Ubah data berhasil'),
(7, 'ef', 'Update is failed', 'Ubah data berhasil'),
(8, 'ups', 'Upload data is Success', 'Unggah data berhasil'),
(9, 'upf', 'Upload data is failed', 'Unggah data gagal'),
(10, 'sd', 'Data is there,please try again', 'Data sudah ada,silahkan coba kembali'),
(11, 'rs', 'Register is success', 'Daftar berhasil'),
(12, 'rf', 'Register is failed,please try again', 'Daftar gagal,silahkan coba kembali'),
(13, 'ls', 'Log In is success', 'Berhasil masuk'),
(14, 'lf', 'Log In is failed,please try again', 'Gagal masuk,silahkan coba kembali'),
(15, 'mp', 'Your photo is too big', 'Ukuran foto terlalu besar'),
(16, 'dne', 'You can''t insert data again,because in this category is enough', 'Anda tidak bisa menambah data lagi , karena data sudah cukup dengan kategori ini'),
(17, 'fns', 'File type is wrong', 'Tipe file yang anda pilih salah'),
(18, 'fns', 'File type is wrong', 'Tipe file yang anda pilih salah'),
(19, 'ad', 'Your account has been blocked', 'Akun anda telah kami blokir');

-- --------------------------------------------------------

--
-- Table structure for table `modul`
--

CREATE TABLE IF NOT EXISTS `modul` (
  `IdModul` int(11) NOT NULL AUTO_INCREMENT,
  `Modul` text NOT NULL,
  `TanggalUpdate` datetime NOT NULL,
  `Judul` varchar(60) NOT NULL,
  `Uploader` varchar(50) NOT NULL,
  PRIMARY KEY (`IdModul`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `modul`
--

INSERT INTO `modul` (`IdModul`, `Modul`, `TanggalUpdate`, `Judul`, `Uploader`) VALUES
(5, 'Silabus-GM-115-Fisika-Dasar-1.docx', '2012-04-14 05:54:49', 'Word', 'arsenlexdorf'),
(4, 'lilik-phpwebservice.pdf', '2012-04-14 05:54:35', 'PDF', '');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `IdNews` int(11) NOT NULL AUTO_INCREMENT,
  `Judul` varchar(50) NOT NULL,
  `News` text NOT NULL,
  `Tanggal` datetime NOT NULL,
  PRIMARY KEY (`IdNews`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`IdNews`, `Judul`, `News`, `Tanggal`) VALUES
(1, 'Resti', 'bdegejbkv', '2012-04-12 11:01:27'),
(2, 'Eka', 'me j ej cje', '2012-04-12 11:29:14'),
(3, 'Deydra', 'sbjsbfjsb', '2012-04-12 11:30:15'),
(4, 'Astri', 'knfknkfnek', '2012-04-12 11:30:24'),
(5, 'Hanya uji coba', 'kfjsfsbknfknf', '2012-04-14 04:07:26');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
