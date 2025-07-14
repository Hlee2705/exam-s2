create database exam_final;

use exam_final;

CREATE TABLE membre(
    id_menbre INT primary key AUTO_INCREMENT,
    nom VARCHAR(100),
    date_de_naissance DATETIME,
    genre CHAR(20),
    email VARCHAR(100),
    ville VARCHAR(100),
    mdp VARCHAR(100),   
    image_profil VARCHAR(100)
);

CREATE TABLE categorie_objet (
    id_categorie INT primary key AUTO_INCREMENT,
    nom_categorie VARCHAR(100)
);

CREATE TABLE objet (
    id_objet INT primary key AUTO_INCREMENT,
    nom_objet VARCHAR(100),
    id_categorie INT,
    id_membre INT
);

CREATE TABLE images_objet (
    id_image INT primary key AUTO_INCREMENT,
    nom_image VARCHAR(100),
    id_objet INT
);

CREATE TABLE emprunt (
    id_emprunt INT primary key AUTO_INCREMENT,
    id_objet INT,
    id_membre INT,
    date_emprunt DATETIME,
    date_retour DATETIME
);

INSERT INTO membre(nom, date_de_naissance, genre, email, ville, mdp, image_profil)
VALUES ("Mahatoky", '2006-03-21', "M", "mateta@gmail.com", "Tana", "123", "image" ),
("Valisoa", '2006-07-19', "F", "valeta@gmail.com", "Tana", "123", "image2"),
("Yoann", '2006-06-12', "M", "yoann@gmail.com", "Tana", "123", "image3"),
("Nekena", '2006-11-03', "F", "nekena@gmail.com", "Tana", "123", "image4");

INSERT INTO categorie_objet(nom_categorie)
VALUES ("esthétique"),
("bricolage"),
("mécanique"),
("cuisine");

-- Objets pour Mahatoky (id_menbre = 1)
INSERT INTO objet(nom_objet, id_categorie, id_membre) VALUES
("Rouge à lèvres", 1, 1),
("Tournevis", 2, 1),
("Bougie d’allumage", 3, 1),
("Mixeur", 4, 1),
("Fond de teint", 1, 1),
("Perceuse", 2, 1),
("Clé à molette", 3, 1),
("Poêle", 4, 1),
("Crayon à sourcils", 1, 1),
("Scie sauteuse", 2, 1);

-- Objets pour Valisoa (id_menbre = 2)
INSERT INTO objet(nom_objet, id_categorie, id_membre) VALUES
("Filtre à huile", 3, 2),
("Casserole", 4, 2),
("Mascara", 1, 2),
("Tournevis cruciforme", 2, 2),
("Disque de frein", 3, 2),
("Four", 4, 2),
("Poudre libre", 1, 2),
("Marteau", 2, 2),
("Amortisseur", 3, 2),
("Mixeur plongeant", 4, 2);

-- Objets pour Yoann (id_menbre = 3)
INSERT INTO objet(nom_objet, id_categorie, id_membre) VALUES
("Crème hydratante", 1, 3),
("Tournevis plat", 2, 3),
("Alternateur", 3, 3),
("Batteur électrique", 4, 3),
("Vernis à ongles", 1, 3),
("Clé Allen", 2, 3),
("Pompe à eau", 3, 3),
("Grille-pain", 4, 3),
("Lotion tonique", 1, 3),
("Scie circulaire", 2, 3);

-- Objets pour Nekena (id_menbre = 4)
INSERT INTO objet(nom_objet, id_categorie, id_membre) VALUES
("Radiateur moteur", 3, 4),
("Cocotte-minute", 4, 4),
("Baume à lèvres", 1, 4),
("Pince multiprise", 2, 4),
("Boîte de vitesses", 3, 4),
("Micro-ondes", 4, 4),
("Crème solaire", 1, 4),
("Tournevis électrique", 2, 4),
("Courroie de distribution", 3, 4),
("Robot pâtissier", 4, 4);

INSERT INTO emprunt(id_objet, id_membre, date_emprunt, date_retour) VALUES
(1, 2, '2025-07-01 10:00:00', '2025-07-05 10:00:00'),
(5, 3, '2025-07-03 14:00:00', '2025-07-07 14:00:00'),
(12, 1, '2025-07-04 09:00:00', '2025-07-10 09:00:00'),
(18, 4, '2025-07-02 16:30:00', '2025-07-06 16:30:00'),
(25, 1, '2025-07-05 08:15:00', '2025-07-11 08:15:00'),
(30, 2, '2025-07-06 17:00:00', '2025-07-13 17:00:00'),
(33, 3, '2025-07-07 13:00:00', '2025-07-14 13:00:00'),
(37, 4, '2025-07-08 11:45:00', '2025-07-12 11:45:00'),
(10, 3, '2025-07-01 09:00:00', '2025-07-04 09:00:00'),
(22, 2, '2025-07-02 15:00:00', '2025-07-09 15:00:00');