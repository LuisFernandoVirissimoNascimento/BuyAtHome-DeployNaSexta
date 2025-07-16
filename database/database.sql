DROP DATABASE IF EXISTS buyathome_promotion;
CREATE DATABASE IF NOT EXISTS buyathome_promotion;

USE buyathome_promotion;

CREATE TABLE cliente (
    id_cliente INT AUTO_INCREMENT PRIMARY KEY,
    name_cliente VARCHAR(255), 
    has_redeem_daily boolean not null,
    cpf VARCHAR(14) not null,
    senha VARCHAR(255) not null
);

CREATE TABLE produto (
    id_produto INT AUTO_INCREMENT PRIMARY KEY,
    imagem varchar(255) NOT NULL,
    name_produto VARCHAR(255) not null,
    descricao VARCHAR(255) not null,
    valor DECIMAL(10, 2),
    desconto DECIMAL(5, 2)
);

CREATE TABLE cupom (
    id_cliente INT NOT NULL,
    id_cupom INT AUTO_INCREMENT PRIMARY KEY,
    data_exp DATE,
    codigo VARCHAR(10),
    FOREIGN KEY (id_cliente) REFERENCES cliente(id_cliente)
);

CREATE TABLE moedas (
    id_cliente INT PRIMARY KEY,
    daily_add TINYINT(1) NOT NULL DEFAULT 1,
    moedas DECIMAL(10, 2) DEFAULT 0,
    ultima_moeda TIMESTAMP NULL DEFAULT NULL,
    FOREIGN KEY (id_cliente) REFERENCES cliente(id_cliente) ON DELETE CASCADE
);
