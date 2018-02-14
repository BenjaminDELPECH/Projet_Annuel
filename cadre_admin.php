<div class="mdl-cell mdl-cell--12-col ">

	

<div class="mdl-cell mdl-cell--5-col center demo-card-wide mdl-card mdl-shadow--2dp" style="HEIGHT:235px;">
  <div class="mdl-card__title">
    <h2 class="mdl-card__title-text">Insèrer une nouvelle question</h2>
  </div>
  
  
  <div class="mdl-card__supporting-text">

    <form action="">
      
      <div id="name">
  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input class="mdl-textfield__input" type="text" id="first" style="width:200PX" >
    <label class="mdl-textfield__label" for="sample3">Texte de la question</label>
  </div>
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input class="mdl-textfield__input" type="text" id="last" STYLE="margin-left:200px;" >
    <label class="mdl-textfield__label" for="sample3">Réponse à la question</label>
  </div>
      </div>
      
      
      
       
	  <input type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect button-3 color-t" value="Inserer"
name="insertion_pays_request" 	  >
  
</input>
</form>
  </div>
  
  
  
  


  <!-- FAB button with ripple -->
  
</div>









<div >

<div class="mdl-cell mdl-cell--7-col center demo-card-wide mdl-card mdl-shadow--2dp" style="height:auto;margin-top:15px;">
  
  
  
  
  
  <div class="mdl-card__title">
    <h2 class="mdl-card__title-text">Insèrer/modifier un pays</h2>
  </div>
  
    <div class="mdl-card__supporting-text">
<b>Indiquez les informations du Pays à ajouter</b>
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
    <label class="mdl-textfield__label" for="sample3">DateEntreeUE...</label>
  </div></td>
  
  <td> 
		<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input class="mdl-textfield__input" type="text" id="sample3" name="PIB"VALUE="">
    <label class="mdl-textfield__label" for="sample3">PIB...</label>
  </div></td>
  
   <td> 
		<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input class="mdl-textfield__input" type="text" id="sample3" name="IDH">
    <label class="mdl-textfield__label" for="sample3">IDH..</label>
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
  
  
  <div class="mdl-card__supporting-text" STYLE="overflow:auto;padding-right:50px;">
  
  <br>
    
	
	<table>
		<thead style="  font-weight: bold;"><tr><td>Pays</td>
				<td>Capitale</td>
				<td>Langue</td>
				<td>Population</td>
				<td>DateEntreeUE</td>
				<td>PIB</td>
				<td>IDH</td></tr>
				</thead>
      
		<tbody>
		<form method="POST" action="">
		<?php foreach($bdd->query("SELECT * FROM pays")as $result_pays){	?>
	<input type="hidden" name="IDPays" value="<?php echo $result_pays['IDPays'];?>"></input>
	<tr><td> 
		<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input class="mdl-textfield__input" type="text" name="NomPays" value="<?php echo $result_pays['NomPays'];?>" >
   
  </div></td>
          <td><div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input class="mdl-textfield__input" type="text" name="Capitale" value="<?php echo $result_pays['Capitale'];?>">
			</div>
			</td>
			<td><div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input class="mdl-textfield__input" type="text" name="Langue" value="<?php echo $result_pays['Langue'];?>">
			</div>
			</td>
			<td><div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input class="mdl-textfield__input" type="text" name="Population" value="<?php echo $result_pays['Population'];?>">
			</div>
			</td>
			<td><div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" STYLE="width:150px;">
    <input class="mdl-textfield__input" type="date" name="DateEntreeUE" value="<?php echo $result_pays['DateEntreeUE'];?>">
			</div>
			</td>
			<td><div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" STYLE="width:90px;">
    <input class="mdl-textfield__input" type="text" name="PIB" value="<?php echo $result_pays['PIB'];?>">
			</div>
			</td>
			<td><div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" STYLE="width:50px;">
    <input class="mdl-textfield__input" type="text" name="IDH" value="<?php echo $result_pays['IDH'];?>">
			</div>
			</td>
  <td><input type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect button-4 color-t" value="Modifier" name="update_pays"
	  >
  
</input></td>
	</tr>
	</form>
	<?php } ?>
	</tbody>
	</table>
 
	  
	  
      
    
</form>
  </div>
  
  <BR><BR>
  

  
  
  
  
</div>

  <!-- FAB button with ripple -->
  
</div>
</div>


























