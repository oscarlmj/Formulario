<?php
    include "funciones_validacion.php";

    $nombre_formulario=$_POST["nombre_formulario"];
    $mensaje = "";

    switch($nombre_formulario){
        case "Oscar":
            $validacion= valida_nombre($_POST["nombre"]) && valida_tlf($_POST["telefono"])  && valida_direccion($_POST["direccion"]);
            break;
        case "Enrique":
            $validacion= valida_nombre($_POST["nombre"]);
            break;
        case "Victor":
            $validacion= valida_nombre($_POST["nombre"]) && valida_fecha($_POST["fecha"]) ;
            break;
        default:
            $mensaje="<h2>Error al recibir los datos del formulario</h2>";
    }

    if($validacion)
    {
        $mensaje ="<h2>Datos recibidos y validados correctamente</h2>";
        foreach ($_POST as $clave => $valor)
        {
            if ($clave !== "nombre_formulario")

                // Invocamos a htmlspecialchars para evitar incluir código HTML o Javascript en la página de respuesta
                echo "<br> - $clave: ". htmlspecialchars($valor);
        }
    }
    else
    {
        $mensaje = "<h2>Error al validar los datos</h2>";
    }

?>

<html>
    <body>
        <?php echo $mensaje; ?>
    </body>
</html>