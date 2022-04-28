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
    $aPacientes = array();

     $aPacientes[] =  array(
        "dni" => "33.765.012",
        "nombre" => "Ana Acuña",
        "edad" => 45,
        "peso" => 81.50 
    );
    $aPacientes[] = array(
        "dni" => "23.684.385",
        "nombre" => "Gonzalo Bustamante",
        "edad"  => 66,
        "peso" => 79
    );

    $aPacientes[] = array(
        "dni" => "6.221.562",
        "nombre" => "Juan Servin",
        "edad" => 24,
        "peso" => 58
    );
 
    
        function contar($aArray){
            $contador = 0;
            foreach ($aArray as $key) {
                $contador++;
            }
            return $contador;
        };
    
        echo "Cantidad de pacientes es: " . contar($aPacientes);
    ?>
</body>
</html>