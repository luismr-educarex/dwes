<?php
session_start();


$nombreUsuario='';
$pwd = '';

if(isset($_POST['nombre'])){
    $nombreUsuario=$_POST['nombre'];
}

if(isset($_POST['pwd'])){
    $pwd = $_POST['pwd'];
}

//comprobar en la base de datos la existencia de este usuario con la contraseña

        
$_SESSION['usuario'] = $nombreUsuario;
require 'configuracion.php';
$logger->info("El usuario ".$nombreUsuario." se ha logueado en el sistema");


header("Location: inicio.php");

?>