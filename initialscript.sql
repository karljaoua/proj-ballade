CREATE DATABASE AnnuaireToutou;
USE AnnuaireToutou;

CREATE TABLE Maitres(
    id INT PRIMARY KEY AUTO_INCREMENT ,  /* Usage instead is:  id INT UNIQUE NOT NULL*/
    nom VARCHAR(200),
    telephone VARCHAR(20)
);

CREATE TABLE Chiens(
    id INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(255),
    age INT,
    race VARCHAR(200),
    id_maitre INT,
    FOREIGN KEY (id_maitre) REFERENCES Maitres(id)
);
CREATE USER 'adminToutou'@'%' IDENTIFIED BY 'Annu@ireTOutOu';

GRANT ALL PRIVILEGES ON AnnuaireToutou.* TO 'adminToutou'@'%'

INSERT INTO Maitres (nom, telephone VALUES ('Bob', '0798751325')

INSERT INTO Chiens (nom, age, race, id_maitre) VALUES ('Botz', 3, 'Fox-terrier', 2);

--Exercice 7
SELECT id, nom, race FROM Chiens;


--Exercice 8
SELECT * FROM Chiens WHERE id = 1;

--Exercice 8a
SELECT C.id, C.nom, C.age, C.race, M.nom as nommaitre, M.telephone, 
FROM Chiens  C
INNER JOIN Maitres  M ON C.id = M.id 
WHERE C.id > 3; 