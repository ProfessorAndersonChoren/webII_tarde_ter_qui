-- Inserção de registros - Cliente
insert into clientes  values (null,'Alberto','000.000.000-00','(00) 0000-0000');
insert into clientes values(null,'Maria de Lurdes','111.111.111-11','(11) 1111-1111');

-- Inserção de registros - Funcionario
insert into funcionarios values(null,'Marcelo',null);
insert into funcionarios values(null,'Joana',32);

-- Inserção de registros - Veículo
insert into veiculos values(null,'OLB4OBT','Chevrolet','Camaro',2007,2007);
insert into veiculos values(null,'JOL7YBE','Ford','Mustang',2012,2013);

-- Inserção de registros - Locações
insert into locacoes values(
1, -- Código do veículo
1, -- Código do cliente
now(), -- Data da locação (Hoje)
1, -- Código do funcionário
date_add(now(),INTERVAL 7 DAY) -- Data da devolução
);

insert into locacoes values(
2, -- Código do veículo
2, -- Código do cliente
'2022-07-01', -- Data da locação
2, -- Código do funcionário
null -- Data da devolução
);


