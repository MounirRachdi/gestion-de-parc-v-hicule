<?php
include "../../conexion.php";
$id=$_GET["id"];
$req="delete from vignette where id_vignette=$id";
$res=mysql_query($req) or die(mysql_error());
if($res)
{
echo "<center>Suppression vignette avec succé</center>";
include "recherche_vignette.php";
}




?>