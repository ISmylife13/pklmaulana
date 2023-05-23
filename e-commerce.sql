-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Bulan Mei 2023 pada 14.02
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-commerce`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(200) NOT NULL,
  `foto_kategori` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`, `foto_kategori`) VALUES
(1, 'Makanan', 'background depan.jpg'),
(2, 'Minuman', 'minuman1.jpg'),
(3, 'Pakaian', 'pakaian1.jpg'),
(4, 'Konter', 'konter3.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu`
--

CREATE TABLE `menu` (
  `id_menu` int(11) NOT NULL,
  `menu_id_toko` int(11) NOT NULL,
  `menu` varchar(200) NOT NULL,
  `harga` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `menu`
--

INSERT INTO `menu` (`id_menu`, `menu_id_toko`, `menu`, `harga`) VALUES
(5, 2, 'satu', '12000'),
(6, 2, 'kebab 3', '15000'),
(7, 2, 'satu', '12222'),
(8, 20, 'kebab original', '15000'),
(9, 20, 'Roti Maryam', '12000'),
(10, 3, 'Bakso Bakar', '1000'),
(11, 3, 'Sate Aci', '10000'),
(12, 20, 'Burger ', ''),
(13, 20, 'Burger', '12000'),
(14, 22, 'Bakso Podomoro', '10000'),
(15, 22, 'Mie Ayam', '8000'),
(16, 2, 'hgg', '1111'),
(17, 2, 'satuuu', '1020'),
(18, 23, 'baju muslim', '20000'),
(21, 47, 'Bakso', '10000'),
(22, 47, 'Mie Ayam', '10000'),
(23, 48, 'Kebab', '12000'),
(24, 48, 'Roti Maryam', '12000'),
(25, 48, 'Burger', '12000'),
(26, 49, 'Bakso Bakar', '20000'),
(27, 49, 'Sate Aci', '10000'),
(28, 50, 'Martabak Kacang', '10000'),
(29, 50, 'Martabak Kacang Coklat', '12000'),
(30, 50, 'Martabak Coklat Keju', '13000'),
(31, 50, 'Martabak Pisang Coklat', '13000'),
(32, 50, 'Martabak Telor Spesial', '18000'),
(33, 51, 'Nasi Goreng', '13000'),
(34, 51, 'Mie Rebus', '13000'),
(35, 51, 'Mie Goreng', '13000'),
(36, 51, 'Kwetiau Goreng', '13000'),
(37, 52, 'Bubur Ayam', '6000'),
(38, 52, 'Sate Telur Puyuh ', '2500'),
(39, 52, 'Sate Ampela', '2500'),
(40, 53, 'Seblak Baso', '10000'),
(41, 53, 'Sempolan Ayam', '1000'),
(42, 53, 'Seblak ceker', '10000'),
(43, 53, 'Seblak Balungan', '10000'),
(44, 54, 'Sate Ayam', '35000'),
(45, 55, 'Bakso Beranak', '10000'),
(46, 55, 'Bakso Tetelan', '10000'),
(47, 55, 'Bakso Mercon', '8000'),
(48, 55, 'Bakso Original', '6000'),
(49, 56, 'Kebab Original', '12000'),
(50, 56, 'Kebab Ayam', '13000'),
(51, 56, 'Kebab Burger', '10000'),
(52, 56, 'Kebab Pizza', '20000'),
(53, 57, 'Ketoprak Original', '10000'),
(54, 57, 'Ketoprak Telur', '12000'),
(55, 26, 'Cappucino', '5000'),
(56, 26, 'Rasa Mangga', '5000'),
(57, 26, 'Rasa Bluebery', '5000'),
(58, 27, 'Durian Kocok', '12000'),
(59, 27, 'Alpukat Kocok', '12000'),
(60, 28, 'Tea Original', '5000'),
(61, 28, 'Lemon Tea', '5000'),
(62, 28, 'Seafood Bakar', '2000'),
(63, 29, 'Rakyat Coklat Boba', '10000'),
(64, 29, 'Rakyat Vanili Boba', '10000'),
(65, 29, 'Rakyat Taro Boba', '10000'),
(66, 30, 'Rasa Cappucino Cincau', '5000'),
(67, 30, 'Rasa Coklat', '5000'),
(68, 30, 'Rasa Bublegum', '5000'),
(69, 31, 'Thai Tea', '10000'),
(70, 31, 'Taro Milk', '10000'),
(71, 31, 'Kopi Taro', '12000'),
(72, 31, 'Extra Topping', '2000'),
(73, 32, 'Rasa Oreo', '5000'),
(74, 32, 'Rasa Coklat', '5000'),
(75, 32, 'Rasa Cappucino Cincau', '5000'),
(76, 33, 'Rasa Milky', '7000'),
(77, 33, 'Rasa Coklat', '7000'),
(78, 33, 'Rasa Taro', '7000'),
(79, 33, 'Rasa Cappucino', '7000'),
(80, 33, 'Red Velvet', '7000'),
(81, 34, 'Rasa Papermint', '7000'),
(82, 34, 'Rasa Choco Oreo', '7000'),
(83, 34, 'Rasa Durian', '7000'),
(84, 34, 'Rasa Melon', '7000'),
(85, 34, 'Rasa Mangga', '7000'),
(86, 34, 'Topping', '1000'),
(87, 35, 'Rasa Durian Susu', '12000'),
(88, 35, 'Rasa Durian Nangka', '12000'),
(89, 35, ' Rasa Alpukat Kocok', '12000'),
(90, 35, 'Rasa Dawet Tape', '7000'),
(91, 58, 'Gamis', '200000'),
(92, 58, 'Seragam Sekolah', '100000'),
(93, 58, 'Jilbab', '40000'),
(94, 58, 'Mukenah', '200000'),
(95, 59, 'Kemeja', '40000'),
(96, 59, 'Kaos Lengan Pendek', '35000'),
(97, 59, 'Daster', '45000'),
(98, 59, 'Kemeja Lengan Panjang ', '55000'),
(99, 60, 'Pakaian Anak-anak', '20000'),
(100, 60, 'Kaos Lengan  Pendek', '30000'),
(101, 60, 'Kemeja  Batik', '35000'),
(102, 61, 'Pakaian Bayi', '50000'),
(103, 61, 'Dot Bayi', '26000'),
(104, 61, 'Bedak Bayi', '4000'),
(105, 62, 'Sepatu', '300000'),
(106, 62, 'Sendal ', '15000'),
(107, 62, 'Kemeja Lengan Panjang', '150000'),
(108, 62, 'Kaos', '50000'),
(109, 63, 'Pulsa All Operator', '12000'),
(110, 63, 'Kartu Perdana', '25000'),
(111, 63, 'Saldo Dana', '20000'),
(112, 63, 'Token Listrik', '50000'),
(113, 64, 'Voucher Data', '50000'),
(114, 64, 'Pulsa All Operator', '50000'),
(115, 64, 'Saldo GoPay', '50000'),
(116, 64, 'Kartu Perdana', '30000'),
(117, 64, 'Token Listrik', '50000'),
(118, 65, 'Jasa Servis', '50000'),
(119, 65, 'Pulsa All Operator', '20000'),
(120, 65, 'Acsessoris Hp', '5000'),
(121, 65, 'Kartu Perdana', '30000'),
(122, 65, 'Token Listrik', '50000'),
(123, 66, 'Casing HP', '25000'),
(124, 66, 'Tamper Glass', '20000'),
(125, 66, 'Pulsa All Operator', '20000'),
(126, 66, 'HP Infinix', '2500000'),
(127, 67, 'Pulsa All Operator', '25000'),
(128, 67, 'Casing Hp', '25000'),
(129, 67, 'Kartu Perdana', '25000'),
(130, 67, 'Tamper Glass', '20000'),
(131, 68, 'Pulsa All Operator', '20000'),
(132, 68, 'Token Listrik', '50000'),
(133, 68, 'Casing Hp', '20000'),
(134, 68, 'Voucher Data', '30000'),
(135, 69, 'Token Listrik', '50000'),
(139, 70, 'Voucher Data', '50000'),
(140, 70, 'Pulsa All Operator', '50000'),
(141, 70, 'Top Up Dana', '50000'),
(142, 70, 'Casing HP', '25000'),
(143, 70, 'Kartu Perdana', '25000'),
(144, 69, 'Casing Hp', '25000'),
(145, 69, 'Tamper Glass', '20000'),
(146, 69, 'Pulsa All Operator', '30000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `toko`
--

CREATE TABLE `toko` (
  `id_toko` int(11) NOT NULL,
  `nama_toko` varchar(200) NOT NULL,
  `alamat_toko` varchar(200) NOT NULL,
  `contact_toko` varchar(200) NOT NULL,
  `foto_toko` varchar(200) NOT NULL,
  `kategori_toko` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `toko`
--

INSERT INTO `toko` (`id_toko`, `nama_toko`, `alamat_toko`, `contact_toko`, `foto_toko`, `kategori_toko`) VALUES
(26, ' VAN BURY', ' https://maps.app.goo.gl/z7iqt9JG7xrd56gs5', 'http://Wa.me/+6285801303513', 'van bury.jpeg', 2),
(27, ' DURIAN KOCOK', ' https://maps.app.goo.gl/kVmuvrgRuhVr9wVeA', 'http://Wa.me/+6285782766955', 'ducok.jpeg', 2),
(28, ' HAUSE TEA', ' https://maps.app.goo.gl/CpqFejxcn8uii3VPA', 'http://Wa.me/+6281466859760', 'house tea.jpeg', 2),
(29, ' RAKYAT BOBA', ' https://maps.app.goo.gl/Q4bcVH8UfkLd7gTk7', 'http://Wa.me/+6289602455200', 'rakyat boba.jpeg', 2),
(30, 'DAFFA DRINK', ' https://maps.app.goo.gl/k7LPDjNRh6nxgPwy7', 'http://Wa.me/+6287833346125', 'daffa drink.jpeg', 2),
(31, ' PAPIH AUS', ' https://maps.app.goo.gl/WioDJgKaX3MHpEB2A', 'http://Wa.me/+6289608970126', 'papih aus.jpeg', 2),
(32, ' CAPPUCINO CINCAU', ' https://maps.app.goo.gl/ZDf8nrfH9a5kPxM79', 'http://Wa.me/+628570330761', 'capcin ira.jpeg', 2),
(33, ' eSTW', ' https://maps.app.goo.gl/Syzzbbm1a2rFntNk9', 'http://Wa.me/+6285880133174', 'estw milky (1).jpeg', 2),
(34, ' BARISTA BUBBLE DRIN', ' https://maps.app.goo.gl/bmm81Mp7wQs3bcmZ6', 'http://Wa.me/+6287724000974', 'foto-produkbgrn5.jpg', 2),
(35, ' KANGEN DUREN', ' https://maps.app.goo.gl/PSK3SbMpWQQVbr82A', 'http://Wa.me/+6283170292922', 'estw milky (1).jpeg', 2),
(47, ' BAKSO PODOMORO', ' https://goo.gl/maps/mQcPNgVLBsmMCyi98', 'http://Wa.me/+62895358444481', 'filebakso mas furqon.jpg', 1),
(48, ' KEBAB AL FARIZ', ' https://maps.app.goo.gl/fyMwNbzwnN96JJRg9', 'http://Wa.me/+62895392375654', 'kebab al fariz.jpg', 1),
(49, ' BAKSO BAKAR R 5 UD', ' https://maps.app.goo.gl/n2nsUtQzXB3bdAYz5', 'http://Wa.me/+6288226514744', 'bakso bakar.jpg', 1),
(50, ' MARTABAK MAKNYUS', ' https://maps.app.goo.gl/r5NUwD5nctzwKePx6', 'http://Wa.me/+6288226514744', 'martabak maknyuss.jpg', 1),
(51, ' NASI GORENG TOP', ' https://maps.app.goo.gl/4PamtWjaCr861XZh9', 'http://Wa.me/+6285624361433', 'nasi goreng top.jpg', 1),
(52, ' BUBUR AYAM', ' https://maps.app.goo.gl/EsRzYLaEqMXWPsQW8', 'http://Wa.me/+6285713050037', 'bubur ayam mas towi.jpeg', 1),
(53, 'ATE FOOD', ' https://maps.app.goo.gl/iU8nDq14svBUGiZc6', 'http://Wa.me/+6283162087531', 'seblak mas ahmad.jpeg', 1),
(54, ' SATE AYAM', ' https://maps.app.goo.gl/B7jQkZrybQHixuVX8', 'http://Wa.me/+6283861348578', 'sate ayam abu siri.jpeg', 1),
(55, ' BAKSO SABAR SUBUR', ' https://maps.app.goo.gl/VHTTYN2NbdeKTueV7', 'http://Wa.me/+6287830047450', 'bakso sabar subur.jpeg', 1),
(56, ' KEBAB CAMP', ' https://maps.app.goo.gl/ch8djT2B1px31brF8', 'http://Wa.me/+62895391730333', 'kebab camp.jpeg', 1),
(57, ' KETOPRAK', ' https://maps.app.goo.gl/ksu7mfixTYAB4AyJ8', 'http://Wa.me/+6281914142621', 'ketoprak mas.jpeg', 1),
(58, ' ARTOZ SHOP', ' https://maps.app.goo.gl/zW3trY7c21KL86Sa9', 'http://Wa.me/+6282137710280', 'Artoz Shop.jpg', 3),
(59, ' AGINZA SHOP', ' https://maps.app.goo.gl/3ibbyvjysDLQuEEh9', 'http://Wa.me/+6281297512406', 'Aginza Shop.jpeg', 3),
(60, ' JIHAN COLLECTION', ' https://maps.app.goo.gl/sLf4yU8FBUNsUaBr6', 'http://Wa.me/+6283106484317', 'Jihan Collection.jpeg', 3),
(61, ' GURITA BABY SHOP', ' https://maps.app.goo.gl/rWHeJsDnFC2g5Kdm8', 'http://Wa.me/+6288806283501', 'Baby Gurita.jpeg', 3),
(62, ' VALDI FASHION', ' https://maps.app.goo.gl/BV9Z46s9DNfiWY578', 'http://Wa.me/+6288953968996', 'Valdi Fashion.jpeg', 3),
(63, ' MAULANA CELL', ' https://goo.gl/maps/Zf5bGM9FMhaiqsoo9', 'http://Wa.me/+62859126198895', 'a357d62e-5e3a-4aeb-88af-440c048d31ec.jpg', 4),
(64, ' EB KLATAK CELL', ' https://g.page/klatak-cell?share', 'http://Wa.me/+6285742127772', 'eb klatak cell.jpeg', 4),
(65, ' EZ CELL', ' https://maps.app.goo.gl/9b2NHT83dfDoVtTR6', 'http://Wa.me/+6285201008723', 'ez cell.jpeg', 4),
(66, ' ARIEL CELL', ' https://goo.gl/maps/dtKsUYysL5yPAstD7', 'http://Wa.me/+6285865566788', 'ariel cell.jpeg', 4),
(67, ' ACHSAN CELL', ' https://maps.app.goo.gl/kJF8XPzXMHEqHDnB9', 'http://Wa.me/+6287744666464', 'achsan cell.jpeg', 4),
(68, 'CENTRAL CELL', ' https://maps.app.goo.gl/pFGz6bshAaxeHhTq9', 'http://Wa.me/+6281282519552', 'wahyu cell.jpeg', 4),
(69, ' AL CELL', ' https://maps.app.goo.gl/KAvxSrJR7SkhmWDU6', 'http://Wa.me/+6282323654348', 'al cell.jpeg', 4),
(70, ' ALBI CELL', ' https://maps.app.goo.gl/mfZNqyhMhCQFoPxZ9', 'http://Wa.me/+6287884935484', 'albi cell.jpeg', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'gelas', 'kaca'),
(2, 'saep', 'saep123');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indeks untuk tabel `toko`
--
ALTER TABLE `toko`
  ADD PRIMARY KEY (`id_toko`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `menu`
--
ALTER TABLE `menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=147;

--
-- AUTO_INCREMENT untuk tabel `toko`
--
ALTER TABLE `toko`
  MODIFY `id_toko` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
