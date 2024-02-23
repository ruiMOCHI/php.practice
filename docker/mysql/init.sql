DROP DATABASE IF EXISTS php_practice;

CREATE DATABASE php_practice;

USE php_practice;

DROP TABLE IF EXISTS mst_staff;
CREATE TABLE mst_staff (
    code int PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(15),
    password VARCHAR(32)
);

INSERT INTO mst_staff (name, password) VALUES
('ろくまる', '347');

DROP TABLE IF EXISTS mst_product;
CREATE TABLE mst_product (
    code INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(30),
    price INT
    /*image VARCHAR(30)*/
);

INSERT INTO mst_product (name, price) VALUES
('eggplant', '600');