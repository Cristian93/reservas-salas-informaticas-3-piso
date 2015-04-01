<?php

if (isset($_REQUEST["tipo"])) {
    if( $_REQUEST["tipo"] ==="mostrartablas"){
        list_tables();
    }
     
}

function list_tables()
{
    $lista = '
             ';
    $pdo = new PDO('mysql:dbname='.$_REQUEST["val1"], 'root', 'root');
$stmt = $pdo->query('SHOW TABLES;');

if ($stmt->rowCount() > 0) {
    $tables = $stmt->fetchAll(PDO::FETCH_NUM);
    foreach ($tables as $table) {
        $table_name = $table[0];
      $lista.=$table_name.'
              ' ;
        
    }
   
}
 echo $lista;

}