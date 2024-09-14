/*
    Selecciona el grupo en el que trabaja el vendedor con mayor salario y mostrar el nombre del grupo.
*/

SELECT g.*, CONCAT(v.nombre, ' ', v.apellidos) AS 'Nombre vendedor', v.sueldo 
FROM grupos g INNER JOIN vendedores v ON g.id = v.grupo_id 
WHERE v.id = (SELECT id FROM vendedores ORDER BY sueldo DESC LIMIT 1);

SELECT * FROM grupos WHERE id IN
(SELECT grupo_id FROM vendedores WHERE sueldo = (SELECT MAX(sueldo) FROM vendedores));