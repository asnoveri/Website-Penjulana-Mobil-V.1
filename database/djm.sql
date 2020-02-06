-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 27 Jun 2019 pada 15.32
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
-- Database: `djm`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(15) NOT NULL,
  `user_name` varchar(25) NOT NULL,
  `pass` varchar(25) NOT NULL,
  `no_hp` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `user_name`, `pass`, `no_hp`) VALUES
(1, 'nizam', 'nizam', '082288708599');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gbr_mobil`
--

CREATE TABLE `gbr_mobil` (
  `id_gambar` int(15) NOT NULL,
  `id_proudk` int(15) NOT NULL,
  `gambar` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `gbr_mobil`
--

INSERT INTO `gbr_mobil` (`id_gambar`, `id_proudk`, `gambar`) VALUES
(1, 4, '1.jpg\r\n'),
(2, 4, '2.jpg\r\n'),
(3, 4, '3.jpg');

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
(1, 'KIJANG', '6.jpg', 'Baru', 'Pendahuluan Saat pertama memasang server Ubuntu 16.04, ada beberapa konfigurasi yang mesti dilakukan di awal. Langkah-langkah ini akan membantu meningkatkan keamanan dan kegunaan dari server kita sehingga memberikan dasar yang baik bagi kehidupan aplikasi yang akan dipasang di server tersebut. Langkah Pertama — Root Login Untuk masuk ke server yang telah dipasang, kita perlu tahu alamat IP publiknya. Kita juga perlu tahu password, atau jika memasang SSH key, maka kita juga perlu memiliki private key untuk user \"root\". To log into your server, you will need to know your server\'s public IP address. You will also need the password or, if you installed an SSH key for authentication, the private key for the \"root\" user\'s account. Jika belum masuk, maka lakukanlah terlebih dahulu dengan user `root menggunakan perintah berikut ini: ssh root@your_server_ip Tentang Root User root merupakan user administrator di lingkungan Linux dengan kemampuan tak terhingga. Karena kemampuannya yang tak ada batas dan dapat melakukan sesuatu yang amat berbahaya (meskipun tanpa sengaja), maka penggunaan user root tidak disarankan dikehidupan sehari-hari. Langkah berikutnya ialah kita akan membuat akun user baru dengan kemampuan yang dibatasi untuk pekerjaan sehari-hari. Langkah Kedua — Membuat User Baru Setelah masuk sebagai user root, kita sekarang sudah siap untuk membuat akun user baru sebagai penggantinya. Contoh di bawah ini kita akan membuat user baru dengan akun \"sammy\", namun kita perlu menggantinya dengan username yang disukai: adduser sammy Akan ada beberapa pertanyaan yang mesti di jawab dan dimulai dengan memasukkan password baru. Berikan password yang kuat, dan isi informasi-informasi yang dianggap penting. Pertanyaan yang wajib diisi hanya password, sisanya dapat dilewati dengan menekan tombol ENTER bila diinginkan. Langkah Ketiga — Root Privileges Sekarang, kita telah memiliki akun user baru dengan hak biasa. Namun, terkadang kita masih perlu melakukan aksi yang hanya bisa dilakukan oleh administrator. Daripada keluar dari akun user biasa lalu masuk lagi dengan akun root, kita akan menyiapkan sesuatu yang dikenal dengan istilah \"superuser\" atau hak root (alias root privileges) ke akun user biasa yang telah kita buat. Dengan demikian akun user biasa kita dapat menjalankan perintah-perintah root menggunakan kata kunci sudo. Untuk menambah hak ini, kita perlu memasukkan akun tadi ke grup \"sudo\". Di Ubuntu 16.04. apabila seorang user dimasukkan ke dalam grup \"sudo\" maka ia dapat melakukan perintah sudo. Login dulu sebagai root, lalu jalankan perintah berikut untuk menambahkan akun user tadi ke grup \"sudo\": usermod -aG sudo sammy Sekarang user baru yang sudah kita buat dapat menjalankan perintah-perintah administrator. Langkah Keempat — Menambahkan Public Key Authentication Langkah berikutnya untuk mengamankan server Ubuntu baru ialah dengan menambahkan public key authentication untuk user tadi. Pengaturan ini akan meningkatkan keamanan server yang akan meminta private SSH tiap kali login. Membuat sebuah Key Pair Jika belum memiliki sebuah SSH key pair yang terdiri dari key publik dan private, maka kita perlu membuatnya terlebih dahulu. Jika sudah ada, lewati ke langkah berikutnya. Untuk membuat key pair baru, masukkan perintah di bawah ini di komputer lokal dan bukan di server : ssh-keygen Bila user di komputer lokal bernama \"localuser\", kita akan melihat hasil yang seperti ini: ssh-keygen outputGenerating public/private rsa key pair. Enter file in which to save the key (/Users/localuser/.ssh/id_rsa): Tekan enter untuk menerima (atau masukkan nama baru untuk filenya). '),
(2, 'NEW AVAZA', '7.jpg', 'Bekas', 'Pendahuluan Saat pertama memasang server Ubuntu 16.04, ada beberapa konfigurasi yang mesti dilakukan di awal. Langkah-langkah ini akan membantu meningkatkan keamanan dan kegunaan dari server kita sehingga memberikan dasar yang baik bagi kehidupan aplikasi yang akan dipasang di server tersebut. Langkah Pertama — Root Login Untuk masuk ke server yang telah dipasang, kita perlu tahu alamat IP publiknya. Kita juga perlu tahu password, atau jika memasang SSH key, maka kita juga perlu memiliki private key untuk user \"root\". To log into your server, you will need to know your server\'s public IP address. You will also need the password or, if you installed an SSH key for authentication, the private key for the \"root\" user\'s account. Jika belum masuk, maka lakukanlah terlebih dahulu dengan user `root menggunakan perintah berikut ini: ssh root@your_server_ip Tentang Root User root merupakan user administrator di lingkungan Linux dengan kemampuan tak terhingga. Karena kemampuannya yang tak ada batas dan dapat melakukan sesuatu yang amat berbahaya (meskipun tanpa sengaja), maka penggunaan user root tidak disarankan dikehidupan sehari-hari. Langkah berikutnya ialah kita akan membuat akun user baru dengan kemampuan yang dibatasi untuk pekerjaan sehari-hari. Langkah Kedua — Membuat User Baru Setelah masuk sebagai user root, kita sekarang sudah siap untuk membuat akun user baru sebagai penggantinya. Contoh di bawah ini kita akan membuat user baru dengan akun \"sammy\", namun kita perlu menggantinya dengan username yang disukai: adduser sammy Akan ada beberapa pertanyaan yang mesti di jawab dan dimulai dengan memasukkan password baru. Berikan password yang kuat, dan isi informasi-informasi yang dianggap penting. Pertanyaan yang wajib diisi hanya password, sisanya dapat dilewati dengan menekan tombol ENTER bila diinginkan. Langkah Ketiga — Root Privileges Sekarang, kita telah memiliki akun user baru dengan hak biasa. Namun, terkadang kita masih perlu melakukan aksi yang hanya bisa dilakukan oleh administrator. Daripada keluar dari akun user biasa lalu masuk lagi dengan akun root, kita akan menyiapkan sesuatu yang dikenal dengan istilah \"superuser\" atau hak root (alias root privileges) ke akun user biasa yang telah kita buat. Dengan demikian akun user biasa kita dapat menjalankan perintah-perintah root menggunakan kata kunci sudo. Untuk menambah hak ini, kita perlu memasukkan akun tadi ke grup \"sudo\". Di Ubuntu 16.04. apabila seorang user dimasukkan ke dalam grup \"sudo\" maka ia dapat melakukan perintah sudo. Login dulu sebagai root, lalu jalankan perintah berikut untuk menambahkan akun user tadi ke grup \"sudo\": usermod -aG sudo sammy Sekarang user baru yang sudah kita buat dapat menjalankan perintah-perintah administrator. Langkah Keempat — Menambahkan Public Key Authentication Langkah berikutnya untuk mengamankan server Ubuntu baru ialah dengan menambahkan public key authentication untuk user tadi. Pengaturan ini akan meningkatkan keamanan server yang akan meminta private SSH tiap kali login. Membuat sebuah Key Pair Jika belum memiliki sebuah SSH key pair yang terdiri dari key publik dan private, maka kita perlu membuatnya terlebih dahulu. Jika sudah ada, lewati ke langkah berikutnya. Untuk membuat key pair baru, masukkan perintah di bawah ini di komputer lokal dan bukan di server : ssh-keygen Bila user di komputer lokal bernama \"localuser\", kita akan melihat hasil yang seperti ini: ssh-keygen outputGenerating public/private rsa key pair. Enter file in which to save the key (/Users/localuser/.ssh/id_rsa): Tekan enter untuk menerima (atau masukkan nama baru untuk filenya). '),
(3, 'MINI COPPER\r\n', '8.jpg', 'Bekas', 'Pendahuluan Saat pertama memasang server Ubuntu 16.04, ada beberapa konfigurasi yang mesti dilakukan di awal. Langkah-langkah ini akan membantu meningkatkan keamanan dan kegunaan dari server kita sehingga memberikan dasar yang baik bagi kehidupan aplikasi yang akan dipasang di server tersebut. Langkah Pertama — Root Login Untuk masuk ke server yang telah dipasang, kita perlu tahu alamat IP publiknya. Kita juga perlu tahu password, atau jika memasang SSH key, maka kita juga perlu memiliki private key untuk user \"root\". To log into your server, you will need to know your server\'s public IP address. You will also need the password or, if you installed an SSH key for authentication, the private key for the \"root\" user\'s account. Jika belum masuk, maka lakukanlah terlebih dahulu dengan user `root menggunakan perintah berikut ini: ssh root@your_server_ip Tentang Root User root merupakan user administrator di lingkungan Linux dengan kemampuan tak terhingga. Karena kemampuannya yang tak ada batas dan dapat melakukan sesuatu yang amat berbahaya (meskipun tanpa sengaja), maka penggunaan user root tidak disarankan dikehidupan sehari-hari. Langkah berikutnya ialah kita akan membuat akun user baru dengan kemampuan yang dibatasi untuk pekerjaan sehari-hari. Langkah Kedua — Membuat User Baru Setelah masuk sebagai user root, kita sekarang sudah siap untuk membuat akun user baru sebagai penggantinya. Contoh di bawah ini kita akan membuat user baru dengan akun \"sammy\", namun kita perlu menggantinya dengan username yang disukai: adduser sammy Akan ada beberapa pertanyaan yang mesti di jawab dan dimulai dengan memasukkan password baru. Berikan password yang kuat, dan isi informasi-informasi yang dianggap penting. Pertanyaan yang wajib diisi hanya password, sisanya dapat dilewati dengan menekan tombol ENTER bila diinginkan. Langkah Ketiga — Root Privileges Sekarang, kita telah memiliki akun user baru dengan hak biasa. Namun, terkadang kita masih perlu melakukan aksi yang hanya bisa dilakukan oleh administrator. Daripada keluar dari akun user biasa lalu masuk lagi dengan akun root, kita akan menyiapkan sesuatu yang dikenal dengan istilah \"superuser\" atau hak root (alias root privileges) ke akun user biasa yang telah kita buat. Dengan demikian akun user biasa kita dapat menjalankan perintah-perintah root menggunakan kata kunci sudo. Untuk menambah hak ini, kita perlu memasukkan akun tadi ke grup \"sudo\". Di Ubuntu 16.04. apabila seorang user dimasukkan ke dalam grup \"sudo\" maka ia dapat melakukan perintah sudo. Login dulu sebagai root, lalu jalankan perintah berikut untuk menambahkan akun user tadi ke grup \"sudo\": usermod -aG sudo sammy Sekarang user baru yang sudah kita buat dapat menjalankan perintah-perintah administrator. Langkah Keempat — Menambahkan Public Key Authentication Langkah berikutnya untuk mengamankan server Ubuntu baru ialah dengan menambahkan public key authentication untuk user tadi. Pengaturan ini akan meningkatkan keamanan server yang akan meminta private SSH tiap kali login. Membuat sebuah Key Pair Jika belum memiliki sebuah SSH key pair yang terdiri dari key publik dan private, maka kita perlu membuatnya terlebih dahulu. Jika sudah ada, lewati ke langkah berikutnya. Untuk membuat key pair baru, masukkan perintah di bawah ini di komputer lokal dan bukan di server : ssh-keygen Bila user di komputer lokal bernama \"localuser\", kita akan melihat hasil yang seperti ini: ssh-keygen outputGenerating public/private rsa key pair. Enter file in which to save the key (/Users/localuser/.ssh/id_rsa): Tekan enter untuk menerima (atau masukkan nama baru untuk filenya). '),
(4, 'NEW HONDA JAZZ', 'classic-car.jpg', 'Baru', '<h2>Pendahuluan Saat pertama memasang server Ubuntu 16.04, ada beberapa konfigurasi yang mesti dilakukan di awal. Langkah-langkah ini akan </h2>  <p>membantu meningkatkan keamanan for authentication, the private key for</p> the \"root\" user\'s account. Jika bePair Jika belum memiliki sebuah SSH key pair yang terdiri dari key publik dan private, maka kita perlu membuatnya terlebih dahulu. Jika sudah ada, lewati ke langkah berikutnya. Untuk membuat key pair baru, masukkan perintah di bawah ini di komputer lokal dan bukan di server : ssh-keygen Bila user di komputer lokal bernama \"localuser\", kita akan melihat hasil yang seperti ini: ssh-keygen outputGenerating public/private rsa key pair. Enter file in which to save the key (/Users/localuser/.ssh/id_rsa): Tekan enter untuk menerima (atau masukkan nama baru untuk filenya). '),
(5, 'CHOPE', '5.jpg', 'Baru', ''),
(6, 'HARV', '3.jpg', 'Baru', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tentang`
--

CREATE TABLE `tentang` (
  `id_tentang` int(15) NOT NULL,
  `judul` varchar(25) NOT NULL,
  `isi` text NOT NULL,
  `foto` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tentang`
--

INSERT INTO `tentang` (`id_tentang`, `judul`, `isi`, `foto`) VALUES
(1, 'MUHAMMAD NIZAM', 'Personal Data\r\n\r\nDate of Birth	: 22 November 1995\r\n\r\nPlace of Birth	: Batusangkar – Indonesia\r\n\r\nGender	: Male\r\n\r\nStatus	: Single\r\n\r\n\r\nHigh, Weight	: 165 cm, 60 Kg', 'IMG_20161001_174200.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tipe_produk`
--

CREATE TABLE `tipe_produk` (
  `id_tipe` int(15) NOT NULL,
  `id_proudk` int(15) NOT NULL,
  `tipe` varchar(50) NOT NULL,
  `harga` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tipe_produk`
--

INSERT INTO `tipe_produk` (`id_tipe`, `id_proudk`, `tipe`, `harga`) VALUES
(1, 4, 'cs.09', '120000000'),
(2, 4, 'cs33', '350000000');

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
  MODIFY `id_gambar` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tentang`
--
ALTER TABLE `tentang`
  MODIFY `id_tentang` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tipe_produk`
--
ALTER TABLE `tipe_produk`
  MODIFY `id_tipe` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
