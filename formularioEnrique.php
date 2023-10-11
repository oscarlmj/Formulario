
<?php
    // Valor que deberá estar seleccionado
    $array_valores_defecto = array ("especie_seleccionada" => "Perro", "nombre_text" => "Kira", "caracteristica_seleccionada"=> "Perezoso",);

    // Inicializamos las variables a ""
    $selected_gato = $selected_perro = $selected_hamster = "";
    $checked_amable = $checked_perezoso = $checked_energetico ="";

    // En función del valor por defecto, seleccionamos una u otra opción
    switch ($array_valores_defecto["especie_seleccionada"]) {
        case "Gato":
            $selected_gato = "selected";
            break;
        case "Perro":
            $selected_perro = "selected";
            break;
        case "Hamster":
            $selected_hamster = "selected";
            break;
    }

    switch ($array_valores_defecto["caracteristica_seleccionada"]){
        case "Amable":
            $checked_amable = "checked";
            break;
        case "Perezoso":
            $checked_perezoso = "checked";
            break;
        case "Energetico":
            $checked_energetico = "checked";
            break;
    }

?>

<!DOCTYPE html>
<html lan="en">
    <head>
        <meta charset="UTF-8">
        <title> Formulario Enrique </title>
        <link rel="stylesheet" href="./CSS/formularioEnriqueEstilo.css">
    </head>

    <body>
        <h3> Datos Mascota </h3>
        <form action="recibe_datos.php" method="post">
            <fieldset>
                <legend> <strong>Nombre</strong> </legend>
                <label> Introduzca el nombre de su mascota: </label> <input value="<?php echo $array_valores_defecto["nombre_text"] ?>" type="text" id="nombre">
            </fieldset>
            <fieldset>
                <legend> <strong>Especie</strong> </legend>
                    <label>Introduce la especie de tu mascota: </label>     
                    <select name="tipo">
                        <option value="Gato"      <?= $selected_gato?>            >Gato</option> 
                        <option value="Perro"      <?= $selected_perro?>          >Perro</option>
                        <option value="Hamster"    <?= $selected_hamster?>        >Hamster</option>
                    </select>
            </fieldset>  
            <fieldset>
                <legend> <strong>Caracteristicas</strong> </legend>
                <label >Destaca las caracteristicas de tu mascota: </label> 
                <br>
                <label for="Amable"> <em> Amable </em> </label> <input <?= $checked_amable?> id="Amable" type="checkbox" value="Amable" name="caracteristicas">
                <label for="Perezoso"> <em>Perezoso </em> </label> <input <?= $checked_perezoso?> id="Perezoso" type="checkbox" value="Perezoso" name="caracteristicas">
                <label for="Energetico"> <em> Energetico </em> </label> <input  <?= $checked_energetico?> id="Energetico" type="checkbox" value="Energetico" name="caracteristicas">
            </fieldset>
        </form>
    </body>

</html>
