-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2024 at 11:01 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `expense-tracker`
--

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
(3, '2016_06_01_000001_create_oauth_auth_codes_table', 1),
(4, '2016_06_01_000002_create_oauth_access_tokens_table', 1),
(5, '2016_06_01_000003_create_oauth_refresh_tokens_table', 1),
(6, '2016_06_01_000004_create_oauth_clients_table', 1),
(7, '2016_06_01_000005_create_oauth_personal_access_clients_table', 1),
(8, '2019_08_19_000000_create_failed_jobs_table', 1),
(9, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(10, '2024_02_28_042501_create_products_table', 2),
(12, '2024_03_07_112124_create_user_info_table', 3),
(14, '2024_03_27_093617_create_posts_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `scopes` text DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_access_tokens`
--

INSERT INTO `oauth_access_tokens` (`id`, `user_id`, `client_id`, `name`, `scopes`, `revoked`, `created_at`, `updated_at`, `expires_at`) VALUES
('098cd434ff4a4365e3dad6a7f235c679a79cb49691eff30e4209363720f333f5305881ca1f4042cb', 10, 1, 'token', '[]', 0, '2024-05-12 23:22:52', '2024-05-12 23:22:52', '2025-05-13 04:52:52'),
('0d04980ff5d067ee95cfa7e941e59bc0d6cea066d404ed06b44193fe3369c7bf33c6a8798f7bdfa6', 9, 1, 'token', '[]', 0, '2024-03-06 23:23:37', '2024-03-06 23:23:37', '2025-03-07 04:53:37'),
('1229bf1e6e111cf37de5969fb937afdc94d3f71421719fa2f30844d7123b4fc56a53997214d91205', 23, 1, 'token', '[]', 0, '2024-05-10 05:53:02', '2024-05-10 05:53:03', '2025-05-10 11:23:02'),
('14c0a5f37ad6f2021095056acc515edbc5579cc44be4e74af0cc1726160974f4b0d80345849b7b43', 5, 1, 'token', '[]', 0, '2024-03-05 05:29:12', '2024-03-05 05:29:13', '2025-03-05 10:59:12'),
('14d57bccd3390820f93fa2e543873e697e6c3a329d3e963859931dfcdbf019b58e24aedbda7b0581', 10, 1, 'token', '[]', 0, '2024-03-14 22:49:40', '2024-03-14 22:49:40', '2025-03-15 04:19:40'),
('16ad11a022da9a8bfe1f3296dedbeed9648c2b4fabcaff76772a3ecadf735056966bf6f468707e8b', 10, 1, 'token', '[]', 0, '2024-03-27 23:41:10', '2024-03-27 23:41:10', '2025-03-28 05:11:10'),
('1879faeb4ba0c382c334604374f32230ddc6611afc0ca8aa7499185eba1971fdcf111eb8ba520222', 17, 1, 'token', '[]', 0, '2024-04-01 03:50:55', '2024-04-01 03:50:55', '2025-04-01 09:20:55'),
('1dd7abf48457f7a38bc659e252e490e9a054ad520ae474f7e23455567385c5f55d3d85bc62a4ad5c', 10, 1, 'token', '[]', 0, '2024-03-27 23:48:27', '2024-03-27 23:48:27', '2025-03-28 05:18:27'),
('244db8150c8613b1a435d43237babdc52b1ef80c77bc7ee853ca1c050131eefb4af9220722a5e623', 18, 1, 'token', '[]', 0, '2024-04-01 06:12:27', '2024-04-01 06:12:27', '2025-04-01 11:42:27'),
('263d55f8f3773e1b285beff88d1cf8d60756cb8ec13b10a783528e79f619c34991e16539532338f1', 22, 1, 'token', '[]', 0, '2024-04-01 07:27:49', '2024-04-01 07:27:49', '2025-04-01 12:57:49'),
('2d77e4424511fc74f158bcd6dafd1e6a00a94d63e6feab1a1eb9f999fdacd840bbb0b514e62e1d92', 20, 1, 'token', '[]', 0, '2024-04-01 07:12:19', '2024-04-01 07:12:19', '2025-04-01 12:42:19'),
('3026aa696f51b9708fd9d8b8a2792b0de5bfdf3600525d4165a0aa67fb753af7ced437f97bbe2c6c', 24, 1, 'token', '[]', 0, '2024-05-12 23:30:36', '2024-05-12 23:30:36', '2025-05-13 05:00:36'),
('3433ed4db3f3f4a06da6a61172ac6c7f2a08eba68e3112b957d2a79d87d65912c93615488891c473', 14, 1, 'token', '[]', 0, '2024-04-01 02:06:20', '2024-04-01 02:06:20', '2025-04-01 07:36:20'),
('36fc0b02d60d2153c54a930199e677d91dee463a253876b46d15f49ab69359e81e679b782e9b2d8b', 10, 1, 'token', '[]', 0, '2024-04-01 01:59:46', '2024-04-01 01:59:46', '2025-04-01 07:29:46'),
('3d70011f0ca24b96049bff8f09c93ca86b7830e699488dbdeab1933e6a29d1dc6fa036b6bd9cd3ff', 17, 1, 'token', '[]', 0, '2024-04-01 04:48:07', '2024-04-01 04:48:07', '2025-04-01 10:18:07'),
('3e8a59109a7c241af436a70d134571ac55100660c050cab552fb365bc86dd6269a1d3e1fc65df132', 19, 1, 'token', '[]', 0, '2024-05-13 06:28:24', '2024-05-13 06:28:24', '2025-05-13 11:58:24'),
('413c9a1a30bf8084018eed2ce12af0a9fe613bf9ded6fc06e2dd00d3782947f8b2bc79938ad6192a', 10, 1, 'token', '[]', 0, '2024-05-13 00:23:39', '2024-05-13 00:23:39', '2025-05-13 05:53:39'),
('47b0ef212e31a479c88ed5b51ec4c8099387f9a4c5edd88bd719f3029e00f4bfcfead9e02d5d5ef6', 10, 1, 'token', '[]', 0, '2024-03-25 22:46:22', '2024-03-25 22:46:23', '2025-03-26 04:16:22'),
('4dba6f0d75ea1911316c7cb91c0e41da57b79b94b0279cbf600b3de564c74ade84b0f37d8c1bebd5', 7, 1, 'token', '[]', 0, '2024-03-06 05:19:49', '2024-03-06 05:19:49', '2025-03-06 10:49:49'),
('51751347ab97258e1f61cea72318df2919c6f22b53a397549f810fa73835bbcb1cf58fcac894f43e', 23, 1, 'token', '[]', 0, '2024-05-13 06:25:43', '2024-05-13 06:25:43', '2025-05-13 11:55:43'),
('526c22861564d68cbdd6f9ece3b16e406b386b51c2ca0a18a9338a3e6fa2ef5376d93b5241df5b82', 10, 1, 'token', '[]', 0, '2024-05-13 06:27:10', '2024-05-13 06:27:10', '2025-05-13 11:57:10'),
('54445364262bea28fef6da9e140681f03473a828cd13e3eb8cdae217f780277b31608156558e430b', 10, 1, 'token', '[]', 0, '2024-05-13 06:30:27', '2024-05-13 06:30:27', '2025-05-13 12:00:27'),
('55d0a0cfaa31593f1a7d4a63eea039c715d940eb115070749a28bdc28c6eb131988f5e35780afb4b', 23, 1, 'token', '[]', 0, '2024-05-12 23:41:57', '2024-05-12 23:41:57', '2025-05-13 05:11:57'),
('5659f11e44fed42cee8b2f07b126a472392b6e6cd25620b7931974bd80c6b0bda5d2406102b0b4b5', 19, 1, 'token', '[]', 0, '2024-04-01 07:09:12', '2024-04-01 07:09:12', '2025-04-01 12:39:12'),
('5a8359b43979d0e7031af19dd83327db492797b56d5cfa61152f99dd2e3e231c025151f1e4bb2f54', 10, 1, 'token', '[]', 0, '2024-05-09 06:27:03', '2024-05-09 06:27:03', '2025-05-09 11:57:03'),
('5c4173948f5a2171a11011ec8f2f351e7773f85829e7ef4316e22e4e230b0fe510a6d0e5caae4b21', 9, 1, 'token', '[]', 0, '2024-03-06 23:22:28', '2024-03-06 23:22:28', '2025-03-07 04:52:28'),
('5e3a128e6fb6875db927777be08c1512fb6bef1390836777f7f27537b7a0a41708cc658dd0bcdfac', 17, 1, 'token', '[]', 0, '2024-04-01 04:47:15', '2024-04-01 04:47:15', '2025-04-01 10:17:15'),
('5ef4368dffde3ee4c2b13f778f38d38385ad32e294ba12dfeac35b9389832d2834f42ccc81b13332', 21, 1, 'token', '[]', 0, '2024-04-01 07:26:46', '2024-04-01 07:26:46', '2025-04-01 12:56:46'),
('60d3312b8912bf042b7ceb95ce8ffafe4a9cf50ccf3863fd20058cb0380aa62ed649dc89d2a83bb6', 10, 1, 'token', '[]', 0, '2024-03-27 23:02:17', '2024-03-27 23:02:18', '2025-03-28 04:32:17'),
('652ce3c8a1f0809b7490065f5558552290f201a3d816982dde11974ce4eb7cd8da3dfdabbe264163', 10, 1, 'token', '[]', 0, '2024-03-28 01:33:13', '2024-03-28 01:33:14', '2025-03-28 07:03:13'),
('68cbe6e40666eb42966271879dd246e49a26ba17ab12aefd2d8d0f97e16bcfb05d444706d3252851', 1, 1, 'token', '[]', 0, '2024-02-28 03:44:29', '2024-02-28 03:44:30', '2025-02-28 09:14:29'),
('7114ce0171cee0c4cbe23f06990da4e9d1d51c21fa60013c662e74520ad53385b9dbf728c186b1ed', 5, 1, 'token', '[]', 0, '2024-02-28 22:32:44', '2024-02-28 22:32:45', '2025-03-01 04:02:44'),
('724df16df4f1a8232326d811293909da0ccd452c0a87c41cf2401a49ac87eff23451fb368f4ed145', 20, 1, 'token', '[]', 0, '2024-04-01 07:13:05', '2024-04-01 07:13:05', '2025-04-01 12:43:05'),
('805d79f56e0e4ab800c8ae1869bb2f62018964646dca328e69bda426142d374f01de74e9b6a67131', 13, 1, 'token', '[]', 0, '2024-04-01 02:05:47', '2024-04-01 02:05:47', '2025-04-01 07:35:47'),
('81233d1336478ad1f34b97a57b57ba0e516d03ad0a7654331a9ca5e17e3e041a033ef70b2c941bc0', 10, 1, 'token', '[]', 0, '2024-05-13 22:41:22', '2024-05-13 22:41:23', '2025-05-14 04:11:22'),
('888b64fe86aaf0934de7bc22985a68358aaaf51565e244a83cf1ca50ca7574ce69370be069ad5b3b', 9, 1, 'token', '[]', 0, '2024-03-06 23:25:24', '2024-03-06 23:25:24', '2025-03-07 04:55:24'),
('98722b95cee3b427d3c4098875d8ca1a082f23cd0e77efae67f19596fda9bcf8faa86b6e4ba1eca3', 19, 1, 'token', '[]', 0, '2024-05-09 06:28:34', '2024-05-09 06:28:34', '2025-05-09 11:58:34'),
('9acea3ea616c9e529ea1746b94178af14d87cf84738f9fa2b515095eb4859f5cd07abd3e6fbfb357', 10, 1, 'token', '[]', 0, '2024-05-09 06:23:19', '2024-05-09 06:23:20', '2025-05-09 11:53:19'),
('9c7042ae1ddf6510342f5097fa49dc0cda134cf9f3afbbe8c51a1428da504e17e524b5297e0f7f96', 16, 1, 'token', '[]', 0, '2024-04-01 02:09:08', '2024-04-01 02:09:08', '2025-04-01 07:39:08'),
('9e5dbec7895c6263928641b70d70115ce9fc17fd92901a52000c61fb109c063ba4639258f2bdef6c', 9, 1, 'token', '[]', 0, '2024-03-06 23:22:10', '2024-03-06 23:22:10', '2025-03-07 04:52:10'),
('a8abf0cd09a61679e20c7036771ed4d79a3d2f1542e6d64f1de8cddab22446a16152379d05c8f6f7', 9, 1, 'token', '[]', 0, '2024-03-06 23:26:55', '2024-03-06 23:26:55', '2025-03-07 04:56:55'),
('aa8d9779dc8db08da1354b49c2b3864d357251d943d4ecc0deeb9623d96670567c0ef8a98a8a6bb5', 10, 1, 'token', '[]', 0, '2024-03-17 22:51:25', '2024-03-17 22:51:26', '2025-03-18 04:21:25'),
('ac580f936562087136d8a48e147a4e221a416b499692765a9c32fc418a6f18965b1ae199f9a94307', 10, 1, 'token', '[]', 0, '2024-03-27 07:10:51', '2024-03-27 07:10:51', '2025-03-27 12:40:51'),
('aed295db09fac660990cd9a6cd3f510481763cbae435f4456186e018bff99dc8fc702d52cae8d30d', 10, 1, 'token', '[]', 0, '2024-03-27 01:08:49', '2024-03-27 01:08:49', '2025-03-27 06:38:49'),
('b21d09e520f78d8a612a56a7439198be116561fbc47c392c8acca06ca6f6950ba703ce3b84fcdb80', 18, 1, 'token', '[]', 0, '2024-04-01 07:11:03', '2024-04-01 07:11:03', '2025-04-01 12:41:03'),
('be18a63133118075856ee7da131035172b80aae9fa1d5883ec1ae266f55812f51769ee9088240c5a', 15, 1, 'token', '[]', 0, '2024-04-01 02:08:13', '2024-04-01 02:08:13', '2025-04-01 07:38:13'),
('beea5f0a2c63e7d578409ad605a384e162cb22d26a75eae5831a684a816d8f7d1445baa0aea58782', 9, 1, 'token', '[]', 0, '2024-03-06 23:47:43', '2024-03-06 23:47:43', '2025-03-07 05:17:43'),
('bf0cb6394a0474dd93d329e0649826828a33afe0dda9b0adc590fecca34bb81b5c57cbbf19f364d7', 17, 1, 'token', '[]', 0, '2024-04-01 03:49:31', '2024-04-01 03:49:31', '2025-04-01 09:19:31'),
('bf23a4fbe1d7e544487c99d19715892782af05bc454f289b5f3dce841bc63f4638ac4e13c527a5a8', 19, 1, 'token', '[]', 0, '2024-04-01 07:05:23', '2024-04-01 07:05:23', '2025-04-01 12:35:23'),
('c5a2c2fd22e55f1d738d1b889775c6e4215b75fb13453f2c323682302f3bf36c9142fc6e2f50829e', 19, 1, 'token', '[]', 0, '2024-04-01 07:04:40', '2024-04-01 07:04:40', '2025-04-01 12:34:40'),
('cd58d5a6a63e684f16524734cb7cdbd098268064058dcd4b620975e7247b4844df260fcb8b85b57e', 10, 1, 'token', '[]', 0, '2024-03-31 22:59:39', '2024-03-31 22:59:39', '2025-04-01 04:29:39'),
('cf54648da038ec5974659cedee445a02641a36734279723b201b028faade879760a1e0473dbc2212', 10, 1, 'token', '[]', 0, '2024-03-15 04:29:42', '2024-03-15 04:29:42', '2025-03-15 09:59:42'),
('d132bfd942e519c8d07ea60c593fc411a14f5b92b346fa9abe6c8db0ec908688efd11fd4f29fac3c', 18, 1, 'token', '[]', 0, '2024-04-01 06:13:40', '2024-04-01 06:13:40', '2025-04-01 11:43:40'),
('d53449a3976343b8b079f62bae371419751eaee66bd7ff458def12e5c4896d4f74d971dcfc0cc0a4', 10, 1, 'token', '[]', 0, '2024-03-15 04:03:46', '2024-03-15 04:03:47', '2025-03-15 09:33:46'),
('d6b0f2e75d893645edaac47b77195aae119afec506703824d5c935d1c40247536cbefbf2ef3a19ef', 23, 1, 'token', '[]', 0, '2024-05-09 06:44:05', '2024-05-09 06:44:05', '2025-05-09 12:14:05'),
('d84d090959d0268cbc8b79e06c0988a434f9b31dd6a587cb990e79af2b90333b88ca04b9f0a5d58a', 24, 1, 'token', '[]', 0, '2024-05-12 23:35:46', '2024-05-12 23:35:46', '2025-05-13 05:05:46'),
('d906031511ae0c1af510409af0426970c68d29547a031b00857686c44e0cbd578b8c4f7f092b0ef9', 3, 1, 'token', '[]', 0, '2024-02-28 03:45:50', '2024-02-28 03:45:50', '2025-02-28 09:15:50'),
('d9b51ff7e77a9e71c4998ad6693fcad76d304a61cb28ac17a6465ee0efa85fab893252e8a5a7acd7', 12, 1, 'token', '[]', 0, '2024-04-01 02:03:38', '2024-04-01 02:03:38', '2025-04-01 07:33:38'),
('daf926a4027e65e55eadb0f4d9f88fbfbcf3c34331000b90340e481fc3ef54302bd76aabf5177bb3', 9, 1, 'token', '[]', 0, '2024-03-06 23:57:31', '2024-03-06 23:57:31', '2025-03-07 05:27:31'),
('dc310f75d693d6d872a4b9bef30fc9f2ba293f5e04b5875ca9aab4e7bda6c4f6e53eebd22f51f69c', 23, 1, 'token', '[]', 0, '2024-05-09 06:42:09', '2024-05-09 06:42:09', '2025-05-09 12:12:09'),
('e0d91d40883cf13ee02947a0277956a6651b444c5693d8bd8dff2f9fc0ded457721652b601fbcc12', 10, 1, 'token', '[]', 0, '2024-03-26 04:29:09', '2024-03-26 04:29:09', '2025-03-26 09:59:09'),
('e0ec33ed33d8939bed138047eac0ef871b98b8059e527ccc40daaf1a169f81a03a35777428dcb805', 10, 1, 'token', '[]', 0, '2024-05-12 23:22:00', '2024-05-12 23:22:01', '2025-05-13 04:52:00'),
('e45d32ca4befc07a2b8ff6beb3e5bfe57b49ef19e5f0d5ca52b1887f5cbb084906ded0ff99d8d4af', 21, 1, 'token', '[]', 0, '2024-04-01 07:26:11', '2024-04-01 07:26:11', '2025-04-01 12:56:11'),
('e4773a67117b0b69aaf187633c560e846b0653e12e83f2c3dfc1ca708002abc66e456980aca926c5', 11, 1, 'token', '[]', 0, '2024-04-01 02:01:15', '2024-04-01 02:01:15', '2025-04-01 07:31:15'),
('e52544f3519544456cb3a74cfa2c1da3a7aba7bbcc52d4c56bc4d1d6ffc00f0a20e8cb5fc592a98f', 23, 1, 'token', '[]', 0, '2024-05-12 23:44:47', '2024-05-12 23:44:47', '2025-05-13 05:14:47'),
('e57fe66e88c7304fcd84a76c64ea81d2640c7c4e582d1780be2b7b6707619256403d8027abe60a83', 10, 1, 'token', '[]', 0, '2024-03-31 22:26:35', '2024-03-31 22:26:36', '2025-04-01 03:56:35'),
('e6fb9b10c150a157fd604e92e1d95071c75e349c53d36a6cf3870ea73fb06ea3a9f8e0546bfd8cb5', 5, 1, 'token', '[]', 0, '2024-02-28 03:51:27', '2024-02-28 03:51:27', '2025-02-28 09:21:27'),
('f1841f3997949aa79f41a9dca01d664be00e866b44d0d30692816bdf624b8d04dc6424cd4a1bb936', 17, 1, 'token', '[]', 0, '2024-04-01 05:00:49', '2024-04-01 05:00:49', '2025-04-01 10:30:49'),
('f20362059a19216085c1faa68123171461117f06880c73dbf81deaec98e4a96b1671380b2b490dab', 20, 1, 'token', '[]', 0, '2024-04-01 07:11:42', '2024-04-01 07:11:42', '2025-04-01 12:41:42'),
('f242cff2276ab9175f47ec838a281eae59f16a56f4a2640c96c0e212115c0985831585b023640fa5', 9, 1, 'token', '[]', 0, '2024-03-06 23:24:52', '2024-03-06 23:24:52', '2025-03-07 04:54:52'),
('f25ab108922b0a364d0a60be00fd168f886b67b09e10e545e62285f409e348de8ce5fbe9c9767e5c', 9, 1, 'token', '[]', 0, '2024-03-06 23:58:01', '2024-03-06 23:58:01', '2025-03-07 05:28:01'),
('f335c66729ba1d999f0a7b5f8f97e9721f43db26e41d2edf6c4a93c1c3bdbfcdf35d74a5164f6f1b', 10, 1, 'token', '[]', 0, '2024-03-14 22:54:24', '2024-03-14 22:54:24', '2025-03-15 04:24:24'),
('f6f4fe7caacdd3245b66788811ba6e0d762ca1188b860db5292ea446145e64ef4ddba9a64b09b128', 6, 1, 'token', '[]', 0, '2024-03-05 05:32:53', '2024-03-05 05:32:53', '2025-03-05 11:02:53'),
('f9d2c37ac20eca69545d842af515a951c2b6627eaee89a4714f09abdb7d95443cb91a7526010e129', 7, 1, 'token', '[]', 0, '2024-03-06 05:18:49', '2024-03-06 05:18:49', '2025-03-06 10:48:49'),
('fcd10d1fde642c0cd1591ce0f1eec72abfd032e18e2b6d28b267628fee37f57aedbc16e067129ed9', 5, 1, 'token', '[]', 0, '2024-02-28 03:47:56', '2024-02-28 03:47:56', '2025-02-28 09:17:56'),
('fdf73c62458e3f4292a5265bb65f09e3795f0c27912063a8cb36a85312ea98ba3d4c68ce8bc01526', 9, 1, 'token', '[]', 0, '2024-03-07 00:02:47', '2024-03-07 00:02:47', '2025-03-07 05:32:47');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `scopes` text DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `secret` varchar(100) DEFAULT NULL,
  `provider` varchar(255) DEFAULT NULL,
  `redirect` text NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_clients`
--

INSERT INTO `oauth_clients` (`id`, `user_id`, `name`, `secret`, `provider`, `redirect`, `personal_access_client`, `password_client`, `revoked`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Laravel Personal Access Client', 'Sc5rpHNjbJaqJNNzEPytBN8aNKW5MkJQurgVqfrN', NULL, 'http://localhost', 1, 0, 0, '2024-02-27 22:45:05', '2024-02-27 22:45:05'),
(2, NULL, 'Laravel Password Grant Client', 'S5yZUdZTJ6t8wR8JU7sDKZjSpizU6pgq6ywf3O7T', 'users', 'http://localhost', 0, 1, 0, '2024-02-27 22:45:05', '2024-02-27 22:45:05');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_personal_access_clients`
--

INSERT INTO `oauth_personal_access_clients` (`id`, `client_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2024-02-27 22:45:05', '2024-02-27 22:45:05');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) NOT NULL,
  `access_token_id` varchar(100) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `caption` varchar(255) NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `caption`, `photo`, `created_at`, `updated_at`, `user_id`, `active`) VALUES
(1, 'Yhi hai mera post', 'https://d1rezxi0gcra7v.cloudfront.net/zerokaata-studio/wp-content/uploads/2020/06/27-most-beautiful-women-in-the-world-updated-list-featured-image.jpg', '2024-03-26 11:12:46', '2024-05-13 04:41:58', 10, 0),
(10, 'jhbkjk', 'https://res.cloudinary.com/dpq6l07jh/image/upload/v1711625100/vjdfbepxyurt5xdf7jct.png', '2024-03-28 05:55:00', '2024-05-13 04:49:56', 10, 0),
(16, 'post by admin@gmaill.com', NULL, '2024-05-13 06:25:15', '2024-05-13 06:25:15', 10, 1),
(17, 'hello tarbooz khaoge?', 'https://res.cloudinary.com/dpq6l07jh/image/upload/v1715601398/zy1jpp5sha0aruteq00d.jpg', '2024-05-13 06:26:39', '2024-05-13 06:26:39', 23, 1),
(18, 'mai hoo ek udta robo doraemon', 'https://res.cloudinary.com/dpq6l07jh/image/upload/v1715601609/a4n6zmuh5aj9dtsiuxh8.jpg', '2024-05-13 06:30:10', '2024-05-13 06:30:10', 19, 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `detail` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `detail`, `created_at`, `updated_at`) VALUES
(1, 'Laptop', 'Dell', '2024-02-28 04:18:19', '2024-02-28 04:18:19');

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
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_verified` tinyint(1) NOT NULL DEFAULT 0,
  `role` varchar(5) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `is_verified`, `role`) VALUES
(10, 'admin', 'admin@gmail.com', NULL, '$2y$12$1JPO4UuimEgaFfqson0UjOijXFvqXCnI6VWut8Pyt2nV3a641rnw2', NULL, '2024-03-14 22:49:39', '2024-03-14 22:49:39', 1, 'admin'),
(11, 'Tripti', 'tripti123@gmail.com', NULL, '$2y$12$4pZHlJtLcu72FPQvRNYSpubaYgHSiTTNdNrX/kUFxqwWK0OPqVdKy', NULL, '2024-04-01 02:01:15', '2024-04-01 02:01:15', 0, 'user'),
(12, 'Tripti', 'tripti1243@gmail.com', NULL, '$2y$12$v.AiIXox6aFmI2R3K7Wq0eC0Jin2uzcq5jXkbRz8n6xDWG4.jXn..', NULL, '2024-04-01 02:03:36', '2024-04-01 02:03:36', 0, 'user'),
(13, 'Tripti', 'tripti12431232@gmail.com', NULL, '$2y$12$X6hf8CYZ..GWftXMI.6jdOtgZdQmSoWT.YAq6mJ7fbZgw3YjdCqAe', NULL, '2024-04-01 02:05:47', '2024-04-01 02:05:47', 0, 'user'),
(14, 'Tripti', 'tripti124312312@gmail.com', NULL, '$2y$12$SCPO4y/iOm6Cki7GGjIfM..ZZxox7VwtrQ6Gb4deYe1VT1Qf.I7f.', NULL, '2024-04-01 02:06:20', '2024-04-01 02:06:20', 0, 'user'),
(15, 'Tripti', 'tripti1243123112@gmail.com', NULL, '$2y$12$/FEIQsz61NB7ebdP4.8P1.qduRG7CLkkYv.dD3gnjKwNUQ7mUP6am', NULL, '2024-04-01 02:08:13', '2024-04-01 02:08:13', 0, 'user'),
(16, 'Tripti', 'tripti12431231112@gmail.com', NULL, '$2y$12$LIiZd5SKfgC30sy7stRNOu5Be6vLmTMrVmyVD1wVMwnNdNLRUZE2u', 'CwW8HvZc9qsJ5sqe9hDJkbWEgIoaGt16wRvF3PPS', '2024-04-01 02:09:08', '2024-04-01 02:09:14', 0, 'user'),
(17, 'rohan', 'rohan1@gmail.com', '2024-04-01 04:33:15', '$2y$12$CI4VRb9Z1vRQ.4EB0fyw4OFXJPcZ26Mdwk3ru.KSxiyvX7MOsIss.', '', '2024-04-01 03:49:30', '2024-04-01 04:33:15', 1, 'user'),
(18, 'Tripti', 'triptisingla@gmail.com', '2024-04-01 06:13:06', '$2y$12$pMzBSf1VgeB31ENCB64GvOiXdyZ8EfGmC2.04xs/IBCRxK2IF4N9m', '', '2024-04-01 06:12:27', '2024-04-01 06:13:06', 1, 'user'),
(19, 'vansh', 'vansh@gmail.com', '2024-04-01 07:05:00', '$2y$12$Zvo/xeH.CDNH1AS0DpJTUuGW/jDcOFha654HqFzIs6pkTGiOi1xfi', '', '2024-04-01 07:04:40', '2024-04-01 07:05:00', 1, 'user'),
(20, 'ad', 'admin99@gmail.com', '2024-04-01 07:12:02', '$2y$12$F.K2vca7MnnsW8RJ7oHjwe1wHwC5Z6dHD9RP/1qR4OL6MbAC4Y7tm', '', '2024-04-01 07:11:41', '2024-04-01 07:12:02', 1, 'user'),
(21, 'adminx', 'adminx@gmail.com', '2024-04-01 07:26:26', '$2y$12$w.aLGgbVkPYjmGJ3.EePbexgsbGK4nBc.LPkMkX0gDVsW.s1nu7K2', '', '2024-04-01 07:26:11', '2024-04-01 07:26:26', 1, 'user'),
(22, 'vansg12', 'vb@gmail.com', NULL, '$2y$12$PpMyaVoGXO1KnNTEvCXwE.Gt.oPiX6It2VLp1bfBLC6wZuiUspyPW', 'IeM5PpBaGONl8LBEhxeDJWZ6PqujIovx81FBRpEG', '2024-04-01 07:27:49', '2024-04-01 07:27:55', 0, 'user'),
(23, 'shruti', 'shruti@gmail.com', '2024-05-09 06:42:34', '$2y$12$IbpiZRKZ.SRTej2YkkJsoO4qiNe3YMAuIVhORcUTqztxujyyAYl0e', '', '2024-05-09 06:42:09', '2024-05-09 06:42:34', 1, 'user'),
(24, 'gomsi', 'gomsi@gmail.com', '2024-05-12 23:31:25', '$2y$12$vVsxrC4mxvX9654QP3CfCuZEYlX7U6C6RWG3TvCXFXYWvVS7VfLA.', '', '2024-05-12 23:30:36', '2024-05-12 23:31:25', 1, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `user_infos`
--

CREATE TABLE `user_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstName` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastName` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `about` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `photo` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `user_infos`
--

INSERT INTO `user_infos` (`id`, `firstName`, `lastName`, `about`, `email`, `location`, `country`, `created_at`, `updated_at`, `photo`) VALUES
(1, 'Adminnnnn1', 'admin', 'Hi i am the admin123', 'admin@gmail.com', 'Delhise', 'Indiase', NULL, '2024-03-28 01:35:37', 'https://res.cloudinary.com/dpq6l07jh/image/upload/v1711609536/gsihok0rcgmkuo94dkfi.jpg'),
(2, 'rohan', 'bhatia', 'hi there', 'rohan1@gmail.com', 'washington', 'USA', '2024-04-01 06:04:56', '2024-04-01 06:04:56', 'C:\\xampp8.2\\tmp\\php51BC.tmp'),
(3, 'Tripti', 'Singla', 'Hi , I am new here', 'triptisingla@gmail.com', 'delhi', 'India', '2024-04-01 06:15:19', '2024-04-01 06:15:19', 'https://res.cloudinary.com/dpq6l07jh/image/upload/v1711971916/nf1newqx2ibrwffrleqs.jpg'),
(4, 'adf', 'adf', 'adf', 'admin99@gmail.com', 'adf', 'adf', '2024-04-01 07:12:35', '2024-04-01 07:12:35', 'https://res.cloudinary.com/dpq6l07jh/image/upload/v1711975353/lb3lrhbli1udbvggg2k5.png'),
(5, 'Vansh', 'Bansa;', 'adkf', 'vansh@gmail.com', 'asdoi', 'adiof', '2024-05-09 06:29:22', '2024-05-09 06:29:22', 'https://res.cloudinary.com/dpq6l07jh/image/upload/v1715255961/jwvnl8vanmkfb9oprjh4.jpg'),
(6, 'shruit', 'daklfjdfd', 'dsf', 'shruti@gmail.com', 'adf', 'adf', '2024-05-09 06:45:31', '2024-05-09 06:45:31', 'https://res.cloudinary.com/dpq6l07jh/image/upload/v1715256930/ndy2t6kt2jnhzitfc6wl.jpg'),
(7, 'gomsi', 'mittal', 'alkdf', 'gomsi@gmail.com', 'adf', 'ad', '2024-05-12 23:39:14', '2024-05-12 23:39:14', 'https://res.cloudinary.com/dpq6l07jh/image/upload/v1715576953/ezlyizh8szoaptb8hfgy.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_auth_codes_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

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
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_infos`
--
ALTER TABLE `user_infos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `user_infos`
--
ALTER TABLE `user_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
