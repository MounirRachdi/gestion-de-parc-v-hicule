<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Paiement</title>
<link rel="stylesheet" type="text/css" href="../css/compte.css" />
<style type="text/css">
td
{
text-align:center;}
.number
{
border: 1px solid #c4c4c4; 
    height: 25px; 
    width: 180px; 
    font-size: 13px; 
    padding: 4px 4px 4px 4px; 
    border-radius: 8px;
    -moz-border-radius: 8px;
    -webkit-border-radius: 8px;
    box-shadow: 0px 0px 8px #d9d9d9; 
    -moz-box-shadow: 0px 0px 8px #d9d9d9; 
    -webkit-box-shadow: 0px 0px 8px #d9d9d9;
}
.submit
{
background:url(../image/button.gif) ;
display:block;
	color:#555555;
	font-weight:bold;
	height:30px;
/*	line-height:29px;
	margin-bottom:14px;*/
	text-decoration:none;
	width:150px;
	cursor:hand;
}
.Style1 {font-family: "Times New Roman", Times, serif}
.Style3 {color: #6600CC}
</style>
</head>

<body>
<div align="right"><a href="javascript:history.back()">Retour</a>
</div>

<div align="center" class="Style3"><font size="7"><b><span class="style Style1">&nbsp Gére</span></b></font><font size="7"><b><span class="style Style1">r paiement conducteur &nbsp</span></b></font> </div>
<br>


<?php
include "../conexion.php";
$req="select * from conducteur";
$res=mysql_query($req) or die (mysql_error());



?>

<form method="get" action="paiement.php" name="f2">
<table border="0" align="center" cellspacing="20" >
<tr><td>Mois</td><td>
<select name="mois" id="mois" required >
<option>Choisir un mois</option>
<option value="1" >Janvier</option>
<option value="2">Février</option>
<option value="3">Mars</option>
<option value="4">Avril</option>
<option value="5">Mai</option>
<option value="6">Juin</option>
<option value="7">Juillet</option>
<option value="8">Aout</option>
<option value="9">Septembre</option>
<option value="10">Octobre</option>
<option value="11">Novembre</option>
<option value="12">décembre</option>
</select>
</td></tr>
<tr><td> Conducteur 
</td><td><select name="conducteur" id="conducteur" onchange="this.form.submit()" >
<option selected="selected">Choisir conducteur</option>
<?php
while($ligne=mysql_fetch_row($res))
{
?>

<option value="<?php echo $ligne[0]?>"><?php echo $ligne[1]." ".$ligne[2]?></option>
<?php
}
?>

</select></td></tr></table>
</form>


<form method="post" action="fiche_paiement.php" name="F1"/>
<table border="0" align="center" cellspacing="20">

<tr><td>Nombre d'heurs du travail</td>
<td>
<?php 
if(!empty($_GET['conducteur']))
{$cond=$_GET['conducteur'];
$mois=$_GET['mois'];
session_start();
$_SESSION['cond']=$cond;

$req2="select sum(TIMESTAMPDIFF(HOUR,Date_debut,Date_fin)) from conducteur c, pointage p where c.id_conducteur=p.id_conducteur and month(Date_fin)=$mois and c.id_conducteur=$cond";
$result=mysql_query($req2) or die(mysql_error());
$line=mysql_fetch_row($result);

}
?>
<input type="text" name="nbh" value="<?php if(!empty($line[0])) echo $line[0]; else echo '0 heurs'; ?>" readonly="true" />
</td>

<td>
Prix de l'heure
</td>

<td>
<input type="number" step="any" name="prix" class="number" required  />
</td>
</tr>
<tr><td>
Prime 
</td>
<td>
<input type="number" step="any" name="prime" class="number"  />
</td><td></td><td></td>
</tr>
<tr><td></td><td align="center"><input type="submit" value="Valider"  class="submit"  /><td></td>
</td></tr>
</table>
</form>
</body>
</html>
