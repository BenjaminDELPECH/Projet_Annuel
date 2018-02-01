
<?php 
//permet de recuper  $_SESSION
session_start();
if(isset($_GET['pseudo'])){
	//Création d'une variable qui reste malgrès les changement de page
	//Elle est perdue quand on ferme le naviguateur.

	
	$_SESSION['pseudo']=$_GET['pseudo'];
	header('location: menujeux_fr.php');
	
}elseif(isset( $_SESSION['pseudo'])){
	//si le mec a déjà un pseudo on l'envoit directement au menu fr
header('location: menujeux_fr.php');}
	
	
	?>


<!DOCTYPE html>
<html>
<head>
	<title>Projet Fr</title>
	<link rel="stylesheet" href="projet_annuel.css">
</head>

<body >
	<button class="buttonretour" onclick="window.location='index.php'">Retour choix langue</button>

	<div style="margin-top:130px;">
		<span style="background-color:white; padding:7px;text-align:center;"class="centrer" >Veuillez entrer votre pseudo</span>

		<form style="margin-top:15px;"class="centrer" method="get" action="">
			<input type="text" name="pseudo" STYLE="float:left;"></input>
			<input type="submit"  style="float:left;" maxlength="20"></input>
		</form>
	</div>


</body>

</html>
