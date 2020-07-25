<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apellidos</title>
</head>
<body>
<H2>alumnos por orden alfabetico</H2>

    




<?php

$bd= mysqli_connect('localhost','root','','api_alumnos');
if(!$bd){
    echo"Error de conexion";
    exit();
}else{
    echo "Conexion chida";
}

$busqueda = mysqli_query($bd,"SELECT * FROM alumnos order by apellido");
if(!$busqueda){
    echo "No se busco nada bro";
    exit();
}else{

    while($row = mysqli_fetch_array($busqueda)){
        echo "<p>" .$row["nombre"]." ".$row["apellido"]." ".$row["materia"]."<p>";
    }

   
}

?>


    
</body>
</html>