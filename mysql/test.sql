CREATE DATABASE test;
USE test;
CREATE TABLE schoolmates
(
sm_id      int         NOT NULL AUTO_INCREMENT,
sm_name    char(50)    NOT NULL,
sm_city    char(50)    NOT NULL,
sm_contact char(50)    NOT NULL,
sm_email   char(255)   NOT NULL,
PRIMARY KEY (sm_id)
)ENGINE=InnoDB;

SHOW TABLES;

CREATE TABLE choices
(
choice_id    int   NOT NULL AUTO_INCREMENT,
sm_id        int   NOT NULL,
PRIMARY KEY(choice_id)
)ENGINE=InnoDB;