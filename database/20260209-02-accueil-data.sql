INSERT INTO Categories (nom) VALUES
('Électronique'),
('Vêtements'),
('Livres'),
('Maison'),
('Sport');

INSERT INTO Etat (nom) VALUES
('Neuf'),
('Très bon état'),
('Bon état'),
('Usé');

INSERT INTO Echange (nom) VALUES
('Disponible'),
("En cours d'échange"),
('Échangé'),
('Annulé');

INSERT INTO Objets (nom, description, id_categorie, id_etat, id_proprietaire, id_image, id_echange) VALUES
('Téléphone Samsung A50', 'Smartphone en bon état, batterie correcte', 1, 3, 1, NULL, 1),

('Veste en jean', 'Veste taille M, très peu utilisée', 2, 2, 2, NULL, 1),

('Livre : Introduction à l’algorithmique', 'Livre universitaire, quelques annotations', 3, 3, 3, NULL, 2),

('Mixeur électrique', 'Fonctionne parfaitement', 4, 2, 1, NULL, 1),

('Ballon de football', 'Ballon officiel, légèrement usé', 5, 4, 4, NULL, 3);

-- INSERT INTO Historique (id_objet, id_utilisateur, id_etat, id_echange) VALUES
-- (1, 2, 3, 2),
-- (2, 3, 2, 1),
-- (3, 1, 3, 3),
-- (5, 4, 4, 3);
