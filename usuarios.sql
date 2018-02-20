CREATE TABLE `usuarios` (
`id` int(10) unsigned NOT NULL AUTO_INCREMENT,
`nombres` varchar(120) DEFAULT NULL,
`app` varchar(120) DEFAULT NULL,
`apm` varchar(120) DEFAULT NULL,
`correo` varchar(120) DEFAULT NULL,
PRIMARY KEY (`id`)
ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8