<?php
    function Primos(int $inicial,int $final){
         '';
        for($numero=$inicial; $numero<$final; $numero++){
            $verificador = 0;
            for($contador = $numero; $contador>= 1; $contador--){
                if (($numero % $contador) == 0) {
                    $verificador++;
                }
            }
            if($verificador == 2){
                $arrayComNumeros[] = $numero;
            }
        }
        return  $arrayComNumeros;
    }
    
?>