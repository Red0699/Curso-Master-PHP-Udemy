/*
    Mostrar listado de clientes (numero de cliente y el nombre)
    mostrar tambien el numero de vendedor y su nombre
*/

SELECT c.id, c.nombre, c.vendedor_id, v.nombre FROM clientes c INNER JOIN vendedores v ON c.vendedor_id = v.id;