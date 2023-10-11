
<?php
    // Valor que deberá estar seleccionado
    $array_valores_defecto = array ("especie_seleccionada" => "Perro", "nombre_text" => "Kira", );

    // Inicializamos las variables a ""
    $selected_gato = $selected_perro = $selected_hamster = "";

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
<<<<<<< HEAD
                <label> Introduzca el nombre de su mascota: </label> <input value="<?php echo $array_valores_defecto["nombre_text"] ?>" type="text" id="nombre">
=======
                <label> Introduzca el nombre de su mascota: </label> <input value=<?php $array_valores_defecto["nombre_text"] ?> type="text" id="nombre"> <!--El valor por defecto es Nombre-->
>>>>>>> 1e8121ef77c5a2f3d8b85ca3f738199fcc6b10bf
            </fieldset>
            <fieldset>
                <legend> <strong>Especie</strong> </legend>
                    <label>Introduce la especie de tu mascota: </label>     
                    <select name="tipo">
<<<<<<< HEAD
                        <option value="Gato"      <?= $selected_gato?>            >Gato</option> 
=======
                        <option value="Gato"      <?= $selected_gato?>            >Gato</option> <!--El valor por defecto deberia de ser gato-->
>>>>>>> 1e8121ef77c5a2f3d8b85ca3f738199fcc6b10bf
                        <option value="Perro"      <?= $selected_perro?>          >Perro</option>
                        <option value="Hamster"    <?= $selected_hamster?>        >Hamster</option>
                    </select>
            </fieldset>  
            <fieldset>
                <legend> <strong>Caracteristicas</strong> </legend>
                <label >Destaca las caracteristicas de tu mascota: </label> 
                <br>
                <label for="Amable"> <em> Amable </em> </label> <input checked="yes" id="Amable" type="checkbox" name="caracteristicas">
                <label for="Perezoso"> <em>Perezoso </em> </label> <input id="Perezoso" type="checkbox" name="caracteristicas">
                <label for="Energetico"> <em> Energetico </em> </label> <input id="Energetico" type="checkbox" name="caracteristicas">
            </fieldset>
        </form>
    </body>

</html>
