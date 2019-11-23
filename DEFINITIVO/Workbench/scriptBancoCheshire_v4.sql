/*BERCARIO#################################################################################################################################*/
drop database if exists bancoCheshireV4;
create database bancoCheshireV4;
use bancoCheshireV4;
/*BERCARIO#################################################################################################################################*/-----------

/*SESSÃO DE MENSAGENS#################################################################################################################################*/
DROP TABLE IF EXISTS MENSAGEM;
CREATE TABLE IF NOT EXISTS MENSAGEM
( -- Tabela mensagem 1.0
    id_mensagem INT AUTO_INCREMENT PRIMARY KEY,
    remetente_fk INT,
    destinatario_fk INT,
    conteudo TEXT,
    anonimato ENUM('s', 'n'),
    lida ENUM('s', 'n'),
    data_lida DATETIME,
    excluida_remetente ENUM('s', 'n'),
    data_excluida_remetente DATETIME,
    excluida_destinatario ENUM('s', 'n'),
    data_excluida_destinatario DATETIME
);-- Tabela mensagem 1.0
/*SESSÃO DE MENSAGENS#################################################################################################################################*/

/*SESSAO DE USUARIOS##################################################################################################################################*/
DROP TABLE IF EXISTS PESSOA;
CREATE TABLE IF NOT EXISTS PESSOA (
    rm INT PRIMARY KEY,
    login_fk INT,
    endereco_fk INT,
    registro_fk INT,
    tipo_fk INT,
    anamnese_fk INT
); -- Tabela pessoa 2.0
/*--------------------------------------------*/
DROP TABLE IF EXISTS TELEFONE;
CREATE TABLE IF NOT EXISTS TELEFONE (
    id_telefone INT PRIMARY KEY,
    pessoa_fk INT,
    ddd INT,
    tipo ENUM('movel', 'fixo'),
    numero VARCHAR(255)
);-- Tabela telefone 2.1 
/*--------------------------------------------*/
DROP TABLE IF EXISTS EMAIL;
CREATE TABLE IF NOT EXISTS EMAIL (
    id_email INT PRIMARY KEY,
    pessoa_fk INT,
    endereco VARCHAR(255)
);
/*--------------------------------------------*/
DROP TABLE IF EXISTS LOGIN;
CREATE TABLE IF NOT EXISTS LOGIN (
    id_login INT PRIMARY KEY,
    login VARCHAR(255),
    senha VARCHAR(255)
);
insert into LOGIN values ('1','henrique157', '1533');
/*--------------------------------------------*/
DROP TABLE IF EXISTS ENDERECO;
CREATE TABLE IF NOT EXISTS ENDERECO (
    id_endereco INT PRIMARY KEY,
    cep VARCHAR(255),
    lograduro VARCHAR(255),
    bairro VARCHAR(255),
    cidade VARCHAR(255),
    estado VARCHAR(2)
);
/*--------------------------------------------*/
DROP TABLE IF EXISTS REGISTRO;
CREATE TABLE IF NOT EXISTS REGISTRO (
    id_registro INT PRIMARY KEY,
    nome VARCHAR(255),
    sobrenome VARCHAR(255),
    dt_nascimento DATE,
    dt_registro DATE
);
/*--------------------------------------------*/
DROP TABLE IF EXISTS TIPO_USUARIO;
CREATE TABLE IF NOT EXISTS TIPO_USUARIO (
    id_tipo INT PRIMARY KEY,
    tipo ENUM('orientador', 'aluno')
);
/*SESSAO DE USUARIOS##################################################################################################################################*/

/*SESSAO DE ANAMNESE##################################################################################################################################*/
DROP TABLE IF EXISTS ANAMNESE;
CREATE TABLE IF NOT EXISTS ANAMNESE (
    id_anamnese INT AUTO_INCREMENT,
    identificacao_aluno_fk INT,
    dados_familiares_fk INT,
    historico_saude_fk INT,
    desenvolvimento_fk INT,
    escolarizacao_fk INT
);
/*--------------------------------------------*/
DROP TABLE IF EXISTS IDENTIFICACAO_ALUNO;
CREATE TABLE IF NOT EXISTS IDENTIFICACAO_ALUNO (
    rm INT PRIMARY KEY,
    cpf VARCHAR(11),
    nome VARCHAR(255),
    sobrenome VARCHAR(255),
    dt_nascimento DATE,
    naturalidade VARCHAR(255),
    sexo ENUM('m', 'f'),
    endereco_fk INT
);
/*SESSAO DE ANAMNESE##################################################################################################################################*/










-- Cria a tabela de registro de usuarios ---------------------------------------------------------------------------------------------------------------
drop table if exists usuario;
create table if not exists usuario(
cod_usuario int primary key,
login varchar(20),
senha varchar(11),
nome varchar(20),
sobrenome varchar(20),
tipo enum('orientador','aluno'));
insert into usuario values('17308','Cesarr','42942544830','cesar','August','aluno');
insert into usuario values('17305','Moniquee','14604818878','monique','Rufino','orientador');
-- -----------------------------------------------------------------------------------------------------------------------------------------------------
select * from usuario;
-- Cria a tabela das mensagens -------------------------------------------------------------------------------------------------------------------------
drop table if exists mensagem;
create table if not exists mensagem(
cod_mensagem int auto_increment primary key,
remetente int,
destinatario int default ('17305'),
conteudo varchar(255),
anonimato ENUM('S','N') default('N'),
dataEnviada datetime default(now()),
statusLida ENUM('S','N'),
dataLida datetime,
statusExcluida enum('S','N'),
excluida datetime,
foreign key (remetente) references usuario (cod_usuario),
foreign key (destinatario) references usuario (cod_usuario)
);
insert into mensagem values(default, 17308,17305,'Estou enviando uma mensagem para o orientador','N',default,'N',null,'N',null);
insert into mensagem values(default, 17305,17308,'Estou enviando uma mensagem para o aluno','N',default,'N',null,'N',null);
-- -----------------------------------------------------------------------------------------------------------------------------------------------------

-- Cria a procedure que mostra as mensagens da caixa de enrada do usuario ------------------------------------------------------------------------------
DELIMITER //
drop procedure if exists caixaEntrada //
create procedure caixaEntrada(id varchar(11))
main:begin

select * from mensagem as men where ((men.destinatario = id) && (statusLida = 'N' && statusExcluida = 'N'));

end //
delimiter ;
-- -----------------------------------------------------------------------------------------------------------------------------------------------------

-- Cria a procedure que mostra as mensagens da caixa de saida do usuario ------------------------------------------------------------------------------
DELIMITER //
drop procedure if exists caixaEnviada //
create procedure caixaEnviada(id varchar(11))
main:begin
select * from mensagem where (remetente = id ) && (statusLida = 'N' && statusExcluida = 'N');
end //
delimiter ;
-- -----------------------------------------------------------------------------------------------------------------------------------------------------


-- Cria a procedure que mostra as mensagens marcadas omo lidas pelo usuario ----------------------------------------------------------------------------
DELIMITER //
drop procedure if exists mensagemLida //
create procedure mensagemLida(id varchar(11))
main:begin
select * from mensagem where (destinatario = id) && (statusLida = 'S' && statusExcluida = 'N');
end //
delimiter ;
-- -----------------------------------------------------------------------------------------------------------------------------------------------------

-- Cria a procedure que marca as mensagens como lidas --------------------------------------------------------------------------------------------------
DELIMITER //
drop procedure if exists marcaLida //
create procedure marcaLida(id varchar(11))
main:begin
update mensagem set statusLida = 'S' where cod_mensagem = id;
update mensagem set dataLida = now() where cod_mensagem = id;
end //
DELIMITER ;
-- -----------------------------------------------------------------------------------------------------------------------------------------------------