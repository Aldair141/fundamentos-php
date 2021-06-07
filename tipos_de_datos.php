<?php
    /*
        - Enteros (integer) =>
            Números.
            No contienen decimales.
            Pueden ser positivos o negativos.
            Pueden tener números octales (base 8), hexadecimales (base 16) y binarios (base 2)
    */

    print '---------------------------- ENTEROS ----------------------------
';
    $puntaje = 120;
    print $puntaje;

    $hexaDecimal = 0x7CA;
    echo '
';
    echo $hexaDecimal;

    echo "
";
    //Convertir string a entero
    //Si dentro de una cadena hay un número, lo usa como tal. Sino, arroja un error.
    $puntaje = 20;
    $total = "120" + $puntaje;

    echo $total;

    //Números negativos
    echo "
";

    $puntaje = 8 - 20;
    echo $puntaje;

    //Obtener tamaño de un entero (Determinado por el sistema operativo)
    echo "
";
    echo PHP_INT_SIZE;
    
    //Obtener mínimo valor de un entero (Determinado por el sistema operativo)
    echo "
";
    echo PHP_INT_MIN;

    //Obtener máximo valor de un entero (Determinado por el sistema operativo)
    echo "
";
    echo PHP_INT_MAX;


    /*
        - Números reales
        - Se escriben con "." para separar los decimales
        - Se pueden redondear (round)
        - También aceptan negativos
    */
    print '
---------------------------- DECIMALES ----------------------------
';

    $pagoTotal = 12.05;
    echo $pagoTotal;
    echo "
";
    $pagoTotal = round($pagoTotal);
    echo $pagoTotal;

    echo "
";

    //Absoluto => Evaluar valores decimales con precisión
    $precio = 1.87;
    $estimado = 1.98;
    echo abs($precio - $estimado);

    print '
---------------------------- BOOLEANOS ----------------------------
';
    //Booleanos: tienen dos valores (true - false)
    //No es "case sensitive"
    //Cuando se imprime con echo true = 1; false = nada
    //Para los valores enteros y cadena, el 0 es false y cualquier otro valor es true
    $acceso = true;
    $valido = false;
    if($acceso && $valido){
        echo "Bienvenido";
    }else{
        echo "No puedes acceder";
    }

    echo $valido;

    echo "
";

    $acceso = "Juan Aldair Ruiz Carmona";
    $valido = true;

    if($valido && $acceso){
        echo "Bienvenido";
    }else{
        echo "Usuario no tiene acceso al sistema";
    }

    print '
---------------------------- STRING ----------------------------
';

    /*
        - Se pueden encerrar en comillas simples y dobles.
        - Dobles: pueden interpolar variables.
        - Se deben escapar los caracteres de comilla doble y otros caracteres
        - No se pueden realizar tareas de manipulación sobre los string con otros métodos
    */

    $nombres = 'Juan Aldair';
    $apellidos = "Ruiz Carmona";

    echo "Mis nombres son $nombres y mis apellidos son $apellidos.";
    // echo 'Mis nombres son ' . $nombres . ' y mis apellidos son ' . $apellidos;

    echo "
";

    //Combinando strings
    $nombres2 = $nombres . " - " . $apellidos;
    echo $nombres2;
    
    echo "
";

    //Escapando caracteres
    $nombres2 = "Mi nombre es \"$nombres\" y mis apellidos son \"$apellidos\"";
    echo $nombres2;

    //Introducción a los métodos con strings

    //Longitud
    echo "
";

    echo strlen($nombres2);

    //null => No es case sensitive. Usado para inicializar una variable con valor vacío.
    //Usa método "unset" para desmontar la variable de la memoria, y el is_null

    //Definir nulo
    echo "
";
    $documento = null;
    echo $documento;
    echo ($documento) ? "Contiene un valor" : "No contiene nada";

    echo "
";
    $documento = "Aldair";
    echo is_null($documento) ? "Está vacío" : "No está vacío";

    //Borrar la variable de la memoria
    //Va a mandar error ya que desaparece la variable por completo
    echo "
";
    unset($documento);
    echo is_null($documento) ? "Está vacío" : "No está vacío";
?>