DROP DATABASE livraria;
CREATE DATABASE livraria;
USE livraria; 

CREATE TABLE produto(
	id 				INT AUTO_INCREMENT NOT NULL,
	descricao 		VARCHAR(60) NOT NULL,
	preco 			DOUBLE NOT NULL,
	departamento 	VARCHAR(60) NOT NULL,
	PRIMARY KEY(id)
) engine = innodb;

CREATE TABLE usuario(
	id 				INT AUTO_INCREMENT NOT NULL,
	nome 			VARCHAR(80) NOT NULL,
	email 			VARCHAR(60) NOT NULL,
	cpf 			VARCHAR(60) NOT NULL,
	nascimento		VARCHAR(10) NOT NULL,
	telefone		VARCHAR(11) NOT NULL,
	endereco		VARCHAR(60) NOT NULL,
	sexo 			VARCHAR(60) NOT NULL,
	senha			VARCHAR(20) NOT NULL,
	tipo			VARCHAR(5) NOT NULL,
	PRIMARY KEY(id)
) engine = innodb;


INSERT INTO usuario (nome, email, cpf, nascimento, telefone, endereco, sexo, senha, tipo)
VALUES  ('Nicholas', 'nicholas@123.com', '11111111111', '03/01/2002', '99999999999', 'Rua dos Bobos', 'M', 'senha123', 'admin'),
		('Nicholas2', 'nicholas2@123.com', '11111111111', '03/01/2002', '99999999999', 'Rua dos Bobos', 'M', 'senha123', 'user');


INSERT INTO produto (descricao, preco, departamento)
VALUES  ('Livro Harry Potter', 30, 'Livros'),
		('Livro Crepúsculo', 40, 'Livros'),
		('Livro Percy Jackson I', 45, 'Livros'),
		('Livro Percy Jackson II', 45, 'Livros'),
		('Livro Percy Jackson III', 45, 'Livros'),
		('Poster Justin Bieber', 10, 'Posteres'),
		('Poster The Walking Dead', 10, 'Posteres'),
		('Poster Vikings', 10, 'Posteres'),
		('Livro Mistério do 5 estrelas', 25, 'Livros'),
		('Livro 50 Tons de Cinza', 50, 'Livros'),
		('Livro 50 Tons de Cinza Mais Escuros', 50, 'Livros'),
		('Livro 50 Tons de Liberdade', 50, 'Livros'),
		('Poster Star Wars', 20, 'Posteres'),
		('Poster Harry Potter', 20, 'Posteres'),
		('Revista Recreio - Unidade', 10, 'Revista'),
		('Revista SuperInteressante - Unidade', 10, 'Revista'),
		('Assinatura Revista Veja - Mensal', 40, 'Revista'),
		('Assinatura SuperInteressante', 50, 'Revista'),
		('Revista Exame - Unidade', 10, 'Revista'),
		('Assinatura Revista Exame - Mensal', 40, 'Revista'),
		('Revista Época - Unidade', 10, 'Revista'),
		('Revista Época - Assinatura', 40, 'Revista');

