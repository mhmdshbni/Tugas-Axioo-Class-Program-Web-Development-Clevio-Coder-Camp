-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Waktu pembuatan: 04 Des 2024 pada 06.08
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `daftar_buku_smkn4`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `no.induk siswa` int(11) NOT NULL,
  `nama buku` varchar(50) NOT NULL,
  `id_buku` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`no.induk siswa`, `nama buku`, `id_buku`) VALUES
(11111, 'Matematika', '1'),
(11112, 'B.Indonesia', '3'),
(11113, 'B.Inggris', '2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nama siswa`
--

CREATE TABLE `nama siswa` (
  `no.induk siswa` int(11) NOT NULL,
  `nama siswa` varchar(50) NOT NULL,
  `no.hp` varchar(12) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `id_buku` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `nama siswa`
--

INSERT INTO `nama siswa` (`no.induk siswa`, `nama siswa`, `no.hp`, `gender`, `id_buku`) VALUES
(11111, 'Febri', '0877776624', 'Laki-Laki', '1'),
(11112, 'Salman', '0877776654', 'Laki-Laki', '2'),
(11113, 'Rizky', '0877776666', 'Laki-Laki', '3');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`no.induk siswa`);

--
-- Indeks untuk tabel `nama siswa`
--
ALTER TABLE `nama siswa`
  ADD PRIMARY KEY (`no.induk siswa`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `buku`
--
ALTER TABLE `buku`
  MODIFY `no.induk siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11114;

--
-- AUTO_INCREMENT untuk tabel `nama siswa`
--
ALTER TABLE `nama siswa`
  MODIFY `no.induk siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11114;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `nama siswa`
--
ALTER TABLE `nama siswa`
  ADD CONSTRAINT `nama siswa_ibfk_1` FOREIGN KEY (`no.induk siswa`) REFERENCES `buku` (`no.induk siswa`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
