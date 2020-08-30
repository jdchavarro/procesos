use procesos;

CREATE TABLE clientes (
	id int NOT NULL AUTO_INCREMENT,
    cedula int NOT NULL,
    nombre varchar(255) NOT NULL,
    telefono int,
    direccion varchar(255),
    email varchar(255),
    PRIMARY KEY (id)
);

INSERT INTO clientes (cedula, nombre, telefono, direccion, email) VALUES (111,"cliente1", 111, "direccion1", "orreo1@correo1.com");
INSERT INTO clientes (cedula, nombre, telefono, direccion, email) VALUES (222,"cliente2", 222, "direccion2", "correo2@correo.com");
INSERT INTO clientes (cedula, nombre, telefono, direccion, email) VALUES (333,"cliente3", 333, "direccion3", "correo3@correo.com");
INSERT INTO clientes (cedula, nombre, telefono, direccion, email) VALUES (444,"cliente4", 444, "direccion4", "correo4@correo.com");

SELECT * FROM clientes;

CREATE TABLE demandados (
	id int NOT NULL AUTO_INCREMENT,
    cedula int NOT NULL,
    nombre varchar(255) NOT NULL,
    telefono int,
    direccion varchar(255),
    email varchar(255),
    PRIMARY KEY (id)
);

CREATE TABLE juzgados(
	id int NOT NULL AUTO_INCREMENT,
    nombre varchar(255) NOT NULL,
    especialidad varchar(255),
    ciudad varchar(255),
    telefono int,
    direccion varchar(255),
    email varchar(255),
    PRIMARY KEY (id)
);

CREATE TABLE procesos(
	id int NOT NULL AUTO_INCREMENT,
    numeroRadicado int,
    cliente_id int,
    demandado_id int,
    juzgado_id int,
    PRIMARY KEY (id),
    FOREIGN KEY  (cliente_id) REFERENCES clientes(id),
    FOREIGN KEY  (demandado_id) REFERENCES demandados(id),
    FOREIGN KEY  (juzgado_id) REFERENCES juzgados(id)
);

ALTER TABLE procesos ADD estado varchar(255);
ALTER TABLE procesos ADD descripcion varchar(10000);

