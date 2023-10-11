<?php

//Se establecen los valores por defecto de los input select dentro de un mismo array
$array_defecto= array("hora_entrega"=> "19:00", "tipo_via"=> "avenida");

//Se inician las variables de las diferentes opciones en ""
$selected_9 = $selected_12 = $selected_16 = $selected_19 ="";
$selected_calle = $selected_urbanizacion = $selected_avenida="";

//Haciendo uso de un switch se comprueba que opcion está por defecto y se modifica el contenido
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
    <link rel="stylesheet" href="./CSS/formularioOscar.css">
</head>
<body>
<div>
    <form action="recibe_datos.php" method="post">
        <input type="hidden" name="nombre_formulario" value="Oscar">

        <label for="nombre" id="center"><strong>Nombre Completo</strong></label>
        <input type="text" name="nombre" id="nombre"  placeholder="Introduce tu nombre">

        <label for="via"><strong>Tipo de via</strong></label>
        <select name="tipo de via" id="tipo">
            <option value="calle" <?=$selected_calle?>>Calle</option>
            <option value="urbanizacion" <?=$selected_urbanizacion?>>Urbanizacion</option>
            <option value="avenida" <?=$selected_avenida?>>Avenida</option>
        </select>
        <br><br>
        
        <label for="direccion" id="center"><strong>Direccion</strong></label>
        <input type="text" id="direccion" name="direccion" placeholder="Introduce la direccion">

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
        <label for="rmb"><strong>Recordar informacion de envio</strong></label>
        <input type="checkbox" id="rmb" name="remember" value="recordar">
        <input type="submit" value="Confirmar">
    </form>
</div>
</body>
</html>