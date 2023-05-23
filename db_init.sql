CREATE DATABASE generic_qmc_prcd;
USE generic_qmc_prcd;

CREATE TABLE usuarios
(
	idUsuario int not null primary key AUTO_INCREMENT,
    nombreUsuario varchar(60),
    cargo varchar(30),
    correo varchar(100),
    claveUsuario varchar(32),
    expiration_date date,
    laboratorio date,
    recibe_alertas int default 0
);

INSERT INTO usuarios(nombreUsuario, correo, claveUsuario, cargo, recibe_alertas) values
('Administrador del sistema', 'admin@mail.com', MD5('admin'), 'Administrador', 1);

CREATE TABLE quimicos_perecederos (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nombre varchar(60),
    marca varchar(60),
    cantidad int,
    presentacion varchar(3),
    laboratorio int,
    ubicacion varchar(20),
    fecha_caducidad date,
    nota int,
    condicion varchar(20)
)
/*
    El campo ID_Control sería autoincrementable
    En el campo presentación hay que colocar una restricción para que solo se pueda colocar los (Kg, g, mg) las abreviaciones de kilogramo gramo o kilogramo y las de (L,ml) litro y mililitro  respectivamente. Podría ser una lista desplegable.
    Para el campo de Laboratorio sería igual una restricción para que solo sean los números del 1 al 6  y no se pueda colocar un número diferente de esos.  Podría ser una lista desplegable.
    De igual manera en el Campo condición , un restricción que sólo permita colocar (Nuevo o Usado )
*/;

INSERT INTO quimicos_perecederos(nombre, marca, cantidad, presentacion, condicion, laboratorio, ubicacion, fecha_caducidad)
VALUES
    ('Ácido clorhídrico', 'SIGMA', '300', 'ml', 'Nuevo', 1, 'Cajonera 6', '2024-12-24'),
    ('Hidróxido de sodio', 'SIGMA', '200', 'g', 'Usado', 4, 'Prestado', '2025-05-02');

CREATE TABLE historial (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    id_quimico INT NOT NULL,
    nombre varchar(60),
    marca varchar(60),
    cantidad int,
    presentacion varchar(3),
    laboratorio int,
    ubicacion varchar(20),
    fecha_caducidad date,
    nota int,
    condicion varchar(20),
    tiempo datetime
)
/*
En la tabla del HistoriaRegistros serían  crear un folio único para cada movimiento de cada elemento( ejemplo historial de cambios  de producto 1) Dentro de la  tabla Historial de registros se agregaría el Campo Tiempo que seria tipo datatime para que se pueda ver la la fecha y la hora del registro junto a los campos de la tabla de arriba.
*/;