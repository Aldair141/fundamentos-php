<?php

//Ingrese un rango de fechas y mostrar todas las fechas de ese intervalo

$fecha1 = "2021-06-14";
$fecha2 = "2021-07-05";

$fecha1time = strtotime($fecha1);
$fecha2time = strtotime($fecha2);

do {
    echo date('d/m/Y', $fecha1time);
    echo "<br>";

    $fecha1time += 86400;
}while($fecha1time <= $fecha2time);

//¿Cuántos domingos hay en ese rango?

echo "<hr>";

$fecha1time = strtotime($fecha1);
$fecha2time = strtotime($fecha2);

$domingos = 0;

do{
    $weekday = date('w', $fecha1time);
    if($weekday == "0")
        $domingos++;

    $fecha1time += 86400;    
}while($fecha1time <= $fecha2time);

echo "Hay $domingos domingos.";

//Ingrese su fecha de nacimiento y visualizar la edad
echo "<hr>";

function calcularEdad($fechaNacimiento){
    $fechaArray = explode('-', $fechaNacimiento);
    $anioDiff = date('Y') - $fechaArray[0];
    $mesDiff = date('m') - $fechaArray[1];
    $diaDiff = date('d') - $fechaArray[2];

    if($mesDiff < 0 || ($mesDiff == 0 && $diaDiff < 0))
        $anioDiff--;

    return $anioDiff;
}

echo "Tengo " . calcularEdad('1991-02-21') . " años.";