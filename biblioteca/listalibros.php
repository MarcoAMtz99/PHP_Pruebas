<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de libros</title>
</head>
<body>
    <h1>Listado de libros</h1>
    <p><a href="libros.php">nueva busqueda</a></p>




    <?php
        $aid = $_POST['aid'];
        $cid = $_POST['cid'];
        $lid = $_POST['lid'];
        $searchtext = $_POST['searchtext'];


        require("conexion.php");
       /*  $select = "SELECT DISTINCT libros.ID, libros.EID, libros.LID,libros.EID,TITULO, autores.ID,AUTOR,
        editorial.EID,NOMBRE,idioma.LID,IDIOMA FROM libros, autores, editorial,idioma";
        $where =" WHERE libros.TID >0 AND autores.ID = libros.ID AND editorial.EID = libros.EID AND
         idioma.LID = libros.LID"; */


        $sql="SELECT DISTINCT libros.ID, libros.EID, libros.LID,libros.EID,TITULO, autores.ID,AUTOR,
        editorial.EID,NOMBRE,idioma.LID,IDIOMA FROM libros, autores, editorial,idioma WHERE libros.TID >0 AND autores.ID = libros.ID AND editorial.EID = libros.EID AND
         idioma.LID = libros.LID";

            if($aid !=""){
                 $sql .= " AND libros.ID=$aid";


            }
            if($cid!=""){
                $sql .= " AND editorial.EID=$cid";
            }

            if($lid !=""){
                $sql .= " AND idioma.LID=$lid";
            }
            if($searchtext !=""){
                $sql .= " AND TITULO LIKE '%$searchtext%'";
            }


    ?>

    <table border="1">
            <tr>
                <th>TITULO</th> <th>AUTOR</th><TH>IDIOMA</TH> <TH>EDITORIAL</TH>
            </tr>

            <?php 
                $busqueda = mysqli_query($bd, $sql);
                /*  echo   $sql;  */
                if(!$busqueda){
                    echo("</table>");
                    echo "Error";
                  
                    exit();
                }
                while($bu = mysqli_fetch_array($busqueda)){
                    echo("<tr align='top'><br>");
                    $id= $bu['ID'];
                    $tit= $bu['TITULO'];
                    $nombre= $bu['AUTOR'];
                    $idio = $bu['IDIOMA'];
                    $edi = $bu['NOMBRE'];

                       echo("<td>$tit</td>\n");
                        echo("<td> $nombre</td>\n");
                        echo("<td>$idio</td>\n");
                        echo("<td>$edi</td>\n");
                        echo("</tr>\n"); 
                       


                }
            
            ?>
    
    </table>

</body>
</html>