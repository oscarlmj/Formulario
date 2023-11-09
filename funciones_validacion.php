<?php
/**
 * Validamos la dirección, se comprueba que el campo no este vacío, que no contenga numero, que la longitud se mayor que 10,
 * y que la primera letra sea mayuscula
 */
function valida_direccion($direccion)
{
    if(!empty($direccion) && !preg_match('/[0-9]/',$direccion) && strlen($direccion)>10 && ctype_upper($direccion[0])){
        return true;
    }
    else
        return false;
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
    if(preg_match($expresionValoresValidos, $nombre) && !empty($nombre) && ((strlen($nombre) > 1) && (strlen($nombre) < 50)) && ctype_upper($nombre[0])){
        return true;
    }else{
        return false;
    }
 }
 function juntarNombreApellidos($nombreCompleto){
       $juntacion = $nombre . $apellido;
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