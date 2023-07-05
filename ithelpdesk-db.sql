-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.7.24 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for ithelpdesk
CREATE DATABASE IF NOT EXISTS `ithelpdesk` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `ithelpdesk`;

-- Dumping structure for table ithelpdesk.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ithelpdesk.failed_jobs: ~0 rows (approximately)
DELETE FROM `failed_jobs`;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Dumping structure for table ithelpdesk.kecamatans
CREATE TABLE IF NOT EXISTS `kecamatans` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `kecamatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ithelpdesk.kecamatans: ~5 rows (approximately)
DELETE FROM `kecamatans`;
/*!40000 ALTER TABLE `kecamatans` DISABLE KEYS */;
INSERT INTO `kecamatans` (`id`, `kecamatan`, `created_at`, `updated_at`) VALUES
	(1, 'Blimbing', NULL, NULL),
	(2, 'Kedungkandang', NULL, NULL),
	(3, 'Klojen', NULL, NULL),
	(4, 'Lowokwaru', NULL, NULL),
	(5, 'Sukun', NULL, NULL);
/*!40000 ALTER TABLE `kecamatans` ENABLE KEYS */;

-- Dumping structure for table ithelpdesk.kelurahans
CREATE TABLE IF NOT EXISTS `kelurahans` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `kecamatan_id` bigint(20) unsigned NOT NULL,
  `kelurahan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `kelurahans_id_kecamatan_foreign` (`kecamatan_id`),
  CONSTRAINT `kelurahans_id_kecamatan_foreign` FOREIGN KEY (`kecamatan_id`) REFERENCES `kecamatans` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ithelpdesk.kelurahans: ~56 rows (approximately)
DELETE FROM `kelurahans`;
/*!40000 ALTER TABLE `kelurahans` DISABLE KEYS */;
INSERT INTO `kelurahans` (`id`, `kecamatan_id`, `kelurahan`, `created_at`, `updated_at`) VALUES
	(1, 1, 'Arjosari', NULL, NULL),
	(2, 1, 'Balearjosari', NULL, NULL),
	(4, 1, 'Bunulrejo', NULL, NULL),
	(5, 1, 'Jodipan', NULL, NULL),
	(6, 1, 'Kesatrian', NULL, NULL),
	(7, 1, 'Pandanwangi', NULL, NULL),
	(8, 1, 'Polehan', NULL, NULL),
	(9, 1, 'Polowijen', NULL, NULL),
	(10, 1, 'Purwantoro', NULL, NULL),
	(11, 1, 'Purwodadi', NULL, NULL),
	(12, 2, 'Arjowinangun', NULL, NULL),
	(13, 2, 'Bumiayu', NULL, NULL),
	(14, 2, 'Buring', NULL, NULL),
	(15, 2, 'Cemorokandang', NULL, NULL),
	(16, 2, 'Kedung Kandang', NULL, '2022-07-13 07:53:45'),
	(17, 2, 'Kotalama', NULL, NULL),
	(18, 2, 'Lesanpuro', NULL, NULL),
	(19, 2, 'Madyopuro', NULL, NULL),
	(20, 2, 'Mergosono', NULL, NULL),
	(21, 2, 'Sawojajar', NULL, NULL),
	(22, 2, 'Tlogowaru', NULL, NULL),
	(23, 2, 'Wonokoyo', NULL, NULL),
	(24, 3, 'Bareng', NULL, NULL),
	(25, 3, 'Gadingasri', NULL, NULL),
	(26, 3, 'Kasin', NULL, NULL),
	(27, 3, 'Kauman', NULL, NULL),
	(28, 3, 'Kiduldalem', NULL, NULL),
	(29, 3, 'Klojen', NULL, NULL),
	(30, 3, 'Oro-oro Dowo', NULL, NULL),
	(31, 3, 'Penanggungan', NULL, NULL),
	(32, 3, 'Rempal celaket', NULL, NULL),
	(33, 3, 'Samaan', NULL, NULL),
	(34, 3, 'Sukoharjo', NULL, NULL),
	(35, 4, 'Dinoyo', NULL, NULL),
	(36, 4, 'Jatimulyo', NULL, NULL),
	(37, 4, 'Ketawanggede', NULL, NULL),
	(38, 4, 'Lowokwaru', NULL, NULL),
	(39, 4, 'Merjosari', NULL, NULL),
	(40, 4, 'Mojolangu', NULL, NULL),
	(41, 4, 'Sumbersari', NULL, NULL),
	(42, 4, 'Tasikmadu', NULL, NULL),
	(43, 4, 'Tlogomas', NULL, NULL),
	(44, 4, 'Tulusrejo', NULL, NULL),
	(45, 4, 'Tunggulwulung', NULL, NULL),
	(46, 4, 'Tunjungsekar', NULL, NULL),
	(47, 5, 'Bakalankrajan', NULL, NULL),
	(48, 5, 'Bandulan', NULL, NULL),
	(49, 5, 'Bandungrejosari', NULL, NULL),
	(50, 5, 'Ciptomulyo', NULL, NULL),
	(51, 5, 'Gadang', NULL, NULL),
	(52, 5, 'Karangbesuki', NULL, NULL),
	(53, 5, 'Kebonsari', NULL, NULL),
	(54, 5, 'Mulyorejo', NULL, NULL),
	(55, 5, 'Pisangcandi', NULL, NULL),
	(56, 5, 'Sukun', NULL, NULL),
	(57, 5, 'Tanjungrejo', NULL, NULL);
/*!40000 ALTER TABLE `kelurahans` ENABLE KEYS */;

-- Dumping structure for table ithelpdesk.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ithelpdesk.migrations: ~15 rows (approximately)
DELETE FROM `migrations`;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(5, '2022_06_27_063216_create_kecamatans_table', 1),
	(6, '2022_06_27_064107_create_kelurahans_table', 1),
	(7, '2022_07_04_031303_create_levels_table', 2),
	(8, '2022_07_12_020220_create_wifis_table', 3),
	(9, '2022_07_12_021124_create_subdomains_table', 4),
	(10, '2022_07_12_022152_create_servers_table', 5),
	(11, '2022_07_12_022433_create_pembuatan_apps_table', 5),
	(12, '2022_07_12_023728_create_pengembangan_apps_table', 5),
	(13, '2022_07_12_024012_create_narasumbers_table', 5),
	(14, '2022_07_12_024126_create_zooms_table', 5),
	(15, '2022_07_12_030724_create_perangkat_daerahs_table', 6);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table ithelpdesk.narasumbers
CREATE TABLE IF NOT EXISTS `narasumbers` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `instansi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `materi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tujuan_kegiatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_kegiatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surat_permohonan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `tgl_antri` date DEFAULT NULL,
  `tgl_proses` date DEFAULT NULL,
  `tgl_selesai` date DEFAULT NULL,
  `dokumen_usr` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dokumen_adm` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `layanan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `narasumbers_user_id_foreign` (`user_id`),
  CONSTRAINT `narasumbers_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ithelpdesk.narasumbers: ~0 rows (approximately)
DELETE FROM `narasumbers`;
/*!40000 ALTER TABLE `narasumbers` DISABLE KEYS */;
INSERT INTO `narasumbers` (`id`, `user_id`, `instansi`, `materi`, `tujuan_kegiatan`, `tgl_kegiatan`, `surat_permohonan`, `status`, `tgl_antri`, `tgl_proses`, `tgl_selesai`, `dokumen_usr`, `dokumen_adm`, `layanan`, `created_at`, `updated_at`) VALUES
	(1, 15, 'Kelurahan Blimbing ', 'sdf', 'sdf', '0022-02-22', 'files/uxy20y2x5jyNhontEopnZApHPOAy7F4dVRyCeZsV.jpg', 'Dalam Antrian', '2022-08-02', NULL, NULL, 'penunjang/T2h7xwIxmRzWzaLuTMVMVlhtwpFq42WK7IJXbUMy.jpg', NULL, 'Layanan Permohonan Narasumber dan Pendampingan', '2022-08-02 17:50:53', '2022-08-02 17:50:53');
/*!40000 ALTER TABLE `narasumbers` ENABLE KEYS */;

-- Dumping structure for table ithelpdesk.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ithelpdesk.password_resets: ~0 rows (approximately)
DELETE FROM `password_resets`;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping structure for table ithelpdesk.pembuatan_apps
CREATE TABLE IF NOT EXISTS `pembuatan_apps` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `instansi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `latarbelakang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_app` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi_app` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_terintegrasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aplikasi_terintegrasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kebutuhan_fitur` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_penggunaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `proses_bisnis` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `surat_permohonan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `tgl_antri` date DEFAULT NULL,
  `tgl_proses` date DEFAULT NULL,
  `tgl_selesai` date DEFAULT NULL,
  `dokumen_usr` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dokumen_adm` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `layanan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `pembuatan_apps_user_id_foreign` (`user_id`),
  CONSTRAINT `pembuatan_apps_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ithelpdesk.pembuatan_apps: ~0 rows (approximately)
DELETE FROM `pembuatan_apps`;
/*!40000 ALTER TABLE `pembuatan_apps` DISABLE KEYS */;
/*!40000 ALTER TABLE `pembuatan_apps` ENABLE KEYS */;

-- Dumping structure for table ithelpdesk.pengembangan_apps
CREATE TABLE IF NOT EXISTS `pengembangan_apps` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `instansi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_app` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `latarbelakang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pengembang_app` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_terintegrasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aplikasi_terintegrasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fitur_pengembangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surat_permohonan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `tgl_antri` date DEFAULT NULL,
  `tgl_proses` date DEFAULT NULL,
  `tgl_selesai` date DEFAULT NULL,
  `dokumen_usr` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dokumen_adm` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `layanan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `pengembangan_apps_user_id_foreign` (`user_id`),
  CONSTRAINT `pengembangan_apps_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ithelpdesk.pengembangan_apps: ~0 rows (approximately)
DELETE FROM `pengembangan_apps`;
/*!40000 ALTER TABLE `pengembangan_apps` DISABLE KEYS */;
INSERT INTO `pengembangan_apps` (`id`, `user_id`, `instansi`, `nama_app`, `latarbelakang`, `pengembang_app`, `status_terintegrasi`, `aplikasi_terintegrasi`, `fitur_pengembangan`, `surat_permohonan`, `status`, `tgl_antri`, `tgl_proses`, `tgl_selesai`, `dokumen_usr`, `dokumen_adm`, `layanan`, `created_at`, `updated_at`) VALUES
	(1, 15, 'Kelurahan Blimbing ', 'sdfs', 'sdf', 'sdf', 'sdf', 'sdf', 'sdfs', 'files/39VcIFCpkarNHEeOuoSoFKmK3Aazql8wzX2yRRcW.jpg', 'Dalam Antrian', '2022-08-02', NULL, NULL, 'penunjang/xSetBg8999zUrA7MV0lSIh3xSqwtf7ykQ86mfqTV.jpg', NULL, 'Layanan Permohonan Pengembangan Aplikasi', '2022-08-02 17:50:21', '2022-08-02 17:50:21');
/*!40000 ALTER TABLE `pengembangan_apps` ENABLE KEYS */;

-- Dumping structure for table ithelpdesk.perangkat_daerahs
CREATE TABLE IF NOT EXISTS `perangkat_daerahs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama_perangkat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instansi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=100 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ithelpdesk.perangkat_daerahs: ~93 rows (approximately)
DELETE FROM `perangkat_daerahs`;
/*!40000 ALTER TABLE `perangkat_daerahs` DISABLE KEYS */;
INSERT INTO `perangkat_daerahs` (`id`, `nama_perangkat`, `instansi`, `created_at`, `updated_at`) VALUES
	(1, 'Drs. ABDUL MALIK, M.Pd.', 'INSPEKTORAT', '2022-07-12 10:17:56', '2022-07-28 01:47:04'),
	(2, 'DWI RAHAYU. SH. M.HUM', 'BADAN PERENCANAAN PEMBANGUNAN DAERAH', '2022-07-12 10:18:34', '2022-07-12 10:18:35'),
	(3, 'Dr. HANDI PRIYANTO, AP, M.Si', 'BADAN PENDAPATAN DAERAH', '2022-07-12 10:20:09', '2022-07-12 10:20:10'),
	(4, 'Drs. TOTOK KASIANTO', 'BADAN KEPEGAWAIAN DAN PENGEMBANGAN SUMBER DAYA MANUSIA', '2022-07-12 10:20:11', '2022-07-12 10:20:12'),
	(5, 'Dra. RINAWATI, M.M', 'BADAN KESATUAN BANGSA DAN POLITIK', '2022-07-12 10:20:33', '2022-07-12 10:20:34'),
	(6, 'Drs. SUBKHAN', 'BADAN KEUANGAN DAN ASET DAERAH', '2022-07-12 10:20:55', '2022-07-12 10:20:56'),
	(7, 'Drs. ALIE MULYANTO, MM', 'BADAN PENANGGULANGAN BENCANA DAERAH', '2022-07-12 10:21:15', '2022-07-12 10:21:16'),
	(8, 'Drs. PRIYADI, MM', 'SATUAN POLISI PAMONG PRAJA', '2022-07-12 10:21:38', '2022-07-12 10:21:40'),
	(12, 'DONNY SANDITO W., S.STP, M.Si', 'BAGIAN HUMAS', '2022-07-18 03:49:56', '2022-07-18 03:49:56'),
	(13, 'Drs. R. ACHMAD MABRUR', 'BAGIAN KESEJAHTERAAN RAKYAT DAN KEMSYARAKATAN', '2022-07-18 15:16:26', '2022-07-18 15:16:27'),
	(14, 'Dr. SUPARNO, SH, M.Hum.', 'BAGIAN HUKUM', '2022-07-18 15:16:28', '2022-07-18 15:16:28'),
	(15, 'Ir. YAYUK HERMIANTI, MH', 'BAGIAN PEREKONOMIAN, INFRASTRUKTUR dan SDA', '2022-07-18 15:16:29', '2022-07-18 15:16:31'),
	(16, 'ARIF TRI SASTYAWAN, S.STP, M.Si', 'BAGIAN UMUM', '2022-07-18 15:16:30', '2022-07-18 15:16:31'),
	(17, 'BOEDI UTOMO, SE, M.Si', 'BAGIAN ORGANISASI', '2022-07-18 15:16:32', '2022-07-18 15:16:33'),
	(18, 'Drs. WIDJAJA SALEH PUTRA', 'BAGIAN LAYANAN PENGADAAN BARANG/JASA', '2022-07-18 15:16:34', '2022-07-18 15:16:35'),
	(19, 'Drs. FAHMI FAUZAN AZ, M.Si', 'BAGIAN PEMERINTAHAN', '2022-07-18 15:16:35', '2022-07-18 15:16:37'),
	(20, 'SITI MAHMUDAH, SE., MM (Plt)', 'DISNAKER-PMPTSP', '2022-07-18 15:16:38', '2022-07-18 15:16:36'),
	(21, 'MUHAMMAD NUR WIDIANTO, S.Sos', 'DINAS KOMINFO', '2022-07-18 15:16:41', '2022-07-18 15:16:41'),
	(22, 'SUWARJANA, SE. ,MM.', 'DINAS PENDIDIKAN', '2022-07-18 15:16:42', '2022-07-18 15:16:44'),
	(23, 'Dr. HUSNUL MUARIF', 'DINAS KESEHATAN', '2022-07-18 15:16:44', '2022-07-18 15:16:45'),
	(24, 'HERU MULYONO, SIP, MT', 'DINAS PERHUBUNGAN', '2022-07-18 15:16:46', '2022-07-18 15:16:47'),
	(25, 'SRI WINARNI, SH. MM', 'DINAS KETAHANAN PANGAN DAN PERTANIAN', '2022-07-18 15:16:48', '2022-07-18 15:16:49'),
	(26, 'Ir. DIAH AYU KUSUMADEWI, MT (Plt)', 'DPUPR-PERKIM', '2022-07-18 15:16:47', '2022-07-18 15:16:50'),
	(27, 'Dra. PENNY INDRIANI, MM', 'DINSOS-P3AP2KB', '2022-07-18 15:16:51', '2022-07-18 15:16:53'),
	(28, 'MUHAMAD SAILENDRA, ST, MM', 'DISKOPERINDAG', '2022-07-18 15:16:51', '2022-07-18 15:16:52'),
	(29, 'Dr. IDA AYU MADE WAHYUNI, S.H., M.Si.', 'DISPORA dan PARIWISATA', '2022-07-18 15:17:16', '2022-07-18 15:17:18'),
	(30, 'Dra. ENY SUTIARNY, MM', 'DISPENDUKCAPIL', '2022-07-18 15:17:19', '2022-07-18 15:17:20'),
	(31, 'Drs. WAHYU SETIANTO, MM', 'DINAS LINGKUNGAN HIDUP', '2022-07-18 15:17:21', '2022-07-18 15:17:23'),
	(32, 'SUWARJANA, SE, MM', 'DINAS PERPUSTAKAAN DAN ARSIP DAERAH', '2022-07-18 15:17:22', '2022-07-18 15:17:22'),
	(33, 'KUNARYO, A.Ks.', 'Kelurahan Arjosari ', '2022-07-18 15:17:24', '2022-07-18 15:17:29'),
	(34, 'Drs. AGUS PURWANTO, M.Kes.', 'Kelurahan Purwodadi', '2022-07-18 15:17:24', '2022-07-18 15:17:30'),
	(35, 'ARDI NUFIANTO, SE', 'Kelurahan Balearjosari', '2022-07-18 15:17:25', '2022-07-18 15:17:30'),
	(36, 'AGUNG WIJAYANTO', 'Kelurahan Bunulrejo', '2022-07-18 15:17:26', '2022-07-18 15:17:31'),
	(37, 'BASUKI RIAWAN, SE, MM', 'Kelurahan Kesatrian ', '2022-07-18 15:17:26', '2022-07-18 15:17:32'),
	(38, 'R. MUCHAMAD ALI NURYADI, SH', 'Kelurahan Polehan', '2022-07-18 15:17:27', '2022-07-18 15:17:28'),
	(39, 'RONI KUNCORO, S.STP', 'Kelurahan Blimbing ', '2022-07-18 15:17:32', '2022-07-18 15:17:33'),
	(40, 'SUSENO, SH, MM', 'Kelurahan Polowijen', '2022-07-18 15:17:34', '2022-07-18 15:17:37'),
	(41, 'FAUZAN INDRA SAPUTRA, S.STP, M.Si', 'Kelurahan Pandanwangi', '2022-07-18 15:17:36', '2022-07-18 15:17:35'),
	(42, 'DWI CAHYONO, ST, M.MT', 'Kelurahan Purwantoro', '2022-07-18 15:17:38', '2022-07-18 15:17:38'),
	(43, 'MEIDY HAZRAN, SH', 'Kelurahan Jodipan', '2022-07-18 15:17:40', '2022-07-18 15:17:41'),
	(44, 'BAMBANG HERRYANTO, S.Sos. M.Si', 'Kelurahan Kotalama', '2022-07-18 15:17:41', '2022-07-18 15:17:42'),
	(45, 'SUKENDARI, SH, MM', 'Kelurahan Madyopuro', '2022-07-18 15:17:43', '2022-07-18 15:17:44'),
	(46, 'ACHMAD IMAM MUJI, S.Sos', 'Kelurahan Kedungkandang', '2022-07-18 15:17:45', '2022-07-18 15:17:46'),
	(47, 'MOCH. CHOIRIL ANWAR, SH, M.Hum', 'Kelurahan Buring', '2022-07-18 15:17:46', '2022-07-18 15:17:47'),
	(48, 'MOCH. FAKIHUDIN, SH, M.Si', 'Kelurahan Sawojajar', '2022-07-18 15:17:57', '2022-07-18 15:17:58'),
	(49, 'FATCHUR RACHMAN, SH.', 'Kelurahan Cemorokandang', '2022-07-18 15:17:55', '2022-07-18 15:17:59'),
	(50, 'RIKO INDRA DHARMAWAN, SH.', 'Kelurahan Mergosono', '2022-07-18 15:17:53', '2022-07-18 15:18:00'),
	(51, 'SISWANTO HERU SUPARNADI, S.Sos, MM', 'Kelurahan Bumiayu', '2022-07-18 15:17:53', '2022-07-18 15:18:01'),
	(52, 'SUPARMAN, SH. M.Si', 'Kelurahan Wonokoyo', '2022-07-18 15:17:54', '2022-07-18 15:18:01'),
	(53, 'SUWANDI, ST, MM', 'Kelurahan Lesanpuro ', '2022-07-18 15:17:51', '2022-07-18 15:18:02'),
	(54, 'ANDI HAMZAH, S.Sos.', 'Kelurahan Arjowinangun', NULL, NULL),
	(55, 'AGOES TRI HARTADI, S.Sos, M.Si', 'Kelurahan Tlogowaru', NULL, NULL),
	(56, 'RENDRA KURNIA WARDANA, S.STP, MM', 'Kelurahan Gadingkasri', NULL, NULL),
	(57, 'MUHAMAD RUSDI, SE, MM', 'Kelurahan Kasin', NULL, NULL),
	(58, 'SULISTYO WIDODO, SE', 'Kelurahan Bareng', NULL, NULL),
	(59, 'NANANG TAUFIK HIDAYAT, SIP', 'Kelurahan Klojen', NULL, NULL),
	(60, 'ATIYATUL HUSNA, S.Hi, M.Ei', 'Kelurahan Kiduldalem', NULL, NULL),
	(61, 'HAJAR ISWANTORO, S.Sos', 'Kelurahan Oro-oro Dowo', NULL, NULL),
	(62, 'SOLIKIN, S.Sos, M.Si', 'Kelurahan Penanggungan', NULL, NULL),
	(63, 'SABARDI, S.Ag, MM', 'Kelurahan Rampel Celaket', NULL, NULL),
	(64, 'ANANG SETIAWAN, S.AP, M.Si', 'Kelurahan Samaan', NULL, NULL),
	(65, 'MUNADI, S.Sos, MM', 'Kelurahan Sukoharjo', NULL, NULL),
	(66, 'AGUS SARTONO', 'Kelurahan Kauman', NULL, NULL),
	(67, 'DWI HERMAWAN PURNOMO, S.STP', 'Kelurahan Dinoyo', NULL, NULL),
	(68, 'PURNOMO, SE', 'Kelurahan Jatimulyo', NULL, NULL),
	(69, 'Drs. ACHMAD SANDHI, SH, M.AP', 'Kelurahan Ketawanggede', NULL, NULL),
	(70, 'Drs. SYAMSUL HUDA', 'Kelurahan Lowokwaru', NULL, NULL),
	(71, 'Drs. ABDULLAH', 'Kelurahan Merjosari ', NULL, NULL),
	(72, 'BAMBANG MUJIONO', 'Kelurahan Mojolangu', NULL, NULL),
	(73, 'IMAM SUBAGYO, S.Sos, MM', 'Kelurahan Sumbersari', NULL, NULL),
	(74, 'ADHI KRISTANTO, S.Pd, M.AP', 'Kelurahan Tasikmadu', NULL, NULL),
	(75, 'ANDI AISYAH MUHSIN, S.STP, M.Si', 'Kelurahan Tlogomas', NULL, NULL),
	(76, 'SUSWANTO, S.Sos, M.Si', 'Kelurahan Tulusrejo', NULL, NULL),
	(77, 'HERI ATMADI, SE.', 'Kelurahan Tunggulwulung', NULL, NULL),
	(78, 'H. SUBHAN EFFENDI, ST', 'Kelurahan Tanjungsekar', NULL, NULL),
	(79, 'JOHAN FUADDY, S.STP, M.Si', 'Kelurahan Bakalankrajan', NULL, NULL),
	(80, 'DIAN SONYALIA CATUR RINA, S.STP', 'Kelurahan Bandulan', NULL, NULL),
	(81, 'NURROKHMAN, SE', 'Kelurahan Bandungrejosari', NULL, NULL),
	(82, 'IMBAR HADI WINTJOKO HERTIKA, S.Pt', 'Kelurahan Ciptomulyo', NULL, NULL),
	(83, 'DENNY SURYA WARDHANA, S.STP', 'Kelurahan Gadang', NULL, NULL),
	(84, 'R. SYAHRIAL HAMID, S.Sos.', 'Kelurahan Karangbesuki', NULL, NULL),
	(85, 'NYOTO, S.STP.', 'Kelurahan Kebonsari', NULL, NULL),
	(86, 'JOKO PRIYONO', 'Kelurahan Mulyorejo', NULL, NULL),
	(87, 'EDWIN DANIEL SEPUTRA, SH, M.MG, M.AP', 'Kelurahan Pisangcandi', NULL, NULL),
	(88, 'LALU EFENDI HIDAYAT, ST, MM', 'Kelurahan Sukun', NULL, NULL),
	(89, 'MOKHAMAD DULAJIS, S.A.P.', 'Kelurahan Tanjungrejo', NULL, NULL),
	(90, 'ARYADI WARDOYO, S.STP, M.Si', 'Kecamatan Blimbing', NULL, NULL),
	(91, 'Drs. PRAYITNO, M.AP', 'Kecamatan Kedungkandang', NULL, NULL),
	(92, 'Drs. HERI SUNARKO, M.Si', 'Kecamatan Klojen', NULL, NULL),
	(93, 'JOAO MARIA GOMES DE CARVALHO, SIP', 'Kecamatan Lowokwaru', NULL, NULL),
	(94, 'I. K. WIDI E. WIRAWAN, S.Sos, MM', 'Kecamatan Sukun', NULL, NULL),
	(96, 'ADMIN', 'ADMIN', NULL, '2022-07-27 08:45:27'),
	(99, 'UMUM', 'UMUM', '2022-07-28 07:00:02', '2022-07-28 07:00:02');
/*!40000 ALTER TABLE `perangkat_daerahs` ENABLE KEYS */;

-- Dumping structure for table ithelpdesk.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ithelpdesk.personal_access_tokens: ~0 rows (approximately)
DELETE FROM `personal_access_tokens`;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;

-- Dumping structure for table ithelpdesk.servers
CREATE TABLE IF NOT EXISTS `servers` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `instansi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_app` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi_app` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pengembang_app` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_terintegrasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aplikasi_terintegrasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_penggunaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subdomain` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `info_server` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surat_permohonan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `tgl_antri` date DEFAULT NULL,
  `tgl_proses` date DEFAULT NULL,
  `tgl_selesai` date DEFAULT NULL,
  `dokumen_usr` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dokumen_adm` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `layanan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `servers_user_id_foreign` (`user_id`),
  CONSTRAINT `servers_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ithelpdesk.servers: ~0 rows (approximately)
DELETE FROM `servers`;
/*!40000 ALTER TABLE `servers` DISABLE KEYS */;
INSERT INTO `servers` (`id`, `user_id`, `instansi`, `nama_app`, `deskripsi_app`, `pengembang_app`, `status_terintegrasi`, `aplikasi_terintegrasi`, `tgl_penggunaan`, `subdomain`, `info_server`, `surat_permohonan`, `status`, `tgl_antri`, `tgl_proses`, `tgl_selesai`, `dokumen_usr`, `dokumen_adm`, `layanan`, `created_at`, `updated_at`) VALUES
	(11, 15, 'Kelurahan Blimbing ', 'IT Helpdesk', 'Deskripsi aplikasi', 'Imada Wahyu', 'This is status', 'Aplikasi ABC, Aplikasi DEF', '2022-07-30', 'subdomain.com', 'This is info server', 'files/gmXQfqZ4LKZ55PLvPvygpzUUO7x8fcFldha7wxVj.pdf', 'Dalam Antrian', '2022-07-29', NULL, NULL, 'penunjang/Xz1Tgf7VlenQC990P95rPqGhd5g79xUnFSzCfm4L.jpg', NULL, 'Layanan Permohonan Migrasi Server', '2022-07-29 05:25:21', '2022-07-29 05:25:21'),
	(12, 15, 'Kelurahan Blimbing ', 'hjk', 'hk', 'hjk', 'hjk', 'hjk', '0002-02-22', 'yui', 'yui', 'files/gTWe4cVDyGMyCurlwuQYBBc55tEKuv3nv4aadYmp.jpg', 'Dalam Antrian', '2022-08-02', NULL, NULL, 'penunjang/ExkSdVCFdUngwKldNalIEDIigc9UiMMWrQv8YVQM.jpg', NULL, 'Layanan Permohonan Migrasi Server', '2022-08-02 17:46:13', '2022-08-02 17:46:13');
/*!40000 ALTER TABLE `servers` ENABLE KEYS */;

-- Dumping structure for table ithelpdesk.subdomains
CREATE TABLE IF NOT EXISTS `subdomains` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `instansi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_app` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi_app` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pengembang_app` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_terintegrasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aplikasi_terintegrasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_penggunaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subdomain` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `info_server` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surat_permohonan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `tgl_antri` date DEFAULT NULL,
  `tgl_proses` date DEFAULT NULL,
  `tgl_selesai` date DEFAULT NULL,
  `dokumen_usr` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dokumen_adm` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `layanan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `subdomains_user_id_foreign` (`user_id`),
  CONSTRAINT `subdomains_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ithelpdesk.subdomains: ~4 rows (approximately)
DELETE FROM `subdomains`;
/*!40000 ALTER TABLE `subdomains` DISABLE KEYS */;
INSERT INTO `subdomains` (`id`, `user_id`, `instansi`, `nama_app`, `deskripsi_app`, `pengembang_app`, `status_terintegrasi`, `aplikasi_terintegrasi`, `tgl_penggunaan`, `subdomain`, `info_server`, `surat_permohonan`, `status`, `tgl_antri`, `tgl_proses`, `tgl_selesai`, `dokumen_usr`, `dokumen_adm`, `layanan`, `created_at`, `updated_at`) VALUES
	(20, 15, 'Kelurahan Blimbing ', 'IT Helpdesk', 'Deskripsi aplikasi', 'Imada Wahyu', 'This is status', 'Aplikasi ABC, Aplikasi DEF', '2022-07-30', 'subdomain.com', 'This is info server', 'files/SYb7c6JXzzTLzyWh7ci0ah2R3RDLbqMhQskndCDV.pdf', 'Dalam Antrian', '2022-07-29', NULL, NULL, 'penunjang/41iGUFXHsOHN29SFdKerDW4nD5BMhbheom8eidsv.jpg', 'penunjang/9ifidVozAWqertVTjioAk2DzL3luGgJLwnd9wDs9.jpg', 'Layanan Permohonan Subdomain', '2022-07-29 05:24:10', '2022-07-29 05:30:56'),
	(21, 15, 'Kelurahan Blimbing ', 'hjk', 'hjk', 'hjk', 'hjk', 'hjk', '2222-02-22', 'hjk', 'hjk', 'files/6hXoWuiYM8gTJQUqscAOiQCE6ilQ1vtLnX1Fvdnm.jpg', 'Dalam Antrian', '2022-08-02', NULL, NULL, 'penunjang/rnheKmgS3ZKQGYMdohpNWc1eif363TvO32pH2cGD.jpg', NULL, 'Layanan Permohonan Subdomain', '2022-08-02 17:45:30', '2022-08-02 17:45:30'),
	(22, 15, 'Kelurahan Blimbing ', 'yui', 'yui', 'yui', 'yui', 'yui', '6666-06-06', 'yui', 'yi', 'files/a8B86CEF83rBj0qOE8gKlZAOXUTLEVuazUoP4alO.jpg', 'Dalam Antrian', '2022-08-09', NULL, NULL, 'penunjang/w7hZgTCMD2kzTPsWjFKUuVQe55hOI7iksi4LefPL.jpg', NULL, 'Layanan Permohonan Subdomain', '2022-08-09 06:27:20', '2022-08-09 06:27:20'),
	(23, 15, 'Kelurahan Blimbing ', 'hjk', 'hjk', 'hjk', 'hk', 'hjk', '0066-06-06', 'hjkhj', 'hjkhj', 'files/pdOy3LB9yAeIDsflDdWZ6sgrBVGsbeiMzSg8a4Z0.doc', 'Dalam Antrian', '2022-08-09', NULL, NULL, 'penunjang/3o6lLRE1bFr9OUc0Nn1JfsUT7BTooHYdnSIRrnGT.jpg', NULL, 'Layanan Permohonan Subdomain', '2022-08-09 06:30:11', '2022-08-09 06:30:11'),
	(24, 15, 'Kelurahan Blimbing ', 'hjk', 'hjk', 'hhjk', 'hjk', 'hjk', '0055-05-05', 'jkl', 'jklk', 'files/jym3RtISUJvkBy8PbbiWi89G1yO0ItLHOErSi2Yh.doc', 'Dalam Antrian', '2022-08-09', NULL, NULL, 'penunjang/eNxblZhthR8s06zVHR2LOKQK0hK5G1SWA64PrY3F.jpg', NULL, 'Layanan Permohonan Subdomain', '2022-08-09 06:59:36', '2022-08-09 06:59:36');
/*!40000 ALTER TABLE `subdomains` ENABLE KEYS */;

-- Dumping structure for table ithelpdesk.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `perangkat_id` bigint(20) unsigned NOT NULL,
  `nama_admin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`username`),
  KEY `FK_users_perangkat_daerahs` (`perangkat_id`),
  CONSTRAINT `FK_users_perangkat_daerahs` FOREIGN KEY (`perangkat_id`) REFERENCES `perangkat_daerahs` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ithelpdesk.users: ~8 rows (approximately)
DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `perangkat_id`, `nama_admin`, `nip`, `level`, `hp`, `alamat`, `username`, `password`, `created_at`, `updated_at`) VALUES
	(7, 48, 'Adisa Dwi', '19650037', 'User', '', '', 'kel-sawojajar', '$2y$10$3oiCmsnGxYurQSa6F1cSteNV8o7cs/vW03Wra5ncNR6VEeQIT0Y7q', '2022-07-15 03:42:01', '2022-07-26 07:45:34'),
	(15, 39, 'Salma Zulfatul', '19650038', 'User', '', '', 'kel-blimbing', '$2y$10$XeoHzPAK8x.ox88FHW6UW.DXl8lG0GWEPJ.f6o8oh8pZ6xCWr6pEC', '2022-07-26 04:36:19', '2022-07-28 03:31:04'),
	(18, 96, 'Lailatul Fadilah', '19650032', 'Admin', '', '', 'admin', '$2y$10$0L.PeWS1WWUKsiLYMOGBi.fgRhEabVMSzXKDYDZPS.5RC41c1ZXYG', '2022-07-26 07:35:48', '2022-07-27 06:58:20'),
	(25, 99, 'Nada Nadhira', '19650040', 'Umum', '', '', 'nada', '$2y$10$J5Eh0i9lvy1ri7DpR4ZbO.xeDGmk9Lqbq.TTaheRtLw6MRM0Rfe5i', '2022-07-28 07:04:35', '2022-07-29 02:16:35'),
	(27, 99, 'Salma Zulfatul', '12345', 'Umum', '', '', 'salma', '$2y$10$UsJmK9yJS1NwgPo/4l6sk.8IOurytDKd54IJEypORsCdv9fHcXxIi', '2022-07-28 08:41:15', '2022-07-28 08:41:15'),
	(28, 99, 'Imada Wahyu', '19650046', 'Umum', '', '', 'mada', '$2y$10$0w2Uc8cMiU7CVtpbunXus.dPWHxdz4z63y1Gl/aZEnUhxxDSP6PMu', '2022-07-28 08:54:56', '2022-07-28 08:54:56'),
	(29, 99, 'Lailatul Fadilah', '19650032', 'Umum', '', '', 'laila', '$2y$10$luv41knuqZ1Ve2UtCf2BKu4YAlJSM6mXAnXW43v.iFcL1bc43Ob2m', '2022-07-29 01:14:50', '2022-07-29 01:14:50'),
	(30, 99, 'Lailatul Fadilah', '19650038', 'Umum', '085745038543', 'Karangduren RT.03 RW.01 Pakisaji Malang', 'user1', '$2y$10$XzDmPIlqNUA1ZCfEOqg3iukLJlnAgvos3MB/KmH9AElRpJxI7JfYW', '2022-07-29 05:32:53', '2022-07-29 05:32:53');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

-- Dumping structure for table ithelpdesk.wifis
CREATE TABLE IF NOT EXISTS `wifis` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `instansi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `penanggungjawab` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kecamatan_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `kelurahan_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `rw` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_antri` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_proses` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_selesai` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dokumen_usr` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dokumen_adm` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `layanan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `kecamatan_id` (`kecamatan_id`),
  KEY `kelurahan_id` (`kelurahan_id`),
  CONSTRAINT `FK_wifis_kecamatans` FOREIGN KEY (`kecamatan_id`) REFERENCES `kecamatans` (`id`),
  CONSTRAINT `FK_wifis_kelurahans` FOREIGN KEY (`kelurahan_id`) REFERENCES `kelurahans` (`id`),
  CONSTRAINT `FK_wifis_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ithelpdesk.wifis: ~7 rows (approximately)
DELETE FROM `wifis`;
/*!40000 ALTER TABLE `wifis` DISABLE KEYS */;
INSERT INTO `wifis` (`id`, `user_id`, `instansi`, `penanggungjawab`, `kecamatan_id`, `kelurahan_id`, `rw`, `kategori`, `deskripsi`, `status`, `tgl_antri`, `tgl_proses`, `tgl_selesai`, `dokumen_usr`, `dokumen_adm`, `layanan`, `created_at`, `updated_at`) VALUES
	(29, 30, 'UMUM', 'Nada Nadhira', 3, 31, '3', 'Wi-Fi Mati', 'hjkh', 'Dalam Antrian', '2022-07-29', NULL, NULL, 'penunjang/WTtrW8rTdXm85kwPDCkf3gLG2Sk9Yz9HyIDrt9UU.jpg', 'penunjang/8YtAgXbyI1YtNJjbSeYdhs3zxSdh3BSJL1qp62LT.webp', 'Layanan Permohonan Wifi', '2022-07-29 05:33:39', '2022-07-29 05:34:23'),
	(30, 25, 'UMUM', 'hjk', 1, 1, '7', 'Wi-Fi Mati', 'hjk', 'Dalam Antrian', '2022-08-02', NULL, NULL, 'penunjang/eamGHpgUo2e4tWDvdxobuEBPawcRI3RAu09llbhQ.jpg', NULL, 'Layanan Permohonan Wifi', '2022-08-02 01:14:09', '2022-08-02 01:14:09'),
	(31, 25, 'UMUM', 'hjkuoi', 1, 1, '10', 'Lupa Password Wi-Fi', 'jkn', 'Dalam Antrian', '2022-08-02', NULL, NULL, 'penunjang/W8B6lmUtFC9bfTQmYnBWAhwZi3FboiE3hz24NO7Q.jpg', NULL, 'Layanan Permohonan Wifi', '2022-08-02 01:18:10', '2022-08-02 01:18:10'),
	(32, 25, 'UMUM', 'sdfs', 2, 14, '1', 'Lupa Password Wi-Fi', 'sdf', 'Dalam Antrian', '2022-08-02', NULL, NULL, 'penunjang/kT5tuKwaDpe6dRCGmNGdGqnimdwcI0RI44ZffrJf.jpg', NULL, 'Layanan Permohonan Wifi', '2022-08-02 16:31:24', '2022-08-02 16:31:24'),
	(33, 25, 'UMUM', 'yui', 1, 1, '6', 'Wi-Fi Mati', 'ertyi', 'Dalam Antrian', '2022-08-09', NULL, NULL, 'penunjang/jy9Agiu5Y1IbfvsNMVvtTUHIRv4NRxXkbP7F46l5.jpg', NULL, 'Layanan Permohonan Wifi', '2022-08-09 04:50:44', '2022-08-09 04:50:44'),
	(34, 15, 'Kelurahan Blimbing', 'salma', 1, 2, '1', 'Lupa Password Wi-Fi', 'masalah', 'Dalam Antrian', '2022-08-09', NULL, NULL, 'penunjang/aDpfzW4RSqxHEMP6WWUGekScGEZKYEHGkDVom3GV.jpg', NULL, 'Layanan Permohonan Wifi', '2022-08-09 06:14:39', '2022-08-09 06:14:39'),
	(35, 25, 'UMUM', 'hjk', 2, 14, '11', 'Lupa Password Wi-Fi', 'ghj', 'Dalam Antrian', '2022-08-09', NULL, NULL, 'penunjang/XGpvRpp0ga0SyDGT4U3DVnTBvBenHqfJf90XEJgf.jpg', NULL, 'Layanan Permohonan Wifi', '2022-08-09 07:01:21', '2022-08-09 07:01:21');
/*!40000 ALTER TABLE `wifis` ENABLE KEYS */;

-- Dumping structure for table ithelpdesk.zooms
CREATE TABLE IF NOT EXISTS `zooms` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `instansi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_kegiatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `peserta` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_kegiatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jam_kegiatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surat_permohonan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `tgl_antri` date DEFAULT NULL,
  `tgl_proses` date DEFAULT NULL,
  `tgl_selesai` date DEFAULT NULL,
  `dokumen_usr` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dokumen_adm` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `layanan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `zooms_user_id_foreign` (`user_id`),
  CONSTRAINT `zooms_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ithelpdesk.zooms: ~0 rows (approximately)
DELETE FROM `zooms`;
/*!40000 ALTER TABLE `zooms` DISABLE KEYS */;
INSERT INTO `zooms` (`id`, `user_id`, `instansi`, `nama_kegiatan`, `peserta`, `tgl_kegiatan`, `jam_kegiatan`, `surat_permohonan`, `status`, `tgl_antri`, `tgl_proses`, `tgl_selesai`, `dokumen_usr`, `dokumen_adm`, `layanan`, `created_at`, `updated_at`) VALUES
	(1, 15, 'Kelurahan Blimbing ', 'sdfs', 'sdf', '0002-02-22', '14:22', 'files/MBAXEqnZxFZ3gJSp4fh8J7xPPSrZPJ7DvywrW5GN.jpg', 'Dalam Antrian', '2022-08-02', NULL, NULL, 'penunjang/dpBQLxynMPiXr79SzGXWSHQkuFXf0Xh7u4cqR3oy.jpg', NULL, 'Layanan Fasilitas Zoom', '2022-08-02 17:51:23', '2022-08-02 17:51:23');
/*!40000 ALTER TABLE `zooms` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
