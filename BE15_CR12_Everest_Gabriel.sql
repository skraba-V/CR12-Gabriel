-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 02, 2022 at 08:53 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `BE15_CR12_Everest_Gabriel`
--
CREATE DATABASE IF NOT EXISTS `BE15_CR12_Everest_Gabriel` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `BE15_CR12_Everest_Gabriel`;

-- --------------------------------------------------------

--
-- Table structure for table `travel`
--

CREATE TABLE `travel` (
  `travel_id` int(11) NOT NULL,
  `date_go` date NOT NULL,
  `date_back` date NOT NULL,
  `locationName` varchar(130) NOT NULL,
  `continent` enum('Asia','Africa','North America','South America','Europe','Australia') NOT NULL,
  `country` varchar(130) NOT NULL,
  `price` int(11) NOT NULL,
  `description` text NOT NULL,
  `longitude` decimal(11,0) NOT NULL,
  `latitude` decimal(11,0) NOT NULL,
  `picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Truncate table before insert `travel`
--

TRUNCATE TABLE `travel`;
--
-- Dumping data for table `travel`
--

INSERT INTO `travel` (`travel_id`, `date_go`, `date_back`, `locationName`, `continent`, `country`, `price`, `description`, `longitude`, `latitude`, `picture`) VALUES
(6, '2022-06-30', '2022-07-20', 'Brazzaville', 'Africa', 'Kongo', 700, 'Brazzaville ist die Hauptstadt sowie ein Departement der Republik Kongo mit etwa 1,83 Millionen Einwohnern. Brazzaville liegt gegenüber von Kinshasa, der Hauptstadt des Nachbarstaats Demokratische Republik Kongo, am westlichen Ende des Pool Malebo, einer Aufstauung des Flusses Kongo. Beide Städte werden durch eine Fähre verbunden. Die Stadt und somit der Hauptstadtdistrikt grenzt im Norden an das Département Pool und im Süden an die Demokratische Republik Kongo, das frühere Zaire.  Ein weithin sichtbares Wahrzeichen der Stadt ist der 106 Meter hohe Tour Nabemba.', '-4', '15', '6247250d0e267.jpg'),
(7, '2022-05-02', '2022-05-27', 'Jaunde', 'Africa', 'Kamerun', 600, 'Yaoundé, auf Deutsch amtlich Jaunde, ist die Hauptstadt Kameruns und mit rund 2,4 Millionen Einwohnern (Schätzung 2017) die zweitgrößte Stadt des Landes nach der Hafenstadt Douala. Gleichzeitig ist Yaoundé Hauptstadt der Region Centre. Der Name Yaoundé ist eine Deformation des Namens der Ewondo, der ursprünglich hier ansässigen Ethnie. Ewondo-Sprecher nennen Yaoundé Ongola.', '4', '12', '62472616a3c9e.jpg'),
(8, '2022-07-10', '2022-07-30', 'Makakou', 'Africa', 'Gaban', 800, 'Makokou is the regional capital of the Ogooué-Ivindo province in Gabon. Its coordinates are 0°34′N 12°52′E. Its altitude is 308 m. Its population in 2004 is around 16,600.  The city lies on the Ivindo River and the N4 road. It grew around iron ore mining and lies near the Ivindo National Park.', '0', '12', '624727157b069.jpg'),
(9, '2022-10-10', '2022-10-25', 'Bangui', 'Africa', 'Central African Republic', 600, 'Die Stadt liegt im Südwesten des Landes am Fluss Ubangi an einer Stelle, wo mehrere Stromschnellen die kommerzielle Schifffahrt flussaufwärts einschränken. Der Ubangi bildet an dieser Stelle die Grenze zwischen der Zentralafrikanischen Republik und der Demokratischen Republik Kongo.', '4', '19', '6247ecfbeb1ea.jpg'),
(10, '2022-11-01', '2022-11-26', 'Rebola', 'Africa', 'Equatorial Guinea', 700, 'Malabo ist die Hauptstadt des Staates Äquatorialguinea, sie liegt an der Nordküste der Insel Bioko. An der Westküste Afrikas am Atlantik gelegen beherbergt sie etwa 297.000 Einwohner. Sie ist ebenfalls Hauptstadt der nördlichen Inselprovinz Bioko Norte.', '4', '9', '6247295600b3d.jpg'),
(11, '2022-04-12', '2022-04-26', 'Mount Hagen', 'Asia', 'Papua-Neuguinea', 600, 'Mount Hagen ist eine Stadt in Papua-Neuguinea und die Hauptstadt der Provinz Western Highlands im Inneren des Landes. Zugleich ist sie auch Hauptstadt des Distrikts Mount Hagen. Mount Hagen hat 46256 Einwohner (Zählung im Jahr 2013) und liegt im Gebirge des Binnenlandes im großen, fruchtbaren Wahgi-Tal in der Nähe des Mount Wilhelm auf einer Höhe von 1677 m.', '-6', '144', '6247454762d37.jpg'),
(13, '2022-04-14', '2022-05-01', 'Mawpow Khar', 'Asia', 'Myanmar', 800, 'Ehemals Burma, in deutschsprachigen Texten auch Birma, ist ein Staat in Südostasien und grenzt an Thailand, Laos, die Volksrepublik China, den Nordosten Indiens, Bangladesch und den Golf von Bengalen. Das Land steht de facto seit 1962 unter einer Militärherrschaft, die zwischen Februar 2011 und Februar 2021 über demokratische Elemente und einen zivilen Präsidenten als Staatsoberhaupt verfügte. In einem Putsch am 1. Februar 2021 riss das Militär die gesamte Staatsgewalt wieder an sich, nahm demokratisch gewählte Volksvertreter fest und verhängte den Notstand.', '25', '97', '62474714005f6.jpg'),
(14, '2022-05-01', '2022-05-20', 'Nongriat', 'Asia', 'Indien', 700, 'Nongriat is a village in the East Khasi Hills district of Meghalaya State, in north-eastern India. It is perhaps best known for its living root bridges; one an impressive double-decker suspension bridge called Jingkieng Nongriat. The village has three functional root bridges. These are crafted by hand, as the Khasi people have done in the Khasi Hills for centuries, intertwining and weaving together the aerial roots of banyan trees on opposite sides of a stream-filled gorge', '25', '92', '624747fc6e1c3.jpg'),
(15, '2022-06-15', '2022-06-30', 'Urucu', 'South America', 'Brasilien', 750, 'Amazonas, amtlich portugiesisch Estado do Amazonas, ist der größte der 26 Bundesstaaten Brasiliens. Er liegt im Nordwesten des Landes und gehört zur Região Norte. In der Hauptstadt Manaus lebt mit mehr als zwei Millionen Einwohnern fast die Hälfte der Bevölkerung des Staates', '-5', '-65', '624748e8b8f1a.jpg'),
(16, '2022-07-07', '2022-07-27', 'Great Bear Lake', 'North America', 'Canada', 1100, 'Great Bear Lake is a lake in the boreal forest of Canada. It is the largest lake entirely in Canada (Lake Superior and Lake Huron are larger but straddle the Canada–US border), the fourth-largest in North America, and the eighth-largest in the world by surface area. The lake is in the Northwest Territories, on the Arctic Circle between 65 and 67 degrees of northern latitude and between 118 and 123 degrees western longitude, 156 m (512 ft) above sea level.', '54', '-123', '62474a7992f07.jpg'),
(17, '2022-09-01', '2022-09-16', 'Collie', 'Australia', 'Australia', 1550, 'Collie is a town in the South West region of Western Australia, 213 kilometres (132 mi) south of the state capital, Perth, and 59 kilometres (37 mi) inland from the regional city and port of Bunbury. It is near the junction of the Collie and Harris Rivers, in the middle of dense jarrah forest and the only coalfields in Western Australia. At the 2016 census, Collie had a population of 7,192.', '-33', '116', '62474b2c5612b.jpg'),
(18, '2022-06-12', '2022-06-22', 'Vetlanda', 'Europe', 'Schweden', 1200, 'Etwa um das Jahr 1000 entwickelte sich hier eine Siedlung, die als Platz für Märkte und für Treffen der Gerichtsbarkeit von regionaler Bedeutung war. Die Stadtrechte erhielt Vetlanda zu Beginn des Jahres 1920. In den 1960er Jahren wurden viele Holzhäuser, die bis dahin das Aussehen des Ortes prägten, im Zuge einer so genannten „Sanierung“ abgerissen. Lange war Vetlanda ein Eisenbahnknotenpunkt, doch heute existieren nur noch eine Güterstrecke und die Verbindung nach Nässjö.', '57', '15', '62474bc50fb8d.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `travel`
--
ALTER TABLE `travel`
  ADD PRIMARY KEY (`travel_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `travel`
--
ALTER TABLE `travel`
  MODIFY `travel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
