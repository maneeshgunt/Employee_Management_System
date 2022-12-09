-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 23, 2022 at 02:44 AM
-- Server version: 5.7.40
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
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `email`, `password`, `created_at`, `updated_at`, `name`, `phone`, `address`, `city`) VALUES
(1, 'admin@gmail.com', '$2y$10$e3gzdKj7Vwm0aQ/FJaljpudCegY77shNSHcPwQ8sr44qYiCDyVGsm', NULL, '2022-09-16 09:21:44', 'Swwapnil', '7840929633', 'Karvenagar', 'Pune'),
(2, 'div@gmail.com', '$2y$10$LCwbzNJwoCFuge0Hr2k69uEiNjOlffTKOgLhRtnnHhiA3yU.AHsoi', NULL, '2022-09-12 09:05:35', 'Scriptika Solutions', '2345', '2345fdf3eff', 'fdfdf');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(255) NOT NULL,
  `dname` varchar(255) DEFAULT NULL,
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `dname`, `created_at`, `updated_at`) VALUES
(59, 'Marketing', '2022-09-16 09:25:57.000000', '2022-11-22 12:59:53.000000');

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
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `maritial_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birth_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blood_group` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `joining_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `joining_time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `employee_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `relieving_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emergency_contact_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `offerdate` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `salary` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hrcontactno` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aadhar_card` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aadharcard_file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pan_card` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pan_card_file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bank_passbook_cheque` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bank_passbook_cheque_file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mark_list` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mark_list_file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `totalleaves` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `paidleaves` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unpaidleaves` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `full_name`, `education`, `address`, `designation`, `email`, `password`, `maritial_status`, `mobile_no`, `birth_date`, `blood_group`, `joining_date`, `joining_time`, `employee_id`, `relieving_date`, `emergency_contact_no`, `gender`, `offerdate`, `salary`, `hrcontactno`, `aadhar_card`, `aadharcard_file`, `pan_card`, `pan_card_file`, `bank_passbook_cheque`, `bank_passbook_cheque_file`, `mark_list`, `mark_list_file`, `totalleaves`, `paidleaves`, `unpaidleaves`, `created_at`, `updated_at`) VALUES
(1, 'Austin', 'MSC', 'M.G Road', 'SoftwareDeveloper', 'austin@gmail.com', '$2a$04$66ESoOIj1.B.ndJ4LMDDHefxvY9tEuJpyuedz89uMZkxdxKVQ5BSa', 'Single', '9889788967', '2022-11-25', 'A+', '2022-11-28', NULL, '1102', '2022-11-30', '9857674665', 'Male', NULL, NULL, NULL, 'istockphoto-95442265-170667a.jpg', '56766463.jpg', 'istockphoto-95442265-170667a.jpg', '12000019.jpg', 'istockphoto-95442265-170667a.jpg', '74037550.jpg', 'istockphoto-95442265-170667a.jpg', '55920203.jpg', '20', '10', '10', '2022-11-22 05:59:05', '2022-11-22 13:53:28');

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
(1, '2022-11-25', '2022-11-26', 'Austin', 'aa', '2', 'pending', 'No comments', '1669144580.pdf', '16829101.pdf', '2022-11-22 13:52:08', '2022-11-22 13:52:08');

-- --------------------------------------------------------

--
-- Table structure for table `mangepayslips`
--

CREATE TABLE `mangepayslips` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `month` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `totalworkingdays` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `paiddays` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bankname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `joindate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bankaccountnumber` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grosssalary` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `basicsalary` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `epf` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `houserentallowance` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `healthinsurance` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `conveyanceallowance` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `professionaltax` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `medicalallowance` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `specialallowance` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `totaldeduction` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `netpay` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amountinwords` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mangepayslips`
--

INSERT INTO `mangepayslips` (`id`, `month`, `ename`, `totalworkingdays`, `designation`, `paiddays`, `department`, `bankname`, `joindate`, `bankaccountnumber`, `grosssalary`, `uan`, `basicsalary`, `epf`, `houserentallowance`, `healthinsurance`, `conveyanceallowance`, `professionaltax`, `medicalallowance`, `specialallowance`, `totaldeduction`, `netpay`, `amountinwords`, `created_at`, `updated_at`) VALUES
(1, '2022-11-22', '1', '10', 'SEO', '10', 'it', 'canada', '2022-11-22', '65458515954', '10000', '5454485', '80000', '1000', '1000', '0', '0', '0', '0', '0', '0', '10000', 'Ten K', '2022-11-22 12:15:37', '2022-11-22 13:48:55');

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
(27, '2022_09_01_185949_create_resignations_table', 5),
(28, '2022_09_01_203600_create_terminations_table', 6),
(29, '2022_09_02_084319_create_paysilps_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `monthlytrainings`
--

CREATE TABLE `monthlytrainings` (
  `id` bigint(20) NOT NULL,
  `departments` varchar(255) NOT NULL,
  `employee` json NOT NULL,
  `month` varchar(255) NOT NULL,
  `trainingfile` varchar(255) NOT NULL,
  `trainingfilename` varchar(255) NOT NULL,
  `submissiondate` varchar(255) NOT NULL,
  `comments` varchar(255) NOT NULL,
  `candidatefile` varchar(255) DEFAULT NULL,
  `candidatefilename` varchar(255) DEFAULT NULL,
  `marks` varchar(255) DEFAULT NULL,
  `comments1` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `monthlytrainings`
--

INSERT INTO `monthlytrainings` (`id`, `departments`, `employee`, `month`, `trainingfile`, `trainingfilename`, `submissiondate`, `comments`, `candidatefile`, `candidatefilename`, `marks`, `comments1`, `created_at`, `updated_at`) VALUES
(1, 'Frontend', '[\"1\"]', '2022-11', '1669144503.pdf', 'ram2_cv (1).pdf', '2022-11-24', 'aaa', NULL, NULL, '11', 'aa', '2022-11-22 19:15:37', '2022-11-22 13:45:37');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(20) NOT NULL,
  `tname` varchar(255) DEFAULT NULL,
  `emps` longtext,
  `nTitle` varchar(255) DEFAULT NULL,
  `nContent` varchar(255) DEFAULT NULL,
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `tname`, `emps`, `nTitle`, `nContent`, `created_at`, `updated_at`) VALUES
(9, '44', '[\"58\"]', 'ssssssssss', '3333333', '2022-09-16 23:38:43.000000', '2022-09-16 23:38:43.000000');

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
-- Table structure for table `payslips`
--

CREATE TABLE `payslips` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `departmentsp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `employeep` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `monthp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payslipfile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payslipfilename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `empid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
(1, 'Demo', '2022-10-01', '2022-10-06', '20', '44', '1666028593.pdf', 'Adobe Scan Mar 19, 2022 (1).pdf', '2022-10-17 12:13:13', '2022-10-17 12:13:13');

-- --------------------------------------------------------

--
-- Table structure for table `resignations`
--

CREATE TABLE `resignations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `eid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fullname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `employeeid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noticeperiod` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `resignationreaason` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `startdate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `enddate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comments` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `resignations`
--

INSERT INTO `resignations` (`id`, `eid`, `fullname`, `employeeid`, `department`, `noticeperiod`, `resignationreaason`, `date`, `status`, `startdate`, `enddate`, `comments`, `created_at`, `updated_at`) VALUES
(1, '1', 'Austin', '1102', 'aa', '1Day', 'aa', '2022-11-24', 'pending', '2022-11-25', '2022-11-26', 'pending', '2022-11-22 13:52:52', '2022-11-22 13:52:52');

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `project_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `assign_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `module` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `activity` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `task_hours` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `total_hrs` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `developer_hours` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `submission_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `team_name` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `team_member` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
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
(1, '1', '2022-10-13', '[\"javaConcept\"]', '[\"Complete it end of the day\"]', '[\"20\"]', 'pending', '20', '2022-10-29', 'webdesinger', '[\"20\"]', 'pending', 'pending', 'pending', '2022-10-17 12:16:26', '2022-10-17 12:16:26'),
(2, '1', '2022-10-09', '[\"Java Concept\"]', '[\"Complete It End Of the Day\"]', '[\"12\"]', 'pending', '15', '2022-10-26', 'webdesinger', '[\"20\"]', 'pending', 'pending', 'pending', '2022-10-22 00:09:28', '2022-10-22 00:09:28');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `team_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `team_leader` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `team_member` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `team_name`, `team_leader`, `team_member`, `designation`, `created_at`, `updated_at`) VALUES
(44, 'webdesinger', 'gayatri', '[\"1\"]', '59', '2022-09-16 23:38:20', '2022-11-22 13:23:50');

-- --------------------------------------------------------

--
-- Table structure for table `terminations`
--

CREATE TABLE `terminations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `empid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deapartment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ldate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tfile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tfilename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `timesheets`
--

CREATE TABLE `timesheets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `proj_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `developer_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `developer_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hr1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hr2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hr3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hr4` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hr5` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hr6` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hr7` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hr8` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hr9` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hr10` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hr11` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hr12` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `intime` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `outtime` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `productivity_hours` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `review_hours` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `others` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `notes` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `timesheets`
--

INSERT INTO `timesheets` (`id`, `date`, `proj_name`, `department`, `developer_name`, `developer_id`, `hr1`, `hr2`, `hr3`, `hr4`, `hr5`, `hr6`, `hr7`, `hr8`, `hr9`, `hr10`, `hr11`, `hr12`, `intime`, `outtime`, `productivity_hours`, `review_hours`, `others`, `notes`, `created_at`, `updated_at`) VALUES
(2, '2022-11-20', '1', 'IT', 'Austin', '1102', 'AA', 'AA', 'AA', 'AA', 'AA', 'AA', 'AA', 'AA', 'AA', 'AA', 'AA', 'AA', '12:00', '09:00', NULL, NULL, NULL, NULL, '2022-11-22 14:19:39', '2022-11-22 14:19:39');

-- --------------------------------------------------------

--
-- Table structure for table `trainings`
--

CREATE TABLE `trainings` (
  `id` bigint(20) NOT NULL,
  `department` varchar(255) NOT NULL,
  `members` json NOT NULL,
  `traningtype` varchar(255) NOT NULL,
  `trainername` varchar(255) NOT NULL,
  `timeduration` varchar(255) DEFAULT NULL,
  `startDate` varchar(255) NOT NULL,
  `endDate` varchar(255) NOT NULL,
  `discription` varchar(255) NOT NULL,
  `cost` varchar(255) NOT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trainings`
--

INSERT INTO `trainings` (`id`, `department`, `members`, `traningtype`, `trainername`, `timeduration`, `startDate`, `endDate`, `discription`, `cost`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Frontend', '[\"1\"]', 'aaa', 'aaa', '2hr', '2022-11-21', '2022-11-24', 'aaa', '1111', NULL, '2022-11-22 13:44:13', '2022-11-22 13:44:13');

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
(21, '2022-02', '2022-09-10', '2022-08-11', '1663341212.pdf', 'Form-F-108955982203.pdf', '2022-09-16 09:43:32', '2022-09-16 09:43:32'),
(22, '2022-11', '2022-11-23', '2022-11-24', '1669144580.pdf', 'ram2_cv (1).pdf', '2022-11-22 13:46:20', '2022-11-22 13:46:20');

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
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `employees_email_unique` (`email`),
  ADD UNIQUE KEY `employee_id` (`employee_id`);

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
-- Indexes for table `mangepayslips`
--
ALTER TABLE `mangepayslips`
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
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payslips`
--
ALTER TABLE `payslips`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `terminations`
--
ALTER TABLE `terminations`
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
-- Indexes for table `weekleytimesheets`
--
ALTER TABLE `weekleytimesheets`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `manage_leaves`
--
ALTER TABLE `manage_leaves`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mangepayslips`
--
ALTER TABLE `mangepayslips`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `monthlytrainings`
--
ALTER TABLE `monthlytrainings`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `payslips`
--
ALTER TABLE `payslips`
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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `terminations`
--
ALTER TABLE `terminations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `timesheets`
--
ALTER TABLE `timesheets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `trainings`
--
ALTER TABLE `trainings`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `weekleytimesheets`
--
ALTER TABLE `weekleytimesheets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
