<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libros</title>
</head>
<body>
    

    
    <p><a href="nuevolibro.php">Añadir un nuevo libro</a></p>

    <p><a href="index.html">Home</a></p>
    <?php 
        require("conexion.php");
        $autores = mysqli_query($bd,"SELECT * FROM autores");
        $cats = mysqli_query($bd,"SELECT EID,NOMBRE FROM editorial");
        $idioms = mysqli_query($bd,"SELECT LID, IDIOMA FROM idioma");

    ?>


            <form action="listalibros.php" method=POST>
                <p>Ordenar libros por el siguiente criterio:
                    <select name="aid"  id="aid">
                   <!--  Para mostrar las opciones directamente de la base, el codigo envevido agrega las opciones aqui  -->  
                    <option value="">Todos los autores</option>
                        <?php
                            while($row_au = mysqli_fetch_array($autores)){
                                $aid = $row_au['ID'];
                        $aname = htmlspecialchars_decode($row_au['AUTOR']);
                        echo ("<option value='$aid'>$aname </option>");
                            }
                        ?>
                    </select> <br>
                    Por editorial:
                    <select name="cid" size="1" id="cid">
                        <option value="">Todas las editoriales</option>
                        <?php
                            while($row_edi = mysqli_fetch_array($cats)){
                                $cid = $row_edi['EID'];
                        $cname = htmlspecialchars_decode($row_edi['NOMBRE']);
                        echo ("<option value='$cid'>$cname </option>");
                            }
                        ?>
                    </select> <br>
                    Por idioma:
                    <select name="lid" size="1" id="lid">
                        <option value="">Todos los idiomas</option>
                        <?php
                            while($row_yy = mysqli_fetch_array($idioms)){
                                $lid = $row_yy['LID'];
                        $lname = htmlspecialchars_decode($row_yy['IDIOMA']);
                        echo ("<option value='$lid'>$lname </option>");
                            }
                        ?>
                    </select> <br>
                    Que incluya el texto:
                    <input type="text" name="searchtext"> <br>

                    <input type="submit" name="submit" value="Search">
                </p>
            </form>
            <p align="center"><a href="index.html">VOLVER A HOME</a></p>
                              
                                <?php 
/*                                 Crear cookie */
                                
                                if($visitas>1){
                                    echo ("Esta es tu visita $visitas");
                                }else{
                                    echo "Bienvenido a la pagina de la biblioteca";
                                }
                                
                                ?>
    
</body>
</html>