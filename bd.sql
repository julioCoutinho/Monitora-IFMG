CREATE DATABASE bd_monitora_ifmg

CREATE TABLE tb_acesso(
    id_acesso integer not null AUTO_INCREMENT PRIMARY KEY,
    login varchar(30) not null,
    senha varchar(30) not null
);

CREATE TABLE tb_pessoa(
	id_pessoa int not null AUTO_INCREMENT PRIMARY KEY,
    id_acesso_fk int not null,
    nome varchar(100),
    dataNascimento Date,
    naturalidade varchar(30),
    estado char(2),
    email varchar(200) not null,
    FOREIGN KEY (id_acesso_fk) REFERENCES tb_acesso(id_acesso)
);

CREATE TABLE tb_endereco(
	id_endereco int not null AUTO_INCREMENT PRIMARY KEY,
    logradouro varchar(200),
    numero varchar(10),
    cep char(8),
    bairro varchar(100),
    complemento varchar(200),
    
);

CREATE TABLE tb_aluno(
	id_aluno int not null AUTO_INCREMENT PRIMARY KEY,
    id_pessoa_fk int not null,
    id_endereco_fk int not null,
    curso varchar(100) not null,
    turma varchar(100) not null,
    periodo int(1),
    telefone1 varchar(20),
    telefone2 varchar(20),
    telefone_residencial varchar(20),
    FOREIGN KEY (id_endereco_fk) REFERENCES tb_endereco(id_endereco),
    FOREIGN KEY (id_pessoa_fk) REFERENCES tb_pessoa(id_pessoa)
);

CREATE TABLE tb_professor(
	id_professor int not null AUTO_INCREMENT PRIMARY KEY,
    id_pessoa_fk int not null,
    id_endereco_fk int not null,
    curso_atuante varchar(100) not null,
    coordenador boolean not null,
    FOREIGN KEY (id_endereco_fk) REFERENCES tb_endereco(id_endereco),
    FOREIGN KEY (id_pessoa_fk) REFERENCES tb_pessoa(id_pessoa)
);

CREATE TABLE tb_materia_lecionada(
	id_materia_lecionada int not null AUTO_INCREMENT PRIMARY KEY,
    id_professor_fk int not null,
    id_aluno_fk int not null,
    categoria varchar(15) ,
    FOREIGN KEY (id_professor_fk) REFERENCES tb_professor(id_professor),
    FOREIGN KEY (id_aluno_fk) REFERENCES tb_aluno(id_aluno)
);