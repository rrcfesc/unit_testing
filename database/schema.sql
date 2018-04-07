
DROP TABLE IF EXISTS `new_table`
CREATE TABLE IF NOT EXISTS `new_table` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(45) NOT NULL,
  `password` VARCHAR(32) NOT NULL,
  `activo` INT NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`));


INSERT INTO new_table (username, password, activo) VALUES('admin', MD5('123456'),1);
