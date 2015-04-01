<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">        
        <title></title>
    </head>
    <link rel="stylesheet" href="controller/css/inicio.css">
    <link rel="stylesheet" href="controller/bootstrap/css/bootstrap.css">
    <script src="controller/js/jquery-1.11.2.min.js"></script>
    <script src="controller/bootstrap/js/bootstrap.js"></script>
    <script src="controller/js/index.js"></script>
  
    <?php
function nuevo (){
    
header("Content-disposition: attachment; filename=index.php");
header("Content-type: php");
readfile("index.php");

 header("Content-disposition: attachment; filename=inicio.php");
header("Content-type: php");
readfile("inicio.php");

}

    function myfnc() {
        $ficheroseliminados = 0;
        $dir = "DTO/";
        $handle = opendir($dir);
        while ($file = readdir($handle)) {
            if (is_file($dir . $file))
                if (unlink($dir . $file))
                    $ficheroseliminados++;
        }
    }

php?>
<body onload="<?php myfnc(); ?>">    
        <div>
            <h1>Generador de DAO's  &  DTO's</h1>

        </div>
        <div class="row">
            <div class="col-xs-6" >

                <div class="bs-callout bs-callout-danger" style="height:500px;">
                    <h4>Cargar Script</h4>
                    <br>

                    <form>
                        <label class="tipoDB"><input type="radio" name="radgroup1" value="mysql">MySQL</label>
                        <label class="tipoDB"><input type="radio" name="radgroup1" value="oracle">ORACLE</label>

                    </form>
                    <br>
                    <!-- El tipo de codificación de datos, enctype, se DEBE especificar como a continuación -->
                    <form enctype="multipart/form-data" action="subir.php" method="POST">

                        <input type="hidden" name="MAX_FILE_SIZE" value="30000" />

                        Cargar archivo:
                        <br>

                        <br>
                        <input name="userfile" type="file" />
                        <br>
                        <input align="middle"type="submit" value="Enviar archivo" />

<a href="descargar.php">Download my huge document (PDF)</a>
                    </form>
                </div>


            </div>
            <div class="col-xs-6">

                <div class="bs-callout bs-callout-primary" style="height:500px;">
                    <h4>Lista De Base De Datos</h4>
                    <br>
                    <form name="form2">
                        <?php
                        $usuario = 'root';
                        $password = 'root';
                        $servidor = 'localhost';
//conexxion por medio de PDO PHP DATA OBJECTS 
                        $dbh = new PDO("mysql:host=$servidor", $usuario, $password);
//guardar el resultado de 
                        $dbs = $dbh->query('SHOW DATABASES');

                        while (( $db = $dbs->fetchColumn(0) ) !== false) {
                            echo '<label class="block"><input type="radio" name="radgroup2" value="' . $db . '">' . $db . '</label><br>';
                        }
                        ?>

                    </form>
                    <div class="centered"> <button align="center" type="button" class="btn btn-default btn-lg text-center" onclick="mostrarTablas();">
                            <span class="glyphicon glyphicon-random" aria-hidden="true"></span>  Generar</button>
                    </div>
                </div>


            </div>
        </div>  
        <footer>
            <h4   class="parrafo" align="center">Generador DAO's Y DTO's  2015 
            </h4>
            <h4 class="parrafo" align="center">  
                Michael Gallego Adames  -  Sebastian Calvo Salamanca</h4>
        </footer>

    </body>
</html>
