<?php include('header.php');?>
<?php include('insertion.php');?>

<?php if(!isset($_SESSION['admin_connected'])){header('location:page_login_admin.php');} ?>


			<button onclick="window.location='menujeux_fr?langue=Fr.php'" 
			class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect button-1 color-t" >
				Retour
			</button>
	
	
	<?php include('cadre_admin.php');?>
	
	
  <?php include('footer.php');?>