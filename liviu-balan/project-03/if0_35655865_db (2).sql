-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Gazdă: sql111.byetcluster.com
-- Timp de generare: mart. 29, 2024 la 09:57 AM
-- Versiune server: 10.4.17-MariaDB
-- Versiune PHP: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Bază de date: `if0_35655865_db`
--

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `meniul de jos`
--

CREATE TABLE `meniul de jos` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `ord` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Eliminarea datelor din tabel `meniul de jos`
--

INSERT INTO `meniul de jos` (`id`, `name`, `link`, `ord`) VALUES
(1, 'Contact', 'contact.php', 1),
(2, 'Privacy Policy', 'alerts.php', 2);

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `ord` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Eliminarea datelor din tabel `menu`
--

INSERT INTO `menu` (`id`, `name`, `link`, `ord`) VALUES
(1, 'Acasa', 'about.php', 1),
(2, 'Magazin', 'shop.php', 2),
(3, 'Evenimente', 'blog-left-sidebar.php', 3),
(4, 'Blog', 'blog-full-width.php', 4);

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `ord` int(11) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `image` varchar(255) NOT NULL,
  `visible` tinyint(3) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Eliminarea datelor din tabel `products`
--

INSERT INTO `products` (`id`, `name`, `ord`, `description`, `price`, `image`, `visible`) VALUES
(1, 'All doll Up', 1, 'Buchet compus din mix flori de sezon, diferite culori si texturi, cu insert de verdeata, ambalat in hartie in ton.\r\n\r\n*Fotografiile sunt cu titlul de referinta.', '230.00', 'Buchet-flori-All-doll-up-1.jpg', 1),
(2, 'Center of the YOU-niverse', 2, 'Buchet compus din mix flori de sezon, diferite culori si texturi, cu insert de verdeata, ambalat in hartie in ton.\r\n\r\n*Fotografiile sunt cu titlul de referinta.', '250.00', 'Buchet-flori-Center-of-the-YOU-niverse-1-768x768.jpg', 1),
(3, 'Press * for Love', 3, 'Buchet compus din mix flori de sezon, diferite culori si texturi, cu insert de verdeata, ambalat in hartie in ton.\r\n\r\n*Fotografiile sunt cu titlul de referinta.', '370.00', 'Buchet-flori-Press-for-Love-1-768x768.jpg', 1),
(4, 'I\'m just here for the Petals', 4, 'Aranjament floral compus din mix flori de sezon, diferite culori si texturi, cu insert de verdeata, in suport tip cutie circulara carton sau in vas ceramica – tip pocal.\r\n\r\n* Fotografiile sunt cu titlul de referinta, aranjamentele vor fi compuse din mix de flori cu cromatica disponibila in momentul comenzii. ', '750.00', 'Aranjament-floral-I-m-just-here-for-the-petals-1-768x768.jpg', 1),
(5, '50 Shades of Flowers', 5, 'Aranjament floral compus din mix flori de sezon, diferite culori si texturi, cu insert de verdeata, in suport tip cutie circulara carton sau in vas ceramica – tip pocal.\r\n\r\n*Fotografiile sunt cu titlul de referinta.', '800.00', 'Aranjament-floral-50-shades-of-flowers-1-768x768.jpg', 1),
(6, 'Siri, Skip to Summer', 6, 'Aranjament floral compus din mix flori de sezon, diferite culori si texturi, cu insert de verdeata, in suport tip cutie circulara carton sau in vas ceramica – tip pocal.\r\n\r\n* Fotografiile sunt cu titlul de referinta, aranjamentele vor fi compuse din mix de flori cu cromatica disponibila in momentul comenzii.', '550.00', 'Aranjament-floral-SIri-skip-to-summer-768x768.jpg', 1),
(7, 'Emerald Moon', 7, 'Cutie Cadou', '210.00', 'C2L003-Emerald-Moon-1600x1200.jpg', 1),
(8, 'Pink Magnolia', 8, 'Cutie Cadou', '240.00', 'C3L002-Pink-Magnolia-1600x1200.jpg', 1),
(9, 'Lavender Moments', 9, 'Cos Cadou', '200.00', 'COS204_Cos-Cadou-Lavender-Moments (3) (1)-1600x1200.jpg', 1);

--
-- Indexuri pentru tabele eliminate
--

--
-- Indexuri pentru tabele `meniul de jos`
--
ALTER TABLE `meniul de jos`
  ADD PRIMARY KEY (`id`);

--
-- Indexuri pentru tabele `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexuri pentru tabele `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pentru tabele eliminate
--

--
-- AUTO_INCREMENT pentru tabele `meniul de jos`
--
ALTER TABLE `meniul de jos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pentru tabele `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pentru tabele `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
