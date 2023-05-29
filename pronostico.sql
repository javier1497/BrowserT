-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.4.25-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para pronostico
CREATE DATABASE IF NOT EXISTS `pronostico` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `pronostico`;

-- Volcando estructura para tabla pronostico.historial
CREATE TABLE IF NOT EXISTS `historial` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` date DEFAULT curdate(),
  `usuario` varchar(100) DEFAULT NULL,
  `long` decimal(20,6) DEFAULT NULL,
  `lat` decimal(20,6) DEFAULT NULL,
  `humeda` decimal(20,6) unsigned zerofill DEFAULT NULL,
  `temperatura` decimal(20,6) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla pronostico.historial: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `historial` DISABLE KEYS */;
INSERT INTO `historial` (`id`, `fecha`, `usuario`, `long`, `lat`, `humeda`, `temperatura`) VALUES
	(1, '2023-05-29', 'jeserano', 80.000000, 76.000000, 00000000000036.000000, 0.000000),
	(19, '2023-05-29', NULL, -80.000000, 25.000000, 00000000000059.000000, 0.000000),
	(20, '2023-05-29', NULL, -80.000000, 25.000000, 00000000000061.000000, 0.000000);
/*!40000 ALTER TABLE `historial` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
