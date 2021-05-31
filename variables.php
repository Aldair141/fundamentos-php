<?php
    //Definiendo variables
    $nombre;

    $nombre = "Juan Aldair Ruiz Carmona";

    //Definición de variables
    $url = "https://dbuhos.com";
    echo $url;
    echo "<a href=" . $url . " target='_new'>Ir a mi página</a>";

    //Cambiando el valor de la variable
    $url = "https://www.google.com";

    //Concatenando dos cadenas
    echo "<br>";
    echo "<a href=" . $url . " target=\"_new\">Ir a google.com</a>";
    echo "<br>";

    //Otra forma de unir dos cadenas
    //Eso sólo funciona cuando son comillas dobles
    $nombres = "Juan Aldair";
    $apellidos = "Ruiz Carmona";
    echo "$nombres - $apellidos";
    echo "<br>";

    //Variables tipo entero
    $estatura = 173;
    // echo 'Estatura: ' . $estatura;
    echo "Estatura (2): $estatura";

    //Sumar dos valores
    // $num1 = 10;
    // $num2 = 5;
    // $suma = $num1 + $num2;
    // echo '<br>';
    // echo 'Total: ' . $suma;

    $num1 = "10";
    $num2 = "5";
    $suma = $num1 + $num2;
    echo '<br>';
    echo 'Total: ' . $suma;

    function resTar(){
        $num5 = 7;
        $num6 = 4;
        $totalResta = $num5 - $num6;
        echo "<br><br>";
        echo $totalResta;
    }

    
    //Las variables son case-sensitive;
    $ave = "buhito";
    $Ave = "lechuza";
    echo "<br><br>";
    echo "La primera ave es el $ave y la segunda ave es la $Ave";
    
    //Las funciones no son case-sensitive
    restar();

    //Variable local (scope - alcance)
    $contacto = "Juan Aldair";

    function mostrarContacto(){
        $contacto = "Juan José";
        echo $contacto;
    }

    echo "<br>";
    mostrarContacto();

    echo "<br>";
    echo $contacto;
?>