<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página php</title>
</head>
<body>
    <h1>Curso PHP</h1>

    <h2><?= "Juan Aldair Ruiz Carmona" ?></h2>

    <?php
        print '<h4>Este es un mensaje con h4</h4>';
    ?>

    <ul>
        <?php
            $lista = [1, 3, 9, 7, 30];
            for($i = 0; $i < count($lista); $i++){
                print '<li>' . $lista[$i] . '</li>';
            }
        ?>
    </ul>

    <h3 <?php echo 'style="color: blue"' ?>>Texto azul</h3>

    <script>
        <?= "alert('Saludos desde mi página en PHP');" ?>
    </script>
</body>
</html>