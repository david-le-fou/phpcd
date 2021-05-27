CREATE TABLE `base_c`.`attribut_css` ( 
	`id` INT NOT NULL AUTO_INCREMENT , 
	`valeur` VARCHAR(40) NOT NULL ,  
	`description` TEXT NOT NULL ,  
	 PRIMARY KEY  (`id`)) ENGINE = InnoDB;
CREATE TABLE `base_c`.`valeur_css` (
	`id` INT NOT NULL AUTO_INCREMENT ,  
	`valeur` VARCHAR(40) NOT NULL ,  
	`description` TEXT NOT NULL ,  
	`id_attribut_css` INT NOT NULL ,    
	PRIMARY KEY  (`id`)) ENGINE = InnoDB;
CREATE TABLE `base_c`.`balise_html` ( 
	`id` INT NOT NULL AUTO_INCREMENT , 
	`valeur` VARCHAR(40) NOT NULL , 
	`description` TEXT NOT NULL , 
	PRIMARY KEY (`id`)) ENGINE = InnoDB;
CREATE TABLE `base_c`.`attribut_html` ( 
	`id` INT NOT NULL AUTO_INCREMENT ,  
	`valeur` VARCHAR(40) NOT NULL ,  
	`description` TEXT NOT NULL ,  
	`id_balise_html` INT NOT NULL ,    
	PRIMARY KEY  (`id`)) ENGINE = InnoDB;
INSERT INTO `attribut_css` (`id`, `valeur`, `description`) VALUES (NULL, 'all', 'tout les element');
ALTER TABLE `attribut_css` ADD UNIQUE(`valeur`);
