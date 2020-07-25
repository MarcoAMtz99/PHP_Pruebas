<?php 
    class nombre {
        var $nombre_variable;
        function nombre(string $param ){
            echo $param;
            echo "<br>";
        }

        function  setNombre (string $nombre){
                $this->nombre_variable = $nombre;
        }
        function getNombre (){
            echo "$this->nombre_variable";
                return $this->nombre_variable;
        }
    }


    $Objetoa = new nombre('Marco');
   /*  $Objetob = new nombre('Mguel');
    $Objetoc = new nombre('Regina'); */
  
    $Objetoa->setNombre("Gala");
    $Objetoa->getNombre();

?>