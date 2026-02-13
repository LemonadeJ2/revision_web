CREATE DATABASE takalo;
use takalo;

CREATE TABLE Objets (
    id_objet INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100) NOT NULL,
    description TEXT,
    id_categorie INT NOT NULL,
    id_etat INT NOT NULL,
    id_proprietaire INT NOT NULL,
    id_image INT,
    id_echange INT,
    date_ajout TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE Categories (
    id_categorie INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100) NOT NULL
);

CREATE TABLE Echange (
    id_etat INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100) NOT NULL
);

CREATE TABLE Etat (
    id_etat INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100) NOT NULL
);

CREATE TABLE Historique (
    id_historique INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    id_objet INT NOT NULL,
    id_utilisateur INT NOT NULL,
    id_etat INT NOT NULL,
    id_echange INT NOT NULL,
    date_echange TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (id_objet) REFERENCES Objets(id_objet)
);

