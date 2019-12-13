CREATE DATABASE IF NOT EXISTS register;

CREATE TABLE IF NOT EXISTS users (
    id int(11) NOT NULL AUTO_INCREMENT,
    email varchar(50) NOT NULL,
    firstname VARCHAR (50) NOT NULL,
    lastname VARCHAR(50) NOT NULL,
    password varchar(50) NOT NULL,
    trn_date datetime NOT NULL,
    PRIMARY KEY (id)
);