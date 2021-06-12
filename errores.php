<?php
    //require_once 'error_personalizado.php';
    //Permite tener el control de un error provocado en el código
    function dividiendo($dividendo, $divisor){
        if($divisor <= 0){
                throw new Exception("El valor del divisor es incorrecto.");
        }
        $resultado = $dividendo / $divisor;
        return $resultado;
    }

    try{
        echo dividiendo(10, 4);
    }catch(Exception $e){
        echo "Upsss...!!! <br>" . $e->getMessage();
    }finally{
        //Se ejecuta siempre, se provoque un error o no.
        echo "<br>";
        echo "<i>Finalizando la función</i>";
    }
?>