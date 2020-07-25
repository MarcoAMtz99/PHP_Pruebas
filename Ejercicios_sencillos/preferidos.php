<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Populares</title>
</head>
<body>
    <h2>Alumnos mas famosos del año</h2>


    
    <?php
    $bueno= $_POST['bueno'];
    echo $bueno;
    if($bueno =='a'){
        $bd= mysqli_connect('localhost','root','','api_alumnos');
    if(!$bd){
        echo"Error de conexion";
        exit();
    }else{
        echo "Conexion chida";
       
    }
    $sql="UPDATE populares SET votos=votos+1 WHERE id= 1";
    if(!mysqli_query($bd,$sql)){
        echo "Error al actualizar datos en BD";
    }
    }if($bueno=="b"){
        $bd= mysqli_connect('localhost','root','','api_alumnos');
    if(!$bd){
        echo"Error de conexion";
        exit();
    }else{
        echo "Conexion chida";
       
    }
    $sql="UPDATE populares SET votos=votos+1 WHERE id= 2";
    if(!mysqli_query($bd,$sql)){
        echo "Error al actualizar datos en BD";
    }
    }if($bueno=="c"){
        $bd= mysqli_connect('localhost','root','','api_alumnos');
    if(!$bd){
        echo"Error de conexion";
        exit();
    }else{
        echo "Conexion chida";
       
    }
    $sql="UPDATE populares SET votos=votos+1 WHERE id= 3";
    if(!mysqli_query($bd,$sql)){
        echo "Error al actualizar datos en BD";
    }
    }
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method = POST>

 
    <table>
        <tr>
            <td>¿Quien fue para ti el alumno mas aplicado de este año?</td>
            <td><select name="bueno" id="bueno"><option value="a">Yulia en Españo</option>
            <option value="b">Denis </option> <option value="c">Marvin</option></select></td>
            <td colspan=2 align=center> <input type="submit" value="vota"></td>
        </tr>
        <br><br><br><br>
    </table>
    </form>    
    <?php
    
    require('conexion.php');
    $busqueda = mysqli_query($bd,"SELECT * FROM populares");
    if(!$busqueda){
        echo "No se busco nada bro";
        exit();
    }else{

        while($row = mysqli_fetch_array($busqueda)){
            echo "<p>" .$row["nombre"]." ".$row["apellido"]."  ".$row["materia"]." VOTOS ---->".$row['votos']."<p>";
        }

        echo "      chido en alumnos";
    }
    
    
    ?>
</body>
</html>