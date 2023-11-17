create database ProfesoresTeleco;

use ProfesoresTeleco;

create table asignaturas
(
	codigo char(6) not null primary key,
	asignatura char(20) not null,
	coste int
);

create table asignaturasprofesores
(
	codigo char(6) not null,
	dni char(9) not null,
	primary key (codigo, dni)
);

create table profesores
(
	dni char(9) not null primary key,
	nombre char(50) not null
);

insert into profesores values
('1234A', 'Maria Angeles'),
('5678B', 'Miriam'),
('9012C', 'Mario'),
('3456D', 'David'),
('7890E', 'Paco'),
('2345F', 'Fernando');


insert into asignaturas values
('A45007', 'FOSO', 1),
('A45004', 'Programacion', 1),
('A45015', 'ISS', 2),
('A40886', 'DAT', 2),
('A40952', 'TAW', 3),
('A45038', 'LDST', 1);

insert into asignaturasprofesores values
('A45007', '7890E'),
('A45007', '9012C'),
('A45007', '5678B'),
('A45004', '2345F'),
('A45004', '3456D'),
('A45015', '1234A'),
('A40886', '1234A'),
('A40886', '5678B'),
('A40952', '1234A'),
('A40952', '5678B'),
('A45038', '1234A'),
('A45038', '5678B');



CREATE TABLE asignaturas_caras
(
	codigo char(6) not null primary key,
	asignatura char(20) not null,
	coste int
);



