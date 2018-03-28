<?php if(isset($_POST['update_pays'])){
	
	
	
	$requete=$bdd->prepare(
	"UPDATE pays SET NomPays =  :NomPays ,
	`Capitale` =  :Capitale ,
	`Langue` =  :Langue ,
	`Population` =  :Population ,
	`DateEntreeUE` =  :DateEntreeUE ,
	`PIB` =  :PIB,
	`IDH` =  :IDH 
	WHERE `pays`.`IDPays` = '".$_POST['IDPays']."';");
	
	$requete->bindParam(':NomPays',$_POST['NomPays'],PDO::PARAM_STR);
	$requete->bindParam(':Capitale',$_POST['Capitale'],PDO::PARAM_STR);
	$requete->bindParam(':Langue',$_POST['Langue'],PDO::PARAM_STR);
	$requete->bindParam(':Population',$_POST['NomPays'],PDO::PARAM_STR);
	
	
	$requete->bindParam(':DateEntreeUE',$_POST['DateEntreeUE'],PDO::PARAM_STR);
	$requete->bindParam(':PIB',$_POST['PIB'],PDO::PARAM_STR);
	$requete->bindParam(':IDH',$_POST['IDH'],PDO::PARAM_STR);
	$requete->execute();
	
	
	
	} ?>

	<?php if(isset($_POST['insert_pays'])){
		
		$requete=$bdd->prepare(
	"INSERT INTO `pays` (`NomPays`, `Capitale`, `Langue`, `Population`,`DateEntreeUE`, `PIB`, `IDH`) VALUES (:NomPays, :Capitale, :Langue, :Population,:DateEntreeUE, :PIB, :IDH)");
$requete->bindParam(':NomPays',$_POST['NomPays'],PDO::PARAM_STR);
	$requete->bindParam(':Capitale',$_POST['Capitale'],PDO::PARAM_STR);
	$requete->bindParam(':Langue',$_POST['Langue'],PDO::PARAM_STR);
	$requete->bindParam(':Population',$_POST['NomPays'],PDO::PARAM_STR);

	
	$requete->bindParam(':DateEntreeUE',$_POST['DateEntreeUE'],PDO::PARAM_STR);
	$requete->bindParam(':PIB',$_POST['PIB'],PDO::PARAM_STR);
	$requete->bindParam(':IDH',$_POST['IDH'],PDO::PARAM_STR);
	$requete->execute();
	
	
	
	
	
	
	
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
	