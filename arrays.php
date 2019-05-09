<?php

// numericos

$lista = array();

$lista[] = "banana";
$lista[] = "maçã";
$lista[] = "pera";
$lista[] = "melancia";
$lista[] = "melão";

$lista[100] = "ananás";
$lista[] = "morango";

array_splice($lista,2,1);

sort($lista);

foreach ($lista as $indice => $fruta) {
    echo "<p> o fruto $indice é o $fruta </p>";
}
?>