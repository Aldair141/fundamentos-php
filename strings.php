<?php

    //Ejercicio 1: Concatenar nombres y apellidos
    $nombres = 'Juan Aldair';
    $apellidos = 'Ruiz Carmona';

    $nombreCompleto = $nombres . ' ' . $apellidos;

    echo $nombreCompleto;

    //Ejercicio 2: Concatenar con otros tipos de variables

    $calificacion = 20;
    $mayorDeEdad = false;

    echo '
';

    echo 'Hola, mi nombre es ' . $nombreCompleto . ', mi calificación es de ' . $calificacion . ' y ' . ($mayorDeEdad ? '' : 'no ') . 'soy mayor de edad.';

    //Heredoc: escribir un bloque de texto string
    //Nowdoc: entre comillas simples

    echo '

';
    $nombre2 = 'Juan Aldair';
    $numero = 44;

    echo <<< TEXTO1
    Hola, me presento. Mi nombre es $nombre2. Mi nombre completo es $nombreCompleto y vivo independientemente. Me tocó el número $numero y ahorita mi país está pasando una situación de mierda por una sarta de corruptos que se niegan a perder. Y qué hablar de sus fanáticos (los que lo defienden a capa y espada). Son como su ídola, no saben verse al espejo y sólo señalan. Están dispuestos a chuparle la polla a quien sea por dinero. <strong>Quedó demostrado</strong>.

    PEDRO CASTILLO PRESIDENTE

    TEXTO1;


    //strlen -> Contar cantidad de caracteres

    $contador = strlen($nombreCompleto);
    echo $contador;

    //Forma recomendada de validar la longitud de una cadena
    $ruc = '10724332710';

    echo '
';

    if(strlen($ruc)){
        echo "Mi ruc es $ruc";
    }else{
        echo "No se ingresó el RUC";
    }


    //strpos => Encontrar la posición de un string

    $texto = "Este es un mensaje de prueba de";
    $buscar = "gampi";
    $posicion = strpos($texto, $buscar);

    echo "
";
    echo $posicion;

    if($posicion === false){
        echo "No encontré tu texto";
    }

    //str_replace -> Reemplazar texto. Reemplaza todos los textos, no solo uno
    echo "
";
    echo str_replace('de', 'gampi', $texto);

    //str_word_count => Contar palabras
    echo "
";
    $frase = "Un gran poder conlleva una gran responsabilidad.";
    echo "Mi frase tiene " . str_word_count($frase) . " palabras.";
    
    //str_shuffle => Reordenar aleatoriamente un string
    echo "
";
    echo str_shuffle($nombreCompleto);

    //strpos => Traer la posición de una string
    echo "
";
    $posicion = strpos($frase, "gran");
    echo $posicion;

    //Convertir a mayúsculas
    echo "
";
    echo strtoupper($frase);

    //Convertir a minúsculas
    echo "
";
    echo strtolower($frase);
    
    //wordwrap => 
    echo "
";
    $texto1 = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Non voluptates culpa magni commodi alias veniam ad accusantium. Nemo, impedit veritatis reiciendis ratione aliquam molestiae laborum, sapiente consequuntur voluptatem magnam illo.";

    echo $texto1;

    echo "
   
";
    echo wordwrap($texto1, 15);

    //Sprintf
    echo "
";
    echo sprintf("Hola, mi nombre es %s y tengo %d años.", "Aldair", 26);

    //trim => Eliminar espacios en blanco en el texto
    //variaciones: ltrim (inicio) y rtrim (final)
    $frase = "                  Juan Aldair Ruiz                         ";
    echo "
";
    echo trim($frase);