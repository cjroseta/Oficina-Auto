<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-06-16 14:11:23 --> 404 Page Not Found: /index
ERROR - 2023-06-16 14:11:58 --> 404 Page Not Found: /index
ERROR - 2023-06-16 14:11:58 --> 404 Page Not Found: /index
ERROR - 2023-06-16 14:15:40 --> Query error: Table 'lite5.logs' doesn't exist - Invalid query: INSERT INTO `logs` (`usuario`, `ip`, `tarefa`, `data`, `hora`) VALUES ('Claudio Roseta', '::1', 'Efetuou login no sistema', '2023-06-16', '14:15:40')
ERROR - 2023-06-16 14:15:40 --> Query error: Table 'lite5.produtos' doesn't exist - Invalid query: 
            SELECT produtos.*, SUM(produtos.estoque * produtos.precoCompra) as valorEstoque
            FROM produtos
            GROUP BY produtos.idProdutos
            ORDER BY descricao
        
