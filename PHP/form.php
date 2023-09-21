<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios</title>
    <style>
        h2 {
            color: blue;             
        }

        table {
            border-collapse: collapse;
            border: solid black;
            border-spacing: 5px;
        }

        td {
            border: solid black;
            padding-right: 5px; 
            width: 15px; 
            height: 15px; 
            text-align: center; 
            vertical-align: middle; 
        }

    </style>
    
    
</head>

<h2>Ejercicio 1</h2>
<table>
    <?php
    $N = 7;
    echo "<tr>\n";
    for ($i = 1; $i <= $N; $i++) {
        echo "\t<td>" . $i . "</td>\n";
    };
    echo "\t</tr>\n";
    ?>
</table>

<h2>Ejercicio 2</h2>
<table>
    <?php
    $N = 7;
    $L = "G";
    echo "<tr>\n";
    for ($i = "A"; $i <= $L; $i++) {
        echo "\t<td>" . $i . "</td>\n";
    };
    echo "\t</tr>\n";
    
    echo "<tr>\n";
    for ($j = 1; $j <= $N; $j++) {
        echo "\t<td>" . $j . "</td>\n";
    };
    echo "\t</tr>\n";
    ?>
</table>

<h2>Ejercicio 3</h2>
<table>
<?php
    $N = 7;
    
    for ($i = 1; $i <= $N; $i++) {
        echo "<tr>\n";
        echo "\t<td>" . $i . "</td>\n";
        for ($j = $i + 1; $j <= $N + $i -1; $j++) {
            echo "\t<td>" . $j . "</td>\n";
        }
        echo "\t</tr>\n";
        
    }    
    ?>
</table>

<h2>Ejercicio 4</h2>
<table class="ej">
<?php
    $N = 7;  
    
    echo "<tr>\n";
    echo "\t<td></td>\n"; 
    for ($i = 1; $i <= $N; $i++) {
        echo "\t<td>" . $i . "</td>\n"; 
    }
    echo "</tr>\n";

    for ($j = "A"; $j <= "G"; $j++) {
        echo "<tr>\n";
        echo "\t<td>" . $j . "</td>\n"; // Letras en la primera columna
        for ($i = 1; $i <= $N; $i++) {
            echo "\t<td>  </td>\n"; // Celdas vacías en el resto de la tabla
        }
        echo "</tr>\n";
    }

    if ($j == "A" && $i == 2){
        echo "x";
    }
    

    ?>
    
</table>
