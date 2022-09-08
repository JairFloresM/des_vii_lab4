<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 4.3</title>
</head>
<body>
    <?php
        
        if(array_key_exists('enviar', $_POST)) {
            $num = $_POST['nums'];
            if(!empty($num)) {
                $mayor = $num[0];
                $index = 0;

                $uniques = array_unique($num);
                $isUnique = count($uniques) === count($num);
                if($isUnique) {
                    for ($i=1; $i < count($num); $i++) { 
                        if($num[$i] > $mayor) {
                            $mayor = $num[$i];
                            $index = $i;
                        }
                    }

                    echo "El mayor numero es: $mayor y se encuentra en lo posicion $index";
                } else {
                    echo "hay valores repetidos";
                }
            } else {
                echo "Por favor ingrese los valores.";
            }
        } else {
    ?>

    <form action="lab43.php" method="post">
        CALCULAR EL NUMERO MAYOR
        <br>
        Los numeros deben ser diferentes 
        <br>
            <?php
                for ($i=0; $i < 20; $i++)
                    echo " numero ".($i+1).":  <input type=\"text\" name=\"nums[]\">  <br>";
            ?>
        <input type="submit" value="Enviar" name="enviar">
    </form>
    
    <?php } ?>

</body>
</html>