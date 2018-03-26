<?php 

if(((isset($_SESSION['top_score'])) and ($_SESSION['top_score']==TRUE))or((isset($_SESSION['top_score']))and ($_SESSION['affiche_perdu']==TRUE))){
	If($_SESSION['top_score']==TRUE){$message="Bien joué, tu viens de faire un top score!";$color="green";}
	elseif($_SESSION['affiche_perdu']==TRUE){$message="Bien essayé! Retentes ta chance!";
	$color="red";};

$_SESSION['top_score']=FALSE;
$_SESSION['affiche_perdu']=FALSE;
	
	?>
	
	<div class="mdl-cell mdl-cell--7-col" id="record_cadre" style="margin-left:400px;position:absolute;box-shadow:2px 2px 12px #AAAAAA;padding:10px;background-color:#DDDDDD;">
	<script>
	document.getElementById("cadre_drapeau1").style.opacity = "0.2";
	document.getElementById("cadre_drapeau2").style.opacity = "0.2";
	
	function retabli(){
		document.getElementById("cadre_drapeau1").style.opacity = "1";
	document.getElementById("cadre_drapeau2").style.opacity = "1";
	
	document.getElementById("record_cadre").style.display = "none";
	}
	</script>
	<div class="mdl-grid mdl-cell--12-col" >
		<div class="mdl-cell--7-col center" id="div_topscore" STYLE="font-size:22px;margin-bottom:16px;color:<?php echo $color;?>">
			<b><?php echo $message;?></b>
		</div>
		<div style="cursor:pointer;"><img src="img/close_button.png"  onclick="retabli()" style="height:30px;width:30px;padding:6px;" ></img>
		</div>
	</div>
	
	<div class="mdl-grid mdl-cell--5-col center" style="padding:15px;">
	Votre score :  <?php echo $_SESSION['score_drapeau'];?>
	</div>
	
	<div class="mdl-grid mdl-cell--12-col"  id="div_topscore" STYLE="margin-top:14px;font-size:22px;"><b>Meilleurs Scores</b>
	
	
	
	<div class="mdl-grid mdl-cell--12-col " style="margin-top:25px;">
	<div class="mdl-cell mdl-cell--4-col">Pseudo</div>
	<div class="mdl-cell mdl-cell--2-col">Score</div>
	<div class="mdl-cell mdl-cell--6-col">Date</div>
	</div>
	
	<?php $query=$bdd->query("Select * from topscore where nomjeux like 'drapeaux' limit 0,3 ");
	foreach($query as $result){ ?>
	
	<div class="mdl-grid mdl-cell--12-col">
	<div class="mdl-cell mdl-cell--4-col"><?php echo $result['Pseudo'];?></div>
	<div class="mdl-cell mdl-cell--2-col"><?php echo $result['Score'];?></div>
	<div class="mdl-cell mdl-cell--6-col"><?php echo $result['Date'];?></div>
	</div>
	
	<?php $_SESSION['score_drapeau']=0;?>
	
	
	<?php } ?>
	
	
	</div>
	
	<?php
} 
?>