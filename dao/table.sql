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


