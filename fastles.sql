-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Okt 2019 pada 18.23
-- Versi server: 10.3.15-MariaDB
-- Versi PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fastles`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
--

CREATE TABLE `guru` (
  `idGuru` int(255) NOT NULL,
  `namaGuru` varchar(255) NOT NULL,
  `tglLahir` date NOT NULL,
  `noTelp` varchar(255) NOT NULL,
  `jenisKelamin` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `mapel` varchar(255) NOT NULL,
  `jenjang` varchar(30) NOT NULL,
  `uploadIjazah` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`idGuru`, `namaGuru`, `tglLahir`, `noTelp`, `jenisKelamin`, `alamat`, `mapel`, `jenjang`, `uploadIjazah`, `username`, `password`) VALUES
(3, 'Nabil', '2018-09-06', '12345678', 'Laki-laki', 'malang', 'IPA', 'SMP', '', 'fikri', '5d486424'),
(4, 'sule', '2018-09-14', '12345678', 'Laki-laki', 'malang', 'SOSIOLOGI', 'SMA', '', 'sule', '6a3c53f0'),
(7, 'zidane', '2018-09-12', '12345678', 'Laki-laki', 'Malang', 'IPA', 'SD', 'jdoqwiowq.jpg', 'zidane', 'zidane'),
(8, 'Mery Yuliati', '2019-10-12', '082232019404', 'Laki-laki', 'Jl. Kembang Turi No12B', 'Matematika', 'SMA', '', 'mery', 'd645710e');

-- --------------------------------------------------------

--
-- Struktur dari tabel `murid`
--

CREATE TABLE `murid` (
  `idMurid` int(11) NOT NULL,
  `namaMurid` varchar(255) NOT NULL,
  `tglLahir` date NOT NULL,
  `noTelp` varchar(255) NOT NULL,
  `jenisKelamin` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `jenjang` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `murid`
--

INSERT INTO `murid` (`idMurid`, `namaMurid`, `tglLahir`, `noTelp`, `jenisKelamin`, `alamat`, `jenjang`, `foto`, `username`, `password`) VALUES
(6, 'Nabil', '2018-10-06', '08232019404', 'Laki-laki', 'malang', 'SD', '', 'nabil', '070aa665'),
(7, 'Refly', '2018-10-10', '08232019404', 'Laki-laki', 'malang', 'SMP', '', 'refly', '826a0b5a'),
(8, 'Medik', '2018-10-03', '08232019404', 'Laki-laki', 'malang', 'SMA', '448763.jpg', 'medik', 'bd665d4f');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(11) NOT NULL,
  `fk_id_guru` int(11) NOT NULL,
  `fk_id_murid` int(11) NOT NULL,
  `tanggalPesan` date NOT NULL,
  `jam` time NOT NULL,
  `ket` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id`, `fk_id_guru`, `fk_id_murid`, `tanggalPesan`, `jam`, `ket`) VALUES
(1, 8, 8, '2019-10-12', '12:00:00', 'Diterima');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ulasan`
--

CREATE TABLE `ulasan` (
  `id` int(5) NOT NULL,
  `fk_id_guru` int(5) NOT NULL,
  `fk_id_murid` int(5) NOT NULL,
  `ulasan` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  `level` varchar(50) NOT NULL,
  `jenjang` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `level`, `jenjang`) VALUES
(3, 'admin', '21232f297a57a5a743894a0e4a801fc3', '1', ''),
(4, 'guru', '77e69c137812518e359196bb2f5e9bb9', '2', ''),
(40, 'nabil', '070aa66550916626673f492bdbdb655f', '3', 'SD'),
(41, 'refly', '826a0b5a71b3c82d29804d657f56ae8c', '3', 'SMP'),
(42, 'medik', 'bd665d4fc926739ea05b000f8ebf9cf8', '3', 'SMA'),
(43, 'mery', 'd645710ed9e8cfacb6e25d480ea8ccea', '2', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`idGuru`);

--
-- Indeks untuk tabel `murid`
--
ALTER TABLE `murid`
  ADD PRIMARY KEY (`idMurid`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_id_guru` (`fk_id_guru`),
  ADD KEY `fk_id_murid` (`fk_id_murid`);

--
-- Indeks untuk tabel `ulasan`
--
ALTER TABLE `ulasan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ulasan_ibfk_1` (`fk_id_guru`),
  ADD KEY `ulasan_ibfk_2` (`fk_id_murid`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `guru`
--
ALTER TABLE `guru`
  MODIFY `idGuru` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `murid`
--
ALTER TABLE `murid`
  MODIFY `idMurid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `ulasan`
--
ALTER TABLE `ulasan`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`fk_id_guru`) REFERENCES `guru` (`idGuru`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`fk_id_murid`) REFERENCES `murid` (`idMurid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `ulasan`
--
ALTER TABLE `ulasan`
  ADD CONSTRAINT `ulasan_ibfk_1` FOREIGN KEY (`fk_id_guru`) REFERENCES `guru` (`idGuru`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ulasan_ibfk_2` FOREIGN KEY (`fk_id_murid`) REFERENCES `murid` (`idMurid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
