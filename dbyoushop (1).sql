-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2022 at 04:52 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbyoushop`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_konter`
--

CREATE TABLE `tbl_konter` (
  `ID` int(11) NOT NULL,
  `NAMA` varchar(200) NOT NULL,
  `DESKRIPSI` varchar(400) NOT NULL,
  `ALAMAT` varchar(300) NOT NULL,
  `CONTACT` varchar(200) NOT NULL,
  `FOTO` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_konter`
--

INSERT INTO `tbl_konter` (`ID`, `NAMA`, `DESKRIPSI`, `ALAMAT`, `CONTACT`, `FOTO`) VALUES
(1, 'MAULANA CELL', 'Menyediakan Berbagai Macam Produk-Pulsa All Operator-Vocher Kuota-Tagihan Listrik-Top UP Shopi Pay', 'https://goo.gl/maps/Zf5bGM9FMhaiqsoo9', 'https://wa.wizard.id/93bbb3', 'a357d62e-5e3a-4aeb-88af-440c048d31ec.jpg'),
(5, 'EB KLATAK CELL', 'Menyediakan berbagai macam Produk :   -  Voucher fisik   - Paket Data - Kartu Perdana - Token PLN - Tagihan BPJS', 'https://g.page/klatak-cell?share', 'https://wa.wizard.id/2cb24a', 'eb klatak cell.jpeg'),
(6, 'EZ CELL', 'Menyediakan berbagai macam Produk :  - Pulsa All Operator - Kartu Perdana - Voucher Fisik All Operator - Tagihan Listrik  -Menyediakan jasa Servis dan Jual Beli Hp Second', 'https://maps.app.goo.gl/9b2NHT83dfDoVtTR6', 'https://wa.wizard.id/987515', 'ez cell.jpeg'),
(7, 'ARIEL CELL', 'Menyediakan berbagai macam Produk :  Token Listrik - Top UP Game  - Pulsa All Operator - Kartu Perdana - Voucher Fisik All Operator - Tagihan Listrik  - Tersedia  Hp Baru', 'https://goo.gl/maps/dtKsUYysL5yPAstD7', 'https://wa.wizard.id/c957eb', 'ariel cell.jpeg'),
(10, 'ACHSAN CELL', 'Menyediakan berbagai macam Produk :   -  Voucher fisik   - Paket Data - Kartu Perdana - Token PLN - Tagihan BPJS', 'https://maps.app.goo.gl/kJF8XPzXMHEqHDnB9', 'https://wa.wizard.id/e809ff', 'achsan cell.jpeg'),
(11, 'WAHYU SENTRA CELL', 'Menyediakan berbagai macam Produk :  - Pulsa All Operator - Kartu Perdana - Voucher Fisik All Operator - Tagihan Listrik ', 'https://maps.app.goo.gl/pFGz6bshAaxeHhTq9', 'https://wa.wizard.id/ae81e5', 'wahyu cell.jpeg'),
(12, 'AL CELL', 'Menyediakan berbagai macam Produk :   -  Voucher fisik   - Paket Data - Kartu Perdana - Token PLN - Tagihan BPJS', 'https://maps.app.goo.gl/KAvxSrJR7SkhmWDU6', 'https://wa.wizard.id/99cf92', 'al cell.jpeg'),
(13, 'ALBI CELL', 'Menyediakan berbagai macam Produk :  - Pulsa All Operator - Kartu Perdana - Voucher Fisik All Operator - Tagihan Listrik ', 'https://maps.app.goo.gl/mfZNqyhMhCQFoPxZ9', 'https://wa.wizard.id/c78e22', 'albi cell.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_makanan`
--

CREATE TABLE `tbl_makanan` (
  `ID` int(11) NOT NULL,
  `NAMA` varchar(100) NOT NULL,
  `DESKRIPSI` varchar(400) NOT NULL,
  `ALAMAT` varchar(200) NOT NULL,
  `CONTACT` varchar(200) NOT NULL,
  `FOTO` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_makanan`
--

INSERT INTO `tbl_makanan` (`ID`, `NAMA`, `DESKRIPSI`, `ALAMAT`, `CONTACT`, `FOTO`) VALUES
(4, 'BAKSO DAN MIE AYAM', 'BAKSO DAN MIE AYAM PODOMORO Menyediakan berbagai macam Menu : -Bakso Biasa  Rp 6.000  -Bakso Tetelan Rp 10.000 -Bakso Jumbo Rp 10.000 -Mie Ayam Rp 8.000', 'https://goo.gl/maps/mQcPNgVLBsmMCyi98', 'https://wa.wizard.id/b4dca1', 'bakso mas furqon.jpg'),
(5, 'KEBAB AL FARIZ', 'KEBAB ALFARIZMenyediakan beragai macam Menu :Kebab  Rp 10.000 - Rp 15.000Roti Maryam Rp 12.000Burger Rp 12.000', 'https://maps.app.goo.gl/fyMwNbzwnN96JJRg9', 'https://wa.wizard.id/bbfbf1', 'kebab al fariz.jpg'),
(6, 'BAKSO BAKAR R 5 UD', 'MENYEDIAKAN MENU Bakso Bakar Rp 1000Sate Aci    Rp 500Buka Mulai Jam 15.00 sampai 22.00', 'https://maps.app.goo.gl/n2nsUtQzXB3bdAYz5', 'https://wa.wizard.id/51a556', 'bakso bakar.jpg'),
(7, 'MARTABAK MAKNYUS', 'Menyediakan Menu :-Martabak Kacang Rp 10.000-Martabak Kacang Coklat Rp 12.000-Martabak Coklat Keju Rp 13.000-Martabak Pisang Coklat Rp 13.000-Martabak Telor Spesial RP 18.000', 'https://maps.app.goo.gl/r5NUwD5nctzwKePx6', 'https://wa.wizard.id/51a556', 'martabak maknyuss.jpg'),
(22, 'NASI GORENG TOP LAMARAN ', 'Menyediakan Menu - Nasi Goreng    - Mie Rebus     -Kwetiau Goreng / Rebus    - Mie Goreng    - Capcay  Untuk Harga Rp 12.000', 'https://maps.app.goo.gl/4PamtWjaCr861XZh9', 'https://wa.wizard.id/238dcd', 'nasi goreng top.jpg'),
(25, 'BUBUR AYAM ', 'Menyedikan Menu = Bubur Ayam Rp 6.000  - Sate Telur Puyuh Rp 2.500 - Sate Ampela 2.500', 'https://maps.app.goo.gl/EsRzYLaEqMXWPsQW8', 'https://wa.wizard.id/aed6ee', 'bubur ayam mas towi.jpeg'),
(26, 'SEBLAK DAN SEMPOLAN', 'Menyediakan Sempolan dengan harga Rp 10.000 dan Sempolan RP 1.000', 'https://maps.app.goo.gl/iU8nDq14svBUGiZc6', 'https://wa.wizard.id/930ceb', 'seblak mas ahmad.jpeg'),
(27, 'BAKSO SABAR SUBUR', 'Menyediakan Menu = - Bakso Beranak Rp 10.000 - Bakso Tetelan Rp 10.000 - Bakso Mercon Rp 8.000 - Bakso Biasa Rp 6.000', 'https://maps.app.goo.gl/VHTTYN2NbdeKTueV7', 'https://wa.wizard.id/2c18c8', 'bakso sabar subur.jpeg'),
(28, 'SATE AYAM MADURA ', 'Sate Ayam Madura mas Abu Menyediakan Sate Ayam Asli Madura dengan harga Rp 35.000 per kodi', 'https://maps.app.goo.gl/B7jQkZrybQHixuVX8', 'https://wa.wizard.id/eb0ca9', 'sate ayam abu siri.jpeg'),
(29, 'KEBAB CAMP', 'Menyediakan Menu = -Original Kebab Rp 12.000 - Chiken Kebab Rp 13.000 - Burger Kebab Rp 10.000 - Pizza Kebab Rp 20.000', 'https://maps.app.goo.gl/ch8djT2B1px31brF8', 'https://wa.wizard.id/d178c4', 'kebab camp.jpeg'),
(30, 'KETOPRAK ', 'Menyediakan Ketoprak Biasa dan Ketoprak Telur dengan Harga Rp 10.000', 'https://maps.app.goo.gl/ksu7mfixTYAB4AyJ8', 'https://wa.wizard.id/2bbb31', 'ketoprak mas.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_minuman`
--

CREATE TABLE `tbl_minuman` (
  `ID` int(11) NOT NULL,
  `NAMA` varchar(200) NOT NULL,
  `DESKRIPSI` varchar(400) NOT NULL,
  `ALAMAT` varchar(400) NOT NULL,
  `CONTACT` varchar(200) NOT NULL,
  `FOTO` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_minuman`
--

INSERT INTO `tbl_minuman` (`ID`, `NAMA`, `DESKRIPSI`, `ALAMAT`, `CONTACT`, `FOTO`) VALUES
(4, 'VESCOBAR VOLT 2', 'MENYEDIAKAN MENU - Mletre Ceria Rp 13.000- Es Kopi Pak Guru Rp 15.000- V Go 15.000- Vietnam Drive Rp 12.000- Yakuza Rp 13.000', 'https://maps.app.goo.gl/rxD1vGojzWj4xNv38', 'https://wa.wizard.id/dc7e6b', 'vescobar id.jpg'),
(11, 'VAN BURY ', 'Menyediakan Berbagai Macam Minuman : - Cappucino - Mangga - Bluebery  Harga Mulai Rp 5.000', 'https://maps.app.goo.gl/z7iqt9JG7xrd56gs5', 'https://wa.wizard.id/b91634', 'van bury.jpeg'),
(12, 'DUCOK DAN PUCOK', 'Menyediakan Menu Minuman : -  Durian Kocok   - Alpukat Kocok Harga Mulai Rp 12.000 ', 'https://maps.app.goo.gl/kVmuvrgRuhVr9wVeA', 'https://wa.wizard.id/ced486', 'ducok.jpeg'),
(13, 'HAUSE TEA', 'Menyediakan Berbagai Macam Menu : - Tea Original Rp 5.000 - Lemon Tea Rp 5.000 - Seafood Bakar Rp 2.000', 'https://maps.app.goo.gl/CpqFejxcn8uii3VPA', 'https://wa.wizard.id/7dce1f', 'house tea.jpeg'),
(16, 'RAKYAT BOBA ', 'Menyediakan Menu= -Rakyat Klepon Boba Rp 10.000 - Rakyat Vanili Boba Rp 10.000 -Rakyat Taro Boba Rp 10.000', 'https://maps.app.goo.gl/Q4bcVH8UfkLd7gTk7', 'https://wa.wizard.id/9234d7', 'rakyat boba.jpeg'),
(17, 'DAFFA DRINK', 'Menyediakan Menu = - Cappucino Cincau - Es Coklat - Es Bubble dengan harga cuma Rp 5.000', 'https://maps.app.goo.gl/k7LPDjNRh6nxgPwy7', 'https://wa.wizard.id/9c8476', 'daffa drink.jpeg'),
(18, 'PAPIH AUS ', 'Menyediakan Menu = -Thai Tea Rp 10.000 - Taro Milk Rp 10.000 -Kopi Taro Rp 12.000 dan masih banyak lainnya dengan extra Topping + Rp 2.000', 'https://maps.app.goo.gl/WioDJgKaX3MHpEB2A', 'https://wa.wizard.id/65ff77', 'papih aus.jpeg'),
(19, 'CAPPUCINO CINCAU', 'Menyediakan Menu Cappucino Cincau dengan Harga Rp5.000', 'https://maps.app.goo.gl/ZDf8nrfH9a5kPxM79', 'https://wa.wizard.id/7963a1', 'capcin ira.jpeg'),
(20, 'eSTW', 'Menyediakan Menu = MILKY = -Coklat - Cappucino - Taro  - Red Velvet    .  SIGNATURE = - Bubble Gum - Mangga - Vanilla Latte dengan Harga Rp 7.000', 'https://maps.app.goo.gl/Syzzbbm1a2rFntNk9', 'https://wa.wizard.id/cd6cb8', 'estw milky (1).jpeg'),
(21, 'BARISTA BUBBLE DRINK', 'Menyediakan Menu = - Pappermint - Choco Oreo - Durian - Melon - Mangga dan masih banyak menu lainnya untuk harga Rp 7.000 dan + Rp 1.000 untuk topping ', 'https://maps.app.goo.gl/bmm81Mp7wQs3bcmZ6', 'https://wa.wizard.id/7e54b5', 'barista bubblee.jpeg'),
(22, 'KANGEN DUREN', 'Menyediakan Menu = -Es Kangen Duren Susu Rp 12.000 _ Es Durian Nangka Rp 12.000 - Alpukat Kocok Rp 10.000 - Es Dawet Tape Rp 7.000', 'https://maps.app.goo.gl/PSK3SbMpWQQVbr82A', 'https://wa.wizard.id/058c54', 'kangen duren.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `username`, `password`) VALUES
(1, 'user1', 'user123'),
(17, 'maulana mahmudi', '12345'),
(18, 'khamid', '12345'),
(19, 'aku', 'saya'),
(20, 'maulana', 'lana'),
(21, 'sepudin', 'asep123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_konter`
--
ALTER TABLE `tbl_konter`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_makanan`
--
ALTER TABLE `tbl_makanan`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_minuman`
--
ALTER TABLE `tbl_minuman`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_konter`
--
ALTER TABLE `tbl_konter`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_makanan`
--
ALTER TABLE `tbl_makanan`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `tbl_minuman`
--
ALTER TABLE `tbl_minuman`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
