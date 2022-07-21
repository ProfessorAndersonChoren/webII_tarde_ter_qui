-- Buscar todos os registros da tabela
select * from locacoes;

-- Buscar todas as informações da tabela, filtrando as colunas
select nome_cliente,telefone_cliente from clientes;

-- Buscar todas as informações da tabela, filtrando os dados
select * from locacoes where data_locacao between date_sub(now(), interval 7 day) and now();

select cpf_cliente from clientes where nome_cliente = 'Alberto';

select * from clientes where nome_cliente like '% Silva';

select * from clientes where nome_cliente like 'João %';

select * from clientes where nome_cliente like '%ria%';
