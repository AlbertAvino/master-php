# INSERTAR NUEVOS REGISTROS #

INSERT INTO usuarios VALUES(null,'Albert','Aviñó Teixidó','albertavino@gmail.com','1234','2020-05-16');
INSERT INTO usuarios VALUES(null,'Antonio','Martinez','antonio@gmail.com','1234','2020-05-16');
INSERT INTO usuarios VALUES(null,'Paco','Lopez','paco@gmail.com','1234','2020-05-16');

# INSERTAR FILAS SOLO CON CIERTAS COLUMNAS # 

INSERT INTO usuarios (email,password) values ('admin@admin.com','admin');