/*
    Obtener un listado con los encargos realizados por el cliente 'Soluciones Fernández'
*/

SELECT * FROM encargos WHERE cliente_id IN (SELECT id FROM clientes WHERE nombre = 'Soluciones Fernández');

SELECT e.id AS 'No de encargo', e.cantidad, c.nombre, co.modelo, e.fecha 
FROM encargos e INNER JOIN clientes c ON c.id = e.cliente_id
INNER JOIN coches co ON co.id = e.coche_id
WHERE cliente_id IN (SELECT id FROM clientes WHERE nombre = 'Soluciones Fernández');