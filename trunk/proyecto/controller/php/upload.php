<?php

//comprobamos que sea una petición ajax

if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {

    //obtenemos el archivo a subir
    $file = $_FILES['archivo']['name'];


    //comprobamos si existe un directorio para subir el archivo
    //si no es así, lo creamos
    //comprobamos si el archivo ha subido
    if ($file && move_uploaded_file($_FILES['archivo']['tmp_name'], "../files/" . $file)) {
         $fichero_texto = fopen ("../files/".$file, "r");

        $contenido_fichero = fread($fichero_texto, filesize("../files/" . $file));
        $ar = fopen("../files/SCRIPTAPL.txt", "a") or
                die("Problemas en la creacion");
        fputs($ar, $contenido_fichero);

        fclose($ar);


        echo "Archivo subido con exito<br>";
        echo "<input type='button' value='Generar DTOS' onclick='Ongenerate()'/>";
    }
} else {
    throw new Exception("Error Processing Request", 1);
}
