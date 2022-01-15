CREATE DATABASE IF NOT EXISTS symfony_master;

USE symfony_master;

CREATE TABLE IF NOT EXISTS users(
id          int(255) auto_increment not null,
role        varchar(50),
name        varchar(100),
surname     varchar(200),
email       varchar(255),
password    varchar(255),
created_at  datetime,

CONSTRAINT pk_user PRIMARY KEY (id)
)ENGINE=InnoDb;


Insert into users Values(NULL,'ROLE_USER','Albert','Aviño','albertavino@gmail.com','password',CURTIME());
Insert into users Values(NULL,'ROLE_USER','Manolo','Perez','mperez@mperez.com','password',CURTIME());
Insert into users Values(NULL,'ROLE_USER','Carlos','Sanchez','carlos@carlos.com','password',CURTIME());




CREATE TABLE IF NOT EXISTS tasks(
id          int(255) auto_increment not null,
user_id     int(255) not null,
title       varchar(255),
content     text,
priority    varchar(20),
hours       int(100),
create_at   datetime,

CONSTRAINT pk_tasks PRIMARY KEY (id),
CONSTRAINT fk_task_user FOREIGN KEY (user_id) REFERENCES users(id)
)ENGINE=InnoDb;


Insert into tasks Values(NULL,1,'tarea 1','contenido de prueba 1', 'high',40,CURTIME();
Insert into tasks Values(NULL,1,'tarea 2','contenido de prueba 2', 'low',20,CURTIME());
Insert into tasks Values(NULL,2,'tarea 3','contenido de prueba 3', 'medium',10,CURTIME();
Insert into tasks Values(NULL,3,'tarea 4','contenido de prueba 4', 'high',50,CURTIME());
