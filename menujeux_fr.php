<?php session_start();

//permet de recuper  $_SESSION
session_start();
if(isset($_GET['pseudo'])){
	//Création d'une variable qui reste malgrès les changement de page
	//Elle est perdue quand on ferme le naviguateur.

	
	$_SESSION['pseudo']=$_GET['pseudo'];
}
	
	
	?>




<!DOCTYPE html>
<html>
<head>
	<title>Menu</title>
	<link rel="stylesheet" href="projet_annuel.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">

<link rel="stylesheet" href="projet_annuel.css">
<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
<script type="text/javascript" src="mapper.js"></script>
	<link rel="stylesheet" href="projet_annuel.css">
</head>

<body >
<div class="mdl-grid mdl-grid--no-spacing">

		
			<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header
            mdl-layout--fixed-tabs mdl--top">
  <header class="mdl-layout__header background-1">
    
	<div class="mdl-layout__header-row">
    <!-- Title -->
    
    </div>
    <!-- Tabs -->
   
  </header>
  <div class="mdl-layout__drawer">
		<nav class="mdl-navigation">
        <a class="mdl-navigation__link box-shadow-1" href="">Index</a>
        <a class="mdl-navigation__link box-shadow-1" href="">Changer la langue</a>
        <a class="mdl-navigation__link box-shadow-1" href="">Changer de pseudo</a>
        <a class="mdl-navigation__link box-shadow-1" href="">Admin</a>
      </nav>
  </div>
  
  
 
    
	<div class="center div-style-1 background-2">	
	<!-- contenu-->
			<div style="">
<nav class="mdl-navigation">
<a class="mdl-navigation__link box-shadow-1" href="">Index</a>
		
		<button  onclick="window.location='Carteinteractive_fr.php'"
			style="margin-top:10px;">Carte interactive(1)</button>
			<button  onclick="window.location='pendu_fr.php'"
			style="">Jeu du Pendu(2)</button>
			<button onclick="window.location='drapeaux_fr.php'"
			style="">Jeu des drapeaux(3)</button>
			<button  onclick="window.location='Quiz_fr.php'"
			style="">Quiz(4)</button>
			<button  onclick="window.location='meilleurscores_fr.php'"
			style="">Meilleurs scores(5)</button>

</nav>
</div>
	
	

</div>
			
</div>
			
</div>
		
		
		



</body>

</html>