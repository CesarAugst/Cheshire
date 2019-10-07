-- Berçario --------------------------------------------------------------------------------------------------------------------------------------------
drop database bancoCheshireV3;
create database bancoCheshireV3;
use bancoCheshireV3;
-- -----------------------------------------------------------------------------------------------------------------------------------------------------

-- Cria a tabela de registro de usuarios ---------------------------------------------------------------------------------------------------------------
drop table if exists usuario;
create table if not exists usuario(
cod_usuario int primary key,
login int(11),
senha int(12),
nome varchar(20),
sobrenome varchar(20),
tipo enum('orientador','aluno','funcionario'),
telefone int(10),
celular int(11),
endereco varchar(100));
insert into usuario values('17308','17308','42942544830','Cesar','August','aluno','1142439058','11958681942','Olegario Maciel 10');
insert into usuario values('17305','17305','14604818878','Monique','Rufino','orientador','1141482099','11946143093','Rua topazio/Jardim Nomura');
-- -----------------------------------------------------------------------------------------------------------------------------------------------------
select * from usuario where login='17308' and senha='42942544830';

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
insert into mensagem values(default, 17308,17305,'Estou testando o chat com essa mensagem sem Lorem','N',default,'N',null,'N',null);
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
select nome from usuario where cod_usuario = '17308';
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