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

    $fragata = [0, 0];
    $submari = array(array(0, 0), array(0, 0));
    $destructor = array(array(0, 0), array(0, 0), array(0, 0));
    $portaavions = array(array(0, 0), array(0, 0), array(0, 0), array(0, 0));

    $barcos = array("fragata", "submari", "destructor", "portaavions");
    $indiceb = array_rand($barcos);
    $barco = $barcos[$indiceb];
    print $barco;

    if ($position == "horizontal"){
        $position1=mt_rand(1, 10);
        $position2=mt_rand(1, 10);
        $fragata[0] = $position1;
        $fragata[1] = $position2;
    }

    

    $N = 10;

    echo "<tr>\n";
    for ($i = 0; $i <= $N; $i++) {
        for ($j = 1; $j <= $N; $j++) {
            if($j == 1){
                echo "\t<td>" . $i . "</td>\n"; 
            }

            if($i == 0){
                echo "\t<td>" . $j . "</td>\n";
            }elseif(($i == 2 && $j == 5 ) || ($i == 2 && $j == 6 )){
                echo "\t<td>" . " x" . "</td>\n";
            }
            
            else{
                echo "\t<td>" . " " . "</td>\n";
            }
            
            
        }
    echo "</tr>\n";
    }
    ?>  
</table>
    

<h2>Ejercicio 4</h2>
<table class="ej">
<?php
    $N = 7;  
    
    echo "<tr>\n";
    for ($i = 0; $i <= $N; $i++) {
        for ($j = 1; $j <= $N; $j++) {
            if($j == 1){
                echo "\t<td>" . $i . "</td>\n"; 
            }

            if($i == 0){
                echo "\t<td>" . $j . "</td>\n";
            }elseif($i == 5 && $j ==2){
                echo "\t<td>" . " x" . "</td>\n";
            }
            
            else{
                echo "\t<td>" . " " . "</td>\n";
            }
            
            
        }
    echo "</tr>\n";
    }
    ?>  
</table>