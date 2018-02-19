<?php session_start();
$_SESSION['title']="Top scores";
?>


<?php include('header.php');?>

	<button class=" 
	mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect buttonretour" onclick="window.location='menujeux_fr.php'"
			style="margin-top:10px;">Retour</button>
	
	
	<?php include('cadre_meilleurscores_fr.php');?>
	

  <?php include('footer.php');?>