<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Document sans nom</title>
<style type="text/css">
<!--
.Style4 {color: #FF0000; font-style: italic; font-size: 36px;}
-->
.p {
       text-decoration: blink;
}
.Style5 {font-size: 18px}
</style>
<script type="text/javascript">

function blink(ob) 
{ 
if (ob.style.visibility == "visible" ) 
{ 
ob.style.visibility = "hidden"; 
} 
else 
{ 
ob.style.visibility = "visible"; 
} 
} 
periode1=setInterval("blink(bl)",500); 
periode2=setInterval("blink(bl2)",500);
/*function stop(obb)
{
if(obb.style.visibility=="visible")
obb.style.visibility="hidden");
}*/
</script> </head>

<body style="background-color:#e4dfd2;">
<h1 align="center" class="Style4"><img src="image/entete.jpg" /> Gestion du parc véhicules de la DMM <img src="image/entete.jpg" /> </h1>

<?php 
/*
include "conexion.php";
$req="select Matricule, Date_fin as date from assurance where DATEDIFF(Date_fin,CURDATE()) between 1 and 7";
$res=mysql_query($req) or die(mysql_error());

while($line=mysql_fetch_row($res))
{ 
?>
<div align="right" class="Style5" id="bl" style="visibility: visible" onmouseover="this.stop()"><font color=red>Attention Assurance de vehicule <?php echo $line[0]; ?> </font></div> 


<?php } 

$req2="select Matricule, Date_fin from vignette where DATEDIFF(Date_fin,CURDATE()) between 1 and 7";
$res2=mysql_query($req2) or die(mysql_error());

while($line1=mysql_fetch_row($res2))
{
?>
<div align="right" class="Style5" id="bl2" style="visibility: visible" onmouseover="clearInterval(periode1); clearInterval(periode2)"><font color=red>Attention Vignette de vehicule <?php echo $line1[0]; ?> </font></div> 

<?php
}*/
?>
</body>
</html>
