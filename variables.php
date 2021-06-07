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

    //Variables globales

    //Conclusión: no se puede acceder a una variable desde un ámbito distinto, a menos que usemos las variables globales.
    
    global $mensaje;
    $mensaje = "Hola Mundo";

    function emitirMensaje(){
        global $mensaje;
        echo "Desde la función: " . $mensaje;
    }

    echo "<hr>";
    emitirMensaje();
    echo "<br>";
    echo $mensaje;

    //Variables estáticas
    //Mantiene el valor de una variable para manipularla llamada tras llamada
    function contador(){
        static $num = 1;
        echo $num;
        $num = $num + 1;
    }

    echo "<hr>";
    contador();
    echo "<br>";
    contador();
    echo "<br>";
    contador();
    echo "<br>";
    contador();
    echo "<br>";
    contador();
    echo "<br>";
    contador();

    //Variables super globales
    //Disponibles en todos los ámbitos
    $minombre;
    $minombre = "Juan Aldair Ruiz Carmona";
    echo "<br />";
    echo $GLOBALS['minombre'] . "<br />";

    //Variables super globales predefinidas
    echo "<hr />";
    echo "Nombre archivo: " . $_SERVER['PHP_SELF'];

    echo "<hr />";
    //Variables de variable
    $persona = "Juan Pablo Pino";
    $hombre = "persona";

    echo $hombre;
    echo "<br>";
    echo $persona;
    echo "<br>";
    echo $$hombre;

    //Variables o métodos para variables predefinitas
    echo "<hr />";
    $division = 4/0;
    $err = error_get_last();
    var_export($err);
?>