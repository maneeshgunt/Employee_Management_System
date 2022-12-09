-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2022 at 07:27 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scriptika_hrms_2022`
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
(1, 'abc@gmail.com', '$2a$06$tw3fgycuT0ynHkON0RJf5eLdKBNwNgsYq70Uak4.mZfNQ7Qp6ixn2', NULL, NULL),
(2, 'div@gmail.com', '$2a$06$tw3fgycuT0ynHkON0RJf5eLdKBNwNgsYq70Uak4.mZfNQ7Qp6ixn2', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `education` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `maritial_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birth_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blood_group` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `joining_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `employee_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `relieving_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emergency_contact_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aadhar_card` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aadharcard_file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pan_card` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pan_card_file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bank_passbook_cheque` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bank_passbook_cheque_file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mark_list` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mark_list_file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `full_name`, `education`, `address`, `designation`, `email`, `password`, `maritial_status`, `mobile_no`, `birth_date`, `blood_group`, `joining_date`, `employee_id`, `relieving_date`, `emergency_contact_no`, `gender`, `aadhar_card`, `aadharcard_file`, `pan_card`, `pan_card_file`, `bank_passbook_cheque`, `bank_passbook_cheque_file`, `mark_list`, `mark_list_file`, `created_at`, `updated_at`) VALUES
(1, 'jiyan', 'Msc', 'mg road', 'software developer', 'jiyan@gmail.com', '$2a$06$tw3fgycuT0ynHkON0RJf5eLdKBNwNgsYq70Uak4.mZfNQ7Qp6ixn2', 'single', '123456789', '2022-08-28', 'A+', '2022-08-31', '12345', '2022-08-31', '2234454', 'single', '536098.jpg', '60929939.jpg', 'aaaa.png', '19470233.png', 'aaaa.png', '10076798.png', '222140.jpg', '34653610.jpg', '2022-08-26 22:58:04', '2022-08-26 22:58:04'),
(2, 'yogs', 'msc', 'pulgate', 'adsdfdff', 'yogs@gmail.com', '$2y$10$35AiVRRvRmOWIH96KJAgbOauRaoGf1osu3HmLNYtQxkANJfXNavtm', 'single', '123456789', '2022-08-01', 'A+', '2022-08-04', '2323', '2022-08-26', '1234566666', 'single', '536098.jpg', '35857984.jpg', 'aaaa.png', '85056847.png', 'aaaa.png', '86301090.png', 'aaaa.png', '43125257.png', '2022-08-26 23:24:45', '2022-08-26 23:24:45');

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
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
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
(1, '2022-08-26', '2022-08-27', 'jiyan', 'illness', '1', 'Accept', 'adsfghj', '', '', NULL, '2022-08-27 00:33:04'),
(2, '2022-08-10', '2022-08-18', 'jiyan', 'exam', '232', 'Accept', 'rtrretrNo comments', '1661928443.pdf', '97059563.pdf', '2022-08-31 02:02:44', '2022-08-31 02:03:14'),
(3, '2022-08-31', '2022-09-02', 'jiyan', 'ganpati festival', '2', 'Accept', 'accepted', 'SOASE.pdf', '49166396.pdf', '2022-08-31 04:26:31', '2022-08-31 04:33:42');

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
(11, '2014_10_12_000000_create_users_table', 1),
(12, '2014_10_12_100000_create_password_resets_table', 1),
(13, '2019_08_19_000000_create_failed_jobs_table', 1),
(14, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(15, '2022_07_25_120448_create_admins_table', 1),
(16, '2022_07_26_121725_create_timesheets_table', 1),
(17, '2022_07_27_113015_create_projects_table', 1),
(18, '2022_07_28_110945_create_tasks_table', 1),
(19, '2022_07_29_072016_create_employees_table', 1),
(20, '2022_08_01_050057_create_manageleaves_table', 1),
(21, '2022_08_27_045948_create_teams_table', 2),
(22, '2022_08_29_045444_create_weekleytimesheets_table', 2),
(23, '2022_08_29_051646_create_weektimesheets_table', 2),
(24, '2022_08_29_090642_create_perfomances_table', 3),
(25, '2022_08_29_092450_create_trainings_table', 3),
(26, '2022_08_29_120653_create_monthlytrainings_table', 4),
(27, '2022_09_01_185949_create_resignations_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `monthlytrainings`
--

CREATE TABLE `monthlytrainings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `departments` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `employee` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL DEFAULT '[]',
  `month` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trainingfile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trainingfilename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `submissiondate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comments` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `candidatefile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `marks` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comments1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `monthlytrainings`
--

INSERT INTO `monthlytrainings` (`id`, `departments`, `employee`, `month`, `trainingfile`, `trainingfilename`, `submissiondate`, `comments`, `candidatefile`, `marks`, `comments1`, `created_at`, `updated_at`) VALUES
(4, 'Mobile App', '[\"1\",\"2\"]', '2022-11', '1661861354.pdf', 'Red Carpet (4).pdf', '2022-08-31', 'hjhjhkjhkk', NULL, NULL, NULL, '2022-08-30 06:39:14', '2022-08-30 06:39:14'),
(5, 'Technical Support', '[\"1\",\"2\"]', '2022-10', '1661915435.pdf', 'PortX - Google Docs.pdf', '2022-08-25', 'sasaqqqqq', NULL, NULL, NULL, '2022-08-30 21:40:35', '2022-08-30 21:40:35'),
(6, 'Technical Support', '[\"1\",\"2\"]', '2022-07', '1661921795.wmv', 'Bear.wmv', '2022-08-30', 'sasaqqqqq', NULL, NULL, NULL, '2022-08-30 23:26:35', '2022-08-30 23:26:35'),
(7, 'Mobile App', '[\"1\"]', '2022-06', '1661928443.pdf', 'ComputerBasics.pdf', '2022-08-30', 'sasaqqqqq', NULL, NULL, NULL, '2022-08-31 01:17:23', '2022-08-31 01:17:23'),
(8, 'Backend', '[\"1\",\"2\"]', '2022-07', '1661931627.pdf', 'SOASE.pdf', '2022-08-25', 'E33', NULL, NULL, NULL, '2022-08-31 02:10:27', '2022-08-31 02:10:27');

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
-- Table structure for table `perfomances`
--

CREATE TABLE `perfomances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `empid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `month` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
(1, 'redcarpet', '2022-08-01', '2022-08-05', '120', '2', '1661761523.xlsx', 'Bug Report RedCarpet App.xlsx', '2022-08-27 00:23:58', '2022-08-29 02:55:23'),
(2, 'wisdom', '2022-08-01', '2022-08-05', '120', '1', '1661579796.png', 'aaaa.png', '2022-08-27 00:26:36', '2022-08-27 00:26:36');

-- --------------------------------------------------------

--
-- Table structure for table `resignations`
--

CREATE TABLE `resignations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fullname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `employeeid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noticeperiod` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `resignationreaason` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `startdate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `enddate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comments` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `resignations`
--

INSERT INTO `resignations` (`id`, `fullname`, `employeeid`, `department`, `noticeperiod`, `resignationreaason`, `date`, `status`, `startdate`, `enddate`, `comments`, `created_at`, `updated_at`) VALUES
(1, 'amruta', '32321', 'backend', '1Day', 'illness', '2022-09-30', 'Approve', '2022-09-09', '2022-09-02', 'drr', '2022-09-01 14:06:25', '2022-09-01 14:52:42');

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `project_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `assign_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `module` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`module`)),
  `activity` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`activity`)),
  `task_hours` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`task_hours`)),
  `total_hrs` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `developer_hours` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `submission_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `team_name` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`team_name`)),
  `team_member` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`team_member`)),
  `developer_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tester_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qa_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `project_name`, `assign_date`, `module`, `activity`, `task_hours`, `total_hrs`, `developer_hours`, `submission_date`, `team_name`, `team_member`, `developer_status`, `tester_status`, `qa_status`, `created_at`, `updated_at`) VALUES
(1, 'wisdom', '01-09-2023', '[\"css\"]', '[\"css\"]', '120', '', '20', '01-09-2023', '[\"sagar team\"]', '[\"3\",\"1\"]', '1', 'sas', 'sasa', NULL, '2022-09-01 02:32:03');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `team_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `team_member` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `team_name`, `team_member`, `designation`, `created_at`, `updated_at`) VALUES
(1, 'backend team', '[\"1\",\"2\"]', 'Backend', '2022-08-29 04:44:01', '2022-08-29 04:44:01'),
(2, 'frontendteam', '[\"1\"]', 'Frontend', '2022-08-29 04:44:39', '2022-08-29 04:44:39'),
(3, 'PAYAL', '[\"1\",\"2\"]', 'Tester', '2022-08-31 02:08:23', '2022-08-31 02:08:23');

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
(1, '2022-08-07', '1', 'jiyan', '1', '140', '8', 'comments', 'xyz', '2022-08-27 00:44:11', '2022-08-27 00:44:11'),
(2, '2022-08-04', '1', 'jiyan', '1', '223544', '544', 'sdsd', 'dsfjh', '2022-08-31 02:01:47', '2022-08-31 02:01:47');

-- --------------------------------------------------------

--
-- Table structure for table `trainings`
--

CREATE TABLE `trainings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `department` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `members` longtext COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '[]',
  `traningtype` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trainername` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `timeduration` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `startDate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `endDate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discription` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cost` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `trainings`
--

INSERT INTO `trainings` (`id`, `department`, `members`, `traningtype`, `trainername`, `timeduration`, `startDate`, `endDate`, `discription`, `cost`, `status`, `created_at`, `updated_at`) VALUES
(1, 'backend team', 'amruta', 'dstdfsgs', 'danny', '3333333333', '29-08-2020', '9-08-2020', 'dfghj;', '43342', 'Pending', NULL, '2022-09-01 06:11:28'),
(2, 'Frontend', '[\"1\",\"2\"]', 'html,css,bootstrap', 'sagar', NULL, '2022-08-02', '2022-08-09', 'frontenddgdfjhp', '12000', 'Incomplete', '2022-08-29 06:07:58', '2022-09-01 06:12:38'),
(6, 'Frontend', '[\"1\"]', 'html,css,bootstrap', 'dissha', NULL, '2022-08-04', '2022-08-13', 'WQEQE', '12000', NULL, '2022-08-31 02:09:02', '2022-08-31 02:09:02');

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

-- --------------------------------------------------------

--
-- Table structure for table `weekleytimesheets`
--

CREATE TABLE `weekleytimesheets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `month` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `startdate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `enddate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uploadfile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uploadfilename` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `weekleytimesheets`
--

INSERT INTO `weekleytimesheets` (`id`, `month`, `startdate`, `enddate`, `uploadfile`, `uploadfilename`, `created_at`, `updated_at`) VALUES
(1, '2022-04', '2022-08-01', '2022-08-30', '1661755506.xlsx', 'Bug Report RedCarpet App.xlsx', '2022-08-29 01:15:06', '2022-08-29 01:15:06'),
(2, '2022-09', '2022-08-01', '2022-08-31', '1661755635.xlsx', 'Bug Report RedCarpet App.xlsx', '2022-08-29 01:17:15', '2022-08-29 01:17:15');

-- --------------------------------------------------------

--
-- Table structure for table `weektimesheets`
--

CREATE TABLE `weektimesheets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `month` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `startdate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `enddate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uploadfile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `employees_email_unique` (`email`);

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
-- Indexes for table `monthlytrainings`
--
ALTER TABLE `monthlytrainings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `perfomances`
--
ALTER TABLE `perfomances`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `resignations`
--
ALTER TABLE `resignations`
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
-- Indexes for table `trainings`
--
ALTER TABLE `trainings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `weekleytimesheets`
--
ALTER TABLE `weekleytimesheets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `weektimesheets`
--
ALTER TABLE `weektimesheets`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `manage_leaves`
--
ALTER TABLE `manage_leaves`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `monthlytrainings`
--
ALTER TABLE `monthlytrainings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `perfomances`
--
ALTER TABLE `perfomances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `resignations`
--
ALTER TABLE `resignations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `timesheets`
--
ALTER TABLE `timesheets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `trainings`
--
ALTER TABLE `trainings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `weekleytimesheets`
--
ALTER TABLE `weekleytimesheets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `weektimesheets`
--
ALTER TABLE `weektimesheets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
