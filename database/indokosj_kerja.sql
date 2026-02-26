-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 24, 2019 at 09:10 PM
-- Server version: 5.6.43
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `indokosj_kerja`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftar`
--

CREATE TABLE `daftar` (
  `id_daftar` int(11) NOT NULL,
  `id_lowongan` int(11) NOT NULL,
  `id_pencari_kerja` int(11) NOT NULL,
  `idprusahaan` int(11) NOT NULL,
  `id_login` int(11) NOT NULL,
  `posisi_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daftar`
--

INSERT INTO `daftar` (`id_daftar`, `id_lowongan`, `id_pencari_kerja`, `idprusahaan`, `id_login`, `posisi_status`) VALUES
(14, 5, 6, 18, 52, 'Diterima'),
(15, 5, 7, 18, 59, 'Diterima'),
(16, 5, 9, 18, 61, 'Ditolak'),
(18, 15, 10, 25, 62, 'Menunggu'),
(19, 12, 10, 23, 62, 'Menunggu'),
(20, 10, 10, 22, 62, 'Menunggu'),
(21, 15, 11, 25, 63, 'Menunggu'),
(22, 14, 11, 25, 63, 'Menunggu'),
(23, 10, 11, 22, 63, 'Menunggu'),
(24, 9, 11, 21, 63, 'Menunggu'),
(25, 5, 11, 18, 63, 'Ditolak');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id_login` int(11) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `akses` varchar(10) NOT NULL,
  `nama_lengkap` text NOT NULL,
  `nama_pang` text NOT NULL,
  `akun` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id_login`, `email`, `password`, `akses`, `nama_lengkap`, `nama_pang`, `akun`) VALUES
(1, 'admin@gmail.com', 'admin', 'admin', '', '', ''),
(18, 'zero@gmail.com', 'zero', 'prusahaan', '', '', 'Aktif'),
(19, 'drak@gmail.com', 'drak', 'prusahaan', '', '', 'Aktif'),
(20, 'v@gmail.com', 'v', 'prusahaan', '', '', 'Aktif'),
(22, 'azizkira7@gmail.com', 'aziz', 'pencari ke', 'abdul aziz', 'aziz', 'Aktif'),
(52, 'destiamrwati@gmail.c', '@kamu201211', 'pencari ke', 'desti ambarwati', 'desti', 'Aktif'),
(53, 'rio@gmail.com', 'rio', 'pencari ke', 'Rio Anggara', 'Rio', 'Aktif'),
(54, 'AdiCita@gmail.com', 'adicitra', 'prusahaan', 'AdiCita Karya Nusa', '', 'Aktif'),
(55, 'Mirota@gmail.com', 'mirota', 'prusahaan', 'Mirota Bakery', '', 'Aktif'),
(56, 'hadi@gmail.com', 'hadi', 'prusahaan', 'Hadisukirno, Leather Work & Handicraft', '', 'Aktif'),
(57, 'HS@gmail.com', 'hs', 'prusahaan', 'HS Silver 800-925', '', 'Tolak'),
(58, 'idwebhost@gmail.com', 'id', 'prusahaan', 'idwebhost', '', 'Tolak'),
(59, 'wayan01@gmail.com', 'wayan', 'pencari ke', 'Wayan', 'Praka', 'Aktif'),
(60, 'iqbal@gmail.com', 'iqbal', 'pencari ke', 'iqbal', 'martavi', 'Aktif'),
(61, 'galang@gmail.com', 'galang', 'pencari ke', 'Galang Prasetio', 'galang', 'Aktif'),
(62, 'alya@gmail.com', 'alya', 'pencari ke', 'Alya amini', 'amini', 'Aktif'),
(63, 'shinta@gmail.com', 'shinta', 'pencari ke', 'Devi Shintawati', 'shinta', 'Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `lowongan`
--

CREATE TABLE `lowongan` (
  `id_lowongan` int(11) NOT NULL,
  `idprusahaan` int(11) DEFAULT NULL,
  `judul_lowongan` varchar(20) NOT NULL,
  `posisi` varchar(20) NOT NULL,
  `keahlian` text NOT NULL,
  `jenis_kelamin` text NOT NULL,
  `membutuhkan` int(3) NOT NULL,
  `batas_waktu` date NOT NULL,
  `isi` text NOT NULL,
  `gaji` int(10) NOT NULL,
  `syarat_pendidikan` text NOT NULL,
  `awal_waktu` date NOT NULL,
  `aktif` text NOT NULL,
  `wilayah` text NOT NULL,
  `pengalaman_kerja` text NOT NULL,
  `syarat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pencari_kerja`
--

CREATE TABLE `pencari_kerja` (
  `id_pencari_kerja` int(11) NOT NULL,
  `nama` text NOT NULL,
  `nama_pangilan` text NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `usia` int(2) NOT NULL,
  `email` varchar(20) NOT NULL,
  `hp` int(13) NOT NULL,
  `alamat` text NOT NULL,
  `pendidikan` varchar(10) NOT NULL,
  `agama` text NOT NULL,
  `status` varchar(10) NOT NULL,
  `pengalaman_kerja` text NOT NULL,
  `riwayat_penyakit` text NOT NULL,
  `id_login` int(11) NOT NULL,
  `gambar` varchar(20) NOT NULL,
  `file` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pencari_kerja`
--

INSERT INTO `pencari_kerja` (`id_pencari_kerja`, `nama`, `nama_pangilan`, `tanggal_lahir`, `jenis_kelamin`, `usia`, `email`, `hp`, `alamat`, `pendidikan`, `agama`, `status`, `pengalaman_kerja`, `riwayat_penyakit`, `id_login`, `gambar`, `file`) VALUES
(3, 'Abdul Aziz', 'aziz', '1995-04-20', 'pria', 25, 'azizkira7@gmail.com', 2147483647, 'Sagan GK V No.840 Gondokusuman Yogyakarta', 'S1 Teknik ', 'Islam', 'Lajang', 'Saya pernah berkerja sebagai instalasi listrik pelanggan baru ', 'saya memiliki penyakit asma', 22, 'Print1.jpg', '10072019193229aku.zi'),
(4, 'Luna Maria', 'luna', '2000-06-07', 'Wanita', 20, 'luna@gmail.com', 2147483647, 'Kepuh GK III No.940 Gondokusuman Yogyakarta', 'S1', 'Islam', 'Lajang', 'None\"', 'riwayat_penyakit', 23, 'edit-pas-photo.jpg', ''),
(6, 'desti ambarwati', 'desti', '2019-08-26', 'wanita', 26, 'destiamrwati@gmail.c', 2147483647, 'jombor', 'SMK/SMA', 'Islam', 'Lajang', 'tidak ada', 'riwayat_penyakit', 52, '01082019153006331957', ''),
(7, 'Wayan Praka', 'Praka', '1995-06-13', 'pria', 26, 'wayan01@gmail.com', 823566838, 'Jalan Siliwangi, Jl. Ringroad Utara Jl. Jombor Lor, Mlati Krajan, Sendangadi, Kec. Mlati, Kabupaten Sleman, Daerah Istimewa Yogyakarta', 'S1', 'Kristen', 'Lajang', 'Saya pernah berkerja di Ramayana FM', 'Saya Punya penyakit Maag', 59, 'cow1.jpg', '02082019010532CV Dan'),
(8, 'iqbal', 'martavi', '1995-10-24', 'Pria', 24, 'iqbal@gmail.com', 813367776, 'Jalan Professor Herman Yohanes No.72 Sagan Baru, Catur Tunggal, Gondokusuman, Depok, Samirono, Caturtunggal, Kec. Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta', 'SMK/SMA', 'Islam', 'Lajang', 'Saya belum memiliki pengalaman kerja', 'saya tidak ada', 60, 'pas-foto-background-', '02082019011208CV Dan'),
(9, 'Galang Prasetio', 'galang', '1996-01-02', 'Pria', 24, 'galang@gmail.com', 856677286, 'Jl. Petung No.31, Papringan, Caturtunggal, Kec. Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta', 'SMK/SMA', 'Islam', 'Lajang', 'Saya pernah Berkerja di salah satu tempat usaha makanan', 'saya tidak ad riwayat penyakit', 61, 'IMG_0015 copy.jpg', 'CV Dan Ijazah galang'),
(10, 'Alya amini', 'amini', '1995-09-18', 'Wanita', 24, 'alya@gmail.com', 2147483647, 'Jl. Lempuyangan No.24, Bausasran, Kec. Danurejan, Kota Yogyakarta, Daerah Istimewa Yogyakarta', 'SMK/SMA', 'Islam', 'Lajang', 'Blum memiliki pengalaman', 'Tidak ada', 62, 'image-1.jpg', 'CV Dan Ijazah ALYA.r'),
(11, 'Devi Shintawati', 'shinta', '1993-06-15', 'Wanita', 27, 'shinta@gmail.com', 819955637, 'Jl. Lempuyangan No.24, Bausasran, Kec. Danurejan, Kota Yogyakarta, Daerah Istimewa Yogyakarta', 'SMK/SMA', 'Islam', 'Lajang', 'Belum Ada', 'Tidak ada', 63, '485861_3600975907039', 'CV Dan Ijazah Devi.r');

-- --------------------------------------------------------

--
-- Table structure for table `perusahaan`
--

CREATE TABLE `perusahaan` (
  `idprusahaan` int(11) NOT NULL,
  `nama_prusahaan` text NOT NULL,
  `alamat_prusahaan` varchar(50) NOT NULL,
  `siup` varchar(20) NOT NULL,
  `No_telpon` int(13) NOT NULL,
  `email_prusahaan` varchar(20) NOT NULL,
  `Bidang_usaha` varchar(20) NOT NULL,
  `gaya_pakaian` varchar(15) NOT NULL,
  `id_login` int(11) NOT NULL,
  `gambaran` text NOT NULL,
  `jam_kerja` varchar(15) NOT NULL,
  `bahasa` text NOT NULL,
  `website` varchar(20) NOT NULL,
  `hari_kerja` varchar(20) NOT NULL,
  `ukuran_prusahaan` int(3) NOT NULL,
  `logo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `perusahaan`
--

INSERT INTO `perusahaan` (`idprusahaan`, `nama_prusahaan`, `alamat_prusahaan`, `siup`, `No_telpon`, `email_prusahaan`, `Bidang_usaha`, `gaya_pakaian`, `id_login`, `gambaran`, `jam_kerja`, `bahasa`, `website`, `hari_kerja`, `ukuran_prusahaan`, `logo`) VALUES
(18, 'Gameloft Indonesia', 'Jl. HOS Cokroaminoto No.73, Pakuncen, Wirobrajan, ', '32545476', 567567657, 'Gameloft@gmail.com', 'Software dan Game ', 'Kemeja / Rapi', 18, 'Perusahaan ini berfokus membuat permainan untuk telepon genggam, telepon cerdas, dan komputer tablet yang mempunyai sistem Java, BREW, Symbian OS, iOS, Android, Windows Phone, dan Bada OS. \r\n\r\nGameloft juga mengembangkan konsol permainan seperti Nintendo\"\"', '08.00 - 16.00', 'Indonesia', 'www.gameloft.com', 'Senin - Jumat', 30, 'TcfkRtv8_400x400.jpg'),
(19, 'Qumicon', 'Jl. Patangpuluhan No.29B, Wirobrajan, Kota Yogyaka', '45465748', 465476476, 'Qumicon12@gmail.com', 'Penjualan alat bantu', 'Kemeja / Rapi', 19, 'PT. QUMICON INDONESIA mempunyai komitmen tinggi terhadap riset dan development. PT. QUMICON INDONESIA berkomitmen membangun industry berteknologi tinggi dengan Sumber Daya Manusia Dalam Negeri. PT. QUMICON INDONESIA memberikan layanan purna jual prof', '08.00 - 16.00', 'Indonesia', 'https://www.qumicon.', 'Senin - Sabtu', 0, '0.png'),
(20, 'VADS', 'Jl. Laksda Adisucipto No.163, Demangan Baru, Catur', '3454566ss', 65675, 'VADS@yahoo.com', 'Informasi dan konsli', 'Bebas / Sopan', 20, 'PT VADS Indonesia adalah solusi efektif Anda. Kami mengintegrasikan proses, teknologi dan sumber daya manusia untuk mencapai tujuan Anda. PT VADS Indonesia (PT VADS) memulai bisnisnya di Indonesia pada tanggal 1 Desember 2008 dengan ijin BKPM nomor18', '08.00 - 16.00', 'Indonesia', 'http://VADS.com', 'Senin - Jumat', 0, 'logo_8ed4f4b0a5f9d0b'),
(21, 'AdiCita Karya Nusa', 'Jl. Sisingamangaraja No. 27, Yogyakarta, DI Yogyak', '12312412-11', 274, 'AdiCita@gmail.com', 'Percetakan Buku', 'Bebas - Sopan', 54, 'Kami Menerbitan buku, brosur, buku musik dan publikasi lainnya.\"', '08.00 - 16.00', 'Indonesia', 'www.adicita.com', 'Senin - Jumat', 0, 'download.jpg'),
(22, 'Mirota Bakery', 'Jl. Faridan Muridan Noto No.7, Kotabaru, Kec. Gond', '1123798-1', 274, 'Mirota@gmail.com', 'Roti Basah', 'Seragam-Bersih', 55, 'Kami membuat Roti dan sejenisnya\"\"\"', '08.00 - 16.00', 'indonesia - Jawa', 'https://mannamirotab', 'Senin - Jumat', 30, 'LItlL8vWvzVETERc-LIt'),
(23, 'Hadisukirno, Leather Work & Handicraft', 'Jl. Letjen S.Parman No.35-39, Patangpuluhan, Wirob', '4545621312-2', 274, 'hadi@gmail.com', 'Pembuatan Wayang', 'Bebas tapi sopa', 56, 'Memproduksi dan membuat wayang\"', '08.00 - 16.00', 'Indonesia, Jawa', 'http://www.hadisukir', 'Senin - Jumat', 20, 'b49a7c74235aafa38c1d'),
(24, 'HS Silver 800-925', 'Jl. Mondorakan No 1 Rt 35 Rw 007, Yogyakarta, DI Y', '739128-1', 274, 'HS@gmail.com', 'Kerajinan Perak, Per', 'Bebas tapi sopa', 57, 'Kami membuat Kerajinan Perak, Perhiasan dan lainnya\"', '08.00 - 16.00', 'indonesia', 'hssilver.co.id', 'Senin - Jumat', 20, 'download.png'),
(25, 'idwebhost', 'Jl. Perintis Kemerdekaan No.33, Pandeyan, Kec. Umb', '7938126-1', 274, 'idwebhost@gmail.com', 'Penyedia Domain Host', 'Sopan', 58, 'Membantu Custemer dan melayani pelanggan yang membutuhkan hosting dan pembuatan domain', '07.00 - 17.00', 'indonesia', 'idwebhost.com', 'Senin - Sabtu', 15, 'perusahaan webhostin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftar`
--
ALTER TABLE `daftar`
  ADD PRIMARY KEY (`id_daftar`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_login`);

--
-- Indexes for table `lowongan`
--
ALTER TABLE `lowongan`
  ADD PRIMARY KEY (`id_lowongan`);

--
-- Indexes for table `pencari_kerja`
--
ALTER TABLE `pencari_kerja`
  ADD PRIMARY KEY (`id_pencari_kerja`);

--
-- Indexes for table `perusahaan`
--
ALTER TABLE `perusahaan`
  ADD PRIMARY KEY (`idprusahaan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftar`
--
ALTER TABLE `daftar`
  MODIFY `id_daftar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `lowongan`
--
ALTER TABLE `lowongan`
  MODIFY `id_lowongan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pencari_kerja`
--
ALTER TABLE `pencari_kerja`
  MODIFY `id_pencari_kerja` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `perusahaan`
--
ALTER TABLE `perusahaan`
  MODIFY `idprusahaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
