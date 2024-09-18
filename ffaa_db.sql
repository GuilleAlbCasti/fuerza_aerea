-- CREANDO LA BASE DE DATOS 
CREATE DATABASE `ffaa_db`;

-- MANIPULANDO LA BASE DE DATOS
USE `ffaa_db`;

-- CREANDO LA TABLA "AVIONES"
CREATE TABLE `aviones` (
  `id` INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
  `modelo` VARCHAR(50) NOT NULL,
  `anio` INT DEFAULT NULL,
  `origen` VARCHAR(50) DEFAULT NULL,
  `horas_vuelo` MEDIUMINT DEFAULT NULL,
  `piloto` INT DEFAULT NULL,
  `base_id` INT DEFAULT NULL,
  FOREIGN KEY (`base_id`) REFERENCES `bases_aerea`(`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- CREANDO LA TABLA "BASES AÉREAS"
CREATE TABLE `bases_aerea` (
  `id` INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
  `nombre` VARCHAR(50) NOT NULL UNIQUE,
  `ubicacion` VARCHAR(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- CREANDO LA TABLA "PILOTOS"
CREATE TABLE `pilotos` (
  `id` INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
  `grado` VARCHAR(10) NOT NULL,
  `nombre` VARCHAR(30) DEFAULT NULL,
  `apellido` VARCHAR(30) NOT NULL,
  `dni` INT NOT NULL UNIQUE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- INGRESO DE DATOS EN LA TABLA "AVIONES"
INSERT INTO `aviones` (`id`, `modelo`, `anio`, `origen`, `horas_vuelo`, `piloto`, `base_id`) VALUES
(1, 'A-4AR Fightinghawk', 1985, 'EEUU', 1865, NULL, 1),
(2, 'IA-63 Pampa III', 1973, 'Argentina', 2375836, NULL, 2);

-- INGRESO DE DATOS EN LA TABLA "BASES AÉREAS"
INSERT INTO `bases_aerea` (`id`, `nombre`, `ubicacion`) VALUES
(1, 'Ira Brigada Aérea', 'Mar del Plata'),
(2, 'IIda Brigada Aérea', 'Azul'),
(3, 'IIIra Brigada Aérea', 'Tandil');

-- INGRESO DE DATOS EN LA TABLA "PILOTOS"
INSERT INTO `pilotos` (`id`, `grado`, `nombre`, `apellido`, `dni`) VALUES
(1, 'Teniente', 'Roberto', 'PASTOR', 23785094),
(2, 'Capitán', 'Miguel', 'ROSALES', 17856098),
(3, 'Alferez', 'Lucía', 'CAPRIOTI', 34786124);