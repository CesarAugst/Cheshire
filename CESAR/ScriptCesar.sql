-- WARNING !!!
-- drop database bdCheshire; -- Cmentado o que apaga o banco de dados, rsrsr. Tomem cuidado, apenas para uso em seu desenvolvimento inicial
-- WARNING !!!
create database bdCheshire; -- Cria o banco de dados para a aplicação
use bdCheshire; -- Altera o banco de dados utilizado para o da aplicação


-- select * from tblcadastro;
-- select * from tbldtregistro;

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

insert into tblcadastro values(53,'teste','primeiro','20190811','1','1');


insert into tbllogin values (default, '17308','42942544830');

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

create table tblmensagem(
idmensagem int,
remetente int,
destinatario int,
conteudo text,
data_de_envio date,
primary key (idmensagem),
foreign key (remetente) references id(tblcadastro),
foreign key (destinatario) references id(tblcadastro)
);
/*
CREATE VIEW ver_tudo_cadastro AS SELECT * FROM tblcadastro;
CREATE VIEW ver_tudo_login AS SELECT * FROM tbllogin;
CREATE VIEW ver_tudo_contatos AS SELECT * FROM tblcontato;
CREATE VIEW ver_tudo_endereco AS SELECT * FROM tblendereco;
CREATE VIEW ver_apenas_o_rm AS SELECT id FROM tblcadastro;
CREATE VIEW ver_as_mensagens_enviadas AS SELECT conteudo FROM tblmensagem;
CREATE VIEW ver_periodo_noturno AS SELECT nome FROM tblturma where periodo = noturno;
CREATE VIEW ver_periodo_diurno AS SELECT nome FROM tblturma where periodo = diurno;
CREATE VIEW ver_alunos_menores AS SELECT id,nome,sobrenome FROM tblcadastro where (timestampdiff(year,dt_nascimento,now)<18);
CREATE VIEW ver_alunos_terceiristas AS SELECT id,nome,sobrenome FROM tblcadastro where (timestampdiff(year,dt_nascimento,now())>18);
*/

delimiter //


  create trigger tbl_exc_cad after delete on tblcadastro
		for each row 
         begin
			set @id = old.id;
            set @nome = old.nome;
            set @sobrenome = old.sobrenome;
            set @dt_nascimento = old.dt_nascimento;
            set @tipo_de_usuario = old.tipo_de_usuario;
            set @turma = old.turma;
            
            insert into tbl_exc_cad (id,nome,sobrenome,dt_nascimento,tipo_usuario,turma) values 
            (@id,@nome,@sobrenome,@dt_nascimento,@tipo_de_usuario,@turma);
            
end //delimiter ;

delimiter // 
create trigger tbl_alt_cad after update on tblcadastro
	for each row
    begin
     set @id= alt.id;
     set @nome= alt.nome;
     set @sobrenome= alt.sobrenome;
     set @tipo_de_usuario= alt.tipo_de_usuario;
     set @turma= alt.turma;
     
     insert into tbl_alt_cad (id,nome,sobrenome,tipo_de_usuario,turma)
     values(@id,@nome,@sobrenome,@tipo_de_usuario,@turma);
     
end // delimiter ;


delimiter //
create trigger tbl_exc_contato after delete on tblcontato
     for each row 
      begin
       set @idusuario = old.idusuario;
       set @celular = old.celular;
       set @telefone = old.telefone;
       set @email = old.email;
       
       insert into tbl_exc_contato (idusuario, celular, telefone, email)
       values (@idusuario, @celular, @telefone, @email);
       
end //delimiter ;

delimiter //
create trigger tbl_alt_contato after update on tblcontato
	for each row
    begin 
     set @idusuario= alt.idusuario;
     set @celular= alt.celular;
     set @telefone= alt.telefone;
     set @email= alt.email;
	 
     insert into tbl_alt_contato(idusuario,celular,telefone,email) 
     values(@idusuario,@celular,@telefone,@email);
end // delimiter ;

delimiter //
create trigger tbl_alt_email after update on tblenail

delimiter // 
create trigger tbl_exc_endereco after delete on tblendereco
	for each row
	begin
     set @idusuario = old.idusuario;
     set @logradouro = old.logradouro;
     set @cidade = old.cidade;
     set @bairro = old.bairro;
     
     insert into tbl_exc_endereco (idusuario, logradouro, cidade, bairro)
     values (@idusuario, @logradouro, @cidade, @bairro);
     
end //delimiter ;

delimiter // 
create trigger tbl_alt_endereco after update on tblendereco
	for each row
    begin
      set @idusuario = alt.idusuario;
     set @logradouro = alt.logradouro;
     set @cidade = alt.cidade;
     set @bairro = alt.bairro;
     
     insert into tbl_alt_endereco (idusuario, logradouro, cidade, bairro)
     values (@idusuario, @logradouro, @cidade, @bairro);
     
end //delimiter ;

delimiter // 
create trigger tbl_alt_login after update on tbllogin
	for each row
    begin
     set @idusuario= alt.idusuario;
     set @usuario = alt.usuario;
     set @senha = alt.senha;
     
     insert into tbl_alt_login (idusuario,usuario,senha) values(@idusuario,@usuario,@senha);
     
end //delimiter ;

delimiter // 
create trigger tbl_insert_mensagem after insert on tblmensagem
	for each row
    begin
     set @idmensagem= ins.mensagem;
     set @remetente= ins.remetente;
     set @destinatario = ins.destinatario;
     set @conteudo = ins.conteudo;
     set @data_de_envio= ins.data_de_envio;
     
     insert into tbl_insert_mensagem(idmensagem, remetente, destinatario, conteudo, data_de_envio) 
     values (@idmensagem, @remetente, @destinatario, @conteudo, @data_de_envio);
     
end // delimiter ;

delimiter // 
create trigger tbl_exc_turma after delete on tblturma
	for each row 
    begin 
     set @idturma= old.idturma;
     set @nome= old.nome;
     set @periodo= old.periodo;
     set @prof_coordenador= old.prof_coordenador;
     set @modulo= old.modulo;
     
     insert into tbl_exc_turma(idturma, nome, periodo, prof_coordenador, modulo)
     values(@idturma, @nome, @periodo, @prof_coordenador, @modulo);
     
end // delimiter ;
     
 delimiter // 
 create trigger tbl_alt_turma after update on tblturma
	for each row
    begin
     set @idturma= alt.idturma;
     set @nome= alt.nome;
     set @periodo= alt.periodo;
     set @prof_coordenador= alt.prof_coordenador;
     set @modulo= alt.modulo;
     
     insert into tbl_alt_turma(idturma, nome, periodo, prof_coordenador, modulo) 
     values(@idturma, @nome, @periodo, @prof_coordenador, @modulo);

end // delimiter ;

select * from tbl_exc_cad;

delete from tblcadastro where id = 52;
CREATE TABLE if not exists tbl_exc_cad (
    id INT,
    nome VARCHAR(50),
    sobrenome VARCHAR(50),
    dt_nascimento DATE,
    tipo_de_usuario INT,
    turma INT,
    constraint primary key id_pk (id)
);
