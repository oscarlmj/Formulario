<?php


function valida_direccion($direccion)
{
    if(($direccion>0)||(!$direccion.is_numeric))
    {
        if(strlen($direccion)>5 && strlen($direccion)<50)
        return true;
            else
                return false;
    }
    else
        return false;
}

function valida_tlf($telefono){
    if(strlen($telefono)<0||strlen($telefono)>6)
        return false;
    else
        return true;
}

/**
 * validamos los datos nombre
 */

 function valida_nombre($nombre){
    

 }

?>