


<?php include('header.php');?>

<?php if(isset($_SESSION['admin_connected'])){
	header('location:page_admin.php');};?>
	
			<button class=" 
	mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect buttonretour color-t" onclick="window.location='menujeux.php'"
			style="margin-top:10px;">Retour</button>
	
	
	<div class="mdl-cell mdl-cell--6-col center">
	<?php include('cadre_login_admin.php');?>
	
	</div>
  <?php include('footer.php');?>