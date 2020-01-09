-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Jan 2020 pada 15.16
-- Versi server: 10.1.36-MariaDB
-- Versi PHP: 7.0.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pencernaanku`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akses_menu_user`
--

CREATE TABLE `akses_menu_user` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `id_menu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `akses_menu_user`
--

INSERT INTO `akses_menu_user` (`id`, `role_id`, `id_menu`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE `artikel` (
  `id` int(11) NOT NULL,
  `judul` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `tanggal` date NOT NULL,
  `id_kat_kategori` int(11) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `artikel`
--

INSERT INTO `artikel` (`id`, `judul`, `image`, `tanggal`, `id_kat_kategori`, `isi`) VALUES
(9, 'Artikel Pertama', 'carbon1.png', '2019-12-25', 1, '<div class=\"blog-post__text\"><font face=\"Arial Black\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit eum quidem fugiat! Nesciunt nostrum totam nemo fugit, laudantium sapiente, ullam qui sint rem culpa et hic aliquam iusto deleniti! Ut nesciunt vero mollitia cumque iste!</font><br></div>'),
(17, 'Artikel Kedua', 'carbon_(5)1.png', '2019-01-12', 1, '<div class=\"blog-post__text\" style=\"text-align: left;\"><b><font face=\"Courier New\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse dignissimos minus optio deleniti iste ratione.</font></b><br></div>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel_kategori`
--

CREATE TABLE `artikel_kategori` (
  `id_kat_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `artikel_kategori`
--

INSERT INTO `artikel_kategori` (`id_kat_kategori`, `nama_kategori`) VALUES
(1, 'Sakit'),
(2, 'Chaos');

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar_konsultasi`
--

CREATE TABLE `daftar_konsultasi` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `id_user` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `nama_penyakit` varchar(128) NOT NULL,
  `nilai` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `daftar_konsultasi`
--

INSERT INTO `daftar_konsultasi` (`id`, `tanggal`, `id_user`, `name`, `nama_penyakit`, `nilai`) VALUES
(7, '2019-12-20', 6, 'Member', 'Disentri', 81),
(8, '2019-12-20', 6, 'Member', 'Maag', 61),
(9, '2019-12-20', 6, 'Member', 'Maag', 61),
(10, '2019-12-20', 6, 'Member', 'Maag', 52),
(11, '2019-12-20', 6, 'Member', 'Keracunan Makanan', 99),
(12, '2019-12-30', 6, 'Member', 'Maag', 52),
(13, '2019-12-30', 6, 'Member', 'Maag', 52),
(14, '2019-12-30', 6, 'Member', 'Maag', 39),
(15, '2019-12-30', 6, 'Member', 'Diare', 59),
(16, '2019-12-30', 6, 'Member', 'Maag', 65),
(17, '2019-12-30', 6, 'Member', 'Keracunan Makanan', 100),
(18, '2019-12-30', 6, 'Member', 'Keracunan Makanan', 99),
(19, '2019-12-30', 6, 'Member', 'Keracunan Makanan', 99),
(20, '2019-12-30', 6, 'Member', 'Keracunan Makanan', 99),
(21, '2019-12-30', 6, 'Member', 'Keracunan Makanan', 63),
(22, '2019-12-30', 6, 'Member', 'Apendictis atau Usus Buntu', 99),
(23, '2019-12-30', 6, 'Member', 'Disentri', 48),
(24, '2019-12-30', 6, 'Member', 'Disentri', 48),
(25, '2020-01-09', 6, 'Member', 'Maag', 61),
(26, '2020-01-09', 6, 'Member', 'Maag', 61),
(27, '2020-01-09', 6, 'Member', 'Maag', 61);

-- --------------------------------------------------------

--
-- Struktur dari tabel `gejala`
--

CREATE TABLE `gejala` (
  `id_gejala` int(11) NOT NULL,
  `kode` varchar(128) NOT NULL,
  `gejala` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `gejala`
--

INSERT INTO `gejala` (`id_gejala`, `kode`, `gejala`) VALUES
(1, 'G01', 'Mual'),
(2, 'G02', 'Muntah'),
(3, 'G03', 'Perut Kram'),
(6, 'G04', 'Dehidrasi'),
(7, 'G05', 'Sakit Kepala'),
(8, 'G06', 'Kehilangan Nafsu Makan'),
(9, 'G07', 'Feses Bau Amis'),
(10, 'G08', 'Berdebar-debar'),
(11, 'G09', 'BAB Cair Lebih dari 4 kali'),
(12, 'G10', 'Feses Berdarah'),
(13, 'G11', 'Feses Berlendir'),
(14, 'G12', 'Tidak Bisa Kentut'),
(15, 'G13', 'Nyeri Perut'),
(16, 'G14', 'Nyeri Perut Kanan Bawah'),
(17, 'G15', 'Keringat Dingin'),
(18, 'G16', 'Rasa Terbakar Pada Dada'),
(19, 'G17', 'Perut Kembung'),
(20, 'G18', 'Perut Terasa Mulas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu_user`
--

CREATE TABLE `menu_user` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `menu_user`
--

INSERT INTO `menu_user` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penyakit`
--

CREATE TABLE `penyakit` (
  `id_penyakit` int(11) NOT NULL,
  `kode` varchar(128) NOT NULL,
  `nama_penyakit` varchar(128) NOT NULL,
  `informasi` varchar(256) NOT NULL,
  `saran` varchar(256) NOT NULL,
  `probabilitas` double NOT NULL,
  `jumlah_muncul` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penyakit`
--

INSERT INTO `penyakit` (`id_penyakit`, `kode`, `nama_penyakit`, `informasi`, `saran`, `probabilitas`, `jumlah_muncul`) VALUES
(1, 'P01', 'Diare', 'Diare adalah penyakit yang membuat penderitanya menjadi sering buang air besar, dengan kondisi tinja yang encer. Pada umumnya, diare terjadi akibat makanan dan minuman yang terpapar virus, bakteri, atau parasit.', 'Penderita diare dapat meminum cairan elektrolit, guna mengganti cairan tubuh yang hilang akibat diare. Selama terjadi diare, konsumsi makanan yang lunak dan antibiotik atau obat anti diare.', 0.2, 3),
(3, 'P02', 'Disentri', 'Disentri adalah infeksi pada usus yang menyebabkan diare yang disertai darah atau lendir. Kondisi ini umumnya berlangsung selama 3 hingga 7 hari, ditandai dengan kram perut, mual dan muntah, serta demam.', 'Perbanyak istirahat, Menjaga kebersihan makanan atau minuman dan engonsumsi makanan lunak.', 0.2, 3),
(4, 'P03', 'Apendictis atau Usus Buntu', 'Radang usus buntu atau apendisitis terbagi menjadi dua tipe, yaitu radang usus buntu akut dan radang usus buntu kronis. Radang usus buntu kronis berlangsung lama, dapat terjadi dalam hitungan minggu hingga tahun.', 'Apendisitis biasanya diatasi dengan prosedur operasi pengangkatan usus buntu yang meradang atau apendektomi. Namun, operasi pada apendisitis kronis tidak selalu bersifat darurat. Dokter biasanya akan memberikan obat antibiotik dan antinyeri untuk mengobati', 0.1, 2),
(5, 'P04', 'Maag', 'Sakit maag atau dispepsia adalah gejala penyakit berupa rasa nyeri dan panas pada lambung yang terjadi akibat sejumlah kondisi. Di antaranya adalah luka terbuka pada lapisan dalam lambung (tukak lambung), infeksi bakteri Helicobacter pylori, efek samping p', 'Sakit maag ringan akan hilang dengan sendirinya. Adapun sakit maag yang parah dapat diatasi dengan obat-obatan seperti antasida, antibiotik dan antidepresan. Terapi seperti meditasi dan relaksasi juga bisa membantu mengatasi sakit maag.', 0.3, 4),
(6, 'P05', 'Keracunan Makanan', 'Keracunan makanan adalah kondisi yang ditandai dengan munculnya mual, muntah, atau diare setelah mengonsumsi makanan yang telah terkontaminasi. Kontaminasi tersebut dapat disebabkan oleh kuman atau racun yang masuk ke dalam makanan.', 'Mencegah dehidrasi adalah pertolongan pertama untuk mengatasi keracunan makanan. Untuk mencegah dehidrasi penderita dapat minum air putih sedikit demi sedikit, serta menghindari makanan yang merangsang, seperti makanan pedas atau terlalu manis untuk menceg', 0.2, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `role`
--

INSERT INTO `role` (`id`, `role`) VALUES
(1, 'Admin'),
(2, 'Member');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rule`
--

CREATE TABLE `rule` (
  `id` int(11) NOT NULL,
  `id_penyakit` int(11) NOT NULL,
  `id_gejala` int(11) NOT NULL,
  `probabilitas` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rule`
--

INSERT INTO `rule` (`id`, `id_penyakit`, `id_gejala`, `probabilitas`) VALUES
(2, 1, 1, 0.67),
(4, 1, 2, 0.33),
(5, 1, 3, 0.67),
(6, 1, 6, 0.33),
(7, 1, 7, 1),
(8, 1, 8, 0.00001),
(9, 1, 9, 0.67),
(10, 1, 10, 0.00001),
(11, 1, 11, 0.67),
(12, 1, 12, 0.00001),
(13, 1, 13, 0.00001),
(14, 1, 14, 0.00001),
(15, 1, 15, 1),
(16, 1, 16, 0.00001),
(17, 1, 17, 0.00001),
(18, 1, 18, 0.00001),
(19, 1, 19, 0.00001),
(20, 1, 20, 0.33),
(21, 3, 1, 1),
(22, 3, 2, 0.67),
(23, 3, 3, 0.67),
(24, 3, 6, 0.67),
(25, 3, 7, 0.67),
(26, 3, 8, 0.33),
(27, 3, 9, 0.00001),
(28, 3, 10, 0.00001),
(29, 3, 11, 0.67),
(30, 3, 12, 1),
(31, 3, 13, 0.33),
(32, 3, 14, 0.00001),
(33, 3, 15, 1),
(34, 3, 16, 0.00001),
(35, 3, 17, 0.00001),
(36, 3, 18, 0.00001),
(37, 3, 19, 0.00001),
(38, 3, 20, 0.67),
(39, 4, 1, 1),
(40, 4, 2, 1),
(41, 4, 3, 1),
(42, 4, 6, 0.00001),
(43, 4, 7, 1),
(44, 4, 8, 0.00001),
(45, 4, 9, 0.00001),
(46, 4, 10, 0.00001),
(47, 4, 11, 0.00001),
(48, 4, 12, 0.00001),
(49, 4, 13, 0.00001),
(50, 4, 14, 0.5),
(51, 4, 15, 0.5),
(52, 4, 16, 1),
(53, 4, 17, 0.00001),
(54, 4, 18, 0.00001),
(55, 4, 19, 0.00001),
(56, 4, 20, 0.00001),
(57, 5, 1, 1),
(58, 5, 2, 0.75),
(59, 5, 3, 1),
(60, 5, 6, 0.5),
(61, 5, 7, 0.5),
(62, 5, 8, 1),
(63, 5, 9, 0.00001),
(64, 5, 10, 0.00001),
(65, 5, 11, 0.00001),
(66, 5, 12, 0.00001),
(67, 5, 13, 0.00001),
(68, 5, 14, 0.00001),
(69, 5, 15, 1),
(70, 5, 16, 0.00001),
(71, 5, 17, 0.00001),
(72, 5, 18, 0.75),
(73, 5, 19, 0.5),
(74, 5, 20, 0.00001),
(75, 6, 1, 0.67),
(76, 6, 2, 0.67),
(77, 6, 3, 0.00001),
(78, 6, 6, 1),
(79, 6, 7, 0.33),
(80, 6, 8, 0.67),
(81, 6, 9, 0.00001),
(82, 6, 10, 0.67),
(83, 6, 11, 0.33),
(84, 6, 12, 0.00001),
(85, 6, 13, 0.00001),
(86, 6, 14, 0.00001),
(88, 6, 15, 0.67),
(89, 6, 16, 0.00001),
(90, 6, 17, 0.33),
(91, 6, 18, 0.00001),
(92, 6, 19, 0.67),
(93, 6, 20, 0.67);

-- --------------------------------------------------------

--
-- Struktur dari tabel `sub_menu_user`
--

CREATE TABLE `sub_menu_user` (
  `id` int(11) NOT NULL,
  `id_menu` int(11) NOT NULL,
  `judul` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sub_menu_user`
--

INSERT INTO `sub_menu_user` (`id`, `id_menu`, `judul`, `url`, `icon`) VALUES
(1, 1, 'Dashboard', 'admin', 'fa fa-home'),
(2, 2, 'Profil', 'user', 'fa fa-user'),
(3, 1, 'Data Pengguna', 'admin/member', 'fa fa-users'),
(4, 1, 'Data Gejala', 'admin/gejala', 'fa fa-stethoscope'),
(5, 1, 'Data Penyakit', 'admin/penyakit', 'fa fa-medkit'),
(6, 1, 'Data Rule', 'admin/rule', 'fa fa-database'),
(7, 1, 'Daftar Konsultasi', 'admin/konsultasi', 'fa fa-user-md'),
(8, 2, 'Edit Profil', 'user/edit', 'fa fa-pencil'),
(9, 2, 'Ubah Password', 'user/ubahPassword', 'fa fa-key'),
(10, 1, 'Data Artikel', 'admin/artikel', 'fa fa-newspaper-o'),
(11, 2, 'Daftar Konsultasi', 'user/konsultasiku', 'fa fa-list-alt');

-- --------------------------------------------------------

--
-- Struktur dari tabel `temporary`
--

CREATE TABLE `temporary` (
  `id` int(11) NOT NULL,
  `id_gejala` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `temporary`
--

INSERT INTO `temporary` (`id`, `id_gejala`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `temporary_final`
--

CREATE TABLE `temporary_final` (
  `id` int(11) NOT NULL,
  `id_penyakit` int(11) NOT NULL,
  `id_gejala` int(11) NOT NULL,
  `probabilitas` double NOT NULL,
  `hasil_probabilitas` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `temporary_final`
--

INSERT INTO `temporary_final` (`id`, `id_penyakit`, `id_gejala`, `probabilitas`, `hasil_probabilitas`) VALUES
(1, 1, 3, 0.67, 0.0535929),
(2, 1, 1, 0.67, 0.0535929),
(3, 1, 6, 0.33, 0.0535929),
(4, 1, 2, 0.33, 0.0535929),
(5, 3, 3, 0.67, 0.329727),
(6, 3, 1, 1, 0.329727),
(7, 3, 6, 0.67, 0.329727),
(8, 3, 2, 0.67, 0.329727),
(9, 4, 3, 1, 0.00000548151),
(10, 4, 1, 1, 0.00000548151),
(11, 4, 6, 0.00001, 0.00000548151),
(12, 4, 2, 1, 0.00000548151),
(13, 5, 3, 1, 0.61667),
(14, 5, 1, 1, 0.61667),
(15, 5, 6, 0.5, 0.61667),
(16, 5, 2, 0.75, 0.61667),
(17, 6, 3, 0.00001, 0.0000049213),
(18, 6, 1, 0.67, 0.0000049213),
(19, 6, 6, 1, 0.0000049213),
(20, 6, 2, 0.67, 0.0000049213);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(4, 'AdminJR', 'admin@admin.com', 'user.png', '$2y$10$i9mjS5oJp/NaaFskhchJHO9t2bsyLOaYOHPK0rURhlu8B/6wmsu0O', 1, 1, '2019-11-18'),
(6, 'Member', 'member@member.com', 'user.png', '$2y$10$6UttJ837axdAIhkP1RwUaOLOJBDpn4ysQl.ErOzTpkZothZM3peuK', 2, 1, '2019-12-08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `akses_menu_user`
--
ALTER TABLE `akses_menu_user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kat_kategori` (`id_kat_kategori`);

--
-- Indeks untuk tabel `artikel_kategori`
--
ALTER TABLE `artikel_kategori`
  ADD PRIMARY KEY (`id_kat_kategori`);

--
-- Indeks untuk tabel `daftar_konsultasi`
--
ALTER TABLE `daftar_konsultasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `gejala`
--
ALTER TABLE `gejala`
  ADD PRIMARY KEY (`id_gejala`);

--
-- Indeks untuk tabel `menu_user`
--
ALTER TABLE `menu_user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `penyakit`
--
ALTER TABLE `penyakit`
  ADD PRIMARY KEY (`id_penyakit`);

--
-- Indeks untuk tabel `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `rule`
--
ALTER TABLE `rule`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_gejala` (`id_gejala`),
  ADD KEY `id_penyakit` (`id_penyakit`);

--
-- Indeks untuk tabel `sub_menu_user`
--
ALTER TABLE `sub_menu_user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `temporary`
--
ALTER TABLE `temporary`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `temporary_final`
--
ALTER TABLE `temporary_final`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `akses_menu_user`
--
ALTER TABLE `akses_menu_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `artikel_kategori`
--
ALTER TABLE `artikel_kategori`
  MODIFY `id_kat_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `daftar_konsultasi`
--
ALTER TABLE `daftar_konsultasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `gejala`
--
ALTER TABLE `gejala`
  MODIFY `id_gejala` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `menu_user`
--
ALTER TABLE `menu_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `penyakit`
--
ALTER TABLE `penyakit`
  MODIFY `id_penyakit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `rule`
--
ALTER TABLE `rule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT untuk tabel `sub_menu_user`
--
ALTER TABLE `sub_menu_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `temporary`
--
ALTER TABLE `temporary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `temporary_final`
--
ALTER TABLE `temporary_final`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `rule`
--
ALTER TABLE `rule`
  ADD CONSTRAINT `rule_ibfk_1` FOREIGN KEY (`id_gejala`) REFERENCES `gejala` (`id_gejala`),
  ADD CONSTRAINT `rule_ibfk_2` FOREIGN KEY (`id_penyakit`) REFERENCES `penyakit` (`id_penyakit`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
