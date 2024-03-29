-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Apr 2019 pada 18.19
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer`
--

CREATE TABLE `customer` (
  `id_customer` varchar(13) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(13) NOT NULL,
  `gender` enum('laki-laki','perempuan','','') NOT NULL,
  `no_identitas` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `customer`
--

INSERT INTO `customer` (`id_customer`, `name`, `address`, `phone`, `gender`, `no_identitas`) VALUES
('C0012', 'klsaefjisdaljfk', 'klajljal', '012390231', 'laki-laki', '1112211'),
('C0013', 'hanan', 'pwt', '12', 'laki-laki', '1112211'),
('C0014', 'asa', 'as', 'sssas', 'laki-laki', '1112211'),
('C0015', 'sdfjjkasd', 'jasjfaj', 'klasklsfadjl', 'laki-laki', '1112211'),
('C0016', 'kakjas', 'kalfaj', 'klasfklas', 'laki-laki', '1112211'),
('C0017', 'asu', 'banfsa', 'sadhjkas', 'laki-laki', '1112211'),
('C0018', 'sadsdfam,', 'dafasddf', 'sfdafsda', 'laki-laki', '1112211'),
('C0019', 'skjal', 'ka', 'kaafklsd', 'laki-laki', '1112211'),
('C0020', 'test', 'test', 'sfaafsd', 'laki-laki', '1112211'),
('C0021', 'Mufti Ismi', 'Karangklese', '085715338630', 'laki-laki', '99918210391'),
('C0022', 'Muhammad Avtara Khrisna', 'Jalan Gunung Sumbing No. 18 RT 3/6, Bancarkembar,Purwokerto Utara', '082135650823', 'laki-laki', '213213'),
('C0023', 'dadwawda', 'wdadwada', 'dawdwaawd', 'laki-laki', '213213213'),
('C0024', 'Muhammad Avtara Khrisna', 'Jalan Gunung Sumbing No. 18 RT 3/6, Bancarkembar,Purwokerto Utara', '082135650823', 'laki-laki', '01239210'),
('C0025', 'wadjiajwd', 'ijdwaijdaijd', 'ijwadijawd', 'laki-laki', 'adkwjiwjda'),
('C0026', 'awdjiajwd', 'diwjadiwa', '213923', 'laki-laki', 'ijwaijwadi'),
('C0027', 'joko', 'joko', '082132138213', 'laki-laki', '082132138213'),
('C0028', 'joko1', 'joko1', '082132138213', 'laki-laki', '082132138213'),
('C0029', 'joko2', 'joko2', '082132138213', 'laki-laki', '082132138213'),
('C0030', 'TEST CARD1', 'kwaodkowakdoawkodwakodkaw', '0283023021', 'perempuan', '30230218302183'),
('C0031', 'test card2', 'iawdjiawdiwajdiwajd', '201310301239', 'laki-laki', '30230218302183'),
('C0032', 'TEST CARD1', 'kwaodkowakdoawkodwakodkaw', '0283023021', 'perempuan', '30230218302183'),
('C0033', 'test card2', 'iawdjiawdiwajdiwajd', '201310301239', 'laki-laki', '30230218302183'),
('C0034', 'coba lagi', 'wadijawd', '21839283', 'perempuan', '219382389213'),
('C0035', 'Muhammad Avtara Khrisna', 'Jalan Gunung Sumbing No. 18 RT 3/6, Bancarkembar,Purwokerto Utara', '082135650823', 'laki-laki', '082135650823'),
('C0036', 'coba lagi', 'Jalan Gunung Sumbing No. 18 RT 3/6, Bancarkembar,Purwokerto Utara', '082135650823', 'perempuan', '219382389213'),
('C0037', 'asdwadw', 'wdakoadw', '092130923', 'laki-laki', 'dawokdwaokdawd'),
('C0038', 'mau bayar', 'mau bayar dong ', '82135650823', 'perempuan', '082135650823'),
('C0039', 'Mamas Bayar', 'Jalan Gunung Sumbing No. 18 RT 3/6, Bancarkembar,Purwokerto Utara', '082135650823', 'laki-laki', '8231837239123'),
('C0040', 'Mamas Bayar', 'Mamas Bayar', '82382712', 'laki-laki', '8231837239123'),
('C0041', 'siapa cinta', 'wadkooawdkoakd', '823183213211', 'laki-laki', '2132132132131'),
('C0042', 'nyoba payment', 'wkaodkaowdk', '028382138', 'laki-laki', '210392139021'),
('C0043', 'dwaadw', 'adawd', '213123', 'perempuan', '9232183'),
('C0044', 'adwad', 'wadawdawd', '2103213213', 'laki-laki', '321321321'),
('C0045', 'wadawd', 'awdawd', '21321', 'laki-laki', '213213'),
('C0046', 'kurang', 'kurang', '21391293213', 'laki-laki', '123123123'),
('C0047', 'kurang 1', 'kurang 1', '12039129301', 'laki-laki', '12039129301'),
('C0048', 'kurang 2', 'kurang 2', '12039129301', 'laki-laki', '12039129301'),
('C0049', 'kurang 3', 'kurang 3', '12039129301', 'laki-laki', '12039129301'),
('C0050', 'tes kursi', 'kdoawkodakwdo', '0219312039', 'laki-laki', '2019301293213'),
('C0051', 'coba lagi', 'awdawd', '3213213', 'laki-laki', '213213213'),
('C0052', 'dawawd', 'dwaadw', 'wadwad', 'laki-laki', 'awdawd'),
('C0053', 'adw', 'daw', 'daw', 'laki-laki', 'wad'),
('C0054', 'adw', 'daw', 'daw', 'laki-laki', 'wad'),
('C0055', 'wda', 'awd', 'dwa', 'laki-laki', 'dwa'),
('C0056', 'dwa', 'dwadw', 'awdaw213', 'laki-laki', '213213'),
('C0057', 'wadwada', 'awdwadawd', 'wadawdad', 'laki-laki', 'adwadadawd'),
('C0058', 'wadada', 'wdaawd', 'dawawd', 'laki-laki', 'dawwd'),
('C0059', 'dawad', 'awdawd', 'awdawdawd', 'laki-laki', 'dawadawd'),
('C0060', 'awdawd', 'awdwad', 'awdawd', 'laki-laki', 'wadawd'),
('C0061', 'Mas Kanjeng', 'Coba Rute baru', '231239283', 'laki-laki', 'dwadwad');

-- --------------------------------------------------------

--
-- Struktur dari tabel `reservation`
--

CREATE TABLE `reservation` (
  `id_reservation` int(13) NOT NULL,
  `reservation_code` varchar(100) NOT NULL,
  `reservation_at` varchar(20) NOT NULL,
  `reservation_date` varchar(20) NOT NULL,
  `id_customer` varchar(13) NOT NULL,
  `id_transportation` varchar(13) NOT NULL,
  `id_rute` varchar(13) NOT NULL,
  `depart_at` datetime NOT NULL,
  `price` varchar(13) NOT NULL,
  `id_user` varchar(13) NOT NULL,
  `seat_code` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `reservation`
--

INSERT INTO `reservation` (`id_reservation`, `reservation_code`, `reservation_at`, `reservation_date`, `id_customer`, `id_transportation`, `id_rute`, `depart_at`, `price`, `id_user`, `seat_code`, `status`) VALUES
(48, 'U00012018022111', '15:36:11', '2018-02-21', 'C0002', 'T0001', '1', '2018-02-02 00:00:00', '10111', 'U0001', 1, 3),
(49, 'U00012018022111', '15:36:11', '2018-02-21', 'C0003', 'T0001', '1', '2018-02-02 00:00:00', '10111', 'U0001', 22, 3),
(50, 'U00022018022229', '01:02:29', '2018-02-22', 'C0004', 'T0001', '1', '2018-02-02 00:00:00', '10229', 'U0002', 7, 3),
(51, 'U00022018022229', '01:02:29', '2018-02-22', 'C0005', 'T0001', '1', '2018-02-02 00:00:00', '10229', 'U0002', 13, 3),
(52, 'U00022018022231', '07:32:31', '2018-02-22', 'C0006', 'T0001', '1', '2018-02-02 00:00:00', '10231', 'U0002', 41, 3),
(53, 'U00022018022231', '07:32:31', '2018-02-22', 'C0007', 'T0001', '1', '2018-02-02 00:00:00', '10231', 'U0002', 59, 3),
(106, 'u00032019041905', '08:00:05am', '2019-04-19', 'C0056', 'T0001', '1', '2018-02-02 10:00:00', '5000', 'u0003', 60, 0),
(107, 'u00032019041947', '08:01:47am', '2019-04-19', 'C0057', 'T0001', '1', '2018-02-02 10:00:00', '15000', 'u0003', 60, 0),
(108, 'u00032019041947', '08:01:47am', '2019-04-19', 'C0058', 'T0001', '1', '2018-02-02 10:00:00', '15000', 'u0003', 61, 0),
(109, 'u00032019041947', '08:01:47am', '2019-04-19', 'C0059', 'T0001', '1', '2018-02-02 10:00:00', '15000', 'u0003', 62, 0),
(110, 'u00032019041904', '08:03:04am', '2019-04-19', 'C0060', 'T0001', '1', '2018-02-02 10:00:00', '5000', 'u0003', 63, 0),
(111, 'U00062019042130', '14:06:30pm', '2019-04-21', 'C0061', 'T0004', '21', '2019-04-23 10:10:00', '220000', 'U0006', 1, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `rute`
--

CREATE TABLE `rute` (
  `id_rute` int(13) NOT NULL,
  `depart_at` datetime NOT NULL,
  `rute_from` varchar(50) NOT NULL,
  `rute_to` varchar(50) NOT NULL,
  `arrival` datetime NOT NULL,
  `price` varchar(13) NOT NULL,
  `id_transportation` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rute`
--

INSERT INTO `rute` (`id_rute`, `depart_at`, `rute_from`, `rute_to`, `arrival`, `price`, `id_transportation`) VALUES
(22, '2019-04-22 10:10:00', 'Jakarta(JKT)-Soekarno Hatta', 'Banyuwangi(BYN)-Kemerdekaan', '2019-04-22 12:12:00', '300000', 'T0001'),
(23, '2019-04-22 13:20:00', 'Jakarta(JKT)-Soekarno Hatta', 'Banyuwangi(BYN)-Kemerdekaan', '2019-04-22 15:22:00', '320000', 'T0001');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transportation`
--

CREATE TABLE `transportation` (
  `id_transportation` varchar(13) NOT NULL,
  `code` varchar(13) NOT NULL,
  `armada` varchar(100) NOT NULL,
  `seat_qty` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transportation`
--

INSERT INTO `transportation` (`id_transportation`, `code`, `armada`, `seat_qty`) VALUES
('T0001', 'CTV', 'Citilink', 20);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` varchar(13) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `handphone` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `level` enum('1','2','3') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `fullname`, `handphone`, `email`, `level`) VALUES
('u0003', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Admin', '8213823823', 'admin@admin.admin', '2'),
('U0006', 'test', 'cc03e747a6afbbcbf8be7668acfebee5', 'test', '0821382183', 'client@asiap.client', '1'),
('U0007', 'admon', 'e88bc7a1000d8df24baf02df11479720', 'Petugas Ganteng', '082138432832', 'petugas@asiap.petugas', '3');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indeks untuk tabel `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id_reservation`);

--
-- Indeks untuk tabel `rute`
--
ALTER TABLE `rute`
  ADD PRIMARY KEY (`id_rute`);

--
-- Indeks untuk tabel `transportation`
--
ALTER TABLE `transportation`
  ADD PRIMARY KEY (`id_transportation`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id_reservation` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT untuk tabel `rute`
--
ALTER TABLE `rute`
  MODIFY `id_rute` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
