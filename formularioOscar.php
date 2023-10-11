<?php
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

        <label for="direccion" id="center"><strong>Direccion</strong></label>
        <input type="text" id="direccion" name="direccion" placeholder="Introduce la direccion">

        <label for="telefono" id="center"><strong>Numero de telefono</strong></label>
        <input type="text" id="telefono" name="telefono" placeholder="Introduce un teléfono">

        <label for="via"><strong>Tipo de via</strong></label>
        <select name="tipo de via" id="tipo">
            <option value="calle" selected>Calle</option>
            <option value="bloque">Bloque</option>
        </select>
        <br><br>

        <label for="hora"><strong>Hora de entrega</strong></label>
        <select name="hora de entrega" id="hora">
            <option value="9:00">09:00</option>
            <option value="12:00">12:00</option>
            <option value="16:00" selected>16:00</option>
            <option value="19:00">19:00</option>
        </select>
        <br><br>
        <label for="rmb"><strong>Recordar informacion de envio</strong></label>
        <input type="checkbox" id="rmb" name="remember" value="recordar">
        <input type="submit" value="Confirmar">
    </form>
</div>
</body>
</html>