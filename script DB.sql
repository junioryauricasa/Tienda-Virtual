CREATE DATABASE `tienda_virtual` /*!40100 DEFAULT CHARACTER SET latin1 */;


CREATE TABLE `productos` (
  `productos_id` int(11) NOT NULL AUTO_INCREMENT,
  `codigo` varchar(45) DEFAULT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `cantidad_disponible` int(11) DEFAULT NULL,
  `precio` int(11) DEFAULT NULL,
  `imagenUrl` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`productos_id`),
  UNIQUE KEY `codigo_UNIQUE` (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;



CREATE TABLE `usuarios` (
  `usuarios_id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  `correo` varchar(45) DEFAULT NULL,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`usuarios_id`),
  UNIQUE KEY `username_UNIQUE` (`username`),
  UNIQUE KEY `correo_UNIQUE` (`correo`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;
