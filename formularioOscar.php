<?php
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulario</title>
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
                width: fit-content;
                height: fit-content;
                padding: 70px; /* Espacio alrededor del formulario */
                border-radius: 10px;
                background-color: rgba(255, 255, 255, 0.2);
                }

            #center{
                text-align: center;
                display: block;
            }

            #tipo {
                vertical-align: middle;
                margin-left:10px;
                max-width: fit-content;
                max-height: 38px;
                margin-bottom:20px;
                margin-top:20px;        
            }

            input{
                margin-top:10px;
            }

            input[type="text"]
            {
                border-radius: 10px;
                border: 0px solid #000;
                height:3.5vh;
                width:25vh;
                text-align:center;
                background-color: rgba(255, 255, 255, 0.6);
                font-weight:bold;
            }

            #hora{
                margin-top:10px;
            }
        </style>
    </head>
    <body>
        <div class="borde">
            <form action="funciones_validacion.php" method="get">
                <label for="name" id="center"><strong>Nombre Completo</strong><br></label>
                <input type="text" id="name" placeholder="Introduce tu nombre"><br><br>
                <label for="dir" id="center"><strong>Direccion</strong></label><br>
                <input type="text" id="dir" placeholder="Introduce la direccion"><br><br>
                <label for="via"><strong>Tipo de via</strong></label>
                <select name="via" id="tipo" multiple>
                    <option value="calle">Calle</option>
                    <option value="bloque">Bloque</option>
                </select><br>
                <label for="number" id="center"><strong>Numero de telefono</strong><br></label>
                <input type="text" id="number" placeholder="Introduce un teléfono"><br><br>
                <label for="hora"><strong>Hora de entrega</strong></label><br>
                <select id="hora">
                    <option value="9">09:00</option>
                    <option value="12">12:00</option>
                    <option value="16">16:00</option>
                    <option value="19">19:00</option>
                </select><br>
                <input type="checkbox" id="rmb" name="remember" value="Recordar">
                <label for=""><strong>Recordar informacion de envio</strong></label><br><br>
                <input type="submit" value="Confirmar"></button>
            </form>
        </div>
    </body>
</html>