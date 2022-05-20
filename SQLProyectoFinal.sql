-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2022 at 09:54 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `proyectofinal`
--
CREATE DATABASE IF NOT EXISTS `proyectofinal` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci;
USE `proyectofinal`;

-- --------------------------------------------------------

--
-- Table structure for table `articulos`
--

CREATE TABLE `articulos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `precio` decimal(8,2) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp(),
  `id_usuario` int(11) NOT NULL,
  `vendido` tinyint(1) NOT NULL DEFAULT 0,
  `registrationDate` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `compras`
--

CREATE TABLE `compras` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_articulo` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `idDepartment` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `description` text COLLATE utf8_spanish_ci NOT NULL,
  `phone` int(9) NOT NULL,
  `emailDepartment` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `iconDepartment` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `disableDepartment` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`idDepartment`, `name`, `description`, `phone`, `emailDepartment`, `iconDepartment`, `disableDepartment`) VALUES
(1, 'Servicios Sociales', 'Servicios Sociales', 0, '', '', 0),
(2, 'Centro Dia Mayores', 'Centro Dia Mayores', 0, '', '', 0),
(3, 'Unidad de Empleo', 'Unidad de Empleo', 0, '', '', 0),
(4, 'Centro de la Mujer', 'Centro de la Mujer', 0, '', '', 0),
(5, 'Deportes', 'Deportes', 0, '', '', 0),
(6, 'PID', 'Punto de Inclusión Digital', 0, '', '', 0),
(7, 'Centro Escolar', 'Centro Escolar', 0, '', '', 0),
(8, 'Pistas Deportivas', 'Pistas Deportivas', 1004, 'deporte@argamasilladealba.es', '<i class=\"fa-solid fa-sportsball\"></i>', 1);

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `description` text COLLATE utf8_spanish_ci NOT NULL,
  `location` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `id_department` int(11) NOT NULL,
  `id_service` int(11) NOT NULL,
  `id_attendUser` int(11) NOT NULL,
  `id_clientUser` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `state` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `result` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `date` date NOT NULL,
  `hour` time NOT NULL,
  `duration` time NOT NULL,
  `registrationDate` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `description`, `location`, `id_department`, `id_service`, `id_attendUser`, `id_clientUser`, `id_user`, `state`, `result`, `date`, `hour`, `duration`, `registrationDate`) VALUES
(118, 'prueba 15', 'descripcion 15', '', 1, 15, 65, 65, 65, 'En Proceso', 'No asiste', '2022-05-15', '15:55:00', '00:15:00', '2022-05-06 18:55:42'),
(119, 'cintia prueba', 'descripcion cintia', '', 6, 24, 65, 88, 65, 'Iniciada', '', '2022-05-06', '18:55:00', '00:30:00', '2022-05-06 18:56:12'),
(120, 'prueba Alicia', 'descripcion prueba Alicia', '', 4, 41, 85, 86, 85, 'En Proceso', 'Asistio', '2022-05-06', '23:02:00', '00:15:00', '2022-05-06 20:02:38'),
(121, 'Prueba Cintia', 'descripcion prueba CIntia', '', 3, 39, 85, 88, 65, 'Registrada', 'Anulada', '2022-05-07', '10:00:00', '00:30:00', '2022-05-07 10:01:12'),
(122, 'Necesito ayuda', 'descripcion de la ayuda', '', 3, 32, 85, 87, 87, 'Registrada', 'Asistio', '2022-05-07', '12:17:00', '03:00:00', '2022-05-07 12:18:09'),
(123, 'Prueba Alicia Centro Mujer', 'Empadronamiento12', '', 4, 47, 85, 86, 65, 'Registrada', 'Asistio', '2022-05-08', '13:36:00', '00:15:00', '2022-05-07 13:37:01'),
(124, 'Jaime 15 Mayo', '2Incripcion centro Adultos', '', 7, 73, 87, 86, 65, 'En Proceso', 'Asistio', '2022-05-15', '14:37:00', '00:15:00', '2022-05-07 13:37:48'),
(125, 'Nueva Ayuda', 'Necesito nueva ayuda adicional', '', 3, 31, 93, 87, 87, 'Iniciada', '', '2022-05-07', '17:02:00', '00:35:00', '2022-05-07 17:03:54'),
(126, 'Paro Alicia', 'Paro Alicia descripcion', '', 3, 31, 65, 86, 65, 'Iniciada', 'Anulada', '2022-05-07', '17:16:00', '00:00:00', '2022-05-07 17:16:42'),
(127, 'Nueva Ayuda', 'Nueva ayuda necesito', '', 3, 31, 65, 86, 87, 'Registrada', 'Anulada', '2022-05-07', '17:24:00', '00:13:00', '2022-05-07 17:25:05'),
(128, 'Ayuda Empleo Arnau', 'Arnau descripcion', '', 3, 31, 0, 93, 93, 'Finalizada', 'Asistio', '2022-05-07', '17:28:00', '00:15:00', '2022-05-07 17:28:55'),
(129, '12Solicitar duplicado Empadronamiento', 'Ayuda ', '', 1, 12, 65, 92, 65, 'Finalizada', 'Asistio', '2022-05-15', '15:51:00', '00:15:12', '2022-05-07 17:30:50'),
(130, 'Alicia ayuda a Arnau', 'Descripcion Alicia ayuda a Arnau', '', 3, 32, 86, 93, 86, 'Registrada', '', '2022-05-07', '17:46:00', '00:00:00', '2022-05-07 17:46:31'),
(131, 'Ayuda Servicios Sociales Arnau', 'Descripcion Ayuda Servicios Sociales Arnau', '', 1, 12, 96, 0, 93, 'Registrada', 'NO', '2022-05-21', '17:51:00', '00:00:00', '2022-05-07 17:51:28'),
(132, 'Atencion dia 13', 'descripcion dia 13', '', 3, 35, 86, 93, 86, 'Iniciada', '', '2022-05-12', '00:25:00', '00:00:00', '2022-05-12 00:26:10'),
(133, 'Necesito ayuda', 'ayuda 12 Mayo', '', 3, 34, 0, 87, 87, 'Registrada', 'Anulada', '2022-05-12', '23:10:00', '00:00:00', '2022-05-12 23:11:06'),
(134, 'Ayuda 13 Mayo', '2descripcion que necesito ayuda', '', 1, 14, 0, 92, 92, 'Registrada', '', '2022-05-13', '00:00:00', '00:00:00', '2022-05-13 00:00:52'),
(135, 'Jubilacion', 'esta muy mayor la mujer ya', '', 1, 15, 0, 96, 65, 'Finalizada', 'No asiste', '2022-05-14', '19:11:00', '00:10:00', '2022-05-14 19:13:56'),
(136, 'Ayuda Pension2', 'Ayuda pension2', '', 1, 12, 65, 96, 65, 'Registrada', 'NO', '2022-05-14', '19:51:00', '00:15:00', '2022-05-14 19:53:45'),
(137, 'Prueba rellenarle Item a Evelyn', 'Descripcion Prueba rellenarle Item a Evelyn', '', 4, 42, 0, 106, 65, 'En Proceso', 'Anulada', '2022-05-14', '20:53:00', '00:15:00', '2022-05-14 20:53:36'),
(138, 'Cambio sexo', 'Solicitud cambio sexo en el registro', '', 1, 19, 65, 106, 65, 'Registrada', 'Anulada', '2022-05-14', '21:57:00', '00:00:00', '2022-05-14 21:58:05'),
(139, 'Jubilación 15 Mayo', 'Regreso Jubilación 15 Mayo', '', 1, 19, 65, 96, 65, 'Registrada', 'Anulada', '2022-05-20', '20:20:00', '00:20:00', '2022-05-15 11:19:51'),
(142, 'Ayuda paro', 'el programa de la voz no ha ido bien', '', 3, 31, 96, 108, 108, 'Registrada', 'Asistio', '2022-05-15', '16:06:00', '00:00:00', '2022-05-15 16:07:32'),
(143, 'Ayuda Empleo', 'Solicitud demanda empleo', '', 3, 31, 96, 109, 109, 'Registrada', 'Asistio', '2022-05-15', '16:42:00', '00:00:00', '2022-05-15 16:42:42'),
(144, 'Ayuda Empleo Jaouad', 'Solicitud ayuda empleo', '', 3, 31, 87, 109, 87, 'En Proceso', 'No responde', '2022-05-15', '16:43:00', '00:15:08', '2022-05-15 16:43:41');

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` int(11) NOT NULL,
  `nombre_archivo` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `id_articulo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `photositems`
--

CREATE TABLE `photositems` (
  `id` int(11) NOT NULL,
  `file_name` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `id_item` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `photositems`
--

INSERT INTO `photositems` (`id`, `file_name`, `id_item`) VALUES
(20, '7a3785be0304ac0b38a3233d6415d401.jpg', 133),
(21, 'acad16cb28f9fe067fc27175716e69f2.jpg', 134),
(22, 'c5430f1cb880ba6e18bbfedaddc982f8.jpg', 135),
(23, '9f6265035871845b402bb7a34e5afcf4.png', 136),
(24, 'c13f27c803f4259b88faaa1f970f6a05.jpg', 137),
(25, 'ab409bd3c922a027ac497c6e4b624bad.jpg', 138),
(26, '09236ad76c1d6779b80990e3ffd2506a.PNG', 139),
(29, '5220d82d417024b924d391a44589f573.jpg', 142),
(30, 'a3e3399e46a9594c2eb6640cb9b552db.jpg', 143);

-- --------------------------------------------------------

--
-- Table structure for table `postalcodes`
--

CREATE TABLE `postalcodes` (
  `code` int(5) DEFAULT NULL,
  `town` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `postalcodes`
--

INSERT INTO `postalcodes` (`code`, `town`) VALUES
(13180, 'ABENOJAR'),
(13410, 'AGUDO'),
(13379, 'ALAMEDA'),
(13690, 'ALAMEDA DE CERVERA'),
(13413, 'ALAMILLO'),
(13340, 'ALBALADEJO'),
(13600, 'ALCAZAR DE SAN JUAN'),
(13116, 'ALCOBA DE LOS MONTES'),
(13107, 'ALCOLEA DE CALATRAVA'),
(13113, 'ALCORNOCAL, EL'),
(13391, 'ALCUBILLAS'),
(13380, 'ALDEA DEL REY'),
(13248, 'ALHAMBRA'),
(13400, 'ALMADEN'),
(13480, 'ALMADENEJOS'),
(13270, 'ALMAGRO'),
(13328, 'ALMEDINA'),
(13580, 'ALMODOVAR DEL CAMPO'),
(13760, 'ALMURADIEL'),
(13117, 'ANCHURAS'),
(13619, 'ARENALES DE SAN GREGORIO'),
(13679, 'ARENAS DE SAN JUAN'),
(13710, 'ARGAMASILLA DE ALBA'),
(13440, 'ARGAMASILLA DE CALATRAVA'),
(13193, 'ARROBA DE LOS MONTES'),
(13432, 'BALLESTEROS DE CALATRAVA'),
(13428, 'BALLESTEROS, LOS'),
(13597, 'BARRIADA RIO OJAILEN'),
(13739, 'BAZAN'),
(13379, 'BELVIS'),
(13129, 'BETETAS, LAS'),
(13596, 'BIENVENIDA'),
(13260, 'BOLAÑOS DE CALATRAVA'),
(13129, 'BONAL, EL'),
(13450, 'BRAZATORTAS'),
(13192, 'CABEZARADOS'),
(13591, 'CABEZARRUBIAS DEL PUERTO'),
(13370, 'CALZADA DE CALATRAVA'),
(13610, 'CAMPO DE CRIPTANA'),
(13430, 'CAÑADA DE CALATRAVA, LA'),
(13331, 'CAÑAMARES'),
(13433, 'CARACUEL DE CALATRAVA'),
(13150, 'CARRION DE CALATRAVA'),
(13329, 'CARRIZOSA'),
(13128, 'CASAS DEL RIO'),
(13196, 'CASAS, LAS'),
(13750, 'CASTELLAR DE SANTIAGO'),
(13428, 'CHARCO DEL TAMUJO'),
(13412, 'CHILLON'),
(13720, 'CINCO CASAS, Estacion'),
(13720, 'CINCO CASAS, Pueblo'),
(13310, 'CONSOLACION, LA'),
(13190, 'CORRAL DE CALATRAVA'),
(13427, 'CORTIJOS DE ABAJO'),
(13427, 'CORTIJOS DE ARRIBA'),
(13345, 'COZAR'),
(13429, 'CRISTO DE ESPIRITU SANTO'),
(13128, 'CUESTA DEL RIO'),
(13250, 'DAIMIEL'),
(13117, 'ENCINACAIDA'),
(13117, 'ENJAMBRE'),
(13140, 'FERNAN CABALLERO'),
(13193, 'FONTANAREJO'),
(13473, 'FONTANOSAS'),
(13130, 'FUENCALIENTE'),
(13429, 'FUENCALIENTE, LA'),
(13333, 'FUENLLANA'),
(13680, 'FUENTE EL FRESNO'),
(13117, 'GAMONOSO'),
(14449, 'GARGANTA, LA'),
(13414, 'GARGANTIEL'),
(13128, 'GARLITERA'),
(13360, 'GRANATULA DE CALATRAVA'),
(13490, 'GUADALMEZ'),
(13640, 'HERENCIA'),
(13200, 'HERRERA DE LA MANCHA'),
(13590, 'HINOJOSAS DE CALATRAVA'),
(13110, 'HORCAJO DE LOS MONTES'),
(13594, 'HOYO, EL'),
(13118, 'HUERTAS DEL SAUCERAL, LAS'),
(13779, 'HUERTEZUELAS'),
(13114, 'ISLAS, LAS'),
(13660, 'LABORES, LAS'),
(13220, 'LLANOS DEL CAUDILLO'),
(13108, 'LUCIANA'),
(13420, 'MALAGON'),
(13200, 'MANZANARES'),
(13230, 'MEMBRILLA'),
(13592, 'MESTANZA'),
(13170, 'MIGUELTURRA'),
(14449, 'MINAS DE HORCAJO'),
(13739, 'MIRONES, LOS'),
(13194, 'MOLINILLO, EL'),
(13326, 'MONTIEL'),
(13350, 'MORAL DE CALATRAVA'),
(13428, 'MORRAS, LAS'),
(13189, 'NAVACERRADA'),
(13114, 'NAVALAJARRA'),
(13193, 'NAVALPINO'),
(13114, 'NAVALRINCON'),
(13194, 'NAVAS DE ESTENA'),
(13620, 'PEDRO MUÑOZ'),
(13429, 'PERALOSAS, LAS'),
(13140, 'PERALVILLO'),
(13196, 'PICON'),
(13100, 'PIEDRABUENA'),
(13129, 'PIEDRALA'),
(13195, 'POBLETE'),
(13120, 'PORZUNA'),
(13428, 'POVEDILLAS, LAS'),
(13390, 'POZO DE LA SERNA'),
(13179, 'POZUELO DE CALATRAVA'),
(13191, 'POZUELOS DE CALATRAVA, LOS'),
(13109, 'PUEBLA DE DON RODRIGO'),
(13342, 'PUEBLA DEL PRINCIPE'),
(13194, 'PUEBLO NUEVO DEL BULLAQUE'),
(13194, 'PUENTES DE PIEDRALA'),
(13650, 'PUERTO LAPICE'),
(13500, 'PUERTOLLANO'),
(13428, 'QUILES, LOS'),
(13129, 'RABINADAS, LAS'),
(13598, 'RETAMAR'),
(13194, 'RETUERTA DE BULLAQUE'),
(13114, 'ROBLEDO, EL'),
(13249, 'RUIDERA'),
(13414, 'SACERUELA'),
(13415, 'SAN BENITO'),
(13779, 'SAN BRUNO'),
(13247, 'SAN CARLOS DEL VALLE'),
(13779, 'SAN LORENZO DE CALATRAVA'),
(13327, 'SANTA CRUZ DE LOS CAÑAMOS'),
(13730, 'SANTA CRUZ DE MUDELA'),
(13115, 'SANTA QUITERIA'),
(13630, 'SOCUELLAMOS'),
(13593, 'SOLANA DEL PINO'),
(13240, 'SOLANA, LA'),
(13594, 'SOLANILLA DEL TAMARAL'),
(13429, 'SOTILLO, EL'),
(13114, 'TABLILLAS, LAS'),
(13341, 'TERRINCHES'),
(13128, 'TIÑOSILLAS, LAS'),
(13192, 'TIRTEAFUERA'),
(13194, 'TOLEDANA, LA'),
(13700, 'TOMELLOSO'),
(13194, 'TORNO, EL'),
(13160, 'TORRALBA DE CALATRAVA'),
(13344, 'TORRE DE JUAN ABAD'),
(13740, 'TORRENUEVA'),
(13129, 'TRINCHETO, EL'),
(13739, 'UMBRIA DE FRESNEDA'),
(13470, 'VALDEAZOGUES'),
(13428, 'VALDEHIERRO'),
(13411, 'VALDEMANCO DEL ESTERAS'),
(13300, 'VALDEPEÑAS'),
(13279, 'VALENZUELA DE CALATRAVA'),
(13195, 'VALVERDE'),
(13768, 'VENTA DE CARDENAS'),
(13459, 'VEREDAS'),
(13459, 'VEREDILLA'),
(13332, 'VILLAHERMOSA'),
(13739, 'VILLALBA DE CALATRAVA'),
(13343, 'VILLAMANRIQUE'),
(13595, 'VILLAMAYOR DE CALATRAVA'),
(13330, 'VILLANUEVA DE LA FUENTE'),
(13320, 'VILLANUEVA DE LOS INFANTES'),
(13379, 'VILLANUEVA DE SAN CARLOS'),
(13431, 'VILLAR DEL POZO'),
(13597, 'VILLAR, EL'),
(13670, 'VILLARRUBIA DE LOS OJOS'),
(13210, 'VILLARTA DE SAN JUAN'),
(13460, 'VIÑUELA'),
(13770, 'VISO DEL MARQUES');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `idService` int(11) NOT NULL,
  `idDepartment` int(11) NOT NULL,
  `serviceDescription` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `id_userRegistrerService` int(11) NOT NULL,
  `dateTimeServiceRegistrer` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `surname` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `dni` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `gender` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `birth_date` date DEFAULT NULL,
  `password` varchar(70) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `phone` int(9) NOT NULL,
  `address` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `postalCode` int(5) NOT NULL,
  `photo` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `rol` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `department` int(11) NOT NULL,
  `cookie_id` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `restart_password` tinyint(1) NOT NULL,
  `restart_code` int(11) NOT NULL,
  `disableUser` tinyint(1) NOT NULL,
  `registrationDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `surname`, `dni`, `gender`, `birth_date`, `password`, `email`, `phone`, `address`, `postalCode`, `photo`, `rol`, `department`, `cookie_id`, `restart_password`, `restart_code`, `disableUser`, `registrationDate`) VALUES
(65, 'Juanmi', 'Hurtado Montejano', '06268333M', 'Hombre', '1983-10-13', '$2y$10$nDjluAPNbvDS6a8ArPDOBen4rO.3JKKwsxuclb2ii/gSBBRC0NBXm', 'j@gmail.com', 649564805, 'Crta. Villarrobledo, 30', 13700, '19dc4e173dcb6ba6c36ba8e1a6f186d2.jpg', 'superAdmin', 3, '42269521a080b0698f7ad0a816724529f5cfc79f', 0, 0, 0, '2022-04-12 15:57:28'),
(85, 'Marta', 'Hurtado Coronado', '12312312B', 'Mujer', '1995-03-25', '$2y$10$ihNoOQwkXeczUDzbncYxA.YvGLyTSCjkdScSvEFol885izFxWyPSq', 'marta@gmail.com', 654321200, 'Calle León 9', 13700, '0edb023a7637d990d372cfe6ed6630ec.png', 'superAdmin', 4, '7d3cab6837c9eead7f79cd850d4fc8ff8d20fb65', 0, 0, 0, '2022-05-06 10:03:00'),
(86, 'Alicia', 'Montejano García', '741741741A', 'Mujer', '1975-02-04', '$2y$10$BTYlDEXdn8Zuhp6gBjlWbOy4z6PWtljHwzmHk1Q8tEVa6OSSTf39e', 'alicia@gmail.com', 685685685, '', 13700, '7b201a8a662542d8efdda9313ee9756d.png', 'admin', 0, 'aa5765b27746f246b5fa2335a6eef45b8caa52ec', 0, 0, 0, '2022-05-06 10:25:14'),
(87, 'Jaime', 'Hurtado', '74125125D', 'Hombre', '1999-10-18', '$2y$10$Jvqhys1XuQPQ6pmVEwtW6OJv1sDk78hDJkiWSkk8YkZoQFBqlLRci', 'jaime@gmail.com', 632632632, '', 13180, '872be5ab6648302e50f701190428d20b.png', 'admin', 0, 'efd4b6695db128bc21117e8a8045d58257a58009', 0, 0, 0, '2022-05-06 11:08:23'),
(88, 'Cintia', 'Moreno Hurtado', '74521523D', 'Mujer', '1990-05-24', '$2y$10$oc3Pp0PFVk/mHe1mlcMfq.Y5.yaJmHL5frTxYo38fMI48dR63Y1uy', 'cintia@gmail.com', 674674674, '', 13700, 'b41a7661a76c4fdb0c957072856db845.png', 'user', 0, 'bf188ccd4180f6187411f39f1540d5d95a9e1121', 0, 0, 0, '2022-05-06 11:19:20'),
(92, 'Alberto', 'Picazo Parra', '74859632D', 'Hombre', '1983-10-14', '$2y$10$v6XDqpAggrKmJojkAs9d1u069ECopDCawq/TMxYBhx7QpVRo226Fe', 'alpicazo25@gmail.com', 630063281, '', 13700, '187d83cc9d73390d2c6b35604bd243bf.png', '', 0, '9190ff411b07cc696f14766b9a12bb97355b58b6', 0, 0, 0, '2022-05-07 15:27:28'),
(93, 'Arnau', 'Compayns Rufián', '85741254D', 'NoBinario', '1989-01-31', '$2y$10$FSuYydr77Sq7.OyObjcohefx5CCrrBuGK5fjvtMITCgqHrCp9u9Gu', 'arnau@gmail.com', 651579021, '', 13700, 'ca306df79c41baa18d267ac23b40d116.png', '', 0, '7ed03e47588d2cbe221c5f315fe98061f71f18e6', 0, 0, 0, '2022-05-07 15:28:23'),
(96, 'Ada', 'Lovelace Matemática', '01010101A', 'Mujer', '1815-12-10', '$2y$10$RUB23PtD6e90m6hswrtoneYvErSu8Q..EM.5yX8/.FtSv99DpoHMC', 'ada@gmail.com', 610610610, '', 13700, '213eef8d6fc25df5933365e6730936e3.jpg', 'superAdmin', 6, '7010c7eefbdc43feafeeeb29dfee9a02f2c61529', 0, 0, 0, '2022-05-12 22:32:49'),
(97, 'Josefa', 'Montejano', '74521541F', 'Mujer', '1939-12-31', '$2y$10$5AW/SSUksU73giQ9UfPnhuoD7F.iZIaCrPsZcZFWsp9j0wQU9T56W', 'josefa@gmail.com', 652652600, '', 13700, '06c2cf54df44ca090ae86753e450e391.jpg', 'superAdmin', 0, '3d69d336a2ebdd57e04fc08e0c3fcd97d51ccd1a', 0, 0, 0, '2022-05-13 17:50:17'),
(106, 'Paco', 'Castellanos García', '98563214D', 'NoBinario', '1972-12-31', '$2y$10$7WXOAppOQ2i/GTWSQuZS9ePblNSsoy7ko9/mHETm.EqjHwvj10/1W', 'pace@gmail.com', 965854700, 'Calle Libertad, 53', 13700, '3a78eaab66a769f6b3553b9c46acf68f.jpg', 'admin', 1, 'a08fa608a91be02563bf080491569537a3ba7cdb', 0, 0, 0, '2022-05-14 16:06:02'),
(108, 'Antonio', 'Orozco', '06268333M', 'Hombre', '1974-05-14', '$2y$10$6ZO8I3OPVaZH8JNIDB4gOOiX3Vew3ATntNq8XabTuQN/ildxs8r92', 'orozco@gmail.com', 912541478, 'Calle Principal 1', 13700, 'a3449d3fb90b5b7f6f675f400f9971ca.jpg', '', 0, 'd3453c1b3b40e2b6b7cbb99e22557c7236c671ca', 0, 0, 0, '2022-05-15 14:06:40'),
(109, 'Jaouad', 'Asnousi', 'X7662632K', 'Hombre', '1984-09-17', '$2y$10$BUtZpJ2iyzix.3J7mFGdZ.WkbLBlvzpOOwvqv7MsD2217zL2g3CmO', 'jaouad@gmail.com', 642796267, 'Calle Rios Rosas', 13700, '83dc4c76e3b69b3b64a42f4715206bcc.jpg', '', 0, '773c32bdb340a0e1e5520c2be14f92fa5eb9bdd8', 0, 0, 0, '2022-05-15 14:42:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articulos`
--
ALTER TABLE `articulos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_articulo_usuario` (`id_usuario`);

--
-- Indexes for table `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_articulo` (`id_articulo`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`idDepartment`),
  ADD KEY `idDepartment` (`idDepartment`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_item_user` (`id_user`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_photos_articulos` (`id_articulo`);

--
-- Indexes for table `photositems`
--
ALTER TABLE `photositems`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_photos_items` (`id_item`);

--
-- Indexes for table `postalcodes`
--
ALTER TABLE `postalcodes`
  ADD KEY `postalcodes_code_IDX` (`code`) USING BTREE,
  ADD KEY `code` (`code`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`idService`),
  ADD KEY `idService` (`idService`),
  ADD KEY `idDepartment` (`idDepartment`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `postalCode` (`postalCode`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articulos`
--
ALTER TABLE `articulos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `compras`
--
ALTER TABLE `compras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `idDepartment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=145;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `photositems`
--
ALTER TABLE `photositems`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `idService` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `articulos`
--
ALTER TABLE `articulos`
  ADD CONSTRAINT `fk_articulo_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `compras`
--
ALTER TABLE `compras`
  ADD CONSTRAINT `compras_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `compras_ibfk_2` FOREIGN KEY (`id_articulo`) REFERENCES `articulos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `items`
--
ALTER TABLE `items`
  ADD CONSTRAINT `fk_item_usuario` FOREIGN KEY (`id_user`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `photos`
--
ALTER TABLE `photos`
  ADD CONSTRAINT `fk_photos_articulos` FOREIGN KEY (`id_articulo`) REFERENCES `articulos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `photositems`
--
ALTER TABLE `photositems`
  ADD CONSTRAINT `fk_photos_items` FOREIGN KEY (`id_item`) REFERENCES `items` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `services`
--
ALTER TABLE `services`
  ADD CONSTRAINT `services_ibfk_1` FOREIGN KEY (`idDepartment`) REFERENCES `departments` (`idDepartment`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
