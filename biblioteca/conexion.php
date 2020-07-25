<?php
/* Conexion a base de datos */
$bd = mysqli_connect('localhost','root','','biblioteca');

if(!$bd){
    echo"Error de conexion";
    exit();
}
?>