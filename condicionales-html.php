<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mezclar PHP con HTML</title>
</head>
<body>
    <?php
        $edad = 24;
        if($edad === "24"){
            ?>
                <h1>Tienes 24 años</h1>
            <?php
        }else{
            ?>
                <h1>No tienes 24 años</h1>
            <?php
        }
    ?>

    <!--Opcion 2-->
    <?php if($edad === "24") : ?>
        <h2>Tienes 24 años</h2>
    <?php else : ?>
        <h2>No tienes 24 años</h2>
    <?php endif; ?>
</body>
</html>