create database matematica;

use matematica;

CREATE TABLE Grau (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    num1 INT,
    num2 INT,
    grau DOUBLE,
    quadrante VARCHAR(100)
);

drop table grau;

SELECT * FROM grau;
    
describe grau;


-- final --

create database projeto_php;

use projeto_php;

create table cliente(
cod_cliente int auto_increment primary key,
nome varchar(255),
telefone varchar(255),
endereco varchar(255),
email varchar(255),
idade int,
salario double
);

select * from cliente;
describe cliente;

use projeto_php;

create table usuario(
user varchar(255),
senha varchar(255));

insert into usuario(user, senha) values ('cesar','4967');

select * from usuario;
describe usuario;