/*
    Modificar la comision de los vendedores y ponerla al 0.5% cuando ganen mas de 50000
*/

UPDATE vendedores SET comision = 0.5 WHERE sueldo > 50000;