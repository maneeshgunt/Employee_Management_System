-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 03, 2022 at 09:56 AM
-- Server version: 5.7.39
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scriptika_HRMS_2022`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'abc@gmail.com', '$2a$06$RRE3greEGeFyyi0c1EfRBuMVNkN8l5i4MWJwxvqrXp7PmzNx.NAqm', '2022-07-25 07:27:24', '2022-07-25 07:27:24'),
(2, 'a@gmail.com', '$2a$07$1PU64sMHFz1/8u/QiVkLvOOQao6NbLaQ.jroUlplP5qxZ5cad0aDq', '2022-07-25 07:28:16', '2022-07-25 07:28:16');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `education` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `maritial_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birth_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blood_group` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `joining_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `employee_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `relieving_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emergency_contact_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aadhar_card` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aadharcard_file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pan_card` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pan_card_file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_passbook_cheque` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_passbook_cheque_file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mark_list` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mark_list_file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `full_name`, `education`, `address`, `designation`, `email`, `password`, `maritial_status`, `mobile_no`, `birth_date`, `blood_group`, `joining_date`, `employee_id`, `relieving_date`, `emergency_contact_no`, `gender`, `aadhar_card`, `aadharcard_file`, `pan_card`, `pan_card_file`, `bank_passbook_cheque`, `bank_passbook_cheque_file`, `mark_list`, `mark_list_file`, `created_at`, `updated_at`) VALUES
(9, 'Jiyan', 'bcom', 'TulshiBagh pune 411060', 'Accountant', 'jiyan@gmail.com', '$2a$07$wt2o811IH0Qh0ddWiCJy4OSitGT4tyJv0nqx/nACCAOPGDSYiyYvC', 'single', '0987654321', '2020-08-09', 'A+', '2021-03-04', '123', '2023-06-08', '1454323432', 'male', '123432123', '', '2321312', '', '232132132', '', '23213xdewdddddddddddddddd', '0', NULL, '2022-08-23 05:37:45'),
(35, 'Test User', 'Msc Computer Science', 'Pune', 'Software Tester', 'test@gmail.com', '$2y$10$8Nswe6ApOmFmjCHG22rs5OVEI0vO0Do7NMdvng9zZURyfxh.Q6xUK', 'Single', '9999999999', '2016-07-16', NULL, '2022-08-25', '100', NULL, NULL, 'female', 'Top-6-Software-Development-Methodologies.jpg', '45218084.jpg', 'small-people-around-a-smartphone-make-a-ui-ux-vector-19889011.jpg', '68056003.jpg', 'digital-marketing-team-with-laptops-light-bulb-marketing-team-metrics-marketing-team-lead-responsibilities-concept-white-background_335657-2022.webp', '919265.webp', 'Top-6-Software-Development-Methodologies.jpg', '11938369.jpg', '2022-08-19 01:49:56', '2022-08-19 01:49:56'),
(36, 'Shweta V Doke', 'Msc Computer Science', 'Kharadi', 'Mobile App', 'shweta@gmail.com', '$2y$10$NBWTVqcaJCZQ7Efi9DTLHuLh.by2GhczPXAlX1qjD8DL/ndBO4rha', 'Single', '9999999999', '2022-08-23', 'o', '2022-08-27', '1', NULL, NULL, 'female', 'logo-1.png', '52606507.png', 'learn 2.jpg', '6534963.jpg', 'Top-6-Software-Development-Methodologies.jpg', '12510038.jpg', 'splash__1_-removebg-preview.png', '87892734.png', '2022-08-25 04:24:01', '2022-08-25 04:24:01');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `manage_leaves`
--

CREATE TABLE `manage_leaves` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `end_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `leave_reason` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `leave_days` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `leave_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comments` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attachment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `attachment_file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `manage_leaves`
--

INSERT INTO `manage_leaves` (`id`, `date`, `end_date`, `name`, `leave_reason`, `leave_days`, `leave_status`, `comments`, `attachment`, `attachment_file`, `created_at`, `updated_at`) VALUES
(19, '2022-08-03', '2022-08-05', 'Jiyan', 'exam', '10', 'Decline', 'no leave approve', 'web.php', '95677920.php', '2022-08-16 00:00:55', '2022-08-19 06:14:26'),
(22, '2022-08-11', '2022-08-20', 'Jiyan', 'illness', '2', 'Accept', 'No comments', 'web.php', '11398082.php', '2022-08-16 03:48:11', '2022-08-16 03:49:10'),
(23, '2022-08-18', '2022-08-20', 'Jiyan', 'illness', '12', 'Accept', 'No comments', 'index (1).php', '35331922.php', '2022-08-17 04:50:08', '2022-08-17 04:54:39'),
(24, '2022-09-02', '2022-09-04', 'Jiyan', 'personal work', '2', 'Accept', 'enjoy', '1661755506 (2).xlsx', '72414547.xlsx', '2022-09-02 09:02:05', '2022-09-02 09:03:20');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_07_25_120448_create_admins_table', 1),
(6, '2022_07_26_121725_create_timesheets_table', 2),
(7, '2022_07_27_113015_create_projects_table', 3),
(8, '2022_07_28_110945_create_tasks_table', 4),
(9, '2022_07_29_072016_create_employees_table', 5),
(10, '2022_08_01_042058_create_manage_leaves_table', 6),
(11, '2022_08_01_044401_create_manageleaves_table', 7),
(12, '2022_08_01_050057_create_manageleaves_table', 8);

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `end_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `totalhrs` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `team` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `requirement` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `requirement_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `name`, `start_date`, `end_date`, `totalhrs`, `team`, `requirement`, `requirement_name`, `created_at`, `updated_at`) VALUES
(23, 'Chatbot Project one', '2022-08-11', '2022-08-26', '200', '1', '1660909862.jpg', 'Top-6-Software-Development-Methodologies.jpg', '2022-08-09 07:27:48', '2022-08-19 06:21:02'),
(25, 'Test Project', '2022-08-13', '2022-08-20', '1000', '8', '1660910349.jpg', 'small-people-around-a-smartphone-make-a-ui-ux-vector-19889011.jpg', '2022-08-13 07:48:23', '2022-08-19 06:29:09'),
(26, 'Red carpet', '2022-08-18', '2022-08-20', '1000', '10', '1660622579.jpg', '1660396703.jpg', '2022-08-15 22:32:59', '2022-08-15 22:32:59'),
(27, 'facebook', '2022-08-01', '2022-08-15', '120', '10', '1660629162.php', 'web.php', '2022-08-16 00:22:42', '2022-08-16 00:22:42'),
(31, 'HRMS', '2022-09-11', '2022-09-30', '1000', '13', '1662140023.xlsx', '007.xlsx', '2022-09-02 12:03:43', '2022-09-02 12:03:43');

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` int(11) UNSIGNED NOT NULL,
  `project_name` varchar(255) NOT NULL,
  `assign_date` varchar(255) NOT NULL,
  `module` json NOT NULL,
  `activity` json NOT NULL,
  `task_hours` json NOT NULL,
  `total_hrs` varchar(255) NOT NULL,
  `developer_hours` varchar(255) NOT NULL,
  `submission_date` varchar(255) NOT NULL,
  `team_name` varchar(255) NOT NULL,
  `team_member` json NOT NULL,
  `developer_status` varchar(255) NOT NULL,
  `tester_status` varchar(255) NOT NULL,
  `qa_status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `project_name`, `assign_date`, `module`, `activity`, `task_hours`, `total_hrs`, `developer_hours`, `submission_date`, `team_name`, `team_member`, `developer_status`, `tester_status`, `qa_status`, `created_at`, `updated_at`) VALUES
(1, '26', '2022-08-04', '[\"login\", \"register\"]', '[\"Crud operation\", \"Crud\"]', 'null', 'pending', '8HRs', '2022-08-07', 'Shubham\'s Team', '[\"9\", \"11\", \"13\"]', '0', 'pending', 'pending', '2022-08-05 05:03:25', '2022-08-05 05:03:25'),
(2, '27', '2022-08-04', '[\"login\", \"register\"]', '[\"Crud operation\", \"Crud\"]', 'null', 'pending', '8HRs', '2022-08-07', 'Sagar\'s Team', '[\"9\", \"11\", \"13\"]', '1', 'pending', 'pending', '2022-08-05 05:07:33', '2022-08-23 02:44:31'),
(52, '27', '2022-08-05', '[\"[\\\"[\\\\\\\"java\\\\\\\"]\\\", \\\"curd\\\"]\", \"cpp\"]', '[\"[\\\"[\\\\\\\"concept\\\\\\\"]\\\", \\\"working\\\"]\", \"concept\"]', '[\"[\\\"[\\\\\\\"23\\\\\\\"]\\\", \\\"678\\\"]\", \"78\"]', 'pending', '89', '2022-08-28', '[\"5\"]', '[\"34\", \"35\"]', 'pending', 'pending', 'pending', '2022-08-20 05:41:07', '2022-08-20 06:27:50'),
(54, '27', '2022-08-18', '[\"[\\\"cpp\\\"]\"]', '[\"[\\\"concept\\\"]\"]', '[\"[\\\"120\\\"]\"]', 'pending', '90', '2022-08-24', '[\"13\"]', '[\"9\"]', 'pending', 'pending', 'pending', '2022-08-23 05:39:59', '2022-08-23 05:40:19'),
(55, '23', '2022-08-27', '[\"Login Page\", null]', '[\"Web Design\", null]', '[\"8 HRS\", null]', 'pending', '8', '2022-08-27', '15', '[\"34\"]', 'pending', 'pending', 'pending', '2022-08-25 04:11:02', '2022-08-25 04:11:02');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` int(11) UNSIGNED NOT NULL,
  `team_name` varchar(255) NOT NULL,
  `team_member` json NOT NULL,
  `designation` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `team_name`, `team_member`, `designation`, `created_at`, `updated_at`) VALUES
(5, 'test team', '[\"9\", \"34\"]', 'Tester', '2022-08-09 08:27:52', '2022-08-18 23:12:22'),
(7, 'Dhananjay\'s team', '[\"9\", \"10\"]', 'Backend', '2022-08-10 00:14:51', '2022-08-10 00:14:51'),
(8, 'Testing Team for reliable project', '[\"31\"]', 'Tester', '2022-08-10 00:39:16', '2022-08-13 07:49:19'),
(10, 'Backend Team', '[\"9\"]', 'Backend', '2022-08-15 22:31:37', '2022-08-18 03:01:04'),
(13, 'Market', '[\"34\"]', 'Technical Support', '2022-08-19 06:22:32', '2022-08-19 07:28:33'),
(14, 'fifth harmony', '[\"9\", \"34\", \"35\"]', 'Technical Support', '2022-08-19 07:29:10', '2022-08-20 06:29:23'),
(15, 'Graphics', '[\"9\", \"34\"]', 'Frontend', '2022-08-25 04:08:37', '2022-08-25 04:08:37'),
(16, 'sagar', '[\"36\"]', 'Frontend', '2022-09-02 13:59:03', '2022-09-02 13:59:03');

-- --------------------------------------------------------

--
-- Table structure for table `team_memb`
--

CREATE TABLE `team_memb` (
  `id` int(11) NOT NULL,
  `team_memb` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `team_memb`
--

INSERT INTO `team_memb` (`id`, `team_memb`) VALUES
(1, 'parvina'),
(2, 'Ankita'),
(3, 'karan'),
(1, 'parvina'),
(2, 'Ankita'),
(3, 'karan');

-- --------------------------------------------------------

--
-- Table structure for table `timesheets`
--

CREATE TABLE `timesheets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `proj_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `developer_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `developer_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `productivity_hours` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `review_hours` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `others` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notes` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `timesheets`
--

INSERT INTO `timesheets` (`id`, `date`, `proj_name`, `developer_name`, `developer_id`, `productivity_hours`, `review_hours`, `others`, `notes`, `created_at`, `updated_at`) VALUES
(26, '2022-08-05', '27', 'Jiyan', '9', '120', '8', 'comments', 'gjghj', '2022-08-17 04:48:24', '2022-08-17 04:48:24'),
(27, '2022-09-06', '25', 'Jiyan', '9', '120', '40', 'gfdgdf', 'dsfsgd', '2022-09-02 22:43:49', '2022-09-02 22:43:49');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `manage_leaves`
--
ALTER TABLE `manage_leaves`
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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `timesheets`
--
ALTER TABLE `timesheets`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `manage_leaves`
--
ALTER TABLE `manage_leaves`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `timesheets`
--
ALTER TABLE `timesheets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
