-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2023 at 05:44 PM
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
-- Database: `card`
--

-- --------------------------------------------------------

--
-- Table structure for table `card`
--

CREATE TABLE `card` (
  `id` int(15) NOT NULL,
  `q1` varchar(1000) NOT NULL,
  `a1` varchar(1000) NOT NULL,
  `a2` varchar(1000) NOT NULL,
  `a3` varchar(1000) NOT NULL,
  `a4` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `card`
--

INSERT INTO `card` (`id`, `q1`, `a1`, `a2`, `a3`, `a4`) VALUES
(1, 'ကိုယ့်အကြောင်းအများဆုံးဘာတွေပြောနေတတ်ကြလဲ', 'မြင်ရသလောက်ပဲပြောရရင် သင့်ကို \'သူ့ရုပ်သူ့ရည်သူ့အခြေအနေအနေအထားနဲ့ဆိုရွေးချယ်စရာတွေပေါနေမှာကို ဘာလို့တစ်ယောက်တည်းပဲနေနေတာလဲမသိဘူး\'တဲ့', 'သင့်ကို \'မာနကြီးပြီးစကားလည်းသိပ်မပြောတတ်တဲ့အပြင်ဘယ်သူနဲ့မှလည်းအဆင်ပြေအောင်မနေတတ်ဘူး\'လို့ပြောနေကြပါတယ် ... ', 'ပတ်ဝန်းကျင်အမြင်မှာ သင်က သားသမီးကောင်းလို့နာမည်ကောင်းလေးမဆိုစလောက်ရထားပါတယ်', 'သင်တို့ကရုပ်ဆိုးဆိုးရုပ်ချောချော သင့်ကိုအပျော်အပါးလိုက်စားသူ၊ရည်းစားများမယ့်သူပဲ၊မျက်နှာများမယ့်သူပဲလို့ပတ်ဝန်းကျင်ကထင်နေကြပါတယ်');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `card`
--
ALTER TABLE `card`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `card`
--
ALTER TABLE `card`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
