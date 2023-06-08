create database mas;

CREATE TABLE cliente (
id_usuario int(5) NOT NULL primary key AUTO_INCREMENT,
clave varchar(80) NOT NULL,
nombre varchar(20) NOT NULL,
apellido_1 varchar(20) NOT NULL,
apellido_2 varchar(20) NOT NULL,
telefono int (9) NOT NULL,
mail varchar(100) NOT NULL,
tipo_usuario varchar(20),
codi_activacion int(11) not null;
activacion-mail boolean not null
);

CREATE TABLE presupuesto (
id_presupuesto int (5) NOT NULL primary key AUTO_INCREMENT,
id_usuario int (5) references cliente,
provincia varchar (100) NOT NULL,
localidad varchar (100) NOT NULL,
calle varchar (80) NOT NULL,
numero int (10) NOT NULL,
piso varchar (10) NOT NULL,
puerta varchar (10) NOT NULL,
c_postal int (5) not null,
merchandising enum ("Si","No") not null,
diseno enum ("Si","No")not null,
impresion enum ("Si","No") not null,
medida varchar (1000) not null,
gramaje varchar (1000) not null,
acabado varchar (100) not null,
troquel enum ("Si","No")not null,
cantidad int (255) not null,
fecha date not null,
precio float NOT NULL,
imagen varchar(100) NOT NULL,
tipo_entrega enum ("Envio","Recogida"),
aceptado boolean not null,
crear_presu boolean not null
);

CREATE TABLE facturas (
id_factura int(5) NOT NULL primary key AUTO_INCREMENT,
id_presupuesto int (5) references presupuesto,
id_usuario int (5) references cliente,
total float not null,
iva float not null,
total_iva float not null,
fecha date
);