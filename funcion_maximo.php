<?php
ini_set('display_erros', 1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);

function maximo($aNumeros){
    $maximo = 0;
    foreach ($aNumeros as $numero) {
        if($numero > $maximo){
            $maximo = $numero;
        }
    }
    return $maximo;
}

$aNotas = array(8,4,5,3,9,1);
$aSueldo = array(800.30,400.87,500.45,300,900.70,100,900,1800);

echo "El número mayor es" . maximo($aNotas); 
echo "El número mayor es" . maximo($aSueldo);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Promediar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <main class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center py-5">Promediar</h1>
            </div>

            <div class="col-12">
                <form method="POST" action="">
                    
                </form>
            </div>
        </div>
    </main>
</body>
</html>