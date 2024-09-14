/*
    Sacar la media de sueldos entre todos los vendedores por grupo
*/

SELECT AVG(sueldo) AS 'Promedio salario', grupo_id FROM vendedores GROUP BY grupo_id ORDER BY AVG(sueldo) DESC;

SELECT CEIL(AVG(v.sueldo)) AS 'Promedio salario', g.nombre, g.ciudad
FROM vendedores v INNER JOIN grupos g ON v.grupo_id = g.id
GROUP BY g.nombre ORDER BY AVG(v.sueldo) DESC;