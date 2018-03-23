<?php 
$top_score=False;




if(isset($_SESSION['perdu_drapeau'])){
if ($_SESSION['perdu_drapeau'] == TRUE) {
$score=$_SESSION['score_drapeau'];
$top_score=TRUE;
}
}

if(isset($_SESSION['perdu_pendu'])){
if ($_SESSION['perdu_pendu'] == TRUE) {
$score=$_SESSION['score_pendu'];
$top_score=TRUE;
}
}

if(isset($_SESSION['perdu_quizz'])){
if ($_SESSION['perdu_quizz'] == TRUE) {
$score=$_SESSION['score_quizz'];
$top_score=TRUE;
}
}



	
	if($top_score== TRUE){
	$jeux=$_SESSION['jeux'];
	$pseudo=$_SESSION['pseudo'];
	$cpt_score=0;
	$cpt_scor_sup=0;
	
	
	$query= $bdd->query("SELECT * FROM topscore where NomJeux like '$jeux' ");
		
		foreach($query as $result){
			$cpt_score++;
		if ($result['Score'] > $score ){
			$cpt_scor_sup++; }
		}
		
	
if(($cpt_scor_sup < 3)and ($score != 0)){
	
		$query= $bdd->query("INSERT INTO topscore (NomJeux,Pseudo,Score)
values(	'".$jeux."' ,'".$pseudo."' ,	'".$score."') ");
	
	
	$_SESSION['top_score']=TRUE;
	}
	else {$_SESSION['affiche_perdu']=TRUE;
		
	}
	
if($cpt_score >2 ){
	$bdd->query("delete from topscore
order by Score
limit 1");
}
	

	

$_SESSION['score_drapeau']=0;
$_SESSION['score_pendu']=0;
$_SESSION['score_quizz']=0;
$_SESSION['perdu_drapeau']=FALSE;
$_SESSION['perdu_pendu']=False;
$_SESSION['perdu_quizz']=False;
$top_score=FALSE;
}



?>