drop database if exists Universidad;

create database Universidad;

use Universidad;

create table asignaturas
(
	cod_asignatura char(3) not null primary key,
	asignatura char(20) not null,
	coste int,
	ects integer not null,
	area char(50)
);

create table areas
(
	cod_area char(5) not null primary key,
	area char(50) not null,
	edificio char(1)
);

create table profesores
(
	dni char(9) not null primary key,
	nombre char(50) not null,
	direccion char(60),
	fecha date,
	salario float(8,2),
	cod_area char(5)
);



insert into asignaturas values
('T21', 'Programacion', 50, 6, 'IT'),
('T22', 'FOSO', 90, 6, 'IT'),
('T31', 'ISS', 0, 9, 'IT'),
('T51', 'ARSS', 200, 6, 'IT'),
('M11', 'Algebra', 100,	6, 'AM'),
('M12', 'Calculo', 50, 9, 'AM'),
('M13', 'Ampliacion', 200, 6, 'AM'),
('M14', 'Avanzada', 0, 9, 'AM'),
('S11', 'TR', 100,	6, 'TSC'),
('S12', 'TACG', 50,	9, 'TSC'),
('S13', 'ST', 0,	6, 'TSC'),
('S14', 'Radio', 0,	6, 'TSC'),
('S15', 'CO', 100,	6, 'TSC'),
('S16', 'EC', 500,	9, 'TSC');


insert into profesores values
('00000000t', 'Juan', 'P/Zorrilla', '2012-10-01', 25235.28, 'IT'),
('11111111h', 'Pedro', 'C/Bailen', '2000-10-01', 60592.36, 'IT'),
('22222222j', 'Luis', 'C/Malaga', '2008-10-01', 30475.62, 'AM'),
('33333333p', 'Ana', 'C/Cordoba', '1995-05-15', 60748.17, 'AM'),
('12345678z', 'Marisol', 'C/Delibes', '1996-10-01', 65125.78, 'TSC'),
('00000023t', 'Pedro', 'P/Castanos', '2001-02-01', 50623.78, 'TSC');


alter table areas add column departamento char(100);

insert into areas values
('IT', 'Ingenieria Telematica', 'B', 'Teoria de la Señal y Comunicaciones e Ingenieria Telematica'),
('AM', 'Analisis Matematico', 'A', 'Algebra y Analisis Matematico, Geometria y Topologia'),
('TSC', 'Teoria de la Señal y Comunicaciones', 'B', 'Teoria de la Señal y Comunicaciones e Ingenieria Telematica');


insert into areas (cod_area, area, departamento) values 
('MA', 'Matematica Aplicada', 'Matematica Aplicada');

