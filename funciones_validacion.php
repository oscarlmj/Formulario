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

    if(empty($direccion) || preg_match('/[0-9]/',$direccion) || strlen($direccion)<10){
            return false;
    }
    else
            return true;
}

/**
 * Validamos el número de teléfono, se comprueba que no este el campo vacío y que solo contenga números.
 */
function valida_telefono($telefono){
    if(empty($telefono) || !ctype_digit($telefono) || strlen($telefono)!=9){
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
    if(preg_match($expresionValoresValidos, $nombre) && !empty($nombre) && ((strlen($nombre) > 1) && (strlen($nombre)<50))){
        return true;
    }else{
        return false;
    }
 }


 /**
  * valido las especies del formulario Enrique.
  */

    function valida_checkbox($array){
    if (isset($array)) {
        return true;
    } else {
        return false;
    }
  }

/**
 * Valida la fecha para comprobar que el 
 * usuario no pueda seleccionar una superior
 * a la fecha actual
 */
  function valida_fecha($fecha){
   $tiempoActual = time();
   $tiempoFechaActual = strtotime($fecha);

   if($tiempoFechaActual < $tiempoActual){
    return true;
   }else{
    return false;
   }
 }
?>