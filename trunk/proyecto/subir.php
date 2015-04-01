


<?php
// En versiones de PHP anteriores a 4.1.0, $HTTP_POST_FILES debe utilizarse en lugar
// de $_FILES.

$uploaddir = 'controller/files/';
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);

echo '<pre>';
if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
    echo "El archivo es válido y fue cargado exitosamente.\n";
    
} else {
    echo "¡Posible ataque de carga de archivos!\n";
}
/**
echo 'Aquí hay más información de depurado:';
print_r($_FILES);
 * */
 

print "</pre>";
//print($uploadfile);


echo"<a href='".$uploaddir.$_FILES['userfile']['name']."'>Archivo</a><br>";
echo"<a href='generate.php'>Generar getters y setters</a>";

function funcion(){
//para borrar el archivo
unlink($_FILES['userfile']['name']);
    
}


