/*
    Mostrar los datos del vendedor con mas antiguedad en el concesionario
*/

SELECT * FROM vendedores ORDER BY fecha ASC LIMIT 1;

# Obtener el coche con mas unidades vendidas

SELECT * FROM coches WHERE id = (SELECT coche_id FROM encargos WHERE cantidad IN (SELECT MAX(cantidad) FROM encargos));