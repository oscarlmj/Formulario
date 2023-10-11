<?php

/**
 * Validamos la dirección, se comprueba que el campo no este vacío y que no contenga números.
 */
function valida_direccion($direccion)
{
    if(!empty($direccion) && !preg_match('/[0-9]/',$direccion) && strlen($direccion)>10){
            return true;
    }
    else
            return false;
}

/**
 * Validamos el número de teléfono, se comprueba que no este el campo vacío y que solo contenga números.
 */
function valida_tlf($telefono){
    if(!empty($telefono) && ctype_digit($telefono) && strlen($telefono)==9){
            return true;
        }
        else
            return false;
    }
    
/**
 * validamos los datos nombre
 */

 function valida_nombre($nombre){
    $expresionValoresValidos = '/^[A-Za-záéíóúÁÉÍÓÚñÑ\s]+$/u';
    if(preg_match($expresionValoresValidos, $nombre) && ((strlen($nombre) > 1) && (strlen($nombre)<50))){
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