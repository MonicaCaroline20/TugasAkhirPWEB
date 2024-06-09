-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Waktu pembuatan: 11 Des 2023 pada 08.04
-- Versi server: 8.0.35-0ubuntu0.22.04.1
-- Versi PHP: 8.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bas-222410102036`
--
CREATE DATABASE IF NOT EXISTS `bas-222410102036` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `bas-222410102036`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id` int NOT NULL,
  `nomor` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `nama` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `stok` int DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `foto` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `admin_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id`, `nomor`, `nama`, `stok`, `status`, `foto`, `admin_id`) VALUES
(1, '1', 'Proyektor Epson EB-S41 ', 3, 'tersedia', 'daftarBarang/1(1).png', NULL),
(2, '2', 'Kamera Canon EOS 80D ', 0, 'tidak tersedia', 'daftarBarang/1(2).jfif', NULL),
(3, '3', 'Mikrofon Audio-Technica ATR2100x ', 0, 'tidak tersedia', 'daftarBarang/1(3).jfif', NULL),
(4, '4', 'Whiteboard portable ', 0, 'tidak tersedia', 'daftarBarang/1(4).jfif', NULL),
(5, '5', 'Printer HP LaserJet Pro MFP M29w ', 0, 'tidak tersedia', 'daftarBarang/1(5).jfif', NULL),
(6, '6', 'Stabilizer Listrik ', 0, 'tidak tersedia', 'daftarBarang/1(6).jfif', NULL),
(7, '7', 'Drone DJI Mavic Air 2 ', 0, 'tidak tersedia', 'daftarBarang/1(7).jfif', NULL),
(8, '8', 'Stand Mikrofon', 2, 'tersedia', 'daftarBarang/1(8).jfif', NULL),
(9, '9', 'Layar Proyeksi ', 0, 'tidak tersedia', 'daftarBarang/1(9).jfif', NULL),
(10, '10', 'Kipas Angin Meja', 2, 'tersedia', 'daftarBarang/1(10).jfif', NULL),
(11, '11', 'Kursi Lipat Outdoor ', 1, 'tersedia', 'daftarBarang/1(11).jfif', NULL),
(12, '12', 'Kabel HDMI', 1, 'tersedia', 'daftarBarang/1(12).jfif', NULL),
(13, '13', 'Keyboard USB', 1, 'tersedia', 'daftarBarang/1(13).jfif', NULL),
(14, '14', 'Speaker Portable', 0, 'tidak tersedia', 'daftarBarang/1(14).jfif', NULL),
(15, '15', 'Pengeras Suara Bluetooth JBL Charge 4 ', 1, 'tersedia', 'daftarBarang/1(15).jfif', NULL),
(16, '16', 'Keyboard Mechanical Corsair K95 RGB Platinum', 3, 'tersedia', 'daftarBarang/1(16).jfif', NULL),
(17, '17', 'Printer HP LaserJet Pro', 2, 'tersedia', 'daftarBarang/1(17).jfif', NULL),
(18, '18', 'Drone racing', 0, 'tidak tersedia', 'daftarBarang/1(18).jfif', NULL),
(19, '19', 'Drone FPV', 3, 'tersedia', 'daftarBarang/1(19).jfif', NULL),
(20, '20', 'Drone delivery', 3, 'tersedia', 'daftarBarang/1(20).jfif', NULL),
(21, '21', 'Augmented reality headset', 2, 'tersedia', 'daftarBarang/1(21).jfif', NULL),
(22, '22', 'Alat Pemotong Kertas', 2, 'tersedia', 'daftarBarang/1(22).jfif', NULL),
(23, '23', 'Lampu Emergency', 2, 'tersedia', 'daftarBarang/1(23).jfif', NULL),
(24, '24', 'Alat Ukur Multimeter', 0, 'tidak tersedia', 'daftarBarang/1(24).jfif', NULL),
(25, '25', 'Kabel Charger Universal', 5, 'tersedia', 'daftarBarang/1(25).jfif', NULL),
(26, '26', 'Karpet Kursi', 1, 'tersedia', 'daftarBarang/1(26).jfif', NULL),
(27, '27', 'Kipas Pendingin CPU', 3, 'tersedia', 'daftarBarang/1(27).jfif', NULL),
(28, '28', 'Alat Pendeteksi Gas', 0, 'tidak tersedia', 'daftarBarang/1(28).jfif', NULL),
(29, '29', 'Peralatan Soldering', 0, 'tidak tersedia', 'daftarBarang/1(29).jfif', NULL),
(30, '30', 'Power Bank', 5, 'tersedia', 'daftarBarang/1(30).jfif', NULL),
(31, '31', 'Papan Pengumuman Elektronik', 5, 'tersedia', 'daftarBarang/1(31).jfif', NULL),
(32, '32', 'Kotak P3K', 10, 'tersedia', NULL, NULL),
(33, '33', 'Kamera Pengawas', 8, 'tersedia', 'daftarBarang/1(33).jfif', NULL),
(34, '34', 'Tablet Grafis', 3, 'tersedia', 'daftarBarang/1(34).jfif', NULL),
(35, '35', 'Kabel Power Strip', 9, 'tersedia', 'daftarBarang/1(35).jfif', NULL),
(36, '36', 'Monitor Touchscreen', 5, 'tersedia', 'daftarBarang/1(36).jfif', NULL),
(37, '37', 'Alat Pemadam Api', 5, 'tersedia', 'daftarBarang/1(37).jfif', NULL),
(38, '38', 'Kipas Angin', 0, 'tidak tersedia', 'daftarBarang/1(38).jfif', NULL),
(39, '39', 'Software Visual Studio Code', 3, 'tersedia', 'daftarBarang/1(39).jfif', NULL),
(40, '40', 'Buku Panduan Python', 10, 'tersedia', 'daftarBarang/1(40).jfif', NULL),
(41, '41', 'Buku Referensi Komputer', 0, 'tidak tersedia', 'daftarBarang/1(41).jfif', NULL),
(42, '42', 'Kabel Jumper', 5, 'tersedia', 'daftarBarang/1(42).jfif', NULL),
(43, '43', 'Modul Sensor IoT', 3, 'tersedia', 'daftarBarang/1(43).jfif', NULL),
(44, '44', 'Raspberry Pi', 2, 'tersedia', 'daftarBarang/1(44).jfif', NULL),
(45, '45', 'Alat Pemrograman Arduino', 0, 'tidak tersedia', 'daftarBarang/1(45).jfif', NULL),
(46, '46', 'Pengisi Daya USB', 0, 'tidak tersedia', 'daftarBarang/1(46).jfif', NULL),
(47, '47', 'Baterai AAA', 15, 'tersedia', 'daftarBarang/1(47).jfif', NULL),
(48, '48', 'Senter', 10, 'tersedia', 'daftarBarang/1(48).jfif', NULL),
(49, '49', 'Baterai AA', 15, 'tersedia', 'daftarBarang/1(49).jfif', NULL),
(50, '50', 'Tripod', 6, 'tersedia', 'daftarBarang/1(50).jfif', NULL),
(51, '51', 'Kamera DSLR', NULL, 'tersedia', 'daftarBarang/1(51).jfif', NULL),
(52, '52', 'Printer Inkjet', 0, 'tidak tersedia', 'daftarBarang/1(52).jfif', NULL),
(53, '53', 'Monitor LCD', 4, 'tersedia', 'daftarBarang/1(53).jfif', NULL),
(54, '54', 'Mouse USB', 5, 'tersedia', 'daftarBarang/1(54).jfif', NULL),
(55, '55', 'Set Alat Voli ', 0, 'tidak tersedia', 'daftarBarang/1(55).jfif', NULL),
(56, '56', 'Set Alat Tenis Meja ', 0, 'tidak tersedia', 'daftarBarang/1(56).jfif', NULL),
(57, '57', 'Set Alat Bulu Tangkis', 6, 'tersedia', 'daftarBarang/1(57).jfif', NULL),
(58, '58', 'Set Alat Sepak Bola', 2, 'tersedia', 'daftarBarang/1(58).jfif', NULL),
(59, '59', 'Papan Panah (Dartboard)', 4, 'tersedia', 'daftarBarang/1(59).jfif', NULL),
(60, '60', 'Stand Banner Portable', NULL, 'tersedia', 'daftarBarang/1(60).jfif', NULL),
(61, '61', 'Speaker Bluetooth Sony SRS-X9', 3, 'tersedia', 'daftarBarang/1(61).jfif', NULL),
(62, '62', 'Proyektor Mini', 6, 'tersedia', 'daftarBarang/1(62).jfif', NULL),
(63, '63', 'Whiteboard Interaktif', 7, 'tersedia', 'daftarBarang/1(63).jfif', NULL),
(64, '64', 'Kursi Lipat Outdoor', 5, 'tersedia', 'daftarBarang/1(64).jfif', NULL),
(65, '65', 'Lampu UV Sterilisasi', 5, 'tersedia', 'daftarBarang/1(65).jfif', NULL),
(66, '66', 'Printer Label DYMO LabelWriter 450', 4, 'tersedia', 'daftarBarang/1(66).jfif', NULL),
(67, '67', 'Mesin Fotokopi Canon imageRUNNER 2206', 0, 'tidak tersedia', 'daftarBarang/1(67).jfif', NULL),
(68, '68', 'Kursi Ergonomis', 7, 'tersedia', 'daftarBarang/1(68).jfif', NULL),
(69, '69', 'Pembaca Kartu Magnetik', 4, 'tersedia', 'daftarBarang/1(69).jfif', NULL),
(70, '70', 'Alat Pelacak GPS', 0, 'tidak tersedia', 'daftarBarang/1(70).jfif', NULL),
(71, '71', 'Kamera Pengintai IP', 5, 'tersedia', 'daftarBarang/1(71).jfif', NULL),
(72, '72', 'Scanner Kode Batang', 6, 'tersedia', 'daftarBarang/1(72).jfif', NULL),
(73, '73', 'Alat Pemotong Kertas Fellowes', 0, 'tidak tersedia', 'daftarBarang/1(73).jfif', NULL),
(74, '74', 'Smart TV Samsung 50 inci', 0, 'tidak tersedia', 'daftarBarang/1(74).jfif', NULL),
(75, '75', 'Proyektor 3D', 6, 'tersedia', 'daftarBarang/1(75).jfif', NULL),
(76, '76', 'Layar LCD 55 inci', 5, 'tersedia', 'daftarBarang/1(76).jfif', NULL),
(77, '77', 'Pengeras Suara Bluetooth JBL', 7, 'tersedia', 'daftarBarang/1(77).jfif', NULL),
(78, '78', 'Mesin Fax Brother FAX-2849', 7, 'tersedia', 'daftarBarang/1(78).jfif', NULL),
(79, '79', 'Alat Ukur Laser Bosch GLM 50', 0, 'tidak tersedia', 'daftarBarang/1(79).jfif', NULL),
(80, '80', 'Peta Dunia Interaktif', 5, 'tersedia', 'daftarBarang/1(80).jfif', NULL),
(81, '81', 'Jam Dinding Digital', 5, 'tersedia', 'daftarBarang/1(81).jfif', NULL),
(82, '82', 'Mesin Absensi Sidik Jari', 5, 'tersedia', 'daftarBarang/1(82).jfif', NULL),
(83, '83', 'RFID Reader', 4, 'tersedia', 'daftarBarang/1(83).jfif', NULL),
(84, '84', 'Alat Kasir POS System', 2, 'tersedia', 'daftarBarang/1(84).jfif', NULL),
(85, '85', 'Kabel USB Type-C 2 meter', 4, 'tersedia', 'daftarBarang/1(85).jfif', NULL),
(86, '86', 'Meja Pribadi Lipat', 1, 'tersedia', 'daftarBarang/1(86).jfif', NULL),
(87, '87', 'Lampu Kantor LED', 3, 'tersedia', 'daftarBarang/1(87).jfif', NULL),
(88, '88', 'Podium Portable', 2, 'tersedia', 'daftarBarang/1(88).jfif', NULL),
(89, '89', 'Headset Logitech G Pro X', 3, 'tersedia', 'daftarBarang/1(89).jfif', NULL),
(90, '90', 'Portable Green Screen', 5, 'tersedia', 'daftarBarang/1(90).jfif', NULL),
(91, '91', 'Wireless Presenter Logitech R400', 5, 'tersedia', 'daftarBarang/1(91).jfif', NULL),
(92, '92', 'Tripod Manfrotto MK190X3-2W', 5, 'tersedia', 'daftarBarang/1(92).jfif', NULL),
(93, '93', 'Monitor Stand Adjustable', 4, 'tersedia', 'daftarBarang/1(93).jfif', NULL),
(94, '94', 'Tas Laptop Samsonite', 6, 'tersedia', 'daftarBarang/1(94).jfif', NULL),
(95, '95', 'Koper Hardcase untuk Kamera', 5, 'tersedia', 'daftarBarang/1(95).jfif', NULL),
(96, '96', 'Alat Perekam Suara Zoom H5', 3, 'tersedia', 'daftarBarang/1(96).jfif', NULL),
(97, '97', 'Drone DJI Mavic Air 2', 2, 'tersedia', 'daftarBarang/1(97).jfif', NULL),
(98, '98', 'Keyboard Mechanical Corsair K95 RGB Platinum', 3, 'tersedia', 'daftarBarang/1(98).jfif', NULL),
(99, '99', 'Kabel VGA 3 meter', 5, 'tersedia', 'daftarBarang/1(99).jfif', NULL),
(100, '100', 'Scanner Epson Perfection V600', 6, 'tersedia', 'daftarBarang/1(100).jfif', NULL),
(103, NULL, 'P', 1, 'tersedia', 'daftarBarang/20230520_172731.jpg', NULL),
(106, NULL, 'P', 1, 'tersedia', 'daftarBarang/20230520_172731.jpg', NULL),
(107, NULL, 'P', 1, 'tersedia', 'daftarBarang/WhatsApp Image 2023-10-02 at 20.51.41', NULL),
(108, NULL, 'P', 1, 'tersedia', 'public/img/daftarBarang/WhatsApp Image 2023-10-02 ', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pinjambarang`
--

CREATE TABLE `pinjambarang` (
  `id` int NOT NULL,
  `id_barang` int DEFAULT NULL,
  `id_user` int DEFAULT NULL,
  `tgl_mulai` date DEFAULT NULL,
  `tgl_selesai` date DEFAULT NULL,
  `qty` int DEFAULT NULL,
  `lokasi_barang` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `status` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `admin_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pinjambarang`
--

INSERT INTO `pinjambarang` (`id`, `id_barang`, `id_user`, `tgl_mulai`, `tgl_selesai`, `qty`, `lokasi_barang`, `status`, `admin_id`) VALUES
(1, 26, 1, '2023-12-05', '2023-12-22', 1, 'awd', 'approve', NULL),
(2, 26, 9, '2023-12-05', '2023-02-07', 1, 'A3.1', 'approve', NULL),
(3, 22, 2, '2023-12-05', '2023-12-29', 1, 'awd', 'approve', NULL),
(4, 12, 9, '2023-12-05', '2023-12-07', 1, 'A3.1', 'approve', NULL);

--
-- Trigger `pinjambarang`
--
DELIMITER $$
CREATE TRIGGER `after_pinjambarang_update` AFTER UPDATE ON `pinjambarang` FOR EACH ROW BEGIN
    IF NEW.status = 'approve' THEN
        INSERT INTO rekapitulasibarang (
            id_barang,
            id_user,
            tgl_mulai,
            tgl_selesai,
            qty,
            lokasi_barang
        ) VALUES (
            NEW.id_barang,
            NEW.id_user,
            NEW.tgl_mulai,
            NEW.tgl_selesai,
            NEW.qty,
            NEW.lokasi_barang
        );
    END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pinjamruang`
--

CREATE TABLE `pinjamruang` (
  `id` int NOT NULL,
  `id_ruang` int DEFAULT NULL,
  `id_user` int DEFAULT NULL,
  `tgl_mulai` date DEFAULT NULL,
  `tgl_selesai` date DEFAULT NULL,
  `lokasi_ruang` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `status` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `qty` int DEFAULT NULL,
  `admin_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pinjamruang`
--

INSERT INTO `pinjamruang` (`id`, `id_ruang`, `id_user`, `tgl_mulai`, `tgl_selesai`, `lokasi_ruang`, `status`, `qty`, `admin_id`) VALUES
(1, 9, 1, '2023-12-05', '2024-01-06', 'awd', 'prosespengembalian', 1, NULL),
(2, 1, 1, '2023-12-05', '2024-01-15', 'test faruq', 'approve', 2, NULL),
(3, 10, 1, '2023-12-05', '2023-12-14', 'ef', 'approve', 1, NULL),
(4, 8, 9, '2023-12-05', '2023-12-07', 'Lab. AI', 'approve', 1, NULL),
(5, 5, 1, '2023-12-05', '2023-12-27', 'gedung baru', 'menunggu', 1, NULL),
(6, 7, 10, '2023-12-05', '2023-12-29', 'Gedung lama', 'approve', 1, NULL);

--
-- Trigger `pinjamruang`
--
DELIMITER $$
CREATE TRIGGER `after_pinjamruang_update` AFTER UPDATE ON `pinjamruang` FOR EACH ROW BEGIN
    IF NEW.status = 'approve' THEN
        INSERT INTO rekapitulasiruang (
            id_ruang,
            id_user,
            tgl_mulai,
            tgl_selesai,
            qty,
            lokasi_ruang
        ) VALUES (
            NEW.id_ruang,
            NEW.id_user,
            NEW.tgl_mulai,
            NEW.tgl_selesai,
            NEW.qty,
            NEW.lokasi_ruang
        );
    END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `rekapitulasibarang`
--

CREATE TABLE `rekapitulasibarang` (
  `id` int NOT NULL,
  `id_barang` int DEFAULT NULL,
  `id_user` int DEFAULT NULL,
  `tgl_mulai` date DEFAULT NULL,
  `tgl_selesai` date DEFAULT NULL,
  `qty` int DEFAULT NULL,
  `lokasi_barang` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `rekapitulasibarang`
--

INSERT INTO `rekapitulasibarang` (`id`, `id_barang`, `id_user`, `tgl_mulai`, `tgl_selesai`, `qty`, `lokasi_barang`) VALUES
(1, 20, 2, '2023-11-28', '0000-00-00', 1, ''),
(2, 27, 1, '2023-11-28', '0000-00-00', 1, ''),
(3, 7, 2, '2023-11-28', '0000-00-00', 1, ''),
(4, 20, 1, '2023-12-05', '0000-00-00', 1, ''),
(5, 19, 1, '2023-12-05', '2024-01-05', 1, 'b1b2'),
(6, 26, 1, '2023-12-05', '2023-12-22', 1, 'awd'),
(7, 26, 9, '2023-12-05', '2023-02-07', 1, 'A3.1'),
(8, 22, 2, '2023-12-05', '2023-12-29', 1, 'awd'),
(9, 12, 9, '2023-12-05', '2023-12-07', 1, 'A3.1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rekapitulasiruang`
--

CREATE TABLE `rekapitulasiruang` (
  `id` int NOT NULL,
  `id_ruang` int DEFAULT NULL,
  `id_user` int DEFAULT NULL,
  `tgl_mulai` date DEFAULT NULL,
  `tgl_selesai` date DEFAULT NULL,
  `qty` int DEFAULT NULL,
  `lokasi_ruang` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `rekapitulasiruang`
--

INSERT INTO `rekapitulasiruang` (`id`, `id_ruang`, `id_user`, `tgl_mulai`, `tgl_selesai`, `qty`, `lokasi_ruang`) VALUES
(1, 2, 1, '2023-11-30', '0000-00-00', 1, ''),
(2, 9, 1, '2023-12-05', '2024-01-06', 1, 'awd'),
(3, 1, 1, '2023-12-05', '2024-01-15', 2, 'test faruq'),
(4, 10, 1, '2023-12-05', '2023-12-14', 1, 'ef'),
(5, 8, 9, '2023-12-05', '2023-12-07', 1, 'Lab. AI'),
(6, 7, 10, '2023-12-05', '2023-12-29', 1, 'Gedung lama');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ruang`
--

CREATE TABLE `ruang` (
  `id` int NOT NULL,
  `nomor` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `nama` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `stok` int DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `foto` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `admin_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `ruang`
--

INSERT INTO `ruang` (`id`, `nomor`, `nama`, `stok`, `status`, `foto`, `admin_id`) VALUES
(1, '1', 'Ruang Kelas A3.1', -1, 'tidak tersedia', '0', NULL),
(2, '2', 'Ruang Kelas A3.2', 0, 'tidak tersedia', '0', NULL),
(3, '3', 'Ruang Kelas A3.3', 0, 'tersedia', '0', NULL),
(4, '4', 'Ruang Kelas A3.4', 0, 'tersedia', '0', NULL),
(5, '5', 'Ruang Kelas A4.3', 0, 'tidak tersedia', '0', NULL),
(6, '6', 'Ruang Kelas A4.4', 0, 'tersedia', '0', NULL),
(7, '7', 'Lab. Pertanian Cerdas', 0, 'tidak tersedia', '0', NULL),
(8, '8', 'Lab. AI', 0, 'tersedia', '0', NULL),
(9, '9', 'Ruang Baca', 0, 'tersedia', '0', NULL),
(10, '10', 'Ryper Lab', 0, 'tidak tersedia', '0', NULL),
(11, '11', 'Ruang Internasional', 1, 'tersedia', '0', NULL),
(12, '12', 'Ruang Tengah', 1, 'tersedia', '0', NULL),
(13, NULL, 'P', 1, 'p', 'public/img/daftarRuang/20230520_172753.jpg', NULL),
(14, NULL, 'P', 1, 'p', 'public/img/daftarRuang/20230520_172753.jpg', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `sertif`
--

CREATE TABLE `sertif` (
  `id` int NOT NULL,
  `image` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `sertif`
--

INSERT INTO `sertif` (`id`, `image`) VALUES
(1, 'Komponen/cer1.jpg'),
(2, 'Komponen/cer2.jpg'),
(3, 'Komponen/cer3.jpg'),
(4, 'Komponen/cer4.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `password` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `nim` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `prodi` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `nama` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `username` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `foto` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `jumlah_barang_dipinjam` int DEFAULT NULL,
  `jumlah_ruang_dipinjam` int DEFAULT NULL,
  `admin_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `nim`, `prodi`, `nama`, `username`, `foto`, `jumlah_barang_dipinjam`, `jumlah_ruang_dipinjam`, `admin_id`) VALUES
(1, 'rea17@gmail.com', 'inireamor', '222410102032', 'Teknologi Informasi', 'rea sidabutar', 'inireaa', 'public/img/profile/user_1.jpg', 5, 9, NULL),
(2, 'bas123@gmail.com', '123', '222410102036', 'Teknologi Informasi', 'Bas ori', 'basori', 'public/img/profile/user_1.jpg', 3, NULL, NULL),
(3, 'Monica123@gmail.com', '1234', '222410102035', 'Teknologi Informasi', 'Monica Caroline', 'Monica', 'public/img/profile/user_1.jpg', 0, NULL, NULL),
(4, 'monica123', '123', '222410102000', 'Teknologi Informasi', 'monica ca', 'caro', 'public/img/profile/user_1.jpg', NULL, NULL, NULL),
(5, 'qwqw@gmail.com', '123', '123', 'Nim Tidak Valid', 'p', 'qw', 'public/img/profile/user_1.jpg', NULL, NULL, NULL),
(6, 'q@gmail.com', '123', '123', 'Nim Tidak Valid', 'p', 'qewe', 'public/img/profile/user_1.jpg', NULL, NULL, NULL),
(7, 'dw@gmail', '123', 'wdw', 'Nim Tidak Valid', 'daw wd', 'p', 'public/img/profile/user_1.jpg', NULL, NULL, NULL),
(8, 'moni@gmail.com', 'qwe', '222410102035', 'Teknologi Informasi', 'monica caroline', 'moni', 'public/img/profile/user_1.jpg', NULL, NULL, NULL),
(9, 'Monic@gmail.com', '456', '222410102035', 'Teknologi Informasi', 'Monica Caroline', 'Monik', 'public/img/profile/user_9.jpg', 7, 2, NULL),
(10, 'bashori@gmail.com', '123', '222410102036', 'Teknologi Informasi', 'Nur Bashori', 'Nur Bashori', 'public/img/profile/user_10.jpg', NULL, 1, NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`username`);

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nomor` (`nomor`),
  ADD KEY `admin_id` (`admin_id`);

--
-- Indeks untuk tabel `pinjambarang`
--
ALTER TABLE `pinjambarang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_barang` (`id_barang`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `admin_id` (`admin_id`);

--
-- Indeks untuk tabel `pinjamruang`
--
ALTER TABLE `pinjamruang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_ruang` (`id_ruang`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `admin_id` (`admin_id`);

--
-- Indeks untuk tabel `rekapitulasibarang`
--
ALTER TABLE `rekapitulasibarang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_barang` (`id_barang`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `rekapitulasiruang`
--
ALTER TABLE `rekapitulasiruang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_ruang` (`id_ruang`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `ruang`
--
ALTER TABLE `ruang`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nomor` (`nomor`),
  ADD KEY `admin_id` (`admin_id`);

--
-- Indeks untuk tabel `sertif`
--
ALTER TABLE `sertif`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admin_id` (`admin_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT untuk tabel `pinjambarang`
--
ALTER TABLE `pinjambarang`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `pinjamruang`
--
ALTER TABLE `pinjamruang`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `rekapitulasibarang`
--
ALTER TABLE `rekapitulasibarang`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `rekapitulasiruang`
--
ALTER TABLE `rekapitulasiruang`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `ruang`
--
ALTER TABLE `ruang`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `sertif`
--
ALTER TABLE `sertif`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `barang_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`id`);

--
-- Ketidakleluasaan untuk tabel `pinjambarang`
--
ALTER TABLE `pinjambarang`
  ADD CONSTRAINT `pinjambarang_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id`),
  ADD CONSTRAINT `pinjambarang_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `pinjambarang_ibfk_3` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`id`);

--
-- Ketidakleluasaan untuk tabel `pinjamruang`
--
ALTER TABLE `pinjamruang`
  ADD CONSTRAINT `pinjamruang_ibfk_1` FOREIGN KEY (`id_ruang`) REFERENCES `ruang` (`id`),
  ADD CONSTRAINT `pinjamruang_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `pinjamruang_ibfk_3` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`id`);

--
-- Ketidakleluasaan untuk tabel `rekapitulasibarang`
--
ALTER TABLE `rekapitulasibarang`
  ADD CONSTRAINT `rekapitulasibarang_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id`),
  ADD CONSTRAINT `rekapitulasibarang_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Ketidakleluasaan untuk tabel `rekapitulasiruang`
--
ALTER TABLE `rekapitulasiruang`
  ADD CONSTRAINT `rekapitulasiruang_ibfk_1` FOREIGN KEY (`id_ruang`) REFERENCES `ruang` (`id`),
  ADD CONSTRAINT `rekapitulasiruang_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Ketidakleluasaan untuk tabel `ruang`
--
ALTER TABLE `ruang`
  ADD CONSTRAINT `ruang_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`id`);

--
-- Ketidakleluasaan untuk tabel `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
