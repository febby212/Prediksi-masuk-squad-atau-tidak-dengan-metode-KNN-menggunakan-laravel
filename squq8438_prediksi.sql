-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 28, 2023 at 06:35 PM
-- Server version: 10.5.21-MariaDB-cll-lve
-- PHP Version: 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `squq8438_prediksi`
--

-- --------------------------------------------------------

--
-- Table structure for table `bertahans`
--

CREATE TABLE `bertahans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `umur` int(11) NOT NULL,
  `berat_badan` int(11) NOT NULL,
  `tinggi` int(11) NOT NULL,
  `kaki_utama` int(11) NOT NULL,
  `pace` int(11) NOT NULL,
  `shooting` int(11) NOT NULL,
  `passing` int(11) NOT NULL,
  `dribbling` int(11) NOT NULL,
  `defending` int(11) NOT NULL,
  `physical` int(11) NOT NULL,
  `overall` int(11) NOT NULL,
  `masuk_squad` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bertahans`
--

INSERT INTO `bertahans` (`id`, `nama`, `umur`, `berat_badan`, `tinggi`, `kaki_utama`, `pace`, `shooting`, `passing`, `dribbling`, `defending`, `physical`, `overall`, `masuk_squad`, `created_at`, `updated_at`) VALUES
(1, 'Fikayo Tomori', 24, 79, 185, 1, 86, 40, 60, 66, 86, 81, 86, 'YA', NULL, NULL),
(2, 'Joe Gomez', 25, 77, 188, 1, 82, 27, 68, 70, 78, 77, 81, 'YA', NULL, NULL),
(3, 'Michael Keane', 29, 82, 191, 1, 52, 49, 63, 61, 79, 78, 77, 'YA', NULL, NULL),
(4, 'Ben Godfrey', 24, 79, 183, 1, 82, 44, 60, 65, 74, 79, 77, 'YA', NULL, NULL),
(5, 'Ben Chilwell', 25, 77, 180, 2, 76, 60, 78, 78, 77, 73, 81, 'YA', NULL, NULL),
(6, 'Eric Dier', 28, 90, 188, 1, 52, 63, 68, 63, 77, 82, 79, 'YA', NULL, NULL),
(7, 'Conor Coady', 29, 80, 186, 1, 47, 57, 76, 66, 79, 72, 78, 'YA', NULL, NULL),
(8, 'Tyrick Mitchell', 22, 70, 180, 2, 77, 93, 60, 70, 75, 68, 76, 'YA', NULL, NULL),
(9, 'Reece James', 22, 87, 178, 1, 80, 72, 83, 82, 81, 81, 84, 'YA', NULL, NULL),
(10, 'Ben White', 24, 77, 185, 1, 72, 29, 70, 74, 82, 78, 82, 'YA', NULL, NULL),
(11, 'James Justin', 24, 80, 183, 1, 81, 50, 69, 72, 73, 70, 77, 'YA', NULL, NULL),
(12, 'Marc Guehi', 21, 82, 182, 1, 73, 39, 59, 69, 79, 75, 80, 'YA', NULL, NULL),
(13, 'Tyrone Mings', 29, 77, 196, 2, 70, 44, 67, 66, 78, 82, 79, 'YA', NULL, NULL),
(14, 'Lewis Dunk', 30, 88, 192, 1, 44, 51, 65, 64, 800, 79, 80, 'YA', NULL, NULL),
(15, 'Luke Shaw', 26, 75, 181, 2, 76, 57, 82, 80, 81, 80, 82, 'YA', NULL, NULL),
(16, 'Trent Alexander-Arnold', 23, 69, 180, 1, 76, 69, 89, 79, 79, 72, 88, 'YA', NULL, NULL),
(17, 'Kyle Walker', 32, 83, 183, 1, 90, 63, 77, 78, 79, 82, 84, 'YA', NULL, NULL),
(18, 'Kieran Trippier', 31, 71, 173, 1, 70, 65, 85, 78, 81, 73, 84, 'YA', NULL, NULL),
(19, 'John Stones', 28, 76, 188, 1, 72, 51, 71, 76, 85, 78, 84, 'YA', NULL, NULL),
(20, 'Chris Smalling', 32, 81, 194, 1, 62, 47, 58, 62, 86, 82, 83, 'TIDAK', NULL, NULL),
(21, 'Lewis Dunk', 30, 88, 192, 1, 44, 51, 65, 64, 80, 79, 80, 'TIDAK', NULL, NULL),
(22, 'James Tarkowski', 29, 81, 188, 1, 55, 45, 62, 60, 81, 80, 79, 'TIDAK', NULL, NULL),
(23, 'Aaron Wan-Bissaka', 24, 72, 183, 1, 83, 50, 65, 74, 77, 70, 79, 'TIDAK', NULL, NULL),
(24, 'Adam Webster', 27, 75, 191, 1, 69, 31, 62, 70, 79, 76, 79, 'TIDAK', NULL, NULL),
(25, 'Dan Burn', 30, 87, 198, 2, 51, 34, 66, 64, 80, 84, 78, 'TIDAK', NULL, NULL),
(26, 'James Tavernier', 30, 75, 182, 1, 82, 73, 77, 75, 72, 80, 78, 'TIDAK', NULL, NULL),
(27, 'James Milner', 36, 70, 175, 1, 53, 70, 79, 76, 77, 75, 79, 'TIDAK', NULL, NULL),
(28, 'Ben Mee', 32, 82, 180, 2, 52, 42, 54, 57, 80, 78, 78, 'TIDAK', NULL, NULL),
(29, 'Craig Dawson', 32, 77, 188, 1, 49, 47, 59, 55, 79, 76, 78, 'TIDAK', NULL, NULL),
(30, 'Aaron Cresswell', 32, 66, 175, 2, 60, 60, 75, 75, 77, 68, 77, 'TIDAK', NULL, NULL),
(31, 'Rico Henry', 24, 66, 170, 2, 90, 41, 61, 75, 73, 72, 77, 'TIDAK', NULL, NULL),
(32, 'Matt Targett', 26, 70, 183, 2, 69, 47, 72, 72, 75, 68, 76, 'TIDAK', NULL, NULL),
(33, 'Ashley Young', 36, 65, 175, 1, 68, 66, 77, 75, 76, 71, 76, 'TIDAK', NULL, NULL),
(34, 'Max Kilman', 25, 89, 194, 2, 61, 42, 64, 63, 77, 78, 78, 'TIDAK', NULL, NULL),
(35, 'Ryan Sessegnon', 22, 70, 178, 2, 80, 64, 72, 77, 70, 65, 78, 'TIDAK', NULL, NULL),
(36, 'Joel Ward', 32, 83, 188, 1, 54, 52, 68, 66, 76, 70, 74, 'TIDAK', NULL, NULL),
(37, 'Calum Chambers', 27, 77, 182, 1, 65, 56, 70, 68, 75, 71, 74, 'TIDAK', NULL, NULL),
(38, 'Ben Davies', 26, 74, 185, 2, 66, 39, 59, 64, 74, 72, 75, 'TIDAK', NULL, NULL),
(39, 'Ainsley Maitland-Niles', 24, 71, 177, 1, 78, 61, 68, 72, 69, 67, 73, 'YA', NULL, NULL),
(40, 'Trevoh Chalobah', 22, 84, 191, 1, 64, 47, 65, 68, 76, 76, 78, 'TIDAK', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `gelandangs`
--

CREATE TABLE `gelandangs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `umur` int(11) NOT NULL,
  `berat_badan` int(11) NOT NULL,
  `tinggi` int(11) NOT NULL,
  `kaki_utama` int(11) NOT NULL,
  `pace` int(11) NOT NULL,
  `shooting` int(11) NOT NULL,
  `passing` int(11) NOT NULL,
  `dribbling` int(11) NOT NULL,
  `defending` int(11) NOT NULL,
  `physical` int(11) NOT NULL,
  `overall` int(11) NOT NULL,
  `masuk_squad` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gelandangs`
--

INSERT INTO `gelandangs` (`id`, `nama`, `umur`, `berat_badan`, `tinggi`, `kaki_utama`, `pace`, `shooting`, `passing`, `dribbling`, `defending`, `physical`, `overall`, `masuk_squad`, `created_at`, `updated_at`) VALUES
(1, 'Declan Rice', 23, 80, 185, 1, 71, 65, 75, 76, 82, 83, 85, 'YA', NULL, NULL),
(2, 'Kalvin Phillips', 26, 72, 178, 1, 66, 65, 76, 75, 78, 77, 81, 'YA', NULL, NULL),
(3, 'Jude Bellingham', 19, 75, 168, 1, 73, 75, 79, 84, 78, 81, 87, 'YA', NULL, NULL),
(4, 'Conor Gallagher', 22, 74, 182, 1, 74, 76, 74, 77, 68, 74, 80, 'YA', NULL, NULL),
(5, 'Jordan Henderson', 32, 80, 187, 1, 65, 74, 80, 77, 76, 79, 80, 'YA', NULL, NULL),
(6, 'James Maddison', 25, 73, 175, 1, 73, 81, 86, 86, 54, 63, 86, 'YA', NULL, NULL),
(7, 'James Ward-Prowse', 27, 66, 173, 1, 59, 73, 86, 77, 67, 73, 81, 'YA', NULL, NULL),
(8, 'Mason Mount', 23, 74, 181, 1, 74, 79, 82, 81, 56, 66, 83, 'YA', NULL, NULL),
(9, 'Eberechi Eze', 24, 67, 178, 1, 77, 74, 75, 81, 49, 67, 80, 'YA', NULL, NULL),
(10, 'Jesse Lingard', 29, 60, 175, 1, 72, 74, 72, 77, 57, 64, 75, 'YA', NULL, NULL),
(11, 'Solly March', 27, 77, 180, 2, 76, 70, 76, 80, 67, 63, 79, 'TIDAK', NULL, NULL),
(12, 'Joe Willock', 22, 71, 186, 1, 82, 72, 74, 81, 72, 71, 81, 'YA', NULL, NULL),
(13, 'Sean Longstaff', 24, 65, 180, 1, 61, 65, 75, 74, 73, 70, 80, 'TIDAK', NULL, NULL),
(14, 'Curtis Jones', 21, 75, 185, 1, 68, 68, 73, 80, 68, 71, 79, 'TIDAK', NULL, NULL),
(15, 'Kiernan Dewsbury-Hall', 23, 70, 180, 2, 67, 66, 76, 76, 68, 75, 79, 'TIDAK', NULL, NULL),
(16, 'Alex Oxlade-Chamberlain', 28, 70, 175, 1, 78, 74, 76, 81, 67, 72, 78, 'TIDAK', NULL, NULL),
(17, 'Oliver Skipp', 21, 70, 175, 1, 65, 47, 68, 71, 75, 70, 78, 'TIDAK', NULL, NULL),
(18, 'Harvey Elliot', 19, 67, 168, 2, 75, 64, 75, 81, 42, 50, 79, 'TIDAK', NULL, NULL),
(19, 'Ruben Loftus-Cheek', 26, 88, 191, 1, 65, 68, 75, 78, 67, 74, 78, 'TIDAK', NULL, NULL),
(20, 'Demarai Gray', 26, 75, 183, 1, 86, 76, 69, 72, 37, 58, 78, 'TIDAK', NULL, NULL),
(21, 'Nathan Redmond', 28, 69, 173, 1, 83, 73, 70, 79, 30, 55, 76, 'TIDAK', NULL, NULL),
(22, 'Adam Lallana', 34, 73, 178, 1, 60, 70, 77, 78, 63, 61, 76, 'YA', NULL, NULL),
(23, 'Callum Hudson-Odoi', 21, 76, 182, 1, 79, 67, 73, 79, 48, 59, 77, 'TIDAK', NULL, NULL),
(24, 'Jacob Ramsey', 21, 72, 180, 1, 77, 75, 72, 80, 68, 77, 79, 'TIDAK', NULL, NULL),
(25, 'Jack Harrison', 25, 70, 175, 2, 80, 70, 70, 79, 49, 67, 76, 'TIDAK', NULL, NULL),
(26, 'Morgan Gibbs-White', 22, 70, 178, 1, 76, 72, 75, 79, 57, 68, 78, 'TIDAK', NULL, NULL),
(27, 'Ryan Yates', 24, 77, 190, 1, 62, 59, 62, 65, 74, 86, 78, 'TIDAK', NULL, NULL),
(28, 'Dele Alli', 26, 80, 188, 1, 65, 76, 75, 76, 65, 71, 77, 'TIDAK', NULL, NULL),
(29, 'Ross Barkley', 28, 76, 186, 1, 68, 72, 73, 75, 56, 70, 74, 'TIDAK', NULL, NULL),
(30, 'Andros Townsend', 30, 73, 175, 2, 71, 73, 75, 77, 38, 60, 74, 'TIDAK', NULL, NULL),
(31, 'Lewis Baker', 27, 72, 182, 1, 66, 71, 72, 71, 66, 71, 72, 'TIDAK', NULL, NULL),
(32, 'Nathaniel Chalobah', 27, 80, 187, 1, 55, 61, 67, 72, 70, 72, 72, 'TIDAK', NULL, NULL),
(33, 'Alex Scott', 18, 68, 178, 1, 73, 62, 71, 76, 62, 66, 73, 'TIDAK', NULL, NULL),
(34, 'Theo Walcott', 33, 68, 176, 1, 72, 68, 69, 74, 39, 52, 72, 'TIDAK', NULL, NULL),
(64, 'James McAtee', 19, 72, 180, 2, 72, 63, 66, 73, 41, 59, 72, 'TIDAK', '2023-06-26 05:13:23', '2023-06-26 05:13:23'),
(65, 'Febby', 20, 72, 180, 2, 72, 63, 66, 73, 41, 59, 70, 'TIDAK', '2023-06-27 03:05:20', '2023-06-27 03:05:20');

-- --------------------------------------------------------

--
-- Table structure for table `gks`
--

CREATE TABLE `gks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `umur` int(11) NOT NULL,
  `berat_badan` int(11) NOT NULL,
  `tinggi` int(11) NOT NULL,
  `kaki_utama` int(11) NOT NULL,
  `diving` int(11) NOT NULL,
  `handling` int(11) NOT NULL,
  `kicking` int(11) NOT NULL,
  `reflexes` int(11) NOT NULL,
  `speed` int(11) NOT NULL,
  `positioning` int(11) NOT NULL,
  `overall` int(11) NOT NULL,
  `masuk_squad` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gks`
--

INSERT INTO `gks` (`id`, `nama`, `umur`, `berat_badan`, `tinggi`, `kaki_utama`, `diving`, `handling`, `kicking`, `reflexes`, `speed`, `positioning`, `overall`, `masuk_squad`, `created_at`, `updated_at`) VALUES
(1, 'Jordan Pickford', 28, 77, 185, 2, 83, 77, 87, 87, 51, 80, 82, 'YA', NULL, NULL),
(2, 'Sam Johnstone', 29, 85, 193, 1, 77, 73, 70, 76, 41, 75, 75, 'YA', NULL, NULL),
(3, 'Nick Pope', 30, 76, 799, 1, 81, 83, 75, 85, 49, 82, 83, 'YA', NULL, NULL),
(4, 'Fraser Forster', 34, 93, 201, 1, 76, 72, 67, 81, 30, 75, 76, 'YA', NULL, NULL),
(5, 'Dean Henderson', 25, 85, 188, 1, 80, 78, 77, 82, 55, 75, 79, 'YA', NULL, NULL),
(6, 'Aaron Ramsdale', 24, 77, 191, 1, 84, 79, 87, 86, 40, 79, 83, 'YA', NULL, NULL),
(7, 'Freddie Woodman', 25, 83, 188, 1, 76, 72, 71, 76, 47, 74, 75, 'TIDAK', NULL, NULL),
(8, 'Karl Darlow', 31, 88, 190, 1, 76, 71, 68, 77, 58, 74, 74, 'TIDAK', NULL, NULL),
(9, 'Lee Nicholls', 29, 85, 191, 1, 74, 71, 69, 76, 41, 73, 74, 'TIDAK', NULL, NULL),
(10, 'Joe Hart', 35, 91, 196, 1, 70, 74, 68, 76, 52, 74, 74, 'YA', NULL, NULL),
(11, 'James Trafford', 19, 90, 192, 1, 68, 66, 67, 69, 27, 66, 68, 'TIDAK', NULL, NULL),
(12, 'Matt Ingram', 28, 91, 191, 2, 72, 66, 68, 71, 36, 68, 68, 'TIDAK', NULL, NULL),
(13, 'Brad Collins', 25, 69, 184, 1, 66, 65, 66, 68, 43, 67, 67, 'TIDAK', NULL, NULL),
(14, 'Frank Fielding', 34, 76, 180, 1, 65, 65, 59, 69, 41, 65, 67, 'TIDAK', NULL, NULL),
(15, 'Matt Macey', 27, 81, 201, 1, 69, 66, 64, 66, 39, 65, 67, 'TIDAK', NULL, NULL),
(16, 'Andy Fisher', 24, 73, 183, 1, 64, 62, 68, 66, 34, 63, 65, 'TIDAK', NULL, NULL),
(17, 'Paul Robinshon', 36, 90, 193, 1, 66, 67, 74, 65, 38, 71, 68, 'YA', NULL, NULL),
(18, 'Brandon Anthony Austin', 23, 75, 188, 1, 69, 63, 55, 62, 41, 64, 64, 'TIDAK', NULL, NULL),
(19, 'Matthew Cox', 19, 74, 182, 1, 64, 62, 65, 65, 30, 60, 62, 'TIDAK', '2023-07-16 00:54:00', '2023-07-16 00:54:00');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_06_11_161549_create_pemains_table', 1),
(6, '2023_06_12_164003_create_roles_table', 1),
(7, '2023_06_22_171140_create_gelandangs_table', 1),
(8, '2023_06_22_171149_create_bertahans_table', 1),
(9, '2023_06_22_171158_create_gks_table', 1),
(10, '2023_06_25_173004_create_nilai_k_s_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `nilai_k_s`
--

CREATE TABLE `nilai_k_s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jenis` varchar(255) NOT NULL,
  `nilai_k` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nilai_k_s`
--

INSERT INTO `nilai_k_s` (`id`, `jenis`, `nilai_k`, `created_at`, `updated_at`) VALUES
(1, 'nilai k penyerang', 5, NULL, '2023-06-26 05:04:28'),
(2, 'nilai k gelandang', 3, NULL, NULL),
(3, 'nilai k bertahan', 7, NULL, NULL),
(4, 'nilai k gk', 9, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pemains`
--

CREATE TABLE `pemains` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `umur` int(11) NOT NULL,
  `berat_badan` int(11) NOT NULL,
  `tinggi` int(11) NOT NULL,
  `kaki_utama` int(11) NOT NULL,
  `pace` int(11) NOT NULL,
  `shooting` int(11) NOT NULL,
  `passing` int(11) NOT NULL,
  `dribbling` int(11) NOT NULL,
  `defending` int(11) NOT NULL,
  `physical` int(11) NOT NULL,
  `overall` int(11) NOT NULL,
  `masuk_squad` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pemains`
--

INSERT INTO `pemains` (`id`, `nama`, `umur`, `berat_badan`, `tinggi`, `kaki_utama`, `pace`, `shooting`, `passing`, `dribbling`, `defending`, `physical`, `overall`, `masuk_squad`, `created_at`, `updated_at`) VALUES
(2, 'Raheem Sterling', 27, 69, 170, 1, 86, 79, 77, 85, 45, 67, 85, 'YA', NULL, NULL),
(3, 'Jadon Sancho', 22, 76, 180, 1, 78, 70, 80, 87, 33, 45, 85, 'YA', NULL, NULL),
(4, 'Emile Smith Rowe', 21, 72, 182, 1, 77, 73, 75, 82, 32, 61, 81, 'YA', NULL, NULL),
(5, 'Dominic Calvert-Lewin', 25, 71, 187, 1, 79, 75, 64, 73, 39, 77, 79, 'YA', NULL, NULL),
(6, 'Patric Bamford', 28, 71, 185, 2, 76, 73, 68, 72, 42, 75, 75, 'YA', NULL, NULL),
(7, 'Jarrod Bowen', 25, 70, 175, 2, 78, 77, 75, 81, 44, 66, 80, 'YA', NULL, NULL),
(8, 'Tammy Abraham', 24, 86, 195, 1, 83, 77, 66, 78, 36, 80, 83, 'YA', NULL, NULL),
(9, 'Ollie Watkins', 26, 70, 180, 1, 84, 77, 68, 74, 46, 76, 79, 'YA', NULL, NULL),
(10, 'Phil Foden', 22, 69, 171, 2, 82, 78, 81, 87, 57, 60, 87, 'YA', NULL, NULL),
(11, 'Marcus Rashford', 24, 70, 186, 1, 89, 86, 78, 84, 42, 74, 87, 'YA', NULL, NULL),
(12, 'Jack Grealish', 26, 81, 180, 1, 78, 76, 83, 88, 52, 72, 84, 'YA', NULL, NULL),
(13, 'Bukayo Saka', 20, 65, 178, 2, 85, 80, 79, 87, 65, 69, 86, 'YA', NULL, NULL),
(14, 'Harry Kane', 28, 89, 188, 1, 69, 91, 83, 83, 46, 82, 89, 'YA', NULL, NULL),
(15, 'Ivan Toney', 26, 76, 187, 1, 79, 81, 70, 76, 51, 82, 81, 'YA', NULL, NULL),
(16, 'Callum Wilson', 30, 66, 180, 1, 80, 80, 66, 78, 42, 76, 81, 'YA', NULL, NULL),
(17, 'Marcus Edwards', 23, 65, 168, 2, 85, 73, 71, 86, 33, 48, 81, 'TIDAK', NULL, NULL),
(18, 'Jamie Vardy', 35, 74, 179, 1, 80, 80, 70, 77, 52, 70, 80, 'TIDAK', NULL, NULL),
(19, 'Danny Ings', 29, 73, 178, 1, 72, 81, 70, 77, 45, 69, 78, 'TIDAK', NULL, NULL),
(20, 'Jacob Murphy', 27, 74, 179, 1, 83, 68, 70, 78, 64, 61, 76, 'TIDAK', NULL, NULL),
(21, 'Dominic Solanke', 24, 80, 187, 1, 74, 74, 64, 73, 28, 79, 77, 'TIDAK', NULL, NULL),
(22, 'Danny Welbeck', 31, 73, 185, 1, 69, 73, 69, 76, 42, 69, 75, 'TIDAK', NULL, NULL),
(23, 'Ryan Kent', 25, 65, 172, 1, 88, 68, 70, 79, 45, 63, 77, 'TIDAK', NULL, NULL),
(24, 'Eddie Nketiah', 23, 73, 180, 1, 80, 73, 57, 77, 25, 64, 77, 'TIDAK', NULL, NULL),
(25, 'Nathan Tella', 22, 70, 173, 1, 88, 69, 65, 76, 33, 57, 75, 'TIDAK', NULL, NULL),
(26, 'Anthony Gordon', 21, 72, 183, 1, 89, 68, 72, 75, 37, 62, 76, 'TIDAK', NULL, NULL),
(27, 'Reiss Nelson', 22, 71, 175, 1, 83, 66, 69, 78, 36, 54, 75, 'TIDAK', NULL, NULL),
(28, 'Tom Ince', 30, 66, 178, 2, 77, 69, 68, 73, 52, 70, 72, 'TIDAK', NULL, NULL),
(29, 'Marc Albrighton', 32, 74, 175, 1, 64, 68, 74, 72, 61, 63, 72, 'TIDAK', NULL, NULL),
(30, 'Elijah Adebayo', 24, 89, 193, 1, 74, 71, 50, 69, 45, 80, 74, 'TIDAK', NULL, NULL),
(31, 'Karlan Grant', 24, 70, 182, 1, 73, 71, 62, 71, 33, 65, 73, 'TIDAK', NULL, NULL),
(32, 'Tyrhys Dolan', 20, 63, 164, 1, 82, 60, 63, 74, 42, 50, 71, 'TIDAK', NULL, NULL),
(33, 'Nick Powell', 28, 65, 183, 1, 67, 69, 69, 72, 54, 68, 70, 'TIDAK', NULL, NULL),
(34, 'Tyrese Campbell', 22, 75, 183, 2, 81, 68, 60, 70, 33, 66, 72, 'TIDAK', NULL, NULL),
(35, 'Sam Gallagher', 26, 75, 193, 1, 70, 69, 58, 67, 45, 75, 71, 'TIDAK', NULL, NULL),
(36, 'Jerry Yates', 25, 80, 175, 1, 78, 70, 56, 70, 29, 68, 72, 'TIDAK', NULL, NULL),
(37, 'Cauley Woodrow', 27, 74, 184, 1, 68, 71, 59, 68, 30, 67, 69, 'TIDAK', NULL, NULL),
(38, 'Noni Madueke', 20, 73, 182, 2, 90, 71, 68, 82, 36, 62, 78, 'TIDAK', NULL, NULL),
(39, 'Chuba Akpom', 26, 81, 186, 1, 82, 75, 58, 72, 31, 76, 77, 'TIDAK', NULL, NULL),
(40, 'Adam Armstrong', 25, 69, 172, 1, 80, 73, 65, 72, 35, 67, 74, 'TIDAK', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
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
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2023-06-25 10:42:22', '2023-06-25 10:42:22'),
(2, 'user', '2023-06-25 10:42:22', '2023-06-25 10:42:22');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` bigint(20) UNSIGNED NOT NULL DEFAULT 2,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Shin Tae Young', 'sty@gmail.com', NULL, '$2y$10$IMylvIMGJkDHnnYXb8tMEem4BAGczY6y.G2KPg4iFF1cCLqmZ9NVy', 2, NULL, '2023-06-25 10:42:22', '2023-06-25 10:42:22'),
(2, 'Jose Mourinho', 'josemou@example.com', NULL, '$2y$10$Ru61jKTKsAB2RzKAnEk4cuy/PX77SDmDyTDgUudO6YWyJduDk5/26', 2, NULL, '2023-06-25 10:42:22', '2023-06-25 10:42:22'),
(3, 'Dania Dana', 'admin@gmail.com', NULL, '$2y$10$2qiKLC.XGodS0UXFG31TFualckwRwKej/Eeefu.S17DatUxYqheyK', 1, NULL, '2023-06-25 10:42:22', '2023-06-25 10:42:22'),
(4, 'User1', 'user1@gmail.com', NULL, '$2y$10$BmMBrkk1jauf0iyXMNSdheCL6EgliDQkIqO5DdQIQEsBcCwuQay6y', 2, NULL, '2023-07-29 00:04:55', '2023-07-29 00:04:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bertahans`
--
ALTER TABLE `bertahans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `gelandangs`
--
ALTER TABLE `gelandangs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gks`
--
ALTER TABLE `gks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nilai_k_s`
--
ALTER TABLE `nilai_k_s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `pemains`
--
ALTER TABLE `pemains`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_role_unique` (`role`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bertahans`
--
ALTER TABLE `bertahans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gelandangs`
--
ALTER TABLE `gelandangs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `gks`
--
ALTER TABLE `gks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `nilai_k_s`
--
ALTER TABLE `nilai_k_s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pemains`
--
ALTER TABLE `pemains`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
