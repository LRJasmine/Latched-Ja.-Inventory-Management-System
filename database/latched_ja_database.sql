DROP DATABASE IF EXISTS latched_ja_database;
CREATE DATABASE latched_ja_database;

USE latched_ja_database;

DROP TABLE IF EXISTS users;
CREATE TABLE users (
	id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL,
    username VARCHAR(15) NOT NULL,
    role VARCHAR(10) NOT NULL,
    password VARCHAR(8) NOT NULL,
    email VARCHAR(100) NOT NULL,
    contact_num VARCHAR(15) NOT NULL,
    PRIMARY KEY (id)
);

DROP TABLE IF EXISTS items;
CREATE TABLE items (
	id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL,
    type VARCHAR(10) NOT NULL,
    qty INT NOT NULL,
    sell_price FLOAT NOT NULL,
    purchase_price FLOAT NOT NULL,
    supplier VARCHAR(100) NOT NULL,
    PRIMARY KEY (id)
);

DROP TABLE IF EXISTS orders;
CREATE TABLE orders (
	id INT NOT NULL AUTO_INCREMENT,
    item_name VARCHAR(100) NOT NULL,
    item_price FLOAT NOT NULL,
    item_qty INT NOT NULL,
    order_date DATE NOT NULL,
    delivery_date DATE NOT NULL,
    delivery_status ENUM('Delivered', 'Not Delivery') NOT NULL,
    PRIMARY KEY (id)
);

DROP TABLE IF EXISTS sales;
CREATE TABLE sales (
	id INT NOT NULL AUTO_INCREMENT,
    item_id INT NOT NULL,
    item_name VARCHAR(100) NOT NULL,
    qty INT NOT NULL,
    date DATE NOT NULL,
    FOREIGN KEY (item_id) REFERENCES items(id),
    PRIMARY KEY (id)
);

GRANT ALL PRIVILEGES ON latched_ja_database.* TO 'comp2140_student'@'localhost'
IDENTIFIED BY 'PmEGW3L7fkKXRzvA';




