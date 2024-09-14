/*
    Listar los clientes que han hecho algun encargo del coche 'Mercedes Ranchera'
*/

SELECT cl.nombre, co.modelo, e.fecha 
FROM clientes cl INNER JOIN encargos e ON e.cliente_id = cl.id
INNER JOIN coches co ON e.coche_id = co.id
WHERE e.coche_id IN (SELECT id FROM coches WHERE modelo = 'Mercedes Ranchera');

SELECT * FROM clientes WHERE id = 
    IN (SELECT cliente_id FROM encargos WHERE coche_id 
        IN (SELECT id FROM coches WHERE modelo LIKE '%Mercedes Ranchera%'));