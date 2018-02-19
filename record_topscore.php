<?php if ($_SESSION['perdu'] == TRUE) {
	
	$score=$_SESSION['score_pendu'];
	$jeu="pendu";
	$pseudo=$_SESSION['pseudo'];
	$cpt_score=0;
	$cpt_scor_sup=0;
	
	
	$query= $bdd->query("SELECT * FROM topscore where NomJeux like 'pendu' ");
		
		foreach($query as $result){
			$cpt_score++;
		if ($result['Score'] > $score ){
			$cpt_scor_sup++; }
		}
	
if($cpt_scor_sup < 6){
		$query= $bdd->query("INSERT INTO topscore (NomJeux,Pseudo,Score)
values(	'".$jeu."' ,'".$pseudo."' ,	'".$score."') ");
	}
	
if($cpt_score >4 ){
	$bdd->query("delete from topscore
order by Score
limit 1");
}
	

	
$_SESSION['perdu']=FALSE;
$_SESSION['score_pendu']=0;

}



?>