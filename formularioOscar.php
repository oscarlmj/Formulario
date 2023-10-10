<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Oscar</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-image: linear-gradient(to right, #0eac3e, #00c6ae, #4cd7f1, #c3e3ff, #f9f9f9);
        }
        form {
            width: 100%;
            max-width: 400px; /* Ancho máximo del formulario */
            padding: 20px;
            border-radius: 10px;
            background-color: rgba(255, 255, 255, 0.7);
        }

        #center {
            text-align: center;
        }

        #tipo {
            max-width: 100%; /* Ajustar el ancho del select al 100% */
            margin: 0 auto;
            width: 15vh;
            text-align: center;
        }

        input {
            margin-top: 10px;
            width: 100%; /* Ajustar el ancho de los campos de texto al 100% */
        }

        input[type="text"] {
            border: 0px solid #000;
            border-radius: 20px;
            height: 40px;
            text-align: center;
            justify-content: center;
            margin-top: 10px;
            margin-bottom:10px;
        }

        select {
            border: 0px solid #000;
            border-radius: 20px;
            height: 40px;
            width: 100%;
        }



        #rmb {
            margin-top: 10px;
            width: fit-content;
            margin-bottom:20px;
        }

        #hora {
            margin-top: 10px;
            width: 15vh;
            text-align: center;
        }

        input[type="submit"] {
            background-color: #00c6ae;
            color: white;
            border: none;
            border-radius: 20px;
            padding: 10px 20px;
            cursor: pointer;
            font-weight: bold;
        }


        @media (max-width: 768px) {
            form {
                padding: 10px; /* Ajustar el espacio interior en pantallas pequeñas */
            }
        }
    </style>
</head>
<body>
<div class="borde">
    <form action="funciones_validacion.php" method="get">
        <label for="nombre" id="center"><strong>Nombre Completo</strong></label>
        <input type="text" id="nombre" placeholder="Introduce tu nombre">

        <label for="direccion" id="center"><strong>Direccion</strong></label>
        <input type="text" id="direccion" placeholder="Introduce la direccion">

        <label for="telefono" id="center"><strong>Numero de telefono</strong></label>
        <input type="text" id="telefono" placeholder="Introduce un teléfono">

        <label for="via"><strong>Tipo de via</strong></label>
        <select name="via" id="tipo">
            <option value="calle" selected>Calle</option>
            <option value="bloque">Bloque</option>
        </select>
        <br><br>

        <label for="hora"><strong>Hora de entrega</strong></label>
        <select name="hora" id="hora">
            <option value="9">09:00</option>
            <option value="12">12:00</option>
            <option value="16" selected>16:00</option>
            <option value="19">19:00</option>
        </select>
        <br><br>
        <label for="rmb"><strong>Recordar informacion de envio</strong></label>
        <input type="checkbox" id="rmb" name="remember" value="recordar">
        <input type="submit" value="Confirmar">
    </form>
</div>
</body>
</html>