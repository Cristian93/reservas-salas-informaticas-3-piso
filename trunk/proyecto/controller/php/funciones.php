<?php

if (isset($_REQUEST["tipo"])) {
    if( $_REQUEST["tipo"] ==="generarDto"){
        generarDto();
    }
    if( $_REQUEST["tipo"] ==="generarConexion"){
        generarConexion();
    }
     if( $_REQUEST["tipo"] ==="prueba"){
        prueba();
    }
     
}

function generarDto() {
  
    $ficheroseliminados= 0;
    $dir = "DTO/";
        $handle = opendir($dir);
        while ($file = readdir($handle)) {
            if (is_file($dir . $file))
                if (unlink($dir . $file))
                    $ficheroseliminados++;
        }
    $lista = '
             ';
    $pdo = new PDO('mysql:dbname=' . $_REQUEST["val1"], 'root', 'root');
    $stmt = $pdo->query('SHOW TABLES;');
 

    if ($stmt->rowCount() > 0) {
        $tables = $stmt->fetchAll(PDO::FETCH_NUM);
        foreach ($tables as $table) {
            $table_name = $table[0];
            $lista.=$table_name . '
              ';
            $may =  ucfirst($table_name);
            $nuevoarchivo = fopen("DTO/" .  $may . "DTO" . ".php", "w+");
            fwrite($nuevoarchivo, "<?php\n\n" . "class $may" . "DTO" . "{\n\n");
                
            $lista_pk = $pdo->query("SHOW COLUMNS FROM $table_name");
            $table_fields = $lista_pk->fetchAll();
            print_r($table_fields);
            foreach ($table_fields as $var) {
                 
                fwrite($nuevoarchivo, "    private $" . $var[0] .";\n");
            }
             fwrite($nuevoarchivo, "\n");
            foreach ($table_fields as $var) {
               // echo "\n", $var[0], "\t\t";
                $atributo = ucfirst($var[0]) ; 
                fwrite($nuevoarchivo, "    function get" . $atributo ."(){\n       return $" . "this->$var[0];\n    }\n\n");
            }
   
           
            foreach ($table_fields as $var) {
               // echo "\n", $var[0], "\t\t";
                $atributo = ucfirst($var[0]) ; 
                fwrite($nuevoarchivo, "    function set" . $atributo ."($$var[0]){\n        $" . "this->$var[0] = $$var[0];\n    }\n\n");
            }
             
             
             
            fwrite($nuevoarchivo, "}");
            fclose($nuevoarchivo);
        }
    }
    echo $lista;
}


function generarConexion() {
  
    $ficheroseliminados= 0;
    $dir = "CONEXION/";
        $handle = opendir($dir);
        while ($file = readdir($handle)) {
            if (is_file($dir . $file))
                if (unlink($dir . $file))
                    $ficheroseliminados++;
        }
    
         
            $nuevoarchivo = fopen("CONEXION/Conexion.php", "w+");
            fwrite($nuevoarchivo, "<?php\n\n class conexion {\n\n");
            fwrite($nuevoarchivo,  "    private $". "DBH; \n    private $" .  "statement;\n\n");
          
           if ($_REQUEST["val1"] === "mysql") {
               
             fwrite($nuevoarchivo,    '
    function setMysql($host, $dbname, $user, $pass) { 
                   $this->DBH = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    }
    
    function getMysql() {
                return $this->DBH;
    }');
           }elseif ($_REQUEST["val1"] === "sqlite") {
               
               fwrite($nuevoarchivo,    '
    function setSQLite($database) {
    
        $this->DBH = new PDO("sqlite:my/database/path/" . $database . ".db");
    }   
        
    function getSQLite() {

        return $this->DBH;
    }
 ');
               
           }
              fwrite($nuevoarchivo,    '
    function close() {

        $this->DBH = null;
    }

    function execute() {

        $f = $this->DBH->prepare($this->statement);
        $f->execute();
        $result = $f->fetchAll();
        return $result;
    }

    function getStatement() {
        return $this->statement;
    }

    function setStatement($statement) {
        $this->statement = $statement;
    } ');
             fwrite($nuevoarchivo, "   \n}");
            fclose($nuevoarchivo);  
           }
           
function prueba (){
    
    echo "f";
    
}
             
            
        




    