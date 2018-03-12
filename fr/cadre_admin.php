<div class="mdl-cell mdl-cell--12-col ">

	

<div class="mdl-cell mdl-cell--7-col center demo-card-wide mdl-card mdl-shadow--2dp" style="height:auto;margin-top:15px;min-width:700px;">
  <STYLE>
  .mdl-textfield {
  width: 202px;
 
}
  </style>
  
  
  
  
  <div class="mdl-card__title">
    <h2 class="mdl-card__title-text">Insèrer/modifier une question</h2>
  </div>
  
    <div class="mdl-card__supporting-text">

  <br><br>
    
	
	<table>
		
      
		<tbody>
		<form method="POST" action="">
		
	
	<tr><td> 
		<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label"  style="width:250px;">
    <input class="mdl-textfield__input" type="text" id="sample3" name="Question" VALUE="">
    <label class="mdl-textfield__label" for="sample3">Question...</label>
  </div></td>
  
    <td> 
		<div class="mdl-cell mdl-textfield mdl-js-textfield mdl-textfield--floating-label"  style="width:250px;">
    <input class="mdl-textfield__input" type="text" id="sample3" name="Reponse" VALUE="">
    <label class="mdl-textfield__label" for="sample3">Réponse..</label>
  </div></td>
  
  
	</tr>
	
	
	
	</tbody>
	</table>
 
	  <input type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect button-3 color-t" value="Inserer"
name="insert_question" 	  >
	</form>
	  
      
    
	  
  
</input>
</form>
  </div>
  
  
  <div class="mdl-card__supporting-text" STYLE="margin-top:15px;">
  
  <b>Modifier des pays</b>
  <br><br>
    

      
		
		
		<?php foreach($bdd->query("SELECT * FROM questions")as $result){	?>
		<form method="POST" action="">
	<input type="hidden" name="IDQuestion" value="<?php echo $result['IDQuestion'];?>"></input>
	
		<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width:250px;">
    <input class="mdl-textfield__input" type="text" id="sample3" name="Question" value="<?php echo $result['textquestion'];?>" >
    
  </div>
  
  
		<div class="mdl-cell mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width:250px;">
    <input class="mdl-textfield__input" type="text" id="sample3" name="Reponse" value="<?php echo $result['reponse'];?>" >
  
  </div>
			
			
 <input type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect button-4 color-t" value="Modifier" name="update_question">
  
</input>
 <input type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect button-4 color-t" value="Supprimmer" name="delete_question">
  
</input>
	
	</form>
	<?php } ?>
	
 
	  
	  
      
    
</form>
  </div>
  
  <BR><BR>
  

  
  
  
  
</div>

  <!-- FAB button with ripple -->
  
</div>



	
	
	
	
	
	
	
	
	<div class="mdl-cell mdl-cell--9-col center demo-card-wide mdl-card mdl-shadow--2dp" style="height:auto;margin-top:15px;min-width:700px;">
  <STYLE>
  .mdl-textfield {
  width: 102px;
 
}
  </style>
  
  
  
  
  <div class="mdl-card__title">
    <h2 class="mdl-card__title-text">Insèrer/modifier un pays</h2>
  </div>
  
    <div class="mdl-card__supporting-text">
<b>Indiquez les informations du Pays à ajouter ( Population et PIB : 53,543,345 = 53M, 67,543 = 68K) (IDH : 0.8957 = 0.9)</b>
  <br><br>
    
	
	<table>
		
      
		<tbody>
		<form method="POST" action="">
		
	
	<tr><td> 
		<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input class="mdl-textfield__input" type="text" id="sample3" name="NomPays" VALUE="">
    <label class="mdl-textfield__label" for="sample3">NomPays...</label>
  </div></td>
  
    <td> 
		<div class="mdl-cell mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input class="mdl-textfield__input" type="text" id="sample3" name="Capitale"VALUE="">
    <label class="mdl-textfield__label" for="sample3">Capitale..</label>
  </div></td>
  
  <td> 
		<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input class="mdl-textfield__input" type="text" id="sample3" name="Langue"VALUE="">
    <label class="mdl-textfield__label" for="sample3">Langue...</label>
  </div></td>
  
  <td> 
		<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input class="mdl-textfield__input" type="text" id="sample3" name="Population"VALUE="">
    <label class="mdl-textfield__label" for="sample3">Population...</label>
  </div></td>
  
  <td> 
		<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input class="mdl-textfield__input" type="text" id="sample3" name="DateEntreeUE"VALUE="">
    <label class="mdl-textfield__label" for="sample3">Année d'entrée UE...</label>
  </div></td>
  
  <td> 
		<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input class="mdl-textfield__input" type="text" id="sample3" name="PIB"VALUE="">
    <label class="mdl-textfield__label" for="sample3">PIB/hab...</label>
  </div></td>
  
   <td> 
		<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input class="mdl-textfield__input" type="text" id="sample3" name="IDH">
    <label class="mdl-textfield__label" for="sample3">IDH...</label>
  </div></td>
	</tr>
	
	
	
	</tbody>
	</table>
 
	  <input type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect button-3 color-t" value="Inserer"
name="insert_pays" 	  >
	</form>
	  
      
    
	  
  
</input>
</form>
  </div>
  
  
  <div class="mdl-card__supporting-text" STYLE="margin-top:15px;">
  
  <b>Modifier des pays</b>
  <br><br>
    

      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
	<b>Pays</b>
   </div>
    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
	<b>Capitale</b>
   </div>
   <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
	<b>Langue</b>
   </div>
   <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
	<b>Population</b>
   </div>
   <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width:150px;">
	<b>Année d'entrée dans l'UE</b>
   </div>
   <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" >
	<b>PIB</b>
   </div>
   <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
	<b>IDH</b>
   </div>
        <?php foreach($bdd->query("SELECT * FROM pays")as $result_pays){	?>
		<form method="POST" action="">
		
	<input type="hidden" name="IDPays" value="<?php echo $result_pays['IDPays'];?>"></input>
	
		<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input class="mdl-textfield__input" type="text" name="NomPays" value="<?php echo $result_pays['NomPays'];?>" >
   
  </div>
         <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input class="mdl-textfield__input" type="text" name="Capitale" value="<?php echo $result_pays['Capitale'];?>">
			</div>
			
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input class="mdl-textfield__input" type="text" name="Langue" value="<?php echo $result_pays['Langue'];?>">
			</div>
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input class="mdl-textfield__input" type="text" name="Population" value="<?php echo $result_pays['Population'];?>">
			</div>
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" STYLE="width:150px;">
			<input class="mdl-textfield__input" type="text" name="DateEntreeUE" value="<?php echo $result_pays['DateEntreeUE'];?>">
			</div>
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" STYLE="width:90px;">
    <input class="mdl-textfield__input" type="text" name="PIB" value="<?php echo $result_pays['PIB'];?>">
			</div>
			</td>
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" STYLE="width:50px;">
    <input class="mdl-textfield__input" type="text" name="IDH" value="<?php echo $result_pays['IDH'];?>">
			</div>
			
 <input type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect button-4 color-t" value="Modifier" name="update_pays">
  
</input>
 <input type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect button-4 color-t" value="Supprimmer" name="delete_pays">
  
</input>
	
	</form>
	<?php } ?>
	
 
	  
	  
      
    
</form>
  </div>
  
  <BR><BR>
  

  
  
  
  
</div>

  <!-- FAB button with ripple -->
  
</div>
	









