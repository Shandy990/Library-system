-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 07, 2024 at 10:35 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` bigint UNSIGNED NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'available',
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publish_date` timestamp NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `returned_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `status`, `title`, `author`, `publish_date`, `description`, `created_at`, `updated_at`, `user_id`, `returned_at`, `deleted_at`) VALUES
(1, 'borrowed', 'Et est dolores animi.', 'Carroll Gerlach', '2020-12-14 16:00:00', 'Vel delectus deserunt ipsam nisi consectetur consequatur. Magnam repellat quam aliquam qui impedit provident. Nemo dicta rerum dolorum sed rem pariatur vitae delectus.', '2023-11-13 04:07:29', '2023-12-08 03:28:02', NULL, NULL, '2023-12-08 03:28:02'),
(2, 'borrowed', 'Ut est ut est neque eveniet aliquam sapiente.', 'Matilda Kshlerin', '2008-12-18 16:00:00', 'Deserunt quas non doloribus iste. Amet et mollitia excepturi nostrum unde eum. Praesentium unde et et optio quia cum magni.', '2023-11-13 04:07:29', '2023-12-11 03:09:43', NULL, NULL, '2023-12-11 03:09:43'),
(4, 'available', 'Quo est dolores ab nisi voluptatem.', 'Dr. Leda Bashirian III', '2009-10-09 16:00:00', 'Est est modi expedita aut ut tempora. Vitae quia ab iusto voluptatem. Laudantium pariatur eum ducimus non occaecati ut.', '2023-11-13 04:07:29', '2024-01-19 04:25:12', NULL, NULL, '2024-01-19 04:25:12'),
(5, 'available', 'Sapiente id ullam sapiente dolores.', 'Mr. Morris Bins DDS', '1973-12-12 16:00:00', 'Sequi ad maxime sit vitae totam ut enim ipsum. Repudiandae id et suscipit maiores quas porro dignissimos. Quam quis consequuntur sint.', '2023-11-13 04:07:29', '2024-01-19 04:25:14', NULL, NULL, '2024-01-19 04:25:14'),
(6, 'borrowed', 'Non et delectus odio necessitatibus a id ut.', 'Rogers Haley DVM', '1982-02-24 16:00:00', 'Ut iure quae quasi soluta facilis voluptatem deleniti. Sint vel non quos non qui. Excepturi ullam sunt sed.', '2023-11-13 04:07:29', '2024-01-19 04:25:16', NULL, NULL, '2024-01-19 04:25:16'),
(7, 'borrowed', 'Rem ipsum quae officia ea.', 'Zackery Hauck', '2019-06-11 16:00:00', 'Corporis sit esse ducimus fugiat in et. Incidunt ut aut nesciunt provident alias in. Sequi eligendi et veritatis nesciunt deleniti ut veniam. Voluptatem iure unde voluptas.', '2023-11-13 04:07:29', '2024-01-19 04:25:18', NULL, NULL, '2024-01-19 04:25:18'),
(8, 'available', 'Beatae consequuntur est quo quo.', 'Ms. Nettie Treutel III', '1979-02-13 16:00:00', 'Delectus et hic beatae aspernatur eum minus. Dolorum doloremque saepe sapiente dignissimos id blanditiis. Nemo optio recusandae laudantium natus. Dolorum vel quo minus.', '2023-11-13 04:07:29', '2024-01-19 04:25:20', NULL, NULL, '2024-01-19 04:25:20'),
(21, 'available', 'Loki Season 2', 'Anonymous', '2023-10-31 16:00:00', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '2023-11-13 04:08:56', '2023-12-04 04:21:05', NULL, NULL, '2023-12-04 04:21:05'),
(28, 'borrowed', 'Test Data 1', 'Author 1', '2000-01-09 16:00:00', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2024-01-19 04:29:08', '2024-06-07 02:29:08', 104, '2024-06-12 02:29:08', NULL),
(29, 'borrowed', 'Test Data 2', 'Author 2', '2001-02-09 16:00:00', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', '2024-01-19 04:30:29', '2024-06-06 20:56:42', 101, '2024-06-11 20:56:42', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `book_favorites`
--

CREATE TABLE `book_favorites` (
  `book_id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `book_genres`
--

CREATE TABLE `book_genres` (
  `book_id` bigint UNSIGNED NOT NULL,
  `genre_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `book_genres`
--

INSERT INTO `book_genres` (`book_id`, `genre_id`) VALUES
(28, 1),
(28, 3),
(29, 3),
(29, 5);

-- --------------------------------------------------------

--
-- Table structure for table `covers`
--

CREATE TABLE `covers` (
  `id` bigint UNSIGNED NOT NULL,
  `book_id` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `book_title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `covers`
--

INSERT INTO `covers` (`id`, `book_id`, `book_title`, `path`) VALUES
(6, '28', 'Test Data 1', 'public/covers/Test Data 1.png'),
(7, '29', 'Test Data 2', 'public/covers/Test Data 2.png');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `genres`
--

CREATE TABLE `genres` (
  `id` bigint UNSIGNED NOT NULL,
  `genre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `genres`
--

INSERT INTO `genres` (`id`, `genre`) VALUES
(1, 'fantasy'),
(2, 'advanture'),
(3, 'romance'),
(4, 'horror'),
(5, 'comedy'),
(6, 'angst'),
(7, 'family'),
(8, 'mystery'),
(9, 'kingdom'),
(10, 'action'),
(11, 'history'),
(12, 'education'),
(13, 'biography'),
(14, 'food');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(303, '2014_10_12_000000_create_users_table', 1),
(304, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(305, '2014_10_12_100000_create_password_resets_table', 1),
(306, '2019_08_19_000000_create_failed_jobs_table', 1),
(307, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(308, '2023_10_20_091143_create_books_table', 1),
(309, '2023_10_20_120009_create_genres_table', 1),
(310, '2023_10_20_120739_create_authors_table', 1),
(311, '2023_10_23_113645_create_book_genres_table', 1),
(312, '2023_10_25_023943_create_covers_table', 1),
(313, '2023_10_27_071331_create_articles_table', 1),
(314, '2023_11_06_111953_add_user_id_in_books_table', 1),
(315, '2023_11_13_114836_add_returned_at_in_books_table', 1),
(316, '2023_12_04_111749_create_book_favorites_table', 2),
(317, '2023_12_04_115246_add_is_admin_in_users_table', 2),
(318, '2023_12_04_121752_add_deleted_at_in_books_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `is_admin`) VALUES
(1, 'Fay Abbott', 'wmcclure@example.com', '2023-11-13 04:07:29', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '7GR2VhvEuE', '2023-11-13 04:07:30', '2023-11-13 04:07:30', 0),
(2, 'Maeve White MD', 'ffeest@example.net', '2023-11-13 04:07:29', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'f24vqEGplP', '2023-11-13 04:07:30', '2023-11-13 04:07:30', 0),
(3, 'Prof. Aryanna Jaskolski I', 'jframi@example.org', '2023-11-13 04:07:29', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '1FDYh1BjTG', '2023-11-13 04:07:30', '2023-11-13 04:07:30', 0),
(4, 'Destiney Pollich', 'aglae78@example.org', '2023-11-13 04:07:29', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'k59PuMRbFJ', '2023-11-13 04:07:30', '2023-11-13 04:07:30', 0),
(5, 'Janessa VonRueden', 'bhermann@example.com', '2023-11-13 04:07:29', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'vkecadztpG', '2023-11-13 04:07:30', '2023-11-13 04:07:30', 0),
(6, 'Loyce Mohr', 'keanu55@example.org', '2023-11-13 04:07:29', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'ImNo4HWwSK', '2023-11-13 04:07:30', '2023-11-13 04:07:30', 0),
(7, 'Dr. Jackie Bauch III', 'kcormier@example.org', '2023-11-13 04:07:29', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'I9OqK7rZLw', '2023-11-13 04:07:30', '2023-11-13 04:07:30', 0),
(8, 'Mrs. Cathy Daniel Sr.', 'kayli.larkin@example.com', '2023-11-13 04:07:29', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'b4PBWK7xFM', '2023-11-13 04:07:30', '2023-11-13 04:07:30', 0),
(9, 'Remington Block MD', 'bailey.ottis@example.net', '2023-11-13 04:07:29', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'YNI9mqMP41', '2023-11-13 04:07:30', '2023-11-13 04:07:30', 0),
(10, 'Miss Oleta Marks', 'kcasper@example.net', '2023-11-13 04:07:29', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'up2CWrLSn8', '2023-11-13 04:07:30', '2023-11-13 04:07:30', 0),
(11, 'Shakira Cruickshank', 'schulist.leanne@example.org', '2023-11-13 04:07:29', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'PXqfwCCWus', '2023-11-13 04:07:30', '2023-11-13 04:07:30', 0),
(12, 'Elisa Von', 'llewellyn.nitzsche@example.com', '2023-11-13 04:07:29', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'gbTmPOxhLB', '2023-11-13 04:07:30', '2023-11-13 04:07:30', 0),
(13, 'Barry Ebert PhD', 'nettie60@example.com', '2023-11-13 04:07:30', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'hdPGLrKwsI', '2023-11-13 04:07:30', '2023-11-13 04:07:30', 0),
(14, 'Maximo Beer IV', 'rolfson.davion@example.net', '2023-11-13 04:07:30', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'mmjVolWGBt', '2023-11-13 04:07:30', '2023-11-13 04:07:30', 0),
(15, 'Chester Rutherford', 'bertha.kub@example.org', '2023-11-13 04:07:30', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'd1v8bAizWy', '2023-11-13 04:07:30', '2023-11-13 04:07:30', 0),
(16, 'Jalen Dibbert', 'margarett.greenfelder@example.net', '2023-11-13 04:07:30', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'GMjY9qn5r8', '2023-11-13 04:07:30', '2023-11-13 04:07:30', 0),
(17, 'Yasmeen Stokes', 'renner.keegan@example.com', '2023-11-13 04:07:30', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'pP7wpFszEt', '2023-11-13 04:07:30', '2023-11-13 04:07:30', 0),
(18, 'Prof. Jan Hickle MD', 'skiles.immanuel@example.com', '2023-11-13 04:07:30', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'xJSNJ4aZfo', '2023-11-13 04:07:30', '2023-11-13 04:07:30', 0),
(19, 'Filomena Huels Sr.', 'felicita.sporer@example.com', '2023-11-13 04:07:30', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'xwbM85A5yr', '2023-11-13 04:07:30', '2023-11-13 04:07:30', 0),
(20, 'Berry Hirthe', 'oliver.nitzsche@example.com', '2023-11-13 04:07:30', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'oKLsAYFFxB', '2023-11-13 04:07:30', '2023-11-13 04:07:30', 0),
(21, 'Kennedy Jerde V', 'ufeest@example.com', '2023-11-13 04:07:30', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'WXwFP6r5PE', '2023-11-13 04:07:30', '2023-11-13 04:07:30', 0),
(22, 'Drew Christiansen', 'bauch.bill@example.net', '2023-11-13 04:07:30', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '16E8MOtah8', '2023-11-13 04:07:30', '2023-11-13 04:07:30', 0),
(23, 'Frederique Murray', 'kristian.pfannerstill@example.org', '2023-11-13 04:07:30', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Zpa28VsJmf', '2023-11-13 04:07:30', '2023-11-13 04:07:30', 0),
(24, 'Jayson Ondricka', 'howell.lucie@example.net', '2023-11-13 04:07:30', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'zNG45biakI', '2023-11-13 04:07:30', '2023-11-13 04:07:30', 0),
(25, 'Dr. Marley Pollich I', 'toby.volkman@example.org', '2023-11-13 04:07:30', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Bu8lkmGy3w', '2023-11-13 04:07:30', '2023-11-13 04:07:30', 0),
(26, 'Leonard Kuhic', 'nikolas83@example.net', '2023-11-13 04:07:30', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'A3qMfiMnmq', '2023-11-13 04:07:30', '2023-11-13 04:07:30', 0),
(27, 'Prof. Eddie Wilkinson DVM', 'cathy12@example.com', '2023-11-13 04:07:30', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'fZ58ClFQbu', '2023-11-13 04:07:30', '2023-11-13 04:07:30', 0),
(28, 'Bart Morissette', 'gdickens@example.net', '2023-11-13 04:07:30', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'M5rdHRYMt1', '2023-11-13 04:07:30', '2023-11-13 04:07:30', 0),
(29, 'Darian Schultz', 'wilbert.gusikowski@example.org', '2023-11-13 04:07:30', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'JVLcu0DPvy', '2023-11-13 04:07:30', '2023-11-13 04:07:30', 0),
(30, 'Mr. Bartholome Little MD', 'brielle.schaden@example.net', '2023-11-13 04:07:30', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'piHesHzM68', '2023-11-13 04:07:30', '2023-11-13 04:07:30', 0),
(31, 'Pierce Heidenreich II', 'dleannon@example.com', '2023-11-13 04:07:30', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'EFtRB25IE2', '2023-11-13 04:07:30', '2023-11-13 04:07:30', 0),
(32, 'Earnestine Schinner', 'freddy.bruen@example.net', '2023-11-13 04:07:30', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'YcINeKaxVj', '2023-11-13 04:07:30', '2023-11-13 04:07:30', 0),
(33, 'Sophia Jakubowski', 'fritsch.wilton@example.com', '2023-11-13 04:07:30', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'cRNpTchiVW', '2023-11-13 04:07:30', '2023-11-13 04:07:30', 0),
(34, 'Ebony Sauer', 'maritza48@example.org', '2023-11-13 04:07:30', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'MUSPaiMuaN', '2023-11-13 04:07:30', '2023-11-13 04:07:30', 0),
(35, 'Jacinto Wilderman', 'vicky.bernier@example.com', '2023-11-13 04:07:30', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '5R9cfv0PSA', '2023-11-13 04:07:30', '2023-11-13 04:07:30', 0),
(36, 'Guillermo Hauck I', 'walker.hans@example.net', '2023-11-13 04:07:30', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'vUoLnr7VTq', '2023-11-13 04:07:30', '2023-11-13 04:07:30', 0),
(37, 'Nella Jones', 'berge.maude@example.com', '2023-11-13 04:07:30', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'pAdqtauPfh', '2023-11-13 04:07:30', '2023-11-13 04:07:30', 0),
(38, 'Dr. Pansy Crona', 'kareem30@example.org', '2023-11-13 04:07:30', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'MDKnbbbGmr', '2023-11-13 04:07:30', '2023-11-13 04:07:30', 0),
(39, 'Melvina Streich Jr.', 'qbeatty@example.org', '2023-11-13 04:07:30', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'bGzpRSGuwu', '2023-11-13 04:07:30', '2023-11-13 04:07:30', 0),
(40, 'Dr. Meaghan Pfannerstill', 'robyn.hackett@example.com', '2023-11-13 04:07:30', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'psnDqAisIU', '2023-11-13 04:07:30', '2023-11-13 04:07:30', 0),
(41, 'Prof. Kaleb Wiza', 'shanahan.aurelie@example.com', '2023-11-13 04:07:30', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '7qCZwzFWsL', '2023-11-13 04:07:30', '2023-11-13 04:07:30', 0),
(42, 'Dannie Roob', 'laisha95@example.com', '2023-11-13 04:07:30', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'matU5Uc4Rn', '2023-11-13 04:07:30', '2023-11-13 04:07:30', 0),
(43, 'Raymond Quigley', 'ronny26@example.com', '2023-11-13 04:07:30', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '65oy6ky3V3', '2023-11-13 04:07:30', '2023-11-13 04:07:30', 0),
(44, 'Lucie Schuppe', 'brigitte.feeney@example.org', '2023-11-13 04:07:30', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'W1xQVu6i87', '2023-11-13 04:07:30', '2023-11-13 04:07:30', 0),
(45, 'Rosanna Kassulke Jr.', 'jbalistreri@example.org', '2023-11-13 04:07:30', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'aDoBIzyWDD', '2023-11-13 04:07:30', '2023-11-13 04:07:30', 0),
(46, 'Miss Micaela Huels', 'johnny31@example.com', '2023-11-13 04:07:30', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'WFZ5QRs06a', '2023-11-13 04:07:30', '2023-11-13 04:07:30', 0),
(47, 'Leo Langworth', 'adams.alisha@example.net', '2023-11-13 04:07:30', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'UOzQGQDHyC', '2023-11-13 04:07:30', '2023-11-13 04:07:30', 0),
(48, 'Hilma Steuber', 'clifton05@example.com', '2023-11-13 04:07:30', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'mUknJUBMh7', '2023-11-13 04:07:30', '2023-11-13 04:07:30', 0),
(49, 'Dr. Lula Ryan Sr.', 'monique.durgan@example.net', '2023-11-13 04:07:30', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '53rG2YJaeO', '2023-11-13 04:07:30', '2023-11-13 04:07:30', 0),
(50, 'Isabel Watsica', 'ffahey@example.org', '2023-11-13 04:07:30', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'RfTaOtAVLw', '2023-11-13 04:07:30', '2023-11-13 04:07:30', 0),
(51, 'Rebecca Davis', 'becker.cleve@example.com', '2023-11-13 04:07:30', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'pLOfHYNz8O', '2023-11-13 04:07:30', '2023-11-13 04:07:30', 0),
(52, 'Dr. Delta Crooks DVM', 'zfeil@example.net', '2023-11-13 04:07:30', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'bNc0cRrc3d', '2023-11-13 04:07:30', '2023-11-13 04:07:30', 0),
(53, 'Prof. Randy Wiegand V', 'elsie.padberg@example.net', '2023-11-13 04:07:30', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'S4EoxfDvc5', '2023-11-13 04:07:30', '2023-11-13 04:07:30', 0),
(54, 'Prof. Gardner Brown PhD', 'romaine25@example.org', '2023-11-13 04:07:30', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'ZaA2mJQcMw', '2023-11-13 04:07:30', '2023-11-13 04:07:30', 0),
(55, 'Georgette Crona', 'gutkowski.jaycee@example.org', '2023-11-13 04:07:30', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'AWxz9hURnK', '2023-11-13 04:07:30', '2023-11-13 04:07:30', 0),
(56, 'Jillian Kerluke', 'klocko.nelle@example.com', '2023-11-13 04:07:30', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '3araF8yqFR', '2023-11-13 04:07:30', '2023-11-13 04:07:30', 0),
(57, 'Eunice Kuhn', 'erdman.jorge@example.com', '2023-11-13 04:07:30', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'NaZk8gB0Dl', '2023-11-13 04:07:30', '2023-11-13 04:07:30', 0),
(58, 'Ms. Kallie Becker DDS', 'elna36@example.com', '2023-11-13 04:07:30', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'iu7EiB8Nvy', '2023-11-13 04:07:30', '2023-11-13 04:07:30', 0),
(59, 'Alia Windler', 'uhansen@example.net', '2023-11-13 04:07:30', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'lgspjARn8c', '2023-11-13 04:07:30', '2023-11-13 04:07:30', 0),
(60, 'Olen Collins', 'franz.morar@example.com', '2023-11-13 04:07:30', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'dxWJ0LdzP8', '2023-11-13 04:07:30', '2023-11-13 04:07:30', 0),
(61, 'Ms. Hildegard Kuhic', 'mylene.ward@example.org', '2023-11-13 04:07:30', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'D69hXYtwqg', '2023-11-13 04:07:30', '2023-11-13 04:07:30', 0),
(62, 'Miss Eveline Hermiston', 'murazik.electa@example.net', '2023-11-13 04:07:30', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '7eMV0j406T', '2023-11-13 04:07:30', '2023-11-13 04:07:30', 0),
(63, 'Mr. Kaleb Champlin', 'wharvey@example.org', '2023-11-13 04:07:30', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'YiOZRHtiHR', '2023-11-13 04:07:30', '2023-11-13 04:07:30', 0),
(64, 'Elyssa Stracke', 'beaulah31@example.com', '2023-11-13 04:07:30', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'xGo2Jl9VnT', '2023-11-13 04:07:30', '2023-11-13 04:07:30', 0),
(65, 'Mr. Dexter Prosacco I', 'okeefe.camila@example.org', '2023-11-13 04:07:30', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'ij7qAjQhhu', '2023-11-13 04:07:30', '2023-11-13 04:07:30', 0),
(66, 'Ezra Keeling', 'clifton.feil@example.net', '2023-11-13 04:07:30', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'imvFJFQD52', '2023-11-13 04:07:30', '2023-11-13 04:07:30', 0),
(67, 'Clementine Schumm MD', 'brad.carter@example.net', '2023-11-13 04:07:30', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'GWWJWqUiWp', '2023-11-13 04:07:30', '2023-11-13 04:07:30', 0),
(68, 'Taya Rutherford', 'ygottlieb@example.net', '2023-11-13 04:07:30', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Dy030ZtgSp', '2023-11-13 04:07:30', '2023-11-13 04:07:30', 0),
(69, 'Mrs. Aliza Bogisich PhD', 'schiller.shad@example.com', '2023-11-13 04:07:30', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'vvSIaPMCrc', '2023-11-13 04:07:30', '2023-11-13 04:07:30', 0),
(70, 'Anastasia Hartmann', 'ibrakus@example.com', '2023-11-13 04:07:30', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'ZEOl9zMUuh', '2023-11-13 04:07:30', '2023-11-13 04:07:30', 0),
(71, 'Ms. Dejah Robel II', 'adell91@example.com', '2023-11-13 04:07:30', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '7Ip3Vf9xoE', '2023-11-13 04:07:30', '2023-11-13 04:07:30', 0),
(72, 'Delphia Bayer I', 'vupton@example.org', '2023-11-13 04:07:30', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'ZT0ucSQVZz', '2023-11-13 04:07:30', '2023-11-13 04:07:30', 0),
(73, 'Efrain Stanton', 'johnston.estrella@example.net', '2023-11-13 04:07:30', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'nENzTKNQCQ', '2023-11-13 04:07:30', '2023-11-13 04:07:30', 0),
(74, 'Prof. Cristina McCullough V', 'eugenia.hoeger@example.net', '2023-11-13 04:07:30', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'xQTMQ8p7l2', '2023-11-13 04:07:30', '2023-11-13 04:07:30', 0),
(75, 'Jimmy Stoltenberg I', 'paxton14@example.net', '2023-11-13 04:07:30', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'QrPVeMjmlv', '2023-11-13 04:07:30', '2023-11-13 04:07:30', 0),
(76, 'Charlene Kuhn', 'lisandro45@example.com', '2023-11-13 04:07:30', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'gVprMOGqmM', '2023-11-13 04:07:30', '2023-11-13 04:07:30', 0),
(77, 'Colt Hickle', 'osinski.mack@example.com', '2023-11-13 04:07:30', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '6WVNowtVVx', '2023-11-13 04:07:30', '2023-11-13 04:07:30', 0),
(78, 'Jackeline Witting', 'fahey.dion@example.net', '2023-11-13 04:07:30', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'wVLmZ1hANi', '2023-11-13 04:07:30', '2023-11-13 04:07:30', 0),
(79, 'Paxton Quitzon', 'isaias88@example.com', '2023-11-13 04:07:30', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '7dimrNLMQb', '2023-11-13 04:07:30', '2023-11-13 04:07:30', 0),
(80, 'Boris Kuhn', 'rbins@example.net', '2023-11-13 04:07:30', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'pRvOXQUBZA', '2023-11-13 04:07:30', '2023-11-13 04:07:30', 0),
(81, 'Oren Schumm', 'tebert@example.com', '2023-11-13 04:07:30', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'U3ujPoaOno', '2023-11-13 04:07:30', '2023-11-13 04:07:30', 0),
(82, 'Ivah Gleichner III', 'shields.carlotta@example.org', '2023-11-13 04:07:30', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'QMCxY2Wjv2', '2023-11-13 04:07:30', '2023-11-13 04:07:30', 0),
(83, 'Larue Kutch', 'destiney.deckow@example.com', '2023-11-13 04:07:30', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '75svaRaTjp', '2023-11-13 04:07:30', '2023-11-13 04:07:30', 0),
(84, 'Fae Buckridge', 'kihn.judah@example.com', '2023-11-13 04:07:30', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'CVIaPjLoNJ', '2023-11-13 04:07:30', '2023-11-13 04:07:30', 0),
(85, 'Prof. Brandi Ratke', 'kaylee31@example.com', '2023-11-13 04:07:30', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'yuB6DzJhZ1', '2023-11-13 04:07:30', '2023-11-13 04:07:30', 0),
(86, 'Elsa Walsh', 'mohammad37@example.com', '2023-11-13 04:07:30', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'bkBG5wNOjK', '2023-11-13 04:07:30', '2023-11-13 04:07:30', 0),
(87, 'Dr. Kristian Nolan PhD', 'golden41@example.org', '2023-11-13 04:07:30', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'IOmSsRwo37', '2023-11-13 04:07:30', '2023-11-13 04:07:30', 0),
(88, 'Hellen Morissette', 'cole.dulce@example.org', '2023-11-13 04:07:30', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'lEa2mM1Phu', '2023-11-13 04:07:30', '2023-11-13 04:07:30', 0),
(89, 'Fanny Grady', 'kaleb.krajcik@example.com', '2023-11-13 04:07:30', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'a8XxGnoDdy', '2023-11-13 04:07:30', '2023-11-13 04:07:30', 0),
(90, 'Nels Sanford II', 'bernita83@example.net', '2023-11-13 04:07:30', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'MKGXaSvzXn', '2023-11-13 04:07:30', '2023-11-13 04:07:30', 0),
(91, 'Tyree Stehr', 'fay.abigayle@example.org', '2023-11-13 04:07:30', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'CqZI4Xy6g1', '2023-11-13 04:07:30', '2023-11-13 04:07:30', 0),
(92, 'Ricky Casper IV', 'klein.ellen@example.net', '2023-11-13 04:07:30', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'XB7t7DqBAI', '2023-11-13 04:07:30', '2023-11-13 04:07:30', 0),
(93, 'Malika Denesik DDS', 'tabitha.haag@example.com', '2023-11-13 04:07:30', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'V3SVbKh5pQ', '2023-11-13 04:07:30', '2023-11-13 04:07:30', 0),
(94, 'Kaylee Morissette', 'spinka.piper@example.org', '2023-11-13 04:07:30', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'LudpLFfQbJ', '2023-11-13 04:07:30', '2023-11-13 04:07:30', 0),
(95, 'Jaunita Sanford', 'ssatterfield@example.com', '2023-11-13 04:07:30', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'qcfKsFR62S', '2023-11-13 04:07:30', '2023-11-13 04:07:30', 0),
(96, 'Dr. Jared Nienow', 'mathias.beier@example.org', '2023-11-13 04:07:30', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'T6OobpwniI', '2023-11-13 04:07:30', '2023-11-13 04:07:30', 0),
(97, 'Creola Reynolds', 'thiel.claud@example.com', '2023-11-13 04:07:30', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Mst81sFvQR', '2023-11-13 04:07:30', '2023-11-13 04:07:30', 0),
(98, 'Ms. Prudence Predovic', 'iritchie@example.net', '2023-11-13 04:07:30', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Xfam13R2Ti', '2023-11-13 04:07:30', '2023-11-13 04:07:30', 0),
(99, 'Dr. Layne Bradtke Sr.', 'bud.tillman@example.net', '2023-11-13 04:07:30', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '2fiL572wMj', '2023-11-13 04:07:30', '2023-11-13 04:07:30', 0),
(100, 'Mr. Leopoldo Hammes Sr.', 'grimes.alf@example.org', '2023-11-13 04:07:30', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'N1RqrdBezE', '2023-11-13 04:07:30', '2023-11-13 04:07:30', 0),
(101, 'Shandy', 'example@mail.com', NULL, '$2y$10$fSfOogKeQ4SWGbuTwPqcduWMwVVpIl6wIlLvyHhFhsaliHGfUpqPG', 'hpF21JU92rHLCgvORdGbii5jqgBDYziGd8TCQe9Rm5QikBqAnWlqYu8V8zYQ', '2023-11-13 04:07:30', '2023-11-13 04:07:30', 1),
(102, 'Loki', 'loki@mail.com', NULL, '$2y$10$hi3cuA/iS0hk3mxsiMALOusopHeozdX7WCRtIjhK9p8KyTSFvfGGy', NULL, '2023-12-04 03:25:57', '2023-12-04 03:25:57', 0),
(103, 'Kilo', 'Kilo@mail.com', NULL, '$2y$10$.YrAHtpJl0KQAZ.o9Peed.d4zbp08lJjWW22u.gQhDeHSy/aSe7ju', NULL, '2024-01-08 03:24:35', '2024-01-08 03:24:35', 0),
(104, 'Tamu 1', 'example1@mail.com', NULL, '$2y$10$RAXLKoj/WC9p2MuDaIU5P.A6i2de6MsnBQ0JhUc6OlSPba1ymJEHG', NULL, '2024-01-26 03:31:29', '2024-01-26 03:31:29', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `covers`
--
ALTER TABLE `covers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `covers`
--
ALTER TABLE `covers`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `genres`
--
ALTER TABLE `genres`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=319;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
