CREATE DATABASE homework;
use homework;

CREATE TABLE utenti(
id int(11) AUTO_INCREMENT PRIMARY KEY,
nome varchar(50),
cognome varchar(50) ,
nomeutente varchar(50) UNIQUE ,
email varchar(50) ,
password varchar(50)   );


CREATE TABLE commenti(
commento_id int(11) AUTO_INCREMENT PRIMARY KEY,
id_utente varchar(50),
data datetime ,
nomeutente varchar(50) ,
messaggio text   );