/*
    Listar todos los encargos realizados con la marca del coche y el nombre del cliente
*/

SELECT e.id, c.marca, cl.nombre FROM encargos e INNER JOIN coches c ON e.coche_id = c.id
INNER JOIN clientes cl ON e.cliente_id = cl.id;