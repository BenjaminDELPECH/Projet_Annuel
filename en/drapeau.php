<?php session_start();
$_SESSION['title']="Pendu";
?>
	<?php include('header.php');?>
	<?php include('restrictions.php');?>
	
	
	<button class=" 
	mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect buttonretour color-t" onclick="window.location='menujeux_fr.php'"
			style="margin-top:10px;">Retour</button>
	
	

	
<?php
	
	
	include('cadre_pendu_fr.php');
	
include('footer.php');?>