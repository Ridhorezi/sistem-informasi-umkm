-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: database:3306
-- Waktu pembuatan: 02 Apr 2024 pada 02.19
-- Versi server: 10.6.12-MariaDB-1:10.6.12+maria~ubu2004
-- Versi PHP: 8.1.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db-umkm`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `business_types`
--

CREATE TABLE `business_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jenis_usaha` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `business_types`
--

INSERT INTO `business_types` (`id`, `jenis_usaha`, `created_at`, `updated_at`) VALUES
(1, 'Kuliner', '2024-03-15 14:13:59', '2024-03-15 14:13:59'),
(2, 'Fashion', '2024-03-15 14:13:59', '2024-03-15 14:13:59'),
(3, 'Jasa Kecantikan', '2024-03-15 14:13:59', '2024-03-15 14:13:59'),
(4, 'Bahan pembersih keperluan rumah tangga', '2024-03-15 14:13:59', '2024-03-15 14:13:59'),
(5, 'Kreatif dan Desain', '2024-03-15 14:13:59', '2024-03-15 14:13:59'),
(6, 'Pertanian dan Perkebunan', '2024-03-15 14:13:59', '2024-03-15 14:13:59'),
(7, 'Perdagangan Barang', '2024-03-15 14:13:59', '2024-03-15 14:13:59'),
(8, 'Jasa', '2024-03-15 14:13:59', '2024-03-15 14:13:59'),
(9, 'Jasa Percetakan', '2024-03-15 14:13:59', '2024-03-15 14:13:59'),
(10, 'Barang', '2024-03-15 14:13:59', '2024-03-15 14:13:59'),
(11, 'Sembako', '2024-03-15 14:13:59', '2024-03-15 14:13:59'),
(12, 'Toko Perlengkapan Olahraga', '2024-03-15 14:13:59', '2024-03-15 14:13:59'),
(13, 'Pendidikan dan Pelatihan', '2024-03-15 14:13:59', '2024-03-15 14:13:59'),
(14, 'Teknologi Informasi', '2024-03-15 14:13:59', '2024-03-15 14:13:59'),
(15, 'Kerajinan Tangan', '2024-03-15 14:13:59', '2024-03-15 14:13:59'),
(16, 'Otomotif', '2024-03-15 14:13:59', '2024-03-15 14:13:59'),
(17, 'Kesehatan', '2024-03-15 14:13:59', '2024-03-15 14:13:59'),
(18, 'Pariwisata', '2024-03-15 14:13:59', '2024-03-15 14:13:59'),
(19, 'Hiburan', '2024-03-15 14:13:59', '2024-03-15 14:13:59'),
(20, 'Olahraga dan Kesehatan', '2024-03-15 14:13:59', '2024-03-15 14:13:59'),
(21, 'Rumah Tangga', '2024-03-15 14:13:59', '2024-03-15 14:13:59'),
(22, 'Kuliner Khas Daerah', '2024-03-15 14:13:59', '2024-03-15 14:13:59'),
(23, 'Peternakan', '2024-03-15 14:13:59', '2024-03-15 14:13:59'),
(24, 'Konsultan', '2024-03-15 14:13:59', '2024-03-15 14:13:59'),
(25, 'Fashion dan Kecantikan Muslim', '2024-03-15 14:13:59', '2024-03-15 14:13:59'),
(26, 'Produk Kesehatan Herbal', '2024-03-15 14:13:59', '2024-03-15 14:13:59'),
(27, 'Produk Ramah Lingkungan', '2024-03-15 14:13:59', '2024-03-15 14:13:59'),
(28, 'Perhiasan', '2024-03-15 14:13:59', '2024-03-15 14:13:59'),
(29, 'Tekstil dan Kulit', '2024-03-15 14:13:59', '2024-03-15 14:13:59'),
(30, 'Home Industri Makanan', '2024-03-15 14:13:59', '2024-03-15 14:13:59'),
(31, 'Home Industri Kreatif', '2024-03-15 14:13:59', '2024-03-15 14:13:59'),
(32, 'Desain Interior', '2024-03-15 14:13:59', '2024-03-15 14:13:59'),
(33, 'Periklanan', '2024-03-15 14:13:59', '2024-03-15 14:13:59'),
(34, 'Produk Fashion Anak', '2024-03-15 14:13:59', '2024-03-15 14:13:59'),
(35, 'Pengolahan Limbah', '2024-03-15 14:13:59', '2024-03-15 14:13:59');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `owner_id` bigint(20) UNSIGNED NOT NULL,
  `nama_usaha` varchar(255) NOT NULL,
  `jenis_usaha_id` bigint(20) UNSIGNED NOT NULL,
  `lama_berdirinya_usaha` varchar(255) NOT NULL,
  `nilai_pendanaan` varchar(255) NOT NULL,
  `sumber_pendanaan` varchar(255) NOT NULL,
  `hambatan_usaha` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `jobs`
--

INSERT INTO `jobs` (`id`, `owner_id`, `nama_usaha`, `jenis_usaha_id`, `lama_berdirinya_usaha`, `nilai_pendanaan`, `sumber_pendanaan`, `hambatan_usaha`, `created_at`, `updated_at`) VALUES
(1, 1, 'Coklat Karakter', 1, '1 tahun', '1000000', 'Dana pribadi', 'Terhambat karena kurangnya promosi yang baik', '2024-03-15 14:13:59', '2024-03-15 14:13:59'),
(2, 2, 'Bintangs Cokies', 1, '7 tahun', '70000000', 'Dana Pribadi', 'Kurangnya SDM pada produksi', '2024-03-15 14:13:59', '2024-03-15 14:13:59'),
(3, 3, 'Kedai mama putri', 1, '13 tahun', '30000000', 'Dana Bank', 'Harga bahan yang meningkat', '2024-03-15 14:13:59', '2024-03-15 14:13:59'),
(4, 4, 'Catring Home Made', 1, '3 tahun', '1000000', 'Dana pribadi', 'Harga bahan baku masakan yang meningkat', '2024-03-15 14:13:59', '2024-03-15 14:13:59'),
(5, 5, 'All Fried Chicken', 1, '3 tahun', '1000000', 'Dana pribadi', 'Banyaknya pesaing didaerah tersebut', '2024-03-15 14:13:59', '2024-03-15 14:13:59'),
(6, 6, 'Miya ollshop', 2, '1 bulan', '1000000', 'Dana pribadi', 'Pengadaan barang yang tidak menentu dari importir', '2024-03-15 14:13:59', '2024-03-15 14:13:59'),
(7, 7, 'Hair Top Salon', 3, '3 tahun', '15000000', 'Dana pribadi', 'Kendala dalam pemasaran serta kendala lainnya', '2024-03-15 14:13:59', '2024-03-15 14:13:59'),
(8, 8, 'Rey Snack', 1, '3 tahun', '2000000', 'Dana pribadi', 'Kurangnya promosi', '2024-03-15 14:13:59', '2024-03-15 14:13:59'),
(9, 9, 'Dapoer Ayu Cookies', 1, '6 tahun', '10000000', 'Dana pribadi', 'Kurangnya SDM', '2024-03-15 14:13:59', '2024-03-15 14:13:59'),
(10, 10, 'Aneka Sabun Pembersih Rumah tangga', 4, '2 tahun', '10000000', 'Dana pribadi', 'Terhambat karena kurangnya promosi yang baik.', '2024-03-15 14:13:59', '2024-03-15 14:13:59'),
(11, 11, 'Kripik', 1, '4 tahun', '10000000', 'Dana pribadi', 'Kemasan kripik yang kurang menarik', '2024-03-15 14:13:59', '2024-03-15 14:13:59'),
(12, 12, 'Sate Bandeng Krakatau', 1, '8 tahun', '500000', 'Dana pribadi', 'Terhambat karena suplayer ikan yang tidak menentu', '2024-03-15 14:13:59', '2024-03-15 14:13:59'),
(13, 13, 'Cemilan Enin', 1, '1 tahun', '500000', 'Dana pribadi', 'Kurangnya promosi yang baik', '2024-03-15 14:13:59', '2024-03-15 14:13:59'),
(14, 14, 'Mainan Anak-anak', 10, '5 tahun', '1000000', 'Dana pribadi', 'Penjualan yang kurang menentu', '2024-03-15 14:13:59', '2024-03-15 14:13:59'),
(15, 15, 'RK Cake & Cookies', 1, '4 tahun', '5000000', 'Dana pribadi', 'Harga bahan baku yang meningkat', '2024-03-15 14:13:59', '2024-03-15 14:13:59'),
(16, 16, 'Cemilan Bu Mas', 1, '3 tahun', '1000000', 'Dana pribadi', 'Terhambat kaerana kurangnya SDM', '2024-03-15 14:13:59', '2024-03-15 14:13:59'),
(17, 17, 'Toko Kelontong', 11, '5 tahun', '10000000', 'Dana pribadi', 'Menurunnya daya beli', '2024-03-15 14:13:59', '2024-03-15 14:13:59'),
(18, 18, 'Toko Trion', 12, '8 tahun', '10000000', 'Dana pribadi', 'Sedikitnya peminat costumer', '2024-03-15 14:13:59', '2024-03-15 14:13:59'),
(19, 19, 'Brownies Lumer', 1, '1 tahun', '10000000', 'Dana pribadi', 'Bahan baku yang tiba-tiba menigkat', '2024-03-15 14:13:59', '2024-03-15 14:13:59'),
(20, 20, 'Milk Jelly Bintang', 1, '4 tahun', '15000000', 'Dana pribadi', 'Peminat yang berkurang', '2024-03-15 14:14:00', '2024-03-15 14:14:00'),
(21, 21, 'Bebek Sambel Korek Dapur Bunda', 1, '4 tahun', '10000000', 'Dana pribadi', 'Kurangnya promosi yang membuat terbatasnya pelanggan', '2024-03-15 14:14:00', '2024-03-15 14:14:00'),
(22, 22, 'Telur Asin 2Putra Asli', 1, '13 tahun', '50000000', 'Dana Bank', 'Meningkatnya harga bahan baku', '2024-03-15 14:14:00', '2024-03-15 14:14:00'),
(23, 23, 'Putri Frozen', 1, '5 tahun', '10000000', 'Dana pribadi', 'Tidak adanya hambatan karena banyak peminat', '2024-03-15 14:14:00', '2024-03-15 14:14:00'),
(24, 24, 'Cireng Bawel', 1, '13 tahun', '5000000', 'Dana pribadi', 'Penjualan yang tidak menentu', '2024-03-15 14:14:00', '2024-03-15 14:14:00'),
(25, 25, 'Olahan Daun Kelor Manajili', 1, '4 tahun', '5000000', 'Dana pribadi', 'Kurangnya promosi sehingga sediktnya peminat', '2024-03-15 14:14:00', '2024-03-15 14:14:00'),
(26, 26, '\"SUJAME\" Susu Jahe Merah', 1, '4 tahun', '1000000', 'Dana pribadi', 'Kurangnya supplayer bahan', '2024-03-15 14:14:00', '2024-03-15 14:14:00'),
(27, 27, 'Warung Ima', 11, '18 tahun', '15000000', 'Dana pribadi', 'Banyaknya pesaing didekat daerah tersebut', '2024-03-15 14:14:00', '2024-03-15 14:14:00'),
(28, 28, 'Warung Pempek', 1, '5 tahun', '5000000', 'Dana pribadi', 'Karena tidak memakai bahan pengawet jadi tidak tahan lama', '2024-03-15 14:14:00', '2024-03-15 14:14:00'),
(29, 29, 'Ayam Goreng Mbak Arum', 1, '3 tahun', '2000000', 'Dana pribadi', 'Hambatannnya tidak bisa menerima pelayanan jauh', '2024-03-15 14:14:00', '2024-03-15 14:14:00'),
(30, 30, 'Elzahirah Store', 2, '4 bulan', '5000000', 'Dana pribadi', 'Produk terbatas ketika banyak pesanan dari customer', '2024-03-15 14:14:00', '2024-03-15 14:14:00'),
(31, 31, 'Emping Melinjo Mak Sun', 1, '5 tahun', '20000000', 'Dana pribadi', 'Bahan baku dari suplayer yang kurang menentu', '2024-03-15 14:14:00', '2024-03-15 14:14:00'),
(32, 32, 'Rengginang', 1, '3 tahun', '2000000', 'Dana pribadi', 'Karena proses penjemuran masih memanfaatkan pengeringan secara     manual, sehingga apabila musim hujan proses pembuatan membutuhkan waktu yang cukup lama', '2024-03-15 14:14:00', '2024-03-15 14:14:00'),
(33, 33, 'Keripik Pisang Rentul', 1, '4 tahun', '500000', 'Dana pribadi', 'Stok terbatas karena masih masih dilakukan secara manual', '2024-03-15 14:14:00', '2024-03-15 14:14:00'),
(34, 34, 'Percetakan', 9, '10 tahun', '10000000', 'Dana pribadi', 'Karena kurangnya karyawan jadi pelayanan yang lama', '2024-03-15 14:14:00', '2024-03-15 14:14:00'),
(35, 35, 'Tahu Sutera', 1, '8 tahun', '5000000', 'Dana bank', 'Pengiriman yang agak rentan, karena tahu yang mudah hancur', '2024-03-15 14:14:00', '2024-03-15 14:14:00'),
(36, 36, 'Geulis Hijab', 2, '12 tahun', '10000000', 'Dana pribadi', 'Berkurangnya orderan karena banyaknya pesaing', '2024-03-15 14:14:00', '2024-03-15 14:14:00'),
(37, 37, 'Bakso Cahaya', 1, '5 tahun', '3000000', 'Dana pribadi', 'Harga bahan baku yang kurang stabil', '2024-03-15 14:14:00', '2024-03-15 14:14:00'),
(38, 38, 'Pelangi 412 Katering', 1, '3 tahun', '3000000', 'Dana pribadi', 'Harga bahan baku yang kurang stabil', '2024-03-15 14:14:00', '2024-03-15 14:14:00'),
(39, 39, 'Clover Honey dan Skin Care', 3, '5 tahun', '10000000', 'Dana pribadi', 'Menghadapi protes konsumen yang tidak cocok dengan skincare ini', '2024-03-15 14:14:00', '2024-03-15 14:14:00'),
(40, 40, 'Kerupuk tempe', 1, '7 tahun', '3000000', 'Dana pribadi', 'Dikarenakan penjemuran masih dilakukan secara manual, apabila musim hujan terkendala maka produksi terhambat', '2024-03-15 14:14:00', '2024-03-15 14:14:00'),
(41, 41, 'Dimsum AMO', 1, '8 tahun', '1000000', 'Dana pribadi', 'Terkendala jarak apabila konsumen memesan dengan jarak yang jauh, dikarenakan tidak memakai pengawet makanan', '2024-03-15 14:14:00', '2024-03-15 14:14:00'),
(42, 42, 'Aneka Sambel', 1, '6 tahun', '5000000', 'Dana pribadi', 'Karena harga bahan baku yang tidak menentu ', '2024-03-15 14:14:00', '2024-03-15 14:14:00'),
(43, 43, 'Cilembu Bakar', 1, '2 tahun', '5000000', 'Dana pribadi', 'Hambatannya suplayer yang terkadang ubi belum cukup panen', '2024-03-15 14:14:00', '2024-03-15 14:14:00'),
(44, 44, 'Bolu Unyil', 1, '1 tahun', '10000000', 'Dana pribadi', 'Hambatannya karena bolu membutuhkan waktu pembuatan yang lama', '2024-03-15 14:14:00', '2024-03-15 14:14:00'),
(45, 45, 'Kue Bu Iyas', 1, '2 tahun', '10000000', 'Dana pribadi', 'Karena kue basah tidak bisa bertahan cukup lama, maka bisa menyebabkan kerugian', '2024-03-15 14:14:00', '2024-03-15 14:14:00'),
(46, 46, 'Keripik Bawang Duarr', 1, '6 tahun', '2000000', 'Dana pribadi', 'Hambatannya dikarenakan kuerangnya SDM', '2024-03-15 14:14:00', '2024-03-15 14:14:00'),
(47, 47, 'Kacang Eksotis', 1, '2 tahun', '25000000', 'Dana pribadi', 'Terkadang harga bahan baku yang melonjak tinggi', '2024-03-15 14:14:00', '2024-03-15 14:14:00'),
(48, 48, 'Roti Tape', 1, '7 tahun', '25000000', 'Dana pribadi', 'Suplayer tape yang cukup lama', '2024-03-15 14:14:00', '2024-03-15 14:14:00'),
(49, 49, 'Pecel Ayam Mamalika', 1, '3 tahun', '15000000', 'Dana pribadi', 'Harga bahan baku yang meningkat', '2024-03-15 14:14:00', '2024-03-15 14:14:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_01_10_211926_create_roles_table', 1),
(2, '2014_01_10_211939_create_permissions_table', 1),
(3, '2014_10_12_000000_create_users_table', 1),
(4, '2014_10_12_100000_create_password_resets_table', 1),
(5, '2019_08_19_000000_create_failed_jobs_table', 1),
(6, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(7, '2024_01_12_155640_create_jenis_usaha_table', 1),
(8, '2024_01_13_041443_create_pemiliks_table', 1),
(9, '2024_01_14_014530_create_u_m_k_m_s_table', 1),
(10, '2024_02_08_073809_create_usahas_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `owners`
--

CREATE TABLE `owners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_pemilik` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `alamat_pemilik` varchar(255) NOT NULL,
  `kota_pemilik` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `owners`
--

INSERT INTO `owners` (`id`, `nama_pemilik`, `jenis_kelamin`, `alamat_pemilik`, `kota_pemilik`, `created_at`, `updated_at`) VALUES
(1, 'Dinny Septhiani', 'P', 'Link. Curug Sekolah Rt/Rw 03/02 No.099', 'Cilegon', '2024-03-15 14:13:59', '2024-03-15 14:13:59'),
(2, 'Suebah', 'P', 'Link. Pekuncen Rt.012/003 ciwedus', 'Cilegon', '2024-03-15 14:13:59', '2024-03-15 14:13:59'),
(3, 'Ike lia sulastri', 'P', 'Twi blok fw A 82c No.8 Rt.01/05 perum.warnasari', 'Cilegon', '2024-03-15 14:13:59', '2024-03-15 14:13:59'),
(4, 'Tini kartini', 'P', 'Link. Pekucen Rt.11/03', 'Cilegon', '2024-03-15 14:13:59', '2024-03-15 14:13:59'),
(5, 'Sopiah', 'P', 'Puri Krakatau hijau Blok C Rt.08/10', 'Cilegon', '2024-03-15 14:13:59', '2024-03-15 14:13:59'),
(6, 'Tita Herawati', 'P', 'Jl. Pangeran jayakarta Rt.0103', 'Cilegon', '2024-03-15 14:13:59', '2024-03-15 14:13:59'),
(7, 'Sri hartini', 'P', 'Perumahan kedawung rahayu E2 No.5 Rt.03/07 Dringo', 'Cilegon', '2024-03-15 14:13:59', '2024-03-15 14:13:59'),
(8, 'Nurhayati', 'P', 'Link. Kelelet Rt.01/03', 'Cilegon', '2024-03-15 14:13:59', '2024-03-15 14:13:59'),
(9, 'Sri rayahu', 'P', 'Link. Tegal Cabe Jalan Fatahillah Rt.02/08', 'Cilegon', '2024-03-15 14:13:59', '2024-03-15 14:13:59'),
(10, 'Devi Salamah', 'P', 'Link. Kubang Lesung Kulon', 'Cilegon', '2024-03-15 14:13:59', '2024-03-15 14:13:59'),
(11, 'Nikmal Maula', 'P', 'Link. Kepuh Denok', 'Cilegon', '2024-03-15 14:13:59', '2024-03-15 14:13:59'),
(12, 'Hj. Yati Rohayati', 'P', 'Link. Kubang Welut Rt.02/04', 'Cilegon', '2024-03-15 14:13:59', '2024-03-15 14:13:59'),
(13, 'Evi Afiyah', 'P', 'Komp. PCI  Blok D 81/20', 'Cilegon', '2024-03-15 14:13:59', '2024-03-15 14:13:59'),
(14, 'Nurhasanah', 'P', 'Link. Sawah Rt.01/02', 'Cilegon', '2024-03-15 14:13:59', '2024-03-15 14:13:59'),
(15, 'Rika Kurnia', 'P', 'Link. Tegal Cabe Rt. 01/02 No.14', 'Cilegon', '2024-03-15 14:13:59', '2024-03-15 14:13:59'),
(16, 'Masrunti', 'P', 'Link. Kubang Lesung Kulon', 'Cilegon', '2024-03-15 14:13:59', '2024-03-15 14:13:59'),
(17, 'Rowiyah', 'P', 'Perum. BCK Blok B17 No.25', 'Cilegon', '2024-03-15 14:13:59', '2024-03-15 14:13:59'),
(18, 'Trisamtiono', 'L', 'Link. Sumampir Timur No.108', 'Cilegon', '2024-03-15 14:13:59', '2024-03-15 14:13:59'),
(19, 'Vira Amalia', 'P', 'Link. Pakisaji Rt.01/10', 'Cilegon', '2024-03-15 14:13:59', '2024-03-15 14:13:59'),
(20, 'Iin Nurhayati', 'P', 'Perum. Taman Krakatau blok I 4 No.8', 'Cilegon', '2024-03-15 14:13:59', '2024-03-15 14:13:59'),
(21, 'Marta Yuliana', 'P', 'Perum. Warnasari RKB 03 Rt. 01/05', 'Cilegon', '2024-03-15 14:13:59', '2024-03-15 14:13:59'),
(22, 'Murod', 'L', 'Link. Kalentemu Barat Rt.02/01', 'Cilegon', '2024-03-15 14:13:59', '2024-03-15 14:13:59'),
(23, 'Fatimah', 'P', 'Link. Tegal Tong Rt.04/05 Kebonsari', 'Cilegon', '2024-03-15 14:13:59', '2024-03-15 14:13:59'),
(24, 'Liza', 'P', 'Grand Cilegon Residence, Jl. Bouleved Raya No.87', 'Cilegon', '2024-03-15 14:13:59', '2024-03-15 14:13:59'),
(25, 'Hj Mastati', 'P', 'Jln Sunan Bonang Link. Penauan Rt. 01/01', 'Cilegon', '2024-03-15 14:13:59', '2024-03-15 14:13:59'),
(26, 'Alisa', 'P', 'Link. Ramanuju Rt.01/09', 'Cilegon', '2024-03-15 14:13:59', '2024-03-15 14:13:59'),
(27, 'Susanti', 'P', 'Perum. Grand Sutera Cilegon Blok F7 No.15 Rt.18/02', 'Cilegon', '2024-03-15 14:13:59', '2024-03-15 14:13:59'),
(28, 'Rakhmawati', 'P', 'PCI Blok D 97 No.17', 'Cilegon', '2024-03-15 14:13:59', '2024-03-15 14:13:59'),
(29, 'Siti Lailatul', 'P', 'Link. Bujang Gadung Rt.02/03 No.19', 'Cilegon', '2024-03-15 14:13:59', '2024-03-15 14:13:59'),
(30, 'Nurul Hayati', 'P', 'Griya Serdang Indah Blok B2 No.11', 'Cilegon', '2024-03-15 14:13:59', '2024-03-15 14:13:59'),
(31, 'Supandi', 'L', 'Link. Gempol Wetan Rt.04/02', 'Cilegon', '2024-03-15 14:13:59', '2024-03-15 14:13:59'),
(32, 'Imas Hayati', 'P', 'Link. Bumiwaras Rt.04/03', 'Cilegon', '2024-03-15 14:13:59', '2024-03-15 14:13:59'),
(33, 'Jamilah', 'P', 'Link. Temugiring', 'Cilegon', '2024-03-15 14:13:59', '2024-03-15 14:13:59'),
(34, 'Safrudin', 'L', 'Link. Wates Telu Rt. 17/05', 'Cilegon', '2024-03-15 14:13:59', '2024-03-15 14:13:59'),
(35, 'Terawati', 'P', 'Link. Kelelet', 'Cilegon', '2024-03-15 14:13:59', '2024-03-15 14:13:59'),
(36, 'Irma Nurrahmi', 'P', 'Link. Ramanuju Tegal No.27A Rt.01/11', 'Cilegon', '2024-03-15 14:13:59', '2024-03-15 14:13:59'),
(37, 'Siti Maimanah', 'P', 'Link. Leweung Sawo Rt.01/09', 'Cilegon', '2024-03-15 14:13:59', '2024-03-15 14:13:59'),
(38, 'Sri Suharni', 'P', 'BBS2 Jln Pala Blok A1 No.45 Rt.09/10', 'Cilegon', '2024-03-15 14:13:59', '2024-03-15 14:13:59'),
(39, 'Liza', 'P', 'Sambi Manis Rt.02/05 No.11', 'Cilegon', '2024-03-15 14:13:59', '2024-03-15 14:13:59'),
(40, 'Ena R', 'P', 'Link. Telu', 'Cilegon', '2024-03-15 14:13:59', '2024-03-15 14:13:59'),
(41, 'Rosmawati', 'P', 'Link. Ramanuju Baru Tegal Rt.02/89', 'Cilegon', '2024-03-15 14:13:59', '2024-03-15 14:13:59'),
(42, 'Novita Purwanti', 'P', 'Komp. Metro Florida Blok L06 No.7', 'Cilegon', '2024-03-15 14:13:59', '2024-03-15 14:13:59'),
(43, 'Sukiyatun', 'P', 'Link. Penyairan Atas Rt.02/08', 'Cilegon', '2024-03-15 14:13:59', '2024-03-15 14:13:59'),
(44, 'Mela', 'P', 'Kamp. Ragas Grenyang', 'Cilegon', '2024-03-15 14:13:59', '2024-03-15 14:13:59'),
(45, 'Nurjanah', 'P', 'Link. Cigading Rt.01/01', 'Cilegon', '2024-03-15 14:13:59', '2024-03-15 14:13:59'),
(46, 'Ifah', 'P', 'Link. Sambilawang Rt.01/03 Cibeber', 'Cilegon', '2024-03-15 14:13:59', '2024-03-15 14:13:59'),
(47, 'Yeyen Apriani', 'P', 'Perum. Puri Krakatau Hijau Blok B1 No.4', 'Cilegon', '2024-03-15 14:13:59', '2024-03-15 14:13:59'),
(48, 'Ruhatiyah', 'P', 'Jl. Sunan Drajat Link. Kubang Welut Rt.03/04', 'Cilegon', '2024-03-15 14:13:59', '2024-03-15 14:13:59'),
(49, 'Dedi S', 'L', 'Perum. Griya Dringo Estate Blok J1 No.5 Rt.022/004 ', 'Cilegon', '2024-03-15 14:13:59', '2024-03-15 14:13:59');

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2024-03-15 14:14:00', '2024-03-15 14:14:00'),
(2, 'pimpinan', '2024-03-15 14:14:00', '2024-03-15 14:14:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'adminrbc@gmail.com', '2024-03-15 14:14:00', '$2a$10$T.KIImd8JsLW2tKQTyDdTOrOOvQrk0LsuOfdmBFmDDWG9zP6Z9JCW', 1, 'qKTowV0iG9eGXagDHMuFkxPRMTxEdQjCnzZuaV60nnJO8uKFvw4mCr60bnb5', '2024-03-15 14:14:00', '2024-03-15 14:14:00'),
(2, 'Pimpinan', 'pimpinanrbc@gmail.com', '2024-03-15 14:14:00', '$2a$10$T.KIImd8JsLW2tKQTyDdTOrOOvQrk0LsuOfdmBFmDDWG9zP6Z9JCW', 2, 'FjL4SjyRRnceuFL3AtjllZw3LcZC6A7g7llK3E3U3jyIP2hZC1FaijcCGZ41', '2024-03-15 14:14:00', '2024-03-15 14:14:00');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `business_types`
--
ALTER TABLE `business_types`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_owner_id_foreign` (`owner_id`),
  ADD KEY `jobs_jenis_usaha_id_foreign` (`jenis_usaha_id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `owners`
--
ALTER TABLE `owners`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `business_types`
--
ALTER TABLE `business_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `owners`
--
ALTER TABLE `owners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT untuk tabel `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `jobs`
--
ALTER TABLE `jobs`
  ADD CONSTRAINT `jobs_jenis_usaha_id_foreign` FOREIGN KEY (`jenis_usaha_id`) REFERENCES `business_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `jobs_owner_id_foreign` FOREIGN KEY (`owner_id`) REFERENCES `owners` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
