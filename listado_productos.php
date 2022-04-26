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

    $aProductos = array();
    $aProductos[] = array(
        "nombre" => "Smar Tv \" 4k UHD",
        "marca" => "Hitachi",
        "modelo" => "554KS20",
        "stock" => 60,
        "precio" => 58000,
    );
    
    $aProductos[] = array(
        "nombre" => "Samsung Galaxy A30 Blanco",
        "marca" => "Samsung",
        "modelo" => "Galaxy A30",
        "stock" => 0,
        "precio" => 22000,
    );
    
    $aProductos[] = array(
        "nombre" => "Aire Acondicionado Split Inverter Frío/Calor Surry 2900F",
        "marca" => "Surrey",
        "modelo" => "553AIQ1201E",
        "stock" => 5,
        "precio" => 45000,
    );

    

    

    ?>

    <main class="container">
        <div class="row">
            <h1 class="col-12 text-center">Listado de productos</h1>
        </div>
        <table class="table table-hover     border">
            <thead>          
                <tr>
                    <td>Nombre</td>
                    <td>Marca</td>
                    <td>Modelo</td>
                    <td>Stock</td>
                    <td>Precio</td>
                    <td>Acción</td>
                </tr>
            </thead>
            <?php 
                $contador = 0;
                while($contador < 3){
            ?>
            <tr>
                <td><?php echo $aProductos[$contador]["nombre"]; ?></td>
                <td><?php echo $aProductos[$contador]["marca"];?></td>
                <td><?php echo $aProductos[$contador]["modelo"];?></td>
                <td><?php echo $aProductos[$contador]["stock"] == 0? "No hay stock" : ($aProductos[$contador]["stock"]> 10? "Hay stock" : "Poco stock"); ?></td>
                <td><?php echo $aProductos[$contador]["precio"] ?></td>
                <td><button class="btn btn-primary">Comprar</button></td>                             
            </tr>
            <?php 
                $contador++; 
            }
            ?>
                                    
            </tr>
        </table>
    </main>
</body>
</html>