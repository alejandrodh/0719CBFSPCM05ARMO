-- Creamos base de datos
CREATE SCHEMA ecommerce_05ARMO;

-- Elegimos base para usar
USE ecommerce_05ARMO;

-- Crear tabla usuers
CREATE TABLE users(
	id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
	email VARCHAR(100) NOT NULL,
	password VARCHAR(300) NOT NULL,
	username VARCHAR(100) NULL,
	avatar VARCHAR(100) NULL,
	address_id INT UNSIGNED NULL -- FK de address

);

-- Modificar la tabla users
ALTER TABLE users
MODIFY email VARCHAR(100) UNIQUE NOT NULL;

-- Crear tabla addresses
CREATE TABLE addresses(
	id	INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
	street VARCHAR(200) NOT NULL,
	number SMALLINT NOT NULL,
	apartment TINYINT,
	city VARCHAR(300) NOT NULL,
	country VARCHAR(100)
);
-- Agregamos FK en tabla users
ALTER TABLE users
ADD FOREIGN KEY(address_id) REFERENCES addresses(id);

-- Crear tabla products
CREATE TABLE products(
	id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
	title VARCHAR(200) NOT NULL,
	excerpt VARCHAR(200),
	description	TEXT,
	price DECIMAL(10,2) UNSIGNED NOT NULL,
	stock SMALLINT,
	category VARCHAR(100) NOT NULL DEFAULT 'sin categoria',
	color VARCHAR(100) NOT NULL DEFAULT 'no aplica',
	size VARCHAR(10) NOT NULL,
	user_id INT UNSIGNED,

	FOREIGN KEY(user_id) REFERENCES users(id)
);
