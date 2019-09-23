-- Berçario --------------------------------------------------------------------------------------------------------------------------------------------
drop database bancoCheshireV3;
create database bancoCheshireV3;
use bancoCheshireV3;
-- -----------------------------------------------------------------------------------------------------------------------------------------------------

-- Cria a tabela das mensagens -------------------------------------------------------------------------------------------------------------------------
drop table if exists mensagem;
create table if not exists mensagem(
cod_mensagem int auto_increment primary key,
remetente varchar(255),
destinatario varchar(255) default ('orientador'),
conteudo varchar(255),
anonimato ENUM('S','N'),
dataEnviada datetime default(now())
);
insert into mensagem values(default, 'Cesar',default,'Estou testando o chat com essa mensagem sem Lorem','N',default);
select * from mensagem;
describe mensagem;
-- -----------------------------------------------------------------------------------------------------------------------------------------------------

-- Cria a tabela das mensagens lidas -------------------------------------------------------------------------------------------------------------------
drop table if exists mensagemLida;
create table if not exists mensagemLida(
cod_mensagem int,
remetente varchar(255),
destinatario varchar(255) default ('orientador'),
conteudo varchar(255),
anonimato ENUM('S','N'),
dataEnviada datetime,
dataLida datetime default(now())
);
-- -----------------------------------------------------------------------------------------------------------------------------------------------------

-- Cria a tabela de mregiste de mensagens excluidas ----------------------------------------------------------------------------------------------------
drop table if exists mensagemRegistro;
create table if not exists mensagemRegistro(
cod_mensagem int,
remetente varchar(255),
destinatario varchar(255) default ('orientador'),
conteudo varchar(255),
anonimato ENUM('S','N'),
dataEnviada datetime,
dataLida datetime,
dataExcluida datetime default(now())
);
-- -----------------------------------------------------------------------------------------------------------------------------------------------------

-- Cria o banco de login -------------------------------------------------------------------------------------------------------------------------------
drop table if exists usuario;
create table if not exists usuario(
cod_usuario int,
user varchar(255),
senha varchar(255),
nome varchar(255),
tipo enum('orientador','aluno'));
insert into usuario values('17308','teste','4967','cesar','aluno');
insert into usuario values('17305','outro','9669','monique','orientador');
select * from usuario;
describe usuario;
-- -----------------------------------------------------------------------------------------------------------------------------------------------------

-- Cria a trigger que irá armazenar as mensagens lidas -------------------------------------------------------------------------------------------------
DELIMITER //
drop trigger if exists mensagemLida ; //
CREATE TRIGGER mensagemLida BEFORE delete ON mensagem
FOR EACH ROW
BEGIN
	insert into mensagemLida values (old.cod_mensagem, old.remetente, old.destinatario, old.conteudo, old.anonimato,old.dataEnviada, default);
END //
DELIMITER ;
select * from mensagemLida;
-- -----------------------------------------------------------------------------------------------------------------------------------------------------

-- Cria a trigger que irá armazenar as mensagens excluidas ---------------------------------------------------------------------------------------------
DELIMITER //
drop trigger if exists mensagemExcluida ; //
CREATE TRIGGER mensagemExcluida BEFORE delete ON mensagemLida
FOR EACH ROW
BEGIN
	insert into mensagemRegistro values (old.cod_mensagem, old.remetente, old.destinatario, old.conteudo, old.anonimato,old.dataEnviada, old.dataLida ,default);
END //
DELIMITER ;
select * from mensagemRegistro;
-- -----------------------------------------------------------------------------------------------------------------------------------------------------
