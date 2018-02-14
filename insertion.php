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
	
	
	
	
	
	
	
	
	}
	