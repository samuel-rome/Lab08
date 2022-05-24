
<?php
include_once 'conexion.php';

/* code for data insert */
if(isset($_POST['save']))
{

    $pais = $MySQLiconn->real_escape_string($_POST['pais']);
    $inicio = $MySQLiconn->real_escape_string($_POST['inicio']);
    $descri = $MySQLiconn->real_escape_string($_POST['descri']);

    $Q = $MySQLiconn->query("INSERT INTO relacion ( pais, inicio, descri) VALUES('$pais', '$inicio', '$descri')");
}
if(isset($_GET['del']))
{
    $SQL = $MySQLiconn->query("DELETE FROM relacion WHERE id=".$_GET['del']);
    header("Location: ../acuerdo-admin/relaciones.php");
}

if(isset($_GET['edit']))
{
    $SQL = $MySQLiconn->query("SELECT * FROM relacion WHERE id=".$_GET['edit']);
    $getROW = $SQL->fetch_array();
}

if(isset($_POST['update']))
{
    $SQL = $MySQLiconn->query("UPDATE relacion SET pais='".$_POST['pais']."', inicio='".$_POST['inicio']."', descri='".$_POST['descri']."' WHERE id=".$_GET['edit']);
    header("Location: ../acuerdo-admin/relaciones.php");
}
?>