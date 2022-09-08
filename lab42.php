<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 4.2</title>
</head>
<body>
    <?php
        $fact = 1;
        if(array_key_exists('enviar', $_POST)) {
            $num = $_POST['fact'];
            if($num) {
                $num = (int) $num;     
                for ($i=1; $i <= $num ; $i++) { 
                    $fact *= $i;
                }

                echo "El factorial de $num es: $fact";
                
            } else {
                echo "Por favor ingrese un valor.";
            }
        } else {
    ?>

    <form action="lab42.php" method="post">
        CALCULADORA DE FACTORIALES
        <br>
        <input type="text" name="fact" value="">
        <input type="submit" value="Enviar" name="enviar">
    </form>
    
    <?php } ?>

</body>
</html>