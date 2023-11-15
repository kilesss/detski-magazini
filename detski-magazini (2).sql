-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2023 at 03:29 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `detski-magazini`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `master_id` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `master_id`) VALUES
(6, 'Детски играчки', 0),
(7, 'Бебешки стоки', 0),
(8, 'Детски превозни средства', 0),
(9, 'Книги', 0),
(10, 'За ученика', 0),
(11, 'Козметика и аксесоари', 0),
(12, 'Дрехи', 0),
(13, 'Детски оръжия', 6),
(14, 'Дъски, маси и чинове', 6),
(15, 'Интерактивни играчки', 6),
(16, 'Компютри/таблети', 6),
(17, 'Кухни/домакински обзавеждане', 6),
(18, 'На открито', 6),
(19, 'Направи си сам', 6),
(20, 'наука', 6),
(21, 'Професии', 6),
(22, 'Спортни играчки', 6),
(23, 'Транспортни играчки', 6),
(24, 'Костюми  и артикули', 6),
(25, 'LEGO', 6),
(26, 'Обзавеждане на детска стая', 6),
(27, 'Играчки  за предучилищна възраст', 6),
(28, 'Конструктори и мозайки', 6),
(29, 'Кукли', 6),
(30, 'Музикални инструменти', 6),
(31, 'Надуваеми артикули', 6),
(32, 'Игри', 6),
(33, 'Плюшени играчки', 6),
(34, 'Пъзели', 6),
(35, 'Сезонни', 6),
(36, 'Фигурки и роботи', 6),
(37, 'Батерии', 6),
(38, 'Бебешки колички', 7),
(39, 'Столчета за кола', 7),
(40, 'Хранене и кърмене', 7),
(41, 'Продукти за баня и хигиена', 7),
(42, 'Кенгура и раници', 7),
(43, 'шезлонги', 7),
(44, 'Обзавеждане за бебшка стая', 7),
(45, 'Столчета за хранене', 7),
(46, 'Уреди', 7),
(47, 'Бебешки играчки', 7),
(48, 'за прохождане', 7),
(49, 'Люлки', 7),
(50, 'Акумилаторни коли и мотори', 8),
(51, 'Коли мотори с педали', 8),
(52, 'Тротинетки-скутери', 8),
(53, 'Шейни', 8),
(54, 'Велосипеди', 8),
(55, 'Триколки', 8),
(56, 'Ride-on', 8),
(57, 'Колела за баланс', 8),
(58, 'Детски енциклопедии', 9),
(59, 'Книги за майката и бебето', 9),
(60, 'Книжки с игри и стикери', 9),
(61, 'Детски книги', 9),
(62, 'Занимателни книги', 9),
(63, 'Книжки за оцветяване', 9),
(64, 'Образувателни книиги', 9),
(65, 'Ученически аксесоари', 10),
(66, 'Метериали за рисуване и моделиране', 10),
(67, 'Ученически пособия', 10),
(68, 'Раници, чанти и несесери', 10),
(69, 'Слънчеви очила', 11),
(70, 'Козметични аксесоари', 11),
(71, 'Тениски и блузи', 12),
(72, 'Ризи', 12),
(73, 'Дънки, клинове и панталони', 12),
(74, 'Бельо и чорапи', 12),
(75, 'Комплекти за изписване', 12),
(76, 'Пуловери и жилетки', 12),
(77, 'Рокли и поли', 12),
(78, 'Якета и палта', 12),
(79, 'Бански', 12),
(80, 'Спално бельо и комплекти', 12),
(81, 'Активни гимнастики и постелки', 7),
(82, 'Кукли консумативи', 6),
(83, 'Играчки за бебешка количка, кошара', 7),
(84, 'Оцветяване и рисуване', 6),
(85, 'Аксесоари за кошара и количка', 7),
(86, 'Играчки', 6),
(87, 'Разни бебешки', 7),
(88, 'Колички аксеоари', 7),
(89, 'Кошари', 7),
(90, 'Матраци', 7),
(92, 'Залъгалки', 7),
(93, 'Бебешки аксесоари', 7),
(94, 'Бебешки други', 7),
(95, 'Бебефони', 7),
(96, 'Моделиране', 6),
(97, 'Космонавти и гащеризони', 7),
(98, 'Настолни игри', 6),
(99, 'Бодита и ританки', 12),
(100, 'Ролеви игри', 6),
(101, 'Катерушки', 6),
(102, 'Суитчъри', 12),
(103, 'Шапки , ръкавици, шалове', 12),
(104, 'Одеала и спално бельо', 7),
(105, 'Пижами', 7),
(106, 'Бебешко бельо', 7),
(107, 'Бельо', 12),
(108, 'Играчки за момичета', 6),
(109, 'Скейтборди, ролери', 6),
(110, 'Аксесоари за ученика', 10),
(111, 'детски Други', 6);

-- --------------------------------------------------------

--
-- Table structure for table `checked_products`
--

CREATE TABLE `checked_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` varchar(255) NOT NULL,
  `count` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `checked_products`
--

INSERT INTO `checked_products` (`id`, `product_id`, `count`) VALUES
(1, '126', '5'),
(2, '5970', '1'),
(3, '935', '1'),
(4, '21192', '1'),
(5, '18920', '1'),
(6, '18586', '1'),
(7, '5529', '1'),
(8, '9389', '1'),
(9, '21430', '1'),
(10, '9381', '3'),
(11, '18319', '1'),
(12, '17065', '1'),
(13, '11813', '1'),
(14, '21891', '1'),
(15, '8748', '1'),
(16, '14354', '1'),
(17, '18930', '1'),
(18, '19878', '1'),
(19, '6052', '1');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `title`, `logo`, `url`) VALUES
(1, 'Хиполенд', 'https://www.hippoland.net/static/version1698646967/frontend/Stenik/blank/bg_BG/images/hippoland-logo.svg', 'https://www.hippoland.net/'),
(2, 'Комсет', 'https://comsed.net/image/catalog/Logo-and-backgrounds/logo.svg?lastmtime=1612185411', 'https://comsed.net'),
(4, 'Toyzz shop', 'https://toyzzshop.bg/static/version1698321081/frontend/Magento/noriel/bg_BG/images/toyzz-logo.svg', 'https://toyzzshop.bg'),
(5, 'Вега тойс', 'https://vegatoys.com/media/logo/logo_s.png', 'https://vegatoys.com/'),
(6, 'Бонами', 'https://2.bonami.cz/_next/static/media/logo.5869c1cb.svg', 'https://www.bonami.bg/'),
(7, 'Toysi', 'https://toysi.bg/userfiles/logo/detski-igracki-atlas081.jpg', 'https://toysi.bg/'),
(8, 'Raya toys', 'https://rayatoys.com/static/version1698735707/frontend/Stenik/blank/bg_BG/images/rayatoys.svg', 'https://rayatoys.com/'),
(9, 'Kidso', 'https://kidso.bg/img/kidsobg-logo-16201137323.svg', 'https://kidso.bg/'),
(10, 'BG хлапета', 'https://bghlapeta.com/image/catalog/logo/logo.png', 'https://bghlapeta.com/'),
(11, 'Охо бохо', 'https://ohoboho.com/ohoboho-logo2.svg', 'https://ohoboho.com/');

-- --------------------------------------------------------

--
-- Table structure for table `client_categories`
--

CREATE TABLE `client_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `client_master_id` int(11) DEFAULT NULL,
  `master_id` int(11) DEFAULT NULL,
  `link` text DEFAULT NULL,
  `latin_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `client_categories`
--

INSERT INTO `client_categories` (`id`, `client_id`, `title`, `client_master_id`, `master_id`, `link`, `latin_title`) VALUES
(1, 1, 'gggggg', NULL, 0, 'https://www.hippoland.net/', ''),
(2, 1, 'Nachalo ', NULL, NULL, NULL, 'Nachalo '),
(3, 1, 'Bebeshki stoki', 2, 87, NULL, 'Bebeshki stoki '),
(4, 1, 'Obzavejdane za detska staia', 3, 26, NULL, 'Obzavejdane za detska staia '),
(5, 1, 'Dyrveni legla', 4, 44, NULL, 'Dyrveni legla '),
(6, 1, 'Xranene i kyrmene', 3, 40, NULL, 'Xranene i kyrmene '),
(7, 1, 'Aksesoari za kyrmene', 6, 40, NULL, 'Aksesoari za kyrmene '),
(8, 1, 'Stolcheta za kola', 3, 39, NULL, 'Stolcheta za kola '),
(9, 1, 'I - SIZE', 8, 39, NULL, 'I - SIZE '),
(10, 1, 'Spalno belьo i komplekti', 4, 80, NULL, 'Spalno belьo i komplekti '),
(11, 1, 'Spalni chuvali', 10, 80, NULL, 'Spalni chuvali '),
(12, 1, 'Bebeshki igrachki', 3, 47, NULL, 'Bebeshki igrachki '),
(13, 1, 'Pliusheni igrachki za bebeta', 12, 33, NULL, 'Pliusheni igrachki za bebeta '),
(14, 1, 'Detski igrachki', 2, 86, NULL, 'Detski igrachki '),
(15, 1, 'Konstruktori i mozaiki za deca', 14, 28, NULL, 'Konstruktori i mozaiki za deca '),
(16, 1, 'Konstruktori', 15, 28, NULL, 'Konstruktori '),
(17, 1, 'Nauka', 14, 20, NULL, 'Nauka '),
(18, 1, 'Nauchni komplekti', 17, 20, NULL, 'Nauchni komplekti '),
(19, 1, 'Detski drehi ', 2, NULL, NULL, 'Detski drehi '),
(20, 1, 'IAketa i palta', 19, 78, NULL, 'IAketa i palta '),
(21, 1, 'Dynki, klinove i pantaloni', 19, 73, NULL, 'Dynki, klinove i pantaloni '),
(22, 1, 'Puloveri i jiletki', 19, 76, NULL, 'Puloveri i jiletki '),
(23, 1, 'Teniski i bluzi', 19, 71, NULL, 'Teniski i bluzi '),
(24, 1, 'Interaktivni igrachki', 14, 15, NULL, 'Interaktivni igrachki '),
(25, 1, 'Transportni igrachki', 14, 23, NULL, 'Transportni igrachki '),
(26, 1, 'Autobani, pisti i garaji', 25, 23, NULL, 'Autobani, pisti i garaji '),
(27, 1, 'Rokli i poli', 19, 77, NULL, 'Rokli i poli '),
(28, 1, 'R/C Letiashti/Vlakove/Vodni', 25, 23, NULL, 'R/C Letiashti/Vlakove/Vodni '),
(29, 1, 'Figuri i igri', 14, 36, NULL, 'Figuri i igri '),
(30, 1, 'Ekshyn figuri', 29, 36, NULL, 'Ekshyn figuri '),
(31, 1, 'Odeiala', 10, 80, NULL, 'Odeiala '),
(32, 1, 'Aktivni gimnastiki i postelki', 12, 81, NULL, 'Aktivni gimnastiki i postelki '),
(33, 1, 'Kukli', 14, 29, NULL, 'Kukli '),
(34, 1, 'Kyshti i obzavejdane za kukli', 33, 82, NULL, 'Kyshti i obzavejdane za kukli '),
(35, 1, 'Za prohojdane', 3, 48, NULL, 'Za prohojdane '),
(36, 1, 'Igrachki za prohojdane', 35, 48, NULL, 'Igrachki za prohojdane '),
(37, 1, 'Jivotni', 29, 36, NULL, 'Jivotni '),
(38, 1, 'Setove', 10, 36, NULL, 'Setove '),
(39, 1, 'Pribori za hranene', 6, 40, NULL, 'Pribori za hranene '),
(40, 1, 'Aksesoari', 8, 93, NULL, 'Aksesoari '),
(41, 1, 'Stolcheta za hranene', 3, 45, NULL, 'Stolcheta za hranene '),
(42, 1, 'Produkti za bania i higiena', 3, 41, NULL, 'Produkti za bania i higiena '),
(43, 1, 'Vani i stoiki', 42, 41, NULL, 'Vani i stoiki '),
(44, 1, 'Bebeshki kolichki', 3, 38, NULL, 'Bebeshki kolichki '),
(45, 1, 'Kombinirani kolichki', 44, 38, NULL, 'Kombinirani kolichki '),
(46, 1, 'Sistemi 2 v 1', 45, 38, NULL, 'Sistemi 2 v 1 '),
(47, 1, 'Kukli sys specialni funkcii', 33, 29, NULL, 'Kukli sys specialni funkcii '),
(48, 1, 'Gyrneta i aksesoari za bania', 42, 41, NULL, 'Gyrneta i aksesoari za bania '),
(49, 1, 'Modni kukli', 33, 29, NULL, 'Modni kukli '),
(50, 1, 'Uredi', 3, 94, NULL, 'Uredi '),
(51, 1, 'Bebefoni', 50, 95, NULL, 'Bebefoni '),
(52, 1, 'Igrachki za bebeshka kolichka, kola, koshara', 12, 83, NULL, 'Igrachki za bebeshka kolichka, kola, koshara '),
(53, 1, 'Detski prevozni sredstva', 2, 57, NULL, 'Detski prevozni sredstva '),
(54, 1, 'Trikolki', 53, 55, NULL, 'Trikolki '),
(55, 1, 'Profesii', 14, 21, NULL, 'Profesii '),
(56, 1, 'Dyski, masi i chinove', 14, 14, NULL, 'Dyski, masi i chinove '),
(57, 1, 'Napravi si sam', 14, 19, NULL, 'Napravi si sam '),
(58, 1, 'Komplekti za ocvetiavane i risuvane', 57, 84, NULL, 'Komplekti za ocvetiavane i risuvane '),
(59, 1, 'Igri', 14, 32, NULL, 'Igri '),
(60, 1, 'Obrazovatelni igri', 59, 32, NULL, 'Obrazovatelni igri '),
(61, 1, 'Aksesoari za koshari', 4, 85, NULL, 'Aksesoari za koshari '),
(62, 1, 'Butalki i igrachki za dyrpane', 12, 47, NULL, 'Butalki i igrachki za dyrpane '),
(63, 1, 'Pliusheni igrachki', 14, 33, NULL, 'Pliusheni igrachki '),
(64, 1, 'Licenzirani', 63, 33, NULL, 'Licenzirani '),
(65, 1, 'Detski oryjiia', 14, 13, NULL, 'Detski oryjiia '),
(66, 1, 'Pushki, pistoleti i avtomati', 65, 13, NULL, 'Pushki, pistoleti i avtomati '),
(67, 1, 'Uredi za prigotviane na hrana', 50, 40, NULL, 'Uredi za prigotviane na hrana '),
(68, 1, 'Komplekti za modelirane', 57, 96, NULL, 'Komplekti za modelirane '),
(69, 1, 'Sterilizatori', 50, 40, NULL, 'Sterilizatori '),
(70, 1, 'Sezonni', 14, 86, NULL, 'Sezonni '),
(71, 1, 'Sapuneni baloni', 70, 86, NULL, 'Sapuneni baloni '),
(72, 1, 'Kolichki s transformirasht se kosh', 45, 38, NULL, 'Kolichki s transformirasht se kosh '),
(73, 1, 'Liulki', 3, 49, NULL, 'Liulki '),
(74, 1, 'Grupa 2/3 (15-36 kg.) sedalki', 8, 39, NULL, 'Grupa 2/3 (15-36 kg.) sedalki '),
(75, 1, 'B/O Transportni igrachki', 25, 23, NULL, 'B/O Transportni igrachki '),
(76, 1, 'Plastmasovi igrachki', 12, 86, NULL, 'Plastmasovi igrachki '),
(77, 1, 'Kozmetichni komplekti i aksesoari', 2, 70, NULL, 'Kozmetichni komplekti i aksesoari '),
(78, 1, 'Za uchenika', 2, 65, NULL, 'Za uchenika '),
(79, 1, 'Materiali za risuvane i modelirane', 78, 66, NULL, 'Materiali za risuvane i modelirane '),
(80, 1, 'Ranici, chanti i neseseri', 78, 68, NULL, 'Ranici, chanti i neseseri '),
(81, 1, 'Knigi', 2, 61, NULL, 'Knigi '),
(82, 1, 'Knijki za ocvetiavane', 81, 63, NULL, 'Knijki za ocvetiavane '),
(83, 1, 'Zanimatelni i systezatelni igri', 59, 32, NULL, 'Zanimatelni i systezatelni igri '),
(84, 1, 'LEGO', 14, 25, NULL, 'LEGO '),
(85, 1, 'Pyzeli', 14, 34, NULL, 'Pyzeli '),
(86, 1, 'Prohodilki', 35, 48, NULL, 'Prohodilki '),
(87, 1, 'R/C Koli/Djipove/Motori', 25, 23, NULL, 'R/C Koli/Djipove/Motori '),
(88, 1, 'Kengura i ranici', 3, 42, NULL, 'Kengura i ranici '),
(89, 1, 'SHezlongi', 3, 43, NULL, 'SHezlongi '),
(90, 1, 'Aksesoari za kolichki', 44, 88, NULL, 'Aksesoari za kolichki '),
(91, 1, 'CHuvalcheta za kolichki', 90, 88, NULL, 'CHuvalcheta za kolichki '),
(92, 1, 'SHisheta', 6, 40, NULL, 'SHisheta '),
(93, 1, 'Xigienni produkti', 6, 41, NULL, 'Xigienni produkti '),
(94, 1, 'Pompi za kyrma', 6, 40, NULL, 'Pompi za kyrma '),
(95, 1, 'Xigienni aksesoari', 42, 41, NULL, 'Xigienni aksesoari '),
(96, 1, 'Koshari', 4, 89, NULL, 'Koshari '),
(97, 1, 'Mini koshari', 96, 89, NULL, 'Mini koshari '),
(98, 1, 'Dve niva', 96, 89, NULL, 'Dve niva '),
(99, 1, 'Matraci', 4, 90, NULL, 'Matraci '),
(100, 1, '60 x 120', 99, 90, NULL, '60 x 120 '),
(101, 1, 'Muzikalni igrachki', 12, 30, NULL, 'Muzikalni igrachki '),
(102, 1, 'Novo ', 2, NULL, NULL, 'Novo '),
(103, 1, 'Dyjdobrani i mreji protiv komari', 90, 85, NULL, 'Dyjdobrani i mreji protiv komari '),
(104, 1, 'CHanti', 90, 68, NULL, 'CHanti '),
(105, 1, 'Akumulatorni koli i motori', 53, 50, NULL, 'Akumulatorni koli i motori '),
(106, 1, 'Igrachki za preduchilishtna vyzrast', 14, 27, NULL, 'Igrachki za preduchilishtna vyzrast '),
(107, 1, 'Zalygalki', 6, 92, NULL, 'Zalygalki '),
(108, 1, NULL, 6, 40, NULL, 'CHashi '),
(109, 1, NULL, 12, 47, NULL, 'Drynkalki '),
(110, 1, NULL, 57, 19, NULL, 'Bijuta i aksesoari '),
(111, 5, NULL, 14, 18, NULL, 'Naduvaemi artikuli '),
(112, 5, NULL, 57, 28, NULL, 'Komplekti za sglobiavane '),
(113, 5, NULL, 29, 36, NULL, 'Komplekti '),
(114, 5, NULL, 59, 98, NULL, 'Igri s karti '),
(115, 5, NULL, 33, 82, NULL, 'Kolichki za kukli '),
(116, 5, NULL, 45, 38, NULL, 'Modulni kolichki i shasita '),
(117, 5, NULL, 19, 74, NULL, 'Belьo i chorapi '),
(118, 5, NULL, 90, 85, NULL, 'Komplekti i podlojki za kolichki '),
(119, 5, NULL, 53, 52, NULL, 'Trotinetki - skuteri '),
(120, 5, NULL, 53, 57, NULL, 'Kolela za balans '),
(121, 5, NULL, 14, 18, NULL, 'Na otkrito '),
(122, 5, NULL, 121, 18, NULL, 'Batuti '),
(123, 5, NULL, 15, 28, NULL, 'Mozaiki '),
(124, 5, NULL, 85, 34, NULL, 'Pyzeli do 500 chasti '),
(125, 5, NULL, 33, 82, NULL, 'Aksesoari za kukli '),
(126, 5, NULL, 12, 41, NULL, 'Igrachki za bania '),
(127, 5, NULL, 25, 23, NULL, 'Transportni igrachki bez baterii '),
(128, 5, NULL, 29, 36, NULL, 'Roboti/Transformyri '),
(129, 5, NULL, 4, 26, NULL, 'Masi i stolcheta '),
(130, 5, NULL, 14, 22, NULL, 'Sportni igrachki '),
(131, 5, NULL, 130, 22, NULL, 'Sportni komplekti i aksesoari '),
(132, 5, NULL, 45, 38, NULL, 'Sistemi 3 v 1 '),
(133, 5, NULL, 53, 56, NULL, 'Ride-on '),
(134, 5, NULL, 25, 23, NULL, 'Die cast '),
(135, 5, NULL, 19, 72, NULL, 'Rizi '),
(136, 5, NULL, 14, 24, NULL, 'Karnavalni kostiumi i artikuli '),
(137, 5, NULL, 85, 34, NULL, 'Pyzeli nad 500 chasti '),
(138, 5, NULL, 14, 17, NULL, 'Kuhni i domakinsko obzavejdane '),
(139, 5, NULL, 138, 17, NULL, 'Detski domakinski uredi '),
(140, 5, NULL, 59, 32, NULL, 'Fokusi '),
(141, 5, NULL, 8, 39, NULL, 'Grupa 0 (0-13 kg.) '),
(142, 5, NULL, 44, 38, NULL, 'Letni kolichki '),
(143, 5, NULL, 8, 39, NULL, 'Grupa 1/2/3 (9-36 kg.) '),
(144, 5, NULL, 4, 26, NULL, 'Vyzglavnici '),
(145, 5, NULL, 8, 39, NULL, 'Grupa 0+/1/2/3 (0-36 kg.) '),
(146, 5, NULL, 4, 26, NULL, 'Etajerki i organaizeri '),
(147, 5, NULL, 4, 26, NULL, 'Skrinove i garderobi '),
(148, 5, NULL, 80, 68, NULL, 'Ranici i chanti '),
(149, 5, NULL, 78, 67, NULL, 'Uchenicheski posobiia '),
(150, 5, NULL, 14, 27, NULL, 'Kompiutri / Tableti '),
(151, 5, NULL, 4, 26, NULL, 'Koshari za igra '),
(152, 5, NULL, 80, 68, NULL, 'Neseseri '),
(153, 5, NULL, 33, 29, NULL, 'Mini kukli '),
(154, 5, NULL, 81, 62, NULL, 'Zanimatelni knigi '),
(155, 5, NULL, 81, 60, NULL, 'Knijki s igri i stikeri '),
(156, 5, NULL, 81, 58, NULL, 'Detski enciklopedii '),
(157, 5, NULL, 6, 40, NULL, 'Ligavnici '),
(158, 5, NULL, 14, 30, NULL, 'Muzikalni instrumenti '),
(159, 5, NULL, 130, 22, NULL, 'Roleri i kynki '),
(160, 5, NULL, 53, 54, NULL, 'Velosipedi '),
(161, 5, NULL, 63, 33, NULL, 'Standartni '),
(162, 5, NULL, 50, 46, NULL, 'Uredi za bezopasnost na bebeto '),
(163, 5, NULL, 12, 92, NULL, 'Grizalki i chesalki '),
(164, 5, NULL, 130, 22, NULL, 'Topki '),
(165, 5, NULL, 96, 89, NULL, 'Edno nivo '),
(166, 5, NULL, 6, 40, NULL, 'Biberoni '),
(167, 5, NULL, 70, 18, NULL, 'Kofichki i aksesoari za plaj '),
(168, 5, NULL, 15, 28, NULL, 'Konstruktori za nai-malkite '),
(169, 5, NULL, 8, 39, NULL, 'Grupa 0/1/2 (0-25 kg.) '),
(170, 5, NULL, 121, 18, NULL, 'Drugi '),
(171, 5, NULL, 85, 34, NULL, '3D pyzeli '),
(172, 1, NULL, 2, NULL, NULL, 'Meniu produkti '),
(173, 5, NULL, 12, 47, NULL, 'Dyrveni igrachki '),
(174, 5, NULL, 8, 39, NULL, 'S izofiks (ISOFIX) '),
(175, 5, NULL, 44, 38, NULL, 'Kolichki za bliznaci '),
(176, 5, NULL, 35, 48, NULL, 'Kolani za prohojdane '),
(177, 5, NULL, 65, 13, NULL, 'Vodni oryjiia '),
(178, 5, NULL, 42, 41, NULL, 'Podlojki '),
(179, 5, NULL, 130, 22, NULL, 'Skeitbord '),
(180, 5, NULL, 85, 34, NULL, 'Pyzeli i kubcheta za deca 1-3g. '),
(181, 5, NULL, 111, 18, NULL, 'Poiasi/Jiletki/Rykaveli '),
(182, 5, NULL, 111, 18, NULL, 'Lodki '),
(183, 5, NULL, 121, 18, NULL, 'Kyshti '),
(184, 1, NULL, 138, NULL, NULL, 'Kuhni i kuhnensko obzavejdane '),
(185, 1, NULL, 14, NULL, NULL, 'Detski stolcheta i masichki '),
(186, 1, NULL, 35, NULL, NULL, 'Byndjita '),
(187, 1, NULL, 42, NULL, NULL, 'Kozmetichni i sezonni produkti '),
(188, 1, NULL, 4, NULL, NULL, 'Protektori '),
(189, 1, NULL, 81, NULL, NULL, 'Knigi za maikata i bebeto '),
(190, 1, NULL, 81, NULL, NULL, 'Obrazovatelni knigi '),
(191, 1, NULL, 50, NULL, NULL, 'Termometri '),
(192, 1, NULL, 111, NULL, NULL, 'Diusheci '),
(193, 1, NULL, 85, NULL, NULL, 'Meki pyzeli '),
(194, 1, NULL, 81, NULL, NULL, 'Detski knigi '),
(195, 1, NULL, 50, NULL, NULL, 'Ovlajnitel za vyzduh '),
(196, 1, NULL, 53, NULL, NULL, 'Koli i motori s pedali '),
(197, 1, NULL, 121, NULL, NULL, 'Detski centrove '),
(198, 1, NULL, 65, NULL, NULL, 'SHpionsko oborudvane '),
(199, 1, NULL, 111, NULL, NULL, 'Pompi '),
(200, 1, NULL, 99, NULL, NULL, '70 x 140 '),
(201, 1, NULL, 15, NULL, NULL, 'Metalni konstruktori '),
(202, 1, NULL, 15, NULL, NULL, 'Dyrveni konstruktori '),
(203, 1, NULL, 121, NULL, NULL, 'Pyrzalki '),
(204, 1, NULL, 77, NULL, NULL, 'Slynchevi ochila '),
(205, 1, NULL, 19, NULL, NULL, 'Komplekti za izpisvane '),
(206, 7, NULL, 14, 36, NULL, 'DETSKI ROBOTI'),
(207, 7, NULL, 14, 23, NULL, 'DETSKI KOLI'),
(208, 7, NULL, 207, 23, NULL, 'AVTOMOBILI, DJIPOVE, KAMIONI, MOTOCIKLETI'),
(209, 7, NULL, 14, 15, NULL, 'ZANIMATELNI IGRACHKI'),
(210, 7, NULL, 14, 29, NULL, 'KUKLI I AKSESOARI'),
(211, 7, NULL, 210, 108, NULL, 'DETSKI GRIMOVE'),
(212, 7, NULL, 14, 0, NULL, 'OBRAZOVATELNI IGRACHKI'),
(213, 7, NULL, 14, NULL, NULL, 'IGRACHKI NA BYLGARSKI EZIK'),
(214, 7, NULL, 2, NULL, NULL, 'PROMOCIIA'),
(215, 7, NULL, 14, 66, NULL, 'KOMPLEKTI ZA RISUVANE'),
(216, 7, NULL, 207, 23, NULL, 'METALNI KOLICHKI'),
(217, 7, NULL, 14, 36, NULL, 'FIGURKI I DETSKI GEROI'),
(218, 7, NULL, 2, NULL, NULL, 'DETSKI IGRI'),
(219, 7, NULL, 207, 23, NULL, 'KOLICHKI S DISTANCIONNO'),
(220, 7, NULL, 218, 98, NULL, 'NASTOLNI IGRI'),
(221, 7, NULL, 207, 23, NULL, 'PARKINGI I GARAJI'),
(222, 7, NULL, 2, 18, NULL, 'IGRACHKI NA OTKRITO'),
(223, 7, NULL, 222, 57, NULL, 'BALANS KOLELA'),
(224, 7, NULL, 2, 36, NULL, 'GEROI'),
(225, 7, NULL, 224, 36, NULL, 'Trolls'),
(226, 7, NULL, 224, NULL, NULL, 'Super Wings'),
(227, 7, NULL, 2, NULL, NULL, 'ZA DETETO  '),
(228, 7, NULL, 227, 69, NULL, 'DETSKI SLYNCHEVI OCHILA'),
(229, 7, NULL, 224, NULL, NULL, 'PAW Patrol'),
(230, 7, NULL, 224, NULL, NULL, 'Peppa Pig'),
(231, 1, NULL, 14, NULL, NULL, 'Baterii '),
(232, 7, NULL, 224, NULL, NULL, 'Soy Luna'),
(233, 7, NULL, 222, 109, NULL, 'ROLERI'),
(234, 7, NULL, 224, NULL, NULL, 'Miraculous'),
(235, 7, NULL, 14, 18, NULL, 'DETSKI POIASI'),
(236, 1, NULL, 111, NULL, NULL, 'Naduvaemi igralni centrove '),
(237, 7, NULL, 218, 18, NULL, 'IGRI SPORTNI '),
(238, 1, NULL, 121, NULL, NULL, 'Piasychnici '),
(239, 5, NULL, 2, NULL, NULL, 'Produkti'),
(240, 5, NULL, 239, 23, NULL, 'Komplekti za momcheta'),
(241, 5, NULL, 239, 108, NULL, 'Komplekti detski igrachki za momicheta'),
(242, 5, NULL, 239, 68, NULL, 'Detski ranici i chanti'),
(243, 5, NULL, 239, 23, NULL, 'Avtomobili, motori, djipove,  kamioni'),
(244, 5, NULL, 239, 24, NULL, 'Teatralni kostiumi'),
(245, 5, NULL, 239, 109, NULL, 'Skeitbordove, roleri, hovyrbordi'),
(246, 5, NULL, 239, 23, NULL, 'Radioupravliaemi igrachki'),
(247, 5, NULL, 239, 18, NULL, 'Plajni artikuli'),
(248, 5, NULL, 239, 47, NULL, 'Bebeshki artikuli'),
(249, 5, NULL, 239, 23, NULL, 'Vlakove i lokomotivi'),
(250, 5, NULL, 239, 52, NULL, 'Trotinetki'),
(251, 5, NULL, 239, 110, NULL, 'Torbichki za podaryk, podarychni hartii'),
(252, 5, NULL, 239, 23, NULL, 'Stroitelni i zemedelski mashini'),
(253, 5, NULL, 239, 23, NULL, 'Samoleti i helikopteri'),
(254, 5, NULL, 239, 13, NULL, 'Oryjiia'),
(255, 5, NULL, 239, 15, NULL, 'Logicheski igri'),
(256, 5, NULL, 239, 50, NULL, 'Krakomobili, krakomotori, akumulatorni koli i motori'),
(257, 5, NULL, 239, 26, NULL, 'Detski masi, stolcheta i taburetki'),
(258, 5, NULL, 239, 54, NULL, 'Detski kolela'),
(259, 5, NULL, 239, 110, NULL, 'Pozdravitelni kartichki'),
(260, 260, NULL, 14, 50, NULL, 'Geroi ot filmi'),
(261, 2, 'Zabavni igrachki', 14, 86, NULL, 'Zabavni igrachki'),
(262, 5, NULL, 239, 15, NULL, 'Risuvatelni igri'),
(263, 2, 'Strategicheski igri', 14, 15, NULL, 'Strategicheski igri'),
(264, 2, 'Aksesoari za momicheta', 14, 108, NULL, 'Aksesoari za momicheta'),
(265, 2, 'Kukli filmovi geroi', 14, 29, NULL, 'Kukli filmovi geroi'),
(266, 2, 'Rolevi igri', 14, 47, NULL, 'Rolevi igri'),
(267, 2, 'Kuhnia, domakinstvo', 14, 17, NULL, 'Kuhnia, domakinstvo'),
(268, 2, 'Za iazdene i butane', 14, 56, NULL, 'Za iazdene i butane'),
(269, 2, 'Katerushki i dr. za dvora', NULL, 18, NULL, 'Katerushki i dr. za dvora'),
(270, 2, 'Palatki', 269, 18, NULL, 'Palatki'),
(271, 2, 'Za sglobiavane', 14, 28, NULL, 'Za sglobiavane'),
(272, 2, 'Risuvane i ocvetiavane', 14, 66, NULL, 'Risuvane i ocvetiavane'),
(273, 2, 'Tatuirovki', 14, 66, NULL, 'Tatuirovki'),
(274, 2, 'Zabavni igri', 14, 98, NULL, 'Zabavni igri'),
(275, 2, 'Detski pyzeli', 14, 34, NULL, 'Detski pyzeli'),
(276, 2, 'Memori', 14, 98, NULL, 'Memori'),
(277, 2, 'Modelirane', 14, 66, NULL, 'Modelirane'),
(278, 2, 'Aplikacii', 14, 66, NULL, 'Aplikacii'),
(279, 2, 'Kukli bebeta', 14, 29, NULL, 'Kukli bebeta'),
(280, 2, 'Posobiia', 78, NULL, NULL, 'Posobiia'),
(281, 2, 'Koli, kamioni, komplekti', 14, 23, NULL, 'Koli, kamioni, komplekti'),
(282, 2, 'Vlakcheta', 14, 23, NULL, 'Vlakcheta'),
(283, 5, NULL, 239, 18, NULL, 'Sportni igri'),
(284, 2, 'Detski drehi i obuvki', NULL, 0, NULL, 'Detski drehi i obuvki'),
(285, 2, 'Pantaloni i klinove', 284, 73, NULL, 'Pantaloni i klinove'),
(286, 2, 'Teniski', 284, 71, NULL, 'Teniski'),
(287, 2, 'IAketa', 284, 78, NULL, 'IAketa'),
(288, 2, 'Bluzi', 284, 71, NULL, 'Bluzi'),
(289, 2, 'Rokli', 284, 77, NULL, 'Rokli'),
(290, 2, 'Suitshyrti', 284, 102, NULL, 'Suitshyrti'),
(291, 2, 'Dynki', 284, 73, NULL, 'Dynki'),
(292, 2, 'Puloveri', 284, 76, NULL, 'Puloveri'),
(293, 2, 'Poli', 284, 77, NULL, 'Poli'),
(294, 2, 'SHapki, rykavici i shalove', 284, 103, NULL, 'SHapki, rykavici i shalove'),
(295, 2, 'Elecheta', 284, 76, NULL, 'Elecheta'),
(296, 2, 'Jiletki', 284, 76, NULL, 'Jiletki'),
(297, 2, 'Palta', 284, 78, NULL, 'Palta'),
(298, 2, 'Za bebeto i maikata', NULL, NULL, NULL, 'Za bebeto i maikata'),
(299, 2, 'Ligavnici i kyrpi', 298, 40, NULL, 'Ligavnici i kyrpi'),
(300, 2, 'Detski odeiala', 298, 104, NULL, 'Detski odeiala'),
(301, 2, 'Ritanki', 284, 99, NULL, 'Ritanki'),
(302, 2, 'Bodita', 284, 99, NULL, 'Bodita'),
(303, 2, 'Gashterizoni', 284, 97, NULL, 'Gashterizoni'),
(304, 2, 'Pijami', 284, 105, NULL, 'Pijami'),
(305, 2, 'Eskimosi', 284, 97, NULL, 'Eskimosi'),
(306, 2, 'CHorapi', 284, 107, NULL, 'CHorapi'),
(307, 2, 'Peleni', 298, 106, NULL, 'Peleni'),
(308, 2, 'CHorapogashtnici', 284, 107, NULL, 'CHorapogashtnici'),
(309, 5, NULL, 239, 36, NULL, 'Transformeri i roboti'),
(310, 2, 'Nakiti', 14, 108, NULL, 'Nakiti'),
(311, 2, 'Koli s RU', 14, 23, NULL, 'Koli s RU'),
(312, 2, 'Mynista i mozaiki', 14, 66, NULL, 'Mynista i mozaiki'),
(313, 2, 'SHah, tabla, domino', 14, 98, NULL, 'SHah, tabla, domino'),
(314, 2, 'Samoleti, dronove i dr.', 14, 23, NULL, 'Samoleti, dronove i dr.'),
(315, 2, 'Roboti s RU', 14, 23, NULL, 'Roboti s RU'),
(316, 2, 'Drugi s RU', 14, 23, NULL, 'Drugi s RU'),
(317, 2, 'Xelikopteri s RU', 14, 23, NULL, 'Xelikopteri s RU'),
(318, 2, 'Kengura i slingove', 298, 42, NULL, 'Kengura i slingove'),
(319, 2, 'Legla i koshari', 298, 89, NULL, 'Legla i koshari'),
(320, 2, 'Drugi aksesoari', 298, 26, NULL, 'Drugi aksesoari'),
(321, 2, 'Stolcheta gr. 0+ (0 - 13kg)', 298, 39, NULL, 'Stolcheta gr. 0+ (0 - 13kg)'),
(322, 2, 'Stolcheta gr. 0/1/2 (0 - 25kg)', 298, 39, NULL, 'Stolcheta gr. 0/1/2 (0 - 25kg)'),
(323, 2, 'Vyzglavnici za kyrmene', 298, 40, NULL, 'Vyzglavnici za kyrmene'),
(324, 2, 'Stolcheta gr. 0/1/2/3 (0 - 36kg)', 298, 39, NULL, 'Stolcheta gr. 0/1/2/3 (0 - 36kg)'),
(325, 2, 'Liulki i shezlongi', 298, 43, NULL, 'Liulki i shezlongi'),
(326, 2, 'Stolcheta gr. 2/3 (15 - 36kg)', 298, 39, NULL, 'Stolcheta gr. 2/3 (15 - 36kg)'),
(327, 2, 'Spalni komplekti', 298, 104, NULL, 'Spalni komplekti'),
(328, 2, 'CHadyri i sennici', 298, NULL, NULL, 'CHadyri i sennici'),
(329, 2, 'Stolcheta gr. 1/2/3 (9 - 36kg)', 298, 39, NULL, 'Stolcheta gr. 1/2/3 (9 - 36kg)'),
(330, 2, 'Aksesoari za stolcheta', 298, 39, NULL, 'Aksesoari za stolcheta'),
(331, 2, 'Bebeshki vani i stoiki', 298, 41, NULL, 'Bebeshki vani i stoiki'),
(332, 2, 'Dyjdobrani i komarnici', 298, 85, NULL, 'Dyjdobrani i komarnici'),
(333, 2, 'Reduktori za toaletna', 298, 41, NULL, 'Reduktori za toaletna'),
(334, 2, 'Meki igrachki', 12, 47, NULL, 'Meki igrachki'),
(335, 2, 'Drynkalki i chesalki', 12, 92, NULL, 'Drynkalki i chesalki'),
(336, 2, 'Igrachki za kolichka', 12, 85, NULL, 'Igrachki za kolichka'),
(337, 2, 'Blasteri, nyrfove', 14, 13, NULL, 'Blasteri, nyrfove'),
(338, 2, 'Maski na geroi', 14, 24, NULL, 'Maski na geroi'),
(339, 2, 'Aksesoari za bania', 298, 41, NULL, 'Aksesoari za bania'),
(340, 2, 'Podlojki za kypane', 298, 41, NULL, 'Podlojki za kypane'),
(341, 2, 'Gyrneta', 298, 41, NULL, 'Gyrneta'),
(342, 2, 'Podlojki za povivane', 298, 41, NULL, 'Podlojki za povivane'),
(343, 2, 'Aktivni gimnastiki i kilimcheta', 12, 81, NULL, 'Aktivni gimnastiki i kilimcheta'),
(344, 2, 'Detski trikolki', 298, 55, NULL, 'Detski trikolki'),
(345, 2, 'Pompi za kyrma i aksesoari', 298, 40, NULL, 'Pompi za kyrma i aksesoari'),
(346, 2, 'Predpazni aksesoari', 298, 85, NULL, 'Predpazni aksesoari'),
(347, 2, 'Matracheta', 298, 90, NULL, 'Matracheta'),
(348, 2, 'CHarshafi i kalyfki', 298, 104, NULL, 'CHarshafi i kalyfki'),
(349, 2, 'Neseseri i portmoneta', 78, 65, NULL, 'Neseseri i portmoneta'),
(350, 2, 'Kyshti, masichki i stolcheta', 269, 26, NULL, 'Kyshti, masichki i stolcheta'),
(351, 2, 'Igri s karti i zarove', 14, 98, NULL, 'Igri s karti i zarove'),
(352, 2, 'Zalygalki i grizalki', 12, 92, NULL, 'Zalygalki i grizalki'),
(353, 2, 'SHiene, pletene, brodirane', 14, 66, NULL, 'SHiene, pletene, brodirane'),
(354, 2, 'Razkazi', NULL, 61, NULL, 'Razkazi'),
(355, 2, 'Prikazki i legendi', NULL, 61, NULL, 'Prikazki i legendi'),
(356, 2, 'Romani za deca', NULL, 61, NULL, 'Romani za deca'),
(357, 2, 'Za igra s piasyk', 14, 18, NULL, 'Za igra s piasyk'),
(358, 2, 'Voleibolni topki', NULL, 18, NULL, 'Voleibolni topki'),
(359, 2, 'Futbolni topki', NULL, 18, NULL, 'Futbolni topki'),
(360, 2, 'Zabavni topki', NULL, 18, NULL, 'Zabavni topki'),
(361, 2, 'Buiki', 284, 29, NULL, 'Buiki'),
(362, 2, 'Bebeshki havlii', 298, 104, NULL, 'Bebeshki havlii'),
(363, 2, 'Vyzglavnichki', 298, 104, NULL, 'Vyzglavnichki'),
(364, 2, 'Detski velosipedi', NULL, 54, NULL, 'Detski velosipedi'),
(365, 2, 'CHanti za prinadlejnosti', 298, 85, NULL, 'CHanti za prinadlejnosti'),
(366, 2, 'Za karane s akumulator', 14, 50, NULL, 'Za karane s akumulator'),
(367, 2, 'Centrove za igra', 14, 31, NULL, 'Centrove za igra'),
(368, 2, 'Otlivki i otpechatyci', 14, 96, NULL, 'Otlivki i otpechatyci'),
(369, 2, 'Mashini za lakomstva', 14, 96, NULL, 'Mashini za lakomstva'),
(370, 1, NULL, 8, NULL, NULL, 'Grupa 0+/1 (0-18kg.) '),
(371, 2, 'Stolcheta gr. 0/1 (0 - 18kg)', 298, 39, NULL, 'Stolcheta gr. 0/1 (0 - 18kg)'),
(372, 2, 'Kupichki i chinii', 298, 40, NULL, 'Kupichki i chinii'),
(373, 2, 'Drugi uredi i aksesoari', 298, 46, NULL, 'Drugi uredi i aksesoari'),
(374, 2, 'Predpazni sredstva', 14, 54, NULL, 'Predpazni sredstva'),
(375, 2, 'Lodki za sport', NULL, 23, NULL, 'Lodki za sport'),
(376, 2, 'Naduvaemi mebeli', NULL, 31, NULL, 'Naduvaemi mebeli'),
(377, 2, 'Pompi za naduvaemi', 376, 31, NULL, 'Pompi za naduvaemi'),
(378, 2, 'Taburetki, fotьoili i divani', 376, 44, NULL, 'Taburetki, fotьoili i divani'),
(379, 2, 'Naduvaemi legla i matraci', 376, 31, NULL, 'Naduvaemi legla i matraci'),
(380, 2, 'Plajni diusheci', NULL, 31, NULL, 'Plajni diusheci'),
(381, 2, 'Baseini i djakuzita', NULL, 18, NULL, 'Baseini i djakuzita'),
(382, 2, 'Naduvaemi baseini', 381, 31, NULL, 'Naduvaemi baseini'),
(383, 2, 'Naduvaemi ostrovi', NULL, 31, NULL, 'Naduvaemi ostrovi'),
(384, 2, 'Naduvaemi ramenki i jiletki', NULL, 31, NULL, 'Naduvaemi ramenki i jiletki'),
(385, 2, 'Naduvaemi poiasi', NULL, 31, NULL, 'Naduvaemi poiasi'),
(386, 2, 'SHnorheli, maski i plavnici', NULL, 18, NULL, 'SHnorheli, maski i plavnici'),
(387, 2, 'Za karane s pedali', 14, 55, NULL, 'Za karane s pedali'),
(388, 2, 'Katerushki i pyrzalki', 269, 18, NULL, 'Katerushki i pyrzalki'),
(389, 1, NULL, 85, NULL, NULL, 'Sveteshti pyzeli '),
(390, 1, NULL, 8, NULL, NULL, 'Grupa 1 (9-18 kg.) '),
(391, 1, NULL, 50, NULL, NULL, 'Kantarcheta '),
(392, 2, 'Kategoriia:', NULL, NULL, NULL, 'Kategoriia:'),
(393, 2, 'Vid:', 392, NULL, NULL, 'Vid:'),
(394, 5, '</i> <a href=\"https://vegatoys.com/bg/index.html\" rel=\"home\">Nachalo', NULL, NULL, NULL, '</i> <a href=\"https://vegatoys.com/bg/index.html\" rel=\"home\">Nachalo'),
(395, 5, '<span class=\"seria-all\">Dyrveni igrachki', 239, NULL, NULL, '<span class=\"seria-all\">Dyrveni igrachki'),
(396, 5, '<span class=\"seria-all\">Vlakove i lokomotivi', 239, NULL, NULL, '<span class=\"seria-all\">Vlakove i lokomotivi'),
(397, 7, 'PROMOCII', 2, NULL, NULL, 'PROMOCII'),
(398, 5, '<span class=\"seria-all\">Trotinetki', 239, NULL, NULL, '<span class=\"seria-all\">Trotinetki'),
(399, 5, '<span class=\"seria-all\">Torbichki za podaryk, podarychni hartii', 239, NULL, NULL, '<span class=\"seria-all\">Torbichki za podaryk, podarychni hartii'),
(400, 5, '<span class=\"seria-all\">Stroitelni i zemedelski mashini', 239, NULL, NULL, '<span class=\"seria-all\">Stroitelni i zemedelski mashini'),
(401, 5, '<span class=\"seria-all\">Samoleti i helikopteri', 239, NULL, NULL, '<span class=\"seria-all\">Samoleti i helikopteri'),
(402, 5, '<span class=\"seria-all\">Pyzeli', 239, NULL, NULL, '<span class=\"seria-all\">Pyzeli'),
(403, 5, '<span class=\"seria-all\">Oryjiia', 239, NULL, NULL, '<span class=\"seria-all\">Oryjiia'),
(404, 5, '<span class=\"seria-all\">Logicheski igri', 239, NULL, NULL, '<span class=\"seria-all\">Logicheski igri'),
(405, 5, '<span class=\"seria-all\">Krakomobili, krakomotori, akumulatorni koli i motori', 239, NULL, NULL, '<span class=\"seria-all\">Krakomobili, krakomotori, akumulatorni koli i motori'),
(406, 5, '<span class=\"seria-all\">Detski masi, stolcheta i taburetki', 239, NULL, NULL, '<span class=\"seria-all\">Detski masi, stolcheta i taburetki'),
(407, 5, '<span class=\"seria-all\">Teatralni kostiumi', 239, NULL, NULL, '<span class=\"seria-all\">Teatralni kostiumi'),
(408, 5, '<span class=\"seria-all\">Bebeshki artikuli', 239, NULL, NULL, '<span class=\"seria-all\">Bebeshki artikuli'),
(409, 5, '<span class=\"seria-all\">Detski kolela', 239, NULL, NULL, '<span class=\"seria-all\">Detski kolela'),
(410, 5, '<span class=\"seria-all\">Komplekti detski igrachki za momicheta', 239, NULL, NULL, '<span class=\"seria-all\">Komplekti detski igrachki za momicheta'),
(411, 5, '<span class=\"seria-all\">Konstruktori', 239, NULL, NULL, '<span class=\"seria-all\">Konstruktori'),
(412, 5, '<span class=\"seria-all\">Muzikalni igrachki', 239, NULL, NULL, '<span class=\"seria-all\">Muzikalni igrachki'),
(413, 5, '<span class=\"seria-all\">Plajni artikuli', 239, NULL, NULL, '<span class=\"seria-all\">Plajni artikuli'),
(414, 5, '<span class=\"seria-all\">Avtomobili, motori, djipove,  kamioni', 239, NULL, NULL, '<span class=\"seria-all\">Avtomobili, motori, djipove,  kamioni'),
(415, 5, '<span class=\"seria-all\">Radioupravliaemi igrachki', 239, NULL, NULL, '<span class=\"seria-all\">Radioupravliaemi igrachki'),
(416, 5, '<span class=\"seria-all\">Skeitbordove, roleri, hovyrbordi', 239, NULL, NULL, '<span class=\"seria-all\">Skeitbordove, roleri, hovyrbordi'),
(417, 5, '<span class=\"seria-all\">Drugi', 239, NULL, NULL, '<span class=\"seria-all\">Drugi'),
(418, 5, '<span class=\"seria-all\">Detski ranici i chanti', 239, NULL, NULL, '<span class=\"seria-all\">Detski ranici i chanti'),
(419, 5, '<span class=\"seria-all\">Jivotni', 239, NULL, NULL, '<span class=\"seria-all\">Jivotni'),
(420, 5, '<span class=\"seria-all\">Komplekti za momcheta', 239, NULL, NULL, '<span class=\"seria-all\">Komplekti za momcheta'),
(421, 5, '<span class=\"seria-all\">Kukli', 239, NULL, NULL, '<span class=\"seria-all\">Kukli'),
(422, 5, '<span class=\"seria-all\">Muzikalni instrumenti', 239, NULL, NULL, '<span class=\"seria-all\">Muzikalni instrumenti'),
(423, 5, '<span class=\"seria-all\">Pozdravitelni kartichki', 239, NULL, NULL, '<span class=\"seria-all\">Pozdravitelni kartichki'),
(424, 5, '<span class=\"seria-all\">Risuvatelni igri', 239, NULL, NULL, '<span class=\"seria-all\">Risuvatelni igri'),
(425, 5, '<span class=\"seria-all\">Sportni igri', 239, NULL, NULL, '<span class=\"seria-all\">Sportni igri'),
(426, 8, 'Detski magazin', NULL, NULL, NULL, 'Detski magazin'),
(427, 8, 'Promo bebeshki stoki', 426, NULL, NULL, 'Promo bebeshki stoki'),
(428, 8, 'Promo Bebeshki kolichki', 427, NULL, NULL, 'Promo Bebeshki kolichki'),
(429, 8, 'Aksesoari za bebeshki kolichki', 3, NULL, NULL, 'Aksesoari za bebeshki kolichki'),
(430, 8, 'Prigotvi se za maichinstvo', 3, NULL, NULL, 'Prigotvi se za maichinstvo'),
(431, 8, 'Xranene', 3, NULL, NULL, 'Xranene'),
(432, 5, '<span class=\"seria-all\">Transformeri i roboti', 239, NULL, NULL, '<span class=\"seria-all\">Transformeri i roboti'),
(433, 5, '<span class=\"seria-all\">Baterii', 239, NULL, NULL, '<span class=\"seria-all\">Baterii'),
(434, 8, 'Promo Stolcheta za kola', 427, NULL, NULL, 'Promo Stolcheta za kola'),
(435, 8, 'Mebeli za detska staia', 3, NULL, NULL, 'Mebeli za detska staia'),
(436, 8, 'Igrachki za nai-malkite', 14, NULL, NULL, 'Igrachki za nai-malkite'),
(437, 8, 'Prilojni izkustva', 14, NULL, NULL, 'Prilojni izkustva'),
(438, 8, 'Aksesoari za deca', 14, NULL, NULL, 'Aksesoari za deca'),
(439, 8, 'Konstruktori za deca', 14, NULL, NULL, 'Konstruktori za deca'),
(440, 8, 'Figuri, geroi i jivotni', 14, NULL, NULL, 'Figuri, geroi i jivotni'),
(441, 8, 'Detski kukli', 14, NULL, NULL, 'Detski kukli'),
(442, 8, 'Obrazovatelni igri i igrachki', 14, NULL, NULL, 'Obrazovatelni igri i igrachki'),
(443, 8, 'Promo Detski igrachki', 426, NULL, NULL, 'Promo Detski igrachki'),
(444, 8, 'Promo CHinove i stativi', 443, NULL, NULL, 'Promo CHinove i stativi'),
(445, 8, 'Detski podaryci za Koleda', 14, NULL, NULL, 'Detski podaryci za Koleda'),
(446, 8, 'Prevozni sredstva', 14, NULL, NULL, 'Prevozni sredstva'),
(447, 8, 'Promo Detski drehi', 426, NULL, NULL, 'Promo Detski drehi'),
(448, 8, 'Promo Obuvki', 447, NULL, NULL, 'Promo Obuvki'),
(449, 8, 'Detski knijki', 78, NULL, NULL, 'Detski knijki'),
(450, 8, 'Ranici za uchilishte', 78, NULL, NULL, 'Ranici za uchilishte'),
(451, 8, 'Detski portmoneta', 78, NULL, NULL, 'Detski portmoneta'),
(452, 8, 'Igrachki za navyn', 14, NULL, NULL, 'Igrachki za navyn');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_links`
--

CREATE TABLE `failed_links` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `link` varchar(255) NOT NULL,
  `type_fail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_10_24_164139_shops', 1),
(7, '2023_10_24_164143_categories', 1),
(8, '2023_10_24_164151_clientcategories', 1),
(9, '2023_10_24_164156_failed_links', 1),
(10, '2023_10_24_164156_product_images', 1),
(11, '2023_10_24_164156_products', 1),
(12, '2023_10_27_094257_clients', 1),
(13, '2023_10_27_094257_checked_products', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `brand` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `category_id` int(11) NOT NULL,
  `price_promotion` varchar(100) NOT NULL,
  `link` text NOT NULL,
  `master_cat_id` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products_images`
--

CREATE TABLE `products_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `image_url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_for_mapping`
--

CREATE TABLE `product_for_mapping` (
  `id` int(11) NOT NULL,
  `client_id` int(10) NOT NULL,
  `url` varchar(300) NOT NULL,
  `mapped` int(11) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shops`
--

CREATE TABLE `shops` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@kulinarcho.com', NULL, '$2y$10$di6H4CLja82tcJ/ldkm/ouf7uc4jKg5i8pakUxiBGndtaSBxHBWX.', NULL, '2023-10-30 17:53:14', '2023-10-30 17:53:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `checked_products`
--
ALTER TABLE `checked_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client_categories`
--
ALTER TABLE `client_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `failed_links`
--
ALTER TABLE `failed_links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products_images`
--
ALTER TABLE `products_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_for_mapping`
--
ALTER TABLE `product_for_mapping`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shops`
--
ALTER TABLE `shops`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT for table `checked_products`
--
ALTER TABLE `checked_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `client_categories`
--
ALTER TABLE `client_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=453;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_links`
--
ALTER TABLE `failed_links`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products_images`
--
ALTER TABLE `products_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_for_mapping`
--
ALTER TABLE `product_for_mapping`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shops`
--
ALTER TABLE `shops`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
