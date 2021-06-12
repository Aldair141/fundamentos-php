<?php

function manejador_errores_personalizado($error){
    echo "<strong>Upsss...!!!</strong><br>Encontré un error en tu código: " . $error->getMessage();
}

set_exception_handler("manejador_errores_personalizado");