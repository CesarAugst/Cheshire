/*BERCARIO#################################################################################################################################*/
drop database if exists bancoCheshireV4;
create database bancoCheshireV4;
use bancoCheshireV4;
/*BERCARIO#################################################################################################################################*/

/*SESSÃO DE MENSAGENS#################################################################################################################################*/
-- Tabela mensagem 1.0
DROP TABLE IF EXISTS MENSAGEM;
CREATE TABLE IF NOT EXISTS MENSAGEM
( 
    id_mensagem INT AUTO_INCREMENT PRIMARY KEY,
    remetente_fk INT,
		FOREIGN KEY (remetente_fk) references PESSOA(rm),
    destinatario_fk INT,
		FOREIGN KEY (destinatario_fk) references PESSOA(rm),
    conteudo TEXT,
    anonimato ENUM('s', 'n'),
    data_enviada DATETIME default(now()),
    lida ENUM('s', 'n'),
    data_lida DATETIME,
    excluida_remetente ENUM('s', 'n'),
    data_excluida_remetente DATETIME,
    excluida_destinatario ENUM('s', 'n'),
    data_excluida_destinatario DATETIME
);
-- Tabela mensagem 1.0
insert into MENSAGEM values(default,17308,17305,'Cesar enviando para Monique','n',default,'n',null,'n',null,'n',null);
insert into MENSAGEM values(default,17308,17305,'Cesar enviando para Monique denovo','n',default,'n',null,'n',null,'n',null);
insert into MENSAGEM values(default,17305,17308,'Monique enviando para Cesar','n',default,'n',null,'n',null,'n',null);
insert into MENSAGEM values(default,17305,17308,'Monique enviando para Cesar, porem lida','n',default,'s',null,'n',null,'n',null);
/*SESSÃO DE MENSAGENS#################################################################################################################################*/

/*SESSAO DE USUARIOS##################################################################################################################################*/
-- Tabela pessoa 2.0
DROP TABLE IF EXISTS PESSOA;
CREATE TABLE IF NOT EXISTS PESSOA (
    rm INT PRIMARY KEY,
    login_fk INT,
		FOREIGN KEY (login_fk) references LOGIN(id_login),
    endereco_fk INT,
		FOREIGN KEY (endereco_fk) references LOGIN(id_endereco),
    registro_fk INT,
		FOREIGN KEY (registro_fk) references REGISTRO(id_registro),
    tipo_fk INT,
		FOREIGN KEY (tipo_fk) references TIPO_USUARIO(id_tipo),
    anamnese_fk INT,
		FOREIGN KEY (anamnese_fk) references ANAMNESE(id_anamnese)
);
insert into PESSOA values(17308,1,1,1,1,1);
insert into PESSOA values(17305,2,2,2,2,2);
-- Tabela pessoa 2.0
/*---------------------------------------------------------------------------------------------------*/
-- Tabela telefone 2.1
DROP TABLE IF EXISTS TELEFONE;
CREATE TABLE IF NOT EXISTS TELEFONE (
    id_telefone INT AUTO_INCREMENT PRIMARY KEY,
    pessoa_fk INT,
		FOREIGN KEY (pessoa_fk) references PESSOA(rm),
    ddd INT,
    tipo ENUM('movel', 'fixo'),
    numero VARCHAR(255)
);
insert into TELEFONE values(default,'17308',11,'movel','958681942');
insert into TELEFONE values(default,'17305',11,'fixo','41482099');
-- Tabela telefone 2.1
/*---------------------------------------------------------------------------------------------------*/
-- Tabela email 2.2
DROP TABLE IF EXISTS EMAIL;
CREATE TABLE IF NOT EXISTS EMAIL (
    id_email INT AUTO_INCREMENT PRIMARY KEY,
    pessoa_fk INT,
		FOREIGN KEY (pessoa_fk) references PESSOA(rm),
    endereco VARCHAR(255)
);
insert into EMAIL values(default, 17308,'cesarsilvasb@gmail.com');
insert into EMAIL values(default, 17305,'faleconosco@etecdecotia.com.br');
-- Tabela email 2.2
/*---------------------------------------------------------------------------------------------------*/
-- Tabela login 2.3
DROP TABLE IF EXISTS LOGIN;
CREATE TABLE IF NOT EXISTS LOGIN (
    id_login INT AUTO_INCREMENT PRIMARY KEY,
    login VARCHAR(255),
    senha VARCHAR(255)
);
insert into LOGIN values(default,'teste','4967');
insert into LOGIN values(default,'outro','9669');
-- Tabela login 2.3
/*---------------------------------------------------------------------------------------------------*/
-- Tabela endereco 2.4
DROP TABLE IF EXISTS ENDERECO;
CREATE TABLE IF NOT EXISTS ENDERECO (
    id_endereco INT AUTO_INCREMENT PRIMARY KEY,
    cep VARCHAR(255),
    lograduro VARCHAR(255),
    numero varchar(255),
    bairro VARCHAR(255),
    cidade VARCHAR(255),
    estado VARCHAR(2)
);
insert into ENDERECO values(default,'06730000','Rua Olegario Maciel','10','Sao Marcos','Vargem Grande Paulista','SP');
insert into ENDERECO values(default,'06717235','Rua Topazio','555','Jardim Nomura','Cotia','SP');
-- Tabela endereco 2.4
/*---------------------------------------------------------------------------------------------------*/
-- Tabela registro 2.5
DROP TABLE IF EXISTS REGISTRO;
CREATE TABLE IF NOT EXISTS REGISTRO (
    id_registro INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255),
    sobrenome VARCHAR(255),
    dt_nascimento DATE,
    dt_registro DATE default (DATE(NOW()))
);
insert into REGISTRO values(default, 'Cesar', 'August','2000-04-16',default);
insert into REGISTRO values(default, 'Monique', 'Rufino','1985-06-18',default);
-- Tabela registro 2.5
/*---------------------------------------------------------------------------------------------------*/
-- Tabela tipo_usuario 2.6
DROP TABLE IF EXISTS TIPO_USUARIO;
CREATE TABLE IF NOT EXISTS TIPO_USUARIO (
    id_tipo INT AUTO_INCREMENT PRIMARY KEY,
    tipo ENUM('orientador', 'aluno')
);
insert into TIPO_USUARIO values(default,'Orientador');
insert into TIPO_USUARIO values(default,'Aluno');
-- Tabela tipo_usuario 2.6
/*SESSAO DE USUARIOS##################################################################################################################################*/

/*SESSAO DE ANAMNESE##################################################################################################################################*/
-- Tabela anamnese 3.0
DROP TABLE IF EXISTS ANAMNESE;
CREATE TABLE IF NOT EXISTS ANAMNESE (
    id_anamnese INT AUTO_INCREMENT PRIMARY KEY,
    identificacao_aluno_fk INT,
		FOREIGN KEY (identificacao_aluno_fk) references IDENTIFICACAO_ALUNO(id_aluno),
    dados_familiares_fk INT,
		FOREIGN KEY (dados_familiares_fk) references DADOS_FAMILIARES(id_familiar),
    historico_saude_fk INT,
		FOREIGN KEY (historico_saude_fk) references HISTORICO_SAUDE(id_historico_saude),
    desenvolvimento_fk INT,
		FOREIGN KEY (desenvolvimento_fk) references DESENVOLVIMENTO(id_desenvolvimento),
    escolarizacao_fk INT,
		FOREIGN KEY (escolarizacao_fk) references ESCOLARIZACAO(id_escolarizacao)
);
insert into ANAMNESE values(default, 1,1,1,1,1);
insert into ANAMNESE values(default, 2,2,2,2,2);
-- Tabela anamnese 3.0
/*---------------------------------------------------------------------------------------------------*/
-- Tabela identificacao_aluno 3.1
DROP TABLE IF EXISTS IDENTIFICACAO_ALUNO;
CREATE TABLE IF NOT EXISTS IDENTIFICACAO_ALUNO (
    rm INT PRIMARY KEY,
    cpf VARCHAR(11),
    nome VARCHAR(255),
    sobrenome VARCHAR(255),
    dt_nascimento DATE,
    naturalidade VARCHAR(255) default ('Brasileiro'),
    sexo ENUM('m', 'f'),
    endereco_fk INT,
		FOREIGN KEY (ENDERECO_fk) references endereco(id_endereco)
);
insert into IDENTIFICACAO_ALUNO values(17308,'42942544830','Cesar','August','2000-04-16',default,'M',1);
insert into IDENTIFICACAO_ALUNO values(17305,'14604818878','Monique','Rufino','1985-06-18','Austriaco','F',2);
-- Tabela identificacao_aluno 3.1
/*---------------------------------------------------------------------------------------------------*/
-- Tabela dados_familiares 3.2
DROP TABLE IF EXISTS DADOS_FAMILIARES;
CREATE TABLE IF NOT EXISTS DADOS_FAMILIARES (
    id_familiar INT AUTO_INCREMENT PRIMARY KEY,
    dados_mae_fk INT,
		FOREIGN KEY (dados_mae_fk) references DADOS_MAE(id_mae),
    dados_pai_fk INT,
		FOREIGN KEY (dados_pai_fk) references DADOS_PAI(id_pai),
    dados_responsavel_fk INT,
		FOREIGN KEY (dados_responsavel_fk) references DADOS_RESPONSAVEL(id_responsavel),
    relacao_pais ENUM('casados', 'divorciados', 'uniao estavel'),
    moram_juntos ENUM('sim', 'nao'),
    quem_mora VARCHAR(255)
);
insert into DADOS_FAMILIARES values(default, 1,1,1,'divorciados','nao','mae');
insert into DADOS_FAMILIARES values(default, 2,2,2,'casados','sim','pai');
-- Tabela dados_familiares 3.2
/*---------------------------------------------------------------------------------------------------*/
-- Tabela dados_mae 3.2.1
DROP TABLE IF EXISTS DADOS_MAE;
CREATE TABLE IF NOT EXISTS DADOS_MAE (
    id_mae INT AUTO_INCREMENT PRIMARY KEY,
    nome_mae VARCHAR(255),
    sobrenome_mae VARCHAR(255),
    dt_nasc_mae DATE,
    profissao_mae VARCHAR(255),
    contato_mae_fk INT,
		FOREIGN KEY (contato_mae_fk) references TELEFONE(id_telefone),
    endereco_mae_fk INT,
		FOREIGN KEY (endereco_mae_fk) references ENDERECO(id_endereco)
);
insert into DADOS_MAE values(default, 'Noiva','Silva','1971-02-12','Cabeleireiro',1,1);
insert into DADOS_MAE values(default, 'Maria','Sousa','1972-03-13','Hair designer',2,2);
-- Tabela dados_mae 3.2.1
/*---------------------------------------------------------------------------------------------------*/
-- Tabela dados_pai 3.2.2
DROP TABLE IF EXISTS DADOS_PAE;
CREATE TABLE IF NOT EXISTS DADOS_PAI (
    id_mae INT AUTO_INCREMENT PRIMARY KEY,
    nome_pai VARCHAR(255),
    sobrenome_pai VARCHAR(255),
    dt_nasc_pai DATE,
    profissao_pai VARCHAR(255),
    contato_pai_fk INT,
		FOREIGN KEY (contato_pai_fk) references TELEFONE(id_contato),
    endereco_pai_fk INT,
		FOREIGN KEY (endereco_pai_fk) references ENDERECO(id_endereco)
);
insert into DADOS_PAI values(default, 'Celi', 'Barbosa', '1970-01-11', 'Vendedor', 1, 1);
insert into DADOS_PAI values(default, 'Celso', 'Baristo', '1969-01-10', 'Gerente', 2, 2);
-- Tabela dados_pai 3.2.2
/*---------------------------------------------------------------------------------------------------*/
-- Tabela dados_responsavel 3.2.3
DROP TABLE IF EXISTS DADOS_RESPONSAVEL;
CREATE TABLE IF NOT EXISTS DADOS_RESPONSAVEL (
    id_responsavel INT AUTO_INCREMENT PRIMARY KEY,
    nome_responsavel VARCHAR(255),
    sobrenome_responsavel VARCHAR(255),
    dt_nasc_responsavel DATE,
    profissao_responsavel VARCHAR(255),
    contato_responsavel_fk INT,
		FOREIGN KEY (contato_responsavel_fk) references TELEFONE(id_telefone),
    endereco_responsavel_fk INT,
		FOREIGN KEY (endereco_responsavel_fk) references ENDERECO(id_endereco)
);
insert into DADOS_RESPONSAVEL values(default, 'Noiva','Silva','1971-02-12','Cabeleireiro',1,1);
insert into DADOS_RESPONSAVEL values(default, 'Celso','Baristo','1969-01-10','Gerente',2,2);
-- Tabela dados_responsavel 3.2.3
/*---------------------------------------------------------------------------------------------------*/
-- Tabela historico_saude 3.3
DROP TABLE IF EXISTS HISTORICO_SAUDE;
CREATE TABLE IF NOT EXISTS HISTORICO_SAUDE(
	id_historico_saude INT AUTO_INCREMENT PRIMARY KEY,
	cuidados_medicos VARCHAR(255) DEFAULT('nao'),
	alergias VARCHAR(255) DEFAULT('nao'),
	medicacao VARCHAR(255) DEFAULT('nao'),
	ed_fisica VARCHAR(255) DEFAULT('sim'),
	acidente VARCHAR(255) DEFAULT('nao'),
	cirurgia VARCHAR(255) DEFAULT('nao'),
	convulcoes VARCHAR(255) DEFAULT('nao'),
	problemas_neurologicos VARCHAR(255) DEFAULT('nao')
);
insert into HISTORICO_SAUDE values(default, default, 'dipirona', default, default, default, default, default,default);
insert into HISTORICO_SAUDE values(default, default, default, default, default, default, default, default,default);
-- Tabela historico_saude 3.3
/*---------------------------------------------------------------------------------------------------*/
-- Tabela desenvolvimento 3.4
DROP TABLE IF EXISTS DESENVOLVIMENTO;
CREATE TABLE IF NOT EXISTS DESENVOLVIMENTO(
	id_desenvolvimento INT AUTO_INCREMENT PRIMARY KEY,
    locomocao VARCHAR(255) DEFAULT('nao'),
    fala VARCHAR(255) DEFAULT('nao'),
    visao VARCHAR(255) DEFAULT('nao'),
    audicao VARCHAR(255) DEFAULT('nao'),
    problemas_neurologicos VARCHAR(255) DEFAULT('nao')
);
insert into DESENVOLVIMENTO values(default,default, default, 'miopia', default,default);
insert into DESENVOLVIMENTO values(default,default, default, default, default,default);
-- Tabela desenvolvimento 3.4
/*---------------------------------------------------------------------------------------------------*/
-- Tabela escolarizacao 3.5
DROP TABLE IF EXISTS ESCOLARIZACAO;
CREATE TABLE IF NOT EXISTS ESCOLARIZACAO (
    id_escolarizacao INT AUTO_INCREMENT PRIMARY KEY,
    escola_anterior VARCHAR(255),
    relacionamento_professores ENUM('bom', 'ruim'),
    relacionamento_colegas ENUM('bom', 'ruim'),
    dificuldade_aprendizagem VARCHAR(255) DEFAULT('nao'),
    apoio_pedagogico VARCHAR(255) DEFAULT('nao'),
    avaliacao_profissional VARCHAR(255) DEFAULT('nao'),
    acompanhamento_profissional VARCHAR(255) DEFAULT('nao'),
    necessita_apoio VARCHAR(255) DEFAULT('nao')
);
insert into ESCOLARIZACAO values(default, 'Batista Cepelos', 'bom', 'bom', default, default, default, default, default);
insert into ESCOLARIZACAO values(default, 'ETEC de Cotia', 'bom', 'bom', default, default, default, default, default);
-- Tabela escolarizacao 3.5
/*SESSAO DE ANAMNESE##################################################################################################################################*/

/*SESSAO DE PROCEDURES - CRIAÇÃO##################################################################################################################################*/
-- PROCEDURE - CAIXA DE ENTRADA -----------------------------------------------------------------------------------------------------------------------
DELIMITER //
drop procedure if exists CAIXA_ENTRADA //
create procedure CAIXA_ENTRADA(id varchar(255))
main:begin
declare remetente_n, remetente_s, destinatario_n, destinatario_s varchar(255);

set destinatario_n = (select nome from PESSOA as p join REGISTRO as r on p.registro_fk = r.id_registro where p.rm = id);
set destinatario_s = (select sobrenome from PESSOA as p join REGISTRO as r on p.registro_fk = r.id_registro where p.rm = id);

select 
m.id_mensagem,
(select nome from PESSOA as p join REGISTRO as r on p.registro_fk = r.id_registro where p.rm = m.remetente_fk) as nome_remetente,
(select sobrenome from PESSOA as p join REGISTRO as r on p.registro_fk = r.id_registro where p.rm = m.remetente_fk) as sobrenome_remetente,
destinatario_n as nome_destinatario,
destinatario_s as sobrenome_destinatario,
m.conteudo, 
m.anonimato, 
m.data_enviada
from mensagem as m where ((m.destinatario_fk = id) && (lida = 'N' && m.excluida_destinatario = 'N'));
end //
delimiter ;
-- PROCEDURE - CAIXA DE ENTRADA -----------------------------------------------------------------------------------------------------------------------

-- PROCEDURE - CAIXA DE LIDAS -----------------------------------------------------------------------------------------------------------------------
DELIMITER //
drop procedure if exists CAIXA_LIDAS //
create procedure CAIXA_LIDAS(id varchar(255))
main:begin
declare remetente_n, remetente_s, destinatario_n, destinatario_s varchar(255);

set destinatario_n = (select nome from PESSOA as p join REGISTRO as r on p.registro_fk = r.id_registro where p.rm = id);
set destinatario_s = (select sobrenome from PESSOA as p join REGISTRO as r on p.registro_fk = r.id_registro where p.rm = id);

select 
m.id_mensagem,
(select nome from PESSOA as p join REGISTRO as r on p.registro_fk = r.id_registro where p.rm = m.remetente_fk) as nome_remetente,
(select sobrenome from PESSOA as p join REGISTRO as r on p.registro_fk = r.id_registro where p.rm = m.remetente_fk) as sobrenome_remetente,
destinatario_n as nome_destinatario,
destinatario_s as sobrenome_destinatario,
m.conteudo, 
m.anonimato, 
m.data_enviada,
m.data_lida
from mensagem as m where ((m.destinatario_fk = id) && (lida = 'S' && m.excluida_destinatario = 'N'));
end // 
delimiter ;
-- PROCEDURE - CAIXA DE LIDAS -----------------------------------------------------------------------------------------------------------------------

-- PROCEDURE - CAIXA DE ENVIADAS -----------------------------------------------------------------------------------------------------------------------
DELIMITER //
drop procedure if exists CAIXA_ENVIADAS //
create procedure CAIXA_ENVIADAS(id varchar(255))
main:begin
declare remetente_n, remetente_s, destinatario_n, destinatario_s varchar(255);

set destinatario_n = (select nome from PESSOA as p join REGISTRO as r on p.registro_fk = r.id_registro where p.rm = id);
set destinatario_s = (select sobrenome from PESSOA as p join REGISTRO as r on p.registro_fk = r.id_registro where p.rm = id);

select 
m.id_mensagem,
(select nome from PESSOA as p join REGISTRO as r on p.registro_fk = r.id_registro where p.rm = m.remetente_fk) as nome_remetente,
(select sobrenome from PESSOA as p join REGISTRO as r on p.registro_fk = r.id_registro where p.rm = m.remetente_fk) as sobrenome_remetente,
destinatario_n as nome_destinatario,
destinatario_s as sobrenome_destinatario,
m.conteudo, 
m.anonimato, 
m.data_enviada
from mensagem as m where ((m.remetente_fk = id) && (m.excluida_remetente = 'N'));
end // 
delimiter ;
-- PROCEDURE - CAIXA DE ENVIADAS -----------------------------------------------------------------------------------------------------------------------

-- PROCEDURE - CAIXA DE EXCLUIDAS -----------------------------------------------------------------------------------------------------------------------
DELIMITER //
drop procedure if exists CAIXA_EXCLUIDAS_REMETENTE //
create procedure CAIXA_EXCLUIDAS(id varchar(255))
main:begin
declare remetente_n, remetente_s, destinatario_n, destinatario_s varchar(255);

set destinatario_n = (select nome from PESSOA as p join REGISTRO as r on p.registro_fk = r.id_registro where p.rm = id);
set destinatario_s = (select sobrenome from PESSOA as p join REGISTRO as r on p.registro_fk = r.id_registro where p.rm = id);

select 
m.id_mensagem,
(select nome from PESSOA as p join REGISTRO as r on p.registro_fk = r.id_registro where p.rm = m.remetente_fk) as nome_remetente,
(select sobrenome from PESSOA as p join REGISTRO as r on p.registro_fk = r.id_registro where p.rm = m.remetente_fk) as sobrenome_remetente,
destinatario_n as nome_destinatario,
destinatario_s as sobrenome_destinatario,
m.conteudo, 
m.anonimato, 
m.data_enviada,
m.data_lida
from mensagem as m where ((m.remetente_fk = id) && (m.excluida_remetente = 'S'));
end // 
delimiter ;
-- PROCEDURE - CAIXA DE EXCLUIDAS -----------------------------------------------------------------------------------------------------------------------

-- PROCEDURE - MARCA MENSAGENS COMO LIDAS ---------------------------------------------------------------------------------------
DELIMITER //
drop procedure if exists MARCA_LIDA //
create procedure MARCA_LIDA(id varchar(255))
main:begin
update MENSAGEM set lida = 'S' where id_mensagem = id;
update MENSAGEM set data_lida = now() where id_mensagem = id;
end //
DELIMITER ;
-- PROCEDURE - MARCA MENSAGENS COMO LIDAS ---------------------------------------------------------------------------------------

-- PROCEDURE - MARCA MENSAGENS DO REMETENTE COMO EXCLUIDAS ---------------------------------------------------------------------------------------
DELIMITER //
drop procedure if exists MARCA_EXCLUIDA_REMETENTE //
create procedure MARCA_EXCLUIDA_REMETENTE(id varchar(255))
main:begin
update MENSAGEM set excluida_remetente = 'S' where id_mensagem = id;
update MENSAGEM set data_excluida_remetente = now() where id_mensagem = id;
end //
DELIMITER ;
-- PROCEDURE - MARCA MENSAGENS DO REMETENTE COMO EXCLUIDAS ---------------------------------------------------------------------------------------

-- PROCEDURE - MARCA MENSAGENS DO DESTINATARIO COMO EXCLUIDAS ---------------------------------------------------------------------------------------
DELIMITER //
drop procedure if exists MARCA_EXCLUIDA_DESTINATARIO //
create procedure MARCA_EXCLUIDA_DESTINATARIO(id varchar(255))
main:begin
update MENSAGEM set excluida_destinatario = 'S' where id_mensagem = id;
update MENSAGEM set data_excluida_destinatario = now() where id_mensagem = id;
end //
DELIMITER ;
-- PROCEDURE - MARCA MENSAGENS DO REMETENTE COMO EXCLUIDAS ---------------------------------------------------------------------------------------

-- FUNCAO PARA VERIFICAR EXITENCA DE RM ----------------------------------------------------------------------------------------------------------
DELIMITER //
drop function if exists VALIDA_RM //
create function VALIDA_RM(rm_p int)
returns boolean
main:begin
declare valido boolean;
declare rm_c int;

set rm_c = (SELECT COUNT(*) FROM PESSOA WHERE rm = rm_p);

if(rm_c > 0)then
	set valido = true;
else 
    set valido = false;
end if;
return valido;
end //
DELIMITER ;
-- FUNCAO PARA VERIFICAR EXITENCA DE RM ----------------------------------------------------------------------------------------------------------

-- FUNCAO PARA VERIFICAR EXITENCA DE LOGIN ----------------------------------------------------------------------------------------------------------
DELIMITER //
drop function if exists VALIDA_LOG //
create function VALIDA_LOG(login_p varchar(255))
returns boolean
main:begin
declare valido boolean;
declare log_c int;

set log_c = (SELECT COUNT(*) FROM LOGIN WHERE login = login_p);

if( log_c > 0)then
	set valido = true;
else 
    set valido = false;
end if;
return valido;
end //
DELIMITER ;
-- FUNCAO PARA VERIFICAR EXITENCA DE LOGIN ----------------------------------------------------------------------------------------------------------

-- PROCEDURE - CADASTRO -----------------------------------------------------------------------------------------------------
DELIMITER //
drop procedure if exists CADASTRO //
create procedure CADASTRO(rm_p int,login_p varchar(255),senha_p varchar(255),nome_p varchar(255),sobrenome_p varchar(255),funcao_p varchar(255))
main:begin
	insert into LOGIN values
	(default, login_p, senha_p);

	insert into REGISTRO (nome, sobrenome)values 
	(nome_p, sobrenome_p);

	insert into PESSOA (rm, login_fk, registro_fk) values
	(rm_p, (select id_login from LOGIN where (login = login_p && senha = senha_p)), (select id_registro from REGISTRO where (nome = nome_p && sobrenome = sobrenome_p)));

	IF (funcao_p = 'orientador') THEN 
		UPDATE PESSOA SET tipo_fk = 1 where rm = rm_p;
	END IF;

	IF (funcao_p = 'aluno') THEN 
		UPDATE PESSOA SET tipo_fk = 2 where rm = rm_p;
	END IF;
end //
DELIMITER ;

DELIMITER //
drop function if exists CADASTROf //
create function CADASTROf(rm_p int,login_p varchar(255),senha_p varchar(255),nome_p varchar(255),sobrenome_p varchar(255),funcao_p varchar(255))
returns varchar(255)
main:begin

declare valido boolean;
declare log_c, rm_c int;

set log_c = (SELECT COUNT(*) FROM LOGIN WHERE login = login_p);
set rm_c = (SELECT COUNT(*) FROM PESSOA WHERE rm = rm_p);

if( log_c > 0 || rm_c > 0)then
	set valido = false;
else 
    set valido = true;
end if;


if(valido = true)then
	insert into LOGIN values
	(default, login_p, senha_p);

	insert into REGISTRO (nome, sobrenome)values 
	(nome_p, sobrenome_p);

	insert into PESSOA (rm, login_fk, registro_fk) values
	(rm_p, (select id_login from LOGIN where (login = login_p && senha = senha_p)), (select id_registro from REGISTRO where (nome = nome_p && sobrenome = sobrenome_p)));

	IF (funcao_p = 'orientador') THEN 
		UPDATE PESSOA SET tipo_fk = 1 where rm = rm_p;
	END IF;

	IF (funcao_p = 'aluno') THEN 
		UPDATE PESSOA SET tipo_fk = 2 where rm = rm_p;
	END IF;

end if;
return valido;
end //
DELIMITER ;
-- PROCEDURE - CADASTRO -----------------------------------------------------------------------------------------------------

-- PROCEDURE - LOGIN --------------------------------------------------------------------------------------------------------
DELIMITER //
drop procedure if exists LOGIN //
create procedure LOGIN(login_p varchar(255),senha_p varchar(255))
main:begin
declare cod_log, cod_rm, cod_tipo int;
declare tipo, nome, sobrenome varchar(255);

declare valido boolean;
declare log_c, sen_c int;

set log_c = (SELECT COUNT(*) FROM LOGIN WHERE login = login_p);
set sen_c = (SELECT COUNT(*) FROM LOGIN WHERE senha = senha_p);

if( (log_c > 0) && (sen_c > 0))then
	set valido = true;
else 
    set valido = false;
end if;

if(valido = true)then
	set cod_log = (select id_login from LOGIN where login= login_p && senha= senha_p);
	set cod_rm = (select rm from PESSOA where login_fk= cod_log);
	set cod_tipo = (select tipo_fk from PESSOA where rm = cod_rm);

	if(cod_tipo = 1)then 
		set tipo = 'orientador';
	elseif (cod_tipo = 2)then
		set tipo = 'aluno';
	end if;

	set nome = (select r.nome from REGISTRO as r join PESSOA as p on p.registro_fk = r.id_registro where p.rm = cod_rm);
	set sobrenome = (select r.sobrenome from REGISTRO as r join PESSOA as p on p.registro_fk = r.id_registro where p.rm = cod_rm);

	select cod_rm, tipo, concat(nome, ' ', sobrenome) as nome;
end if;
end //
DELIMITER ;

DELIMITER //
drop function if exists LOGINf //
create function LOGINf(login_p varchar(255),senha_p varchar(255))
returns varchar(255)
main:begin
declare cod_log, cod_rm int;

declare valido boolean;
declare log_c, sen_c int;

set log_c = (SELECT COUNT(*) FROM LOGIN WHERE login = login_p);
set sen_c = (SELECT COUNT(*) FROM LOGIN WHERE senha = senha_p);

if( (log_c > 0) && (sen_c > 0))then
	set valido = true;
else 
    set valido = false;
end if;

	return valido;

end //
DELIMITER ;
-- PROCEDURE - LOGIN --------------------------------------------------------------------------------------------------------

-- PROCEDURE - RM ----------------------------------------------------------
DELIMITER //
drop procedure if exists RM //
create procedure RM(login_p varchar(255),senha_p varchar(255))
main:begin
	declare cod_log, cod_rm int;
    
	set cod_log = (select id_login from LOGIN where login= login_p && senha= senha_p);
	set cod_rm = (select rm from PESSOA where login_fk= cod_log);
    
    select cod_rm;
end //
DELIMITER ;
DELIMITER //
drop function if exists RM //
create function RMf(login_p varchar(255),senha_p varchar(255))
returns varchar(255)
main:begin
	declare cod_log, cod_rm int;
    
	set cod_log = (select id_login from LOGIN where login= login_p && senha= senha_p);
	set cod_rm = (select rm from PESSOA where login_fk= cod_log);
    
    return cod_rm;
end //
DELIMITER ;
-- PROCEDURE - RM ----------------------------------------------------------

-- PROCEDURE - NOME ----------------------------------------------------------
DELIMITER //
drop procedure if exists NOME //
create procedure NOME(cod_rm varchar(255))
main:begin
	declare nome,sobrenome varchar(255);
    
	set nome = (select r.nome from REGISTRO as r join PESSOA as p on p.registro_fk = r.id_registro where p.rm = cod_rm);
    set sobrenome = (select r.sobrenome from REGISTRO as r join PESSOA as p on p.registro_fk = r.id_registro where p.rm = cod_rm);
    select nome,sobrenome;
end //
DELIMITER ;

DELIMITER //
drop function if exists NOMEf //
create function NOMEf(cod_rm varchar(255))
returns varchar(255)
main:begin
	declare nome,sobrenome varchar(255);
    
	set nome = (select r.nome from REGISTRO as r join PESSOA as p on p.registro_fk = r.id_registro where p.rm = cod_rm);
    set sobrenome = (select r.sobrenome from REGISTRO as r join PESSOA as p on p.registro_fk = r.id_registro where p.rm = cod_rm);
    return nome;
end //
DELIMITER ;
-- PROCEDURE - NOME ----------------------------------------------------------
-- FUNÇÃO - TIPO ----------------------------------------------------------------------------
DELIMITER //
drop function if exists BUSCA_TIPOf //
create function BUSCA_TIPOf(cod_rm varchar(255))
returns varchar(255)
main:begin
	declare tipo_usu varchar(255);
    
	set tipo_usu = (select tipo from TIPO_USUARIO as t join PESSOA as p on p.tipo_fk = t.id_tipo where p.rm = cod_rm);
    
    return tipo_usu;
end //
DELIMITER ;
-- FUNÇÃO - TIPO ----------------------------------------------------------------------------

/*SESSAO DE PROCEDURES - CRIAÇÃO##################################################################################################################################*/

/*SESSAO DE PROCEDURES E FUNÇÕES- UTILIZAÇÃO##################################################################################################################################*/
-- ---- Mensagem ------
-- call CAIXA_ENTRADA(17308);
-- call CAIXA_LIDAS(17305);
-- call CAIXA_ENVIADAS(17308);
-- call MARCA_LIDA(4);
-- call MARCA_EXCLUIDA_REMETENTE(4);
-- call MARCA_EXCLUIDA_DESTINATARIO(4);
-- ---- Mensagem ------

-- ---- Usuario -------
-- call CADASTRO(5321,'lgando','enhando','omeando','sbrenomeando','aluno');
-- select CADASTROf(1234567,'esseloginn','essasenhaa','essenomee','essesobrenomee','aluno');
-- select VALIDA_LOG('testi') as existe; -- (teste) existe (testi) nao existe
-- select VALIDA_RM('17300') as existe; -- (17305) existe (17300) nao existe
-- call LOGIN('teste','4967');
-- select LOGINf('teste','4967');
-- call RM('teste','4967');
-- select RMf('teste','4967') as rm;
-- call NOME('17308');
-- select NOMEf(17308);
-- select BUSCA_TIPOf('17305');
-- ---- Usuario -------
/*SESSAO DE PROCEDURES E FUNÇÕES - UTILIZAÇÃO##################################################################################################################################*/
select * from mensagem where conteudo like '%Cesar%';
select * from tipo_usuario;
select * from login;