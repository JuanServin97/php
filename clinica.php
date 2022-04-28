<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de productos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
 
    

    ?>

    <main class="container">
        <div class="row">
            <h1 class="col-12 text-center">Listado de pacientes</h1>
        </div>
        <table class="table table-hover">
            <tr>
                <th>DNI</th>
                <th>Nombre y apellido</th>
                <th>Edad</th>
                <th>Peso</th>
            </tr>
            <?php
                foreach ($aPacientes as $pos => $paciente) {
                    ?>
            <tr>
                <td><?php echo $paciente["dni"];?></td>
                <td><?php echo $paciente["nombre"];?></td>
                <td><?php echo $paciente["edad"];?></td>
                <td><?php echo $paciente["peso"];?></td>
            </tr>
            <?php
                }?>
        </table>
    </main>
</body>
</html>