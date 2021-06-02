<?php
    $numero = 153;
    $numeroComp = $numero;
    $cifra;
    $suma = 0;
    while ($numero != 0) {
        $cifra = $numero % 10; //Última cifra
        $suma = $suma + pow($cifra, strlen($numero));
        $numero = intdiv($numero, 10); //Quitar el último número
    }

    if($numeroComp == $suma){
        print 'Es armstrong';
    }else{
        print 'No es armstrong';
    }
?>