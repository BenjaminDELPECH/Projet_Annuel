<?php 
if (isset($_POST['login_request'])){
		$login=$_POST['login'];
		$password=$_POST['password'];
		
		
		if ((gettype ($login) == 'string') and (gettype ($password) == 'string'))
	{
		$query_login = $bdd->prepare("SELECT * FROM professeur  WHERE login like '".$login."' and password like '".$password."' ");
		$query_login->execute();
		foreach($query_login as $result){}
		
		}
		
if(isset($result)){
	$_SESSION['admin_connected']=1;
	header('location:page_admin.php');
}
		
}
?>


<div id ="mycard">

<div class="demo-card-wide mdl-card mdl-shadow--2dp ">
  <div class="mdl-card__title color-t">
    <h2 class="mdl-card__title-text ">Veillez rentrez vos identifiants</h2>
  </div>
  
  
  <div class="mdl-card__supporting-text">
   
    <form action="" method="POST">
      
      <div id="name">
  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input class="mdl-textfield__input" type="text" name="login">
    <label class="mdl-textfield__label" for="sample3">Nom de compte</label>
  </div>
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input class="mdl-textfield__input" type="text" name="password">
    <label class="mdl-textfield__label" for="sample3">Mot de passe</label>
  </div>
      <input type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect button-3 color-t" value="connexion"
name="login_request" 	  >
  
</input>
	  
	 
     
</form>
  </div>
  
  
  
  
</div>
</div>
  <!-- FAB button with ripple -->
  
</div>