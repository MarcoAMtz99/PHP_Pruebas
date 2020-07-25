<?php

    $bd= mysqli_connect('localhost','root','','api_alumnos');
    if(!$bd){
        echo"Error de conexion";
        exit();
    }else{
        echo "Conexion chida";
    }

    /* $busqueda = mysqli_query($bd,"SELECT * FROM alumnos");
    if(!$busqueda){
        echo "No se busco nada bro";
        exit();
    }else{

        while($row = mysqli_fetch_array($busqueda)){
            echo "<p>" .$row["nombre"]." ".$row["materia"]."<p>";
        }

        echo "      chido en alumnos";
    } */

?>