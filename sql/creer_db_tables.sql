CREATE DATABASE commerce DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;

USE commerce;

CREATE TABLE produit (
  code         INT(8),
  description  VARCHAR(255),
  marque       VARCHAR(255),
  prix	       FLOAT(8,2),
  quantite     INT(8),
  url_photo    VARCHAR(255),
  CONSTRAINT produit_pk PRIMARY KEY (code)
);

INSERT INTO produit VALUES (101,'Leadex III 850W','Super Flower',189.99,55,'1HU-024C-00005-S07.jpg');
INSERT INTO produit VALUES (102,'Lumière de toilette à capteur de mouvement humain 12 couleurs','Unknown',3.20,86,'5a7bf7a46d638a3d46427eef-1-large.jpg');
INSERT INTO produit VALUES (103,'Smart Watch','Unknown',8.89,44,'5bf3779ab1e61b6235daea71-large.jpg');
INSERT INTO produit VALUES (104,'Puissant pointeur laser RGB','Unknown',1,62,'5f8d594699fdc2246b38d842-large.jpg');
INSERT INTO produit VALUES (105,'H510 ATX Mid-Tower','NZXT',99.99,60,'11-146-317-V01.jpg');
INSERT INTO produit VALUES (106,'970 EVO PLUS M.2 2280 1TB PCIe','SAMSUNG',159.99,10,'20-147-743-V01.jpg');
INSERT INTO produit VALUES (107,'BarraCuda ST1000DM010 1TB','Seagate',54.99,9,'22-179-010-V02.jpg');
INSERT INTO produit VALUES (108,'Casque de jeu professionnel G9000Pro','Unknown',37,17,'60bdc4660968670c43384d05-1-large.jpg');
INSERT INTO produit VALUES (109,'Lampe de poche à lumière forte rechargeable par USB','Unknown',8,7,'6005483f60f8ab79d409ce3e-large.jpg');
INSERT INTO produit VALUES (110,'Gants de lampe de poche LED','Ybety Accessories',3,55,'61e8d49402e28b95b2df235b-large.jpg');
INSERT INTO produit VALUES (111,'ED Strip Lights,65.6ft Music Sync avec télécommande','Lepro',42.99,85,'71tu2v34FqL._AC_SL1200_.jpg');
INSERT INTO produit VALUES (112,'B450 AORUS M','GIGABYTE',89.99,62,'81n-PqaOr+L._AC_SL1500_.jpg');
INSERT INTO produit VALUES (113,'PC de jeu','ABS Legend',6299.99,72,'83-360-162-07.jpg');
INSERT INTO produit VALUES (114,'Souris sans fil RVB Rechargeable','Unknown',6,68,'606bc84c3d51655bdbc758ba-large.jpg');
INSERT INTO produit VALUES (115,'Casque stéréo sans fil pliable','STONEGO',1.29,53,'616db7af9d100ce1946a364a-large.jpg');
INSERT INTO produit VALUES (116,'Ryzen 9 5950X 16-core, 32-thread','AMD',984.99,43,'616VM20+AzL._AC_SL1384_.jpg');
INSERT INTO produit VALUES (117,'Lampe de poche étanche à 4 LEDforte lumière USB rechargeable','Unknown',7,31,'61af0ad5a872b363054e2c82-large.jpg');
INSERT INTO produit VALUES (118,'Refroidisseur à air pour processeur','Vetroo',45.99,55,'APNCS220108sESKf.jpg');


CREATE TABLE utilisateur (
  nom         VARCHAR(255),
  mot_passe   VARCHAR(255),
  CONSTRAINT user_pk PRIMARY KEY (nom)
);

INSERT INTO utilisateur VALUES ('root','root');
INSERT INTO utilisateur VALUES ('moi','1234');
