<style>
div{border:0px solid black;font-size:24px;}
input[type=text]{
    width: 20%;
    padding: 7px 10px;
    
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
	FONT-size:24px;
}


</style>

<?php 
if(!isset($_SESSION['essai_restant'])or empty($_SESSION['essai_restant'])){
	$_SESSION['essai_restant']=3;
}

if (isset($_POST['reponse'])){
	
	$postrep=strtolower($_POST['reponse']);
$repchoose=strtolower($_SESSION['repchoose_fr']);

	
	if($postrep==$repchoose){
		$_SESSION['score_quizz']++;
		unset($_SESSION['repchoose_fr']);
		header('location:quizz.php');
	}else{
		$_SESSION['essai_restant']=$_SESSION['essai_restant']-1;
		
		if($_SESSION['essai_restant']<1){
		$_SESSION['perdu_quizz']=TRUE;
		$_SESSION['jeux']="quizz";
		
		$_SESSION['essai_restant']=
	$_SESSION['essai_restant']=3;
	unset($_SESSION['repchoose_fr']);
	unset($_SESSION['essai_restant']);
		header('location:quizz.php');
		}
	}
}


if(!isset($_SESSION['repchoose_fr'])or empty($_SESSION['repchoose_fr'])){
foreach($bdd->query("SELECT count(*)as nb FROM questions")as $result_nb){}


$rand_numb=rand(1,$result_nb['nb']);


foreach($bdd->query("SELECT * FROM questions 
LIMIT $rand_numb;")as $result_pays){
	
$_SESSION['question_fr']=strtolower($result_pays['textquestion']);
$_SESSION['repchoose_fr']=strtolower($result_pays['reponse']);
}



}


?>


<div class="mdl-grid mdl-cell--12-col" id="cadre_quizz1" style="box-shadow:2px 2px 7px black;padding:30px;" >
<div CLASS="mdl-cell mdl-cell--9-col ">
<form method="post" action="">
<label for="pays"><?php echo $_SESSION['question_fr'];?></label>
<input id="pays" type="text" name="reponse"  autofocus></>
<input class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect buttonretour2 color-t"
 type="submit" ></>
</form>
</DIV>
<div  class="mdl-cell"style="margin-top:10px;font-size:34px;">
Score: 
<?php IF(isset($_SESSION['score_quizz'])){
echo $_SESSION['score_quizz'];
} ?>
</div>
<div  class="mdl-cell"style="margin-top:10px;font-size:17px;">
Nombre d'essais restant: 
<?php echo $_SESSION['essai_restant']-1;?>
</div>

</div>





 
 
 

<?php include('partie_terminee_events_quizz.php');?>




