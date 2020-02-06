-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 16 Jul 2019 pada 16.06
-- Versi Server: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `djm1`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(15) NOT NULL,
  `user_name` varchar(25) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `user_name`, `pass`) VALUES
(1, 'nizam', '81dc9bdb52d04dc20036dbd8313ed055');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gbr_mobil`
--

CREATE TABLE `gbr_mobil` (
  `id_gambar` int(15) NOT NULL,
  `id_produk` int(15) NOT NULL,
  `gambar` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `gbr_mobil`
--

INSERT INTO `gbr_mobil` (`id_gambar`, `id_produk`, `gambar`) VALUES
(378, 192, 'IMG_20161001_174200.jpg'),
(379, 192, 'IMG_4291.JPG'),
(380, 192, 'IMG_99364979394089.jpeg'),
(381, 192, 'IMG_148913724003299.jpeg'),
(382, 0, '_MG_0569.JPG'),
(389, 195, 'Desert.jpg'),
(390, 195, 'Lighthouse.jpg'),
(392, 195, 'Screenshot_2015-12-31-14-30-41.png'),
(393, 195, 'IMG_20141130_045418.jpg'),
(394, 195, '1422165226506 - Copy.jpg'),
(395, 195, '1423543932074 - Copy.jpg'),
(396, 195, 'IMG_20141130_045418.jpg'),
(409, 198, 'Penguins.jpg'),
(410, 198, 'Tulips.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(15) NOT NULL,
  `judul_produk` varchar(50) NOT NULL,
  `gbr` tinytext NOT NULL,
  `status_produk` varchar(50) NOT NULL,
  `ket_produk` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `judul_produk`, `gbr`, `status_produk`, `ket_produk`) VALUES
(192, 'Mitsubishi Terois', 'IMG_20161001_174200.jpg', 'Baru', '<p>bekas bekas</p>'),
(195, 'MOBIL 6sddsfdsf', '1411059462818 - Copy.jpg', 'Baru', '<p>asdfgmnfdasvb</p>'),
(198, 'oououjo', 'Penguins.jpg', 'Baru', '<p>ascas</p>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tentang`
--

CREATE TABLE `tentang` (
  `id_tentang` int(15) NOT NULL,
  `judul` varchar(25) NOT NULL,
  `isi` text NOT NULL,
  `foto` tinytext NOT NULL,
  `no_hp` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tentang`
--

INSERT INTO `tentang` (`id_tentang`, `judul`, `isi`, `foto`, `no_hp`) VALUES
(1, 'MUHAMMAD NIZAM. AMd.com', '<p>menunjukkan bagaimana Anda <a name=\"_GoBack\"></a>dapat menginstal server web Apache di server Ubuntu 16.04 LTS (Xenial Xerus)<span lang=\"EN-US\" style=\"font-size: 12.0pt; line-height: 107%; font-family: \'Segoe UI\',\'sans-serif\'; mso-fareast-font-family: \'Times New Roman\'; color: #24292e; mso-ansi-language: EN-US; mso-fareast-language: EN-US; mso-bidi-language: AR-SA;\">&nbsp;dengan dukungan&nbsp;</span><span lang=\"EN-US\" style=\"font-size: 10.0pt; line-height: 107%; font-family: Consolas; mso-fareast-font-family: \'Times New Roman\'; mso-bidi-font-family: \'Courier New\'; color: #24292e; mso-ansi-language: EN-US; mso-fareast-language: EN-US; mso-bidi-language: AR-SA;\">PHP 7 (mod_php)</span><span lang=\"EN-US\" style=\"font-size: 12.0pt; line-height: 107%; font-family: \'Segoe UI\',\'sans-serif\'; mso-fareast-font-family: \'Times New Roman\'; color: #24292e; mso-ansi-language: EN-US; mso-fareast-language: EN-US; mso-bidi-language: AR-SA;\">&nbsp;dan&nbsp;</span><span lang=\"EN-US\" style=\"font-size: 10.0pt; line-height: 107%; font-family: Consolas; mso-fareast-font-family: \'Times New Roman\'; mso-bidi-font-family: \'Courier New\'; color: #24292e; mso-ansi-language: EN-US; mso-fareast-language: EN-US; mso-bidi-language: AR-SA;\">MySQL / MariaD</span><span lang=\"EN-US\" style=\"font-size: 12.0pt; line-height: 107%; font-family: \'Segoe UI\',\'sans-serif\'; mso-fareast-font-family: \'Times New Roman\'; color: #24292e; mso-ansi-language: EN-US; mso-fareast-language: EN-US; mso-bidi-language: AR-SA;\">B dan bagaimana&nbsp;</span><span lang=\"EN-US\" style=\"font-size: 10.0pt; line-height: 107%; font-family: Consolas; mso-fareast-font-family: \'Times New Roman\'; mso-bidi-font-family: \'Courier New\'; color: #24292e; mso-ansi-language: EN-US; mso-fareast-language: EN-US; mso-bidi-language: AR-SA;\">men-setup</span><span lang=\"EN-US\" style=\"font-size: 12.0pt; line-height: 107%; font-family: \'Segoe UI\',\'sans-serif\'; mso-fareast-font-family: \'Times New Roman\'; color: #24292e; mso-ansi-language: EN-US; mso-fareast-language: EN-US; mso-bidi-language: AR-SA;\">&nbsp;sertifikat&nbsp;</span><span lang=\"EN-US\" style=\"font-size: 10.0pt; line-height: 107%; font-family: Consolas; mso-fareast-font-family: \'Times New Roman\'; mso-bidi-font-family: \'Courier New\'; color: #24292e; mso-ansi-language: EN-US; mso-fareast-language: EN-US; mso-bidi-language: AR-SA;\">SSL</span><span lang=\"EN-US\" style=\"font-size: 12.0pt; line-height: 107%; font-family: \'Segoe UI\',\'sans-serif\'; mso-fareast-font-family: \'Times New Roman\'; color: #24292e; mso-ansi-language: EN-US; mso-fareast-language: EN-US; mso-bidi-language: AR-SA;\"> dengan Let\'s encrypt.&nbsp;</span></p>\r\n<p>&nbsp;</p>', 'Koala.jpg', '+62 22887085');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tipe_produk`
--

CREATE TABLE `tipe_produk` (
  `id_tipe` int(15) NOT NULL,
  `id_produk` int(15) NOT NULL,
  `tipe` varchar(50) NOT NULL,
  `harga` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tipe_produk`
--

INSERT INTO `tipe_produk` (`id_tipe`, `id_produk`, `tipe`, `harga`) VALUES
(165, 0, 'A08()()90', 'sdc'),
(168, 195, 'A08', '1900800000'),
(169, 195, 'dc', '9000000'),
(170, 195, 'A08', '140000000000000000000'),
(171, 195, 'dc', '140000000000000000000'),
(179, 192, 'A086', '7800000000'),
(182, 192, 'A08', '9000000'),
(183, 192, 'dc', '800000'),
(184, 198, 'vascvasvc', '500000000000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `gbr_mobil`
--
ALTER TABLE `gbr_mobil`
  ADD PRIMARY KEY (`id_gambar`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `tentang`
--
ALTER TABLE `tentang`
  ADD PRIMARY KEY (`id_tentang`);

--
-- Indexes for table `tipe_produk`
--
ALTER TABLE `tipe_produk`
  ADD PRIMARY KEY (`id_tipe`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gbr_mobil`
--
ALTER TABLE `gbr_mobil`
  MODIFY `id_gambar` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=411;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=199;

--
-- AUTO_INCREMENT for table `tentang`
--
ALTER TABLE `tentang`
  MODIFY `id_tentang` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tipe_produk`
--
ALTER TABLE `tipe_produk`
  MODIFY `id_tipe` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=185;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
