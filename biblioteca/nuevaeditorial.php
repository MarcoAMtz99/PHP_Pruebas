<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Añadir editoriales</title>
</head>
<body>
    <h2>Crear nueva editorial</h2>
    <p align="center"><a href="index.html">Home</a></p>
    <ul>
    
     </ul>
     <p><a href="<?php echo $_SERVER['PHP_SELF'];?>">Añadir una editorial</a></p>
     <p><a href="editoriales.php">Volver a la lista</a></p>
    <form action=" <?php echo $_SERVER['PHP_SELF'];?>" method=POST>
        <p>Introduzca la nueva editorial: <br> <input type="text"name="editorial" >
        <input type="submit" name="submit" value="value">
    </p>
    </form>
    <?php 
        $editorial= $_POST['editorial'];
        if(isset($_POST['submit'])){
            require("conexion.php");
            $sql= "INSERT INTO editorial SET NOMBRE ='$editorial'";
            if(mysqli_query($bd,$sql)){
                echo "Nueva editorial añadida correctamente";
            }else{
                echo "Error en la editorial";
            }
        }
    ?>
   
</body>
</html>