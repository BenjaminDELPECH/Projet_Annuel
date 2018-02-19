<div class="mdl-grid mdl-cell--3col center" style="font-size:38px;margin-top:20px;">Meilleurs scores</div>
<div class="mdl-grid mdl-cell--12-col" >

<style>
div{border:0px solid black;}
</style>
	<div class="mdl-cell mdl-cell--4col" style="box-shadow:2px 2px 12px #555555;padding:20px;">
	<div class="mdl-grid mdl-cell--3-col" STYLE="font-size:29px;">Pendu</div>
	
	
	<div class="mdl-grid " style="margin-top:25px;">
	<div class="mdl-cell mdl-cell--4-col">Pseudo</div>
	<div class="mdl-cell mdl-cell--2-col">Score</div>
	<div class="mdl-cell mdl-cell--6-col">Date</div>
	</div>
	
	<?php $query=$bdd->query("Select * from topscore where nomjeux like 'pendu' ");
	foreach($query as $result){ ?>
	
	<div class="mdl-grid ">
	<div class="mdl-cell mdl-cell--4-col"><?php echo $result['Pseudo'];?></div>
	<div class="mdl-cell mdl-cell--2-col"><?php echo $result['Score'];?></div>
	<div class="mdl-cell mdl-cell--6-col"><?php echo $result['Date'];?></div>
	</div>
	
	
	
	<?php } ?>
	
	
	</div>
	
	
	
	
	<div class="mdl-cell mdl-cell--4col" style="box-shadow:2px 2px 12px #555555;padding:20px;">
	<div class="mdl-grid mdl-cell--7-col" STYLE="font-size:29px;">Jeu des drapeaux</div>
	
	
	<div class="mdl-grid " style="margin-top:25px;">
	<div class="mdl-cell mdl-cell--4-col">Pseudo</div>
	<div class="mdl-cell mdl-cell--2-col">Score</div>
	<div class="mdl-cell mdl-cell--6-col">Date</div>
	</div>
	
	<?php $query=$bdd->query("Select * from topscore where nomjeux like 'pendu' ");
	foreach($query as $result){ ?>
	
	<div class="mdl-grid ">
	<div class="mdl-cell mdl-cell--4-col"><?php echo $result['Pseudo'];?></div>
	<div class="mdl-cell mdl-cell--2-col"><?php echo $result['Score'];?></div>
	<div class="mdl-cell mdl-cell--6-col"><?php echo $result['Date'];?></div>
	</div>
	
	
	
	<?php } ?>
	
	
	</div>
	
	
	
	
	
	<div class="mdl-cell mdl-cell--4col" style="box-shadow:2px 2px 12px #555555;padding:20px;">
	<div class="mdl-grid mdl-cell--3-col" STYLE="font-size:29px;">Quizz</div>
	
	
	<div class="mdl-grid " style="margin-top:25px;">
	<div class="mdl-cell mdl-cell--4-col">Pseudo</div>
	<div class="mdl-cell mdl-cell--2-col">Score</div>
	<div class="mdl-cell mdl-cell--6-col">Date</div>
	</div>
	
	<?php $query=$bdd->query("Select * from topscore where nomjeux like 'pendu' ");
	foreach($query as $result){ ?>
	
	<div class="mdl-grid ">
	<div class="mdl-cell mdl-cell--4-col"><?php echo $result['Pseudo'];?></div>
	<div class="mdl-cell mdl-cell--2-col"><?php echo $result['Score'];?></div>
	<div class="mdl-cell mdl-cell--6-col"><?php echo $result['Date'];?></div>
	</div>
	
	
	
	<?php } ?>
	
	
	</div>

</div>