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
        
      /* $aAuto= array();
       $aAuto["color"] = array("Negro", "Verde");
       $aAuto["marca"] = "Ford";
       $aAuto["anio"] = 1908;
       $aAuto["precio"] = 800;

       echo "El auto " . $aAuto["marca"] . " del año " . $aAuto["anio"] . " es de color " . $aAuto["color"][0] . " y el precio es de " . $aAuto["precio"];
       */

       /*
       $bVariable = true;
       if($bVariable == true){
           echo "Hola mundo!";
       }
       */
      /*
       $edad = 25;
       echo $edad >= 18 ? "Es mayor de edad y la edad es de $edad" : "Es menor de edad";

       $stock = 10;
       echo $stock > 10 ? "Hay stock" : ($sto)
       */
      $a = 5;
      $b = 5;
      
      if($a > $b){
          echo "El valor de a es mayor que el valor de b";
      }elseif($a < b){
        echo "El valor de a es menor que el valor de b"
      }else{
        echo "El valor de a es igual que el valor de b"
      };

      $valor = $a > $b ? 'mayor' : ( $a < $b ? "menor" : "igual" );
      
      echo $valor;

    ?>
</body>
</html>