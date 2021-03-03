<?php
require 'vendor/autoload.php';

//phpinfo();
echo extension_loaded("mongodb") ? "loaded\n" : "not loaded\n";
//echo extension_loaded("mongodb") ? "loaded\n" : "not loaded\n";
$conexion="";
try{
    // Conectando especificando host y puerto
   $conexion = new MongoDB\Client('mongodb://localhost:27017');
   }catch(Exception $e){
      print($e);
   
   }

$coleccion = $conexion->covidBD->pacientes;

echo '<h2>Listado de pacientes</h2>';

$resultados = $coleccion->find();

foreach ($resultados as $documento) {
    echo $documento['_id'] . " " . $documento['nombre'] . " " . $documento['direccion'] . '</br>';
 }
 
 echo "<p>En total hay ".$coleccion->count()." pacientes";


?>