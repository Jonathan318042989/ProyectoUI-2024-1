CREATE SCHEMA proyectoui;

USE proyectoui;

CREATE TABLE Cliente (
    id_cliente INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nombre VARCHAR(50),
    apellido_p VARCHAR(50),
    apellido_m VARCHAR(50),
    correo VARCHAR(255),
    telefono CHAR(10),
    contrasenia VARCHAR(20)
);

CREATE TABLE Producto (
    id_producto INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    fabricante VARCHAR(50),
    nombre_producto VARCHAR(50),
    categoria VARCHAR(50),
    descripcion VARCHAR(1000),
    inventario INT(6),
    precio DECIMAL(10,2)
);

CREATE TABLE Direccion (
    id_direccion INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    pais VARCHAR(50),
    estado VARCHAR(50),
    ciudad VARCHAR(50),
    direccion_1 VARCHAR(100),
    direccion_2 VARCHAR(100),
    codigo_postal CHAR(5)
);

CREATE TABLE Datos_Facturacion(
	id_facturacion INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    id_direccion INT,
    envia_aid_direccion INT,
    id_cliente INT,
	metodo VARCHAR(50),
    FOREIGN KEY (id_direccion) REFERENCES Direccion(id_direccion),
    FOREIGN KEY (envia_aid_direccion) REFERENCES Direccion(id_direccion),
    FOREIGN KEY (id_cliente) REFERENCES Cliente(id_cliente)
);

CREATE TABLE Compra(
	id_compra INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    fecha date,
    monto DECIMAL(10,2),
    id_facturacion INT,
    id_direccion INT,
    envia_aid_direccion INT,
    FOREIGN KEY (id_facturacion) REFERENCES Datos_Facturacion(id_facturacion),
    FOREIGN KEY (id_direccion) REFERENCES Datos_Facturacion(id_direccion),
    FOREIGN KEY (envia_aid_direccion) REFERENCES Datos_Facturacion(envia_aid_direccion)
);

CREATE TABLE Cupon(
	numero_cupon INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    descuento DECIMAL(2,2)
);

CREATE TABLE Aplica(
	id_compra INT,
    numero_cupon INT,
	FOREIGN KEY (id_compra) REFERENCES Compra(id_compra),
    FOREIGN KEY (numero_cupon) REFERENCES Cupon(numero_cupon)
);

CREATE TABLE Incluye(
	id_compra INT,
    id_producto INT,
    cantidad INT(3),
	FOREIGN KEY (id_compra) REFERENCES Compra(id_compra),
    FOREIGN KEY (id_producto) REFERENCES Producto(id_producto)
);

CREATE TABLE Resenia(
	id_cliente INT,
    id_producto INT,
	calificación DECIMAL(2,2),
    contenido VARCHAR(1000),
	FOREIGN KEY (id_cliente) REFERENCES Cliente(id_cliente),
    FOREIGN KEY (id_producto) REFERENCES Producto(id_producto)
);

CREATE TABLE Empleado(
	id_empleado INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nombre VARCHAR(50),
    apellido_p VARCHAR(50),
    apellido_m VARCHAR(50),
    correo VARCHAR(255),
    telefono CHAR(10)
);

CREATE TABLE Turno(
	id_empleado INT,
    zona_encargada VARCHAR(50),
    dia VARCHAR(20),
    hora_entrada TIME,
    hora_salida TIME,
    FOREIGN KEY (id_empleado) REFERENCES Empleado(id_empleado)
);

INSERT INTO Empleado(id_empleado, nombre, apellido_p, apellido_m, correo, telefono)
VALUES (1, "Jonathan", "Martínez", "Camarillo", "jonathanmartinezc0910@ciencias.unam.mx", "5555555555");

INSERT INTO Empleado(id_empleado, nombre, apellido_p, apellido_m, correo, telefono)
VALUES (2, "Jose", "Ortiz", "Marin", "joseom@ciencias.unam.mx", "5555555555");
