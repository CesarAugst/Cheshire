-- Berçario --------------------------------------------------------------------------------------------------------------------------------------------
drop database bancoCheshireV3;
create database bancoCheshireV3;
use bancoCheshireV3;
-- -----------------------------------------------------------------------------------------------------------------------------------------------------

-- Cria o banco das mensagens --------------------------------------------------------------------------------------------------------------------------
drop table if exists mensagem;
create table if not exists mensagem(
cod_mensagem int auto_increment primary key,
remetente varchar(255),
destinatario varchar(255) default ('orientador'),
conteudo varchar(255),
anonimato ENUM('S','N'),
data datetime default(now())
);
insert into mensagem values(default, 'Cesar',default,'Estou testando o chat com essa mensagem sem Lorem','N',default);
select * from mensagem;
describe mensagem;
-- -----------------------------------------------------------------------------------------------------------------------------------------------------

-- Cria o banco de login -------------------------------------------------------------------------------------------------------------------------------
drop table if exists usuario;
create table if not exists usuario(
user varchar(255),
senha varchar(255));
insert into usuario values('cesar','4967');
select * from usuario;
describe usuario;
-- -----------------------------------------------------------------------------------------------------------------------------------------------------