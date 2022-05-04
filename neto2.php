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

    /*
    ini_set('display_errors',1);
    init_set('display_startup_erros',1);
    error_reporting(E_ALL);
    */

    $aEmpleados = array();
    $aEmpleados[] = array("dni" => 33300123, "nombre" => "David García", "bruto" => 85000.30);
    $aEmpleados[] = array("dni" => 40874456, "nombre" => "Ana del Valle", "bruto" => 90000);
    $aEmpleados[] = array("dni" => 67567565, "nombre" => "Andrés Perez", "bruto" => 100000);
    $aEmpleados[] = array("dni" => 75744545, "nombre" => "Victoria Luz", "bruto" => 70000);
    
    function calcularNeto($bruto){
        return $bruto - ($bruto * 0.17);
    };

    ?>

    <main class="container">
        <div class="row">
            <h1 class="col-12 text-center">Listado de empleado</h1>
        </div>
        <table class="table table-hover     border">
            <thead>          
                <tr>
                    <td>DNI</td>
                    <td>Nombre</td>
                    <td>Sueldo</td>
                </tr>
            </thead>
            <tr>                    
                <?php 
                foreach ($aEmpleados as $empleado) {?>
                    <td><?php echo $empleado["dni"]; ?></td>
                    <td><?php echo mb_strtoupper($empleado["nombre"]); ?></td>
                    <td> <?php $importe = calcularNeto($empleado["bruto"]);
                     echo number_format($importe, 2, ",","."); ?></td>
            </tr>
            <?php }; ?>

        </table>
        
        <div class="col-12">
                <div>
                    <p>Cantidad de empleados activos <?php echo count($aEmpleados); ?></p>
                </div>
            </div>
    </main>
</body>
</html>