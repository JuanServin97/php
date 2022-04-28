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
        function calcularNeto($bruto){
            return $bruto - ($bruto * 0.17);
        };

        echo "El sueldo neto es de $" . calcularNeto(80000);
    ?>
</body>
</html>