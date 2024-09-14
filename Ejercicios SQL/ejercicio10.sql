/*
    Visualizar los apellidos de los vendedores, su fecha y su numero de grupo, 
    ordenados por fecha descendente y mostrar los 4 ultimos
*/

SELECT apellidos, fecha_alta, grupo_id FROM vendedores ORDER BY fecha_alta DESC LIMIT 4;