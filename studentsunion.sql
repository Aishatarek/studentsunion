-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2022 at 04:56 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studentsunion`
--

-- --------------------------------------------------------

--
-- Table structure for table `candidates`
--

CREATE TABLE `candidates` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` int(9) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `department_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `candidates`
--

INSERT INTO `candidates` (`id`, `name`, `code`, `email`, `password`, `photo`, `department_id`) VALUES
(5, 'sara', 174707399, 'sara111@gmail.com', '202cb962ac59075b964b07152d234b70', '880Project Professional - Project3.mpp 5_6_2022 9_28_39 PM.png', 3),
(6, 'Aisha tarek', 571844650, 'aisha@gmail.com', '202cb962ac59075b964b07152d234b70', '914Project Professional - Project1.mpp 5_6_2022 8_51_47 PM.png', 1),
(7, 'dina', 427558969, 'dina83@gmail.com', '202cb962ac59075b964b07152d234b70', NULL, 4),
(9, 'nada', 296510069, 'nada@gmail.com', '202cb962ac59075b964b07152d234b70', NULL, 3),
(10, 'sara', 131681332, 'sara1313@gmail.com', '202cb962ac59075b964b07152d234b70', '649Project Professional - Project3.mpp 5_6_2022 9_28_39 PM.png', 1),
(11, 'sara', 550477803, 'sara1565@gmail.com', '202cb962ac59075b964b07152d234b70', '183section_2.docx - Word 5_8_2022 8_08_01 AM.png', 8),
(14, 'sara', 100000004, 'aisha1123@gmail.com', '202cb962ac59075b964b07152d234b70', '382section_2.docx - Word 5_8_2022 8_08_01 AM.png', 3),
(15, 'Fffffcdddddd', 199900008, 'fffff@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '506section_2.docx - Word 5_8_2022 8_08_01 AM.png', 4);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `title`, `description`) VALUES
(1, 'لجنة الأسر والاتحادات الطلابية', 'تهتم اللجنة بتشجيع الطلاب على تكوين أسر طلابية على مستوى الكلية وتعمل اللجنة على إعداد برامج ملائمة من شأنها الربط والتواصل بين أسر الكلية وأسر كليات الجامعة وإعداد برامج ملائمة من شأنها إعداد الطالب لتحمل المسئولية فى المستقبل وصقل هذه القيادات من الطلاب للارتقاء بهم إلى مستوى عالى من القدرة على تحمل المسئولية واتخاذ القرار وتنفيذ المشروعات والأنشطة.'),
(3, 'لجنة النشاط الرياضى', 'يعتبر النشاط الرياضي بصفة عامة وسيلة ترويح عن النفس محببة لكثير من أفراد المجتمع، وبصفة خاصة فئة الشباب. ومما لا شك فيه، أن دور الجامعة لا يقتصر على العملية التعليمية وتلقين الدروس، ولكن يمتد دورها إلى تحقيق أهداف عظيمة، حيث تساهم في بناء شخصية متكاملة للطالب حتى يكون قادراً على الإبداع في كافة المجالات. لذلك، توفر الجامعه العديد من الأنشطة الطلابية اللاصفية للطلاب، ومنها النشاط الرياضي والنشاط الثقافي والاجتماعي'),
(4, 'لجنة النشاط الثقافى والاعلام', 'قاتهدف اللجنة إلى توسيع مدارك الطلاب الفكرية والأدبية وتنمية عقولهم وذلك من خلال عقد الندوات واللقاءات الثقافية وإعداد المسابقات بين الطلاب فى شتى المجالات (القصة – الشعر – المقال – الأبحاث – القرآن الكريم – دورى النوابغ – نادى الأدب).'),
(8, 'department', 'departmentf');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` int(9) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `role` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `code`, `email`, `password`, `photo`, `role`) VALUES
(1, 'admin', 333127209, 'admin@gmail.com', '0192023a7bbd73250516f069df18b500', NULL, 1),
(2, 'Aisha tarek', 619698075, 'aisha@gmail.com', '25d55ad283aa400af464c76d713c07ad', NULL, 0),
(5, 'Aisha tarekj', 735249184, 'aisha123@gmail.comm', '202cb962ac59075b964b07152d234b70', '464section_2.docx - Word 5_8_2022 8_08_01 AM.png', 0),
(16, 'sara', 343596217, 'sara123@gmail.com', '202cb962ac59075b964b07152d234b70', '731Project Professional - Project3.mpp 5_6_2022 9_28_39 PM.png', 0),
(17, 'sara123', 990452199, 'sara1113@gmail.com', '202cb962ac59075b964b07152d234b70', '567pexels-photo-691668.jpeg', 0),
(18, 'aisha123', 111111111, 'aisha1133@gmail.com', '202cb962ac59075b964b07152d234b70', '640section_2.docx - Word 5_8_2022 8_08_01 AM.png', 0),
(19, 'Fffffcdddddd', 100000006, 'asg123@gmail.com', '202cb962ac59075b964b07152d234b70', '790Screenshot 5_11_2022 9_01_13 AM.png', 0),
(20, 'Fffffcdddddd', 100000006, 'sara112334@gmail.com', '202cb962ac59075b964b07152d234b70', '858section_2.docx - Word 5_8_2022 8_08_01 AM.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `votes`
--

CREATE TABLE `votes` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `candidate_id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `votes`
--

INSERT INTO `votes` (`id`, `user_id`, `candidate_id`, `department_id`) VALUES
(8, 1, 7, 4),
(9, 1, 5, 3),
(10, 1, 6, 1),
(12, 16, 6, 1),
(13, 16, 5, 3),
(14, 16, 7, 4),
(15, 16, 11, 8),
(16, 17, 10, 1),
(17, 17, 5, 3),
(18, 17, 7, 4),
(19, 17, 11, 8);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `candidates`
--
ALTER TABLE `candidates`
  ADD PRIMARY KEY (`id`),
  ADD KEY `department_id` (`department_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `votes`
--
ALTER TABLE `votes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `candidate_id` (`candidate_id`),
  ADD KEY `department_id` (`department_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `candidates`
--
ALTER TABLE `candidates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `votes`
--
ALTER TABLE `votes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `candidates`
--
ALTER TABLE `candidates`
  ADD CONSTRAINT `candidates_ibfk_1` FOREIGN KEY (`department_id`) REFERENCES `department` (`id`);

--
-- Constraints for table `votes`
--
ALTER TABLE `votes`
  ADD CONSTRAINT `votes_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `votes_ibfk_2` FOREIGN KEY (`candidate_id`) REFERENCES `candidates` (`id`),
  ADD CONSTRAINT `votes_ibfk_3` FOREIGN KEY (`department_id`) REFERENCES `department` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
