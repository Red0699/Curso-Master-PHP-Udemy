/*
1. Diseñar y crear la base de datos de un concesionario
*/

CREATE DATABASE IF NOT EXISTS ejercicios;
USE ejercicios;

CREATE TABLE coches(
    id int(10) AUTO_INCREMENT NOT NULL,
    modelo varchar(100) NOT NULL,
    marca varchar(50),
    precio int(20) NOT NULL,
    stock int(255) NOT NULL,
    CONSTRAINT pk_coches PRIMARY KEY(id)
)ENGINE=InnoDB;

CREATE TABLE grupos(
    id int(10) AUTO_INCREMENT NOT NULL,
    nombre varchar(100) NOT NULL,
    ciudad varchar(50),
    CONSTRAINT pk_grupos PRIMARY KEY(id)
)ENGINE=InnoDB;

CREATE TABLE vendedores(
    id int(10) AUTO_INCREMENT NOT NULL,
    grupo_id int(10) NOT NULL,
    jefe int(10),
    nombre varchar(100) NOT NULL,
    apellidos varchar(150) NOT NULL,
    cargo varchar(50),
    fecha_alta date,
    sueldo float(20,2),
    comision float(10,2),
    CONSTRAINT pk_vendedores PRIMARY KEY(id),
    CONSTRAINT fk_vendedor_grupo FOREIGN KEY(grupo_id) REFERENCES grupos(id),
    CONSTRAINT fk_vendedor_jefe FOREIGN KEY(jefe) REFERENCES vendedores(id)
)ENGINE=InnoDB;

CREATE TABLE clientes(
    id int(10) AUTO_INCREMENT NOT NULL,
    vendedor_id int(10) NOT NULL,
    nombre varchar(150) NOT NULL,
    ciudad varchar(100),
    gastado float(50,2),
    fecha date,
    CONSTRAINT pk_clientes PRIMARY KEY(id),
    CONSTRAINT fk_cliente_vendedor FOREIGN KEY(vendedor_id) REFERENCES vendedores(id)
)ENGINE=InnoDB;

CREATE TABLE encargos(
    id int(10) AUTO_INCREMENT NOT NULL,
    cliente_id int(10) NOT NULL,
    coche_id int(10) NOT NULL,
    cantidad int(100),
    fecha date,
    CONSTRAINT pk_encargos PRIMARY KEY(id),
    CONSTRAINT fk_encargo_cliente FOREIGN KEY(cliente_id) REFERENCES clientes(id),
    CONSTRAINT fk_encargo_coche FOREIGN KEY(coche_id) REFERENCES coches(id)
)ENGINE=InnoDB;

/*
2. Rellenar la base de datos con información
*/

#Coches
INSERT INTO coches VALUES(NULL, 'Renault Clio', 'Renault', 12000, 13);
INSERT INTO coches VALUES(NULL, 'Seat Panda', 'Seat', 10000, 10);
INSERT INTO coches VALUES(NULL, 'Mercedes Ranchera', 'Mercedes Dens', 32000, 24);
INSERT INTO coches VALUES(NULL, 'Porche Cayena', 'Porche', 65000, 5);
INSERT INTO coches VALUES(NULL, 'Lambo Aventador', 'Lamborgini', 170000, 2);
INSERT INTO coches VALUES(NULL, 'Ferrari Spider', 'Ferrari', 245000, 80);

#Grupos
INSERT INTO grupos VALUES(NULL, 'Vendedores A', 'Madrid');
INSERT INTO grupos VALUES(NULL, 'Vendedores B', 'Madrid');
INSERT INTO grupos VALUES(NULL, 'Directores mecanicos', 'Madrid');
INSERT INTO grupos VALUES(NULL, 'Vendedores A', 'Barcelona');
INSERT INTO grupos VALUES(NULL, 'Vendedores B', 'Barcelona');
INSERT INTO grupos VALUES(NULL, 'Vendedores C', 'Valencia');
INSERT INTO grupos VALUES(NULL, 'Vendedores B', 'Pamplona');
INSERT INTO grupos VALUES(NULL, 'Vendedores C', 'Santiago de Compostela');

#Vendedores
INSERT INTO vendedores VALUES(NULL, 1, NULL, 'David', 'Lopez', 'Responsable de tienda', CURDATE(), 30000, 4);
INSERT INTO vendedores VALUES(NULL, 1, 1, 'Ana', 'Martínez', 'Vendedora', CURDATE(), 25000, 3);
INSERT INTO vendedores VALUES(NULL, 2, NULL, 'Carlos', 'García', 'Responsable de tienda', CURDATE(), 26000, 3.5);
INSERT INTO vendedores VALUES(NULL, 1, 3, 'Beatriz', 'Sánchez', 'Mecanico jefe', CURDATE(), 27000, 4);
INSERT INTO vendedores VALUES(NULL, 1, NULL, 'Javier', 'Pérez', 'Vendedor de recambios', CURDATE(), 28000, 4.5);
INSERT INTO vendedores VALUES(NULL, 1, NULL, 'Laura', 'Gómez', 'Vendedora', CURDATE(), 29000, 5);
INSERT INTO vendedores VALUES(NULL, 1, NULL, 'Miguel', 'Rodríguez', 'Vendedor experto', CURDATE(), 30000, 5.5);
INSERT INTO vendedores VALUES(NULL, 1, NULL, 'Elena', 'Fernández', 'Vendedora', CURDATE(), 31000, 6);
INSERT INTO vendedores VALUES(NULL, 1, NULL, 'Pedro', 'López', 'Ejecutivo de cuentas', CURDATE(), 32000, 6.5);
INSERT INTO vendedores VALUES(NULL, 1, 8, 'Sofía', 'Martín', 'Ayudante en tiendas', CURDATE(), 33000, 7);

# Clientes
INSERT INTO clientes VALUES(NULL, 1, 'Construcciones Diaz Inc', 'Alcobendas', 24000, CURDATE());
INSERT INTO clientes VALUES(NULL, 1, 'Tecnologías Martínez', 'Madrid', 40000, CURDATE());
INSERT INTO clientes VALUES(NULL, 1, 'Servicios López', 'Barcelona', 32000, CURDATE());
INSERT INTO clientes VALUES(NULL, 1, 'Innovaciones García', 'Valencia', 96000, CURDATE());
INSERT INTO clientes VALUES(NULL, 1, 'Soluciones Fernández', 'Sevilla', 170000, CURDATE());
INSERT INTO clientes VALUES(NULL, 2, 'Proyectos Rodríguez', 'Bilbao', 245000, CURDATE());


# Encargos
INSERT INTO encargos VALUES(NULL, 1, 1, 2, CURDATE());
INSERT INTO encargos VALUES(NULL, 2, 2, 4, CURDATE());
INSERT INTO encargos VALUES(NULL, 3, 3, 1, CURDATE());
INSERT INTO encargos VALUES(NULL, 4, 3, 3, CURDATE());
INSERT INTO encargos VALUES(NULL, 5, 5, 1, CURDATE());
INSERT INTO encargos VALUES(NULL, 6, 6, 1, CURDATE());

