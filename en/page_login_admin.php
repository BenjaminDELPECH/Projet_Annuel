<?php session_start();
$_SESSION['title']="Login admin";
?>



<?php include('header.php');?>

<?php if($_SESSION['admin_connected']==1){header('location:page_admin.php');} ?>

	
			<button onclick="window.location='menujeux_fr?langue=Fr.php'" 
			class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect button-1 color-t" >
				Retour
			</button>
	
	<div class="mdl-cell mdl-cell--6-col center">
	<?php include('cadre_login_admin.php');?>
	
	</div>
  <?php include('footer.php');?>