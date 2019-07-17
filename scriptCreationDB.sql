                


CREATE DATABASE IF NOT EXISTS Promenades;
USE Promenades; 
CREATE USER 'adminBalades'@'%' IDENTIFIED BY 'BAladesbalades'; 

GRANT ALL PRIVILEGES ON Promenades.* TO 'adminBalades';


CREATE TABLE Balade ( 
    id int NOT NULL PRIMARY KEY AUTO_INCREMENT, 
    titre varchar(250), 
    pseudo varchar(60),
    type varchar(1), 
    codepostal varchar(12), 
    ville varchar(80), 
    pays varchar(150),
    lieudepart varchar (255), 
    lieuarrivee varchar (255), 
    description text, 
    etapes text, 
    photo varchar (255)
);


        
