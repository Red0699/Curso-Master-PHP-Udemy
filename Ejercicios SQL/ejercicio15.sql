/*
    Mostrar los clientes que mas pedidos han hecho y mostrar cuantos hicieron
*/

SELECT cliente_id, COUNT(id) FROM encargos GROUP BY cliente_id ORDER BY 2 DESC LIMIT 2;