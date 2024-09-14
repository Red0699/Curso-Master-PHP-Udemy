/*
    Visualizar el nombre y los apellidos de los vendedores en una misma columna 
    su fecha de registro y el dia de la semana en la que se registraron
*/

SELECT CONCAT(nombre, ' ', apellidos) AS 'Nombre y Apellido', fecha_alta AS 'Fecha registro', DAYNAME(fecha_alta) AS 'Dia de la semana de registro' FROM vendedores;