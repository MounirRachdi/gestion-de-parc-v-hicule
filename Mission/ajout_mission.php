<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Document sans nom</title>
<?php
include "../conexion.php";

?>
<script type="text/javascript">
function changetxt()
{
document.form1.Qte_carburant.value=((6.5/100)*document.form1.km_approximative.value)*2;


}
	</script>
	<link rel="stylesheet" type="text/css" href="../css/input_style.css" />
	<style type="text/css">
	
	
	 
	</style>
</head>

<body>
<div align="right"><a href="javascript:history.back()">Retour</a>
</div>

<form id="form1" name="form1" method="post" action="Ajouter_mission.php">
<table border="0" align="center">
  <tr>
  
    <td width="134">Conducteur:</td>
    <td width="168">
    <select name="id_conducteur" >
	<?php
	$req1="select id_conducteur, nom from conducteur";
	$res1=mysql_query($req1);
	while($lig1=mysql_fetch_row($res1))
	{
	echo"<option value=".$lig1[0].">".$lig1[1]."</option>";
	}
	
	?>
      </select>
        
     </td>
    <td width="95">Qt&eacute;_Carburant:</td>
    <td width="197">
      <input type="text" name="Qte_carburant"  />
    </td>
  </tr>
  <tr>
    <td height="30">Vehicule: </td>
    <td>
	<select name="Matricule">
	<?php
	$req="select Matricule from vehicule";
	$res=mysql_query($req);
	while($lig=mysql_fetch_row($res))
	{
	echo"<option value=".$lig[0].">".$lig[0]."</option>";
	}
	
	?>
      </select>
    
    <td>Date de debut:</td>
    <td>
  
		
		<input type="date" name="Date_debut"  required \>
	
    </td>
  </tr>
  <tr>
    <td height="43">Objectife du mission: </td>
    <td>
      <textarea name="objectif_miss" required \></textarea>
    </td>
    <td>Date du fin: </td>
    <td>
   
		
		<input type="date" name="Date_fin" required >
	
    </td>
  </tr>
  <tr>
    <td>Km_approximative:</td>
	
    <td>
      <input type="text" name="km_approximative" onchange="changetxt()" required/>
    </td>
	 <tr>
    <td>compteur_initial:</td>
	
    <td>
      <input type="text" name="compteur_initial"  required/>
    </td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr><td colspan="4" style="text-align:center">
   
 <input type="submit" value="Valider" /></td></tr></table></form>
</body>
</html>
