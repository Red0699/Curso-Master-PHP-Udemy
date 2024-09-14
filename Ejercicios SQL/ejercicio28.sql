/*
    Mostrar todos los vendedores y el numero de clientes
    Se deben mostrar tengan o no clientes.
*/

SELECT v.nombre, COUNT(cl.id) AS 'N_Clientes' 
FROM vendedores v LEFT JOIN clientes cl ON cl.vendedor_id = v.id
GROUP BY v.id;