<?php if(isset($_POST['update_pays'])){
	
	
	
	$bdd->query(
	"UPDATE `pays` SET `NomPays` =  '".$_POST['NomPays']."' ,
	`Capitale` =  '".$_POST['Capitale']."' ,
	`Langue` =  '".$_POST['Langue']."' ,
	`Population` =  '".$_POST['Population']."' ,
	
	`PIB` =  '".$_POST['PIB']."' ,
	`IDH` =  '".$_POST['IDH']."' 
	
	
	WHERE `pays`.`IDPays` = '".$_POST['IDPays']."';");
	
	
	} ?>

	<?php if(isset($_POST['insert_pays'])){
		
		$bdd->query(
	"INSERT INTO `pays` (`NomPays`, `Capitale`, `Langue`, `Population`, `PIB`, `IDH`) VALUES ('".$_POST['NomPays']."', '".$_POST['Capitale']."', '".$_POST['Langue']."', '".$_POST['Population']."', '".$_POST['PIB']."', '".$_POST['IDH']."')");
	
	
	
	
	
	
	
	
	} ?>
	
	<?php if(isset($_POST['delete_pays'])){
	
	
	
	$bdd->query(
	"DELETE FROM `pays` 
	WHERE `pays`.`IDPays` = '".$_POST['IDPays']."';");
	
	
	} ?>
	
	

	
	
	<?php //QUESTIONS
	
	if(isset($_POST['update_question'])){
	
	
	
	$bdd->query(
	"UPDATE `questions` SET `textquestion` =  '".$_POST['Question']."' ,
	`reponse` =  '".$_POST['Reponse']."'
	
	
	WHERE `questions`.`IDQuestion` = '".$_POST['IDQuestion']."';");
	
	
	} ?>

	<?php if(isset($_POST['insert_question'])){
		echo "test";
		$bdd->query(
	"INSERT INTO `questions` (`textquestion`, `reponse`) VALUES ('".$_POST['Question']."', '".$_POST['Reponse']."')");
	
	
	
	
	
	
	
	
	} ?>
	
	<?php if(isset($_POST['delete_question'])){
	
	
	
	$bdd->query(
	"DELETE FROM `questions` 
	WHERE `questions`.`IDQuestion` = '".$_POST['IDQuestion']."';");
	
	
	} ?>
	