<?php
    
?>
<html>
        <!DOCTYPE html>
        <html lang="en">
        <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <link rel="stylesheet" href="./CSS/formularioVictor.css">
                <title>Formulario de Victor</title>
                <script>
                        const value = document.querySelector("#value");
                        const input = document.querySelector("#pi_input");
                        value.textContent = input.value;
                        input.addEventListener("input", (event) => {
                        value.textContent = event.target.value;
                        });
                </script>
        </head>
        <body>
                <div id="containerForm">
                        <form action="funciones_validacion.php" method="post">
                                <input type="hidden" name="nombre_formulario" value="Victor">

                                <label class="separacion" for="nombre"> Nombre del interesado</label>
                                <input type="text" id="nombre" name='nombre' class="separacion"></input><br>
                                
                                <label class="separacion" for="marca"> Marca</label>
                                <select id="marca" name="marca">
                                        <option>Seleccione una marca</option>
                                        <option value="volvo">Volvo</option>
                                        <option value="kia">KIA</option>
                                        <option value="mercedes">Mercedes</option>
                                        <option value="bmw">BMW</option>
                                </select><br>

                                <label id="edad" class="separacion" for="antiguedad">Antigüedad del coche</label>
                                <select id="antiguedad" name="antiguedad"  multiple>
                                        <option value="5">5 años</option>
                                        <option value="10">10 años</option>
                                        <option value="15">15 años</option>
                                        <option value="20">20 años</option>
                                </select><br>

                                <div class="slider">
                                        <input type="range" min="0" max="100000" value="1000" step="500" oninput="rangeValue.innerText = this.value">
                                        <p id="rangeValue">100 kilometros</p>
                                </div><br>

                                <input type="checkbox" id="consentimiento" name="consentimiento" value="recordar">
                                <label for="consentimiento">Está de acuerdo con las políticas y privacidad de la empresa</label><br>

                                <label for="color">Color del coche</label>
                                <input type="color" id="color" name="color"><br>
                                <input type="submit" value="Confirmar">
                        </form> 
                </div>
        </body>
        </html>