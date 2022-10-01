CREATE DATABASE db_biblioteca;
USE db_biblioteca;

CREATE TABLE usuario(
    rm INT NOT NULL PRIMARY KEY,
    nome VARCHAR(60),
    email VARCHAR(120),
    dt_nascimento DATE,
    genero CHAR(1),
    telefone VARCHAR(45),
    senha CHAR(20),
    perfil VARCHAR(20),
    status VARCHAR(100),
    obs VARCHAR(200),
    adm BOOLEAN  
);

CREATE TABLE autor(
    cd INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(60)
);

CREATE TABLE editora(
    cd INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(80)
);

CREATE TABLE genero(
    cd INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100)
);

CREATE TABLE livro(
    cd INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    isbn VARCHAR(100),
    titulo VARCHAR(200),
    ano INT(4),
    qtd INT,
    sinopse LONGTEXT,
    capa VARCHAR(200),
    classificacao VARCHAR(45),
    id_autor INT NOT NULL,
    id_editora INT NOT NULL,
    id_genero INT NOT NULL, 
    estado LONGTEXT,
    FOREIGN KEY (id_editora) REFERENCES editora(cd),
    FOREIGN KEY (id_genero)  REFERENCES genero(cd),
    FOREIGN KEY (id_autor) REFERENCES autor(cd)
);

CREATE TABLE emprestimo(
    cd INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    dt_emprestimo DATE,
    dt_devolucao DATE,
    status VARCHAR(100),
    nota INT(1),
    id_usuario INT NOT NULL,
    id_livro INT NOT NULL,
    FOREIGN KEY (id_usuario) REFERENCES usuario(rm),
    FOREIGN KEY (id_livro) REFERENCES livro(cd)
);

CREATE TABLE favorito(
    cd INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    id_usuario INT NOT NULL,
    id_livro INT NOT NULL,
    FOREIGN KEY (id_usuario) REFERENCES usuario(rm),
    FOREIGN KEY (id_livro) REFERENCES livro(cd)
);

CREATE TABLE fila(
    cd INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    id_livro INT NOT NULL,
    id_usuario INT NOT NULL,
    FOREIGN KEY (id_livro) REFERENCES livro(cd),
    FOREIGN KEY (id_usuario) REFERENCES usuario(rm)
);

/* INSERT */

INSERT INTO `usuario` (`rm`, `nome`, `email`, `dt_nascimento`, `genero`, `telefone`, `senha`, `perfil`, `status`, `obs`, `adm`) VALUES ('04132', 'Herika Silva de Andrade', 'herikinhagameplays@gmail.com', '2005-09-03', 'F', '13974025807', 'senhaHerika', NULL, 'ativo', NULL, '0');

INSERT INTO `usuario` (`rm`, `nome`, `email`, `dt_nascimento`, `genero`, `telefone`, `senha`, `perfil`, `status`, `obs`, `adm`) VALUES ('04046', 'Matheus Becari Silva', 'becaridorock@gmail.com', '2006-06-06', 'M', '13920001202', 'senhaBecari', NULL, 'bloqueado', NULL, '0');

INSERT INTO `usuario` (`rm`, `nome`, `email`, `dt_nascimento`, `genero`, `telefone`, `senha`, `perfil`, `status`, `obs`, `adm`) VALUES ('04045', 'Gabriel Bernardo Gamon', 'devgamon@gmail.com', '2004-04-13', 'M', '13991356097', 'senhaGabs', NULL, 'ativo', NULL, '1');