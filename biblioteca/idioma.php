<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>idiomas</title>
</head>
<body>
    <h2>idiomas</h2>
    <p align="center"> <a href="nuevoidioma.php">Crear nuevo idioma</a></p>
    <ul>
    <?php 
    require("conexion.php");
    $sql="SELECT LID, IDIOMA FROM idioma ";

    $Busqueda = mysqli_query($bd,$sql);
    if(!$sql){
        echo"Error en la consulta";
    }

    while($row = mysqli_fetch_array($Busqueda) ){
        echo "<p>".$row['IDIOMA']." "."</p>";
    }
    ?>
    </ul>
    <p align="center"><a href="index.html">Home</a></p>
</body>
</html>