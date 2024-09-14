/*
    Obtener un listado de clientes atentidos por el vendedor 'David Lopez'
*/

#Consulta combinada
SELECT c.*, CONCAT(v.nombre, ' ', v.apellidos) AS 'Nombre y apellidos vendedor' 
FROM clientes c INNER JOIN vendedores v ON c.vendedor_id = v.id 
WHERE v.nombre = 'David' AND v.apellidos = 'Lopez';

#Consulta son subconsulta
SELECT * FROM clientes WHERE vendedor_id IN (SELECT id FROM vendedores WHERE nombre = 'David' AND apellidos = 'Lopez');