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
        $colores = array("Blanco","Rojo", "Azul","Amarillo");

        foreach($colores as $valor){
            echo "$valor <br>";
        }
        
        $persona = array("Nose" => "1111", "Juan" => "2222", "Carlos" => "3333", "Marta" =>"444" );
        
        foreach ($persona as $key => $value) {
            echo "$key => $value" . "<br>";
        }
    ?>
</body>
</html>