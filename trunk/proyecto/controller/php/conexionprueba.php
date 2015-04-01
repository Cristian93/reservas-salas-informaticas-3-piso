
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">        
        <title></title>
    </head>
 <script src="http://localhost/proyecto/controller/js/jquery-1.11.2.min.js"></script>
    <script src="http://localhost/proyecto/controller/js/index.js"></script>

<body>    
    <!--/*
class conexionprueba {

    private $DBH;
    private $statement;

   function setMysql($host, $dbname, $user, $pass) { 

        $this->DBH = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    }

    function setSQLite($database) {
        $this->DBH = new PDO("sqlite:my/database/path/" . $database . ".db");
    }

    function getMysql() {

        return $this->DBH;
    }

    function getSQLite() {

        return $this->DBH;
    }

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
    }

}
*/

-->
 
                    <div  > <button align="center" type="button" onclick="prueba();">
                            <span ></span>  BASE DE DATOS</button>
                    </div>
     

    </body>
</html>
