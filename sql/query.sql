CREATE DATABASE admindb;

use admindb;

CREATE TABLE registration (
    id INT PRIMARY KEY AUTO_INCREMENT,
    userName VARCHAR(100),
    email VARCHAR(100),
    password VARCHAR(100),
    note VARCHAR(200),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO
    registration (
        userName,
        email,
        password,
        note
    )
VALUES (
        "Chandan",
        "chand@gamil.com",
        "chand12",
        "Hello guys."
    ),
    (
        "Akshay",
        "ak@gamil.com",
        "ak12",
        "Hello guys. My name is Akshay."
    ),
    (
        "Parshu",
        "parshu@gamil.com",
        "parshu",
        "Hello guys. I'm Parshu"
    );

SELECT * from registration;