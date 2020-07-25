<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nuevo libro</title>
</head>
<body>
        <h2>Añadir un libro </h2>
        <?php 
        if(isset($_POST['submit'])){


            $lid=$_POST['lid'];
            $nombre=$_POST['nombre'];
            $aid=$_POST['aid'];
            $cid=$_POST['cid'];
            if($aid == ""){
                
                echo "Elige una opcion de los autores";
                exit();
            }
            require("conexion.php");
            $sql ="INSERT INTO libros SET 
                    LID ='$lid',
                    TITULO ='$nombre',
                    ID ='$aid',
                    EID = '$cid'";
                    if(mysqli_query($bd,$sql)){
                        echo"Se añadio un nuevo libro";
                    }else{
                        echo "<p>". "Error" . mysqli_error() ."</p>";
                 }
        } 
    ?>
    <p><a href="<?php echo $_SERVER['PHP_SELF'];?>">Añadir otro libro</a></p>
        <p><a href="index.html">INICIO</a></p>
        <?php
             require("conexion.php");
             $autores = mysqli_query($bd,"SELECT * FROM autores");
             $cats = mysqli_query($bd,"SELECT EID,NOMBRE FROM editorial");
             $idioms = mysqli_query($bd,"SELECT LID, IDIOMA FROM idioma");
           
        ?>

        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method=POST>
        <p>Introduzca el nuevo libro</p> <br>
        <p>nombre <textarea name="nombre" id="nombre" cols="25" rows="1" wrap></textarea></p>
        
                    <p>Autor:
                    <select name="aid"  id="aid">
                   <!--  Para mostrar las opciones directamente de la base, el codigo envevido agrega las opciones aqui  -->  
                    <option value="">OPCIONES</option>
                        <?php
                            while($row_au = mysqli_fetch_array($autores)){
                                $aid = $row_au['ID'];
                        $aname = htmlspecialchars_decode($row_au['AUTOR']);
                        echo ("<option value='$aid'>$aname </option>");
                            }
                        ?>
                    </select> <br></p>
                    <p> Editorial:
                    <select name="cid" size="1" id="cid">
                        <option value=""> EDITORIALES</option>
                        <?php
                            while($row_edi = mysqli_fetch_array($cats)){
                                $cid = $row_edi['EID'];
                        $cname = htmlspecialchars_decode($row_edi['NOMBRE']);
                        echo ("<option value='$cid'>$cname </option>");
                            }
                        ?>
                    </select> <br> </p>
                    <p> Idioma:
                    <select name="lid" size="1" id="lid">
                        <option value="">IDIOMAS</option>
                        <?php
                            while($row_yy = mysqli_fetch_array($idioms)){
                                $lid = $row_yy['LID'];
                        $lname = htmlspecialchars_decode($row_yy['IDIOMA']);
                        echo ("<option value='$lid'>$lname </option>");
                            }
                        ?>
                    </select> <br> </p>
                    <p><input type="submit" name="submit" value="SUBMIT"></p>
                    </form>


</body>
</html>