

                


CREATE DATABASE IF NOT EXISTS Promenades;
USE Promenades; 
CREATE USER 'adminBalades'@'%' IDENTIFIED BY 'BAladesbalades'; 

GRANT ALL PRIVILEGES ON Promenades TO 'adminBalades';


CREATE DATABASE IF NOT EXISTS Promenades; 
USE Promenades;

CREATE TABLE Balade ( 
    Id int NOT NULL PRIMARY KEY AUTO_INCREMENT, 
    Titre varchar(250), 
    Pseudo varchar(60),
    Type varchar(1), 
    Codepostal varchar(12), 
    Ville varchar(80), 
    Pays varchar(150),
    Lieudepart varchar (255), 
    Lieuarrivee varchar (255), 
    Description text, 
    Etapes text, 
    Photo varchar (255)
);


        
