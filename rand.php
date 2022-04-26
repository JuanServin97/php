<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rand</title>
</head>
<body>
<?php 

$valor = rand(1, 55);

if($valor%2 == 0){
    echo "El número $valor es par";
}else{
    echo "El número $valor es impar";
}

?>
</body>
</html>