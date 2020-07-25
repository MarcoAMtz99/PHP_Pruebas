<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Añadir autores</title>
</head>
<body>
    <h2>Crear nuevo autor</h2>
    <p align="center"><a href="index.html">Home</a></p>
    <ul>
    
     </ul>
     <p><a href="<?php echo $_SERVER['PHP_SELF'];?>">Añadir un autor</a></p>
     <p><a href="autores.php">Volver a la lista</a></p>
    <form action=" <?php echo $_SERVER['PHP_SELF'];?>" method=POST>
        <p>Introduzca el nuevo autor: <br> <input type="text"name="autor" >
        <input type="submit" name="submit" value="value">
    </p>
    </form>
    <?php 
        $autor= $_POST['autor'];
        if(isset($_POST['submit'])){
            require("conexion.php");
            $sql= "INSERT INTO autores SET autor='$autor'";
            if(mysqli_query($bd,$sql)){
                echo "Nuevo autor añadido correctamente";
            }else{
                echo "Error con el autor";
            }
        }
    ?>
   
</body>
</html>