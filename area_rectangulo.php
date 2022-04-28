<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function calcularAreaRect($base, $altura){
            $resultado = $base * $altura;
            return $resultado;  
        }
        echo "El área es " . calcularAreaRect(100,0.60);

    ?>
</body>
</html>