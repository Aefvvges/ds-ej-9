<?php
$diasdelasemana = ['Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado', 'Domingo'];
foreach($diasdelasemana as $key => $valor){
    echo 'La posición de ' . $valor . ' es: ' . $key;
    echo '<br>';
}