<?php
include "../conexion.php";
$id=$_GET["code"];
$req="delete from conducteur where id_conducteur=$id";
$res=mysql_query($req);
if($res)
{
echo "<center>suppression fait avec succée</center>";
include "recherche_conducteur.php";

}
else
echo "erreur de suppression";



?>