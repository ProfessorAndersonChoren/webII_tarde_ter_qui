use locadora;
-- Remoção de registros
delete from locacoes where codigo_veiculo = 1 and codigo_cliente = 1;
delete from locacoes where codigo_veiculo = 2 and codigo_cliente = 2;

delete from funcionarios where codigo_funcionario = 1;
delete from funcionarios where codigo_funcionario  = 2;