CREATE DATABASE IF NOT EXISTS laravel_master;

USE laravel_master;

CREATE TABLE IF NOT EXISTS users (
    id              int(255) auto_increment not null,
    role            varchar(20),    
    name            varchar(100),
    surname         varchar(200),
    nick            varchar(100),
    email           varchar(255),
    password        varchar(255),
    image           varchar(255),
    create_at       datetime,
    update_at       datetime,
    remember_token  varchar(255),
    CONSTRAINT pk_users PRIMARY KEY(id)

)ENGINE=InnoDb;

INSERT INTO users VALUES(NULL,'user','Albert','Aviñó','Sir16','albertavino@gmail.com','pass',null,curtime(),curtime(),NULL);
INSERT INTO users VALUES(NULL,'user','Juan','Lopez','JuanLopez','juan@juan.com','pass',null,curtime(),curtime(),NULL);
INSERT INTO users VALUES(NULL,'user','Manolo','Garcia','ManoloGarcia','manolo@manilo.com','pass',null,curtime(),curtime(),NULL);



CREATE TABLE IF NOT EXISTS images(
    id                  int(255) auto_increment not null,
    user_id             int(255),
    image_path          varchar(255),
    description         text,
    create_at           datetime,
    update_at           datetime,
    CONSTRAINT pk_images PRIMARY KEY (id),
    CONSTRAINT fk_images_users FOREIGN KEY (user_id) REFERENCES users(id)
)ENGINE=InnoDb;

INSERT INTO images VALUES( NULL,1,'test.jpg','descripción de prueba',curtime(),curtime());
INSERT INTO images VALUES( NULL,1,'test2.jpg','descripción de prueba 2',curtime(),curtime());
INSERT INTO images VALUES( NULL,1,'test3.jpg','descripción de prueba 3',curtime(),curtime());
INSERT INTO images VALUES( NULL,3,'familia.jpg','descripción de familia',curtime(),curtime());

CREATE TABLE IF NOT EXISTS comments(
id                  int(255) auto_increment not null,
user_id             int(255),
image_id            int(255),
content             text,
create_at           datetime,
update_at           datetime,
CONSTRAINT pk_comments PRIMARY KEY (id),
CONSTRAINT fk_comment_users FOREIGN KEY (user_id) REFERENCES users(id),
CONSTRAINT fk_comment_images FOREIGN KEY (image_id) REFERENCES images(id)
    
)ENGINE=InnoDB;

INSERT INTO comments VALUES(NULL,1,4,'Buena foto de familia',curtime(),curtime());
INSERT INTO comments VALUES(NULL,2,1,'Buena foto de test',curtime(),curtime());
INSERT INTO comments VALUES(NULL,2,4,'que bueno',curtime(),curtime());


CREATE TABLE IF NOT EXISTS likes(
id                  int(255) auto_increment not null,
user_id             int(255),
image_id            int(255),
create_at           datetime,
update_at           datetime,
CONSTRAINT pk_likes PRIMARY KEY (id),
CONSTRAINT fk_likes_users FOREIGN KEY (user_id) REFERENCES users(id),
CONSTRAINT fk_likes_images FOREIGN KEY (image_id) REFERENCES images(id)
    
)ENGINE=InnoDB;

INSERT INTO likes VALUES(NULL,1,4,curtime(),curtime());
INSERT INTO likes VALUES(NULL,2,4,curtime(),curtime());
INSERT INTO likes VALUES(NULL,3,1,curtime(),curtime());
INSERT INTO likes VALUES(NULL,3,2,curtime(),curtime());
INSERT INTO likes VALUES(NULL,2,1,curtime(),curtime());
