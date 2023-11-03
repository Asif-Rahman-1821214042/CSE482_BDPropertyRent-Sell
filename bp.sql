-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2023 at 11:13 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bp`
--

-- --------------------------------------------------------

--
-- Table structure for table `booklist`
--

CREATE TABLE `booklist` (
  `p_id` int(11) DEFAULT NULL,
  `b_id` int(11) NOT NULL,
  `aprv` int(11) DEFAULT NULL,
  `pay_aprv` int(11) DEFAULT NULL,
  `o_id` int(25) DEFAULT NULL,
  `o_msg` text DEFAULT NULL,
  `b_msg` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booklist`
--

INSERT INTO `booklist` (`p_id`, `b_id`, `aprv`, `pay_aprv`, `o_id`, `o_msg`, `b_msg`) VALUES
(14, 2, 1, 0, 7, NULL, NULL),
(15, 2, 1, 0, 12, NULL, NULL),
(14, 9, 1, 0, 7, 'how are u?\r\n', 'hey\r\n'),
(15, 9, 0, 0, 12, NULL, NULL),
(19, 2, 1, 0, 7, NULL, NULL),
(19, 9, 1, 0, 7, NULL, NULL),
(22, 9, 1, 0, 7, NULL, NULL),
(17, 9, 0, 0, 14, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `catalog`
--

CREATE TABLE `catalog` (
  `cid` int(11) NOT NULL,
  `c_name` varchar(255) DEFAULT NULL,
  `c_detail` text DEFAULT NULL,
  `url1` varchar(255) DEFAULT NULL,
  `url2` varchar(255) DEFAULT NULL,
  `url3` varchar(255) DEFAULT NULL,
  `c_oid` int(11) DEFAULT NULL,
  `c_type` varchar(255) DEFAULT NULL,
  `c_price` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `catalog`
--

INSERT INTO `catalog` (`cid`, `c_name`, `c_detail`, `url1`, `url2`, `url3`, `c_oid`, `c_type`, `c_price`) VALUES
(4, 'Room Decor', 'All furniture and all desiging equpment will used. To give your house a nice touch of standard beauty', 'h2.jpg', 'r1.jpg', 'room2.jpg', 7, 'Appartment', 4000),
(5, 'Appartment Decor', 'Full house decoration with every furniture and technology as owner required. This is a way to make your house more elegant.', 'app.jpg', '1fe1b4ef-7533-47bc-ae95-ed58f2c4129b.jpg', 'app.jpg', 7, 'Appartment', 1000),
(6, 'Office decor', 'office is a workstation and all the production, managment starts from here. People spent his much of time in office . So for good working for each and every employee , office environmet and interior must look good and comfort. The interior should in a way that people dont feel they are way from home. So, this interior will give work environment a standard and metal piece environment.', 'r2.jpg', 'room3.jpg', 'pichome.jpg', 12, 'Office', 5000),
(7, 'Natural Decor', 'The look of apartment from inside and out have natural feel.', '2b1e2271-cec4-4e9f-a64a-611e02ef857f.jpg', '2b1e2271-cec4-4e9f-a64a-611e02ef857f.jpg', '2b1e2271-cec4-4e9f-a64a-611e02ef857f.jpg', 14, 'Appartment', 6000),
(8, 'Office Interior', 'Make ur office more elegant with elegant interior.', '1fe1b4ef-7533-47bc-ae95-ed58f2c4129b.jpg', '1fe1b4ef-7533-47bc-ae95-ed58f2c4129b.jpg', '1fe1b4ef-7533-47bc-ae95-ed58f2c4129b.jpg', 14, 'Office', 3500),
(9, 'Hall Decor', 'A nice beautiful hall for rooftop hall. It will fully beatify with nature.', '4bb04470-ccc7-4bd3-857b-44e8c86924b6.jpg', '4da50988-b70c-473c-b295-24edd90388ed.jpg', '62532697-9dee-4b7b-95c7-797239f526db.jpg', 7, 'Office', 1500);

-- --------------------------------------------------------

--
-- Table structure for table `catalog_book`
--

CREATE TABLE `catalog_book` (
  `buyr_id` int(11) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `card_number` varchar(255) NOT NULL,
  `card_expmonth` varchar(255) NOT NULL,
  `card_expyear` varchar(255) NOT NULL,
  `stat` varchar(255) DEFAULT NULL,
  `transid` varchar(255) DEFAULT NULL,
  `added_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `catalog_book`
--

INSERT INTO `catalog_book` (`buyr_id`, `cat_id`, `card_number`, `card_expmonth`, `card_expyear`, `stat`, `transid`, `added_date`) VALUES
(2, 4, '4242424242424242', '10', '23', 'succeeded', 'ch_3NxslYFGNkysYLrU1QmHz1Jk', '2023-10-05 16:43:05'),
(2, 5, '4242424242424242', '10', '23', 'succeeded', 'ch_3NxtBVFGNkysYLrU1660XGck', '2023-10-05 17:09:54'),
(9, 4, '4242424242424242', '10', '23', 'succeeded', 'ch_3NzLtOFGNkysYLrU0rHDpv1b', '2023-10-09 18:01:15'),
(9, 5, '4242424242424242', '02', '24', 'succeeded', 'ch_3Nzb2PFGNkysYLrU1fltrN1t', '2023-10-10 10:11:32'),
(9, 6, '4242424242424242', '10', '24', 'succeeded', 'ch_3NzcCIFGNkysYLrU1SqG8KpB', '2023-10-10 11:25:50'),
(9, 7, '4242424242424242', '10', '23', 'succeeded', 'ch_3O10EyFGNkysYLrU1wa8qtuf', '2023-10-14 07:18:22'),
(2, 7, '4242424242424242', '10', '25', 'succeeded', 'ch_3O1WjyFGNkysYLrU0LYm8wkI', '2023-10-15 18:00:31'),
(15, 9, '4242424242424242', '10', '26', 'succeeded', 'ch_3O25exFGNkysYLrU1JCeIo9Y', '2023-10-17 07:17:40'),
(15, 4, '4242424242424242', '02', '24', 'succeeded', 'ch_3O28MTFGNkysYLrU1LaFo6Py', '2023-10-17 10:10:46'),
(15, 5, '4242424242424242', '03', '24', 'succeeded', 'ch_3O28OCFGNkysYLrU1R64s7qE', '2023-10-17 10:12:34'),
(2, 6, '4242424242424242', '03', '24', 'succeeded', 'ch_3O28cBFGNkysYLrU0TT5VpSm', '2023-10-17 10:27:01');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `b_id` int(11) DEFAULT NULL,
  `b_name` varchar(255) DEFAULT NULL,
  `b_email` varchar(255) DEFAULT NULL,
  `b_phn` varchar(255) DEFAULT NULL,
  `o_id` int(11) DEFAULT NULL,
  `o_name` varchar(255) DEFAULT NULL,
  `o_email` varchar(255) DEFAULT NULL,
  `o_phn` varchar(255) DEFAULT NULL,
  `p_adr` varchar(255) DEFAULT NULL,
  `p_size` int(255) DEFAULT NULL,
  `p_max` int(255) DEFAULT NULL,
  `p_min` int(255) DEFAULT NULL,
  `p_type` varchar(255) DEFAULT NULL,
  `p_oftyp` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`b_id`, `b_name`, `b_email`, `b_phn`, `o_id`, `o_name`, `o_email`, `o_phn`, `p_adr`, `p_size`, `p_max`, `p_min`, `p_type`, `p_oftyp`) VALUES
(2, 'asfaq', 'm@gmail.com', '01777076628', 7, 'doctor', 'd@gmail.com', '01777076628', 'Basundhara main office, Dhaka', 3000, 4000, 5000, 'Appartment', 'sell'),
(9, 'salam', 's@gmail.com', '01777076628', 7, 'Amzad', 'd@gmail.com', '01777076628', 'puran dhaka', 3000, 2000, 1230, 'Appartment', 'sell');

-- --------------------------------------------------------

--
-- Table structure for table `persons`
--

CREATE TABLE `persons` (
  `p_id` int(11) NOT NULL,
  `url` varchar(255) DEFAULT NULL,
  `url1` varchar(255) DEFAULT NULL,
  `url2` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `size` int(255) DEFAULT NULL,
  `min_p` int(255) DEFAULT NULL,
  `max_p` int(255) DEFAULT NULL,
  `p_typ` varchar(255) DEFAULT NULL,
  `of_type` varchar(255) DEFAULT NULL,
  `detail` text DEFAULT NULL,
  `o_id` int(11) NOT NULL,
  `lat` varchar(255) DEFAULT NULL,
  `lng` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `persons`
--

INSERT INTO `persons` (`p_id`, `url`, `url1`, `url2`, `address`, `size`, `min_p`, `max_p`, `p_typ`, `of_type`, `detail`, `o_id`, `lat`, `lng`) VALUES
(14, 'Screenshot 2023-05-16 125641.png', 'Screenshot 2023-05-16 125713.png', 'Screenshot 2023-05-16 125737.png', 'Mohammadpur, dhaka', 1000, 1200, 2000, 'Appartment', 'sell', '5 rooms, 3 Varanda, 1 drawing & 1 dining room, 10 th floor of an apartment building ', 7, '23.766044978492133', '90.35888899114741'),
(15, 'room1.jpg', 'room2.jpg', 'room3.jpg', 'Abdur Sadek Road, D block, Bashundhara', 3200, 8500, 9500, 'Appartment', 'sell', '3 rooms, 2 Varanda, 1 drawing & 1 dining room, 4th floor of an apartment building ', 12, '23.818899099488963', '90.43186268274987'),
(16, 'r1.jpg', 'r2.jpg', 'r3.jpg', 'North Bhashantek, Mirpur, Dhaka', 1700, 3000, 3500, 'Plot', 'sell', '4 rooms, 3 bathroom, 1 dinning & 1 drawing, 18hrs lift facility, 24hrs security and 5th floor of bismillah tower', 12, '23.81436689370133', '90.39344516740603'),
(17, 'IMG_1530.JPEG', 'IMG_1530.JPEG', 'IMG_1530.JPEG', 'Baridhara DOH, Dhaka', 2500, 2000, 2500, 'Appartment', 'sell', '4th floor, 24hrs security & lift facility, Flat no. 4A. This flat has 3 bedrooms with an attached bathroom, 2 veranda, 1 dining, and drawing.', 14, '23.815017801540463', '90.41104228672789'),
(18, '4da50988-b70c-473c-b295-24edd90388ed.jpg', '061be1ae-9890-4702-9dba-69da8fdfe547.jpg', '683d643b-b52f-4adc-922c-a5edd45e671a.jpg', 'Naraingonj, dhaka', 1000, 2500, 3000, 'Office', 'sell', 'Main City, 3rd floor', 7, '23.642536662621122', '90.48650445545076'),
(19, '7aa2fc84-a6f4-4b3b-b761-ed7f8ec78ba3.jpg', '7aa2fc84-a6f4-4b3b-b761-ed7f8ec78ba3.jpg', '7aa2fc84-a6f4-4b3b-b761-ed7f8ec78ba3.jpg', 'manikdi, Dhaka', 3000, 2000, 2500, 'Appartment', 'rent', '3 rooms, 2 varanda, 1 dinnig and 1 drawing', 7, '23.825533559076593', '90.38956682302253'),
(22, 'IMG-20230720-WA0230.jpg', '4742d457-98da-49da-9570-da217a808784.jpg', '683d643b-b52f-4adc-922c-a5edd45e671a.jpg', 'baganbari mirpur, dhaka', 3000, 4000, 5500, 'Hall Room', 'rent', '2 change-room, 6 toilets,5th floor', 7, '23.783383744304896', '90.43324973934052'),
(23, '598955fe-880c-4cb2-8dcc-0ee37075997e.jpg', '5028d923-dc17-468a-bdbe-1bb9d3643999.jpg', 'f4612d38-9dea-4a83-98f1-2efef6ee9f77.jpg', 'dhanmondi, Dhaka', 1200, 1000, 1200, 'Plot', 'rent', '3 bedroom, 1 dinning & drawing, 8th floor with full time facility', 7, '23.745728462071263', '90.37678234316704'),
(24, '62532697-9dee-4b7b-95c7-797239f526db.jpg', '62532697-9dee-4b7b-95c7-797239f526db.jpg', '62532697-9dee-4b7b-95c7-797239f526db.jpg', 'dhanmondi, Lake par, Dhaka', 2500, 1400, 1500, 'Appartment', 'sell', '3 Rooms, 1 drwaing and 1 dinning, 2nd floor, service and lift facility also there', 30, '23.748200862679663', '90.37788866405059');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phn` varchar(255) DEFAULT NULL,
  `typ` varchar(255) DEFAULT NULL,
  `pass` varchar(255) DEFAULT NULL,
  `c_pass` varchar(255) DEFAULT NULL,
  `ulr` varchar(250) DEFAULT NULL,
  `qs` varchar(255) DEFAULT NULL,
  `ans` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`id`, `username`, `email`, `address`, `phn`, `typ`, `pass`, `c_pass`, `ulr`, `qs`, `ans`) VALUES
(2, 'rat', 'm1@gmail.com', 'bagmara, mymensingh', '01777076628', 'b', '$2y$10$dOO5K0qorS7W4FH.Z.271.Z5g5qPZ85kbuGFt/PtRwI4bHBopcvEi', 'm14562', 'Picture3.jpg', 'Who is your childhood best friend?', 'Tahmid'),
(7, 'Amzad', 'amzad@gmail.com', 'Agrabad, Chittagong', '01777076630', 's', '$2y$10$DQ95HG/fE7lmW191DxE3WeROs61crCef0VyFmunD6xzmi1XfKf0q2', '365365', 'IMG-20230720-WA0014.jpg', 'What is your favroute food?', 'mango'),
(9, 'salam', 's@gmail.com', 'Badda, Dhaka', '01977076628', 'b', '$2y$10$AZPcYyZYHdwwH3h36U7fNeSISX1YmYn54fwFNWDVRYdHqTjOc6efm', 'mbappe', 'Screenshot 2023-06-21 094830.png', 'Which Anmie do you like most in your childhood?', 'DemonSlayer'),
(10, 'asfaq2', 'asif.rahman10@northsouth.edu', 'Mirpur, DOH', '01711703098', 'b', '$2y$10$GricRLKG1ZqCsxaRwP3kqevf7MuDE1n2BfVlo4739FilomVO9i3BW', '234234', 'Screenshot 2023-07-07 160022.png', 'Which Anmie do you like most in your childhood?', 'Naruto'),
(11, 'admin1', 'ad1@gmail.com', 'gazipur,dhaka', '01977076628', 'a', '$2y$10$YGNB9e3LIPddWGC9hSHHTOCCEkXCFb6CmbjPaQ9WTXmbAfwuj4KIO', 'admin123', 'Screenshot (113).png', 'Who is your childhood best friend?', 'sifu'),
(12, 'eng.bks', 'b@gmail.com', 'Agrabad, Chittagong', '01777076628', 's', '$2y$10$OiJIBep41CkAaGoVgDkaNe4qFj/y4oc6zSgN34.pfJsvhVZQGdNFO', '456', 'Screenshot 2023-06-26 133406.png', 'What is your favroute food?', 'Apple'),
(14, 'kmm', 'kmm@gmail.com', 'Basundhara, Dhaka', '01677076628', 's', '$2y$10$En2UcmgMLiuHQlkV8pdcJegth1Fu4JF9eDs59htr4B8yoPCpDYoIi', '333', 'Screenshot 2023-07-02 201133.png', 'What is your favroute food?', 'Orange'),
(15, 'Sharon', 'shr@gmail.com', 'badda', '01877886699', 'b', '$2y$10$28wjOMKUuW87atqZu8lrieBGXCcpKhPnQRcU1N4IdHUeoE6.YLdBu', 'shr111', 'Screenshot 2023-08-23 224825.png', 'Which Anmie do you like most in your childhood?', 'dragonBallZ'),
(17, 'admin2', 'ad2@gmail.com', 'matikata', '01377076628', 'a', '$2y$10$b4ilo7aERMCGacS7gZkknumn0iBGIcsvQ2VRsHk9P/Z7ZekJLIMNq', 'ratmodo', '683d643b-b52f-4adc-922c-a5edd45e671a.jpg', 'Who is your childhood best friend?', 'nova'),
(30, 'Harry', 'mamba@northsouth.com', 'Mirpur, DOH', '01711703098', 's', '$2y$10$G1OOfZ8o5vaePs3XvKKSYuLH3aca95RehxJSYbtIkPquRntWYtg22', '365365', 'ac6839ad-adb0-408b-bd9c-c5b90eb70295.jpg', 'Who is your childhood best friend?', 'Kalam'),
(31, 'Brmuda', 'brmuda@gmail.com', 'ECB Chattor, Mirpur, Dhaka', '01993664846', 'b', '$2y$10$IwsEJxXqNXo5P1pGcawloucEVbowtZuK1O2dELFZgs6VZmmos3ZqG', 'bar356', '16d9f789-fbb1-4ac1-8c6f-4b1a6b1a404e.jpg', 'What is your favroute food?', 'Orange');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booklist`
--
ALTER TABLE `booklist`
  ADD KEY `p_id` (`p_id`),
  ADD KEY `b_id` (`b_id`),
  ADD KEY `o_id` (`o_id`);

--
-- Indexes for table `catalog`
--
ALTER TABLE `catalog`
  ADD PRIMARY KEY (`cid`),
  ADD KEY `c_oid` (`c_oid`);

--
-- Indexes for table `catalog_book`
--
ALTER TABLE `catalog_book`
  ADD KEY `buyr_id` (`buyr_id`),
  ADD KEY `cat_id` (`cat_id`);

--
-- Indexes for table `persons`
--
ALTER TABLE `persons`
  ADD PRIMARY KEY (`p_id`),
  ADD KEY `o_id` (`o_id`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `catalog`
--
ALTER TABLE `catalog`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `persons`
--
ALTER TABLE `persons`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booklist`
--
ALTER TABLE `booklist`
  ADD CONSTRAINT `booklist_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `persons` (`p_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `booklist_ibfk_2` FOREIGN KEY (`b_id`) REFERENCES `userinfo` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `booklist_ibfk_3` FOREIGN KEY (`o_id`) REFERENCES `userinfo` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `catalog`
--
ALTER TABLE `catalog`
  ADD CONSTRAINT `catalog_ibfk_1` FOREIGN KEY (`c_oid`) REFERENCES `userinfo` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `catalog_book`
--
ALTER TABLE `catalog_book`
  ADD CONSTRAINT `catalog_book_ibfk_1` FOREIGN KEY (`buyr_id`) REFERENCES `userinfo` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `catalog_book_ibfk_2` FOREIGN KEY (`cat_id`) REFERENCES `catalog` (`cid`) ON DELETE CASCADE;

--
-- Constraints for table `persons`
--
ALTER TABLE `persons`
  ADD CONSTRAINT `persons_ibfk_1` FOREIGN KEY (`o_id`) REFERENCES `userinfo` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
