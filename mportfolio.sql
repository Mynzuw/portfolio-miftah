-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 19 Okt 2023 pada 08.51
-- Versi server: 5.7.24
-- Versi PHP: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mportfolio`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `about`
--

CREATE TABLE `about` (
  `id` int(5) NOT NULL,
  `lahir` varchar(100) NOT NULL,
  `web` varchar(100) NOT NULL,
  `phone` bigint(200) NOT NULL,
  `kota` varchar(50) NOT NULL,
  `umur` int(3) NOT NULL,
  `gelar` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `freelance` varchar(50) NOT NULL,
  `desk1` text NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `desk3` text NOT NULL,
  `desk2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `about`
--

INSERT INTO `about` (`id`, `lahir`, `web`, `phone`, `kota`, `umur`, `gelar`, `email`, `freelance`, `desk1`, `gambar`, `desk3`, `desk2`) VALUES
(1, 'Tangerang, 1 Februari 2004', 'www.mtjayaair.com', 6289560150559, 'Tangerang Selatan', 19, 'Sarjana Komputer', 'miftahadha@gmail.com', 'Tersedia', 'Saya adalah seorang programmer yang mengejar kode-kode seperti seorang penyair mengejar kata-kata. Di dunia pemrograman, saya menemukan keindahan dalam setiap garis kode, seperti seorang puitis menemukan inspirasi dalam setiap bait sajak. Dengan kreativitas dan ketelitian, saya menciptakan solusi yang mengalir seperti puisi, membawa ide-ide ke dalam bentuk teknologi yang memukau.', 'about-img.jpg', 'Dalam setiap langkah perjalanan pengembangan web, saya berusaha untuk memberikan nilai tambah, memberikan perhatian pada setiap detail, dan memastikan bahwa setiap elemen berkontribusi pada keseluruhan pengalaman pengguna', 'Saya adalah seorang UI/UX Designer dan Web Developer dengan hasrat untuk menciptakan pengalaman pengguna yang menarik dan solusi web yang fungsional.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `contact`
--

CREATE TABLE `contact` (
  `id` int(5) NOT NULL,
  `desk` text NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telp` bigint(20) NOT NULL,
  `linkmap` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `contact`
--

INSERT INTO `contact` (`id`, `desk`, `alamat`, `email`, `telp`, `linkmap`) VALUES
(1, 'Seperti bintang-bintang yang berada jauh di angkasa, pesan Anda adalah cahaya yang membimbing langkah saya dalam dunia kreasi. Mari berbagi gagasan, impian, dan inspirasi, sehingga kita dapat menciptakan bersama. Ayo, sambutlah saya dalam petualangan tak terbatas melalui kata-kata, ide, dan kolaborasi. Bentangkan sayap komunikasi, dan mari kita terbang bersama menuju langit luas kreativitas', 'Manunggal V, Perigi Baru, Pondok Aren, Tangerang Selatan, Banten', 'miftahadha.ma@gmail.com', 6289560150559, 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15863.706332401309!2d106.6924705!3d-6.2733843!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69fb6c980a6745%3A0xa10353aaee541cc2!2sToko%20Ikan%20Segar%20Bang%20Uci!5e0!3m2!1sen!2sid!4v1697469145425!5m2!1sen!2sid');

-- --------------------------------------------------------

--
-- Struktur dari tabel `formcontact`
--

CREATE TABLE `formcontact` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `formcontact`
--

INSERT INTO `formcontact` (`name`, `email`, `subject`, `message`) VALUES
('', 'miftahadha.ma@gmail.com', 'Hi', 'Halo Miftah Adha'),
('', 'miftahadha.ma@gmail.com', 'Hi', 'Halo Miftah Adha'),
('', 'miftahadha.ma@gmail.com', 'Subject', 'Message'),
('Miftah Adha', 'miftahadha.ma@gmail.com', 'Subject', 'Message');

-- --------------------------------------------------------

--
-- Struktur dari tabel `home`
--

CREATE TABLE `home` (
  `id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Gambar1` varchar(20) DEFAULT NULL,
  `Gambar2` varchar(20) DEFAULT NULL,
  `Gambar3` varchar(20) DEFAULT NULL,
  `Gambar4` varchar(20) DEFAULT NULL,
  `Gambar5` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `home`
--

INSERT INTO `home` (`id`, `Name`, `Gambar1`, `Gambar2`, `Gambar3`, `Gambar4`, `Gambar5`) VALUES
(1, 'Miftah <span>Adha</span><br>Web Developer', '1.jpg', '2.jpg', '3.jpg', '4.jpg', '5.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(11) NOT NULL,
  `desk` text NOT NULL,
  `gambar1` varchar(50) NOT NULL,
  `gambar2` varchar(50) NOT NULL,
  `gambar3` varchar(50) NOT NULL,
  `gbrjdl1` varchar(50) NOT NULL,
  `gbrjdl2` varchar(50) NOT NULL,
  `gbrjdl3` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `portfolio`
--

INSERT INTO `portfolio` (`id`, `desk`, `gambar1`, `gambar2`, `gambar3`, `gbrjdl1`, `gbrjdl2`, `gbrjdl3`) VALUES
(1, 'Selamat datang di portofolio pribadi saya. Di sini, Anda akan menemukan kumpulan karya-karya terbaik yang mencerminkan perjalanan saya dalam dunia Informatika. Portofolio ini mencakup beragam proyek dan prestasi yang mencerminkan dedikasi saya terhadap bidang teknologi.', 'portfolio-1.jpg', 'portfolio-2.jpg', 'portfolio-3.jpg', 'MyCommuter', 'SPK berbasis SAW', 'Kalkulator Segitiga');

-- --------------------------------------------------------

--
-- Struktur dari tabel `services`
--

CREATE TABLE `services` (
  `id` int(5) NOT NULL,
  `desk` varchar(255) NOT NULL,
  `serv1` varchar(50) NOT NULL,
  `deskServ1` varchar(255) NOT NULL,
  `serv2` varchar(50) NOT NULL,
  `deskServ2` varchar(255) NOT NULL,
  `serv3` varchar(50) NOT NULL,
  `deskServ3` varchar(255) NOT NULL,
  `serv4` varchar(50) NOT NULL,
  `deskServ4` varchar(255) NOT NULL,
  `serv5` varchar(50) NOT NULL,
  `deskServ5` varchar(255) NOT NULL,
  `serv6` varchar(50) NOT NULL,
  `deskServ6` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `services`
--

INSERT INTO `services` (`id`, `desk`, `serv1`, `deskServ1`, `serv2`, `deskServ2`, `serv3`, `deskServ3`, `serv4`, `deskServ4`, `serv5`, `deskServ5`, `serv6`, `deskServ6`) VALUES
(1, 'Jelajahi layanan pengembangan web yang saya tawarkan untuk membantu Anda membangun kehadiran online dan menciptakan pengalaman digital yang mulus.\n        ', 'Front-end Development', 'Buat situs web yang interaktif dan mudah digunakan dengan teknologi HTML, CSS, dan JavaScript terbaru.', 'Back-end Development', 'Membangun aplikasi dan basis data sisi server yang tangguh menggunakan teknologi seperti Node.js, PHP, dan basis data seperti MySQL.', 'Responsive Design', 'Pastikan situs web Anda terlihat bagus di semua perangkat dengan desain responsif dan pengoptimalan seluler.', 'Website Maintenance', 'Jaga agar situs web Anda tetap mutakhir, aman, dan berjalan lancar dengan pemeliharaan dan pembaruan rutin.', 'SEO Optimization', 'Tingkatkan visibilitas dan peringkat mesin pencari situs web Anda dengan strategi SEO yang efektif.', 'Custom Web Solutions', 'Kembangkan solusi web yang dibuat khusus untuk memenuhi kebutuhan dan tujuan bisnis Anda yang unik.');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `about`
--
ALTER TABLE `about`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `home`
--
ALTER TABLE `home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `services`
--
ALTER TABLE `services`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
