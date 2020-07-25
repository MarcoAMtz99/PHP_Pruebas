<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Añadir idiomas</title>
</head>
<body>
    <h2>Crear nuevo idioma</h2>
    <p align="center"><a href="index.html">Home</a></p>
    <ul>
    
     </ul>
     <p><a href="<?php echo $_SERVER['PHP_SELF'];?>">Añadir un idioma</a></p>
     <p><a href="idioma.php">Volver a la lista</a></p>
    <form action=" <?php echo $_SERVER['PHP_SELF'];?>" method=POST>
        <p>Introduzca el nuevo idioma: <br> <input type="text"name="idioma" >
        <input type="submit" name="submit" value="value">
    </p>
    </form>
    <?php 
        $idioma= $_POST['idioma'];
        if(isset($_POST['submit'])){
            require("conexion.php");
            $sql= "INSERT INTO idioma SET IDIOMA ='$idioma'";
            if(mysqli_query($bd,$sql)){
                echo "Nuevo idioma añadido correctamente";
            }else{
                echo "Error en el idioma";
            }
        }
    ?>
   
</body>
</html>