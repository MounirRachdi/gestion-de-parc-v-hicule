
<?php
include("conexion.php");
if(isset($_POST) && !empty($_POST['login']) && !empty($_POST['pass']) ) {
	extract($_POST);
	// $log=mysql_real_escape_string($_POST['login']);
	// on recup�re le password de la table qui correspond au login du visiteur
	$sql = "select * from admin where login='".$login."'";
	$req = mysql_query($sql) or die('error');
	$data = mysql_fetch_assoc($req);
	if($data['password'] != $pass) 
	{
	?>
	<script language="JavaScript">
	alert("Le login ou le mot de passe que vous avez saisie est erron�. Merci de recommencer");
	window.location.replace("index.html");// On inclut le formulaire d'identification
	</script>
	<?php
	//Une fen�tre d'alerte s'affiche lorsque le login ou le mot de passe est invalide et renvoit vers la page pour se logger
	}
	else {
	session_start(); //on d�marre une session
	$_SESSION['login'] = $login; //la variable de session $_SESSION['login'] r�cup�re le login saisi
	header("Location: accueil.html");// lien vers la page d'accueil de l'espace priv� 
	}
}
else {
	?>
	<script language="JavaScript">
	alert("Vous avez oubli� de remplir un champ. Merci de recommencer");
	window.location.replace("index.html");
	</script>
	<?php
//Une fen�tre d'alerte s'affiche lorsque le login ou le mot de passe est vide et renvoit vers la page pour se logger	
}
?>
