<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saludo</title>
</head>
<body>
    <div class="contenedor">
    <?php
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $nacimiento = $_POST['nacimiento'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];



    echo"Bienvenido $nombre $apellido  $direccion $telefono  a mi pagina";
    $año =2020;
    $edad=$año-$nacimiento;
    if($edad == 21){
        echo "  Tu y yo tenemos la misma edad mi numero es 5577846122";
    }elseif($edad < 21){
        echo "  Welcome Eres demasiado joven chaval";
    }elseif ($edad > 21){
        echo "Eres un anciano que haces aqui ?";
    }
    ?>


    </div>
    
    
</body>
</html>