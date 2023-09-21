<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Batalla Naval</title>
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

<h2>BATALLA NAVAL</h2>
<table>
<?php


    $random = mt_rand(1, 2);
    $position = "";
    print $random;
    if($random == 1){
        $position = "horizontal";
    }else {
        $position = "vertical";
    }
    
    print $position;

    $N = 10;
    echo "<tr>\n";
    echo "\t<td></td>\n"; 
    for ($i = 1; $i <= $N; $i++) {
        echo "\t<td>" . $i . "</td>\n"; 
    }
    echo "</tr>\n";

    for ($j = "A"; $j <= "J"; $j++) {
        echo "<tr>\n";
        echo "\t<td>" . $j . "</td>\n"; // Letras en la primera columna
        for ($i = 1; $i <= $N; $i++) {
            echo "\t<td>  </td>\n"; // Celdas vacías en el resto de la tabla
        }
        echo "</tr>\n";
    }

    ?>
</table>