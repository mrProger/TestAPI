CREATE DATABASE IF NOT EXISTS Ilya_Kh_API;

USE Ilya_Kh_API;

CREATE TABLE IF NOT EXISTS photo
(
    id INT PRIMARY KEY AUTO_INCREMENT,
    name TEXT NOT NULL,
    path TEXT NOT NULL,
    tags JSON NOT NULL
);

INSERT INTO photo (name, path, tags) VALUES ('puppy1', 'puppies/puppy1.png', JSON_OBJECT('tag','["a","b","c"]'));
INSERT INTO photo (name, path, tags) VALUES ('puppy2', 'puppies/puppy2.png', JSON_OBJECT('tag','["b","c"]'));
INSERT INTO photo (name, path, tags) VALUES ('puppy3', 'puppies/puppy3.png', JSON_OBJECT('tag','["a","e"]'));