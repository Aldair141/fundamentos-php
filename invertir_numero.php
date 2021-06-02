<?php
$numero = 150;
$resultado = 0;

while($numero != 0){
    $resultado = ($resultado * 10) + ($numero % 10);
    $numero = intdiv($numero, 10);
}

print $resultado;
?>