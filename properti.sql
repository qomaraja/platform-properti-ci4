-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Jan 2025 pada 06.53
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
-- Database: `properti`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_activation_attempts`
--

CREATE TABLE `auth_activation_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups`
--

CREATE TABLE `auth_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups_permissions`
--

CREATE TABLE `auth_groups_permissions` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups_users`
--

CREATE TABLE `auth_groups_users` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_logins`
--

CREATE TABLE `auth_logins` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `auth_logins`
--

INSERT INTO `auth_logins` (`id`, `ip_address`, `email`, `user_id`, `date`, `success`) VALUES
(1, '::1', 'iniproperti1@gmail.com', 3, '2024-11-21 10:36:37', 1),
(2, '::1', 'binsani', NULL, '2024-11-21 10:52:42', 0),
(3, '::1', 'iniproperti1@gmail.com', 3, '2024-11-21 10:52:52', 1),
(4, '::1', 'iniproperti1@gmail.com', 3, '2024-11-21 10:55:33', 1),
(5, '::1', 'binsani', NULL, '2024-11-21 10:56:20', 0),
(6, '::1', 'iniproperti', NULL, '2024-11-21 10:56:28', 0),
(7, '::1', 'iniproperti1@gmail.com', 3, '2024-11-21 11:03:34', 1),
(8, '::1', 'iniproperti1@gmail.com', 3, '2024-11-21 11:03:46', 1),
(9, '182.2.38.141', 'iniproperti1@gmail.com', 3, '2024-11-21 19:19:59', 1),
(10, '104.28.219.247', 'iniproperti1@gmail.com', 3, '2024-11-23 11:21:06', 1),
(11, '182.2.38.141', 'iniproperti1@gmail.com', 3, '2024-11-23 15:10:36', 1),
(12, '104.28.161.170', 'iniproperti1@gmail.com', 3, '2024-11-24 09:01:43', 1),
(13, '182.2.43.106', 'iniproperti1@gmail.com', 3, '2024-11-25 13:46:18', 1),
(14, '182.2.43.106', 'iniproperti1@gmail.com', 3, '2024-11-25 13:47:04', 1),
(15, '182.2.43.106', 'iniproperti1@gmail.com', 3, '2024-11-25 13:47:18', 1),
(16, '182.2.50.28', 'iniproperti1@gmail.com', 3, '2024-12-01 07:29:29', 1),
(17, '182.2.50.28', 'iniproperti1@gmail.com', 3, '2024-12-01 07:34:58', 1),
(18, '182.2.75.44', 'iniproperti1@gmail.com', 3, '2024-12-02 12:52:07', 1),
(19, '182.2.75.44', 'iniproperti1@gmail.com', 3, '2024-12-02 12:56:04', 1),
(20, '182.2.79.64', 'iniproperti1@gmail.com', 3, '2024-12-08 12:08:11', 1),
(21, '182.2.73.64', 'iniproperti1@gmail.com', 3, '2024-12-16 21:23:44', 1),
(22, '182.2.37.34', 'iniproperti1@gmail.com', 3, '2024-12-22 16:17:20', 1),
(23, '182.2.82.168', 'iniproperti1@gmail.com', 3, '2024-12-23 07:09:27', 1),
(24, '182.2.82.168', 'iniproperti1@gmail.com', 3, '2024-12-23 07:12:47', 1),
(25, '182.2.46.110', 'iniproperti1@gmail.com', 3, '2024-12-24 07:34:16', 1),
(26, '182.2.46.110', 'iniproperti1@gmail.com', 3, '2024-12-25 12:47:04', 1),
(27, '182.2.39.102', 'iniproperti', NULL, '2024-12-26 07:18:43', 0),
(28, '182.2.39.102', 'iniproperti1@gmail.com', 3, '2024-12-26 07:18:52', 1),
(29, '182.4.101.140', 'iniproperti1@gmail.com', 3, '2025-01-03 08:36:59', 1),
(30, '182.4.101.140', 'iniproperti1@gmail.com', 3, '2025-01-04 08:20:15', 1),
(31, '::1', 'iniproperti1@gmail.com', 3, '2025-01-06 11:12:01', 1),
(32, '::1', 'iniproperti1@gmail.com', 3, '2025-01-07 09:58:26', 1),
(33, '::1', 'iniproperti1@gmail.com', 3, '2025-01-07 17:52:09', 1),
(34, '::1', 'iniproperti1@gmail.com', 3, '2025-01-09 09:46:46', 1),
(35, '::1', 'iniproperti1@gmail.com', 3, '2025-01-10 09:58:27', 1),
(36, '::1', 'iniproperti1@gmail.com', 3, '2025-01-11 09:12:42', 1),
(37, '::1', 'iniproperti1@gmail.com', 3, '2025-01-11 11:19:46', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_permissions`
--

CREATE TABLE `auth_permissions` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_reset_attempts`
--

CREATE TABLE `auth_reset_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_tokens`
--

CREATE TABLE `auth_tokens` (
  `id` int(11) UNSIGNED NOT NULL,
  `selector` varchar(255) NOT NULL,
  `hashedValidator` varchar(255) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `expires` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_users_permissions`
--

CREATE TABLE `auth_users_permissions` (
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_iklan`
--

CREATE TABLE `data_iklan` (
  `iklan_id` int(11) NOT NULL,
  `iklan_img` text NOT NULL,
  `iklan_link` text NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `data_iklan`
--

INSERT INTO `data_iklan` (`iklan_id`, `iklan_img`, `iklan_link`, `created_at`, `updated_at`) VALUES
(2, '1732414948_7e69dcf177fc1a895718.jpg', 'https://iniproperti.co-id.id/properti/rumah-modern-di-kota-semarang', '2024-11-12 16:00:02', '2024-11-24 09:35:36'),
(3, '1733119660_675de297efa90fbb024f.jpg', 'https://iniproperti.co-id.id/', '2024-12-02 13:07:40', '2024-12-02 13:07:40');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_kat`
--

CREATE TABLE `data_kat` (
  `kat_id` int(11) NOT NULL,
  `kat_nm` text NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `data_kat`
--

INSERT INTO `data_kat` (`kat_id`, `kat_nm`, `created_at`, `updated_at`) VALUES
(3, 'Bisnis', '2024-11-12 13:35:06', '2024-11-12 13:35:06'),
(4, 'Teknologi', '2024-11-12 15:38:14', '2024-11-12 15:38:14'),
(5, 'Olahraga', '2024-11-12 15:38:24', '2024-11-12 15:38:24'),
(6, 'Otomotif', '2024-11-12 15:38:34', '2024-11-12 15:38:34'),
(7, 'Makanan & Minuman', '2024-11-12 15:38:54', '2024-11-12 15:38:54'),
(8, 'Edukasi', '2024-11-12 15:39:05', '2024-11-12 15:39:05'),
(9, 'Properti', '2024-11-12 15:39:15', '2024-11-12 15:39:15'),
(10, 'Travel', '2024-11-12 15:39:27', '2024-11-12 15:39:27'),
(11, 'Kesehatan', '2024-11-12 15:39:41', '2024-11-12 15:39:41');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_plat`
--

CREATE TABLE `data_plat` (
  `plat_id` int(11) NOT NULL,
  `plat_nm` text NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `data_plat`
--

INSERT INTO `data_plat` (`plat_id`, `plat_nm`, `created_at`, `updated_at`) VALUES
(1, 'Shopee', '2025-01-10 10:00:31', '2025-01-10 10:00:31'),
(2, 'Tokopedia', '2025-01-10 10:00:43', '2025-01-10 10:00:43'),
(3, 'Evermos', '2025-01-10 10:01:01', '2025-01-10 10:01:01'),
(4, 'Blibli', '2025-01-10 10:01:15', '2025-01-10 10:01:15'),
(5, 'Lazada', '2025-01-10 10:01:24', '2025-01-10 10:01:24');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_prop`
--

CREATE TABLE `data_prop` (
  `prop_id` int(11) NOT NULL,
  `tipe_id` int(11) NOT NULL,
  `prop_nm` text NOT NULL,
  `prop_slug` text NOT NULL,
  `prop_lb` text NOT NULL,
  `prop_lt` text NOT NULL,
  `prop_kt` text NOT NULL,
  `prop_km` text NOT NULL,
  `prop_almt` text NOT NULL,
  `prop_kd_almt` text NOT NULL,
  `prop_isi` longtext NOT NULL,
  `prop_hrg` float NOT NULL,
  `prop_kpr` text NOT NULL,
  `prop_bunga` text NOT NULL,
  `prop_info_kpr` text NOT NULL,
  `prop_img1` text NOT NULL,
  `prop_img2` text NOT NULL,
  `prop_img3` text NOT NULL,
  `prop_img4` text NOT NULL,
  `prop_img5` text NOT NULL,
  `prop_img6` text NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `data_prop`
--

INSERT INTO `data_prop` (`prop_id`, `tipe_id`, `prop_nm`, `prop_slug`, `prop_lb`, `prop_lt`, `prop_kt`, `prop_km`, `prop_almt`, `prop_kd_almt`, `prop_isi`, `prop_hrg`, `prop_kpr`, `prop_bunga`, `prop_info_kpr`, `prop_img1`, `prop_img2`, `prop_img3`, `prop_img4`, `prop_img5`, `prop_img6`, `created_at`, `updated_at`) VALUES
(8, 2, 'Cluster Dahlia Tembalang', 'cluster-dahlia-tembalang', '0', '124', '0', '0', 'Jl. Tunggu Raya Timur II 2,Meteseh, Kec. Tembalang, Kota Semarang, Jawa Tengah 50271', '-7.055850011910155, 110.47425689568566', '<p><strong>🔥 TANAH MURAH &amp; STRATEGIS – HANYA 10 MENIT KE UNDIP TEMBALANG! 🔥</strong></p><p>📍 <strong>Sisa Kavling di Blok C:</strong></p><ul>\r\n<li>Kavling 3A, 3B, 3C (No. 4 &amp; No. 6)</li>\r\n</ul><p>🌟 <strong>Spesifikasi Tanah:</strong></p><ul>\r\n<li><strong>Luas:</strong> 124 m² (Lebar: 6 m, Panjang: 21 m)</li>\r\n<li><strong>Status:</strong> SHM (Sertifikat Hak Milik) – Siap</li>\r\n<li><strong>Akses Jalan:</strong> Beton, bisa simpangan mobil</li>\r\n<li><strong>Fasilitas:</strong> Jaringan air bersih tersedia</li>\r\n</ul><p>🏠 <strong>Sangat Cocok Untuk:</strong></p><ul>\r\n<li>Hunian pribadi</li>\r\n<li>Investasi kos-kosan</li>\r\n<li>Bisnis lainnya</li>\r\n</ul><p>✨ <strong>Keunggulan Lokasi:</strong></p><ul>\r\n<li>Berada di perumahan nyaman dan sudah terbentuk</li>\r\n<li><strong>10 menit</strong> ke Kampus UNDIP Tembalang</li>\r\n<li><strong>5 menit</strong> ke RS Ketileng</li>\r\n<li><strong>10 menit</strong> ke UNIMUS Kedungmundu</li>\r\n<li><strong>20 menit</strong> ke Java Mall</li>\r\n</ul><p>💸 <strong>Promo Harga Spesial:</strong><br>\r\nHanya <strong>Rp 2,5 juta/m²</strong>!</p><ul>\r\n<li>Pilihan pembayaran <strong>Cash</strong> atau <strong>Soft Cash</strong></li>\r\n</ul><p><strong>🌟 Fasilitas Sekitar:</strong></p><ul>\r\n<li>Dekat taman bermain anak</li>\r\n<li>Puskesmas, pasar, dan masjid</li>\r\n<li>Halte BRT, Alfamart, dan Indomaret</li>\r\n</ul><p>🎯 <strong>Jangan sampai kehabisan!</strong><br>\r\nSegera hubungi kami untuk info lebih lanjut dan survei lokasi!</p>', 2500000, '0', '0', '-', '1731400087_f2899f089d0770a79882.jpeg', '1731400087_05edccce08a323b0278f.jpeg', '1732339901_787d1ceeac2effb7f9e5.jpg', '1732339901_e53da4141d94f6a96c11.jpg', '1732339902_9019eec39316db48735f.jpg', '1732339903_4656e16e19be576f8fbc.jpg', '2024-11-12 15:28:07', '2024-11-23 13:54:14'),
(9, 1, 'Berlian Village 2', 'berlian-village-2', '036', '066', '02', '01', 'Nakula leyangan, Ngaliyan, Kalongan, Kec. Ungaran Tim., Kabupaten Semarang, Jawa Tengah 50519', '-7.133209630923381, 110.45219899037451', '<p><strong>🏡 BERLIAN VILLAGE</strong></p><p>🌟 <em>Rumah Idaman Tanpa Ribet</em> 🌟</p><ul>\r\n<li><strong>DP 0%</strong></li>\r\n<li><strong>Gratis</strong>: BPHTB, KPR, Appraisal, Notaris, Balik Nama, dan semua biaya surat-surat (termasuk sertifikat & IMB).</li>\r\n</ul><p>🎁 <strong>BONUS Smart TV atau Air Conditioner!</strong></p><p>📍 <strong>Lokasi Strategis</strong></p><ul>\r\n<li>2 menit ke <strong>Alun-Alun Kalongan, Ungaran</strong></li>\r\n<li>8 menit dari <strong>Pintu Tol Ungaran</strong></li>\r\n<li>10 menit ke <strong>Jalan Raya Semarang-Solo</strong></li>\r\n<li>2 menit ke <strong>SD Al-Madinah Ungaran</strong></li>\r\n<li>9 menit ke <strong>Alun-Alun Bung Karno</strong></li>\r\n<li>11 menit ke <strong>Universitas Ngudi Waluyo Ungaran</strong></li>\r\n</ul><p>🏠 <strong>Spesifikasi Bangunan</strong></p><ol>\r\n<li><strong>Pondasi</strong>: Batu kali</li>\r\n<li><strong>Struktur</strong>: Beton bertulang</li>\r\n<li><strong>Dinding</strong>: Bata ringan (double hebel), plester, aci, cat</li>\r\n<li><strong>Rangka Atap</strong>: Baja ringan</li>\r\n<li><strong>Genteng</strong>: Model minimalis</li>\r\n<li><strong>Plafon</strong>: Gypsum, PVC, GRC</li>\r\n<li><strong>Lantai</strong>: Granit 60x60 cm</li>\r\n<li><strong>Kusen</strong>: Kayu solid, aluminium</li>\r\n<li><strong>Pintu</strong>: Kayu solid</li>\r\n<li><strong>Closet</strong>: Duduk</li>\r\n<li><strong>Sumber Air</strong>: Artesis/sumur bor</li>\r\n<li><strong>Listrik</strong>: 1.300 watt</li>\r\n</ol><p><strong>BERLIAN VILLAGE 2</strong><br>\r\nPerumahan <strong>Komersial Non-Subsidi</strong> dengan konsep <strong>semi-cluster</strong>, fleksibel untuk renovasi atau perubahan bangunan.</p><p>💸 <strong>Tanpa DP!</strong><br>\r\nCukup booking <strong>Rp 2 juta</strong> <em>all-in</em> hingga serah terima kunci. Semua biaya KPR, Notaris, BPHTB, Appraisal, PPN, dan Asuransi sudah ditanggung Developer!</p><p>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n</p><p>✨ <em>Segera wujudkan rumah impian Anda bersama Berlian Village!</em> ✨</p>', 375000000, '0', '0', '-', '1732344304_aa204b6aa600e70a0012.jpeg', '1731401574_eb660cbd427f245121ea.jpeg', '1732338264_12bfe0629d7c66afa599.jpg', '1732338264_de3565dbf9d15c468647.jpg', '1732344304_e6e88674b053d577f7c0.jpeg', 'default.png', '2024-11-12 15:33:15', '2024-11-23 13:45:04'),
(10, 1, 'Rumah Etnik Graha Wahid Semarang', 'rumah-etnik-graha-wahid-semarang', '160', '248', '3', '2', 'Semarang', '-', '<p><strong>DIJUAL CEPAT! RUMAH ETNIK-MODERN DI CLUSTER GRAHA WAHID SEMARANG</strong></p><p>📍 <strong>Lokasi Strategis &amp; Bebas Banjir</strong><br>\r\nNikmati hunian nyaman di kawasan eksklusif dengan desain etnik-modern dan lahan luas, ideal untuk keluarga Anda.</p><p>✨ <strong>SPESIFIKASI RUMAH</strong>:</p><ul>\r\n<li><strong>Luas Tanah</strong>: 248 m²</li>\r\n<li><strong>Luas Bangunan</strong>: 160 m²</li>\r\n<li><strong>Kamar Tidur</strong>: 3</li>\r\n<li><strong>Kamar Mandi</strong>: 2</li>\r\n<li>Dapur</li>\r\n<li>Carport</li>\r\n<li>Taman Depan &amp; Belakang</li>\r\n<li>Sertifikat Hak Milik (SHM)</li>\r\n</ul><p>✨ <strong>KEUNGGULAN LOKASI</strong>:</p><ul>\r\n<li>One Gate System, Keamanan 24 Jam</li>\r\n<li>Posisi Unit di Pojokan (Sudut)</li>\r\n<li>Bebas Banjir</li>\r\n<li>Dekat Kampus UNIMUS &amp; RS UNIMUS</li>\r\n<li>Dekat RSUD Ketileng</li>\r\n<li>Akses Mudah ke Swalayan (ADA, Superindo)</li>\r\n<li>Dekat Pusat Kuliner &amp; Kawasan Perkantoran</li>\r\n</ul><p>💡 <strong>KENAPA HARUS PROPERTI INI?</strong></p><ul>\r\n<li>Desain etnik-modern, eksklusif, dan nyaman</li>\r\n<li>Lokasi strategis, cocok untuk tempat tinggal atau investasi</li>\r\n<li>Harga spesial hanya <strong>Rp 2,35 M</strong> (Nego) – <strong>DIJAMIN di bawah harga pasar!</strong></li>\r\n</ul><p>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n</p><p>Jangan sampai melewatkan kesempatan memiliki rumah impian di salah satu kawasan terbaik di Kota Semarang! 🏡✨</p>', 2350000000, '0', '0', '-', '1731401671_6045342492086e845dbe.jpeg', '1731401671_35b8fc15d6a23519e0ec.jpeg', '1731401671_cd2a69f8c580f22f83fa.jpeg', '1731401671_7c612c8d239ba6eae8f6.jpeg', '1731401671_3256cf1bedbc641f771d.jpeg', '1731401671_e553c6585cab4f44bfbe.jpeg', '2024-11-12 15:36:32', '2024-11-23 11:30:50'),
(16, 1, 'The GALAXY CLUSTER Semarang', 'the-galaxy-cluster-semarang', '45', '120', '3', '2', 'Jalan Wates, Gondoriyo, Kec. Ngaliyan, Kota Semarang, Jawa Tengah', '-7.013646535185878, 110.32858450116682', '<p><strong>🏡 UNIT READY & PROGRES PEMBANGUNAN 🏡</strong><br>\r\n<strong>The GALAXY CLUSTER Semarang</strong></p><p>✨ <strong>Lokasi Sejuk, Nyaman, dan Strategis</strong><br>\r\n📍 <em>Jalan Raya Ngaliyan Gondoriyo, Semarang</em></p><p>💸 <strong>DP Hanya 10%</strong><br>\r\n<strong>Harga Mulai: 795 Jutaan</strong></p><p>🎁 <strong>FREE</strong>: AJB & BPHTB</p><hr><p><strong>🌟 KEUNGGULAN:</strong><br>\r\n✅ One Gate System (Sistem Satu Pintu)<br>\r\n✅ Akses Lokasi Mudah, hanya < 1 KM dari jalan besar menuju BSB City<br>\r\n✅ Bebas Banjir</p><hr><p><strong>🌴 FASILITAS:</strong><br>\r\n🏪 Area Komersial (Pertokoan/Ruko)<br>\r\n🏡 Taman Bermain<br>\r\n🕌 Masjid<br>\r\n📍 Dekat Pusat Keramaian (Sekolah, Kampus, Pasar, dll)</p><p>🚗 <strong>Lokasi Strategis:</strong></p><ul>\r\n<li>5 menit ke Pasar Ngaliyan</li>\r\n<li>5 menit ke RS Permata Medika</li>\r\n<li>5 menit ke Kampus UIN & UNIKA</li>\r\n<li>5 menit ke Mall dan Kawasan BSB</li>\r\n<li>15 menit ke pusat kota (Simpang Lima)</li>\r\n</ul><hr><p><strong>🏠 TIPE RUMAH:</strong><br>\r\n🔹 <em>Type 45/120</em></p><p><strong>Segera miliki rumah impian Anda!</strong><br>\r\n📞 <em>Hubungi kami untuk info lebih lanjut.</em></p><p>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n</p><p>#rumahsemarang #perumahansemarang #jualrumahsemarang #rumahstrategis</p>', 795000000, '0', '0', '-', '1732338842_9358c27dddb385de15ec.jpg', '1732338842_0c70d7a296add5d6c075.jpg', '1732338842_dd1c4a3fa9fc275ec07e.jpg', '1732338842_6ea1c6d48d89b432e516.jpg', 'default.png', 'default.png', '2024-11-23 11:36:32', '2024-12-25 13:30:50'),
(17, 1, 'Citra Gracia', 'citra-gracia', '45', '110', '3', '2', 'Meteseh, Kec. Tembalang, Kota Semarang, Jawa Tengah 50271', '-7.052477324683596, 110.46530918756591', '<p><strong>🏡 Rumah Ready Murah di Citra Gracia 🏡</strong></p>\r\n<p>📍 <strong>Lokasi</strong>: Jl. Kompol R. Soekanto, Mangunharjo, Tembalang<br>\r\n✨ <strong>Harga</strong>: Rp 475 Juta (Nego)</p>\r\n<p><strong>Spesifikasi Rumah</strong></p>\r\n<ul>\r\n<li><strong>Luas Tanah</strong>: 117m²</li>\r\n<li><strong>Luas Bangunan</strong>: 45m²</li>\r\n<li><strong>Fasilitas</strong>:<br>\r\n✔️ 3 Kamar Tidur<br>\r\n✔️ 2 Kamar Mandi (1 dalam, 1 luar)<br>\r\n✔️ Ruang Tamu<br>\r\n✔️ Dapur<br>\r\n✔️ Carport (3x7 meter)<br>\r\n✔️ Taman</li>\r\n</ul>\r\n<p>🏠 <strong>Keunggulan</strong></p>\r\n<ul>\r\n<li>Menggunakan lantai granit berkualitas.</li>\r\n<li>Masih ada kelebihan tanah di belakang rumah, cocok untuk area tambahan sesuai kebutuhan.</li>\r\n</ul>\r\n<p><strong>Pilihan Lain: Kavling Siap Bangun</strong></p>\r\n<ul>\r\n<li>Luas mulai 100–400m²</li>\r\n<li>Harga hanya Rp 2,5 juta/m²!</li>\r\n<li>Tersedia 5 unit kavling dengan luas 118–232m².</li>\r\n</ul>\r\n<p>📢 <strong>Segera survei dan nego sampai deal!</strong><br>\r\nInfo lebih lanjut? Hubungi nomor WhatsApp yang tertera. Jangan lewatkan kesempatan ini! 💬</p>', 475000000, '0', '0', '-', '1732340291_5b39f9ee0f19dc4fce1f.jpg', '1732340291_eaec506ebb2dfa22a5a3.jpg', '1732340292_d9e26c29417b3955cb47.jpg', '1732340292_0a82160d6397e1534d3c.jpg', '1732340292_e19bd77f14fc35f8331f.jpg', '1732340293_09397cb02a605667ad31.jpg', '2024-11-23 12:38:13', '2024-11-23 13:57:13'),
(18, 1, 'De Saphire Tlogomulyo', 'de-saphire-tlogomulyo', '36', '60', '2', '1', 'Jl. Argomulyo Mukti Raya, Tlogomulyo, Kec. Pedurungan, Kota Semarang, Jawa Tengah 50113', '-6.995190941970197, 110.4789526797641', '<p><strong>Detail Properti</strong><br>\r\n🏠 <strong>Tipe:</strong> Rumah<br>\r\n📐 <strong>Luas Bangunan:</strong> 36 m²<br>\r\n🌳 <strong>Luas Tanah:</strong> 60 m²<br>\r\n🛏️ <strong>Kamar Tidur:</strong> 2<br>\r\n🛁 <strong>Kamar Mandi:</strong> 1<br>\r\n🏡 <strong>Lantai:</strong> 1</p><p><strong>Fasilitas:</strong></p><ul>\r\n<li>Carport</li>\r\n<li>Taman</li>\r\n<li>Air PAM</li>\r\n</ul><p><strong>Sertifikasi:</strong><br>\r\n📜 SHM (Sertifikat Hak Milik)</p><p>📍 <strong>Lokasi:</strong><br>\r\nTlogomulyo, Pedurungan, Semarang Kota</p><p><strong>Deskripsi:</strong><br>\r\nRumah type 36 dengan luas tanah 60 m², <strong>hanya Rp299 juta</strong>! Berada di lokasi strategis, dekat dengan fasilitas umum (fasum) seperti sekolah, pasar, dan toserba. Area ini <strong>bebas banjir</strong> dan dikelilingi oleh perumahan yang nyaman. Cocok untuk tempat tinggal atau investasi Anda!</p><p>\r\n\r\n\r\n\r\n\r\n\r\n</p><p>Segera hubungi kami untuk informasi lebih lanjut. 🌟</p>', 299000000, '0', '0', '-', '1732344120_d342e45e05066800a587.jpg', '1732344121_0a825e54fda822414e0e.jpg', '1732344121_0f08a02207f2b8fb579c.jpg', '1732344121_daaef460ce6130b87429.jpg', 'default.png', 'default.png', '2024-11-23 13:42:01', '2024-11-23 13:42:01'),
(19, 2, 'Grand Fortuna', 'grand-fortuna', '0', '80', '0', '0', 'Jl. Pramuka, Pudakpayung, Kec. Banyumanik, Kota Semarang, Jawa Tengah 50265', '-7.109762956432133, 110.40428521332511', '<p><strong>Tanah Murah di Tepi Jalan Raya Pramuka, Pudak Payung, Semarang Atas</strong></p><p>📍 <strong>Lokasi</strong>: Jl. Pramuka Raya, Banyumanik, Semarang<br>\r\n🌿 <strong>Keunggulan Lokasi</strong>:</p><ul>\r\n<li>Bebas banjir dan longsor</li>\r\n<li>View Gunung Ungaran yang mempesona</li>\r\n</ul><p>🏡 <strong>Detail Properti</strong>:</p><ul>\r\n<li><strong>Luas Tanah</strong>: Mulai dari 100m², 300m², 400m², hingga 700m²</li>\r\n<li><strong>Sertifikasi</strong>: SHM (Sertifikat Hak Milik)</li>\r\n</ul><p>💰 <strong>Harga</strong>: Hanya Rp 2,5 juta/m²</p><p>\r\n\r\n\r\n\r\n\r\n\r\n</p><p>Kesempatan emas untuk investasi properti atau membangun hunian impian Anda! Hubungi segera untuk informasi lebih lanjut! 🌟</p>', 2500000, '0', '0', '-', '1732344798_48ddbdb8f43f7e9ffbd9.jpg', '1732344799_d724582a0a180bebb03d.jpg', '1732344799_f46356799d8589fd0e8d.jpg', '1732344800_50796ec288474fc584da.jpg', '1732344801_a24ccb6eb7b4e81c30d9.jpg', 'default.png', '2024-11-23 13:53:22', '2024-11-23 13:53:22'),
(20, 2, 'Tanah Murah di Kendal', 'tanah-murah-di-kendal', '0', '1888', '0', '0', 'Juwiring Kidul, Juwiring, Kec. Cepiring, Kabupaten Kendal, Jawa Tengah 51352', '-6.9117024613392815, 110.158228882952', '<p><strong>Tanah Dijual di Lokasi Strategis, Kendal</strong></p><p><strong>Detail Properti:</strong></p><ul>\r\n<li><strong>Luas Tanah:</strong> 1.888 m²</li>\r\n<li><strong>Sertifikasi:</strong> SHM (Sertifikat Hak Milik)</li>\r\n<li><strong>Alamat:</strong> Jl. Raya Cepiring, Kendal, Jawa Tengah (arah Semarang)</li>\r\n<li><strong>Harga:</strong> Hanya Rp 1,7 juta/m²</li>\r\n</ul><p><strong>Keunggulan:</strong></p><ul>\r\n<li>Lokasi strategis di pinggir Jalan Raya Nasional Cepiring.</li>\r\n<li>Dekat dengan pusat kota Kendal dan fasilitas umum.</li>\r\n<li>Sangat cocok untuk investasi atau pengembangan bisnis.</li>\r\n</ul><p><strong>Deskripsi:</strong><br>\r\nTanah murah di lokasi yang strategis, ideal untuk berbagai keperluan. Dengan harga terjangkau dan legalitas lengkap, properti ini merupakan peluang emas bagi Anda yang mencari aset bernilai tinggi di area berkembang.</p><p>\r\n\r\n\r\n\r\n\r\n\r\n</p><p>Segera hubungi kami untuk informasi lebih lanjut atau kunjungan lokasi!</p>', 1700000, '0', '0', '-', '1732345598_3e6db649e8ab066f6c24.jpg', '1732345599_5cf0dfdd91bfef5f0dcf.jpg', '1732345409_996878942420a6264fd1.jpg', '1732345410_6f69cbef2aa9da47f58c.jpg', '1732345599_545e72c2f2f2a523a8fc.jpg', '1732345600_57d035c3fcb26e963880.jpg', '2024-11-23 14:03:31', '2024-11-23 14:06:40'),
(21, 2, 'Jangli Premium 2', 'jangli-premium-2', '0', '118', '0', '0', 'Ngesrep, Banyumanik, Semarang City, Central Java', '-7.031502892697827, 110.42480719437046', '<p><strong>Kavling Strategis di Tengah Kota Semarang</strong></p><p><strong>Detail Properti:</strong></p><ul>\r\n<li><strong>Luas Tanah:</strong> 118 m²</li>\r\n<li><strong>Sertifikasi:</strong> SHM (Sertifikat Hak Milik)</li>\r\n<li><strong>Alamat:</strong> Jl. Jatiluhur, Jangli, Jatingaleh, Semarang</li>\r\n</ul><p><strong>Keunggulan Properti:</strong></p><ul>\r\n<li>Lokasi strategis di tengah kota, mudah diakses.</li>\r\n<li><strong>Harga Terjangkau:</strong> Hanya Rp3,9 juta/m².</li>\r\n<li>Jalan depan kavling lebar, cukup untuk mobil simpangan.</li>\r\n</ul><p>\r\n\r\n\r\n\r\n\r\n</p><p>Jangan lewatkan kesempatan memiliki kavling ini untuk investasi atau tempat tinggal Anda!</p>', 3900000, '0', '0', '-', '1732346462_1f81df7079e01051af26.jpg', '1732346463_d4023c34c0bb41cbc3ad.jpg', '1732346464_d1ffdfcacdba2e5c876b.jpg', '1732346927_eea9a8b3017203e0dbaf.jpg', 'default.png', 'default.png', '2024-11-23 14:21:05', '2024-11-23 14:28:48'),
(22, 1, 'Rumah Modern di Kota Semarang', 'rumah-modern-di-kota-semarang', '300', '336', '10', '10', 'Bu karsito, Jl. Welirang I No.48, Karangrejo, Kec. Gajahmungkur, Kota Semarang, Jawa Tengah 50231', '-7.023307950813686, 110.41568611609533', '<p><strong>Detail Properti</strong></p><ul>\r\n<li><strong>Tipe:</strong> Rumah</li>\r\n<li><strong>Luas Bangunan:</strong> 373 m²</li>\r\n<li><strong>Luas Tanah:</strong> 336 m²</li>\r\n<li><strong>Kamar Tidur:</strong> &gt;10</li>\r\n<li><strong>Kamar Mandi:</strong> &gt;10</li>\r\n<li><strong>Jumlah Lantai:</strong> 3</li>\r\n<li><strong>Fasilitas:</strong> Carport, PAM, Kolam Renang</li>\r\n<li><strong>Sertifikasi:</strong> SHM (Sertifikat Hak Milik)</li>\r\n<li><strong>Alamat:</strong> Jl. Welirang 1 No. 22, Tlagabodas, Semarang</li>\r\n</ul><p><strong>Deskripsi</strong><br>\r\nRumah mewah 3 lantai dengan harga terbaik di Tlagabodas, Semarang!<br>\r\n✅ Lingkungan aman dan sudah terbentuk<br>\r\n✅ Dekat dengan berbagai fasilitas umum (fasum)<br>\r\n✅ Harga terjangkau dan masih bisa nego</p><p><strong>Keunggulan Lokasi:</strong></p><ul>\r\n<li>Dekat dengan Akpol</li>\r\n<li>Dekat Java Mall</li>\r\n<li>Dekat GOR Jatidiri</li>\r\n<li>Dekat Rumah Makan IBC</li>\r\n<li>Dekat Kantor PLN, PDAM, dan Kantor Pajak</li>\r\n<li>Dekat akses tol</li>\r\n<li>Dekat Pasar Jatingaleh</li>\r\n<li>Dekat RS Eye Centre</li>\r\n</ul><p>\r\n\r\n\r\n\r\n\r\n</p><p><strong>Segera Hubungi Kami!</strong><br>\r\nJangan lewatkan kesempatan ini! Untuk informasi lokasi dan jadwal survei, silakan hubungi nomor yang tertera.</p>', 3000000000, '0', '0', '-', '1732347407_5450fd9c5b86e89677f2.jpg', 'default.png', 'default.png', 'default.png', 'default.png', 'default.png', '2024-11-23 14:36:47', '2024-11-23 14:54:16'),
(23, 2, 'Tanah Murah di Kedung, Kota Semarang', 'tanah-murah-di-kedung-kota-semarang', '0', '304', '0', '0', 'Kb Mentari Kids, Tandang, Kec. Tembalang, Kota Semarang, Jawa Tengah', '-7.018823298995267, 110.45345576859599', '<p><strong>Tanah Dijual - Kedung Mundu, Semarang</strong></p><p><strong>Detail Properti:</strong></p><ul>\r\n<li><strong>Luas Tanah:</strong> 304 m²</li>\r\n<li><strong>Sertifikasi:</strong> SHM (Sertifikat Hak Milik)</li>\r\n<li><strong>Lokasi:</strong> Kedung Mundu, Jl. Depok Sari Blok A, Semarang</li>\r\n</ul><p><strong>Deskripsi:</strong><br>\r\nTanah strategis seluas 304 m² di lingkungan yang sudah terbentuk, cocok untuk investasi atau pembangunan hunian. Harga terjangkau dan lokasi sangat dekat dengan pusat kota Semarang. Sertifikat Hak Milik (SHM) sudah siap di tangan.</p><p><strong>Keunggulan Lokasi:</strong></p><ul>\r\n<li>Dekat Java Mall</li>\r\n<li>Simpang Lima</li>\r\n<li>Universitas Muhammadiyah Semarang (Unimus)</li>\r\n<li>Indomaret &amp; Alfamart</li>\r\n</ul><p>\r\n\r\n\r\n\r\n\r\n\r\n</p><p>Jangan lewatkan kesempatan ini! Segera survei dan buktikan sendiri potensinya. 😊</p>', 3750000, '0', '0', '-', '1732347732_db6cfcbfe7cecd95e293.jpg', '1732347733_a09d7c416ce15b42a492.jpg', '1732347733_ce461632f33941f2b0cc.jpg', '1732347734_97eecdb7285f572825d2.jpg', 'default.png', 'default.png', '2024-11-23 14:42:15', '2024-11-23 14:42:15'),
(26, 1, 'Grand Emerald 2', 'grand-emerald-2', '30', '120', '2', '1', 'Wonoplumbon, Mijen, Semarang City, Central Java 50214', '-7.024675489568529, 110.29065846627306', '<p>Berikut versi yang telah dirapikan dan dibuat lebih menarik:</p><hr><p><strong>🏡 Grand Emerald 2 – Mijen, Semarang</strong></p><p><strong>✨ Tersedia Kavling Siap Bangun</strong></p><p>🌟 <strong>Keunggulan Utama:</strong></p><ul>\r\n<li><strong>Luas Tanah Besar</strong> 🏡</li>\r\n<li><strong>Akses Jalan Lebar</strong> 🚗</li>\r\n<li><strong>Harga Promo Mulai 200 Jutaan</strong></li>\r\n<li><strong>Angsuran Tanpa Bunga</strong></li>\r\n<li><strong>Gratis Biaya Notaris & Balik Nama</strong></li>\r\n<li><strong>Sertifikat Hak Milik (SHM)</strong></li>\r\n</ul><hr><p><strong>🛠️ Spesifikasi Bangunan:</strong></p><ul>\r\n<li><strong>Pondasi:</strong> Batu kali</li>\r\n<li><strong>Dinding:</strong> Bata ringan + render aci</li>\r\n<li><strong>Lantai:</strong>\r\n<ul>\r\n<li>Ruang utama, ruang tidur, & teras: Keramik 50x50 cm</li>\r\n<li>Kamar mandi: Keramik 30x30 cm (lantai) & 20x40 cm (dinding)</li>\r\n</ul>\r\n</li>\r\n<li><strong>Atap:</strong> Genteng beton dengan rangka baja ringan</li>\r\n<li><strong>Plafon:</strong> Gypsum board</li>\r\n<li><strong>Kusen & Jendela:</strong> Aluminium cokelat</li>\r\n<li><strong>Pintu:</strong> Plywood/Angzdoor/Baja</li>\r\n<li><strong>Sanitair:</strong> Closet duduk</li>\r\n<li><strong>Air Bersih:</strong> Sumur artesis</li>\r\n<li><strong>Finishing:</strong> Cat interior & eksterior</li>\r\n<li><strong>Listrik:</strong> 1300 VA</li>\r\n</ul><hr><p><strong>📍 Lokasi Strategis:</strong><br>\r\nDekat dengan:</p><ul>\r\n<li><strong>BSB City</strong></li>\r\n<li><strong>Uptown Mall</strong></li>\r\n<li><strong>Sirkuit Mijen</strong></li>\r\n<li><strong>Pasar Mijen</strong></li>\r\n<li><strong>Sekolah (SD, SMP, SMA)</strong></li>\r\n<li><strong>UNIKA</strong></li>\r\n<li><strong>Bank BCA</strong></li>\r\n<li><strong>Kubota</strong></li>\r\n<li><strong>Cafe & Resto</strong></li>\r\n<li><strong>Tempat Ibadah</strong></li>\r\n</ul><p>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n</p><p>Segera miliki kavling impian Anda dengan fasilitas terbaik! 🌟<br>\r\n📞 <strong>Hubungi sekarang untuk informasi lebih lanjut.</strong></p>', 289000000, '0', '0', '-', '1732421125_40c0dcbcff8fea8811c0.jpg', '1732421126_ea336c57bd98f23b5c5f.jpg', '1732421127_b6509cc83331f964cabc.jpg', '1732421128_58ea57ab78c557755fd6.jpg', 'default.png', 'default.png', '2024-11-24 10:45:08', '2024-11-24 11:05:28'),
(27, 2, 'Tanah Murah di Ampel Kab. Boyolali', 'tanah-murah-di-ampel-kab-boyolali', '0', '1500', '0', '0', 'Nyamplung Kidul, Urutsewu, Ampel, Boyolali Regency, Central Java', '-7.446005659125645, 110.54108768189117', '<p>🌟 <strong>Miliki Tanah Strategis &amp; Potensial di Ampel, Boyolali!</strong> 🌟</p><p>🏡 <strong>Detail Properti</strong>:</p><ul>\r\n<li><strong>Luas Tanah</strong>: 1.500 m²</li>\r\n<li><strong>Sertifikasi</strong>: SHM (Sertifikat Hak Milik)</li>\r\n<li><strong>Lokasi</strong>: Urutsewu, Ampel, Kab. Boyolali</li>\r\n</ul><p>✨ <strong>Deskripsi</strong>:<br>\r\nBayangkan memiliki tanah di lokasi strategis dengan suasana nyaman, asri, dan adem! Tanah ini sangat cocok untuk:</p><ul>\r\n<li><strong>Bisnis kavling perumahan</strong> dengan prospek cerah.</li>\r\n<li><strong>Hunian impian</strong> masa pensiun Anda.</li>\r\n<li><strong>Penggemar berkebun</strong>, tanah luas siap menunjang hobi Anda!</li>\r\n</ul><p>Dilengkapi dengan <strong>harga yang terjangkau</strong> dan lokasi yang hanya selangkah dari jalan besar Semarang-Solo, properti ini adalah investasi terbaik untuk masa depan Anda. Sertifikat sudah di tangan, transaksi aman dan mudah!</p><p>🚀 <strong>Keunggulan Lokasi</strong>:</p><ul>\r\n<li>✅ <strong>3 menit</strong> ke Pasar Ampel – kebutuhan sehari-hari semakin praktis.</li>\r\n<li>✅ <strong>2 menit</strong> ke Lapangan Nggarjo – ruang publik serba guna.</li>\r\n<li>✅ <strong>2 menit</strong> ke Taman Mekarsari – tempat bersantai dan berkumpul.</li>\r\n<li>✅ <strong>5 menit</strong> ke Terminal Sruwen – akses transportasi mudah.</li>\r\n<li>✅ <strong>11 menit</strong> ke Al Irsyad Islamic Boarding School – pendidikan berkualitas dekat rumah.</li>\r\n<li>✅ <strong>2 menit</strong> ke SDN 3 Urutsewu – sempurna untuk keluarga muda.</li>\r\n<li>✅ <strong>15 menit</strong> ke RS Umi Barokah – fasilitas kesehatan terjamin.</li>\r\n<li>✅ <strong>9 menit</strong> ke Pondok Pesantren Sunan Pandanaran – lingkungan religius dan damai.</li>\r\n</ul><p>💡 <strong>Kesempatan ini tak datang dua kali!</strong> Jangan ragu untuk mengambil langkah menuju impian Anda. Dengan lokasi yang strategis dan keunggulan yang luar biasa, tanah ini adalah pilihan sempurna untuk kebutuhan hunian maupun investasi jangka panjang.</p><p>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n</p><p>📞 <strong>Hubungi kami segera!</strong> Ambil kesempatan ini sebelum terlambat. <strong>Raih masa depan cerah bersama investasi cerdas di Ampel, Boyolali!</strong> 🌿</p>', 950000, '0', '0', '-', '1733122964_6a69944ec4a0dbb07b2a.jpeg', '1733122965_28b5e9d820b69dca35a3.jpeg', '1733122965_0bce03ed233b61d5944f.jpeg', '1733122965_fa3f2abc52ce9b822e92.jpeg', '1733122966_5cde7ad94a83531e0351.jpeg', 'default.png', '2024-12-02 14:02:46', '2024-12-02 14:02:46'),
(28, 1, 'Ahnaf Regency', 'ahnaf-regency', '80', '142', '3', '2', 'Jl. Ponpes Sunan Ampel, Banjeng, Maguwoharjo, Kec. Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55281', '-7.746831558255743, 110.4405996785207', '<p>🏡✨ <strong>Rumah Mewah Utara Bandara Adi Sucipto Yogya - Ahnaf Regency</strong> ✨🏡</p><p>📍 <strong>Lokasi Strategis</strong><br>\r\nTajem, Maguwoharjo, Depok, Sleman</p><p>🔖 <strong>Spesifikasi Properti</strong></p><ul>\r\n<li>🏠 <strong>Luas Tanah</strong>: 142 m²</li>\r\n<li>🏡 <strong>Type Bangunan</strong>: 80 m²</li>\r\n<li>🛏️ <strong>Kamar Tidur</strong>: 3</li>\r\n<li>🛁 <strong>Kamar Mandi</strong>: 2</li>\r\n</ul><p>✅ <strong>Legalitas Aman</strong>: SHM &amp; IMB<br>\r\n💰 <strong>Harga Mulai</strong>: 900 Jutaan</p><p>💳 <strong>Pilihan Pembayaran</strong>:</p><ul>\r\n<li>💵 Cash Keras / Bertahap</li>\r\n<li>🏦 KPR (DP mulai 10%)<br>\r\n✨ <em>Proses cepat, mudah, dan GRATIS dibantu sampai selesai!</em></li>\r\n</ul><p>🌟 <strong>Selling Points</strong> 🌟</p><ul>\r\n<li>⏱️ 1 Menit ke Jogjabay &amp; Stadion Maguwoharjo</li>\r\n<li>🎓 5 Menit ke Kampus Universitas Sanata Dharma &amp; UNRIYO</li>\r\n<li>🏥 5 Menit ke RS JIH</li>\r\n<li>🛒 5 Menit ke Pasar Stan Tajem</li>\r\n<li>✈️ 10 Menit ke Bandara Adi Sucipto</li>\r\n<li>🎓 10 Menit ke Kampus UII</li>\r\n</ul><p>💎 <strong>Keuntungan Memiliki Rumah Ini</strong>:</p><ul>\r\n<li>📌 Lokasi SUPER Strategis</li>\r\n<li>🎓 Akses Pendidikan Mudah</li>\r\n<li>📈 Potensi Investasi Tinggi</li>\r\n<li>💵 Kemudahan Pembayaran</li>\r\n<li>🚗 1 Menit ke Jalan Raya Utama Tajem</li>\r\n</ul><p>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n</p><p>🏡 Jangan lewatkan kesempatan untuk memiliki rumah impian Anda! Hubungi kami sekarang dan jadilah bagian dari Ahnaf Regency! ✨</p>', 900000000, '0', '0', '-', '1735106994_7c0fffc69ac9156425f2.jpeg', '1735106994_3dfc491af61e2847e0cf.jpeg', '1735106994_65c6f0dc20b05d3b9de5.jpeg', '1735106994_17893e31b738b0e92946.jpeg', '1735106994_11ec5ea007066dcf7a19.jpeg', '1735106994_9e38fb703f5245c08eff.jpeg', '2024-12-25 13:09:54', '2024-12-25 13:09:54'),
(29, 1, 'Griya Etnik Godean B-06', 'griya-etnik-godean-b-06', '50', '108', '3', '2', 'Klaci II, Margoluwih, Kec. Seyegan, Kabupaten Sleman, Daerah Istimewa Yogyakarta', '-7.758013342758589, 110.2968718430627', '<p><strong>🏡✨ Griya Etnik Godean ✨🏡</strong><br>\r\n💎 <em>Rumah Idaman dengan Sentuhan Etnik Jawa di Kota Jogja!</em> 💎</p><p>🚪 <strong>Kenapa Griya Etnik Godean?</strong><br>\r\n🌟 <strong>Strategis &amp; Nyaman</strong>: Dekat fasilitas umum &amp; sosial!<br>\r\n🌟 <strong>Aman 24 Jam</strong>: Dijaga satpam, privasi dan keamanan terjamin.<br>\r\n🌟 <strong>Tinggal 8 Unit Lagi!</strong> Jangan sampai kehabisan!</p><p>🎉 <strong>Legalitas Aman</strong>:<br>\r\n📜 Sertifikat &amp; IMB sudah ready, siap balik nama atau KPR!</p><p>🏠 <strong>Pilihan Unit Menarik:</strong><br>\r\n<strong>1️⃣ Type 50/108</strong> <em>(Siap Huni – Kav A8)</em><br>\r\n🛏 2 Kamar Tidur<br>\r\n🚿 1 Kamar Mandi<br>\r\n💸 <em>Harga</em>: Rp 695 Juta (<em>Bonus Furnish!</em>)</p><p><strong>2️⃣ Type 76/108</strong> <em>(Siap Huni – Kav B4)</em><br>\r\n🛏 3 Kamar Tidur<br>\r\n🚿 2 Kamar Mandi<br>\r\n💸 <em>Harga</em>: Rp 890 Juta Nego (<em>Bonus Furnish!</em>)</p><p><strong>3️⃣ Rumah Siap Bangun Type 60/108</strong><br>\r\n🛏 3 Kamar Tidur<br>\r\n🚿 2 Kamar Mandi<br>\r\n💸 <em>Harga</em>: Rp 790 Juta</p><p>🏡 <strong>Spesifikasi Rumah:</strong><br>\r\n🚗 Carport | 🍳 Dapur | 🌳 Taman Depan &amp; Belakang | 🛋 Ruang Tamu | 👕 Tempat Jemuran</p><p>📍 <strong>Keunggulan Lokasi:</strong><br>\r\n🚶‍♂️ <em>Dekat segalanya!</em></p><ul>\r\n<li>19 menit ke Kampus UGM</li>\r\n<li>15 menit ke Tugu Jogja</li>\r\n<li>20 menit ke Malioboro</li>\r\n<li>10 menit ke Exit Tol Jogja-Bandara YIA-Semarang</li>\r\n</ul><p>💰 <strong>Pilihan Pembayaran Fleksibel:</strong></p><ul>\r\n<li>💵 Cash Keras/Bertahap</li>\r\n<li>🏦 KPR <em>(DP mulai 10%)</em></li>\r\n</ul><p>🌟 <strong>Keuntungan Investasi:</strong><br>\r\n✅ Cocok untuk <em>homestay</em> – pasif income dari wisata &amp; pendidikan!<br>\r\n✅ Lokasi strategis, akses pendidikan &amp; wisata mudah<br>\r\n✅ Akses jalan luas &amp; aspal, mobil bisa simpangan</p><p>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n</p><p>📞 <strong>Segera Hubungi Kami</strong>:<br>\r\n🏷 Jangan lewatkan kesempatan emas ini, hunian impian menanti Anda! 🏷</p>', 789000000, '0', '0', '-', '1735107402_c72c80c5ee62d74f2647.jpg', '1735107403_8f67949221f7d7cb8614.jpg', '1735107403_3405a89c241843004f63.jpg', '1735107403_c1f9f3abad9f5e40c586.jpg', '1735107404_b7278e06f186d58f416e.jpg', '1735107404_b9531757445d72a90c62.jpg', '2024-12-25 13:16:44', '2024-12-25 13:16:44'),
(30, 2, 'Tanah Murah di Godean, Yogyakarta', 'tanah-murah-di-godean-yogyakarta', '0', '314', '0', '0', 'Pedusan, Argosari, Sedayu, Bantul Regency, Special Region of Yogyakarta 55752', '-7.811529271230986, 110.26432439266988', '<p><strong>🏡 Jual Tanah Murah – Lokasi Strategis di Bantul! 🌿</strong></p><p>Hai Sobat! 🤩 Kami menawarkan tanah pekarangan SHM dengan <strong>luas 314 m²</strong>. Lokasi istimewa di pinggir jalan kampung (lebar ±3 meter), hanya beberapa ratus meter dari jalan besar <strong>Jl. Wates</strong>! 🚗💨</p><p>📍 <strong>Lokasi:</strong> Desa Argosari, Sedayu, Bantul<br>\r\n✅ <strong>Keunggulan Lokasi:</strong></p><ul>\r\n<li>Dekat <strong>Pasar &amp; SPBU</strong> 🛒⛽</li>\r\n<li><strong>Universitas Muhammadiyah Yogyakarta</strong> 🎓</li>\r\n<li><strong>Universitas Mercu Buana Yogyakarta</strong> 🎓</li>\r\n<li><strong>Studio Alam Gamplong</strong> 🎬</li>\r\n<li><strong>RS PKU Muhammadiyah</strong> 🏥</li>\r\n<li>Sekolah <strong>SMP/SMA</strong> 📚</li>\r\n</ul><p>💰 <strong>Harga Super Murah:</strong> <strong>1,5 Jt/m²</strong> (bisa NEGO setelah cek lokasi!)</p><p>\r\n\r\n\r\n\r\n\r\n</p><p>Jangan sampai ketinggalan! 🏃‍♂️ Hubungi kami sekarang untuk info lebih lanjut! 📞📩</p>', 1500000, '0', '0', '-', '1735107851_4ada5d843d47f6cade34.jpeg', '1735107852_78f475867a176f5190fa.jpeg', '1735107852_1b7f6a7350f3b0786dc3.jpeg', '1735107852_89f615cf39feca6b051d.jpeg', 'default.png', 'default.png', '2024-12-25 13:24:12', '2024-12-25 13:24:12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_tipe`
--

CREATE TABLE `data_tipe` (
  `tipe_id` int(11) NOT NULL,
  `tipe_nm` text NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `data_tipe`
--

INSERT INTO `data_tipe` (`tipe_id`, `tipe_nm`, `created_at`, `updated_at`) VALUES
(1, 'Rumah', '2024-11-10 05:46:36', '2024-11-10 13:13:26'),
(2, 'Tanah', '2024-11-10 13:08:22', '2024-11-10 13:08:22'),
(8, 'Apartemen', '2024-11-12 15:13:41', '2024-11-12 15:13:41'),
(9, 'Ruko', '2024-11-12 15:13:54', '2024-11-12 15:13:54'),
(10, 'Kantor', '2024-11-12 15:14:06', '2024-11-12 15:14:06');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_toko`
--

CREATE TABLE `data_toko` (
  `toko_id` int(11) NOT NULL,
  `kat_id` int(11) NOT NULL,
  `plat_id` int(11) NOT NULL,
  `toko_jdl` text NOT NULL,
  `toko_link` text NOT NULL,
  `toko_hrg` float NOT NULL,
  `toko_img` text NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `data_toko`
--

INSERT INTO `data_toko` (`toko_id`, `kat_id`, `plat_id`, `toko_jdl`, `toko_link`, `toko_hrg`, `toko_img`, `created_at`, `updated_at`) VALUES
(3, 4, 1, '001 Ultrapods Air31 TWS Bluetooth 5.3 Earphone Android with Microphone HiFi Stereo Bass Earbuds', ' https://s.shopee.co.id/9f53R13Uyr?share_channel_code=1', 29400, '1736479021_c979d49ac52636a2828e.jpeg', '2025-01-10 10:17:01', '2025-01-10 10:41:58');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1732158173, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password_hash` varchar(255) NOT NULL,
  `reset_hash` varchar(255) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL,
  `activate_hash` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `status_message` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `force_pass_reset` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password_hash`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`) VALUES
(3, 'iniproperti1@gmail.com', 'iniproperti', '$2y$10$/G0ku1v6TdGE32owHMoQdeue1KOgkMZ4ZhDKliWW1OMaN7.BfRR5i', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2024-11-21 10:36:24', '2024-11-21 10:36:24', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_groups`
--
ALTER TABLE `auth_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD KEY `auth_groups_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `group_id_permission_id` (`group_id`,`permission_id`);

--
-- Indeks untuk tabel `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD KEY `auth_groups_users_user_id_foreign` (`user_id`),
  ADD KEY `group_id_user_id` (`group_id`,`user_id`);

--
-- Indeks untuk tabel `auth_logins`
--
ALTER TABLE `auth_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `auth_permissions`
--
ALTER TABLE `auth_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auth_tokens_user_id_foreign` (`user_id`),
  ADD KEY `selector` (`selector`);

--
-- Indeks untuk tabel `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD KEY `auth_users_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `user_id_permission_id` (`user_id`,`permission_id`);

--
-- Indeks untuk tabel `data_iklan`
--
ALTER TABLE `data_iklan`
  ADD PRIMARY KEY (`iklan_id`);

--
-- Indeks untuk tabel `data_kat`
--
ALTER TABLE `data_kat`
  ADD PRIMARY KEY (`kat_id`);

--
-- Indeks untuk tabel `data_plat`
--
ALTER TABLE `data_plat`
  ADD PRIMARY KEY (`plat_id`);

--
-- Indeks untuk tabel `data_prop`
--
ALTER TABLE `data_prop`
  ADD PRIMARY KEY (`prop_id`);

--
-- Indeks untuk tabel `data_tipe`
--
ALTER TABLE `data_tipe`
  ADD PRIMARY KEY (`tipe_id`);

--
-- Indeks untuk tabel `data_toko`
--
ALTER TABLE `data_toko`
  ADD PRIMARY KEY (`toko_id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `auth_groups`
--
ALTER TABLE `auth_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT untuk tabel `auth_permissions`
--
ALTER TABLE `auth_permissions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `data_iklan`
--
ALTER TABLE `data_iklan`
  MODIFY `iklan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `data_kat`
--
ALTER TABLE `data_kat`
  MODIFY `kat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `data_plat`
--
ALTER TABLE `data_plat`
  MODIFY `plat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `data_prop`
--
ALTER TABLE `data_prop`
  MODIFY `prop_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT untuk tabel `data_tipe`
--
ALTER TABLE `data_tipe`
  MODIFY `tipe_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `data_toko`
--
ALTER TABLE `data_toko`
  MODIFY `toko_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD CONSTRAINT `auth_groups_permissions_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD CONSTRAINT `auth_groups_users_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD CONSTRAINT `auth_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD CONSTRAINT `auth_users_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_users_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
