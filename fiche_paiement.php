<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" type="text/css" href="../css/compte.css" />
<title>Fiche de paie</title>
</head>

<body>
<?php
include "../conexion.php";
session_start();
$cond=$_SESSION['cond'];
$nbr=$_POST['nbh'];
$prix=$_POST['prix'];
$net=$nbr*$prix;
if(!empty($_POST['prime']))
{
$prime=$_POST['prime'];
$net+=$prime;
}
else
$prime=0;
$reqp="insert into paiement( conducteur, prime, net) values($cond, $prime, $net )";
$r=mysql_query($reqp) or die(mysql_error());
$req="select nom, prenom, CIN from conducteur where id_conducteur=$cond ";
$res=mysql_query($req) or die(mysql_error());
$ligne=mysql_fetch_row($res);
$req3="select net from paiement where conducteur=$cond";
?>
<table border="1" align="center">
<tr>
  <td height="100px" style="border-top:none; border-left:none; border-right:none">Nom & Prenom <br />
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $ligne[0]." ".$ligne[1]?>
  </td>
  <td height="100px" style="border-top:none; border-right:none">N° CIN &nbsp;&nbsp;&nbsp;&nbsp; <?php echo $ligne[2];?>
  </td>
</tr>
<tr><td height="200px" style="border-top:none; border-left:none; border-right:none;">
Nombre d'heurs du travaille &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $nbr;?> heurs
<br /><br />
<?php if(!empty($prime))
{?>
Prime du travail &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $prime ?> TND
<?php  }?>
</td><td style="border-top:none; border-left:none; border-right:none; border-bottom:none"></td></tr>

<tr><td colspan="2"> <strong >Net à payer &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php 
echo $net. " TND";

 ?> </strong></td>
</table>
</body>
</html>
