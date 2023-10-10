<?php

/**
 * Validamos la dirección
 */
function valida_direccion($direccion)
{
    if(!is_numeric($direccion) && strlen($direccion)>10)
    {
        return true;
    }
    else
        return false;
}

/**
 * Validamos el número de teléfono
 */
function valida_tlf($telefono){
    if(strlen($telefono)!=9)
    {
        return false;
    }
    else
        return true;
}

/**
 * validamos los datos nombre
 */

 function valida_nombre($nombre){
    if(strlen($nombre)<2 || strlen($nombre)>50)
    {
        return false;
    }
    else
        return true;

 }

?>