-- Criando banco de dados
DROP DATABASE IF EXISTS db_relatorio_php;

CREATE DATABASE db_relatorio_php /*!40100 DEFAULT CHARACTER SET utf8 */;

USE db_relatorio_php;


-- Tabela usuarios
DROP TABLE IF EXISTS usuarios;

CREATE TABLE usuarios (
    id INT(11) NOT NULL AUTO_INCREMENT,
    nome VARCHAR(50),
    PRIMARY KEY (id)
);

-- Insert usuarios
INSERT INTO usuarios (nome) VALUES ('Sue'), ('Ana'), ('José'), ('Maria');
