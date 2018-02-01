<?php session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Menu</title>
	<link rel="stylesheet" href="projet_annuel.css">
</head>

<body >
<button class="buttonretour" onclick="window.location='index.php'">Retour</button>
<div style="margin-top:130px;">


	<button class="buttonmenu" onclick="window.location='Carteinteractive_fr.php'"
			style="margin-top:10px;">Carte interactive(1)</button>
			<button class="buttonmenu" onclick="window.location='pendu_fr.php'"
			style="">Jeu du Pendu(2)</button>
			<button class="buttonmenu" onclick="window.location='drapeaux_fr.php'"
			style="">Jeu des drapeaux(3)</button>
			<button class="buttonmenu" onclick="window.location='Quiz_fr.php'"
			style="">Quiz(4)</button>
			<button class="buttonmenu" onclick="window.location='meilleurscores_fr.php'"
			style="">Meilleurs scores(5)</button>


</div>


</body>

</html>