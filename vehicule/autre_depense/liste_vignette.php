<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Assurance</title>
<script language="Javascript" >
function imprimer(){window.print();}
</script>
<link rel="stylesheet" type="text/css" href="../css/tableau.css" />
<style type="text/css">
body
{
padding:100px 0 0 0;}
tr:hover
{
background-image:url(../../image/fond2.png);}
.blink {
    text-decoration: blink; 
    color: red;
	height:100%;
	width:100%;
	
	
}
.Style1 {font-family: "Times New Roman", Times, serif}
</style>
<script type="text/javascript"> 
if ( document.all || navigator.userAgent.toLowerCase().indexOf("webkit") > -1) { 

        function blink_show() { 
                blink_tags = document.getElementsByTagName('span'); 
                blink_count = blink_tags.length; 
                for ( i = 0; i < blink_count; i++ ) { 
                   if (blink_tags[i].className == 'blink') {
                        blink_tags[i].style.visibility = 'visible';
                 }
                } 
                hid=window.setTimeout( 'blink_hide()', 500 ); 
        } 

        function blink_hide() { 
                blink_tags = document.getElementsByTagName('span'); 
                blink_count = blink_tags.length; 
                for ( i = 0; i < blink_count; i++ ) { 
                   if (blink_tags[i].className == 'blink') {
                        blink_tags[i].style.visibility = 'hidden'; 
                    }
                } 
              visib=window.setTimeout( 'blink_show()', 500 ); 
        } 

        window.onload = blink_show; 

}    
</script>
</head>

<body>
<div align="right"><a href="javascript:history.back()">Retour</a>
</div>

<div align="center"><font color="#2A1FAA" size="7"><b><span class="style Style1">&nbsp Liste des vignettes &nbsp</span></b></font> </div>
<br>
<div align="center">


<?php
include "../../conexion.php";
$req=" select * FROM vignette";
$res=mysql_query($req) or die(mysql_error());
//$ligne=mysql_fetch_row($res);
//session_start();
//$_SESSION["id"]=$ligne[0];
?>

<TABLE border="1" align="center" class="tableau">
    <tr class="style3" >
	<th width="100" align="center">V&eacute;hicule</th>
			<th width="100" align="center">Date paiement</th>
		    <th width="100" align="center">date de fin</th>
		    <th width="100" align="center">cout vignette </th>
            <th width="100" align="center">Modifier</th>
		<th width="100" align="center">Supprimer</th>
		
		
		
	
		
		
	</tr>

<?php
$date = getdate(); 
$i=0;

while ($ligne=mysql_fetch_row($res))
{
if(date('Y-m-d', strtotime($ligne[3])) <date("Y-m-d", time() + 7 * 24 * 60 * 60 ) && date('Y-m-d', strtotime($ligne[3]))>= date( "Y-m-d", time() ))
{?>

<tr  onmouseover="clearTimeout(visib), clearTimeout(hid)">
	
		<td align="center" ><span class="blink"><?php echo $ligne[1];?></span></td>

	
		<td align="center"><span class="blink"> <?php echo $ligne[2];?></span></td>

	

		<td align="center"><span class="blink"><?php echo $ligne[3];?></span></td>

		<td align="center"><span class="blink"><?php echo $ligne[4];?></span></td>
		
		
	<td align='center'><a href='modifier_assurance.php?id=<?php echo $ligne[0];?>' ><span class="blink"><img src='../../image/modifier.png' /></span></a></td>
<td align='center'>
<a href='supprimer_assurance.php?id=<?php echo $ligne[0];?>'><span class="blink"><img src='../../image/supp.png' /></span></a></</td>
</tr>
	
	<?php
	
	}
	else
	{?>
	<tr>
	<td align="center" ><?php echo $ligne[1];?></td>

	
		<td align="center"> <?php echo $ligne[2];?></td>

	

		<td align="center"><?php echo $ligne[3];?></td>

		<td align="center"><?php echo $ligne[4];?></td>
		
		
	<td align='center'><a href='modifier_assurance.php?id=<?php echo $ligne[0];?>' ><img src='../../image/modifier.png' /></a></td>
<td align='center'>
<a href='supprimer_assurance.php?id=<?php echo $ligne[0];?>'><img src='../../image/supp.png' /></a></td>

	<?php
	}echo "</tr>";
	/*echo date('Y-m-d', strtotime($ligne[4]));
	echo "<br>";*/
	}
	/*echo date( "Y-m-d", time() );
	echo "<br>";*/
	
	
	?>
</TABLE>
	<br /><br /><br />
	<div align="center" >
	<!--<img src="../../image/Capture.PNG" />: Probleme d'assurance-->
	</div>
</body>
</html>
