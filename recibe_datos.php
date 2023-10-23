<?php
    include "funciones_validacion.php";

    $nombre_formulario=$_POST["nombre_formulario"];
    $mensaje = "";
    $imagen = " ";
    
    $destino="./Documentos/";
    opendir($destino);
    $archivos;

    switch($nombre_formulario){
        case "Oscar":
            $validacion= valida_nombre($_POST["nombre"]) && valida_telefono($_POST["telefono"])  && valida_direccion($_POST["direccion"]);
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

    $archivos=scandir($destino);
    foreach($_FILES as $fichero)
    {
        if (file_exists($destino . $fichero['name'])) {
            $split = explode(".", $fichero['name']);
            if (count($split) == 2) {
                $fichero['name'] = $split[0] . "_N." . $split[1];
                move_uploaded_file($fichero['tmp_name'], $destino . $fichero['name']);
            } else {
                // Manejo de error: El nombre de archivo no tiene una extensión válida.
            }
        } else {
            move_uploaded_file($fichero['tmp_name'], $destino . $fichero['name']);
        }
    }


    if($validacion)
    {
        //Imagen de tick verde.
        $imagen = "<img src='tick.png'>";
        $mensaje ="<h1>Datos recibidos y validados correctamente</h1><br>";
        
        foreach ($_POST as $clave => $valor)
        {
            if ($clave !== "nombre_formulario")
            {
                //Se convierte la clave a una String en Mayus.
                $clave = strtoupper($clave); 
                //Se elimina el caracter especial _.
                $clave = str_replace('_', ' ', $clave);
                //Se concatena cada clave y su valor en una variable para luego mostrarla por pantalla.
                $mensaje.="<br><strong>$clave: </strong>". htmlspecialchars($valor)."<br>";
    
            }
        }
    }
    else
    {
        //Imagen de error.
        $imagen = "<img src='wrong.png'>";

        //Inicializa la variable form con la String "formulario" para poder hacer uso de ella a la hora de establecer la ruta del formulario correspondiente en el enlace.
        $form = "formulario";
        //Crea el enlace del formulario.
        $formulario = "<a href='" . $form . $nombre_formulario . ".php'>Ir al formulario de " . $nombre_formulario . "</a>";

        $mensaje="<h1>Error al validar los datos</h1></br>";
        $mensaje.="<br><h3>Debes corregir los siguientes campos:</h3>";
        

        foreach ($_POST as $clave => $valor)
        {  
            if($clave !== "nombre_formulario" && $clave !== "hora_de_entrega" && $clave !== "tipo_via" && $clave !== "marca" && $clave !== "antiguedad" && $clave !== "consentimiento" && $clave !== "color" && $clave !=="Especie" && $clave !=="caracteristica1" && $clave !=="caracteristica2" && $clave !=="caracteristica3")
            {
                $funcion = "valida_".$clave;
                if($funcion($valor)==false)
                {
                    //Se convierte la clave a una String en Mayus.
                    $clave = strtoupper($clave);
                    //Se añaden las claves que necesitan ser corregidas para mostrarlas en la pantalla de error.
                    $mensaje.="<br><strong>$clave</strong>";
                }
            }        
        }
    }
?>

<html>
<head>
    <title>Resultado de validación</title>
    <link rel="stylesheet" href="./CSS/recibedatos.css">
</head>
    <body>
    <div class="center-div">  
        <div class="resultado">
        <?php
                //Muestra en pantalla la imagen correspondiente al resultado de la comprobación.
                echo $imagen;
                //Muestra por pantalla el mensaje correspondiente, los datos erroneos que debemos corregir, o cada dato con su contenido.
                echo $mensaje."<br>";

                //En caso de validacion negativa añade el enlace al html.
                if(!$validacion)
                echo $formulario;
                ?>
        </div>
        <br>
        </div>
    </body>
</html>