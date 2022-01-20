-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 04 Okt 2019 pada 21.48
-- Versi Server: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `web_sekolah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int(5) NOT NULL AUTO_INCREMENT,
  `nama_admin` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(35) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `username`, `password`) VALUES
(1, 'Dedin', 'admin', '202cb962ac59075b964b07152d234b70'),
(2, 'Imam Nawawi', 'imam', '200ceb26807d6bf99fd6f4f0d1ca54d4'),
(3, 'Maruloh', 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota`
--

CREATE TABLE IF NOT EXISTS `anggota` (
  `id_anggota` int(5) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `nama_anggota` varchar(45) NOT NULL,
  `gender` enum('Laki-Laki','Perempuan') NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(35) NOT NULL,
  `nis` char(5) NOT NULL,
  `status2` enum('Belum Pilih','Sudah Pilih') NOT NULL,
  `kelas` varchar(35) NOT NULL,
  `jurusan` varchar(45) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  PRIMARY KEY (`id_anggota`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

--
-- Dumping data untuk tabel `anggota`
--

INSERT INTO `anggota` (`id_anggota`, `username`, `nama_anggota`, `gender`, `no_telp`, `alamat`, `email`, `password`, `nis`, `status2`, `kelas`, `jurusan`, `gambar`) VALUES
(40, 'b', 'Bayu', 'Laki-Laki', '', '', '', '202cb962ac59075b964b07152d234b70', '', 'Belum Pilih', 'XII', 'IPA 3', ''),
(37, 'ded', 'dedin', 'Laki-Laki', '', '', '', '202cb962ac59075b964b07152d234b70', '', 'Belum Pilih', 'X', 'IPA', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota2`
--

CREATE TABLE IF NOT EXISTS `anggota2` (
  `id_anggota` int(5) NOT NULL AUTO_INCREMENT,
  `nama_anggota` varchar(45) NOT NULL,
  `gender` enum('Laki-laki','Perempuan') NOT NULL,
  `no_telp` varchar(35) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(25) NOT NULL,
  PRIMARY KEY (`id_anggota`),
  KEY `nama_anggota` (`nama_anggota`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data untuk tabel `anggota2`
--

INSERT INTO `anggota2` (`id_anggota`, `nama_anggota`, `gender`, `no_telp`, `alamat`, `email`, `password`) VALUES
(1, 'dodi', 'Laki-laki', '0899999', 'Cikampek', 'dedinarc70@gmail.com', '202cb962ac59075b964b07152'),
(10, 'Chelsea', 'Perempuan', '0899999', 'karawang', 'chelsea@gmail.com', 'caf1a3dfb505ffed0d024130f'),
(12, 'Lusi', 'Perempuan', '0899999', 'Cikampek', 'lus33@gmail.com', '827ccb0eea8a706c4c34a1689'),
(13, 'Dedin', 'Laki-laki', '0899999', 'karawang', 'dedinarc70@gmail.com', '01cfcd4f6b8770febfb40cb90');

-- --------------------------------------------------------

--
-- Struktur dari tabel `calon_ketua`
--

CREATE TABLE IF NOT EXISTS `calon_ketua` (
  `id_calon` int(4) NOT NULL AUTO_INCREMENT,
  `nis` char(5) NOT NULL,
  `nama_calon` varchar(35) NOT NULL,
  `gender` enum('Laki-laki','Perempuan') NOT NULL,
  `kelas` varchar(35) NOT NULL,
  `alamat` varchar(40) NOT NULL,
  PRIMARY KEY (`id_calon`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `calon_ketua`
--

INSERT INTO `calon_ketua` (`id_calon`, `nis`, `nama_calon`, `gender`, `kelas`, `alamat`) VALUES
(1, '11111', 'Muchammad Baswaidan Dwi Alfarizi', 'Laki-laki', 'XI IPA 2', 'Karawang'),
(2, '22222', 'Nadira Rahma Oktafiani', 'Perempuan', 'XI IPA 2', 'Karawang'),
(3, '33333', 'Nurul Annisa Sholihah', 'Perempuan', 'XI IPA 3', 'Karawang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil_vote`
--

CREATE TABLE IF NOT EXISTS `hasil_vote` (
  `id_vote` int(4) NOT NULL AUTO_INCREMENT,
  `id_anggota` int(4) NOT NULL,
  `nama_calon` varchar(35) DEFAULT NULL,
  `status` enum('Sudah Pilih','Belum Pilih') NOT NULL,
  PRIMARY KEY (`id_vote`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=86 ;

--
-- Dumping data untuk tabel `hasil_vote`
--

INSERT INTO `hasil_vote` (`id_vote`, `id_anggota`, `nama_calon`, `status`) VALUES
(85, 37, 'Nadira Rahma Oktafiani', 'Sudah Pilih');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
