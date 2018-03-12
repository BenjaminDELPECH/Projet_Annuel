<?php if(!isset($_SESSION['langue'])){
	header('location:index.php'); //index -> changer langue
} ?>

<?php if(!isset($_SESSION['pseudo'])){
	header('location:page_pseudo_fr.php');
} ?>