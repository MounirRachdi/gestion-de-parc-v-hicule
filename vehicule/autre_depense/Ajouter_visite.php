
<html>
<head>
<title>Visite</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" type="text/css" href="../css/input_style.css">
<style type="text/css">

.bouton
{
background:url(../img/button.gif) ;
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
	background:url(../img/button.gif);
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
		background:url(../img/add.gif) no-repeat 10px 8px;
		text-indent:30px;
		display:block;
	}
	.retour{
		background:url(../img/retour.png) no-repeat 10px 8px;
		text-indent:30px;
		display:block;
	}
  [required] {
   border: 2px;
   border-style:ridge;
}
:required {
   border: 2px ;
    border-style:ridge;
}
</style>
</head>
<body marginheight="40" bgcolor="#ffffff">
<div align="right"><a href="javascript:history.back()">Retour</a>
</div>
<p align="center" class="style2"><strong>- Ajouter visite -</strong></p>
<br>
<form name="ajout_assurance" method="post" action="ajout_visite.php" >
<table align="center" border="0">
	<tr>
		<td height="69" align="right">Date visite :</td>
	  <td ><input type="date" name="date" required></td>
		<td align="right">:
	    </td>
		
	</tr><br>
	
	<tr>
		<td height="46" align="right">Observation </td>
		<td><textarea name="observation" required></textarea></td>
		<td align="right">&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
		<tr>
		<td height="32" align="right">Vehicule :</td>
		<td><?php 
		include "../../conexion.php";
			$requete2 = mysql_query("SELECT * FROM vehicule");
			echo "<select name='matricule'>";
			while($resultat2 = mysql_fetch_array($requete2))
				echo "<option value=\"$resultat2[0]\">$resultat2[0]</option>";
			echo "</select>";
			?></td>
	</tr>
	</table>
<div align="center">	<input type="submit" class="bouton" value="Ajouter">     
<input type="reset" class="bouton" value="Annuler">
</div>
	</form>

</body>
</html>
