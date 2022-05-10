<?php
ini_set('display_erros', 1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);

print_r($_POST);

if($_POST){
    $nombre = $_POST["txtNombre"];
    $correo = $_POST["txtCorreo"];
    echo $nombre . $correo;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <main class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center py-5">Bienvenid@ al sistema</h1>
            </div>

            <div class="col-12">                
                <div class="alert alert-primary" role="alert">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, nostrum! Odit quam, reiciendis dolorum incidunt consequatur alias esse fugit, iure quibusdam deserunt rerum commodi, animi numquam dolorem repellendus eum eaque?
                </div>
            </div>
        </div>
    </main>
</body>
</html>