/* creación de la base de datos*/
CREATE DATABASE bdcarro;
/* creación de tablas*/
CREATE TABLE articulos(
articulo_id INT(5) PRIMARY KEY NOT NULL AUTO_INCREMENT,
articulo_des VARCHAR(30),
articulo_precio DOUBLE, 
articulo_stock INT
);
/* ---- */
CREATE TABLE usuarios(
usuario_nombre VARCHAR(8) PRIMARY KEY NOT NULL,
usuario_pass VARCHAR(12) NOT NULL,
usuario_mail VARCHAR(30) NOT NULL
);
/* ---- */
CREATE TABLE pedidos(
pedido_id INT(5) PRIMARY KEY NOT NULL AUTO_INCREMENT,
pedido_des VARCHAR(30),
articulo_precio DOUBLE, 
articulo_stock INT
);
/* ---*/
CREATE TABLE detalle_pedido(
pedido_id INT(5) NOT NULL,
articulo_id INT(5) NOT NULL,
articulo_cantidad INT,
PRIMARY KEY (pedido_id,articulo_id)
);
/* Creación de claves foráneas */
ALTER TABLE detalle_pedido 
	ADD CONSTRAINT detalle_pedido_fk
		FOREIGN KEY (pedido_id) REFERENCES pedidos (pedido_id) ON UPDATE CASCADE,
	ADD CONSTRAINT detalle_articulo_fk
		FOREIGN KEY (articulo_id) REFERENCES articulos (articulo_id) ON UPDATE CASCADE;

-- INSERTS

-- USUARIOS
INSERT INTO usuarios VALUES ("victor",123,"victor@mail.com");
INSERT INTO usuarios VALUES ("admin",123,"admin@mail.com");

-- ARTICULOS
INSERT INTO articulos VALUES (1,'Ordenador de ultima generacion, para trabajar y jugar con gran independencia de bateria',650,10);
INSERT INTO articulos VALUES (2,'Portatil de gama media perfecto para el trabajo',400,5);
INSERT INTO articulos VALUES (3,'Ordenador de Sobremesa potente procesador para diseño',250,15);