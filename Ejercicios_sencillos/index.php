<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INICIO</title>
</head>
<body>
    <div class="contedor">
        <form action="saludo.php" method=POST class="formulario">
            <h2>Formulario</h2>
        <p>Nombre <input type="text" name="nombre"></p>
        <p>Apellido <input type="text" name="apellido"></p>
        <p>Direccion <input type="text" name="direccion"></p>
        <p>Año en que naciste <input type="text" name="nacimiento" class="nacimiento"></p>
        <p>Telefono <input type="text" name="telefono"></p>
        <input type="submit" value ="enviar">
        </form>

    </div>
    <br><br> <br>
        <?php 
        $frase = "Una Metodología para el Desarrollo de Sistemas de Información
         es un conjunto de actividades llevadas a cabo para desarrollar y poner
          en marcha un Sistema de Información";

    /* Con este metodo se consevan los saltos de linea en HTML */
          echo  nl2br($frase);
        ?>
    
</body>
</html>