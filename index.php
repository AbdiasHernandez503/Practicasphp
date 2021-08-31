<?php
    $nombre = "Abdias ";
    $apellido  = "Hernandez";

    echo "Hola Mundo " . $nombre."" . $apellido;

    // estructuras ciclicas o bucle
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <select name="anio" id="anio">
        <?php
            echo "</br>";
            for ($i=1900; $i <= 2021 ; $i++) { 
                echo "<option>". $i. "</option>";
            }
        ?>
    
    </select>
</body>
</html>