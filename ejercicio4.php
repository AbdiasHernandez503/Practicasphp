<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Generar un valor aleatorio entre 1 y 3. Luego imprimir en castellano el número (Ej. si se genera el 3 luego mostrar en la página el string "tres").</p>
    <?php
        $valor = rand(1,3);
        // $valor = 1;

        if($valor === 1){
            echo "uno";
        }else{
            if($valor === 2){
                echo "dos";
            }else{  
                    echo "tres";
            }
        }   
    ?>
</body>
</html>