<?php 
require 'conexion.php';
session_start();

$usuario = $_POST['usuario'];
$clave = $_POST['clave'];

$q = "SELECT COUNT(*) as contar from user where usuario = '$usuario' and clave = '$clave'";
$MySQLiconn = mysqli_query($MySQLiconn,$q);
$array = mysqli_fetch_array($MySQLiconn);

if($array['contar']>0){
    $_SESSION['username'] = $usuario;
    header("location: paginaprincipal.php");
}else{
    echo "Datos Incorrectos";
}
    
    
?>