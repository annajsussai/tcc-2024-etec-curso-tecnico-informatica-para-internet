CREATE DATABASE ecorastro_bd;
USE ecorastro_bd;

CREATE TABLE usuario (
cd_usuario INT PRIMARY Key auto_increment,
nm_usuario VARCHAR(50),
ds_login VARCHAR(100),
ds_senha VARCHAR(16),
nr_nivel INT(1),
ds_endereco VARCHAR(100),
nm_telefone VARCHAR(15),
bairro VARCHAR(55),
alias_endereco VARCHAR(100));

CREATE TABLE tb_ecoponto(
cd_ecoponto INT PRIMARY KEY Auto_increment,
nm_ecoponto VARCHAR(35),
end_ecoponto VARCHAR(100),
tel_ecoponto VARCHAR(15),
horario_semana VARCHAR(30),
horario_fim VARCHAR(35),
id_usuario INT not null,
constraint fk_id_usuario FOREIGN KEY(id_usuario) references usuario (cd_usuario);
);

INSERT INTO tb_ecoponto (nm_ecoponto, end_ecoponto, tel_ecoponto, horario_semana, horario_fim, id_usuario) VALUES ("USF Eco Ponto Gaivota" , "Av. Flácides Ferreira, 500 - Gaivota - Interior, Itanhaém", "(13) 3429-1052", "7h às 12h / 13h às 16h", "7h às 12h", 38);
INSERT INTO tb_ecoponto (nm_ecoponto, end_ecoponto, tel_ecoponto, horario_semana, horario_fim, id_usuario) VALUES ("SF Eco Ponto Loty" , "Avenida Marginal – Verde Mar (próximo a USF Loty) - Loty, Itanhaém-SP", "(13) 3424-3037", "7h às 12h / 13h às 16h", "7h às 12h", 38);
INSERT INTO tb_ecoponto (nm_ecoponto, end_ecoponto, tel_ecoponto, horario_semana, horario_fim, id_usuario) VALUES ("SF Eco Ponto Savoy" , "Rua Jaime Limo Santos (Próx. ao Campo Unidos do Savoy) - Savoy, Itanhaém", "(13) 3427-5368", "7h às 12h / 13h às 16h", "7h às 12h", 38);
INSERT INTO tb_ecoponto (nm_ecoponto, end_ecoponto, tel_ecoponto, horario_semana, horario_fim, id_usuario) VALUES ("SF Eco Ponto Cibratel II" , "Rua Afanásio Petecof (Próx. a E.M Maria da Penha Correa Sanches), Cibratel II, Itanhaém - SP", "(13) 3425-1018", "7h às 12h / 13h às 16h", "7h às 12h", 38);