CREATE TABLE `forma3_2a9` (
	`id_tutelado` INT(5) NOT NULL AUTO_INCREMENT,
	`nombre` VARCHAR(45) CHARACTER SET utf8 COLLATE utf8_spanish_ci,
	`carrera` VARCHAR(45),
	`promedio` DECIMAL,
	`pregunta1` TEXT(700),
	`pregunta2` TEXT(700),
	`pregunta3` TEXT(700),
	`pregunta4` TEXT(700),
	`pregunta5` TEXT(700),
	`pregunta6` TEXT(700),
	PRIMARY KEY (`id_tutelado`)
) ENGINE=InnoDB;