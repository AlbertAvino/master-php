SELECT * FROM usuarios WHERE email = 'admin@admin.com'

/*
 * OPERADORES DE COMPARACION
    Igual           =
    DISTINTO        != 
    Menor           <
    Mayor           >
    Menor o igual   <=
    Mayour o ogual  >=
    entre           between A and B
    en              in
    es nulo         is null
    no nulo         is not null
    como            like
    no es como      not like
    
    
*/

/*
 * OPERADORES LOGICOS
    O   OR
    Y   AND
    NO  NOT
*/

/*
 *COMODINES
    Cualquier cantidad de caracteres :  %
    Un caracter desconocido :           _
*/

# EJEMPLOS #

# 1. Mostrar nombre y apellidos de todos los usuarios registradors en 2019
SELECT nombre, apellidos FROM usuarios WHERE YEAR(fecha) = 2019;

# 2. Mostrar nombre y apellidos de todos los usuarios que no  se registraron en 2019
SELECT nombre, apellidos FROM usuarios WHERE YEAR(fecha) != 2019 OR ISNULL(fecha);

# 3. Mostrar el email de los usuarios cuyo apellido contenga la letra A
# y que contraseña sea 1234
SELECT email FROM usuarios WHERE apellidos LIKE '%a%' AND password = 1234;

# 4. Mostrar todos los registros cuyo año sea par
SELECT * FROM usuarios WHERE (YEAR(fecha)%2 = 0);

# 5. Mostrar todos los registros cuyo nombre tenga mas de 5 letras 
# y registrados antes 2020 y el nombre en mayuculas
SELECT UPPER(nombre) AS 'Nombre' , apellidos FROM usuarios WHERE (LENGTH(nombre) >5) AND (YEAR(fecha) < 2020);

# ORDENAMOS
SELECT * FROM usuarios ORDER BY id DESC;
SELECT * FROM usuarios ORDER BY id ASC;

# LIMIT

SELECT * FROM usuarios LIMIT 0,2;
