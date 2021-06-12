<?php
    require_once 'utils/utilitarios.php';
    //date(format, timestamp)

    //Imprimir fecha actual
    $fechaActual = date('d/m/Y');
    echo $fechaActual;

    //Ejercicio 2: Otra forma de configurar la fecha
    echo "<br>";
    $fechaActual = date('l-M-Y');
    echo $fechaActual;

    //Ejercicio 3: fecha y hora
    echo "<br>";
    $fechaActual = date("Y-m-d h:i:s a");
    echo $fechaActual;

    //Ejercicio 4: Obtener la fecha en milisegundos
    echo "<br>";
    $tiempoMilisegundos = time();
    echo $tiempoMilisegundos;

    //Ejercicio 5: Incrementar la fecha en milisegundos
    echo "<br>";
    $tiempo = time() + 1000;
    echo "Fecha actual: " . date("Y-m-d h:i:s a", $tiempo);

    //Ejercicio 6: Leer el timestamp
    echo "<br>";
    $fechaCompleta = getdate();
    ImprimirArreglo($fechaCompleta);

    echo "Día de la semana: " . $fechaCompleta["weekday"];

    echo "<br>";
    echo "Día del mes: " . $fechaCompleta["mday"];

    echo "<br>";
    echo "Día del mes (2): " . getdate()["mday"];

    //Funciones para trabajar con fechas
    echo "<br>";
    echo date_create("now")->format('Y-m-d H:i:s a');

    //Sumar un día
    echo "<br>";
    echo date_create("+1 day")->format("Y-m-d H:i:s a");

    //Restar un día
    echo "<br>";
    echo date_create("-1 day")->format("Y-m-d H:i:s a");

    //Convertir string a fecha
    $string = "2020-06-14 22:07:00";
    $convertir = strtotime($string);
    echo "<br>";
    echo date("d/m/Y h:i:s a", $convertir);

    //Obtener el tiempo por zona
    //1. Obtener zona actual
    echo "<br>";
    echo date_default_timezone_get();

    //Formatear la fecha
    echo "<br>";
    echo date("d/m/Y h:i a");

    //Configurar la fecha por defecto
    echo "<br>";
    date_default_timezone_set("America/Lima");
    echo "<br>";
    echo date_default_timezone_get();
    echo "<br>";
    echo date("d/m/Y h:i a");

    //Mostrar la diferencia de tiempo
    $fecha1 = time();
    sleep(5); //Parar la aplicación por "n" segundos;
    $fecha2 = time();
    $timediff = ($fecha2 - $fecha1) / 60;
    echo "<br>";
    echo $timediff;

    //Obtener diferencia entre fechas
    $fechaInicio = date_create("2021-06-12 00:00:00");
    $fechaFin = date_create("2021-06-14 00:00:00");
    $diferenciaFechas = date_diff($fechaFin, $fechaInicio);
    echo "<br>";
    print_r($diferenciaFechas);

    echo "<hr>";
    foreach($diferenciaFechas as $key => $item){
        echo "<br>";
        echo $key . " = " . $item;
    }

    // echo "<br>";
    // echo "<br>";
    // echo "<br>";
    // echo "<br>";
    // echo $diferenciaFechas["days"];

    //Crear una fecha con mktime
    //Retorna el timestamp unix

    //Crear fecha a partir de números enteros