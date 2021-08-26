/*
SQLyog Community v12.12 (64 bit)
MySQL - 5.6.24 : Database - infochat
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`infochat` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `infochat`;

/*Table structure for table `anuncios` */

DROP TABLE IF EXISTS `anuncios`;

CREATE TABLE `anuncios` (
  `id_anuncio` int(11) NOT NULL AUTO_INCREMENT,
  `titulo_anuncio` varchar(50) NOT NULL,
  `tipo_de_anuncio` varchar(50) DEFAULT NULL,
  `descripcion_anuncio` varchar(50) DEFAULT NULL,
  `categoria_anuncio` varchar(30) DEFAULT NULL,
  `carrera` varchar(25) DEFAULT NULL,
  `creador` varchar(25) DEFAULT NULL,
  `fecha_de_publicacion` datetime DEFAULT NULL,
  `fecha_de_limite` datetime DEFAULT NULL,
  PRIMARY KEY (`id_anuncio`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `anuncios` */

/*Table structure for table `carrera` */

DROP TABLE IF EXISTS `carrera`;

CREATE TABLE `carrera` (
  `id_carrera` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(25) DEFAULT NULL,
  `modalidad` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id_carrera`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `carrera` */

/*Table structure for table `chat` */

DROP TABLE IF EXISTS `chat`;

CREATE TABLE `chat` (
  `id_chat` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario_origen` int(11) DEFAULT NULL,
  `id_usuario_destino` int(11) DEFAULT NULL,
  `mensaje` text,
  `fecha_tiempo` datetime DEFAULT NULL,
  PRIMARY KEY (`id_chat`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `chat` */

/*Table structure for table `evento` */

DROP TABLE IF EXISTS `evento`;

CREATE TABLE `evento` (
  `id_evento` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(25) DEFAULT NULL,
  `fecha_publicacion` date DEFAULT NULL,
  `fecha_final` date DEFAULT NULL,
  PRIMARY KEY (`id_evento`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `evento` */

/*Table structure for table `grupos` */

DROP TABLE IF EXISTS `grupos`;

CREATE TABLE `grupos` (
  `id_grupo` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_grupo` varchar(50) DEFAULT NULL,
  `cantidad_integrantes` int(11) DEFAULT NULL,
  `tipo_de_grupo` varchar(25) DEFAULT NULL,
  `fecha_de_creacion` datetime DEFAULT NULL,
  `creador` varchar(25) DEFAULT NULL,
  `descripcion` text,
  `imagen` blob,
  PRIMARY KEY (`id_grupo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `grupos` */

/*Table structure for table `rol` */

DROP TABLE IF EXISTS `rol`;

CREATE TABLE `rol` (
  `id_rol` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_rol` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_rol`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `rol` */

insert  into `rol`(`id_rol`,`nombre_rol`) values (1,'Administrador'),(2,'Docente'),(3,'Estudiante');

/*Table structure for table `usuarios` */

DROP TABLE IF EXISTS `usuarios`;

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `CI` int(11) DEFAULT NULL,
  `nombre` varchar(25) NOT NULL,
  `ap_paterno` varchar(25) NOT NULL,
  `ap_materno` varchar(25) DEFAULT NULL,
  `celular` int(11) DEFAULT NULL,
  `fecha_nac` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `nacionalidad` varchar(25) NOT NULL,
  `id_rol` int(11) DEFAULT NULL,
  `creativo` int(10) DEFAULT NULL,
  `liderazgo` int(10) DEFAULT NULL,
  `programacion` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_usuario`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `celular` (`celular`),
  UNIQUE KEY `CI` (`CI`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `usuarios` */

insert  into `usuarios`(`id_usuario`,`CI`,`nombre`,`ap_paterno`,`ap_materno`,`celular`,`fecha_nac`,`email`,`nacionalidad`,`id_rol`,`creativo`,`liderazgo`,`programacion`) values (1,147,'Beymar','Martinez','Quisbert',147,'0000-00-00','geymar@hotmail.com','Boliviano',1,25,30,10),(5,963,'Yoemil','yañez','nose',369,'2015-03-04','yerbas@gmail.com','Peruano',2,55,80,60),(6,3411010,'carlos','perez','vargas',74582148,'0000-00-00','bastardharon@gmail.com','cocha',1,NULL,NULL,NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
