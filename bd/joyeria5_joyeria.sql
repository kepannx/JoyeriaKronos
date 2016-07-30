-- phpMyAdmin SQL Dump
-- version 4.3.8
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 29-07-2016 a las 16:43:26
-- Versión del servidor: 5.5.42-37.1-log
-- Versión de PHP: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `joyeria5_joyeria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE IF NOT EXISTS `administrador` (
  `id_administrador` int(10) NOT NULL,
  `usuario` varchar(255) NOT NULL,
  `contrasena` varchar(255) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `validacion` varchar(255) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`id_administrador`, `usuario`, `contrasena`, `nombre`, `validacion`) VALUES
(1, 'alejandro', '4516865', 'Alejandro Gonzalez', 'a0acc744da032dc1ec3928f6a2b065e7'),
(2, 'Kronos', '15333967', 'Kronos', '6qmtvtdqoae7b8lnklsuteeoh2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `banerprincipal`
--

CREATE TABLE IF NOT EXISTS `banerprincipal` (
  `id_baner` int(10) NOT NULL,
  `baner` varchar(255) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `descripcion` text NOT NULL,
  `url` varchar(255) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `banerprincipal`
--

INSERT INTO `banerprincipal` (`id_baner`, `baner`, `titulo`, `descripcion`, `url`) VALUES
(10, '1393341160-rotadores-02.png', 'Facebook', '', 'https://www.facebook.com/pages/Joyeria-Kronos/105117592909646?ref=hl');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE IF NOT EXISTS `categorias` (
  `id_categoria` int(10) NOT NULL,
  `categoria` varchar(255) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id_categoria`, `categoria`) VALUES
(1, 'Anillos'),
(2, 'Cadenas'),
(4, 'Pulseras'),
(5, 'Dijes'),
(11, 'Argolla-Pizargolla'),
(7, 'Aretes'),
(10, 'Argollas'),
(12, 'CamÃ¡ndulas'),
(13, 'Topos'),
(14, 'Candongas'),
(15, 'Aros');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `chatban`
--

CREATE TABLE IF NOT EXISTS `chatban` (
  `banid` int(11) NOT NULL,
  `dtmcreated` datetime DEFAULT '0000-00-00 00:00:00',
  `dtmtill` datetime DEFAULT '0000-00-00 00:00:00',
  `address` varchar(255) DEFAULT NULL,
  `comment` varchar(255) DEFAULT NULL,
  `blockedCount` int(11) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `chatconfig`
--

CREATE TABLE IF NOT EXISTS `chatconfig` (
  `id` int(11) NOT NULL,
  `vckey` varchar(255) DEFAULT NULL,
  `vcvalue` varchar(255) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `chatconfig`
--

INSERT INTO `chatconfig` (`id`, `vckey`, `vcvalue`) VALUES
(1, 'dbversion', '1.6.0.3'),
(2, 'title', 'Joyeria Kronos'),
(3, 'hosturl', 'http://joyeriakronos.com'),
(4, 'logo', ''),
(5, 'usernamepattern', '{name}'),
(6, 'chatstyle', 'default'),
(7, 'chattitle', 'Soporte en Linea'),
(8, 'geolink', 'http://api.hostip.info/get_html.php?ip={ip}'),
(9, 'geolinkparams', 'width=440,height=100,toolbar=0,scrollbars=0,location=0,status=1,menubar=0,resizable=1'),
(10, 'online_timeout', '30'),
(11, 'max_uploaded_file_size', '100000'),
(12, 'max_connections_from_one_host', '10'),
(13, 'email', ''),
(14, 'left_messages_locale', 'en'),
(15, 'sendmessagekey', 'enter'),
(16, 'enableban', '0'),
(17, 'enablessl', '0'),
(18, 'forcessl', '0'),
(19, 'usercanchangename', '1'),
(20, 'enablegroups', '0'),
(21, 'enablestatistics', '1'),
(22, 'enablepresurvey', '1'),
(23, 'surveyaskmail', '0'),
(24, 'surveyaskgroup', '1'),
(25, 'surveyaskmessage', '0'),
(26, 'enablepopupnotification', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `chatgroup`
--

CREATE TABLE IF NOT EXISTS `chatgroup` (
  `groupid` int(11) NOT NULL,
  `vclocalname` varchar(64) NOT NULL,
  `vccommonname` varchar(64) NOT NULL,
  `vclocaldescription` varchar(1024) NOT NULL,
  `vccommondescription` varchar(1024) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `chatgroupoperator`
--

CREATE TABLE IF NOT EXISTS `chatgroupoperator` (
  `groupid` int(11) NOT NULL,
  `operatorid` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `chatmessage`
--

CREATE TABLE IF NOT EXISTS `chatmessage` (
  `messageid` int(11) NOT NULL,
  `threadid` int(11) NOT NULL,
  `ikind` int(11) NOT NULL,
  `agentId` int(11) NOT NULL DEFAULT '0',
  `tmessage` text NOT NULL,
  `dtmcreated` datetime DEFAULT '0000-00-00 00:00:00',
  `tname` varchar(64) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `chatmessage`
--

INSERT INTO `chatmessage` (`messageid`, `threadid`, `ikind`, `agentId`, `tmessage`, `dtmcreated`, `tname`) VALUES
(1, 1, 3, 0, 'Vistante fue redireccionado de la pagina http://www.joyeriakronos.com/index.php', '2011-05-16 16:09:29', NULL),
(2, 1, 4, 0, 'Gracias por ponerse en contacto con nosotros. El operador estara con usted en breve...', '2011-05-16 16:09:29', NULL),
(3, 1, 6, 0, 'Operador Asesor 1 Entrando a la conversación', '2011-05-16 16:09:42', NULL),
(4, 1, 7, 0, '', '2011-05-16 16:09:42', NULL),
(5, 1, 2, 2, 'Hola! Bienvenido a nuestra ayuda en vivo. En que puedo ayudarle ?', '2011-05-16 16:09:58', 'Asesor 1'),
(6, 1, 1, 0, 'hola,  deseo  saber  cuanto cuesta el anillo con la  referencia XXX', '2011-05-16 16:10:14', 'Juan'),
(7, 1, 6, 0, 'Operador Asesor 1 salió de la conversación', '2011-05-16 16:10:40', NULL),
(8, 1, 6, 0, 'Visitante Juan salió de la conversación', '2011-05-16 16:10:44', NULL),
(9, 2, 3, 0, 'Vistante fue redireccionado de la pagina http://www.joyeriakronos.com/', '2011-05-18 17:48:35', NULL),
(10, 2, 4, 0, 'Gracias por ponerse en contacto con nosotros. El operador estara con usted en breve...', '2011-05-18 17:48:35', NULL),
(11, 2, 6, 0, 'Operador Administrator Entrando a la conversación', '2011-05-18 17:49:17', NULL),
(12, 2, 7, 0, '', '2011-05-18 17:49:17', NULL),
(13, 2, 2, 1, 'buenas tardes', '2011-05-18 17:49:34', 'Administrator'),
(14, 2, 6, 0, 'Visitante Juan  jose salió de la conversación', '2011-05-18 17:54:46', NULL),
(15, 3, 3, 0, 'Vistante fue redireccionado de la pagina http://www.joyeriakronos.com/asesoras.php', '2013-04-06 13:31:15', NULL),
(16, 3, 4, 0, 'Gracias por ponerse en contacto con nosotros. El operador estara con usted en breve...', '2013-04-06 13:31:15', NULL),
(17, 3, 1, 0, 'hola', '2013-04-06 13:32:34', 'Alejandro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `chatoperator`
--

CREATE TABLE IF NOT EXISTS `chatoperator` (
  `operatorid` int(11) NOT NULL,
  `vclogin` varchar(64) NOT NULL,
  `vcpassword` varchar(64) NOT NULL,
  `vclocalename` varchar(64) NOT NULL,
  `vccommonname` varchar(64) NOT NULL,
  `dtmlastvisited` datetime DEFAULT '0000-00-00 00:00:00',
  `vcavatar` varchar(255) DEFAULT NULL,
  `vcjabbername` varchar(255) DEFAULT NULL,
  `iperm` int(11) DEFAULT '65535'
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `chatoperator`
--

INSERT INTO `chatoperator` (`operatorid`, `vclogin`, `vcpassword`, `vclocalename`, `vccommonname`, `dtmlastvisited`, `vcavatar`, `vcjabbername`, `iperm`) VALUES
(1, 'admin', 'cc9288f3c924eab63271370a099c0a55', 'Administrator', 'Administrator', '2013-04-06 13:31:50', '', '', 65535),
(2, 'santafe', '008bd5ad93b754d500338c253d9c1770', 'Asesor 1', 'Asesor 1', '2011-05-16 16:10:45', '', '', 65520),
(3, 'junin', 'cc9288f3c924eab63271370a099c0a55', 'Junin', 'Junin', '2013-04-06 13:32:45', '', '', 65520),
(4, 'infinitas', 'cc9288f3c924eab63271370a099c0a55', 'Infinitas', 'infinitas', '0000-00-00 00:00:00', '', '', 65520);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `chatresponses`
--

CREATE TABLE IF NOT EXISTS `chatresponses` (
  `id` int(11) NOT NULL,
  `locale` varchar(8) DEFAULT NULL,
  `groupid` int(11) DEFAULT NULL,
  `vcvalue` varchar(1024) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `chatresponses`
--

INSERT INTO `chatresponses` (`id`, `locale`, `groupid`, `vcvalue`) VALUES
(1, 'en', NULL, 'Hola, en que puedo ayudarle?'),
(2, 'en', NULL, 'Hola! Bienvenido a nuestra ayuda en vivo. En que puedo ayudarle ?');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `chatrevision`
--

CREATE TABLE IF NOT EXISTS `chatrevision` (
  `id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `chatrevision`
--

INSERT INTO `chatrevision` (`id`) VALUES
(13);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `chatthread`
--

CREATE TABLE IF NOT EXISTS `chatthread` (
  `threadid` int(11) NOT NULL,
  `userName` varchar(64) NOT NULL,
  `userid` varchar(255) DEFAULT NULL,
  `agentName` varchar(64) DEFAULT NULL,
  `agentId` int(11) NOT NULL DEFAULT '0',
  `dtmcreated` datetime DEFAULT '0000-00-00 00:00:00',
  `dtmmodified` datetime DEFAULT '0000-00-00 00:00:00',
  `lrevision` int(11) NOT NULL DEFAULT '0',
  `istate` int(11) NOT NULL DEFAULT '0',
  `ltoken` int(11) NOT NULL,
  `remote` varchar(255) DEFAULT NULL,
  `referer` text,
  `nextagent` int(11) NOT NULL DEFAULT '0',
  `locale` varchar(8) DEFAULT NULL,
  `lastpinguser` datetime DEFAULT '0000-00-00 00:00:00',
  `lastpingagent` datetime DEFAULT '0000-00-00 00:00:00',
  `userTyping` int(11) DEFAULT '0',
  `agentTyping` int(11) DEFAULT '0',
  `shownmessageid` int(11) NOT NULL DEFAULT '0',
  `userAgent` varchar(255) DEFAULT NULL,
  `messageCount` varchar(16) DEFAULT NULL,
  `groupid` int(11) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `chatthread`
--

INSERT INTO `chatthread` (`threadid`, `userName`, `userid`, `agentName`, `agentId`, `dtmcreated`, `dtmmodified`, `lrevision`, `istate`, `ltoken`, `remote`, `referer`, `nextagent`, `locale`, `lastpinguser`, `lastpingagent`, `userTyping`, `agentTyping`, `shownmessageid`, `userAgent`, `messageCount`, `groupid`) VALUES
(1, 'Juan', '1304010582.4840217927', 'Asesor 1', 2, '2011-05-16 16:09:29', '2011-05-16 16:10:40', 6, 3, 57564333, '201.232.16.22', 'http://www.joyeriakronos.com/index.php', 0, 'en', '2011-05-16 16:10:45', '2011-05-16 16:10:42', 0, 0, 6, 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/534.24 (KHTML, like Gecko) Chrome/11.0.696.60 Safari/534.24', '1', NULL),
(2, 'Juan  jose', '1304010582.4840217927', 'Administrator', 1, '2011-05-18 17:48:35', '2011-05-18 17:54:46', 10, 3, 48317359, '201.232.16.22', 'http://www.joyeriakronos.com/', 0, 'en', '2011-05-18 17:54:46', '2011-05-18 17:54:41', 0, 0, 0, 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/534.24 (KHTML, like Gecko) Chrome/11.0.696.60 Safari/534.24', '0', NULL),
(3, 'Alejandro', '1365269468.124230676480', NULL, 0, '2013-04-06 13:31:15', '2013-04-06 13:32:34', 13, 0, 63687040, 'wimax-cali-190-0-25-162.orbitel.net.co', 'http://www.joyeriakronos.com/asesoras.php', 0, 'en', '2013-04-06 14:04:36', '0000-00-00 00:00:00', 0, 0, 17, 'Mozilla/5.0 (Windows NT 5.2) AppleWebKit/537.31 (KHTML, like Gecko) Chrome/26.0.1410.43 Safari/537.31', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mag_name`
--

CREATE TABLE IF NOT EXISTS `mag_name` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL DEFAULT ''
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `mag_name`
--

INSERT INTO `mag_name` (`id`, `name`) VALUES
(5, 'Joyeria');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mag_numbers`
--

CREATE TABLE IF NOT EXISTS `mag_numbers` (
  `id` int(11) NOT NULL,
  `description` varchar(255) NOT NULL DEFAULT '',
  `mag_id` int(11) NOT NULL DEFAULT '0',
  `mag_no` int(11) NOT NULL DEFAULT '0',
  `pages_width` int(4) NOT NULL DEFAULT '0',
  `pages_height` int(4) NOT NULL DEFAULT '0',
  `contents_page` int(11) NOT NULL DEFAULT '2',
  `bg_color` varchar(6) NOT NULL DEFAULT '',
  `bg_image` int(1) NOT NULL DEFAULT '0',
  `loader_color` varchar(6) NOT NULL DEFAULT '',
  `panel_color` varchar(6) NOT NULL DEFAULT '',
  `button_color` varchar(6) NOT NULL DEFAULT '',
  `text_color` varchar(6) NOT NULL DEFAULT '',
  `mag_date` date NOT NULL DEFAULT '0000-00-00'
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `mag_numbers`
--

INSERT INTO `mag_numbers` (`id`, `description`, `mag_id`, `mag_no`, `pages_width`, `pages_height`, `contents_page`, `bg_color`, `bg_image`, `loader_color`, `panel_color`, `button_color`, `text_color`, `mag_date`) VALUES
(4, 'Joyeria', 0, 0, 400, 485, 2, '', 0, '', '', '', '', '2011-04-20'),
(5, 'Joyeria', 0, 0, 400, 485, 2, '', 0, '', '', '', '', '2011-04-20'),
(6, 'Joyeria', 5, 0, 400, 485, 2, '', 0, '', '', '', '', '2011-04-20'),
(7, 'Joyeria2', 5, 0, 400, 485, 2, '', 0, '', '', '', '', '2011-04-20');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mag_pages`
--

CREATE TABLE IF NOT EXISTS `mag_pages` (
  `id` int(11) NOT NULL,
  `mag_no_id` int(11) NOT NULL DEFAULT '0',
  `file_name` varchar(255) NOT NULL DEFAULT ''
) ENGINE=MyISAM AUTO_INCREMENT=57 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `mag_pages`
--

INSERT INTO `mag_pages` (`id`, `mag_no_id`, `file_name`) VALUES
(1, 1, '0718754001231847182.jpg'),
(2, 1, '0859378001231847190.jpg'),
(3, 1, '0375003001231847195.jpg'),
(4, 1, '0500003001231847210.jpg'),
(5, 1, '0531253001231847219.jpg'),
(6, 1, '0562502001231847225.jpg'),
(7, 1, '0765628001231847234.jpg'),
(8, 1, '0703128001231847240.jpg'),
(10, 1, '0296878001231847511.jpg'),
(11, 1, '0359378001231847519.jpg'),
(45, 2, '0746124001232205700.jpg'),
(44, 2, '0521834001232205692.jpg'),
(43, 2, '0233541001232205681.jpg'),
(42, 2, '0209371001232205672.jpg'),
(39, 2, '0215321001232205644.jpg'),
(40, 2, '0924539001232205654.jpg'),
(41, 2, '0919942001232205663.jpg'),
(38, 2, '0090397001232205625.jpg'),
(37, 2, '0715769001232205612.jpg'),
(46, 2, '0964895001232205710.jpg'),
(47, 2, '0433306001232205722.jpg'),
(48, 2, '0146262001232205733.jpg'),
(49, 3, '0565738001303322653.jpg'),
(50, 3, '0965513001303322714.jpg'),
(51, 3, '0712253001303322833.jpg'),
(52, 3, '0423106001303322903.jpg'),
(53, 4, '0481307001303323218.jpg'),
(54, 4, '0341639001303323223.jpg'),
(55, 4, '0640256001303323227.jpg'),
(56, 4, '0050304001303323232.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `page_markers`
--

CREATE TABLE IF NOT EXISTS `page_markers` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `mag_id` int(11) NOT NULL DEFAULT '0',
  `mag_no` int(11) NOT NULL DEFAULT '0',
  `page_no` int(11) NOT NULL DEFAULT '0',
  `page_marker` text NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `page_markers`
--

INSERT INTO `page_markers` (`id`, `user_id`, `mag_id`, `mag_no`, `page_no`, `page_marker`) VALUES
(1, 2, 3, 2, 0, 'markerToRight0|176.6|-159.15|53.9|1'),
(2, 2, 3, 2, 0, 'markerToRight0|176.6|-159.15|53.9|1,markerToRight1|172.7|-162.1|63|3,markerToRight2|75.3|-111.6|9.1|3,markerToRight3|76.6|-128.6|87.05|3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `page_notes`
--

CREATE TABLE IF NOT EXISTS `page_notes` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `mag_id` int(11) NOT NULL DEFAULT '0',
  `mag_no` int(11) NOT NULL DEFAULT '0',
  `page_no` int(11) NOT NULL DEFAULT '0',
  `page_note` text NOT NULL,
  `note_win` int(11) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE IF NOT EXISTS `productos` (
  `id` int(10) NOT NULL,
  `producto` varchar(255) NOT NULL,
  `marca` varchar(20) NOT NULL,
  `subcategoria` varchar(255) NOT NULL,
  `descripcion` text NOT NULL,
  `categoria` int(10) NOT NULL,
  `material` varchar(255) NOT NULL,
  `referencia` varchar(255) NOT NULL,
  `valor` varchar(255) NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `tags` varchar(500) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=206 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `producto`, `marca`, `subcategoria`, `descripcion`, `categoria`, `material`, `referencia`, `valor`, `imagen`, `tags`) VALUES
(9, 'Aretes Cruz', '', '1', '', 7, 'Oro 18k', 'Aretes Cruz', '', '1393342280-Aretes 1.png', 'Aretes'),
(10, 'Aretes Elephant', '', '1', '', 7, 'Oro 18k', 'Aretes Elephant', '', '1393342319-Aretes 2.png', 'Aretes'),
(11, 'Aretes esfera', '', '1', '', 7, 'Oro 18k', 'Aretes esfera', '', '1393342353-Aretes 4.png', 'Aretes'),
(13, 'Aretes Circle', '', '1', '', 7, 'Oro 18k', 'Aretes Circle', '', '1393342507-Aretes 5.png', ''),
(14, 'Aretes Dolphin', '', '1', '', 7, 'Oro 18k', 'Aretes Dolphin', '', '1393342543-Aretes 6.png', ''),
(15, 'Aretes Angels', '', '1', '', 7, 'Oro 18k', 'Aretes Angels', '', '1393342594-Aretes 7.png', ''),
(16, 'Aretes Dragonfly', '', '1', '', 7, 'Oro18k', 'Aretes Dragonfly', '', '1393342643-Aretes 8.png', ''),
(17, 'Aretes Drop', '', '1', '', 7, 'Oro 18k', 'Aretes Drop', '', '1393342795-Aretes 9.png', ''),
(18, 'Aretes T Gucci', '', '1', '', 7, 'Oro 18k', 'Aretes T Gucci', '', '1393342867-Aretes 10.png', ''),
(19, 'Cadena 1', '', '1', '', 2, 'Oro18k', 'Cadena 1', '', '1393342963-cadena 1.png', ''),
(20, 'Cadena 2', '', '1', '', 2, 'Oro 18k', 'Cadena 2', '', '1393343002-cadena 2.png', ''),
(21, 'Cadena 3', '', '1', '', 2, 'Oro 18k', 'Cadena 3', '', '1393343071-cadena 3.png', ''),
(22, 'Cadena 4', '', '1', '', 2, 'Oro 18k', 'Cadena 4', '', '1393343099-cadena 4.png', ''),
(23, 'Cadena 5', '', '1', '', 2, 'Oro 18k', 'Cadena 5', '', '1393343125-cadena 5.png', ''),
(27, 'Cadena 9', '', '1', '', 2, 'Oro 18k', 'Cadena 9', '', '1393343470-cadena 9.png', ''),
(26, 'Cadena 8', '', '1', '', 2, 'Oro 18k', 'Cadena 8', '', '1393343342-cadena 8.png', ''),
(28, 'Cadena 10', '', '1', '', 2, 'Oro 18k', 'Cadena 10', '', '1393343679-cadena 10.png', ''),
(29, 'Cadena 16', '', '1', '', 2, '', 'Cadena 16', '', '', ''),
(30, 'Cadena 16', '', '1', '', 2, 'Oro 18k', 'Cadena 16', '', '1393343705-cadena 16.png', ''),
(31, 'Cadena 18', '', '1', '', 2, 'Oro 18k', 'Cadena 18', '', '1393343726-cadena 18.png', ''),
(32, 'Cadena 22', '', '1', '', 2, 'Oro 18k', 'Cadena 22', '', '1393343752-cadena 22.png', ''),
(33, 'Cadena 23', '', '1', '', 2, 'Oro18k', 'Cadena 23', '', '1393343777-cadena 23.png', ''),
(34, 'Cadena 25', '', '1', '', 2, 'Oro 18k', 'Cadena 25', '', '1393343800-cadena 25.png', ''),
(35, 'CamÃ¡ndula 1', '', '1', '', 12, 'Oro 18k', 'CamÃ¡ndula 1', '', '1393343900-camÃ¡ndula 1.png', ''),
(36, 'CamÃ¡ndula 2', '', '1', '', 12, 'Oro 18k', 'CamÃ¡ndula 2', '', '1393343933-camÃ¡ndula 2.png', ''),
(38, 'CamÃ¡ndula 3', '', '1', '', 12, 'Oro 18k', 'CamÃ¡ndula 3', '', '1393344046-camÃ¡ndula 3.png', ''),
(39, 'CamÃ¡ndula 4', '', '1', '', 12, 'Oro 18k', 'CamÃ¡ndula 4', '', '1393344064-camÃ¡ndula 4.png', ''),
(40, 'CamÃ¡ndula 5', '', '1', '', 12, 'Oro 18k', 'CamÃ¡ndula 5', '', '1393344460-camÃ¡ndula 5.png', ''),
(41, 'CamÃ¡ndula 6', '', '1', '', 12, 'Oro 18k', 'CamÃ¡ndula 6', '', '1393344486-camÃ¡ndula 6.png', ''),
(42, 'CamÃ¡ndula 7', '', '1', '', 12, 'Oro 18k', 'CamÃ¡ndula 7', '', '1393344504-camÃ¡ndula 7.png', ''),
(43, 'CamÃ¡ndula 8', '', '1', '', 12, 'Oro 18k', 'CamÃ¡ndula 8', '', '1393344618-camÃ¡ndula 8.png', ''),
(44, 'CamÃ¡ndula 9', '', '1', '', 12, 'Oro 18k', 'CamÃ¡ndula 9', '', '1393344640-camÃ¡ndula 9.png', ''),
(45, 'Candongas 1', '', '1', '', 14, 'Oro 18k', 'Candongas 1', '', '1393344741-Candongas 1.png', ''),
(47, 'Candongas 2', '', '1', '', 14, 'Oro 18k', 'Candongas 2', '', '1393344910-Candongas 2.png', ''),
(48, 'Candongas 3', '', '1', '', 14, 'Oro 18k', 'Candongas 3', '', '1393344965-Candongas 3.png', ''),
(49, 'Candongas 4', '', '1', '', 14, 'Oro 18k', 'Candongas 4', '', '1393344987-Candongas 4.png', ''),
(50, 'Candongas 5', '', '1', '', 14, 'Oro 18k', 'Candongas 5', '', '1393345034-Candongas 5.png', ''),
(51, 'Candongas 6', '', '1', '', 14, 'Oro 18k', 'Candongas 6', '', '1393345060-Candongas 6.png', ''),
(52, 'Candongas 7', '', '1', '', 14, 'Oro 18k', 'Candongas 7', '', '1393345267-Candongas 7.png', ''),
(53, 'Candongas 8', '', '1', '', 14, 'Oro 18k', 'Candongas 8', '', '1393345343-Candongas 8.png', ''),
(54, 'Candongas 9', '', '1', '', 14, 'Oro 18k', 'Candongas 9', '', '1393345407-Candongas 9.png', ''),
(55, 'Candongas 10', '', '1', '', 14, 'Oro 18k', 'Candongas 10', '', '1393345483-Candongas 10.png', ''),
(56, 'Candongas 11', '', '1', '', 14, 'Oro 18k', 'Candongas 11', '', '1393345544-Candongas 11.png', ''),
(57, 'Candongas 12', '', '1', '', 14, 'Oro 18k', 'Candongas 12', '', '1393345573-Candongas 12.png', ''),
(58, 'Candongas 13', '', '1', '', 14, 'Oro 18k', 'Candongas 13', '', '1393345591-Candongas 13.png', ''),
(59, 'Candongas 14', '', '1', '', 14, 'Oro 18k', 'Candongas 14', '', '1393345622-Candongas 14.png', ''),
(60, 'Candongas 15', '', '1', '', 14, 'Oro 18k', 'Candongas 15', '', '1393345640-Candongas 15.png', ''),
(61, 'Candongas 16', '', '1', '', 14, 'Oro 18k', 'Candongas 16', '', '1393345661-Candongas 16.png', ''),
(62, 'Dije 1', '', '1', '', 5, 'Oro 18k', 'Dije 1', '', '1393345845-dije (1).png', ''),
(65, 'Dije 2', '', '1', '', 5, 'Oro 18k', 'Dije 2', '', '1393346014-dije (2).png', ''),
(66, 'Dije 3', '', '1', '', 5, 'Oro 18k', 'Dije 3', '', '1393346060-dije (3).png', ''),
(67, 'Dije 4', '', '1', '', 5, 'Oro 18k', 'Dije 4', '', '1393346085-dije (4).png', ''),
(68, 'Dije 5', '', '1', '', 5, 'Oro 18k', 'Dije 5', '', '1393346102-dije (5).png', ''),
(69, 'Dije 6', '', '1', '', 5, 'Oro 18k', 'Dije 6', '', '1393346355-dije (6).png', ''),
(70, 'Dije 7', '', '1', '', 5, 'Oro 18k', 'Dije 7', '', '1393346416-dije (7).png', ''),
(71, 'Dije 8', '', '1', '', 5, 'Oro 18k', 'Dije 8', '', '1393346447-dije (8).png', ''),
(72, 'Dije 9', '', '1', '', 5, 'Oro 18k', 'Dije 9', '', '1393346474-dije (9).png', ''),
(73, 'Dije 10', '', '1', '', 5, 'Oro 18k', 'Dije 10', '', '1393346650-dije 1 (10).png', ''),
(74, 'Pulsera 1', '', '1', '', 4, 'Oro 18k', 'Pulsera 1', '', '1393346734-Pulsera 1.png', ''),
(75, 'Pulsera 2', '', '1', '', 4, 'Oro 18k', 'Pulsera 2', '', '1393346758-Pulsera 2.png', ''),
(76, 'Pulsera 3', '', '1', '', 4, 'Oro 18k', 'Pulsera 3', '', '1393346827-Pulsera 3.png', ''),
(77, 'Pulsera 4', '', '1', '', 4, 'Oro18k', 'Pulsera 4', '', '1393346966-Pulsera 4.png', ''),
(79, 'Pulsera 5', '', '1', '', 4, 'Oro 18k', 'Pulsera 5', '', '1393347063-Pulsera 5.png', ''),
(80, 'Pulsera 6', '', '1', '', 4, 'Oro 18k', 'Pulsera 6', '', '1393347079-Pulsera 6.png', ''),
(81, 'Pulsera 7', '', '1', '', 4, 'Oro 18k', 'Pulsera 7', '', '1393347101-pulsera 7.png', ''),
(82, 'Pulsera 8', '', '1', '', 4, 'Oro 18k', 'Pulsera 8', '', '1393347122-pulsera 8.png', ''),
(83, 'Pulsera 9', '', '1', '', 4, 'Oro 18k', 'Pulsera 9', '', '1393347145-pulsera 9.png', ''),
(84, 'Pulsera 10', '', '1', '', 4, 'Oro 18k', 'Pulsera 10', '', '1393347361-pulsera 10.png', ''),
(87, 'Topos 1', '', '1', '', 13, 'Oro 18k', 'Topos 1', '', '1393347945-topos (1).png', ''),
(88, 'Topos 2', '', '1', '', 13, 'Oro 18k', 'Topos 2', '', '1393347965-topos (2).png', ''),
(89, 'Topos 3', '', '1', '', 13, 'Oro 18k', 'Topos 3', '', '1393348301-topos (3).png', ''),
(90, 'Topos 4', '', '1', '', 13, 'Oro 18k', 'Topos 4', '', '1393348322-topos (4).png', ''),
(91, 'Topos 5', '', '1', '', 13, 'Oro 18k', 'Topos 5', '', '1393348340-topos (5).png', ''),
(92, 'Topos 6', '', '1', '', 13, 'Oro 18k', 'Topos 6', '', '1393348361-topos (6).png', ''),
(93, 'Topos 7', '', '1', '', 13, 'Oro 18k', 'Topos 7', '', '1393348384-topos (7).png', ''),
(94, 'Topos 8', '', '1', '', 13, 'Oro 18k', 'Topos 8', '', '1393348400-topos (8).png', ''),
(95, 'Topos 9', '', '1', '', 13, 'Oro 18k', 'Topos 9', '', '1393348418-topos (9).png', ''),
(96, 'Topos 10', '', '1', '', 13, 'Oro 18k', 'Topos 10', '', '1393348436-topos (10).png', ''),
(97, 'Topos 11', '', '1', '', 13, 'Oro 18k', 'Topos 11', '', '1393348459-topos (11).png', ''),
(98, 'Anillo 15Â´s 1', '', '1', '', 1, 'Oro 18k', 'Anillo 15Â´s 1', '', '1393348857-15 1 (1).png', ''),
(99, 'Anillo 15Â´s 2', '', '1', '', 1, 'Oro 18k', 'Anillo 15Â´s 2', '', '1393348893-15 1 (2).png', ''),
(100, 'Anillo 15Â´s 3', '', '1', '', 1, 'Oro 18k', 'Anillo 15Â´s 3', '', '1393348937-15 1 (3).png', ''),
(111, 'Anillo 1', '', '1', '', 1, 'Oro18k', 'Anillo 1', '', '1393351698-anillo (1).png', ''),
(112, 'Anillo 2', '', '1', '', 1, 'Oro 18k', 'Anillo 2', '', '1393351830-anillo (2).png', ''),
(113, 'Anillo 3', '', '1', '', 1, 'Oro 18k', 'Anillo 3', '', '1393351855-anillo (3).png', ''),
(114, 'Anillo 4', '', '1', '', 1, 'Oro 18k', 'Anillo 4', '', '1393351881-anillo (4).png', ''),
(116, 'Anillo 5', '', '1', '', 1, 'Oro 18k', 'Anillo 5', '', '1393352878-anillo (5).png', ''),
(117, 'Anillo 6', '', '1', '', 1, 'Oro 18k', 'Anillo 6', '', '1393352986-anillo (6).png', ''),
(118, 'Anillo 7', '', '1', '', 1, 'Oro 18k', 'Anillo 7', '', '1393355487-anillo (7).png', ''),
(120, 'Anillo 8', '', '1', '', 1, 'Oro 18k', 'Anillo 8', '', '1393355826-anillo (8).png', ''),
(121, 'Anillo 9', '', '1', '', 1, 'Oro 18k', 'Anillo 9', '', '1393355843-anillo (8).png', ''),
(122, 'Anillo 10', '', '1', '', 1, 'Oro 18k', 'Anillo 10', '', '1393355859-anillo (8).png', ''),
(123, 'Anillo 11', '', '1', '', 1, 'Oro 18k', 'Anillo 11', '', '1393357069-anillo (11).png', ''),
(124, 'Anillo 12', '', '1', '', 1, 'Oro 18k', 'Anillo 12', '', '1393357159-anillo (12).png', ''),
(125, 'Anillo 13', '', '1', '', 1, 'Oro 18k', 'Anillo 13', '', '1393357190-anillo (13).png', ''),
(126, 'Anillo 14', '', '1', '', 1, 'Oro 18k', 'Anillo 14', '', '1393357216-anillo (14).png', ''),
(127, 'Anillo 15', '', '1', '', 1, 'Oro 18k', 'Anillo 15', '', '1393357244-anillo (15).png', ''),
(129, 'Anillo 16', '', '1', '', 1, 'Oro 18k', 'Anillo 16', '', '1393357355-anillo (16).png', ''),
(130, 'Anillo 17', '', '1', '', 1, 'Oro 18k', 'Anillo 17', '', '1393357377-anillo (17).png', ''),
(131, 'Anillo 18', '', '1', '', 1, 'Oro 18k', 'Anillo 18', '', '1393357398-anillo (18).png', ''),
(132, 'Anillo 19', '', '1', '', 1, 'Oro 18k', 'Anillo 19', '', '1393357424-anillo (19).png', ''),
(133, 'Anillo 20', '', '1', '', 1, 'Oro 18k', 'Anillo 20', '', '1393357459-anillo (20).png', ''),
(134, 'Anillo 21', '', '1', '', 1, 'Oro 18k', 'Anillo 21', '', '1393357619-anillo (21).png', ''),
(135, 'Anillo 22', '', '1', '', 1, 'Oro 18k', 'Anillo 22', '', '1393357656-anillo (22).png', ''),
(136, 'Anillo 23', '', '1', '', 1, 'Oro18k', 'Anillo 23', '', '1393357679-anillo (23).png', ''),
(138, 'Anillo 24', '', '1', '', 1, 'Oro 18k', 'Anillo 24', '', '1393357795-anillo (24).png', ''),
(139, 'Anillo 25', '', '1', '', 1, 'Oro 18k', 'Anillo 25', '', '1393357821-anillo (25).png', ''),
(140, 'Anillo 26', '', '1', '', 1, 'Oro 18k', 'Anillo 26', '', '1393357938-anillo (26).png', ''),
(141, 'Anillo 27', '', '1', '', 1, 'Oro 18k', 'Anillo 27', '', '1393357965-anillo (27).png', ''),
(142, 'Anillo 28', '', '1', '', 1, 'Oro 18k', 'Anillo 28', '', '1393357997-anillo (28).png', ''),
(144, 'Anillo 29', '', '1', '', 1, 'Oro 18k', 'Anillo 29', '', '1393358145-anillo (29).png', ''),
(145, 'Anillo 30', '', '1', '', 1, 'Oro 18k', 'Anillo 30', '', '1393358182-anillo (30).png', ''),
(146, 'Anillo 31', '', '1', '', 1, 'Oro 18k', 'Anillo 31', '', '1393358205-anillo (31).png', ''),
(147, 'Anillo 32', '', '1', '', 1, 'Oro 18k', 'Anillo 32', '', '1393358276-anillo (32).png', ''),
(148, 'Anillo 33', '', '1', '', 1, 'Oro 18k', 'Anillo 33', '', '1393358379-anillo (33).png', ''),
(149, 'Anillo 34', '', '1', '', 1, 'Oro 18k', 'Anillo 34', '', '1393358408-anillo (34).png', ''),
(150, 'Anillo 35', '', '1', '', 1, 'Oro 18k', 'Anillo 35', '', '1393358433-anillo (35).png', ''),
(151, 'Anillo 35', '', '1', '', 1, 'Oro 18k', 'Anillo 35', '', '1393358453-anillo (35).png', ''),
(152, 'Anillo 36', '', '1', '', 1, 'Oro 18k', 'Anillo 36', '', '1393358623-anillo (36).png', ''),
(153, 'Anillo 37', '', '1', '', 1, 'Oro 18k', 'Anillo 37', '', '1393358650-anillo (37).png', ''),
(154, 'Anillo 38', '', '1', '', 1, 'Oro 18k', 'Anillo 38', '', '1393358773-anillo (38).png', ''),
(155, 'Anillo 39', '', '1', '', 1, 'Oro 18k', 'Anillo 39', '', '1393358794-anillo (39).png', ''),
(156, 'Anillo 40', '', '1', '', 1, 'Oro 18k', 'Anillo 40', '', '1393358819-anillo (40).png', ''),
(157, 'Anillo 41', '', '1', '', 1, 'Oro 18k', 'Anillo 41', '', '1393358857-anillo (41).png', ''),
(158, 'Anillo 42', '', '1', '', 1, 'Oro 18k', 'Anillo 42', '', '1393358882-anillo (42).png', ''),
(159, 'Anillo 43', '', '1', '', 1, 'Oro 18k', 'Anillo 43', '', '1393358910-anillo (43).png', ''),
(160, 'Anillo 44', '', '1', '', 1, 'Oro 18k', 'Anillo 44', '', '1393359067-anillo (44).png', ''),
(161, 'Anillo 45', '', '1', '', 1, 'Oro 18k', 'Anillo 45', '', '1393359099-anillo (45).png', ''),
(162, 'Anillo 46', '', '1', '', 1, 'Oro 18k', 'Anillo 46', '', '1393359128-anillo (46).png', ''),
(163, 'Anillo 47', '', '1', '', 1, 'Oro 18k', 'Anillo 47', '', '1393359189-anillo (47).png', ''),
(164, 'Anillo 48', '', '1', '', 1, 'Oro 18k', 'Anillo 48', '', '1393359223-anillo (48).png', ''),
(165, 'Anillo 49', '', '1', '', 1, 'Oro 18k', 'Anillo 49', '', '1393359246-anillo (49).png', ''),
(166, 'Anillo 50', '', '1', '', 1, 'Oro 18k', 'Anillo 50', '', '1393359272-anillo (50).png', ''),
(167, 'Anillo 51', '', '1', '', 1, 'Oro 18k', 'Anillo 51', '', '1393359302-anillo (51).png', ''),
(168, 'Anillo 52', '', '1', '', 1, 'Oro 18k', 'Anillo 52', '', '1393359434-anillo (52).png', ''),
(169, 'Anillo 53', '', '1', '', 1, 'Oro 18k', 'Anillo 53', '', '1393359464-anillo (53).png', ''),
(170, 'Anillo 54', '', '1', '', 1, 'Oro 18k', 'Anillo 54', '', '1393359494-anillo (54).png', ''),
(171, 'Anillo 55', '', '1', '', 1, 'Oro 18k', 'Anillo 55', '', '1393359520-anillo (55).png', ''),
(172, 'Anillo 56', '', '1', '', 1, 'Oro 18k', 'Anillo 56', '', '1393359626-anillo (56).png', ''),
(173, 'Anillo 57', '', '1', '', 1, 'Oro 18k', 'Anillo 57', '', '1393359656-anillo (57).png', ''),
(174, 'Anillo 58', '', '1', '', 1, 'Oro 18k', 'Anillo 58', '', '1393359941-anillo (58).png', ''),
(175, 'Anillo 59', '', '1', '', 1, 'Oro 18k', 'Anillo 59', '', '1393359988-anillo (59).png', ''),
(176, 'Anillo 60', '', '1', '', 1, 'Oro 18k', 'Anillo 60', '', '1393360205-anillo (60).png', ''),
(177, 'Anillo 61', '', '1', '', 1, 'Oro 18k', 'Anillo 61', '', '1393360233-anillo (61).png', ''),
(178, 'Anillo 62', '', '1', '', 1, 'Oro 18k', 'Anillo 62', '', '1393360368-anillo (62).png', ''),
(179, 'Anillo 63', '', '1', '', 1, 'Oro 18k', 'Anillo 63', '', '1393360393-anillo (63).png', ''),
(180, 'Anillo 64', '', '1', '', 1, 'Oro 18k', 'Anillo 64', '', '1393360423-anillo (64).png', ''),
(181, 'Anillo 65', '', '1', '', 1, 'Oro 18k', 'Anillo 65', '', '1393360450-anillo (65).png', ''),
(182, 'Anillo 66', '', '1', '', 1, 'Oro 18k', 'Anillo 66', '', '1393360502-anillo (66).png', ''),
(183, 'Anillo 67', '', '1', '', 1, 'Oro 18k', 'Anillo 67', '', '1393360688-anillo (67).png', ''),
(184, 'Anillo 68', '', '1', '', 1, 'Oro 18k', 'Anillo 68', '', '1393361064-anillo (68).png', ''),
(185, 'Anillo 69', '', '1', '', 1, 'Oro 18k', 'Anillo 69', '', '1393361144-anillo (69).png', ''),
(186, 'Anillo 70', '', '1', '', 1, 'Oro 18k', 'Anillo 70', '', '1393361206-anillo (70).png', ''),
(187, 'Anillo 71', '', '1', '', 1, 'Oro 18k', 'Anillo 71', '', '1393361344-anillo (71).png', ''),
(197, 'Argolla 1', '', '1', '', 10, 'Oro 18k', 'Argolla 1', '', '1393368881-Argolla (1).png', ''),
(198, 'Argolla 2', '', '1', '', 10, 'Oro 18k', 'Argolla 2', '', '1393368913-Argolla (2).png', ''),
(199, 'Argolla 3', '', '1', '', 10, 'Oro 18k', 'Argolla 3', '', '1393368989-Argolla (3).png', ''),
(200, 'Argolla 4', '', '1', '', 10, 'Oro 18k', 'Argolla 4', '', '1393369047-Argolla (4).png', ''),
(201, 'Argolla 5', '', '1', '', 10, 'Oro 18k', 'Argolla 5', '', '1393369064-Argolla (5).png', ''),
(202, 'Argolla 6', '', '1', '', 10, 'Oro 18k', 'Argolla 6', '', '1393369083-Argolla (6).png', ''),
(203, 'Argolla 7', '', '1', '', 10, 'Oro 18k', 'Argolla 7', '', '1393369119-Argolla (7).png', ''),
(204, 'Argolla 8', '', '1', '', 10, 'Oro 18k', 'Argolla 8', '', '1393369140-Argolla (8).png', ''),
(205, 'Argolla 9', '', '1', '', 10, 'Oro 18k', 'Argolla 9', '', '1393436791-Argolla (9).png', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `puntosventa`
--

CREATE TABLE IF NOT EXISTS `puntosventa` (
  `id_punto` int(1) NOT NULL,
  `punto` varchar(255) NOT NULL,
  `datos` varchar(500) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `puntosventa`
--

INSERT INTO `puntosventa` (`id_punto`, `punto`, `datos`) VALUES
(1, 'Junin Carrera 49 Nro  50-26', ''),
(2, 'Junin 2 Carrera 49 Nro  52-175', ''),
(3, 'Edificio Furatena Calle 50 Nro  40-26', ''),
(4, 'Centro Comercial Junin Maracaibo LOCAL 116 ', ''),
(5, 'Centro Comercial Santa Fe Local 1142', ''),
(7, 'Medellin Colombia', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `relojes`
--

CREATE TABLE IF NOT EXISTS `relojes` (
  `id_marca` int(10) NOT NULL,
  `marca` varchar(255) NOT NULL,
  `imagen` varchar(255) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `relojes`
--

INSERT INTO `relojes` (`id_marca`, `marca`, `imagen`) VALUES
(1, 'casio', 'casio.jpg'),
(2, 'citizen', 'citizen.jpg'),
(3, 'claude bernard', 'claudebernard.jpg'),
(4, 'esprit', 'esprit.jpg'),
(5, 'festina', 'festina.jpg'),
(6, 'guess', 'guess.jpg'),
(7, 'jacques lemans', 'jacques_lemans.jpg'),
(8, 'lacoste', 'lacoste.jpg'),
(9, 'nautica', 'nautica.jpg'),
(10, 'oficina del tiempo', 'oficinadeltiempo.jpg'),
(11, 'orient', 'orient.jpg'),
(12, 'puma', 'puma.jpg'),
(13, 'raymond', 'raymond.jpg'),
(14, 'sandoz', 'sandoz.jpg'),
(15, 'swatch', 'swatch.jpg'),
(16, 'technomarine', 'technomarine.jpg'),
(17, 'time force', 'timeforce.jpg'),
(18, 'tissot', 'tissot.jpg'),
(19, 'tommy hilfiger', 'tommyhilfiger.jpg'),
(20, 'calvin klein', 'ck.jpg'),
(21, 'edox', 'edox.jpg'),
(22, 'Nuevo 2', ''),
(23, 'test', ''),
(24, 'test22', ''),
(25, 'alejandro', '1303935320-alejandro'),
(26, 'testr', '1303938514-testr'),
(27, 'testr', '1303939256-testr'),
(28, 'pruebas', '1303939300-pruebas'),
(29, 'Q & Q', '1304007946-Q & Q');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE IF NOT EXISTS `servicios` (
  `id_servicio` int(10) NOT NULL,
  `servicio` varchar(255) NOT NULL,
  `descripcion` text NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`id_servicio`, `servicio`, `descripcion`) VALUES
(2, 'FabricaciÃ³n de Joyas.', 'Fabricamos y reparamos sus joyas de oro y plata.\r\nLe ofrecemos las mejores garantÃ­as, excelente calidad y precios competitivos.\r\nSomos Ã¡giles y eficientes en la reparaciÃ³n de sus joyas, RecibirÃ¡ su joya como nueva.\r\nRecuerde que despuÃ©s de un cierto periodo de tiempo es necesario hacer un mantenimiento a sus alhajas para que recuperen su brillo y esencia. \r\nContamos para esto con un taller de joyeros  especializados en el cuidado mantenimiento y reparaciÃ³n de las mismas, no dude en contactarnos.\r\n\r\n'),
(3, 'Ventas al por Mayor.', 'Gracias a nuestro vÃ­nculo directo con varios almacenes de cadena, contamos con la experiencia de las ventas en grandes cantidades con excelentes precios altamente competitivos y de gran calidad; AdemÃ¡s de un respaldo continuo antes, durante y despuÃ©s de la compra de los productos.\r\n'),
(4, 'Sistema de CrÃ©dito.', 'Ofrecemos las ventas a crÃ©dito sin cobro por financiaciÃ³n y con el mÃ­nimo de requisitos y con un sistema de pago flexible que se acomoda a las necesidades de nuestros clientes.\r\n'),
(5, 'ReparaciÃ³n de Relojes.', 'Reparamos todo tipo de relojes y en todas las marcas.\r\nJoyerÃ­a Kronos le brinda confianza al momento de reparar un reloj,pues contamos con personal tÃ©cnico especializado que garantizaran el buen funcionamiento y marcha de su reloj despuÃ©s del trabajo realizado. \r\n\r\nServicentro CITIZEN y Servicentro BULOVA.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subcategoria`
--

CREATE TABLE IF NOT EXISTS `subcategoria` (
  `id_subcategoria` int(10) NOT NULL,
  `subcategoria` varchar(255) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `subcategoria`
--

INSERT INTO `subcategoria` (`id_subcategoria`, `subcategoria`) VALUES
(1, 'Oro 18k'),
(2, 'Plata 925'),
(3, 'Acero'),
(5, 'Relojes'),
(7, 'Platino'),
(8, 'Bisuteria');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL DEFAULT '',
  `password` varchar(16) NOT NULL DEFAULT '',
  `date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `date`) VALUES
(1, 'kepannx@hotmail.com', '4516865', '2011-04-20 13:26:07');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users_bg`
--

CREATE TABLE IF NOT EXISTS `users_bg` (
  `id` int(11) NOT NULL,
  `bg_id` int(11) NOT NULL DEFAULT '0',
  `user_id` int(11) NOT NULL DEFAULT '0',
  `mag_name_id` int(11) NOT NULL DEFAULT '0',
  `mag_no_id` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users_bg`
--

INSERT INTO `users_bg` (`id`, `bg_id`, `user_id`, `mag_name_id`, `mag_no_id`) VALUES
(1, 2, 2, 3, 2),
(2, 1, 2, 3, 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`id_administrador`);

--
-- Indices de la tabla `banerprincipal`
--
ALTER TABLE `banerprincipal`
  ADD PRIMARY KEY (`id_baner`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `chatban`
--
ALTER TABLE `chatban`
  ADD PRIMARY KEY (`banid`);

--
-- Indices de la tabla `chatconfig`
--
ALTER TABLE `chatconfig`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `chatgroup`
--
ALTER TABLE `chatgroup`
  ADD PRIMARY KEY (`groupid`);

--
-- Indices de la tabla `chatmessage`
--
ALTER TABLE `chatmessage`
  ADD PRIMARY KEY (`messageid`);

--
-- Indices de la tabla `chatoperator`
--
ALTER TABLE `chatoperator`
  ADD PRIMARY KEY (`operatorid`);

--
-- Indices de la tabla `chatresponses`
--
ALTER TABLE `chatresponses`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `chatthread`
--
ALTER TABLE `chatthread`
  ADD PRIMARY KEY (`threadid`);

--
-- Indices de la tabla `mag_name`
--
ALTER TABLE `mag_name`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `mag_numbers`
--
ALTER TABLE `mag_numbers`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `mag_pages`
--
ALTER TABLE `mag_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `page_markers`
--
ALTER TABLE `page_markers`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `page_notes`
--
ALTER TABLE `page_notes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `puntosventa`
--
ALTER TABLE `puntosventa`
  ADD PRIMARY KEY (`id_punto`);

--
-- Indices de la tabla `relojes`
--
ALTER TABLE `relojes`
  ADD PRIMARY KEY (`id_marca`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`id_servicio`);

--
-- Indices de la tabla `subcategoria`
--
ALTER TABLE `subcategoria`
  ADD PRIMARY KEY (`id_subcategoria`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users_bg`
--
ALTER TABLE `users_bg`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administrador`
--
ALTER TABLE `administrador`
  MODIFY `id_administrador` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `banerprincipal`
--
ALTER TABLE `banerprincipal`
  MODIFY `id_baner` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id_categoria` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT de la tabla `chatban`
--
ALTER TABLE `chatban`
  MODIFY `banid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `chatconfig`
--
ALTER TABLE `chatconfig`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT de la tabla `chatgroup`
--
ALTER TABLE `chatgroup`
  MODIFY `groupid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `chatmessage`
--
ALTER TABLE `chatmessage`
  MODIFY `messageid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT de la tabla `chatoperator`
--
ALTER TABLE `chatoperator`
  MODIFY `operatorid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `chatresponses`
--
ALTER TABLE `chatresponses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `chatthread`
--
ALTER TABLE `chatthread`
  MODIFY `threadid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `mag_name`
--
ALTER TABLE `mag_name`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `mag_numbers`
--
ALTER TABLE `mag_numbers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `mag_pages`
--
ALTER TABLE `mag_pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=57;
--
-- AUTO_INCREMENT de la tabla `page_markers`
--
ALTER TABLE `page_markers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `page_notes`
--
ALTER TABLE `page_notes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=206;
--
-- AUTO_INCREMENT de la tabla `puntosventa`
--
ALTER TABLE `puntosventa`
  MODIFY `id_punto` int(1) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `relojes`
--
ALTER TABLE `relojes`
  MODIFY `id_marca` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT de la tabla `servicios`
--
ALTER TABLE `servicios`
  MODIFY `id_servicio` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `subcategoria`
--
ALTER TABLE `subcategoria`
  MODIFY `id_subcategoria` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `users_bg`
--
ALTER TABLE `users_bg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
