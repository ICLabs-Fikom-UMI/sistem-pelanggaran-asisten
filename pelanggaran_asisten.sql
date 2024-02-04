-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Feb 2024 pada 16.53
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
-- Database: `pelanggaran_asisten`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `angkatan`
--

CREATE TABLE `angkatan` (
  `ID_Angkatan` int(11) NOT NULL,
  `angkatan` year(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `angkatan`
--

INSERT INTO `angkatan` (`ID_Angkatan`, `angkatan`) VALUES
(1, '2019'),
(2, '2020'),
(3, '2021');

-- --------------------------------------------------------

--
-- Struktur dari tabel `asisten`
--

CREATE TABLE `asisten` (
  `ID_Asisten` int(11) NOT NULL,
  `stambuk` varchar(15) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `ID_Kelas` int(11) DEFAULT NULL,
  `ID_Angkatan` int(11) DEFAULT NULL,
  `ID_Jurusan` int(11) DEFAULT NULL,
  `ID_Status` int(11) DEFAULT NULL,
  `jenis_kelamin` enum('Pria','Wanita') DEFAULT NULL,
  `no_telp` varchar(15) DEFAULT NULL,
  `ID_User` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `asisten`
--

INSERT INTO `asisten` (`ID_Asisten`, `stambuk`, `nama`, `ID_Kelas`, `ID_Angkatan`, `ID_Jurusan`, `ID_Status`, `jenis_kelamin`, `no_telp`, `ID_User`) VALUES
(1, '13020210242', 'Nirmala', 13, 3, 1, 2, 'Wanita', '0895414025744', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jurusan`
--

CREATE TABLE `jurusan` (
  `ID_Jurusan` int(11) NOT NULL,
  `jurusan` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `jurusan`
--

INSERT INTO `jurusan` (`ID_Jurusan`, `jurusan`) VALUES
(1, 'Teknik Informatika'),
(2, 'Sistem Informasi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `ID_Kelas` int(11) NOT NULL,
  `kelas` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`ID_Kelas`, `kelas`) VALUES
(1, 'A1'),
(2, 'A2'),
(3, 'A3'),
(4, 'A4'),
(5, 'A5'),
(6, 'A6'),
(7, 'A7'),
(8, 'A8'),
(9, 'A9'),
(10, 'A10'),
(11, 'B1'),
(12, 'B2'),
(13, 'B3'),
(14, 'B4'),
(15, 'B5');

-- --------------------------------------------------------

--
-- Struktur dari tabel `notifikasi`
--

CREATE TABLE `notifikasi` (
  `ID_Notifikasi` int(11) NOT NULL,
  `pesan` text DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `ID_Asisten` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggaran`
--

CREATE TABLE `pelanggaran` (
  `ID_Pelanggaran` int(11) NOT NULL,
  `pelanggaran` text DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `ID_Asisten` int(11) DEFAULT NULL,
  `ID_TindakLanjut` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `pelanggaran`
--

INSERT INTO `pelanggaran` (`ID_Pelanggaran`, `pelanggaran`, `tanggal`, `ID_Asisten`, `ID_TindakLanjut`) VALUES
(1, 'Terlambat masuk kelas', '2024-02-04', 1, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `status`
--

CREATE TABLE `status` (
  `ID_Status` int(11) NOT NULL,
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `status`
--

INSERT INTO `status` (`ID_Status`, `status`) VALUES
(1, 'Asisten'),
(2, 'Calon Asisten');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tindak_lanjut`
--

CREATE TABLE `tindak_lanjut` (
  `ID_TindakLanjut` int(11) NOT NULL,
  `tindak_lanjut` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `tindak_lanjut`
--

INSERT INTO `tindak_lanjut` (`ID_TindakLanjut`, `tindak_lanjut`) VALUES
(1, 'Peringatan 1'),
(2, 'Peringatan 2'),
(3, 'Peringatan 3'),
(4, 'Menghadap'),
(5, 'Black List');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `ID_User` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `role` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`ID_User`, `nama`, `username`, `password`, `role`) VALUES
(1, 'Admin', 'admin@umi.ac.id', 'admin123', 'admin'),
(2, 'Intje Irfan Ibrahim', '13120190001@umi.ac.id', 'irfan', 'admin'),
(3, 'Nirmala', '13020210242@umi.ac.id', 'mala', 'asisten'),
(4, 'Muhammad Akbar ', '13120210008@umi.ac.id', 'akbar', 'asisten'),
(5, 'Athar Fathana Rakasyah ', '13020210287@umi.ac.id', 'athar', 'asisten'),
(6, 'Annisa Pratama Putri ', '13020210023@umi.ac.id', 'nisa', 'asisten'),
(7, 'Nurul Azmi ', '13020210066@umi.ac.id', 'ami', 'asisten'),
(8, 'Naufal Abiyyu Supriadi ', '13020210205@umi.ac.id', 'nofal', 'asisten'),
(9, 'Nasrullah', '13020210134@umi.ac.id', 'nass', 'asisten'),
(10, 'Ahmad Rendi ', '13020210048@umi.ac.id', 'rendi', 'asisten'),
(11, 'Furqon Fatahillah', '13120210005@umi.ac.id', 'moon', 'asisten'),
(12, 'Adam Adnan ', '13020200103@umi.ac.id', 'adam', 'asisten'),
(13, 'Muhammad Dani Arya Putra', '13120210004@umi.ac.id', 'koko', 'asisten'),
(14, 'As\'syahrin Nanda', '13020200318@umi.ac.id', 'syahrin', 'asisten'),
(15, 'Imran Afdillah Dahlan ', '13020210053@umi.ac.id', 'imran', 'asisten');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `angkatan`
--
ALTER TABLE `angkatan`
  ADD PRIMARY KEY (`ID_Angkatan`);

--
-- Indeks untuk tabel `asisten`
--
ALTER TABLE `asisten`
  ADD PRIMARY KEY (`ID_Asisten`),
  ADD UNIQUE KEY `stambuk_UNIQUE` (`stambuk`),
  ADD KEY `FK_Kelas_idx` (`ID_Kelas`),
  ADD KEY `FK_Angkatan_idx` (`ID_Angkatan`),
  ADD KEY `FK_Jurusan_idx` (`ID_Jurusan`),
  ADD KEY `FK_Status_idx` (`ID_Status`),
  ADD KEY `FK_User_idx` (`ID_User`);

--
-- Indeks untuk tabel `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`ID_Jurusan`);

--
-- Indeks untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`ID_Kelas`);

--
-- Indeks untuk tabel `notifikasi`
--
ALTER TABLE `notifikasi`
  ADD PRIMARY KEY (`ID_Notifikasi`),
  ADD KEY `fk_idasisten_idx` (`ID_Asisten`);

--
-- Indeks untuk tabel `pelanggaran`
--
ALTER TABLE `pelanggaran`
  ADD PRIMARY KEY (`ID_Pelanggaran`),
  ADD KEY `FK__idx` (`ID_Asisten`),
  ADD KEY `FK_TindakLanjut_idx` (`ID_TindakLanjut`);

--
-- Indeks untuk tabel `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`ID_Status`);

--
-- Indeks untuk tabel `tindak_lanjut`
--
ALTER TABLE `tindak_lanjut`
  ADD PRIMARY KEY (`ID_TindakLanjut`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID_User`),
  ADD UNIQUE KEY `username_UNIQUE` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `angkatan`
--
ALTER TABLE `angkatan`
  MODIFY `ID_Angkatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `asisten`
--
ALTER TABLE `asisten`
  MODIFY `ID_Asisten` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `ID_Jurusan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `kelas`
--
ALTER TABLE `kelas`
  MODIFY `ID_Kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `notifikasi`
--
ALTER TABLE `notifikasi`
  MODIFY `ID_Notifikasi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pelanggaran`
--
ALTER TABLE `pelanggaran`
  MODIFY `ID_Pelanggaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `status`
--
ALTER TABLE `status`
  MODIFY `ID_Status` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tindak_lanjut`
--
ALTER TABLE `tindak_lanjut`
  MODIFY `ID_TindakLanjut` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `ID_User` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `asisten`
--
ALTER TABLE `asisten`
  ADD CONSTRAINT `FK_Angkatan` FOREIGN KEY (`ID_Angkatan`) REFERENCES `angkatan` (`ID_Angkatan`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_Jurusan` FOREIGN KEY (`ID_Jurusan`) REFERENCES `jurusan` (`ID_Jurusan`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_Kelas` FOREIGN KEY (`ID_Kelas`) REFERENCES `kelas` (`ID_Kelas`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_Status` FOREIGN KEY (`ID_Status`) REFERENCES `status` (`ID_Status`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_User` FOREIGN KEY (`ID_User`) REFERENCES `user` (`ID_User`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `notifikasi`
--
ALTER TABLE `notifikasi`
  ADD CONSTRAINT `fk_idasisten` FOREIGN KEY (`ID_Asisten`) REFERENCES `asisten` (`ID_Asisten`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `pelanggaran`
--
ALTER TABLE `pelanggaran`
  ADD CONSTRAINT `FK_Asisten` FOREIGN KEY (`ID_Asisten`) REFERENCES `asisten` (`ID_Asisten`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_TindakLanjut` FOREIGN KEY (`ID_TindakLanjut`) REFERENCES `tindak_lanjut` (`ID_TindakLanjut`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
