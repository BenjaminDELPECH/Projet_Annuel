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

//pour connaitre le nombre de pays dans la table et ainsi generer un nb aleatoire dans une range correcte

foreach($bdd->query("SELECT count(*)as nb FROM PAYS")as $result_nb){}


$rand_numb=rand(1,$result_nb['nb']);

foreach($bdd->query("SELECT NomPays FROM PAYS where IDPays = '$rand_numb'")as $result_pays){}


$Pays=strtolower($result_pays['NomPays']);


if(isset($_POST['pays'])){
	$pays_post=strtolower($_POST['pays']);
	if ($pays_post==$Pays){$_SESSION['score_drapeau']++;}
	else{
	$_SESSION['jeux']="pendu";
	$_SESSION['perdu_drapeau']=TRUE;
	 include ('record_topscore.php');
	 $_SESSION['score_drapeau']=0;
	
	}
	
}

?>
<div class="mdl-grid mdl-cell--10-col" style="box-shadow:2px 2px 7px black;padding:30px;" >
<div CLASS="mdl-cell mdl-cell--8-col ">
<form method="post" action="">
<label for="pays">Quel est ce pays?:</label>
<input id="pays" type="text" name="pays"  autofocus></>
<input class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect buttonretour2 color-t"
 type="submit" ></>
</form>
</DIV>
<div  class="mdl-cell"style="margin-top:10px;font-size:34px;">
Score: 
<?php echo $_SESSION['score_drapeau'];?>
</div>

</div>





 
 
 
<div class="mdl-grid" style="margin-top:40px;">

<img   STYLE="height:200px;width:400px;"src="img/<?php echo $rand_numb;?>.png"></img>

</div>

</div>