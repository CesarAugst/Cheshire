/*BERCARIO#################################################################################################################################*/
drop database if exists bancoCheshireV4;
create database bancoCheshireV4;
use bancoCheshireV4;
/*BERCARIO#################################################################################################################################*/-----------

/*SESSÃO DE MENSAGENS#################################################################################################################################*/
-- Tabela mensagem 1.0
DROP TABLE IF EXISTS MENSAGEM;
CREATE TABLE IF NOT EXISTS MENSAGEM
( 
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
);
-- Tabela mensagem 1.0
/*SESSÃO DE MENSAGENS#################################################################################################################################*/

/*SESSAO DE USUARIOS##################################################################################################################################*/
-- Tabela pessoa 2.0
DROP TABLE IF EXISTS PESSOA;
CREATE TABLE IF NOT EXISTS PESSOA (
    rm INT PRIMARY KEY,
    login_fk INT,
    endereco_fk INT,
    registro_fk INT,
    tipo_fk INT,
    anamnese_fk INT
); 
-- Tabela pessoa 2.0
/*---------------------------------------------------------------------------------------------------*/
-- Tabela telefone 2.1
DROP TABLE IF EXISTS TELEFONE;
CREATE TABLE IF NOT EXISTS TELEFONE (
    id_telefone INT AUTO_INCREMENT PRIMARY KEY,
    pessoa_fk INT,
    ddd INT,
    tipo ENUM('movel', 'fixo'),
    numero VARCHAR(255)
);
-- Tabela telefone 2.1
/*---------------------------------------------------------------------------------------------------*/
-- Tabela email 2.2
DROP TABLE IF EXISTS EMAIL;
CREATE TABLE IF NOT EXISTS EMAIL (
    id_email INT AUTO_INCREMENT PRIMARY KEY,
    pessoa_fk INT,
    endereco VARCHAR(255)
);
-- Tabela email 2.2
/*---------------------------------------------------------------------------------------------------*/
-- Tabela login 2.3
DROP TABLE IF EXISTS LOGIN;
CREATE TABLE IF NOT EXISTS LOGIN (
    id_login INT AUTO_INCREMENT PRIMARY KEY,
    login VARCHAR(255),
    senha VARCHAR(255)
);
-- Tabela login 2.3
/*---------------------------------------------------------------------------------------------------*/
-- Tabela endereco 2.4
DROP TABLE IF EXISTS ENDERECO;
CREATE TABLE IF NOT EXISTS ENDERECO (
    id_endereco INT AUTO_INCREMENT PRIMARY KEY,
    cep VARCHAR(255),
    lograduro VARCHAR(255),
    bairro VARCHAR(255),
    cidade VARCHAR(255),
    estado VARCHAR(2)
);
-- Tabela endereco 2.4
/*---------------------------------------------------------------------------------------------------*/
-- Tabela registro 2.5
DROP TABLE IF EXISTS REGISTRO;
CREATE TABLE IF NOT EXISTS REGISTRO (
    id_registro INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255),
    sobrenome VARCHAR(255),
    dt_nascimento DATE,
    dt_registro DATE
);
-- Tabela registro 2.5
/*---------------------------------------------------------------------------------------------------*/
-- Tabela tipo_usuario 2.6
DROP TABLE IF EXISTS TIPO_USUARIO;
CREATE TABLE IF NOT EXISTS TIPO_USUARIO (
    id_tipo INT AUTO_INCREMENT PRIMARY KEY,
    tipo ENUM('orientador', 'aluno')
);
-- Tabela tipo_usuario 2.6
/*SESSAO DE USUARIOS##################################################################################################################################*/

/*SESSAO DE ANAMNESE##################################################################################################################################*/
-- Tabela anamnese 3.0
DROP TABLE IF EXISTS ANAMNESE;
CREATE TABLE IF NOT EXISTS ANAMNESE (
    id_anamnese INT AUTO_INCREMENT PRIMARY KEY,
    identificacao_aluno_fk INT,
    dados_familiares_fk INT,
    historico_saude_fk INT,
    desenvolvimento_fk INT,
    escolarizacao_fk INT
);
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
    naturalidade VARCHAR(255),
    sexo ENUM('m', 'f'),
    endereco_fk INT
);
-- Tabela identificacao_aluno 3.1
/*---------------------------------------------------------------------------------------------------*/
-- Tabela dados_familiares 3.2
DROP TABLE IF EXISTS DADOS_FAMILIARES;
CREATE TABLE IF NOT EXISTS DADOS_FAMILIARES (
    id_familiar INT AUTO_INCREMENT PRIMARY KEY,
    dados_mae_fk INT,
    dados_pai_fk INT,
    dados_responsavel_fk INT,
    relacao_pais ENUM('casados', 'divorciados', 'uniao estavel'),
    moram_juntos ENUM('sim', 'nao'),
    quem_mora VARCHAR(255)
);
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
    endereco_mae_fk INT
);
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
    endereco_pai_fk INT
);
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
    endereco_responsavel_fk INT
);
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
-- Tabela escolarizacao 3.5
/*SESSAO DE ANAMNESE##################################################################################################################################*/










-- Cria a tabela de registro de usuarios ---------------------------------------------------------------------------------------------------------------
drop table if exists usuario;
create table if not exists usuario(
cod_usuario int primary key,
login int(11),
senha varchar(11),
nome varchar(20),
sobrenome varchar(20),
tipo enum('orientador','aluno','funcionario'),
telefone varchar(10),
celular varchar(11),
endereco varchar(100));
insert into usuario values('17308','17308','42942544830','cesar','August','aluno','1142439058','11958681942','Olegario Maciel 10');
insert into usuario values('17305','17305','14604818878','monique','Rufino','orientador','1141482099','11946143093','Rua topazio/Jardim Nomura');
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