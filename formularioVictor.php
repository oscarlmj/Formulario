<?php
        $fichero="./ficheroVictor.txt"; //fichero donde va a coger los valores por defecto
        $gestor=fopen($fichero,"r"); //abre el flujo del fichero, r de read
        $cont=fread($gestor,filesize($fichero)); //flujo de lectura
        fclose($gestor);//cerrar el flujo

        //Se crea el array para los valores por defecto vacio.
        $array_defecto= array();

        //Se separa los elementos del archivo que están divididos por una ",", y se almacenan en un array.
        $splitcont=explode(",",$cont);

        //Recorre cada posicion del array, las separa por el signo "=", y almacena en el array por defecto los valores en la posicion correspondiente.
        foreach($splitcont as $valor)
        {
        if(explode("=",$valor)[0]==="marca")
                $array_defecto["marca"]=explode("=",$valor)[1];
        else if(explode("=",$valor)[0]==="anios")
                $array_defecto["anios"]=explode("=",$valor)[1];
        }

        /**
         * Valores por defecto sin usar archivo
         * $valoresDefecto = array(marca => "volvo", antiguedad => "10");
         */
        
        

        //Poner valores por defecto a los select
        $selected_volvo = $selected_kia = $selected_mercedes = $selected_bmw = "";
        $selected_5 = $selected_10 = $selected_15 = $selected_20 = "";

        switch ($array_defecto["marca"]) {
                case "volvo":
                        $selected_volvo = "selected";
                        break;
                
                case "kia":
                        $selected_kia = "selected";
                        break;

                case "mercedes":
                        $selected_mercedes = "selected";
                        break;
                case "bmw":
                        $selected_bmw = "selected";
                        break;
        }

        switch ($array_defecto["anios"]) {
                case "5":
                        $selected_5 = "selected";
                        break;
                
                case "10":
                        $selected_10 = "selected";
                        break;

                case "15":
                        $selected_15 = "selected";
                        break;
                case "20":
                        $selected_20 = "selected";
                        break;
        }
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
                <form action="recibe_datos.php" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="nombre_formulario" value="Victor"> 

                        <label class="separacion" for="nombre"> Nombre del interesado</label>
                        <input type="text" id="nombre" name='nombre' class="separacion"></input><br>
                        
                        <label class="separacion" for="marca"> Marca</label>
                        <select id="marca" name="marca">
                                <option>Seleccione una marca</option>
                                <option value="volvo" <?=$selected_volvo?>>Volvo</option>
                                <option value="kia" <?=$selected_kia?>>KIA</option>
                                <option value="mercedes" <?=$selected_mercedes?>>Mercedes</option>
                                <option value="bmw" <?=$selected_bmw?>>BMW</option>
                        </select><br>

                        <label id="edad" class="separacion" for="antiguedad">Antigüedad del coche</label>
                        <select id="antiguedad" name="antiguedad"  multiple>
                                <option value="5" <?=$selected_5?>>5 años</option>
                                <option value="10" <?=$selected_10?>>10 años</option>
                                <option value="15" <?=$selected_15?>>15 años</option>
                                <option value="20" <?=$selected_20?>>20 años</option>
                        </select><br><br>

                        <label for="fecha">Fecha de adquisición: </label>
                        <input type="date" name="fecha" id="fecha" required>

                        <div class="slider">
                                <input type="range" min="0" max="100000" value="1000" step="500" oninput="rangeValue.innerText = this.value" required>
                                <p id="rangeValue">kilometros</p>
                        </div><br>

                        <input type="checkbox" id="consentimiento" name="consentimiento" value="acepto" required>
                        <label for="consentimiento">Está de acuerdo con las políticas y privacidad de la empresa</label><br>

                        <label for="color">Color del coche</label>
                        <input type="color" id="color" name="color"><br>
                        <input type="file" name="file1"><br>
                        <input type="submit" value="Confirmar">
                </form> 
        </div>
        </body>
</html>