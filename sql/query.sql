-- Active: 1732421373194@@127.0.0.1@3306@users
CREATE DATABASE users;

use users;

CREATE TABLE registration (
    id INT PRIMARY KEY AUTO_INCREMENT,
    userName VARCHAR(100),
    email VARCHAR(100),
    password VARCHAR(100),
    note VARCHAR(200),
    isAdmin VARCHAR(10),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO
    registration (
        userName,
        email,
        password,
        note,
        isAdmin
    )
VALUES (
        "Chandan",
        "chand@gamil.com",
        "chand12",
        "Hello guys.",
        "True"
    ),
    (
        "Akshay",
        "ak@gamil.com",
        "ak12",
        "Hello guys. My name is Akshay.",
        "True"
    ),
    (
        "Parshu",
        "parshu@gamil.com",
        "parshu",
        "Hello guys. I'm Parshu",
        "False"
    );

SELECT * from registration;