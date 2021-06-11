<?php

    //Arreglo numérico. Empiezan en la posición 0. Array indexado
    //No debemos usar "echo" para imprimir arrays
    $numeros = [3, 4, 5, 6, 9, 15];

    //Imprimir el contenido del array
    var_dump($numeros);
    
    //Más legible, menos información
    print_r($numeros);

    print "
";
    //Acceder e imprimir un elemento del array
    echo $numeros[2];

    
    //Contar los elementos
    echo "
Cantidad de elementos: " . count($numeros);

    //Recorrer un array con un ciclo for
    for($i = 0; $i < count($numeros); $i++){
        echo "
";
        echo $numeros[$i];
    }

    //Accediendo a un elemento del array con una constante

    const ELEMENTO = 3;
    echo "

";
    echo "{$numeros[ELEMENTO]}";


    //Cambiar un valor del array
    echo "
--------------------------------------------------------------
";
    print_r($numeros);

    $numeros[ELEMENTO] = 69;

    print_r($numeros);
    //Intercambiar dos valores del array (con variable auxiliar)
    echo "
--------------------------------------------------------------
    ";
    $auxiliar = $numeros[0];
    $numeros[0] = $numeros[5];
    $numeros[5] = $auxiliar;
    print_r($numeros);

    //Intercambiar dos valores del array (sin variable auxiliar)
    echo "
--------------------------------------------------------------
        ";
    $numeros[1] = $numeros[1] + $numeros[4];
    $numeros[4] = $numeros[1] - $numeros[4];
    $numeros[1] = $numeros[1] - $numeros[4];
    print_r($numeros);

    //Recorrer un arreglo con foreach
    echo "
--------------------------------------------------------------
";
    foreach ($numeros as $key => $numero) {
        echo "$key => $numero";
        echo "
";
    }


//Declarar un array vacío
$arrayNew = [];
//Llenarlo de datos
$arrayNew[0] = 'Aldair';
$arrayNew[2] = 'Ruiz';
$arrayNew[1] = 'Mmmmm';
print_r($arrayNew);
echo $arrayNew[1];
//Resetear el array
//Crear arrays anidados
$arrayNew[4] = ['Juan', 'Aldair', 'Ruiz', 'Carmona'];
var_dump($arrayNew);

//ARRAY ASOCIATIVOS => Yo defino el índice
$datos = [
    "nombres" => "Juan Aldair",
    "apellidos" => "Ruiz Carmona",
    "edad" => 26,
    "cargo" => "Analista Programador .NET"
];
print_r($datos);
echo json_encode($datos);

//foreach (arreglo as key => valor)

foreach($datos as $key => $valor) {
    echo "
";
    echo "$key ======> $valor";
}

//Imprimir solo las llaves del arreglo
echo "
";
print_r(array_keys($datos));

//Imprimir solo los valores
foreach($datos as $valor){
    echo "
";
    echo $valor;
}

//Acceder a un valor
echo "
";
echo "Mi nombre es " . $datos['nombres'];

//ARRAY MULTIDIMENSIONAL => Un array dentro de otro array
//Crear un arreglo con 5 numeros cada item

echo "<hr>";

$arrayNumeros = [
    [1, 2, 3, 4, 5],
    [10, 11, 12, 13, 14],
    [20, 21, 22, 23, 24]
];

print_r($arrayNumeros);
//Imprimirlos por separado
foreach($arrayNumeros as $item){
    echo "<br>";
    print_r($item);
}
//Con dos foreachs, recorrer todo el arreglo multidimensional
echo "<ul>";
foreach($arrayNumeros as $key => $item){
    echo "<li>$key<ul>";
        foreach($item as $_key => $_item){
            echo "<li>$_item</li>";
        }
    echo "</ul></li>";
}
echo "</ul>";


//ARREGLOS ASOCIATIVOS
$arrayNombres = [
    "trabajador 1" => [
        "nombre" => "Juan Aldair",
        "edad" => 26,
        "puesto" => "Analista Programador .NET"
    ],
    "trabajador 2" => [
        "nombre" => "Sendy Yaranga",
        "edad" => 30,
        "puesto" => "Community Manager"
    ]
];

echo "<hr>";

foreach($arrayNombres as $persona){
    print_r($persona);
    echo "<br>";
}

echo "<hr>";

echo "<ul>";
foreach($arrayNombres as $key => $persona){
    echo "<li>" . ucfirst($key) . "<ul>";
    foreach($persona as $key2 => $dato){
        echo "<li>" . ucfirst($key2) . ": $dato</li>";
    }
    echo "</ul></li>";
}
echo "</ul>";

    /*
     Tarea: imprimir un array con varios tipos de datos
     Crear un arreglo con números aleatorios. Aplicar el ordenamiento burbuja 
     */