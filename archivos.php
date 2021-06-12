<?php
    //Listar archivos
    $ruta = "files";
    $resultado = scandir($ruta);
    var_dump($resultado);

    echo "<ul>";
    foreach($resultado as $archivo){
        if($archivo != "." && $archivo != "..")
            echo "<li>$archivo</li>";
    }
    echo "</ul>";

    $archivos = array_diff($resultado, [".", ".."]);
    print_r($archivos);

    //Validar archivos en carpeta
    $ruta = "files";
    $resultado = scandir($ruta);
    echo "<ul>";
    foreach($resultado as $archivo){
        //if(is_file($ruta . "/" . $archivo))
        if(is_file("$ruta/$archivo"))
            echo "<li>$archivo</li>";
    }
    echo "</ul>";

    //Buscar coincidencias de archivo con un patrón
    $resultado = glob("*.md");
    var_dump($resultado);

    //Crear un directorio
    if(!file_exists("carpeta_nueva")){
        mkdir("carpeta_nueva"); //retorna bool
    }
    
    //Copiar archivos entre directorios
    if(copy("files/buhita.txt", "files/buhita1.txt")){
        echo "<br>Archivo copiado.";
    }
    
    //Validar si existe un archivo o carpeta
    $archivo = "archivos.php";
    echo "<br>";
    if(file_exists($archivo)){
        echo "El archivo existe.";
    }else{
        echo "El archivo no existe.";
    }

    //Validar si el nombre es un archivo o carpeta
    $archivo = "files/buhita.txt";
    echo "<hr>";
    if(file_exists($archivo)){
        if(is_dir($archivo)){
            echo "El elemento \"$archivo\" es un directorio.";
        }elseif(is_file($archivo)){
            echo "El elemento \"$archivo\" es un archivo.";
        }
    }else{
        echo "El archivo o carpeta \"$archivo\" no existe.";
    } 
?>