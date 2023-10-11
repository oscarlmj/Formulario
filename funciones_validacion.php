<?php

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