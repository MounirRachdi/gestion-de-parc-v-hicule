<?php
include "../conexion.php"
?>
<html>
<head>
<title>Ajouter un véhicule</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" type="text/css" href="../css/input_style.css">
<style type="text/css">

.bouton
{
background:url(img/button.gif) ;
display:inline-table;
	color:#555555;
	font-weight:bold;
	height:30px;
	line-height:29px;
	margin-bottom:14px;
	text-decoration:none;
	width:150px;
	cursor:hand;
}
a.button{
	background:url(img/button.gif);
	display:block;
	color:#555555;
	font-weight:bold;
	height:30px;
	line-height:29px;
	margin-bottom:14px;
	text-decoration:none;
	width:150px;
}
a:hover.button{
	color:#0066CC;
}

/* -------------------- */
/* CLASSES				*/
/* -------------------- */
	.ajouter{
		background:url(img/add.gif) no-repeat 10px 8px;
		text-indent:30px;
		display:block;
	}
	.retour{
		background:url(img/retour.png) no-repeat 10px 8px;
		text-indent:30px;
		display:block;
	}
  
[required] {
   border: 2px dotted orange;
}
:required {
   border: 2px dotted orange;
}
</style>
</head>
<body marginheight="40" bgcolor="#ffffff">
<div align="right"><a href="javascript:history.back()">Retour</a>
</div>

<p align="center" class="style2"><strong>- Ajouter  reparation -</strong></p>
<br>
<form name="ajout_vehicul" method="post" action="ajouter_reparation.php" >
<table align="center" border="0">
	<tr>
		
		<td width="94" align="right">Date:</td>
	  <td width="182"><input type="date" name="date" required></td>
		<td width="137" height="46" align="right">&nbsp;</td>
		<td width="189">&nbsp;</td>
	</tr><br>
	
	<tr>
		
		<td align="right">cout du reparation:</td>
		<td><input type="text" name="cout" required></td>
		<td align="right">:</td>
		<td>&nbsp;</td>
	</tr>
		<tr>
		<td height="32" align="right">Vehicule :</td>
	<td><?php 
			$requete2 = mysql_query("SELECT * FROM vehicule");
			echo "<select name='vehicule'>";
			while($resultat2 = mysql_fetch_array($requete2))
				echo "<option value=\"$resultat2[0]\">$resultat2[0]</option>";
			echo "</select>";
			?>	</tr>
	</table>
<div align="center">	<input type="submit" class="bouton" value="Ajouter">     
<input type="reset" class="bouton" value="Annuler">
</div>
</form>
<body>
</body>
</html>
