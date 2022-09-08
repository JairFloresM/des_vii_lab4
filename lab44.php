<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 4.4</title>
</head>
<body>
    <?php
        define("TAM", 5);
        $evenNumber = true;

        if(array_key_exists('enviar', $_POST)) {
            $num = $_POST['num'];
            $numeros = $_POST['numeros'];
            if(!empty($num)) {
                echo "paso1";
                if($num % 2 == 0) {
                    $evenNumber = true;
                    if(!empty($numeros)) {
                        $numeros = array();
                    }
                    array_push($numeros, $num);
                } else {
                    $evenNumber = false;
                }
                echo "paso2";
            } else {
                echo "Por favor ingrese un numero.<br> <br>";
            }
        }
    ?>

    <form action="lab44.php" method="post">
        ARREGLO DE NUMEROS PARES
        <br>

        <?php 
            if(!$evenNumber && count($numeros) > 0) { 
                ?>
                <p>El numero no es par</p>
        <?php  } ?>

        Ingrese un numero par
        <br>
        <input type="text" name="num">
        <input type="hidden" name="numeros" value=" <?= $numeros ?> ">
        <input type="submit" value="Enviar" name="enviar">
    </form>

</body>
</html>