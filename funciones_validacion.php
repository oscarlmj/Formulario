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
    $expresionValoresValidos = '/^[A-Za-záéíóúÁÉÍÓÚñÑ\s]+$/u';
    if(preg_match($expresionValoresValidos, $nombre) && ((strlen($nombre) > 1) && (strlen($nombre<50)))){
        return true;
    }else{
        return false;
    }
 }


 /**
  * valido las especies del formulario Enrique.
  */

  function valida_especie(){
    
  }







?>