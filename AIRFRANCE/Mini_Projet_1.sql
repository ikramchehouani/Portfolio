/*CREATION DE LA DATABASE AIRFRANCE*/
CREATE 	DATABASE AirFrance;

/*UTILISATION DE LA DATABASE AIRFRANCE*/
USE AirFrance;

/*CREATION DE LA TABLE AEROPORT*/
CREATE Table Aeroport(
ICAO VARCHAR(45),
IATA VARCHAR(45),
nom VARCHAR(45),
ville VARCHAR(45),
pays VARCHAR(45),
altitude INT);

/*CREATION DE LA CLE PRIMAIRE DE LA TABLE AEROPORT*/
ALTER TABLE Aeroport
ADD CONSTRAINT ICAO_pk
PRIMARY KEY(ICAO);

/*CREATION DE LA TABLE AVION*/
CREATE Table Avion(
numero INT,
modele VARCHAR(45),
marque VARCHAR(45),
capacite INT,
categorie VARCHAR(45),
prix_achat INT,
date_mise_en_service DATE);

/*CREATION DE LA CLE PRIMAIRE DE LA TABLE AVION*/
ALTER TABLE Avion
ADD CONSTRAINT numero_pk
PRIMARY KEY(numero);

/*CREATION DE LA TABLE COMPOSANT*/
CREATE Table Composant(
code_production INT,
nom VARCHAR(45),
categorie VARCHAR(45),
etat INT,
prix INT,
date_installation DATE,
date_fin_de_vie DATE);

/*CREATION DE LA CLE PRIMAIRE DE LA TABLE COMPOSANT*/
ALTER TABLE Composant
ADD CONSTRAINT code_production_pk
PRIMARY KEY(code_production);

/*CREATION DE LA TABLE MANUTENTIONNE*/
CREATE Table Manutentionne(
id_manutentionne INT /*CLE PRIMAIRE ET SON AUTOINCREMENTATION*/ PRIMARY KEY NOT NULL AUTO_INCREMENT,
prenom VARCHAR(45),
nom VARCHAR(45),
role VARCHAR(45),
anciennete INT,
salaire_brut INT);

/*CREATION DE LA TABLE PILOTE*/
CREATE Table Pilote(
id_pilote INT /*CLE PRIMAIRE ET SON AUTOINCREMENTATION*/ PRIMARY KEY NOT NULL AUTO_INCREMENT,
prenom VARCHAR(45),
nom VARCHAR(45),
experience VARCHAR(45),
licence VARCHAR(45),
role VARCHAR(45),
salaire_brut VARCHAR(45));

/*CREATION DE LA TABLE SOUS_TRAITANT*/
CREATE Table Sous_traitant(
nom VARCHAR(45),
categorie VARCHAR(45),
nbr_employe VARCHAR(45));

/*CREATION DE LA CLE PRIMAIRE DE LA TABLE SOUS_TRAITANT*/
ALTER TABLE Sous_traitant
ADD CONSTRAINT nom_pk
PRIMARY KEY(nom);

/*INSERTION DES DONNES DANS LA TABLE AEROPORT*/
INSERT INTO Aeroport(ICAO,IATA,nom,ville,pays,altitude)
VALUES 
('CYYG','YYG','Lester B Pearson International','Toronto','Canada',NULL),
('KLGA','LGA','La Guardia','New York','USA',7),
('KLRF','LRF','Little Rock','JacksonVille','USA',95),
('LFPB','LBAeroportG','Le Bourget','Paris','France',67),
('LFPG','CDG','Charles de Gaulle','Paris','France',120),
('LFRA',NULL,'Avrille','Angers','France',57);

/*INSERTION DES DONNES DANS LA TABLE AVION*/
INSERT INTO Avion(numero,modele,marque,capacite,categorie,prix_achat,date_mise_en_service)
VALUES
(122,'A300','Airbus',110,'"Avion de ligne"',65,'1992-11-1'),
(204,'A320','Airbus',150,'"Avion de ligne"',101,'2001-1-11'),
(95,'A320','Airbus',150,'"Avion de ligne"',101,'1999-04-22'),
(4,'A318','Airbus',117,'"Avion de ligne"',77.4,'2006-2-26'),
(208,'A319','Airbus',124,'"Avion de ligne"',92.3,'2008-2-15'),
(55,'A310','Airbus',15,'"Avion de ligne"',68,'1994-12-4');

/*INSERTION DES DONNES DANS LA TABLE COMPOSANT*/
INSERT INTO Composant(code_production,nom,categorie,etat,prix,date_installation,date_fin_de_vie)
VALUES
(8167,'roue avants','atterissage',2,NULL,'1996-06-07','2016-06-07'),
(189,'roue avants','atterissage',6,NULL,'2005-11-05','2025-11-05'),
(1442,'train atterissage','atterissage',7,NULL,'1996-06-07','2026-06-07'),
(6543,'train atterissage','atterissage',9,NULL,'2005-11-05','2035-11-05'),
(2876,'gouverne de direction','direction',4,NULL,'1996-06-07','2022-06-07'),
(2400,'gouverne de direction','direction',7,NULL,'2005-11-05','2031-11-05'),
(6289,'gouverne atterissage','direction',6,NULL,'1996-06-07','2022-06-07'),
(4826,'gouverne atterissage','direction',6,NULL,'2005-11-05','2031-11-05'),
(4791,'hublot','verrerie',9,NULL,'1996-06-07','2026-06-07'),
(5594,'pare-brise','verrerie',9,NULL,'1996-06-07','2026-06-07');

/*INSERTION DES DONNES DANS LA TABLE MANUTENTIONNE*/
INSERT INTO Manutentionne(prenom,nom,role,anciennete,salaire_brut)
VALUES
('Julien','Paquette','chef mecanicien',16,4200),
('Thomas','Mercier','technicen',2,2700),
('Bertrand','Drouin','technicen',8,3200),
('Ganelon','Lessard','technicen',7,3100),
('Albertine','Durand','responsable securite',10,5100);

/*INSERTION DES DONNES DANS LA TABLE PILOTE*/
INSERT INTO pilote(prenom,nom,experience,licence,role,salaire_brut)
VALUES
('Gemma','Mouet',15,'CLP','pilote',28000),
('Sennet','Lussier',10,'CLP','pilote',22000),
('Bruno','Bisson',1,'CLP','copilote',14000),
('Laurent','Trudeau',2,'CLP','copilote',15000),
('Auguste','Desilets',25,'CLP','pilote',32000);

/*INSERTION DES DONNES DANS LA TABLE SOUS_TRAITANT*/
INSERT INTO Sous_traitant(nom,categorie,nbr_employe)
VALUES
('AAA','composants',150),
('Derichebourg Aeronautics','composants',500),
('Latécoère','composants',220),
('Liebherr Aerospace','assemblage',800),
('Sogeclair','assemblage',200);

/*AFFICHAGE DE TOUTE LA TABLE AEROPORT*/
SELECT * FROM AirFrance.Aeroport;

/*AFFICHAGE DE TOUTE LA TABLE AVION*/
SELECT * FROM AirFrance.Avion;

/*AFFICHAGE DE TOUTE LA TABLE COMPOSANT*/
SELECT * FROM AirFrance.Composant;

/*AFFICHAGE DE TOUTE LA TABLE MANUTENTIONNE*/
SELECT * FROM AirFrance.Manutentionne;

/*AFFICHAGE DE TOUTE LA TABLE PILOTE*/
SELECT * FROM AirFrance.Pilote;

/*AFFICHAGE DE TOUTE LA TABLE SOUS_TRAITANT*/
SELECT * FROM AirFrance.Sous_traitant;

/*AFFICHAGE Du ICAO,DU NOM ET DE LA VILLE OU LE PAYS EST LA FRANCE DANS LA TABLE AEROPORT*/
SELECT ICAO,nom,ville
FROM AirFrance.Aeroport 
WHERE pays='France';

/*AFFICHAGE DE LA TABLE AVION PAR ORDRE DESCENDANT (DU PLUS GRAND AU PLUS PETIT) SELON LE PRIX DACHAT*/
SELECT *
FROM AirFrance.Avion
ORDER BY prix_achat DESC;

/*AFFICHAGE DU NOMBRE DE CATEGORIE DIFFERENTE LUNE DE LAUTRE DANS LA TABLE COMPOSANT*/
SELECT COUNT(categorie) AS Nbr_categorie ,categorie
FROM AirFrance.Composant
GROUP BY categorie;

/*AFFICHAGE DE LA TABLE COMPOSANT PAR ORDRE ASCENDANT (DU PLUS ANCIEN AU PLUS RECENT) SELON LES DATES DONNEES*/
SELECT * 
FROM AirFrance.Composant 
ORDER BY date_installation,date_fin_de_vie ASC;

/*AFFICHAGE DU PRENOM,DU NOM,DU ROLE ET DE LANCIENNETE DANS LA TABLE MANUTENTIONNE OU SE TROUVE LA LETTRE 'O' DANS NIMPORTE QUELLE POSITION DANS LEUR NOM OU BIEN LEUR ANCIENNETE EST PLUS GRANDE QUE 4*/
SELECT prenom,nom,role,anciennete
FROM AirFrance.Manutentionne
WHERE nom LIKE '%o%' OR anciennete>4;

/*AFFICHAGE DE LA MOYENNE DE LEXPERIENCE DES COPILOTES DANS LA TABLE PILOTE*/
SELECT AVG(experience)
FROM AirFrance.Pilote 
WHERE role='copilote';

/*AFFICHAGE DE ID_PILOTE ET ROLE TOUT EN DONNANT LA COMPARAISON DU SALAIRE DANS LA TABLE PILOTE*/
SELECT id_pilote,role,
CASE 
    WHEN salaire_brut<14500 THEN 'Salary is smaller than 14500'
    WHEN salaire_brut=15000 THEN 'Salary is equal to 15000'
    ELSE 'Salary is bigger than 16000'
END
AS Comparaison
FROM Pilote;

/*JOINTURE DES TABLES PILOTE ET MANUTENTIONNE EN AFFICHANT LEUR ID ET ROLE, OU LACIENNETE DU MANUTENTIONNE EST EGALE A LEXPERIENCE DU PILOTE*/
SELECT Manutentionne.id_manutentionne,Manutentionne.role,Pilote.id_pilote,Pilote.role
FROM Manutentionne
INNER JOIN Pilote ON Manutentionne.anciennete=Pilote.experience;

/*AFFICHAGE DE LA TABLE SOUS_TRAITANT OU 450<NOMBRE DEMPLOYE<1000*/
SELECT *
FROM Sous_traitant
WHERE Nbr_employe BETWEEN 450 AND 1000;

/*AFFICHAGE DE LA SOMME DU NOMBRE DEMPLOYE DONT LA CATEGORIE EST DIFFERENTE*/
SELECT SUM(nbr_employe),categorie
FROM Sous_traitant 
GROUP BY categorie
HAVING SUM(nbr_employe)>50;

/*USING SAFE UPDATE MODE */
SET SQL_SAFE_UPDATES = 0;

/*MISE A JOUR DE LA TABLE AEROPORT EN AJOUTANT UNE ALTITUDE DE 215 OU LA VILLE EST TORONTO*/
UPDATE Aeroport
SET altitude=215 
WHERE ville='Toronto';

/*MODIFICATION DU DATA TYPE DE LATTRIBUT MARQUE DANS LA TABLE AVION*/
ALTER TABLE Avion
MODIFY marque VARCHAR(20);

/*SUPPRIMATION DE LA COLONNE PRIX DANS LA TABLE COMPOSANT*/
ALTER TABLE Composant
DROP prix;

/*MISE A JOUR DE LA TABLE AEROPORT EN AJOUTANT UN IATA 'IKR' OU CEST NUL DANS LA TABLE AEROPORT*/
UPDATE Aeroport
SET IATA='IKR'
WHERE IATA IS NULL;

/*RENOMINATION DE LA COLONNE NOM EN COLONNE NICKNAME DANS LA TABLE SOUS_TRAITANT */
ALTER TABLE Sous_traitant
RENAME COLUMN nom TO nickname;

/*AJOUT DUNE COLONNE GRADE DANS LA TABLE MANUTENTIONNE*/
ALTER TABLE Manutentionne
ADD COLUMN grade VARCHAR(15);

/*MISE A JOUR DE LA TABLE MANUTENTIONNE EN AJOUTANT DES DONNEES DANS LA NOUVELLE COLONNE*/
UPDATE Manutentionne
SET grade='senior'
WHERE id_manutentionne=1;

UPDATE Manutentionne
SET grade='superieur'
WHERE id_manutentionne=2;

UPDATE Manutentionne
SET grade='superieur'
WHERE id_manutentionne=3;

UPDATE Manutentionne
SET grade='superieur'
WHERE id_manutentionne=4;

UPDATE Manutentionne
SET grade='medium'
WHERE id_manutentionne=5;

/*END*/



