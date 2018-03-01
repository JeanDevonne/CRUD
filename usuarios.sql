--Creación de la BD.
CREATE DATABASE php2 character set utf8;

--Cambiar a la base de datos php2.
USE php2;

-- Creación de la Tabla Usuarios.
CREATE TABLE `usuarios` (
`id` int(10) unsigned NOT NULL AUTO_INCREMENT,
`nombres` varchar(120) DEFAULT NULL,
`app` varchar(120) DEFAULT NULL,
`apm` varchar(120) DEFAULT NULL,
`correo` varchar(120) DEFAULT NULL,
PRIMARY KEY (`id`)
ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8

--Inserción de algunos registros en la tabla usuarios
INSERT INTO usuarios (nombres, app, apm, correo) values 
('Marissa','Mayer','Mayer','mmayer@yahoo.com'),
('Elon','Musk','Maye','errolm@spacex.com'),
('Steve','Jobs','San','jobs@apple.com'),
('Sheryl','Sandberg','Fox','sheryl@feme.com'),
('Lea','Verou','Me','lea@verou.me'),
('Gustavo','Angulo','Dj','gustavo@djtavo.pe'),
('Boby','Fisher','Roque','fisher@fide.com');

--Creación de un usuario y sus privilegios para la base de datos php2
--user: userweb
--pass: php2
grant all privileges on php2.* to userweb@localhost identified by "php2";