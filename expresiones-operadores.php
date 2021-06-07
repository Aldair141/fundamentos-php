<?php
    /**
     * 
     * EXPRESIONES
     * 
     * 
     * 
     * OPERADORES
     * Se usan para realizar operaciones sobre las variables
     */

     $nombre = "Juan Aldair Ruiz Carmona";
     $salario = 200;


     //Tipos de operadores

     //Aritméticos
     $sueldo = 10000;
     $subsidio = 20000;
     $salud = 10000;
     $pension = 10000;

     $ingresos = $sueldo + $subsidio;
     $egresos = $salud + $pension;

     $total = $ingresos - $egresos;

     echo $total;

     //Área de un rectángulo
     echo "<hr>";
     $base = 20;
     $altura = 80;
     $area = $base * $altura;
     echo $area;

     //Promedio de notas
     echo "<hr>";
     $nota1 = 20;
     $nota2 = 18;
     $nota3 = 19;
     $promedio = ($nota1 + $nota2 + $nota3) / 3;
     echo $promedio;

     //Sacar el IGV
     echo "<hr>";
     $nomProducto = "Televisor";
     $precioProducto = 750;
     $igv = 750 * (18/100);
     echo $igv;

     //Residuo
     echo "<hr>";
     $residuo = 153 % 10;
     echo $residuo;

     //Potenciar
     echo "<hr>";
     $potencia = 5 ** 3;
     echo $potencia;

     //OPERADORES CONDICIONALES
     echo "<hr>";
     $nota = 18;
     $estado = $nota >= 11 ? "Aprobado" : "Desaprobado";
     echo $estado;

     echo "<hr>";
     $contador = 0;
     $contador += 10;
     echo "$contador <br>";
     $contador -= 1;
     echo "$contador <br>";
     $contador *= 20;
     echo "$contador <br>";
     $contador /= 2;
     echo "$contador <br>";
     $contador %= 7;
     echo "$contador <br>";

     $cadena = "Juan Aldair";
     $cadena .= " - Ruiz Carmona";
     echo $cadena;

     //Post Incremento y pre incremento
     $contador++;
     echo "<br>";
     echo $contador;

     echo "<br>";
     echo $contador++;
     echo "<br>";
     echo ++$contador;

    //Post Decremento y Pre Decremento
    echo "<br>";
    echo $contador--;
    echo "<br>";
    echo --$contador;

    //Operador de ejecución
    //Permite ejecutar un comando
    echo `dir *.php`;
?>