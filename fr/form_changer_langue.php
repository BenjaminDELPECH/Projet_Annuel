<?php if(isset($_POST['langue'])){
	
	if($_POST['langue']==fr){
		$_SESSION['langue']=fr;
		header('location:fr/menujeux.php');}
	elseif($_POST['langue']==en){
		$_SESSION['langue']=en;
		header('location:en/menujeux.php');}

	
}
?>




<div class="center" style="margin-top:40px;">	
			<div  class="text1" style="font-size:29px;"><div>Veillez choisir la langue</div>
			<div style="margin-top:15px;">Please choose a language</div></div>
			
			<?php echo $_POST['language'];?>
			<div class="mdl-grid" style="margin-top:30px;">
			<div class="mdl-cell ">
			<form method="post" action="">
			<input type="hidden" name="langue" value="fr">
			<button type="submit" 
			class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect buttonretour color-t" style="margin-left:4px;">
				Français
			</button>
			</form>
			</div>
			
			
			<div class="mdl-cell">
			<form method="post" action="">
			<input type="hidden" name="langue" value="en">
			<button type="submit" 
			class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect buttonretour color-t" style="margin-left:4px;">
				Anglais
			</button>
			
			</div>
			</form>
			</div>
			

</div>