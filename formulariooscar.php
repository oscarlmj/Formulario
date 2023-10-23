<?php

//Se lee el fichero y se recoge su contenido en la variable $cont.
$fichero="./datosformulariooscar.txt";
$gestor=fopen($fichero,"r");
$cont=fread($gestor,filesize($fichero));
fclose($gestor);

//Se crea el array para los valores por defecto vacio.
$array_defecto= array();

//Se separa los elementos del archivo que están divididos por una ",", y se almacenan en un array.
$splitcont=explode(",",$cont);

//Recorre cada posicion del array, las separa por el signo "=", y almacena en el array por defecto los valores en la posicion correspondiente.
foreach($splitcont as $valor)
{
    if(explode("=",$valor)[0]==="hora_entrega")
        $array_defecto["hora_entrega"]=explode("=",$valor)[1];
    else if(explode("=",$valor)[0]==="tipo_via")
        $array_defecto["tipo_via"]=explode("=",$valor)[1];
}

//Se inician las variables de las diferentes opciones en ""
$selected_9 = $selected_12 = $selected_16 = $selected_19 ="";
$selected_calle = $selected_urbanizacion = $selected_avenida="";

//Haciendo uso de un switch se comprueba qué opcion está por defecto y se modifica el contenido
//de su variable para modificar el html.
switch($array_defecto["hora_entrega"]){
    case "9:00":
        $selected_9="selected";
        break;
    case "12:00":
        $selected_12="selected";
        break;
    case "16:00":
        $selected_16="selected";
        break;
    case "19:00":
        $selected_19 = "selected";
        break;
}

switch($array_defecto["tipo_via"]){
    case "calle":
        $selected_calle = "selected";
        break;
    case "urbanizacion":
        $selected_urbanizacion = "selected";
        break;
    case "avenida":
        $selected_avenida = "selected";
        break;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Oscar</title>
    <link rel="stylesheet" href="./CSS/formulariooscar.css">
</head>
<body>
<div>
    <form action="recibe_datos.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="nombre_formulario" value="Oscar">

        <label for="nombre" id="center"><strong>Nombre Completo</strong></label>
        <input type="text" name="nombre" id="nombre"  placeholder="Introduce tu nombre">

        <label for="via"><strong>Tipo de via</strong></label>
        <select name="tipo_via" id="tipo">
            <option value="calle" <?=$selected_calle?>>Calle</option>
            <option value="urbanizacion" <?=$selected_urbanizacion?>>Urbanizacion</option>
            <option value="avenida" <?=$selected_avenida?>>Avenida</option>
        </select>
        <br><br>
        
        <label for="direccion"><strong>Direccion</strong></label>
        <input type="text" name="direccion" placeholder="Introduce la direccion">

        <label for="telefono" id="center"><strong>Numero de telefono</strong></label>
        <input type="text" id="telefono" name="telefono" placeholder="Introduce un teléfono">


        <label for="hora"><strong>Hora de entrega</strong></label>
        <select name="hora de entrega" id="hora">
            <option value="9:00" <?=$selected_9?>>09:00</option>
            <option value="12:00" <?=$selected_12?>>12:00</option>
            <option value="16:00" <?=$selected_16?>>16:00</option>
            <option value="19:00" <?=$selected_19?>>19:00</option>
        </select>
        <br><br>
        <label for="DNI"><strong>DNI</strong></label>
        <input type="file" name="file1">
        <label for="Firma"><strong>Firma</strong></label>
        <input type="file" name="file2">
        <label for="rmb"><strong>Recordar informacion de envio</strong></label>
        <input type="checkbox" id="rmb" name="checkbox" value="recordar">
        <input type="submit" value="Confirmar" >
    </form>
</div>
</body>
</html>