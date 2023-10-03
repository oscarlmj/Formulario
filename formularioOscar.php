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
                background-image: linear-gradient(to right top, #002f76, #005ea5, #008ec4, #00bdd4, #12ebd8);
            }

            form {
                width=fit-content;
                height: fit-content;
                padding: 70px; /* Espacio alrededor del formulario */
                border-radius: 10px;
                background-color: rgba(255, 255, 255, 0.07);
            }
        </style>
    </head>
    <body>
        <div class="borde">
            <form action="validacion.php" method="get">
                <label for=""><strong>Usuario o email</strong><br></label>
                <input type="text" id="name" placeholder="Introduce tu nombre"><br><br>
                <label for=""><strong>Contraseña</strong><br></label>
                <input type="password" id="pass" placeholder="Introduce tu contraseña"><br><br>
                <input type="checkbox" id="rmb" name="remember" value="Recordar">
                <label for=""><strong>Recordar informacion de inicio</strong></label><br><br>
                <input type="submit" value="Iniciar sesión"></button>
            </form>
        </div>
    </body>
</html>