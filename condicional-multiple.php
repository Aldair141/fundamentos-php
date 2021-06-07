<?php

$num1 = 50;
$num2 = 50;

if($num1 > $num2)
    echo "1. $num1 es MAYOR QUE $num2";
elseif($num1 == $num2)
    echo "3. $num1 es IGUAL QUE $num2";
elseif($num1 == $num2)
    echo "2. $num1 es IGUAL QUE $num2";
else
    echo "4. $num1 es MENOR QUE $num2";

/*
elseif valida la primera condicional que cumpla, invalidando los demás.
*/