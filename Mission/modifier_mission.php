<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
include "../conexion.php";
$id=$_GET["id"];
$req="select * from mission where id_mission=$id";
$res=mysql_query($req) or die(mysql_error());
$line=mysql_fetch_row($res);
session_start();
$_SESSION["id"]=$id;
?>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Document sans titre</title>
</head>

<body>
<div align="right"><a href="javascript:history.back()">Retour</a>
</div>

<form id="form1" name="form1" method="post" action="confirm_modif.php?id=<?php echo $line[0];?>">
<table border="0" align="center">
  <tr>
  
    <td width="134">Conducteur:</td>
    <td width="168">
    <select name="conducteur">
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
      <input type="text" name="carburant" value="<?php echo $line[6];  ?>" />
    </td>
  </tr>
  <tr>
    <td height="30">Vehicule: </td>
    <td>
	<select name="vehicule">
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
  
		
		<input type="date" name="date_deb" value="<?php echo $line[7];  ?>"   \>
	
    </td>
  </tr>
  <tr>
    <td height="43">Objectife du mission: </td>
    <td>
     <input type="text" name="object" value="<?php echo $line[3];?>"  \></textarea>
    </td>
    <td>Date du fin: </td>
    <td>
   
		
		<input type="date" name="date_fin" value="<?php echo $line[8];  ?>"  >
	
    </td>
  </tr>
  <tr>
    <td>Km_Parcourir:</td>
    <td>
      <input type="text" name="km" value="<?php echo $line[4];  ?>" onchange="changetxt()" />
    </td>
    <td>Type carburant: </td>
    <td><input type="text" name="type_carburant" value="<?php echo $line[5];  ?>"/></td>
  </tr>
  <tr><td colspan="4" style="text-align:center">
   
 <input type="submit" value="Valider" /></td></tr></table></form>
</body>
</html>

