<?php
    
?>
<html>
        <!DOCTYPE html>
        <html lang="en">
        <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Formulario</title>
                <style>
                        body{
                                background: radial-gradient(#9ed1b7, #09738a, #092b5a);
                        }
                        #containerForm{
                                width: 100vw;
                                display:flex;
                                justify-content: center;
                                vertical-align:middle;
                                margin-top:40vh;
                                
                        }
                        form{
                                width:15vw;
                                background: rgba(255, 255, 255, 0.2);
                                border-radius: 16px;
                                box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
                                backdrop-filter: blur(5px);
                                -webkit-backdrop-filter: blur(5px);
                                border: 1px solid rgba(255, 255, 255, 0.3);
                                padding:50px;
                        }
                        .slider{
                                width: 8vw;
                                height: 10px;
                                padding:10px 20px;
                                padding-left: 40px;
                                background: #fcfcfc;
                                border-radius: 20px;
                                display: flex;
                                align-items: center;
                                box-shadow: 0px 15px 40px #7E6D5766;
                                margin-top:20px;
                        }
                        .slider p{
                                font-size: 18px;
                                font-weight: 600;
                                font-family: Open Sans;
                                padding-left: 60px;
                                color: black;
                                width:fit-content;
                        }
                        .slider input[type="range"]{
                                -webkit-appearance:none !important;
                                width: 120px;
                                height: 2px;
                                background: black;
                                border: none;
                                outline: none;
                        }
                        .slider input[type="range"]::-webkit-slider-thumb{
                                -webkit-appearance: none !important;
                                width: 10px;
                                height:10px;
                                background: black;
                                border: 2px solid black;
                                border-radius: 50%;
                                cursor: pointer;
                        }
                        .slider input[type="range"]::-webkit-slider-thumb:hover{
                                background: black;
                        } 
                        .separacion{
                                margin-bottom:20px;
                        }
                        label{
                                font-size:18px;
                        }
                </style>
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
                        <form action="funciones_validacion.php" method="get">
                                <label class="separacion" for="nombreCompleto"> Nombre del interesado</label>
                                <input type="text" id="nombre" class="separacion"></input><br>
                                
                                <label class="separacion" for="nombreCompleto"> Modelo</label>
                                <select name="marca" id="antiguedad">
                                        <option value="volvo">Volvo</option>
                                        <option value="kia">KIA</option>
                                        <option value="mercedes">Mercedes</option>
                                        <option value="bmw">BMW</option>
                                </select><br>
                                <label id="edad" class="separacion" for="antiguedad">Antigüedad del coche</label>
                                <select name="anios" id="antiguedad" multiple>
                                        <option value="5">5 años</option>
                                        <option value="10">10 años</option>
                                        <option value="15">15 años</option>
                                        <option value="20">20 años</option>
                                </select>
                                <br>
                                <div class="slider">
                                        <input type="range" min="0" max="100000" value="1000" step="500" oninput="rangeValue.innerText = this.value">
                                        <p id="rangeValue">100 kilometros</p>
                                </div><br>
                                <input type="checkbox" name="rmb" id="rmb" value="recordar">
                                <label for="rmb">Recordar información para el próximo inicio de sesión</label><br>
                                
                                <label for="color">Color del coche</label>
                                <input type="color" name="color" id="color">
                        </form> 
                </div>
        </body>
        </html>