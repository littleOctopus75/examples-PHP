--  Source Database (https://www.adaweb.es/modelo-vista-controlador-mvc-en-php-actualizado-2022/).
--  TW 2

DROP DATABASE IF EXISTS mvc_example;

CREATE DATABASE mvc_example;

USE mvc_example;

CREATE TABLE note (
    id int(11) NOT NULL,
    title varchar(75) NOT NULL,
    content text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE note
    ADD PRIMARY KEY (id);