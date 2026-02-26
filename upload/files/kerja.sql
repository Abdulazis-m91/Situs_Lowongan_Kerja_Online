-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 26, 2019 at 05:05 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kerja`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftar`
--

CREATE TABLE IF NOT EXISTS `daftar` (
  `id_daftar` int(11) NOT NULL AUTO_INCREMENT,
  `id_lowongan` int(11) NOT NULL,
  `id_pencari_kerja` int(11) NOT NULL,
  `idprusahaan` int(11) NOT NULL,
  `id_login` int(11) NOT NULL,
  `posisi_status` text NOT NULL,
  PRIMARY KEY (`id_daftar`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `daftar`
--

INSERT INTO `daftar` (`id_daftar`, `id_lowongan`, `id_pencari_kerja`, `idprusahaan`, `id_login`, `posisi_status`) VALUES
(1, 7, 3, 20, 22, 'Menunggu'),
(2, 6, 3, 19, 22, 'Menunggu'),
(3, 5, 3, 18, 22, 'Menunggu');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id_login` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL,
  `akses` varchar(20) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `nama_pang` varchar(50) NOT NULL,
  PRIMARY KEY (`id_login`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id_login`, `email`, `password`, `akses`, `nama_lengkap`, `nama_pang`) VALUES
(1, 'admin@gmail.com', 'admin', 'admin', '', ''),
(18, 'zero@gmail.com', 'zero', 'prusahaan', '', ''),
(19, 'drak@gmail.com', 'drak', 'prusahaan', '', ''),
(20, 'v@gmail.com', 'v', 'prusahaan', '', ''),
(21, 'Telkom@gmail.com', 'telkom', 'prusahaan', '', ''),
(22, 'aziz@gmail.com', 'aziz', 'pencari kerja', '', ''),
(23, 'luna@gmail.com', 'luna', 'pencari kerja', '', ''),
(24, 'xx@gmail.com', 'xx', 'pencari kerja', '', ''),
(25, 'sano@gmail.com', 'sano', 'pencari kerja', 'sanosuke sagara', 'sano'),
(26, 'sidu@gmail.com', 'sidu', 'prusahaan', 'Sidu Indonesia', ''),
(27, 'sano@gmail.com', 'sano', 'pencari kerja', 'sanosuke sagara', 'sano'),
(28, 'zzz@gmail.com', 'zzz', 'prusahaan', 'zzz', '');

-- --------------------------------------------------------

--
-- Table structure for table `lowongan`
--

CREATE TABLE IF NOT EXISTS `lowongan` (
  `id_lowongan` int(11) NOT NULL AUTO_INCREMENT,
  `idprusahaan` int(50) DEFAULT NULL,
  `judul_lowongan` varchar(50) NOT NULL,
  `posisi` varchar(50) NOT NULL,
  `keahlian` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `membutuhkan` varchar(11) NOT NULL,
  `batas_waktu` varchar(255) NOT NULL,
  `isi` char(250) NOT NULL,
  `gaji` varchar(50) NOT NULL,
  `syarat_pendidikan` varchar(50) NOT NULL,
  `awal_waktu` varchar(255) NOT NULL,
  `aktif` varchar(5) NOT NULL,
  `wilayah` varchar(100) NOT NULL,
  `pengalaman_kerja` varchar(900) NOT NULL,
  `syarat` text NOT NULL,
  PRIMARY KEY (`id_lowongan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `lowongan`
--

INSERT INTO `lowongan` (`id_lowongan`, `idprusahaan`, `judul_lowongan`, `posisi`, `keahlian`, `jenis_kelamin`, `membutuhkan`, `batas_waktu`, `isi`, `gaji`, `syarat_pendidikan`, `awal_waktu`, `aktif`, `wilayah`, `pengalaman_kerja`, `syarat`) VALUES
(5, 18, 'C++ Game Programmer', 'anggota tim', 'C++ Game Programmer', 'Pria', '2', '2019-05-28', 'Anda akan mengambil bagian dalam pengembangan game mobile siklus penuh dari awal hingga akhir, sehubungan dengan tim internasional Gameloft di Amerika, Eropa dan Asia. Produk-produk Gameloft termasuk di antara gim ponsel teratas di pasar internasiona', '4.000.000', 'S1 Teknik Informatika', '2019-05-02', 'aktif', 'Yogyakarta', 'Pernah bekerja dibidang  kodean C++', 'Bergairah tentang pengkodean & permainan.\r\nPengetahuan yang baik tentang pengembangan Android / Symbian / Windows / iOS jelas merupakan aset.\r\nKemampuan dalam pemrograman 3D dan mesin 3D (Irrlicht, Orge, dll) merupakan nilai tambah.\r\nKemampuan membaca dan menulis bahasa Inggris yang baik.\r\nSemangat tim, rasa tanggung jawab, komitmen tenggat waktu..""""""'),
(6, 19, 'Teknisi Pemasangan Instalasi', 'Teknisi', 'Elektronik/Instalasi', 'Pria', '1', '2019-05-31', 'Membantu dalam pemasangan rangkaian instalasi pesanan. dan juga mengantarkan pesanan sekaligus memasangnya.', '1900000', 'SMK', '2019-05-24', 'aktif', 'Yogyakarta', 'None', 'Memahami rangkaian Instalasi elektronik'),
(7, 20, 'CALL CENTER TELEKOMUNIKASI', 'Call Center', 'Kominikasi ', 'Pria', '3', '2019-05-29', 'Melayani kostemer dan membantu kostemer"', '1200000', 'SMK', '2019-05-22', 'aktif', 'Yogyakarta', 'Pernah menghadapi Kostemer ', 'Memiliki kemampuan analisis yang baik.\r\nMemiliki kemampuan komunikasi yang baik.\r\nBisa menghadapi kostemer."\r\nBersedia sift 24 Jam.'),
(8, 18, 'rgeg', 'gegedgr', 'Akutansi/Keuangan', 'Pria', 'edgedgege', '2019-05-29', 'ergedgrreger', '345345353', 'ergergedgr', '2019-05-08', 'aktif', 'ergedgedgrerg', 'ergergedgrerg', 'ergergergerg');

-- --------------------------------------------------------

--
-- Table structure for table `pencari_kerja`
--

CREATE TABLE IF NOT EXISTS `pencari_kerja` (
  `id_pencari_kerja` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `nama_pangilan` varchar(100) NOT NULL,
  `tanggal_lahir` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(12) NOT NULL,
  `usia` varchar(2) NOT NULL,
  `email` varchar(100) NOT NULL,
  `hp` varchar(13) NOT NULL,
  `alamat` text NOT NULL,
  `pendidikan` varchar(50) NOT NULL,
  `agama` varchar(15) NOT NULL,
  `status` varchar(100) NOT NULL,
  `pengalaman_kerja` text NOT NULL,
  `riwayat_penyakit` varchar(100) NOT NULL,
  `id_login` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  PRIMARY KEY (`id_pencari_kerja`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `pencari_kerja`
--

INSERT INTO `pencari_kerja` (`id_pencari_kerja`, `nama`, `nama_pangilan`, `tanggal_lahir`, `jenis_kelamin`, `usia`, `email`, `hp`, `alamat`, `pendidikan`, `agama`, `status`, `pengalaman_kerja`, `riwayat_penyakit`, `id_login`, `gambar`) VALUES
(3, 'Abdul Aziz', 'aziz', '1995-04-20', 'Pria', '25', 'aziz@gmail.com', '6281353052019', 'Sagan GK V No.840 Gondokusuman Yogyakarta', 'S1 Teknik Informatika', 'Islam', 'Lajang', 'None""""', 'riwayat_penyakit', 22, 'Print1.jpg'),
(4, 'Luna Maria', 'luna', '2000-06-07', 'Wanita', '20', 'luna@gmail.com', '62244324254', 'Kepuh GK III No.940 Gondokusuman Yogyakarta', 'S1', 'Islam', 'Lajang', 'None"', 'riwayat_penyakit', 23, 'edit-pas-photo.jpg'),
(5, 'Yanto Murni', 'Yanto', '1996-06-06', 'Pria', '23', 'yanto@gmail.com', '2918371289', 'Jl. Cantel Baru No.66 Banguntapan yogyakarta', 'SMK/SMA', 'Kristen', 'Lajang', 'None', 'Nano', 24, 'Tutorial Cara Mengganti Background biru menjadi merah.jpg'),
(6, 'sanosuke sagara', 'sano', '2010-06-15', 'Pria', '25', 'sano@gmail.com', '+628135305201', 'bhjbkhjbhbjhbjhbjhbj', 'S1', 'Islam', 'Islam', 'nkjbkkhjhgygugugy', 'kjbjbjhvhghvfcgxfdx', 25, 'dhc17c.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `perusahaan`
--

CREATE TABLE IF NOT EXISTS `perusahaan` (
  `idprusahaan` int(50) NOT NULL AUTO_INCREMENT,
  `nama_prusahaan` varchar(100) NOT NULL,
  `alamat_prusahaan` varchar(100) NOT NULL,
  `No_npwp` varchar(100) NOT NULL,
  `No_telpon` varchar(100) NOT NULL,
  `email_prusahaan` varchar(100) NOT NULL,
  `Bidang_usaha` varchar(100) NOT NULL,
  `gaya_pakaian` varchar(100) NOT NULL,
  `id_login` int(11) NOT NULL,
  `gambaran` varchar(250) NOT NULL,
  `jam_kerja` varchar(100) NOT NULL,
  `bahasa` varchar(100) NOT NULL,
  `website` varchar(100) NOT NULL,
  `hari_kerja` varchar(100) NOT NULL,
  `ukuran_prusahaan` varchar(100) NOT NULL,
  `logo` varchar(225) NOT NULL,
  PRIMARY KEY (`idprusahaan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `perusahaan`
--

INSERT INTO `perusahaan` (`idprusahaan`, `nama_prusahaan`, `alamat_prusahaan`, `No_npwp`, `No_telpon`, `email_prusahaan`, `Bidang_usaha`, `gaya_pakaian`, `id_login`, `gambaran`, `jam_kerja`, `bahasa`, `website`, `hari_kerja`, `ukuran_prusahaan`, `logo`) VALUES
(18, 'Gameloft Indonesia', 'Jl. HOS Cokroaminoto No.73, Pakuncen, Wirobrajan, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55253', '32545476', '(0274) 4469477', 'Gameloft@gmail.com', 'Software dan Game ', 'Kemeja / Rapi', 18, 'Perusahaan ini berfokus membuat permainan untuk telepon genggam, telepon cerdas, dan komputer tablet yang mempunyai sistem Java, BREW, Symbian OS, iOS, Android, Windows Phone, dan Bada OS. Gameloft juga mengembangkan konsol permainan seperti Nintendo', '08.00 - 16.00', 'Indonesia', 'www.gameloft.com', 'Senin - Jumat', 'ukuran_prusahaan', 'TcfkRtv8_400x400.jpg'),
(19, 'Qumicon', 'Jl. Patangpuluhan No.29B, Wirobrajan, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55251', '45465748', '(0274) 373131', 'Qumicon12@gmail.com', 'Penjualan alat bantu lalulintas (Elektronik)', 'Kemeja / Rapi', 19, 'PT. QUMICON INDONESIA mempunyai komitmen tinggi terhadap riset dan development. PT. QUMICON INDONESIA berkomitmen membangun industry berteknologi tinggi dengan Sumber Daya Manusia Dalam Negeri. PT. QUMICON INDONESIA memberikan layanan purna jual prof', '08.00 - 16.00', 'Indonesia', 'https://www.qumicon.com', 'Senin - Sabtu', 'ukuran_prusahaan', '0.png'),
(20, 'VADS', 'Jl. Laksda Adisucipto No.163, Demangan Baru, Caturtunggal, Kec. Depok, Kabupaten Sleman, Daerah Isti', '3454566ss', '(021) 5273320', 'VADS@yahoo.com', 'Informasi dan konsling', 'Bebas / Sopan', 20, 'PT VADS Indonesia adalah solusi efektif Anda. Kami mengintegrasikan proses, teknologi dan sumber daya manusia untuk mencapai tujuan Anda. PT VADS Indonesia (PT VADS) memulai bisnisnya di Indonesia pada tanggal 1 Desember 2008 dengan ijin BKPM nomor18', '08.00 - 16.00', 'Indonesia', 'http://VADS.com', 'Senin - Jumat', 'ukuran_prusahaan', 'logo_8ed4f4b0a5f9d0bc6887b794d312a2a1.jpg'),
(21, 'Telkom', 'Jl. Parasamya No.22, Beran Lor, Tridadi, Kec. Sleman, Kabupaten Sleman, Daerah Istimewa Yogyakarta 5', 'q2342e', '(0274) 868320', 'telkom@gmail.com', 'Elektronik', 'Kemeja / Rapi', 21, 'Perseroan memiliki impian untuk mewujudkan Digital Society (Masyarakat Digital), dan\r\nPerseroan sepenuhnya menyadari bahwa kunci untuk mewujudkan masyarakat digital adalah\r\npembangunan infrastruktur agar dapat menyediakan layanan konektivitas berkual', '08.00 - 17.00', 'Indonesia', 'www.telkom.co.id', 'Senin - Sabtu', 'ukuran_prusahaan', 'ebf46a7e3e0dc2ee043a9c39bbab1de3.jpeg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
