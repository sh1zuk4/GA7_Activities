-- 1. Crear la base de datos
CREATE DATABASE ejemplo_php;

-- 2. Seleccionar la base de datos
USE ejemplo_php;

-- 3. Crear la tabla usuarios
CREATE TABLE usuarios (
  id int(11) NOT NULL AUTO_INCREMENT,
  nombre varchar(100) NOT NULL,
  email varchar(120) NOT NULL,
  telefono varchar(20) DEFAULT NULL,
  fecha_registro timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;