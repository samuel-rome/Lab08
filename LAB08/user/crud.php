<?php
include_once 'conexion.php';

/* code for data insert */
if(isset($_POST['save']))
{

    $nombre = $MySQLiconn->real_escape_string($_POST['nombre']);
    $apellidos = $MySQLiconn->real_escape_string($_POST['apellidos']);
    $correo = $MySQLiconn->real_escape_string($_POST['correo']);
    $usuario = $MySQLiconn->real_escape_string($_POST['usuario']);

    $Q = $MySQLiconn->query("INSERT INTO user( nombre, apellidos, correo, usuario, clave) VALUES('$nombre', '$apellidos', '$correo', '$usuario')");
}
if(isset($_GET['del']))
{
    $SQL = $MySQLiconn->query("DELETE FROM user WHERE id=".$_GET['del']);
    header("Location: ../admin/registuser.php");
}

if(isset($_GET['edit']))
{
    $SQL = $MySQLiconn->query("SELECT * FROM user WHERE id=".$_GET['edit']);
    $getROW = $SQL->fetch_array();
}

if(isset($_POST['update']))
{
    $SQL = $MySQLiconn->query("UPDATE user SET nombre='".$_POST['nombre']."', apellidos='".$_POST['apellidos']."', correo='".$_POST['correo']."', usuario='".$_POST['usuario']."' WHERE id=".$_GET['edit']);
    header("Location: ../admin/registuser.php");
}
?>