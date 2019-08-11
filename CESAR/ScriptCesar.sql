-- WARNING !!!
-- drop database bdCheshire; -- Cmentado o que apaga o banco de dados, rsrsr. Tomem cuidado, apenas para uso em seu desenvolvimento inicial
-- WARNING !!!
create database bdCheshire; -- Cria o banco de dados para a aplicação
use bdCheshire; -- Altera o banco de dados utilizado para o da aplicação

CREATE TABLE tblcadastro (
    id INT,
    nome VARCHAR(50),
    sobrenome VARCHAR(50),
    dt_nascimento DATE,
    tipo_de_usuario INT,
    turma INT,
    PRIMARY KEY (id),
    FOREIGN KEY (tipo_de_usuario)
        REFERENCES idtipo (tbltipousuario)
);

CREATE TABLE tbldtregistro (
    idusuario INT,
    nome VARCHAR(50),
    sobrenome VARCHAR(50),
    tipo_de_usuario INT,
    turma INT,
    dtregistro date,
    primary key (idusuario)
);

CREATE TABLE tbllogin (
    idusuario INT,
    usuario VARCHAR(20),
    senha VARCHAR(20),
    FOREIGN KEY (idusuario)
        REFERENCES id (tblcadastro)
);

CREATE TABLE tblcontato (
    idusuario INT,
    celular VARCHAR(20),
    telefone VARCHAR(20),
    email varchar(50),
    FOREIGN KEY (idusuario)
        REFERENCES id (tblcadastro)
);


CREATE TABLE tblendereco (
    idusuario INT,
    logradouro VARCHAR(50),
    cidade VARCHAR(50),
    bairro VARCHAR(50),
    FOREIGN KEY (idusuario)
        REFERENCES id (tblcadastro)
);

CREATE TABLE tblendereco (
    idusuario INT,
    logradouro VARCHAR(50),
    cidade VARCHAR(50),
    bairro VARCHAR(50),
    FOREIGN KEY (idusuario)
        REFERENCES id (tblcadastro)
);

CREATE TABLE tbltexto (
    idconteudo INT,
    conteudo TEXT,
    tipo_de_usuario INT,
    PRIMARY KEY (idconteudo),
    FOREIGN KEY (tipo_de_usuario)
        REFERENCES tipo_de_usuario (tblcadastro)
);

CREATE TABLE tblturma (
    idturma INT,
    nome VARCHAR(50),
    periodo VARCHAR(50),
    prof_coordenador VARCHAR(50),
    modulo VARCHAR(50),
    PRIMARY KEY (idturma)
);

create table tbltipousuario(
idtipo int,
tipo varchar(50));