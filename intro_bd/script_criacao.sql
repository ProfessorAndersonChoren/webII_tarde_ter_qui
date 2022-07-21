create database if not exists locadora;
use locadora;
create table if not exists veiculos(
	codigo_veiculo smallint auto_increment,
    placa char(7) not null unique key,
    marca varchar(30) not null,
    modelo varchar(50) not null,
    ano_modelo char(4) not null,
    ano_fabricacao char(4) not null,
    primary key(codigo_veiculo)
);
create table if not exists clientes(
	codigo_cliente smallint auto_increment,
    nome_cliente varchar(30) not null,
    cpf_cliente char(14) not null unique key,
    telefone_cliente char(14) not null,
    primary key(codigo_cliente)
);
create table if not exists funcionarios(
	codigo_funcionario smallint auto_increment,
    nome_funcionario varchar(30) not null,
    ramal varchar(3),
    primary key(codigo_funcionario)
);
create table if not exists locacoes(
	codigo_veiculo smallint not null,
    codigo_cliente smallint not null,
    data_locacao date not null,
    codigo_funcionario smallint not null,
    data_devolucao date,
    primary key(codigo_veiculo,codigo_cliente,data_locacao),
    constraint fk_codigo_veiculo foreign key (codigo_veiculo) references veiculos(codigo_veiculo),
    constraint fk_codigo_cliente foreign key (codigo_cliente) references clientes(codigo_cliente),
    constraint fk_codigo_funcionario foreign key (codigo_funcionario) references funcionarios(codigo_funcionario)
);