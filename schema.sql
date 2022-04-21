CREATE DATABASE dela_v_poryadke
    DEFAULT CHARACTER SET utf8
    DEFAULT COLLATE utf8_general_ci;

CREATE TABLE projects (
    id INT AUTO_INCREMENT,
    name VARCHAR(32) NOT NULL
 );

CREATE TABLE tasks (
    creation TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    status BOOL DEFAULT FALSE,
    name VARCHAR(32) NOT NULL,
    file VARCHAR(2048),
    deadline TIMESTAMP,
    project_id INT,
    user_id INT
 );

CREATE TABLE users (
    id INT AUTO_INCREMENT,
    registration TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    email VARCHAR(128) NOT NULL UNIQUE,
    name VARCHAR(128) NOT NULL,
    password CHAR(32) NOT NULL
 );

CREATE INDEX task_name ON tasks(name);
CREATE UNIQUE INDEX user_email ON users(email);