-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2023 at 11:15 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bmsc_13`
--

-- --------------------------------------------------------

--
-- Table structure for table `bmsc13_members`
--

CREATE TABLE `bmsc13_members` (
  `id` int(50) NOT NULL,
  `name` text NOT NULL,
  `phone` text NOT NULL,
  `image` longblob NOT NULL,
  `email` text NOT NULL,
  `gender` text NOT NULL,
  `present_address` text NOT NULL,
  `permanent_address` text NOT NULL,
  `blood_group` text NOT NULL,
  `occupation` text NOT NULL,
  `fb_id` text NOT NULL,
  `insta_id` text NOT NULL,
  `twitter_id` text NOT NULL,
  `linkedin_id` text NOT NULL,
  `youtube_channel` text NOT NULL,
  `password` text NOT NULL,
  `share_with_males` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bmsc13_members`
--

INSERT INTO `bmsc13_members` (`id`, `name`, `phone`, `image`, `email`, `gender`, `present_address`, `permanent_address`, `blood_group`, `occupation`, `fb_id`, `insta_id`, `twitter_id`, `linkedin_id`, `youtube_channel`, `password`, `share_with_males`, `created_at`) VALUES
(1, 'Md Wasiul Mannan', '01777902703', '', 'wasiul321@gmail.com', 'Male', 'Joypur Para, Bogura', 'Joypur Para, Bogura', 'O(+)', 'Software Developer', 'https://www.facebook.com/mdwasiulmannan/', 'https://www.instagram.com/wasiulmannan/', 'https://twitter.com/wasiul321', 'https://www.linkedin.com/in/md-wasiul-mannan-020b09159/', '', 'admin@admin.com', 'Yes', '2023-04-17 10:38:51'),
(44, 'Abu Sayeed Prodhan Shad', '8618652747323', '', 'abusayedshad@gmail.com', 'Male', 'Wuxi, Jiangsu, China', '', 'A(+)', '', '', '', '', '', '', 'abusayedshad@gmail.com', 'Yes', '2023-04-17 19:31:21'),
(45, 'Golam Moktadir', '01682573651', '', 'moktadir.golam@gmail.com', 'Male', 'Edmonton, AB, Canada', '', 'O(+)', '', '', '', '', '', '', 'moktadir.golam@gmail.com', 'Yes', '2023-04-17 19:31:21'),
(46, 'Mehedi Hasan', '01521490054', '', 'mehedi.hasan490054@gmail.com', 'Male', 'Jahurul Nagar, Bogura', '', 'O(+)', '', '', '', '', '', '', 'mehedi.hasan490054@gmail.com', 'Yes', '2023-04-17 19:31:21'),
(47, 'Golam Rasul Joy', '01783133223', '', 'joygolamrasul@gmail.com', 'Male', 'Dhaka', '', 'O(+)', '', '', '', '', '', '', 'joygolamrasul@gmail.com', 'Yes', '2023-04-17 19:31:21'),
(48, 'Shuvo', '01777902715', '', 'Atikul.shuvo6632@gmail.com', 'Male', 'Nikunja-2, Dhaka', '', 'A(+)', '', '', '', '', '', '', 'Atikul.shuvo6632@gmail.com', 'Yes', '2023-04-17 19:31:21'),
(49, 'Dr. Md. Humayun Kabir', '01793205547', '', 'hksakib352@gmail.com', 'Male', 'Kalitola, Bogura', '', 'B(+)', '', '', '', '', '', '', 'hksakib352@gmail.com', 'Yes', '2023-04-17 19:31:21'),
(50, 'Tariq Ben Anwar', '01949126336', '', 'tusharsarkar666@gmail.com', 'Male', 'Shofipur, Chandra, Gazipur', '', 'A(+)', '', '', '', '', '', '', 'tusharsarkar666@gmail.com', 'Yes', '2023-04-17 19:31:21'),
(51, 'Nazmul Azad', '01701014557', '', 'nazmulazad66@gmail.com', 'Male', 'Mirpur-10', '', 'B(+)', '', '', '', '', '', '', 'nazmulazad66@gmail.com', 'Yes', '2023-04-17 19:31:21'),
(52, 'S.M. Zahid Ferdous Noman', '01719024577', '', 'ferdous.noman007@gmail.com', 'Male', 'Rupganj, Narayanganj', '', 'O(+)', '', '', '', '', '', '', 'ferdous.noman007@gmail.com', 'Yes', '2023-04-17 19:31:21'),
(53, 'Mg. Shaharia Rafi', '01777902711', '', 'mgshaharia@gmail.com', 'Male', 'Ramu, Cox\'s Bazar', '', 'O(-)', '', '', '', '', '', '', 'mgshaharia@gmail.com', 'Yes', '2023-04-17 19:31:21'),
(54, 'Md. Ashikuzzaman', '01521316151', '', 'ashik.ce.moon@gmail.com', 'Male', 'Dhanmondi', '', 'O(+)', '', '', '', '', '', '', 'ashik.ce.moon@gmail.com', 'Yes', '2023-04-17 19:31:21'),
(55, 'MD. Tanvir Hosen Shakir', '01978225884', '', 'tanvirhosenshakir@gmail.com', 'Male', 'Khetlal-5920, Joypurhat, Rajshahi, Bangladesh', '', 'A(+)', '', '', '', '', '', '', 'tanvirhosenshakir@gmail.com', 'Yes', '2023-04-17 19:31:21'),
(56, 'Partho', '01309090008', '', 'pratulkrishna1994@gmail.com', 'Male', 'Mohali, Punjab India', '', '0(+)', '', '', '', '', '', '', 'pratulkrishna1994@gmail.com', 'Yes', '2023-04-17 19:31:21'),
(57, 'Salman rokib setu', '01763290190', '', 'rokibsalmansetu@gmail.com', 'Male', 'Uposhor', '', 'O(-)', '', '', '', '', '', '', 'rokibsalmansetu@gmail.com', 'Yes', '2023-04-17 19:31:21'),
(58, 'Md. Sakib Hasan', '01518905414', '', 'sakibbd1296@gmail.com', 'Male', 'Mymensingh', '', 'A(+)', '', '', '', '', '', '', 'sakibbd1296@gmail.com', 'Yes', '2023-04-17 19:31:21'),
(59, 'Md. Asaduzzaman Rain', '01768210009', '', 'asaduzzamanrain9@gmail.com', 'Male', 'Gajipur', '', 'O(+)', '', '', '', '', '', '', 'asaduzzamanrain9@gmail.com', 'Yes', '2023-04-17 19:31:21'),
(60, 'G M Saif', '01764814045', '', 'gmumran4055@gmail.com', 'Male', 'Nilphamari', '', 'Ab(+)', '', '', '', '', '', '', 'gmumran4055@gmail.com', 'Yes', '2023-04-17 19:31:21'),
(61, 'Md. Mostofa Faysal', '01798111893', '', 'md.mostofafaysal@gmail.com', 'Male', 'Mokamtala, Shibganj, Bogura', '', 'O(+)', '', '', '', '', '', '', 'md.mostofafaysal@gmail.com', 'Yes', '2023-04-17 19:31:21'),
(62, 'Md. Hasanuzzaman Shohag', '01715874199', '', 'shohagdc330@gmail.com', 'Male', 'Dhanmondi 27, Dhaka', '', 'A(+)', '', '', '', '', '', '', 'shohagdc330@gmail.com', 'Yes', '2023-04-17 19:31:21'),
(63, 'HAFIZUR RAHMAN TASHRIF ', '01516137357', '', 'hafizurrahman-2015718655@islm.du.ac.bd', 'Male', 'Barishal', '', 'O(+)', '', '', '', '', '', '', 'hafizurrahman-2015718655@islm.du.ac.bd', 'Yes', '2023-04-17 19:31:21'),
(64, 'Sabir newas rahi', '01309641113', '', 'Rahicharlis2018@gmail.com', 'Male', 'Borogola,bogura', '', 'O(+)', '', '', '', '', '', '', 'Rahicharlis2018@gmail.com', 'Yes', '2023-04-17 19:31:21'),
(65, 'Shumon kumar ', '01751514279', '', 'shumonkumar79@gmail.com', 'Male', 'Azimpur,Dhaka', '', 'B(+)', '', '', '', '', '', '', 'shumonkumar79@gmail.com', 'Yes', '2023-04-17 19:31:21'),
(66, 'Fazlay Rabbi Rakib', '01777903709', '', 'mbbsrakib96@gmail.com', 'Male', 'Akkelpur, Joypurhat ', '', 'AB(+)', '', '', '', '', '', '', 'mbbsrakib96@gmail.com', 'Yes', '2023-04-17 19:31:21'),
(67, 'Md Shajjad Hossain', '01777902710', '', 'shajjadhossain.md@gmail.com', 'Male', 'Dhaka', '', 'B(+)', '', '', '', '', '', '', 'shajjadhossain.md@gmail.com', 'Yes', '2023-04-17 19:31:21'),
(68, 'Saifullah Talukder', '01914550383', '', 'saifullah.abc@gmail.com', 'Male', 'Middle Badda, Dhaka, Bangladesh', '', 'O(-)', '', '', '', '', '', '', 'saifullah.abc@gmail.com', 'Yes', '2023-04-17 19:31:21'),
(69, 'M. Nahid hasan Hridoy', '01730265999', '', 'nahidhridoy999@gmail.com', 'Male', 'Bogura', '', 'A(+)', '', '', '', '', '', '', 'nahidhridoy999@gmail.com', 'Yes', '2023-04-17 19:31:21'),
(70, 'Fehor Ahmed', '01750637286', '', 'fehorahmed@gmail.com', 'Male', 'Dhanmondi 15, dhaka.', '', 'O(+)', '', '', '', '', '', '', 'fehorahmed@gmail.com', 'Yes', '2023-04-17 19:31:21'),
(71, 'Atique Shakil', '01521316199', '', 'atiqueshakil007@gmail.com', 'Male', 'Japan Garden city, Mohammadpur, Dhaka', '', 'O(+)', '', '', '', '', '', '', 'atiqueshakil007@gmail.com', 'Yes', '2023-04-17 19:31:21'),
(72, 'Md. Wakil Ahad', '01635227827', '', 'srabonrukaiya@gmail.com', 'Male', 'Rangpur', '', 'A(+)', '', '', '', '', '', '', 'srabonrukaiya@gmail.com', 'Yes', '2023-04-17 19:31:21'),
(73, 'Md. Nuzmus Sakib ', '01784821632', '', 'mdnuzmussakibhasan@gmail.com', 'Male', 'Shibgonj, Bogura', '', 'A(+)', '', '', '', '', '', '', 'mdnuzmussakibhasan@gmail.com', 'Yes', '2023-04-17 19:31:21'),
(74, 'Shajedur Rahman Tareq', '01521315208', '', 'shajedur@gmail.com', 'Male', 'koipara, Bogura Sadar', '', 'A(+)', '', '', '', '', '', '', 'shajedur@gmail.com', 'Yes', '2023-04-17 19:31:21'),
(75, 'Al Amin', '01521315363', '', 'alaminalomail@gmail.com', 'Male', 'Mirpur, Dhaka', '', 'B(+)', '', '', '', '', '', '', 'alaminalomail@gmail.com', 'Yes', '2023-04-17 19:31:21'),
(76, 'Atick esrak', '01771051558', '', 'atickesrakinfo@gmail.com', 'Male', 'Kamargari,bogura', '', 'AB(+)', '', '', '', '', '', '', 'atickesrakinfo@gmail.com', 'Yes', '2023-04-17 19:31:21'),
(77, 'Md Abdullah al noman', '01521315211', '', 'Abdullahalnoman000000@gmail.com', 'Male', 'Jahurul nagar bogura', '', 'O(+)', '', '', '', '', '', '', 'Abdullahalnoman000000@gmail.com', 'Yes', '2023-04-17 19:31:21'),
(78, 'MD. MUSFIQUN NOOR MONON', '01788400853', '', 'mushfiqunnoormonon@gmail.com', 'Male', 'Snigdha Residential Area, Nishindara, Bogura', '', 'O(+)', '', '', '', '', '', '', 'mushfiqunnoormonon@gmail.com', 'Yes', '2023-04-17 19:31:21'),
(79, 'Saikhul Islam Santo', '01645560330', '', 'saikhul85@gmail.com', 'Male', 'Pabna', '', 'A(+)', '', '', '', '', '', '', 'saikhul85@gmail.com', 'Yes', '2023-04-17 19:31:21'),
(80, 'S.M.Nafijul Hasan', '01521316042', '', 'nafijulhasan01@gmail.com', 'Male', 'Dhaka', '', 'O(+)', '', '', '', '', '', '', 'nafijulhasan01@gmail.com', 'Yes', '2023-04-17 19:31:21'),
(81, 'SB-Ul Islam (Turag)', '01777902705', '', 'turag@gmail.com', 'Male', '', '', 'A(-)', '', '', '', '', '', '', 'turag@gmail.com', 'Yes', '2023-04-17 19:31:21'),
(82, 'Abu musa himel', '01738283545', '', 'musahemel@gmail.com', 'Male', 'North Chelopara,Bogura', '', 'B(+)', '', '', '', '', '', '', 'musahemel@gmail.com', 'Yes', '2023-04-17 19:31:21'),
(83, 'Abdulla Al Hamid (Jasim)', '01722765275', '', 'abdullahamid765275@gmail.com', 'Male', 'Dhaka', '', 'O(+)', '', '', '', '', '', '', 'abdullahamid765275@gmail.com', 'Yes', '2023-04-17 19:31:21'),
(84, 'Shahriat Rahman', '01777902712', '', 'shahriat.shohag.001@gmail.com', 'Male', 'Uposhohor, Bogura.', '', 'AB(+)', '', '', '', '', '', '', 'shahriat.shohag.001@gmail.com', 'Yes', '2023-04-17 19:31:21'),
(85, 'Sultan Mahamud Tuhin', '01876280040', '', 'smtuhintt37@gmail.com', 'Male', 'Bogura', '', 'O(+)', '', '', '', '', '', '', 'smtuhintt37@gmail.com', 'Yes', '2023-04-17 19:31:21');

-- --------------------------------------------------------

--
-- Table structure for table `bmsc13_status`
--

CREATE TABLE `bmsc13_status` (
  `id` int(50) NOT NULL,
  `member_id` int(50) NOT NULL,
  `post_text` text NOT NULL,
  `post_image` longblob NOT NULL,
  `post_status` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bmsc13_members`
--
ALTER TABLE `bmsc13_members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bmsc13_status`
--
ALTER TABLE `bmsc13_status`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bmsc13_members`
--
ALTER TABLE `bmsc13_members`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `bmsc13_status`
--
ALTER TABLE `bmsc13_status`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
