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
destinatario varchar(255) default ('monique'),
conteudo varchar(255),
anonimato ENUM('S','N') default('N'),
dataEnviada datetime default(now()),
statusLida ENUM('S','N'),
dataLida datetime,
statusExcluida enum('S','N'),
excluida datetime
);
insert into mensagem values(default, 'Cesar',default,'Estou testando o chat com essa mensagem sem Lorem','N',default,'N',null,'N',null);
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
-- -----------------------------------------------------------------------------------------------------------------------------------------------------

-- Cria a procedure que mostra as mensagens da caixa de enrada do usuario ------------------------------------------------------------------------------
DELIMITER //
drop procedure if exists caixaEntrada //
create procedure caixaEntrada(id varchar(11))
main:begin
select * from mensagem where (destinatario = id) && (statusLida = 'N' && statusExcluida = 'N');
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