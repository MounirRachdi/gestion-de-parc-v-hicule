<?php
include "../conexion.php";
$id=$_GET["code"];
$req="delete from mission where id_mission=$id";
$res=mysql_query($req) or die(mysql_error());
if($res)
{
echo "<h3>Mission supprimée!</h3>";
include "resultat_recherche.php";

}
/*header("location:mission.php");*/



?>