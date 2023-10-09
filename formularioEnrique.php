<?php
?>

<!DOCTYPE html>
<html>
    <head>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        h3 {
            color: #333;
        }

        form {
            background-color: #fff;
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        }

        fieldset {
            border: 1px solid #ddd;
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 5px;
        }

        legend {
            font-weight: bold;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        select {
            width: 90%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        /* Estilos para alinear los checkboxes junto a los labels */
        label.checkbox-label {
            display: inline-block;
            margin-right: 10px;
        }

        input[type="checkbox"] {
            vertical-align: middle;
        }

        em {
            font-style: italic;
        }
    </style>
    </head>

    <body>
        <h3> Datos Mascota </h3>
        <form action="recibe_datos.php" method="post">
            <fieldset>
                <legend> <strong>Nombre</strong> </legend>
                <label> Introduzca el nombre de su mascota: </label> <input value="Nombre" type="text" id="nombre" > <!--El valor por defecto es Nombre-->
            </fieldset>
            <fieldset>
                <legend> <strong>Especie</strong> </legend>
                    <label>Introduce la especie de tu mascota: </label>     
                    <select name="tipo">
                        <option selected="true">Gato</option> <!--El valor por defecto deberia de ser gato-->
                        <option >Perro</option>
                        <option>Hamster</option>
                    </select>
            </fieldset>  
            <fieldset>
                <legend> <strong>Caracteristicas</strong> </legend>
                <label >Destaca las caracteristicas de tu mascota: </label> 
                <br>
                <label for="Amable"> <em> Amable </em> </label> <input checked="yes" id="Amable" type="checkbox" name="caracteristicas">  <!--El valor por defecto es amable -->
                <label for="Perezoso"> <em>Perezoso </em> </label> <input id="Perezoso" type="checkbox" name="caracteristicas">
                <label for="Energetico"> <em> Energetico </em> </label> <input id="Energetico" type="checkbox" name="caracteristicas">
            </fieldset>
        </form>
    </body>

</html>
