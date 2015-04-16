<?php
//Progrmacion directa
class rqClass {

   

function onGenerate(){
     $ficheroseliminados=0;
      $dir = "../files/DTOs/";
        $handle = opendir($dir);
        while ($file = readdir($handle)) {
            if (is_file($dir . $file))
                if (unlink($dir . $file))
                    $ficheroseliminados++;
        }
        
        
        $ficheroseliminados=0;
      $dir = "../files/DAOs/";
        $handle = opendir($dir);
        while ($file = readdir($handle)) {
            if (is_file($dir . $file))
                if (unlink($dir . $file))
                    $ficheroseliminados++;
        }
         $ficheroseliminados=0;
      $dir = "../files/zip/";
        $handle = opendir($dir);
        while ($file = readdir($handle)) {
            if (is_file($dir . $file))
                if (unlink($dir . $file))
                    $ficheroseliminados++;
        }
        
        
        
        
     $fichero_texto = fopen ("../files/SCRIPTAPL.txt", "r");
     $zip = new ZipArchive();
     $filename = '../files/zip/DTOs.zip';
     $nombrebase="";
   //obtenemos de una sola vez todo el contenido del fichero
   //OJO! Debido a filesize(), sólo funcionará con archivos de texto
   $contenido_fichero = fread($fichero_texto, filesize("../files/SCRIPTAPL.txt"));
   $v=file("../files/SCRIPTAPL.txt");
   $cantidad = count($v);
   $ot=0;
   $aux=0;
   $aux2="";
   $var=$v;
   $nombretablas;
   $nombreatributos;
   $atributos;
   $atributoauxiliar;
   $conatributos=0;
   $cona=0;
   $tipo="";
   $concomillas=0;
for($i=0;$i< $cantidad;$i++){
   $con=0;
  if (strpos($v[$i],'CREATE TABLE') !== false) {
  $var="";
     for($j=0;$j<strlen($v[$i]);$j++){
        if($v[$i][$j]==="`"){
           
            $con++;
        }
         if($con>=3 &&$v[$i][$j]!='`'&& $v[$i][$j]!="(" ){
             $var=$var.$v[$i][$j];
        
         }
    }
       
   $nombretablas[$ot]=trim($var);
   $ot=$ot+1;
  $aux=$i+1;
  $aux2="";
  
  
  while(strpos($v[$aux],'PRIMARY KEY') === false) {
     $concomillas=0;
     $atributoauxiliar="";
     
       for($k=0;$k<strlen($v[$aux]);$k++){
      // $aux2=$aux2.$v[$aux];
       //echo $v[$aux][$k]." ".$cona."<br>";
           if($v[$aux][$k]==="`"){
               $concomillas++;
               
           }
           if($concomillas===1 && $v[$aux][$k]!=="`"){
             
               $atributoauxiliar=$atributoauxiliar.$v[$aux][$k];
           }
           if($concomillas===2){
               if($v[$aux][$k]==="I"){
                   $tipo="int";
                   
               }
               if($v[$aux][$k]==="V"){
                   $tipo="String";
                   
               }
               if($v[$aux][$k]==="D"){
                   $tipo="float";
                   
               }
               
           }
       
      
      
       }
       
       $atributo[$conatributos][0]=$cona;
       $atributo[$conatributos][1]=$atributoauxiliar;
       $atributo[$conatributos][2]=$tipo;
       
       $conatributos++;
       $aux++;
   }
   $cona++;
    }
     if (strpos($v[$i],'CREATE SCHEMA') !== false) {
        $concomillas2=0;
         for($j=0;$j<strlen($v[$i]);$j++){
            
            if($v[$i][$j]==='`'){
                $concomillas2++;
            }
            if($concomillas2===1 && $v[$i][$j]!='`'){
                $nombrebase=$nombrebase.$v[$i][$j];
            }
        }
    }
    
    
     
    
   
}


/*for($j=0;$j<  count($nombreatributos);$j++){
    
    echo $nombreatributos[$j]."<br>";
   
    
}*/


for($j=0;$j<  count($nombretablas);$j++){
   
  
    $ar=fopen("../files/DTOs/".$nombretablas[$j]."DTO.php","a") or
    die("Problemas en la creacion");
    
    fputs($ar,"<"."?"."php\n class ".$nombretablas[$j]."DTO{\n");
    for($i=0;$i<$conatributos;$i++){
    
    
        if($atributo[$i][0]===$j){
        fputs($ar,"private $".$atributo[$i][1].";\n");
        }
    
}
  for($i=0;$i<$conatributos;$i++){
    
    
        if($atributo[$i][0]===$j){
        fputs($ar,"\nfunction get".$atributo[$i][1]."(){\n return"." $"."this->".$atributo[$i][1].";\n}\n");
        fputs($ar,"\nfunction set".$atributo[$i][1]."($".$atributo[$i][1]."){\n $"."this->".$atributo[$i][1]."= $".$atributo[$i][1].";\n}\n");
        }
    
}
  fputs($ar,"\n}");
 
  fclose($ar);
  
  if($zip->open($filename,ZIPARCHIVE::CREATE)===true) {
  
      $zip->addFile("../files/DTOs/".$nombretablas[$j]."DTO.php");
      
  }
}
$zip->close();
$zip = new ZipArchive();
 $filename = '../files/zip/DAOs.zip';

for($j=0;$j<  count($nombretablas);$j++){
   
  
    $ar=fopen("../files/DAOs/".$nombretablas[$j]."DAO.php","a") or
    die("Problemas en la creacion");
    
    fputs($ar,"<"."?"."php\n"."require 'ConnectionClass.php';\nrequire '".$nombretablas[$j]."DTO.php';\n" ."class ".$nombretablas[$j]."DAO{\n ");
    fputs($ar,"private $"."dto; \nprivate $"."connection; \nprivate $"."arrayDTO; \nprivate $"."sql; \nprivate $"."row;\n");
    fputs($ar,"function __construct(){\n "."$"."this"."->connection= new ConnectionClass();\n $"."this->dto = new".$nombretablas[$j]."DTO;\n}\n");
    fputs($ar,"function read(){\n "."$"."this"."->sql= <<<GP\nSELECT * FROM ".$nombretablas[$j]."\nGP;\n"."$"."this"."->connection->setSQL($"."this->sql);\n}\n");
    fputs($ar,"function update(){\n"."}\n");
    fputs($ar,"function delete(){\n"."}\n");
    
    fputs($ar,"public function getlistDTO(){\n unset($"."this->arrayDTO);\n $"."this->arrayDTO=array();\n"."$"."this->row="."$"."this->connection->getRecordCurrent();\nwhile($"."this->row){\n$"."temp= new".$nombretablas[$j]."DTO();\n");
    /*for($i=0;$i<$conatributos;$i++){
    
    
        if($atributo[$i][0]===$j){
        fputs($ar,"private $".$atributo[$i][1].";\n");
        }
    
}*/
  for($i=0;$i<$conatributos;$i++){
    
    
        if($atributo[$i][0]===$j){
        fputs($ar,"\n$"."temp->set".$atributo[$i][1]."($".'this->row["'.$atributo[$i][1].'"]);'."\n");
        //fputs($ar,"\nfunction set".$atributo[$i][1]."($".$atributo[$i][1]."){\n $"."this->".$atributo[$i][1]."= $".$atributo[$i][1].";\n}\n");
        }
    
}
    fputs($ar,"\n$"."this->arrayDTO[]=$"."temp;\n");
    fputs($ar,"\n$"."this->row=$"."this->connection->getRecordCurrent();\n");
    fputs($ar,"\n}\n}");
    fputs($ar,"\nfunction getArrayDTO(){\nreturn $"."this->arrayDTO();\n}");
   fputs($ar,"\n}");
  fclose($ar);
  if($zip->open($filename,ZIPARCHIVE::CREATE)===true) {
  
      $zip->addFile("../files/DAOs/".$nombretablas[$j]."DAO.php");
      
  }
}


 $v=file("../files/templates/ConnectionClass.php");
 $cantidad = count($v);
 $connect="";
 $ar=fopen("../files/DAOs/ConnectionClass.php","a") or
    die("Problemas en la creacion");
 
 
for($i=0;$i< $cantidad;$i++){
    
    
        if (strpos($v[$i],'$'.'this->dataBase') !== false) {
        $connect=$connect.'$'."this->dataBase =".$nombrebase.";\n";
        
        }
        else{
          $connect=$connect.$v[$i];  
        }
        
    
}
fputs($ar, $connect);
fclose($ar);

 $zip->addFile("../files/DAOs/ConnectionClass.php");
 $zip->close();
 
 //Borrar archivos dtos
 /*
  $ficheroseliminados=0;
      $dir = "../files/DTOs/";
        $handle = opendir($dir);
        while ($file = readdir($handle)) {
            if (is_file($dir . $file))
                if (unlink($dir . $file))
                    $ficheroseliminados++;
        }
    //Borrar archivos daos    
        
        $ficheroseliminados=0;
      $dir = "../files/DAOs/";
        $handle = opendir($dir);
        while ($file = readdir($handle)) {
            if (is_file($dir . $file))
                if (unlink($dir . $file))
                    $ficheroseliminados++;
        }
 */
 
echo "<a href='controller/files/zip/DAOs.zip'> Descargar DAOs y Clase de Conexión</a>";
echo "<br/>";
echo "<a href='controller/files/zip/DTOs.zip'> Descargar DTOs</a>";



}
}