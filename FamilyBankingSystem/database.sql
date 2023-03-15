-- Active: 1677665319572@@127.0.0.1@3306@test
CREATE DATABASE `familybanking`;

USE `familybanking`;

CREATE Table `users`
(
    id int PRIMARY KEY AUTO_INCREMENT,
    firstName VARCHAR(500),
    lastName VARCHAR(500),
    username VARCHAR(500),
    dataOfBirth DATETIME,
    mobileNumber VARCHAR(50),
    `password` VARCHAR(500),
    userType ENUM('Main user','Basic user'),
    createAt DATETIME DEFAULT now(),
    isDeleted BIT(1)
)