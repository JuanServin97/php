<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control de stock</title>
</head>
<body>
    <?php 
    
    $stock = 800;

    if($stock > 0){
        print "Si hay stock";
    }else{
        print "No hay";
    }
    
    ?>
</body>
</html>