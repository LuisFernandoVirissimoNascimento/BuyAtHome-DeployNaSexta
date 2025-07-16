DROP DATABASE IF EXISTS buyathome_promotion;
CREATE DATABASE IF NOT EXISTS buyathome_promotion;

USE buyathome_promotion;

CREATE TABLE cliente (
    id_cliente INT AUTO_INCREMENT PRIMARY KEY,
    name_cliente VARCHAR(255), 
    can_redeem_daily boolean not null,
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

CREATE TABLE moedas (
    id_cliente INT NOT NULL,
    id_moeda INT AUTO_INCREMENT PRIMARY KEY,
    valor DECIMAL(10, 2),
    FOREIGN KEY (id_cliente) REFERENCES cliente(id_cliente)
);

CREATE TABLE cupom (
    id_cliente INT NOT NULL,
    id_cupom INT AUTO_INCREMENT PRIMARY KEY,
    data_exp DATE,
    codigo VARCHAR(10),
    FOREIGN KEY (id_cliente) REFERENCES cliente(id_cliente)
);
