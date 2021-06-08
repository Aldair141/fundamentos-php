<?php

//Ejercicio 1: día de la semana 

/*
1. Domingo
2. Lunes
3. Martes
4. Miércoles
5. Jueves
6. Viernes
7. Sábado
*/

$diaSemana = 99;
$diaSemanaTexto = "";

switch($diaSemana){
    case 1:
        $diaSemanaTexto = 'Domingo';
        break;
    case 2:
        $diaSemanaTexto = 'Lunes';
        break;
    case 3:
        $diaSemanaTexto = 'Martes';
        break;
    case 4:
        $diaSemanaTexto = 'Miércoles';
        break;
    case 5:
        $diaSemanaTexto = 'Jueves';
        break;
    case 6:
        $diaSemanaTexto = 'Viernes';
        break;
    case 7:
        $diaSemanaTexto = 'Sábado';
        break;
    default:
        $diaSemanaTexto = 'Espera...este no es un día de semana';
        break;
}

echo "Hoy estamos \"$diaSemanaTexto\"";

echo '
';

//Ejercicio 2: Obtener par e impar
$numero = 24;
$mod = $numero % 2;

switch ($mod) {
    case 0:
        echo "Es par";
        break;
    
    default:
        echo "Es impar";
        break;
}