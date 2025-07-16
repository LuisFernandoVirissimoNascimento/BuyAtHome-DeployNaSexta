INSERT INTO cliente (name_cliente, can_redeem_daily, cpf, senha) 
VALUES 
    ('Luis', FALSE, '052.052.052-28', '$2y$10$0zUNkjdfeZZi9nxbMF5PyeZFHTV5QuCgEG1Hn8nIGqOQ17UGfiIge');

INSERT INTO produto (name_produto, imagem, descricao, valor, desconto) 
VALUES 
    ('Kró Cebola', 'images/card product/kro_cebola.png', 'Cebola crocante, ideal para temperar e dar sabor às suas receitas.', 4.49, 10.00),
    ('Maionese', 'images/card product/produto.png', 'Maionese cremosa e suave, ideal para acompanhar sanduíches e saladas.', 14.95, 5.00),
    ('Coca Cola', 'images/card product/produto.png', 'Refrigerante refrescante com sabor único de cola, perfeito para qualquer ocasião.', 9.99, 7.50),
    ('Requeijão Extra cremoso', 'images/card product/produto.png', 'Requeijão cremoso, ideal para pães, torradas e receitas diversas.', 249.90, 12.00);

INSERT INTO moedas (id_cliente, valor)
VALUES 
    (1, 150.75),
    (2, 200.50),
    (3, 300.00),
    (4, 100.00);

INSERT INTO cupom (id_cliente, data_exp, codigo)
VALUES 
    (1, '2025-12-31', '12025'),
    (2, '2025-12-31', '22025'),
    (3, '2025-12-31', '32025'),
    (4, '2025-12-31', '42025');