<html>
<head>
<style type="text/css">
<!--
.Style1 {
	color: #CC0033;
	font-weight: bold;
}
.Style2 {color: #CC0033}
-->
 

.input_label {
    -moz-border-radius: 5px 0 0 5px;
    -webkit-border-radius: 5px 0 0 5px;
    background: #EEE;
    border: 1px solid #CCC;
    border-radius: 5px 0 0 5px;
    border-right: 1px solid #FFF;
    display: inline-block;
    height: 30px;
    width: 100px;
    line-height: 36px;
    margin-right: 0;
   /* width: 80px !important;*/
}

#contact input[type=text],input[type='password'] {
    -moz-border-radius: 0 5px 5px 0;
    -webkit-border-radius: 0 5px 5px 0;
    background: #FFF;
    border: 1px solid #CCC;
    border-radius: 0 5px 5px 0;
    color: #333;
    font: 13px/1.6 'Helvetica Neue', Arial, 'Liberation Sans', FreeSans, sans-serif;
    height: 30px;
    line-height: 30px;
    margin: 0 8px 0 -5px;
    outline: none;
    padding: 0 3px;
    width: 150px;
}



label {
    display: block;
    height: 30px;
    line-height: 30px;
    padding: 0 0 0 30px;
}
.Bouton
{
	background-color:#333333;
	-moz-border-radius:5px;
	-webkit-border-radius:5px;
	border-radius:5px;
	border:1px solid;/* #337bc4;*/
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:arial;
	font-size:12px;
	font-weight:bold;
	padding:10px 24px;
	text-decoration:none;
	/*text-shadow:0px 1px 0px #528ecc;*/
            margin-left: 23px;
        }
.Bouton:hover {
	
	background-color:#009900;
}
.Bouton:active {
	position:relative;
	top:1px;
}
       .fieldset{
	   text-align:center;
	   margin-left:300px;
	   margin-right:300px;
	   }
</style>

</head>
<body style="background-image: url(./images/ceff.jpg);">
<form action="login.php" method="post">
<fieldset title="Connexion" class="fieldset">
	<div class="Style1" style="text-align: center;">
	<font face="Albert" size="5"><br>
		<span style="font-style: italic; font-family: Elephant;">Gestion du parc véhicule de </span>
	</font>
	<font size="5">
		<span style="font-style: italic; font-family: Elephant;">DMM</span>
	</font><br><br>
	</div>
	<!--<table align="center" border="0">
    <tbody>
		<tr style="font-weight: bold; font-family: Baskerville Old Face;" align="center">
	        <td style="width: 157px;"><span class="Style2">Nom :</span></td>
		</tr>
		<tr align="center">
			<td><input name="login" maxlength="250" type="text"></td>
		</tr>
		<tr style="font-weight: bold; font-family: Baskerville Old Face;" align="center">
			<td style="width: 157px;"><span class="Style2">Mot de passe :</span></td>
		</tr>
		<tr align="center">
			<td><input name="pass" maxlength="10" type="password"></td>
		</tr>
		<tr>
			<td style="text-align: center;"><input value="Entrer" type="submit"></td>
		</tr>
	</tbody>
	</table><br><br><br>-->
	<table align="center" border="0">
	<tr><td><div id="contact"> 
        <div class="input_label user"> 
            <label for="login"> 
                Login</label></div> 
        <input name="login" type="text" id="login" class="name" size="30" required> </div></td></tr>
    </div> 
<br> <tr><td>
<div id="contact"> 
        <div class="input_label user"> 
            <label for="pwd"> 
                Password</label></div> 
        <input name="pass" type="password" id="pass" class="name" size="30" required> <td></tr></div>
    </div> 
	<tr>
			<td style="text-align: center;"><input value="Entrer" type="submit" class="Bouton"></td>
		</tr>
</table></fieldset>
</form>
</body>
</html>
