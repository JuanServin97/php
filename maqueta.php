<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <main class="container">
        <div class="row">
            <div class="col-12 p-5">
                <h1 class="text-center">Ficha personal</h1>
            </div>
        </div>
        </div>

        <?php 
        $nombre = "Juan Servín";
        $fecha = date("d/m/Y");
        $edad = 24;
        $peliculas = array("By the ocean", "Signals", "Forrest Gump");
        ?>

        <table class="table table-hover border">
            
            <tbody>
                <tr>
                        <td class="col-6" style="font-weight : bold;">Fecha:</td>
                        <td class="col-6"><?php echo $fecha;?></td>
                </tr>
                <tr>
                    <td style="font-weight : bold;">Nombre y apellido:</td>
                    <td><?php echo $nombre ?></td>
                </tr>
                <tr>
                    <td style="font-weight: bold;">Edad:</td>
                    <td><?php echo $edad ?></td>
                </tr>
                <tr>
                    <td style="font-weight : bold;">Películas favoritas</td>
                    <td><?php echo $peliculas[0];
                    echo $peliculas[1];
                    echo $peliculas[2]; ?>
                    </td>
                </tr>
            </tbody>

        </table>
    </main>
</body>
</html>