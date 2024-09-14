/*
    Obtener una lista de los nombres de los clientes con el importe 
    de sus encargos acumulado
*/

SELECT cl.nombre, SUM(co.precio * e.cantidad) AS 'Importe Acumulado'
FROM encargos e
INNER JOIN clientes cl ON e.cliente_id = cl.id
INNER JOIN coches co ON e.coche_id = co.id
GROUP BY e.id
ORDER BY 2 ASC;