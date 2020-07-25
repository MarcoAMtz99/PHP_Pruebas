<?php 
    session_start();
    $_SESSION['a'] = 'logged' ;
    
    echo $_SESSION['a'];
?>

<a href="sesion_2.php">Siguiente pagina</a>