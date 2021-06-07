<?php

    /*
        NAMESPACES
        - No son case sensitive (o sea, no importa si son mayúsculas o minúsculas).
        - Evitar conflicto de nombres entre otras librerías o archivos.
        - Se usa la palabra reservada "namespace".
        - Se pueden definir: clases, interfaces, funciones y constatnes.
        - Siempre van en la primera línea del archivo.
        - Se usa el "\" para referirse a un subdirectorio o nombre de archivo.
    */

    //Incluir namespace
    include "constantes\constantes_namespaces.php";

    //Acceder al namespace
    echo constantesTest\ImprimirNombre();
?>