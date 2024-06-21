CREATE TABLE pessoa (
	id SERIAL PRIMARY KEY,
	nome VARCHAR(100) NOT NULL,
	cpf VARCHAR(11) NOT NULL,
	endereco TEXT,
	telefone VARCHAR(15),
	data_nascimento DATE
);

CREATE TABLE agencia (
	id SERIAL PRIMARY KEY,
	nome VARCHAR(50) NOT NULL,
	endereco TEXT,
	telefone VARCHAR(15)
);

CREATE TABLE cliente (
	id SERIAL PRIMARY KEY,
	id_pessoa BIGINT NOT NULL,
	cargo VARCHAR(50) NOT NULL,
	FOREIGN KEY (id_pessoa) REFERENCES pessoa(id)
);

CREATE TABLE conta (
	id SERIAL PRIMARY KEY,
	id_cliente BIGINT NOT NULL,
	id_agencia BIGINT NOT NULL,
	saldo NUMERIC(10,5) NOT NULL,
	data_criacao TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
	tipo VARCHAR(20) NOT NULL,
	FOREIGN KEY (id_cliente) REFERENCES cliente(id),
	FOREIGN KEY (id_agencia) REFERENCES agencia(id)
);

CREATE TABLE funcionario (
	id SERIAL PRIMARY KEY,
	id_pessoa BIGINT NOT NULL,
	cargo VARCHAR(50) NOT NULL,
	FOREIGN KEY (id_pessoa) REFERENCES pessoa(id)
);
