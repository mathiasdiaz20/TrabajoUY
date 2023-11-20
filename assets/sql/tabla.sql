
CREATE DATABASE IFNOTEXISTS trabajouy;

USE DATABASE trabajouy; 

CREATE TABLE IFNOTEXISTS usuarios (
    ci char(12) PRIMARY KEY,
    nomyapel VARCHAR(30),
    email varchar(30) UNIQUE
);