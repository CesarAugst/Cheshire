-- Gera��o de Modelo f�sico
-- Sql ANSI 2003 - brModelo.



CREATE TABLE TBLCADASTRO (
 id INTEGER PRIMARY KEY,
 dt_nascimento DATETIME,
 sobrenome VARCHAR(50 ),
 nome VARCHAR(50),
 idmensagem INTEGER,
 id_contato INTEGER
)

CREATE TABLE LOGIN (
id_usuario INTEGER PRIMARY KEY,
usuario VARCHAR(20),
senha VARCHAR(20)
)

CREATE TABLE TBL_ENDERECO (
id_endereco INTEGER PRIMARY KEY,
bairro VARCHAR(50),
logradouro VARCHAR(50),
cidade VARCHAR(50),
id INTEGER,
FOREIGN KEY(id) REFERENCES TBLCADASTRO (id)
)

CREATE TABLE TBLTURMA (
idturma INTEGER PRIMARY KEY,
modulo VARCHAR(50),
nome VARCHAR(50 ),
prof_coordenador VARCHAR(50 ),
periodo VARCHAR(50),
id INTEGER,
FOREIGN KEY(id) REFERENCES TBLCADASTRO (id)
)

CREATE TABLE TBL_TIPO_USUARIO (
id_tipo INTEGER PRIMARY KEY,
tipo VARCHAR(50),
idconteudo VARCHAR(10)
)

CREATE TABLE TBLMENSAGEM (
idmensagem INTEGER PRIMARY KEY,
data_de_envio VARCHAR(10),
conteudo VARCHAR(10),
destinatario VARCHAR(10)
)

CREATE TABLE TBLTEXTO (
idconteudo VARCHAR(10) PRIMARY KEY,
conteudo VARCHAR(10),
tipo_usuario VARCHAR(10)
)

CREATE TABLE CONTATO (
id_contato INTEGER PRIMARY KEY,
telefone VARCHAR(10),
ddd VARCHAR(10)
)

CREATE TABLE EMAIL (
endereco VARCHAR(90) PRIMARY KEY,
nome VARCHAR(10)
)

CREATE TABLE Abstrai (
id_contato INTEGER,
endereco VARCHAR(10),
FOREIGN KEY(id_contato) REFERENCES CONTATO (id_contato),
FOREIGN KEY(endereco) REFERENCES EMAIL (endereco)
)

CREATE TABLE Tem (
id_usuario INTEGER,
id_tipo INTEGER,
FOREIGN KEY(id_usuario) REFERENCES LOGIN (id_usuario),
FOREIGN KEY(id_tipo) REFERENCES TBL_TIPO_USUARIO (id_tipo)
)

ALTER TABLE TBLCADASTRO ADD FOREIGN KEY(idmensagem) REFERENCES TBLMENSAGEM (idmensagem)
ALTER TABLE TBLCADASTRO ADD FOREIGN KEY(id_contato) REFERENCES CONTATO (id_contato)
ALTER TABLE TBL_TIPO_USUARIO ADD FOREIGN KEY(idconteudo) REFERENCES TBLTEXTO (idconteudo)
