
<?php
include_once 'conexion.php';

/* code for data insert */
if(isset($_POST['save']))
{

    $exporte = $MySQLiconn->real_escape_string($_POST['exporte']);
    $cantidad = $MySQLiconn->real_escape_string($_POST['cantidad']);
    $sector = $MySQLiconn->real_escape_string($_POST['sector']);

    $Q = $MySQLiconn->query("INSERT INTO exporte( exporte, cantidad, sector) VALUES('$exporte', '$cantidad', '$sector')");
}
if(isset($_GET['del']))
{
    $SQL = $MySQLiconn->query("DELETE FROM exporte WHERE id=".$_GET['del']);
    header("Location: ../acuerdo-admin/exportaciones.php");
}

if(isset($_GET['edit']))
{
    $SQL = $MySQLiconn->query("SELECT * FROM exporte WHERE id=".$_GET['edit']);
    $getROW = $SQL->fetch_array();
}

if(isset($_POST['update']))
{
    $SQL = $MySQLiconn->query("UPDATE exporte SET exporte='".$_POST['exporte']."', cantidad='".$_POST['cantidad']."', sector='".$_POST['sector']."' WHERE id=".$_GET['edit']);
    header("Location: ../acuerdo-admin/exportaciones.php");
}
?>