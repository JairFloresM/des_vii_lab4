<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 4.1</title>
</head>
<body>
    <?php
        $rutaImg = 'img/';
        if(array_key_exists('enviar', $_POST)) {
            $porcentaje = $_POST['porcentaje'];
            if($porcentaje) {
                $porcentaje = (int) $porcentaje;     
                if($porcentaje >= 80) {
                    $rutaImg = $rutaImg.'feliz.png';
                } else if($porcentaje >= 50) {
                    $rutaImg = $rutaImg.'normal.png';
                } else {
                    $rutaImg = $rutaImg.'triste.png';
                }

                echo "<img src=\"$rutaImg\" />";
            } else {
                echo "Por favor ingrese un valor.";
            }
        } else {
    ?>

    <form action="lab41.php" method="post">
        INGRESE EL PORCENTAJE DE VENTAS DEL ULTIMO MES
        <br>
        <input type="text" name="porcentaje" value="">
        <input type="submit" value="Enviar" name="enviar">
    </form>
    
    <?php } ?>

</body>
</html>