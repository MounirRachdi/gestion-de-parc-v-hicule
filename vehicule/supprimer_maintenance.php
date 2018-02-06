<?php

include "../conexion.php";
$id=$_GET["id"];
$req="delete from maintenance where id =$id";
$res=mysql_query($req) or die(mysql_error());
if($res)
{
echo "<h3>Sppression valide</h3>";

}


?>

