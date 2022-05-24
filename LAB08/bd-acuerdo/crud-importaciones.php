
<?php
include_once 'conexion.php';

/* code for data insert */
if(isset($_POST['save']))
{

    $pais = $MySQLiconn->real_escape_string($_POST['pais']);
    $product = $MySQLiconn->real_escape_string($_POST['product']);
    $importa = $MySQLiconn->real_escape_string($_POST['importa']);
    $pbi = $MySQLiconn->real_escape_string($_POST['pbi']);

    $Q = $MySQLiconn->query("INSERT INTO import( pais, product, importa, pbi) VALUES('$pais', '$product', '$importa', '$pbi')");
}
if(isset($_GET['del']))
{
    $SQL = $MySQLiconn->query("DELETE FROM import WHERE id=".$_GET['del']);
    header("Location:  ../acuerdo-admin/importaciones.php");
}

if(isset($_GET['edit']))
{
    $SQL = $MySQLiconn->query("SELECT * FROM import WHERE id=".$_GET['edit']);
    $getROW = $SQL->fetch_array();
}

if(isset($_POST['update']))
{
    $SQL = $MySQLiconn->query("UPDATE import SET pais='".$_POST['pais']."', product='".$_POST['product']."', importa='".$_POST['importa']."', pbi='".$_POST['pbi']."' WHERE id=".$_GET['edit']);
    header("Location: ../acuerdo-admin/importaciones.php");
}
?>