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



$letter=$_POST['letter'];


if(!isset($_SESSION['Pays_choose'])or empty($_SESSION['Pays_choose'])){
foreach($bdd->query("SELECT count(*)as nb FROM PAYS")as $result_nb){}


$rand=rand(1,$result_nb['nb']);

foreach($bdd->query("SELECT NomPays FROM PAYS where IDPays = '$rand';")as $result){}

$_SESSION['Pays_choose']= $result['NomPays'];
}

$longueur_mot = strlen($_SESSION['Pays_choose']);
?>
<div class="mdl-grid mdl-cell--10-col" id="cadre_pendu1" style="box-shadow:2px 2px 7px black;padding:30px;" >
<div CLASS="mdl-cell mdl-cell--8-col ">
<form method="post" action="">
<label for="letter">Proposez une lettre:</label>
<input id="letter" type="text" name="letter" maxlength="1" autofocus></>
<input class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect buttonretour2 color-t"
 type="submit" ></>
</form>
</DIV>
<div  class="mdl-cell"style="margin-top:10px;font-size:34px;">
Score: 
<?php 
echo $_SESSION['score_pendu'];?>
</div>

</div>
<?php 

if(!isset($_SESSION['score_pendu'])){
	$_SESSION['score_pendu']=0;
}

if(!isset($_SESSION['tableau_indices'])){
$_SESSION['tableau_indices']=array();
$_SESSION['tab_letter']=array();
$_SESSION['nb_t_rest']=11;}
$tab_ind=$_SESSION['tableau_indices'];
$tab_letter=$_SESSION['tab_letter'];



?>

<?php 
$deja_joue=FALSE;

foreach($tab_letter as $elmt){
	if($elmt == $letter) {$deja_joue=TRUE;}
	
	
}

if($deja_joue==FALSE){
array_push($tab_letter,$letter);
$_SESSION['tab_letter']=$tab_letter;
}

$bonne_lettre=FALSE;
for($i = 1; $i < ($longueur_mot-1); $i++){
	$existe_deja=False;
	if ($letter==$_SESSION['Pays_choose'][$i]) {
		
		foreach($tab_ind as $ind){
			if ($i == $ind){
				$existe_deja=TRUE;
				$bonne_lettre=TRUE;
				}
			}
	if ($existe_deja ==FALSE){
		array_push($tab_ind,$i);
		
		$bonne_lettre=TRUE;
	$_SESSION['tableau_indices']=$tab_ind;
	}
	
}
}


if(($bonne_lettre==FALSE)and (isset($letter))){
	$_SESSION['nb_t_rest']=($_SESSION['nb_t_rest']-1);
}

$taille_tab= count($tab_ind);

//lorsque la partie est terminée
if (($taille_tab == ($longueur_mot -2))or ($_SESSION['nb_t_rest']==1)){
	
	
	unset($_SESSION['tableau_indices']);
	unset($_SESSION['Pays_choose']);
	
	
}

if($taille_tab == ($longueur_mot -2)){
	$_SESSION['gagner']=TRUE;
	
	$_SESSION['score_pendu']=($_SESSION['score_pendu'])+($_SESSION['nb_t_rest']);
unset($_SESSION['nb_t_rest']);
header('location:pendu.php');

	}elseif($_SESSION['nb_t_rest']==1){
		
	
	$_SESSION['jeux']="pendu";
	$_SESSION['perdu_pendu']=TRUE;
	
	unset($_SESSION['nb_t_rest']);
	header('location:pendu.php');

}




?> <div class="mdl-grid mdl-cell--10-col" id="cadre_pendu2" style="margin-top:50px;" >
<div class="mdl-cell mdl-cell--2-col"></div>
		<div class="mdl-cell mdl-cell--4-col" STYLE="font-size:40px;">
<?php
	
echo $_SESSION['Pays_choose'][0];
for($i = 1; $i <($longueur_mot-1); $i++){
	$verif=FALSE;
	foreach($tab_ind as $indice){
	if($i == $indice) { 
	echo $_SESSION['Pays_choose'][$i];
	$verif = TRUE;}
	}
	if ($verif ==FALSE){ echo " - ";}
	} 	
echo $_SESSION['Pays_choose'][($longueur_mot-1)];

?></div>
	



 

 <div  id="cadre_pendu3"> <div style="font-size:27px;">Lettres déjà choisies:</div>
 <div style="margin-top:22px;font-size:30px;">
 <?php foreach($tab_letter as $let){
	 echo $let." ";
 }
 
 ?> </div>
 </div>
</div>
 
 
 

<div id="cadre_pendu4" class="mdl-grid mdl-cell--8-col center" style="margin-top:60px;">
<img  src="img/pendu_<?php echo $_SESSION['nb_t_rest'];?>.png"></img>
</div>

<?php include('partie_terminee_events_pendu.php');?>