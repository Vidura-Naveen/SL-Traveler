-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2022 at 03:28 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `topic_id` int(11) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `published` tinyint(4) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `topic_id`, `title`, `image`, `body`, `published`, `created_at`) VALUES
(39, 67, 38, 'Sigiriya', '1642514499_1630738906_sigiriya-459197_1920.jpg', '&lt;p&gt;Sigiriya or Sinhagiri &amp;nbsp;is an ancient rock fortress located in the northern Matale District near the town of Dambulla in the Central Province, Sri Lanka. The name refers to a site of historical and archaeological significance that is dominated by a massive column of rock around 180 metres (590 ft) high.&lt;/p&gt;&lt;p&gt;According to the ancient Sri Lankan chronicle the Culavamsa, this site was selected by King Kashyapa (477 &ndash; 495 AD) for his new capital. He built his palace on the top of this rock and decorated its sides with colourful frescoes. On a small plateau about halfway up the side of this rock he built a gateway in the form of an enormous lion. The name of this place is derived from this structure &mdash; Sīnhāgiri, the Lion Rock (an etymology similar to Sinhapura, the Sanskrit name of Singapore, the Lion City).&lt;/p&gt;&lt;p&gt;The capital and the royal palace were abandoned after the king\'s death. It was used as a Buddhist monastery until the 14th century.Sigiriya today is a UNESCO listed World Heritage Site. It is one of the best preserved examples of ancient urban planning.&lt;/p&gt;', 1, '2021-09-04 13:01:15'),
(40, 66, 26, 'Ruwanweli Seya', '1630746718_360_F_293241018_US7kECq1T9EGQpV3IShAmj0M3Tp09nAT.jpg', '&lt;p&gt;The Ruwanweli Maha Seya, also known as the Mahathupa (the Great Thupa) is a stupa (a hemispherical structure containing relics) in Anuradhapura, Sri Lanka.Two quarts or one Drona of the Buddha\'s relics are enshrined in the stupa, making it the largest collection of his relics anywhere. It was built by Sinhalese King Dutugemunu in c. 140 B.C., who became king of Sri Lanka after a war in which the Chola King Elāra (Ellalan) was defeated. It is also known as Swarnamali Seya, Suvarnamali Mahaceti (in Pali) and Rathnamali Seya.&lt;/p&gt;&lt;p&gt;This is one of the &quot;Solosmasthana&quot; (the 16 places of veneration) and the &quot;Atamasthana&quot; (the 8 places of veneration). The stupa is one of the world\'s tallest ancient monuments, standing at 103 m (338 ft) and with a circumference of 290 m (951 ft). The original stupa had been about 55 m (180 ft) in height and was renovated by many kings. The Kaunghmudaw Pagoda in Sagaing, Myanmar is modelled after this stupa The Mahavamsa contains a detailed account on the construction and the opening ceremony of the stupa.&lt;/p&gt;&lt;p&gt;The stupa was covered by jungle as of the 19th century. After fundraising efforts by a bhikkhu, it was renovated in the early 20th century. The Ruwanveli Seya Restoration Society, most notably the philanthropist Hendrick Appuhamy, donated Rs 20 million (1912 ) for the restoration works, the foundation was founded in 1902 and the final crowning of the stupa took place on 17 June 1940.&lt;/p&gt;', 1, '2021-09-04 13:03:13'),
(41, 66, 33, 'Dhalada Maligawa', '1630746794_sri-dalada-maligawa-or.jpg', '&lt;p&gt;The Temple of the Sacred Tooth Relic is a world-renowned place of worship, where the left Canine tooth of Gautama Buddha is enshrined. The temple which is venerated by thousands of local &amp;amp; foreign devotees and tourists daily was named as a world heritage by UNESCO in 1988.&amp;nbsp;&lt;/p&gt;&lt;p&gt;The temple which carries a lot of value to Buddhists all over the world also has immense cultural value. The architecture is of unique Kandyan architectural style with a combination of the unique style used to build &ldquo;Dalada Mandira&rdquo; the shrines which housed the Sacred Tooth Relic previously in other kingdoms.&lt;/p&gt;&lt;p&gt;The temple of the Sacred Tooth Relic is built in the city of Kandy near the ancient Royal Palace which is situated to the North of the temple and the forest reserve called &ldquo;Udawaththa Kelaya&rdquo; to the East. The famous Kandy Lake also known as &ldquo;Kiri Muhuda&rdquo; to the South and &ldquo;Natha &amp;amp; Paththini Devala&rdquo; on the West. The temple is adorned with intricate carvings using gold, silver, bronze and ivory.&lt;/p&gt;', 1, '2021-09-04 13:35:29'),
(42, 66, NULL, 'Browns Beach', '1630746900_92509141_248671776313749_1334625227242950671_n.jpg', '&lt;p&gt;Browns Beach is one of the popular beaches in Negombo that is famous among the tourists as well as the locals. It is one of the few unspoiled private beaches in Negombo. Browns Beach is famous for its luscious golden sands, turquoise blue water and gorgeous palm trees. The beach is very close to the fishing village of Negombo and boasts of being the most popular seaside resort in Negombo.&lt;/p&gt;&lt;p&gt;The beach is famous for the Browns Beach Resort, which offers air-conditioned rooms to accommodate the guests in the tropical weather. The resort also has its very own fitness centre, executive suits, luxurious bedrooms and modern amenities. The resort offers world-class facilities that make this beach a must-visit destination for tourists.&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;', 1, '2021-09-04 14:04:24'),
(43, 66, 39, 'Mirissa', '1630746999_ggg24.jpg', '&lt;p&gt;Mirissa &amp;nbsp;is a small town on the south coast of Sri Lanka, located in the Matara District of the Southern Province. It is approximately 150 kilometres (93 mi) south of Colombo and is situated at an elevation of 4 metres (13 ft) above sea level. Mirissa\'s beach and nightlife make it a popular tourist destination. It is also a fishing port and one of the island\'s main whale and dolphin watching locations.&lt;/p&gt;&lt;p&gt;Mirissa is the largest fishing port on the south coast and is known for its tuna, mullet, snapper and butterfish. In 1979 the first tourist accommodation was built however it wasn\'t until the mid-1990s that tourism to the town started to dramatically increase.&lt;/p&gt;&lt;p&gt;Mirissa was affected by the tsunami caused by the 2004 Indian Ocean earthquake, with numerous homes, guesthouses, shops, schools and temples destroyed or damaged and fourteen reported deaths.&lt;/p&gt;', 1, '2021-09-04 14:10:47'),
(44, 66, NULL, 'Ella', '1630747096_EUm_scqX0AgyPm9.jpg', '&lt;p&gt;Alla is a small town in the Badulla District of Uva Province, Sri Lanka governed by an Urban Council. It is approximately 200 kilometres (120 mi) east of Colombo and is situated at an elevation of 1,041 metres (3,415 ft) above sea level. The area has a rich bio-diversity, dense with numerous varieties of flora and fauna. Ella is surrounded by hills covered with cloud forests and tea plantations. The town has a cooler climate than surrounding lowlands, due to its elevation. The Ella Gap allows views across the southern plains of Sri Lanka.&lt;/p&gt;', 1, '2021-09-04 14:13:07'),
(45, 66, 33, 'Kadiyanlena water Fall', '1630746489_e7fd74bd45d8f1035a34c5697367ac0d (2).jpg', '&lt;p&gt;This is a very attractive waterfall located closer to Nawalapitiya. You have to travel about 10 km in Nawalapitiya &ndash; Thalawakelle road to spot this beauty.&lt;/p&gt;&lt;p&gt;The waterfall cascades as three stages. The road goes over a three arches bridge above the third part of the waterfall. Therefore you can see only upper two parts of the waterfall from the road. But there is a path to descend to the tea plantations about 100 m before the bridge where you can try to have a better view of the waterfall in its full height.&lt;/p&gt;', 1, '2021-09-04 14:28:39');

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE `topics` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`id`, `name`, `description`) VALUES
(24, 'gampahaaaa', '<p>Gampaha District</p>'),
(25, 'Ampara', '<p>Ampara District</p>'),
(26, 'Anuadhapura', '<p>Anuadhapura District</p>'),
(28, 'batticola', '<p>batticola</p>'),
(29, 'Galle', '<p>Galle</p>'),
(30, 'Hambantota', '<p>Hambantota</p>'),
(31, 'Jaffna', '<p>Jaffna</p>'),
(32, 'Kaluthara', '<p>Kaluthara</p>'),
(33, 'kandy', '<p>kandy</p>'),
(34, 'Kegalle', '<p>Kegalle</p>'),
(35, 'Kilinochhi', '<p>Kilinochhi</p>'),
(36, 'Kurunegala', '<p>Kurunegala</p>'),
(37, 'Mannar', '<p>Mannar</p>'),
(38, 'Mathale', '<p>Mathale</p>'),
(39, 'Mathara', '<p>Mathara</p>'),
(40, 'Monaragala', '<p>Monaragala</p>'),
(41, 'Mullaitive', '<p>Mullaitive</p>'),
(42, 'Nuwara Eliya', '<p>Nuwara Eliya</p>'),
(43, 'Polonnaruwa', '<p>Polonnaruwa</p>'),
(44, 'Puththalam', '<p>Puththalam</p>'),
(45, 'Rathnapura', '<p>Rathnapura</p>'),
(46, 'Trincomalee', '<p>Trincomalee</p>'),
(47, 'Vavuniya', '<p>Vavuniyaa</p>');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `admin` tinyint(4) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `admin`, `username`, `email`, `password`, `created_at`) VALUES
(66, 1, 'admin', 'admin@gmail.com', '$2y$10$/YCRxW59kmnUqQI4NdemWOO/cJorVn8PBmEd3cZ3p4As/HEYDEnGO', '2021-09-04 09:00:22'),
(67, 0, 'vidura1@gmail.com', 'vidura1@gmail.com', '$2y$10$Qc8fY0ZERS59dSaQtJUyP.iqxwKjoTtynCclDSVp5wNY81yHFRQcm', '2022-01-17 16:12:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `topic_id` (`topic_id`);

--
-- Indexes for table `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `topics`
--
ALTER TABLE `topics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`topic_id`) REFERENCES `topics` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
