<?php
    function contarvocales($cadena){
        $vocalesencontradas = 0;

        $cadena = strtolower($cadena);

        $longitud = strlen($cadena);

        for ($indice = 0; $indice < $longitud; $indice++) { 

            if (in_array($cadena[$indice], ["a", "e", "i", "o", "u"])) {
                $vocalesencontradas++;
            }
        }
        return $vocalesencontradas;
    }
?>