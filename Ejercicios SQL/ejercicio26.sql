/*
    Sacar vendedores que tienen jefe y sacar el nombre del jefe
*/

SELECT v1.nombre AS 'Vendedor', v2.nombre AS 'Jefe' 
FROM vendedores v1 INNER JOIN vendedores v2 ON v1.jefe = v2.id
