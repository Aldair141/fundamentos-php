<?php

//Leer el contenido del archivo
$nombreArchivo = "array.php";
$contenido = file_get_contents($nombreArchivo);
echo "<textarea>$contenido</textarea>";

echo "<hr>";
//Otra forma
//Abrir el archivo
$manejaarchivo = fopen($nombreArchivo, "r");
$tamanioArchivo = filesize($nombreArchivo);

//Leer el contenido
$contenido2 = fread($manejaarchivo, $tamanioArchivo);

//Mostrar el contenido
echo "<textarea>" . $contenido2 . "</textarea>";

//Cerrar el archivo
fclose($manejaarchivo);


//ESCRIBIENDO CONTENIDO
echo "<hr>";

$ruta = "files/buhito.php";
$file = fopen($ruta, "w") or die ("Imposible escribir");
fwrite($file, "Hola...!!!\nMi nombre es Juan Aldair y este es un mensaje de prueba.");
fclose($file);
echo "Archivo escrito";


//Leer un archivo de configuración como un array
echo "<hr>";
$configuracion = parse_ini_file("config/ejemplo.ini");
print_r($configuracion);

echo "<ul>";
foreach($configuracion as $key => $value){
    echo "<li>$key: $value</li>";
}
echo "</ul>";

echo $configuracion["fuente1"];

//RENOMBRAR UN ARCHIVO
// rename("buhitanew.txt", "files/buhitanew.txt");

//BORRAR UN ARCHIVO
unlink("files/buhitanew.txt");