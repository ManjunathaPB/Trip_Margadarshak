-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2025 at 01:54 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlog`
--

CREATE TABLE `adminlog` (
  `auser` varchar(30) NOT NULL,
  `apass` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adminlog`
--

INSERT INTO `adminlog` (`auser`, `apass`) VALUES
('admin', 'admin'),
('manju', 'manju12');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(10) NOT NULL,
  `UserId` int(10) NOT NULL,
  `ffirst` varchar(20) NOT NULL,
  `femail` varchar(30) NOT NULL,
  `city` varchar(20) NOT NULL,
  `nophone` varchar(20) NOT NULL,
  `fdesti` varchar(20) NOT NULL,
  `bdate` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `UserId`, `ffirst`, `femail`, `city`, `nophone`, `fdesti`, `bdate`) VALUES
(1, 0, 'Manjunatha P B', 'mpb7259@gmail.com', 'Sagar', '7589828584', 'Chikmagalur', '2024-09-22 15:03:05.773896'),
(2, 0, 'Rakshith', 'vishnupriyarkmv@gmail.com', 'Ramanagar', '7895461123', 'Kerala', '2024-09-22 15:19:12.144077'),
(3, 0, 'Manjunatha P B', 'mpb7259@gmail.com', 'Sagar', '7589828584', 'Chikmagalur', '2024-09-23 04:51:05.770190');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(10) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `password` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `city` varchar(10) NOT NULL,
  `phone` bigint(12) NOT NULL,
  `code` varchar(200) DEFAULT NULL,
  `rdate` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `fname`, `password`, `email`, `city`, `phone`, `code`, `rdate`) VALUES
(1, 'Manjunatha P B', '1212', 'mpb7259@gmail.com', 'Sagar', 7589828584, NULL, '2024-09-22 15:02:34.120313'),
(2, 'Rakshith', '123123', 'vishnupriyarkmv@gmail.com', 'Ramanagar', 7895461123, NULL, '2024-09-22 15:07:39.626217'),
(3, 'manju', '121212', 'mn@gmail.com', 'sagar', 9856565565, NULL, '2025-01-31 15:38:03.037307');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `feedbk` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `feedbk`) VALUES
(1, 'Manjunatha P B', 'mpb7259@gmail.com', 'Good Experience');

-- --------------------------------------------------------

--
-- Table structure for table `hotels`
--

CREATE TABLE `hotels` (
  `hid` int(200) NOT NULL,
  `hname` varchar(200) NOT NULL,
  `hphone` bigint(12) NOT NULL,
  `hcity` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hotels`
--

INSERT INTO `hotels` (`hid`, `hname`, `hphone`, `hcity`) VALUES
(1, 'Sri sai', 7259914511, 'Chikkamangaluru');

-- --------------------------------------------------------

--
-- Table structure for table `information`
--

CREATE TABLE `information` (
  `pname` varchar(30) NOT NULL,
  `pdescription` varchar(10000) NOT NULL,
  `pi_main` varchar(1000) NOT NULL,
  `package` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `information`
--

INSERT INTO `information` (`pname`, `pdescription`, `pi_main`, `package`) VALUES
('Hampi', 'Hampi is the town of ruins of the Vijayanagara Empire, one of India’s most known archaeological destinations2.\r\nHampi is a UNESCO heritage site and a wildlife sanctuary12.\r\nHampi has musical pillars that produce different sounds when tapped1.\r\nHampi is an ancient city that dates back to the 3rd century BC1.\r\nHampi has other names such as Pampa, Kishkinda, and Bhaskara Kshetra', 'hampi1.jpg', 5999),
('Mysore', 'Mysore Palace: The former residence of the Wodeyar kings and one of the largest and most splendid palaces in India. \r\nChamundeshwari Temple: A hilltop temple dedicated to the goddess Chamundeshwari.\r\nThe village is named after Somnath, the commander of the Hoysala army who founded this place. It has a perfect natural setting for a family picnic. Also, the Somnathpur temple is a classic example of the stone carvings in Hoysala architecture.\r\n', 'mysore5.jpg', 4999),
('Kerala', 'Munnar is a town and hill station in the Idukki district of the southwestern Indian state of Kerala. Munnar is situated at around 1,600 metres (5,200 ft) above mean sea level,[4] in the Western Ghats mountain range. Munnar is also called the \"Kashmir of South India\" and is a popular honeymoon destination.\r\nThese protected areas are especially known for several threatened and endemic species including Nilgiri Thar, the grizzled giant squirrel, the Nilgiri wood-pigeon, elephant, the gaur, the Nilgiri langur, the sambar, and the neelakurinji (that blossoms only once in twelve years).', 'kerala.jpg', 6999),
('Dakshina kannada', 'Kadri Manjunath Temple: A Hindu temple dedicated to Lord Shiva, dating back to the 10th century1.\r\nSultan Battery: A watchtower built by Tipu Sultan in the 18th century, overlooking the Gurupura river2.\r\nKudroli Gokarnath Temple: A temple built by a philanthropist in 1912, with a beautiful architecture and a large pond3.\r\nKudle Beach: A serene beach near Gokarna, popular for surfing and yoga3.\r\nOm Beach: A beach shaped like the Hindu symbol Om, with rocky cliffs and clear water\r\nKumara Parvatha: A mountain peak in the Western Ghats, ideal for trekking and camping', 'dk3.jpeg', 4599),
('Uttara kannada', 'Sharavathi for backwaters boating Dandeli for White River Rafting Kudle Beach, Gokarna for kayaking Gokarna Beach for Trekking Nethrani Island for Scuba Diving Skyes View Point for Sightseeing Dandeli Wildlife Sanctuary for Bird Watching Kurumgad Island for boat rides Kodachari Hill for trekking Devbagh Beach for Snorkelling Syntheri Rocks for trekking Yana for Rock Climbing Warship Museum in Karwar for Sightseeing Murudeshwara for Water Sports Anashi National Park for Wildlife Watching Ganesha Gudi for Bird watching', 'dk2.jpeg', 4000),
('Kolukkumalai', 'Kolukkumalai is a small village in the Theni District of Tamil Nadu, on the border of Idukki District, Kerala. At 7,000 ft above sea level, it is home to the highest tea plantations in the world. The natural beauty here is intoxicating, promising a beautiful sunrise overlooking the Palani hills. The aromatic breeze in this hill-station is unique and fresh, causing the tea in the Kolukkumalai Tea Estate to be special, and guests to feel special.', 'ma4.jpeg', 5499),
('Maharastra', 'Maharashtra is a state in western India that offers many opportunities for trekking enthusiasts. Some of the best trekking places in Maharashtra are:\r\n\r\n1. Ratangarh Fort\r\n2. Brahmagiri Hill\r\n3. Rajgard Fort\r\n4. Vasota Fort\r\n5. Visapur Fort\r\n6. Prabalgad Fort', 'ma.jpeg', 6999),
('Jogfalls', 'Jog Falls is a waterfall on the Sharavati River in the Western Ghats Siddapur Taluk in Uttara Kannada district, with a vantage point in Shimoga district’s Sagara Taluk. It is India’s second tallest plunge waterfall. It is a segmented waterfall that, depending on the rain and season, transforms into a plunge waterfall. The falls are popular with visitors, and the waterfall database ranks them 36th in the list of free-falling waterfalls, 490th in the list of waterfalls by total height, and 128th in the list of single-drop waterfalls in the world. Jog Falls is formed by the Sharavati, which drops 253 metres, making it the third-highest waterfall in India behind the Nohkalikai Falls in Meghalaya, which drops 335 metres, and the Dudhsagar Waterfalls in Goa, which drops 310 metres. Read more about Jog Falls in Karnataka below.\r\n\r\n', 'jogfalls4.jpg', 2999),
('Chikmagalur', 'Lying on the foot hills of the Mullayanagiri range, Chikmagalur is a small, distinctive and beautiful city, famous for its coffee plantations. The city was earlier known as the Kadur district and post independence was renamed Chikkamagaluru.\r\n', 'dk.jpg', 3500);

-- --------------------------------------------------------

--
-- Table structure for table `places`
--

CREATE TABLE `places` (
  `pid` int(30) NOT NULL,
  `pname` varchar(200) NOT NULL,
  `pcity` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `travel_agent`
--

CREATE TABLE `travel_agent` (
  `aid` int(10) NOT NULL,
  `afname` varchar(20) NOT NULL,
  `aemail` varchar(30) NOT NULL,
  `aphone` varchar(15) NOT NULL,
  `acity` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `travel_agent`
--

INSERT INTO `travel_agent` (`aid`, `afname`, `aemail`, `aphone`, `acity`) VALUES
(1, 'Manju', 'mpb7259@gmail.com', '8147858242', 'Sagar');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotels`
--
ALTER TABLE `hotels`
  ADD PRIMARY KEY (`hid`);

--
-- Indexes for table `travel_agent`
--
ALTER TABLE `travel_agent`
  ADD PRIMARY KEY (`aid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hotels`
--
ALTER TABLE `hotels`
  MODIFY `hid` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `travel_agent`
--
ALTER TABLE `travel_agent`
  MODIFY `aid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
