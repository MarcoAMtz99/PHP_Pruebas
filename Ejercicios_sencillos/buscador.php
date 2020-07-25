<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscador</title>
</head>
<body>
    <h2>Buscador de alumnos</h2>
   
    <form action="" method= POST>
        <p>Apellido <input type="text" name="apellido"></p>
        <input type="submit" name="submit" value="Buscar">
    </form>
    <?php 
    $busca = trim($_POST['apellido']);
    $bd= mysqli_connect('localhost','root','','api_alumnos');
    if(!$bd){
        echo"Error de conexion";
        exit();
    }else{
        echo "Conexion chida";
       
    }
    $resultado= mysqli_query($bd,"SELECT id,nombre,apellido, materia FROM alumnos WHERE apellido like '$busca'");

    if(! $resultado){
        echo "Error in query ";
        exit();
    }
    while($row = mysqli_fetch_array($resultado) ) {
        echo ("<p>".$row["nombre"]." ".$row['apellido']. " ".$row["materia"]."</p>");
    }
    $busca=0;
    ?>



</body>
</html>