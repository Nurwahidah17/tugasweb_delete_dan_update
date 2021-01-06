-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Des 2020 pada 10.14
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_d`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosen`
--

CREATE TABLE `dosen` (
  `nip` int(5) NOT NULL,
  `nama_dosen` varchar(20) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dosen`
--

INSERT INTO `dosen` (`nip`, `nama_dosen`, `alamat`) VALUES
(18917, 'abdilah', 'labuapi'),
(52627, 'adrian', 'lombok timur'),
(58441, 'yusuf', 'mataram');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` int(10) NOT NULL,
  `nama_mahasiswa` varchar(20) NOT NULL,
  `prodi` varchar(25) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama_mahasiswa`, `prodi`, `alamat`) VALUES
(1810530218, 'Al Bima', 'S1 Ilkom', 'Dompu'),
(1810530221, 'Bq Husnul Khofifah', 'S1 Ilkom', 'Praya'),
(1810530224, 'Nurwahidah', 'S1 Ilkom', 'Bima'),
(1810530229, 'Pandhu DIP', 'S1 Ilkom', 'Labuapi'),
(1810530255, 'Miftahul jannah', 'S1 Ilkom', 'Flores');

-- --------------------------------------------------------

--
-- Struktur dari tabel `perwalian`
--

CREATE TABLE `perwalian` (
  `id` int(11) NOT NULL,
  `dosen_nip` int(5) NOT NULL,
  `mahasiswa_nim` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`nip`),
  ADD UNIQUE KEY `nama_dosen` (`nama_dosen`);

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- Indeks untuk tabel `perwalian`
--
ALTER TABLE `perwalian`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `dosen_nip` (`dosen_nip`),
  ADD UNIQUE KEY `mahasiswa_nim` (`mahasiswa_nim`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `perwalian`
--
ALTER TABLE `perwalian`
  ADD CONSTRAINT `perwalian_ibfk_1` FOREIGN KEY (`dosen_nip`) REFERENCES `dosen` (`nip`),
  ADD CONSTRAINT `perwalian_ibfk_2` FOREIGN KEY (`mahasiswa_nim`) REFERENCES `mahasiswa` (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
