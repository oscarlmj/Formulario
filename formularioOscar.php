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
                background-image: linear-gradient(to left top, #52d100, #489d17, #3a6c1c, #293f1a, #151614);
            }

            form {
                width: fit-content;
                height: 30vh;
                padding: 20px; /* Espacio alrededor del formulario */
                border-radius: 10px;
                background-color: rgba(83, 83, 83, 0.2);
            }
        </style>
    </head>
    <body>
        <div class="borde">
            <form action="validacion.php" method="get">
                <label for=""><strong>Usuario o email</strong><br></label>
                <input type="text" id="name"><br>
                <label for=""><strong>Contraseña</strong><br></label>
                <input type="password" id="pass"><br><br>
                <input type="submit">Acceder</button>
            </form>
        </div>
    </body>
</html>