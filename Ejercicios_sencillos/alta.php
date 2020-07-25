<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alta de alumnos PHP</title>
</head>
<body>



   

    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method=POST>
         <p>id <input type="text" name="id"></p>
         <p>Nombre <input type="text" name="nombre"></p>
         <p>Apellido <input type="text" name="apellido"></p>
         <p>Materia <input type="text" name="materia"></p>
         <input type="submit" value ="submit" name="submit">

</form>
    
<?php
   
       

   if(isset($_POST['submit'])){

     $id=trim($_POST['id']);
     $nombre=ucfirst(trim($_POST['nombre']));
     $apellido=ucfirst(trim($_POST['apellido']));
     $materia=ucfirst(trim($_POST['materia']));

     $bd= mysqli_connect('localhost','root','','api_alumnos');
     if(!$bd){
         echo"Error de conexion";
         exit();
     }else{
         echo "Conexion chida";
        
     }
     $sql = "INSERT INTO alumnos values('$id','$nombre','$apellido','$materia')";

     if(mysqli_query($bd,$sql)){
         echo "Alta de alumnos corectamente";
     }else{
         echo "hay un error2";
         mysqli_error();
     }
 }
?>

  
</body>
</html>