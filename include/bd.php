<?php 

$servidor="localhost";
$baseDeDatos="maxielectronica";
$usuario="root";
$contraseña="";

try{

$conexion=new PDO("mysql:host=$servidor;dbname=$baseDeDatos",$usuario, $contraseña);
}catch(Exception $error){
    echo $error->getMessage();
}
?>