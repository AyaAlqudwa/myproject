-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2022 at 10:20 PM
-- Server version: 5.6.26
-- PHP Version: 5.5.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE IF NOT EXISTS `department` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `detail` longtext NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `title`, `detail`, `image`) VALUES
(1, 'تطبيقات الويب', 'نظرا للتقدم المتسارع في استخدام الحاسوب كوسيلة لتداول العملومات في المجال نترىنبتيىرنتبيىرتىبنكترلاكبنتلارقلابارلابرابلارابلارابلاعهراقهعارىنتبلارهعاقعرلالابنتلارهعقارنتيىرهعقايرهسىرنتباىرعهابنترىبنتربرتبلارهعاقهرلابلارهعقبارنتبلارعابهعراثنبترلانبلاضمرنقاهعبيىرتبلارقابرعهثبكسمىاباعقابهعثنتىرنكشهقاتبهعقىرتنيلارهقباركثيع', 'a1.jpg'),
(2, 'التصميم الجرافيكي', 'يتميز  تخصص التصميم الجرافيكي بارتباطه الوثيق بتكنولوجيا المعلومات الحديثة حيث يقوم على تاهيل الطالب في مجاالات الدعاية والاعلان والمؤسسات الاعلامية نبتراىكعباركخعباركهعباكهرعالابكنعؤلارهك عبارهمعبارهعلرهكعبارهعبايرنتبلابرنت لانيعبالارنيبتلارنتبلارهعنبلاراتلابترالابكلرهكعياركثهسعباثهعابؤيلارتالاؤرتاؤلا ىؤ', 'Graphics-Design.png'),
(3, 'تطبيقات الموبايل', 'تعتبر الهواتف الذكية في الوقت الحالي من الحاجات الاساية والمقومات اليومية في الحياة  نترىنبتيىرنتبيىرتىبنكترلاكبنتلارقلابارلابرابلارابلارابلاعهراقهعارىنتبلارهعاقعرلالابنتلارهعقارنتيىرهعقايرهسىرنتباىرعهابنترىبنتربرتبلارهعاقهرلابلارهعقبارنتبلارعابهعراثنبترلانبلاضمرنقاهعبيىرتبلارقابرعهثبكسمىاباعقابهعثنتىرنكشهقاتبهعقىرتنيلارهقباركث', 'a2.jpg'),
(5, 'jkpp', 'knlk/lk', '../image/65.jpg'),
(6, 'jkoo', 'kdmc;odsjpovjdspov', '../image/6.png'),
(7, 'nmj', 'kc;kpodskop', '../image/10.png');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `id` int(11) NOT NULL,
  `head` varchar(255) NOT NULL,
  `detail` longtext NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `head`, `detail`) VALUES
(1, 'عن المركز', 'يعتير المركز الفلسطيني للتعليم المهني احد المؤسسات التي تقدم التعليم المهني الصناعي في محافظات الوطن يوجد في المرز ثلاث تخصصات رئيسية هي تطبيقات الوي بتطبيقات الموبايل التصميم الجرافيكي والعمل جاري لدعم وفتح تخصصات جديدة تخدم المحافظات يوفَّر التعليم والتدريب في المجال التقني والمهني في المؤسسات أو في أماكن العمل أو في مزيج من الاثنين. وبالنظر إلى تنوع الأطر السياسية والترتيبات المؤسسة والنهوج التنظيمية، فإن النظم الإحصائية الوطنية قد لا تستطيع التقاط سوى صورة جزئية من المشهد، ما يجعل من الصعب الخروج بمقارنة بين مختلف الدول بشأن توفير هذا النوع من التعليم'),
(2, 'اتصل بنا', 'تصنيف المركز : حكومي \r\nنوع المؤسسة : مدرسة \r\nرقم الهاتف : 6795422\r\nرقم الفاكس : 7655577\r\nالبريد الاكتروني :school@gmail.com\r\nالعنوان : محافظات الوطن');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `detail` longtext NOT NULL,
  `image` text NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `detail`, `image`, `date`) VALUES
(2, 'mn', 'jhglyguyfyt', '../image/1.jpg', '98/09/987'),
(3, 'jkdvkjdn', 'sdlkmcldskjpovdijvdnkjcbhvj dc', '../image/pexels-roman-odintsov-4551157.jpg', '89/08/20');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `depnum` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `email`, `age`, `address`, `phone`, `depnum`) VALUES
(1, 'احمد', 'mmm@gmail.com', 18, 'رام الله', 798987, 'التصميم الجرافيكي');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', '123'),
(2, 'web', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
