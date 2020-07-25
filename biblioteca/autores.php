<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autores</title>
</head>
<body>
    <h2>Autores </h2>
    <p align="center"> <a href="nuevoautor.php">Crear nuevo autor</a></p>
    <ul>
    <?php 
    require("conexion.php");
    $sql="SELECT ID, AUTOR FROM autores ORDER BY AUTOR";

    $Busqueda =mysqli_query($bd,$sql);
    if(!$sql){
        echo"Error en la consulta";
    }
    while($row = mysqli_fetch_array($Busqueda) ){
        echo "<p>".$row['AUTOR']." "."</p>";
    }
    ?>
    </ul>
    <p align="center"><a href="index.html">Home</a></p>
</body>
</html>