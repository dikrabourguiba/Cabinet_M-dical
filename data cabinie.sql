create database GestionCM;
use GestionCM;
create table Patient(Id int primary key,
                      Nom varchar(100),
                      Prénom varchar(100),
                      Cin varchar(100),
                      NuméroDossier varchar(100),
                      Téléphone varchar(100),
                      DateNaiss date,
                      DateReception  date);
create table Diagnostique(IdD int AUTO_INCREMENT primary key,
                          Diagnostique varchar(100),
                          Evolution varchar(100),
                          DateDiagnostique date,
                          Idp int,
                          FOREIGN KEY (Idp) REFERENCES Patient(Id)
                          ON DELETE CASCADE ON UPDATE CASCADE
                          ) ;
create table Users(IdU int  AUTO_INCREMENT primary key ,
                    NomU varchar(100),
                    EmailU varchar(100));                     
                          
insert into Patient  values
(1, 'Nom1', 'Prénom1', 'CIN1', 'ND1', 'Tél1', '1990-01-01', '2024-01-01'),
(2, 'Nom2', 'Prénom2', 'CIN2', 'ND2', 'Tél2', '1995-02-02', '2024-02-02'),
(3, 'Nom3', 'Prénom3', 'CIN3', 'ND3', 'Tél3', '2000-03-03', '2024-03-03'),
(4, 'Nom4', 'Prénom4', 'CIN4', 'ND4', 'Tél4', '1995-02-02', '2024-02-02'),
(5, 'Nom1', 'Prénom1', 'CIN1', 'ND1', 'Tél1', '1990-01-01', '2024-01-01'),
(6, 'Nom2', 'Prénom2', 'CIN2', 'ND2', 'Tél2', '1995-02-02', '2024-02-02');
insert into Diagnostique values
(1,'Fracture de la jambe', 'En cours de traitement', '2024-01-01', 1),
(2,'Diagnostic2', 'Evolution2', '2024-02-02', 2),
(3,'Diagnostic3', 'Evolution3', '2024-03-03', 3),
(4,'Diagnostic4', 'Evolution4', '2024-02-02',4),
(5,'Diagnostic2', 'Evolution2', '2024-02-02', 2),
(6,'Diagnostic3', 'Evolution3', '2024-03-03', 3),
(7,'Diagnostic4', 'Evolution4', '2024-02-02',4);
INSERT INTO Users (NomU, EmailU) VALUES
('Utilisateur1', 'email1@example.com'),
('Utilisateur2', 'email2@example.com'),
('Utilisateur3', 'email3@example.com');


