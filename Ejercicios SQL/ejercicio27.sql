/*
    Visualizar los nombres de los clientes y la cantidad de encargos realizando incluyendo los que no hayan realizado encargos
*/

SELECT cl.nombre, COUNT(e.id) FROM clientes cl LEFT JOIN encargos e ON e.cliente_id = cl.id GROUP BY cl.id;