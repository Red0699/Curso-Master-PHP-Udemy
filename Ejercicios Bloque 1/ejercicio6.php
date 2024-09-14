<?php  

/*

Ejercicio 6:

Mostrar una pantalla de html con las tablas de multiplicar del 1 al 10

*/

echo "
    <table border='1'>
    
    <thead>
        <tr>
        
            <th>Multiplicación</th>
            <th>Resultado</th>

        </tr>
    </thead>

    <tbody>

"; 

for($i = 1; $i <= 10; $i++){
    echo "<tr>
    <td>1 * $i</td>
    <td>".(1 * $i)."</td>
    </tr>";
}

echo "


    </tbody>
    
    </table>

";