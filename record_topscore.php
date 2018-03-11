<?php if(($_SESSION['perdu_drapeau']==TRUE) or (($_SESSION['perdu_pendu'])==TRUE)){

if ($_SESSION['perdu_drapeau'] == TRUE) {
$score=$_SESSION['score_drapeau'];
$_SESSION['perdu_drapeau']=FALSE;
}

if ($_SESSION['perdu_pendu'] == TRUE) {
$score=$_SESSION['score_pendu'];
$_SESSION['perdu_pendu']=False;}
	
	
	$jeux=$_SESSION['jeux'];
	$pseudo=$_SESSION['pseudo'];
	$cpt_score=0;
	$cpt_scor_sup=0;
	
	
	$query= $bdd->query("SELECT * FROM topscore where NomJeux like '$jeu' ");
		
		foreach($query as $result){
			$cpt_score++;
		if ($result['Score'] > $score ){
			$cpt_scor_sup++; }
		}
		
	
if(($cpt_scor_sup < 6)and ($score != 0)){
		$query= $bdd->query("INSERT INTO topscore (NomJeux,Pseudo,Score)
values(	'".$jeux."' ,'".$pseudo."' ,	'".$score."') ");
	
	
	echo "<script>alert('bravo vous venez de faire un topscore!');</script>";
	}
	else {
		echo "<script>alert('vous avez perdu, reessayez');</script>";
	}
	
if($cpt_score >4 ){
	$bdd->query("delete from topscore
order by Score
limit 1");
}
	

	

$_SESSION['score']=0;

}



?>