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
create procedure CAIXA_ENTRADA(id varchar(11))
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
create procedure CAIXA_LIDAS(id varchar(11))
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
data_lida
from mensagem as m where ((m.destinatario_fk = id) && (lida = 'S' && m.excluida_destinatario = 'N'));
end // 
delimiter ;
-- PROCEDURE - CAIXA DE LIDAS -----------------------------------------------------------------------------------------------------------------------

-- PROCEDURE - CAIXA DE ENVIADAS -----------------------------------------------------------------------------------------------------------------------
DELIMITER //
drop procedure if exists CAIXA_ENVIADAS //
create procedure CAIXA_ENVIADAS(id varchar(11))
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

-- PROCEDURE - MARCA MENSAGENS COMO LIDAS ---------------------------------------------------------------------------------------
DELIMITER //
drop procedure if exists MARCALIDA //
create procedure MARCALIDA(id varchar(11))
main:begin
update mensagem set statusLida = 'S' where cod_mensagem = id;
update mensagem set dataLida = now() where cod_mensagem = id;
end //
DELIMITER ;
-- PROCEDURE - MARCA MENSAGENS COMO LIDAS ---------------------------------------------------------------------------------------
/*SESSAO DE PROCEDURES - CRIAÇÃO##################################################################################################################################*/

/*SESSAO DE PROCEDURES - UTILIZAÇÃO##################################################################################################################################*/
call CAIXA_ENTRADA(17308);
call CAIXA_LIDAS(17308);
call CAIXA_ENVIADAS(17308);
select * from mensagem;
/*SESSAO DE PROCEDURES - UTILIZAÇÃO##################################################################################################################################*/
