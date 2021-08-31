<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Definir tres variables enteras. Luego definir un string que incorpore dichas variables y las sustituya en tiempo de ejecución.</p>
    <?php
        $lenguaje = 7;
        $matematica = 9;
        $sociales = 8;

        $complemento = "Yo aprobe el año con:  $lenguaje, $matematica, $sociales";

        echo $complemento;
    ?>
</body>
</html>