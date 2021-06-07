<?php
    /*
        CONSTANTES

        . No se usa el "$" para declarar. Se usa la palabra "define"
        . Se define una sola vez
        . Se accede desde cualquier scope (es global)
    */
    define('CUOTA', 3000);
    $valorCuota = CUOTA;
    echo "El valor de la cuota es S/. " . CUOTA;


    /*
    BUENAS PRÁCTICAS

    . Crearlos con mayúsculas
    . No usar las constantes con los nombres "__VALOR__" o con guión bajo
    */
    
    /*
        MAGIC CONSTANT

    */

    echo "<hr />";
    echo __LINE__ . "<br>";
    echo __FILE__ . "<br>";
    echo __DIR__ . "<br>";
?>