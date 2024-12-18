create database cadastro_animal;
use cadastro_animal;
CREATE TABLE cadastro_animal (
id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
name VARCHAR (60) NOT NULL,
especie VARCHAR(30) NOT NULL, 
raca VARCHAR (30) NOT NULL, 
idade VARCHAR (15) NOT NULL,
dono VARCHAR (50) NOT NULL,
sexo ENUM('m', 'f') NOT NULL
);
select * from cadastro animal