<?php
include "../../conexion.php";
$id=$_GET["id"];
$req="delete from visite where id_visite=$id";
$res=mysql_query($req) or die(mysql_error());
if($res)
{
echo "suppression de visite fait avec succées";
include "recherche_visite.php";

}


?>