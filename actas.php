<?php
ini_set('display_erros', 1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);

$aAlumnos = array();
$aAlumnos[] = array("nombre" => "Ana Valle","notas" => array(7,8));
$aAlumnos[] = array("nombre" => "Bernabe Paz","notas" => array(5,7));
$aAlumnos[] = array("nombre" => "Sebastian Aguirre","notas" => array(6,9));
$aAlumnos[] = array("nombre" => "Monica Ledesma", "notas" => array(8,9));

function promediar($numeros){
    $suma = 0;
    $suma += $numeros;
    return $suma / count($numeros);
};



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <main class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center py-5">Actas</h1>
            </div>

            <div class="col-12">
                <table class="table table-hover border">
                    <tr>
                        <th>Alumno</th>
                        <th>Nota 1</th>
                        <th>Nota 2</th>
                        <th>Promedio</th>
                    </tr>
                    
                    <?php 
                    

                    foreach ($aAlumnos as $alumno => $value){ ?> 
                       
                    <tr>
                        <td><?php echo $value["nombre"]; ?></td>
                        <td><?php echo $value["notas"][0];?></td>
                        <td><?php echo $value["notas"][1] ?></td>
                        <td><?php echo promediar($value["notas"]) ?></td>
                    </tr>
                    <?php }; ?>
                    
                </table>
                <div class="row">
                    <div class="">Promedio de la cursada:</div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>