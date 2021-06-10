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
ALTER TABLE `attribut_css` ADD UNIQUE(`valeur`);
ALTER TABLE `valeur_css` ADD UNIQUE(`valeur`);
INSERT INTO `attribut_css` (`id`, `valeur`, `description`) VALUES (NULL, "background","Propriétés de l'arrière-plan.");
INSERT INTO `attribut_css` (`id`, `valeur`, `description`) VALUES (NULL, "background-attachment","Mode de défilement de l'image d'arrière-plan.");
INSERT INTO `attribut_css` (`id`, `valeur`, `description`) VALUES (NULL, "background-color","Couleur de l'arrière-plan.");
INSERT INTO `attribut_css` (`id`, `valeur`, `description`) VALUES (NULL, "background-image","Image d'arrière-plan.");
INSERT INTO `attribut_css` (`id`, `valeur`, `description`) VALUES (NULL, "background-position-x","Position horizontale de l'image d'arrière-plan.");
INSERT INTO `attribut_css` (`id`, `valeur`, `description`) VALUES (NULL, "background-position-y","Position verticale de l'image d'arrière-plan.");
INSERT INTO `attribut_css` (`id`, `valeur`, `description`) VALUES (NULL, "background-position","Position de l'image d'arrière-plan.");
INSERT INTO `attribut_css` (`id`, `valeur`, `description`) VALUES (NULL, "background-repeat","Mode de répétition de l'image d'arrière-plan.");
INSERT INTO `attribut_css` (`id`, `valeur`, `description`) VALUES (NULL, "behavior","Association d'un script à un élément HTML (Explorer seulement).");
INSERT INTO `attribut_css` (`id`, `valeur`, `description`) VALUES (NULL, "border","Caractéristiques des bordures.");
INSERT INTO `attribut_css` (`id`, `valeur`, `description`) VALUES (NULL, "border-bottom","Caractéristiques de la bordure du bas.");
INSERT INTO `attribut_css` (`id`, `valeur`, `description`) VALUES (NULL, "border-bottom-color","Couleur de la bordure du bas.");
INSERT INTO `attribut_css` (`id`, `valeur`, `description`) VALUES (NULL, "border-bottom-style","Style de la bordure du bas.");
INSERT INTO `attribut_css` (`id`, `valeur`, `description`) VALUES (NULL, "border-bottom-width","Epaisseur de la bordure du bas.");
INSERT INTO `attribut_css` (`id`, `valeur`, `description`) VALUES (NULL, "border-collapse","Mode d'encadrement des cellules adjacentes.");
INSERT INTO `attribut_css` (`id`, `valeur`, `description`) VALUES (NULL, "border-color","Couleur des bordures.");
INSERT INTO `attribut_css` (`id`, `valeur`, `description`) VALUES (NULL, "border-left","Caractéristiques de la bordure de gauche.");
INSERT INTO `attribut_css` (`id`, `valeur`, `description`) VALUES (NULL, "border-left-color","Couleur de la bordure de gauche.");
INSERT INTO `attribut_css` (`id`, `valeur`, `description`) VALUES (NULL, "border-left-style","Style de la bordure de gauche.");
INSERT INTO `attribut_css` (`id`, `valeur`, `description`) VALUES (NULL, "border-left-width","Epaisseur de la bordure de gauche.");
INSERT INTO `attribut_css` (`id`, `valeur`, `description`) VALUES (NULL, "border-right","Caractéristiques de la bordure de droite.");
INSERT INTO `attribut_css` (`id`, `valeur`, `description`) VALUES (NULL, "border-right-color","Couleur de la bordure de droite.");
INSERT INTO `attribut_css` (`id`, `valeur`, `description`) VALUES (NULL, "border-right-style","Style de la bordure de droite.");
INSERT INTO `attribut_css` (`id`, `valeur`, `description`) VALUES (NULL, "border-right-width","Epaisseur de la bordure de droite.");
INSERT INTO `attribut_css` (`id`, `valeur`, `description`) VALUES (NULL, "border-spacing","Espacement entre deux traits de cellules adjacentes.");
INSERT INTO `attribut_css` (`id`, `valeur`, `description`) VALUES (NULL, "border-style","Style des bordures.");
INSERT INTO `attribut_css` (`id`, `valeur`, `description`) VALUES (NULL, "border-top","Caractéristiques de la bordure du haut.");
INSERT INTO `attribut_css` (`id`, `valeur`, `description`) VALUES (NULL, "border-top-color","Couleur de la bordure du haut.");
INSERT INTO `attribut_css` (`id`, `valeur`, `description`) VALUES (NULL, "border-top-style","Style de la bordure du haut.");
INSERT INTO `attribut_css` (`id`, `valeur`, `description`) VALUES (NULL, "border-top-width","Epaisseur de la bordure du haut.");
INSERT INTO `attribut_css` (`id`, `valeur`, `description`) VALUES (NULL, "border-width","Epaisseur des bordures.");
INSERT INTO `attribut_css` (`id`, `valeur`, `description`) VALUES (NULL, "bottom","Position basse d'un élément.");

INSERT INTO `attribut_css` (`id`, `valeur`, `description`) VALUES (NULL, "caption-side","Emplacement du titre des tableaux.");
INSERT INTO `attribut_css` (`id`, `valeur`, `description`) VALUES (NULL, "clear","Gestion de l'habillage (en relation avec la propriété "float")");
INSERT INTO `attribut_css` (`id`, `valeur`, `description`) VALUES (NULL, "clip","Définit la partie visible de l'élément.");
INSERT INTO `attribut_css` (`id`, `valeur`, `description`) VALUES (NULL, "color","Couleur de l'avant plan (texte, par exemple).");
INSERT INTO `attribut_css` (`id`, `valeur`, `description`) VALUES (NULL, "content","Ajoute du contenu dans le document (génération de contenu).");
INSERT INTO `attribut_css` (`id`, `valeur`, `description`) VALUES (NULL, "counter-increment","Définit le pas d'incrémentation d'un compteur (génération de contenu).");
INSERT INTO `attribut_css` (`id`, `valeur`, `description`) VALUES (NULL, "counter-reset","Fixe la valeur de départ d'un compteur (génération de contenu).");
INSERT INTO `attribut_css` (`id`, `valeur`, `description`) VALUES (NULL, "cue","Résumé des deux propriétés Cue-Before et Cue-After.");
INSERT INTO `attribut_css` (`id`, `valeur`, `description`) VALUES (NULL, "cue-before","Séquence sonore à jouer avant la lecture d'un élément.");
INSERT INTO `attribut_css` (`id`, `valeur`, `description`) VALUES (NULL, "cue-after","Séquence sonore à jouer après la lecture d'un élément.");
INSERT INTO `attribut_css` (`id`, `valeur`, `description`) VALUES (NULL, "cursor","Forme du curseur pour la souris.");
INSERT INTO `attribut_css` (`id`, `valeur`, `description`) VALUES (NULL, "direction","Sens d'écriture.");
INSERT INTO `attribut_css` (`id`, `valeur`, `description`) VALUES (NULL, "display","Façon d'afficher un élément.");