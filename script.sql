	create database conectec;
    use conectec;
    
    create table administrador (
    id int auto_increment primary key,
    nome varchar(100) not null,
    email varchar(100) not null unique,
    senha varchar(20) not null,
    criado_em timestamp default current_timestamp
    );
    
    create table usuarios (
    id int auto_increment primary key,
    nome varchar(100) not null,
    email varchar(100) not null unique,
    senha varchar(20) not null,
    criado_em timestamp default current_timestamp
    );