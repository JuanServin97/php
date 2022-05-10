<?php
ini_set('display_erros', 1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);


if($_POST){
    $usuario = $_POST["txtUsuario"];
    $clave = $_POST["txtClave"];

    if($usuario != "" && $clave != ""){
        header('Location: acceso_confirmado.php');
    }else{
        $mensaje = "Valido para usuarios registrados";
    }
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
                <h1 class=" py-5">Formulario</h1>
            </div>

            <div class="col-12 ">
            <div class="alert alert-danger" role="alert">
                <?php echo $mensaje ;?>
            </div>
                <form method="POST" class="">
                    <div>
                        <label for="txtUsuario" class="d-block" id="">Usuario:</label>
                        <input type="text" id="txtUsuario" class="from-control" name="txtUsuario" >
                    </div>

                    <div>
                        <label for="txtClave" class="d-block mt-2" id="txtClave">Clave:</label>
                    
                        <input type="password" id="txtClave" name="txtClave" >
                    </div>
                    
                    <button type="submit" class="btn btn-primary d-block my-3">ENVIAR</button>


                    
                </form>
            </div>
        </div>
    </main>
</body>
</html>