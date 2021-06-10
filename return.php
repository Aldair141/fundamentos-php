<?php
    //Validar un correo.

    function ValidarCorreo($email){

        if(empty($email)){
            echo 'La variable "correo" está vacía';
            return;
        }

        switch ($email) {
            case 'admin@gmail.com':
                echo 'Bienvenido administrador';
                break;
            case 'usuario@gmail.com':
                echo 'Bienvenido usuario';
                break;
            default:
                echo 'Correo no se encuentra en el sistema';
                break;
        }
    }

    ValidarCorreo('admin@gmail.com');
    echo '
';
    ValidarCorreo('usuario@gmail.com');
    echo '
';
    ValidarCorreo('aldair.rc70@gmail.com');
    echo '
';
    ValidarCorreo('');
?>