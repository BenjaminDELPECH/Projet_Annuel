<?php 

$limite_nb_question=5;



for ($x = 1; $x <= $limite_nb_question; $x++) {
  
  $number_rand = rand(1,100);
  $_SESSION['coeff'][$x]= $_SESSION['coeff'][$x]*$number_rand;
	  
	
  }
  





$IDChoisie =2;

foreach($bdd->query("Select * From questions Where IDquestion like '$IDChoisie'")as $result){
}
;?>