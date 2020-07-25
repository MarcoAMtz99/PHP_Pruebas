<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editoriales</title>
</head>
<body>
    <h2>Editoriales</h2>
    <p align="center"> <a href="nuevaeditorial.php">Crear nueva editorial</a></p>
    <ul>
    <?php 
    require("conexion.php");
    $sql="SELECT EID, NOMBRE FROM editorial ";

    $Busqueda = mysqli_query($bd,$sql);
    if(!$sql){
        echo"Error en la consulta";
    }

    while($row = mysqli_fetch_array($Busqueda) ){
        echo "<p>".$row['NOMBRE']." "."</p>";
    }
    ?>
    </ul>
    <p align="center"><a href="index.html">Home</a></p>
</body>
</html>