-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Jun 2020 pada 17.03
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pwpb19`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `infocovid`
--

CREATE TABLE `infocovid` (
  `id` int(10) UNSIGNED NOT NULL,
  `Tanggal` date NOT NULL,
  `Pasien_positif` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Pasien_sembuh` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Pasien_meninggal` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Provinsi` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Zona_daerah` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `infocovid`
--

INSERT INTO `infocovid` (`id`, `Tanggal`, `Pasien_positif`, `Pasien_sembuh`, `Pasien_meninggal`, `Provinsi`, `Zona_daerah`, `created_at`, `updated_at`) VALUES
(1, '0000-00-00', '20', '18', '1', 'Aceh', 'Hijau', NULL, NULL),
(2, '2020-06-11', '92', '46', '4', 'Bengkulu', 'Hijau', NULL, NULL),
(3, '2020-06-11', '94', '63', '2', 'Sulawesi Barat', 'Hijau', NULL, NULL),
(4, '2020-06-11', '103', '30', '1', 'Nusa Tenggara Barat', 'Hijau', NULL, NULL),
(5, '2020-06-11', '103', '27', '0', 'Jambi', 'Hijau', NULL, NULL),
(6, '2020-06-11', '120', '107', '5', 'Riau', 'Hijau', NULL, NULL),
(7, '2020-06-11', '121', '41', '1', 'Bangka Belitung', 'Hijau', NULL, NULL),
(8, '2020-06-11', '139', '62', '7', 'Gorontalo', 'Hijau', NULL, NULL),
(9, '2020-06-11', '148', '105', '11', 'Lampung', 'Hijau', NULL, NULL),
(10, '2020-06-11', '159', '93', '4', 'Sulawesi Tengah', 'Hijau', NULL, NULL),
(11, '2020-06-11', '170', '132', '2', 'Kalimantan Utara', 'Hijau', NULL, NULL),
(12, '2020-06-11', '183', '75', '2', 'Papua Barat', 'Hijau', NULL, NULL),
(13, '2020-06-11', '190', '36', '19', 'Maluku Utara', 'Hijau', NULL, NULL),
(14, '2020-06-11', '228', '122', '16', 'Kepulauan Riau', '', NULL, NULL),
(15, '2020-06-11', '234', '117', '4', 'Kalimantan Barat', 'Hijau', NULL, NULL),
(16, '2020-06-11', '249', '191', '8', 'Daerah Istimewa Yogyakarta', 'Hijau', NULL, NULL),
(17, '2020-06-11', '263', '172', '5', 'Sulawesi Tenggara', 'Hijau', NULL, NULL),
(18, '2020-06-11', '315', '89', '8', 'Maluku', 'Hijau', NULL, NULL),
(19, '2020-06-11', '351', '216', '3', 'Kalimantan Timur', 'Hijau', NULL, NULL),
(20, '2020-06-11', '522', '202', '28', 'Kalimantan Tengah', 'Hijau', NULL, NULL),
(21, '2020-06-11', '551', '73', '47', 'Sulawesi Utara', 'Hijau', NULL, NULL),
(22, '2020-06-11', '608', '409', '5', 'Bali', 'Hijau', NULL, NULL),
(23, '2020-06-11', '618', '189', '52', 'Sumatera Utara', 'Hijau', NULL, NULL),
(24, '2020-06-11', '645', '361', '29', 'Sumatera Barat', 'Hijau', NULL, NULL),
(25, '2020-06-11', '830', '325', '25', 'Nusa Tenggara Barat', 'Hijau', NULL, '0000-00-00 00:00:00'),
(26, '2020-06-11', '1.061', '391', '72', 'Banten', 'Kuning', NULL, '0000-00-00 00:00:00'),
(27, '2020-06-11', '1.108', '78', '7', 'Papua', 'Kuning', NULL, NULL),
(28, '2020-06-11', '1.188', '402', '42', 'Sumatera Selatan', 'Kuning', NULL, NULL),
(29, '2020-06-11', '1.438', '118', '104', 'Kalimantan Selatan', 'Kuning', NULL, NULL),
(30, '2020-06-11', '1.674', '508', '103', 'Jawa Tengah', 'Kuning', NULL, NULL),
(31, '2020-06-11', '2.194', '704', '97', 'Sulawesi Selatan', 'Biru', NULL, NULL),
(32, '2020-06-11', '2.448', '962', '161', 'Jawa Barat', 'Biru', NULL, NULL),
(33, '2020-06-11', '6.533', '1.584', '514', 'Jawa Timur', 'Hitam', NULL, NULL),
(34, '2020-06-11', '8.355', '3.379', '533', ' DKI Jakarta', 'Hitam', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `infostatistik`
--

CREATE TABLE `infostatistik` (
  `id` int(10) UNSIGNED NOT NULL,
  `Provinsi` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Odp` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Pdp` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ProsesOdp` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SelesaiOdp` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ProsesPdp` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SelesaiPdp` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `infostatistik`
--

INSERT INTO `infostatistik` (`id`, `Provinsi`, `Odp`, `Pdp`, `ProsesOdp`, `SelesaiOdp`, `ProsesPdp`, `SelesaiPdp`, `created_at`, `updated_at`) VALUES
(1, 'Jawa barat', '52.347', '9.378', '3.249', '49.125', '1.381', '7.997', '0000-00-00 00:00:00', '2020-05-25 20:51:33');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2020_05_22_052425_create_infocovid19', 1),
(4, '2020_05_22_053032_create_infodaerah', 1),
(5, '2020_05_22_053414_create_user', 1),
(6, '2020_05_22_084143_create_infocovid', 1),
(7, '2020_05_22_084213_create_infostatistik', 1),
(8, '2020_05_22_084237_create_userweb', 1),
(9, '2020_05_24_105839_create_userlogin', 2),
(10, '2014_10_12_100000_create_password_resets_table', 3),
(11, '2020_05_25_144146_add__provinsi_infocovid', 4),
(12, '2020_05_25_144819_add__provinsi_infostatistik', 5),
(13, '2020_05_28_101100_create_rumahsakit', 6),
(14, '2020_05_28_103257_create_rumahsakit', 7),
(15, '2020_05_28_231932_add_call_center2_rumahsakit', 8),
(16, '2020_05_28_232317_add_call_center3_rumahsakit', 8),
(17, '2020_05_31_112543_add__n_i_p_users', 9),
(18, '2020_05_31_112835_add_alamat_users', 9),
(19, '2020_05_31_112909_add_kodepos_users', 9);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('admin@gmail.com', '$2y$10$lr5RCFkgbLwerZRvbhlgz.934naqg3SS5u1rqoKmmcNsAGWmyYFa.', '2020-06-02 05:12:07'),
('adriansatria058@gmail.com', '$2y$10$6bfkv0Qij5Eq0DkzuFE/2uFRtmh/3RVH4Qsp4RXWghQkwxbHt1i2a', '2020-06-02 19:52:27');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rumahsakit`
--

CREATE TABLE `rumahsakit` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_rs` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `call_center` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `call_center2` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `call_center3` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `rumahsakit`
--

INSERT INTO `rumahsakit` (`id`, `nama_rs`, `alamat`, `call_center`, `call_center2`, `call_center3`, `website`, `created_at`, `updated_at`) VALUES
(1, 'RSU Dr. Hasan Sadikin', 'Jl. Pasteur No. 38, Kota Bandung', '+62 22 2034 953', '+62 22 2034 954', '+62 22 2551 111', 'https://web.rshs.or.id', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'RSTP Dr. H. A. Rotinsulu', 'Jl. Bukit jarian No.40, Hegarmanah, Kota Bandung', '+62 22 2034446', '-', '-', 'http://rsparurotinsulu.org', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'RSAU Dr. M. Salamun', 'Jl. Ciumbuleuit No.203, Kab. Bandung', '+62 22 2032090', '-', '-', 'http://rsausalamun.com/salamun/', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'RS Immanuel Bandung', 'Jl. Kopo No. 161, Kota Bandung', '+62 22 520 1656', '+62 22 520 1672', '-', 'http://www.rsimmanuel.com/', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'RS Santo Borromeus', 'Jl. Ir. H.Djuanda No.100, Kota Bandung', '+62 22 2552001', '+62 22 8255 8000', '-', 'http://rsborromeus.com/', '2020-05-28 19:28:14', '2020-05-28 19:28:14'),
(6, 'RS Santo Yusup Bandung', 'Jl. Cikutra No. 7, Kota Bandung', '+62 22 7208172', '+62 22 7202420', '-', 'https://www.rssantoyusup.com/', '2020-05-29 04:36:00', '2020-05-29 04:36:00'),
(7, 'RS Advent Bandung', 'Jl. Cihampelas No.161, Kota Bandung', '+62 22 2034386', '-', '-', 'http://www.rsadventbandung.com/', '2020-05-29 04:41:14', '2020-05-30 00:23:10'),
(8, 'RS Al Islam Bandung', 'Jl. Soekarno Hatta No. 644, Kota Bandung', '+62 22 7565588', '-', '-', 'https://www.rsalislam.com/', '2020-05-29 23:27:56', '2020-05-29 23:27:56'),
(9, 'Santosa Hospital Bandung Central', 'Jl. Kebonjati No.38, Kota Bandung', '+62 22 4348 333', '-', '-', 'https://www.santosa-hospital.com/', '2020-05-29 23:31:09', '2020-05-29 23:31:09'),
(10, 'RSUD Kota Bandung', 'Jl. Rumah Sakit No.22 Ujung Berung, Kota Bandung', '+62 22 7811794', '+62 22 7800017', '-', 'https://rsudkotabandung.web.id/', '2020-05-29 23:33:27', '2020-05-29 23:33:27'),
(11, 'RS Hermina Arcamanik', 'Jl. A.H. Nasution No.50, Kota Bandung', '1500 488', '+62 22 8724 2525', '-', 'http://herminahospitalgroup.com/arcamanik', '2020-05-29 23:35:46', '2020-05-29 23:35:46'),
(12, 'RS Khusus Ibu dan Anak Kota Bandung', 'Jl. KH. Wahid Hasyim (Kopo) No. 311, Kota Bandung', '+62 22 8603 7777', '+62 22 5200 505', '-', 'http://rskiakotabandung.com/', '2020-05-30 22:42:54', '2020-05-30 22:42:54'),
(13, 'Rumah Sakit Tk. II Dustira', 'Jl. Dustira No.1, Kota Cimahi', '+62 22 6652207', '-', '-', 'http://rsdustira.com/', '2020-05-30 22:45:30', '2020-05-30 22:45:30'),
(14, 'RSUD Cibabat', 'Jl. Jend. Amir Machmud 140, Kota Cimahi', '+62 22 655 2025', '-', '-', 'https://rsudcibabat.cimahikota.go.id/', '2020-05-30 22:47:00', '2020-05-30 22:47:00'),
(15, 'RSUD Al-Ihsan', 'Jl. Kiastramanggala, Baleendah, Kab. Bandung', '+62 22 5940 872', '+62 22 5941 709', '-', 'http://rsudalihsan.jabarprov.go.id/', '2020-06-02 06:25:25', '2020-06-02 06:25:25'),
(16, 'RSUD Majalaya', 'Jl. Cipaku No.87, Kab. Bandung', '+62 22 5950 035', '-', '-', '-', '2020-06-02 06:26:53', '2020-06-02 06:26:53'),
(17, 'Santosa Hospital Bandung Kopo', 'Jl. K.H Wahid Hasyim No.461-463, Kab. Bandung', '-', '-', '-', '-', '2020-06-02 06:29:44', '2020-06-02 06:29:44'),
(18, 'RS Unggul Karsa Medika', 'Taman Kopo Indah III Blok H-1, Mekar rahayu, Kab. Bandung', '-', '-', '-', '-', '2020-06-02 06:31:09', '2020-06-02 06:31:09'),
(19, 'RSUD Cililin', 'Jl. Cintakarya, Cililin, Kab. Bandung', '+62 22 6941 600', '-', '-', '-', '2020-06-02 06:32:30', '2020-06-02 06:32:30'),
(20, 'RSUD Cikalongwetan', 'Jl. Cikalong No.290, Kab. Bandung', '+62 22 8686 6016', '-', '-', 'https://rsudcikalongwetan.com/', '2020-06-02 06:34:20', '2020-06-02 06:34:20'),
(21, 'RSUD Sumedang', 'Jl. Palasari No.80, Kotakulon, Kab. Sumedang.', '+62 261 201021', '-', '-', '-', '2020-06-02 06:35:21', '2020-06-02 06:35:21'),
(22, 'RS Mitra Keluarga Bekasi Timur', 'Jl. Pengasinan, Rawa Semut, Margahayu, Kota Bekasi', '+62 21 8999 9222', '+62 21 8834 2007', '-', 'https://mitrakeluarga.com/bekasi-timur/informasi-dokter', '2020-06-02 06:38:28', '2020-06-02 06:38:28'),
(23, 'RS Mitra Keluarga Kota Bekasi', 'Jl. Jendral Ahmad Yani, Kayuringin Jaya, Kota Bekasi', '+62 21 8853 333', '+62 21 8848 666', '-', 'https://mitrakeluarga.com/bekasi/lokasi-rs', '2020-06-02 06:41:04', '2020-06-02 06:41:04'),
(24, 'RSU Dr. Slamet', 'Jl. RSU DR. Slamet No.12, Surakarya, Kab. Garut', '+62 262 237791', '-', '-', '-', '2020-06-02 06:44:07', '2020-06-02 06:44:07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `nis` int(10) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `jenis_kelamin` char(1) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `golongan_darah` char(2) NOT NULL,
  `nama_ibu_kandung` varchar(50) NOT NULL,
  `file` varchar(100) NOT NULL,
  `id_kelas` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`nis`, `nama_lengkap`, `jenis_kelamin`, `jurusan`, `alamat`, `golongan_darah`, `nama_ibu_kandung`, `file`, `id_kelas`) VALUES
(1819117000, 'Naruto Uzumaki', 'L', 'Rekayasa Perangkat Lunak', 'Jl Laswi No.40', 'O', 'Kushina Uzumaki', 'naruto.jpg', 1),
(1819117660, 'Adrian Maulana Firdaus', 'L', 'Rekayasa Perangkat Lunak', 'Jl Laswi No.40', 'B', 'Siti Nurhayati', '149069299-288-k850891.jpg', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_kelas`
--

CREATE TABLE `t_kelas` (
  `id_kelas` int(11) NOT NULL,
  `nama_kelas` varchar(15) DEFAULT NULL,
  `jurusan` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_kelas`
--

INSERT INTO `t_kelas` (`id_kelas`, `nama_kelas`, `jurusan`) VALUES
(1, 'X-RPL 1', 'Rekayasa Perangkat Lunak'),
(2, 'X-RPL 2', 'Rekayasa Perangkat Lunak'),
(3, 'X-RPL 3', 'Rekayasa Perangkat Lunak');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_login`
--

CREATE TABLE `t_login` (
  `id_login` int(11) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `level` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_login`
--

INSERT INTO `t_login` (`id_login`, `username`, `password`, `level`) VALUES
(3, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nip` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kodepos` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nip`, `name`, `email`, `email_verified_at`, `password`, `alamat`, `kodepos`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '1819117643', 'Adrian Satria Putra', 'adriansatria058@gmail.com', NULL, '$2y$10$Qhn6y7R93gsYnRybFEr8pejkOr0NwAK/xC3Yy.ly9WlEq3SPW/9rS', 'Jl. Ciganitri Tengah Rt. 04 Rw. 02', '40250', '7fk8GpxoQ0SPV1ndVMdobPmPXeMudBZhWvDLKLtIRanJFhg6xTtI07xYsTyB', '2020-05-27 07:13:21', '2020-05-27 07:13:21'),
(2, '1918171615141', 'admin', 'admin@gmail.com', NULL, '$2y$10$koHH4UVlzB6/AsF1QnV.DuYxJEfY7JIe7OcFW80uGQrCXkjbHVxtG', 'Unknown', '1234', 'N8r5sYieN2EN2Ansq2jwv2ey5Y8LlIl5U0fIaMr4GvH04d7aUIabv17IlgpC', '2020-06-02 05:00:06', '2020-06-02 05:00:06');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `infocovid`
--
ALTER TABLE `infocovid`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `infostatistik`
--
ALTER TABLE `infostatistik`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `rumahsakit`
--
ALTER TABLE `rumahsakit`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nis`);

--
-- Indeks untuk tabel `t_kelas`
--
ALTER TABLE `t_kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indeks untuk tabel `t_login`
--
ALTER TABLE `t_login`
  ADD PRIMARY KEY (`id_login`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `infocovid`
--
ALTER TABLE `infocovid`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT untuk tabel `infostatistik`
--
ALTER TABLE `infostatistik`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `rumahsakit`
--
ALTER TABLE `rumahsakit`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `t_kelas`
--
ALTER TABLE `t_kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `t_login`
--
ALTER TABLE `t_login`
  MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
