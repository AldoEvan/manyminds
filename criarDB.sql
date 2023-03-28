CREATE DATABASE IF NOT EXISTS manyminds;
USE manyminds;

CREATE TABLE perfil (
	id int(4) NOT NULL PRIMARY KEY AUTO_INCREMENT,
	nome varchar(30)
);

CREATE TABLE colaborador (
	id int NOT NULL AUTO_INCREMENT, PRIMARY KEY(id),
	nome varchar(15) NOT NULL,
	sobrenome varchar(35),
	email varchar(35) NOT NULL,
	senha varchar(50) NOT NULL,
	cpf varchar(11) NOT NULL,
	dt_nascimento date,
	num_matricula int(6),
	deleted_at datetime(),
	fk_perfil int(4),
	CONSTRAINT fk_perfil_colaborador FOREIGN KEY (fk_perfil)  REFERENCES perfil(id)
);

CREATE TABLE endereco (
	id int(4) NOT NULL PRIMARY KEY AUTO_INCREMENT,
	rua varchar(100) NOT NULL,
	cep varchar(8) NOT NULL,
	complemento varchar(100) NOT NULL,
	numero varchar(11) NOT NULL,
	bairro varchar(30) NOT NULL,
	cidade varchar(30) NOT NULL,
	fk_colaborador int(4),
	CONSTRAINT fk_colaborador FOREIGN KEY (fk_colaborador)  REFERENCES colaborador(id)
);

CREATE TABLE produto (
	id int(4) NOT NULL PRIMARY KEY AUTO_INCREMENT,
	nome varchar(50) NOT NULL,
	marca varchar(30) NOT NULL,
	modelo varchar(30) NOT NULL,
	preco float(8,2) NOT NULL,
	quantidade int(2) NOT NULL,
	deleted_at datetime(),
	fk_colaborador int(4),
	CONSTRAINT fk_colaborador_produto FOREIGN KEY (fk_colaborador)  REFERENCES colaborador(id)
);

CREATE TABLE pedido (
	id int(4) NOT NULL PRIMARY KEY AUTO_INCREMENT,
	preço_unitario float(8,2) NOT NULL,
	quantidade int(3) NOT NULL,
	preco_total float(8,2) NOT NULL,
	status int(1) NOT NULL,
	fk_colaborador int(4),
	CONSTRAINT fk_colaborador_pedido FOREIGN KEY (fk_colaborador)  REFERENCES colaborador(id),
	fk_produto int(4),
	CONSTRAINT fk_produto_pedido FOREIGN KEY (fk_produto)  REFERENCES produto(id)
);

INSERT INTO perfil (nome) VALUES ('Colaborador');
INSERT INTO perfil (nome) VALUES ('Fornecedor');