CREATE TABLE pessoa (
	id SERIAL PRIMARY KEY,
	nome VARCHAR(100) NOT NULL,
	data_nascimento DATE NOT NULL,
	telefone VARCHAR(50)
);

CREATE TABLE funcionario (
	id SERIAL PRIMARY KEY,
	id_pessoa BIGINT NOT NULL,
	carga_horaria INT NOT NULL,
	salario DOUBLE PRECISION NOT NULL,
	FOREIGN KEY (id_pessoa) REFERENCES pessoa(id)
);

CREATE TABLE gerente (
	id SERIAL PRIMARY KEY,
	id_pessoa BIGINT NOT NULL,
	carga_horaria INT NOT NULL,
	salario DOUBLE PRECISION NOT NULL,
	FOREIGN KEY (id_pessoa) REFERENCES pessoa(id)
);

CREATE TABLE cliente (
	id SERIAL PRIMARY KEY,
	id_pessoa BIGINT NOT NULL,
	cpf VARCHAR(30) NOT NULL,
	rg VARCHAR(20) NOT NULL,
	FOREIGN KEY (id_pessoa) REFERENCES pessoa(id)
);

CREATE TABLE atendente (
	id SERIAL PRIMARY KEY,
	id_pessoa BIGINT NOT NULL,
	carga_horaria INT NOT NULL,
	salario DOUBLE PRECISION NOT NULL,
	cargo VARCHAR(10) NOT NULL,
	FOREIGN KEY (id_pessoa) REFERENCES pessoa(id)
);

CREATE TABLE diretor (
	id SERIAL PRIMARY KEY,
	id_pessoa BIGINT NOT NULL,
	formacao VARCHAR(20) NOT NULL,
	nacionalidade VARCHAR(60) NOT NULL,
	genero VARCHAR(30) NOT NULL,
	filmes_produzidos TEXT NOT NULL,
	premios TEXT NOT NULL,
	FOREIGN KEY (id_pessoa) REFERENCES pessoa(id)
);

CREATE TABLE filme (
	id SERIAL PRIMARY KEY,
	id_diretor BIGINT NOT NULL,
	titulo VARCHAR(200) NOT NULL,
	genero_filme VARCHAR(50) NOT NULL,
	restricao_idade VARCHAR(10) NOT NULL,
	duracao DOUBLE PRECISION NOT NULL,
	ano_lancamento DATE NOT NULL,
	idioma VARCHAR(40) NOT NULL,
	FOREIGN KEY (id_diretor) REFERENCES diretor(id)
);

CREATE TABLE sessao (
	id SERIAL PRIMARY KEY,
	id_filme BIGINT NOT NULL,
	tipo_sessao VARCHAR(10) NOT NULL,
	capacidade_maxima INT NOT NULL,
	FOREIGN KEY (id_filme) REFERENCES filme(id)
);

CREATE TABLE ingresso (
	id SERIAL PRIMARY KEY,
	id_sessao BIGINT NOT NULL,
	id_cliente BIGINT NOT NULL,
	id_funcionario BIGINT NOT NULL,
	id_filme BIGINT NOT NULL,
	valor NUMERIC(10,5) NOT NULL,
	local_cinema VARCHAR(50) NOT NULL,
	forma_pagamento VARCHAR(10) NOT NULL,
	FOREIGN KEY (id_filme) REFERENCES filme(id),
	FOREIGN KEY (id_sessao) REFERENCES sessao(id),
	FOREIGN KEY (id_cliente) REFERENCES cliente(id),
	FOREIGN KEY (id_funcionario) REFERENCES funcionario(id)
)
