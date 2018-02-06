<?php

include "../conexion.php";
$id=$_GET["id"];
$req="delete from reparation where id_rep =$id";
$res=mysql_query($req) or die(mysql_error());
if($res)
{
echo "<h3>Sppression valide</h3>";

}


?>
