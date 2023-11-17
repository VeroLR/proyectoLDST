create database aviacion;

use aviacion;

create table vuelos
(
num_vuelo char(6) not null primary key,
origen char(20) not null,
destino char(20) not null,
hora_salida time not null,
tipo_avion char(3)not null
);


create table aviones
(
tipo_avion char(3) not null primary key,
capacidad int unsigned not null,
longitud float(4,2) not null,
envergadura float(4,2) not null,
velocidad_crucero float(6,1) not null
);

create table reservas
(
num_vuelo char (6) not null,
fecha_salida date not null,
plazas_libres int,
primary key (num_vuelo, fecha_salida)
);

insert into vuelos values
('IB600', 'MADRID', 'LONDRES', '10:30:00', '320'),
('BA467', 'MADRID', 'LONDRES', '20:40:00', '73S'),
('IB0640', 'MADRID', 'BARCELONA', '06:45:00', '320'),
('IB3742', 'MADRID', 'BARCELONA', '09:15:00', '72S'),
('LH1349', 'COPENHAGUE', 'FRANCFORT', '10:20:00', '320'),
('AF577', 'BILBAO', 'PARIS', '10:10:00', '737'),
('IB3709', 'DUBLIN', 'BARCELONA', '14:35:00', 'D9S'),
('IB778', 'BARCELONA', 'ROMA', '09:45:00', '72S'),
('IB721', 'BARCELONA', 'SEVILLA', '16:40:00', '72S'),
('IB327', 'MADRID', 'SEVILLA', '18:05:00', '72S'),
('IB023', 'MADRID', 'TENERIFE', '21:20:00', '72S'),
('IB368', 'MALAGA', 'BARCELONA', '22:25:00', 'D9S'),
('IB610', 'MALAGA', 'LONDRES', '15:05:00', '73S'),
('IB510', 'SEVILLA', 'MADRID', '07:45:00', '72S'),
('IB318', 'SEVILLA', 'MADRID', '10:45:00', '72S');

insert into aviones values 
('D92', 110, 38.30, 28.50, 815.0),
('320', 187, 42.15, 32.60, 853.0),
('72S', 160, 36.20, 25.20, 820.0),
('73S', 185, 44.10, 30.35, 815.0),
('737', 172, 38.90, 29.00, 793.0);

insert into reservas values
('IB600', '2004-10-20', 46),
('IB600', '2004-10-21', 80),
('IB600', '2004-10-22', 91),
('BA467', '2004-10-20', 32),
('BA467', '2004-10-21', 49),
('BA467', '2004-10-22', 79),
('IB0640', '2004-10-20', 15),
('IB0640', '2004-10-21', 21),
('IB0640', '2004-10-22', 39),
('IB3742', '2004-10-20', 60),
('IB3742', '2004-10-21', 72),
('IB3742', '2004-10-22', 85),
('IB510', '2004-10-20', 19),
('IB510', '2004-10-21', 31),
('IB510', '2004-10-22', 40);
