/*
    Visualizar todos los coches en cuyo marca exista la letra "A" y cuyo modelo empieza por "F"
*/

SELECT * FROM coches WHERE marca LIKE '%a%' AND modelo LIKE 'F%';