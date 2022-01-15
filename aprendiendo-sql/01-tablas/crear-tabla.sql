/*
    int(nº cifras)                  entero
    integer (nº cifras)             entero (max 4294967295)
    varchar(nº caracteres)          string (max 255)
    char (nº caracteres)            string
    float(nº cifras,nº decimales)   decimal / coma flotante
    date,time,timestanp
    
    // STRING MAS GRANDES
    text                            string (65353 caracteres)
    mediumtext                      string (16 millons)
    LongText                        string (4 Billones de caractes
    
    // ENTEROS MAS GRANDES

    Mmediumint
    bigint

*/

/*
CREAR TABLA
*/

CREATE TABLE usuarios(
    id          int(11) auto_increment not null ,
    nombre      varchar(100) not null,
    apellidos   varchar(255) null,
    email       varchar(100) not null,
    password    varchar(100),
    CONSTRAINT pk_usuarios PRIMARY KEY (id)
);